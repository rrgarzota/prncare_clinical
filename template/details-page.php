<!DOCTYPE html>
<html lang="en">

<head>

    <?php include '../partials/header.php'; ?>
    <title>Admin: Details Page</title>

</head>

<body class="hold-transition layout-sidebar ">

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
                <div class="container-fluid">
                    <div class="row mt-2 mb-1">
                        <div class="col-sm-6">
                            <h1>Dashboard</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="dashboard1.php">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-xl-8 offset-xl-2">
                            <!-- Default box -->
                            <div class="card center-aligned-card shadow my-4">
                                <div class="card-body blue-theme alert-details">
                                    <div class="card-custom-header">
                                        <i class="fas fa-file-invoice fs-40"></i>
                                    </div>
                                    <div class="card-custom-body">
                                        <div class="row">
                                            <div class="col-12 medication-container-final">
                                                

                                            </div>
                                            <div class="col-12 medication-container d-none">
                                                <!-- medication container -->
                                                <script type="text/javascript" src="https://c9ebv091.caspio.com/dp/40c0e0000ff236d4177c4a89b424/emb"></script>
                                                
                                                <!-- end medication container -->

                                            </div>
                                        </div>
                                    </div>
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
                var $caspioTableContainer = $('.medication-container');
                var $caspioTable = $caspioTableContainer.find('[data-cb-name="cbTable"]');
                var $caspiotheader = $caspioTable.find('.cbResultSetTableHeader th > a');
                var $caspiotbodyTr = $caspioTable.find('tbody tr.cbResultSetGroup1Row').not('.cbResultSetTotalsRow');
                var $mainCont = $('.medication-container-final');

                $caspiotbodyTr.each(function(index, elem){

                    $mainCard = $('<div>', {
                        'class': 'card mt-4 mb-2'
                    });
                    $mainCardBody = $('<div>', {
                        'class': 'card-body'
                    })
                    $rowContainer = $('<div>', {
                        "class": 'row form-container'
                    });
                    $dateDivCont = $('<div>',{
                        "class": 'text-right'
                    });
                    $colFormContainer = $('<div>',{
                        "class": 'col-md-10 col-12'
                    });
                    $colImageContainer = $('<div>',{
                        "class": 'col-md-2 col-12'
                    });
                    $imageContainer = $('<div>',{
                        "class": 'rx-image-container'
                    });
                    $image = $('<img>',{
                        "class": 'img-rx',
                        "src": '../assets/img/rx-image.png'
                    });
                    $rowFormContainer = $('<div>',{
                        "class": 'row'
                    });
                    $hrMobile = $('<hr>',{
                        "class": 'd-md-none d-lg-none d-xl-none d-xxl-none line-divider-break'
                    });
                            
                    $pContSectionHeader = $('<div>',{
                        "class": 'section-header',
                        'text': 'Medication Alerts'
                    });
                    $rowAlerts = $('<div>',{
                        "class": 'row'
                    });
                    $medicationName = $(this).find('td').text();

                    $trSiblings = $(this).nextUntil('tr.cbResultSetGroup1Row');

                    $trSiblings.each(function(indexTr, elemTr){
                        $trSiblings = $(this).nextUntil('tr.cbResultSetGroup1Row');

                        $td = $(this).find('td');
                        $medicationDetailsCont = '';
                        $colAlerts = $('<div>',{
                            "class": 'col-12'
                        });
                        $alertType = 'danger';
                        $icon = '<span><i class="fas fa-times-circle"></i></span>';
                        $divWarningAlertsContainer = $('<div>',{
                            "class": 'alert alert-custom-'+ $alertType +' mt-20 mb-30 shadow-sm px-3 py-2 rounded-0',
                            'role': 'alert'
                        });
                        

                        // first record - main details
                        if (indexTr==0) {
                            
                            $td.each(function(indexTd, elemTd){
                                $label = $('<label>', {
                                    "class": 'col-md-3 col-12 form-label'
                                });
                                $valueDiv = $('<div>',{
                                    "class": 'col-md-9 col-12'
                                })
                                $valueCont = $('<p>',{
                                    "class": 'form-control-plaintext'
                                });
                                $dateCont = $('<p>');
                               
                                if (indexTd == 0) {
                                    $label.text('Medication Name');
                                    $valueCont.text($medicationName);
                                } else if (indexTd == 1) {
                                    $dateCont.text($(this).text());
                                    $dateDivCont.append($dateCont);
                                    $dateDivCont.append('<hr>');
                                } else if (indexTd == 2) {
                                    $label.text('Dosage');
                                    $valueCont.text($(this).text());
                                } else if (indexTd == 3) {
                                    $label.text('Schedule');
                                    $valueCont.text($(this).text());
                                } else {
                                    // alert message
                                    if ($(this).text().startsWith('Missed')) {
                                        $alertType = 'warning';
                                        $icon = '<span><i class="fas fa-exclamation-circle"></i></span>';
                                    }
                                    
                                    $divWarningAlertsContainer.append($icon);
                                    $divWarningAlertsContainer.append($(this).text());
                                    
                                }  
                                
                                console.log(indexTd);
                                
                                if (indexTd < 4) {
                                    $valueDiv.append($valueCont);
                                    $rowContainer.append($label);
                                    $rowContainer.append($valueDiv);
                                }
                                                                
                                $colAlerts.append($divWarningAlertsContainer);


                            })
                        } else {
                            // get alert message only for records with more than 1 alerts
                            $td.each(function(indexTd, elemTd){

                                if (indexTd == 4) {
                                    if ($(this).text().startsWith('Missed')) {
                                        $alertType = 'warning';
                                        $icon = '<span><i class="fas fa-exclamation-circle"></i></span>';
                                    }

                                    $divWarningAlertsContainer = $('<div>',{
                                        "class": 'alert alert-custom-'+ $alertType +' mt-20 mb-30 shadow-sm px-3 py-2 rounded-0',
                                        'role': 'alert'
                                    });


                                    $divWarningAlertsContainer.append($icon);
                                    $divWarningAlertsContainer.append($(this).text());
                                    $colAlerts.append($divWarningAlertsContainer);
                                }

                            })

                        }


                        $imageContainer.append($image);
                        $colImageContainer.append($imageContainer);                        
                        $rowFormContainer.append($colImageContainer);

                        $colFormContainer.append($rowContainer);
                        $rowFormContainer.append($colFormContainer);
                        
                        $mainCardBody.append($dateDivCont);
                        $mainCardBody.append($rowFormContainer);
                        $mainCardBody.append($hrMobile);
                        $mainCardBody.append($pContSectionHeader);

                        $rowAlerts.append($colAlerts);
                        $mainCardBody.append($rowAlerts);
                        
                        $mainCard.append($mainCardBody);


                        $mainCont.append($mainCard);

                    })

                    
                    
                    
                    console.log($dateDivCont);

                })





                // $caspiotbodyTr.each(function(index, elem){
                //     var $caspioTd = $(this).find('td').not('.cbResultSetActionCell');
                //     var $trOutput = $('<tr>');

                //     $caspioTd.each(function(indexTd, elemTd){
                        
                //         if ($(this).hasClass('cbResultSetGroup1Label')) {
                //             var colspan = $(this).attr('colspan');
                //             var $tdOutput = $('<th>', {
                //                 "scope": 'row',
                //                 "text": $(this).text()
                //             }); 

                //             $trOutput.append($tdOutput);

                //             tdColspan = colspan;

                //             for(i=0; i<tdColspan-2;i++){
                //                 var $tdOutput = $('<td>', {
                //                     "text": ''
                //                 });
                //                 $trOutput.append($tdOutput);
                //             }

                //         } else {
                //             var $tdOutput = $('<td>', {
                //                 "text": $(this).text()
                //             });
                //             $trOutput.append($tdOutput);
                //         }


                //     });

                //     var $trCreated = $invoiceItemsTable.find('tbody').append($trOutput);

                // });
            });


        </script>

    </div>
    <!-- ./wrapper -->

</body>

</html>