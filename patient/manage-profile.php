<!DOCTYPE html>
<html lang="en">

<head>

    <?php include '../partials/header.php'; ?>
    <title>Patient: Profile Page</title>
    <style>
        .guardian-container [name^="InlineEdit"]{
            width: 100%!important;
        }
        .guardian-container [name^="InlineAdd"]{
            width: auto!important;
        }
    </style>

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
                        <div class="col-12 col-xl-10 offset-xl-1 mb-30">
                            <!-- Default box -->
                            <div class="card center-aligned-card-1200 shadow mt-4">
                                <div class="card-body blue-theme hide-update-btn">
                                    <script type="text/javascript" src="https://c9ebv091.caspio.com/dp/40c0e0003f19da01d8e54f159d98/emb"></script>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>

                    <!-- Medication Details -->
                    <div class="row">
                        <div class="col-12 col-xl-10 offset-xl-1 mb-30">
                            <!-- Default box -->
                            <div class="card center-aligned-card-1200 shadow mt-4">
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
                                    <script type="text/javascript" src="https://c9ebv091.caspio.com/dp/40c0e000b073a93d21e24a668f05/emb"></script>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>

                    <!-- Guardian Details -->
                    <div class="row">
                        <div class="col-12 col-xl-10 offset-xl-1 mb-5">
                            <!-- Default box -->
                            <div class="card center-aligned-card-1200 shadow mt-4">
                            <h5 class="section-header mt-0 text-left mt-3">GUARDIAN MANAGEMENT</h5>
                                        <div class="alert alert-custom-warning-black mt-20 mb-3 shadow-sm px-3 py-3 rounded-0 text-left" role="alert"><i class="fas fa-info-circle"></i>
                                            <p class="lh-20 mb-0 default-message">These are the guardians who will receive alerts if you misses a dose.</p>
                                        </div>
                                <div class="card-body blue-theme text-left guardian-container edit-delete-btn overflow-auto">
                                    <script type="text/javascript" src="https://c9ebv091.caspio.com/dp/40c0e000315d3d8ca54c4959bb2b/emb"></script>
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
        </script>

    </div>
    <!-- ./wrapper -->

</body>

</html>