<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package life_reimagined
 */

?>

	<footer id="colophon" class="site-footer">
		
		<!-- contact section - todo: should this be moved to front-page? -->
		<div class="contact">
			<div class="grid inner">
				<div class="contact-text">
					<img src="<?php bloginfo('template_url'); ?>/assets/LifeReimagined_Logo_White.svg" class="footer-logo">
					<p><span class="green icon"><i class="fad fa-paper-plane"></i></span> info@lifereimagined.org</p>
					<p><span class="green icon"><i class="fad fa-map-marked-alt"></i></span> 2515 S Congress Ave, Austin, TX 78704</p>
					<ul class="social">
						<li><i class="fab fa-facebook-f"></i></li>
						<li><i class="fab fa-instagram"></i></li>
						<li><i class="fab fa-linkedin-in"></i></li>
					</ul>
					<div class="donate">
					<!-- todo: donate CTA button -->
					<button class="button bold">Donate <span class="green chevron"><i class="fas fa-chevron-right"></i></span></button>
					</div>

				</div>
				<div class="email-signup">
					<h2>Keep in Touch</h2>
					<!-- <i class="fad fa-user"></i>
					<i class="fad fa-paper-plane"></i> -->
					<div class="form">
						<?php 
						gravity_form( 'Keep in Touch', false, false, false, '', false );

						
						?>
							

					</div>
				
				</div>
			</div>
		</div>

		<div class="site-info">
		<div class="footer-copyright">
				&copy; <?php echo date("Y"); ?> Life Reimagined for Children. All Rights Reserved. | Site by CreativePickle
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


</body>
</html>
