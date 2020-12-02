<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package life_reimagined
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<script src="https://kit.fontawesome.com/5e4bc6a552.js" crossorigin="anonymous"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script> -->
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'life_reimagined' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="header-inner">

			<div class="site-branding">
			<a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/LifeReimagined_Logo_Color.svg" class="logo"></a>

			</div><!-- .site-branding -->

			<div class="header-button">
					<!-- todo: donate CTA button -->
					<button class="button bold">Donate <span class="green chevron"><i class="fas fa-chevron-right"></i></span></button>
			</div>

		</div>

		
	</header><!-- #masthead -->
