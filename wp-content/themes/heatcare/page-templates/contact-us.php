<?php
/**
 * Template Name: Contact Page Template
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
      <h1><span class="orange-color">Contact</span> Us</h1>
    </div>
  </div>

  <!-- Middle content section -->
  <div class="middle">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-sm-7">


          <h3>Contact Form</h3>

          <div class="padding-top-20">
            <?php echo do_shortcode('[contact-form-7 id="156" title="Contact Form"]'); ?>
          </div>
        </div>

        <div class="col-md-5 col-sm-5 contact-info">
            <h3>CONTACT INFORMATION</h3>
        <?php dynamic_sidebar( 'sidebar-12' ); ?>
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