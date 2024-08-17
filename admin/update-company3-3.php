<!DOCTYPE html>
<html lang="en">

<head>

    <?php include '../partials/header.php'; ?>
    <title>Admin: Update Company</title>

</head>

<body class="hold-transition  <?php echo $sidebarMini . ' ' . $currentLayout . ' ' . $sidebarCollapse . ' ' .SYSTEM_BODY_SMALL_TEXT; ?> ">

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
                            <h1>Update Company</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="dashboard1.php">Home</a></li>
                                <li class="breadcrumb-item active">Update Company</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <div class="<?php echo $container ;?>">
                    <div class="row">
                        <div class="col-12">
                            <!-- Default box -->
                            <div class="card shadow mb-4 left-aligned-card">
                                <div class="card-body cb-edit-form cb-fields-shadow-blue">
                                    <script type="text/javascript" src="https://c2axa202.caspio.com/dp/caf26000dbaf25b275f8490086cb/emb"></script>
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
                setActiveNav('update-company1');
            });

            document.addEventListener('DataPageReady', function (event) {                

            });


        </script>

    </div>
    <!-- ./wrapper -->

</body>

</html>