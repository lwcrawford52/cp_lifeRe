<?php
/**
 * The template for the front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * @package life_reimagined
 */

get_header();
?>

	<main id="primary" class="site-main">
		
	<div class="hero" style="<?php if( get_field('hero_image') ): ?>
    background-image: url(<?php the_field('hero_image'); ?>);
	<?php endif; ?>
	">
	
		<!-- <img class="intro-image" src="<?php the_field('hero_image'); ?>" /> -->
			<div class="hero-overlay">
			</div>	
				
			<div class="hero-text">

				<h1 class="translate-y"><?php the_field('hero_title'); ?></h1>
				<span class="arrow"><a href="#intro"><i class="far fa-arrow-circle-down"></i></a></span>
			</div>
		</div>

		<!-- Intro Section -->
		<div id="intro" class="intro">
			<div class="intro-inner">
				

				<div class="overlap-container">
					
					<img class="intro-image" src="<?php the_field('intro_image'); ?>" />
					
					<div class="intro-text">
						<h3><?php the_field('intro_title'); ?></h3>
						<p><?php the_field('intro_text'); ?></p>
						
					</div>
				</div>
			</div>
		</div>

		<!-- Impact Section -->
		<div class="impact">
			<div class="grid">
				<div class="impact-text">
					<h2><?php the_field('impact_title'); ?></h2>
					<p><?php the_field('impact_text'); ?></p>
						
					<div class="donate">
						<!-- todo: donate CTA button -->
						<button class="button bold">Donate <span class="green chevron"><i class="fas fa-chevron-right"></i></span></button>
						</div>
				</div>
				<div class="impact-image">
				<img src="<?php bloginfo('template_url'); ?>/assets/LifeReimagined_Logo_Color_mark.svg">
				</div>
			</div>
		</div>

	</main><!-- #main -->

<?php
get_footer();
