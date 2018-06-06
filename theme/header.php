<?php
/**
 * The techhigh.us theme header
 * 
 * Greetings, Here's some placeholder text to brighten up your day! :)
 *
 * @package Worcester Tech
 * @subpackage techhigh
 * @since 1.0
 * @version 2.0
 * 
 */
?><!DOCTYPE html>

<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <?php get_template_part( 'template-parts/search-model/search', 'model' ); ?>
    <header id="techhigh-header" class="techhigh-header fixed-top" role="banner">
      <nav class="primary-nav navbar navbar-expand-md">
        <div class="container-fluid">
          <h1>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="navbar-brand" rel="home">
              <span class="d-none d-lg-block">Worcester Technical High School</span>
              <span class="d-block d-lg-none"><span class="d-none">(</span> Worcester Tech<span class="d-none">)</span></span>
            </a>
          </h1>
          <button class="menu-btn navbar-toggler" type="button" data-toggle="collapse" data-target="#mobileNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars" aria-hidden="true"></i>
          </button>
          <a class="navbar-toggler" href="#" data-toggle="modal" data-target="#searchModal">
            <i class="fa fa-search" aria-hidden="true"></i> 
          </a>
  
          <!-- Primary Nav Items -->
          <div class="collapse navbar-collapse" id="primaryNav">
            <?php
              wp_nav_menu( array(
                'theme_location' => 'primary',
                'depth' => 2,
              	'container' => false, 
              	'menu_id' => 'primaryNavLinks',
              	'menu_class' => 'navbar-nav ml-auto',
                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                'walker' => new WP_Bootstrap_Navwalker() )
              );
            ?>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav><!-- /primary-nav -->
      
      <!-- Secondary Items -->
      <nav id="secondaryNav" class="secondary-nav navbar navbar-expand-md d-none d-md-block d-lg-block d-xl-block">
        <div class="container">
        <div class="collapse navbar-collapse">
          <?php
            wp_nav_menu( array(
              'theme_location' => 'secondary',
              'depth' => 2,
            	'container' => false,
            	'menu_id' => 'secondaryNavLinks',
            	'menu_class' => 'navbar-nav mr-auto ml-auto',
              'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
              'walker' => new WP_Bootstrap_Navwalker() )
            );
          ?>
        </div>
      </nav><!-- /.secondary-nav -->
    </div><!-- /.container -->
    <div class="collapse mobile-nav" id="mobileNav">
      <div id="mobilePrimary" class="mobile-primary"></div>
      <div id="mobileSecondary" class="mobile-secondary"></div>
    </div>
  </header>
  
  <main id="main" class="site-main" role="main" align="center">