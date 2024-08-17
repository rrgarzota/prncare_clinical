    <!DOCTYPE html>
<html lang="en">

<head>

    <?php include '../partials/header.php'; ?>
    <title>Admin: Forms</title>

</head>

<body
    class="hold-transition  <?php echo $sidebarMini . ' ' . $currentLayout . ' ' . $sidebarCollapse . ' ' .SYSTEM_BODY_SMALL_TEXT; ?> ">

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
                <div class="<?php echo $container ;?>">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Public Pages</h1>
                        </div>
                        <div class="col-sm-6">
                            <!-- <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="cta-buttons.php">register</a></li>
                                <li class="breadcrumb-item active">CTA Buttons</li>
                            </ol> -->
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <div class="<?php echo $container ;?>">
                    <div class="row">
                        <div class="col-12">

                            <div class="card card-primary card-outline card-outline-tabs">
                                <div class="card-header p-0 border-bottom-0">
                                    <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="custom-tabs-three-register-tab"
                                                data-toggle="pill" href="#custom-tabs-three-register" role="tab"
                                                aria-controls="custom-tabs-three-register"
                                                aria-selected="true">Register</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-three-login-tab" data-toggle="pill"
                                                href="#custom-tabs-three-login" role="tab"
                                                aria-controls="custom-tabs-three-login" aria-selected="false">Login</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-three-tabContent">
                                        <div class="tab-pane fade active show" id="custom-tabs-three-register"
                                            role="tabpanel" aria-labelledby="custom-tabs-three-register-tab">

                                            <!-- Tab content -->
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card-deck py-3">
                                                        <div class="card">
                                                            <img class="card-img-top"
                                                                src="../assets/img/screenshots/registration-design-1.png"
                                                                alt="Card image cap">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Design 1.0</h5>
                                                                <p class="card-text">
                                                                    Form description here.
                                                                </p>
                                                            </div>
                                                            <div class="card-footer text-right">
                                                                <a class="btn btn-outline-primary" href="../registration1.php" target="_blank">View page</a>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <img class="card-img-top"
                                                                src="../assets/img/screenshots/registration-design-2.png"
                                                                alt="Card image cap">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Design 1.1</h5>
                                                                <p class="card-text">
                                                                    Form description here.
                                                                </p>
                                                            </div>
                                                            <div class="card-footer text-right">
                                                                <a class="btn btn-outline-primary" href="../registration2.php" target="_blank">View page</a>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <img class="card-img-top"
                                                                src="../assets/img/screenshots/registration-design-3.png"
                                                                alt="Card image cap">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Design 1.2</h5>
                                                                <p class="card-text">
                                                                    Form description here.
                                                                </p>
                                                            </div>
                                                            <div class="card-footer text-right">
                                                                <a class="btn btn-outline-primary" href="../registration3.php" target="_blank">View page</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-three-login" role="tabpanel"
                                            aria-labelledby="custom-tabs-three-login-tab">

                                            <!-- Tab content -->
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card-deck py-3">
                                                        <div class="card">
                                                            <img class="card-img-top"
                                                                src="../assets/img/screenshots/login-design-1.png"
                                                                alt="Card image cap">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Design 1.0</h5>
                                                                <p class="card-text">
                                                                    Form description here.
                                                                </p>
                                                            </div>
                                                            <div class="card-footer text-right">
                                                                <a class="btn btn-outline-primary" href="../login1.php" target="_blank">View page</a>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <img class="card-img-top"
                                                                src="../assets/img/screenshots/login-design-2.png"
                                                                alt="Card image cap">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Design 1.1</h5>
                                                                <p class="card-text">
                                                                    Form description here.
                                                                </p>
                                                            </div>
                                                            <div class="card-footer text-right">
                                                                <a class="btn btn-outline-primary" href="../login2.php" target="_blank">View page</a>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <img class="card-img-top"
                                                                src="../assets/img/screenshots/login-design-3.png"
                                                                alt="Card image cap">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Design 1.2</h5>
                                                                <p class="card-text">
                                                                    Form description here.
                                                                </p>
                                                            </div>
                                                            <div class="card-footer text-right">
                                                                <a class="btn btn-outline-primary" href="../login3.php" target="_blank">View page</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>

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
            $(function () {
                setActiveNav('public-pages');
            });

            document.addEventListener('DataPageReady', function (event) {



            });
        </script>

    </div>
    <!-- ./wrapper -->

</body>

</html>