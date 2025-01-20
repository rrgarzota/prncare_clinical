<!DOCTYPE html>
<html lang="en">

<head>

    <?php include '../partials/header.php'; ?>
    <title>Staff: Message Details Page</title>

</head>

<body class="hold-transition layout-sidebar ">

    <!-- A div that wraps the whole site -->
    <div class="wrapper">

        <!-- Contains the logo and navbar -->
        <?php include '../partials/topbar.php'; ?>
        <!-- Contains the user panel and sidebar menu -->
        <?php include '../partials/staff-sidebar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mt-2 mb-1">
                        <div class="col-sm-6">
                            <h1>View Message Thread</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="manage-messages.php">Manage Messages</a></li>
                                <li class="breadcrumb-item active">Details</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid pt-3">
                    <div class="row">
                        <div class="col-12 col-xl-8 offset-xl-2 mb-30">
                            <?php 
                                if ((isset($_GET['Email']) && $_GET['Email'] == 'True') 
                                    || (isset($_GET['SubmitRead']) && $_GET['SubmitRead'] == 'True')) : 
                            ?>
                                <div class="d-none" style="display: none;">
                                    <!-- Autosubmit Read to Yes if first visit from report or email -->
                                    <script type="text/javascript" src="https://c9ebv091.caspio.com/dp/40c0e00084e44d78653f4fb8a15e/emb"></script>
                                </div>
                                

                            <?php else : ?>
                                
                                <!-- Default box -->
                                <div class="card center-aligned-card shadow mt-4 p-0">
                                    <div class="card-body blue-theme details-page-list-view replies-cont submit-d-none p-4">
                                        <script type="text/javascript" src="https://c9ebv091.caspio.com/dp/40c0e00004872899e2cb4bd08143/emb"></script> 
                                        <div class="create-message">
                                            <script type="text/javascript" src="https://c9ebv091.caspio.com/dp/40c0e0000e01428a09f44e5b9ba5/emb"></script>       
                                        </div>   
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            <?php endif; ?>
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
            $(function(){
                setActiveNav('manage-messages');

                document.addEventListener('DataPageReady', function (event) {
                    if (event.detail.appKey == '40c0e0000e01428a09f44e5b9ba5') {
                        $submitBtn = $('.submit-reply');
                        var $cont = $('.create-message');

                        $submitBtn.on("click", function(){

                            $cont.find('.cbSubmitButton').click();

                        });
                    }   
                    if (event.detail.appKey == '40c0e00084e44d78653f4fb8a15e') {
                        $('.cbUpdateButton').click();
                    }   
                })

            });
        </script>

    </div>
    <!-- ./wrapper -->

</body>

</html>