<?php
/**
 * The template for displaying pages
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
			
			// Include the page content template.
			get_template_part( 'template-parts/content/content', 'page' );

			/** No Comments **/
			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) {
			// 	comments_template();
			// }

			// End of the loop.
		endwhile;
	?>

<?php get_footer(); ?>
