$admin_status = '';
$terminate_loop = FALSE;
$administration_type = '';
$schedule_loop = 0;
$alert_message = '';
$error = yes;
$skip_loop = false;

foreach $schedule {
    $med_intake_actual_time (in minutes) = $this->schedule - target.device_trigger time;
    $valid_max_med_intake_time = 180 minutes;
    $for_schedule = $this->schedule; -- determine the schedule for this record--
    $schedule_loop += 1;

    if $terminate_loop = false {
        if ($med_intake_actual_time <= $valid_max_med_intake_time AND $med_intake_actual_time >= 0) {
            -- (within 180 min or 3 hours after the schedule - if the result is '-' then he took it earlier) --

            $get_previous_record_ID = get top 1 ID from reports where patient = $patient, medication_type = $medication_type and data_schedule = $for_schedule, trigger_time = date today order by report.ID desc

            $previous_record_device_ID = get top 1 Device_ID from reports where ID = $get_previous_record_ID
            $previous_record_med_intake_actual_time = get top 1 med_intake_actual time from reports where ID = $get_previous_record_ID

            if ($get_previous_record_ID is blank) {
                -- first record for the medication, no comparison needed -- 
                $admin_status = 'correct dose'
                $terminate_loop = true
            } else {
                if ($administration_type == 'single' || ($previous_record_device_ID is not blank && previous_record_device_ID == #inserted.Device_ID)) {
                    -- do nothing since we can record 1 correct only per session for each medication--
                    $admin_status = 'skip'
                    $terminate_loop = true
                } else if ($administration_type == 'multiple' && ($previous_record_device_ID is not blank && previous_record_device_ID != #inserted.Device_ID)) {
                    -- multiple medication and there is a previous record but different medication--
                    -- validation is per device, if prev device is different, it will evaluate again --

                    if (($previous_record_med_intake_actual_time + 5) <= $med_intake_actual_time) {
                        $admin_status = 'correct dose'
                        $terminate_loop = true
                    } else {
                        $admin_status = 'incorrect - 5 min'
                        $terminate_loop = true
                    }

                }                    
            }
        } else {
            -- not within 3 hours of the current schedule loop --
                
            $get_next_schedule = select schedule from medication_schedule where Patient_Medication_Details_ID = $Patient_Medication_Details_ID AND device_id = $inserted.device_id AND ID > $shedules->ID ORDER BY ID LIMIT 1

            <!-- check for inbetween or last schedule -->
            if (trigger_time >= $for_schedule && trigger_time <= $get_next_schedule || $get_next_schedule is blank && trigger_time >= $for_schedule) {
                <!-- check if there is no correct record for this medication -->
                    $existing_correct_record = get top 1 ID from reports where patient = $patient, device_id = #inserted.device_id, medication_type = $medication_type and data_schedule = $for_schedule, trigger_time = date today , status = correct order by report.ID desc

                    if ($existing_correct_record is blank) {
                    $admin_status = 'missed dose'
                    $terminate_loop = true
                    } else {
                    $admin_status = 'extra dose'
                    $terminate_loop = true
                    }
            } else {
                <!-- skip to next schedule -->
            }

        }
    } else {

        if ($skip_loop == false) {

            if ($admin_status == correct) {
                $error = no;
                -- stop loop --
            } else if ($admin_status == skip) {
                -- stop loop--
            } else if ($admin_status == incorrect) {
                $alert_message = 'incorrect $schedule dose. Mind the 5 minutes interval.'
                -- stop loop--
            } else if ($admin_status == missed dose) {
                $alert_message = 'missed $schedule dose.'
                -- stop loop--
            }  else if ($admin_status == extra dose) {
                $alert_message = 'extra dose detected at trigger_time.'
                -- stop loop--
            }

            if ($admin_status !== skip) {
                Insert into Report $admin_status, #inserted.Trigger_Time, $for_schedule, $alert_message, $error
            }
            
            <!-- calendar source - 1 record per date -->
            if ($admin_status !== skip && $admin_status !== correct) {
                $existing_error_per_patient = get ID from Medication_Errors_Per_Patient where Patient_Medication_Details_ID = $Patient_Medication_Details_ID and trigger_time = today

                if ($existing_error_per_patient is blank) {
                    Insert into Medication_Errors_Per_Patient $admin_status, date, Patient_Medication_Details_ID
                }

                $existing_error_per_device = get ID from Medication_Errors_Per_Device where device_ID = #inserted.device_id and trigger_time = today

                if ($existing_error_per_device is blank) {
                    Insert into Medication_Errors_Per_Device $admin_status, date, device_id
                }

            }
            
            dump processed records in Device
            Device_Reports
            All details from Device
            Status = processed

            delete #inserted

            $skip_loop = true;

        }
        
    }
    
    

}