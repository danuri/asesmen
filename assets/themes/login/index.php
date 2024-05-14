<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=$nama_app;?> | <?=$slogan_app;?></title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	
    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="<?php echo base_url() . "assets/themes/azminlogin/bootstrap/css/bootstrap.min.css" ?>">
    <link rel="stylesheet" href="<?php echo base_url() . "assets/themes/azminlogin/font-awesome/css/font-awesome.min.css"?>">
	<link rel="stylesheet" href="<?php echo base_url() . "assets/themes/azminlogin/css/form-elements.css"?>">
    <link rel="stylesheet" href="<?php echo base_url() . "assets/themes/azminlogin/css/style.css"?>">
	
    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="<?=base_url();?>assets/media/upload/bawaan/logo_bkkbn.png" type="image/x-icon" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url() . "assets/themes/azminlogin/ico/apple-touch-icon-144-precomposed.png"?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url() . "assets/themes/azminlogin/ico/apple-touch-icon-114-precomposed.png"?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url() . "assets/themes/azminlogin/ico/apple-touch-icon-72-precomposed.png"?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url() . "assets/themes/azminlogin/ico/apple-touch-icon-57-precomposed.png"?>">

	<style>
	.saru{padding-top:40px;display:none;margin-top:4px;}
	</style>
	
	</head>

    <body>

        <!-- Top content -->
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Assessment</strong> Center</h1>
                            <div class="description">
                            	<p>
	                            	All Rights Reserved || whaddupsap&trade; Copyright © 2023
                            	</p>
                            </div>
							                        
						</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Login to our site</h3>
                            		<p>Enter your Username & Password :</p>
                        		</div>
                        		<div class="form-top-right">
                        			<img src="<?=base_url($logo_app);?>" style='width:80px; vertical-align:middle;'>
                        		</div>
                            </div>
							<!-- action script -->
							<div class="form-bottom">
								<form role="form" id="loginForm" accept-charset="utf-8" method="post" class="login-form">
								<div class="row saru">
									<div class="col-lg-12">
									 <input class="form-control" placeholder="Username"  name="user_name" autofocus value="">
									 <input class="form-control" placeholder="Password"  name="user_password" value="">
									 <input class="form-control" name="ind" value="<?=$ind;?>">
									 <input class="form-control" name="ccn" value="<?=$ccn;?>">
									</div><!--col-lg-12// -->
								</div><!--row//-->
										<div class="form-group">
											<label class="sr-only" for="form-username">Username</label>
											<input type="text" class="form-control" placeholder="Username"  name="ibuku_sayang" value="">
										</div>
										<div class="form-group">
											<label class="sr-only" for="form-password">Password</label>
											<input class="form-control" placeholder="Password" name="sendok" type="password" value="">
										</div>
										<!-- Change this to a button or input when using this as a form -->
										<div class="form-bottom-left">
											<button type="submit" class="btn" name="Submit" id="Submit" onclick="kirim(); return false;">Login</button>
										</div>
								</form>
								<div id="responceArea"></div>
							</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                        	<div class="social-login-buttons">
	                        	<a class="btn btn-link-2" href="<?php echo site_url('registrasi');?>">
	                        		<i class="fa fa-home"></i>   Registrasi Pra-Assessment
	                        	</a>
                        	</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
		
    <!-- Javascript -->
    <script src="<?php echo base_url() . "assets/themes/azminlogin/js/jquery-1.11.1.min.js"?>"></script>
    <script src="<?php echo base_url() . "assets/themes/azminlogin/bootstrap/js/bootstrap.min.js"?>"></script>
    <script src="<?php echo base_url() . "assets/themes/azminlogin/js/jquery.backstretch.min.js"?>"></script>
    <script src="<?php echo base_url() . "assets/themes/azminlogin/js/scripts.js"?>"></script>
	
    <script>
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
								msg += '<div class="error" style="color:#fff;"><strong>Pesan Kesalahan</strong><ol><li>Pastikan username dan password anda benar-benar valid</li><li>'+content.message+'</li></ol></div></div>';
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

</body>

</html>