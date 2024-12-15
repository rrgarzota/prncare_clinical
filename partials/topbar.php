<?php

    $currentModule = isset($currentModule) ? $currentModule : '';
    $currentTab = isset($_GET['page']) ? $_GET['page'] : ''; //identifier for tab page

    $links = array();

    require_once 'page-contents.php'; 

    $pageContentLinksDisplay = '<ul class="nav nav-pills shadow p-2" id="sub-navbar-tabs" role="tablist">';

    // parse_str($_SERVER['QUERY_STRING'], $params);
    // unset($params['page']);
    // $processedParams = http_build_query($params);

    if (isset($links)) {
            // if(isset($_GET['RID']) || isset($_GET['RID2'])) {
                    foreach($links as $link){
                            $active = '';

                            if (strtolower($currentTab) === strtolower($link['page']) ) {
                                    $active = 'active';
                            }

                    $pageContentLinksDisplay .= '<li class="nav-item">
                                                    <a class="nav-link ' . $active . '"  href=" ' . $link['content'] . '?page=' . strtolower($link['page']) . '">
                                                    <i class="fas fa-fw ' . $link['icon'] . '"></i>
                                                    <span> '. $link['label'] . '</span></a>
                                            </li>';
                    }
            // }
    }

    $pageContentLinksDisplay .= '</ul>';

?>

<!-- <div id="section-loader">
    <div class="loader-container">
        <img src="../assets/img/template/loader.gif" class="loader-icon" alt="page loader" />
    </div>
</div> -->

<!-- Navbar -->
<nav
    class="main-header navbar <?php echo $navbarExpand; ?> navbar-<?php echo $themes[CURRENT_THEME]['SYSTEM_TOP_NAVBAR_BRAND_TEXT']; ?> navbar-<?php echo $themes[CURRENT_THEME]['SYSTEM_TOP_NAVBAR_BG']; ?> <?php echo SYSTEM_NO_NAVBAR_BORDER; ?> <?php echo SYSTEM_NAVBAR_SMALL_TEXT; ?>">

    <!-- top navigation + sidebar -->

    <?php if($boxed): ?>

    <div class="container">
        <a href="../index3.html" class="navbar-brand">
            <img src="../assets/img/template/prn-log_prev_ui.png" alt="AdminLTE Logo"
                class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Admin</span>
        </a>
        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
    <?php endif; ?>

            <!--/ top navigation + sidebar -->
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <?php if (CURRENT_LAYOUT != 'layout-top-nav'):?>
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <?php endif; ?>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Profile Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fas fa-user-circle"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right text-sm">
                        <a href="./manage-profile.php" class="dropdown-item">                                    
                            <i class="fas fa-user mr-2"></i> <span class="">Profile</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="./change-password.php" class="dropdown-item">
                            <i class="fas fa-lock"></i> <span class="">Change Password</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="https://c9ebv091.caspio.com/folderlogout" class="dropdown-item dropdown-footer">
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
    <?php if($boxed): ?>
        </div>
    </div>
    <?php endif; ?>
</nav>
<!-- /.navbar -->


<div class="modal" tabindex="-1" role="dialog" id="cb-modal-general">
        <div class="modal-dialog" role="document">
                <div class="modal-content">
                        <div class="modal-header">
                                <h5 class="modal-title" id="cb-modal-title">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body" id="cb-modal-body">

                        </div>
                </div>
        </div>
</div>

