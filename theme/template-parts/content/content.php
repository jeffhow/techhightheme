<?php
/**
 * Template part for displaying generic content for posts
 *
 * @version 2.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('container-fluid'); ?>>
	
	<?php	get_template_part( 'template-parts/components/component', 'heading' ); ?>

	<div class="entry-content text-left">
		<?php	the_content(); ?>
	</div><!-- .entry-content -->
	
	<?php	get_template_part( 'template-parts/components/component', 'footer' ); ?>
	
</article><!-- #post-## -->