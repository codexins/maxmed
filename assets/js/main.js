jQuery(function($) {

    // activating wow (animation on scroll) 
    $(window).load(function() { 
        new WOW().init();
    });
    
    
    // full screen height for showcae area
      $(window).on( "load resize", function() {
        $(".fill-screen").css("height", window.innerHeight);
      });



    // form validation
    $("#primary_form").validate();

    /*--------------------------------------------------------------
    Isotope Js for Product Section
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
        scrollTop: $($(this).attr('href')).offset().top - 30
      }, 800, 'easeOutCubic');
      event.preventDefault ? event.preventDefault() : event.returnValue = false;
    });

    $('.main-menu li a[href="#products"]').bind('click', function() {
      $('html, body').stop().animate({
        scrollTop: $($(this).attr('href')).offset().top - 20
      }, 800, 'easeOutCubic');
      event.preventDefault ? event.preventDefault() : event.returnValue = false;
    });


    /*--------------------------------------------------------------
    ScrollsPy
    ---------------------------------------------------------------- */

    $('body').scrollspy({
        target: '.navbar',
        offset: 250
    });

    /*--------------------------------------------------------------
    Activating site loader
    ---------------------------------------------------------------- */

    jQuery(window).load(function() { 
        jQuery("#preloader").delay(800).fadeOut("slow"); 
    });


    /*--------------------------------------------------------------
    Closes the Responsive Menu on Menu Item Click
    ---------------------------------------------------------------- */

    $('.navbar-collapse ul li a').click(function() {
        $('.navbar-toggle:visible').click();
    });


    /*--------------------------------------------------------------
    SLider on Validation Process section
    ---------------------------------------------------------------- */

    $('.max-slides').slick({
      dots: false,
      arrows: true,
      prevArrow: '<div class="arrow-prev"><i class="fa fa-angle-right"></i></div>',
      nextArrow: '<div class="arrow-next"><i class="fa fa-angle-left"></i></div>',
      infinite: true,
      speed: 500,
      fade: true,
      autoplay: true,
      autoplaySpeed: 3000,
      cssEase: 'linear'
    });
  

    /*--------------------------------------------------------------
    Back to top
    ---------------------------------------------------------------- */

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

   $(window).load(function() { 
       var colHeight = $('.max-slides').height();
       $('.process-wrapper').height(colHeight - 60);
    });


});

// Google map
(function(){

    var map;

    map = new GMaps({
        el: '#gmap',
        lat: 23.614813,
        lng: 58.205837,
        scrollwheel:false,
        zoom: 14,
        zoomControl : true,
        panControl : false,
        streetViewControl : false,
        mapTypeControl: true,
        overviewMapControl: false,
        clickable: false,
        fullscreenControl: true
    });

    var image = 'assets/img/map-marker.png';
    map.addMarker({
        lat: 23.614813,
        lng: 58.205837,
        icon: image,
        animation: google.maps.Animation.DROP,
        verticalAlign: 'bottom',
        horizontalAlign: 'center',
        backgroundColor: '#3e8bff',
    });


    var styles = [ 

    {
        "featureType": "road",
        "stylers": [
        { "color": "#b4b4b4" }
        ]
    },{
        "featureType": "water",
        "stylers": [
        { "color": "#d8d8d8" }
        ]
    },{
        "featureType": "landscape",
        "stylers": [
        { "color": "#f1f1f1" }
        ]
    },{
        "elementType": "labels.text.fill",
        "stylers": [
        { "color": "#000000" }
        ]
    },{
        "featureType": "poi",
        "stylers": [
        { "color": "#d9d9d9" }
        ]
    },{
        "elementType": "labels.text",
        "stylers": [
        { "saturation": 1 },
        { "weight": 0.1 },
        { "color": "#000000" }
        ]
    }

    ];

    map.addStyle({
        styledMapName:"Styled Map",
        styles: styles,
        mapTypeId: "map_style"  
    });

    map.setStyle("map_style");
}());

