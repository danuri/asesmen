<!DOCTYPE html>
<html lang="en">
<head>
	<title><?=$nama_app;?> | <?=$slogan_app;?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, IE=edge">
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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . "assets/themes/Login_v1/css/lotus.css" ?>">
<!--===============================================================================================-->

	<style>
	.saru{padding-top:40px;display:none;margin-top:4px;}
	
		body {
			margin: 0;
			font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
			font-size: 1rem;
			font-weight: 400;
			line-height: 1.5;
			color: #212529;
			background-image: url("<?php echo base_url();?>assets/media/upload/bawaan/page_bg.jpg");\
			background-repeat: no-repeat, repeat;
			background-size: 1550px 800px ;
		}	
	
		a {
		  color:#05395a;
		}	
		a:hover {
		  color: #fff;
		}
	
	</style>

</head>
<body>
	<section class="h-100 gradient-form">
	  <div class="container py-5 h-100">
		<div class="row d-flex justify-content-center align-items-center h-100">
		  <div class="col-xl-10">
			<div class="card rounded-3 text-black">
			  <div class="row g-0">
				<div class="col-lg-6">
				  <div class="card-body p-md-5 mx-md-4">

					<div class="text-center">
					  <img src="<?php echo base_url();?>assets/media/upload/bawaan/log_bkkbn.png" style="width: 100%;" alt="logo">
					  <!--<h4 class="mt-1 mb-5 pb-1">We are The Lotus Team</h4>-->
					</div>
					<hr/>
					
					<form role="form" id="loginForm" accept-charset="utf-8" method="post" class="login100-form validate-form">
					  <p>Masukkan Login Akun Anda..</p>

					  <div class="form-outline mb-4 validate-input" data-validate = "Username must be actived">
						<input id="form2Example11" class="form-control" type="text" placeholder="Username"  name="ibuku_sayang" value="">
						
							<div class="row saru">
								<div class="col-lg-12">
								 <input class="form-control" placeholder="Username"  name="user_name" autofocus value="">
								 <input class="form-control" placeholder="Password"  name="user_password" value="">
								 <input class="form-control" name="ind" value="<?=$ind;?>">
								 <input class="form-control" name="ccn" value="<?=$ccn;?>">
								</div>
							</div>
						
					  </div>

					  <div class="form-outline mb-4 validate-input" data-validate = "Password is required">
						<input id="form2Example22" class="form-control" type="password" placeholder="Password" name="sendok" value="">
						
					  </div>

					  <div class="text-center pt-1 mb-5 pb-1">
						<button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button" name="Submit" id="Submit" onclick="kirim(); return false;">Log
						  in</button>
						<!--<a class="text-muted" href="#!">Forgot password?</a>-->
						<div id="responceArea"></div>
					  </div>
					  
					  <div style="text-align:center;font-size:0.6em;color:#80ab37;font-weight:bold;">
						<p>Jika Anda belum Memiliki Akun, Silahkan Cek Status Registrasi</p>
					  </div>
					  <div class="d-flex align-items-center justify-content-center pb-4">
						<button type="button" class="btn btn-outline-danger"><a href="<?php echo site_url();?>registrasi" style="text-decoration:none;">Registrasi Pra-Assessment</a></button>
					  </div>
						
					</form>

				  </div>
				</div>
				<div class="col-lg-6 d-flex align-items-center gradient-custom-2">
				  <div class="text-white px-3 py-4 p-md-5 mx-md-4">
					<h4 class="mb-4" style="font-size: 2.5em;text-align:center;">Informasi Login</h4>
					<p class="small mb-0" style="font-size: 1em;text-align:justify;">Masukkan Nomor Induk Pegawai (NIP) sebagai username anda dan Password sesuai dengan yang telah diberikan.</p>
					<p style="text-align:center;margin-top:50px;">&copy; 2023 - whaddupsap&trade; <br> All Rights Reserved. <br/> Page rendered in <strong>{elapsed_time}</strong> seconds</p>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</section>	
	
	
	
	<script src="<?php echo base_url() . "assets/themes/Login_v1/vendor/jquery/jquery-3.2.1.min.js" ?>"></script>
	<script src="<?php echo base_url() . "assets/themes/Login_v1/vendor/bootstrap/js/popper.js" ?>"></script>
	<script src="<?php echo base_url() . "assets/themes/Login_v1/vendor/bootstrap/js/bootstrap.min.js" ?>"></script>
	<script src="<?php echo base_url() . "assets/themes/Login_v1/vendor/select2/select2.min.js" ?>"></script>
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
								msg += '<div class="error" style="color:#d20b0b;text-align:justify;font-size:12px;position:relative;padding-top:5px;"><strong>Pesan Kesalahan :</strong><ol><li>Pastikan username dan password anda benar</li><li>Pastikan Anda Sudah Melakukan Registrasi</li><li>'+content.message+'</li></ol></div></div>';
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
	<script src="<?php echo base_url() . "assets/themes/Login_v1/js/main.js" ?>"></script>

</body>
</html>