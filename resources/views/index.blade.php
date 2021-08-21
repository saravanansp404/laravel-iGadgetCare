<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>i Gadget Care | mobile service center bangalore | iphone service center kormangala | doorstep mobile repair near me | macbook service bangalore | ipad service center bangalore</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="css/common-style.css">
    <link rel="stylesheet" href="css/responsive.css">
       <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="images/logo/favicon.png"/>
    <link href="css/custom.css" rel="stylesheet">

</head>
<body class="home-one">
<!-- <div class="preloader"></div> -->
<header class="header clearfix">
    <div class="main-header stricky bubble">

    <div class="container">
       <div class="matrix-black col-md-4">
        
            <div class="logo pull-left">

                <a href="">
                    <img src="images/logo/logo1.png" alt="Awesome Image">
                </a>
            </div>
         </div>
         

            <div class="nav-outer col-md-8">
                <div class="header-top">
                    <div class="contact">
                        <span class="icon fa fa-phone"></span>Call :  +91 82175 05435
                    </div>
                    <?php if(Auth::check())
                   { ?>
                      <div class="register">
                    <a href="/home" class="">{{ Auth::user()->name }}</a>
                </div>
                <div class="register">
                <a class="" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                </div>
             
                 <?php  }else
                   {?>
                    <div class="register">
                    <a href="#small-dialog1" class="popup-with-zoom-anim">Register</a>
                </div>
                <div class="register">
                    <a href="#small-dialog" class="popup-with-zoom-anim">Login </a>
                </div>
                  <?php 
                   }
                
            ?>

                    <div id="polyglotLanguageSwitcher">
                        <form action="#">
                            <select id="polyglot-language-options">
                                <option id="bangalore" value="Bangalore" selected>Bangalore</option>
                           
                               
                            </select>
                        </form>
                    </div>
                    <!-- <div id="top-search" class="top-search">
                        <span class="flaticon-search search"></span>
                        <ul class="search-box">
                            <li>
                                <form action="#">
                                    <input type="text" placeholder="Search for something...">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </li>
                        </ul>
                    </div> -->
                    <div class="cart">
                        <a href="track/" title="Track Your Gadget Work Status"><i class="fa fa-map-marker"></i></a>
                    </div>
                </div>
                <nav class="mainmenu-area">
                    <div class="navbar" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            
                        </div>

                        <div class="navbar-collapse collapse text-center">  
                            <ul>
                                <li class="current">
                                    <a href="">Home</a>
                                   
                                </li>
                                <li>
                                    <a href="about/">About</a>
                                    
                                </li>
                                <li>
                                    <a href="service/">Services</a>
                                   
                                </li>
                                <li class="dropdown">
                                    <a href="">Portfolio </a>
                                     <ul class="submenu">
                                        <li>
                                            <a href="gallery/">Gallery</a>
                                        </li>
                                        <li><a href="video/">Video</a></li>
                                     
                                    </ul>
                                </li>
                                <li>
                                    <a href="track/">Track</a>
                                    
                                </li>
                                <li>
                                    <a href="book/">Book Repair</a>
                                   
                                </li>
                                <li><a href="contact/">Contact</a></li>
                            </ul>  
                        </div> 
                    </div>
                </nav>
            </div>

        </div>
    </div>
</header>



<section class="rev_slider_wrapper">
    <h2 class="hidden">rev slider</h2>
    <div id="slider1" class="rev_slider"  data-version="5.0">
        <ul>
           <!--  <li class="gradient-overlay" data-transition="slotzoom-horizontal" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/1.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                <img src="images/main-slider/1.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                
                <div class="tp-caption lfl sfb tp-resizeme start"
                data-x="left" data-hoffset="30"
                data-y="center" data-voffset="0"
                data-speed="1500"
                data-start="1000"
                data-easing="easeOutExpo"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.01"
                data-endelementdelay="0.3"
                data-endspeed="1200"
                data-endeasing="Power4.easeIn"><img src="images/main-slider/7.png" alt=""></div>
                
                <div class="tp-caption lfl sfb tp-resizeme start"
                data-x="left" data-hoffset="245"
                data-y="center" data-voffset="-190"
                data-speed="1500"
                data-start="1000"
                data-easing="easeOutExpo"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.01"
                data-endelementdelay="0.3"
                data-endspeed="1200"
                data-endeasing="Power4.easeIn"><img src="images/main-slider/1.png" alt=""></div>
                
                <div class="tp-caption lft sfb tp-resizeme start"
                data-x="center" data-hoffset="50"
                data-y="center" data-voffset="-110"
                data-speed="1500"
                data-start="1500"
                data-easing="easeOutExpo"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.01"
                data-endelementdelay="0.3"
                data-endspeed="1200"
                data-endeasing="Power4.easeIn"><img src="images/main-slider/2.png" alt=""></div>
                
                <div class="tp-caption lfr sfb tp-resizeme start"
                data-x="right" data-hoffset="150"
                data-y="center" data-voffset="-40"
                data-speed="1500"
                data-start="2000"
                data-easing="easeOutExpo"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.01"
                data-endelementdelay="0.3"
                data-endspeed="1200"
                data-endeasing="Power4.easeIn"><img src="images/main-slider/4.png" alt=""></div>
                
                <div class="tp-caption lfb sfb tp-resizeme start"
                data-x="center" data-hoffset="240"
                data-y="center" data-voffset="160"
                data-speed="1500"
                data-start="2500"
                data-easing="easeOutExpo"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.01"
                data-endelementdelay="0.3"
                data-endspeed="1200"
                data-endeasing="Power4.easeIn"><img src="images/main-slider/3.png" alt=""></div>
            </li> -->
            <li class="gradient-overlay" data-transition="slotzoom-horizontal" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/2.jpg"  data-saveperformance="off"  data-title="Mobile Service Center">
                <img src="images/background/1.png"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                
                
                <div class="tp-caption lfl sfb tp-resizeme start"
                data-x="left" data-hoffset="0"
                data-y="center" data-voffset="0"
                data-speed="1500"
                data-start="1000"
                data-easing="easeOutExpo"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.01"
                data-endelementdelay="0.3"
                data-endspeed="1200"
                data-endeasing="Power4.easeIn"><img src="images/matrix/mob-sli1.png" alt=""></div>
                
                <div class="tp-caption lft sfb tp-resizeme start"
                data-x="right" data-hoffset="0"
                data-y="center" data-voffset="0"
                data-speed="1500"
                data-start="1500"
                data-easing="easeOutExpo"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.01"
                data-endelementdelay="0.3"
                data-endspeed="1200"
                data-endeasing="Power4.easeIn"><div class="outer-box">
                    <p>Most Reliable iGadgets Service Center </p>
                    <h3>We are here to service and <br>  fix all apple products</h3>    
                </div></div>
                
            </li>

            <li class="gradient-overlay" data-transition="slotzoom-horizontal" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/3.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                <img src="images/background/2.png"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                
                
                <div class="tp-caption lfl sfb tp-resizeme start"
                data-x="left" data-hoffset="0"
                data-y="center" data-voffset="0"
                data-speed="1500"
                data-start="1000"
                data-easing="easeOutExpo"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.01"
                data-endelementdelay="0.3"
                data-endspeed="1200"
                data-endeasing="Power4.easeIn"><img src="images/matrix/mob-sli2.png" alt=""></div>
                
                <div class="tp-caption lft sfb tp-resizeme start"
                data-x="left" data-hoffset="600"
                data-y="center" data-voffset="-100"
                data-speed="1500"
                data-start="1500"
                data-easing="easeOutExpo"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.01"
                data-endelementdelay="0.3"
                data-endspeed="1200"
                data-endeasing="Power4.easeIn"><h2>Schedule a Device Pick-Up <br>  at Your Convenience</h2></div>

                <div class="tp-caption lfr sfr tp-resizeme start"
                data-x="left" data-hoffset="600"
                data-y="center" data-voffset="0"
                data-speed="1500"
                data-start="2000"
                data-easing="easeOutExpo"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.01"
                data-endelementdelay="0.3"
                data-endspeed="1200"
                data-endeasing="Power4.easeIn"><p>One Year Service Guaranteed <br>On-time Service at your Chosen Time Slot</p></div>

                <div class="tp-caption lfb sfb tp-resizeme start"
                data-x="left" data-hoffset="600"
                data-y="center" data-voffset="80"
                data-speed="1500"
                data-start="2500"
                data-easing="easeOutExpo"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.01"
                data-endelementdelay="0.3"
                data-endspeed="1200"
                data-endeasing="Power4.easeIn"><a href="#" class="theme-btn btn-style-one">Book Now</a></div>

            </li> 


            <li class="gradient-overlay" data-transition="slotzoom-horizontal" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/2.jpg"  data-saveperformance="off"  data-title="Mobile Service Center">
                <img src="images/background/3.png"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                
                
                <div class="tp-caption lfl sfb tp-resizeme start"
                data-x="left" data-hoffset="0"
                data-y="center" data-voffset="0"
                data-speed="1500"
                data-start="1000"
                data-easing="easeOutExpo"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.01"
                data-endelementdelay="0.3"
                data-endspeed="1200"
                data-endeasing="Power4.easeIn"><img src="images/matrix/mac.png" alt=""></div>
                
                <div class="tp-caption lft sfb tp-resizeme start"
                data-x="right" data-hoffset="0"
                data-y="center" data-voffset="0"
                data-speed="1500"
                data-start="1500"
                data-easing="easeOutExpo"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.01"
                data-endelementdelay="0.3"
                data-endspeed="1200"
                data-endeasing="Power4.easeIn"><div class="outer-box">
                    <p>Problem in MacBook? </p>
                    <h3>Have Trouble in Your MacBook <br> No Worries, i Gadget Care is the<br> Right Place to Fix</h3>    
                </div></div>
                
            </li>
                
        </ul>
    </div>
</section>


<div class="mob-carousel">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/mobile/mob1.png" alt="i Gadget Care" style="width:100%;">
      </div>

      <div class="item">
        <img src="images/mobile/mob2.png" alt="i Gadget Care" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="images/mobile/mob3.png" alt="i Gadget Care" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>



<section class="about">
    <div class="container">
                
        <div class="row">
            <div class="single-column col-md-6 col-sm-12">
                <div class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset="0" style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeIn;">
                    <div class="post-content">
                        <div class="section-title">
                            <h2>Welcome To <span>i Gadget Care</span> </h2>
                        </div>
                        <div class="text">
                            <p>We are specialized in servicing all types of devices that include iPhone, iPod, iPad, MAC, android, smart-phones, basic mobiles, desktops, tablets, laptops etc., We value each and every customer and we deliver the service right on time. Our service technicians are well trained and expert in servicing all types of devices. </p>
                        </div>
                        <ul class="list">
                            <li>Schedule a Device Pick-Up at Your Convenience</li>
                            <li>Experienced Technicians</li>
                            <li>Track Gadget Work Status</li>
                            <li>Customer Satisfaction</li>

                        </ul>
                       <!--  <div class="link">
                            <a href="#" class="read-more">Have Problem in Gadgets</a>
                            <a href="#" class="read-more">Book Now</a>
                        </div> -->
                    </div>
                </div>    
                    

            </div>
            <div class="single-column col-md-6 col-sm-12">  
                <div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset="0" style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeIn;">
                    <figure class="img-box">
                        <a href="#"><img src="images/matrix/mob-sli2.png" alt=""></a>
                    </figure>
                </div> 
            </div>
        </div>
    </div>           
</section>





<section class="gallery-section gallery-three-column">
    <div class="container">
    <div class="section-title">
        <h2>Our <span>Services</span></h2>
    </div>
    
        <!--Sortable Masonry-->
        <div class="">
            <!--Filter-->
            <div class="row">
                
                <!--Default Portfolio Item-->
                <div class="col-md-4 default-portfolio-item">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/service/water-damage.png" alt=""></figure>
                        <!--Overlay Box-->
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <h3><a href="#gallery-popup" class=" has-gallery-popup" title="Water Damage">Water Damage</a></h3>
                                    <a href="#gallery-popup" class="image-link has-gallery-popup" title="Water Damage Service"><span class="icon-magnifier"></span></a>
                                    <a href="#" class="image-link2"><span class="icon-link-1"></span></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                

                <!-- second image -->
                  <!--Default Portfolio Item-->
                <div class="col-md-4 default-portfolio-item">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/service/break.png" alt=""></figure>
                        <!--Overlay Box-->
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <h3><a href="#gallery-popup" class=" has-gallery-popup" title="Display Damage">Display Breakage</a></h3>
                                    <a href="#gallery-popup" class="image-link has-gallery-popup" title="Display Breakage Service"><span class="icon-magnifier"></span></a>
                                    <a href="#" class="image-link2"><span class="icon-link-1"></span></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                  <!-- third image -->
                  <!--Default Portfolio Item-->
                <div class="col-md-4 default-portfolio-item">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/service/power.png" alt=""></figure>
                        <!--Overlay Box-->
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <h3><a href="#gallery-popup" class=" has-gallery-popup" title="Power Issues">Power Issues</a></h3>
                                    <a href="#gallery-popup" class="image-link has-gallery-popup" title="Power Issues Service"><span class="icon-magnifier"></span></a>
                                    <a href="#" class="image-link2"><span class="icon-link-1"></span></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>


                  <!-- Fourth image -->
                  <!--Default Portfolio Item-->
                <div class="col-md-4 default-portfolio-item">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/service/hardware.png" alt=""></figure>
                        <!--Overlay Box-->
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <h3><a href="#gallery-popup" class=" has-gallery-popup" title="Hardware Issues">Hardware Issues</a></h3>
                                    <a href="#gallery-popup" class="image-link has-gallery-popup" title="Hardware Issue Service"><span class="icon-magnifier"></span></a>
                                    <a href="#" class="image-link2"><span class="icon-link-1"></span></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
             

                  <!-- Fifth image -->
                  <!--Default Portfolio Item-->
                <div class="col-md-4 default-portfolio-item">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/service/port.png" alt=""></figure>
                        <!--Overlay Box-->
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <h3><a href="#gallery-popup" class=" has-gallery-popup" title="Port Issues">Port Issues</a></h3>
                                    <a href="#gallery-popup" class="image-link has-gallery-popup" title="Port Issue Service"><span class="icon-magnifier"></span></a>
                                    <a href="#" class="image-link2"><span class="icon-link-1"></span></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
             
             
                 <!-- Sixth image -->
                  <!--Default Portfolio Item-->
                <div class="col-md-4 default-portfolio-item">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/service/camera.png" alt=""></figure>
                        <!--Overlay Box-->
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <div class="content">
                                    <h3><a href="#gallery-popup" class=" has-gallery-popup" title="Camera Issues">Camera Issues</a></h3>
                                    <a href="#gallery-popup" class="image-link has-gallery-popup" title="Camera Issue Service"><span class="icon-magnifier"></span></a>
                                    <a href="#" class="image-link2"><span class="icon-link-1"></span></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>


          



            </div>
            
        </div>
        
    </div>
    <div class="see-more style-2">
        <div class="container">
            <div class="clearfix">
           
                <div class="link">
                    <a href="service/" class="theme-btn btn-style-one">View More</a>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="feature">
    <div class="container">
        <div class="section-title center pb-60">
            <h2>Why <span> Choose Us</span> </h2>
        </div>
        <div class="row">

            <div class="column col-md-4 col-sm-12">
                <div class="item right">
                    <div class="icon"><i class="fa fa-user"></i></div>
                    <h4><a href="#">Experienced Technicians</a></h4>
                    <p>Our technicians are highly qualified, well trained and professional in analysing and solving all the type of issue related to your gadgets</p>
                </div> 
                <div class="item right">
                    <div class="icon"><i class="fa fa-newspaper-o"></i></div>
                    <h4><a href="#">Warranty Service</a></h4>
                    <p>We use high quality and standard spare parts for the repair and give you a warranty of one year on any of the gadgets that we repair</p>
                </div> 
            
            </div>

            <div class="column col-md-4 col-sm-12">
                <div class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset="0" style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeIn;">
                    <figure class="img-box">
                        <a href="#"><img src="images/background/xs.png" alt=""></a>
                    </figure>
                </div>
                            
            </div>

           <div class="column col-md-4 col-sm-12">
                <div class="item left">
                    <div class="icon"><i class="fa fa-gear"></i></div>
                    <h4><a href="#">Doorstep Service</a></h4>
                    <p>Customers can either walk to our near by shop or can directly book a door step service for repairing your gadgets</p>
                </div> 
                <div class="item left">
                    <div class="icon"><i style="color: white;" class="fa fa-map-marker"></i></div>
                    <h4><a href="#">Track</a></h4>
                    <p>Customers can lively track the work status and know the updates of their gadgets in real time.</p>
                </div> 
               
                   
            </div>

        </div>
    </div>

</section>











<!--Scroll to top-->
<div class="scroll-to-top"><i class="fa fa-long-arrow-up"></i></div>
<!--Gallery Popup-->
<div class="gallery-box" id="gallery-popup">
    <!--Bg Fade Layer-->
    <div class="bg-fade-layer"></div>
    
    <div class="popup-container">
        <div class="popup-content">
        
            <div class="popup-header">
                <button type="button" class="btn-close"><span class="fa fa-close"></span></button>
                <h3>Opening Remark</h3>
            </div>
            
            <div class="content-outer">
                
                <!--Vertical Slider-->
                <div class="vertical-slider">
                    
                    <!-- template -->
                    <div class="ms-vertical-template  ms-tabs-vertical-template">
                        <!-- masterslider -->
                        <div class="master-slider ms-skin-default" id="masterslider">
                        
                            <div class="ms-slide">
                                <img src="css/masterslider/style/blank.gif" data-src="images/service/water-damage1.png" alt=""/>  
                                <img class="ms-thumb" src="images/service/water-damage1.png" alt="thumb" />
                            </div>
                            
                            <div class="ms-slide">
                                <img src="css/masterslider/style/blank.gif" data-src="images/service/break1.png" alt=""/>  
                                <img class="ms-thumb" src="images/service/break1.png" alt="thumb" />
                            </div>
                            
                            <div class="ms-slide">
                                <img src="css/masterslider/style/blank.gif" data-src="images/service/power1.png" alt=""/>  
                                <img class="ms-thumb" src="images/service/power1.png" alt="thumb" />
                            </div>
                            
                            <div class="ms-slide">
                                <img src="css/masterslider/style/blank.gif" data-src="images/service/hardware1.png" alt=""/>  
                                <img class="ms-thumb" src="images/service/hardware1.png" alt="thumb" />
                            </div>
                            
                            <div class="ms-slide">
                                <img src="css/masterslider/style/blank.gif" data-src="images/service/port1.png" alt=""/>  
                                <img class="ms-thumb" src="images/service/port1.png" alt="thumb" />
                            </div>
                            
                            <div class="ms-slide">
                                <img src="css/masterslider/style/blank.gif" data-src="images/service/camera1.png" alt=""/>  
                                <img class="ms-thumb" src="images/service/camera1.png" alt="thumb" />
                            </div>
                            

                            
                        </div>
                        <!-- end of masterslider -->
                    </div>
                    <!-- end of template -->
    
                </div>
                
            </div>
            
        </div>
    <!--popup-content -->
    </div>
<!-- popup-container -->
</div>







  <div class="testimonial">
                <div class="section-title">
                    <h2>Other Brands <span> We Service</span></h2>
                </div>
                <div class="testimonial-slide">

                    <div class="item center">
                        <img src="img/apple.jpg"  style="width:200px;display:block; margin:0px auto; "alt="">
                      
                    </div>
                    <div class="item center">
                        <img src="img/1plus.jpg" style="width:200px;display:block; margin:0px auto;" alt="">
                      
                    </div>
                    <div class="item center">
                        <img src="img/lenovo.png" style="width:200px;display:block; margin:0px auto;" alt="">
                      
                    </div>
                    <div class="item center">
                        <img src="img/oppo.png" style="width:200px;display:block; margin:0px auto;" alt="">
                      
                    </div>
                    <div class="item center">
                        <img src="img/real.png" style="width:200px;display:block; margin:0px auto;" alt="">
                      
                    </div>

                    <div class="item center">
                        <img src="img/redmi.jpeg" style="width:200px;display:block; margin:0px auto;" alt="">
                      
                    </div>
                    <div class="item center">
                        <img src="img/sam.png" style="width:200px;display:block; margin:0px auto;" alt="">
                      
                    </div>
                    <div class="item center">
                        <img src="img/moto.png" style="width:200px;display:block; margin:0px auto;" alt="">
                      
                    </div>
                </div>
            </div>








<section class="call-out">
    <div class="container">
        

            <div class="column col-md-9 col-sm-12 col-xs-12">
                <div class="text-left clearfix">
                    <h2>Problem in Gadgets ?</h2>
                    <p>i Gadget Care is the right place  <br> to fix your gadgets, book a doorstep service for your gadgets .</p>
                </div>
                    
            </div>

            <div class="column col-md-3 col-sm-12 col-xs-12">
                <div class="text-right padd-top-20">
                    <a href="book/" class="theme-btn btn-style-one">Book Repair</a>
                </div>
            </div>
      
    </div>
</section>


<!-- pop-up-grid -->
<div id="small-dialog" class="mfp-hide">
    <div class="pop_up w3-agile">
      <div class="iservice-pop">
      <h4>i Gadget Care Customer Login</h4>
      <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
      
          <div class="clearfix"> </div>
        
      </div>
    </div>
  </div>
  <!-- //pop-up-grid --> 






<?php //include_once'footer.php';?>            
@include('pages.footer')





        <!-- jQuery js -->
    <script src="assets/jquery/jquery-1.12.3.min.js"></script>
    <!-- bootstrap js -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- jQuery ui js -->
    <script src="assets/jquery-ui-1.11.4/jquery-ui.js"></script>

    <!-- wow js -->
    <script src="assets/wow.js"></script>

    <!-- owl carousel js -->
    <script src="assets/owl.carousel-2/owl.carousel.min.js"></script>              <!-- jquery.bxslider js -->
    <script src="assets/jquery.bxslider/jquery.bxslider.min.js"></script>
    

    
    <!-- Gallery -->
    <script src="assets/jquery.mixitup.min.js"></script>
    <script src="assets/isotope.pkgd.min.js"></script>
    <script src="assets/jquery.countdown.min.js"></script>
    <script src="assets/masterslider/masterslider.js"></script>
    <script src="assets/SmoothScroll.js"></script>

    <!-- revolution slider js -->
    <script src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>

    <!-- Gallery sub -->
    <script src="assets/Polyglot-Language-Switcher-master/js/jquery.polyglot.language.switcher.js"></script>
    <script src="assets/fancyapps-fancyBox/source/jquery.fancybox.pack.js"></script>
    <script src="assets/scrollbar.js"></script>
 
    <script src="js/script.js"></script>



 <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',
      fixedContentPos: false,
      fixedBgPos: true,
      overflowY: 'auto',
      closeBtnInside: true,
      preloader: false,
      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });
                                    
    });
  </script> 
<!-- //here ends scrolling icon -->





 
  <!--style>
#ac-wrapper {
display:none;  
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background: rgba(8, 8, 8, 0.78);
z-index: 2001;
}
#popup{
width: 100%;
height: auto;
position: relative;

}




@media(max-width: 478px){
    #ac-wrapper {
display:unset;
}
#popup{
top: 36%; left:0px;
}
#popup img {
    margin: 2% 0;
    width: 100%;
}
}
</style-->
  
<!-- <div id="ac-wrapper" style='display:none' onclick="PopUp('hide')">

    <div id="popup">
  
            <div class="col-md-12">
             <a href="" target="_self"><img src="images/background/mob-bg.png" title="Book Repair iService Point"></a>
            </div>

           
      
    </div>
    
</div> -->
<!--script type="text/javascript">
    function PopUp(hideOrshow) {
    if (hideOrshow == 'hide') document.getElementById('ac-wrapper').style.display = "none";
    else document.getElementById('ac-wrapper').removeAttribute('style');
}
window.onload = function () {
    setTimeout(function () {
        PopUp('show');
    });
}
</script-->



</body>

</html>

<div id="small-dialog1" class="mfp-hide">
    <div class="pop_up w3-agile">
      <div class="iservice-pop">
      <div class="card">
                <div class="card-header text-center text-capitalize">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Moblie Number') }}</label>

                            <div class="col-md-8">
                            <input id="moblie" type="text" class="form-control " name="moblie" required autocomplete="">

                                @error('moblie')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">

                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
</div>
    </div>
</div>

<style>
    .my-mfp-zoom-in.mfp-ready #small-dialog1 {
    opacity: 1;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
}

.my-mfp-zoom-in #small-dialog1 {
    opacity: 0;
    -webkit-transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
    -webkit-transform: scale(0.8);
    -moz-transform: scale(0.8);
    -ms-transform: scale(0.8);
    -o-transform: scale(0.8);
    transform: scale(0.8);
}

#small-dialog1 {
    background: #fff;
    padding: 1em;
    max-width: 629px;
    margin: 40px auto;
    position: relative;
    text-align: left;
    border: 7px double #007eff;
    /* background: url(../images/services/time-ser1.png)no-repeat; */
    background-size: cover;
}
.card-header {
    /* border: 1px solid; */
    padding: 3%;
    margin-top: -6%;
    margin-bottom: 6%;
    font-size: 28px;
}
</style>