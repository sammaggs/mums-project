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

	<section>
		<h1 class="table-heading">Wag Tails Wash & Groom Service</h1>
		<?php
		$table = get_field( 'pricing_table' );

			if ( $table ) {
				echo '<table border="0">';
					if ( $table['header'] ) {
						echo '<thead>';
						echo '<tr>';
						foreach ( $table['header'] as $th ) {
							echo '<th>';
							echo $th['c'];
							echo '</th>';
						}
						echo '</tr>';
						echo '</thead>';
					}
					echo '<tbody>';
					foreach ( $table['body'] as $tr ) {
						echo '<tr>';
						foreach ( $tr as $td ) {
							echo '<td>';
							echo $td['c'];
							echo '</td>';
						}
						echo '</tr>';
					}
					echo '</tbody>';
					echo '</table>';
		}?>
	</section>

	<section>
		<h1 class="table-heading">Wag Tails Extra Services</h1>
		<?php
		$table = get_field( 'extras' );

			if ( $table ) {
				echo '<table border="0">';
					if ( $table['header'] ) {
						echo '<thead>';
						echo '<tr>';
						foreach ( $table['header'] as $th ) {
							echo '<th>';
							echo $th['c'];
							echo '</th>';
						}
						echo '</tr>';
						echo '</thead>';
					}
					echo '<tbody>';
					foreach ( $table['body'] as $tr ) {
						echo '<tr>';
						foreach ( $tr as $td ) {
							echo '<td>';
							echo $td['c'];
							echo '</td>';
						}
						echo '</tr>';
					}
					echo '</tbody>';
					echo '</table>';
		}?>
	</section>

	<footer class="entry-meta-bar clearfix">
		<div class="entry-meta clearfix">
			<?php edit_post_link( __( 'Edit', 'spacious' ), '<span class="edit-link">', '</span>' ); ?>
		</div>
	</footer>
	<?php
	do_action( 'spacious_after_post_content' );
	?>
</article>