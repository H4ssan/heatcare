<?php
/**
 * Template Name: Front Page Template
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
<div class="banner">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
	<?php
	query_posts('cat=4');
	$y=0;
	while ( have_posts() ) :the_post();
	?>
      <li data-target="#carousel-example-generic" data-slide-to="<?php echo $y; ?>" <?php if($y==0){ ?>class="active"<?php } ?>></li>
	  <?php 
	$y++;
	endwhile; // End of the loop. 
	wp_reset_query();
	?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
	<?php
	query_posts('cat=4');
	$x=1;
	while ( have_posts() ) :the_post();
	?>
      <div class="item<?php if($x==1){ ?> active<?php } ?>"> <?php the_post_thumbnail('full') ?>
        <div class="carousel-caption">
          <h1><?php the_title() ?></h1>
          <p><?php the_content() ?></p>
           </div>
      </div>
      <?php 
	$x++;
	endwhile; // End of the loop.
	wp_reset_query();
	?>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> 
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> 
		<span class="sr-only">Previous</span> </a> 
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> 
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> 
			<span class="sr-only">Next</span> </a> </div>
</div>

<!-- Middle content section -->
<div class="middle">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-7">
        <h1><span class="orange-color"><?php the_field('title'); ?></h1>
        <div class="padding-top-10">
		<?php the_field('text'); ?>
        </div>
      </div>
      <div class="col-md-4 col-sm-5 bg-blue">
	  <?php dynamic_sidebar( 'sidebar-8' ); ?>
      </div>
    </div>
  </div>
</div>
<div class="our-services">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <h1><span class="orange-color"><?php the_field('service_title'); ?></h1>
      </div>
    </div>
  <div class="row padding-top-20">
  
	<?php
				$rowid = 1;
				if( have_rows('service_box') ): while( have_rows('service_box') ) : the_row(); ?>
  
      	<div class="col-md-3 col-sm-6 padding-top-20"> <a><i class="<?php echo get_sub_field('icon'); ?>"></i></a>
        	<h3><?php echo get_sub_field('box_title'); ?></h3>
        	<p><?php echo get_sub_field('box_text'); ?></p>
 		</div>
		 
		<?php	
		$rowid++;	
		endwhile;

		// No value.
		else :
    	// Do something...
		endif; ?>

    </div>

  </div>
</div>

<div class="support">
  <div class="container">
    <div class="row">

		<?php
				$rowid = 1;
				if( have_rows('support_boxes') ): while( have_rows('support_boxes') ) : the_row(); ?>

      <div class="col-md-4 col-sm-4 padding-bottom-20"> <i class="<?php echo get_sub_field('support_icon'); ?>"></i>
        <h4><?php echo get_sub_field('support_title'); ?></h4>
        <p><?php echo get_sub_field('support_text'); ?></p>
      </div>

	  <?php	
		$rowid++;	
		endwhile;

		// No value.
		else :
    	// Do something...
		endif; ?>
    </div>
  </div>

  <div class="container bg-grey">
    <div class="row">
      <div class="col-md-9 col-sm-9">
	  <?php dynamic_sidebar( 'sidebar-9' ); ?>
      </div>
      <div class="col-md-3 col-sm-3 "> 
	  <?php dynamic_sidebar( 'sidebar-10' ); ?>
         </div>
    </div>
  </div>
</div>

<section class="testimonials" id="carousel">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2><span class="orange-color">our</span> Client Reviews</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
          <!-- Carousel indicators -->
          <ol class="carousel-indicators">
		  <?php
	query_posts('cat=3');
	$y=0;
	while ( have_posts() ) :the_post();
	?>
      <li data-target="#fade-quote-carousel" data-slide-to="<?php echo $y; ?>" <?php if($y==0){ ?>class="active"<?php } ?>></li>
	  <?php 
		$y++;
		endwhile; // End of the loop. 
		wp_reset_query();
		?>
          </ol>
	
          <!-- Carousel items -->
          <div class="carousel-inner">
			  	<?php 
					query_posts('cat=3');
					$x=1;
					while (have_posts() ) : the_post();
				?>
            <div class="item <?php if($x==1){ ?> active<?php } ?>">
              <blockquote>
                <p><?php the_content()?></p>
              </blockquote>
            </div>
			  <?php
		 		 $x++;
				endwhile; // End of the loop. 
				wp_reset_query();
				?>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
<div class="logo-section text-center">
  <div class="container">
    <div class="row"> 
			<?php dynamic_sidebar( 'sidebar-11' ); ?>
    </div> 
  </div>
</div>

<div class="quick-contact">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1><span class="orange-color">quick</span> Contact</h1>
      </div>
    </div>
    <div class="row padding-top-30">
      <div class="col-md-8 col-sm-8">
        
          <div class="row">
              <?php echo do_shortcode('[contact-form-7 id="88" title="Contact form 1"]'); ?>
          </div>
      </div>

      <div class="col-md-4 col-sm-4 text-left">
	  <?php dynamic_sidebar( 'sidebar-12' ); ?>
      </div>

    </div>
  </div>
</div>
<div class="call-action">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <?php dynamic_sidebar( 'sidebar-13' ); ?>
      </div>
    </div>
  </div>
</div>

<?php // get_sidebar( 'front' ); ?>
<?php get_footer(); ?>
