<!DOCTYPE html>
<html lang="en">

<head>

    <?php include_once './partials/header-public.php' ?>
    <link rel="stylesheet" href="./assets/css/template-style.css">
    <link rel="stylesheet" href="./assets/css/multistep.css">
    <style>
        #InlineAddFormLightBox [for="InlineAddInvitation_Status_ID"]{
            display: none;
        }
    </style>

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
                <!-- <div class="row"> -->
                <!-- <div class="col-12 col-xl-8 offset-xl-2 mb-30"> -->
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
                                <li class="active two">Invite Staff</li>
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


                            <div class="card shadow my-4 border hide-submit-btn">
                                <div class="card-body blue-theme pt-4 pb-5">
                                    <div class="alert alert-custom-warning-black mt-20 mb-5 shadow-sm px-3 py-3 rounded-0 text-left" role="alert"><i class="fas fa-info-circle"></i>
                                        <p class="lh-20 mb-0"> You're almost done! Please add the email addresses of your staff members to complete the setup.<br /> Once added, they'll receive an invitation to register and join your team on our platform. This will ensure everyone is connected and ready to collaborate in managing patient care. </p>
                                    </div>

                                    <fieldset>

                                        <div class="hide-doctor-column invite-staff-cont">
                                            <script type="text/javascript" src="https://c9ebv091.caspio.com/dp/40c0e000541873c15cd649169183/emb"></script>
                                        </div>                


                                        <div class="row">
                                            <div class="col-12 col-md-6 text-left d-flex align-items-center">
                                                <div class="  d-none d-md-block">
                                                    <p class="mb-0">Step <strong>2</strong> of 2</p>

                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 text-right">
                                                <button type="button" class="action-button previous previous_button my-1">Back</button>
                                                <button type="button" class="action-button finish-button my-1">Finish</button>
                                            </div>
                                        </div>



                                    </fieldset>
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
    <script>
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

            let url = "./doctor-registration-step1.php?" + page_search_params;

            if (!url.includes('&cbResetParam=1')) {
                url += '&cbResetParam=1';
            }

            window.location.href = url;

        });

        var $finishBtn = $('.finish-button');

        $finishBtn.on("click", function() {

            window.location.href = "./success-page.php?page=doctor-registration";

        });
    </script>
</body>

</html>