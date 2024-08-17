<?php

$sidebarCollapse = ''; 
$container = 'container-fluid'; // full screen content width
$sidebarMini = 'sidebar-mini'; //show mini sidebar
$currentLayout = CURRENT_LAYOUT;
$boxed = false;
$navbarExpand = 'navbar-expand';
$sourceFile = 'adminlte.min';
$cssSourceFile = $themes[CURRENT_THEME]['SYSTEM_CSS'];

if (!empty(CURRENT_LAYOUT) && CURRENT_LAYOUT === 'layout-top-nav-plus-sidebar') {
    $currentLayout = 'layout-top-nav';
    $sourceFile = 'adminlte';

}

if (!empty(CURRENT_LAYOUT) && ( CURRENT_LAYOUT === 'layout-top-nav-plus-sidebar' || CURRENT_LAYOUT === 'layout-top-nav' ) ) {
    $sidebarCollapse = 'sidebar-collapse';
    $container = 'container';
    $sidebarMini = '';
    $boxed = true;
    $navbarExpand = 'navbar-expand-lg';

}

