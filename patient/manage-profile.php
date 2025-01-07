<!DOCTYPE html>
<html lang="en">

<head>

    <?php include '../partials/header.php'; ?>
    <title>Patient: Profile Page</title>

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
                            <h1>Profile</h1>
                        </div>
                        <div class="col-lg-6 col-12 text-right">
                            <a href="./manage-profile-edit.php" class="theme-btn"><i class="fas fa-pen"></i> Edit Profile</a>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid pt-3">
                    <!-- General Details -->
                    <div class="row">
                        <div class="col-12 col-xl-8 offset-xl-2 mb-30">
                            <!-- Default box -->
                            <div class="card center-aligned-card-1000 shadow mt-4">
                                <div class="card-body blue-theme hide-update-btn">
                                    <script type="text/javascript" src="https://c9ebv091.caspio.com/dp/40c0e0000ee43d40f0df4013aeb3/emb"></script>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>

                    <!-- Medication Details -->
                    <div class="row">
                        <div class="col-12 col-xl-8 offset-xl-2 mb-30">
                            <!-- Default box -->
                            <div class="card center-aligned-card-1000 shadow mt-4">
                                <div class="row mt-2 mb-1">
                                    <h5 class="section-header-button mt-0 d-flex justify-content-between w-100">
                                        <span class="section-header-title">MEDICATION DETAILS</span>
                                        <span class="text-right">
                                            <a href="./add-medication-details.php" class="section-header-button-link">
                                                Add Medication
                                            </a>
                                        </span>
                                    </h5>
                                    <!-- <div class="col-lg-6 col-12 text-right">
                                    </div> -->
                                </div>
                                <div class="card-body blue-theme  details-page-list-view d-none-created-date">
                                    <script type="text/javascript" src="https://c9ebv091.caspio.com/dp/40c0e000335c9bb14f454fcdbea4/emb"></script>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>

                    <!-- Guardian Details -->
                    <div class="row">
                        <div class="col-12 col-xl-8 offset-xl-2 mb-5">
                            <!-- Default box -->
                            <div class="card center-aligned-card-1000 shadow mt-4">
                            <h5 class="section-header mt-0 text-left mt-3">GUARDIAN MANAGEMENT</h5>
                                        <div class="alert alert-custom-warning-black mt-20 mb-3 shadow-sm px-3 py-3 rounded-0 text-left" role="alert"><i class="fas fa-info-circle"></i>
                                            <p class="lh-20 mb-0 default-message">These are the guardians who will receive alerts if you misses a dose.</p>
                                        </div>
                                <div class="card-body blue-theme text-left guardian-container edit-delete-btn">
                                    <script type="text/javascript" src="https://c9ebv091.caspio.com/dp/40c0e00085c2b029d114429eb159/emb"></script>
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
            $(function(){
                setActiveNav('');
            });

            document.addEventListener('DataPageReady', function (event) {
                if (event.detail.appKey == '40c0e000db2d168007e34c1f92e8') {
                    // checkHighlightMessage();
                }   
            })
            
        </script>

    </div>
    <!-- ./wrapper -->

</body>

</html>