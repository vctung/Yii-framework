
<?php foreach ($skils_list as $key => $value) {
  
 ?>
<div class="col-xs-12 skill" data-token="<?php echo encryptIt($value['id']) ?>" data-type="skills">
  <div class="item-block">
    <div class="item-form">
      
      <button class="btn btn-danger btn-float btn-remove"><i class="ti-close"></i></button>
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <div class="form-group">
            <input type="text" class="form-control changeIsUpdate"
              data-url="<?php echo Yii::app()->request->baseUrl; ?>/ajax/updateresume"
              data-field="name"
              data-model="skills"
              data-token="<?php echo encryptIt($value['id']); ?>"
              data-resumeid="<?php echo $resumeid; ?>"
              value="<?php echo $value['name']; ?>" 
              placeholder="Tên kỹ năng, v.d. Tin học văn phòng">
          </div>
        </div>
        <div class="col-xs-12 col-sm-6">
          <div class="form-group">
            <div class="input-group">
              <input type="text" class="form-control changeIsUpdate"
              data-url="<?php echo Yii::app()->request->baseUrl; ?>/ajax/updateresume"
              data-field="level"
              data-model="skills"
              data-token="<?php echo encryptIt($value['id']); ?>"
              data-resumeid="<?php echo $resumeid; ?>"
              value="<?php echo $value['level']; ?>"  
              max="100"
              placeholder="Khả năng, ( tính theo % ) ">
              <span class="input-group-addon">%</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php  }  ?>


<div class="col-xs-12 duplicateable-content skills" data-type="skills">
  <div class="item-block">
    <div class="item-form">
      
      <button class="btn btn-danger btn-float btn-remove"><i class="ti-close"></i></button>
      <div class="row">

        <div class="col-xs-12 col-sm-6">
          <div class="form-group">
            <input type="text" class="form-control changeIsUpdateONN"
              data-field="name"
              data-model="skills"
              placeholder="Tên kỹ năng, v.d. Tin học văn phòng">
          </div>
        </div>

        <div class="col-xs-12 col-sm-6">
          <div class="form-group">
            <div class="input-group">
              <input type="text" class="form-control changeIsUpdateONN" 
               data-field="level"
               data-model="skills"
               placeholder="Khả năng, ( tính theo % ) ">
              <span class="input-group-addon">%</span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<div class="col-xs-12 text-center">
  <br>
  <button data-type="skills" class="btn btn-primary btn-duplicator btn-skill">Thêm kỹ năng</button>
</div>