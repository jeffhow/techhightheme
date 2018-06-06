<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<article class="no-results not-found container-fluid">
	<header class="page-header">
		<h3>Nothing found.</h3>
	</header>
	<div class="page-content">

		<p>
			It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.
		</p>
		<div class="row"><div class="col embed-search">
			<?php get_search_form(); ?>
		</div></div>
		
	</div><!-- .page-content -->
	
</article><!-- .no-results -->
