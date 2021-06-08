<?php
/**
 * Template Name: Homepage
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
$panel1 = get_field('panel_1');
$panel2 = get_field('panel_2');
?>

<div class="home-slider"><img src="/wp-content/themes/aragon/images/home-slide.jpg" alt="Aragon Prosthodontics"></div>

<section class="section-home section-lightblue">
	<div class="container">
		<div class="row">
			<h2 uk-scrollspy="cls: uk-animation-slide-bottom-medium; repeat: false; delay: 100;"><?php the_field('heading'); ?></strong></h2>
			<div class="col-md-8" uk-scrollspy="cls: uk-animation-slide-left-medium; repeat: false; delay: 100;">
				<h3><?php echo $panel1['title']; ?></h3>
				<hr class="divider blue">
				<?php echo $panel1['paragraph']; ?>

				<a href="<?php echo $panel1['link']; ?>" class="btn btn-md btn-primary"><?php echo $panel1['link_text']; ?></a>
			</div>
			<div class="col-md-4" uk-scrollspy="cls: uk-animation-slide-right-medium; repeat: false; delay: 100;">
				<?php echo wp_get_attachment_image($panel1['image'], 'full'); ?>
			</div>
		</div>
	</div>
	
</section>

<section class="section-home section-blue section-dong">
	<div class="container">
		<div class="row">
			<div class="col-md-4" uk-scrollspy="cls: uk-animation-slide-left-medium; repeat: false; delay: 100;">
				<?php echo wp_get_attachment_image($panel2['image'], 'full'); ?>
			</div>
			<div class="col-md-8" uk-scrollspy="cls: uk-animation-slide-right-medium; repeat: false; delay: 100;">
				<h3><?php echo $panel2['title']; ?></h3>
				<hr class="divider yellow right">
				<?php echo $panel2['paragraph']; ?>
				<a href="<?php echo $panel2['link']; ?>" class="btn btn-md btn-secondary"><?php echo $panel2['link_text']; ?></a>
			</div>
		</div>
	</div>
</section>

<section class="section-staff">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12" uk-scrollspy="cls: uk-animation-slide-bottom-medium; repeat: false; delay: 100;">
				<a href="#" class="btn btn-md btn-primary">Meet The Rest of the Staff</a>
			</div>
		</div>
	</div>
</section>

<section class="section-services">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2>Our <strong>Prosthodontics</strong> Services</h2>
			</div>
		</div>
		<?php if(have_rows('services')): ?>
		<div class="row h-50" uk-scrollspy="target: .service-box; cls: uk-animation-slide-bottom-medium; repeat: false; delay: 100;">
			<?php while(have_rows('services')): the_row(); ?>
				<div class="col-md-6 h-100 d-table">
					<div class="service-box align-middle" style="background: linear-gradient(rgba(98,199,183,.69) 0%, rgba(0,101,111,.69) 100%), url('<?php the_sub_field('background_image'); ?>') no-repeat center center;">
						<a href="<?php the_sub_field('link'); ?>" class="stretched-link">
							<h3 class="align-middle"><?php the_sub_field('title'); ?></h3>
							<p class="description"><?php the_sub_field('description'); ?></p>
						</a>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
	</div>
</section>

<?php if(have_rows('affiliations', 'option')): ?>
<section class="section-sponsors">
	<div class="container-fluid">
		<div class="affiliations" uk-scrollspy="target: .affiliation; cls: uk-animation-slide-bottom-medium; repeat: false; delay: 100;">
			<?php while(have_rows('affiliations', 'option')): the_row(); ?>
				<div class="affiliation">
					<?php $logo = get_sub_field('logo'); ?>
					<?php echo wp_get_attachment_image($logo, 'full'); ?>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>
<?php endif; ?>

<?php
get_footer();
