<?php

if (!defined('THEME_DIR'))
{
    define('THEME_DIR', get_template_directory());
}
if (!defined('THEME_DIR_URI'))
{
    define('THEME_DIR_URI', get_template_directory_uri() . '/');
}
if (!defined('THEME_VERSION'))
{
    define('THEME_VERSION', '1.1');
}
if(file_exists(THEME_DIR.'/inc/enqueue.php'))
{
    require_once THEME_DIR.'/inc/enqueue.php';
}
if(file_exists(THEME_DIR.'/inc/theme-supports.php'))
{
    require_once THEME_DIR.'/inc/theme-supports.php';
}
if(file_exists(THEME_DIR.'/inc/walker.php'))
{
    require_once THEME_DIR.'/inc/walker.php';
}
if(file_exists(THEME_DIR.'/inc/nav-menus.php'))
{
    require_once THEME_DIR.'/inc/nav-menus.php';
}

if(file_exists(THEME_DIR.'/inc/admin-homepage.php'))
{
    require_once THEME_DIR.'/inc/admin-homepage.php';
}
