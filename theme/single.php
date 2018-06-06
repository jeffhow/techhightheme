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
	if ( have_posts() ):
		
  	// Start the Loop.
  	while ( have_posts() ) : the_post();
	
	    get_template_part( 'template-parts/content/content', 'single' );
	
    endwhile;
    
  else: // If no content, include the "No posts found" template.
  	
  	get_template_part( 'template-parts/content/content', 'none' );

  endif;
?>

<?php get_footer(); ?>
