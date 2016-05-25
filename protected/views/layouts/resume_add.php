<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online resume by TheJobs!">
    <meta name="keywords" content="">

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <!-- Styles -->
    <link href="<?php echo siteThemes(); ?>assets/css/app.min.css" rel="stylesheet">
    <link href="<?php echo siteThemes(); ?>assets/vendors/summernote/summernote.css" rel="stylesheet">
    <link href="<?php echo siteThemes(); ?>assets/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/js/croppie/croppie.css" />

    <link href="<?php echo siteThemes(); ?>assets/css/mystyle.less" rel="stylesheet/less" >
    <link href="<?php echo siteThemes(); ?>assets/sweetalert/sweetalert.css" rel="stylesheet" type="text/css" >
    <script src="<?php echo siteThemes(); ?>assets/sweetalert/sweetalert.min.js"></script>

     
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>

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


    <!-- Show nofication -->
    <div id="ohsnap"></div>
    <!--  END :: Show nofication -->



       <?php echo $content; ?>

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
    <script src="<?php echo siteThemes(); ?>assets/vendors/summernote/summernote.js"></script>
    <script src="<?php echo siteThemes(); ?>assets/js/custom.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/less/less.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/croppie/croppie.js"></script>
    

  </body>

</html>
