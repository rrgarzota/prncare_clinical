<!DOCTYPE html>
<html lang="en">

<head>

    <?php include '../partials/header.php'; ?>
    <title>Staff: Dashboard</title>

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
                        <div class="col-lg-6 col-12">
                            <h1>Medication Alerts and Summary</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- Default box -->
                            <div class="card">
                                <!-- search - submission form -->
                                <div class="card-body submit-d-none blue-theme pt-0 pb-2">
                                    <script type="text/javascript" src="https://c9ebv091.caspio.com/dp/40c0e000197555d60b3f4e21ae91/emb"></script>
                                </div>
                            </div>

                            <!-- search message -->
                            <div class="row search-message-container d-none">
                                <div class="col-12">
                                    <div class="alert alert-info mt-20 mb-30 shadow-sm py-4 px-4 rounded-0" role="alert">
                                        <span><i class="fas fa-info-circle"></i></span> Please select Patient Name or Device ID and click "View" for details.
                                    </div>
                                </div>
                            </div>
                            <!-- end of search message -->

                            <div class="search-result-container d-none">
                                <!-- widgets -->
                                <div class="card bg-transparent shadow-none border-0 mb-0 widgets-container">
                                    <div class="card-body bg-transparent px-0">
                                        <script type="text/javascript" src="https://c9ebv091.caspio.com/dp/40c0e00007cad9a95bc24507ac68/emb"></script>
                                    </div>
                                </div> 
                                <!-- end of widgets -->

                                <!-- calendar container -->
                                <div class="card mb-5">
                                    <div class="card-body calendar-report blue-theme one-item-only d-none" id="per_patient">
                                        <!-- filter per patient -->
                                        <script type="text/javascript" src="https://c9ebv091.caspio.com/dp/40c0e0008d6c7e71446940679fcd/emb"></script>
                                    </div>
                                    <div class="card-body calendar-report blue-theme one-item-only d-none" id="per_device">
                                        <!-- filter per device -->
                                        <script type="text/javascript" src="https://c9ebv091.caspio.com/dp/40c0e000e04b4e996fe74c008476/emb"></script>
                                    </div>
                                </div>
                                <!-- end of calendar container -->
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
            $(function(){
                // Set side navigation active
                setActiveNav('alerts');

                // Condition to show message to select in search or result (widdgets/calendar)
                $searchMessageContainer = $('.search-message-container');
                $searchResultContainer = $('.search-result-container');
                $perPatient = $('#per_patient');
                $perDevice = $('#per_device');

                var url = new URL(window.location.href);
                var search_params = url.searchParams;
                var patient_ID =  search_params.get('PID');
                var device_ID =  search_params.get('DID');

                if (patient_ID == null || patient_ID == '') {
                    if ($searchMessageContainer.hasClass('d-none')){
                        $searchMessageContainer.removeClass('d-none');
                    }
                } else {
                    if ($searchResultContainer.hasClass('d-none')){
                        $searchResultContainer.removeClass('d-none');
                    }

                    // condition for calendar DataPage
                    if (device_ID == null || device_ID == '') {
                        // Per patient DataPage Calendar
                        if ($perPatient.hasClass('d-none')){
                            $perPatient.removeClass('d-none');
                        }
                    } else {
                        // Per patient and device DataPage Calendar
                        if ($perDevice.hasClass('d-none')){
                            $perDevice.removeClass('d-none');
                        }
                    }

                }

                document.addEventListener('DataPageReady', function (event) {
                    const calcfield = $('[name="cbParamVirtual2"]'); //Device ID
                    DOMChanges.track(calcfield);

                    document.addEventListener("onfieldchange", (event) => {
                        if (event.detail.target !== calcfield) {
                            return false;
                        }

                        // set the device ID selected value on load -->
                        calcfield.val(device_ID).trigger('change');
                    });


                });
            });
        </script>

    </div>
    <!-- ./wrapper -->

</body>

</html>