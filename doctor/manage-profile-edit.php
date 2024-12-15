<!DOCTYPE html>
<html lang="en">

<head>

    <?php include '../partials/header.php'; ?>
    <title>Doctor: Edit Profile Page</title>

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
                            <h1>Edit Profile</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="manage-profile.php">Profile</a></li>
                                <li class="breadcrumb-item active">Edit Profile</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content pb-5">
                <div class="container-fluid pt-3">
                    <!-- General Details -->
                    <div class="row">
                        <div class="col-12 col-xl-8 offset-xl-2 mb-30">
                            <!-- Default box -->
                            <div class="card center-aligned-card shadow mt-4">
                                <div class="card-body blue-theme btn-right">
                                    <script type="text/javascript" src="https://c9ebv091.caspio.com/dp/40c0e00027f35b47320143f3b25c/emb"></script>
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
                                        <p class="lh-20 mb-0 default-message">Enter the email addresses of the staff members you want to invite to register. They will receive an email invitation to join the application.</p>
                                    </div>
                                    <script type="text/javascript" src="https://c9ebv091.caspio.com/dp/40c0e000ea26f8241f314e6eb4f7/emb"></script>
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