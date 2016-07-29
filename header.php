<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package scout
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<!--[if lte IE 9]><link media="all" rel="stylesheet" href="css/ie.css"><![endif]-->
<style>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
	#wrapper .banner .bg-stretch{
		background: url('<?php echo $image[0]; ?>') top center no-repeat;
		background-size: cover;
		width: 100%;
		height: auto;
	}
</style>
</head>

<body <?php body_class(); ?> >
<div id="wrapper">
	<header id="header">
		<div class="container">
			<div class="logo">
				<a href="/"><img src="<?php echo get_template_directory_uri() .'/images/logo.png' ?>" height="85" width="185" alt="Recruiting Strategies - Scout"></a>
			</div>
			<nav id="nav" class="main-navigation" role="navigation">
				<a href="#" class="nav-opener"><span><em></em></span></a>
				<?php 
					$menu_header = array( 
						'theme_location' => 'primary', 
						'menu_id' => 'primary-menu',
						'container_class' => 'nav-drop'
					);
					wp_nav_menu($menu_header);
				 ?>
			</nav><!-- #site-navigation -->
		</div>
	</header>
	

