<?php 
/**
 * The template for displaying the News page 
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
      <h3>The Latest News from Worcester Tech</h3>
      
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
      
      <?php the_content() ?>
      
    </aside>
    
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
    
  <?php endwhile; endif; // end of page content ?>
  
</article>

<?php get_footer(); ?>