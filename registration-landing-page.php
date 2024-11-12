<!DOCTYPE html>
<html lang="en">

<head>

<?php include_once './partials/header-public.php' ?>
<link rel="stylesheet" href="./assets/css/registration.css">

</head>

<body class="public">

	<div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center h-v100 d-flex align-items-center">

            <div class="col-xl-11 col-lg-12 col-md-9">
                <div class="d-flex align-items-center justify-content-center">
                <div class="card border-0 shadow-lg login cb-rounded-1 public-wrapper w-100">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row" style="min-height:577px;">
                            <div class="col-lg-7">
                                
                                <div class="p-3 d-block d-lg-none text-center mt-3">
                                    <img src="./assets/img/template/prn-log.jpeg" alt="Caspio Logo" class="w-25">
                                </div>

                                <!-- <div class="d-block d-lg-none text-center bg-login-image-blue py-5 cb-rounded-bot-1-5">
                                    <h5 class=" cb-font-weight-800 cb-text-size-2 cb-opacity-0-8 text-white mb-0">Sign in to your account</h5>   
                                </div> -->

                                <div class="d-block d-lg-none text-center mt-3 cb-rounded-bot-1-5">
                                    <h5 class=" cb-font-weight-800 cb-text-size-2 cb-text-blue mb-0">Take Control of Your Health Management</h5>
                                </div>

                                <div class="cb-login-res-px cb-login-res-py text-center">
                                    <h5 class="d-none d-lg-block cb-text-blue cb-font-weight-800 cb-text-size-2 mb-3 mt-4">Take Control of Your Health Management</h5>                                       
                                    <p class="sub-heading cb-text-light-grey text-left mb-3">Welcome to Prncare, where healthcare professionals, and patients collaborate to ensure effective medication management. Please select your role to continue with registration:</p>

                                    <div class="row mt-5 mb-3">
                                        <div class="col-12">
                                            <button type="button" onclick="window.location.href='./doctor-registration-step1.php'" class="custom-button">Register as a Doctor</button>
                                        </div>
                                        <div class="col-12">
                                            <div class="alert alert-custom-warning mt-20 mb-30 shadow-sm p-3 rounded-0 text-left" role="alert">
                                                <span><i class="fas fa-info-circle"></i></span> If you're a healthcare professional, click above to create your account and access patient care tools.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <button type="button" onclick="window.location.href='./staff-registration.php'" class="custom-button">Register as a Patient</button>
                                        </div>
                                        <div class="col-12">
                                            <div class="alert alert-custom-warning mt-20 mb-30 shadow-sm p-3 rounded-0 text-left" role="alert">
                                                <span><i class="fas fa-info-circle"></i></span> Need help with medication tracking and health management? Click above to get started.
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-5 d-none d-lg-block bg-login-image-blue  cb-rounded-right-1-5">

                                <div class="px-5 cb-py-8 text-center">
                                    <span role="img" alt="" title="" aria-label=""> </span>
                                </div>

                                
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                
            </div>

        </div>
	</div>
	
  <?php include_once './partials/footer-public.php' ?>
</body>
</html>
