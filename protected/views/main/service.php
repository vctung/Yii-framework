<?php 
    $themes =  Yii::app()->request->baseUrl."/themes/quangminh/" ; 
    $roots =  Yii::app()->request->baseUrl;
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
              <li><?php echo $categories->name; ?></li>
            </ul>
            
          </div> <!-- End Banner Info -->
        </div> <!-- End Container -->
      </div> <!-- End Banner_opacity -->
    </section> <!-- End Banner -->
<!-- ======= /Banner ======= -->
<!-- ======== Service facts ========= -->
    <section class="service_facts"> 
      <div class="container">
        <div class="row">
         <?php foreach ($list_service as $key => $value) {
                  $name = customURLSEO($value->title);
          ?>

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <img class="img-responsive" src="<?php echo $roots; ?>/images/article/<?php echo $value->image; ?>" alt="images">
            <a href="<?php echo  Yii::app()->createUrl('article/'.$name.'-'.$value->id ); ?>">
              <h3><?php echo  $value->title; ?></h3>
            </a>
            <p><?php echo  $value->intro; ?></p>
          </div>

           <?php } ?>


        </div>
      </div>
    </section>
<!-- ======== /Service facts ========= -->
