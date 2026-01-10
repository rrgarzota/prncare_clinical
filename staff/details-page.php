<!DOCTYPE html>
<html lang="en">

<head>

    <?php include '../partials/header.php'; ?>
    <title>Staff: Details Page</title>

</head>

<body class="hold-transition layout-sidebar ">

    <!-- A div that wraps the whole site -->
    <div class="wrapper">

        <!-- Contains the logo and navbar -->
        <?php include '../partials/topbar.php'; ?>
        <!-- Contains the user panel and sidebar menu -->
        <?php include '../partials/staff-sidebar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mt-2 mb-1">
                        <div class="col-sm-6">
                            <h1>Medication Alerts and Summary Details</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php?cbResetParam=1">View Alerts</a></li>
                                <li class="breadcrumb-item active">Details</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid pt-3">
                    <div class="row">
                        <div class="col-12 col-xl-8 offset-xl-2 mb-30">
                            <!-- Default box -->
                            <div class="card center-aligned-card shadow my-4">
                                <div class="card-body blue-theme alert-details">
                                    <div class="card-custom-header">
                                        <i class="fas fa-file-invoice fs-40"></i>
                                    </div>
                                    <div class="card-custom-body pb-0">
                                        <div class="row">
                                            <div class="col-12 medication-container-final">
                                                <!-- Medication alerts here -->
                                            </div>
                                            <div class="col-12 medication-container d-none">
                                                <!-- medication container -->
                                                <!-- <script type="text/javascript" src="https://c9ebv091.caspio.com/dp/40c0e0004170404901a74785827d/emb"></script>                                                 -->
                                                <script type="text/javascript" src="https://c9ebv091.caspio.com/dp/40c0e000de7bfd299faf4350882d/emb"></script>
                                                <!-- end medication container -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- footer -->
        <?php include '../partials/footer.php'; ?>
        <script>
            $(function() {
                setActiveNav('alerts');
            });

            // Generate the medication alert details by scraping data from DataPage table
            // document.addEventListener('DataPageReady', function (event) {
            //     var $caspioTableContainer = $('.medication-container');

            //     if ($caspioTableContainer.find('[id^="RecordMessageTop"]').text() !== 'No records found.') {

            //         var $caspioTable = $caspioTableContainer.find('[data-cb-name="cbTable"]');
            //         var $caspiotheader = $caspioTable.find('.cbResultSetTableHeader th > a');
            //         var $caspiotbodyTr = $caspioTable.find('tbody tr.cbResultSetGroup1Row').not('.cbResultSetTotalsRow');
            //         var $mainCont = $('.medication-container-final');

            //         $caspiotbodyTr.each(function(index, elem){

            //             $mainCard = $('<div>', {
            //                 'class': 'card mt-4 mb-5 border'
            //             });
            //             $mainCardBody = $('<div>', {
            //                 'class': 'card-body pt-4 pb-5'
            //             })
            //             $rowContainer = $('<div>', {
            //                 "class": 'row form-container'
            //             });
            //             $dateDivCont = $('<div>',{
            //                 "class": 'text-right'
            //             });
            //             $colFormContainer = $('<div>',{
            //                 "class": 'col-md-10 col-12'
            //             });
            //             $colImageContainer = $('<div>',{
            //                 "class": 'col-md-2 col-12'
            //             });
            //             $imageContainer = $('<div>',{
            //                 "class": 'rx-image-container'
            //             });
            //             $image = $('<img>',{
            //                 "class": 'img-rx',
            //                 "src": '../assets/img/rx-image.png'
            //             });
            //             $rowFormContainer = $('<div>',{
            //                 "class": 'row'
            //             });
            //             $hrMobile = $('<hr>',{
            //                 "class": 'd-md-none d-lg-none d-xl-none d-xxl-none line-divider-break'
            //             });

            //             $pContSectionHeader = $('<div>',{
            //                 "class": 'section-header',
            //                 'text': 'Medication Alerts'
            //             });
            //             $rowAlerts = $('<div>',{
            //                 "class": 'row'
            //             });
            //             $medicationName = $(this).find('td').text();

            //             $trSiblings = $(this).nextUntil('tr.cbResultSetGroup1Row');

            //             $alertText = '';
            //             schedule = '';

            //             $trSiblings.each(function(indexTr, elemTr){
            //                 $trSiblings = $(this).nextUntil('tr.cbResultSetGroup1Row');

            //                 $td = $(this).find('td');
            //                 $medicationDetailsCont = '';
            //                 $colAlerts = $('<div>',{
            //                     "class": 'col-12'
            //                 });
            //                 $alertType = 'danger';
            //                 $icon = '<span><i class="fas fa-times-circle"></i></span>';
            //                 $divWarningAlertsContainer = $('<div>',{
            //                     "class": 'alert alert-custom-'+ $alertType +' mt-20 mb-0 shadow-sm px-3 py-2 rounded-0',
            //                     'role': 'alert'
            //                 });
            //                 triggerTime = '';                            

            //                 // first record - main details
            //                 if (indexTr==0) {

            //                     $td.each(function(indexTd, elemTd){
            //                         $label = $('<label>', {
            //                             "class": 'col-md-3 col-12 form-label'
            //                         });
            //                         $valueDiv = $('<div>',{
            //                             "class": 'col-md-9 col-12'
            //                         })
            //                         $valueCont = $('<p>',{
            //                             "class": 'form-control-plaintext'
            //                         });
            //                         $dateCont = $('<p>',{
            //                             'class': 'date-cont'
            //                         });

            //                         if (indexTd == 0) {
            //                             $label.text('Medication Name');
            //                             $valueCont.text($medicationName);
            //                         } else if (indexTd == 1) {
            //                             // date
            //                             var url = new URL(window.location.href);
            //                             var search_params = url.searchParams;
            //                             var date =  search_params.get('Date');
            //                             var dateText = '';

            //                             if (date !== null || date !== '') {
            //                                 dateText = date;
            //                             }

            //                             $dateCont.text(dateText);
            //                             $dateDivCont.append($dateCont);
            //                             $dateDivCont.append('<hr>');

            //                             triggerTime = $(this).text();
            //                         } else if (indexTd == 2) {
            //                             $label.text('Dosage');
            //                             $valueCont.text($(this).text());
            //                         } else if (indexTd == 3) {
            //                             $label.text('Schedule');
            //                             $valueCont.text($(this).text());
            //                         } else if (indexTd == 4) {
            //                             schedule = $(this).text();
            //                         } else {
            //                             // alert message
            //                             if ($(this).text().startsWith('Missed')) {
            //                                 $alertType = 'warning';
            //                                 $icon = '<span><i class="fas fa-exclamation-circle"></i></span>';
            //                                 $alertText = 'Missed ' + schedule + ' dose.'

            //                                 $divWarningAlertsContainer = $('<div>',{
            //                                     "class": 'alert alert-custom-'+ $alertType +' mt-20 mb-0 shadow-sm px-3 py-2 rounded-0',
            //                                     'role': 'alert'
            //                                 });
            //                             } else if ($(this).text().startsWith('Extra')) {
            //                                 $alertText = 'Extra dose detected at ' + triggerTime + '.'
            //                             }else if ($(this).text().startsWith('Incorrect')) {
            //                                 $alertType = 'warning';
            //                                 $icon = '<span><i class="fas fa-exclamation-circle"></i></span>';
            //                                 $alertText = 'Incorrect dose detected at ' + triggerTime + '. Please ensure a 2-minute interval between each medication intake.'
            //                                 $divWarningAlertsContainer = $('<div>',{
            //                                     "class": 'alert alert-custom-'+ $alertType +' mt-20 mb-0 shadow-sm px-3 py-2 rounded-0',
            //                                     'role': 'alert'
            //                                 });
            //                             } else if ($(this).text().startsWith('Not')) {
            //                                 $alertText = 'No recorded times (missed dose).'
            //                             }

            //                             $divWarningAlertsContainer.append($icon);
            //                             $divWarningAlertsContainer.append($alertText);

            //                         }

            //                         if (indexTd < 4 && indexTd !== 1) {
            //                             $valueDiv.append($valueCont);
            //                             $rowContainer.append($label);
            //                             $rowContainer.append($valueDiv);
            //                         } else if (indexTd == 5){
            //                             $colAlerts.append($divWarningAlertsContainer);
            //                         }         


            //                     })
            //                 } else {
            //                     // get alert message only for records with more than 1 alerts
            //                     $td.each(function(indexTd, elemTd){

            //                         if (indexTd == 1) {
            //                             triggerTime = $(this).text();
            //                         } else if (indexTd == 4) {
            //                             schedule = $(this).text();
            //                         } else if (indexTd == 5) {                                        

            //                             if ($(this).text().startsWith('Missed')) {
            //                                 $alertType = 'warning';
            //                                 $icon = '<span><i class="fas fa-exclamation-circle"></i></span>';
            //                                 $alertText = 'Missed ' + schedule + ' dose.'

            //                                 $divWarningAlertsContainer = $('<div>',{
            //                                     "class": 'alert alert-custom-'+ $alertType +' mt-20 mb-0 shadow-sm px-3 py-2 rounded-0',
            //                                     'role': 'alert'
            //                                 });

            //                             } else if ($(this).text().startsWith('Extra')) {
            //                                 $alertText = 'Extra dose detected at ' + triggerTime + '.'
            //                             } else if ($(this).text().startsWith('Incorrect')) {
            //                                 $alertType = 'warning';
            //                                 $icon = '<span><i class="fas fa-exclamation-circle"></i></span>';
            //                                 $alertText = 'Incorrect dose detected at ' + triggerTime + '. Please ensure a 2-minute interval between each medication intake.'

            //                                 $divWarningAlertsContainer = $('<div>',{
            //                                     "class": 'alert alert-custom-'+ $alertType +' mt-20 mb-0 shadow-sm px-3 py-2 rounded-0',
            //                                     'role': 'alert'
            //                                 });
            //                             } else if ($(this).text().startsWith('Not')) {
            //                                 $alertText = 'No recorded times (missed dose).'
            //                             }

            //                             $divWarningAlertsContainer.append($icon);
            //                             $divWarningAlertsContainer.append($alertText);
            //                             $colAlerts.append($divWarningAlertsContainer);
            //                         }

            //                     })

            //                 }

            //                 $imageContainer.append($image);
            //                 $colImageContainer.append($imageContainer);                        
            //                 $rowFormContainer.append($colImageContainer);

            //                 $colFormContainer.append($rowContainer);
            //                 $rowFormContainer.append($colFormContainer);

            //                 $mainCardBody.append($dateDivCont);
            //                 $mainCardBody.append($rowFormContainer);
            //                 $mainCardBody.append($hrMobile);
            //                 $mainCardBody.append($pContSectionHeader);

            //                 $rowAlerts.append($colAlerts);
            //                 $mainCardBody.append($rowAlerts);

            //                 $mainCard.append($mainCardBody);

            //                 $mainCont.append($mainCard);

            //             })

            //         })

            //     } else {
            //         $caspioTableContainer.removeClass('d-none');
            //     }

            // });
            document.addEventListener("DataPageReady", function() {
                const $caspioTableContainer = $(".medication-container");
                const $mainCont = $(".medication-container-final").empty();

                // Robust empty check
                const recordMsg = ($caspioTableContainer.find('[id^="RecordMessageTop"]').text() || "").trim();
                const $table = $caspioTableContainer.find('[data-cb-name="cbTable"]');

                if (!$table.length || recordMsg === "No records found.") {
                    // NOTE: your HTML currently uses "d-non" (typo) not "d-none"
                    $caspioTableContainer.removeClass("d-none");
                    return;
                }

                // Date from URL (?Date=...)
                const url = new URL(window.location.href);
                const dateParam = url.searchParams.get("Date");
                const dateText = dateParam !== null && dateParam !== "" ? dateParam : "";

                // Helpers
                const getCellText = ($row, idx) => {
                    const $td = $row.find("td").eq(idx);
                    if (!$td.length) return "";
                    const $time = $td.find("time");
                    return ($time.length ? $time.text() : $td.text()).trim();
                };

                function buildAlertFromRow($row) {
                    // Column map (0..8)
                    // 0: (blank group-left)
                    // 1: Trigger Time
                    // 2: Dosage
                    // 3: Schedule
                    // 4: Error Schedule
                    // 5: Status
                    // 6: Is Overdose
                    // 7: Left Eye Med Count
                    // 8: Right Eye Med Count

                    const triggerTime = getCellText($row, 1);
                    const errorSchedule = getCellText($row, 4);
                    const statusRaw = getCellText($row, 5);
                    const isOverdoseRaw = getCellText($row, 6);
                    const leftEye = getCellText($row, 7);
                    const rightEye = getCellText($row, 8);

                    const status = (statusRaw || "").trim();
                    const s = status.toLowerCase();
                    const overdoseYes = (isOverdoseRaw || "").trim().toLowerCase() === "yes";

                    // ✅ Your requirement: ONLY if Status == "Correct dose" AND Is Overdose == "Yes"
                    if (overdoseYes && status === "Correct dose") {
                        const overdoseSchedule = errorSchedule || schedule || triggerTime || "unknown time";

                        const $div = $("<div>", {
                            class: "alert alert-custom-warning mt-20 mb-0 shadow-sm px-3 py-2 rounded-0",
                            role: "alert",
                        });

                        $div.append('<span><i class="fas fa-exclamation-triangle"></i></span>');
                        $div.append(
                            `Correct dose but overdose detected at ${overdoseSchedule}. ` +
                            `Left eye count: ${leftEye || 0}, right eye count: ${rightEye || 0}.`
                        );

                        return $div;
                    }


                    // Otherwise: normal status-based alerts
                    let alertType = "danger";
                    let iconHtml = '<span><i class="fas fa-times-circle"></i></span>';
                    let alertText = "";

                    if (s.startsWith("missed")) {
                        alertType = "warning";
                        iconHtml = '<span><i class="fas fa-exclamation-circle"></i></span>';
                        alertText = `Missed dose (scheduled at ${errorSchedule || "—"}).`;
                    } else if (s.startsWith("extra")) {
                        alertText = `Extra dose detected at ${triggerTime || "—"}.`;
                    } else if (s.startsWith("incorrect")) {
                        alertType = "warning";
                        iconHtml = '<span><i class="fas fa-exclamation-circle"></i></span>';
                        alertText =
                            `Incorrect dose detected at ${triggerTime || "—"}. ` +
                            "Please ensure a 2-minute interval between each medication intake.";
                    } else if (s.startsWith("correct")) {
                        // No alert for normal correct dose
                        return null;
                    } else if (s.startsWith("not")) {
                        alertText = "No recorded times (missed dose).";
                    } else {
                        // Fallback
                        alertText = status || "Alert detected.";
                    }

                    const $div = $("<div>", {
                        class: `alert alert-custom-${alertType} mt-20 mb-0 shadow-sm px-3 py-2 rounded-0`,
                        role: "alert",
                    });

                    $div.append(iconHtml);
                    $div.append(alertText);
                    return $div;
                }

                // Iterate group rows (Medication Name is in group label row)
                const $groupRows = $table.find("tbody tr.cbResultSetGroup1Row");

                $groupRows.each(function() {
                    const $groupRow = $(this);
                    const medicationName = ($groupRow.find("td").first().text() || "").trim();

                    // Data rows under this medication group
                    const $dataRows = $groupRow.nextUntil("tr.cbResultSetGroup1Row", 'tr[data-cb-name="data"]');
                    if (!$dataRows.length) return;

                    // Use first row for main details
                    const $first = $dataRows.eq(0);
                    const dosage = getCellText($first, 2);
                    const schedule = getCellText($first, 3);
                    const leftEyeCount = getCellText($first, 7);
                    const rightEyeCount = getCellText($first, 8);

                    // ---- Build Card (once per medication group) ----
                    const $mainCard = $('<div class="card mt-4 mb-5 border"></div>');
                    const $mainCardBody = $('<div class="card-body pt-4 pb-5"></div>');

                    // Date (right aligned)
                    const $dateDivCont = $('<div class="text-right"></div>');
                    if (dateText) {
                        $dateDivCont.append($('<p class="date-cont"></p>').text(dateText));
                        $dateDivCont.append("<hr>");
                    }

                    const $rowFormContainer = $('<div class="row"></div>');
                    const $colImageContainer = $('<div class="col-md-2 col-12"></div>');
                    const $imageContainer = $('<div class="rx-image-container"></div>');
                    const $image = $('<img class="img-rx" src="../assets/img/rx-image.png">');

                    const $colFormContainer = $('<div class="col-md-10 col-12"></div>');
                    const $rowContainer = $('<div class="row form-container"></div>');

                    function addField(label, value) {
                        const $label = $('<label class="col-md-3 col-12 form-label"></label>').text(label);
                        const $valueDiv = $('<div class="col-md-9 col-12"></div>');
                        const $valueCont = $('<p class="form-control-plaintext"></p>').text(value || "");
                        $valueDiv.append($valueCont);
                        $rowContainer.append($label, $valueDiv);
                    }

                    addField("Medication Name", medicationName);
                    addField("Dosage", dosage);
                    addField("Schedule", schedule);

                    // Optional: show eye counts in main details if present
                    // if (leftEyeCount !== "" || rightEyeCount !== "") {
                    //   addField("Left Eye Med Count", leftEyeCount);
                    //   addField("Right Eye Med Count", rightEyeCount);
                    // }

                    const $hrMobile = $('<hr class="d-md-none d-lg-none d-xl-none d-xxl-none line-divider-break">');
                    const $pContSectionHeader = $('<div class="section-header">Medication Alerts</div>');

                    const $rowAlerts = $('<div class="row"></div>');
                    const $colAlerts = $('<div class="col-12"></div>');

                    // Add alerts per data row
                    $dataRows.each(function() {
                        const $alert = buildAlertFromRow($(this));
                        if ($alert) $colAlerts.append($alert);
                    });

                    // If no alerts were generated, show a success message
                    if ($colAlerts.children().length === 0) {
                        $colAlerts.append(
                            $('<div class="alert alert-custom-success mt-20 mb-0 shadow-sm px-3 py-2 rounded-0" role="alert"></div>')
                            .append('<span><i class="fas fa-check-circle"></i></span>')
                            .append(`No issues detected for this medication on ${dateText || "this date"}.`)
                        );
                    }

                    // Assemble card
                    $imageContainer.append($image);
                    $colImageContainer.append($imageContainer);

                    $colFormContainer.append($rowContainer);
                    $rowFormContainer.append($colImageContainer, $colFormContainer);

                    $rowAlerts.append($colAlerts);

                    $mainCardBody.append($dateDivCont);
                    $mainCardBody.append($rowFormContainer);
                    $mainCardBody.append($hrMobile);
                    $mainCardBody.append($pContSectionHeader);
                    $mainCardBody.append($rowAlerts);

                    $mainCard.append($mainCardBody);
                    $mainCont.append($mainCard);
                });
            });
        </script>

    </div>
    <!-- ./wrapper -->

</body>

</html>