<?php 
/**
 * The template for displaying the Technical Areas page 
 *  
 * Here's some placeholder text to brighten up your day! :)
 * 
 * @package Worcester Tech
 * @subpackage techhigh
 * @since 1.0
 * @version 2.0
 */
 
get_header(); ?>

<section class="container-fluid">
  
  <section class="panel" data-type="content-head">
    <header>
      <h1> Technical Areas </h1>
      <h3> Four academies to train and explore your passions </h3>
    </header>
  </section>
  
  <section class="panel" data-type="hero-image" data-width="span">
    <figure>
      <img src="https://techhigh-jeff-how.c9users.io/wp-content/uploads/2018/03/03182016-WorcesterTechnicalSchool_05-1020x564-e1525184722305.jpg">
      <figcaption>
        <p> Here is some placeholder text that is yet to mature to greatness!</p>
      </figcaption>
      
    </figure>
  </section>

  <section class="panel" data-type="facts-info" data-width="span">
    <hr>
      <div class="row">
        <div class="col-sm">
          <h3> 4 </h3>
          <h5> Academies</h5>
        </div>
        
         <div class="col-sm">
          <h3> 22 </h3>
          <h5> Technical Areas</h5>
        </div>
        
         <div class="col-sm">
          <h3> 11:1 </h3>
          <h5> Student-Faculty Ratio</h5>
        </div>
      </div>
    <hr>
  </section>
  
  <section class="panel" data-type="academies" data-width="span">
    <header>
      <h3> Academies </h3>
    </header>
    <?php 
      $parent = get_category_by_slug( 'Academies' );
      $academies = get_categories( 
        array( 'parent' => $parent-> term_id, ) );
        
      foreach ( $academies as $academy ) : 
        $catQuery = new WP_Query( 
          array( 'cat' =>  $academy -> term_id ) );
          
        if ( $catQuery -> have_posts() ) : ?>
        <div class="row">
          <div class="col-md-6">
           
            <img src="https://techhigh-jeff-how.c9users.io/wp-content/uploads/2017/09/048803fd0b84da6203ae6c084e2f7ae3-kitty-tattoos-sanrio-hello-kitty.jpg">
            
          </div>
          <div class="col-md-6">
            <h3> <?php echo $academy -> name ?></h3>
            <p> <?php echo category_description( $academy -> term_id ); ?> </p>
            <?php while ( $catQuery -> have_posts() ) : $catQuery -> the_post(); ?>
              <li>
                <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> > </a>
              </li>
            <?php endwhile; ?>
          </div>
        </div>
        <hr>
        <?php endif; wp_reset_postdata(); ?>
      <?php endforeach; ?>
  </section>
</section>

<?php get_footer(); ?>