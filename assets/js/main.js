// smooth scrolling js area

$(function() {

  $(window).on( "load resize", function() {
    $(".fill-screen").css("height", window.innerHeight);
  });



    // counter 

    $('.counter').counterUp({
        delay: 100,
        time: 3000
    });

    /*--------------------------------------------------------------
    Isotope Js for Portfolio Section
    ---------------------------------------------------------------- */

    var $isocontainer = $('.product-wrapper');

    $isocontainer.imagesLoaded(function() {
        $isocontainer.isotope({
             itemSelector: ".product",
             layoutMode: 'masonry',
             //percentPosition: true,
        });

    });


    $('.product-filter li').click(function(e) {
        var $this = $(this);
        var $filter = $this.attr('data-filter');

        $isocontainer.isotope({
            filter: $filter,
        });

        $('.product-filter li').removeClass('active');
        $this.addClass('active');
    });



    /*--------------------------------------------------------------
    smooth scrolling
    ---------------------------------------------------------------- */
  
    $('.main-menu li a:not(a[href^="#products"]), .slider-btn, .explore').bind('click', function() {
      $('html, body').stop().animate({
        scrollTop: $($(this).attr('href')).offset().top + 0
      }, 800, 'easeOutCubic');
      event.preventDefault();
    });

    $('.main-menu li a[href="#products"]').bind('click', function() {
      $('html, body').stop().animate({
        scrollTop: $($(this).attr('href')).offset().top - 50
      }, 800, 'easeOutCubic');
      event.preventDefault();
    });


    /*--------------------------------------------------------------
    ScrollsPy
    ---------------------------------------------------------------- */

    $('body').scrollspy({
        target: '.navbar',
        offset: 150
    });

    /*--------------------------------------------------------------
    Activating site loader
    ---------------------------------------------------------------- */

    jQuery(window).load(function() { 
        jQuery("#preloader").delay(800).fadeOut("slow"); 
    });


    // reason-to-choose

    // $('.reasons-to-choose').slick({
    //     infinite: true,
    //     slidesToShow: 3,
    //     slidesToScroll: 2,
    //     dots: true,
    //     arrows: false ,
    //     responsive: [
    //         {
    //           breakpoint: 1024,
    //           settings: {
    //             slidesToShow: 3,
    //             slidesToScroll: 3,
    //             infinite: true,
    //           }
    //         },
    //         {
    //           breakpoint: 700,
    //           settings: {
    //             slidesToShow: 1,
    //             slidesToScroll: 2,
    //           }
    //         },
    //         {
    //           breakpoint: 480,
    //           settings: {
    //             slidesToShow: 1,
    //             slidesToScroll: 1, 
    //           }
    //         }
    //     ]

    // });
    // testimonial 

    // $('.testimonial-carousel').slick({
    //     slidesToShow: 1,
    //     slidesToScroll: 1,
    //     arrows: false,
    //     asNavFor: '.testimonial-nav'
    // });

    // $('.testimonial-nav').slick({
    //     slidesToShow: 3,
    //     slidesToScroll: 1,
    //     asNavFor: '.testimonial-carousel',
    //     centerMode: true,
    //     focusOnSelect: true,
    //     responsive: [
           
    //         {
    //           breakpoint: 480,
    //           settings: {
    //             arrows: false,
    //             slidesToShow: 3,
    //             slidesToScroll: 1, 
    //           }
    //         }
    //       ]

    // });

    //  client  carosel 
    // $('.client-carousel').slick({
    //     infinite: true,
    //     slidesToShow: 5,
    //     slidesToScroll: 3,
    //     dots: true,
    //     arrows: false ,
    //     autoplay :false ,
    //      responsive: [
    //         {
    //           breakpoint: 700,
    //           settings: {
    //             slidesToShow: 4,
    //             slidesToScroll: 2,
    //           }
    //         },
    //         {
    //           breakpoint: 480,
    //           settings: {
    //             slidesToShow: 2,
    //             slidesToScroll: 1, 
    //           }
    //         }
    //     ]

    // });


    $('.max-slides').slick({
      dots: false,
      arrows: true,
      prevArrow: '<div class="arrow-prev"><i class="fa fa-angle-right"></i></div>',
      nextArrow: '<div class="arrow-next"><i class="fa fa-angle-left"></i></div>',
      infinite: true,
      speed: 500,
      fade: true,
      cssEase: 'linear'
    });
  

    $(window).on('scroll',function () {
        if($(window).scrollTop()>200) {
            $("#toTop").fadeIn();
        } else {
            $("#toTop").fadeOut();
        }
    });



   $("#toTop").on('click', function() {
        $("html,body").animate({
            scrollTop:0
        }, 800)
    });  //scrollup finished


   var colHeight = $('.max-slides').height();
   $('.process-wrapper').height(colHeight - 60);



})