<?php 
    $themes =  Yii::app()->request->baseUrl."/themes/quangminh/" ; 
    $roots =  Yii::app()->request->baseUrl;
?>
<!-- ======= Banner ======= -->
    <section class="p0 container-fluid banner about_banner">
      <div class="about_banner_opacity">
        <div class="container">
          <div class="banner_info_about">
            <h1> Liên hệ </h1>
            <ul>
              <li><a href="index.html">Trang chủ</a></li>
              <li><i class="fa fa-angle-right"></i></li>
              <li>Liên hệ </li>
            </ul>
            
          </div> <!-- End Banner Info -->
        </div> <!-- End Container -->
      </div> <!-- End Banner_opacity -->
    </section> <!-- End Banner -->
<!-- ======= /Banner ======= -->



<!-- =================== Contact us container ============== -->
    <section class="contact_us_container" style="margin-bottom: 50px">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center;"> <!-- section title -->
            <h2>Liên hệ với chúng tôi</h2>
            <p>Với tôn chỉ “Chuyên nghiệp - Vì quyền lợi khách hàng ”,chúng tôi sẽ hỗ trợ và sát cánh cùng quý khách khi thực hiện công việc, chúng tôi luôn bám sát các qui định của luật pháp hiện hành, các chuẩn mực đạo đức nghề nghiệp, các qui định và quy trình nội bộ được áp dụng để hướng đến mục tiêu bảo vệ tốt nhất quyền lợi của quý khách hàng.</p>
          </div> <!-- End section title -->
          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 form_holder"> <!-- form holder -->
            <form action="includes/sendemail.php" class="contact-form">
              <input class="form-control name" type="text" name="name" placeholder="Tên khách hàng">
              <input class="form-control email" type="email" name="email" placeholder=" Email">
                <input class="form-control" type="text" name="subject" placeholder="Tiêu đề">
                <textarea name="message" placeholder="Message"></textarea>
                <button type="submit" class="submit">Gửi<i class="fa fa-arrow-circle-right"></i></button>
            </form> <!-- End form holder -->
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-right address">
            <address>
              <div class="icon_holder float_left"><span class="icon icon-Pointer"></span></div>
              <div class="address_holder float_left">1305 Nguyễn Oanh <br> P.2 , Quận Gò Vấp,   <br> TP. Hồ Chí Minh</div>
            </address>
            <address class="clear_fix">
              <div class="icon_holder float_left"><span class="icon icon-Plaine"></span></div>
              <div class="address_holder float_left">oanhnguyen1910@gmail.com <br>  info@dichvuketoanquangminh.com</div>
            </address>
            <address class="clear_fix">
              <div class="icon_holder float_left"><span class="icon icon-Phone2"></span></div>
              <div class="address_holder float_left">0964.744.757 </div>
            </address>
          </div>
        </div>
      </div>
    </section>

<!-- =================== /Contact us container ============== -->