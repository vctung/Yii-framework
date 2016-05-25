
<div class="col-md-12 btn-cat-list">
	<div class="form-group">

		<?php foreach ($portfolios_cat as $key => $value) { 

		?>					
	      	<a data-href="#cat_<?php echo  $value['id']; ?>" class="btn btn-primary btn-sm 
	      	<?php echo ($key != 0) ? 'btn-outline' : '' ; ?>" href="#">
	      		 <?php echo  $value['name']; ?>
	      	</a>
	    <?php } ?>	 


	    <a data-toggle="modal" data-target="#editPortList" class="btn btn-primary btn-float edit-list-port" href="#">
	    	<i class="fa fa-pencil"></i>
	    </a>

     </div>
</div>	<!--  END :: col-md-8  -->



<div class="col-xs-12 " data-type="portfolios">
	<div class="item-block">
		<div class="item-form">

			<button class="btn btn-danger btn-float btn-remove"><i class="ti-close"></i></button>
			
			<div class="row">
				<div class="col-xs-12 col-sm-4">
                <div class="form-group">
                  <input type="file" class="dropify" 
                  data-default-file="<?php echo Yii::app()->request->baseUrl; ?>/images/resume/educations/logo-default.png">
                  <!-- <span class="help-block"> Vui lòng chọn hình ảnh </span> -->
                </div>
              </div> <!--  END :: image -->


             <div class="col-xs-12 col-sm-8">
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon">Tiêu đề</span>
                    <input type="text" class="form-control" placeholder="Tiêu đề">

                    <span class="input-group-addon">Danh mục</span>
                    <select class="form-control">
	                  <option value="">Tên danh mục</option>
	                  <option value="">Tên danh mục</option>
	                </select>

                  </div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" rows="4" placeholder="Mô tả sơ lược"></textarea>
                </div>
              </div> <!--  END :: info -->

              </div>
			<!--  END :: row  -->

		</div>
	</div>
</div>


<div class="col-xs-12 duplicateable-content portfolios" data-type="portfolios">
	<div class="item-block">
		<div class="item-form">

			<button class="btn btn-danger btn-float btn-remove"><i class="ti-close"></i></button>
			
			<div class="row">
				<div class="col-xs-12 col-sm-4">
                <div class="form-group">
                  <input type="file" class="dropify" 
                  data-default-file="<?php echo Yii::app()->request->baseUrl; ?>/images/resume/educations/logo-default.png">
                  <!-- <span class="help-block"> Vui lòng chọn hình ảnh </span> -->
                </div>
              </div> <!--  END :: image -->


             <div class="col-xs-12 col-sm-8">
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon">Tiêu đề</span>
                    <input type="text" class="form-control" placeholder="Tiêu đề">

                    <span class="input-group-addon">Danh mục</span>
                    <select class="form-control">
	                  <option value="">Tên danh mục</option>
	                  <option value="">Tên danh mục</option>
	                </select>

                  </div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" rows="4" placeholder="Mô tả sơ lược"></textarea>
                </div>
              </div> <!--  END :: info -->

              </div>
			<!--  END :: row  -->

		</div>
	</div>
</div>


<div class="col-xs-12 text-center">
  <br>
  <button data-type="educations" class="btn btn-primary btn-duplicator">Thêm danh mục hình ảnh</button>
</div>
<!-- BTN :: duplicator -->




<!-- Modal -->
<div class="modal fade" id="editPortList" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>

      <div class="modal-body">
       	
      	 
		<?php foreach ($portfolios_cat as $key => $value) {  ?>	
        <div class="form-group port-items">
          <div class="input-group">
            <input type="text" class="form-control" value="<?php echo $value['name']; ?>" placeholder="Tên danh mục">
            <span class="input-group-addon btn-danger">
            	<i class="fa fa-trash "></i>
            </span>
          </div>
        </div><!-- END :: form-group -->
        <?php }  ?>	

         <div class="form-group port-items duplicateable">
          <div class="input-group">
            <input type="text" class="form-control" value="" placeholder="Tên danh mục">
            <span class="input-group-addon btn-danger">
            	<i class="fa fa-trash "></i>
            </span>
          </div>
        </div><!-- END :: form-group -->
	      

      </div> <!-- END :: modal-body -->
      <div class="modal-footer">
        <button type="button" class="btn btn-outline btn-info" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



<?php 
  $baseUrl = Yii::app()->baseUrl; 
  $cs = Yii::app()->getClientScript();
  Yii::app()->clientScript->registerScriptFile( $baseUrl. '/js/page/portfolios.js',CClientScript::POS_END );
 ?>