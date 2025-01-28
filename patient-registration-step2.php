<!DOCTYPE html>
<html lang="en">

<head>

    <?php include_once './partials/header-public.php' ?>
    <link rel="stylesheet" href="./assets/css/template-style.css">
    <link rel="stylesheet" href="./assets/css/multistep.css">

</head>

<body class="public">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center h-v100 d-flex align-items-center">
            <div class="col-12">
                <div class="text-center pt-5">
                    <h1>Join Prncare</h1>
                    <h5>Complete the steps below to set up your account, enter your medication details, and<br> configure your medication schedule and guardian alerts. We're here to support your<br> journey to better health.</h5>
                </div>
                <!-- Default box -->
                <section class="multi_step_form">
                    <form id="msform">
                        <div class="center-aligned-card-1200">
                            <ul id="progressbar" class="pl-0 d-none d-md-flex">
                                <li class="active done one">Personal Details</li>  
                                <li class="active two">Medication Details</li>
                                <li class="three">Schedule & Guardian</li>
                            </ul>
                            <div class="d-block d-md-none">
                                <div class="bar">
                                    <span class="bar-circle one done"></span>
                                    <span class="bar-circle two active"></span>
                                    <span class="bar-circle three"></span>
                                    <!-- <span class="bar-circle done"></span>
                                                <span class="bar-circle active done"></span> -->
                                    <!-- <span class="bar-circle"></span> -->
                                </div>
                                <div>
                                    <p>Step <strong>2</strong> of 3</p>
                                </div>
                            </div>
    

                            <div class="card shadow my-4 border hide-submit-btn hide-update-btn">
                                <div class="card-body blue-theme pt-4 pb-5">
                                    <div class="alert alert-custom-warning-black mt-20 mb-5 shadow-sm px-3 py-3 rounded-0 text-left" role="alert"><i class="fas fa-info-circle"></i>
                                        <p class="lh-20 mb-0 default-message">You can only input 1 medication you are currently taking for now. Once you are registered, you'll be able to add more medications on your profile page.</p>
                                        <p class="lh-20 mb-0 update-form d-none"> Updating the frequency of your medication will result in the deletion of the existing medication schedule. This is to ensure that the frequency and schedule remain consistent.</p>
                                    </div>

                                    <fieldset>

                                        <div class="patient-details-cont">
                                            <div class="create-form d-none">
                                                <script type="text/javascript" src="https://c9ebv091.caspio.com/dp/40c0e00019321a45bb3746c3b2a0/emb"></script>
                                            </div>
                                            <div class="update-form d-none mb-5">
                                                <script type="text/javascript" src="https://c9ebv091.caspio.com/dp/40c0e0001a501dfd0dc04ddd898c/emb"></script>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12 col-md-6 text-left d-flex align-items-center">
                                                <div class="  d-none d-md-block">
                                                    <p class="mb-0">Step <strong>2</strong> of 3</p>

                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 text-right">
                                                <button type="button" class="action-button previous previous_button my-1">Back</button>
                                                <button type="button" class="next action-button">Continue</button>  
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

        // var $finishBtn = $('.finish-button');

        // $finishBtn.on("click", function() {

        //     window.location.href = "./success-page.php?page=doctor-registration";

        // });



        var url = new URL(window.location.href);
        var page_search_params = url.searchParams;
        var Step1 = page_search_params.get('Step1');
        var Step2 = page_search_params.get('Step2');
        var UID = page_search_params.get('UID');
        var $createForm = $('.patient-details-cont').find('.create-form');
        var $updateForm = $('.update-form');
        var $defaultMsg = $('.default-message');
        var $progressbar = $('#progressbar').find('.one');
        var $nextBtn = $('.next.action-button');

        if (
        
                (Step1 !== undefined && Step1 != null && Step1 != '') 
            
            && 

            (Step2 !== undefined && Step2 != null && Step2 != '') 
            
            && 
        
                (UID !== undefined && UID != null && UID != '')
            
        ) {
            if ($updateForm.hasClass('d-none')) {
                $updateForm.removeClass('d-none');
            }
            if (!$defaultMsg.hasClass('d-none')) {
                $defaultMsg.addClass('d-none');
            }
            if (!$progressbar.hasClass('done')) {
                $progressbar.addClass('done');
            }
            $nextBtn.on("click", function() {

                $('.cbUpdateButton').click();

            });
            
        } else {
            if ($createForm.hasClass('d-none')) {
                $createForm.removeClass('d-none');
            }
            $nextBtn.on("click", function(){

                $('.cbSubmitButton').click();

            });
        }


        var $prevBtn = $('.previous_button');

        $prevBtn.on("click", function() {

            let url = "./patient-registration-step1.php?" + page_search_params;

            if (!url.includes('&cbResetParam=1')) {
                url += '&cbResetParam=1';
            }

            window.location.href = url;

        });
    </script>
</body>

</html>