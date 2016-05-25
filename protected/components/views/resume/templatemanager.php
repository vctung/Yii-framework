
<div class="container">
  <div class="row list-resume-template">

  <?php  foreach ($templates as $key => $value) {
    $flag = ($resume_infos['template'] == $value['id'] ) ; 
   ?>  

    <div class="col-xs-12 col-sm-6  col-md-4">
        <div class="card">
            <div class="image" style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/cv_temp/<?php echo $value['image']; ?>); background-size: cover; background-position: 50% 50%;">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/cv_temp/<?php echo $value['image']; ?>" alt="<?php echo $value['name']; ?> " style="display: none;">

                <div class="filter lv1 <?php  echo ($flag) ? 'active' : 'unactive' ?> ">
                  
                    <button type="button" class="btn btn-neutral btn-simple ">
                        <i class="fa fa-bookmark-o"></i> 
                        Bạn đang sử dụng giao diện này
                    </button> 
                                  
                </div>
                <div class="filter lv2 <?php  echo ($flag) ? 'unactive' : 'active' ?> ">
                   <button type="button" 
                       data-url="<?php echo Yii::app()->request->baseUrl; ?>/ajax/updateresume"
                       data-token="<?php echo encryptIt($resume_infos['resumeid']) ?>"
                       data-resumeid="<?php echo $resume_infos['resumeid']; ?>"
                       data-templateName="<?php echo $value['id']; ?>"
                       class="btn btn-neutral btn-simple active-template">
                          <i class="fa fa-bookmark-o"></i> Kích hoạt
                      </button>     
                </div>
            </div>
            <div class="content">
                <p class="category fc_cap"><?php  echo Trans( $resume_infos['language'] , "TEMPLATE"); ?></p>
                <a class="card-link" href="#">
                    <h4 class="title"><?php echo $value['name']; ?> </h4>
                </a>
                 <div class="footer">
                    <div class="author">
                        <a class="card-link" href="#">
                           <i style="color : #<?php echo $value['color']  ?>" class="fa fa-circle"></i> Màu chủ đạo
                        </a>
                    </div>
                    <div class="stats pull-right status <?php  echo ($flag) ? 'active' : '' ?>">
                        <i class="fa fa-check"></i> 
                        Đang sử dụng
                    </div>
                </div>
            </div>
        </div> <!-- end card -->
    </div>
     <?php  }  ?>
  </div> <!-- END a row  -->
</div>

<?php 
  $baseUrl = Yii::app()->baseUrl; 
  $cs = Yii::app()->getClientScript();
  Yii::app()->clientScript->registerScriptFile( $baseUrl. '/js/page/templatemanager.js',CClientScript::POS_END );

 ?>