<!DOCTYPE html>
<html lang="en">

<head>

    <?php include '../partials/header.php'; ?>
    <title>Doctor: Profile Page</title>

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
                            <div class="card center-aligned-card shadow mt-4">
                                <div class="card-body blue-theme">
                                    <script type="text/javascript" src="https://c9ebv091.caspio.com/dp/40c0e00075711748e0544d93b349/emb"></script>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- Invite Staff -->
                    <div class="row">
                        <div class="col-12 col-xl-8 offset-xl-2 mb-30">
                            <!-- Default box -->
                            <div class="card center-aligned-card shadow mt-4">
                                <div class="card-body blue-theme">
                                    <h5 class="section-header mt-0 text-left mt-3">INVITE STAFF</h5>
                                    <div class="alert alert-custom-warning-black mt-20 mb-3 shadow-sm px-3 py-3 rounded-0 text-left" role="alert"><i class="fas fa-info-circle"></i>
                                        <p class="lh-20 mb-0 default-message">The staff members who accepted the invitations can now access the application.</p>
                                    </div>
                                    <script type="text/javascript" src="https://c9ebv091.caspio.com/dp/40c0e0000c61f88dfddf4f0a9a74/emb"></script>
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