<!DOCTYPE html>
<html lang="en">

<head>

    <?php include '../partials/header.php'; ?>
    <title>Patient: Change Password</title>

</head>

<body class="hold-transition layout-sidebar ">

    <?php
        $sourcePage = isset($_GET['page']) ? $_GET['page'] : ''; //identifier for tab page
        $messageBody = '';
        $messageButtonText = '';
        $pageTitle = '';
        $multistep = true;

        if ($sourcePage == 'change-password') {
            $title = "Change Password";
            $messageBody = "Your password has been successfully updated.";
            $messageButtonText = 'Go to Profile';
            $messageButtonURL = './manage-profile.php';
        }
    ?>

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
                            <h1><?= $title; ?></h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="multi_step_form">
                    <form id="msform">
                        <div class="center-aligned-card-1200">
                            <div class="card shadow my-4 border">
                                <div class="card-body blue-theme pt-4 pb-4">
                                    <div id="PostBackMessage_28430a501e6332">
                                        <div class="card mb-0">
                                            <div class="card-body text-center">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h3 class="message-title">
                                                            Success!
                                                        </h3>
                                                    </div>
                                                    <div class="col-12">
                                                        <i class="fas fa-check-circle success-message-icon"></i>
                                                    </div>
                                                    <div class="col-12 mx-auto">
                                                        <p class="message-sub-title mx-auto"><?= $messageBody; ?></p>
                                                        <button type="button" onclick="window.location.href='<?= $messageButtonURL; ?>';" class="secondary-button mt-5 w-120"><?= $messageButtonText; ?></a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>

                        <!-- fieldsets -->

                    </form>
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