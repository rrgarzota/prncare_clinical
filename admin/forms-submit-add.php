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
        <?php 
            $currentModule = 'forms-primary';
            $breadcrumbsModule = 'forms-primary';
            include '../partials/topbar.php'; 
        ?>
        <!-- Contains the user panel and sidebar menu -->
        <?php include '../partials/admin-sidebar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="<?php echo $container ;?>">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Forms</h1>
                        </div>
                        <div class="col-sm-6">
                            <!-- <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="cta-buttons.php">Home</a></li>
                                <li class="breadcrumb-item active">Primary Buttons</li>
                            </ol> -->
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <div class="<?php echo $container ;?>">
                    <?php
					echo $pageContentLinksDisplay;
					?>

                    <div class="row">
                        <div class="col-12">
                            <h5>Form Alignment</h5>
                            <div class="card-deck">
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/full-aligned-form.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.0</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./add-company1.php" target="_blank">View page</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/left-aligned-form.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.1</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./add-company2.php" target="_blank">View page</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/center-aligned-form.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.2</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./add-company3.php" target="_blank">View page</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-5">
                            <h5>Form No Label with Sections</h5>
                            <div class="card-deck">
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/full-aligned-no-label-form.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.0</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./add-company4.php" target="_blank">View page</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/left-aligned-no-label-form.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.1</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./add-company5.php" target="_blank">View page</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/center-aligned-no-label-form.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.2</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./add-company6.php" target="_blank">View page</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-5">
                            <h5>Form Left Label with Sections</h5>
                            <div class="card-deck">
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/full-aligned-left-label-form.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.0</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./add-company7.php" target="_blank">View page</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/left-aligned-left-label-form.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.1</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./add-company8.php" target="_blank">View page</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/center-aligned-left-label-form.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.2</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./add-company9.php" target="_blank">View page</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 my-5">
                            <h5>Form Top Label with Sections and button alignment</h5>
                            <div class="card-deck">
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/full-aligned-top-label-form-btn-center.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.0</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./add-company10.php" target="_blank">View page</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/left-aligned-top-label-form-btn-center.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.1</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./add-company11.php" target="_blank">View page</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/center-aligned-top-label-form-btn-center.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.2</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./add-company12.php" target="_blank">View page</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 my-5">
                            <h5>Form button not rounded</h5>
                            <div class="card-deck">
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/full-aligned-top-label-form-btn-center-radius-0.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.0</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./add-company13.php" target="_blank">View page</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/left-aligned-top-label-form-btn-center-radius-0.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.1</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./add-company14.php" target="_blank">View page</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/center-aligned-top-label-form-btn-center-radius-0.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.2</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./add-company15.php" target="_blank">View page</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 my-5">
                            <h5>Form button rounded</h5>
                            <div class="card-deck">
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/full-aligned-top-label-form-btn-center-radius-1-5.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.0</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./add-company16.php" target="_blank">View page</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/left-aligned-top-label-form-btn-center-radius-1-5.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.1</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./add-company17.php" target="_blank">View page</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/center-aligned-top-label-form-btn-center-radius-1-5.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.2</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./add-company18.php" target="_blank">View page</a>
                                    </div>
                                </div>
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
                setActiveNav('primary-buttons');
            });

            document.addEventListener('DataPageReady', function (event) {

            });
        </script>

    </div>
    <!-- ./wrapper -->

</body>

</html>