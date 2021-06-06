<?php
/**
 * Template Name: Plumbing Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>


<!-- Site banner -->
<div class="inner-banner">
    <div class="container">
      <h1> <?php the_title(); ?></h1>
    </div>
  </div>
  
  <!-- Middle content section -->
  <div class="middle">
    <div class="container">
      <div class="row">
  
        <div class="col-md-8 col-sm-8">
        <?php the_content(); ?>
          </div>
  
       
        <div class="col-md-4 col-sm-4 bg-blue">
    
	  <?php dynamic_sidebar( 'sidebar-8' ); ?>
        </div>
      </div>
    </div>
  </div>
  
  
  <div class="our-services" style="background-color:#fff; padding-top:20px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <h1><span class="orange-color">Our</span> Services</h1>
        </div>
      </div>

      <div class="row padding-top-20">
        <?php
	        query_posts('cat=6');
	        while ( have_posts() ) :the_post();
        ?> 
   
        <div class="col-md-3 col-sm-6 padding-top-20">
            <a ><i class="fa"><?php the_post_thumbnail(); ?></i></a>
            <h3><?php the_title(); ?></h3>
            <p><?php the_content() ?></p>
        </div>

        <?php
	        endwhile; // End of the loop. 
	        wp_reset_query();
	    ?>
  
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
  
  
  
  