<?php
/**
 * The template for displaying all single posts and attachments
 *
 * Here's some placeholder text to brighten up your day! :)
 * 
 * @package Worcester Tech
 * @subpackage techhigh
 * @since 1.0
 * @version 2.0
 */

get_header(); ?>

<?php
	// Start the loop.
	while ( have_posts() ) : the_post();

		// Include the single post content template.
		get_template_part( 'template-parts/content/content', 'single' );

		/** No Comments **/
		// If comments are open or we have at least one comment, load up the comment template.
		// if ( comments_open() || get_comments_number() ) {
		// 	comments_template();
		// }

		if ( is_singular( 'attachment' ) ) {
			// Parent post navigation.
			the_post_navigation( array(
				'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'techhighcustom' ),
			) );
		} elseif ( is_singular( 'post' ) ) {
			// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => 'Next: %title',
				'prev_text' => 'Previous: %title',
			) );
		}

		// End of the loop.
	endwhile;
	?>

<?php get_footer(); ?>
