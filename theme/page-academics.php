<?php
/**
 * Academics Page for Techhigh Theme
 * 
 * 
 * 
 */
 get_header();
?>

<section class="container-fluid">
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
<?php 
get_footer();
?>