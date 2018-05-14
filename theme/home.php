<?php 
/**
 * The blog feed of of techhigh.us
 *  
 * Here's some placeholder text to brighten up your day! :)
 * 
 * @package Worcester Tech
 * @subpackage techhigh
 * @since 1.0
 * @version 2.0
 */
 
get_header(); ?>

	<header>
		<h1> Tech News </h2>
	  <h4> The latest news from Worcester Tech </h4>
	</header>
	
	<section class="container-fluid" data-type="posts">
		<div class="row">
			<?php
			if ( have_posts() ) :
				$post_count = 0;
				while ( have_posts() ) : the_post();  $post_count++;
					if($post_count == 5): $post_count = 0; ?>
						</div>
						<div class="row">
					<?php endif; ?>
					
					<div class="col-sm panel-sm meta-news">
						<a href="<?php the_permalink(); ?>">
							<div class="panel-sm-img d-none d-sm-block" 
									 style="background-image: url('<?php echo get_the_post_thumbnail_url( $post->ID, 'full' ); ?>');">
							</div>
						</a>
						<div class="panel-sm-text">
							<h5><?php the_title(); ?></h5>
							<?php echo get_the_date(); ?>
						</div>
					</div>
					
				<?php endwhile; ?>
				
			<?php else : ?>
				<div class="col">
						<?php get_template_part( 'template-parts/content', 'none' ); ?>
				</div>
				
			<?php endif; ?>
		</div>
	</section>

<?php get_footer(); ?>