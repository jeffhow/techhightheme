<?php 
/**
 * The template for displaying the Students page 
 *  
 * Here's some placeholder text to brighten up your day! :)
 * 
 * @version 2.0
 */
 
get_header(); ?>

<article class="container-fluid">

  <?php if ( have_posts() ):
    while( have_posts() ): the_post(); ?>
    
    <header>
      <h1><?php the_title(); ?></h1>
      <h3>Information, links, and resources for WTHS community</h3>
      
    </header>

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
            <h3>7</h3>
            <h5>Walk-in Services</h5>
          </div>
          
          <div class="col-sm">
            <h3>19</h3>
            <h5>Community Partnerships</h5>
          </div>
          
          <div class="col-sm">
            <h3>5</h3>
            <h5>Continuing Education Programs</h5>
          </div>
        </div>
      <hr>
      
      <?php the_content() ?>
      
    </aside>
    
  <?php endwhile; endif; // end of page content ?>
  
</article>

<?php get_footer(); ?>