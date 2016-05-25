<?php 
    $themes =  Yii::app()->request->baseUrl."/themes/404/" ; 
 ?>

<!DOCTYPE html>
<html>

<head>
        <title>CV123 nghĩ bạn đang "lạc lối"... </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo  $themes; ?>bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo  $themes; ?>assets/css/404style.css">

        <!-- JQUERY LIBRARY LINKS -->
        <script src="<?php echo  $themes; ?>jquery-1.9.1.js"></script>
        <script src="<?php echo  $themes; ?>jquery-migrate-1.2.1.min.js"></script>
    </head>

    <body>
        <div class="container">
            <div class="col-md-6 col-sm-6 imgSec">
                <div class="icon">
                    <div class="victor"></div>
                    <div class="animation"></div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 content">
                <h2 class="heading">OOPS!</h2>
                <p>Tôi nghĩ bạn đang "lạc lối"...</p>
                <p><small>Xin lỗi, chúng tôi không thể tìm thấy các trang web mà bạn đang tìm kiếm. Vui lòng kiểm tra lại.</small></p>
                <a 
                onclick="goBack()"
                 class="button"> 
                    Quay lại
                </a>
            </div>
        </div>
    </body>

    <script>
    function goBack() {
        window.history.back();
    }
    </script>


</html> 
