<?php

if (!function_exists('sp_theme_setup')):
    function sp_theme_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Twenty Sixteen, use a find and replace
         * to change 'ph-theme' to the name of your theme in all the template files
         */
        load_theme_textdomain('paleohacks', get_template_directory() . '/languages');
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');
        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');
        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(1200, 9999);
        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'sp-theme'),
            'social' => __('Social Links Menu', 'sp-theme'),
            'footer' => __('Footer Menu', 'sp-theme'),
            'sub-footer' => __('Sub Footer Menu', 'sp-theme'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));
        /*
         * Enable support for Post Formats.
         *
         * See: https://codex.wordpress.org/Post_Formats
         */
        add_theme_support('post-formats', array(
            'aside',
            'image',
            'video',
            'quote',
            'link',
            'gallery',
            'status',
            'audio',
            'chat',
        ));
    }

    add_action('after_setup_theme', 'sp_theme_setup');
endif; // sp_theme_setup

if (!function_exists('bc_import_demo')) {
    function bc_import_demo()
    {
        if(isset($_POST['import-data'])){
            default_import($_POST);
        }
        include_once BC_ADMIN.'import-page.php';
    }
}
if (!function_exists('register_import_page')) {
    function register_import_page()
    {
        add_theme_page('Default Theme Content', 'Default Theme Content', 'manage_options', 'import_demo', 'bc_import_demo');
    }

    add_action('admin_menu', 'register_import_page');
}
if (!function_exists('register_bc_widgets')):
    function register_bc_widgets()
    {
        register_sidebar(array(
            'name' => 'sidebar-sp',
            'id' => 'sidebar-sp',
            'description' => '',
            'class' => '',
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget' => "</li>\n",
            'before_title' => '<h2 class="widgettitle">',
            'after_title' => "</h2>\n",
        ));
        register_sidebar(array(
            'name' => 'footer-widget-1',
            'id' => 'footer-widget-1',
            'description' => '',
            'class' => '',
            'before_widget' => '',
            'after_widget' => "",
            'before_title' => '<h3 class="h6 text-white mb-3">',
            'after_title' => "</h3>\n",
        ));
        register_sidebar(array(
            'name' => 'footer-widget-2',
            'id' => 'footer-widget-2',
            'description' => '',
            'class' => '',
            'before_widget' => '',
            'after_widget' => "",
            'before_title' => '<h3 class="h6 text-white mb-3">',
            'after_title' => "</h3>\n",
        ));
        register_sidebar(array(
            'name' => 'footer-widget-3',
            'id' => 'footer-widget-3',
            'description' => '',
            'class' => '',
            'before_widget' => '',
            'after_widget' => "",
            'before_title' => '<h3 class="h6 text-white mb-3">',
            'after_title' => "</h3>\n",
        ));
        register_sidebar(array(
            'name' => 'footer-widget-4',
            'id' => 'footer-widget-4',
            'description' => '',
            'class' => '',
            'before_widget' => '',
            'after_widget' => "",
            'before_title' => '<h3 class="h6 text-white mb-3">',
            'after_title' => "</h3>\n",
        ));
    }

    add_action('widgets_init', 'register_bc_widgets');
endif; // sp_theme_widgets
add_action('add_meta_boxes', 'register_sp_secondary_image');
if (!function_exists('register_sp_secondary_image')):
    function register_sp_secondary_image()
    {
        $screens = array('post', 'page');
        foreach ($screens as $screen) {
            add_meta_box('secondary_image', 'Secondary Image', 'sp_secondary_image_callback', $screen, 'side', 'high');
        }
    }
endif; // sp_secondary_image
if (!function_exists('sp_secondary_image_callback')):
    function sp_secondary_image_callback($post)
    {
        $sp_secondary_image = get_post_meta($post->ID, 'secondary_image', true);
        if (!$sp_secondary_image) {
            $sp_secondary_image_url[0] = get_stylesheet_directory_uri() . '/images/timthumb.png';
            $sp_secondary_image_url[1] = '300';
            $removeLogoBtnCss = ' style="display:none;" ';
            $sp_secondary_image = '';
        } else {
            $sp_secondary_image_url = wp_get_attachment_image_src($sp_secondary_image, 'medium');
            $removeLogoBtnCss = '';
        }
        echo
            '<div>
					<img style="border: 1px solid #ccc; max-width: 100%; height: auto; margin-bottom: 20px;" width="' . $sp_secondary_image_url[1] . '" id="sp_seconday_image_prev" src="' . apply_filters('cf_image_link', $sp_secondary_image_url[0]) . '">
				</div>
				<div>
					<input type="hidden" name="seconday_image" id="sp_seconday_image_url" class="regular-text" value="' . $sp_secondary_image . '">
					<input type="button" name="upload-btn" id="sp_seconday_image_btn" class="button-secondary" value="Upload Image">
					<input type="button" name="remove-btn" id="sp_seconday_image_remove" class="button-secondary" value="Remove Image" ' . $removeLogoBtnCss . '>
				</div>';
    }
endif; // sp_secondary_image_callback
if (!function_exists('sp_secondary_image_save')):
    function sp_secondary_image_save($post_id)
    {
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
            return $post_id;
        if ($_POST['post_type'] != 'page' && $_POST['post_type'] != 'post') {
            return $post_id;
        }
    }
endif; // sp_secondary_image_save

function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

