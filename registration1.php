<!DOCTYPE html>
<html lang="en">

<head>

<?php include_once './partials/header-public.php' ?>
<link rel="stylesheet" href="./assets/css/registration.css">

</head>

<body class="public">

	<div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card border-0 shadow-lg public-wrapper cb-rounded-1">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row" style="min-height:577px;">
                            <div class="col-lg-5 d-none d-lg-block bg-login-image-green  cb-rounded-left-1-5">

                                <div class="p-3">
                                    <img src="./assets/img/caspio-logo.png" alt="Caspio Logo" class="w-25">
                                </div>

                                <div class="px-5 cb-py-6-5 text-center">
                                    <span role="img" alt="Photo credits: Špela Kurnik" title="Photo credits: Špela Kurnik" aria-label=""> </span>

                                    <h5 class="cb-opacity-0-8 text-white cb-font-weight-800 cb-text-size-2 mb-5">Welcome Back!</h5>

                                    <p class="text-white mb-5">To keep connected with us please login with your personal info</p>

                                    <div class="row">
                                        <div class="col-12 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                                            <button class="btn cb-btn-outline-sea-green cb-rounded-1-5 w-100 py-2 cb-font-weight-800" onclick="window.location.href='./login1.php'">SIGN IN</button>
                                        </div>
                                    </div>
                                </div>

                                
                            </div>
                            <div class="col-lg-7">
                                <div class="d-block d-lg-none text-center bg-login-image-green py-5 cb-rounded-bot-1-5">
                                    <h5 class=" cb-font-weight-800 cb-text-size-2 cb-opacity-0-8 text-white mb-0">Create Account</h5>   
                                </div>
                                <div class="cb-form-res-px cb-form-res-py text-center">
                                    <h5 class="d-none d-lg-block cb-text-sea-green cb-font-weight-800 cb-text-size-2 mb-5">Create Account</h5>   
                                    <div class="cb-btn-rounded-1-5 cb-btn-w-50 cb-btn-py-2 cb-font-weight-800 cb-btn-sea-green cb-fields-bg-sea-green cb-text-size-1">
                                        <script type="text/javascript" src="https://c2axa202.caspio.com/dp/caf26000d9fb417b698c4b77af8f/emb"></script>                                        
                                    </div>    
                                    <hr class="d-block d-lg-none cb-hr-light">
                                    <div class="d-block d-lg-none mt-3">
                                        <p class="cb-text-light-grey">Already have an account? <strong><a href="./login1.php">SIGN IN</a></strong></p>
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
