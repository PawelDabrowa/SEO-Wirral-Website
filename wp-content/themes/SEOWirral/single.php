<?php

get_header();

while(have_posts()) {
    the_post(); ?>
 <?php the_post_thumbnail('medium_large') ?>
<h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    <?php }

get_footer();

?>
