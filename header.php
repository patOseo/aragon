<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-EVP42LQ4PB"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-EVP42LQ4PB');
</script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="preload" as="font" href="/wp-content/themes/aragon/fonts/Jost-Light.ttf" crossorigin>
	<link rel="preload" as="font" href="/wp-content/themes/aragon/fonts/Jost-Medium.ttf" crossorigin>
	<link rel="preload" as="font" href="/wp-content/themes/aragon/fonts/Jost-SemiBold.ttf" crossorigin>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

<?php if(get_field('enable_alert_bar', 'option')): ?>
<div class="alert alert-primary alert-dismissible fade show" role="alert">
  <?php the_field('alert_bar', 'option'); ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?>

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<div id="main-nav" class="navbar navbar-dark">

			<h2 id="main-nav-label" class="sr-only">
				<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
			</h2>

		<?php if ( 'container' === $container ) : ?>
			<div class="container">
		<?php endif; ?>

					<div class="contact-info">
						<a href="tel:<?php the_field('phone', 'option'); ?>" class="phone"><?php the_field('phone', 'option'); ?></a>
						<?php if(get_field('secondary_phone', 'option')): ?>
							<a href="tel:<?php the_field('secondary_phone', 'option'); ?>" class="phone"><?php the_field('secondary_phone', 'option'); ?></a>
						<?php endif; ?>
						<a href="/contact-us" class="btn btn-md btn-primary">Book Appointment</a>
					</div>

					<a href="/" rel="home"><img src="/wp-content/themes/aragon/images/aragon-logo.png" alt="Aragon Prosthodontics Logo" class="main-logo"></a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

			<?php if ( 'container' === $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</div><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->

	<nav class="navbar navbar-dark dropdown-navbar" aria-labelledby="main-nav-label">
		<!-- The WordPress Menu goes here -->
		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'container_class' => 'collapse navbar-collapse',
				'container_id'    => 'navbarNavDropdown',
				'menu_class'      => 'navbar-nav ml-auto',
				'fallback_cb'     => '',
				'menu_id'         => 'main-menu',
				'depth'           => 2,
				'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
			)
		);
		?>
	</nav>

	<div class="mobile-bar">
		<div class="container">
			<div class="row">
				<div class="col-7">
						<a href="tel:<?php the_field('phone', 'option'); ?>" class="phone"><?php the_field('phone', 'option'); ?></a>
						<?php if(get_field('secondary_phone', 'option')): ?>
							<a href="tel:<?php the_field('secondary_phone', 'option'); ?>" class="phone"><?php the_field('secondary_phone', 'option'); ?></a>
						<?php endif; ?>
				</div>
				<div class="col-5">
					<a href="/contact-us" class="btn btn-sm btn-primary">Book Appointment</a>
				</div>
			</div>
		</div>
	</div>
