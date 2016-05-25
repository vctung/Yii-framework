<?php 
    
    $t = Yii::app()->request->baseUrl."/themes/resume/" ; 

 ?>
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online resume by TheJobs!">
    <meta name="keywords" content="">

    <title> CV 123  -  <?php echo $resume['name'] ?> </title>

    <!-- Styles -->
    <link href="<?php echo $t; ?>assets/css/app.min.css" rel="stylesheet">
    <link href="<?php echo $t; ?>assets/css/custom.css" rel="stylesheet">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="<?php echo siteThemes(); ?>/apple-touch-icon.html">
    <link rel="icon" href="<?php echo siteThemes(); ?>assets/img/favicon.ico">
  </head>

  <body class="nav-on-header">

    <!-- Navigation bar -->
    <nav class="navbar">
      <div class="container">

        <!-- Logo -->
        <div class="pull-left">
          <a class="navbar-toggle" href="#" data-toggle="offcanvas"><i class="ti-menu"></i></a>

          <div class="logo-wrapper">
            <a class="logo" href="index.html"><img src="<?php echo siteThemes(); ?>assets/img/logo.png" alt="logo"></a>
            <a class="logo-alt" href="index.html"><img src="<?php echo siteThemes(); ?>assets/img/logo-alt.png" alt="logo-alt"></a>
          </div>

        </div>
        <!-- END Logo -->

        <!-- User account -->
         <?php $this->widget('application.components.Header'); ?>
        <!-- END User account -->

        <!-- Navigation menu -->
        <ul class="nav-menu">
         <?php $this->widget('application.components.FrontMenu'); ?>
        </ul>
        <!-- END Navigation menu -->

      </div>
    </nav>
    <!-- END Navigation bar -->


    <!-- Page header -->
    <header class="page-header bg-img" 
    style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/resume/cover/<?php echo $resume['cover']; ?>); ">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-4">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/resume/avatar/<?php echo $resume['avatar']; ?>" alt="">
          </div>

          <div class="col-xs-12 col-sm-8 header-detail">
            <div class="hgroup">
              <h1><?php echo $resume['name'] ?></h1>
              <h3><?php echo $resume['headline'] ?></h3>
            </div>
            <hr>
            <p class="lead"><?php echo $resume['descriptions'] ?></p>

            <ul class="details cols-2">
              <li>
                <i class="fa fa-map-marker"></i>
                <span><?php echo $resume['adds'] ?></span>
              </li>

              <li>
                <i class="fa fa-globe"></i>
                <a href="http://<?php echo $resume['website'] ?>"><?php echo $resume['website'] ?></a>
              </li>

              <li>
                <i class="fa fa-money"></i>
                <span><?php echo $resume['salary'] ?></span>
              </li>

              <li>
                <i class="fa fa-birthday-cake"></i>
                <span><?php echo $resume['age'] ?> Tuổi</span>
              </li>

              <li>
                <i class="fa fa-phone"></i>
                <span><?php echo $resume['phone'] ?></span>
              </li>

              <li>
                <i class="fa fa-envelope"></i>
                <a href="#"><?php echo $resume['email'] ?></a>
              </li>
            </ul>

            <div class="tag-list">
            <?php 
              $tags = explode(",", $resume['tags']);
             ?>
             <?php foreach ( $tags  as $key => $value) {
               # code...
               ?>
              <span><?php echo $value; ?></span>
              <?php  }  ?>
            </div>
          </div>
        </div>

        <div class="button-group">
          <ul class="social-icons">
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
          </ul>

          <div class="action-buttons">
            <a class="btn btn-gray" href="#">Download CV</a>
            <a class="btn btn-success" href="#">Contact me</a>
          </div>
        </div>
      </div>
    </header>
    <!-- END Page header -->


    <!-- Main container -->
    <main>


      <!-- Education -->
      <section>
        <div class="container">

          <header class="section-header">
            <span>Latest degrees</span>
            <h2>Education</h2>
          </header>
          
          <div class="row">



          <?php foreach ($educations as $key => $value) {  ?>  

            <div class="col-xs-12">
              <div class="item-block">
                <header>
                  <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/resume/educations/<?php echo $value['logo']; ?>" alt="">
                  <div class="hgroup">
                    <h4><?php echo $value['degree']; ?> <small><?php echo $value['schoolname']; ?></small></h4>
                    <h5><?php echo $value['major']; ?></h5>
                  </div>
                  <h6 class="time"><?php echo $value['from']; ?> - <?php echo $value['to']; ?></h6>
                </header>
                <div class="item-body">
                   <?php echo ($value['description']) ?>
                </div>
              </div>
            </div>

            <?php } ?>

          </div>

        </div>
      </section>
      <!-- END Education -->


      <!-- Work Experience -->
      <section class="bg-alt">
        <div class="container">
          <header class="section-header">
            <span>Past positions</span>
            <h2>Work Experience</h2>
          </header>
          
          <div class="row">

          <?php foreach ($exps as $key => $value) { ?>  
            <!-- Work item -->
            <div class="col-xs-12">
              <div class="item-block">
                <header>
                  <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/resume/experiences/<?php echo $value['logo']; ?>" alt="">
                  <div class="hgroup">
                    <h4><?php echo $value['companyname'] ?></h4>
                    <h5><?php echo $value['position'] ?></h5>
                  </div>
                  <h6 class="time"><?php echo $value['from'] ?> - <?php echo $value['to'] ?></h6>
                </header>
                <div class="item-body">
                  <?php echo urldecode($value['description']) ?>
                </div>
              </div>
            </div>
            <!-- END Work item -->

            <?php  } ?>

          </div>

        </div>
      </section>
      <!-- END Work Experience -->


      <!-- Skills -->
      <section>
        <div class="container">
          <header class="section-header">
            <span>Expertise Areas</span>
            <h2>Skills</h2>
          </header>
          
          <br>
          <ul class="skills cols-3">
          <?php foreach ($skills as $key => $value) { ?>
            <li>
              <div>
                <span class="skill-name"><?php echo $value['name'] ?></span>
                <span class="skill-value"><?php echo $value['level'] ?>%</span>
              </div>
              <div class="progress">
                <div class="progress-bar" style="width: <?php echo $value['level'] ?>%;"></div>
              </div>
            </li>
            <?php  } ?>
            
          </ul>

        </div>
      </section>
      <!-- END Skills -->


    </main>
    <!-- END Main container -->


    <!-- Site footer -->
    <footer class="site-footer">
      <?php $this->widget('application.components.Footer'); ?>
    </footer>
    <!-- END Site footer -->


    <!-- Back to top button -->
    <a id="scroll-up" href="#"><i class="ti-angle-up"></i></a>
    <!-- END Back to top button -->

    <!-- Scripts -->
    <script src="<?php echo $t; ?>assets/js/app.min.js"></script>
    <script src="<?php echo $t; ?>assets/js/custom.js"></script>
     <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/less/less.min.js"></script>

  </body>


</html>
