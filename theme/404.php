<?php
/**
 * The template for displaying 404 pages (not found)
 * 
 * Here's some placeholder text to brighten up your day! :)
 * 
 * @package Worcester Tech
 * @subpackage techhigh
 * @since 1.0
 * @version 2.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main" align="center">

			<section>
				<header>
					<h1>
					  <?php _e( 'Oops! That page can&rsquo;t be found.', 'techhighcustom' ); ?>
					</h1>
				</header><!-- .page-header -->

				<div>
					<p>
					  <?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'techhighcustom' ); ?>
					</p>
					
				</div><!-- .page-content -->
				<?php get_search_form(); ?>
			</section><!-- .error-404 -->

		</main><!-- .site-main -->

	</div><!-- .content-area -->
	
<?php get_footer(); ?>
