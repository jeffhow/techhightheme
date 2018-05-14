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
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php	get_template_part( 'template-parts/components/content', 'heading' ); ?>

	<div class="entry-content container text-left">
		<?php	the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer container text-right">
		<?php // edit_post_link( $link, $before, $after, $id, $class );
			edit_post_link(
				_( 'Edit This Content' ) ,
				'<div class="edit-link">',
				'</div>',
				null,
				'btn btn-sm btn-outline-primary'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
