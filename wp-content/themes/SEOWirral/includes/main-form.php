<!--SECTION FORM-->

  <section id="contact" class="section-form bottom" style="background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url(<?php the_field('main_form', 23); ?>);">
    <div class="row">
      <h2><?php the_field('title_main_form',23); ?></h2>
		<div class="box-small">
		<p>
			<?php the_field('copy_main_form', 23); ?>
		</p>
		</div>
    </div>
    <div class="row">
      <form class="contact-form">
	<?php	 echo do_shortcode(' [contact-form-7 id="187" title="Main Form"] '); ?>
   <!--     <div class="row">
          <div class="col span-1-of-3">
            <label for="name"></label>
          </div>
          <div class="col span-2-of-3">
            <input type="text" name="name" id="name" placeholder="Your name" required>
          </div>
        </div>
        <div class="row">
          <div class="col span-1-of-3">
            <label for="email"></label>
          </div>
          <div class="col span-2-of-3">
            <input type="email" name="email" id="email" placeholder="Your email" required>
          </div>
        </div>
        <div class="row">
          <div class="col span-1-of-3">
            <label></label>
          </div>
          <div class="col span-2-of-3">
            <textarea name="message" placeholder="Your message"></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col span-1-of-3">
            <label>&nbsp;</label>
          </div>
          <div class="col span-2-of-3">
            <input type="submit" value="Send it!">
          </div>
        </div> -->

      </form>

    </div>
  </section>
