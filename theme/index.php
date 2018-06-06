<?php get_header(); ?>

    <?php
    if ( have_posts() ) :
      
      while( have_posts() ) : the_post();
      
      get_template_part( 'template-parts/post/content', 'content' );
      
    endwhile;
    
    get_template_part( 'template-parts/navigation/nav', 'pagination' );
    
  else :
    
    get_template_part( 'template-parts/post/content', 'none' );
    
  endif;
  ?>
  
    
<?php get_footer(); ?>