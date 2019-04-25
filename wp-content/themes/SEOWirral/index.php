<?php


?>
<div>
  <?php
    while(have_posts()) {
      the_post(); ?>
      <section class="section-features">
    <div class="row">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <div>
        <p>Posted by <?php the_author_posts_link();?> <?php the_time('n.j.y'); ?> in <?php echo get_the_category_list(', '); ?></p>
      </div>
      <?php the_post_thumbnail('medium') ?>
      <p class="long-copy">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque, ab ipsum odit hic earum doloremque non dicta minus veniam ad repellendus similique libero recusandae.
      </p>

      <div>
        <?php the_excerpt();?>
        <p><a href="<?php the_permalink();?>">Continue reading &raquo;</a></p>
		</div></div>
    </section>
  <?php }
    echo paginate_links();
  ?>
</div>
<?php
get_footer();
