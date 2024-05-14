<style>

section {
  width: 100%;
  min-height: inherit;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  position: relative;
}

section::before,
section::after {
  content: "";
  display: block;
  border-radius: 100%;
  position: absolute;
}

label {
  display: flex;
  justify-content: flex-start;
  align-items: center;
  flex-wrap: nowrap;
  margin: 12px 0;
  cursor: pointer;
  position: relative;
  background-color: #f9f9f9;
  height: 50px;
  padding: 20px;
}

label:hover {
  display: flex;
  justify-content: flex-start;
  align-items: center;
  flex-wrap: nowrap;
  margin: 12px 0;
  cursor: pointer;
  position: relative;
  background-color: #ededed;
  height: 50px;
  padding: 20px;
}

input {
  opacity: 0;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  z-index: -1;
}

.circle {
  width: 16px;
  height: 16px;
  border: 1px solid #000000;
  border-radius: 100%;
  margin-right: 15px;
  position: relative;
}

.circle::before,
.circle::after {
  content: "";
  display: block;
  width: inherit;
  height: inherit;
  border-radius: inherit;
  position: absolute;
  transform: scale(0);
  transform-origin: center center;
}

.circle:before {
  background: #000000;
  opacity: 0;
  transition: .3s;
}

.circle::after {
  background: #04aa6d;
  opacity: .4;
  transition: .6s;
}

.text {
  color: #000000;
  font-weight: bold;
}

input:checked+.circle::before {
  opacity: 1;
  transform: scale(.6);
}

input:hover+.circle,
input:focus+.circle {
  border: 1px solid #04aa6d;
}

input:hover+.circle:before,
input:focus+.circle:before {
  background: #04aa6d;
}

input:hover~.text {
  color: #04aa6d;
}

input:focus+.circle::after,
input:active+.circle::after {
  opacity: .1;
  transform: scale(2.6);

}

* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 10px auto;
  width: 80%;
  min-width: 300px;
}

h4 {
  text-align: center;
  font-weight: bold;
  margin-bottom: 30px;
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #04AA6D;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
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
  background-color: #04AA6D;
}


</style>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
				<i class="glyphicon glyphicon-edit"></i>&nbsp; Advance Progresive Matrices (APM) SET-2
				<!--<div style="float:right;">Waktu Pengerjaan <span id="time">25:00</span> Menit!</div>-->
            </div>
			<div class="panel-body">
				<form id="regForm" action="<?php echo base_url('appujian/ujian_jptp/simpan_ujian_apm_dua');?>" method="post">
					<input type="hidden" name="nip" value="<?=$user;?>"  />	
					<input type="hidden" name="ket" value="Y"  />
					
					<div class="tab">
						<h4>Tetap Konsentrasi.. <br/> Mari kita lanjutkan Advance Progresive Matrices (APM) SET-2 <br/> Petunjuk pengerjaan sama dengan APM Set-1<br/> Semangat .. !!</h4>
					</div>
				
					<?php foreach ($apm_dua->result() as $key){ ?>
					<div class="tab">
					<h4 class="fs-title">Nomor berapakah dari gambar disamping yang sesuai untuk mengisi area kosong pada gambar utama ..?</h4>
					<!--<h4 style="text-align:justify;"><?//php echo $key->id_appe; ?></h4>-->
					<div class="row">
						<div class="col-lg-6">
							<b> Soal Nomor : <?php echo $key->id_apm_dua; ?> </b>
							<img src="<?php echo base_url(); ?>assets/media/upload/mastersoal/apmset2/<?php echo $key->judul_appe; ?>" style="width:480px; height:500px">
						</div>
						<div class="col-lg-3">
							<label>
								<input type="radio" name="jwb_apm_dua_<?php echo $key->id_apm_dua; ?>" value="A" oninput="this.className = ''"   >
								<span class="circle"></span>
								<span class="text">1</span>
							</label>

							<label>
								<input type="radio" name="jwb_apm_dua_<?php echo $key->id_apm_dua; ?>" value="B" oninput="this.className = ''"  >
								<span class="circle"></span>
								<span class="text">2</span>
							</label>
							
							<label>
								<input type="radio" name="jwb_apm_dua_<?php echo $key->id_apm_dua; ?>" value="C" oninput="this.className = ''"   >
								<span class="circle"></span>
								<span class="text">3</span>
							</label>

							<label>
								<input type="radio" name="jwb_apm_dua_<?php echo $key->id_apm_dua; ?>" value="D" oninput="this.className = ''"  >
								<span class="circle"></span>
								<span class="text">4</span>
							</label>
							
						</div>
						<div class="col-lg-3">
							<label>
								<input type="radio" name="jwb_apm_dua_<?php echo $key->id_apm_dua; ?>" value="E" oninput="this.className = ''"   >
								<span class="circle"></span>
								<span class="text">5</span>
							</label>

							<label>
								<input type="radio" name="jwb_apm_dua_<?php echo $key->id_apm_dua; ?>" value="F" oninput="this.className = ''"  >
								<span class="circle"></span>
								<span class="text">6</span>
							</label>
							
							<label>
								<input type="radio" name="jwb_apm_dua_<?php echo $key->id_apm_dua; ?>" value="G" oninput="this.className = ''"   >
								<span class="circle"></span>
								<span class="text">7</span>
							</label>

							<label>
								<input type="radio" name="jwb_apm_dua_<?php echo $key->id_apm_dua; ?>" value="H" oninput="this.className = ''"  >
								<span class="circle"></span>
								<span class="text">8</span>
							</label>
							
						</div>
					</div>
					</div>
					<?php } ?>
					
					<div style="overflow:auto;">
						<div style="float:right;">
							<button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
							<button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
						</div>
					</div>
					<div style="text-align:center;margin-top:40px;">
						<span class="step"></span>
						<?php foreach ($apm_dua->result() as $key){ ?>
						<span class="step"></span>
						<?php } ?>
					</div>
				
				</form>
			</div>
		</div>
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


function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10)
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.text(minutes + ":" + seconds);

        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}

jQuery(function ($) {
    var fiveMinutes = 1500,
        display = $('#time');
    startTimer(fiveMinutes, display);
});



window.onload=function(){
        var auto = setTimeout(function(){ autoRefresh(); }, 750000);

        function submitform(){
          alert('Waktu mengerjakan sudah habis !! \nKlik "Ok" untuk melanjutkan Tes Materi Berikutnya.');
          document.forms["regForm"].submit();
        }

        function autoRefresh(){
           clearTimeout(auto);
           auto = setTimeout(function(){ submitform(); autoRefresh(); }, 750000);
        }
    }


</script>
