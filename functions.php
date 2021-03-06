<?php

if ( ! function_exists( 'init_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which runs
     * before the init hook. The init hook is too late for some features, such as indicating
     * support post thumbnails.
     */
    function init_setup() {
        require get_template_directory() . '/includes/navwalker.php';
        require get_template_directory() . '/includes/widget.php';
        require get_template_directory() . '/includes/options.php';
        require get_template_directory() . '/includes/plugin.php';
        add_filter('show_admin_bar', '__return_false');
        /**
         * Make theme available for translation.
         * Translations can be placed in the /languages/ directory.
         */
        load_theme_textdomain( 'initializr', get_template_directory() . '/languages' );
     
        /**
         * Add default posts and comments RSS feed links to <head>.
         */
        add_theme_support( 'automatic-feed-links' );
     
        /**
         * Enable support for post thumbnails and featured images.
         */
        add_theme_support( 'post-thumbnails' );
     
        /**
         * Add support for two custom navigation menus.
         */
        register_nav_menus( array(
            'primary'   => __( 'Primary Menu', 'initializr' ),
            'secondary' => __('Secondary Menu', 'initializr' )
        ) );
     
        /**
         * Enable support for the following post formats:
         * aside, gallery, quote, image, and video
         */
        add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
    }
    endif; // init_setup
    add_action( 'after_setup_theme', 'init_setup' );