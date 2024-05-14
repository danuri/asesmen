<?php

$files = array();
	$li = '';
	if(count($files)>0){
		$urut = 1;
		for($i=1; $i < count($files); $i++){		
		
			if($i==1){
				$li .= '<li class="i">
							<img src="pages/'.$urut.'-thumb.jpg" width="100%" height="100%" class="page-'.$urut.'">
							<span>'.$urut.'</span>
						</li>';		
			}
			
			if($i > 1 && $urut < (count($files))){
				$kiri = $urut;
				$kanan = $kiri+1;
				$li .= '<li class="d">
							<img src="pages/'.$kiri.'-thumb.jpg" width="100%" height="100%" class="page-'.$kiri.'">
							<img src="pages/'.$kanan.'-thumb.jpg" width="100%" height="100%" class="page-'.$kanan.'">
							<span>'.$kiri.'-'.$kanan.'</span>
						</li>';
						
					$urut++;							
			}
								
			if($urut==(count($files)+1)){
			
				$li .= '<li class="i">
							<img src="pages/'.($urut-1).'-thumb.jpg" width="100%" height="100%" class="page-'.($urut-1).'">
							<span>'.($urut-1).'</span>
						</li>';			
			}
			
			$urut++;
			
			if($urut > (count($files)+1)){
				break;
			}			
		}			
	
	}
	
//echo $li;
//exit();

?>

<head>
<title>ASSESSMENT CENTER | BKPSDM KAB. KARAWANG </title>
	<link rel="shortcut icon" href="<?=base_url();?>assets/media/upload/bawaan/favicon.png" type="image/x-icon" />
<meta name="viewport" content="width = 1050, user-scalable = no" />

    <!-- Megazine -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/themes/adminlte/arsip/extras/jquery.min.1.7.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/themes/adminlte/arsip/extras/modernizr.2.5.3.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/themes/adminlte/arsip/lib/hash.js"></script>
	
	<link rel="stylesheet" href="<?php echo base_url();?>assets/themes/adminlte/arsip/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/themes/adminlte/arsip/css/font-awesome.min.css">
	
</head>

<body>
<div class="menu-top">
    <ul>
        <li a="" href=""></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
	  
        <li><a onclick="$('.magazine').turn('previous')" class="fa fa-arrow-left fa-2x"></a></li>
        <li><a onclick="$('.magazine').turn('next')" class="fa fa-arrow-right fa-2x"></a></li>
         <li><a onclick="$('.magazine-viewport').zoom('zoomOut')" class="fa fa-search-minus fa-2x zoom-in"></a></li>
         <li><a onclick="$('.magazine-viewport').zoom('zoomIn')" class="fa fa-search-plus fa-2x zoom-in"></a></li>
        <li><a href="javascript:alert('dalam pengembangan..');" class="fa fa-download fa-2x zoom-in"></a></li>
      <li><a href="javascript:close_window();" class="fa fa-close fa-2x"></a></li>    
    </ul>
</div>     
     

<div id="canvas">
	<div class="zoom-icon zoom-icon-in"></div>
    <div class="magazine-viewport">
        <div class="container">
            <div class="magazine">
			<?php foreach ($dokumen->result() as $key) { ?>
				<div>
				    <div>
				        <img src="<?php echo base_url();?><?php echo $key->path_folder;?>/<?php echo $key->judul_appe;?>" style="width:100%; height:100%; align:center;" >
				    </div>
				</div>
			<?php } ?>
                <div ignore="1" class="next-button"></div>
                <div ignore="1" class="previous-button"></div>
            </div>
        </div>
    </div>

    <div class="thumbnails">       
        <ul>
         <?=$li;?>        
      
        </ul>       
    </div>
</div>

<script type="text/javascript">

function loadApp() {

 	$('#canvas').fadeIn(1000);

 	var flipbook = $('.magazine');

 	// Check if the CSS was already loaded
	
	if (flipbook.width()==0 || flipbook.height()==0) {
		setTimeout(loadApp, 10);
		return;
	}
	
	// Create the flipbook

	flipbook.turn({
			
			// Magazine width

			width: 922,

			// Magazine height

			height: 600,

			// Duration in millisecond

			duration: 1000,

			// Hardware acceleration

			acceleration: !isChrome(),

			// Enables gradients

			gradients: true,
			
			// Auto center this flipbook

			autoCenter: true,

			// Elevation from the edge of the flipbook when turning a page

			elevation: 50,

			// The number of pages

			pages: <?=( (count($files) % 2 == 0) ? count($files) : (count($files)-1) );?>,

			// Events

			when: {
				turning: function(event, page, view) {
					
					var book = $(this),
					currentPage = book.turn('page'),
					pages = book.turn('pages');
			
					// Update the current URI

					Hash.go('page/' + page).update();

					// Show and hide navigation buttons

					disableControls(page);
					

					$('.thumbnails .page-'+currentPage).
						parent().
						removeClass('current');

					$('.thumbnails .page-'+page).
						parent().
						addClass('current');



				},

				turned: function(event, page, view) {

					disableControls(page);

					$(this).turn('center');

					if (page==1) { 
						$(this).turn('peel', 'br');
					}

				},

				missing: function (event, pages) {

					// Add pages that aren't in the magazine

					for (var i = 0; i < pages.length; i++)
						addPage(pages[i], $(this));

				}
			}

	});

	// Zoom.js

	$('.magazine-viewport').zoom({
		flipbook: $('.magazine'),

		max: function() { 
			
			return largeMagazineWidth()/$('.magazine').width();

		}, 

		when: {

			swipeLeft: function() {

				$(this).zoom('flipbook').turn('next');

			},

			swipeRight: function() {
				
				$(this).zoom('flipbook').turn('previous');

			},

			resize: function(event, scale, page, pageElement) {

				if (scale==1)
					loadSmallPage(page, pageElement);
				else
					loadLargePage(page, pageElement);

			},

			zoomIn: function () {

				$('.thumbnails').hide();
				$('.made').hide();
				$('.magazine').removeClass('animated').addClass('zoom-in');
				$('.zoom-icon').removeClass('zoom-icon-in').addClass('zoom-icon-out');
				
				if (!window.escTip && !$.isTouch) {
					escTip = true;

					$('<div />', {'class': 'exit-message'}).
						html('<div>Press ESC to exit</div>').
							appendTo($('body')).
							delay(2000).
							animate({opacity:0}, 500, function() {
								$(this).remove();
							});
				}
			},

			zoomOut: function () {

				$('.exit-message').hide();
				$('.thumbnails').fadeIn();
				$('.made').fadeIn();
				$('.zoom-icon').removeClass('zoom-icon-out').addClass('zoom-icon-in');

				setTimeout(function(){
					$('.magazine').addClass('animated').removeClass('zoom-in');
					resizeViewport();
				}, 0);

			}
		}
	});

	// Zoom event

	if ($.isTouch)
		$('.magazine-viewport').bind('zoom.doubleTap', zoomTo);
	else
		$('.magazine-viewport').bind('zoom.tap', zoomTo);


	// Using arrow keys to turn the page

	$(document).keydown(function(e){

		var previous = 37, next = 39, esc = 27;

		switch (e.keyCode) {
			case previous:

				// left arrow
				$('.magazine').turn('previous');
				e.preventDefault();

			break;
			case next:

				//right arrow
				$('.magazine').turn('next');
				e.preventDefault();

			break;
			case esc:
				
				$('.magazine-viewport').zoom('zoomOut');	
				e.preventDefault();

			break;
		}
	});

	// URIs - Format #/page/1 

	Hash.on('^page\/([0-9]*)$', {
		yep: function(path, parts) {
			var page = parts[1];

			if (page!==undefined) {
				if ($('.magazine').turn('is'))
					$('.magazine').turn('page', page);
			}

		},
		nop: function(path) {

			if ($('.magazine').turn('is'))
				$('.magazine').turn('page', 1);
		}
	});


	$(window).resize(function() {
		resizeViewport();
	}).bind('orientationchange', function() {
		resizeViewport();
	});

	// Events for thumbnails

	$('.thumbnails').click(function(event) {
		
		var page;

		if (event.target && (page=/page-([0-9]+)/.exec($(event.target).attr('class'))) ) {
		
			$('.magazine').turn('page', page[1]);
		}
	});

	$('.thumbnails li').
		bind($.mouseEvents.over, function() {
			
			$(this).addClass('thumb-hover');

		}).bind($.mouseEvents.out, function() {
			
			$(this).removeClass('thumb-hover');

		});

	if ($.isTouch) {
	
		$('.thumbnails').
			addClass('thumbanils-touch').
			bind($.mouseEvents.move, function(event) {
				event.preventDefault();
			});

	} else {

		$('.thumbnails ul').mouseover(function() {

			$('.thumbnails').addClass('thumbnails-hover');

		}).mousedown(function() {

			return false;

		}).mouseout(function() {

			$('.thumbnails').removeClass('thumbnails-hover');

		});

	}


	// Regions

	if ($.isTouch) {
		$('.magazine').bind('touchstart', regionClick);
	} else {
		$('.magazine').click(regionClick);
	}

	// Events for the next button

	$('.next-button').bind($.mouseEvents.over, function() {
		
		$(this).addClass('next-button-hover');

	}).bind($.mouseEvents.out, function() {
		
		$(this).removeClass('next-button-hover');

	}).bind($.mouseEvents.down, function() {
		
		$(this).addClass('next-button-down');

	}).bind($.mouseEvents.up, function() {
		
		$(this).removeClass('next-button-down');

	}).click(function() {
		
		$('.magazine').turn('next');

	});

	// Events for the next button
	
	$('.previous-button').bind($.mouseEvents.over, function() {
		
		$(this).addClass('previous-button-hover');

	}).bind($.mouseEvents.out, function() {
		
		$(this).removeClass('previous-button-hover');

	}).bind($.mouseEvents.down, function() {
		
		$(this).addClass('previous-button-down');

	}).bind($.mouseEvents.up, function() {
		
		$(this).removeClass('previous-button-down');

	}).click(function() {
		
		$('.magazine').turn('previous');

	});


	resizeViewport();

	$('.magazine').addClass('animated');

}

// Zoom icon

 $('.zoom-icon').bind('mouseover', function() { 
 	
 	if ($(this).hasClass('zoom-icon-in'))
 		$(this).addClass('zoom-icon-in-hover');

 	if ($(this).hasClass('zoom-icon-out'))
 		$(this).addClass('zoom-icon-out-hover');
 
 }).bind('mouseout', function() { 
 	
 	 if ($(this).hasClass('zoom-icon-in'))
 		$(this).removeClass('zoom-icon-in-hover');
 	
 	if ($(this).hasClass('zoom-icon-out'))
 		$(this).removeClass('zoom-icon-out-hover');

 }).bind('click', function() {

 	if ($(this).hasClass('zoom-icon-in'))
 		$('.magazine-viewport').zoom('zoomIn');
 	else if ($(this).hasClass('zoom-icon-out'))	
		$('.magazine-viewport').zoom('zoomOut');

 });

 $('#canvas').hide();


// Load the HTML4 version if there's not CSS transform

yepnope({
	test : Modernizr.csstransforms,
	test : Modernizr.csstransforms,
	yep: ['<?php echo base_url();?>assets/themes/adminlte/arsip/lib/turn.js'],
	nope: ['<?php echo base_url();?>assets/themes/adminlte/arsip/lib/turn.html4.min.js'],
	both: ['<?php echo base_url();?>assets/themes/adminlte/arsip/lib/zoom.min.js', '<?php echo base_url();?>assets/themes/adminlte/arsip/js/magazine.js', '<?php echo base_url();?>assets/themes/adminlte/arsip/css/magazine.css'],
	complete: loadApp
});

function close_window() {
  if (confirm("Close Window?")) {
    close();
  }
}

</script>

<style>
body {
	background:#dadcce66;
	/*background-image:url(<?=base_url('assets/themes/adminlte/arsip/css/bg.jpg');?>);*/
}
.menu-top {
	position:fixed;
	top:10px;
	z-index:100;
	width:50%;
	height:40px;
}

.menu-top ul {

}

.menu-top ul li {
	float:left;
	list-style:none;
	margin-right:30px;
}
.menu-top ul li a:hover {
	text-decoration:none;
	cursor:pointer;
}
</style>
</body>
</html>