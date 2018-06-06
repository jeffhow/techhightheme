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

	<header class="container-fluid">
		<h1>
		  404
		</h1>
		<h3>Sorry, that page could not be found.</h3>
	</header><!-- .page-header -->

	<?php
		get_template_part( 'template-parts/content/content', 'none' );
	?>
	
<?php get_footer(); ?>
