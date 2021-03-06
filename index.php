<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<div class="page-heading">
	<h1 class="entry-title"><?php echo bloginfo( 'name' ); ?> Blog</h1>
</div>

<div class="wrapper" id="index-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="blog-section" uk-scrollspy="target: .news-box; cls: uk-animation-slide-bottom-medium; repeat: false; delay: 100;">
			<div class="row">
				<?php
				if ( have_posts() ) {
					// Start the Loop.
					while ( have_posts() ) {
						the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'loop-templates/content', get_post_format() );
					} ?>
					
						
					
				<?php } else {
					get_template_part( 'loop-templates/content', 'none' );
				}
				?>
			</div><!-- .row -->

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>
		</div>

	</div><!-- #content -->

</div><!-- #index-wrapper -->

<?php
get_footer();
