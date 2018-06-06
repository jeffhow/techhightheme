<?php
/**
 * Template part for displaying posts with excerpts
 *
 * Used in feed templates. Note: for this theme, set reading
 * settings to display a summary in feeds.
 * 
 * @version 2.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('container-fluid, feed-excerpt'); ?>>
	
	<div class="row"><div class="offset-md-1 col-md-10">
		
	<heading>
		
		<div class="row"><div class="col">
			<?php the_title('<h3>','</h3>'); ?>
		</div></div>
		
		<div class="row meta-well">
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
	    			_( 'Edit This &hellip;' ) ,
	    			'<small class="edit-link text-muted">',
	    			'</small>',
	    			null,
	    			''
	    		);
	    	?>
    	</div>
  	</div><!-- /.row -->
	</heading>
	
	<div class="row">
		<?php if( has_post_thumbnail() ): ?>
			<div class="col-xs-2">
				<?php the_post_thumbnail('thumbnail','img-fluid'); ?>
			</div>
		<?php endif; ?>
		
		<div class="col entry-content text-left">
			<?php	the_excerpt(); ?>
		</div><!-- .col -->
	</div><!-- /.row -->
	
	<div class="row"><div class="col text-right">
		<a href="<?php the_permalink(); ?>" class="btn btn-sm btn-primary">Read More &hellip;</a>
	</div></div>
	
	
	</div></div>
	
</article><!-- #post-## -->