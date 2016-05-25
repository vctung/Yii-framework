<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from shamsoft.net/thejobs/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Mar 2016 09:18:08 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online resume by CV123!">
    <meta name="keywords" content="">

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <!-- Styles -->
    <link href="<?php echo siteThemes(); ?>assets/css/app.min.css" rel="stylesheet">
    <link href="<?php echo siteThemes(); ?>assets/css/custom.css" rel="stylesheet">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>
    <link href="<?php echo siteThemes(); ?>assets/css/mystyle.less" rel="stylesheet/less" >

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../apple-touch-icon.html">
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


    <!-- Site header -->
    <header class="site-header size-lg text-center" style="background-image: url(<?php echo siteThemes(); ?>assets/img/bg-banner1.jpg)">
      <div class="container">
        <div class="col-xs-12">
          <br><br>
          <h2>We offer <mark>1,259</mark> job vacancies right now!</h2>
          <h5 class="font-alt">Find your desire one in a minute</h5>
          <br><br><br>
          <form class="header-job-search">
            <div class="input-keyword">
              <input type="text" class="form-control" placeholder="Job title, skills, or company">
            </div>

            <div class="input-location">
              <input type="text" class="form-control" placeholder="City, state or zip">
            </div>

            <div class="btn-search">
              <button class="btn btn-primary" type="submit">Find jobs</button>
              <a href="job-list.html">Advanced Job Search</a>
            </div>
          </form>
        </div>

      </div>
    </header>
    <!-- END Site header -->

    <!-- Show nofication -->
    <div id="ohsnap"></div>
    <!--  END :: Show nofication -->

    <!-- Main container -->
    <main>
        <?php echo $content; ?>
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
    <script src="<?php echo siteThemes(); ?>assets/js/app.min.js"></script>
    <script src="<?php echo siteThemes(); ?>assets/js/custom.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/less/less.min.js"></script>

  </body>

<!-- Mirrored from shamsoft.net/thejobs/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Mar 2016 09:18:48 GMT -->
</html>