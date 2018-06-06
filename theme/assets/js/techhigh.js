/* global jQuery, FontFaceObserver */
(function( $ ) {
  
  /**
   * Font Face Observer Implementation
   */
  var oldStandard = new FontFaceObserver('Old Standard TT');
  var openSans = new FontFaceObserver('Open Sans');
  
  Promise.all([oldStandard.load(), openSans.load()]).then(function () {
  //font.load().then(function () {
    $('body').addClass('fonts-loaded');
  });


  /**
   * Extend Bootstrap navbar to include secondary nav elements
   */
   
  // Removed this feature:
  
  // $('#primaryNav').on('show.bs.collapse', function () {
  //   $('#secondaryNavLinks').children('li').addClass('secondary-nav-links');
  //   $('#primaryNavLinks').append($('#secondaryNavLinks').html());
  // });

  // $('#primaryNav').on('hidden.bs.collapse', function () {
  //   $('#primaryNavLinks').children('.secondary-nav-links').remove();
  // });
  
  // Collapse the mobile nav bar if it's open when the screen changes
   $(window).on('resize', function () {
    // This is part of the 
    if (window.innerWidth > 768) {
      $('#mobileNav').collapse('hide');
    }
   });
  
  $(window).on('resize', function () {
    // This is part of the 
    if (window.innerWidth > 768) {
      $('#mobileNav').collapse('hide');
    }
    
    // Adjust header
    adjustHeader();
    
    // Adjust Main
    adjustMain();
    
    // Adjust Splash Page
    if( $('#splash-page').length>0 ){ // Splash-page class is present
      adjustSplash();
    }
    
  });

  /**
   * wp-admin bar + fixed header on 
   * initial pageload
   */
  $(document).ready( function(){
    // Adjust header
    adjustHeader();
    
    // Adjust Main
    adjustMain();
    
    // Adjust Splash-page
    if( $('#splash-page').length>0 ){ // Splash-page class is present
      adjustSplash();
    }
    
    // Testing new approach to nav collapse
    $('#mobilePrimary').append($('#primaryNavLinks').find('a').not('.search-link').clone());
    $('#mobileSecondary').append($('#secondaryNavLinks').find('a').clone());
  })
  
  
  /**
   * Adjust Header Position if WP admin bar present
   */ 
  function adjustHeader(){
    if( $('#wpadminbar').length > 0 ){ // Adminbar Present
      $('#techhigh-header').css( 'top', $('#wpadminbar').height() );
    }
  }
  
  /**
   * Adjust Main margin-top based on nav heights
   */
  function adjustMain(){
    $('#main').css('margin-top', $('#techhigh-header').height() );
  }
  
  /**
   * Adjust splash page margin-top and height
   */
  function adjustSplash(){
    var headers = $('#techhigh-header').height();
    
    if( $('#wpadminbar').length > 0 ){ // Adminbar Present
      headers += $('#wpadminbar').height();
    }
    
    $('#splash-page').css('height', 'calc(100vh - '+headers+'px' );
  }
  
  
  /**
   * https://css-tricks.com/snippets/jquery/smooth-scrolling/
   * Chris Coyier, 2018
   */
// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
})( jQuery );
