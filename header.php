<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title><?php wp_title ( '|', true,'right' ); ?> <?php bloginfo('name'); ?></title>

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/fav.ico" />

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/libs/js/jquery.truncator.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/libs/js/rocket.js"></script>


<?php
    /*
     *  Add this to support sites with sites with threaded comments enabled.
     */
    if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );

    wp_head();

    wp_get_archives('type=monthly&format=link');
?>
</head>
<body>

    <span id="topBar"></span>
    <div id="wrapper">
        <header>
        	<a href="<?php echo get_option('home'); ?>" id="logo"><?php bloginfo('name'); ?></a>
                <?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'nav', 'theme_location' => 'primary-menu' ) ); ?>
        </header>
