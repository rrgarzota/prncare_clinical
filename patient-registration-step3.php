<!DOCTYPE html>
<html lang="en">

<head>

    <?php include_once './partials/header-public.php' ?>
    <link rel="stylesheet" href="./assets/css/template-style.css">
    <link rel="stylesheet" href="./assets/css/multistep.css">
    <style>
        .schedule-container thead th:nth-child(5),
        .schedule-container tbody tr td:nth-child(5),
        .schedule-container [data-cb-cell-name^="EditRecordMA_LU_Frequency_Number"],
        .schedule-container [data-cb-cell-name^="EditRecordMA_LU_Frequency_Number"] + div{
            display: none;
        }
    </style>

</head>

<body class="public">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center h-v100 d-flex align-items-center">
            <div class="col-12">
                <div class="text-center pt-5">
                    <h1>Join Prncare</h1>
                    <h5>Complete the steps below to set up your account, enter your medication details, and<br> configure your medication schedule and guardian alerts. We're here to support your<br> journey to better health.</h5>
                </div>
                <!-- Default box -->
                <section class="multi_step_form mb-5">
                    <div id="msform">
                        <div class="center-aligned-card-1200">
                            <ul id="progressbar" class="pl-0 d-none d-md-flex">
                                <li class="active done one">Personal Details</li>  
                                <li class="active done two">Medication Details</li>
                                <li class="active three">Schedule & Guardian</li>
                            </ul>
                            <div class="d-block d-md-none">
                                <div class="bar">
                                    <span class="bar-circle one done"></span>
                                    <span class="bar-circle two done"></span>
                                    <span class="bar-circle three active"></span>
                                </div>
                                <div>
                                    <p>Step <strong>3</strong> of 3</p>
                                </div>
                            </div>    

                            <div class="card shadow my-4 border hide-submit-btn">
                                <div class="card-body blue-theme pt-4 pb-5">
                                    <div class="alert alert-custom-warning-black mt-20 mb-5 shadow-sm px-3 py-3 rounded-0 text-left" role="alert"><i class="fas fa-info-circle"></i>
                                        <p class="lh-20 mb-0 default-message">In order to complete your registration, please ensure you add at least one guardian and provide the required schedules.</p>
                                    </div>
                                    <div class="schedule-section">
                                        <h5 class="section-header mt-0 text-left mt-3">SCHEDULE</h5>
                                        <div class="alert alert-custom-warning-black mt-20 mb-3 shadow-sm px-3 py-3 rounded-0 text-left" role="alert"><i class="fas fa-info-circle"></i>
                                            <p class="lh-20 mb-0 default-message">Set up your medication schedule and ensure the number of schedules matches the prescribed frequency (e.g., if you take a medication twice daily, input two schedules).</p>
                                        </div>
                                        <fieldset>
                                            <div class="patient-details-cont">
                                                <div class="alert-custom-danger-validation d-none">
                                                    <ul class="schedule-error-cont mb-0"></ul>
                                                </div>
                                                <div class="create-form d-none text-left schedule-container edit-delete-btn dp-container d-none">
                                                    <script type="text/javascript" src="https://c9ebv091.caspio.com/dp/40c0e000afcd3e40969c4c0e84be/emb"></script>
                                                    <script type="text/javascript" src="https://c9ebv091.caspio.com/dp/40c0e000de74ea80972e4486947d/emb"></script>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="guardian-section">
                                        <h5 class="section-header mt-0 text-left mt-3">GUARDIAN MANAGEMENT</h5>
                                        <div class="alert alert-custom-warning-black mt-20 mb-3 shadow-sm px-3 py-3 rounded-0 text-left" role="alert"><i class="fas fa-info-circle"></i>
                                            <p class="lh-20 mb-0 default-message">Add guardians to receive medication alerts if you miss a dose.</p>
                                        </div>
                                        <fieldset>
                                            <div class="patient-details-cont">
                                                <div class="create-form d-none text-left guardian-container edit-delete-btn dp-container d-none">
                                                    <script type="text/javascript" src="https://c9ebv091.caspio.com/dp/40c0e000474588b829064cb89812/emb"></script>
                                                </div>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <div class="row">
                                            <div class="col-12 col-md-6 text-left d-flex align-items-center">
                                                <div class="  d-none d-md-block">
                                                    <p class="mb-0">Step <strong>3</strong> of 3</p>

                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 text-right">
                                                <button type="button" class="action-button previous previous_button my-1">Back</button>
                                                <button type="button" class="action-button finish-button my-1 disabled" >Finish</button>
                                            </div>
                                        </div>

                                    </div>
                                    
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>

                        <!-- fieldsets -->

                    </div>
                </section>

                <!-- /.card -->
                <!-- </div>
                        </div> -->

            </div>
        </div>
    </div>

    <?php include_once './partials/footer-public.php' ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>

    <script>

        // var $finishBtn = $('.finish-button');

        // $finishBtn.on("click", function() {

        //     window.location.href = "./success-page.php?page=doctor-registration";

        // });



        var url = new URL(window.location.href);
        var page_search_params = url.searchParams;
        var Step1 = page_search_params.get('Step1');
        var Step2 = page_search_params.get('Step2');
        var UID = page_search_params.get('UID');
        var $createForm = $('.patient-details-cont').find('.create-form');
        var $updateForm = $('.update-form');
        var $defaultMsg = $('.default-message');
        var $progressbar = $('#progressbar').find('.one');
        var $nextBtn = $('.next.action-button');

        if (
        
                (Step1 !== undefined && Step1 != null && Step1 != '') 
            
            && 

            (Step2 !== undefined && Step2 != null && Step2 != '') 
            
            && 
        
                (UID !== undefined && UID != null && UID != '')
            
        ) {

            if ($createForm.hasClass('d-none')) {
                $createForm.removeClass('d-none');
            }
            $nextBtn.on("click", function(){

                $('.cbSubmitButton').click();

            });
            
        } else {
            
        }


        var $prevBtn = $('.previous_button');

        $prevBtn.on("click", function() {

            let url = "./patient-registration-step2.php?" + page_search_params;

            if (!url.includes('&cbResetParam=1')) {
                url += '&cbResetParam=1';
            }

            window.location.href = url;

        });

        $(function(){
            var dpCount = 0;
            var $dpContainer = $('.dp-container');   
            var scheduleTrNumber = false;
            var guardianTrNumber = false;   

            document.addEventListener('DataPageReady', function (event) {

                if (event.detail.appKey == '40c0e000afcd3e40969c4c0e84be' || event.detail.appKey == '40c0e000de74ea80972e4486947d' || event.detail.appKey == '40c0e000474588b829064cb89812') {
                    dpCount++;
                }                

                if (dpCount == 3) {
                    $dpContainer.removeClass('d-none');
                }

                // On insert event of Schedule tabular report
                if (event.detail.appKey == '40c0e000de74ea80972e4486947d') {
                    window.cbAjaxEventHandler.addEventListener('GetRowData', function(v_event){   
                        if (v_event.data.AppKey == '40c0e000de74ea80972e4486947d'){

                            $("[name='InlineEditMA_Patient_Medication_Schedule_Hours']").attr({'type': 'number', 'min': '0', 'max': '12'});
                            $("[name='InlineEditMA_Patient_Medication_Schedule_Minutes']").attr({'type': 'number', 'min': '0', 'max': '59'});

                            
                            $("[name='InlineEditMA_Patient_Medication_Schedule_Hours']").on("input", function () {
                                formatDateTime('edit');
                            });
                            $("[name='InlineEditMA_Patient_Medication_Schedule_Minutes']").on("input", function () {
                                formatDateTime('edit');
                            });
                            $("[name='InlineEditMA_Patient_Medication_Schedule_Period_ID']").on("change", function () {
                                formatDateTime('edit');
                            });

                        }
                    });

                    function formatDateTime(type) {
                        // Get values from input fields
                        var $addButton = $('.cbResultSetAddButton');
                        var $errorCont = $('.schedule-error-cont');
                        var $errorContMain = $('.alert-custom-danger-validation');
                        // Get today's date
                        var today = new Date();                        
                        // Format the date as MM/DD/YYYY
                        var formattedDate = (today.getMonth() + 1).toString().padStart(2, '0') + '/' +
                                            today.getDate().toString().padStart(2, '0') + '/' +
                                            today.getFullYear();

                        // var date = $("#date").val();
                        var hourInput = parseInt($("[name*='MA_Patient_Medication_Schedule_Hours']").val(), 10);
                        var minuteInput = parseInt($("[name*='MA_Patient_Medication_Schedule_Minutes']").val(), 10);
                        var period = $("[name*='MA_Patient_Medication_Schedule_Period_ID'] option:selected").text();
                        var $dateTime = $("[name='InlineAddMA_Patient_Medication_Schedule_Date_Time']");

                        if (type == 'edit') {
                            var hourInput = parseInt($("[name='InlineEditMA_Patient_Medication_Schedule_Hours']").val(), 10);
                            var minuteInput = parseInt($("[name='InlineEditMA_Patient_Medication_Schedule_Minutes']").val(), 10);
                            var period = $("[name='InlineEditMA_Patient_Medication_Schedule_Period_ID'] option:selected").text();
                            var $dateTime = $("[name='InlineEditMA_Patient_Medication_Schedule_Date_Time']");
                        }

                        $addButton.addClass('disabled');
                        $errorCont.text('');

                        let isValid = true;

                        // Check if inputs are within the allowed range
                        if (isNaN(hourInput) || hourInput < 0 || hourInput > 12) {
                            $errorCont.append("<li class='error'>Invalid hours! Please enter a value between 0 and 12.</li>");
                            if($errorContMain.hasClass('d-none')) {
                                $errorContMain.removeClass('d-none');
                            }
                            isValid = false;
                        }

                        if (isNaN(minuteInput) || minuteInput < 0 || minuteInput > 59) {
                            $errorCont.append("<li class='error'>Invalid minutes! Please enter a value between 0 and 59.</li>");
                            if($errorContMain.hasClass('d-none')) {
                                $errorContMain.removeClass('d-none');
                            }
                            isValid = false;
                        }

                        if (isValid) {
                            // Combine the time inputs
                            const timeString = `${hourInput}:${minuteInput} ${period}`;
                            const combinedDateTime = `${formattedDate} ${timeString}`;

                            // Format using Moment.js
                            const formattedDateTime = moment(combinedDateTime, "MM/DD/YYYY h:mm A").format("MM/DD/YYYY HH:mm:ss");

                            // Display the result
                            $dateTime.val(formattedDateTime);
                            if(!$errorContMain.hasClass('d-none')) {
                                $errorContMain.addClass('d-none');
                            }
                        } else {
                            $dateTime.val(''); // Clear output if errors exist
                        }

                        
                    }

                    $("[name='InlineAddMA_Patient_Medication_Schedule_Hours']").attr({'type': 'number', 'min': '0', 'max': '12'});
                    $("[name*='MA_Patient_Medication_Schedule_Minutes']").attr({'type': 'number', 'min': '0', 'max': '59'});

                    $("[name*='MA_Patient_Medication_Schedule_Hours']").on("input", function () {
                        formatDateTime('add');
                    });
                    $("[name*='MA_Patient_Medication_Schedule_Minutes']").on("input", function () {
                        formatDateTime('add');
                    });
                    $("[name*='Patient_Medication_Schedule_Period_ID']").on("change", function () {
                        formatDateTime('add');
                    });

                    
                    // var $divCont = $('.schedule-container').find('[id*="cbOuterAjaxCtnr"]:eq(1)');
                    // var $form = $divCont.find('#caspioform');
                    var $scheduleCont = $('.schedule-container');
                    var $resultTable = $scheduleCont.find('[data-cb-name="cbTable"]');
                    var resultTr = $resultTable.find('tbody tr[data-cb-name="data"]').length;
                    var $inlineAdd = $scheduleCont.find('[data-cb-name="inlineaddrow"]');
                    var $norecordsfound = $scheduleCont.find('[id*="RecordMessageTop"]');
                    var frequencyNumber = $('.frequency-number').text();

                    if(!$inlineAdd.hasClass('d-none')) {
                        $inlineAdd.addClass('d-none');
                    }

                    if ($norecordsfound.text() === 'No records found.') {
                        if($inlineAdd.hasClass('d-none')) {
                            $inlineAdd.removeClass('d-none');
                        }
                    } else {

                        if (frequencyNumber > resultTr) {
                            if($inlineAdd.hasClass('d-none')) {
                                $inlineAdd.removeClass('d-none');
                            }
                        }

                        if (frequencyNumber == resultTr) {
                            validateTrNumber(scheduleTrNumber = true, guardianTrNumber);
                        } else {
                            validateTrNumber(scheduleTrNumber = false, guardianTrNumber);
                        }
                        
                        
                    }

                    window.cbAjaxEventHandler.addEventListener('DeleteRow', function(v_event){   
                        if (v_event.data.AppKey == '40c0e000de74ea80972e4486947d'){
                            var $resultTable = $scheduleCont.find('[data-cb-name="cbTable"]');
                            var resultTr = $resultTable.find('tbody tr[data-cb-name="data"]').length;
                            if (frequencyNumber == resultTr) {
                                validateTrNumber(scheduleTrNumber = true, guardianTrNumber);
                            } else {
                                validateTrNumber(scheduleTrNumber = false, guardianTrNumber);
                            }
                        }
                    });

                    window.cbAjaxEventHandler.addEventListener('InsertRow', function(v_event){   
                        if (v_event.data.AppKey == '40c0e000de74ea80972e4486947d'){
                            var $resultTable = $scheduleCont.find('[data-cb-name="cbTable"]');
                            var resultTr = $resultTable.find('tbody tr[data-cb-name="data"]').length;
                            var resultTr = $resultTable.find('tbody tr[data-cb-name="data"]').length;
                            if (frequencyNumber == resultTr) {
                                validateTrNumber(scheduleTrNumber = true, guardianTrNumber);
                            } else {
                                validateTrNumber(scheduleTrNumber = false, guardianTrNumber);
                            }
                        }
                    });




                } //event end

                

                // Guardian DataPage
                if (event.detail.appKey == '40c0e000474588b829064cb89812') {
                    var $guardianCont = $('.guardian-container');
                    var $resultTable = $guardianCont.find('[data-cb-name="cbTable"]');
                    var resultTr = $resultTable.find('tbody tr[data-cb-name="data"]').length;

                    if (resultTr > 0) {
                        validateTrNumber(scheduleTrNumber, guardianTrNumber = true);
                    }else {
                        validateTrNumber(scheduleTrNumber, guardianTrNumber = false);
                    }

                    window.cbAjaxEventHandler.addEventListener('DeleteRow', function(v_event){  
                        var $resultTable = $guardianCont.find('[data-cb-name="cbTable"]');
                        var resultTr = $resultTable.find('tbody tr[data-cb-name="data"]').length; 
                        if (v_event.data.AppKey == '40c0e000474588b829064cb89812'){
                            if (resultTr > 0) {
                                validateTrNumber(scheduleTrNumber, guardianTrNumber = true);
                            }
                        }else {
                            validateTrNumber(scheduleTrNumber, guardianTrNumber = false);
                        }
                    });

                    window.cbAjaxEventHandler.addEventListener('InsertRow', function(v_event){ 
                        var $resultTable = $guardianCont.find('[data-cb-name="cbTable"]');
                        var resultTr = $resultTable.find('tbody tr[data-cb-name="data"]').length;   
                        if (v_event.data.AppKey == '40c0e000474588b829064cb89812'){
                            if (resultTr > 0) {
                                validateTrNumber(scheduleTrNumber, guardianTrNumber = true);
                            }
                        }else {
                            validateTrNumber(scheduleTrNumber, guardianTrNumber = false);
                        }
                    });
                    

                }

                

                
                
            });

            function validateTrNumber(scheduleTrNumber = false, guardianTrNumber = false){
                var $finishBtn = $('.finish-button');
                if (!$finishBtn.hasClass('disabled')) {
                    $finishBtn.addClass('disabled');
                }
                $finishBtn.addClass('disabled');


                if (scheduleTrNumber && guardianTrNumber) {

                    $finishBtn.removeClass('disabled');

                    $finishBtn.on("click", function() {

                        window.location.href = "./success-page.php?page=patient-registration";

                    });
                }
            }
            // function validateGuardianTrNumber(guardianTrNumber = false){
            //     console.log(guardianTrNumber);
            //     if (guardianTrNumber) {
            //         validateAll(guardianTrNumber);
            //     }
            // }

            // function validateAll() {

            // }

            // }

            // if (scheduleTrNumber) {
            //     console.log(scheduleTrNumber);
            // }

// console.log('scheduleValidation: ' + scheduleValidation.frequencyNumber);
// console.log(scheduleValidation[0]);
// console.log('scheduleValidation: ' + scheduleValidation[0].frequencyNumber);
// console.log('scheduleValidation: ' + scheduleValidation[0].scheduleTrNumber);

            // if (scheduleValidation[0].frequencyNumber != undefined && scheduleValidation[0].scheduleTrNumber != undefined) {
            //     console.log('complete');
            // }
        })
    </script>


</body>

</html>