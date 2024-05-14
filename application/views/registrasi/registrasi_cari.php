<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" />

    <title>Assessment Center | BKKBN</title>
	
    <link rel="shortcut icon" href="<?=base_url();?>assets/media/upload/bawaan/logo_bkkbn.png" type="image/x-icon" />

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url('assets/themes/themereflux/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" />
    	
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?=base_url('assets/themes/themereflux/assets/css/fontawesome.css');?>" />
    <link rel="stylesheet" href="<?=base_url('assets/themes/themereflux/assets/css/templatemo-style.css');?>" />
    <link rel="stylesheet" href="<?=base_url('assets/themes/themereflux/assets/css/owl.css');?>" />
    <link rel="stylesheet" href="<?=base_url('assets/themes/themereflux/assets/css/lightbox.css');?>" />

<script type = "text/javascript" >
function preventBack(){window.history.forward();}
setTimeout("preventBack()", 0);
window.onunload=function(){null};
</script>	
	
</head>
	
	
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

</style>

<body>
<div id="page-wraper">
    <div class="responsive-nav">
		<i class="fa fa-bars" id="menu-toggle"></i>
		<div id="menu" class="menu">
        <i class="fa fa-times" id="menu-close"></i>
			<div class="container">
					<div class="image">
						<a href="#"><img src="<?=base_url('assets/media/upload/bawaan/logo_bkkbn.png');?>" alt="" /></a>
					</div>
				
				<div class="author-content">
				  <h4>ASSESSMENT CENTER</h4>
				  <span>Badan Kependudukan dan Keluarga Berencana Nasional</span>
				</div>
				
				<nav class="main-nav" role="navigation" style="margin-top:-10px;">
					<ul class="main-menu">
					<li><a href="#section1">Registrasi</a></li>
					<!--<li><a href="#">Portal Website</a></li>-->
					</ul>
				</nav>
				<div class="social-network">
				  <ul class="soial-icons">
					<li><a href="#" onclick="location.href='<?php echo base_url();?>login'"><i class="fa fa-android"></i></a></li>
					<li><a href="#" onclick="location.href='<?php echo base_url();?>registrasi'"><i class="fa fa-pencil-square"></i></a></li>
				  </ul>
				</div>
				<div class="copyright-text">
				  <p>All Rights Reserved <br/> 	whaddupsap&trade; @ 2023</p>
				</div>
			</div>
        </div>
    </div>
<section class="section contact-me" data-section="section1">
    <div class="container">
        <div class="section-heading">
			<h2>FORM PRA ASSESSMENT</h2>
			<div class="line-dec"></div>
			 <span>Ikuti petunjuk keterangan pengisian agar data saudara valid dan <br/>pastikan semua inputan terisi jika tidak berkenan berikan tanda garis datar atau strip (-). <br/> !! Gunakan Komputer/Laptop untuk tampilan yang lebih optimal !!</span>
        </div>
        <div class="row">
            <div class="col-md-12">
				<div class="right-content">
					<div class="container">
						  <!-- Circles which indicates the steps of the form: -->
						  <div style="text-align:center;margin-top:40px;">
							<span class="step"></span>
						  </div>
						<form id="regForm" action="<?php echo base_url('registrasi/search');?>" method="GET">
						<div class="reg-item ">
						<div class="tab">
							<div class="row">
								<div class="col-md-6">
									<input type="text" class="form-control" id="cari" name="cari" placeholder="Masukan NIP 18 Digit Tanpa Spasi..." oninput="this.className = ''">
								</div>
								<div class="col-md-6">
									<div style="overflow:auto;">
										<div style="float:left;">
										  <button type="button" id="prevBtn" name="prevBtn" onclick="nextPrev(-1)">Previous</button>
										  <button type="button" id="nextBtn" name="nextBtn" onclick="nextPrev(1)">Next</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						</div>  
						</form>
			
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
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
    document.getElementById("nextBtn").innerHTML = "Cari";
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
  y = x[currentTab].getElementsByTagName("input");
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

		//SIMPAN REGISTRASI
		$('#submit').on('click',function(){
			var id_reg 				=$('#id_reg').val();
			var nama 				=$('#nama').val();
			var nip 				=$('#nip').val();
			var gol 				=$('#gol').val();
			var jabatan 			=$('#jabatan').val();
			var unker 				=$('#unker').val();
			var jenped_awal 		=$('#jenped_awal').val();
			var jur_awal 			=$('#jur_awal').val();
			var univ_awal 			=$('#univ_awal').val();
			var thn_awal 			=$('#thn_awal').val();
			var jenpend_akhir 		=$('#jenpend_akhir').val();
			var jur_akhir 			=$('#jur_akhir').val();
			var univ_akhir 			=$('#univ_akhir').val();
			var thn_akhir 			=$('#thn_akhir').val();
			var jab_1 				=$('#jab_1').val();
			var unker_1 			=$('#unker_1').val();
			var thn_unker_1 		=$('#thn_unker_1').val();
			var jab_2 				=$('#jab_2').val();
			var unker_2 			=$('#unker_2').val();
			var thn_unker_2 		=$('#thn_unker_2').val();
			var unker_puas 			=$('#unker_puas').val();
			var alasan_puas 		=$('#alasan_puas').val();
			var unker_no_puas 		=$('#unker_no_puas').val();
			var alasan_no_puas 		=$('#alasan_no_puas').val();
			var kebijakan 			=$('#kebijakan').val();
			var kekuatan_1 			=$('#kekuatan_1').val();
			var mengapa_kekuatan_1 	=$('#mengapa_kekuatan_1').val();
			var kekuatan_2 			=$('#kekuatan_2').val();
			var mengapa_kekuatan_2 	=$('#mengapa_kekuatan_2').val();
			var s1_topik 			=$('#s1_topik').val();
			var s1_tmt 				=$('#s1_tmt').val();
			var s1_tst 				=$('#s1_tst').val();
			var s1_3 				=$('#s1_3').val();
			var s1_4 				=$('#s1_4').val();
			var s1_5 				=$('#s1_5').val();
			var s1_6 				=$('#s1_6').val();
			var s1_7 				=$('#s1_7').val();
			var s1_8 				=$('#s1_8').val();
			var s2_topik 			=$('#s2_topik').val();
			var s2_tmt 				=$('#s2_tmt').val();
			var s2_tst 				=$('#s2_tst').val();
			var s2_3 				=$('#s2_3').val();
			var s2_4 				=$('#s2_4').val();
			var s2_5 				=$('#s2_5').val();
			var s2_6 				=$('#s2_6').val();
			var s2_7 				=$('#s2_7').val();
			var s2_8 				=$('#s2_8').val();
			var jwb1 				=$('#jwb1').val();
			var jwb2 				=$('#jwb2').val();
			var jwb3 				=$('#jwb3').val();
			var jwb4 				=$('#jwb4').val();
			var jwb5 				=$('#jwb5').val();
			var jwb6 				=$('#jwb6').val();
			var jwb7 				=$('#jwb7').val();
			var jwb8 				=$('#jwb8').val();
			var jwb9 				=$('#jwb9').val();
			var jwb10 				=$('#jwb10').val();
			var jwb11 				=$('#jwb11').val();
			var jwb12 				=$('#jwb12').val();
			var jwb13 				=$('#jwb13').val();
			var jwb14 				=$('#jwb14').val();
			var jwb15 				=$('#jwb15').val();
			var jwb16 				=$('#jwb16').val();
			var jwb17 				=$('#jwb17').val();
			var image 				=$('#image').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('registrasi/simpan_reg')?>",
                dataType : "JSON",
                data : {id_reg:id_reg, nama:nama, nip:nip, gol:gol, jabatan:jabatan, unker:unker, jenped_awal:jenped_awal, jur_awal:jur_awal, univ_awal:univ_awal, thn_awal:thn_awal, jenpend_akhir:jenpend_akhir, jur_akhir:jur_akhir, univ_akhir:univ_akhir, thn_akhir:thn_akhir, jab_1:jab_1, unker_1:unker_1, thn_unker_1:thn_unker_1, jab_2:jab_2, unker_2:unker_2, thn_unker_2:thn_unker_2, unker_puas:unker_puas, alasan_puas:alasan_puas, unker_no_puas:unker_no_puas, alasan_no_puas:alasan_no_puas, kebijakan:kebijakan, kekuatan_1:kekuatan_1, mengapa_kekuatan_1:mengapa_kekuatan_1, kekuatan_2:kekuatan_2, mengapa_kekuatan_2:mengapa_kekuatan_2, s1_topik:s1_topik, s1_tmt:s1_tmt, s1_tst:s1_tst, s1_3:s1_3, s1_4:s1_4, s1_5:s1_5, s1_6:s1_6, s1_7:s1_7, s1_8:s1_8, s2_topik:s2_topik, s2_tmt:s2_tmt, s2_tst:s2_tst, s2_3:s2_3, s2_4:s2_4, s2_5:s2_5, s2_6:s2_6, s2_7:s2_7, s2_8:s2_8, jwb1:jwb1, jwb2:jwb2, jwb3:jwb3, jwb4:jwb4, jwb5:jwb5, jwb6:jwb6, jwb7:jwb7, jwb8:jwb8, jwb9:jwb9, jwb10:jwb10, jwb11:jwb11, jwb12:jwb12, jwb13:jwb13, jwb14:jwb14, jwb15:jwb15, jwb16:jwb16, jwb17:jwb17, image:image},
                success: function(data){
						$('[name="id_reg"]').val("");
						$('[name="nama"]').val("");
						$('[name="nip"]').val("");
						$('[name="gol"]').val("");
						$('[name="jabatan"]').val("");
						$('[name="unker"]').val("");
						$('[name="jenped_awal"]').val("");
						$('[name="jur_awal"]').val("");
						$('[name="univ_awal"]').val("");
						$('[name="thn_awal"]').val("");
						$('[name="jenpend_akhir"]').val("");
						$('[name="jur_akhir"]').val("");
						$('[name="univ_akhir"]').val("");
						$('[name="thn_akhir"]').val("");
						$('[name="jab_1"]').val("");
						$('[name="unker_1"]').val("");
						$('[name="thn_unker_1"]').val("");
						$('[name="jab_2"]').val("");
						$('[name="unker_2"]').val("");
						$('[name="thn_unker_2"]').val("");
						$('[name="unker_puas"]').val("");
						$('[name="alasan_puas"]').val("");
						$('[name="unker_no_puas"]').val("");
						$('[name="alasan_no_puas"]').val("");
						$('[name="kebijakan"]').val("");
						$('[name="kekuatan_1"]').val("");
						$('[name="mengapa_kekuatan_1"]').val("");
						$('[name="kekuatan_2"]').val("");
						$('[name="mengapa_kekuatan_2"]').val("");
						$('[name="s1_topik"]').val("");
						$('[name="s1_tmt"]').val("");
						$('[name="s1_tst"]').val("");
						$('[name="s1_3"]').val("");
						$('[name="s1_4"]').val("");
						$('[name="s1_5"]').val("");
						$('[name="s1_6"]').val("");
						$('[name="s1_7"]').val("");
						$('[name="s1_8"]').val("");
						$('[name="s2_topik"]').val("");
						$('[name="s2_tmt"]').val("");
						$('[name="s2_tst"]').val("");
						$('[name="s2_3"]').val("");
						$('[name="s2_4"]').val("");
						$('[name="s2_5"]').val("");
						$('[name="s2_6"]').val("");
						$('[name="s2_7"]').val("");
						$('[name="s2_8"]').val("");
						$('[name="jwb1"]').val("");
						$('[name="jwb2"]').val("");
						$('[name="jwb3"]').val("");
						$('[name="jwb4"]').val("");
						$('[name="jwb5"]').val("");
						$('[name="jwb6"]').val("");
						$('[name="jwb7"]').val("");
						$('[name="jwb8"]').val("");
						$('[name="jwb9"]').val("");
						$('[name="jwb10"]').val("");
						$('[name="jwb11"]').val("");
						$('[name="jwb12"]').val("");
						$('[name="jwb13"]').val("");
						$('[name="jwb14"]').val("");
						$('[name="jwb15"]').val("");
						$('[name="jwb16"]').val("");
						$('[name="jwb17"]').val("");
						$('[name="image"]').val("");
                    //$('#ModalaAdd').modal('hide');
                    //tampil_data();
                }
            });
            return false;
        });


</script>

    <!-- ckeditor-->
    <script src="<?php echo base_url() ?>assets/js/plugins/ckeditor/ckeditor.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/ckeditor/adapters/jquery.js"></script>


</body>
</html>
