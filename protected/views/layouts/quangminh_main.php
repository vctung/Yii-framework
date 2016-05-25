<?php 
    $themes =  Yii::app()->request->baseUrl."/themes/quangminh/" ; 
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">

    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Sunny">

    <title>Dịch vụ kế toán Quang Minh</title>

    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $themes; ?>images/fav-icon/favicon-16x16.png">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo $themes; ?>css/bootstrap/bootstrap.css" media="screen">


    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500italic,500,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,500,300,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic,800,300,300italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=PT+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo $themes; ?>fonts/font-awesome/css/font-awesome.min.css">
    <!-- Stroke Gap Icon -->
    <link rel="stylesheet" href="<?php echo $themes; ?>fonts/stroke-gap/style.css">
    <!-- owl-carousel css -->
    <link rel="stylesheet" href="<?php echo $themes; ?>css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo $themes; ?>css/owl.theme.css">
    
    <!-- owl-carousel css -->
    <link rel="stylesheet" href="<?php echo $themes; ?>css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo $themes; ?>css/owl.theme.css">
    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="<?php echo $themes; ?>css/custom/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $themes; ?>css/responsive/responsive.css">
    


    <!--[if lt IE 9]>
        <scriptsrc="<?php echo $themes; ?>js/html5shiv.js"></script>
    <![endif]-->



  </head>
  <body class="home">

  <?php $this->widget('application.components.Header'); ?>

  <?php echo $content; ?>

  <?php $this->widget('application.components.Footer'); ?>

    <!-- Js File -->

    <!-- j Query -->
    <script type="text/javascript"src="<?php echo $themes; ?>js/jquery-2.1.4.js"></script>
    <script type="text/javascript"src="<?php echo $themes; ?>js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript"src="<?php echo $themes; ?>js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript"src="<?php echo $themes; ?>js/jquery.bxslider.min.js"></script>
    <script src="<?php echo $themes; ?>js/revolution-slider/jquery.themepunch.tools.min.js"></script> <!-- Revolution Slider Tools -->
    <script src="<?php echo $themes; ?>js/revolution-slider/jquery.themepunch.revolution.min.js"></script> <!-- Revolution Slider -->
    <script type="text/javascript"src="<?php echo $themes; ?>js/revolution-slider/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript"src="<?php echo $themes; ?>js/revolution-slider/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript"src="<?php echo $themes; ?>js/revolution-slider/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript"src="<?php echo $themes; ?>js/revolution-slider/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript"src="<?php echo $themes; ?>js/revolution-slider/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript"src="<?php echo $themes; ?>js/revolution-slider/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript"src="<?php echo $themes; ?>js/revolution-slider/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript"src="<?php echo $themes; ?>js/revolution-slider/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript"src="<?php echo $themes; ?>js/revolution-slider/extensions/revolution.extension.video.min.js"></script>

    <!-- Bootstrap JS -->
    <script type="text/javascript"src="<?php echo $themes; ?>js/bootstrap.min.js"></script>
    <script type="text/javascript"src="<?php echo $themes; ?>js/jquery.appear.js"></script>
    <script type="text/javascript"src="<?php echo $themes; ?>js/jquery.countTo.js"></script>
    <script type="text/javascript"src="<?php echo $themes; ?>js/jquery.fancybox.pack.js"></script>
    <!-- owl-carousel -->
    <script type="text/javascript"src="<?php echo $themes; ?>js/owl.carousel.js"></script>
    <scriptsrc="<?php echo $themes; ?>js/owl-custom.js"></script>
    <!-- Custom & Vendor js -->
    <script type="text/javascript"src="<?php echo $themes; ?>js/custom.js"></script>
    

  </body>
</html>