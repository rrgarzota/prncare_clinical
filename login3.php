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
                <div class="card border-0 shadow-lg public-wrapper login cb-rounded-1">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row" style="min-height:577px;">
                            <div class="col-lg-7">
                                
                                <div class="p-3 d-none d-lg-block">
                                    <img src="./assets/img/caspio-logo.svg" alt="Caspio Logo" class="w-25">
                                </div>

                                <div class="d-block d-lg-none text-center bg-login-image-orange py-5 cb-rounded-bot-1-5">
                                    <h5 class=" cb-font-weight-800 cb-text-size-2 cb-opacity-0-8 text-white mb-0">Sign in to Caspio</h5>   
                                </div>

                                <div class="cb-login-res-px cb-login-res-py text-center">
                                    <h5 class="d-none d-lg-block cb-text-orange cb-font-weight-800 cb-text-size-2 mb-5">Sign in to Caspio</h5>   
                                    <div class="cb-btn-rounded-1-5 cb-btn-w-45 cb-btn-py-2 cb-font-weight-800 cb-btn-orange cb-fields-bg-orange cb-text-size-1">
                                        <script type="text/javascript" src="https://c2axa202.caspio.com/dp/CAF260003bd6e548b09a433987a9/emb"></script>                                      
                                    </div>    
                                    <hr class="cb-hr-light my-4">
                                    <div class="mt-3">
                                        <a href="" class="cb-text-light-grey">Forgot your password?</a>
                                    </div>  
                                    <div class="mt-3 d-block d-lg-none">
                                        <p class="cb-text-light-grey">Not a member?<a href="./registration3.php"> Join today!</a></p>
                                    </div>                      
                                </div>
                            </div>
                            <div class="col-lg-5 d-none d-lg-block bg-login-image-orange  cb-rounded-right-1-5">

                                <div class="px-5 cb-py-8 text-center">
                                    <span role="img" alt="Photo credits: Špela Kurnik" title="Photo credits: Špela Kurnik" aria-label=""> </span>

                                    <h5 class="cb-opacity-0-8 text-white cb-font-weight-800 cb-text-size-2 mb-5">New Here?</h5>

                                    <p class="text-white mb-5">Enter your personal details to access the application.</p>

                                    <div class="row">
                                        <div class="col-12 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                                            <button class="btn cb-btn-outline-orange cb-rounded-1-5 w-100 py-2 cb-font-weight-800" onclick="window.location.href='./registration3.php'">SIGN UP</button>
                                        </div>
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
