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

                <!-- sample links -->

                <!-- <li class="nav-item">
                    <a href="index3.html" class="nav-link">
                        <i class="fa fa-home"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index3.html" class="nav-link">
                        <i class="fa fa-address-card"></i> Employee Directory
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index3.html" class="nav-link">
                        <i class="fa fa-address-book"></i> Employee Report
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index3.html" class="nav-link">
                        <i class="fas fa-list"></i> Feedback List
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="dropdown-item"><a href="#">Action</a></li>
                        <li class="dropdown-item"><a href="#">Another action</a></li>
                        <li class="dropdown-item"><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-item"><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-item"><a href="#">One more separated link</a></li>
                    </ul>
                </li> -->
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
               
                <!-- Notifications Dropdown Menu -->
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li> -->
                <!-- Profile Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fas fa-user-circle"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right text-sm">
                        <a href="#" class="dropdown-item">                                    
                            <i class="fas fa-user mr-2"></i> <span class="">Profile</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-lock"></i> <span class="">Change Password</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">
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