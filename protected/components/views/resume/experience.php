<?php foreach ($experience_list as $key => $value) { ?>
<div class="col-xs-12 experiences"  data-token="<?php echo encryptIt($value['id']) ?>" data-type="experiences">
  <div class="item-block">
    <div class="item-form">
      
      <button class="btn btn-danger btn-float btn-remove"><i class="ti-close"></i></button>
      <div class="row">

        <div class="col-xs-12 col-sm-4">

          <div 
            data-defaultimg = "<?php echo Yii::app()->request->baseUrl; ?>/images/resume/experiences/<?php echo $value['logo']; ?>"
           data-na=""
           data-url="<?php echo Yii::app()->request->baseUrl; ?>/ajax/changeImage"
           data-token="<?php echo encryptIt($value['id']); ?>"
           data-resumeid="<?php echo $resume_infos['resumeid']; ?>"
           class="form-group experience-block">
            <input type="file" class="dropify experience" 
             data-default-file="<?php echo Yii::app()->request->baseUrl; ?>/images/resume/experiences/<?php echo $value['logo']; ?>">
            <span class="help-block">Vui lòng chọn logo công ty</span>
          </div>
        </div>

        <div class="col-xs-12 col-sm-8">
          <div class="form-group">
            <input type="text" class="form-control changeIsUpdate" 
              data-url="<?php echo Yii::app()->request->baseUrl; ?>/ajax/updateresume"
              data-field="companyname"
              data-model="experiences"
              data-token="<?php echo encryptIt($value['id']); ?>"
              data-resumeid="<?php echo $resumeid; ?>"
              value="<?php echo $value['companyname']; ?>" 
            placeholder="Tên công ty">
          </div>
          <div class="form-group">
            <input type="text" class="form-control changeIsUpdate" 
              data-url="<?php echo Yii::app()->request->baseUrl; ?>/ajax/updateresume"
              data-field="position"
              data-model="experiences"
              data-token="<?php echo encryptIt($value['id']); ?>"
              data-resumeid="<?php echo $resumeid; ?>"
              value="<?php echo $value['position']; ?>" 
            placeholder="Vị trí làm việc, v.d. Giám đốc marketing">
          </div>
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon">Từ</span>
              <input type="text" class="form-control changeIsUpdate" 
              data-url="<?php echo Yii::app()->request->baseUrl; ?>/ajax/updateresume"
              data-field="from"
              data-model="experiences"
              data-token="<?php echo encryptIt($value['id']); ?>"
              data-resumeid="<?php echo $resumeid; ?>"
              value="<?php echo $value['from']; ?>" 
                placeholder="e.g. 2012">
              <span class="input-group-addon">Đến</span>
              <input type="text" class="form-control changeIsUpdate" 
              data-url="<?php echo Yii::app()->request->baseUrl; ?>/ajax/updateresume"
              data-field="to"
              data-model="experiences"
              data-token="<?php echo encryptIt($value['id']); ?>"
              data-resumeid="<?php echo $resumeid; ?>"
              value="<?php echo $value['to']; ?>" 
              placeholder="e.g. 2016">
            </div>
          </div>
        </div>
        <div class="col-xs-12">
          <div class="form-group">
            <textarea class="summernote-editor changeSummernote"
              data-url="<?php echo Yii::app()->request->baseUrl; ?>/ajax/updateresume"
              data-field="description"
              data-model="experiences"
              data-token="<?php echo encryptIt($value['id']); ?>"
              data-resumeid="<?php echo $resumeid; ?>"><?php echo urldecode($value['description']); ?></textarea>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php  }  ?>

<div class="col-xs-12 duplicateable-content experiences"  data-type="experiences">
  <div class="item-block">
    <div class="item-form">
      
      <button class="btn btn-danger btn-float btn-remove"><i class="ti-close"></i></button>
      <div class="row">

        <div class="col-xs-12 col-sm-4">
          <div 
           data-defaultimg = "<?php echo Yii::app()->request->baseUrl; ?>/images/resume/experiences/logo-default.png"
           data-na=""           
           data-url="<?php echo Yii::app()->request->baseUrl; ?>/ajax/changeImage"
           data-resumeid="<?php echo $resume_infos['resumeid']; ?>"
           class="form-group img-box">
            <input type="file" class="dropify" data-default-file="<?php echo siteThemes(); ?>assets/img/logo-default.png">
            <span class="help-block">Vui chọn logo hình vuông để hiển thị tốt nhất</span>
          </div>
        </div>

        <div class="col-xs-12 col-sm-8">
          <div class="form-group">
            <input type="text" class="form-control changeIsUpdateONN"
             data-field="companyname"
             data-model="experiences"
             placeholder="Tên công ty">
          </div>
          <div class="form-group">
            <input type="text" class="form-control changeIsUpdateONN" 
              data-field="position"
              data-model="experiences"
             placeholder="Vị trí làm việc, v.d. Giám đốc marketing">
          </div>
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon">Từ</span>
              <input type="text" class="form-control changeIsUpdateONN" 
               data-field="from"
              data-model="experiences"
              placeholder="e.g. 2012">
              <span class="input-group-addon">Đến</span>
              <input type="text" class="form-control changeIsUpdateONN" 
               data-field="to"
              data-model="experiences"
              placeholder="e.g. 2016">
            </div>
          </div>
        </div>
        <div class="col-xs-12">
          <div class="form-group noteJS">
            <textarea class="changeSummernoteJS"   
               data-field="description"
              data-model="experiences"></textarea>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="col-xs-12 text-center">
  <br>
  <button data-type="experience"  class="btn btn-primary btn-duplicator"> Thêm kinh nghiệm  </button>
</div>

