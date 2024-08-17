<?php

/**
 * -------------------------------------------------------------------------------------------------------------------------------------------------------
 * Theme
 * -------------------------------------------------------------------------------------------------------------------------------------------------------
 */

/**
 *  
 * Accepted values: 
 * 
 */
define('CURRENT_THEME', 'blue-sidebar');
/**
 *  
 * Accepted values: layout-fixed, layout-navbar-fixed, layout-footer-fixed, sidebar-collapse, layout-boxed, layout-top-nav-plus-sidebar, layout-top-nav
 * 
 */
define('CURRENT_LAYOUT', 'layout-sidebar');


/**
 * -------------------------------------------------------------------------------------------------------------------------------------------------------
 * Variants customizations
 * -------------------------------------------------------------------------------------------------------------------------------------------------------
 */

/**
 * 
 * Second parameter is required. 
 * This variable will set the text color of the top navbar. 
 * Use 'dark' value for dark bg-background and 'light' for light bg-background.
 * 
 * Accepted values: dark | light
 * 
 */
define('SYSTEM_NAVBAR_TEXT_COLOR', 'light');

/**
 * 
 * Second parameter is optional.
 * This variable will set the top navbar bg-color.
 * If second parameter is left blank, the default value will be 'dark'.
 * 
 * Accepted values: primary | secondary | info | success | danger | indigo | purple | pink | teal | cyan | gray-dark | gray | warning | white | orange.
 * 
 */
define('SYSTEM_NAVBAR_VARIANTS', 'light');

/**
 * 
 * Second parameter is required. 
 * This variable will set the sidebar bg-color.
 * 
 * Accepted values: dark | light
 * 
 */
define('SYSTEM_SIDEBAR_BACKGROUND', 'dark');

/**
 * 
 * Second parameter is required. 
 * This variable will set the bg-color of the sidebar's active link.
 * 
 * Accepted values: primary | secondary | info | success | danger | indigo | purple | pink | teal | cyan | gray-dark | gray | warning | white | orange.
 * 
 */
define('SYSTEM_SIDEBAR_ACTIVE_LINK', 'cyan');

/**
 * 
 * Second parameter is required. 
 * This variable will set the bg-color of the brand logo.
 * If second parameter is left blank, the default value will be 'dark'.
 * 
 * Accepted values: primary | secondary | info | success | danger | indigo | purple | pink | teal | cyan | gray-dark | gray | warning | white | orange.
 * 
 */
define('SYSTEM_BRAND_LOGO_VARIANTS', '');

/**
 * -------------------------------------------------------------------------------------------------------------------------------------------------------
 * General Customizations
 * -------------------------------------------------------------------------------------------------------------------------------------------------------
 */

/**
 * 
 * Second parameter is optional. 
 * If second parameter is left blank, the navbar will have a border.
 * 
 * Accepted values: border-bottom-0
 * 
 */
define('SYSTEM_NO_NAVBAR_BORDER', '');

/**
 * 
 * Second parameter is optional. 
 * If second parameter is left blank, the body's font size will be as is.
 * 
 * Accepted values: text-sm
 * 
 */
define('SYSTEM_BODY_SMALL_TEXT', '');

/**
 * 
 * Second parameter is optional. 
 * If second parameter is left blank, the top navbar's font size will be as is.
 * 
 * Accepted values: text-sm
 * 
 */
define('SYSTEM_NAVBAR_SMALL_TEXT', '');

/**
 * 
 * Second parameter is optional. 
 * If second parameter is left blank, the top navbar's font size will be as is.
 * 
 * Accepted values: text-sm
 * 
 */
define('SYSTEM_NAVBAR_BRAND_TEXT', '');

/**
 * 
 * Second parameter is optional. 
 * If second parameter is left blank, the top navbar's font size will be as is.
 * 
 * Accepted values: text-sm
 * 
 */
define('SYSTEM_SIDEBAR_SMALL_TEXT', '');

/**
 * 
 * Second parameter is optional. 
 * If second parameter is left blank, the footer's font size will be as is.
 * 
 * Accepted values: text-sm
 * 
 */
define('SYSTEM_FOOTER_SMALL_TEXT', '');

/**
 * 
 * Second parameter is optional. 
 * If second parameter is left blank, the sidebar's nav style will be as is.
 * 
 * Accepted values: nav-flat
 * 
 */
define('SYSTEM_SIDEBAR_FLAT_STYLE', 'nav-flat');

/**
 * 
 * Second parameter is optional. 
 * If second parameter is left blank, the sidebar's nav style will be as is.
 * 
 * Accepted values: nav-legacy
 * 
 */
define('SYSTEM_SIDEBAR_LEGACY_STYLE', '');

/**
 * 
 * Second parameter is optional. 
 * If second parameter is left blank, the sidebar's nav style will be as is.
 * 
 * Accepted values: nav-compact
 * 
 */
define('SYSTEM_SIDEBAR_COMPACT_STYLE', '');

/**
 * 
 * Second parameter is optional. 
 * If second parameter is left blank, the sidebar's nav style will be as is.
 * 
 * Accepted values: nav-child-indent
 * 
 */
define('SYSTEM_SIDEBAR_CHILD_INDENT', 'nav-child-indent');

/**
 * 
 * Second parameter is optional. 
 * If second parameter is left blank, the sidebar's nav style will be as is.
 * 
 * Accepted values: sidebar-no-expand
 * 
 */
define('SYSTEM_SIDEBAR_DISABLE_AUTO_EXPAND', 'sidebar-no-expand');


