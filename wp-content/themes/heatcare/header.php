<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="https://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js?ver=3.7.0" type="text/javascript"></script>
<![endif]-->
<link href="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/css/topmenu.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/assets/style.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/css/animate.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/assets/fonts/font-awesome.min.css" rel="stylesheet">
<!-- Include jQuery and bootstrap JS plugins -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/js/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/js/topmenu.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$("#cssmenu").menumaker({
		title: "Menu",
		format: "multitoggle"
	});
</script>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="top">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6 logo-main"> <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"  class="img-responsive" /></a> </div>
      <div class="col-md-6 col-sm-6 social-phone">
	  <?php dynamic_sidebar( 'sidebar-7' ); ?>
      </div>
    </div>
  </div>

  <div class="main-menu">
  <div class="container">
      <div class="top-menu">
        <div id="cssmenu">
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_class'     => 'top-menu',
					'container'     => '',
					
				)
			);
			?>
    </div>
	</div>
	</div>
  </div>
</header>


