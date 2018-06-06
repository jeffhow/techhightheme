<?php
/**
 * The template for displaying archive pages
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
  if ( have_posts() ) : ?>
    <header>
    	<?php
    		the_archive_title( '<h1>', '</h1>' );
    		the_archive_description( '<h3>', '</h3>' );
    	?>
    </header><!-- .page-header -->
    
	<?php
  	// Start the Loop.
  	while ( have_posts() ) : the_post();
	
	    get_template_part( 'template-parts/content/content', 'excerpt' );
	
    endwhile;
    
    // Pagination
    get_template_part( 'template-parts/components/component', 'pagination' );
    
  else: // If no content, include the "No posts found" template.
  	
  	get_template_part( 'template-parts/content/content', 'none' );

  endif;
?>

<?php get_footer(); ?>