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
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="d-flex align-items-center justify-content-center">
                    <div class="card border-0 login public-wrapper w-100">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row" style="min-height:577px;">
                                <div class="col-lg-6">                                
                                    <div class="p-3 d-block d-lg-none text-center mt-3">
                                        <img src="./assets/img/template/prn-log.jpeg" alt="Caspio Logo" class="logo">
                                    </div>
                                    <div class="d-block d-lg-none text-center my-4">
                                        <h5 class=" cb-font-weight-800 cb-text-size-2 cb-text-blue mb-0">Sign in to your account</h5>   
                                    </div>
                                    <div class="cb-login-res-px cb-login-res-py text-center">
                                        <h5 class="d-none d-lg-block cb-text-blue cb-font-weight-800 cb-text-size-2 mb-5 mt-4">Sign in to your account</h5>                                       
                                        <div class="cb-btn-rounded-1-5 cb-btn-w-45 cb-btn-py-2 cb-btn-blue cb-fields-bg-blue cb-text-size-1 login-container">
                                            <script type="text/javascript" src="https://c9ebv091.caspio.com/dp/40c0e00027160e3e18e049c6b842/emb"></script>
                                        </div>    
                                        <hr class="cb-hr-light mb-4 mt-0">
                                        <div class="mt-4">
                                            <a href="./forgot-password.php" class="cb-text-light-grey">Forgot your password?</a>
                                        </div>  
                                        <div class="mt-3 d-block ">
                                            <p class="cb-text-light-grey">Not a member?<a href="#"> Join today!</a></p>
                                        </div>                      
                                    </div>
                                </div>
                                <div class="col-lg-6 d-none d-lg-block bg-login-image-blue">
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
