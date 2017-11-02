<?php session_start(); 
    $name = !empty($_SESSION['name'])? $_SESSION['name'] : '';
    $email = !empty($_SESSION['email'])? $_SESSION['email'] : '';
    $phone = !empty($_SESSION['phone'])? $_SESSION['phone'] : '';
    $message = !empty($_SESSION['message'])? $_SESSION['message'] : '';
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MaxMedOMAN</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- all css here -->
    <!-- google fonts here -->
    <link href="https://fonts.googleapis.com/css?family=Exo+2:400,600,700|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="assets/js/modernizr-2.8.3.min.js"></script>

<!--if lt IE 9
script(src='http://html5shim.googlecode.com/svn/trunk/html5.js')
script(src='https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js')
-->
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
    <div id="preloader"></div>
    <header class="header fill-screen">

        <nav class="navbar" data-spy="affix" data-offset-top="250">
            <div class="container">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#maxmed-navigation" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="logo">
                        <a class="" href="http://themeitems.com/maxmed/"><img src="assets/img/max-med-logo.png" alt="Max Med OMAN Logo"></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="maxmed-navigation">
                        <ul class="nav main-menu">
                            <li><a href="http://themeitems.com/maxmed/">Home</a></li>
                            <li><a href="#about">About Us</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#products">Products</a></li>
                            <li><a href="#map_location">Contact Us</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>

            </div>
        </nav> <!-- end of nav -->

        <div id="showcase" class="showcase">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1>Welcome to MaxMed HEALTHCARE</h1>
                        <p>MaxMed Healthcare offers a full validation process to ensure and monitor Clean Rooms and other controlled environments to evaluate the level of efficiency obtained in the areas </p>
                        <a href="#services" class="slider-btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <a href="#about" class="explore">
            <div class="scroll-down"></div>
        </a>            
        
    </header>



    <main class="whole-wrapper">

        <!-- about us  -->
        <section id="about" class="about">
            <div class="container"> 

                <div class="section-title">
                    <h2>Who We Are</h2>
                    <h3 class="title-bar">About Us</h3>
                    <p>MaxMed Healthcare is an Omani company specialised in providing high quality services for controlled environments according to ISO standards. Our qualified experienced team is capable to deliver comprehensive services to our clients in order to ensure the efficiency of their healthcare and industrial controlled environments.</p>
                </div>

                <div class="row is-table-row">
                    <div class="col-md-5 col-sm-4">
                        <div class="promo-wrapper text-right">
                            <h3 class="secondary-title">Our Vision</h3>
                            <p>Our vision is to be a pioneer company that provides various services and products in the healthcare industry. We are looking to expand our network of clients in the Sultanate of Oman and help the healthcare providers to enhance the quality of their healthcare facilities.</p>
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-4">
                        <div class="promo-wrapper">
                            <img src="assets/img/vission-mission.jpg" alt="MaxMed HealthCare">
                        </div>
                    </div>

                    <div class="col-md-5 col-sm-4">
                        <div class="promo-wrapper">
                            <h3 class="secondary-title">Our Mission</h3>
                            <p>Our Mission is to deliver the intelligent solutions for our clients by considering the highest standards. We are looking to provide innovative services and products to our customers using the highest technology available.</p>
                        </div>
                    </div>
                </div>
            </div>
                
        </section><!-- end about us  -->
        <!-- services   -->
        <section id="services" class="services">
            <div class="container">
                <div class="section-title">
                    <h2>Services we offering with</h2>
                    <h3 class="title-bar">Extensive Cares</h3>
                    <p>MaxMed Healthcare offers a full validation process to ensure and monitor Clean Rooms and other controlled environments to evaluate the level of efficiency obtained in the areas to conform whether the required class conditions are maintained under the specifications and standards of ISO 14644 by providing comprehensive service.</p>
                </div>

                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="info-item">
                            <div class="thumb-icon">                              
                                <span class="icon-border">
                                    <i class="fi flaticon-businessman-standing-beside-a-drawer" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="item-name">
                                <h3 class="secondary-title">All Types of Safety Cabinets</h3>
                            </div>
                            <div class="info-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, omnis. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="info-item">
                            <div class="thumb-icon">                              
                                <span class="icon-border">
                                    <i class="fi flaticon-hand" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="item-name">
                                <h3  class="secondary-title">Clean Rooms</h3>
                            </div>
                            <div class="info-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, omnis. Vivamus suscipit tortor eget felis porttitor volutpat. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="info-item">
                            <div class="thumb-icon">                              
                                <span class="icon-border">
                                    <i class="fi flaticon-nature" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="item-name">
                                <h3  class="secondary-title" >Fume Hoods</h3>
                            </div>
                            <div class="info-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, omnis. Vivamus suscipit tortor eget felis porttitor volutpat. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="info-item">
                            <div class="thumb-icon">                              
                                <span class="icon-border">
                                    <i class="fi flaticon-recycle" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="item-name">
                                <h3 class="secondary-title">Vertical and Horizontal Laminar Flow</h3>
                            </div>
                            <div class="info-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, omnis. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="info-item">
                            <div class="thumb-icon">                              
                                <span class="icon-border">
                                    <i class="fi flaticon-operating-room" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="item-name">
                                <h3  class="secondary-title">Operating Theatre</h3>
                            </div>
                            <div class="info-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, omnis. Vivamus suscipit tortor eget felis porttitor volutpat. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="info-item">
                            <div class="thumb-icon">                              
                                <span class="icon-border">
                                    <i class="fi flaticon-barrier" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="item-name">
                                <h3  class="secondary-title" >Barrier Isolators</h3>
                            </div>
                            <div class="info-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, omnis. Vivamus suscipit tortor eget felis porttitor volutpat. </p>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>   
        </section><!-- end services   -->

        <section class="validation-process">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 process-slide">
                        <div class="max-slides">
                            <div class="slide-single">
                                <img src="assets/img/service-1.jpg" alt="MaxMed HealthCare">
                            </div>

                            <div class="slide-single">
                                <img src="assets/img/service-2.jpg" alt="MaxMed HealthCare">
                            </div>

                            <div class="slide-single">
                                <img src="assets/img/service-3.jpg" alt="MaxMed HealthCare">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 process-wrapper">
                        <div class="process-desc">
                            <h3 class="secondary-title">Validation process includes the following tests:</h3>
                            <ul class="primary-list">
                                <li>Decontamination</li>
                                <li>HEPA filter leakage</li>
                                <li>Air velocity down flow</li>
                                <li>Air pressure</li>
                                <li>Particle count </li>
                                <li>Carbon filter</li>
                                <li>Down flow and exhaust fans</li>
                                <li>Gas leakage</li>
                                <li>Lux level</li>
                                <li>Noise level</li>
                                <li>Room temperature and humidity</li>
                                <li>Electrical safety</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- recent project   -->
        <section id="products" class="products">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section-title">
                            <h2>Our Products</h2>
                            <h3 class="title-bar">Products We Offer</h3>
                            <p>MaxMed Healthcare is an Omani company specialised in providing high quality services for controlled environments according to ISO standards. Our qualified experienced team is capable to deliver comprehensive services to our clients in order to ensure the efficiency of their healthcare and industrial controlled environments.</p>
                        </div>
                    </div>

                    <div class="col-xs-12 hidden">
                        <div class="product-filter text-center">
                            <ul class="list-inline">
                                <li class="active" data-filter="*">All</li>
                                <li data-filter=".monitoring">Monitoring Equipment</li>
                                <li data-filter=".clinical">Clinical Informatics</li>
                                <li data-filter=".diagnostic">Diagnostic Equipment</li>
                                <li data-filter=".surgical">Surgical Instruments</li>
                                <li data-filter=".hospital">Hospital Wears</li>
                                <li data-filter=".laboratory">Laboratory Disposables</li>
                                <li data-filter=".medical">Medical Disposables</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="product-wrapper">
                        <div class="product monitoring col-md-3 col-sm-6 col-xs-6">
                            <div class="project-item">
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="img">
                                    <a href="assets/img/products/monitoring-equipment.jpg" itemprop="contentUrl" data-size="679x594">
                                        <img src="assets/img/products/monitoring-equipment.jpg" itemprop="thumbnail" alt="Image description" />
                                    </a>

                                    <figcaption itemprop="caption description" class="project-content"><i class="fa fa-gg"></i><span class="primary-title">Monitoring Equipment</span></figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="product laboratory col-md-3 col-sm-6 col-xs-6">
                            <div class="project-item">
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="img">
                                    <a href="assets/img/products/laboratory-disposables.jpg" itemprop="contentUrl" data-size="679x594">
                                        <img src="assets/img/products/laboratory-disposables.jpg" itemprop="thumbnail" alt="Image description" />
                                    </a>

                                    <figcaption itemprop="caption description" class="project-content"><i class="fa fa-gg"></i><span class="primary-title">Laboratory Disposables</span></figcaption>
                                </figure>
                            </div>
                        </div>

                        <div class="product hospital col-md-3 col-sm-6 col-xs-6">
                            <div class="project-item">

                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="img">
                                    <a href="assets/img/products/hospital-wears.jpg" itemprop="contentUrl" data-size="679x1212">
                                        <img src="assets/img/products/hospital-wears.jpg" itemprop="thumbnail" alt="Image description" />
                                    </a>

                                    <figcaption itemprop="caption description" class="project-content"><i class="fa fa-gg"></i><span class="primary-title">Hospital Wears</span></figcaption>
                                </figure>
                            </div>
                        </div>

                        <div class="product diagnostic col-md-3 col-sm-6 col-xs-6">
                            <div class="project-item">
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="img">
                                    <a href="assets/img/products/diagnostic-equipment.jpg" itemprop="contentUrl" data-size="679x594">
                                        <img src="assets/img/products/diagnostic-equipment.jpg" itemprop="thumbnail" alt="Image description" />
                                    </a>

                                    <figcaption itemprop="caption description" class="project-content"><i class="fa fa-gg"></i><span class="primary-title">Diagnostic Equipment</span></figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="product surgical col-md-3 col-sm-6 col-xs-6">
                            <div class="project-item">
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="img">
                                    <a href="assets/img/products/surgical-instruments.jpg" itemprop="contentUrl" data-size="679x594">
                                        <img src="assets/img/products/surgical-instruments.jpg" itemprop="thumbnail" alt="Image description" />
                                    </a>

                                    <figcaption itemprop="caption description" class="project-content"><i class="fa fa-gg"></i><span class="primary-title">Surgical Instruments</span></figcaption>
                                </figure>
                            </div>
                        </div>

                        <div class="product clinical col-md-3 col-sm-6 col-xs-6">
                            <div class="project-item">
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="img">
                                    <a href="assets/img/products/clinical-informatics.jpg" itemprop="contentUrl" data-size="679x594">
                                        <img src="assets/img/products/clinical-informatics.jpg" itemprop="thumbnail" alt="Image description" />
                                    </a>

                                    <figcaption itemprop="caption description" class="project-content"><i class="fa fa-gg"></i><span class="primary-title">Clinical Informatics</span></figcaption>
                                </figure>
                            </div>
                        </div>


                        <div class="product medical col-md-3 col-sm-6 col-xs-6">
                            <div class="project-item">
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="img">
                                    <a href="assets/img/products/medical-disposables.jpg" itemprop="contentUrl" data-size="679x594">
                                        <img src="assets/img/products/medical-disposables.jpg" itemprop="thumbnail" alt="Image description" />
                                    </a>

                                    <figcaption itemprop="caption description" class="project-content"><i class="fa fa-gg"></i><span class="primary-title">Medical Disposables</span></figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- end recent project   -->

        <section id="map_location" class="map-location no-padding mb-0">
            <div id="map">
                <div id="gmap-wrap">
                    <div id="gmap">
                    </div>
                </div>
            </div>
            <!--/#map-->
        </section>

        <section class="contact-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 form-wrapper">
                        <h3>Contact Us</h3>
                        <form action="sendemail.php" method="post" class="primary-form" id="primary_form">
                            <div class="col-sm-4">
                                <div class="full-width-input">
                                    <input type="text" name="name" placeholder="Name*" value="<?php echo !empty($name) ? $name : ''; ?>" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="full-width-input">
                                    <input type="email" name="email" placeholder="Email*" value="<?php echo !empty($email) ? $email : ''; ?>" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="full-width-input">
                                    <input type="text" name="phone" placeholder="Phone" value="<?php echo !empty($phone) ? $phone : ''; ?>" >
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="full-width-input">
                                    <textarea name="message" id="" placeholder="Your Message*" required><?php echo !empty($message) ? $message : ''; ?></textarea>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <p><img src="captcha.php" width="160" height="60" border="1" alt="CAPTCHA"></p>
                                <p><span class="full-width-input"><input type="text" placeholder="Write down the above digits in this box" size="6" maxlength="5" name="captcha" value="" required></span></p>
                            </div>
                            <div class="col-sm-offset-4 col-sm-4 text-center">
                                <input type="submit" name="contact" value="Send Message" class="full-width">
                            </div>
                        </form>
                    </div>

                    <div class="col-md-4 contact-info-wrapper">
                        <h3>Lets Continue The Conversion</h3>

                        <div class="contact-box">
                            <div class="thumb-icon">                              
                                <span>
                                    <i class="fi flaticon-businessman" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="contact-item-wrapper">
                                <p>Abdullah Alshaikh</p>
                                <p>General Manager</p>
                            </div>
                        </div>

                        <div class="contact-box">
                            <div class="thumb-icon">                              
                                <span>
                                    <i class="fi flaticon-smartphone" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="contact-item-wrapper">
                                <p><a href="tel:+968 99098680">+968 99098680</a></p>
                                <p><a href="mailto:alshaikh@maxmedoman.com">alshaikh@maxmedoman.com</a></p>
                            </div>
                        </div>

                        <div class="contact-box">
                            <div class="thumb-icon">                              
                                <span>
                                    <i class="fi flaticon-map-1" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="contact-item-wrapper">
                                <p>PC 121, PO Box 72 Seeb</p>
                                <p>Sultanate of Oman</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>





    </main>
    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <a href="http://themeitems.com/maxmed/" class="center-block"><img src="assets/img/max-med-logo.png" alt="MaxMed HealthCare"></a>
                        <div class="socials">
                            <a href="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="LinkedIn"><i class="fa fa-linkedin"></i></a>
                            <a href="instagram"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div> 
        </div> <!-- end of footer-top -->
        <div class="copyright-section">
            <div id="toTop">
                <i class="fa fa-chevron-up"></i>
            </div>
            <p>&copy; Copyright - 2017. All rights reserverd by <a href="http://themeitems.com" target="_blank">MaxMed HealthCare</a></p>
        </div>    
    </footer>

    <!-- Root element of PhotoSwipe. Must have class pswp. -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

        <!-- Background of PhotoSwipe. 
             It's a separate element, as animating opacity is faster than rgba(). -->
        <div class="pswp__bg"></div>

        <!-- Slides wrapper with overflow:hidden. -->
        <div class="pswp__scroll-wrap">

            <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
            <!-- don't modify these 3 pswp__item elements, data is added later on. -->
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
            <div class="pswp__ui pswp__ui--hidden">

                <div class="pswp__top-bar">

                    <!--  Controls are self-explanatory. Order can be changed. -->

                    <div class="pswp__counter"></div>

                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                    <button class="pswp__button pswp__button--share" title="Share"></button>

                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                    <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                    <!-- element will get class pswp__preloader--active when preloader is running -->
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                          <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div> 
                </div>

                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                </button>

                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                </button>

                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>

              </div>

            </div>

    </div>


<!-- jquery latest version -->

<script src="assets/js/jquery.1.12.4.min.js"></script>
<!-- bootstrap js -->
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/imagesloaded.pkgd.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>

<!-- slick carousel  -->
<script type="text/javascript" src="assets/js/slick.min.js"></script>
<script type='text/javascript' src='assets/js/jquery.easing.1.3.js'></script>
<!-- counter up  -->
<!-- <script type="text/javascript" src="assets/js/waypoints.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script> -->
<!-- camera slider  -->
<!-- <script type='text/javascript' src='assets/js/jquery.mobile.customized.min.js'></script>
<script type='text/javascript' src='assets/js/jquery.easing.1.3.js'></script> 
<script type='text/javascript' src='assets/js/camera.min.js'></script>  -->

<!-- google map api and gmaps JS
============================================ -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzcEM8z2_imGO8TMRmJEpDEahvZ7KYY_U"></script>
<script type="text/javascript" src="assets/js/gmaps.js"></script>

<!-- Photoswipe Js
============================================ -->

<script type='text/javascript' src='assets/js/photoswipe.min.js'></script>
<script type='text/javascript' src='assets/js/photoswipe-ui-default.min.js'></script> 
<script type='text/javascript' src='assets/js/photoswipe-main.js'></script> 
<script type='text/javascript' src='assets/js/jquery.validate.min.js'></script> 


<script src="assets/js/main.js"></script>
<script>

// (function($){

//     $('#camera_slider').camera({
//         height: '35%',
//         pagination: false,
//         loader: false ,
//         overlayer: true
//         // thumbnails: true,
//     }); 

// })(jQuery)

</script>

<script>
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

</script>
</body>
</html>