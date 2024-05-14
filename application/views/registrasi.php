<!DOCTYPE html>
<html>
<head>
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
				  <h4>UPT PENILAIAN KOMPETENSI</h4>
				  <span>BKPSDM KOTA TANGERANG</span>
				</div>
				
				<nav class="main-nav" role="navigation" style="margin-top:-10px;">
					<ul class="main-menu">
					<li><a href="#section1">Registrasi</a></li>
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
				  <p>All Rights Reserved <br/> 	whaddupsap&trade; @ 2022</p>
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
							<span class="step"></span>
							<span class="step"></span>
							<span class="step"></span>
							<span class="step"></span>
							<span class="step"></span>
							<!--hanya DRH -->
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
							<!-- Target Jabatan -->
							<span class="step"></span>
							
						  </div>
						<form id="regForm" action="<?php echo base_url('registrasi/simpan_reg');?>" method="post">
						<div class="reg-item ">
						<!-- Tahap 1 -->
						<div class="tab">
						<h2 class="fs-title">Tahap 1 : Identitas Diri</h2>
						<h3 class="fs-subtitle">Penulisan menggunakan huruf kapital</h3>
							<div class="row">
							<?php
							if(count($caridata)>0){
								foreach ($caridata as $data) {
									echo '
									<div class="col-md-6">
										<p>
											<p class="help-block" style="color:#fff;">Nama</p>
											<input type="hidden" name="ket" value="Y">
											<input type="hidden" name="group_id" value="11000003">
											<input type="hidden" name="nip" value="'.$data->nip.'">
											<input type="hidden" name="username" value="'.$data->nip.'">
											<input type="hidden" name="id_peserta" value="'.$data->id_peserta.'">
											<input type="hidden" name="nama_user" value="'.$data->nama.'">
											<input type="hidden" name="jenjang" value="'.$data->jenjang.'">
											<input type="hidden" name="status" value="off">
								
											<textarea style="color:#000;" class="form-control" name="nama" value="'.$data->nama.'" readonly>'.$data->nama.'</textarea>
										</p>
										<p>
											<p class="help-block" style="color:#fff;">Jabatan</p>
											<textarea style="color:#000;" class="form-control" name="jabatan" value="'.$data->jabatan.'" readonly>'.$data->jabatan.'</textarea>
										</p>
										<p>
											<p class="help-block" style="color:#fff;">Pangkat/Gol.</p>
											<textarea style="color:#000;" class="form-control" name="gol" value="'.$data->pangkat.'" readonly>'.$data->pangkat.'</textarea>
										</p>
									</div>
									<div class="col-md-6">
										<p>
											<p class="help-block" style="color:#fff;">NIP</p>
											<textarea  style="color:#000;" class="form-control" name="nip" value="'.$data->nip.'" readonly>'.$data->nip.'</textarea>
										</p>
										<p>
											<p class="help-block" style="color:#fff;">Unit Kerja</p>
											<textarea style="color:#000;" class="form-control" name="unker" value="'.$data->unker.'" readonly>'.$data->unker.'</textarea>
										</p>
										<p>
											<p class="help-block" style="color:#fff;">Jenis Assessment</p>
											<textarea style="color:#000;" class="form-control" readonly> '.$data->nama_kegiatan.' </textarea>
										</p>
									</div>
									
									';
									}
								}
						 
								else
								{
									header("Location: https://assessment.tangerang-web.id/registrasi/search_failed");
									exit();
									//echo 'data ga ada';
								}
							?>	
							</div>
						</div>
						<!-- Tahap 2 -->
						<div class="tab">
						<h2 class="fs-title">Tahap 2 : Riwayat Pendidikan</h2>
						<h3 class="fs-subtitle">Pendidikan Awal diangkat CPNS dan terakhir yang diakui secara kepegawaian</h3>
							<div class="row">
								<div class="col-md-6">
								<p class="help-block" style="color:#fff;">Pendidikan Awal CPNS.</p>
									<p>
										<p class="help-block" style="color:#fff;">Jenjang</p>
										<select type="dropdown" class="form-control" name="jenped_awal" id="jenped_awal" required>
											<option>- pilih -</option>
											<option value="S-3">S-3</option>
											<option value="S-2">S-2</option>
											<option value="S-1/D.IV">S-1/D.IV</option>
											<option value="D-3">D.III</option>
											<option value="D-2">D.II</option>
											<option value="D-1">D.I</option>
											<option value="SMA">SMA</option>
											<option value="SMP">SMP</option>
											<option value="SD">SD</option>
										</select>
									</p>
									<p>
										<p class="help-block" style="color:#fff;">Jurusan</p>
										<textarea class="form-control" placeholder="Jurusan Pendidikan..." oninput="this.className = ''" name="jur_awal"></textarea>
									</p>
									<p>
										<p class="help-block" style="color:#fff;">Universitas/Perguruan Tinggi</p>
										<textarea class="form-control" placeholder="Nama Sekolah..." oninput="this.className = ''" name="univ_awal"></textarea>
									</p>
									<p>
										<p class="help-block" style="color:#fff;">Tahun</p>
										<textarea class="form-control" placeholder="Tahun Lulus..." oninput="this.className = ''" name="thn_awal"></textarea>
									</p>
								</div>
								
								<div class="col-md-6">
								<p class="help-block" style="color:#fff;">Pendidikan Terakhir.</p>		
									<p>
										<p class="help-block" style="color:#fff;">Jenjang</p>
										<select type="dropdown" class="form-control" name="jenpend_akhir" id="jenpend_akhir" required>
											<option>- pilih -</option>
											<option value="S-3">S-3</option>
											<option value="S-2">S-2</option>
											<option value="S-1/D.IV">S-1/D.IV</option>
											<option value="D-3">D.III</option>
											<option value="D-2">D.II</option>
											<option value="D-1">D.I</option>
											<option value="SMA">SMA</option>
											<option value="SMP">SMP</option>
											<option value="SD">SD</option>
										</select>
									</p>
									<p>
										<p class="help-block" style="color:#fff;">Jurusan</p>
										<textarea class="form-control" placeholder="Jurusan Pendidikan..." oninput="this.className = ''" name="jur_akhir"></textarea>
									</p>
									<p>
										<p class="help-block" style="color:#fff;">Universitas/Perguruan Tinggi</p>
										<textarea class="form-control" placeholder="Nama Sekolah..." oninput="this.className = ''" name="univ_akhir"></textarea>
									</p>
									<p>
										<p class="help-block" style="color:#fff;">Tahun</p>
										<textarea class="form-control" placeholder="Tahun Lulus..." oninput="this.className = ''" name="thn_akhir"></textarea>
									</p>
								</div>
							</div>
						</div>
						<!-- Tahap 3 -->
						<div class="tab">
						<h2 class="fs-title">Tahap 3 : Riwayat Jabatan</h2>
						<h3 class="fs-subtitle">Riwayat Jabatan 2 (dua) Kali Sebelum Jabatan Saat ini.</h3>
							<div class="row">
								<div class="col-md-6">
								<p class="help-block" style="color:#fff;">Riwayat Jabatan 1</p>
									<p>
										<p class="help-block" style="color:#fff;">Jabatan</p>
										<textarea class="form-control"  placeholder="Jabatan..." oninput="this.className = ''" name="jab_1"></textarea>
									</p>
									<p>
										<p class="help-block" style="color:#fff;">Unit Kerja</p>
										<textarea class="form-control" placeholder="Unit Kerja..." oninput="this.className = ''" name="unker_1"></textarea>
									</p>
									<p>
										<p class="help-block" style="color:#fff;">Tahun</p>
										<textarea class="form-control" placeholder="Tahun..." oninput="this.className = ''" name="thn_unker_1"></textarea>
									</p>
								</div>
								
								<div class="col-md-6">
								<p class="help-block" style="color:#fff;">Riwayat Jabatan 2</p>		
									<p>
										<p class="help-block" style="color:#fff;">Jabatan</p>
										<textarea class="form-control" placeholder="Jabatan..." oninput="this.className = ''" name="jab_2"></textarea>
									</p>
									<p>
										<p class="help-block" style="color:#fff;">Unit Kerja</p>
										<textarea class="form-control" placeholder="Unit Kerja..." oninput="this.className = ''" name="unker_2"></textarea>
									</p>
									<p>
										<p class="help-block" style="color:#fff;">Tahun</p>
										<textarea class="form-control" placeholder="Tahun..." oninput="this.className = ''" name="thn_unker_2"></textarea>
									</p>
								</div>
							</div>
						</div>
						<!-- Tahap 4 -->
						<div class="tab">
						<h2 class="fs-title">Tahap 4 : Testimoni Pekerjaan</h2>
						<h3 class="fs-subtitle">Di unit kerja mana, Saudara merasa PUAS dan TIDAK PUAS ? Ceritakan secara singkat !</h3>
							<div class="row">
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;">Unit Kerja yang Memuaskan</p>
										<textarea class="form-control" placeholder="Nama Unit Kerja..." oninput="this.className = ''" name="unker_puas"></textarea>
									</p>
									<p>
										<p class="help-block" style="color:#fff;">Berikan Alasan Saudara !</p>
										<textarea class="form-control" placeholder="Mengapa..." oninput="this.className = ''" name="alasan_puas"></textarea>
									</p>
								</div>
								
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;">Unit Kerja yang TIDAK Memuaskan</p>
										<textarea class="form-control" placeholder="Nama Unit Kerja..." oninput="this.className = ''" name="unker_no_puas"></textarea>
									</p>
									<p>
										<p class="help-block" style="color:#fff;">Berikan Alasan Saudara !</p>
										<textarea class="form-control" placeholder="Mengapa..." oninput="this.className = ''" name="alasan_no_puas"></textarea>
									</p>
								</div>
							</div>
						</div>
						<!-- Tahap 5 -->
						<div class="tab">
						<h2 class="fs-title">Tahap 5 : Kebijakan Manajemen</h2>
						<h3 class="fs-subtitle">Di unit kerja saat ini, kebijakan manajemen apa yang menurut Saudara perlu perbaikan untuk menciptakan suasana kerja yang kondusif <br/> sehingga dapat meningkatkan kinerja saudara?</h3>
							<div class="row">
								<div class="col-md-12">
									<p>
										<textarea class="form-control" placeholder="Berikan Pendapat Saudara..." oninput="this.className = ''" name="kebijakan"></textarea>
									</p>
								</div>
							</div>
						</div>
						<!-- Tahap 6 -->
						<div class="tab">
						<h2 class="fs-title">Tahap 6 : Kekuatan dan Kelemahan</h2>
						<h3 class="fs-subtitle">Ceritakan secara singkat !</h3>
							<div class="row">
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;">1. Sikap/Prilaku/Tindakan apa kekuatan/kelebihan Saudara ?</p>
										<textarea class="form-control" placeholder="Tuliskan Jawaban Saudara disini..." oninput="this.className = ''" name="kekuatan_1"></textarea>
									</p>
									<p>
										<p class="help-block" style="color:#fff;">Mengapa dan berikan alasan saudara !</p>
										<textarea class="form-control" placeholder="Mengapa..." oninput="this.className = ''" name="mengapa_kekuatan_1"></textarea>
									</p>
								</div>
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;">2. Sikap/Prilaku/Tindakan apa yang perlu diperbaiki dalam diri Saudara ?</p>
										<textarea class="form-control" placeholder="Tuliskan Jawaban Saudara disini..." oninput="this.className = ''" name="kekuatan_2"></textarea>
									</p>
									<p>
										<p class="help-block" style="color:#fff;">Mengapa dan berikan alasan saudara !</p>
										<textarea class="form-control" placeholder="Mengapa..." oninput="this.className = ''" name="mengapa_kekuatan_2"></textarea>
									</p>
								</div>
							</div>
						</div>
						<!-- Tahap 7 -->
						<div class="tab">
					<table border="1px" cellpadding="5px" cellspacing="5px">
						<tbody>
						<h2 class="fs-title">Tahap 7 : Critical Incident I (satu)</h2>
						<h3 class="fs-subtitle">Pengalaman yang MEMBANGGAKAN saudara selama bekerja sebagai ASN</h3>
							<p class="help-block" style="color:#fff;">Ceritakan kejadian yang pernah saudara alami didalam pekerjaan (boleh sewaktu bekerja ditempat /posisi lain sebelum yang sekarang) selama dua tahun terakhir ini yang dampak atau hasilnya merupakan suatu sukses besar <b> yang paling MEMBANGGAKAN bagi saudara. </b> (topik bebas, boleh mengenai apa saja. Contohnya bisa mengenai perjuangan /keberhasilan mencapai target tinggi atau program penting yang telah dilaksanakan, problem sulit yang akhirnya bisa diatasi, dan sebagainya).</p>	
							<div class="row">
								<div class="col-md-4">
									<p>
										<p class="help-block" style="color:#fff;">(1.) Topik Kejadian</p>
										<textarea class="form-control" placeholder="Tuliskan disini..." oninput="this.className = ''" name="s1_topik"></textarea>
										<input type="hidden" name="id_materi_ci1" value="4">
									</p>
								</div>	
								<div class="col-md-4">
									<p>
										<p class="help-block" style="color:#fff;">Tgl./Bln/Thn (Seingatnya saudara)</p>
										<textarea class="form-control" placeholder="Tgl./Bln/Tahun..." oninput="this.className = ''" name="s1_tmt"></textarea>
									</p>
								</div>
								
								<div class="col-md-4">
									<p>
										<p class="help-block" style="color:#fff;">sampai dengan..</p>
										<textarea class="form-control" placeholder="Tgl./Bln/Tahun..." oninput="this.className = ''" name="s1_tst"></textarea>
									</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;">(2.) Tuturkan garis besar kejadiannya dan bagaimana situasinya ?</p>
										<textarea class="form-control" placeholder="Tuliskan disini..." oninput="this.className = ''" name="s1_3"></textarea>
									</p>
								</div>	
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;">(3.) Mengapa kejadian ini menjadi pengalaman membanggakan saudara?</p>
										<textarea class="form-control" placeholder="Tuliskan disini..." oninput="this.className = ''" name="s1_4"></textarea>
									</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;">(4.) Siapa saja yang terlibat ? apa peran saudara dalam kejadian itu ?</p>
										<textarea class="form-control" placeholder="Tuliskan disini..." oninput="this.className = ''" name="s1_5"></textarea>
									</p>
								</div>	
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;">(5.) Perasaan keinginan apa saja yang ada pada saudara waktu itu ?</p>
										<textarea class="form-control" placeholder="Tuliskan disini..." oninput="this.className = ''" name="s1_6"></textarea>
									</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;">(6.) Upaya Apa yang saudara lakukan saat itu untuk keberhasilan ?</p>
										<textarea class="form-control" placeholder="Tuliskan disini..." oninput="this.className = ''" name="s1_7"></textarea>
									</p>
								</div>	
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;">(7.) Bagaimana akhir dari kejadian itu ? apa yang terjadi ?</p>
										<textarea class="form-control" placeholder="Tuliskan disini..." oninput="this.className = ''" name="s1_8"></textarea>
									</p>
								</div>
							</div>
							</tbody>
						</table>
						</div>
						<!-- Tahap 8 -->
						<div class="tab">
					<table border="1px" cellpadding="5px" cellspacing="5px">
						<tbody>
						<h2 class="fs-title">Tahap 8 : Critical Incident II (dua)</h2>
						<h3 class="fs-subtitle">Pengalaman yang MENGECEWAKAN saudara selama bekerja sebagai ASN</h3>
							<p class="help-block" style="color:#fff;">Ceritakan kejadian yang pernah saudara alami didalam pekerjaan (boleh sewaktu bekerja ditempat /posisi lain sebelum sekarang) selama dua tahun terakhir ini yang merupakan suatu kegagalan <b> yang paling MENGECEWAKAN bagi saudara. </b> (topiknya bebas, boleh mengenai apa saja. Contohnya bisa mengenai perjuangan mencapai target yang gagal, program penting yang akhirnya tidak terlaksana, problem sulit yang akhirnya tidak terpecahkan, dan sebagainya).</p>	
							<div class="row">
								<div class="col-md-4">
									<p>
										<p class="help-block" style="color:#fff;">(1.) Topik Kejadian</p>
										<textarea class="form-control" placeholder="Tuliskan disini..." oninput="this.className = ''" name="s2_topik"></textarea>
										<input type="hidden" name="id_materi_ci2" value="5">
									</p>
								</div>	
								<div class="col-md-4">
									<p>
										<p class="help-block" style="color:#fff;">Tgl./Bln/Thn (Seingatnya saudara)</p>
										<textarea class="form-control" placeholder="Tgl./Bln/Tahun..." oninput="this.className = ''" name="s2_tmt"></textarea>
									</p>
								</div>
								
								<div class="col-md-4">
									<p>
										<p class="help-block" style="color:#fff;">sampai dengan..</p>
										<textarea class="form-control" placeholder="Tgl./Bln/Tahun..." oninput="this.className = ''" name="s2_tst"></textarea>
									</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;">(2.) Tuturkan garis besar kejadiannya dan bagaimana situasinya ?</p>
										<textarea class="form-control" placeholder="Tuliskan disini..." oninput="this.className = ''" name="s2_3"></textarea>
									</p>
								</div>	
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;">(3.) Mengapa kejadian ini menjadi pengalaman mengecewakan saudara?</p>
										<textarea class="form-control" placeholder="Tuliskan disini..." oninput="this.className = ''" name="s2_4"></textarea>
									</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;">(4.) Siapa saja yang terlibat ? apa peran saudara dalam kejadian itu ?</p>
										<textarea class="form-control" placeholder="Tuliskan disini..." oninput="this.className = ''" name="s2_5"></textarea>
									</p>
								</div>	
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;">(5.) Perasaan keinginan apa saja yang ada pada saudara waktu itu ?</p>
										<textarea class="form-control" placeholder="Tuliskan disini..." oninput="this.className = ''" name="s2_6"></textarea>
									</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;">(6.) Upaya Apa yang saudara lakukan saat itu untuk keberhasilan ?</p>
										<textarea class="form-control" placeholder="Tuliskan disini..." oninput="this.className = ''" name="s2_7"></textarea>
									</p>
								</div>	
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;">(7.) Bagaimana akhir dari kejadian itu ? apa yang terjadi ?</p>
										<textarea class="form-control" placeholder="Tuliskan disini..." oninput="this.className = ''" name="s2_8"></textarea>
									</p>
								</div>
							</div>
							</tbody>
						</table>
						</div>
						<!-- Tahap 9 -->
						<div class="tab">
						<h2 class="fs-title">Tahap 9 : Q - Kompetensi (1)</h2>
							<div class="row">
							<table border="1px" cellpadding="5px" cellspacing="5px">
								<tbody>
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;">(1.-a) Ceritakan tindakan yang telah Saudara lakukan yang <b>sesuai</b> dengan aturan, nilai-nilai, dan etika yang berlaku !</p>
										<input type="hidden" name="id_materi_qkom" value="6">
										<textarea class="form-control" placeholder="Bagaimana kejadian/situasinya..." oninput="this.className = ''" name="jwb1a_a"></textarea>
										<textarea class="form-control" placeholder="Kapan terjadi..." oninput="this.className = ''" name="jwb1a_b"></textarea>
										<textarea class="form-control" placeholder="Apa peran Saudara dan jelaskan yang Saudara lakukan..." oninput="this.className = ''" name="jwb1a_c"></textarea>
										<textarea class="form-control" placeholder="Bagaimana hasilnya..." oninput="this.className = ''" name="jwb1a_d"></textarea>
									</p>
								</div>	
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;">(1.-b) Ceritakan tindakan yang telah Saudara lakukan yang <b>kurang sesuai</b> dengan aturan, nilai-nilai, dan etika yang berlaku !</p>
										<textarea class="form-control" placeholder="Bagaimana kejadian/situasinya..." oninput="this.className = ''" name="jwb1b_a"></textarea>
										<textarea class="form-control" placeholder="Kapan terjadi..." oninput="this.className = ''" name="jwb1b_b"></textarea>
										<textarea class="form-control" placeholder="Apa peran Saudara dan jelaskan yang Saudara lakukan..." oninput="this.className = ''" name="jwb1b_c"></textarea>
										<textarea class="form-control" placeholder="Bagaimana hasilnya..." oninput="this.className = ''" name="jwb1b_d"></textarea>
									</p>
								</div>
								</tbody>	
							</table>	
							</div>
						</div>
						<!-- Tahap 10 -->
						<div class="tab">
						<h2 class="fs-title">Tahap 10 : Q - Kompetensi (2)</h2>
							<div class="row">
							<table border="1px" cellpadding="5px" cellspacing="5px">
								<tbody>
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;">(2) Usaha apa saja yang sudah Saudara lakukan untuk memastikan sikap dan tindakan orang lain di lingkungan kerja Saudara sudah sesuai dengan aturan, nilai, dan norma organisasi yang berlaku!</p>
										<textarea class="form-control" placeholder="Bagaimana kejadian/situasinya..." oninput="this.className = ''" name="jwb2_a"></textarea>
										<textarea class="form-control" placeholder="Kapan terjadi..." oninput="this.className = ''" name="jwb2_b"></textarea>
										<textarea class="form-control" placeholder="Apa peran Saudara dan jelaskan yang Saudara lakukan..." oninput="this.className = ''" name="jwb2_c"></textarea>
										<textarea class="form-control" placeholder="Bagaimana hasilnya..." oninput="this.className = ''" name="jwb2_d"></textarea>
									</p>
								</div>	
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;">(3.) Ceritakan pengalaman Saudara ketika bekerja sama dalam tim untuk menyelesaikan sebuah proyek/kegiatan penting!</p>
										<textarea class="form-control" placeholder="Bagaimana kejadian/situasinya..." oninput="this.className = ''" name="jwb3_a"></textarea>
										<textarea class="form-control" placeholder="Kapan terjadi..." oninput="this.className = ''" name="jwb3_b"></textarea>
										<textarea class="form-control" placeholder="Apa peran Saudara dan jelaskan yang Saudara lakukan..." oninput="this.className = ''" name="jwb3_c"></textarea>
										<textarea class="form-control" placeholder="Bagaimana hasilnya..." oninput="this.className = ''" name="jwb3_d"></textarea>
									</p>
								</div>
								</tbody>	
							</table>	
							</div>
						</div>
						<!-- Tahap 11 -->
						<div class="tab">
						<h2 class="fs-title">Tahap 11 : Q - Kompetensi (3)</h2>
							<div class="row">
							<table border="1px" cellpadding="5px" cellspacing="5px">
								<tbody>
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;">(4.) Ceritakan pengalaman Saudara ketika mengerjakan kegiatan/tim kepanitiaan/proyek penting yang melibatkan lintas bidang/bagian dalam organisasi Saudara! </p>
										<textarea class="form-control" placeholder="Bagaimana kejadian/situasinya..." oninput="this.className = ''" name="jwb4_a"></textarea>
										<textarea class="form-control" placeholder="Kapan terjadi..." oninput="this.className = ''" name="jwb4_b"></textarea>
										<textarea class="form-control" placeholder="Apa peran Saudara dan jelaskan yang Saudara lakukan..." oninput="this.className = ''" name="jwb4_c"></textarea>
										<textarea class="form-control" placeholder="Bagaimana hasilnya..." oninput="this.className = ''" name="jwb4_d"></textarea>
									</p>
								</div>	
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;">(5.) Ceritakan Pengalaman Saudara dalam menyampaikan pendapat/informasi/ide baru baik secara lisan maupun tertulis untuk mencapai tujuan organisasi!</p>
										<textarea class="form-control" placeholder="Bagaimana kejadian/situasinya..." oninput="this.className = ''" name="jwb5_a"></textarea>
										<textarea class="form-control" placeholder="Kapan terjadi..." oninput="this.className = ''" name="jwb5_b"></textarea>
										<textarea class="form-control" placeholder="Apa peran Saudara dan jelaskan yang Saudara lakukan..." oninput="this.className = ''" name="jwb5_c"></textarea>
										<textarea class="form-control" placeholder="Bagaimana hasilnya..." oninput="this.className = ''" name="jwb5_d"></textarea>
									</p>
								</div>
								</tbody>	
							</table>	
							</div>
						</div>
						<!-- Tahap 12 -->
						<div class="tab">
						<h2 class="fs-title">Tahap 12 : Q - Kompetensi (4)</h2>
							<div class="row">
							<table border="1px" cellpadding="5px" cellspacing="5px">
								<tbody>
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;">(6.) Ceritakan pengalaman Saudara dalam memberikan target kerja yang lebih menantang kepada orang lain di unit kerja Saudara! </p>
										<textarea class="form-control" placeholder="Bagaimana kejadian/situasinya..." oninput="this.className = ''" name="jwb6_a"></textarea>
										<textarea class="form-control" placeholder="Kapan terjadi..." oninput="this.className = ''" name="jwb6_b"></textarea>
										<textarea class="form-control" placeholder="Apa peran Saudara dan jelaskan yang Saudara lakukan..." oninput="this.className = ''" name="jwb6_c"></textarea>
										<textarea class="form-control" placeholder="Bagaimana hasilnya..." oninput="this.className = ''" name="jwb6_d"></textarea>
									</p>
								</div>	
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;">(7.) Ceritakan pengalaman Saudara dalam memberikan pelayanan terhadap pengguna layanan! </p>
										<textarea class="form-control" placeholder="Bagaimana kejadian/situasinya..." oninput="this.className = ''" name="jwb7_a"></textarea>
										<textarea class="form-control" placeholder="Kapan terjadi..." oninput="this.className = ''" name="jwb7_b"></textarea>
										<textarea class="form-control" placeholder="Apa peran Saudara dan jelaskan yang Saudara lakukan..." oninput="this.className = ''" name="jwb7_c"></textarea>
										<textarea class="form-control" placeholder="Bagaimana hasilnya..." oninput="this.className = ''" name="jwb7_d"></textarea>
									</p>
								</div>
								</tbody>	
							</table>	
							</div>
						</div>
						<!-- Tahap 13 -->
						<div class="tab">
						<h2 class="fs-title">Tahap 13 : Q - Kompetensi (5)</h2>
							<div class="row">
							<table border="1px" cellpadding="5px" cellspacing="5px">
								<tbody>
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;">(8.) Ceritakan pengalaman Saudara dalam menangani complain (keluhan)  dari pengguna layanan!</p>
										<textarea class="form-control" placeholder="Bagaimana kejadian/situasinya..." oninput="this.className = ''" name="jwb8_a"></textarea>
										<textarea class="form-control" placeholder="Kapan terjadi..." oninput="this.className = ''" name="jwb8_b"></textarea>
										<textarea class="form-control" placeholder="Apa peran Saudara dan jelaskan yang Saudara lakukan..." oninput="this.className = ''" name="jwb8_c"></textarea>
										<textarea class="form-control" placeholder="Bagaimana hasilnya..." oninput="this.className = ''" name="jwb8_d"></textarea>
									</p>
								</div>	
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;">(9.) Ceritakan tindakan yang telah Saudara lakukan untuk mengembangkan kompetensi/meningkatkan kemampuan diri dan atau orang lain di unit kerja Saudara?</p>
										<textarea class="form-control" placeholder="Bagaimana kejadian/situasinya..." oninput="this.className = ''" name="jwb9_a"></textarea>
										<textarea class="form-control" placeholder="Kapan terjadi..." oninput="this.className = ''" name="jwb9_b"></textarea>
										<textarea class="form-control" placeholder="Apa peran Saudara dan jelaskan yang Saudara lakukan..." oninput="this.className = ''" name="jwb9_c"></textarea>
										<textarea class="form-control" placeholder="Bagaimana hasilnya..." oninput="this.className = ''" name="jwb9_d"></textarea>
									</p>
								</div>
								</tbody>	
							</table>	
							</div>
						</div>
						<!-- Tahap 14 -->
						<div class="tab">
						<h2 class="fs-title">Tahap 14 : Q - Kompetensi (6)</h2>
							<div class="row">
							<table border="1px" cellpadding="5px" cellspacing="5px">
								<tbody>
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;">(10.) Ceritakan pengalaman Saudara dalam mengelola bawahan/orang lain di unit kerja Saudara!</p>
										<textarea class="form-control" placeholder="Bagaimana kejadian/situasinya..." oninput="this.className = ''" name="jwb10_a"></textarea>
										<textarea class="form-control" placeholder="Kapan terjadi..." oninput="this.className = ''" name="jwb10_b"></textarea>
										<textarea class="form-control" placeholder="Apa peran Saudara dan jelaskan yang Saudara lakukan..." oninput="this.className = ''" name="jwb10_c"></textarea>
										<textarea class="form-control" placeholder="Bagaimana hasilnya..." oninput="this.className = ''" name="jwb10_d"></textarea>
									</p>
								</div>	
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;">(11.) Bagaimana Saudara menyikapi tuntutan perubahan dalam organisasi? </p>
										<textarea class="form-control" placeholder="Bagaimana kejadian/situasinya..." oninput="this.className = ''" name="jwb11_a"></textarea>
										<textarea class="form-control" placeholder="Kapan terjadi..." oninput="this.className = ''" name="jwb11_b"></textarea>
										<textarea class="form-control" placeholder="Apa peran Saudara dan jelaskan yang Saudara lakukan..." oninput="this.className = ''" name="jwb11_c"></textarea>
										<textarea class="form-control" placeholder="Bagaimana hasilnya..." oninput="this.className = ''" name="jwb11_d"></textarea>
									</p>
								</div>
								</tbody>	
							</table>	
							</div>
						</div>
						<!-- Tahap 15 -->
						<div class="tab">
						<h2 class="fs-title">Tahap 15 : Q - Kompetensi (7)</h2>
							<div class="row">
							<table border="1px" cellpadding="5px" cellspacing="5px">
								<tbody>
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;">(12.) Ceritakan pengalaman Saudara dalam menghadapi kesulitan-kesulitan yang diakibatkan oleh adanya perubahan yang terjadi di organisasi! </p>
										<textarea class="form-control" placeholder="Bagaimana kejadian/situasinya..." oninput="this.className = ''" name="jwb12_a"></textarea>
										<textarea class="form-control" placeholder="Kapan terjadi..." oninput="this.className = ''" name="jwb12_b"></textarea>
										<textarea class="form-control" placeholder="Apa peran Saudara dan jelaskan yang Saudara lakukan..." oninput="this.className = ''" name="jwb12_c"></textarea>
										<textarea class="form-control" placeholder="Bagaimana hasilnya..." oninput="this.className = ''" name="jwb12_d"></textarea>
									</p>
								</div>	
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;">(13.) Ceritakan pengalaman Saudara ketika berada dalam situasi yang mengharuskan Saudara mengambil sebuah keputusan! </p>
										<textarea class="form-control" placeholder="Bagaimana kejadian/situasinya..." oninput="this.className = ''" name="jwb13_a"></textarea>
										<textarea class="form-control" placeholder="Kapan terjadi..." oninput="this.className = ''" name="jwb13_b"></textarea>
										<textarea class="form-control" placeholder="Apa peran Saudara dan jelaskan yang Saudara lakukan..." oninput="this.className = ''" name="jwb13_c"></textarea>
										<textarea class="form-control" placeholder="Bagaimana hasilnya..." oninput="this.className = ''" name="jwb13_d"></textarea>
									</p>
								</div>
								</tbody>	
							</table>	
							</div>
						</div>
						<!-- Tahap 16 -->
						<div class="tab">
						<h2 class="fs-title">Tahap 16 : Q - Kompetensi (8)</h2>
							<div class="row">
							<table border="1px" cellpadding="5px" cellspacing="5px">
								<tbody>
								<div class="col-md-6"><!--<div class="col-md-6">-->
									<p>
										<p class="help-block" style="color:#fff;">(14.) Ceritakan pengalaman Saudara dalam rangka mengembangkan/membina/memupuk rasa persaudaraan antar individu yang berbeda latar belakang baik suku/budaya/adat istiadat dan toleransi antar umat beragama dan keyakinan baik di lingkungan kerja maupun di lingkungan masyarakat tempat tinggal Saudara?</p>
										<textarea class="form-control" placeholder="Bagaimana kejadian/situasinya..." oninput="this.className = ''" name="jwb14_a"></textarea>
										<textarea class="form-control" placeholder="Kapan terjadi..." oninput="this.className = ''" name="jwb14_b"></textarea>
										<textarea class="form-control" placeholder="Apa peran Saudara dan jelaskan yang Saudara lakukan..." oninput="this.className = ''" name="jwb14_c"></textarea>
										<textarea class="form-control" placeholder="Bagaimana hasilnya..." oninput="this.className = ''" name="jwb14_d"></textarea>
									</p>
								</div>	
								<!-- TARGET JABATAN -->
								
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;">(15.) Ceritakan alasan Saudara mengikuti seleksi pimpinan tinggi pratama ini! Jabatan satuan kerja  apa yang Saudara pilih?</p>
										<textarea class="form-control" placeholder="Tuliskan jawaban saudara disini" oninput="this.className = ''" name="jwb15"></textarea>
									</p>
								</div>
								
								</tbody>	
							</table>	
							</div>
						</div>
						<!-- Tahap 17 -->
						 
						<div class="tab">
						<h2 class="fs-title">Tahap 17 : Q - Kompetensi (9)</h2>
							<div class="row">
							<table border="1px" cellpadding="5px" cellspacing="5px">
								<tbody>
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;">(16.) Menurut Saudara apa saja kompetensi yang di butuhkan dalam jabatan yang Saudara pilih? Mengapa kompetensi itu dibutuhkan?</p>
										<textarea class="form-control" placeholder="Tuliskan jawaban saudara disini" oninput="this.className = ''" name="jwb16"></textarea>
									</p>
								</div>	
								<div class="col-md-6">
									<p>
										<p class="help-block" style="color:#fff;">(17.) Apa kompetensi yang Saudara miliki? Apakah kompetensi yang Saudara miliki sudah cukup sesuai dengan target jabatan Saudara?</p>
										<textarea class="form-control" placeholder="Tuliskan jawaban saudara disini" oninput="this.className = ''" name="jwb17"></textarea>
									</p>
								</div>
								</tbody>	
							</table>	
							</div>
							
						</div>
						  <!-- button -->
						  <div style="overflow:auto;">
							<div style="float:right;">
							  <button type="button" id="prevBtn" name="prevBtn" onclick="nextPrev(-1)">Previous</button>
							  <button type="button" id="nextBtn" name="nextBtn" onclick="nextPrev(1)">Next</button>
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
			
			var jwb1a_a 			=$('#jwb1a_a').val();
			var jwb1a_b 			=$('#jwb1a_b').val();
			var jwb1a_c 			=$('#jwb1a_c').val();
			var jwb1a_d 			=$('#jwb1a_d').val();
			var jwb1b_a 			=$('#jwb1b_a').val();
			var jwb1b_b 			=$('#jwb1b_b').val();
			var jwb1b_c 			=$('#jwb1b_c').val();
			var jwb1b_d 			=$('#jwb1b_d').val();
			var jwb2_a 				=$('#jwb2_a').val();
			var jwb2_b 				=$('#jwb2_b').val();
			var jwb2_c 				=$('#jwb2_c').val();
			var jwb2_d 				=$('#jwb2_d').val();
			var jwb3_a 				=$('#jwb3_a').val();
			var jwb3_b 				=$('#jwb3_b').val();
			var jwb3_c 				=$('#jwb3_c').val();
			var jwb3_d 				=$('#jwb3_d').val();
			var jwb4_a 				=$('#jwb4_a').val();
			var jwb4_b 				=$('#jwb4_b').val();
			var jwb4_c 				=$('#jwb4_c').val();
			var jwb4_d 				=$('#jwb4_d').val();
			var jwb5_a 				=$('#jwb5_a').val();
			var jwb5_b 				=$('#jwb5_b').val();
			var jwb5_c 				=$('#jwb5_c').val();
			var jwb5_d 				=$('#jwb5_d').val();
			var jwb6_a 				=$('#jwb6_a').val();
			var jwb6_b 				=$('#jwb6_b').val();
			var jwb6_c 				=$('#jwb6_c').val();
			var jwb6_d 				=$('#jwb6_d').val();
			var jwb7_a 				=$('#jwb7_a').val();
			var jwb7_b 				=$('#jwb7_b').val();
			var jwb7_c 				=$('#jwb7_c').val();
			var jwb7_d 				=$('#jwb7_d').val();
			var jwb8_a 				=$('#jwb8_a').val();
			var jwb8_b 				=$('#jwb8_b').val();
			var jwb8_c 				=$('#jwb8_c').val();
			var jwb8_d 				=$('#jwb8_d').val();
			var jwb9_a 				=$('#jwb9_a').val();
			var jwb9_b 				=$('#jwb9_b').val();
			var jwb9_c 				=$('#jwb9_c').val();
			var jwb9_d 				=$('#jwb9_d').val();
			var jwb10_a 			=$('#jwb10_a').val();
			var jwb10_b 			=$('#jwb10_b').val();
			var jwb10_c 			=$('#jwb10_c').val();
			var jwb10_d 			=$('#jwb10_d').val();
			var jwb11_a 			=$('#jwb11_a').val();
			var jwb11_b 			=$('#jwb11_b').val();
			var jwb11_c 			=$('#jwb11_c').val();
			var jwb11_d 			=$('#jwb11_d').val();
			var jwb12_a 			=$('#jwb12_a').val();
			var jwb12_b 			=$('#jwb12_b').val();
			var jwb12_c 			=$('#jwb12_c').val();
			var jwb12_d 			=$('#jwb12_d').val();
			var jwb13_a 			=$('#jwb13_a').val();
			var jwb13_b 			=$('#jwb13_b').val();
			var jwb13_c 			=$('#jwb13_c').val();
			var jwb13_d 			=$('#jwb13_d').val();
			var jwb14_a 			=$('#jwb14_a').val();
			var jwb14_b 			=$('#jwb14_b').val();
			var jwb14_c 			=$('#jwb14_c').val();
			var jwb14_d 			=$('#jwb14_d').val();
			var jwb15 				=$('#jwb15').val();
			var jwb16 				=$('#jwb16').val();
			var jwb17 				=$('#jwb17').val();
			
			var image 				=$('#image').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('registrasi/simpan_reg')?>",
                dataType : "JSON",
                data : {id_reg:id_reg, nama:nama, nip:nip, gol:gol, jabatan:jabatan, unker:unker, jenped_awal:jenped_awal, jur_awal:jur_awal, univ_awal:univ_awal, thn_awal:thn_awal, jenpend_akhir:jenpend_akhir, jur_akhir:jur_akhir, univ_akhir:univ_akhir, thn_akhir:thn_akhir, jab_1:jab_1, unker_1:unker_1, thn_unker_1:thn_unker_1, jab_2:jab_2, unker_2:unker_2, thn_unker_2:thn_unker_2, unker_puas:unker_puas, alasan_puas:alasan_puas, unker_no_puas:unker_no_puas, alasan_no_puas:alasan_no_puas, kebijakan:kebijakan, kekuatan_1:kekuatan_1, mengapa_kekuatan_1:mengapa_kekuatan_1, kekuatan_2:kekuatan_2, mengapa_kekuatan_2:mengapa_kekuatan_2, s1_topik:s1_topik, s1_tmt:s1_tmt, s1_tst:s1_tst, s1_3:s1_3, s1_4:s1_4, s1_5:s1_5, s1_6:s1_6, s1_7:s1_7, s1_8:s1_8, s2_topik:s2_topik, s2_tmt:s2_tmt, s2_tst:s2_tst, s2_3:s2_3, s2_4:s2_4, s2_5:s2_5, s2_6:s2_6, s2_7:s2_7, s2_8:s2_8, jwb1a_a:jwb1a_a, jwb1a_b:jwb1a_b, jwb1a_c:jwb1a_c, jwb1a_d:jwb1a_d, jwb1b_a:jwb1b_a, jwb1b_b:jwb1b_b, jwb1b_c:jwb1b_c, jwb1b_d:jwb1b_d, jwb2_a:jwb2_a, jwb2_b:jwb2_b, jwb2_c:jwb2_c, jwb2_d:jwb2_d, jwb3_a:jwb3_a, jwb3_b:jwb3_b, jwb3_c:jwb3_c, jwb3_d:jwb3_d, jwb4_a:jwb4_a, jwb4_b:jwb4_b, jwb4_c:jwb4_c, jwb4_d:jwb4_d, jwb5_a:jwb5_a, jwb5_b:jwb5_b, jwb5_c:jwb5_c, jwb5_d:jwb5_d, jwb6_a:jwb6_a, jwb6_b:jwb6_b, jwb6_c:jwb6_c, jwb6_d:jwb6_d, jwb7_a:jwb7_a, jwb7_b:jwb7_b, jwb7_c:jwb7_c, jwb7_d:jwb7_d, jwb8_a:jwb8_a, jwb8_b:jwb8_b, jwb8_c:jwb8_c, jwb8_d:jwb8_d, jwb9_a:jwb9_a, jwb9_b:jwb9_b, jwb9_c:jwb9_c, jwb9_d:jwb9_d, jwb10_a:jwb10_a, jwb10_b:jwb10_b, jwb10_c:jwb10_c, jwb10_d:jwb10_d, jwb11_a:jwb11_a, jwb11_b:jwb11_b, jwb11_c:jwb11_c, jwb11_d:jwb11_d, jwb12_a:jwb12_a, jwb12_b:jwb12_b, jwb12_c:jwb12_c, jwb12_d:jwb12_d, jwb13_a:jwb13_a, jwb13_b:jwb13_b, jwb13_c:jwb13_c, jwb13_d:jwb13_d, jwb14_a:jwb14_a, jwb14_b:jwb14_b, jwb14_c:jwb14_c, jwb14_d:jwb14_d, jwb15:jwb15, jwb16:jwb16, jwb17:jwb17, image:image},
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
						
						$('[name="jwb1a_a"]').val("");
						$('[name="jwb1a_b"]').val("");
						$('[name="jwb1a_c"]').val("");
						$('[name="jwb1a_d"]').val("");
						$('[name="jwb1b_a"]').val("");
						$('[name="jwb1b_b"]').val("");
						$('[name="jwb1b_c"]').val("");
						$('[name="jwb1b_d"]').val("");
						$('[name="jwb2_a"]').val("");
						$('[name="jwb2_b"]').val("");
						$('[name="jwb2_c"]').val("");
						$('[name="jwb2_d"]').val("");
						$('[name="jwb3_a"]').val("");
						$('[name="jwb3_b"]').val("");
						$('[name="jwb3_c"]').val("");
						$('[name="jwb3_d"]').val("");
						$('[name="jwb4_a"]').val("");
						$('[name="jwb4_b"]').val("");
						$('[name="jwb4_c"]').val("");
						$('[name="jwb4_d"]').val("");
						$('[name="jwb5_a"]').val("");
						$('[name="jwb5_b"]').val("");
						$('[name="jwb5_c"]').val("");
						$('[name="jwb5_d"]').val("");
						$('[name="jwb6_a"]').val("");
						$('[name="jwb6_b"]').val("");
						$('[name="jwb6_c"]').val("");
						$('[name="jwb6_d"]').val("");
						$('[name="jwb7_a"]').val("");
						$('[name="jwb7_b"]').val("");
						$('[name="jwb7_c"]').val("");
						$('[name="jwb7_d"]').val("");
						$('[name="jwb8_a"]').val("");
						$('[name="jwb8_b"]').val("");
						$('[name="jwb8_c"]').val("");
						$('[name="jwb8_d"]').val("");
						$('[name="jwb9_a"]').val("");
						$('[name="jwb9_b"]').val("");
						$('[name="jwb9_c"]').val("");
						$('[name="jwb9_d"]').val("");
						$('[name="jwb10_a"]').val("");
						$('[name="jwb10_b"]').val("");
						$('[name="jwb10_c"]').val("");
						$('[name="jwb10_d"]').val("");
						$('[name="jwb11_a"]').val("");
						$('[name="jwb11_b"]').val("");
						$('[name="jwb11_c"]').val("");
						$('[name="jwb11_d"]').val("");
						$('[name="jwb12_a"]').val("");
						$('[name="jwb12_b"]').val("");
						$('[name="jwb12_c"]').val("");
						$('[name="jwb12_d"]').val("");
						$('[name="jwb13_a"]').val("");
						$('[name="jwb13_b"]').val("");
						$('[name="jwb13_c"]').val("");
						$('[name="jwb13_d"]').val("");
						$('[name="jwb14_a"]').val("");
						$('[name="jwb14_b"]').val("");
						$('[name="jwb14_c"]').val("");
						$('[name="jwb14_d"]').val("");
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
