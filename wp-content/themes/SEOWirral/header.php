<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon" /> 
	<link rel="shortcut icon" href="/favicon.ico/" type="image/x-icon" /> 
    <?php wp_head();?>
</head>

<body <?php body_class();?>>
 <!--<header style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(<?php the_field('hero_image', 115); ?>);">-->
<header class="fullBackground">
        <nav>
            <div class="row">
			<div class="logo">		
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<img src="<?php echo get_theme_file_uri('resources/img/Logo.svg') ?>">
                </a>
			</div>
		<div class="main-nav s--main-nav">
		<?php wp_nav_menu(array(
          'theme_location' => 'SEOWirralMenuLocation'
         )); ?>	
       <!-- <ul class="main-nav js--main-nav">
          <li><a href="#home">home</a></li>
          <li><a href="#about">about</a></li>
          <li><a href="#services">services</a></li>
          <li><a href="#news">news</a></li>
          <li><a href="#case studies">case studies</a></li>
          <li><a class="btn btn-full nav-btn" href=" #contact">contact us</a></li>
        </ul>-->
			
		</div>
        <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
      </div>
    </nav>
      
        <div class="hero-text-box">
          <h1><?php the_field('slogan-top', 115); ?></h1>
          <p class="slogan-nav">We can help you customer find, love and want<br> to share you products with the world.</p>
          <a class="btn btn-full" href="#about">get started today</a>

        </div>

    </header>
