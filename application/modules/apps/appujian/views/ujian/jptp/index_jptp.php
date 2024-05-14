<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 10px auto;
  width: 100%;
  min-width: 300px;
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
				<i class="glyphicon glyphicon-flag"></i>&nbsp; Perhatikan Instruksi
            </div>
            <div class="panel-body">
            <div class="row">
            <div class="col-lg-12">
			<?//=$user;?>
			<form id="regForm" action="<?php echo base_url('module/appujian/ujian_jptp/apm_satu');?>" method="post"> <!-- apm_satu || contoh_cfit_satu-->
			<div class="tab"><p style="font-size:18px;"><i class="glyphicon glyphicon-check"></i>&nbsp; Tata Tertib dan Ketentuan Umum</p><hr/>
				<div class="row">
					<div class="col-lg-6">
					<div class="table-responsive">
						<table class="table table-bordered table-hover table-striped">
							<tbody>
								<tr>
									<td style="width:30px; text-align:center;">1</td>
									<td style="text-align:justify;"><p>Peserta mengecek kesesuaian identitas yang tampil di layar monitor.</p></td>
								</tr>
								<tr>
									<td style="width:30px; text-align:center;">2</td>
									<td style="text-align:justify;"><p>Menjawab butir soal dengan cara memilih/mengklik option jawaban menggunakan mouse</p></td>
								</tr>
								<tr>
									<td style="width:30px; text-align:center;">3</td>
									<td style="text-align:justify;"><p>Seluruh Pertanyaan atau pernyataan wajib diisi</p></td>
								</tr>
								<tr>
									<td style="width:30px; text-align:center;">4</td>
									<td style="text-align:justify;"><p>Peserta dapat mengubah pilihan jawaban dengan cara memilih/mengklik back yang dianggap benar. Jawaban peserta otomatis akan terganti dengan pilihan jawaban yang terakhir</p></td>
								</tr>
								<tr>
									<td style="width:30px; text-align:center;">5</td>
									<td style="text-align:justify;"><p>Perhatikan Instruksi dan Durasi Waktu Pengerjaan</p></td>
								</tr>
								<tr>
									<td style="width:30px; text-align:center;">6</td>
									<td style="text-align:justify;"><p>Seluruh alat komunikasi (Smartphone/Gadget) harap di non-aktifkan</p></td>
								</tr>
								<tr>
									<td style="width:30px; text-align:center;">7</td>
									<td style="text-align:justify;"><p>Tidak ada jawaban benar/salah dalam Pengerjaan Psikometri. Anda diminta untuk meresponnya secara individual dan sejujur-jujurnya</p></td>
								</tr>
								<tr>
									<td style="width:30px; text-align:center;">8</td>
									<td style="text-align:justify;"><p>Hal lain yang belum tercantum dalam Ketentuan akan di atur kemudian dan merupakan tata tertib tambahan yang langsung disahkan</p></td>
								</tr>
							</tbody>
						</table>
					</div>
					</div>
					<div class="col-lg-6">
					<div class="table-responsive">
					    <table class="table table-bordered table-hover table-striped">    
					        <tr>
    					        <td>Nama</t>
    					        <td><b><?=$name;?></b></td>
					        </tr>
					        <tr>
    					        <td>NIP.</t>
    					        <td><b><?=$user;?></b></td>
					        </tr>
					    </table>
					</div>    
					<div class="table-responsive">
						<table class="table table-bordered table-hover table-striped">
							<tbody>
								<p><b>Materi Alat Tes yang akan diujikan :</b></p>
								<!--
								<tr>
									<td style="width:30px; text-align:center;">1</td>
									<td style="text-align:justify;"><p>Culture Fair Inteligence Test (CFIT)</p></td>
								</tr>
								-->
								<tr>
									<td style="width:30px; text-align:center;">1</td>
									<td style="text-align:justify;"><p>Advanced Progressive Matrices (APM Set-1)</p></td>
								</tr>
								<tr>
									<td style="width:30px; text-align:center;">2</td>
									<td style="text-align:justify;"><p>Advanced Progressive Matrices (APM Set-2)</p></td>
								</tr>
								
								<tr>
									<td style="width:30px; text-align:center;">3</td>
									<td style="text-align:justify;"><p>Simulasi Analisa Kasus</p></td>
								</tr>
								
								<tr>
									<td style="width:30px; text-align:center;">4</td>
									<td style="text-align:justify;"><p>Papi Kostick</p></td>
								</tr>
								<!--
								<tr>
									<td style="width:30px; text-align:center;">5</td>
									<td style="text-align:justify;"><p>Situational Judge Test</p></td>
								</tr>
								-->
							</tbody>
						</table>
					</div>
					</div>
				</div>
			</div>
				<div style="overflow:auto;">
					<div style="float:right;">
						<button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
						<button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
					</div>
				</div>
				  <!-- Circles which indicates the steps of the form: -->
				<div style="text-align:center;margin-top:40px;">
					<span class="step"></span>
				</div>
			</form>
            </div>
            </div>
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
    document.getElementById("nextBtn").innerHTML = "Mulai Ujian";
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
</script>
