<!DOCTYPE html>
<html lang="en">

<head>

    <?php include '../partials/header.php'; ?>
    <title>Admin: Dashboard</title>

</head>

<body class="hold-transition layout-sidebar ">

    <!-- A div that wraps the whole site -->
    <div class="wrapper">

        <!-- Contains the logo and navbar -->
        <?php include '../partials/topbar.php'; ?>
        <!-- Contains the user panel and sidebar menu -->
        <?php include '../partials/admin-sidebar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mt-2 mb-1">
                        <div class="col-lg-6 col-12">
                            <h1>Medication Alerts and Summary</h1>
                        </div>
                        <!-- <div class="col-lg-6 col-12">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="dashboard1.php">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div> -->
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
                                <!-- <div class="card-header">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="template-card-title font-weight-bold">Calendar</h6>
                                    </div>
                                </div> -->
                                <!-- search - submission form -->
                                <div class="card-body submit-d-none blue-theme pt-0 pb-2">
                                    <script type="text/javascript" src="https://c9ebv091.caspio.com/dp/40c0e0007fc5c8dba015422a9dbc/emb"></script>
                                </div>
                                <!-- tabular report -->
                                <!-- <div class="card-body custom-search-report no-bulk-actions blue-theme p-0"> -->
                                    <!-- <div class="header-icon">
                                        <i class="fas fa-th-list"></i>
                                    </div> -->
                                    <!-- <script type="text/javascript" src="https://c1hck776.caspio.com/dp/d09ac00002a6bbc468644e2b9e37/emb"></script> -->
                                <!-- </div> -->
                                <!-- <div class="card-body custom-search-report with-bulk-actions blue-theme p-0">
                                    <script type="text/javascript" src="https://c1hck776.caspio.com/dp/d09ac0008cfdfeb5ed2e463c81a5/emb"></script>
                                </div> -->
                                <!-- <div class="card-body calendar-report blue-theme one-item-only">
                                    <script type="text/javascript" src="https://c1hck776.caspio.com/dp/d09ac00066dde545adb7499fadab/emb"></script>
                                </div> -->
                                <!-- /.card-body -->
                            </div>

                            <!-- alert message -->
                            <div class="row search-message-container d-none">
                                <div class="col-12">
                                    <div class="alert alert-info mt-20 mb-30 shadow-sm py-4 px-4 rounded-0" role="alert">
                                        <span><i class="fas fa-info-circle"></i></span> Please select Patient Name or Device ID to view Details.
                                    </div>
                                </div>
                            </div>
                            <!-- end of alert message -->

                            <div class="search-result-container d-none">
                                <!-- widgets -->

                                <div class="card bg-transparent shadow-none border-0 mb-0 widgets-container">
                                    <div class="card-body bg-transparent px-0">
                                        <script type="text/javascript" src="https://c9ebv091.caspio.com/dp/40c0e000373b010ac4dc495ea464/emb"></script>
                                    </div>
                                </div>  

                                <!-- end of widgets -->

                                <!-- calendar container -->

                                <div class="card mb-5">
                                    <div class="card-body calendar-report blue-theme one-item-only d-none" id="per_patient">
                                        <!-- per patient -->
                                        <script type="text/javascript" src="https://c9ebv091.caspio.com/dp/40c0e000f4d71f99a2194913a893/emb"></script>
                                    </div>
                                    <div class="card-body calendar-report blue-theme one-item-only d-none" id="per_device">
                                        <script type="text/javascript" src="https://c9ebv091.caspio.com/dp/40c0e000abca889002f145b5b245/emb"></script>
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
                setActiveNav('alerts');

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

                

            });

            document.addEventListener('DataPageReady', function (event) {



            });


        </script>

    </div>
    <!-- ./wrapper -->

</body>

</html>