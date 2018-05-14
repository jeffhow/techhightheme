<?php
/**
 * Template part for displaying the content headings in single
 * posts or pages
 * 
 */
?>
<style>
	.content-title {
		background-repeat: no-repeat;
		background-position: center;
		background-size: cover;
	}
	.frost-panel{
		background: rgba(255,255,255,0.5);
	}
	.content-title .entry-title {
		margin: 0;
		padding: 0;
		line-height: 2;
	}
</style>
<div class="content-title" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full') ?>');">
	<div class="frost-panel">
		<header class="entry-header container" >
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
	</div>
</div>