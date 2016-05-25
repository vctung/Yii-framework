
<link href="<?php echo Yii::app()->request->baseUrl ?>/js/jquery-editable-select-master/source/jquery.editable-select.min.css" rel="stylesheet" type="text/css" >

<form onsubmit="return false;">
  <!-- Page header -->
  <header
  style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/resume/cover/<?php echo $resume_infos['avatar']; ?>); "
  data-urlAddbox="<?php echo Yii::app()->request->baseUrl; ?>/ajax/addbox"
  data-url="<?php echo Yii::app()->request->baseUrl; ?>/ajax/changeImage"
  data-urlUpdateresume="<?php echo Yii::app()->request->baseUrl; ?>/ajax/updateresume"
  data-urlRemove="<?php echo Yii::app()->request->baseUrl; ?>/ajax/removeItem";
  data-urlPortfolio="<?php echo Yii::app()->request->baseUrl; ?>/ajax/portfolio";
  data-resumeid="<?php echo $resume_infos['resumeid']; ?>"
  data-token="<?php echo encryptIt($resume_infos['id']); ?>"
  class="page-header">
    <div class="container page-name">
      <h1 class="text-center">CV của tôi </h1>
      <p class="lead text-center">Tạo CV của bạn và tham gia vào hệ thống CV Online, Tại sao không ? </p>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-4">
          <div
           data-defaultimg = "<?php echo Yii::app()->request->baseUrl; ?>/images/resume/avatar/<?php echo $resume_infos['avatar']; ?>"
           data-na="<?php echo $resumeid ?>___<?php echo $userid ?>"
           data-url="<?php echo Yii::app()->request->baseUrl; ?>/ajax/changeImage"
           data-token="<?php echo encryptIt($resume_infos['id']); ?>"
           data-resumeid="<?php echo $resume_infos['resumeid']; ?>"
           class="form-group avatar-block">
            <input type="file"            
             class="dropify setavatar" 
             data-default-file="<?php echo Yii::app()->request->baseUrl; ?>/images/resume/avatar/<?php echo $resume_infos['avatar']; ?>"
            <span class="help-block">Hãy chọn hình với tỷ lệ 4:6.</span>
          </div>
        </div>
        <div class="col-xs-12 col-sm-8">
          <?php
           $this->widget('application.components.BasicInfo', array(
            'resumeid' => $resumeid,
            'userid' => $userid,
            'resume_infos' => $resume_infos
             )); 
           ?>         
        </div>
      </div>
      <div class="button-group">
        <div class="action-buttons">
          <div class="upload-button">
            <button class="btn btn-block btn-gray">Đính kèm theo CV của bạn </button>
            <input type="file">
          </div>
          <div class="upload-button">
            <button class="btn btn-block btn-primary">Chọn hình cover</button>
            <input id="cover_img_file" type="file">
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- END Page header -->
  <!-- Main container -->
  <main>

  <!-- Social media -->
  <section>
    <div class="container">
      <header class="section-header">
        <span>Kết nối</span>
        <h2>Mạng xã hội</h2>
      </header>
      <div class="row">
         <?php
           $this->widget('application.components.Social', array(
            'resumeid' => $resumeid,
            'userid' => $userid,
            'resume_infos' => $resume_infos
             )); 
           ?>           
        
      </div>
    </div>
  </section>
  <!-- Social media -->


  <!-- Education -->
  <section class=" bg-alt">
    <div class="container">
      <header class="section-header">
        <span>Bằng cấp / chứng chỉ</span>
        <h2>Học vấn</h2>
      </header>
      
      <div class="row">
       
        
          <?php
           $this->widget('application.components.Education', array(
            'resumeid' => $resumeid,
            'userid' => $userid,
            'resume_infos' => $resume_infos
             )); 
           ?>   
       
      </div>
    </div>
  </section>
  <!-- END Education -->

  <!-- Work Experience -->
  <section>
    <div class="container">
      <header class="section-header">
        <span>Những vị trí đã làm việc</span>
        <h2>Kinh nghiệm làm việc</h2>
      </header>
      
      <div class="row">

          <?php
           $this->widget('application.components.Experience', array(
            'resumeid' => $resumeid,
            'userid' => $userid,
            'resume_infos' => $resume_infos
             )); 
           ?>   

   
      </div>
    </div>
  </section>
  <!-- END Work Experience -->


  <!-- Skills -->
  <section class=" bg-alt">
    <div class="container">
      <header class="section-header">
        <span>Khả năng chuyên môn</span>
        <h2>Kỹ năng của bạn</h2>
      </header>
      
      <div class="row">

          <?php
           $this->widget('application.components.Skill', array(
            'resumeid' => $resumeid,
            'userid' => $userid,
            'resume_infos' => $resume_infos
             )); 
           ?>   
       
      
      </div>
    </div>
  </section>
  <!-- END Skills -->

 <!-- Portfolio --> 
<section class="section-portfolio">
  <div class="container">

    <header class="section-header">
        <span>Portfolio</span>
        <h2>Danh mục hình ảnh</h2>
    </header>

    <div class="row portfolios_block ">
        <?php
           $this->widget('application.components.Portfolio', array(
            'resumeid' => $resumeid,
            'userid' => $userid,
            'resume_infos' => $resume_infos
             )); 
           ?>   
    </div>
      
  </div>
</section>
<!-- END :: Portfolio --> 



  <!-- Submit -->
  <section class=" section-submit bg-img" style="background-image: url(<?php echo siteThemes(); ?>assets/img/bg-facts.jpg);">

   <?php
     $this->widget('application.components.SubmitResume', array(
      'resumeid' => $resumeid,
      'userid' => $userid,
      'resume_infos' => $resume_infos
       )); 
     ?>   


  </section>
  <!-- END Submit -->
  </main>
  <!-- END Main container -->
</form>



  <!-- START  ::   Modal -->
<div id="settingAvatar" class="modal-box">
  <header> <a href="#" class="js-modal-close close">×</a>
    <h3>Chỉnh sửa avatar</h3>
  </header>
  <div class="modal-body avatar-config">
    <!-- Show content here -->
  </div>
  <footer> <a href="#" class="btn btn-primary js-modal-close saveAvatar">Lưu hình ảnh</a> </footer>
</div>
  <!-- END  ::   Modal -->


<script src="<?php echo Yii::app()->request->baseUrl ?>/js/jquery-editable-select-master/source/jquery.editable-select.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl ?>/js/update.js" type="text/javascript"></script>
<script>
jQuery(document).ready(function($) {

   window.onload = function (e) {       
        
        $('.autocomplete').editableSelect({ effects: 'fade' });
    }     
  
});
     




</script>
