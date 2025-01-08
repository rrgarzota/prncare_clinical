<!DOCTYPE html>
<html lang="en">

<head>

    <?php include '../partials/header.php'; ?>
    <link rel="stylesheet" href="../assets/css/multistep.css">
    <title>Patient: Medication Page</title>

</head>

<body class="hold-transition layout-sidebar ">

    <!-- A div that wraps the whole site -->
    <div class="wrapper">

        <!-- Contains the logo and navbar -->
        <?php include '../partials/topbar.php'; ?>
        <!-- Contains the user panel and sidebar menu -->
        <?php include '../partials/patient-sidebar.php'; ?>
        <?php
            $page = 'Add';
            if (isset($_GET['Page']) && $_GET['Page'] == 'edit') {
                $page = 'Edit';
            }
        ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mt-2 mb-1">
                        <div class="col-sm-6">
                            <h1><?= $page; ?> Medication</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="manage-profile.php">Profile</a></li>
                                <li class="breadcrumb-item active"><?= $page; ?> Medication</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content pb-5">
                <div class="container-fluid pt-3">
                    
                            <!-- Outer Row -->
                    <div class="row justify-content-center h-v100 d-flex align-items-center">
                        <div class="col-12">
                            <!-- <div class="text-center pt-5">
                                <h1>Join Prncare</h1>
                                <h5>Complete the steps below to set up your account, enter your medication details, and<br> configure your medication schedule and guardian alerts. We're here to support your<br> journey to better health.</h5>
                            </div> -->
                            <!-- Default box -->
                            <section class="multi_step_form">
                                <form id="msform">
                                    <div class="center-aligned-card-1000">
                                        <ul id="progressbar" class="pl-0 d-none d-md-flex">
                                            <!-- <li class="active done one">Personal Details</li>   -->
                                            <li class="active one">Medication Details</li>
                                            <li class="two">Schedule Details</li>
                                        </ul>
                                        <div class="d-block d-md-none">
                                            <div class="bar">
                                                <!-- <span class="bar-circle one done"></span> -->
                                                <span class="bar-circle one active"></span>
                                                <span class="bar-circle two"></span>
                                                <!-- <span class="bar-circle done"></span>
                                                            <span class="bar-circle active done"></span> -->
                                                <!-- <span class="bar-circle"></span> -->
                                            </div>
                                            <div>
                                                <p>Step <strong>1</strong> of 2</p>
                                            </div>
                                        </div>
                

                                        <div class="card shadow my-4 border hide-submit-btn hide-update-btn">
                                            <div class="card-body blue-theme pt-4 pb-5">
                                                <div class="alert alert-custom-warning-black mt-20 mb-1 shadow-sm px-3 py-3 rounded-0 text-left" role="alert"><i class="fas fa-info-circle"></i>
                                                    <p class="lh-20 mb-0 default-message"> List the medication you are currently taking.</p>
                                                    <p class="lh-20 mb-0 update-form d-none"> Updating the frequency of your medication will result in the deletion of the existing medication schedule. This is to ensure that the frequency and schedule remain consistent.</p>
                                                </div>

                                                <fieldset>

                                                    <div class="patient-details-cont">
                                                        <div class="create-form d-none">
                                                            <script type="text/javascript" src="https://c9ebv091.caspio.com/dp/40c0e000d454b8ceb1f444f6bb0a/emb"></script>
                                                        </div>
                                                        <div class="update-form d-none mb-5">
                                                            <script type="text/javascript" src="https://c9ebv091.caspio.com/dp/40c0e000fadc135623094ed7b069/emb"></script>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-12 col-md-6 text-left d-flex align-items-center">
                                                            <div class="  d-none d-md-block">
                                                                <p class="mb-0">Step <strong>1</strong> of 2</p>

                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6 text-right">
                                                            <!-- <button type="button" class="action-button previous previous_button my-1">Back</button> -->
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
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- footer -->
        <?php include '../partials/footer.php'; ?>
        
        <script>

        var url = new URL(window.location.href);
        var page_search_params = url.searchParams;
        var Step1 = page_search_params.get('Step1');
        var Step2 = page_search_params.get('Step2');
        var Page = page_search_params.get('Page');
        var $createForm = $('.patient-details-cont').find('.create-form');
        var $updateForm = $('.update-form');
        var $defaultMsg = $('.default-message');
        var $progressbar = $('#progressbar').find('.one');
        var $nextBtn = $('.next.action-button');

        if (
        
                (Step1 !== undefined && Step1 != null && Step1 != '') 
            
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


        // var $prevBtn = $('.previous_button');

        // $prevBtn.on("click", function() {

        //     window.location.href = "./patient-registration-step1.php?" + page_search_params;

        // });
    </script>

    </div>
    <!-- ./wrapper -->

</body>

</html>