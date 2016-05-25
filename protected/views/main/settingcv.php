
<!-- Page header -->
<header class="page-header bg-img size-lg" style="background-image: url(<?php echo siteThemes(); ?>assets/img/bg-banner2.jpg)">
	<div class="container no-shadow">
		<h1 class="text-center">Cài đặt thông tin</h1>
		<p class="lead text-center">Cài đặt thông tin cho CV của bạn.</p>
	</div>
</header>
<!-- END Page header -->



<div id="tabs" class="tabs munual-setting">
	<nav>
		<ul>
			<li><a href="#GUI" class="icon-shop"><span>Giao diện</span></a></li>
			<li><a href="#section-2" class="icon-cup"><span>Drinks</span></a></li>
			<li><a href="#section-3" class="icon-food"><span>Food</span></a></li>
			<li><a href="#section-4" class="icon-lab"><span>Lab</span></a></li>
			<li><a href="#section-5" class="icon-truck"><span>Order</span></a></li>
		</ul>
	</nav>
	<div class="content">
		<section id="GUI">

			 <?php
           $this->widget('application.components.TemplateManager', array(
            'resumeid' => $resumeid,
            'userid' => $userid,
            'resume_infos' => $resume_infos
             )); 
           ?>       


		</section>
		<!-- END :: Section GUI -->

		<section id="section-2">
		
		</section>
		<section id="section-3">
		
		</section>
		<section id="section-4">
		
		</section>
		<section id="section-5">
		
		</section>
	</div><!-- /content -->
</div><!-- /tabs -->



