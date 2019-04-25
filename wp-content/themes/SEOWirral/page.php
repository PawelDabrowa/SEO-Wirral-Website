<?php

get_header();

while(have_posts()) {
    the_post(); ?>
<div class="page-banner">style</div>

    
<section class="section-features js--scroll-to-features">
    <div class="row js--wp-1">
        <h2><?php the_title(); ?></h2>
        <p class="long-copy">
            <?php the_content(); ?>
        </p>
    </div>
</section>

    <?php }

    get_footer();
?>