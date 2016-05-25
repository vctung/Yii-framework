<div class="login-block">
        <img src="<?php echo siteThemes(); ?>assets/img/logo.png" alt="">
        <h1>Đăng nhập vào tài khoản  </h1>

        <?php $form=$this->beginWidget('CActiveForm', array(
     
            'enableClientValidation'=>true,
            'clientOptions'=>array(
                'validateOnSubmit'=>true,
            ),
             'htmlOptions'=>array(
              'class'=>'form-login',
              // 'enctype' => 'multipart/form-data'
          ),
        ));
       ?>


          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="ti-user"></i></span>
              <!-- <input type="text" class="form-control" placeholder="Email"> -->
              <?php echo $form->textField($model,'username', array('class' => "form-control", 'placeholder' => 'Tài khoản')); ?>
            </div>
          </div>
          
          <hr class="hr-xs">

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="ti-unlock"></i></span>
              <?php echo $form->passwordField($model,'password', array('class' => "form-control", 'placeholder' => 'Mật khẩu')); ?>
            </div>
          </div>

          <button class="btn btn-primary btn-block" type="submit">Đăng nhập</button>
          <div class="show-errow">
             <?php echo $form->error($model,'username'); ?> <?php echo $form->error($model,'password'); ?>
          </div>
          <div class="login-footer">
            <h6></h6>
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
      
          
      

          <?php $this->endWidget(); ?>
      </div>

      <div class="login-links">
        <a class="pull-left" href="#">Quên tài khoản?</a>
        <a class="pull-right" href="<?php echo Yii::app()->createUrl('main/register')?>">Đăng ký</a>
      </div>