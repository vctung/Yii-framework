<?php foreach ($educations_list as $key => $value) { ?>
<div class="col-xs-12" data-token="<?php echo encryptIt($value['id']) ?>" data-type="educations">
  <div class="item-block">
    <div class="item-form">
      
      <button class="btn btn-danger btn-float btn-remove"><i class="ti-close"></i></button>
      <div class="row">
        <div class="col-xs-12 col-sm-4">

          <div 
           data-defaultimg = "<?php echo Yii::app()->request->baseUrl; ?>/images/resume/educations/<?php echo $value['logo']; ?>"
           data-na=""
           data-url="<?php echo Yii::app()->request->baseUrl; ?>/ajax/changeImage"
           data-token="<?php echo encryptIt($value['id']); ?>"
           data-resumeid="<?php echo $resume_infos['resumeid']; ?>"
           class="form-group education-block">
            <input type="file" 
            class="dropify" 
            data-default-file="<?php echo Yii::app()->request->baseUrl; ?>/images/resume/educations/<?php echo $value['logo']; ?>">
            <span class="help-block">Vui chọn logo hình vuông để hiển thị tốt nhất</span>
          </div>

        </div>
        <div class="col-xs-12 col-sm-8">
          <div class="form-group">
            <input type="text" class="form-control changeIsUpdate"
              data-url="<?php echo Yii::app()->request->baseUrl; ?>/ajax/updateresume"
              data-field="degree"
              data-model="educations"
               data-token="<?php echo encryptIt($value['id']); ?>"
              data-resumeid="<?php echo $resumeid; ?>"
              value="<?php echo $value['degree']; ?>" 
             placeholder="Bậc học, v.d. Đại học">
          </div>
          <div class="form-group"> 
            <input type="text" class="form-control changeIsUpdate" 
              data-url="<?php echo Yii::app()->request->baseUrl; ?>/ajax/updateresume"
              data-field="major"
              data-model="educations"
               data-token="<?php echo encryptIt($value['id']); ?>"
              data-resumeid="<?php echo $resumeid; ?>"
              value="<?php echo $value['major']; ?>" 
            placeholder="Chuyên ngành, v.d. Khóa học máy tính">
          </div>
          <div class="form-group">
            <input type="text" class="form-control changeIsUpdate" 
              data-url="<?php echo Yii::app()->request->baseUrl; ?>/ajax/updateresume"
              data-field="schoolname"
              data-model="educations"
               data-token="<?php echo encryptIt($value['id']); ?>"
              data-resumeid="<?php echo $resumeid; ?>"
              value="<?php echo $value['schoolname']; ?>" 
            placeholder="Tên trường, v.d. Đại học khoa học tự nhiên TP HCM">
          </div>
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon">Thời gian từ</span>
              <input type="text" class="form-control changeIsUpdate"
              data-url="<?php echo Yii::app()->request->baseUrl; ?>/ajax/updateresume"
              data-field="from"
              data-model="educations"
               data-token="<?php echo encryptIt($value['id']); ?>"
              data-resumeid="<?php echo $resumeid; ?>"
              value="<?php echo $value['from']; ?>"  
              placeholder="v.d. 2009">

              <span class="input-group-addon">Đến</span>
              <input type="text" class="form-control changeIsUpdate" 
              data-url="<?php echo Yii::app()->request->baseUrl; ?>/ajax/updateresume"
              data-field="to"
              data-model="educations"
               data-token="<?php echo encryptIt($value['id']); ?>"
              data-resumeid="<?php echo $resumeid; ?>"
              value="<?php echo $value['to']; ?>"  
              placeholder="e.g. 2016">
            </div>
          </div>
          <div class="form-group">
            <textarea class="form-control changeIsUpdate" rows="3" 
              data-url="<?php echo Yii::app()->request->baseUrl; ?>/ajax/updateresume"
              data-field="description"
              data-model="educations"
               data-token="<?php echo encryptIt($value['id']); ?>"
              data-resumeid="<?php echo $resumeid; ?>"
            placeholder="Giới thiệu ngắn  về khóa học"><?php echo $value['description']; ?></textarea>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php  }  ?>


<div class="col-xs-12 duplicateable-content educations" data-type="educations">
  <div class="item-block">
    <div class="item-form">
      
      <button class="btn btn-danger btn-float btn-remove"><i class="ti-close"></i></button>
      <div class="row">

        <div class="col-xs-12 col-sm-4">
          <div 
           data-defaultimg = "<?php echo Yii::app()->request->baseUrl; ?>/images/resume/educations/logo-default.png"
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
            data-field="degree"
            data-model="educations"
            placeholder="Bậc học, v.d. Đại học">
          </div>
          <div class="form-group">
            <input type="text" class="form-control changeIsUpdateONN"
            data-field="major"
            data-model="educations"
            placeholder="Chuyên ngành, v.d. Khóa học máy tính">
          </div>
          <div class="form-group">
            <input type="text" class="form-control changeIsUpdateONN"
            data-field="schoolname"
            data-model="educations"
            placeholder="Tên trường, v.d. Đại học khoa học tự nhiên TP HCM">
          </div>
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon">Thời gian từ</span>
              <input type="text" class="form-control changeIsUpdateONN"
              data-field="from"
              data-model="educations"
              placeholder="v.d. 2009">
              <span class="input-group-addon">Đến</span>
              <input type="text" class="form-control"
              data-field="to"
              data-model="educations"
              placeholder="v.d. 2010">
            </div>
          </div>
          <div class="form-group">
            <textarea class="form-control changeIsUpdateONN" rows="3"
            data-field="description"
            data-model="educations"
            placeholder="Giới thiệu ngắn  về khóa học"></textarea>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-xs-12 text-center">
  <br>
  <button data-type="educations" class="btn btn-primary btn-duplicator">Thêm học vấn</button>
</div>