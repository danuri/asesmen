<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=$nama;?> - <?=$slogan;?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
    <!-- Bootstrap Core CSS -->
	
	
    <link rel="shortcut icon" href="<?=base_url();?>assets/media/upload/bawaan/logo_ktng.gif" type="image/x-icon" />
    <link href="<?=base_url('assets/css/klasik.css');?>" rel="stylesheet">
    <link href="<?=base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
	<link href="<?=base_url('assets/themes/cat_master/css/style.css'); ?>" rel="stylesheet">
    <link href="<?=base_url('assets/css/font-awesome/font-awesome-4.4.0/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">

    <!-- jQuery Version 1.11.0 -->
	<script type="text/javascript" src="<?=base_url('assets/js/jquery/jquery-1.11.0.min.js');?>"></script>
    <!-- Bootstrap Core JavaScript -->
	<script type="text/javascript" src="<?=base_url('assets/js/bootstrap.min.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/js/bootstrap-timeout/bootstrap-session-timeout.min.js');?>"></script>
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script type = "text/javascript" >
function preventBack(){window.history.forward();}
setTimeout("preventBack()", 0);
window.onunload=function(){null};
</script>	



<style>
.page-header {	padding-top:5px; margin-top:5px;	}

.jamServer {
    position: relative;
    display: flex;
    width: 100%;
    height: 50px;
    justify-content: center;
    align-items: center;
    background-color: #ffa500;
    z-index: 1;
    font-size: 25px;
	border-radius: 20px 20px 20px 20px;
	
}

</style>
</head>
<body>

<nav class="navbar navbar-findcond navbar-fixed-top">
    <div class="container">
    <div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<div style="float:left;padding:5px 10px 0px 0px;"><img src="<?=base_url().$logo;?>" style='width:60px; vertical-align:middle;'></div>
		<span class="navbar-brand"><?=$gr->sub_judul;?><br/>ASSESSMENT CENTER</span>
	</div>
				<div class="collapse navbar-collapse" id="navbar">
				  <ul class="nav navbar-nav navbar-right"><?=$notif;?></ul>
				</div>
  </div>
</nav>

<div class="container">

<div class="row" style="margin-top: 40px;">
	<div class="col-lg-12">
		<div class="panel-body" style="padding:1px;">
			<div class="row">
				<div class="col-lg-8">
					<div class="panel panel-default" style="margin-top:40px;">
						<div class="panel-heading">
						<i class="glyphicon glyphicon-bookmark"></i>&nbsp;	Selamat datang di Aplikasi CAT Assessment Center BKKBN Vers.1.0.1
						</div>
						<div class="panel-body">
						<?php recSidebar($sidebar,$actt); ?> <a href="<?=site_url('login/out');?>" class="btn btn-sq btn-danger"><i class="fa fa-sign-out fa-5x"></i><br><br/>Keluar</a>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4">
					<div class="panel panel-default" style="margin-top:40px;">
						<div class="panel-heading">
							<i class="glyphicon glyphicon-time"></i>&nbsp; Waktu Server
						<div style="float:right; color: #fff;text-align:center;font-size:15px;">  
							<?php
							date_default_timezone_set('Asia/Jakarta');
							$hh = array(); $hh['Sun']="Minggu"; $hh['Mon']="Senin"; $hh['Tue']="Selasa"; $hh['Wed']="Rabu"; $hh['Thu']="Kamis"; $hh['Fri']="Jum'at"; $hh['Sat']="Sabtu";?>
							<?=$hh[date('D')];?>, <?=date('d-m-Y');?>
						</div>
						</div>
						<div class="panel-body">
						<div class="jamServer">
							<div><?php echo date('H:i:s');?></div>
						</div>						
						<p style="color:#e94410;font-size:11px;text-align:center;margin: 20px 0 15px;">Pastikan Jam pada Laptop/PC Sesuai dengan Waktu Server..!!!</p>
						</div>
					</div>
				</div>
				
				<!--
				<div class="col-lg-4">
					<div class="panel panel-default" style="margin-top:40px;">
						<div class="panel-heading">
							<i class="glyphicon glyphicon-camera"></i>&nbsp; Aktif Kamera
						</div>
						<div class="panel-body">
							<video autoplay="true" id="video-webcam" style="width:100%;height:96px;">
								Browsermu tidak mendukung bro, upgrade donk!
							</video>
						</div>
					</div>
				</div>
				-->
			</div>
		</div>
	</div>
</div>
		

<div class="row">
	<div class="col-md-12">
        <div><?=$konten;?></div>
	</div>
</div>

<div class="col-md-12" style="border-top: solid 4px #ddd; text-align: center; padding-top: 10px; margin-top: 50px; margin-bottom: 20px; background: #1068b7; color:#fff;">
	&copy; 2023 - <?=$gr->judul_app;?>
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  '<strong>whaddupsap&trade;': '' ?></p>
</div>


</div><!--/.container-->


<?php
function recSidebar($nav,$akv) {
    foreach ($nav as $key=>$val) {
		$cActt = ($akv==$val->id_menu)?"warning":"primary";
		if(isset($val->anak)){
			echo '<span class="dropdown"><button class="btn btn-sq btn-'.$cActt.' dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-'.$val->icon_menu.' fa-5x"></i><br><br/>'.$val->nama_menu.' </button>';
			echo '<ul class="dropdown-menu" role="menu">';
			foreach($val->anak AS $key2=>$val2){
				echo '<li role="presentation"><a role="menuitem" tabindex="-1" style="cursor:pointer;" href="'.site_url().$val2->path_menu.'" disabled><i class="fa fa-'.$val2->icon_menu.' fa-fw"></i> '.$val2->nama_menu.'</a></li>';
			}
			echo '</ul></span>';
		} else {
			echo '<a href="'.site_url().$val->path_menu.'" class="btn btn-sq btn-'.$cActt.'" disabled><i class="fa fa-'.$val->icon_menu.' fa-5x"></i><br><br/>'.$val->nama_menu.' </a>';
		} // end anak
    } // end foreach
} // end recKanal
?>
<form id="pindah" method="post"></form>
</body>
</html>
<script type="text/javascript">
function pindah_ke(app){
	$.ajax({
		type:"POST",
		url:"<?=site_url();?>admin/pindah",
		success:function(data){	
			$('#pindah').attr('action','<?=site_url();?>sso');
			var tab = '<input type="hidden" name="idd" value="'+data+'">';
			tab = tab+'<input type="hidden" name="app" value="'+app+'">';
			$('#pindah').html(tab).submit();
		}, // end success
	    dataType:"html"});
}
    $.sessionTimeout({
        keepAliveUrl: '<?=base_url();?>assets/js/bootstrap-timeout/examples/lanjutkan.html',
        logoutUrl: '<?=site_url();?>login/out',
        redirUrl: '<?=site_url();?>login/out',
        warnAfter: <?=(!isset($gr->alertafter))?40000:$gr->alertafter;?>,
        redirAfter: <?=(!isset($gr->logoutafter))?60000:($gr->alertafter+$gr->logoutafter);?>
    });

/*	
    // seleksi elemen video
    var video = document.querySelector("#video-webcam");

    // minta izin user
    navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia || navigator.oGetUserMedia;

    // jika user memberikan izin
    if (navigator.getUserMedia) {
        // jalankan fungsi handleVideo, dan videoError jika izin ditolak
        navigator.getUserMedia({ video: true }, handleVideo, videoError);
    }

    // fungsi ini akan dieksekusi jika  izin telah diberikan
    function handleVideo(stream) {
        video.srcObject = stream;
    }

    // fungsi ini akan dieksekusi kalau user menolak izin
    function videoError(e) {
        // do something
        alert("Izinkan menggunakan webcam untuk ujian!")
    }
*/
	
var serverClock = jQuery(".jamServer");
if (serverClock.length > 0) {
    showServerTime(serverClock, serverClock.text());
}
  
function showServerTime(obj, time) {
    var parts   = time.split(":"),
        newTime = new Date();
		 
    newTime.setHours(parseInt(parts[0], 10));
    newTime.setMinutes(parseInt(parts[1], 10));
    newTime.setSeconds(parseInt(parts[2], 10));
 
    var timeDifference  = new Date().getTime() - newTime.getTime();
 
    var methods = { 
        displayTime: function () {
            var now = new Date(new Date().getTime() - timeDifference);
            obj.text([
                methods.leadZeros(now.getHours(), 2),
                methods.leadZeros(now.getMinutes(), 2),
                methods.leadZeros(now.getSeconds(), 2)
            ].join(":"));
            setTimeout(methods.displayTime, 500);
        },
  
        leadZeros: function (time, width) {
            while (String(time).length < width) {
                time = "0" + time;
            }
            return time;
        }
    }
    methods.displayTime();
}
	
</script>
