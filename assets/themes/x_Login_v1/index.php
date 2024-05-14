<!DOCTYPE html>
<html lang="en">
<head>
	<title><?=$nama_app;?> | <?=$slogan_app;?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?=base_url();?>assets/media/upload/bawaan/logo_bkkbn.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . "assets/themes/Login_v1/vendor/bootstrap/css/bootstrap.min.css" ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . "assets/themes/Login_v1/fonts/font-awesome-4.7.0/css/font-awesome.min.css" ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . "assets/themes/Login_v1/vendor/animate/animate.css" ?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . "assets/themes/Login_v1/vendor/css-hamburgers/hamburgers.min.css" ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . "assets/themes/Login_v1/vendor/select2/select2.min.css" ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . "assets/themes/Login_v1/css/util.css" ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . "assets/themes/Login_v1/css/main.css" ?>">
<!--===============================================================================================-->

	<style>
	.saru{padding-top:40px;display:none;margin-top:4px;}
	</style>

	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-FMPV1X42JB"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-FMPV1X42JB');
	</script>

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?=base_url('assets/media/upload/bawaan/login_bkkbn.png');?>" alt="IMG" style='width:100%; vertical-align:middle;'>
				</div>
				<form role="form" id="loginForm" accept-charset="utf-8" method="post" class="login100-form validate-form">
					<span class="login100-form-title">
						Assessment Center <br/><p> BADAN KEPENDUDUKAN DAN <br/> KELUARGA BERENCANA NASIONAL</p>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Username must be actived">
						<input class="input100" type="text" placeholder="Username"  name="ibuku_sayang" value="">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
							
								<div class="row saru">
									<div class="col-lg-12">
									 <input class="form-control" placeholder="Username"  name="user_name" autofocus value="">
									 <input class="form-control" placeholder="Password"  name="user_password" value="">
									 <input class="form-control" name="ind" value="<?=$ind;?>">
									 <input class="form-control" name="ccn" value="<?=$ccn;?>">
									</div><!--col-lg-12// -->
								</div><!--row//-->
							
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" placeholder="Password" name="sendok" value="">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="Submit" id="Submit" onclick="kirim(); return false;">
							Login
						</button>
					</div>
					<div id="responceArea"></div>
					<!--
					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>
					-->
					<div class="text-center p-t-136">
						<a class="txt2" href="<?=site_url('registrasi');?>">
							Registrasi Pra-Assessment
							<br/>
							&copy; 2023 - whaddupsap&trade; || All Rights Reserved. <br/> Page rendered in <strong>{elapsed_time}</strong> seconds
						</a>
					</div>

				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="<?php echo base_url() . "assets/themes/Login_v1/vendor/jquery/jquery-3.2.1.min.js" ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() . "assets/themes/Login_v1/vendor/bootstrap/js/popper.js" ?>"></script>
	<script src="<?php echo base_url() . "assets/themes/Login_v1/vendor/bootstrap/js/bootstrap.min.js" ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() . "assets/themes/Login_v1/vendor/select2/select2.min.js" ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() . "assets/themes/Login_v1/vendor/tilt/tilt.jquery.min.js" ?>"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
		
		function kirim(){
				$.ajax({
				type:"POST",
				url:"<?=site_url();?>login/<?=$aksi;?>",
				data: $("#loginForm").serialize(),
				beforeSend:function(){	
					$("#Submit").hide();
					$('<div class="btn btn-lg btn-success btn-block" id="tunggu_jenis"><i class="fa fa-spinner fa-spin fa-1x"></i><div>').insertAfter('#Submit');
				},
				success:function(content){
							var msg;
							if(content.result == 'succes'){
								$("#tunggu_jenis").remove();
								location.href = '<?=site_url();?>'+content.section;
								msg = '<div id="notification">';
								msg += '<div class="error">'+content.message+'</div></div>';
							}else{
								$("#tunggu_jenis").remove();
								$("#Submit").show();
								msg = '<div id="notification">';
								msg += '<div class="error" style="color:#d20b0b;text-align:justify;font-size:12px;position:absolute;padding-top:5px;"><strong>Pesan Kesalahan :</strong><ol><li>Pastikan username dan password anda benar</li><li>'+content.message+'</li></ol></div></div>';
							}
							$('#responceArea').html(msg);
				},
				dataType:"json"});
		}
		function inith(){
			 if("<?=$sesi;?>"){
					location.href = '<?=site_url();?>' + '<?=$sesi;?>';
					$('#Submit').hide();
			 }
		}
		$(document).ready(function() {  
			inith();
		});
		
		
		
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url() . "assets/themes/Login_v1/js/main.js" ?>"></script>

</body>
</html>