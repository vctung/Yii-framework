
<?php 
  if (  $resume['url'] == ""  ) {    
    $url_cv = Yii::app()->createUrl('main/cv', array( 'q' => encryptIt($resume['id']) ));
  }else {
    $url_cv = "";
  }

 ?>

<div class="container">
  <header class="section-header">
    <span>Bạn đã xong ?</span>
    <h2>Xem trang CV Online của bạn</h2>
    <p>Vui lòng xem lại thông tin của bạn một lần nữa và nhấn vào nút bên dưới để đưa hồ sơ  trực tuyến của bạn.</p>
  </header>
  <p class="text-center">
    <a target="_blank" href="<?php echo  $url_cv; ?>" class="btn btn-success btn-xl btn-round">Xem CV Online của tôi</a>
  </p>
</div>



<?php // echo  Yii::app()->createUrl('main/createcv', array( 'q' => encryptIt($value['resumeid']) )); ?>