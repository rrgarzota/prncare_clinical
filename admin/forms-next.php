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
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="cta-buttons.php">Home</a></li>
                                <li class="breadcrumb-item active">Primary Buttons</li>
                            </ol>
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
                            <div class="card-deck">
                                <div class="card">
                                    <img class="card-img-top" src="..." alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.0</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <button type="button" class="btn btn-outline-info">View page</button>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="..." alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.1</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <button type="button" class="btn btn-outline-info">View page</button>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="..." alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Design 1.2</h5>
                                        <p class="card-text">
                                            Form description here.
                                        </p>
                                    </div>
                                    <div class="card-footer text-right">
                                        <button type="button" class="btn btn-outline-info">View page</button>
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