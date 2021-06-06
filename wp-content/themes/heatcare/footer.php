<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	<!-- Site footer -->
<div class="bottom">
  <div class="container padding-bottom-50 padding-top-50">
    <div class="row">
      <div class="col-md-4 col-sm-4 usefull-links">
        <h3>Quick Links</h3>
        <div class="row">
          <div class="col-md-6 col-xs-6 col-sm-6">
		  <?php dynamic_sidebar( 'sidebar-2' ); ?>
          </div>
          
        </div>
      </div>
      <div class="col-md-4 col-sm-4">
        <h3>Location</h3>
        <?php dynamic_sidebar( 'sidebar-3' ); ?>
	</div>
      <div class="col-md-4  col-sm-4">
        <h3>Contact Info</h3>
        <?php dynamic_sidebar( 'sidebar-4' ); ?>
      </div>
    </div>
  </div>
  <div class="last-bar">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
		<?php dynamic_sidebar( 'sidebar-5' ); ?>
        </div>
        <div class="col-md-6 col-sm-6 social-phone">
		<?php dynamic_sidebar( 'sidebar-6' ); ?>
        </div>
      </div>
    </div>
  </div>
</div>


<?php wp_footer(); ?>


</body>
</html>
