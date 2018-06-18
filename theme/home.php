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
<section id="news-section" class="container-fluid">
  <header class="section-header">
    <h1>Latest News</h1>
    <h3>The Latest News from Worcester Tech</h3>
  </header>
      
  <!-- News -->
  <?php if ( have_posts() ) : ?>
    <div class="row">
      <?php while ( have_posts() ) : the_post(); ?>
      	<div class="col-md-3 col-sm-6">
          <a href="<?php the_permalink(); ?>" class="front-card">
            <div class="d-none d-sm-block front-card-img" 
              style="background-image: url('<?php echo get_the_post_thumbnail_url( $post->ID, 'medium_large' ); ?>');">
            </div>
            <div class="front-card-text"
                 style="background-image: url('<?php echo get_the_post_thumbnail_url( $post->ID, 'medium_large' ); ?>');">
              <div>
                <h4><?php the_title(); ?></h4>
                <?php echo get_the_date(); ?>
              </div>
            </div>
          </a>
        </div><!-- /.col -->
      <?php endwhile; ?>
      </div><!-- /.row -->
      
      <?php 
    		// Pagination
      	get_template_part( 'template-parts/components/component', 'pagination' );
      ?>
      
    <?php else: ?>
      <?php
    		get_template_part( 'template-parts/content/content', 'none' );
    	?>
    <?php endif; ?>

</section>

<?php get_footer(); ?>