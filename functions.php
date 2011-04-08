<?php
    //Add support for WordPress 3.0's custom menus
    add_action( 'init', 'register_my_menu' );

    //Register area for custom menu
    function register_my_menu() {
        register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
    }

    // Enable post thumbnails
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(520, 250, true);

    //Enable widget-enabled sidebar
    if ( function_exists('register_sidebars') ) {
        register_sidebars(2);
    }

    function excludePagesFromSearch($query) {
        if($query->is_search) {
            $query->set('post_type','post');
        }
        return $query;
    }
    add_filter('pre_get_posts','excludePagesFromSearch');
?>
