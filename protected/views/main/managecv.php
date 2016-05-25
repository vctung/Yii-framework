<!-- Page header -->
<header class="page-header bg-img size-lg" style="background-image: url(<?php echo siteThemes(); ?>assets/img/bg-banner2.jpg)">
  <div class="container no-shadow">
    <h1 class="text-center">Quản lý CV của bạn</h1>
    <p class="lead text-center">Dưới đây là danh sách các CV của bạn tạo ra. Bạn có thể chỉnh sửa hoặc xóa chúng, hoặc thêm một cái mới.</p>
  </div>
</header>
<!-- END Page header -->

<section class="no-padding-top bg-alt">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-right">
        <br>
        <a class="btn btn-primary btn-sm" href="<?php echo makeURL('main/addmoreresume'); ?>">Tạo mới CV</a>
      </div>



<?php foreach ($list_resume as $key => $value ) {

  if (  $value['url'] == ""  ) {    
    $url_cv = Yii::app()->createUrl('main/cv', array( 'q' => encryptIt($value['id']) ));
  }else {
    $url_cv = "";
  }



  ?>
      <!-- Resume item -->
      <div class="col-xs-12">
        <div class="item-block">
          <header>
            <a href="<?php echo $url_cv ; ?>"><img class="resume-avatar" src="<?php echo Yii::app()->request->baseUrl; ?>/images/resume/avatar/<?php echo $value['avatar']; ?>" alt=""></a>
            <div class="hgroup">
              <h4><a href="<?php echo $url_cv ; ?>"><?php echo $value['name'] ?></a></h4>
              <h5><?php echo $value['headline'] ?></h5>
            </div>
            <div class="header-meta">
              <span class="location"><?php echo $value['adds'] ?></span>
              <span class="rate"><?php echo $value['salary'] ?></span>
            </div>
          </header>
          <footer>
            <p class="status"><strong>Cập nhật vào lúc :</strong> <?php echo retypeTime($value['updated'])  ?></p>
            <div class="action-btn">
              <a class="btn btn-xs btn-gray" href="<?php echo  Yii::app()->createUrl('main/settingcv', array( 'q' => encryptIt($value['resumeid']) )); ?>">Cài đặt</a>
              <a class="btn btn-xs btn-gray" href="<?php echo  Yii::app()->createUrl('main/createcv', array( 'q' => encryptIt($value['resumeid']) )); ?>">Chỉnh sửa thông tin</a>
              <a class="btn btn-xs btn-danger" href="#">Xóa</a>
            </div>
          </footer>
        </div>
      </div>
      <!-- END Resume item -->

<?php } ?>


    </div>
  </div>
</section>