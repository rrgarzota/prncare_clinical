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
                            
                            <div class="callout callout-info my-4">
                                <h5 class="mb-0">Form Alignment</h5>
                            </div>
                            <h5>Update Form</h5>
                            <div class="card-deck">
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/full-aligned-form-update.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.0</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./update-company1.php?RID=1" target="_blank">View page</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/center-aligned-form-update.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.0</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./update-company2.php?RID=1" target="_blank">View page</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/left-aligned-form-update.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.0</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./update-company3.php?RID=1" target="_blank">View page</a>
                                    </div>
                                </div>
                            </div>
                            <h5 class="mt-4">Update Form with Delete button</h5>
                            <div class="card-deck">
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/full-aligned-form-update-delete.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.0</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./update-company1-1.php?RID=1" target="_blank">View page</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/center-aligned-form-update-delete.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.0</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./update-company2-2.php?RID=1" target="_blank">View page</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/left-aligned-form-update-delete.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.0</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./update-company3-3.php?RID=1" target="_blank">View page</a>
                                    </div>
                                </div>
                            </div>
                            <div class="callout callout-info my-4">
                                <h5 class="mb-0">Form No Label with Sections</h5>
                            </div>
                            <h5>Update Form</h5>
                            <div class="card-deck">
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/full-aligned-no-label-form-update.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.0</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./update-company4.php?RID=1" target="_blank">View page</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/center-aligned-no-label-form-update.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.0</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./update-company5.php?RID=1" target="_blank">View page</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/left-aligned-no-label-form-update.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.0</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./update-company6.php?RID=1" target="_blank">View page</a>
                                    </div>
                                </div>
                            </div>
                            <div class="callout callout-info my-4">
                                <h5 class="mb-0">Form Left Label with Sections</h5>
                            </div>
                            <h5>Update Form</h5>
                            <div class="card-deck">
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/full-aligned-left-label-form-update.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.0</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./update-company7.php?RID=1" target="_blank">View page</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/center-aligned-left-label-form-update.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.0</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./update-company8.php?RID=1" target="_blank">View page</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/left-aligned-left-label-form-update.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.0</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./update-company9.php?RID=1" target="_blank">View page</a>
                                    </div>
                                </div>
                            </div>
                            <div class="callout callout-info my-4">
                                <h5 class="mb-0">Form Top Label with Sections and button alignment</h5>
                            </div>
                            <h5>Update Form</h5>
                            <div class="card-deck">
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/full-aligned-top-label-form-btn-center-update.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.0</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./update-company10.php?RID=1" target="_blank">View page</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/center-aligned-top-label-form-btn-center-update.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.0</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./update-company11.php?RID=1" target="_blank">View page</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/left-aligned-top-label-form-btn-center-update.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.0</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./update-company12.php?RID=1" target="_blank">View page</a>
                                    </div>
                                </div>
                            </div>
                            <h5 class="mt-4">Update Form with Delete button</h5>
                            <div class="card-deck">
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/full-aligned-top-label-form-btn-center-update-delete.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.0</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./update-company10-1.php?RID=1" target="_blank">View page</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/center-aligned-top-label-form-btn-center-update-delete.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.0</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./update-company11-1.php?RID=1" target="_blank">View page</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/left-aligned-top-label-form-btn-center-update-delete.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.0</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./update-company12-1.php?RID=1" target="_blank">View page</a>
                                    </div>
                                </div>
                            </div>
                            <div class="callout callout-info my-4">
                                <h5 class="mb-0">Form button not rounded</h5>
                            </div>
                            <h5>Update Form</h5>
                            <div class="card-deck">
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/full-aligned-top-label-form-btn-center-radius-0-update.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.0</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./update-company13.php?RID=1" target="_blank">View page</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/center-aligned-top-label-form-btn-center-radius-0-update.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.0</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./update-company14.php?RID=1" target="_blank">View page</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/left-aligned-top-label-form-btn-center-radius-0-update.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.0</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./update-company15.php?RID=1" target="_blank">View page</a>
                                    </div>
                                </div>
                            </div>
                            <h5 class="mt-4">Update Form with Delete button</h5>
                            <div class="card-deck">
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/full-aligned-top-label-form-btn-center-radius-0-update-delete.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.0</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./update-company13-1.php?RID=1" target="_blank">View page</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/center-aligned-top-label-form-btn-center-radius-0-update-delete.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.0</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./update-company14-1.php?RID=1" target="_blank">View page</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/left-aligned-top-label-form-btn-center-radius-0-update-delete.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.0</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./update-company15-1.php?RID=1" target="_blank">View page</a>
                                    </div>
                                </div>
                            </div>
                            <div class="callout callout-info my-4">
                                <h5 class="mb-0">Form button rounded</h5>
                            </div>
                            <h5>Update Form</h5>
                            <div class="card-deck">
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/full-aligned-top-label-form-btn-center-radius-1-5-update.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.0</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./update-company16.php?RID=1" target="_blank">View page</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/center-aligned-top-label-form-btn-center-radius-1-5-update.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.0</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./update-company17.php?RID=1" target="_blank">View page</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/left-aligned-top-label-form-btn-center-radius-1-5-update.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.0</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./update-company18.php?RID=1" target="_blank">View page</a>
                                    </div>
                                </div>
                            </div>
                            <h5 class="mt-4">Update Form with Delete button</h5>
                            <div class="card-deck mb-5">
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/full-aligned-top-label-form-btn-center-radius-1-5-update-delete.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.0</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./update-company16-1.php?RID=1" target="_blank">View page</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/center-aligned-top-label-form-btn-center-radius-1-5-update-delete.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.0</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./update-company17-1.php?RID=1" target="_blank">View page</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="../assets/img/screenshots/left-aligned-top-label-form-btn-center-radius-1-5-update-delete.PNG" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.0</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <a class="btn btn-outline-primary" href="./update-company18-1.php?RID=1" target="_blank">View page</a>
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