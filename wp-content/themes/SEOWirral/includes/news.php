<!--SECTION LATEST NEWS-->

  <section class="section-cities" id="news">
    <div class="row">
      <h2>Latest News</h2>
    </div>
<div class="row js--wp-3">
        <?php
        $homepagePosts = new WP_Query(array(
          'posts_per_page' => 3
        ));
          while ($homepagePosts->have_posts()) {
            $homepagePosts->the_post(); ?>

              <div class="col span-1-of-3 box">
            <?php the_post_thumbnail('medium') ?>
            <p class="news"><?php the_title(); ?><p>
                <div class="city-feature copy">
                  <?php echo wp_trim_words(get_the_content(),20); ?>
                </div>
                <div class="city-feature read">
                  <a href="<?php the_permalink(); ?>">Read More</a>
            </div>
      </div>

    <?php  } wp_reset_postdata();
    ?>
    </div>

  </section>
