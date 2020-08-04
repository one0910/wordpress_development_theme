<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ken-cens.com
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome-4.7.0/css/font-awesome.min.css">
<!-- ==================================== for lightbox css ================================== -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/lightbox2-2.11.3/lightbox.css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ken-cens-com' ); ?></a>


    <header>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarNav">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand">My Wordpress theme</a>
                </div>
        	<?php
                wp_nav_menu(array(
                    "theme_location" => "primary",
                    "container" => "div",
                    "container_id" => "navbarNav",
                    "container_class" => "collapse navbar-collapse",
                    "menu_class" => "nav navbar-nav navbar-right",
                ));
             ?>
       <!--          <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.html">首頁</a></li>
                        <li><a href="blog.html">部落格</a></li>
                        <li><a href="contact.html">聯絡我們</a></li>
                    </ul>
                </div> -->
            </div>
        </nav>
    </header>