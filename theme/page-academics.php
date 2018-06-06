<?php
/**
 * Academics Page for Techhigh Theme
 * 
 * 
 * @version 2.0
 */
 get_header();
?>

<article class="container-fluid">
  <header>
    <h1>Academics</h1>
    <h3>Education for equity in both the classroom and the work place</h3>
    <div page-content>
      <?php // Print the page content
        if ( have_posts() ){ while( have_posts() ){ the_post(); the_content(); } } 
      ?>
    </div>
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
               style="background-image: url('<?php echo get_the_post_thumbnail_url( $page->ID, 'full' ); ?>');">
          </div>
          <div class="front-card-text"
               style="background-image: url('<?php echo get_the_post_thumbnail_url( $page->ID, 'full' ); ?>');">
            <div><h3><?php echo $page->post_title; ?></h3></div>
            <?php 
              if( strlen($page->post_title) > 20 ){
                echo '<div class="gym-fix"></div>';
              }
            ?>
          </div>
          <div class="btn btn-primary btn-sm front-card-btn">
              Learn More &hellip;
          </div>
        </a>
      </div><!-- /.col -->
    <?php endforeach; wp_reset_postdata(); ?>
    </div><!--/.row-->
    
</article>

<?php 
get_footer();
?>