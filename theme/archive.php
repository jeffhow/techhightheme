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

<section class="panel-container">

<?php if ( have_posts() ) : ?>
  <header>
  	<?php
  		the_archive_title( '<h1>', '</h1>' );
  		the_archive_description( '<h3>', '</h3>' );
  	?>
  </header><!-- .page-header -->
  
  <section class="panel" data-type="resources" data-width="span">
    <div class="grid-container">
      <section>
        <i class="fa fa-envelope" aria-hidden="true"></i>
        <h3> Email & Drive </h3>
        <a href=""> Access Student Email </a>
      </section> 
      
      <section>
        <i class="fas fa-cogs"></i>
        <h3> Student Portal </h3>
        <a href=""> Access Student Portal </a>
      </section> 
      
      <section>
        <i class="fas fa-paperclip"></i>
        <h3> Summer Work </h3>
        <a href=""> See Summer Work </a>
      </section> 
      
    </div>
    
  </section>
  
	<?php
	// Start the Loop.
	while ( have_posts() ) : the_post(); ?>
	
	
	
	<?php endwhile;
  
  	// Previous/next page navigation.
  	the_posts_pagination( array(
  		'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
  		'next_text'          => __( 'Next page', 'twentyfifteen' ),
  		'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
  	) );
  
  // If no content, include the "No posts found" template.
  else :
  	get_template_part( 'content', 'none' );

endif; ?>
</section>


<?php get_footer(); ?>