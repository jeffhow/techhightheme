<?php 
/**
 * The template for displaying single posts
 * 
 * Here's some placeholder text to brighten up your day! :)
 * 
 * @package Worcester Tech
 * @subpackage techhigh
 * @since 1.0
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
