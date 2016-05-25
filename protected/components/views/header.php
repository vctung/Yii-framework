<?php if (Yii::app()->user->isGuest) {  /*Not login yet */?>



<div class="pull-right user-login">
  <a class="btn btn-sm btn-primary" href="<?php echo  Yii::app()->createUrl('main/login'); ?>">Đăng nhâp</a>
  or <a href="<?php echo  Yii::app()->createUrl('main/register'); ?>">Đăng ký</a>
</div>




<?php }  else {  /*Logined  */ ?>


<div class="pull-right">
  <div class="dropdown user-account">
    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
      <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/avatar/<?php echo Yii::app()->user->getState("avatar"); ?>" alt="avatar">
    </a>
    <ul class="dropdown-menu dropdown-menu-right">
      <li><a href="<?php echo  Yii::app()->createUrl('main/logout'); ?>">Đăng xuất</a></li>
      <li><a href="#">Đổi mật khẩu</a></li>
    </ul>
  </div>
</div>


<?php }?>