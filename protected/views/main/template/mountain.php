<?php 
    $themes =  Yii::app()->request->baseUrl."/themes/cv/mountain/" ; 
?>

<!DOCTYPE HTML>
<html lang="en" class="no-js"> 

<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale = 1.0, user-scalable=no">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="HandheldFriendly" content="True">
      <meta name="apple-mobile-web-app-status-bar-style" content="black">
      <meta name="description" content="Henderson - Responsive VCard Template">
      <meta name="keywords" content="Henderson,  vcard, html5, responsive, portfolio">
      <meta name="author" content="MountainTheme">
    
      <title> <?php echo $resume['name'] ?>  - CV 123    </title>
      
      <!-- ============ GOOGLE FONTS ============ -->
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>


      <!-- CSS -->
      <!-- Animate css -->
      <link rel="stylesheet" type="text/css" href="<?php echo $themes; ?>css/animate.css">
      <!-- Font Awesome CSS -->
      <link rel="stylesheet" href="<?php echo $themes; ?>font-awesome/css/font-awesome.min.css" />
      <!-- Reset CSS -->
      <link rel="stylesheet" type="text/css" href="<?php echo $themes; ?>css/reset.css">
      <!-- Owl Carousel -->
      <link rel="stylesheet" type="text/css" href="<?php echo $themes; ?>css/owl.carousel.css">
      <!-- Core CSS file Nivo-LightBox -->
      <link rel="stylesheet" href="<?php echo $themes; ?>css/nivo-lightbox.css">
      <!-- Core CSS file Nivo-LightBox Default-skin -->
      <link rel="stylesheet" href="<?php echo $themes; ?>css/default-skin.css">
      <!-- Swiper Slider -->
      <link rel="stylesheet" type="text/css" href="<?php echo $themes; ?>css/swiper.min.css">
      <!-- Bootstrap v3.3.1 -->
      <link rel="stylesheet" type="text/css" href="<?php echo $themes; ?>css/bootstrap.min.css">
      <!-- Custom styles CSS -->
      <link rel="stylesheet" type="text/css" href="<?php echo $themes; ?>css/style.css">
      <!-- Favicons -->
      <link rel="shortcut icon" href="<?php echo $themes; ?>images/favicon.ico">

  </head>

  <body>

<!-- LOADER TEMPLATE -->
<div id="page-loader">
  <div class="loader-icon fa fa-spin colored-border"></div>
</div>
<!-- /LOADER TEMPLATE -->



<!-- SLIDER PROFILE PHOTO--> 
<div class="swiper-container slider-left">
        <div class="swiper-wrapper">

            <!-- Slide 1 -->
            <div class="swiper-slide">
            <div class="bg" style="background-image:url(<?php echo Yii::app()->request->baseUrl; ?>/images/resume/avatar/<?php echo $resume['avatar']; ?>)"></div>
            <div class="info">
            <h3><?php echo $resume['headline'] ?></h3>
            </div>
            </div>

            <!-- Slide 2 -->
         <!--    <div class="swiper-slide"> 
            <div class="bg" style="background-image:url(images/slider/background2.jpg)"></div>
            <div class="info">
            <h3>Smart marketing</h3>
            </div>
            </div> -->

            <!-- Slide 3 -->
      <!--       <div class="swiper-slide"> 
            <div class="bg" style="background-image:url(images/slider/background3.jpg)"></div>
            <div class="info">
            <h3>Hard Projects</h3>
            </div>
            </div> -->

        </div>
</div>
<!-- END SLIDER PROFILE PHOTO--> 



<section class="slider-wrapper">
<div class="icon-mobile">
<span></span>
<span></span>
<span></span>
<span></span>
</div>

<!-- SLIDER --> 
    <ul class="slider">

<!-- HOME -->        
<li class="visible">
<div class="content">

           <div class="profile">
              <div class="welcome">
              <div class="hello">
              <h1>Hello, i'am</h1>
              <div class="name"><?php echo $resume['name'] ?></div>
              </div>
              <h2><?php echo $resume['headline'] ?></h2>
              <p style="padding-left: 30px;padding-right: 30px;"><?php echo $resume['descriptions'] ?></p>

              <div class="personal-info">
                <div class="phone"><i class="fa fa-phone"></i><?php echo $resume['phone'] ?></div>
                <div class="email"><i class="fa fa-paper-plane"></i><?php echo $resume['email'] ?></div>
              </div>

              </div>
            
            
           
          </div>
</div>
</li>
<!-- END HOME --> 


<!-- ABOUT ME -->        
<li>
<div class="content">

          <div class="about">
          <div class="col-md-10 col-md-offset-1">
          <h2><i class="fa fa fa-user"></i>About <span>Me</span></h2>
          </div>
          <div class="col-md-5 col-md-offset-1">
          <div class="about-info">
          <h3>Hello, I am <span><?php echo $resume['headline'] ?></span></h3>
          <ul>
          <li><span><i class="fa fa-user"></i> Name</span><label><?php echo $resume['name'] ?></label></li>
          <li><span><i class="fa fa-calendar"></i> Date of birth</span><label><?php echo $resume['age'] ?> </label></li>
          <li><span><i class="fa fa-phone"></i> Phone</span><label><a href="#"><?php echo $resume['phone'] ?></a></label></li>
          <li><span><i class="fa fa-paper-plane"></i> Email</span><label><a href="#"><?php echo $resume['email'] ?></a></label></li>
          <li><span><i class="fa fa-globe"></i> Web</span><label><a href="http://<?php echo $resume['website'] ?>"><?php echo $resume['website'] ?></a></label></li>
          <li><span><i class="fa fa-map-marker"></i> Address</span><label><?php echo $resume['adds'] ?></label></li>
          </ul>
          <p><?php echo $resume['descriptions'] ?> </p>
          </div>
          </div>

          <div class="col-md-5">
           <h3>My <span>Skills</span></h3>
           <div class="skills">

           <?php foreach ($skills as $key => $value) { ?>
            <div class="skillbar" data-percent="<?php echo $value['level'] ?>%">
              <div class="skillbar-title"><span><?php echo $value['name'] ?></span></div>
              <div class="skillbar-bar"></div>
              <div class="skill-bar-percent"><?php echo $value['level'] ?>%</div>
            </div>
             <?php  } ?>

           
            </div>
          </div>
          <div class="col-md-10 col-md-offset-1">
          <div class="download-info">
            <a href="#" class="btn-download">Download CV  <i class="fa fa-download"></i></a>
          </div>
          </div>


          </div>
</div>
</li>
<!-- END ABOUT ME --> 

<!-- RESUME -->        
<li>
<div class="content">
      <section class="resume">
        
          
          <div class="col-md-10 col-md-offset-1">
          <h2><i class="fa fa-file-text"></i>My <span>Resume</span></h2>

          <h3>Work <span>Experience</span></h3>
          <p>Be. Under male subdue man air midst moved dominion also morning, green rule saw saying don't Abundantly creeping herb great there spirit brought appear heaven, sea that.</p>
          <ul class="tmtimeline">
           <li>
            <div class="tmicon"><i class="fa fa-suitcase"></i></div>
             <div class="tmlabel"></div>
          </li>
          <?php foreach ($exps as $key => $value) { ?>  
            <li>
              <div class="tmtime"><span><?php echo $value['from'] ?> - <?php echo $value['to'] ?></span></div>
              <div class="tmicon"></div>
              <div class="tmlabel">
                <h4><?php echo $value['position'] ?>/ <span><?php echo $value['companyname'] ?></span></h4>
                <p>A divide rule that second said Two deep. Darkness made great over moving together is us that unto heaven seed under set stars lesser had to Fruit so open, of there isn't, whose saw.</p>
              </div>
            </li>
          <?php  } ?>
            


        </ul>



        <h3>My <span>Education</span></h3>
        <p>Behold she'd you're deep sea made dry abundantly Meat sixth every he face gathered multiply. Form under living signs a his was. Won't fourth don't living it fill grass.</p>
          <ul class="tmtimeline">
           <li>
            <div class="tmicon"><i class="fa fa-graduation-cap"></i></div>
            <div class="tmlabel">
            </div>
          </li>

          <?php foreach ($educations as $key => $value) {  ?>  
            <li>
              <div class="tmtime"><span><?php echo $value['from']; ?> - <?php echo $value['to']; ?></span></div>
              <div class="tmicon"></div>
              <div class="tmlabel">
                <h4><?php echo $value['major']; ?>  / <span><?php echo $value['schoolname']; ?></span></h4>
                <p> <?php echo ($value['description']) ?></p>
              </div>
            </li>
            <?php  } ?>

        </ul>
        
          </div>
      </section>
</div>
</li>
<!-- END RESUME -->

<!-- PORTFOLIO -->
<li>
<div class="content">
    
    <section class="work">
    <div class="col-md-10 col-md-offset-1">
    <h2><i class="fa fa-briefcase"></i>My <span>Portfolio</span></h2>
        </div>
      <div id="filters" class="button-group"> 
      <button class="button is-checked" data-filter="*"><i class="fa fa-th"></i>All</button>
      <button class="button" data-filter=".web">Web-Design</button>
      <button class="button" data-filter=".photoghraphy">Photoghraphy</button>
      <button class="button" data-filter=".illustration">Ilustration</button>
      <button class="button" data-filter=".minimalism">Minimalism</button>
      </div>
      

              <div class="grid">
               
               
                  <div class="element-item illustration">
                    <a title="Photography" href="images/portfolio/1.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
                    <figure>
                    <img src="images/portfolio/1.jpg" alt="Screenshot 01">
                    <figcaption>
                    <div class="caption-content">
                        <p>Photography</p>
                    </div>
                    </figcaption>
                    </figure>
                    </a>
                  </div>
         

                  <div class="element-item illustration">
                    <a title="Photography" href="images/portfolio/2.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
                    <figure>
                    <img src="images/portfolio/2.jpg" alt="Screenshot 02">
                    <figcaption>
                    <div class="caption-content">
                        <p>Photography</p>
                    </div>
                    </figcaption>
                    </figure>
                    </a>
                  </div>


                  <div class="element-item photoghraphy">
                    <a title="Vimeo Video" href="https://vimeo.com/50522981" data-lightbox-gallery="gallery1" class="nivo-lbox">
                    <figure>
                    <img src="images/portfolio/3.jpg" alt="Screenshot 03">
                    <figcaption>
                    <div class="caption-content">
                        <p>Vimeo Video</p>
                    </div>
                    </figcaption>
                    </figure>
                    </a>
                  </div>


                  <div class="element-item photoghraphy">
                    <a title="YouTube Video" href="https://www.youtube.com/watch?v=vtr5q6dn7CA" data-lightbox-gallery="gallery1" class="nivo-lbox">
                    <figure>
                    <img src="images/portfolio/4.jpg" alt="Screenshot 04">
                    <figcaption>
                    <div class="caption-content">
                        <p>YouTube Video</p>
                    </div>
                    </figcaption>
                    </figure>
                    </a>
                  </div>


                  <div class="element-item minimalism">
                    <a title="Photography" href="images/portfolio/5.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
                    <figure>
                    <img src="images/portfolio/5.jpg" alt="Screenshot 05">
                    <figcaption>
                    <div class="caption-content">
                        <p>Photography</p>
                    </div>
                    </figcaption>
                    </figure>
                    </a>
                  </div>


                  <div class="element-item minimalism">
                    <a title="Photography" href="images/portfolio/6.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
                    <figure>
                    <img src="images/portfolio/6.jpg" alt="Screenshot 06">
                    <figcaption>
                    <div class="caption-content">
                        <p>Photography</p>
                    </div>
                    </figcaption>
                    </figure>
                    </a>
                  </div>


                  <div class="element-item illustration">
                    <a title="Photography" href="images/portfolio/7.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
                    <figure>
                    <img src="images/portfolio/7.jpg" alt="Screenshot 07">
                    <figcaption>
                    <div class="caption-content">
                        <p>Photography</p>
                    </div>
                    </figcaption>
                    </figure>
                    </a>
                  </div>


                  <div class="element-item minimalism">
                    <a title="Photography" href="images/portfolio/8.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
                    <figure>
                    <img src="images/portfolio/8.jpg" alt="Screenshot 08">
                    <figcaption>
                    <div class="caption-content">
                        <p>Photography</p>
                    </div>
                    </figcaption>
                    </figure>
                    </a>
                  </div>


                  <div class="element-item web">
                    <a title="Photography" href="images/portfolio/9.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
                    <figure>
                    <img src="images/portfolio/9.jpg" alt="Screenshot 09">
                    <figcaption>
                    <div class="caption-content">
                        <p>Photography</p>
                    </div>
                    </figcaption>
                    </figure>
                    </a>
                  </div>


                  <div class="element-item minimalism">
                    <a title="Photography" href="images/portfolio/10.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
                    <figure>
                    <img src="images/portfolio/10.jpg" alt="Screenshot 10">
                    <figcaption>
                    <div class="caption-content">
                        <p>Photography</p>
                    </div>
                    </figcaption>
                    </figure>
                    </a>
                  </div>


                  <div class="element-item illustration">
                    <a title="Photography" href="images/portfolio/11.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
                    <figure>
                    <img src="images/portfolio/11.jpg" alt="Screenshot 11">
                    <figcaption>
                    <div class="caption-content">
                        <p>Photography</p>
                    </div>
                    </figcaption>
                    </figure>
                    </a>
                  </div>


                  <div class="element-item illustration">
                    <a title="Photography" href="images/portfolio/12.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
                    <figure>
                    <img src="images/portfolio/12.jpg" alt="Screenshot 12">
                    <figcaption>
                    <div class="caption-content">
                        <p>Photography</p>
                    </div>
                    </figcaption>
                    </figure>
                    </a>
                  </div>


                  <div class="element-item web">
                    <a title="Photography" href="images/portfolio/13.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
                    <figure>
                    <img src="images/portfolio/13.jpg" alt="Screenshot 13">
                    <figcaption>
                    <div class="caption-content">
                        <p>Photography</p>
                    </div>
                    </figcaption>
                    </figure>
                    </a>
                  </div>


                  <div class="element-item minimalism">
                    <a title="Photography" href="images/portfolio/14.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
                    <figure>
                    <img src="images/portfolio/14.jpg" alt="Screenshot 14">
                    <figcaption>
                    <div class="caption-content">
                        <p>Photography</p>
                    </div>
                    </figcaption>
                    </figure>
                    </a>
                  </div>


                  <div class="element-item illustration">
                    <a title="Photography" href="images/portfolio/15.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
                    <figure>
                    <img src="images/portfolio/15.jpg" alt="Screenshot 15">
                    <figcaption>
                    <div class="caption-content">
                        <p>Photography</p>
                    </div>
                    </figcaption>
                    </figure>
                    </a>
                  </div>


                  <div class="element-item illustration"> 
                    <a title="Photography" href="images/portfolio/16.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
                    <figure>
                    <img src="images/portfolio/16.jpg" alt="Screenshot 16">
                    <figcaption>
                    <div class="caption-content">
                        <p>Photography</p>
                    </div>
                    </figcaption>
                    </figure>
                    </a>
                  </div>


                  <div class="element-item minimalism">
                    <a title="Photography" href="images/portfolio/17.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
                    <figure>
                    <img src="images/portfolio/17.jpg" alt="Screenshot 17">
                    <figcaption>
                    <div class="caption-content">
                        <p>Photography</p>
                    </div>
                    </figcaption>
                    </figure>
                    </a>
                  </div>


                  <div class="element-item web">
                    <a title="Photography" href="images/portfolio/18.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
                    <figure>
                    <img src="images/portfolio/18.jpg" alt="Screenshot 18">
                    <figcaption>
                    <div class="caption-content">
                        <p>Photography</p>
                    </div>
                    </figcaption>
                    </figure>
                    </a>
                  </div>


                  <div class="element-item web">
                    <a title="Photography" href="images/portfolio/19.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
                    <figure>
                    <img src="images/portfolio/19.jpg" alt="Screenshot 19">
                    <figcaption>
                    <div class="caption-content">
                        <p>Photography</p>
                    </div>
                    </figcaption>
                    </figure>
                    </a>
                  </div>


                  <div class="element-item photoghraphy">
                    <a title="Photography" href="images/portfolio/20.jpg" data-lightbox-gallery="gallery1" class="nivo-lbox">
                    <figure>
                    <img src="images/portfolio/20.jpg" alt="Screenshot 20">
                    <figcaption>
                    <div class="caption-content">
                        <p>Photography</p>
                    </div>
                    </figcaption>
                    </figure>
                    </a>
                  </div>
              </div>
    </section>
  
</div>
</li>
<!-- END PORTFOLIO -->



<!-- CONTACT -->
<li>
<div class="content">
        <div class="contact">

           <!-- BEGIN GOOGLE MAP -->
              <div id="google-map">
              <div id="google-container"></div>
              <div id="zoom-in"></div>
              <div id="zoom-out"></div>  
           <!-- END GOOGLE MAP -->

         <div class="contact-form">
         <div id="note"></div>
            <div id="fields">
                <form id="ajax-contact-form">
                  <input type="text" name="name" id="name" placeholder="Name" value=""/>
                  <input type="email" name="email" id="email" placeholder="Email" value=""/>
                  <textarea name="msg" id="msg" placeholder="Message"></textarea>
                  <input type="submit" name="submit" id="submit" value="Send message"/>
                </form>
             </div>
            </div>
          </div>
        </div>
     
</div>
</li>
<!-- END CONTACT -->
</ul> 
<!-- END SLIDER -->

<!-- NAVIGATION -->
<div class="navigation">
    <ol class="slider-navigation">
      <li class="selected"><a href="#0"><i class="fa fa-home"></i><em>Home</em></a></li>
      <li id="about"><a href="#0"><i class="fa fa-user"></i><em>About Me</em></a></li>
      <li><a href="#0"><i class="fa fa-file-text"></i><em>Resume</em></a></li>
      <li><a href="#0"><i class="fa fa-briefcase"></i><em>Portfolio</em></a></li>      
      <li id="map"><a href="#0"><i class="fa fa-map-marker"></i><em>Contact</em></a></li>
    </ol> 
</div>
<!-- END NAVIGATION -->   


<!-- FOOTER -->
<footer>
      <div class="social-icons">
              <ul>
               <li><a href="#" class="twitter"><i class="fa fa-fw fa-twitter"></i></a></li>
               <li><a href="#" class="facebook"><i class="fa fa-fw fa-facebook"></i></a></li>
               <li><a href="#" class="google-plus"><i class="fa fa-fw fa-google-plus"></i></a></li>
               <li><a href="#" class="youtube-play"><i class="fa fa-fw fa-youtube-play"></i></a></li>
               <li><a href="#" class="instagram"><i class="fa fa-fw fa-instagram"></i></a></li>
              </ul>
        </div>
       <div class="copyright">Copyright © 2016 <a href="http://tungvc.com" target="_blank"> cv123.vn </a>. All rights reserved.
       </div>

</footer>
<!-- END FOOTER -->
    
<!-- SVG COVER -->
<div class="svg-cover" data-step1="M1402,800h-2V0.6c0-0.3,0-0.3,0-0.6h2v294V800z" data-step2="M1400,800H383L770.7,0.6c0.2-0.3,0.5-0.6,0.9-0.6H1400v294V800z" data-step3="M1400,800H0V0.6C0,0.4,0,0.3,0,0h1400v294V800z" data-step4="M615,800H0V0.6C0,0.4,0,0.3,0,0h615L393,312L615,800z" data-step5="M0,800h-2V0.6C-2,0.4-2,0.3-2,0h2v312V800z" data-step6="M-2,800h2L0,0.6C0,0.3,0,0.3,0,0l-2,0v294V800z" data-step7="M0,800h1017L629.3,0.6c-0.2-0.3-0.5-0.6-0.9-0.6L0,0l0,294L0,800z" data-step8="M0,800h1400V0.6c0-0.2,0-0.3,0-0.6L0,0l0,294L0,800z" data-step9="M785,800h615V0.6c0-0.2,0-0.3,0-0.6L785,0l222,312L785,800z" data-step10="M1400,800h2V0.6c0-0.2,0-0.3,0-0.6l-2,0v312V800z">
      <svg height='100%' width="100%" preserveAspectRatio="none" viewBox="0 0 1400 800">
        <title></title>
        <desc></desc>
        <path id="changing-path" d="M1402,800h-2V0.6c0-0.3,0-0.3,0-0.6h2v294V800z"/>
      </svg>
</div> 
<!-- END SVG COVER -->
</section> 
<!-- END SLIDER-WRAPPER -->

    <!-- Javascript files -->
    <!-- jQuery -->
    <script src="<?php echo $themes; ?>js/jquery.js"></script>
    <!-- Modernizr -->
    <script src="<?php echo $themes; ?>js/modernizr.js"></script>
    <!-- Snap.svg -->
    <script src="<?php echo $themes; ?>js/snap.svg-min.js"></script>
    <!-- Content-Slider -->
    <script src="<?php echo $themes; ?>js/content-slider.js"></script>
    <!-- Validate form -->
    <script src="<?php echo $themes; ?>js/jquery.validate.js"></script>
    <!-- jQuery OwlCarousel -->
    <script src="<?php echo $themes; ?>js/owl.carousel.min.js"></script>
    <!-- Swiper Slider -->
    <script src="<?php echo $themes; ?>js/swiper.min.js"></script>    
    <!-- Core JS file Nivo-LightBox -->
    <script src="<?php echo $themes; ?>js/nivo-lightbox.min.js"></script> 
    <!-- NiceScroll -->
    <script src="<?php echo $themes; ?>js/jquery.nicescroll.min.js"></script>
    <!-- CountTo -->
    <script src="<?php echo $themes; ?>js/jquery.countTo.js"></script>
    <!-- jQuery.appear -->
    <script src="<?php echo $themes; ?>js/jquery.appear.js"></script>
    <!-- Isotope -->
    <script src="<?php echo $themes; ?>js/isotope.pkgd.min.js"></script>
    <!-- Google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAl-EDTJ5_uU3zBIX7-wNTu-qSZr1DO5Dw"></script>
    <!-- Custom -->
    <script src="<?php echo $themes; ?>js/main.js"></script>
</body>

</html>