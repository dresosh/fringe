/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function( $) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Item9 = {
    // All pages
    'common': {
      init: function() {
        if (screen.width < 768){
          // Navbar animation on hover
          $( 'nav' ).on( 'mouseover', function() {
            $( 'nav' ).addClass( 'navfade' );
          });
          $( 'nav' ).on( 'mouseleave', function() {
            $( 'nav' ).removeClass( 'navfade' );
          });
          // Animation on scroll
          $(window).scroll(function() {
            if ( $( '.navbar' ).offset().top > 100 ) {
              $( 'nav' ).addClass( 'navfade' );
            } else {
              $( 'nav' ).removeClass( 'navfade' );
            }
          });
      } else {
        // Navbar animation on hover
        $( 'nav' ).on( 'mouseover', function() {
          $( 'nav' ).addClass( 'navfade' );
          $( '.ig-icon' ).addClass( 'ig-fadeIn' );
        });
        $( 'nav' ).on( 'mouseleave', function() {
          $( 'nav' ).removeClass( 'navfade' );
          $( '.ig-icon' ).removeClass( 'ig-fadeIn' );
        });
        // Animation on scroll
        $(window).scroll(function() {
          if ( $( '.navbar' ).offset().top > 100 ) {
            $( 'nav' ).addClass( 'navfade' );
            $( '.ig-icon' ).addClass( 'ig-fadeIn' );
          } else {
            $( 'nav' ).removeClass( 'navfade' );
            $( '.ig-icon' ).removeClass( 'ig-fadeIn' );
          }
        });
      }


        // Navbar active state
        if ( $( 'body' ).hasClass( 'facts' ) ) {
          $('.menu-item-18').addClass('current');
        } else if ( $( 'body' ).hasClass( 'found' ) ) {
          $('.menu-item-15').addClass('current');
        } else if ( $( 'body' ).hasClass( 'blog' ) ) {
          $('.menu-item-74').addClass('current');
        } else if ( $( 'body' ).hasClass( 'single-fringe' ) ) {
          $('.menu-item-74').addClass('current');
        }


        // Testing
        // Adds active class to first img in the list
        $( '.item:first-child' ).addClass( 'active' );


        var slide = $( '.item' );
        var list = '.carousel-indicators';
        for ( var i = 0; i < slide.length; i++ ) {
          $( list ).append( '<li class="slideBtn" data-target="#carousel-example-generic" data-slide-to="' + i + '" ></li>' );
          $( '.slideBtn:first-child' ).addClass( 'active' );
        }


        // JavaScript to be fired on all pages
        // if ( $( 'nav' ).hasClass( 'navbar-fixed-top' ) ) {
        //   $( 'body' ).css( 'padding-top', '70px' );
        // }

        if ( $( 'section' ).hasClass( 'bounceInLeft' ) ) {
          $( 'nav a' ).on( 'click', function(){
            $( 'section' ).addClass( 'slideOutRight' );
          });
          $( '.read-more' ).on( 'click', function(){
            $( 'section' ).addClass( 'slideOutRight' );
          });
        } else if ( $( 'section' ).hasClass( 'bounceInRight' ) ) {
          $( 'nav a' ).on( 'click', function(){
            $( 'section' ).addClass( 'slideOutLeft' );
          });
        } else if ( $( 'section' ).hasClass( 'fadeIn' ) ) {
          $( 'nav a' ).on( 'click', function(){
            $( 'section' ).addClass( 'fadeOutDown' );
          });
        } else if ( $( 'section' ).hasClass( 'bounceInUp' ) ) {
          $( 'nav a' ).on( 'click', function(){
            $( 'section' ).addClass( 'fadeOutDownBig' );
          });
        } else if ( $( 'section' ).hasClass( 'flipInY' ) ) {
          $( 'nav a' ).on( 'click', function(){
            $( 'section' ).addClass( 'flipOutY' );
          });
        } else if ( $( 'section' ).hasClass( 'zoomIn' ) ) {
          $( 'nav a' ).on( 'click', function(){
            $( 'section' ).addClass( 'zoomOut' );
          });
        } else if ( $( 'section' ).hasClass( 'rollIn' ) ) {
          $( 'nav a' ).on( 'click', function(){
            $( 'section' ).addClass( 'rollOut' );
          });
          $( '.back-btn' ).on( 'click', function(){
            $( 'section' ).addClass( 'rollOut' );
          });
        } else if ( $( 'section' ).hasClass( 'bounceIn' ) ) {
          $( 'nav a' ).on( 'click', function(){
            $( 'section' ).addClass( 'bounceOut' );
          });
        }


        // if ( $( '.img-container' ).hasClass( 'rollIn' ) ) {
        //   $( 'nav a' ).on( 'click', function(){
        //     $( '.img-container' ).addClass( 'rollOut' );
        //   });
        // }


      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // Disables carousel pause on hover
        $( '.carousel' ).carousel({
            pause: "false"
        });

        // Pauses carousel when hovering over arrows
        $( '.carousel-control' ).on( 'mouseover', function(){
          $( '.carousel' ).carousel( 'pause' );
        });
        $( '.carousel-control' ).on( 'mouseleave', function(){
          $( '.carousel' ).carousel( 'cycle' );
        });

        // JavaScript to be fired on the home page

        // Adds active class to first img in the list
        $( '.item:first-child' ).addClass( 'active' );


        var slide = $( '.item' );
        var list = '.carousel-indicators';
        for (var i = 0; i < slide.length; i++) {
          $( list ).append( '<li class="slideBtn" data-target="#carousel-example-generic" data-slide-to="' + i + '" ></li>' );
          $( '.slideBtn:first-child' ).addClass( 'active' );
        }

      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // Facts page
    'facts': {
      init: function() {
        // JavaScript to be fired on the home page

        // Removes http:// from each link and prints it on page
        var urls = $( '.web-url' );
        for (var i = 0; i < urls.length; i++) {
          var url = urls[i];
          inner = $(url).html();
          newUrls = inner.substr(7);
          $(url).html(newUrls);
        }

      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // Fringe page
    'blog': {
      init: function() {
        // JavaScript to be fired on the home page
        // Adds active class to first img in the list
        $( '.item:first-child' ).addClass( 'active' );


        var slide = $( '.item' );
        var list = '.carousel-indicators';
        for ( var i = 0; i < slide.length; i++ ) {
          $( list ).append( '<li class="slideBtn" data-target="#carousel-example-generic" data-slide-to="' + i + '" ></li>' );
          $( '.slideBtn:first-child' ).addClass( 'active' );
        }

      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Item9;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire( 'common' );

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_' ).split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize' );
      });

      // Fire common finalize JS
      UTIL.fire( 'common', 'finalize' );
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
