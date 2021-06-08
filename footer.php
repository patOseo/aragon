<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<footer class="site-footer" id="colophon">

	<div class="contact-section">
		<div class="row no-gutters">
			<div class="col-lg-6">
				<div class="map" uk-scrollspy="cls: uk-animation-slide-left-medium; repeat: false; delay: 100;">
					<?php the_field('google_map', 'option'); ?>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="find-us">
					<div uk-scrollspy="cls: uk-animation-slide-right-medium; repeat: false; delay: 100;">
						<h3>FIND <strong>US</strong></h3>
						<h4>Aragon Prosthodontics</h4>
						<p><?php the_field('address', 'option'); ?></p>
							Call: <a href="tel:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a><br>
							Fax: <?php the_field('fax', 'option'); ?><br>
							Email: <a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
						</p>
						<p><?php the_field('office_hours', 'option'); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="wrapper" id="wrapper-footer">
	
		<div class="<?php echo esc_attr( $container ); ?>">
	
			<div class="row">
	
				<div class="col-md-12">
	
						<div class="site-info" uk-scrollspy="target: img,.social-icons; cls: uk-animation-slide-bottom-medium; repeat: false; delay: 100;">

							<img src="/wp-content/themes/aragon/images/aragon-logo.png" alt="Aragon Prosthodontics Logo">

							<?php if(have_rows('social_media_icons', 'option')): ?>
							<div class="social-icons">
								<?php while(have_rows('social_media_icons', 'option')): the_row(); ?>
									<a href="<?php the_sub_field('link'); ?>" target="_blank" rel="noopener,noreferrer">
										<span class="fa-stack fa-2x">
										  <i class="fa fa-circle fa-stack-2x"></i>
										  <i class="fa fa-<?php the_sub_field('fontawesome_icon'); ?> fa-stack-1x fa-inverse"></i>
										</span>
									</a>
								<?php endwhile; ?>
							</div>
							<?php endif; ?>
	
							© <?php echo date('Y'); ?> Aragon Prosthodontics | All Rights Reserved
	
						</div><!-- .site-info -->
	
				</div><!--col end -->
	
			</div><!-- row end -->
	
		</div><!-- container end -->
	
	</div><!-- wrapper end -->

</footer><!-- #colophon -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

