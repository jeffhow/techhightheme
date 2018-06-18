<?php
/**
 * Short-code template part
 * 
 * will be used by display-post shortcodes
 * 
 * CSS mimics front-card classes (renamed feed-cards)
 */
?>
<?php
  
  /** Use this to filter daily announcements template **/
  if( has_category('daily-announcements') ): ?>

<div class="col-sm">
  <div class="feed-card" style="padding:20px;">
  <h4><?php the_date(); ?></h4>
  <small>Daily Announcement</small><hr>
  <div class="text-left"><?php the_excerpt(); ?></div>
  <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-outline-primary">
    Read More &hellip;
  </a>
  </div>
</div>

  
<?php else: // Any other Shortcode Cards: ?>

<div class="col-md-3 col-sm-6">
  <div class="feed-card">
    <div class="d-none d-sm-block feed-card-img" 
         style="background-image: url('<?php echo get_the_post_thumbnail_url( $page->ID, 'medium_large' ); ?>');">
    </div>
    <div class="feed-card-text">
      <div class="feed-card-title"
               style="background-image: url('<?php echo get_the_post_thumbnail_url( $page->ID, 'medium_large' ); ?>');">
        <h3><?php the_title(); ?></h3>
      </div>
      <div class="feed-card-excerpt">
        <?php the_excerpt(); ?>
      </div>
    </div>
    <div>
      <a class="btn btn-primary btn-sm feed-card-btn" href="<?php the_permalink(); ?>" >
        Continue Reading &hellip;
      </a>
    </div>
  </div>
</div><!-- /.col -->

<?php endif; ?>