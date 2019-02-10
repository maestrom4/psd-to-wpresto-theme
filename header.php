<?php
/**
 * Header file.
 * 
 * @package wpresto
 * @version 1.0
 */
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title><?php  wp_title( '|', true, 'right'); ?></title>
     <?php wp_head(); ?>
 </head>
 <header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/Resto_03.png';?>" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <?php 
                wp_nav_menu(
                    array(
                        'theme_location'    => 'primary',
                        'container'         => false,
                        'menu_class'        => 'primary-menu ml-auto',
                        'wrap_items'        => '%3$s',
                    )
                );
            ?>
        </div>
        </nav>
    </div><!-- end of container -->
 </header>
 <body <?php body_class(); ?>>
     
