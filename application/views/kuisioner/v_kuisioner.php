<!DOCTYPE html>
<html>
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
				  <h4>BADAN KEPENDUDUKAN DAN</h4>
				  <span>KELUARGA BERENCANA NASIONAL</span>
				</div>
				
				<nav class="main-nav" role="navigation" style="margin-top:-10px;">
					<ul class="main-menu">
					<li><a href="#section1">Kuisioner</a></li>
					<!--<li><a href="#">Portal Website</a></li>-->
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
				  <p>All Rights Reserved <br/> 	whaddupsap&trade; @ 2023</p>
				</div>
			</div>
        </div>
    </div>
<section class="section contact-me" data-section="section1">
    <div class="container">
        <div class="section-heading">
			<h2>FORM KUISIONER</h2>
			<div class="line-dec"></div>
			 <span>Kuisioner Evaluasi Pelaksanaan Penilaian Kompetensi<br/>Unit Penilaian Kompetensi Badan Kepegawaian Dan Pengembangan SDM<br>Pemerintah Kota Tangerang</span>
        </div>
        <div class="row">
            <div class="col-md-12">
				<div class="right-content">
					<div class="container">
						<form id="regForm" action="<?php echo base_url('kuisioner/simpan_kuisi');?>" method="post">
						<div class="reg-item ">
						<div class="tab">
						<h2 class="fs-title">Petunjuk Pengisian</h2><br/>
							<div class="row">
								<div class="col-md-12">
									<div class="container">
										<p class="help-block" style="color:#fff;text-align:justify">1.&ensp; Pilihlah salah satu pilihan pada lingkaran yang disediakan</p>
										<p class="help-block" style="color:#fff;text-align:justify">2.&ensp; Isilah pertanyaan sesuai pendapat Saudara</p>
										<p class="help-block" style="color:#fff;text-align:justify">3.&ensp; Sebelum mengisi pertanyaan, bacalah pertanyaan dengan cermat</p>
										<p class="help-block" style="color:#fff;text-align:justify">4.&ensp; Jawablah semua pertanyaan sesuai dengan situasi yang Saudara alami</p>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Tahap 1 -->
						<div class="tab">
							<div class="row">
								<div class="col-md-6">
								<p>
									<p class="help-block" style="color:#fff;text-align:justify">Jabatan Saudara Saat Ini</p>
									<select type="dropdown" class="form-control" name="jabatan" id="jabatan" required>
										<option>- pilih -</option>
										<option value="Jabatan Pimpinan Tinggi Pratama">Pejabat Jabatan Pimpinan Tinggi Pratama</option>
										<option value="Administrator">Pejabat Administrator</option>
										<option value="Pengawas">Pejabat Pengawas</option>
										<option value="Fungsional">Pejabat Fungsional</option>
										<option value="Pelaksana">Pejabat Pelaksana</option>
									</select>
								</p>	
								</div>
								<div class="col-md-6">
									<p>
									<p class="help-block" style="color:#fff;text-align:justify">Tgl. Pelaksanaan Penilaian Kompetensi</p>
									<input type="date" class="form-control" oninput="this.className = ''" name="tgl_assessment"></textarea>
									</p>
								</div>
							</div>
						</div>
						
						<!-- Tahap 2 -->
						<div class="tab">
							<div class="row">
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">1.&ensp; Apakah informasi yang Saudara dapatkan mengenai pelaksanaan penilaian kompetensi sudah jelas ?</p>
										<select type="dropdown" class="form-control" name="kuisi_1" id="kuisi_1" required>
											<option>- pilih -</option>
											<option value="Tidak Jelas">Tidak Jelas</option>
											<option value="Kurang Jelas">Kurang Jelas</option>
											<option value="Jelas">Jelas</option>
											<option value="Sangat Jelas">Sangat Jelas</option>
										</select>
										</p>
									<p>
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">Jika Tidak/Kurang Jelas, apa penyebabnya ?</p>
										<select type="dropdown" class="form-control" name="kuisi_1_a" id="kuisi_1_a" required>
											<option>- pilih -</option>
											<option value="Karena Kurangnya Sosialisasi">Karena Kurangnya Sosialisasi</option>
											<option value="Karena Kurang Sarana dan Prasarana">Karena Kurang Sarana dan Prasarana</option>
											<option value="Karena Kurang Perhatian Terhadap Hal-hal Tersebut">Karena Kurang Perhatian Terhadap Hal-hal Tersebut</option>
											<option value="-">-</option>
										</select>
									</p>
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">Masukan Lainnya</p>
										<textarea class="form-control" placeholder="tulis alasan disini.." oninput="this.className = ''" name="kuisi_1_lain"></textarea>
									</p>
								</div>
								
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">2.&ensp; Apakah persyaratan administrasi untuk mengikuti penilaian kompetensi mudah dipenuhi ?</p>
										<select type="dropdown" class="form-control" name="kuisi_2" id="kuisi_2" required>
											<option>- pilih -</option>
											<option value="Sangat Sulit">Sangat Sulit</option>
											<option value="Sulit">Sulit</option>
											<option value="Mudah">Mudah</option>
											<option value="Sangat Mudah">Sangat Mudah</option>
										</select>
										</p>
									<p>
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">Jika Sangat Sulit/Sulit, apa penyebabnya ?</p>
										<select type="dropdown" class="form-control" name="kuisi_2_a" id="kuisi_2_a" required>
											<option>- pilih -</option>
											<option value="Persyaratan administrasi sangat banyak">Persyaratan administrasi sangat banyak</option>
											<option value="Dokumen persyaratan administrasi sangat menyulitkan">Dokumen persyaratan administrasi sangat menyulitkan</option>
											<option value="-">-</option>
										</select>
									</p>
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">Masukan Lainnya</p>
										<textarea class="form-control" placeholder="tulis alasan disini.." oninput="this.className = ''" name="kuisi_2_lain"></textarea>
									</p>
								</div>
							</div>
						</div>
						
						<!-- Tahap 3 -->
						<div class="tab">
							<div class="row">
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">3.&ensp; Bagaimana mekanisme pendaftaran ulang pelaksanaan penilaian kompetensi ?</p>
										<select type="dropdown" class="form-control" name="kuisi_3" id="kuisi_3" required>
											<option>- pilih -</option>
											<option value="Sangat Sulit">Sangat Sulit</option>
											<option value="Sulit">Sulit</option>
											<option value="Mudah">Mudah</option>
											<option value="Sangat Mudah">Sangat Mudah</option>
										</select>
										</p>
									<p>
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">Jika Sangat Sulit/Sulit, apa penyebabnya ?</p>
										<select type="dropdown" class="form-control" name="kuisi_3_a" id="kuisi_3_a" required>
											<option>- pilih -</option>
											<option value="Kurangnya petugas pendaftaran">Kurangnya petugas pendaftaran</option>
											<option value="Petugas terlalu lambat dan kurang cekatan">Petugas terlalu lambat dan kurang cekatan</option>
											<option value="Petugas tidak ada dilokasi pendaftaran">Petugas tidak ada dilokasi pendaftaran</option>
											<option value="Antrian dimeja pendaftaran terlalu panjang">Antrian dimeja pendaftaran terlalu panjang</option>
											<option value="-">-</option>
										</select>
									</p>
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">Masukan Lainnya</p>
										<textarea class="form-control" placeholder="tulis alasan disini.." oninput="this.className = ''" name="kuisi_3_lain"></textarea>
									</p>
								</div>
								
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">4.&ensp; Apakah alur pelaksanaan penilaian kompetensi yg dilaksanakan sudah efektif ?</p>
										<select type="dropdown" class="form-control" name="kuisi_4" id="kuisi_4" required>
											<option>- pilih -</option>
											<option value="Tidak Efektif">Tidak Efektif</option>
											<option value="Kurang Efektif">Kurang Efektif</option>
											<option value="Efektif">Efektif</option>
											<option value="Sangat Efektif">Sangat Efektif</option>
										</select>
										</p>
									<p>
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">Jika tidak efektif/kurang efektif, apa penyebabnya ?</p>
										<select type="dropdown" class="form-control" name="kuisi_4_a" id="kuisi_4_a" required>
											<option>- pilih -</option>
											<option value="Jadwal kurang jelas">Jadwal kurang jelas</option>
											<option value="Arahan petugas tidak jelas">Arahan petugas tidak jelas</option>
											<option value="Kurangnya koordinasi antar petugas">Kurangnya koordinasi antar petugas</option>
											<option value="-">-</option>
										</select>
									</p>
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">Masukan Lainnya</p>
										<textarea class="form-control" placeholder="tulis alasan disini.." oninput="this.className = ''" name="kuisi_4_lain"></textarea>
									</p>
								</div>
							</div>
						</div>
						
						<!-- Tahap 4 -->
						<div class="tab">
							<div class="row">
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">5.&ensp; Apakah waktu pelaksanaan kegiatan psikotes, simulasi dan wawancara sudah cukup memadai ?</p>
										<select type="dropdown" class="form-control" name="kuisi_5" id="kuisi_5" required>
											<option>- pilih -</option>
											<option value="Tidak Cukup">Tidak Cukup</option>
											<option value="Kurang Cukup">Kurang Cukup</option>
											<option value="Cukup">Cukup</option>
											<option value="Sangat Cukup">Sangat Cukup</option>
										</select>
										</p>
									<p>
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">6.&ensp; Apakah waktu pelaksanaan penilaian kompetensi selama 2 (dua) hari sudah cukup memadai ?</p>
										<select type="dropdown" class="form-control" name="kuisi_6" id="kuisi_6" required>
											<option>- pilih -</option>
											<option value="Tidak Memadai">Tidak Memadai</option>
											<option value="Kurang Memadai">Kurang Memadai</option>
											<option value="Memadai">Memadai</option>
											<option value="Sangat Memadai">Sangat Memadai</option>
										</select>
										</p>
									<p>
								</div>
								
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">Jika Tidak Memadai/Kurang Memadai, berapa lama waktu ideal menurut pendapat Saudara ?</p>
										<select type="dropdown" class="form-control" name="kuisi_6_a" id="kuisi_6_a" required>
											<option>- pilih -</option>
											<option value="3 hari">3 hari</option>
											<option value="4 hari">4 hari</option>
											<option value="5 hari">5 hari</option>
											<option value="< 5 hari">< 5 hari</option>
											<option value="-">-</option>
										</select>
									</p>
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">Masukan Lainnya</p>
										<textarea class="form-control" placeholder="tulis alasan disini.." oninput="this.className = ''" name="kuisi_6_lain"></textarea>
									</p>
								</div>
							</div>
						</div>
						
						<!-- Tahap 5 -->
						<div class="tab">
							<div class="row">
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">7.&ensp; Apakah Saudara memahami isi soal penilaian kompetensi ?</p>
										<select type="dropdown" class="form-control" name="kuisi_7" id="kuisi_7" required>
											<option>- pilih -</option>
											<option value="Tidak Paham">Tidak Paham</option>
											<option value="Kurang Paham">Kurang Paham</option>
											<option value="Paham">Paham</option>
											<option value="Sangat Paham">Sangat Paham</option>
										</select>
										</p>
									<p>
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">Jika Tidak Paham/Kurang Paham, apa alasannya ?</p>
										<select type="dropdown" class="form-control" name="kuisi_7_a" id="kuisi_7_a" required>
											<option>- pilih -</option>
											<option value="Soal terlalu banyak">Soal terlalu banyak</option>
											<option value="Soal menggunakan tampilan dan bahasa yang sulit dipahami">Soal menggunakan tampilan dan bahasa yang sulit dipahami</option>
											<option value="Petunjuk yang diberikan sulit dipahami/ berblit-belit">Petunjuk yang diberikan sulit dipahami/ berblit-belit</option>
											<option value="-">-</option>
										</select>
									</p>
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">Masukan Lainnya</p>
										<textarea class="form-control" placeholder="tulis alasan disini.." oninput="this.className = ''" name="kuisi_7_lain"></textarea>
									</p>
								</div>
								
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">8.&ensp; Apakah isi pertanyaan yang diajukan saat wawancara dapat dipahami ?</p>
										<select type="dropdown" class="form-control" name="kuisi_8" id="kuisi_8" required>
											<option>- pilih -</option>
											<option value="Tidak Paham">Tidak Paham</option>
											<option value="Kurang Paham">Kurang Paham</option>
											<option value="Paham">Paham</option>
											<option value="Sangat Paham">Sangat Paham</option>
										</select>
										</p>
									<p>
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">Jika Tidak Paham/Kurang Paham, apa kendalanya ?</p>
										<select type="dropdown" class="form-control" name="kuisi_8_a" id="kuisi_8_a" required>
											<option>- pilih -</option>
											<option value="Menggunakan bahasa yang sulit dipahami">Menggunakan bahasa yang sulit dipahami</option>
											<option value="Penyampaian pertanyaan berbelit-belit">Penyampaian pertanyaan berbelit-belit</option>
											<option value="-">-</option>
										</select>
									</p>
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">Masukan Lainnya</p>
										<textarea class="form-control" placeholder="tulis alasan disini.." oninput="this.className = ''" name="kuisi_8_lain"></textarea>
									</p>
								</div>
							</div>
						</div>
						
						<!-- Tahap 6 -->
						<div class="tab">
							<div class="row">
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">9.&ensp; Apakah petugas yang memberikan instruksi sudah kompeten ?</p>
										<select type="dropdown" class="form-control" name="kuisi_9" id="kuisi_9" required>
											<option>- pilih -</option>
											<option value="Tidak Kompeten">Tidak Kompeten</option>
											<option value="Kurang Kompeten">Kurang Kompeten</option>
											<option value="Kompeten">Kompeten</option>
											<option value="Sangat Kompeten">Sangat Kompeten</option>
										</select>
										</p>
									<p>
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">Apabila tidak kompeten/ kurang kompeten, terlihat dalam hal :</p>
										<select type="dropdown" class="form-control" name="kuisi_9_a" id="kuisi_9_a" required>
											<option>- pilih -</option>
											<option value="Instrusi terlalu cepat">Instrusi terlalu cepat</option>
											<option value="Menggunakan bahasa yang sulit dipahami">Menggunakan bahasa yang sulit dipahami</option>
											<option value="Kurang menguasai materi">Kurang menguasai materi</option>
											<option value="Kurang detail dalam memberikan penjelasan">Kurang detail dalam memberikan penjelasan</option>
											<option value="-">-</option>
										</select>
									</p>
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">Masukan Lainnya</p>
										<textarea class="form-control" placeholder="tulis alasan disini.." oninput="this.className = ''" name="kuisi_9_lain"></textarea>
									</p>
								</div>
								
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">10.&ensp; Apakah asesor yang melakukan wawancara sudah kompeten ?</p>
										<select type="dropdown" class="form-control" name="kuisi_10" id="kuisi_10" required>
											<option>- pilih -</option>
											<option value="Tidak Kompeten">Tidak Kompeten</option>
											<option value="Kurang Kompeten">Kurang Kompeten</option>
											<option value="Kompeten">Kompeten</option>
											<option value="Sangat Kompeten">Sangat Kompeten</option>
										</select>
										</p>
									<p>
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">Apabila tidak kompeten/ kurang kompeten, terlihat dalam hal :</p>
										<select type="dropdown" class="form-control" name="kuisi_10_a" id="kuisi_10_a" required>
											<option>- pilih -</option>
											<option value="Kurang membangun kedekatan kepada peserta">Kurang membangun kedekatan kepada peserta</option>
											<option value="Pertanyaan yang diajukan ke peserta membingungkan">Pertanyaan yang diajukan ke peserta membingungkan</option>
											<option value="Kurang menguasai topic pembicaraan">Kurang menguasai topic pembicaraan</option>
											<option value="Kurang focus dan bertanya berulang-ulang">Kurang focus dan bertanya berulang-ulang</option>
											<option value="-">-</option>
										</select>
									</p>
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">Masukan Lainnya</p>
										<textarea class="form-control" placeholder="tulis alasan disini.." oninput="this.className = ''" name="kuisi_10_lain"></textarea>
									</p>
								</div>
							</div>
						</div>
						
						<!-- Tahap 7 -->
						<div class="tab">
							<div class="row">
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">11.&ensp; Menurut Saudara, apakah tenaga pendukung administrasi dalam penyelenggaraan penilaian kompetensi sudah cukup kompeten ?</p>
										<select type="dropdown" class="form-control" name="kuisi_11" id="kuisi_11" required>
											<option>- pilih -</option>
											<option value="Tidak Kompeten">Tidak Kompeten</option>
											<option value="Kurang Kompeten">Kurang Kompeten</option>
											<option value="Kompeten">Kompeten</option>
											<option value="Sangat Kompeten">Sangat Kompeten</option>
										</select>
										</p>
									<p>
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">Apabila Tidak Kompeten/ Kurang Kompeten, terlihat dalam hal :</p>
										<select type="dropdown" class="form-control" name="kuisi_11_a" id="kuisi_11_a" required>
											<option>- pilih -</option>
											<option value="Kurang mampu melayani peserta">Kurang mampu melayani peserta</option>
											<option value="Kerap tidak berada ditempat">Kerap tidak berada ditempat</option>
											<option value="Kurang mampu berkoordinasi dengan petugas lainnya">Kurang mampu berkoordinasi dengan petugas lainnya</option>
											<option value="-">-</option>
										</select>
									</p>
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">Masukan Lainnya</p>
										<textarea class="form-control" placeholder="tulis alasan disini.." oninput="this.className = ''" name="kuisi_11_lain"></textarea>
									</p>
								</div>
								
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">12.&ensp; Bagaimana pelayanan yang diberikan oleh tester, asesor, tenaga pendukung administrasi dalam penyelenggaraan penilaian kompetensi ?</p>
										<select type="dropdown" class="form-control" name="kuisi_12" id="kuisi_12" required>
											<option>- pilih -</option>
											<option value="Tidak Baik">Tidak Baik</option>
											<option value="Kurang Baik">Kurang Baik</option>
											<option value="Baik">Baik</option>
											<option value="Sangat Baik">Sangat Baik</option>
										</select>
										</p>
									<p>
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">Apabila tidak baik/kurang baik, terlihat dalam hal :</p>
										<select type="dropdown" class="form-control" name="kuisi_12_a" id="kuisi_12_a" required>
											<option>- pilih -</option>
											<option value="Kurang Sopan">Kurang Sopan</option>
											<option value="Kurang Senyum">Kurang Senyum</option>
											<option value="Kurang Responsif">Kurang Responsif</option>
											<option value="-">-</option>
										</select>
									</p>
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">Masukan Lainnya</p>
										<textarea class="form-control" placeholder="tulis alasan disini.." oninput="this.className = ''" name="kuisi_12_lain"></textarea>
									</p>
								</div>
							</div>
						</div>
						
						<!-- Tahap 8 -->
						<div class="tab">
							<div class="row">
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">13.&ensp; Bagaimana respon penyelenggara penilaian kompetensi dalam menanggapi keluhan peserta ?</p>
										<select type="dropdown" class="form-control" name="kuisi_13" id="kuisi_13" required>
											<option>- pilih -</option>
											<option value="Tidak Tanggap">Tidak Tanggap</option>
											<option value="Kurang Tanggap">Kurang Tanggap</option>
											<option value="Tanggap">Tanggap</option>
											<option value="Sangat Tanggap">Sangat Tanggap</option>
										</select>
										</p>
									<p>
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">Jika tidak tanggap/kurang tanggap, hal tersebut disebabkan oleh :</p>
										<select type="dropdown" class="form-control" name="kuisi_13_a" id="kuisi_13_a" required>
											<option>- pilih -</option>
											<option value="Terpaku pada prosedur">Terpaku pada prosedur</option>
											<option value="Terpaku pada sarana dan prasarana yang ada">Terpaku pada sarana dan prasarana yang ada</option>
											<option value="-">-</option>
										</select>
									</p>
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">Masukan Lainnya</p>
										<textarea class="form-control" placeholder="tulis alasan disini.." oninput="this.className = ''" name="kuisi_13_lain"></textarea>
									</p>
								</div>
								
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">14.&ensp; Apakah sarana  yang digunakan dalam pelaksanaan penilaian kompetensi sudah memadai ?</p>
										<select type="dropdown" class="form-control" name="kuisi_14" id="kuisi_14" required>
											<option>- pilih -</option>
											<option value="Tidak Memadai">Tidak Memadai</option>
											<option value="Kurang Memadai">Kurang Memadai</option>
											<option value="Memadai">Memadai</option>
											<option value="Sangat Memadai">Sangat Memadai</option>
										</select>
										</p>
									<p>
									<p>
										<p class="help-block" style="color:#fff;">Jika tidak memadai/kurang memadai, hal tersebut disebabkan oleh :</p>
										<select type="dropdown" class="form-control" name="kuisi_14_a" id="kuisi_14_a" required>
											<option>- pilih -</option>
											<option value="ATK untuk pelaksanaan tes tidak tersedia, terbatas dan sebagainya">ATK untuk pelaksanaan tes tidak tersedia, terbatas dan sebagainya</option>
											<option value="Soal tidak jelas cetakannya, tulisan terlalu kecil">Soal tidak jelas cetakannya, tulisan terlalu kecil</option>
											<option value="Meja, kursi dan alat bantu lainnya dalam kondisi buruk">Meja, kursi dan alat bantu lainnya dalam kondisi buruk</option>
											<option value="Pengeras suara, proyektor kurang berfungsi dengan baik">Pengeras suara, proyektor kurang berfungsi dengan baik</option>
											<option value="-">-</option>
										</select>
									</p>
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">Masukan Lainnya</p>
										<textarea class="form-control" placeholder="tulis alasan disini.." oninput="this.className = ''" name="kuisi_14_lain"></textarea>
									</p>
								</div>
							</div>
						</div>
						
						<!-- Tahap 9 -->
						<div class="tab">
							<div class="row">
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">15.&ensp; Apakah prasarana yang digunakan dalam pelaksanaan penilaian kompetensi sudah memadai ?</p>
										<select type="dropdown" class="form-control" name="kuisi_15" id="kuisi_15" required>
											<option>- pilih -</option>
											<option value="Tidak Memadai">Tidak Memadai</option>
											<option value="Kurang Memadai">Kurang Memadai</option>
											<option value="Memadai">Memadai</option>
											<option value="Sangat Memadai">Sangat Memadai</option>
										</select>
										</p>
									<p>
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">Jika tidak memadai/kurang memadai, hal tersebut disebabkan oleh :</p>
										<select type="dropdown" class="form-control" name="kuisi_15_a" id="kuisi_15_a" required>
											<option>- pilih -</option>
											<option value="Ruang tes sempit, panas, kotor">Ruang tes sempit, panas, kotor</option>
											<option value="Toilet kotor, tidak ada air">Toilet kotor, tidak ada air</option>
											<option value="Ruang tunggu tidak nyaman, kotor berantakan">Ruang tunggu tidak nyaman, kotor berantakan</option>
											<option value="-">-</option>
										</select>
									</p>
									<p>
										<p class="help-block" style="color:#fff;">Masukan Lainnya</p>
										<textarea class="form-control" placeholder="tulis alasan disini.." oninput="this.className = ''" name="kuisi_15_lain"></textarea>
									</p>
								</div>
								
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">16.&ensp; Apakah pelaksanaan penilaian kompetensi secara daring baik dari sisi jaringan dan kestabilan koneksi internet lancar?</p>
										<select type="dropdown" class="form-control" name="kuisi_16" id="kuisi_16" required>
											<option>- pilih -</option>
											<option value="Tidak Lancar">Tidak Lancar</option>
											<option value="Kurang Lancar">Kurang Lancar</option>
											<option value="Lancar">Lancar</option>
											<option value="Sangat Lancar">Sangat Lancar</option>
										</select>
										</p>
									<p>
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">Jika tidak lancar/kurang lancar, hal tersebut disebabkan oleh :</p>
										<select type="dropdown" class="form-control" name="kuisi_16_a" id="kuisi_16_a" required>
											<option>- pilih -</option>
											<option value="Koneksi internet putus – putus">Koneksi internet putus – putus</option>
											<option value="Pemakaian internet terlalu banyak">Pemakaian internet terlalu banyak</option>
											<option value="Wifi tidak tersedia">Wifi tidak tersedia</option>
											<option value="-">-</option>
										</select>
									</p>
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">Masukan Lainnya</p>
										<textarea class="form-control" placeholder="tulis alasan disini.." oninput="this.className = ''" name="kuisi_16_lain"></textarea>
									</p>
								</div>
							</div>
						</div>
						
						<!-- Tahap 10 -->
						<div class="tab">
							<div class="row">
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">17.&ensp; Menurut Saudara, instrument penilaian kompetensi manakah yang paling sulit?</p>
										<select type="dropdown" class="form-control" name="kuisi_17" id="kuisi_17" required>
											<option>- pilih -</option>
											<option value="Psikotes">Psikotes</option>
											<option value="Simulasi ( analisa kasus, LGD, proposal writing, presentasi, in basket)">Simulasi ( analisa kasus, LGD, proposal writing, presentasi, in basket)</option>
											<option value="Memadai">Memadai</option>
											<option value="Wawancara">Wawancara</option>
										</select>
										</p>
									<p>
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">Mohon jelaskan pendapat Saudara</p>
										<textarea class="form-control" placeholder="tulis alasan disini.." oninput="this.className = ''" name="kuisi_17_lain"></textarea>
									</p>
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">18.&ensp; Menurut Saudara, instrument penilaian kompetensi manakah yang paling menyenangkan?</p>
										<select type="dropdown" class="form-control" name="kuisi_18" id="kuisi_18" required>
											<option>- pilih -</option>
											<option value="Psikotes">Psikotes</option>
											<option value="Simulasi ( analisa kasus, LGD, proposal writing, presentasi, in basket)">Simulasi ( analisa kasus, LGD, proposal writing, presentasi, in basket)</option>
											<option value="Wawancara">Wawancara</option>
											<option value="Tidak ada yang menyenangkan">Tidak ada yang menyenangkan</option>
										</select>
										</p>
									<p>
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">Mohon jelaskan pendapat Saudara</p>
										<textarea class="form-control" placeholder="tulis alasan disini.." oninput="this.className = ''" name="kuisi_18_lain"></textarea>
									</p>
								</div>
								
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">19.&ensp; Seberapa besar Saudara merekomendasikan lembaga kami dalam pelaksanaan penilaian kompetensi kepada pimpinan atau instansi lain ?</p>
										<select type="dropdown" class="form-control" name="kuisi_19" id="kuisi_19" required>
											<option>- pilih -</option>
											<option value="Tidak Merekomendasikan">Tidak Merekomendasikan</option>
											<option value="Mungkin Merekomendasikan">Mungkin Merekomendasikan</option>
											<option value="Merekomendasikan">Merekomendasikan</option>
											<option value="Sangat Merekomendasikan">Sangat Merekomendasikan</option>
										</select>
										</p>
									<p>
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">Mohon jelaskan pendapat Saudara</p>
										<textarea class="form-control" placeholder="tulis alasan disini.." oninput="this.className = ''" name="kuisi_19_lain"></textarea>
									</p>
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">20. Apakah harapan Saudara setelah mengikuti penilaian kompetensi ?</p>
										<textarea class="form-control" placeholder="tulis alasan disini.." oninput="this.className = ''" name="kuisi_20"></textarea>
									</p>
									<p>
										<p class="help-block" style="color:#fff;text-align:justify">21. Berikan Kritik/Saran Saudara untuk perbaikan penyelenggaraan penilaian kompetensi selanjutnya?</p>
										<textarea class="form-control" placeholder="tulis alasan disini.." oninput="this.className = ''" name="kuisi_21"></textarea>
									</p>
									<p>
										<input type="hidden" name="ket" id="ket" value="Y">
									</p>
								</div>
							</div>
						</div>
						
						
						
						
						  <!-- button -->
						  <div style="overflow:auto;">
							<div style="float:right;">
							  <button type="button" id="prevBtn" name="prevBtn" onclick="nextPrev(-1)">Previous</button>
							  <button type="button" id="nextBtn" name="nextBtn" onclick="nextPrev(1)">Next</button>
							</div>
						  </div>
						  <div style="text-align:center;margin-top:40px;">
							<span class="step"></span>
							<span class="step"></span>
							<span class="step"></span>
							<span class="step"></span>
							<span class="step"></span>
							<span class="step"></span>
							<span class="step"></span>
							<span class="step"></span>
							<span class="step"></span>
							<span class="step"></span>
							<span class="step"></span>
						  </div>
						</div>  
						</form>
			
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<!--end-->
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

		//SIMPAN KUISIONER
		$('#submit').on('click',function(){
			var id_kuisi_satu	=$('#id_kuisi_satu').val();
			var jabatan			=$('#jabatan').val();
			var tgl_assessment	=$('#tgl_assessment').val();
			var kuisi_1			=$('#kuisi_1').val();
			var kuisi_1_a		=$('#kuisi_1_a').val();
			var kuisi_1_lain	=$('#kuisi_1_lain').val();
			var kuisi_2			=$('#kuisi_2').val();
			var kuisi_2_a		=$('#kuisi_2_a').val();
			var kuisi_2_lain	=$('#kuisi_2_lain').val();
			var kuisi_3			=$('#kuisi_3').val();
			var kuisi_3_a		=$('#kuisi_3_a').val();
			var kuisi_3_lain	=$('#kuisi_3_lain').val();
			var kuisi_4			=$('#kuisi_4').val();
			var kuisi_4_a		=$('#kuisi_4_a').val();
			var kuisi_4_lain	=$('#kuisi_4_lain').val();
			var kuisi_5			=$('#kuisi_5').val();
			var kuisi_6			=$('#kuisi_6').val();
			var kuisi_6_a		=$('#kuisi_6_a').val();
			var kuisi_6_lain	=$('#kuisi_6_lain').val();
			var kuisi_7			=$('#kuisi_7').val();
			var kuisi_7_a		=$('#kuisi_7_a').val();
			var kuisi_7_lain	=$('#kuisi_7_lain').val();
			var kuisi_8			=$('#kuisi_8').val();
			var kuisi_8_a		=$('#kuisi_8_a').val();
			var kuisi_8_lain	=$('#kuisi_8_lain').val();
			var kuisi_9			=$('#kuisi_9').val();
			var kuisi_9_a		=$('#kuisi_9_a').val();
			var kuisi_9_lain	=$('#kuisi_9_lain').val();
			var kuisi_10		=$('#kuisi_10').val();
			var kuisi_10_a		=$('#kuisi_10_a').val();
			var kuisi_10_lain	=$('#kuisi_10_lain').val();
			var kuisi_11		=$('#kuisi_11').val();
			var kuisi_11_a		=$('#kuisi_11_a').val();
			var kuisi_11_lain	=$('#kuisi_11_lain').val();
			var kuisi_12		=$('#kuisi_12').val();
			var kuisi_12_a		=$('#kuisi_12_a').val();
			var kuisi_12_lain	=$('#kuisi_12_lain').val();
			var kuisi_13		=$('#kuisi_13').val();
			var kuisi_13_a		=$('#kuisi_13_a').val();
			var kuisi_13_lain	=$('#kuisi_13_lain').val();
			var kuisi_14		=$('#kuisi_14').val();
			var kuisi_14_a		=$('#kuisi_14_a').val();
			var kuisi_14_lain	=$('#kuisi_14_lain').val();
			var kuisi_15		=$('#kuisi_15').val();
			var kuisi_15_a		=$('#kuisi_15_a').val();
			var kuisi_15_lain	=$('#kuisi_15_lain').val();
			var kuisi_16		=$('#kuisi_16').val();
			var kuisi_16_a		=$('#kuisi_16_a').val();
			var kuisi_16_lain	=$('#kuisi_16_lain').val();
			var kuisi_17		=$('#kuisi_17').val();
			var kuisi_17_lain	=$('#kuisi_17_lain').val();
			var kuisi_18		=$('#kuisi_18').val();
			var kuisi_18_lain	=$('#kuisi_18_lain').val();
			var kuisi_19		=$('#kuisi_19').val();
			var kuisi_19_lain	=$('#kuisi_19_lain').val();
			var kuisi_20		=$('#kuisi_20').val();
			var kuisi_21		=$('#kuisi_21').val();
			var ket				=$('#ket').val();
			
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('kuisioner/simpan_kuisi')?>",
                dataType : "JSON",
                data : {id_kuisi_satu:id_kuisi_satu, jabatan:jabatan, tgl_assessment:tgl_assessment, kuisi_1:kuisi_1, kuisi_1_a:kuisi_1_a, kuisi_1_lain:kuisi_1_lain, kuisi_2:kuisi_2, isi_2_a:kuisi_2_a, kuisi_2_lain:kuisi_2_lain, kuisi_3:kuisi_3, kuisi_3_a:kuisi_3_a, kuisi_3_lain:kuisi_3_lain, kuisi_4:kuisi_4, kuisi_4_a:kuisi_4_a, kuisi_4_lain:kuisi_4_lain, kuisi_5:kuisi_5, kuisi_6:kuisi_6, kuisi_6_a:kuisi_6_a, kuisi_6_lain:kuisi_6_lain, kuisi_7:kuisi_7, kuisi_7_a:kuisi_7_a, kuisi_7_lain:kuisi_7_lain, kuisi_8:kuisi_8, uisi_8_a:kuisi_8_a, kuisi_8_lain:kuisi_8_lain, kuisi_9:kuisi_9, kuisi_9_a:kuisi_9_a, kuisi_9_lain:kuisi_9_lain, kuisi_10:kuisi_10, kuisi_10_a:kuisi_10_a, uisi_10_lain:kuisi_10_lain, id_kuisi_dua:id_kuisi_dua, kuisi_11:kuisi_11, kuisi_11_a:kuisi_11_a, kuisi_11_lain:kuisi_11_lain, kuisi_12:kuisi_12, kuisi_12_a:kuisi_12_a, kuisi_12_lain:kuisi_12_lain, kuisi_13:kuisi_13, kuisi_13_a:kuisi_13_a, kuisi_13_lain:kuisi_13_lain, kuisi_14:kuisi_14, uisi_14_a:kuisi_14_a, kuisi_14_lain:kuisi_14_lain, kuisi_15:kuisi_15, kuisi_15_a:kuisi_15_a, kuisi_15_lain:kuisi_15_lain, kuisi_16:kuisi_16, kuisi_16_a:kuisi_16_a, uisi_16_lain:kuisi_16_lain, kuisi_17:kuisi_17, kuisi_17_lain:kuisi_17_lain, kuisi_18:kuisi_18, kuisi_18_lain:kuisi_18_lain, kuisi_19:kuisi_19, kuisi_19_lain:kuisi_19_lain, kuisi_20:kuisi_20, kuisi_21:kuisi_21, ket:ket},
                success: function(data){
						$('[name="id_kuisi_satu"]').val("");
						$('[name="jabatan"]').val("");
						$('[name="tgl_assessment"]').val("");
						$('[name="kuisi_1"]').val("");
						$('[name="kuisi_1_a"]').val("");
						$('[name="kuisi_1_lain"]').val("");
						$('[name="kuisi_2"]').val("");
						$('[name="kuisi_2_a"]').val("");
						$('[name="kuisi_2_lain"]').val("");
						$('[name="kuisi_3"]').val("");
						$('[name="kuisi_3_a"]').val("");
						$('[name="kuisi_3_lain"]').val("");
						$('[name="kuisi_4"]').val("");
						$('[name="kuisi_4_a"]').val("");
						$('[name="kuisi_4_lain"]').val("");
						$('[name="kuisi_5"]').val("");
						$('[name="kuisi_6"]').val("");
						$('[name="kuisi_6_a"]').val("");
						$('[name="kuisi_6_lain"]').val("");
						$('[name="kuisi_7"]').val("");
						$('[name="kuisi_7_a"]').val("");
						$('[name="kuisi_7_lain"]').val("");
						$('[name="kuisi_8"]').val("");
						$('[name="kuisi_8_a"]').val("");
						$('[name="kuisi_8_lain"]').val("");
						$('[name="kuisi_9"]').val("");
						$('[name="kuisi_9_a"]').val("");
						$('[name="kuisi_9_lain"]').val("");
						$('[name="kuisi_10"]').val("");
						$('[name="kuisi_10_a"]').val("");
						$('[name="kuisi_10_lain"]').val("");
						$('[name="kuisi_11"]').val("");
						$('[name="kuisi_11_a"]').val("");
						$('[name="kuisi_11_lain"]').val("");
						$('[name="kuisi_12"]').val("");
						$('[name="kuisi_12_a"]').val("");
						$('[name="kuisi_12_lain"]').val("");
						$('[name="kuisi_13"]').val("");
						$('[name="kuisi_13_a"]').val("");
						$('[name="kuisi_13_lain"]').val("");
						$('[name="kuisi_14"]').val("");
						$('[name="kuisi_14_a"]').val("");
						$('[name="kuisi_14_lain"]').val("");
						$('[name="kuisi_15"]').val("");
						$('[name="kuisi_15_a"]').val("");
						$('[name="kuisi_15_lain"]').val("");
						$('[name="kuisi_16"]').val("");
						$('[name="kuisi_16_a"]').val("");
						$('[name="kuisi_16_lain"]').val("");
						$('[name="kuisi_17"]').val("");
						$('[name="kuisi_17_lain"]').val("");
						$('[name="kuisi_18"]').val("");
						$('[name="kuisi_18_lain"]').val("");
						$('[name="kuisi_19"]').val("");
						$('[name="kuisi_19_lain"]').val("");
						$('[name="kuisi_20"]').val("");
						$('[name="kuisi_21"]').val("");
						$('[name="ket"]').val("");
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
