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

  <div id="splash-page" class="splash-page" data-type="splash-image">
    <div class="tagline">
      <div class="motto"><strong>The School That Works</strong></div>
      <div class="mission"><em>&ldquo;Creating the Future through Technology, Training, and Talent&rdquo;</em></div>
    </div>
    <h1>Worcester Tech</h1>
    <div id="explore-modal">
      <a href="#news-section" class="explore-link">Explore Worcester Tech</a>
    </div>
  </div>
  
  <!-- Featured News -->
  
  <section class="panel container-fluid" data-type="posts" data-width="span">
    <header class="section-header">
      <h1>Latest News</h1>
      <h3>The Latest News from Worcester Tech</h3>
    </header>
    <div class="row"><div class="col">
      <?php 
        $args = array(
          'posts_per_page' => '1',
          'category__and'  => array(get_cat_ID( 'News' ), get_cat_ID( 'Featured' ) )
        );
        $front_page_posts = get_posts( $args );
          if( $front_page_posts ) : 
            foreach ($front_page_posts as $post ) : setup_postdata( $post ); ?>
              <div class="featured-news"
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
          'posts_per_page'  => '4',
          'category'        => get_cat_ID( 'News' ),
          'category__not_in' => get_cat_ID( 'Featured' )
        );
          $front_page_posts = get_posts( $args );
          
          if( $front_page_posts ) : 
            foreach ( $front_page_posts as $post ) : setup_postdata( $post ); ?>
              <div class="col-sm panel-sm meta-news">
                <a href="<?php the_permalink(); ?>">
                  <div class="panel-sm-img d-none d-sm-block" 
                    style="background-image: url('<?php echo get_the_post_thumbnail_url( $post->ID, 'full' ); ?>');">
                  </div>
                </a>
                <div class="panel-sm-text">
                  <a href="<?php the_permalink(); ?>">
                    <h4><?php the_title(); ?></h4>
                  </a>
                  <?php echo get_the_date(); ?>
                </div>
              </div>
            <?php endforeach;
            
          endif; wp_reset_postdata(); ?>
    </div>
    
    <div class="row"><div class="col">
      <a class="btn btn-primary btn-cta" href="<?php echo get_site_url(); ?>/news/">More Tech News</a>
    </div></div>
  </section>
  
  <!-- Events Section -->
  
  <section class="panel container-fluid" data-type="event" data-width="span">
    <header>
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

  <section class="panel container-fluid" data-width="span">
    <header>
      <h1> Academics </h1>
      <h3> Education for equity in both the classroom and the work place</h3>
    </header>
    <?php $academics = get_page_by_path('academics'); ?>
    <h1><?php echo $page->post_title; ?></h1>
    <?php echo $page-> post_content; wp_reset_postdata(); ?>
  <div class="row">
  <?php 
    $academics = array( get_page_by_path('ela'), 
                        get_page_by_path('math'),
                        get_page_by_path('science'),
                        get_page_by_path('social-studies'),
                        get_page_by_path('ap'),
                        get_page_by_path('mcas'),
                        get_page_by_path('physed'),
                        get_page_by_path('sped') );
    $i = 0;      
    foreach($academics as $page): $i++;
      if($i==5): ?>
        </div><!--/.row-->
        <div class="row">
      <?php endif; ?>  
        
      <div class="col-sm panel-sm meta-news">
        <a href="<?php echo get_page_link( $page->ID ); ?>">
          <div class="panel-sm-img d-sm-block d-none" style="background-image: url('<?php echo get_the_post_thumbnail_url( $page->ID, 'full' ); ?>');">
          </div>
        </a>
        <div class="panel-sm-text">
          <h3 class="panel-sm-title"><?php echo $page->post_title; ?></h3>
          <a href="<?php echo get_page_link( $page->ID ); ?>" class="btn btn-secondary btn-sm">
            Learn More
          </a>
        </div>
      </div>
    <?php endforeach; wp_reset_postdata(); ?>
  </section>
  
    <!-- Technical Areas Section -->

  <section class="panel container-fluid" data-width="span">
    <header>
      <h1> Technical Areas </h1>
      <h3> Training students to make meaningful contributions </h3>
      <h3> in both the classroom and the workforce</h3>
    </header>
  
    <?php $techareas = get_page_by_path('technical-areas'); ?>
    <h1><?php echo $page->post_title; ?></h1>
    <?php echo $page-> post_content; wp_reset_postdata(); ?>
    
    <div class="row">
      <?php 
        $techareas = array( get_page_by_path('alden'), 
                            get_page_by_path('health'),
                            get_page_by_path('construction'),
                            get_page_by_path('it') );
        foreach($techareas as $page): $i++; ?>
          <div class="col-sm panel-sm meta-news">
            <a href="<?php echo get_page_link( $page->ID ); ?>">
              <div class="panel-sm-img d-sm-block d-none" style="background-image: url('<?php echo get_the_post_thumbnail_url( $page->ID, 'full' ); ?>');">
              </div>
            </a>
            <div class="panel-sm-text">
              <h3 class="panel-sm-title"><?php echo $page->post_title; ?></h3>
              <a href="<?php echo get_page_link( $page->ID ); ?>" class="btn btn-secondary btn-sm">
                Learn More
              </a>
            </div>
          </div>
        <?php endforeach; wp_reset_postdata(); ?>
    </div>
    <div class="row"><div class="col">
      <a class="btn btn-primary btn-cta" href="<?php echo get_site_url(); ?>/technical-areas/">Explore Technical Areas</a>
    </div></div>
  </section>
  
  <!-- About WTHS Section -->
  
  <div class="panel" data-type="facts-info">
    <header>
      <h1>About Worcester Tech</h1>
      <h4>The School That Works</h4>
      <p>Creating the Future Through Technology, Training, and Talent</p>
    </header>
    
    <!-- About Panel -->
    <div class="panel-lg-img about-panel">
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
      </div>
    
      <div class="row"><div class="col">
        <a class="btn btn-primary btn-cta" href="<?php echo get_site_url(); ?>/about/">More About WTHS</a>
      </div></div><!-- /.col /.row -->
    </div>
  </section>

<?php get_footer(); ?>