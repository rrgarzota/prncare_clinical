<!DOCTYPE html>
<html lang="en">

<head>

    <?php include '../partials/header.php'; ?>
    <title>Admin: Dashboard</title>

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
                            <h1>Dashboard</h1>
                        </div>
                        <div class="col-sm-6">
                            <!-- <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="dashboard1.php">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol> -->
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
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex justify-content-between">
                                        <h3 class="card-title">Report 1</h3>
                                    </div>
                                </div>
                                <div class="card-body cb-tabular-report cb-config-status cb-tabular-header-bg-white cb-hide-search cb-search-gray-bg">
                                    <script type="text/javascript" src="https://c2axa202.caspio.com/dp/caf260001f376fea78e0409abfbf/emb"></script>                                 
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <div class="col-12 mt-3">
                            <!-- Default box -->
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex justify-content-between">
                                        <h3 class="card-title">Report 2</h3>
                                    </div>
                                </div>
                                <div class="card-body cb-tabular-report cb-config-status cb-tabular-header-bg-white cb-hide-search cb-search-gray-bg">
                                    <script type="text/javascript" src="https://c2axa202.caspio.com/dp/caf2600089b72e769afb4ed2a7cd/emb"></script>                              
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
                setActiveNav('dashboard');
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