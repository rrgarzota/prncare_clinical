<!DOCTYPE html>
<html lang="en">

<head>

    <?php include_once './partials/header-public.php' ?>
    <link rel="stylesheet" href="./assets/css/template-style.css">
    <link rel="stylesheet" href="./assets/css/multistep.css">

    <?php
        $sourcePage = isset($_GET['page']) ? $_GET['page'] : ''; //identifier for tab page
        $messageBody = '';
        $messageButtonText = '';
        $messageMainTitleText = '';
        $messageSubTitleText = '';
        $multistep = true;

        $validPages = ['doctor-registration', 'staff-registration'];

        if ($sourcePage == 'doctor-registration') {
            $messageMainTitleText = 'Join Prncare';
            $messageSubTitleText = 'Create your account to start managing patient <br /> medication adherence';
            $messageBody = "Your account is set up, and staff invitations have been sent. You're ready to manage patient care and track medication adherence. <br /> Welcome aboard!";
            $messageButtonText = 'Go to Login';
            $messageButtonURL = './login.php';

        } else if ($sourcePage == 'staff-registration') {
            $messageMainTitleText = 'Join Prncare';
            $messageSubTitleText = 'Complete your registration to join the team and start collaborating on patient care';
            $messageBody = "Your account has been successfully created. You’re ready to connect with patients and track medication adherence. <br /> Welcome aboard!";
            $messageButtonText = 'Go to Login';
            $messageButtonURL = './login.php';
            $multistep = false;

        }
    ?>

</head>

<body class="public">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center h-v100 d-flex align-items-center">
            <?php  if(!in_array($sourcePage, $validPages)): ?>                
                <div class="alert alert-danger probihited-page-cont mt-5 mb-3" role="alert">
                    <p class="mb-0 bold">Prohibited: You dont have permission to access this page.</p>
                </div>
            <?php else: ?>
            <div class="col-12">
                <div class="text-center pt-5">
                    <h1><?= $messageMainTitleText; ?></h1>
                    <h5><?= $messageSubTitleText; ?></h5>
                </div>

                <section class="multi_step_form">
                    <form id="msform">
                        <div class="center-aligned-card-1200">
                            <?php if($multistep): ?>
                                <ul id="progressbar" class="pl-0 d-none d-md-flex">
                                    <li class="active done one">Personal Details</li>
                                    <li class="active done two">Invite Staff</li>
                                </ul>
                                <div class="d-block d-md-none">
                                    <div class="bar">
                                        <span class="bar-circle one done"></span>
                                        <span class="bar-circle two active"></span>
                                    </div>
                                    <div>
                                        <p>Step <strong>2</strong> of 2</p>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="card shadow my-4 border">
                                <div class="card-body blue-theme pt-4 pb-4">
                                    <div id="PostBackMessage_28430a501e6332">
                                        <div class="card mb-0">
                                            <div class="card-body">
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
                                                        <button type="button" onclick="window.location.href='<?= $messageButtonURL; ?>';" class="secondary-button mt-5"><?= $messageButtonText; ?></a>

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
                <?php endif; ?>

                <!-- /.card -->
                <!-- </div>
                        </div> -->

            </div>
        </div>
    </div>

    <?php include_once './partials/footer-public.php' ?>
</body>

</html>