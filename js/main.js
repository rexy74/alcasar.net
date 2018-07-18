
function main() {

(function () {
   'use strict';
   
    $('a.page-scroll').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top - 40
            }, 900);
            return false;
          }
        }
      });

    // Show Menu on Book
    $(window).bind('scroll', function() {
        var navHeight = $(window).height() - 500;
        if ($(window).scrollTop() > navHeight) {
            $('.navbar-default').addClass('on');
        } else {
            $('.navbar-default').removeClass('on');
        }
    });

    $('body').scrollspy({ 
        target: '.navbar-default',
        offset: 80
    });
  
  
  // Hide nav on click
  $(".navbar-nav li a").click(function (event) {
    // check if window is small enough so dropdown is created
    var toggle = $(".navbar-toggle").is(":visible");
    if (toggle) {
      $(".navbar-collapse").collapse('hide');
    }
  });


  // Portfolio isotope filter
    $(window).load(function() {
        var $container = $('.portfolio-items');
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
        $('.cat a').click(function() {
            $('.cat .active').removeClass('active');
            $(this).addClass('active');
            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });

    });
  
    // Pretty Photo
  $("a[rel^='prettyPhoto']").prettyPhoto({
    social_tools: false
  }); 


}());

var contentWayPoint = function() {
    var i = 0;
    $('.animate-box').waypoint( function( direction ) {

      if( direction === 'down' && !$(this.element).hasClass('animated-fast') ) {
        
        i++;

        $(this.element).addClass('item-animate');
        setTimeout(function(){

          $('body .animate-box.item-animate').each(function(k){
            var el = $(this);
            setTimeout( function () {
              var effect = el.data('animate-effect');
              if ( effect === 'fadeIn') {
                el.addClass('fadeIn animated-fast');
              } else if ( effect === 'fadeInLeft') {
                el.addClass('fadeInLeft animated-fast');
              } else if ( effect === 'fadeInRight') {
                el.addClass('fadeInRight animated-fast');
              } else {
                el.addClass('fadeInUp animated-fast');
              }

              el.removeClass('item-animate');
            },  k * 200, 'easeInOutExpo' );
          });
          
        }, 100);
        
      }

    } , { offset: '85%' } );
  };





  var counter = function() {
    $('.js-counter').countTo({
       formatter: function (value, options) {
        return value.toFixed(options.decimals);
      },
    });
  };

  var counterWayPoint = function() {
    if ($('#gtco-counter').length > 0 ) {
      $('#gtco-counter').waypoint( function( direction ) {
                    
        if( direction === 'down' && !$(this.element).hasClass('animated') ) {
          setTimeout( counter , 400);         
          $(this.element).addClass('animated');
        }
      } , { offset: '90%' } );
    }
  };

  var accordion = function() {
    $('.gtco-accordion-heading').on('click', function(event){

      var $this = $(this);

      $this.closest('.gtco-accordion').find('.gtco-accordion-content').slideToggle(400, 'easeInOutExpo');
      if ($this.closest('.gtco-accordion').hasClass('active')) {
        $this.closest('.gtco-accordion').removeClass('active');
      } else {
        $this.closest('.gtco-accordion').addClass('active');
      }
      event.preventDefault();
    });
  };

  
  $(function(){


    
    
    contentWayPoint();
  
    
    counterWayPoint();
    
  });


}
main();