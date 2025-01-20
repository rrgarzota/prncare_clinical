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
                        <div class="col-12 col-xl-8 offset-xl-2 mb-30">
                            <!-- Default box -->
                            <div class="card center-aligned-card shadow mt-4">
                                <div class="card-body blue-theme hide-update-btn">
                                <script type="text/javascript" src="https://c9ebv091.caspio.com/dp/40c0e000a15b25be76e645b6acea/emb"></script>
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