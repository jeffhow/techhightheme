<?php 
/**
 * The template for displaying the Technical Areas page 
 *  
 * Here's some placeholder text to brighten up your day! :)
 * 
 * @package Worcester Tech
 * @subpackage techhigh
 * @since 1.0
 * @version 2.0
 */
 
get_header(); ?>

<article class="container-fluid">
  <header>
    <h1>Technical Areas</h1>
    <h3>Four academies to train and explore your passions</h3>
  </header>
  
  <?php // Print the page content
          if ( have_posts() ):
            while( have_posts() ):
              the_post(); ?>
              
  <?php if( has_post_thumbnail() ): ?>
    <figure>
      <?php the_post_thumbnail('full', 'class=img-fluid'); ?>
      <figcaption>
        <div class="row"><div class="col text-left">
          <small class="text-muted"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></small>
        </div></div>
      </figcaption>
    </figure>
  <?php endif; ?>
  
  <aside>
    <hr>
      <div class="row">
        <div class="col-sm">
          <h3>4</h3>
          <h5>Academies</h5>
        </div>
        
         <div class="col-sm">
          <h3>22</h3>
          <h5>Technical Areas</h5>
        </div>
        
         <div class="col-sm">
          <h3>11:1</h3>
          <h5>Student-Faculty Ratio</h5>
        </div>
      </div>
    <hr>
  </aside>
  
  <section class="acadamies-section">
    <header>
      <h2>Our Academies</h2>
      <div page-content>
        
        <?php the_content(); ?>
        
        <?php
            endwhile; 
          endif; 
        ?>
      </div>
    </header>
    
    <div class="row">
      <?php 
        $techareas = array( get_page_by_path('alden'), 
                            get_page_by_path('health'),
                            get_page_by_path('construction'),
                            get_page_by_path('it') );
        foreach($techareas as $page): $i++; ?>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="front-card">
              <div class="d-none d-sm-block front-card-img" 
                   style="background-image: url('<?php echo get_the_post_thumbnail_url( $page->ID, 'medium_large' ); ?>');">
              </div>
              <div class="front-card-text shop-card-text"
                   style="background-image: url('<?php echo get_the_post_thumbnail_url( $page->ID, 'medium_large' ); ?>');">
                <div>
                  <h4>
                    <a href="<?php the_permalink($page->ID); ?>">
                      <?php echo $page->post_title; ?>
                    </a>
                  </h4>
                  <div class="shop-links">
                    <?php echo get_post_meta($page->ID, 'shops', true); ?>
                  </div>
                </div>
              </div>
              <a class="btn btn-primary btn-sm front-card-btn" href="<?php the_permalink($page->ID); ?>">
                Learn More &hellip;
              </a>
            </div><!-- /.front-card -->
          </div><!-- /.col -->
        <?php endforeach; wp_reset_postdata(); ?>
    </div><!-- /.row -->

<?php get_footer(); ?>