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

h4 {
  text-align: center;
  font-weight: bold;
  margin-bottom: 30px;
}

textarea {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
textarea.invalid {
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
				<i class="glyphicon glyphicon-align-center"></i>&nbsp; Wacana Analisa Kasus JPTP
            </div>
				<?php foreach ($ankas->result() as $key){ ?>	
				<div class="panel-body">
					<p style="text-align:justify;text-indent: 45px;"><?php echo $key->wacana; ?></p>
				</div>
				<?php } ?> 
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
				<i class="glyphicon glyphicon-edit"></i>&nbsp; Simulasi Analisa Kasus
				<div style="float:right;">Waktu Pengerjaan <span id="time">45:00</span> Menit!</div><!-- 45:00  || 60:00-->
            </div>
			<div class="panel-body">
				<form id="regForm" action="<?php echo base_url('appujian/ujian_pelaksana/simpan_ujian_ankas');?>" method="post">
					<input type="hidden" name="nip" value="<?=$user;?>"  />
					<input type="hidden" name="ket" value="Y"  />
					<input type="hidden" name="id_materi_ankas" value="21"  />
					
					<div class="tab">
						<h4>Petunjuk Pengerjaan !</h4>
							<table width="100%" class="table table-striped table-bordered">
								<tr>
									<td style="width:30px; text-align:center;">1</td>
									<td style="text-align:justify;"><p>Dalam simulasi <b> Wacana Diatas</b>, Anda akan diberikan gambaran mengenai suatu issue/permasalahan yang lazim ditemukan dalam instansi pemerintah di Indonesia dalam pelaksanaan tugas pokok dan fungsinya</p></td>
								</tr>
								<tr>
									<td style="width:30px; text-align:center;">2</td>
									<td style="text-align:justify;">Simulasi ini terbagi menjadi 2 (dua) bagian besar yaitu : <br/>
										<span>(a.)&ensp; Wacana, yang berisi issue/permasalahan yang terjadi <br/></span>
											<span>(b.)&ensp; Instruksi, yang merupakan perintah yang harus Anda ikuti untuk mengerjakan soal simulasi ini</span>
									</td>
								</tr>
								<tr>
									<td style="width:30px; text-align:center;">3</td>
									<td style="text-align:justify;"><p>Anda dapat merespon seluruh kondisi kerja tersebut dengan dukungan data/informasi yang diberikan, atau dapat menggunakan pengalaman, pengetahuan maupun data/informasi lain yang Anda miliki</p></td>
								</tr>
								<tr>
									<td style="width:30px; text-align:center;">4</td>
									<td style="text-align:justify;"><p>Anda diminta untuk menjawab tiap-tiap pertanyaan dengan detail, jelas dan menggunakan bahasa/ejaan Bahasa Indonesia yang baku agar mudah dipahami oleh pemeriksa</p></td>
								</tr>
								<tr>
									<td style="width:30px; text-align:center;">5</td>
									<td style="text-align:justify;"><p>Tidak ada jawaban benar/salah dalam simulasi ini. Anda diminta untuk meresponnya secara individual dan sejujur-jujurnya</p></td>
								</tr>
								<tr>
									<td style="width:30px; text-align:center;">6</td>
									<td style="text-align:justify;"><p>Tidak diperkenankan menggunakan alat bantu lain untuk mendapatkan data/informasi yang Anda perlukan dalam mengerjakan soal simulasi ini</p></td>
								</tr>
								<tr>
									<td style="width:30px; text-align:center;">7</td>
									<td style="text-align:justify;font-weight:bold;"><p>Waktu yang diberikan untuk mengerjakan simulasi ini adalah 45 menit</p></td>
								</tr>
							</table>
					</div>
					<?php foreach ($ankas->result() as $key){ ?>	
						<div class="tab"><p style="text-align:justify;"><?php echo $key->tanya_ankas1; ?></p>
							<p><textarea placeholder="Tuliskan jawaban saudara disini..." oninput="this.className = ''" name="jwb_ankas1"></textarea></p>
						</div>
						<div class="tab"><p style="text-align:justify;"><?php echo $key->tanya_ankas2; ?></p>
							<p><textarea placeholder="Tuliskan jawaban saudara disini..." oninput="this.className = ''" name="jwb_ankas2"></textarea></p>
						</div>
						<div class="tab"><p style="text-align:justify;"><?php echo $key->tanya_ankas3; ?></p>
							<p><textarea placeholder="Tuliskan jawaban saudara disini..." oninput="this.className = ''" name="jwb_ankas3"></textarea></p>
						</div>
						<div class="tab"><p style="text-align:justify;"><?php echo $key->tanya_ankas4; ?></p>
							<p><textarea placeholder="Tuliskan jawaban saudara disini..." oninput="this.className = ''" name="jwb_ankas4"></textarea></p>
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
						<span class="step"></span>
						<span class="step"></span>
						<span class="step"></span>
						<span class="step"></span>
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
  y = x[currentTab].getElementsByTagName("textarea");
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
    var fiveMinutes = 2700, //2700 --> 45 || 3600 --> 60
        display = $('#time');
    startTimer(fiveMinutes, display);
});



window.onload=function(){
        var auto = setTimeout(function(){ autoRefresh(); }, 1350000);//1350000 --> 45 || 1800000 --> 60

        function submitform(){
          alert('Waktu mengerjakan sudah habis !! \nKlik "Ok" untuk melanjutkan Tes Materi Berikutnya.');
          document.forms["regForm"].submit();
        }

        function autoRefresh(){
           clearTimeout(auto);
           auto = setTimeout(function(){ submitform(); autoRefresh(); }, 1350000);//1350000 --> 45 || 1800000 --> 60
        }
    }







</script>
