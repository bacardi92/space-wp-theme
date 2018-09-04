<?php
if (!function_exists('sp_enqueue_scripts'))
{
    function sp_enqueue_scripts()
    {
        // styles
        wp_enqueue_style(
            'bootstrap',
            THEME_DIR_URI . 'assets/vendor/bootstrap/css/bootstrap.css',
            array(),
            THEME_VERSION,
            'all');
        wp_enqueue_style(
            'font-awesome',
            THEME_DIR_URI . 'assets/vendor/font-awesome/css/all.min.css',
            array('bootstrap'),
            THEME_VERSION,
            'all');
        wp_enqueue_style(
            'hs-megamenu',
            THEME_DIR_URI . 'assets/vendor/hs-megamenu/src/hs.megamenu.css',
            array('bootstrap', 'font-awesome'),
            THEME_VERSION,
            'all');
        wp_enqueue_style(
            'malihu-custom-scrollbar-plugin',
            THEME_DIR_URI . 'assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css',
            array('bootstrap', 'font-awesome', 'hs-megamenu'),
            THEME_VERSION,
            'all');
        wp_enqueue_style(
            'custombox',
            THEME_DIR_URI . 'assets/vendor/custombox/dist/custombox.min.css',
            array('bootstrap', 'font-awesome'),
            THEME_VERSION,
            'all');
        wp_enqueue_style(
            'animate',
            THEME_DIR_URI . 'assets/vendor/animate.css/animate.min.css',
            array('bootstrap', 'font-awesome'),
            THEME_VERSION,
            'all');
        wp_enqueue_style(
            'slick-carousel',
            THEME_DIR_URI . 'assets/vendor/slick-carousel/slick/slick.css',
            array('bootstrap', 'font-awesome'),
            THEME_VERSION,
            'all');
        wp_enqueue_style(
            'cubeportfolio',
            THEME_DIR_URI . 'assets/vendor/cubeportfolio/css/cubeportfolio.min.css',
            array('bootstrap', 'font-awesome'),
            THEME_VERSION,
            'all');
        wp_enqueue_style(
            'theme-main',
            THEME_DIR_URI . 'assets/css/theme.min.css',
            array('bootstrap', 'font-awesome',),
            THEME_VERSION,
            'all');
        wp_enqueue_style(
            'theme-custom',
            THEME_DIR_URI . 'assets/css/theme-custom.css',
            array('bootstrap', 'font-awesome'),
            THEME_VERSION,
            'all');

        //scripts
        wp_deregister_script('jquery');
        wp_deregister_script('jquery-migrate');
        wp_enqueue_script('jquery',
            THEME_DIR_URI . 'assets/vendor/jquery/dist/jquery.min.js',
            array(),
            THEME_VERSION,
            true);
        wp_enqueue_script('jquery-migrate',
            THEME_DIR_URI . 'assets/vendor/jquery-migrate/dist/jquery-migrate.min.js',
            array('jquery'),
            THEME_VERSION,
            true);
        wp_enqueue_script('popper',
            THEME_DIR_URI . 'assets/vendor/popper.js/dist/umd/popper.min.js',
            array('jquery', 'jquery-migrate'),
            THEME_VERSION,
            true);
        wp_enqueue_script('bootstrap',
            THEME_DIR_URI . 'assets/vendor/bootstrap/bootstrap.min.js',
            array('jquery', 'jquery-migrate'),
            THEME_VERSION,
            true);
        wp_enqueue_script('hs-megamenu',
            THEME_DIR_URI . 'assets/vendor/hs-megamenu/src/hs.megamenu.js',
            array('jquery', 'jquery-migrate'),
            THEME_VERSION,
            true);
        wp_enqueue_script('jquery-validation',
            THEME_DIR_URI . 'assets/vendor/jquery-validation/dist/jquery.validate.min.js',
            array('jquery', 'jquery-migrate'),
            THEME_VERSION,
            true);
        wp_enqueue_script('malihu-custom-scrollbar-plugin',
            THEME_DIR_URI . 'assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js',
            array('jquery', 'jquery-migrate'),
            THEME_VERSION,
            true);
        wp_enqueue_script('custombox',
            THEME_DIR_URI . 'assets/vendor/custombox/dist/custombox.min.js',
            array('jquery', 'jquery-migrate'),
            THEME_VERSION,
            true);
        wp_enqueue_script('custombox-legacy',
            THEME_DIR_URI . 'assets/vendor/custombox/dist/custombox.legacy.min.js',
            array('jquery', 'jquery-migrate'),
            THEME_VERSION,
            true);
        wp_enqueue_script('typed',
            THEME_DIR_URI . 'assets/vendor/typed.js/lib/typed.min.js',
            array('jquery', 'jquery-migrate'),
            THEME_VERSION,
            true);
        wp_enqueue_script('slick',
            THEME_DIR_URI . 'assets/vendor/slick-carousel/slick/slick.js',
            array('jquery', 'jquery-migrate'),
            THEME_VERSION,
            true);
        wp_enqueue_script('cubeportfolio',
            THEME_DIR_URI . 'assets/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js',
            array('jquery', 'jquery-migrate'),
            THEME_VERSION,
            true);
        wp_enqueue_script('gmaps',
            THEME_DIR_URI . 'assets/vendor/gmaps/gmaps.min.js',
            array('jquery', 'jquery-migrate'),
            THEME_VERSION,
            true);
        wp_enqueue_script('hs-core',
            THEME_DIR_URI . 'assets/js/hs.core.js',
            array('jquery', 'jquery-migrate'),
            THEME_VERSION,
            true);
        wp_enqueue_script('hs-header',
            THEME_DIR_URI . 'assets/js/components/hs.header.js',
            array('jquery', 'jquery-migrate'),
            THEME_VERSION,
            true);
        wp_enqueue_script('hs-unfold',
            THEME_DIR_URI . 'assets/js/components/hs.unfold.js',
            array('jquery', 'jquery-migrate'),
            THEME_VERSION,
            true);
        wp_enqueue_script('hs-validation',
            THEME_DIR_URI . 'assets/js/components/hs.validation.js',
            array('jquery', 'jquery-migrate'),
            THEME_VERSION,
            true);
        wp_enqueue_script('hs-focus-state',
            THEME_DIR_URI . 'assets/js/helpers/hs.focus-state.js',
            array('jquery', 'jquery-migrate'),
            THEME_VERSION,
            true);
        wp_enqueue_script('hs-malihu-scrollbar',
            THEME_DIR_URI . 'assets/js/components/hs.malihu-scrollbar.js',
            array('jquery', 'jquery-migrate'),
            THEME_VERSION,
            true);
        wp_enqueue_script('hs-modal-window',
            THEME_DIR_URI . 'assets/js/components/hs.modal-window.js',
            array('jquery', 'jquery-migrate'),
            THEME_VERSION,
            true);
        wp_enqueue_script('hs-show-animation',
            THEME_DIR_URI . 'assets/js/components/hs.show-animation.js',
            array('jquery', 'jquery-migrate'),
            THEME_VERSION,
            true);
        wp_enqueue_script('hs-slick-carousel',
            THEME_DIR_URI . 'assets/js/components/hs.slick-carousel.js',
            array('jquery', 'jquery-migrate'),
            THEME_VERSION,
            true);
        wp_enqueue_script('hs-cubeportfolio',
            THEME_DIR_URI . 'assets/js/components/hs.cubeportfolio.js',
            array('jquery', 'jquery-migrate'),
            THEME_VERSION,
            true);
        wp_enqueue_script('hs-g-map',
            THEME_DIR_URI . 'assets/js/components/hs.g-map.js',
            array('jquery', 'jquery-migrate'),
            THEME_VERSION,
            true);
        wp_enqueue_script('hs-go-to',
            THEME_DIR_URI . 'assets/js/components/hs.go-to.js',
            array('jquery', 'jquery-migrate'),
            THEME_VERSION,
            true);

    }

    add_action('wp_enqueue_scripts', 'sp_enqueue_scripts');
}