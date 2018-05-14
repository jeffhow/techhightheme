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
<div class="search-container">

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyfifteen' ), get_search_query() ); ?></h1>
			</header><!-- .page-header -->

			<div class= "col">
			<?php
			// Start the loop.
			while ( have_posts() ) : the_post(); ?>
            <span class="search-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
            <span class="search-post-excerpt"><?php the_excerpt(); ?></span>
            <hr>
            <?php endwhile; ?>
      </div>

				<?php


			// Previous/next page navigation.
		  the_posts_pagination( array(
			'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
				'next_text'          => __( 'Next page', 'twentyfifteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
			) );


		// If no content, include the "No posts found" template.
		else : 
		
			get_template_part( 'content', 'none' );

		endif;
		?> 


		</main><!-- .site-main -->
	</section><!-- .content-area -->
</div> <!-- .search-container -->
<?php get_footer(); ?>