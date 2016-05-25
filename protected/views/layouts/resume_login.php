<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from shamsoft.net/thejobs/user-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Mar 2016 09:19:45 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online resume by TheJobs!">
    <meta name="keywords" content="">

    <title><?php echo CHtml::encode($this->pageTitle); ?> - Login</title>

    <!-- Styles -->
    <link href="<?php echo siteThemes(); ?>assets/css/app.min.css" rel="stylesheet">
    <link href="<?php echo siteThemes(); ?>assets/css/custom.css" rel="stylesheet">
    <link href="<?php echo siteThemes(); ?>assets/css/mystyle.less" rel="stylesheet/less" >
    <link href="<?php echo siteThemes(); ?>assets/sweetalert/sweetalert.css" rel="stylesheet" type="text/css" >

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../apple-touch-icon.html">
    <link rel="icon" href="<?php echo siteThemes(); ?>assets/img/favicon.ico">
  </head>

  <body class="login-page">

   <!-- Show nofication -->
    <div id="ohsnap"></div>
    <!--  END :: Show nofication -->
    
    <main>
	<?php echo $content; ?>
    </main>

    <!-- Scripts -->
    <script src="<?php echo siteThemes(); ?>assets/js/app.min.js"></script>
    <script src="<?php echo siteThemes(); ?>assets/js/custom.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/less/less.min.js"></script>
     <script src="<?php echo siteThemes(); ?>assets/sweetalert/sweetalert.min.js"></script>
     
  </body>

<!-- Mirrored from shamsoft.net/thejobs/user-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Mar 2016 09:19:45 GMT -->
</html>