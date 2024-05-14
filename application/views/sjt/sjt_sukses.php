<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" />

    <title>Assessment Center | BKPSDM Kota Tangerang</title>
	
	<link rel="shortcut icon" href="<?=base_url();?>assets/media/upload/bawaan/favicon_32x32.png" type="image/x-icon" />

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url('assets/themes/themereflux/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?=base_url('assets/themes/themereflux/assets/css/fontawesome.css');?>" />
    <link rel="stylesheet" href="<?=base_url('assets/themes/themereflux/assets/css/templatemo-style.css');?>" />
    <link rel="stylesheet" href="<?=base_url('assets/themes/themereflux/assets/css/owl.css');?>" />
    <link rel="stylesheet" href="<?=base_url('assets/themes/themereflux/assets/css/lightbox.css');?>" />
	

</head>

<body>
<div id="page-wraper">
    <div class="responsive-nav">
		<i class="fa fa-bars" id="menu-toggle"></i>
		<div id="menu" class="menu">
        <i class="fa fa-times" id="menu-close"></i>
			<div class="container">
					<div class="image">
						<a href="#"><img src="<?=base_url('assets/media/upload/bawaan/logo_ktng.gif');?>" alt="" /></a>
					</div>
				<div class="author-content">
				  <h4>UPT PENILAIAN KOMPETENSI</h4>
				  <span>BKPSDM KOTA TANGERANG</span>
				</div>
				
				<nav class="main-nav" role="navigation" style="margin-top:-10px;">
					<ul class="main-menu">
					<li><a href="#section1">Registrasi</a></li>
					</ul>
				</nav>
				<div class="social-network">
				  <ul class="soial-icons">
					<li>
					  <a href="#" onclick="location.href='<?php echo base_url();?>web'"><i class="fa fa-laptop"></i></a>
					</li>
					<li>
					  <a href="#" onclick="location.href='<?php echo base_url();?>login'"><i class="fa fa-android"></i></a>
					</li>
					<li>
					  <a href="#" onclick="location.href='<?php echo base_url();?>registrasi'"><i class="fa fa-pencil-square"></i></a>
					</li>
				  </ul>
				</div>
				<div class="copyright-text">
				  <p>All Rights Reserved <br/> 	EnG - pRakom11 @ 2022</p>
				</div>
			</div>
        </div>
    </div>
	  
<section class="section contact-me" data-section="section1">
    <div class="container">
        <div class="section-heading">
			<h2></h2>
			 <span></span>
        </div>
        <div class="registrasi">
			<h2 class="fs-title">T E R I M A  K A S I H <br/> Saudara telah mengisi Form Regitrasi Ujian Penilaian Kompetensi</h2>
			<h3 class="fs-subtitle">Pelaksanaan ujian Psikometri sesuai dengan jadwal Surat Perintah Tugas</h3>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<button class="" style="width:100%;" onclick="location.href='<?php echo base_url();?>web'"><i class="fa fa-home" aria-hidden="true"></i>&ensp; Halaman Utama</button>
					</div>
				</div>	
            </div>
        </div>
    </div>
</section>
<!-- end-->  	
</div>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="<?=base_url('assets/themes/themereflux/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?=base_url('assets/themes/themereflux/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

    <script src="<?=base_url('assets/themes/themereflux/assets/js/isotope.min.js');?>"></script>
    <script src="<?=base_url('assets/themes/themereflux/assets/js/owl-carousel.js');?>"></script>
    <script src="<?=base_url('assets/themes/themereflux/assets/js/lightbox.js');?>"></script>
    <script src="<?=base_url('assets/themes/themereflux/assets/js/custom.js');?>"></script>
    
	<script>
      //according to loftblog tut
      $(".main-menu li:first").addClass("active");

      var showSection = function showSection(section, isAnimate) {
        var direction = section.replace(/#/, ""),
          reqSection = $(".section").filter(
            '[data-section="' + direction + '"]'
          ),
          reqSectionPos = reqSection.offset().top - 0;

        if (isAnimate) {
          $("body, html").animate(
            {
              scrollTop: reqSectionPos
            },
            800
          );
        } else {
          $("body, html").scrollTop(reqSectionPos);
        }
      };

      var checkSection = function checkSection() {
        $(".section").each(function() {
          var $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
          if (topEdge < wScroll && bottomEdge > wScroll) {
            var currentId = $this.data("section"),
              reqLink = $("a").filter("[href*=\\#" + currentId + "]");
            reqLink
              .closest("li")
              .addClass("active")
              .siblings()
              .removeClass("active");
          }
        });
      };

      $(".main-menu").on("click", "a", function(e) {
        e.preventDefault();
        showSection($(this).attr("href"), true);
      });

      $(window).scroll(function() {
        checkSection();
      });
	  
    </script>
  </body>
</html>
