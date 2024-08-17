<!DOCTYPE html>
<html lang="en">

<head>

    <?php include '../partials/header.php'; ?>
    <title>Admin: Add Company</title>

</head>

<body class="hold-transition  <?php echo $sidebarMini . ' ' . $currentLayout . ' ' . $sidebarCollapse . ' ' .SYSTEM_BODY_SMALL_TEXT; ?> ">

    <!-- A div that wraps the whole site -->
    <div class="wrapper">

        <!-- Contains the logo and navbar -->
        <?php include '../partials/topbar.php'; ?>
        <!-- Contains the user panel and sidebar menu -->
        <?php include '../partials/admin-sidebar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="<?php echo $container ;?>">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Add Company</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="dashboard1.php">Home</a></li>
                                <li class="breadcrumb-item active">Add Company</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <div class="<?php echo $container ;?>">
                    <div class="row">
                        <div class="col-12">
                            <!-- Default box -->
                            <div class="card shadow mb-4">
                                <div class="card-body cb-add-form cb-fields-shadow-blue cb-form-divider-blue cb-form-divider-blue cb-form-label-left-vc">
                                    <script type="text/javascript" src="https://c2axa202.caspio.com/dp/caf26000f7fb71cae7294ea98e12/emb"></script>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
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
                setActiveNav('add-company1');
            });

            document.addEventListener('DataPageReady', function (event) {

                // addBGYesOrNoField(2);

                // $('table[data-cb-name="cbTable"]:first').on("click", 'a[data-cb-name="InlineEdit"]', function(e){
                //     removeBGYesOrNoField($(this));
                // });

                // $('table[data-cb-name="cbTable"]:first').on("click", 'input[name="Mod0InlineEditCancel"]', function(e){
                //     console.log('asd');
                //     addBGYesOrNoField(2);
                // });

                // $('table[data-cb-name="cbTable"]:first').on("click", 'td.cbResultSetData', function(e){
                //     if ($(this).find('input[id*="InlineEditStatus"]').length) {
                //         $(this).find('input[id*="InlineEditStatus"]').trigger('change');
                //     }   
                // });

                // $('table[data-cb-name="cbTable"]:first').on("change", 'input[id*="InlineEditStatus"]', function(e){
                    
                //     console.log('changed');

                //     if ($(this).is(':checked')) {
                //         console.log('checked');
                //     } else {
                //         console.log('unchecked');
                //     }

                // });

                // window.onload = function(){
                //     if (typeof(window.cbAjaxEventHandler) !== "undefined"){
                //         window.cbAjaxEventHandler.addEventListener('UpdateRow', function(v_event){
                //             if (v_event){
                //                 var v_row = document.getElementById('DataRow'+ v_event.data.dataRowsIds[0] + v_event.data.UniqueSuffix);
                //                 if (v_row){
                //                     setTimeout(function(){
                //                         addBGYesOrNoField(2);
                //                     }, 50);
                //                 }	
                //             }
                //         });
                //     }
                // };

                

            });


        </script>

    </div>
    <!-- ./wrapper -->

</body>

</html>