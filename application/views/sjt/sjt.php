<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

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

<style>
* {
  box-sizing: border-box;
  font-family: 'Lato', sans-serif;
}


#regForm {
  background-color: #ffffff00;
  font-family: 'Lato', sans-serif;
  width: 100%;
  min-width: auto;
}

.form-control {
    display: block;
    width: 100%;
    height: calc(2.25rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #ffffff;
    background-color: #fff0;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

input {
    display: block;
    width: 100%;
    height: calc(2.25rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #ffffff;
    background-color: #fff0;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

dropdown, select {
	display: block;
	padding: 15px;
	border: 1px solid #ccc;
	border-radius: 3px;
	margin-bottom: 10px;
	width: 100%;
	box-sizing: border-box;
	font-family: arial;
    background-color: rgba(250,250,250,0.1);
	color: #fff;
	font-size: 14px;
}

textarea {
    display: block;
    width: 100%;
    height: calc(2.25rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #ffffff;
    background-color: #fff0;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ece686;
}

textarea.invalid {
  background-color: #ece686;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #fafffd;
  color: #a43f49;
  border: none;
  padding: 10px 20px;
  font-size: 14pxpx;
  font-family: 'Lato', sans-serif;
  cursor: pointer;
  border-radius: 0.25rem;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #fafffd;
  color: #a43f49;
  border: none;
  padding: 10px 20px;
  font-size: 14pxpx;
  font-family: 'Lato', sans-serif;
  cursor: pointer;
  border-radius: 0.25rem;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #a43f49;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #fff;
}

.reg-item {
    margin-bottom: 10px;
    padding: 15px;
    background-color: rgba(250, 250, 250, 0.1);
}

.help-block {
  font-size: .8em;
  color: #7c7c7c;
  text-align: left;
  margin-bottom: .5em;
}


label {
    display: block;
    cursor: pointer;
	text-align: justify;
    text-indent: 10px;
}

label:hover {
    display: block;
    cursor: pointer;
	text-align: justify;
    text-indent: 10px;
	background-color: #5d7baa52;
	border-radius: 10px;
}

input[type="radio"] {
    -webkit-appearance: none;
    -moz-appearance:    none;
    appearance:         none;
    background: #aaa;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    border: solid 3px #dedede;
    top: 6px;
    cursor: pointer;
    margin-right: 5px;
	float: left;
}

input[type="radio"]:checked {
    background-color: #47c60e; 
    top: 6px; 
    left: 0; 
    width: 20px; 
    height: 20px;
    border-radius: 50%;  
    z-index: 999;
    border: none;
}

input[type="radio"]:focus {
    outline: none;
}  


</style>

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
					<li><a href="#section1">Situational Judge Test</a></li>
					</ul>
				</nav>
				<div class="social-network">
				  <ul class="soial-icons">
					<li><a href="#" onclick="location.href='<?php echo base_url();?>web'"><i class="fa fa-laptop"></i></a></li>
					<li><a href="#" onclick="location.href='<?php echo base_url();?>login'"><i class="fa fa-android"></i></a></li>
					<li><a href="#" onclick="location.href='<?php echo base_url();?>registrasi'"><i class="fa fa-pencil-square"></i></a></li>
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
			<h2>SITUATIONAL JUDGE TEST</h2>
			<div class="line-dec"></div>
			 <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br/> !! Gunakan Komputer/Laptop untuk tampilan yang lebih optimal !!</span>
        </div>
        <div class="row">
            <div class="col-md-12">
				<div class="right-content">
					<div class="container">
					<div class="reg-item ">
						<div class="tab">
							<h2 class="fs-title">Identitas Diri</h2><hr/>
							<div class="row">
								<div class="col-md-12">
									<form action="<?php echo site_url('sjt/cari');?>" method="get">
									<div class="row">
										<div class="col-md-8">
											<input type="text" name="cari" placeholder="Cari Data Pegawai..">
										</div>	
										<div class="col-md-4">
											<button type="submit">Cari</button>
										</form>
										</div>
									</div><hr/>
										<?php
										  if(count($pegawai)>0){
											$no = 1;
											foreach($pegawai as $k){?>
									<div class="row">
										<div class="col-md-6">
										<p class="help-block" style="color:#fff;">NIP</p>
										<input type="text" class="form-control" value="<?php echo $k->nip_baru; ?>" style="color:#000;" disabled>
										</div>
										<div class="col-md-6">
										<p class="help-block" style="color:#fff;">Pangkat / Gol. Ruang</p>
										<input type="text" class="form-control" value="<?php echo $k->nama_pangkat; ?>, <?php echo $k->nama_golongan; ?>" style="color:#000;" disabled>
										</div>
									</div>	
									<div class="row">
										<div class="col-md-6">
										<p class="help-block" style="color:#fff;">Nama</p>
										<input type="text" class="form-control" value="<?php echo $k->nama_pegawai; ?>" style="color:#000;" disabled>
										</div>
										<div class="col-md-6">
										<p class="help-block" style="color:#fff;">Jenis Jabatan</p>
										<input type="text" class="form-control" value="<?php echo $k->nama_ese; ?>" style="color:#000;" disabled>
										</div>
									</div>	
										<p class="help-block" style="color:#fff;">Jabatan</p>
										<input type="text" class="form-control" value="<?php echo $k->nomenklatur_jabatan; ?>" style="color:#000;" disabled>
										<p class="help-block" style="color:#fff;">Unit Kerja</p>
										<input type="text" class="form-control" value="<?php echo $k->nomenklatur_pada; ?>" style="color:#000;" disabled>
										<?php }}else{ ?>
										<p class="help-block" style="color:#fff;">NIP Tidak diketemukan (Masukan NIP atau Nama untuk pencarian data..!!)</p>
										<?php } ?>
								</div>
							</div>
						</div><hr/>
						
						<div class="tab">
							<div class="row">
								<div class="col-md-12">
										<h2 class="fs-title">Petunjuk Pengerjaan</h2><hr/>
								</div>
							</div>	
						</div>
								
						<?php
							$koneksi = mysqli_connect('172.16.9.31', 'userdb_uptbkpsdm', 'br6pdx2hh2mdWs4yjdy$#!', 'db_web_uptbkpsdm', 3306);
								$hasil  = mysqli_query($koneksi, "SELECT * FROM soal_sjt limit 15") or die(mysqli_error($koneksi));
								$no     = 1;
								while($data = mysqli_fetch_array($hasil)):
						?>		
						
						<div class="tab"><h2 class="fs-title">Soal Nomor : <?php echo $no++; ?></h2><hr/>
							<p style="text-align: justify;"><?php echo $data['soal_sjt']; ?></p><hr/>
							<div class="row">
								<div class="col-md-12">
								<label>
									<input type="radio" class="form-control" name="#" value="a" />
									<span><?php echo $data['opsi_a']; ?></span>
									</br>
								</label>
								<label>
									<input type="radio" class="form-control" name="#" value="b" />
									<span><?php echo $data['opsi_b']; ?></span>
									</br>
								</label>								
								<label>
									<input type="radio" class="form-control" name="#" value="c" />
									<span><?php echo $data['opsi_c']; ?></span>
									</br>
								</label>
								<label>
									<input type="radio" class="form-control" name="#" value="d" />
									<span><?php echo $data['opsi_d']; ?></span>
									</br>
								</label>								
								<label>
									<input type="radio" class="form-control" name="#" value="e" />
									<span><?php echo $data['opsi_e']; ?></span>
									</br>
								</label>								
								
								</div>
							</div>
						</div>
						
						<div style="text-align:center;margin-top:40px;">
							<span class="step" hidden></span>
							<span class="step" hidden></span>
							<span class="step" hidden></span>
						</div>
						<?php endwhile; ?>
						  <div style="overflow:auto;">
							<div style="float:right;">
							  <button type="button" id="prevBtn" name="prevBtn" onclick="nextPrev(-1)">Previous</button>
							  <button type="button" id="nextBtn" name="nextBtn" onclick="nextPrev(1)">Next</button>
							</div>
						  </div>
					</div>
					</div>
				</div>
			</div>
		</div>

</section>
</div>



</div>





<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}

//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".nextBtn").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'transform': 'scale('+scale+')'});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 100, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeOutQuint'
	});
});

$(".prevBtn").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 100, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeOutQuint'
	});
			
});

// simple radio - sets up shop

$('.simple-radio li').each(function(index) {
  if ($('input', this).prop('checked')) {
    $(this).addClass('checked');
  }
});

// simple radio - listen for click
$('.simple-radio li').click(function() {

  $('.simple-radio input').removeAttr('checked');
  $('input', this).attr('checked', 'checked');
  $('input', this).prop({
    checked: true
  });
  $('.simple-radio li').removeAttr('class');
  $(this).addClass('checked');

});




</script>

    <!-- ckeditor-->
    <script src="<?php echo base_url() ?>assets/js/plugins/ckeditor/ckeditor.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/ckeditor/adapters/jquery.js"></script>


</body>
</html>
