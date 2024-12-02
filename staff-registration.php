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
                    <h1>Welcome to Prncare</h1>
                    <h5>Complete your registration to join the team and start collaborating on patient care</h5>
                </div>
                <!-- Default box -->
                <section class="multi_step_form">
                    <form id="msform">
                        <div class="card shadow my-4 border hide-submit-btn">
                            <div class="card-body blue-theme pt-4 pb-5">

                                <div class="alert alert-info accepted-invitation-exists-cont d-none mt-5 mb-3" role="alert">
                                    <p class="mb-0 bold">An account with this profile already exists. Please log in to continue.</p>
                                </div>
                                <div class="alert alert-danger probihited-page-cont d-none mt-5 mb-3" role="alert">
                                    <p class="mb-0 bold">Prohibited: You dont have permission to access this page.</p>
                                </div>

                                <div class="create-form-main-cont d-none">
                                    <div class="alert alert-custom-warning-black mt-20 mb-5 shadow-sm px-3 py-3 rounded-0 create-form-message" role="alert"><i class="fas fa-info-circle"></i>
                                        <p class="lh-20 mb-0 default-message">Please fill in the details below to set up your account.</p>
                                    </div>
                                    <fieldset>

                                        <div class="doctor-personal-details-cont">
                                            <div class="create-form">
                                                <script type="text/javascript" src="https://c9ebv091.caspio.com/dp/40c0e000923cb415c7fd4420af0c/emb"></script>
                                            </div>
                                            <div class="invitation-status-cont d-none">
                                                <script type="text/javascript" src="https://c9ebv091.caspio.com/dp/40c0e0000817d22b928a4aca8591/emb"></script>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-6 text-left d-flex align-items-center">

                                            </div>
                                            <div class="col-12 col-md-6 text-right">
                                                <button type="button" class="action-button finish-button w-auto">CREATE ACCOUNT</button>
                                            </div>
                                        </div>

                                    </fieldset>
                                </div>

                            </div>
                            <!-- /.card-body -->
                        </div>
                    </form>
                </section>
            </div>            
        </div>
    </div>

    <?php include_once './partials/footer-public.php' ?>
    <script>
        var url = new URL(window.location.href);
        var page_search_params = url.searchParams;
        var Auth = page_search_params.get('Auth');

        document.addEventListener('DataPageReady', function(event) {
            if (event.detail.appKey == '40c0e0000817d22b928a4aca8591') {

                var $probihitedPageCont = $('.probihited-page-cont');

                if (Auth !== undefined && Auth != null && Auth != '') {
                    var $invitation_status = $('[data-cb-cell-name^="EditRecordMA_Doctor_Invited_Staff_Invitation_Status_ID"]');
                    var $accepted_invitation = $('[data-cb-cell-name^="EditRecordMA_Doctor_Invited_Staff_Accepted_Invitation"]');
                    var invitation_statusValue = '';
                    var accepted_invitationValue = '';
                    var $acceptedInvitationExistsCont = $('.accepted-invitation-exists-cont');
                    var $createFormCont = $('.create-form-main-cont');
                    var $finish = $('.finish-button');

                    if ($invitation_status.length !== 0) {
                        invitation_statusValue = $invitation_status.next().find('span').text();
                    }
                    if ($accepted_invitation.length !== 0) {
                        accepted_invitationValue = $accepted_invitation.next().find('span').text();
                    }

                    if (accepted_invitationValue === 'Yes' && invitation_statusValue === 'Active') {
                        if ($acceptedInvitationExistsCont.hasClass('d-none')) {
                            $acceptedInvitationExistsCont.removeClass('d-none');
                        }
                    } else if (accepted_invitationValue == 'No' && invitation_statusValue == 'Active') {

                        if ($createFormCont.hasClass('d-none')) {
                            $createFormCont.removeClass('d-none');
                        }
                        $finish.on("click", function() {

                            $('.cbSubmitButton').click();

                        });

                    } else {
                        if ($probihitedPageCont.hasClass('d-none')) {
                            $probihitedPageCont.removeClass('d-none');
                        }
                    }

                } else {
                    // Auth is invalid
                    if ($probihitedPageCont.hasClass('d-none')) {
                        $probihitedPageCont.removeClass('d-none');
                    }
                }

            }
        });
    </script>
</body>

</html>