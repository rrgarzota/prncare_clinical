<!DOCTYPE html>
<html lang="en">

<head>

    <?php include '../partials/header.php'; ?>
    <title>Patient: Dashboard</title>

</head>

<body class="hold-transition layout-sidebar ">

    <!-- A div that wraps the whole site -->
    <div class="wrapper">

        <!-- Contains the logo and navbar -->
        <?php include '../partials/topbar.php'; ?>
        <!-- Contains the user panel and sidebar menu -->
        <?php include '../partials/patient-sidebar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mt-2 mb-1">
                        <div class="col-lg-6 col-12">
                            <h1>Health Snapshots</h1>
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
                                    <script type="text/javascript" src="https://c9ebv091.caspio.com/dp/40c0e00057d02615089747f7859d/emb"></script>
                                </div>
                            </div>

                            <div class="search-result-container">
                                <!-- widgets -->
                                <div class="card bg-transparent shadow-none border-0 mb-0 widgets-container">
                                    <div class="card-body bg-transparent px-0">
                                        <script type="text/javascript" src="https://c9ebv091.caspio.com/dp/40c0e0008a60e9763c6f428aaa51/emb"></script>
                                    </div>
                                </div> 
                                <!-- end of widgets -->

                                <!-- calendar container -->
                                <div class="card mb-5">
                                    <div class="card-body calendar-report blue-theme one-item-only d-none" id="per_patient">
                                        <!-- filter per patient -->
                                        <script type="text/javascript" src="https://c9ebv091.caspio.com/dp/40c0e000c0baa39ab8e7428082ea/emb"></script>
                                    </div>
                                    <div class="card-body calendar-report blue-theme one-item-only d-none" id="per_device">
                                        <!-- filter per device -->
                                        <script type="text/javascript" src="https://c9ebv091.caspio.com/dp/40c0e000d4017fdb387e4bd189ff/emb"></script>
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
                $perPatient = $('#per_patient');
                $perDevice = $('#per_device');

                var url = new URL(window.location.href);
                var search_params = url.searchParams;
                var device_ID =  search_params.get('DID');


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

               
            });
        </script>

    </div>
    <!-- ./wrapper -->

</body>

</html>