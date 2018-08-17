<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package ThemeGrill
 * @subpackage Spacious
 * @since Spacious 1.0
 */
?>

<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php do_action( 'spacious_before_post_content' ); ?>
	<div class="entry-content clearfix">
		<?php
		if ( ( spacious_options( 'spacious_featured_image_single_page', 0 ) == 1 ) && has_post_thumbnail() ) {
			the_post_thumbnail( 'featured-blog-large' );
		}
		the_content();
		?>
		<?php
		wp_link_pages( array(
			'before'      => '<div style="clear: both;"></div><div class="pagination clearfix">' . __( 'Pages:', 'spacious' ),
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>'
		) );
		?>
	</div>

	<div class="contact-widget-width" id="contact-page-widget">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('contact-widget-1') ) : ?>
	<?php endif; ?>
	</div>
	
	<footer class="entry-meta-bar clearfix">
		<div class="entry-meta clearfix">
			<?php edit_post_link( __( 'Edit', 'spacious' ), '<span class="edit-link">', '</span>' ); ?>
		</div>
	</footer>
	<?php
	do_action( 'spacious_after_post_content' );
	?>
</article>