<!DOCTYPE html>
<html lang="en">

<head>

    <?php include '../partials/header.php'; ?>
    <title>Staff: Manage Messages</title>

</head>

<body class="hold-transition layout-sidebar ">

    <!-- A div that wraps the whole site -->
    <div class="wrapper">

        <!-- Contains the logo and navbar -->
        <?php include '../partials/topbar.php'; ?>
        <!-- Contains the user panel and sidebar menu -->
        <?php include '../partials/staff-sidebar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mt-2 mb-1">
                        <div class="col-lg-6 col-12">
                            <h1>Manage Messages</h1>
                        </div>
                        <div class="col-lg-6 col-12 text-right">
                            <button onclick="open_modal('new-message-staff','start', '','')" type="button" class="theme-btn"><i class="fas fa-comment-dots"></i> Start New Message Thread</button>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- Default box -->
                            <div class="card shadow-none p-0">
                                <!-- search -->
                                <div class="card-body custom-search-report blue-theme pt-0 pb-2 d-none-search-cont message-report-cont">   
                                    <script type="text/javascript" src="https://c9ebv091.caspio.com/dp/40c0e0004ba2ed93308145b4b6dc/emb"></script>
                                </div>
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
                // Set side navigation active
                setActiveNav('manage-messages');

                document.addEventListener('DataPageReady', function (event) {
                    if (event.detail.appKey == '40c0e0004ba2ed93308145b4b6dc') {
                        checkHighlightMessage();
                    }   
                })
            });
        </script>

    </div>
    <!-- ./wrapper -->

</body>

</html>