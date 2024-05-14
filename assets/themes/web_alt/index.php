<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title><?=$nama_app;?> | <?=$slogan_app;?></title>

	<link rel="shortcut icon" href="<?=base_url();?>assets/media/logo_kanal/<?=$favicon_app;?>" type="image/x-icon" />
    <!-- Bootstrap core CSS -->
    <link href="<?=base_url('assets/themes/web/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?=base_url('assets/themes/web/css/fontawesome.css');?>">
    <link rel="stylesheet" href="<?=base_url('assets/themes/web/css/templatemo-edu-meeting.css');?>">
    <link rel="stylesheet" href="<?=base_url('assets/themes/web/css/owl.css');?>">
    <link rel="stylesheet" href="<?=base_url('assets/themes/web/css/lightbox.css');?>">
</head>
<body>

<div class="sub-header">
<?php echo $cHeader; ?>
</div>

<header class="header-area header-sticky">
<?php echo $cNav; ?>
</header>

  <section class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>Get all details</h6>
          <h2>Online Teaching and Learning Tools</h2>
        </div>
      </div>
    </div>
  </section>

<?php echo $cTop;?>
<section class="meetings-page" id="meetings">
<div class="container">
	<div class="row">
		<div class="col-lg-12 pull-right">
			<?=$cMain;?>
		</div>
	</div>
</div>
		<!--
		<div class="col-lg-4 pull-left">
			<?//=$cSide;?>
		</div>
		-->


<?php echo $cFooter;?>
</section>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="<?=base_url('assets/themes/web/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?=base_url('assets/themes/web/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

    <script src="<?=base_url('assets/themes/web/js/isotope.min.js');?>"></script>
    <script src="<?=base_url('assets/themes/web/js/owl-carousel.js');?>"></script>
    <script src="<?=base_url('assets/themes/web/js/lightbox.js');?>"></script>
    <script src="<?=base_url('assets/themes/web/js/tabs.js');?>"></script>
    <script src="<?=base_url('assets/themes/web/js/video.js');?>"></script>
    <script src="<?=base_url('assets/themes/web/js/slick-slider.js');?>"></script>
    <script src="<?=base_url('assets/themes/web/js/custom.js')?>"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>

</body>
</html>