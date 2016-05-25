<div class="col-xs-12 col-sm-6">

  <div class="form-group">
    <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
      <input type="text" class="form-control changeIsUpdate"
        data-url="<?php echo Yii::app()->request->baseUrl; ?>/ajax/updateresume"
        data-model="resumedetail"
        data-field="facebook"
        data-token="<?php echo encryptIt($resume_infos['id']); ?>"
        data-resumeid="<?php echo $resumeid; ?>"
        value="<?php echo $resume_infos['facebook']; ?>"  
      placeholder="Nhập đầy đủ đường dẫn ">
    </div>
  </div>

  <div class="form-group">
    <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-google-plus"></i></span>
      <input type="text" class="form-control changeIsUpdate"
        data-url="<?php echo Yii::app()->request->baseUrl; ?>/ajax/updateresume"
        data-model="resumedetail"
        data-field="google"
        data-token="<?php echo encryptIt($resume_infos['id']); ?>"
        data-resumeid="<?php echo $resumeid; ?>"
        value="<?php echo $resume_infos['google']; ?>"  
      placeholder="Nhập đầy đủ đường dẫn ">
    </div>
  </div>


</div>
<div class="col-xs-12 col-sm-6">

  <div class="form-group">
    <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-skype"></i></span>
      <input type="text" class="form-control changeIsUpdate"
        data-url="<?php echo Yii::app()->request->baseUrl; ?>/ajax/updateresume"
        data-model="resumedetail"
        data-field="skype"
        data-token="<?php echo encryptIt($resume_infos['id']); ?>"
        data-resumeid="<?php echo $resumeid; ?>"
        value="<?php echo $resume_infos['skype']; ?>"  
      placeholder="Nhập đầy đủ đường dẫn ">
    </div>
  </div>

  <div class="form-group">
    <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-linkedin"></i></span>
      <input type="text" class="form-control changeIsUpdate"
        data-url="<?php echo Yii::app()->request->baseUrl; ?>/ajax/updateresume"
        data-model="resumedetail"
        data-field="linkedin"
        data-token="<?php echo encryptIt($resume_infos['id']); ?>"
        data-resumeid="<?php echo $resumeid; ?>"
        value="<?php echo $resume_infos['linkedin']; ?>"  
      placeholder="Nhập đầy đủ đường dẫn ">
    </div>
  </div>

</div>