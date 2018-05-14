<?php get_header(); ?>

    <?php
    if ( have_posts() ) :
      
      while( have_posts() ) : the_post();
      
      get_template_part( 'template-parts/post/content', get_post_format() );
      
    endwhile;
    
    /** the_posts_pagination( array(
          'prev_text' => techhighcustom_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'techhighcustom' ) . '</span>',
			    'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'techhighcustom' ) . '</span>' . techhighcustom_get_svg( array( 'icon' => 'arrow-right' ) ),
			    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'techhighcustom' ) . ' </span>',
			    
    ) );
    */
    
    get_template_part( 'template-parts/navigation/nav', 'pagination' );
    
  else :
    
    get_template_part( 'template-parts/post/content', 'none' );
    
  endif;
  ?>
  
    
<?php get_footer(); ?>