<div class="login-block">
        <img src="<?php echo siteThemes(); ?>assets/img/logo.png" alt="">
        <h1>Đăng ký tài khoản</h1>

        <?php $form=$this->beginWidget('CActiveForm', array(
     
            'enableClientValidation'=>true,
            'clientOptions'=>array(
                'validateOnSubmit'=>true,
            ),
             'htmlOptions'=>array(
              'class'=>'form-login',
              'autocomplete'=>'off',
              // 'enctype' => 'multipart/form-data'
          ),
        ));
       ?>


          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="ti-user"></i></span>
              <!-- <input type="text" class="form-control" placeholder="Email"> -->
              <?php echo $form->textField($model,'username', 
                array(
                'value'=>'','class' => "form-control", 'placeholder' => 'Tài khoản')); ?>
            </div>
          </div>

          <hr class="hr-xs">

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="ti-email"></i></span>
              <?php echo $form->emailField($model,'email', array('class' => "form-control", 'placeholder' => 'Email')); ?>
            </div>
          </div>
          
          <hr class="hr-xs">

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="ti-unlock"></i></span>
              <?php echo $form->passwordField($model,'password', array('value'=>'', 'class' => "form-control", 'placeholder' => 'Password')); ?>
            </div>
          </div>          
            <?php $this->endWidget(); ?>

          <button id="register-button"  class="btn btn-primary btn-block" >Đăng ký</button>

          <div class="login-footer">
            <h6>Or login with</h6>
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>

          <?php //$this->endWidget(); ?>
      </div>

       <div class="login-links">
        <p class="text-center">Bạn đã có tài khoản? <a class="txt-brand" href="<?php echo Yii::app()->createUrl('main/login')?>">Đăng nhập</a></p>
      </div>


 <script type="text/javascript">


 jQuery(document).ready(function($) {
   controlSubmit();  
 }); 

 $('#RegisterForm_username').change(function(event) {
      var username = $(this).val();
      validateUsername(username);
 }); /* END username change*/



    $('#RegisterForm_email').focus(function(event) {
       var username = $('#RegisterForm_username').val();
       checkElement('#RegisterForm_username', 'Tên đăng nhập ');
       checkSpeical('#RegisterForm_username', 'Tên đăng nhập ');
    });

     $('#RegisterForm_email').change(function(event) {

       var email = $('#RegisterForm_email').val();
       var username = $('#RegisterForm_username').val();
       validateEmail(email);
       validateEmail(username);
       
    }); /* END RegisterForm_email change*/

      $('#RegisterForm_password').focus(function(event) { 
        checkElement('#RegisterForm_email', 'Email ');
    });


     $('#RegisterForm_password , #RegisterForm_email, #RegisterForm_username ').on('keydown' , function(event) {
         controlSubmit(); 
      });
    

    $('#register-button').click(function(event) {
        Register(); 
    });

function validateUsername(username)
{

        if (username.length == 0  || username.length < 5) {
          ohSnap( 'Tên đăng nhập tối thiểu 5 ký tự !' , {color: 'red'}); 
          $('#RegisterForm_username').focus();
        }
         else if(/^[a-zA-Z0-9- ]*$/.test(username) == false) {
             ohSnap( 'Tên đăng nhập KHÔNG được chứa ký tự đặc biệt ' , {color: 'red'}); 
              $('#RegisterForm_username').focus();
         } 
         else {

            $.ajax({ /* Ajax check isset username on sever */
                  type: "POST",
                  url: "<?php echo Yii::app()->request->baseUrl; ?>/ajax/checkusername",
                  data:
                  {
                   username: username
                  },
              success:  function(result) {
                $('#ohsnap').html(" ");              
                 if (result  == 1) { /* == 1 is has error*/
                    ohSnap( "Tên đăng nhập đã tồn tại"  , {color: 'red'});
                   $('#RegisterForm_username').focus();
                 } else {
                     ohSnap( 'Tên đăng nhập hợp lệ'  , {color: 'green'});
                 }
              },
              error:function(jqXHR, textStatus, errorThrown){
                  alert('error::'+errorThrown);
              }
          });   /* END Ajax */

        }
}


function checkElement(Element, fieldName) {
    var _val = $(Element).val();
    if (_val.length == 0  || _val.length < 5) {
        ohSnap( fieldName + ' tối thiểu 5 ký tự !' , {color: 'red'}); 
        $(Element).focus();
    }  
}

function checkSpeical (Element, fieldName) {
      var _val = $(Element).val();
  if(/^[a-zA-Z0-9- ]*$/.test(_val) == false){
      ohSnap( fieldName + ' KHÔNG được chứa ký tự đặc biệt !' , {color: 'red'}); 
    }
}


function validateEmail(email)
{
  var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
  if(email.length == 0 ) {
     ohSnap( 'Vui lòng nhập thông tin Email' , {color: 'red'}); 
     $('#RegisterForm_email').focus();
  }
  else if (email == '' || !re.test(email ))
  {
      ohSnap( 'Email không hợp lệ' , {color: 'red'});
      $('#RegisterForm_email').focus();
      return false;
  } else {

      $.ajax({ /* Ajax check isset username on sever */
              type: "POST",
              url: "<?php echo Yii::app()->request->baseUrl; ?>/ajax/checkemail",
              data:
              {
               email: email
              },
          success:  function(result) {
            $('#ohsnap').html(" ");              
             if (result  == 1) { /* == 1 is has error*/
                ohSnap( "Email đã tồn tại"  , {color: 'red'});                
                $('#RegisterForm_email').focus();
             } else {
                 ohSnap( 'Email  hợp lệ'  , {color: 'green'});
             }
          },
          error:function(jqXHR, textStatus, errorThrown){
              alert('error::'+errorThrown);
          }
      });   /* END Ajax */

  }

}


function controlSubmit() {
    val_1 = $('#RegisterForm_password').val();
    val_2 = $('#RegisterForm_username').val();
    val_3 = $('#RegisterForm_email').val();
    // console.log('val_1 : ' + val_1.length + 'val_2 : ' +val_2.length +'val_3 : ' +val_3.length)
    if (val_1.length > 4 && val_2.length > 4 && val_3.length > 4 ) {
      $('#register-button').removeAttr('disabled');
    } else  {          
         $('#register-button').prop('disabled', true);
    }  
}


function Register() {
    checkElement('#RegisterForm_username', 'Tên đăng nhập ');
    checkSpeical('#RegisterForm_username', 'Tên đăng nhập ');
    checkElement('#RegisterForm_email', 'Email ');
    checkElement('#RegisterForm_password', ' Mật khẩu ');

    val_1 = $('#RegisterForm_password').val();
    val_2 = $('#RegisterForm_username').val();
    val_3 = $('#RegisterForm_email').val();

    if (val_1.length > 4 && val_2.length > 4 && val_3.length > 4 ) {
      
          $.ajax({ /* Ajax check isset username on sever */
              type: "POST",
              url: "<?php echo Yii::app()->request->baseUrl; ?>/ajax/register",
              data:
              {
                username: val_2,
                email: val_3,
                password: val_1
              },
              success:  function(result) {

                if (result == 1 ) {
                  swal("Đăng ký thành công !", " Trở lại trang đăng  nhập !", "success");
                  setTimeout(function() { 
                     $(window).attr('location',"<?php echo  Yii::app()->createUrl('main/login')?> ");
                  }, 3000);
                } else {
                  sweetAlert("Oops...", "Đã xảy ra lỗi, xin vui lòng thử lại sau !", "error");
                }

              },
              error:function(jqXHR, textStatus, errorThrown){
                  alert('error::'+errorThrown);
              }
          });   /* END Ajax */

    } /* END if*/

} /* EMD :: register*/



</script>  
