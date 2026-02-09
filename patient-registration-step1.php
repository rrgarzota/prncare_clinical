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
                        <!-- progressbar -->
                            <div class="center-aligned-card-1200">
                            <ul id="progressbar" class="pl-0 d-none d-md-flex">
                            <li class="active one">Personal Details</li>  
                            <li class="two">Medication Details</li>
                            <li class="three">Schedule & Guardian</li>
                        </ul>
                        <div class="d-block d-md-none">
                            <div class="bar">
                                <span class="bar-circle active"></span>
                                <span class="bar-circle"></span>
                                <span class="bar-circle"></span>
                            </div>
                            <div>
                                <p>Step <strong>1</strong> of 3</p>
                            </div>
                        </div>
                        
                        
                        <div class="card shadow my-4 border hide-submit-btn hide-update-btn">
                            <div class="card-body blue-theme pt-4 pb-5">
                                <div class="alert alert-custom-warning-black mt-20 mb-5 shadow-sm px-3 py-3 rounded-0" role="alert"><i class="fas fa-info-circle"></i> 
                                    <p class="lh-20 mb-0 default-message">Please provide your personal details to get started.</p>
                                </div>                                
                                <fieldset>
                                    
                                    <div class="doctor-personal-details-cont">
                                        <div class="create-form d-none">
                                            <script type="text/javascript" src="https://c9ebv091.caspio.com/dp/40c0e000a074b5eaa3ec460a9783/emb"></script>
                                        </div>
                                        <div class="update-form d-none mb-5">
                                            <script type="text/javascript" src="https://c9ebv091.caspio.com/dp/40c0e00021138a230f6d49f0bda5/emb"></script>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-12 col-md-6 text-left d-flex align-items-center">
                                            <div class="  d-none d-md-block">
                                                <p class="mb-0">Step <strong>1</strong> of 3</p>

                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 text-right">
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
            </div>
        </div>
	</div>
	
  <?php include_once './partials/footer-public.php' ?>
  <script>

    var url = new URL(window.location.href);
    var page_search_params = url.searchParams;
    var Step1 = page_search_params.get('Step1');
    var UID = page_search_params.get('UID');
    var $createForm = $('.doctor-personal-details-cont').find('.create-form');
    var $updateForm = $('.update-form');
    var $defaultMsg = $('.default-message');
    var $progressbar = $('#progressbar').find('.one');
    var $nextBtn = $('.next.action-button');

    if (
       
            (Step1 !== undefined && Step1 != null && Step1 != '') 
          
        && 
       
            (UID !== undefined && UID != null && UID != '')
        
    ) {
        if ($updateForm.hasClass('d-none')) {
            $updateForm.removeClass('d-none');
        }
        // if (!$defaultMsg.hasClass('d-none')) {
        //     $defaultMsg.addClass('d-none');
        // }
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

  </script>
</body>
</html>
