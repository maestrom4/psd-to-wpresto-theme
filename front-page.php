<?php
/**
 * Main template file default fallback of our theme.
 * 
 * @package wpresto
 * @version 1.0
 */

get_header();

if ( have_posts() ) : while( have_posts() ) : the_post();
    the_content();
endwhile;
endif;
// get_template_part( 'template_part/page', 'page');
// get_sidebar();
get_footer();