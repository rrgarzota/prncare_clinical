<!DOCTYPE html>
<html lang="en">

<head>

    <?php include '../partials/header.php'; ?>
    <title>Doctor: Details Page</title>

</head>

<body class="hold-transition layout-sidebar ">

    <!-- A div that wraps the whole site -->
    <div class="wrapper">

        <!-- Contains the logo and navbar -->
        <?php include '../partials/topbar.php'; ?>
        <!-- Contains the user panel and sidebar menu -->
        <?php include '../partials/doctor-sidebar.php'; ?>

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
                                                <script type="text/javascript" src="https://c9ebv091.caspio.com/dp/40c0e000a83314a1b9744aaabbce/emb"></script>
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
                setActiveNav("alerts");
            });

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

                    // ✅ Requirement: ONLY if Status == "Correct dose" AND Is Overdose == "Yes"
                    if (overdoseYes && status === "Correct dose") {
                    const overdoseSchedule = errorSchedule || schedule || triggerTime || "unknown time";

                    const L = Number(leftEye || 0);
                    const R = Number(rightEye || 0);
                    const LIMIT = 3;

                    const leftOD = L > LIMIT;
                    const rightOD = R > LIMIT;

                    // Build user-friendly message that supports left/right/both overdose
                    let msg = `Correct dose, but overdose detected at ${overdoseSchedule}. `;

                    if (leftOD && rightOD) {
                        msg +=
                        `Both eyes received more than the recommended number of drops. ` +
                        `Left eye received ${L} drops and right eye received ${R} drops (limit is ${LIMIT} each).`;
                    } else if (leftOD) {
                        msg +=
                        `The left eye received more than the recommended number of drops. ` +
                        `Left eye received ${L} drops (limit is ${LIMIT}).`;
                    } else if (rightOD) {
                        msg +=
                        `The right eye received more than the recommended number of drops. ` +
                        `Right eye received ${R} drops (limit is ${LIMIT}).`;
                    } else {
                        // Safety fallback: if flagged overdose but counts don't exceed limit,
                        // still show a clear message with counts
                        msg += `Drop count exceeded the recommended limit. Left eye received ${L} drops and right eye received ${R} drops (limit is ${LIMIT}).`;
                    }

                    const $div = $("<div>", {
                        class: "alert alert-custom-warning mt-20 mb-0 shadow-sm px-3 py-2 rounded-0",
                        role: "alert",
                    });

                    $div.append('<span><i class="fas fa-exclamation-triangle"></i></span>');
                    $div.append(msg);

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