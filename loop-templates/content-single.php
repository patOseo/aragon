<?php
/**
 * Single post partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="featured-image"><?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?></div>

	<div class="entry-content">

		<div class="blog-date"><?php echo the_date('F j, Y'); ?></div>

		<?php the_content(); ?>
		<?php get_template_part('global-templates/social-share'); ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

</article><!-- #post-## -->
