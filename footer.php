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
					<a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/LifeReimagined_Logo_White.svg" class="footer-logo"></a>
						<ul class="fa-ul address-list">
						<li><span class="fa-li green icon"><i class="fad fa-paper-plane" style="--fa-secondary-opacity: 1.0; --fa-secondary-color:#80bc00;"></i></span><a href="mailto:info@lifereimagined.org">info@lifereimagined.org</a>
						</li>
						<li><span class="fa-li green icon"><i class="fad fa-map-marked-alt" style="--fa-secondary-opacity: 1.0; --fa-secondary-color:#80bc00;"></i></span>2515 S Congress Ave, Austin, TX 78704
						</li>
						</ul>
						
						<div class="mobile-center">
							<nav id="social-nav" class="social">
				
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'social',
										'menu_id'        => 'social',
									)
								);
								?>
							</nav><!-- #site-navigation -->
							
							<div class="donate">
							<!-- todo: donate CTA button -->
							<a href="https://www.paypal.com/donate/?hosted_button_id=5F3SLSBR8QEML" target="new"><button class="button bold">Donate <span class="green chevron"><i class="fas fa-chevron-right"></i></span></button></a>
							</div>
						</div>

				</div>

				<div class="email-signup">
					<h2>Keep in Touch</h2>
					
					<div class="form">
						<?php 
						gravity_form( 'Keep in Touch', false, false, false, '', true );
						?>
					</div>
				
				</div>
				
			</div>
		</div>

		<div class="site-info">
		<div class="footer-copyright">
				&copy; <?php echo date("Y"); ?> Life Reimagined for Children. All Rights Reserved. | Site by <a href="https://creativepickle.com/" target="_blank">CreativePickle</a>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
(function($) {
	
	$( ".gform_fields li.name .ginput_container" ).prepend( '<i class="fad fa-user"></i>' );
	
	$( ".gform_fields li.email .ginput_container" ).prepend( '<i class="fad fa-paper-plane"></i>' );
	  
  })( jQuery );
</script>
</body>
</html>
