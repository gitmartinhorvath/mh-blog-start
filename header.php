<!-- /*
* Template Name: Style
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/

//////////////////////////////////////////////////////
Contributor
* Email: 			martinhorvath@outlook.sk
*/ --> 
<!doctype html> 
<!--  Converted from HTML to WordPress with Pinegrow Web Editor. https://pinegrow.com  -->
<html <?php language_attributes(); ?>> 
    <head> 
        <meta charset="<?php bloginfo( 'charset' ); ?>"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
        <meta name="author" content="Untree.co"> 
        <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon.png">                   
        <!--old fonts -->         
        <!--   <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital@0;1&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
  -->                                                                                                   
        <!-- Fonts -->         
        <!-- font-family: 'Poppins', sans-serif; -->         
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>          
        <!-- font-family: 'Open Sans', sans-serif; -->         
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>                   
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <meta content="Pinegrow Web Editor" name="generator">
        <?php wp_head(); ?>
    </head>     
    <div id="overlayer"></div>     
    <div class="loader"> 
        <div class="spinner-border" role="status"> 
            <span class="sr-only"><?php _e( 'Loading...', 'blog' ); ?></span> 
        </div>         
    </div>     
    <body class="<?php echo implode(' ', get_body_class()); ?>">
        <?php if( function_exists( 'wp_body_open' ) ) wp_body_open(); ?> 
        <div class="lines-wrap"> 
            <div class="lines-inner"> 
                <div class="lines"></div>                 
            </div>             
        </div>         
        <!-- END lines -->         
        <div class="site-mobile-menu site-navbar-target"> 
            <div class="site-mobile-menu-header"> 
                <div class="site-mobile-menu-close"> 
                    <span class="icofont-close js-menu-toggle"></span> 
                </div>                 
            </div>             
            <div class="site-mobile-menu-body"></div>             
        </div>         
        <nav class="site-nav"> 
            <div class="container"> 
                <div class="site-navigation"> 
                    <a href="index.html" class="logo float-left m-0"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/Logo_black.svg" height="70" width="70"> <span class="text-primary"></span></a> 
                    <?php if ( has_nav_menu( 'primary' ) ) : ?>
                        <?php
                            PG_Smart_Walker_Nav_Menu::$options['template'] = '<li id="{ID}" class="{CLASSES}"> 
                                                        <a {ATTRS}>{TITLE}</a> 
                                                    </li>';
                            wp_nav_menu( array(
                                'container' => '',
                                'theme_location' => 'primary',
                                'items_wrap' => '<ul class="%2$s d-lg-inline-noone d-none js-clone-nav site-menu text-left" id="%1$s">%3$s</ul>',
                                'walker' => new PG_Smart_Walker_Nav_Menu()
                        ) ); ?>
                    <?php endif; ?> 
                    <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-block" data-toggle="collapse" data-target="#main-navbar"> <span></span> </a> 
                </div>                 
            </div>             
        </nav>         
        <main>