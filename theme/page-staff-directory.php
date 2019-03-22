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
  if ( have_posts() ):
		// Start the loop.
		while ( have_posts() ) : the_post();
			
			// Include the page content template.
			get_template_part( 'template-parts/content/content', 'page' );
			
			// End of the loop.
		endwhile;
	
	else: // If no content, include the "No posts found" template.
  	get_template_part( 'template-parts/content/content', 'none' );
	endif;
?>

<script src="<?php echo get_template_uri . 'assets/js/directory.js';?>"></script>

<?php get_footer(); ?>
