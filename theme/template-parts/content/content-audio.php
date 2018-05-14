<?php
/**
 * Template part for displaying audio posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
 // CODE NOT TESTED!!
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( is_sticky() && is_home() ) : ?>
		<i class="fa fa-thumb-tack" aria-hidden="true"></i>
	<?php endif; ?>
	
	<?php if ( 'post' === get_post_type() ) : ?>
	
		<?php if ( is_single() ) : // This is a single post view ?>
		
			<?php if( has_post_thumbnail() ): ?>
			<header class="entry-header container-fluid header-image"
			  style="background-image:url(<?php echo get_the_post_thumbnail_url( $post->ID, 'full' ); ?>);">
			<?php else: ?>
			<header class="entry-header container-fluid">
			<?php endif ?>
			
				<h2 class="entry-title"><?php the_title(); ?></h2>
				the_post_thumbnail( 'thumbnail' );
				<small><?php the_date(); ?></small>
			</header>
			<?php // Retrieve and display audio content
				$content = apply_filters( 'the_content', get_the_content() );
				$audio = false;
		
				// Only get audio from the content if a playlist isn't present.
				if ( false === strpos( $content, 'wp-playlist-script' ) ) {
					$audio = get_media_embedded_in_content( $content, array( 'audio' ) );
				}
				
				if ( ! empty( $audio ) ) :
					foreach ( $audio as $audio_html ) {
						echo '<div class="entry-audio">';
							echo $audio_html;
						echo '</div><!-- .entry-audio -->';
					}
				endif; ?>
			<?php else : // This is a feed view
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				echo '<small>';
				the_date();
				echo '</small>';
			endif; ?>
</article>

	<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'techhighcustom-featured-image' ); ?>
			</a>
		</div><!-- .post-thumbnail -->
	<?php endif; ?>

	<?php if ( is_single() ) : ?>
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
	<?php endif; ?>

</article><!-- #post-## -->
