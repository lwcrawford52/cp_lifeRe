<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package life_reimagined
 */

get_header();
?>

	<main id="primary" class="site-main">

	<div class="page-hero" style="<?php if( get_field('hero_image') ): ?>
    background-image: url(<?php the_field('hero_image'); ?>);
	<?php endif; ?>
	">
			<div class="hero-overlay">
			</div>	
				
			<div class="page-hero-text">

				<h2 class="translate-y"><?php the_field('hero_title'); ?></h2>
				<p>Youth leaving the Travis County juvenile justice system face a variety of challenges as they reintegrate into their schools, families, and home communities.</p>
				<h4>That’s where SOAR steps in for support.</h4>
			</div>
		</div>

		<!-- Intro Section -->
		<div class="page-intro">
			<div class="intro-inner">

					<div class="page-intro-text">
						<h3><?php the_field('intro_title'); ?></h3>
						<p><?php the_field('intro_text'); ?></p>
						
					</div>
					
					<img class="page-intro-image" src="<?php the_field('intro_image'); ?>">
					
				
			</div>
		</div>

		<!-- How it works Section -->

		<div id="how-it-works" class="section-container">
    <h2><?php the_field('section_title'); ?></h2>

    <div class="grid-3">
        
        <div class="column">
            <div class="column-title">
                <img src="<?php bloginfo('template_url'); ?>/assets/LifeReimagined_SOAR_Icon_Care.svg" class="about-icon">
                <h3><?php the_field('first_column_title'); ?></h3>
</div>
            <p class="column-text"><?php the_field('first_column_text'); ?></p>
        </div>
        <div class="column">
            <div class="column-title">
            <img src="<?php bloginfo('template_url'); ?>/assets/LifeReimagined_SOAR_Icon_Tools.svg" class="about-icon">
                <h3><?php the_field('second_column_title'); ?></h3>
                </div>
            <p class="column-text"><?php the_field('second_column_text'); ?>
</p>
        </div>
        <div class="column">
            <div class="column-title">
            <img src="<?php bloginfo('template_url'); ?>/assets/LifeReimagined_SOAR_Icon_Court.svg" class="about-icon">
                <h3><?php the_field('third_column_title'); ?></h3>
                </div>
            <p class="column-text"><?php the_field('third_column_text'); ?></p>
        </div>
    </div>
</div>

	</main><!-- #main -->

<?php

get_footer();
