<!-- <pre> -->
<?php 
    $themes =  Yii::app()->request->baseUrl."/themes/quangminh/" ; 
    $roots =  Yii::app()->request->baseUrl;


  //  print_r($articles); exit();
?>


<!-- ======= Banner ======= -->
    <section class="p0 container-fluid banner about_banner">
      <div class="about_banner_opacity">
        <div class="container">
          <div class="banner_info_about">
            <h1><?php echo $categories->name; ?></h1>
            <ul>
              <li><a href="index.html">Trang chủ</a></li>
              <li><i class="fa fa-angle-right"></i></li>
              <li><?php echo $categories->name ?></li>
            </ul>
            
          </div> <!-- End Banner Info -->
        </div> <!-- End Container -->
      </div> <!-- End Banner_opacity -->
    </section> <!-- End Banner -->
<!-- ======= /Banner ======= -->



<section class="side_tab">
      <div class="container">
        <div class="row">
          <div class="white_bg right_side col-lg-8 col-md-8 col-sm-12 col-xs-12 pull-right">
            <div class="tab_details">
                <!-- Tab panes -->
                <div class="tab-content right_info">

                 <?php foreach ($list_service as $key => $value) {
                  $name = customURLSEO($value->title);
                ?>
                  <div class="tab-pane fade row <?=( $value->id == $article->id ) ? "active in" : ''?>" id="<?php echo $name.$value->id ?>">
                    <img class="img-responsive"src="<?php echo $themes; ?>images/service/9.jpg" alt="image">
                    <img class="img-responsive hidden-sm hidden-xs"src="<?php echo $themes; ?>images/service/10.jpg" alt="image">
                    <h2><?php echo $value->title; ?></h2>
                    <p><?php echo $value->content; ?> </p>
                  </div>
                 <?php } ?>

                 
                </div>
            </div> <!-- End tab_details -->
     

          </div> <!-- End white_bg -->

          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-left left_side_bar"> <!-- required for floating -->
            <!-- Nav tabs -->
            <ul class="nav nav-tabs tabs-left"><!-- 'tabs-right' for right tabs -->
              <?php foreach ($list_service as $key => $value) {
                  $name = customURLSEO($value->title);
                ?>
                <li class="<?=( $value->id == $article->id ) ? "active" : ''?>">
                  <a href="#<?php echo $name.$value->id ?>" data-toggle="tab">
                      <i class="fa fa-angle-right"></i>
                      &nbsp;&nbsp;&nbsp;&nbsp; <?php echo $value->title; ?>
                  </a>
                </li>
             <?php } ?>

             <!-- 
              <li><a href="#investment" data-toggle="tab"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Investment in bonds</a></li>
              <li><a href="#retairing" data-toggle="tab"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Retairing planning</a></li>
              <li><a href="#texes" data-toggle="tab"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Texes Advisory</a></li>
              <li><a href="#stocks" data-toggle="tab"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Stocks market Training</a></li>
              <li><a href="#mutual" data-toggle="tab"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Mutual funds</a></li>
              <li><a href="#company" data-toggle="tab"><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Company growth analysis</a></li> -->
            </ul>
         
          </div>
          <!-- End left_side_bar -->

        </div> <!-- End row -->
      </div> <!-- End container -->
    </section>
