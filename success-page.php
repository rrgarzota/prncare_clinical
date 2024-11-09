<!DOCTYPE html>
<html lang="en">

<head>

    <?php include_once './partials/header-public.php' ?>
    <link rel="stylesheet" href="./assets/css/template-style.css">
    <link rel="stylesheet" href="./assets/css/multistep.css">

    <?php

    ?>

</head>

<body class="public">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center h-v100 d-flex align-items-center">
            <div class="col-12">
                <div class="text-center pt-5">
                    <h1>Join Prncare</h1>
                    <h5>Create your account to start managing patient <br /> medication adherence</h5>
                </div>

                <!-- Default box -->
                <section class="multi_step_form">
                    <form id="msform">
                        <!-- Tittle -->
                        <!-- <div class="tittle">
                                        <h2>Verification Process</h2>
                                        <p>In order to use this service, you have to complete this verification process</p>
                                        </div> -->
                        <!-- progressbar -->
                        <div class="center-aligned-card-1200">
                            <ul id="progressbar" class="pl-0 d-none d-md-flex">
                                <li class="active done one">Personal Details</li>
                                <li class="active done two">Invite Staff</li>
                            </ul>
                            <div class="d-block d-md-none">
                                <div class="bar">
                                    <span class="bar-circle one done"></span>
                                    <span class="bar-circle two active"></span>
                                    <!-- <span class="bar-circle done"></span>
                                                <span class="bar-circle active done"></span> -->
                                    <!-- <span class="bar-circle"></span> -->
                                </div>
                                <div>
                                    <p>Step <strong>2</strong> of 2</p>
                                </div>
                            </div>


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
                                                        <p class="message-sub-title mx-auto">Your account is set up, and staff invitations have been sent. You're ready to manage patient care and track medication adherence. Welcome aboard!</p>
                                                        <button type="button" onclick="window.location.href='./login.php';" class="secondary-button mt-5">Go to Login</a>
                                                        <!-- <button type="button" class="action-button previous previous_button my-1">Back</button> -->

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

                <!-- /.card -->
                <!-- </div>
                        </div> -->

            </div>
        </div>
    </div>

    <?php include_once './partials/footer-public.php' ?>
    <!-- <script>
        var url = new URL(window.location.href);
        var page_search_params = url.searchParams;
        var Step2 = page_search_params.get('Step2');
        var $progressBarLi = $('#progressbar').find('li.two');

        if ((Step2 !== undefined || Step2 != null || Step2 != '') && Step2 === 'true') {
            if (!$progressBarLi.hasClass('done')) {
                $progressBarLi.addClass('done');
            }
        }
        var $prevBtn = $('.previous_button');

        $prevBtn.on("click", function() {

            window.location.href = "./doctor-registration-step1.php?" + page_search_params;

        });

        var $finishBtn = $('.finish-button');

        $finishBtn.on("click", function() {

            window.location.href = "./success-page.php?page=doctor-registration";

        });
    </script> -->
</body>

</html>