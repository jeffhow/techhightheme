<?php
/**
 * Template part for displaying post-footer info
 * 
 * @version 2.0
 */
?>
<footer class="entry-footer container-fluid">
  <div class="row">
    <div class="col text-left">
      <small class="text-muted">Page last updated <?php the_date(); ?></small>
    </div>
    <div class="col">
      <small class="text-muted">
        <?php if ( has_category() ): ?>
          Category: <?php the_category(', '); ?>
          <?php the_tags('| Tags: '); ?>
        <?php else: ?>
          <?php the_tags('Tags: '); ?>
        <?php endif; ?>
      </small>
    </div>
    <div class="col text-right">
      <?php // edit_post_link( $link, $before, $after, $id, $class );
    		edit_post_link(
    			_( 'Edit This Content' ) ,
    			'<div class="edit-link">',
    			'</div>',
    			null,
    			'btn btn-sm btn-outline-primary'
    		);
    	?>
    </div>
  </div>
</footer><!-- .entry-footer -->