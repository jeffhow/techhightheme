<?php 
/**
 * The front page of techhigh.us
 *  
 * Here's some placeholder text to brighten up your day! :)
 * 
 * @package Worcester Tech
 * @subpackage techhigh
 * @since 1.0
 * @version 2.0
 */
 
get_header(); ?>

  <div id="splash-page"
       class="splash-page" 
       data-type="splash-image"
       style="background-image: url('<?php
        echo get_theme_file_uri( '/assets/images/wths-opt.jpg' )
       ?>">
    
    <div class="tagline">
      <div class="motto"><strong>The School That Works</strong></div>
      <div class="mission"><em>&ldquo;Creating the Future through Technology, Training, and Talent&rdquo;</em></div>
    </div>
    <h1>
      <span class="d-none d-md-block">Worcester Technical<br>High School</span>
      <span class="d-block d-md-none">Worcester<br>Tech</span>
    </h1>
    <div id="explore-link">
      <a href="#news-section" class="explore-link">Explore Worcester Tech
      <br><i class="fas fa-chevron-down"></i></a>
    </div>
  </div><!-- /#splash-page -->
  
  <!-- News -->
  
  <section id="news-section" class="container-fluid">
    <header class="section-header">
      <h1>Latest News</h1>
      <h3>The Latest News from Worcester Tech</h3>
    </header>
    
    <!-- Featured News -->
    
    <div class="row"><div class="col">
      <?php 
        $args = array(
          'posts_per_page' => '1',
          'category__and'  => array(get_cat_ID( 'News' ), get_cat_ID( 'Featured' ) )
        );
        $front_page_posts = get_posts( $args );
          if( $front_page_posts ) : 
            foreach ($front_page_posts as $post ) : setup_postdata( $post ); ?>
              <div class="featured-news-card"
                   style="background-image: url('<?php echo get_the_post_thumbnail_url( $post->ID, 'full' ); ?>'); ">
                <div class="featured-news-excerpt">
                  <h4><?php the_title(); ?></h4>
                  <?php the_excerpt(); ?>
                  <a class="btn btn-primary" href="<?php the_permalink(); ?>">Continue Reading</a>
                </div>
              </div><!-- /.featured-news -->
              <?php endforeach; 
              
            endif; wp_reset_postdata(); ?>
    </div></div><!--/.col /.row -->
      
    <!-- Non-Featured News -->
    
    <div class="row">
      <?php 
        $args = array(
          'posts_per_page'   => '4',
          'category'         => get_cat_ID( 'News' ),
          'category__not_in' => get_cat_ID( 'Featured' ),
        );
          $front_page_posts = get_posts( $args );
          
          if( $front_page_posts ) : 
            foreach ( $front_page_posts as $post ) : setup_postdata( $post ); ?>
              
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
            <?php endforeach;
            
          endif; wp_reset_postdata(); ?>
    </div><!-- /.row -->
    
    <div class="row"><div class="col">
      <a class="btn btn-primary btn-cta" href="<?php echo get_site_url(); ?>/news/">More Tech News</a>
    </div></div>
  </section>
  
  <!-- Events Section -->
  
  <section id="events-section" class="container-fluid">
    <header class="section-header">
      <h1> Upcoming Events </h1>
      <h3> What's happening at Worcester Tech </h3>
    </header>
    
    <!-- Event Feed Hook -->
    <?php dynamic_sidebar( 'agenda_cal' ); ?>
    
    <div class="row"><div class="col">
      <a class="btn btn-primary btn-cta" href="<?php echo get_site_url(); ?>/calendar/">More Tech Events</a>
    </div></div>
  </section>
  
  <!-- Academics Section -->

  <section id="academics-section" class="container-fluid">
    <header class="section-header">
      <h1>Academics</h1>
      <h3>Education for equity in both the classroom and the work place</h3>
    </header>
    
  <div class="row">
  <?php // get all the academic pages
    $academics = array( get_page_by_path('ela'), 
                        get_page_by_path('math'),
                        get_page_by_path('science'),
                        get_page_by_path('social-studies'),
                        get_page_by_path('ap'),
                        get_page_by_path('mcas'),
                        get_page_by_path('physed'),
                        get_page_by_path('sped') );
    $i = 0; 
    // four pages per row
    foreach($academics as $page): $i++;
      if($i==5): ?>
        </div><!--/.row-->
        <div class="row">
      <?php endif; ?>  
        
      <div class="col-md-3 col-sm-6">
        <a href="<?php echo get_page_link( $page->ID ); ?>"
           class="front-card">
          <div class="d-none d-sm-block front-card-img" 
               style="background-image: url('<?php echo get_the_post_thumbnail_url( $page->ID, 'medium_large' ); ?>');">
          </div>
          <div class="front-card-text"
               style="background-image: url('<?php echo get_the_post_thumbnail_url( $page->ID, 'medium_large' ); ?>');">
            <div>
              <h3><?php echo $page->post_title; ?></h3>
              <div><?php echo $page->post_excerpt; ?></div>
            </div>
            
          </div>
          <div class="btn btn-primary btn-sm front-card-btn">
              Learn More &hellip;
          </div>
        </a>
      </div><!-- /.col -->
    <?php endforeach; wp_reset_postdata(); ?>
    </div><!--/.row-->
  </section>
  
    <!-- Technical Areas Section -->

  <section class="container-fluid">
    <header class="section-header">
      <h1>Technical Areas</h1>
      <h3>Training students to make meaningful contributions<br>
      in both the classroom and the workforce</h3>
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
    <div class="row"><div class="col">
      <a class="btn btn-primary btn-cta" href="<?php echo get_site_url(); ?>/technical-areas/">Explore Technical Areas</a>
    </div></div>
  </section>
  
  <!-- About WTHS Section -->
  
  <section class="container-fluid">
    <header class="section-header">
      <h1>About Worcester Tech</h1>
      <h4>The School That Works</h4>
      <p>Creating the Future Through Technology, Training, and Talent</p>
    </header>
    
    <div class="row">
      <div class="col-sm">
        <h3>98%</h3>
        <h4>Graduation Rate</h4>
      </div>
        
      <div class="col-sm">
        <h3>22</h3>
        <h4>Technical Areas</h4>
      </div>
      
      <div class="col-sm">
        <h3>1,400</h3>
        <h4>Students</h4>
      </div>
    </div><!-- /.row -->
    
    <div class="row"><div class="col">
      <a class="btn btn-primary btn-cta" href="<?php echo get_site_url(); ?>/about/">More About WTHS</a>
    </div></div><!-- /.col /.row -->
  </section>

<?php get_footer(); ?>