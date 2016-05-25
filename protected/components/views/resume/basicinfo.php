<?php 
  // echo "<pre>";
  // print_r( $resume_infos); exit();
 ?>
<div class="form-group">
  <input type="text" class="form-control input-lg changeIsUpdate"  
  data-url="<?php echo Yii::app()->request->baseUrl; ?>/ajax/updateresume"
  data-model="resumedetail"
  data-field="name"
  data-token="<?php echo encryptIt($resume_infos['id']); ?>"
  data-resumeid="<?php echo $resumeid; ?>"
  value="<?php echo $resume_infos['name']; ?>" 
  placeholder="Tên đầy đủ của bạn">
</div>


<div class="form-group">
  <input type="text" class="form-control changeIsUpdate"
  data-url="<?php echo Yii::app()->request->baseUrl; ?>/ajax/updateresume"
  data-model="resumedetail"
  data-field="headline"
  data-token="<?php echo encryptIt($resume_infos['id']); ?>"
  data-resumeid="<?php echo $resumeid; ?>"
  value="<?php echo $resume_infos['headline']; ?>" 
  placeholder="Tiêu đề (ví dụ Giám đốc marketing)">
</div>

<div class="form-group">
  <textarea class="form-control changeIsUpdate" rows="3"
  data-url="<?php echo Yii::app()->request->baseUrl; ?>/ajax/updateresume"
  data-model="resumedetail"
  data-field="descriptions"
  data-token="<?php echo encryptIt($resume_infos['id']); ?>"
  data-resumeid="<?php echo $resumeid; ?>"
  value="<?php echo $resume_infos['descriptions']; ?>" 
   placeholder="Giới thiệu về bạn"><?php echo $resume_infos['descriptions']; ?></textarea>
</div>

<hr class="hr-lg">


<h6>Thông tin cá nhân cơ bản</h6>

<div class="row">

  <div class="form-group col-xs-12 col-sm-6">
    <div class="input-group input-group-sm">
      <span class="input-group-addon"><i class="fa fa-globe"></i></span>
      <input type="text" class="form-control changeIsUpdate"
        data-url="<?php echo Yii::app()->request->baseUrl; ?>/ajax/updateresume"
        data-model="resumedetail"
        data-field="website"
         data-token="<?php echo encryptIt($resume_infos['id']); ?>"
        data-resumeid="<?php echo $resumeid; ?>"
        value="<?php echo $resume_infos['website']; ?>" 
       placeholder="Website  ( không bao gồm http:// ) ">
    </div>
  </div>

  <div class="form-group col-xs-12 col-sm-6">
    <div class="input-group input-group-sm">
      <span class="input-group-addon"><i class="fa fa-usd"></i></span>
      <input type="text" class="form-control changeIsUpdate"
        data-url="<?php echo Yii::app()->request->baseUrl; ?>/ajax/updateresume"
        data-model="resumedetail"
        data-field="salary"
         data-token="<?php echo encryptIt($resume_infos['id']); ?>"
        data-resumeid="<?php echo $resumeid; ?>"
        value="<?php echo $resume_infos['salary']; ?>" 
        placeholder="Mức lương mong muốn">
      <span class="input-group-addon">/Tháng</span>
    </div>
  </div>

  <div class="form-group col-xs-12 col-sm-6">
    <div class="input-group input-group-sm">
      <span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span>
      <input type="text" class="form-control changeIsUpdate"
        data-url="<?php echo Yii::app()->request->baseUrl; ?>/ajax/updateresume"
        data-model="resumedetail"
        data-field="age"
         data-token="<?php echo encryptIt($resume_infos['id']); ?>"
        data-resumeid="<?php echo $resumeid; ?>"
        value="<?php echo $resume_infos['age']; ?>" 
       placeholder="Tuổi">
      <span class="input-group-addon">Tuổi</span>
    </div>
  </div>

  <div class="form-group col-xs-12 col-sm-6">
    <div class="input-group input-group-sm">
      <span class="input-group-addon"><i class="fa fa-phone"></i></span>
      <input type="text" class="form-control changeIsUpdate"
        data-url="<?php echo Yii::app()->request->baseUrl; ?>/ajax/updateresume"
        data-model="resumedetail"
        data-field="phone"
         data-token="<?php echo encryptIt($resume_infos['id']); ?>"
        data-resumeid="<?php echo $resumeid; ?>"
        value="<?php echo $resume_infos['phone']; ?>"
       placeholder="Số điện thoại">
    </div>
  </div>

  <div class="form-group col-xs-12 col-sm-6">
    <div class="input-group input-group-sm">
      <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
<!--       <input type="text" class="form-control changeIsUpdate" 
      id="countries"
      data-url="<?php echo Yii::app()->request->baseUrl; ?>/ajax/updateresume"
      data-model="resumedetail"
      data-field="adds"
      data-id="<?php echo $resume_infos['id']; ?>"
      data-resumeid="<?php echo $resumeid; ?>"         value="<?php echo $resume_infos['adds']; ?>" 
      value="<?php echo $resume_infos['adds']; ?>" 
      placeholder="Địa điểm, e.g. Melon Park, CA"> -->

       <select  class="form-control changeIsUpdate autocomplete"
        id="countries"
        data-url="<?php echo Yii::app()->request->baseUrl; ?>/ajax/updateresume"
        data-model="resumedetail"
        data-field="adds"
        data-token="<?php echo encryptIt($resume_infos['id']); ?>"
        data-resumeid="<?php echo $resumeid; ?>"

        placeholder="Địa điểm, e.g. Melon Park, CA">

        <?php foreach ($place as $key => $value) {         
         ?>
        <option 
        <?php echo ( $value['name'] === $resume_infos['adds'] ) ? "selected" : '' ?>
        value="<?php echo $value['name']; ?>"><?php echo $value['name']; ?></option>
        <?php }  ?>
         
       </select>


    </div>
  </div>


  <div class="form-group col-xs-12 col-sm-6">
    <div class="input-group input-group-sm">
      <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
      <input type="text" class="form-control changeIsUpdate"
        data-url="<?php echo Yii::app()->request->baseUrl; ?>/ajax/updateresume"
        data-model="resumedetail"
        data-field="email"
        data-token="<?php echo encryptIt($resume_infos['id']); ?>"
        data-resumeid="<?php echo $resumeid; ?>"
        value="<?php echo $resume_infos['email']; ?>"
       placeholder="Địa chỉ email">      
    </div>
  </div>
</div>


<hr class="hr-lg">
<h6>Tags </h6>
<div class="form-group block-tags"
 data-url="<?php echo Yii::app()->request->baseUrl; ?>/ajax/updateresume"
  data-model="resumedetail"
  data-field="tags"
 data-token="<?php echo encryptIt($resume_infos['id']); ?>"
  data-resumeid="<?php echo $resumeid; ?>">

  <input class="tag-list"
  value="<?php echo $resume_infos['tags']; ?>"
  type="text" data-role="tagsinput" placeholder="Tag name">
  <span class="help-block">Những từ khóa mà bạn nghĩ nhà tuyển dụng sẽ dùng để tìm bạn( cách nhau bởi dấu phẩy, tối đa 120 ký tự )</span>
</div>
