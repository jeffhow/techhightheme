<?php 
/**
 * The template for displaying search results pages
 * 
 * Here's some placeholder text to brighten up your day! :)
 * 
 * @package Worcester Tech
 * @subpackage techhigh
 * @since 1.0
 * @version 2.0
 */
get_header() ?>

<?php
  if ( have_posts() ) : ?>
    <header>
    	<h1>Search</h1>
    	<h3>Search results for <?php get_search_query(); ?></h3>
    </header><!-- .page-header -->
    
	<?php
  	// Start the Loop.
  	while ( have_posts() ) : the_post();
	
	    get_template_part( 'template-parts/content/content', 'search' );
	
    endwhile;
    
    // Pagination
    get_template_part( 'template-parts/components/component', 'pagination' );
    
  else: // If no content, include the "No posts found" template.
  	
  	get_template_part( 'template-parts/content/content', 'none' );

  endif;
?>

<?php get_footer(); ?>