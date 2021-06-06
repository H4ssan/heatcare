<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<!-- Site banner -->

<div class="inner-banner">
  <div class="container">
    <h1><?php the_title(); ?></h1>
  </div>
</div>

	<!-- Middle content section -->
<div class="middle">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-7">
        <div class="padding-top-10">
		<?php the_content(); ?>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 bg-blue">
	  <?php dynamic_sidebar( 'sidebar-8' ); ?>
      </div>
    </div>
  </div>
</div>
<div class="logo-section text-center">
  <div class="container">
    <div class="row">
	<?php dynamic_sidebar( 'sidebar-11' ); ?>
    </div>
  </div>
</div>


<?php get_footer(); ?>
