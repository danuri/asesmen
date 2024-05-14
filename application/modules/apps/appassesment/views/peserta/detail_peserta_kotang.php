<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>AC - BKKBN</title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	
	<meta http-equiv="Cache-control" content="no-cache">
    <link rel="canonical" href="https://www.speechtexter.com" />
	
	<link rel="shortcut icon" href="<?=base_url('assets/media/upload/bawaan/logo_bkkbn.png');?>" type="image/x-icon" />
	
	<link href="<?=base_url('assets/css/klasik.css');?>" rel="stylesheet">
	<!-- Bootstrap 3.3.2 -->
	<link href="<?=base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
	<!-- FontAwesome 4.3.0 -->
	<link href="<?=base_url('assets/css/font-awesome/font-awesome-4.4.0/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">
	<!-- Theme style -->
	<link href="<?=base_url('assets/css/adminlte/AdminLTE.min.css');?>" rel="stylesheet" type="text/css" />
	<!-- AdminLTE Skins. Choose a skin from the css/skins 
		 folder instead of downloading all of them to reduce the load. -->
	<link href="<?=base_url('assets/css/adminlte/skins/_all-skins.min.css');?>" rel="stylesheet" type="text/css" />
	<!-- jQuery Version 1.11.0 -->
	<script type="text/javascript" src="<?=base_url('assets/js/jquery/jquery-1.11.0.min.js');?>"></script>
	<!-- Morris Charts CSS -->
	<link href="<?=base_url('assets/css/plugins/morris.css');?>" rel="stylesheet">
	<!-- Bootstrap Core JavaScript -->
	<script type="text/javascript" src="<?=base_url('assets/js/bootstrap.min.js');?>"></script>
	<!-- AdminLTE App -->
	<script src="<?=base_url('assets/js/adminlte/app.min.js');?>" type="text/javascript"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/jquery/maskmoney/3.0.2/jquery.maskMoney.min.js');?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/bootstrap-timeout/bootstrap-session-timeout.min.js');?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/form.js');?>"></script>
	
	<!-- DataTables Responsive CSS -->
    <link href="<?=base_url('assets/css/datatables-responsive/dataTables.responsive.css');?>" rel="stylesheet">
    <!-- DataTable Button CSS -->
    <link href="<?=base_url('assets/css/datatables/css/buttons.dataTables.min.css');?>" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="<?=base_url('assets/css/datatables-plugins/dataTables.bootstrap.css');?>" rel="stylesheet">
	
	<!-- THIS VOICE TO TEXT
    <link rel="stylesheet" href="https://www.speechtexter.com/style.css?v=13"> 
    <link rel="manifest" href="https://www.speechtexter.com/manifest.json">
	-->
	
	<!-- THIS VOICE TO TEXT-->
    <link rel="stylesheet" href="<?=base_url('assets/css/stt_vox/style_v3.css');?>"> 
    <link rel="manifest" href="<?=base_url('assets/css/stt_vox/manifest.json');?>">

    <!--   ======== Open Graph ============================  -->
    <meta property="og:title" content="SpeechTexter | Type with your voice online" />
    <meta property="og:url" content="https://www.speechtexter.com" />
    <meta property="og:image" content="https://www.speechtexter.com/img/og_speechtexter.jpg" />
    <meta property="og:site_name" content="Speech Texter" />
    <meta property="og:description" content="Online speech to text converter. Type with your voice. Fast and easy." />


     <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HNDFVBSC04"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-HNDFVBSC04');
    </script>
	

</head>
  
<body class="skin-blue">

<div class="wrapper">
	<header class="main-header">
		<a href="index2.html" class="logo">
			<div style="float:left;padding:0px;">
				<img src="<?=base_url('assets/media/upload/bawaan/logo_bkkbn.png');?>" style="width:40px;padding-bottom:4px;"> AC BKKBN
			</div>
		</a>
		<nav class="navbar navbar-static-top" role="navigation">
			<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
			<span class="sr-only">Toggle navigation</span>
			</a>
			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">tes</ul>
			</div>
		</nav>
	</header>

	<aside class="main-sidebar">
		<section class="sidebar">
			<ul class="sidebar-menu">
				<li ><a href="#" onclick="history.go(-1); return false;"><i class="fa fa-backward" aria-hidden="true"></i> Kembali menu Utama</a></li>
				<li><a href="<?=site_url();?>login/out"><i class="fa fa-sign-out fa-fw"></i>  Keluar</a></li>
			</ul>
		</section>
	</aside>

	<div class="row">
		<div class="col-lg-12">
			<div class="content-wrapper">
				<section class="content">
						<div class="panel panel-default">
							<div class="panel-heading" style="Background:#1976d2;">
								<i class="fa fa-book" aria-hidden="true"></i>&nbsp; Riwayat Assessment Pegawai
							</div>
							<div class="panel-body">
								<ul class="nav nav-tabs">
									<li class="active"><a data-toggle="tab" href="#bio">Profile</a></li>
									<li><a data-toggle="tab" href="#nilai">Penilaian</a></li>
									<li><a data-toggle="tab" href="#voice">Voice to Text</a></li>
								</ul>
								<div class="tab-content">
									<!-- Profile -->
									<div id="bio" class="tab-pane fade in active">
										<div class="panel-default">
											<div class="panel-heading" style="Background:#124f8b;">
												<i class="fa fa-pencil-square" aria-hidden="true"></i>&nbsp; Identitas
											</div>
											<div class="panel-body">
												<div class="col-lg-10">
													<div class="table-responsive">
														<table width="100%" class="table table-bordered table-hover">
														<tbody>
														<?php foreach ($identitas->result() as $key) { ?>
															<tr>
																<td style="width:20%;">Nama</td>
																<td style="width:100%;"><b> <?php echo $key->nama; ?> </b></td>
															</tr>
															<tr>
																<td style="width:20%;">NIP</td>
																<td style="width:100%;"><b> <?php echo $key->nip; ?> </b></td>
															</tr>
														<?php } ?> 	
														</tbody>
														</table>
													</div>
												</div>
												<div class="col-lg-2">
													<img src="<?php echo base_url('assets/media/upload/bawaan/noimage.jpg');?>" style="width:100%;" />						
												</div>
											</div>
										</div>
										<div class="panel-default">
											<div class="panel-heading" style="Background:#124f8b;">
												<i class="fa fa-briefcase" aria-hidden="true"></i>&nbsp; Riwayat Jabatan
											</div>
											<div class="panel-body">
												<div class="table-responsive">
													<table width="100%" class="table table-striped table-bordered table-hover" id="myDataJab">
														<thead>
															<tr>
																<th style="width:10%;text-align:center;">Aksi</th>
																<th style="width:20%;text-align:center;">Pangkat / Gol.</th>
																<th style="width:40%;text-align:center;">Unit Kerja</th>
															</tr>
														</thead>
														<tbody>
														<?php 
														$no = 1;
														foreach ($r_jab->result() as $key)
														{ ?>
															<tr>
																<td style="width:10%;text-align:center;">
																	<div class="dropdown">
																		<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $no++; ?></button>
																		<ul class="dropdown-menu">
																		  <li><a href="<?php echo base_url();?>appassesment/peserta/lihat_drh/<?php echo $key->id_peserta; ?>" target="_blank" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-file-pdf-o"></i>&nbsp; Cetak DRH</a></li>
																		</ul>
																	</div>								
																</td>
																<td><?php echo $key->gol; ?> <br> <b><?php echo $key->jenjang; ?></b></td>
																<td><?php echo $key->jabatan; ?> <br><b>pada</b> <?php echo $key->unker; ?></td>
															</tr>
														<?php } ?>	
														</tbody>
													</table>
												</div>
											</div>
										</div>
										
										<div class="panel-default">
											<div class="panel-heading" style="Background:#124f8b;">
												<i class="fa fa-desktop" aria-hidden="true"></i>&nbsp; Status Assessment
											</div>
											<div class="panel-body">
												<div class="table-responsive">
													<table width="100%" class="table table-bordered table-hover table-striped" id="myDataAss">
													<thead>
														<tr>
															<th style="width:10px;text-align:center;">No</th>
															<th style="width:20px;text-align:center;">Tahun</th>
															<th style="width:30px;text-align:center;">Kegiatan</th>
															<th style="width:50px;text-align:center;">Jadwal</th>
															<th style="width:20px;text-align:center;">Alat Tes</th>
														</tr>
													</thead>
													<tbody>
													<?php 
													$no = 1;
													foreach ($assessment as $key=>$val)
													{ ?>
														<tr>
															<td style="width:5px;text-align:center;"><?php echo $no++;?></td>
														<!--
															<td style="width:10%;text-align:center;">
															<div class="dropdown">
																<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $no++; ?></button>
																
																<ul class="dropdown-menu">
																
																  <li><a href="<?php echo base_url();?>appassesment/peserta/lihat_ci/<?php echo $val['id_reg']; ?>" target="_blank" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-file-pdf-o"></i>&nbsp; Cetak CI</a></li>
																  
																  <li><a href="<?php echo base_url();?>appassesment/peserta/lihat_qkom/<?php echo $val['id_reg']; ?>" target="_blank" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-file-pdf-o"></i>&nbsp; Cetak Q-Kom</a></li>
																  
																  <li><a href="<?php echo base_url();?>appassesment/peserta/lihat_ankas/<?php echo $val['id_reg']; ?>" target="_blank" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-file-pdf-o"></i>&nbsp; Cetak Ankas</a></li>
																  
																  <li><a href="<?php echo base_url();?>appassesment/peserta/lihat_apm_dua/<?php echo $val['id_reg']; ?>" role="menuitem" data-toggle="modal" data-target="#ModalaAPM2"><i class="fa fa-calculator"></i>&nbsp; Lihat APM Set-2</a></li>
																  
																  <li><a href="<?php echo base_url();?>appassesment/peserta/lihat_cfit/<?php echo $val['id_reg']; ?>" role="menuitem" data-toggle="modal" data-target="#ModalaCfit"><i class="fa fa-calculator"></i>&nbsp; Lihat CFIT</a></li>
																  
																  <li><a href="" role="menuitem" data-toggle="modal" data-target="#ModalaPref"><i class="fa fa-calculator"></i>&nbsp; Lihat Preferensi</a></li>
																  
																  <li><a href="<?php echo base_url();?>appassesment/peserta/lihat_papi/<?php echo $val['id_reg']; ?>" target="_blank" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-file-pdf-o"></i>&nbsp; Lihat PAPI</a></li>
																  
																  <li><a href="<?php echo base_url();?>appassesment/export_papi/get_hasil_papi/<?php echo $val['id_reg']; ?>" target="_blank" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-download"></i>&nbsp; Download PAPi</a></li>
																</ul>
															</div>	
															</td>
															-->
															<td style="width:20px;text-align:center;"><?php echo $val['tgl_keg']; ?> <br> <b><?php echo $val['expired']; ?></b> </td>
															<td style="width:30px;"><?php echo $val['nama_kegiatan']; ?> <br/> <?php echo $val['jenis_kegiatan']; ?> || <?php echo $val['ket']; ?></td>
															<td style="width:80px;">Tgl. Psikometri	: <?php echo $val['tgl_psikometri']; ?> <br/> Tgl. Wawancara 	: <?php echo $val['tgl_wwcr']; ?>  <br/> Assessor : <b><?php echo $val['nama_personil']; ?></b></td>
															
															<td>
																<?php
																	$array_datas = array();
																	$a = $val['ci_satu'];
																	$b = $val['qkom_satu'];
																	$c = $val['apm'];
																	$d = $val['cfit'];
																	$e = $val['ankas'];
																	$f = $val['papi'];
																	
																	if ($a == 'ada') {
																	  echo '
																	  <a href="'.base_url().'appassesment/peserta/lihat_ci/'.$val['id_reg'].'" target="_blank">
																	  <div class="btn btn-default btn-xs pull-center"  type="button" style="background-color:#3a8d07;color:#fff;text-align:center;width: 80px;">
																	  CI</div></a>';
																	} else {
																	  echo '';
																	}	
																	
																	if ($b == 'ada') {
																	  echo '<a href="'.base_url().'appassesment/peserta/lihat_qkom/'.$val['id_reg'].'" target="_blank">
																	  <div class="btn btn-default btn-xs pull-center"  type="button" style="background-color:#3a8d07;color:#fff;text-align:center;width: 80px;">QKom</div></a>';
																	} else {
																	  echo '';
																	}	
																	
																	if ($c == 'ada') {
																	  echo '
																	  <a href="'.base_url().'appassesment/peserta/lihat_apm_dua/'.$val['id_reg'].'" target="_blank" role="menuitem" data-toggle="modal" data-target="#ModalaAPM2">
																	  <div class="btn btn-default btn-xs pull-center"  type="button" style="background-color:#3a8d07;color:#fff;text-align:center;width: 80px;">APM</div></a>';
																	} else {
																	  echo '';
																	}	
																	
																	if ($d == 'ada') {
																	  echo '
																	  <a href="'.base_url().'appassesment/peserta/lihat_cfit/'.$val['id_reg'].'" target="_blank" role="menuitem" data-toggle="modal" data-target="#ModalaCfit">
																	  <div class="btn btn-default btn-xs pull-center"  type="button" style="background-color:#3a8d07;color:#fff;text-align:center;width: 80px;">CFIT</div></a>';
																	} else {
																	  echo '';
																	}	
																	
																	if ($e == 'ada') {
																	  echo '
																	  <a href="'.base_url().'appassesment/peserta/lihat_ankas/'.$val['id_reg'].'" target="_blank">
																	  <div class="btn btn-default btn-xs pull-center"  type="button" style="background-color:#3a8d07;color:#fff;text-align:center;width: 80px;">Ankas</div></a>';
																	} else {
																	  echo '';
																	}	
																	
																	if ($f == 'ada') {
																	  echo '<div class="btn btn-default btn-xs pull-center"  type="button" data-toggle="dropdown" style="background-color:#3a8d07;color:#fff;text-align:center;width: 80px;">PAPI</div><ul class="dropdown-menu pull-right" role="menu" style="position:relative;"><li role="presentation"><a href="'.base_url().'appassesment/peserta/lihat_papi/'.$val['id_reg'].'" target="_blank"><i class="fa fa-file-pdf-o"></i>&nbsp; Lihat PAPI</a></li><li role="presentation"><a href="'.base_url().'appassesment/export_papi/get_hasil_papi/'.$val['id_reg'].'" target="_blank"><i class="fa fa-download"></i>&nbsp; Download PAPI</a></li></ul>';
																	} else {
																	  echo '';
																	}	
																	
																	
																?>
															</td>
															
														</tr>
													</tbody>
													<?php } ?>
													</table>
												</div>
											</div>
										</div>
									</div>
									<!-- end of Profile -->
									
									<!-- Hasil penilaian -->
									<div id="nilai" class="tab-pane fade">
									<?php foreach ($kegiatan->result() as $key){ ?>
										<div class="panel-group" id="accordion">
											<div class="panel-default">
												<div class="panel-heading" style="Background:#124f8b;">
													<div class="dropdown">
														<button class="btn btn-default btn-xs pull-left" type="button" data-toggle="dropdown">
															<i class="fa fa-caret-down fa-fw"></i></button>
															<ul class="dropdown-menu" role="menu">
																<li role="presentation"><a role="menuitem" class="btn btn-secondary pull-left" tabindex="-1" style="cursor:pointer;" href="#" data-toggle="modal" data-target="#ModalaAddPot"> <i class="glyphicon glyphicon-plus"></i> Buat Baru Penilaian Potensi</a></li>
																<li role="presentation"><a role="menuitem" class="btn btn-secondary pull-left" tabindex="-1" style="cursor:pointer;" href="#" data-toggle="modal" data-target="#ModalaAddKom"> <i class="glyphicon glyphicon-plus"></i> Buat Baru Penilaian Kompetensi</a></li>
															</ul>
													</div>
													<h4 class="panel-title">
														<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $key->id_peserta; ?>" style="text-decoration:none">&nbsp; Tahun <?php echo $key->tahun; ?> </a>
													</h4>
												</div>	
												<div id="collapse<?php echo $key->id_peserta; ?>" class="panel-collapse collapse">
													<div class="panel-body">
														<ul class="nav nav-tabs">
															<li class="active"><a data-toggle="tab" href="#pot">Potensi</a></li>
															<li><a data-toggle="tab" href="#kom">Kompetensi</a></li>
															<li><a data-toggle="tab" href="#urai">Uraian</a></li>
															<li><a data-toggle="tab" href="#kek">Kekuatan</a></li>
															<li><a data-toggle="tab" href="#ap">Area Pengembangan</a></li>
															<li><a data-toggle="tab" href="#speng">Saran Pengembangan</a></li>
															<li><a data-toggle="tab" href="#sp">Saran Penempatan</a></li>
															<li><a data-toggle="tab" href="#hasil">Hasil Assessment</a></li>
														</ul>
														<div class="tab-content">
															<div id="pot" class="tab-pane fade in active">
																<div class="panel-body">
																	<div class="table-responsive">
																		<table width="100%" class="table table-bordered table-striped">
																			<thead>
																				<tr>
																					<th rowspan=2 style="text-align:center;background:#cfd7d8;">Aspek</th>
																					<th rowspan=2  style="text-align:center;background:#cfd7d8;">Nilai</th>
																					<th colspan=5 style="text-align:center;background:#cfd7d8;">Skala Penilaian</th>
																				</tr>
																				<tr>
																					<th style="text-align:center;background:#cfd7d8;">KS</th>
																					<th style="text-align:center;background:#cfd7d8;">K</th>
																					<th style="text-align:center;background:#cfd7d8;">C</th>
																					<th style="text-align:center;background:#cfd7d8;">B</th>
																					<th style="text-align:center;background:#cfd7d8;">BS</th>
																				</tr>
																			</thead>
																			<tbody>
																				<?php foreach ($penilaian->result() as $key){ ?>
																					<tr>
																						<td>Kemampuan Intelektual</td>
																						<td><?php echo $key->aspek_pot1; ?></td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																					</tr>
																					<tr>
																						<td>Kemampuan Berpikir Kritis dan Strategis</td>
																						<td><?php echo $key->aspek_pot2; ?></td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																					</tr>
																					<tr>
																						<td>Kemampuan Penyelesaikan Permasalahan</td>
																						<td><?php echo $key->aspek_pot3; ?></td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																					</tr>
																					<tr>
																						<td>Hubungan Interpersonal </td>
																						<td><?php echo $key->aspek_pot4; ?></td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																					</tr>
																					<tr>
																						<td>Kecerdasan Emosional</td>
																						<td><?php echo $key->aspek_pot5; ?></td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																					</tr>
																					<tr>
																						<td>Kemampuan Belajar Cepat dan Mengembangkan Diri</td>
																						<td><?php echo $key->aspek_pot6; ?></td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																					</tr>
																					<tr>
																						<td>Motivasi dan Komitmen</td>
																						<td><?php echo $key->aspek_pot7; ?></td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																					</tr>
																					<tr>
																						<td>Kesadaran Diri</td>
																						<td><?php echo $key->aspek_pot8; ?></td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																					</tr>
																					<tr>
																						<td style="text-align:center;background:#cfd7d8;"><b>Total Nilai</b></td>
																						<td colspan=6 style="text-align:center;background:#cfd7d8;"><b><?php echo $key->capaian_pot; ?></b></td>
																					</tr>
																				<?php } ?>
																			</tbody>
																		</table>
																	</div>
																</div>
															</div>
															<div id="kom" class="tab-pane fade">
																<div class="panel-body">
																	<div class="table-responsive">
																		<table width="100%" class="table table-bordered table-striped">
																			<thead>
																				<tr>
																					<th rowspan=2 style="text-align:center;background:#cfd7d8;">Aspek</th>
																					<th rowspan=2 style="text-align:center;background:#cfd7d8;">Nilai</th>
																					<th colspan=5 style="text-align:center;background:#cfd7d8;">Level Kompetensi</th>
																				</tr>
																				<tr>
																					<th style="text-align:center;background:#cfd7d8;">1</th>
																					<th style="text-align:center;background:#cfd7d8;">2</th>
																					<th style="text-align:center;background:#cfd7d8;">3</th>
																					<th style="text-align:center;background:#cfd7d8;">4</th>
																					<th style="text-align:center;background:#cfd7d8;">5</th>
																				</tr>
																			</thead>
																			<tbody>
																				<?php foreach ($penilaian->result() as $key){ ?>
																					<tr>
																						<td>Integritas</td>
																						<td><?php echo $key->aspek_komp1; ?></td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																					</tr>
																					<tr>
																						<td>Kerja Sama</td>
																						<td><?php echo $key->aspek_komp2; ?></td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																					</tr>
																					<tr>
																						<td>Komunikasi</td>
																						<td><?php echo $key->aspek_komp3; ?></td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																					</tr>
																					<tr>
																						<td>Orientasi pada Hasil</td>
																						<td><?php echo $key->aspek_komp4; ?></td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																					</tr>
																					<tr>
																						<td>Pelayanan Publik</td>
																						<td><?php echo $key->aspek_komp5; ?></td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																					</tr>
																					<tr>
																						<td>Pengembangan Diri dan Orang Lain</td>
																						<td><?php echo $key->aspek_komp6; ?></td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																					</tr>
																					<tr>
																						<td>Mengelola Perubahan</td>
																						<td><?php echo $key->aspek_komp7; ?></td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																					</tr>
																					<tr>
																						<td>Pengambilan Keputusan</td>
																						<td><?php echo $key->aspek_komp8; ?></td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																					</tr>
																					<tr>
																						<td>Perekat Bangsa</td>
																						<td><?php echo $key->aspek_komp9; ?></td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																						<td>...</td>
																					</tr>
																					<tr>
																						<td style="text-align:center;background:#cfd7d8;"><b>Total Nilai</b></td>
																						<td colspan=6 style="text-align:center;background:#cfd7d8;"><b><?php echo $key->capaian_komp; ?></b></td>
																					</tr>
																				<?php } ?>
																			</tbody>
																		</table>
																	</div>
																</div>
															</div>
															<div id="urai" class="tab-pane fade">
																<div class="panel-body">
																	<div class="table-responsive">
																		<table width="100%" class="table table-bordered table-striped">
																			<tbody>
																				<?php foreach ($penilaian->result() as $key){ ?>
																					<tr>
																						<td><?php echo $key->uraian_potensi; ?></td>
																					</tr>
																				<?php } ?>
																			</tbody>
																		</table>
																	</div>	
																</div>
															</div>
															<div id="kek" class="tab-pane fade">
																<div class="panel-body">
																	<div class="table-responsive">
																		<table width="100%" class="table table-bordered table-striped">
																			<tbody>
																				<?php foreach ($penilaian->result() as $key){ ?>
																					<tr>
																						<td><?php echo $key->kek_1; ?></td>
																					</tr>
																					<tr>
																						<td><?php echo $key->kek_2; ?></td>
																					</tr>
																					<tr>
																						<td><?php echo $key->kek_3; ?></td>
																					</tr>
																					<tr>
																						<td><?php echo $key->kek_4; ?></td>
																					</tr>
																					<tr>
																						<td><?php echo $key->kek_5; ?></td>
																					</tr>
																					<tr>
																						<td><?php echo $key->kek_6; ?></td>
																					</tr>
																				<?php } ?>
																			</tbody>
																		</table>
																	</div>	
																</div>
															</div>
															<div id="ap" class="tab-pane fade">
																<div class="panel-body">
																	<div class="table-responsive">
																		<table width="100%" class="table table-bordered table-striped">
																			<tbody>
																				<?php foreach ($penilaian->result() as $key){ ?>
																					<tr>
																						<td><?php echo $key->ap_1; ?></td>
																					</tr>
																					<tr>
																						<td><?php echo $key->ap_2; ?></td>
																					</tr>
																					<tr>
																						<td><?php echo $key->ap_3; ?></td>
																					</tr>
																					<tr>
																						<td><?php echo $key->ap_4; ?></td>
																					</tr>
																					<tr>
																						<td><?php echo $key->ap_5; ?></td>
																					</tr>
																					<tr>
																						<td><?php echo $key->ap_6; ?></td>
																					</tr>
																				<?php } ?>
																			</tbody>
																		</table>
																	</div>	
																</div>
															</div>
															<div id="speng" class="tab-pane fade">
																<div class="panel-body">
																	<div class="table-responsive">
																		<table width="100%" class="table table-bordered table-striped">
																			<tbody>
																				<?php foreach ($penilaian->result() as $key){ ?>
																					<tr>
																						<td><?php echo $key->speng_1; ?></td>
																					</tr>
																					<tr>
																						<td><?php echo $key->speng_2; ?></td>
																					</tr>
																					<tr>
																						<td><?php echo $key->speng_3; ?></td>
																					</tr>
																					<tr>
																						<td><?php echo $key->speng_4; ?></td>
																					</tr>
																					<tr>
																						<td><?php echo $key->speng_5; ?></td>
																					</tr>
																					<tr>
																						<td><?php echo $key->speng_6; ?></td>
																					</tr>
																					<tr>
																						<td><?php echo $key->speng_7; ?></td>
																					</tr>
																					<tr>
																						<td><?php echo $key->speng_8; ?></td>
																					</tr>
																					<tr>
																						<td><?php echo $key->speng_9; ?></td>
																					</tr>
																					<tr>
																						<td><?php echo $key->speng_10; ?></td>
																					</tr>
																				<?php } ?>
																			</tbody>
																		</table>
																	</div>	
																</div>
															</div>
															<div id="sp" class="tab-pane fade">
																<div class="panel-body">
																	<div class="table-responsive">
																		<table width="100%" class="table table-bordered table-striped">
																			<tbody>
																				<?php foreach ($penilaian->result() as $key){ ?>
																					<tr>
																						<td><?php echo $key->sp_1; ?></td>
																					</tr>
																					<tr>
																						<td><?php echo $key->sp_2; ?></td>
																					</tr>
																					<tr>
																						<td><?php echo $key->sp_3; ?></td>
																					</tr>
																				<?php } ?>
																			</tbody>
																		</table>
																	</div>	
																</div>
															</div>
															<div id="hasil" class="tab-pane fade">
																<div class="panel-body">
																	<div class="row" id="source-html">
																		<div class="col-lg-6">
																			<div class="panel panel-default">
																				<div class="panel-body">
																					<h3 class="page-header"><i class="fa fa-user" aria-hidden="true"></i>&nbsp; Profil Individu</h3>
																					
																					<table width="100%" class="table table-bordered table-striped">
																						<tbody>
																							<?php foreach ($detail_lap->result() as $key){ ?>
																								<tr>
																									<td>NIP</td>
																									<td>:</td>
																									<td>&nbsp; <?php echo $key->nip; ?></td>
																								</tr>
																								<tr>
																									<td>Nama</td>
																									<td>:</td>
																									<td>&nbsp; <?php echo $key->nama; ?></td>
																								</tr>
																								<tr>
																									<td>Pangkat/Gol.</td>
																									<td>:</td>
																									<td>...</td>
																								</tr>
																								<tr>
																									<td>Jabatan/Unker</td>
																									<td>:</td>
																									<td>&nbsp; <?php echo $key->nama_jabatan; ?> <br><b>&nbsp; pada</b> <?php echo $key->biro; ?></td>
																								</tr>
																								<tr>
																									<td>Kegiatan</td>
																									<td>:</td>
																									<td>&nbsp; <?php echo $key->nama_kegiatan; ?> <br>&nbsp; <?php echo $key->tgl_keg; ?></td>
																								</tr>
																								<tr>
																									<td>Uji Kompetensi Berikutnya</td>
																									<td>:</td>
																									<td>&nbsp; <b><?php echo $key->nextukom; ?></b></td>
																								</tr>
																							<?php } ?>
																						</tbody>
																					</table><hr/>
																					
																					<p style="font-weight:bold;">Jabatan Saat ini</p>
																					<table width="100%" class="table table-bordered table-striped">
																						<tbody>
																							<?php foreach ($detail_lap->result() as $key){ ?>
																								<tr>
																									<td><?php echo $key->nama_jabatan; ?> <br><b>pada</b> <?php echo $key->biro; ?></td>
																								</tr>
																							<?php } ?>
																						</tbody>
																					</table><hr/>
																				
																					<p style="font-weight:bold;">Hasil Penilaian Kompetensi</p>
																					<table width="100%" class="table table-bordered table-striped">
																						<tbody>
																							<?php foreach ($detail_lap->result() as $key){ ?>
																								<tr>
																									<td>Potensi</td>
																									<td>:</td>
																									<td><?php echo $key->capaian_pot; ?></td>
																								</tr>
																								<tr>
																									<td>Kompetensi</td>
																									<td>:</td>
																									<td>...</td>
																								</tr>
																								<tr>
																									<td>Rekomendasi</td>
																									<td>:</td>
																									<td><b><?php echo $key->rekom_pot; ?></b></td>
																								</tr>
																							<?php } ?>
																						</tbody>
																					</table><hr/>
																				
																					<p style="font-weight:bold;">Gambaran Potensi</p>
																					<table width="100%" class="table table-bordered table-striped">
																						<tbody>
																							<?php foreach ($detail_lap->result() as $key){ ?>
																								<tr>
																									<td><?php echo $key->uraian_potensi; ?></td>
																								</tr>
																							<?php } ?>
																						</tbody>
																					</table><hr>	
																					
																					<p style="font-weight:bold;">Assessor</p>
																					<table width="100%" class="table table-bordered table-striped">
																						<tbody>
																							<?php foreach ($detail_lap->result() as $key){ ?>
																								<tr>
																									<td>...</td>
																								</tr>
																							<?php } ?>
																						</tbody>
																					</table>
																					
																				</div>
																			</div>
																		</div>
																		
																		<div class="col-lg-6">
																			<div class="panel panel-default">
																				<div class="panel-body">
																					<h3 class="page-header"><i class="fa fa-newspaper-o" aria-hidden="true"></i>&nbsp; Uraian</h3>
																					<p style="font-weight:bold;">Kekuatan</p>
																					<table width="100%" class="table table-bordered table-striped">
																						<tbody>
																							<?php foreach ($detail_lap->result() as $key){ ?>
																								<tr>
																									<td><?php echo $key->kek_1; ?><br/></td>
																								</tr>
																								<tr>
																									<td><?php echo $key->kek_2; ?><br/></td>
																								</tr>
																								<tr>
																									<td><?php echo $key->kek_3; ?><br/></td>
																								</tr>
																								<tr>
																									<td><?php echo $key->kek_4; ?><br/></td>
																								</tr>
																								<tr>
																									<td><?php echo $key->kek_5; ?><br/></td>
																								</tr>
																								<tr>	
																									<td><?php echo $key->kek_6; ?><br/></td>
																								</tr>
																							<?php } ?>
																						</tbody>
																					</table><hr/>
																					
																					<p style="font-weight:bold;">Area Pengembangan</p>
																					<table width="100%" class="table table-bordered table-striped">
																						<tbody>
																							<?php foreach ($detail_lap->result() as $key){ ?>
																								<tr>
																									<td><?php echo $key->ap_1; ?><br/></td>
																								</tr>
																								<tr>
																									<td><?php echo $key->ap_2; ?><br/></td>
																								</tr>
																								<tr>
																									<td><?php echo $key->ap_3; ?><br/></td>
																								</tr>
																								<tr>
																									<td><?php echo $key->ap_4; ?><br/></td>
																								</tr>
																								<tr>
																									<td><?php echo $key->ap_5; ?><br/></td>
																								</tr>
																								<tr>	
																									<td><?php echo $key->ap_6; ?><br/></td>
																								</tr>
																							<?php } ?>
																						</tbody>
																					</table><hr/>	
																					
																					<p style="font-weight:bold;">Saran Pengembangan</p>
																					<table width="100%" class="table table-bordered table-striped">
																						<tbody>
																							<?php foreach ($detail_lap->result() as $key){ ?>
																								<tr>
																									<td><?php echo $key->sp_1; ?><br/></td>
																								</tr>
																								<tr>
																									<td><?php echo $key->sp_2; ?><br/></td>
																								</tr>
																								<tr>
																									<td><?php echo $key->sp_3; ?><br/></td>
																								</tr>
																							<?php } ?>
																						</tbody>
																					</table>	
																					
																					<p style="font-weight:bold;">Saran Penempatan</p>
																					<table width="100%" class="table table-bordered table-striped">
																						<tbody>
																							<?php foreach ($detail_lap->result() as $key){ ?>
																								<tr>
																									<td><?php echo $key->sp_1; ?><br/></td>
																								</tr>
																								<tr>
																									<td><?php echo $key->sp_2; ?><br/></td>
																								</tr>
																								<tr>
																									<td><?php echo $key->sp_3; ?><br/></td>
																								</tr>
																							<?php } ?>
																						</tbody>
																					</table>	
																					
																				</div>
																			</div>
																			<hr/>					
																			<div class"footer" style="float:right;">
																				<button class="btn btn-info" id="btn-export" onclick="exportHTML();">Export to Word</button>
																			</div>	
																		<div class="clear-fix" style="text-align:left;"><p>Assessment Center - BKKBN</p></div>
																		</div>
																	</div>
																	
																</div>
															</div>
														</div>

													</div>
												</div>
											</div>
										</div>
									<?php } ?>
									</div>
									<!-- end of Hasil penilaian -->
									
									<!-- Tab voice -->
									<div id="voice" class="tab-pane fade">
										<div class="panel-default">
											<div class="panel-heading" style="Background:#124f8b;">
												<i class="fa fa-microphone" aria-hidden="true"></i>&nbsp; Rekam Suara
											</div>
											<div class="panel-body">
												<div class="col-lg-12">
<!-- voice -->
												
    <div id="app">
        <div id="top-navbar">
            <div class="width-limiter">
                <div class="group-row">
                    <div id="brand">STT.EG.1.3</div>
                    <div id="logo">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 1024 1024">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: #f60;
                                    }

                                    .cls-1,
                                    .cls-2,
                                    .cls-3 {
                                        fill-rule: evenodd;
                                    }

                                    .cls-2 {
                                        fill: #b04600;
                                    }

                                    .cls-3 {
                                        fill: url(#linear-gradient);
                                    }
                                </style>
                                <linearGradient id="linear-gradient" x1="511.719" y1="811" x2="511.719" y2="213.906"
                                    gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#c8c8c8" />
                                    <stop offset="1" stop-color="#f0f0f0" />
                                </linearGradient>
                            </defs>
                            <path id="svg-logo-back" class="cls-1"
                                d="M230.658,123.327S93.095,109.371,101.07,266.871s37.879,572.183,37.879,572.183-7.974,103.671,121.614,81.74S519.74,886.9,519.74,886.9l-31.9,129.588L820.784,853.01s107.658-29.9,101.677-173.45-37.879-486.455-37.879-486.455-21.931-109.652-153.513-95.7" />
                            <path id="svg-logo-shadow" class="cls-2"
                                d="M560,681.168V767H662a29,29,0,0,1,0,58H407a29,29,0,0,1,0-58H510V680.284C359.972,661.7,379,504,379,504s-2-17.5,23-18c18-.36,19,22,19,22S398.224,645.011,535,642c139.323-3.067,114-134,114-134s-0.979-21.39,23-22c13.5-.344,21,20,21,20S708.265,667.7,560,681.168ZM530,620c-86-2-88-82-88-82s-2-142,0-230c1.954-85.978,92-80,92-80,92,0,100,86,100,86l-2,234S616,622,530,620Z" />
                            <path id="svg-logo-mic" class="cls-3"
                                d="M536,667.168V753H638a29,29,0,0,1,0,58H383a29,29,0,0,1,0-58H486V666.284C335.972,647.7,355,490,355,490s-2-17.5,23-18c18-.36,19,22,19,22S374.224,631.011,511,628c139.323-3.067,114-134,114-134s-0.979-21.39,23-22c13.5-.344,21,20,21,20S684.265,653.7,536,667.168ZM506,606c-86-2-88-82-88-82s-2-142,0-230c1.954-85.978,92-80,92-80,92,0,100,86,100,86l-2,234S592,608,506,606Z" />
                        </svg>

                    </div>
                </div>
                <div class="b-group">
                    <div role="button" class="button" id="b-language" title="Select the language">
                        <div id="language-flag-display"></div>

                        <div id="language-name-display">...</div>

                    </div>

                    <div role="button" class="button" id="b-commands-list" title="Commands list">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 96 960 960" width="24">
                            <path fill="currentColor"
                                d="M160 776q-17 0-28.5-11.5T120 736q0-17 11.5-28.5T160 696q17 0 28.5 11.5T200 736q0 17-11.5 28.5T160 776Zm0-160q-17 0-28.5-11.5T120 576q0-17 11.5-28.5T160 536q17 0 28.5 11.5T200 576q0 17-11.5 28.5T160 616Zm0-160q-17 0-28.5-11.5T120 416q0-17 11.5-28.5T160 376q17 0 28.5 11.5T200 416q0 17-11.5 28.5T160 456Zm120 320v-80h560v80h380Zm0-160v-80h560v80h380Zm0-160v-80h560v80h380Z" />
                        </svg>
                    </div>
                    <div role="button" class="button" id="b-settings" title="Settings">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 96 960 960" width="24">
                            <path fill="currentColor"
                                d="m370 976-16-128q-13-5-24.5-12T307 821l-119 50L78 681l103-78q-1-7-1-13.5v-27q0-6.5 1-13.5L78 471l110-190 119 50q11-8 23-15t24-12l16-128h220l16 128q13 5 24.5 12t22.5 15l119-50 110 190-103 78q1 7 1 13.5v27q0 6.5-2 13.5l103 78-110 190-118-50q-11 8-23 15t-24 12l-16 128H370Zm112-260q58 0 99-41t41-99q0-58-41-99t-99-41q-59 0-99.5 41T342 576q0 58 40.5 99t99.5 41Zm0-80q-25 0-42.5-17.5T422 576q0-25 17.5-42.5T482 516q25 0 42.5 17.5T542 576q0 25-17.5 42.5T482 636Zm-2-60Zm-40 320h79l14-106q31-8 57.5-23.5T639 729l99 41 39-68-86-65q5-14 7-29.5t2-31.5q0-16-2-31.5t-7-29.5l86-65-39-68-99 42q-22-23-48.5-38.5T533 362l-13-106h-79l-14 106q-31 8-57.5 23.5T321 423l-99-41-39 68 86 64q-5 15-7 30t-2 32q0 16 2 31t7 30l-86 65 39 68 99-42q22 23 48.5 38.5T427 790l13 106Z">
                            </path>
                        </svg>
                    </div>

                    <div role="button" class="button" id="b-full-screen" title="Full screen">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-maximize">
                            <path
                                d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3">
                            </path>
                        </svg>
                    </div>


                </div>
            </div>
        </div>
        <div id="main">

            <div id="editorWrap" class="plainEditorWrap">

                <div id="noteTopBar">
                    <div role="button" class="button b-command-menu" id="b-note-new" title="New note">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-file">
                            <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                            <polyline points="13 2 13 9 20 9"></polyline>
                        </svg>
                    </div>

                    <div role="button" class="button b-command-menu" id="b-note-download" title="Download">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-download">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" y1="15" x2="12" y2="3"></line>
                        </svg>
                    </div>

                    <div role="button" class="button b-command-menu" id="b-note-print" title="Print">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-printer">
                            <polyline points="6 9 6 2 18 2 18 9"></polyline>
                            <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                            <rect x="6" y="14" width="12" height="8"></rect>
                        </svg>
                    </div>
                    |
                    <div role="button" class="button b-command-menu" id="b-note-bold" title="Bold">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-bold">
                            <path d="M6 4h8a4 4 0 0 1 4 4 4 4 0 0 1-4 4H6z"></path>
                            <path d="M6 12h9a4 4 0 0 1 4 4 4 4 0 0 1-4 4H6z"></path>
                        </svg>
                    </div>
                    <div role="button" class="button b-command-menu" id="b-note-italic" title="Italic">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-italic">
                            <line x1="19" y1="4" x2="10" y2="4"></line>
                            <line x1="14" y1="20" x2="5" y2="20"></line>
                            <line x1="15" y1="4" x2="9" y2="20"></line>
                        </svg>
                    </div>
                    <div role="button" class="button b-command-menu" id="b-note-underline" title="Underline">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-underline">
                            <path d="M6 3v7a6 6 0 0 0 6 6 6 6 0 0 0 6-6V3"></path>
                            <line x1="4" y1="21" x2="20" y2="21"></line>
                        </svg>
                    </div>
                </div>
                <!-- textEditor div must be in one line-->
                <div id="textEditor" class="note" contentEditable><p></p></div><!-- do not split this textEditor div-->
                <div id="noteInfo">
                    <div id="noteInfo1"></div>
                    <div id="noteInfo2">0 words</div>
                </div>
            </div>

            <div id="panel-right" class="hidden">
                <div id="commands-title" class="">
                    <div id="b-group-commands" class="hidden">
                        <div role="button" class="button b-command-menu" id="b-cm-add" title="Add new command">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-plus-circle">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="8" x2="12" y2="16"></line>
                                <line x1="8" y1="12" x2="16" y2="12"></line>
                            </svg>
                        </div>

                        <div role="button" class="button b-command-menu hidden-smooth" id="b-cm-reset"
                            title="Reset commands">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-rotate-cmw">
                                <polyline points="1 4 1 10 7 10"></polyline>
                                <path d="M3.51 15a9 9 0 1 0 2.13-9.36L1 10"></path>
                            </svg>
                        </div>

                        <div role="button" class="button b-command-menu" id="b-cm-import" title="Import commands">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-download">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                <polyline points="7 10 12 15 17 10"></polyline>
                                <line x1="12" y1="15" x2="12" y2="3"></line>
                            </svg>
                        </div>

                        <div role="button" class="button b-command-menu" id="b-cm-export" title="Export commands">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-upload">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                <polyline points="17 8 12 3 7 8"></polyline>
                                <line x1="12" y1="3" x2="12" y2="15"></line>
                            </svg>
                        </div>

                    </div>

                    <div role="button" class="button b-command-menu" id="b-cm-edit-commands" title="Edit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-edit-3">
                            <path d="M12 20h9"></path>
                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                        </svg>
                    </div>

                    <div role="button" class="button b-command-menu" id="b-cm-close-commands" title="close">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"
                            fill="#FFFFFF">
                            <path d="M0 0h34v24H0V0z" fill="none"></path>
                            <path
                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                            </path>
                        </svg>
                    </div>
                </div>
                <div id="commands-list"></div>
                <a href="#suggest-an-update" id="found-mistake" class="hidden" title="After you have made all the changes to your list,
click on the 'Export' button located above the list.
Then, send us your file as an attachment via email.">
                    Found a mistake or have a suggestion? [↓]
                </a>
            </div>


        </div>
        <div id="bottom-navbar">

            <div role="button" class="button" id="b-copy-all" title="Copy all text"><svg
                    xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                    <path d="M0 0h34v24H0z" fill="none"></path>
                    <path
                        d="M16 1H4c-1.1 0-2 .9-2 2v14h3V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h11c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 16H8V7h11v14z">
                    </path>
                </svg></div>
            <div role="button" class="button" id="b-undo" title="Undo
CTRL + Z"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                    <path d="M0 0h34v24H0V0z" fill="none"></path>
                    <path
                        d="M12.5 8c-2.65 0-5.05.99-6.9 2.6L2 7v9h9l-3.62-3.62c1.39-1.16 3.16-1.88 5.12-1.88 3.54 0 6.55 2.31 7.6 5.5l2.37-.78C21.08 11.03 17.15 8 12.5 8z">
                    </path>
                </svg></div>
            <div id="mic-outer-div">
                <div role="button" class="button" id="mic" title="Start / stop"><svg xmlns="http://www.w3.org/2000/svg"
                        enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px"
                        fill="currentColor">
                        <g>
                            <rect fill="none" height="24" width="24"></rect>
                            <rect fill="none" height="24" width="24"></rect>
                            <rect fill="none" height="24" width="24"></rect>
                        </g>
                        <g>
                            <g></g>
                            <g>
                                <path
                                    d="M12,14c1.66,0,3-1.34,3-3V5c0-1.66-1.34-3-3-3S9,3.34,9,5v6C9,12.66,10.34,14,12,14z">
                                </path>
                                <path
                                    d="M17,11c0,2.76-2.24,5-5,5s-5-2.24-5-5H5c0,3.53,2.61,6.43,6,6.92V21h3v-3.08c3.39-0.49,6-3.39,6-6.92H17z">
                                </path>
                            </g>
                        </g>
                    </svg></div>
            </div>
            <div role="button" class="button" id="b-redo" title="Redo
CTRL + Y"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                    <path d="M0 0h34v24H0V0z" fill="none"></path>
                    <path
                        d="M18.4 10.6C16.55 8.99 14.15 8 11.5 8c-4.65 0-8.58 3.03-9.96 7.22L3.9 16c1.05-3.19 4.05-5.5 7.6-5.5 1.95 0 3.73.72 5.12 1.88L13 16h9V7l-3.6 3.6z">
                    </path>
                </svg></div>

            <div role="button" class="button" id="b-send" title="Send"><svg xmlns="http://www.w3.org/2000/svg"
                    height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                    <path d="M0 0h34v24H0z" fill="none"></path>
                    <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"></path>
                </svg></div>
        </div>

        <div class="background-overlay hidden">
            <div id="menu-language" class="menu">
                <div class="menu-top">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-search">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>

                    </div>
                    <div class="menu-title" id="menu-language-title">
                        <div id="menu-language-filter" contenteditable="true"></div>

                    </div>

                    <div role="button" class="button close" title="close">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"
                            fill="#FFFFFF">
                            <path d="M0 0h34v24H0V0z" fill="none"></path>
                            <path
                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                            </path>
                        </svg>
                    </div>

                </div>
                <div id="menu-content-language" class="menu-content">

                </div>

            </div>
        </div>

        <div class="background-overlay hidden">
            <div id="menu-settings" class="menu">
                <div class="menu-top">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-settings">
                            <circle cx="12" cy="12" r="3"></circle>
                            <path
                                d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1h31a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                            </path>
                        </svg>

                    </div>
                    <div class="menu-title">SETTINGS</div>

                    <div role="button" class="button close" title="close">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"
                            fill="#FFFFFF">
                            <path d="M0 0h34v24H0V0z" fill="none"></path>
                            <path
                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                            </path>
                        </svg>
                    </div>

                </div>
                <div id="menu-content-settings" class="menu-content">
                    <div class="menu-row">
                        <div class="menu-row-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                                <path
                                    d="M840-680v480q0 33-23.5 56.5T760-120H200q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h480l160 160Zm-80 34L646-760H200v560h560v-446ZM480-240q50 0 85-35t35-85q0-50-35-85t-85-35q-50 0-85 35t-35 85q0 50 35 85t85 35ZM240-560h360v-160H240v160Zm-40-86v446-560 114Z" />
                            </svg>
                        </div>
                        <div class="menu-row-item">
                            <div class="menu-row-text">Autosave (uses browser's cache)</div>
                            <div class="menu-row-hint">
                                Not suitable for browsers configured to clear the cache upon exit.
                                Avoid utilizing this feature on shared computers. Instead, consider saving your work to
                                your personal device.
                            </div>
                        </div>
                        <div class="menu-row-switch" id="isAutoSaveOn">

                        </div>
                    </div>

                    <div class="menu-row">
                        <div class="menu-row-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                                <path
                                    d="M276-280h76l40-112h176l40 112h76L520-720h-80L276-280Zm138-176 64-182h4l64 182H414Zm66 376q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-400Zm0 320q133 0 226.5-93.5T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160Z" />
                            </svg>
                        </div>
                        <div class="menu-row-item">
                            <div class="menu-row-text">Capitalize proper nouns</div>
                            <div class="menu-row-hint">
                                Auto capitalization may not always function accurately, as in the case
                                of <strong>T</strong>arget (the name of a store) versus <strong>t</strong>arget (a
                                desired outcome).
                            </div>

                        </div>
                        <div class="menu-row-switch" id="capitalizeAuto">

                        </div>
                    </div>

                    <div class="menu-row">
                        <div class="menu-row-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                                <path
                                    d="M280-280h280v-80H280v80Zm0-160h400v-80H280v80Zm0-160h400v-80H280v80Zm-80 480q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm0-560v560-560Z" />
                            </svg>
                        </div>
                        <div class="menu-row-item">
                            <div class="menu-row-text">Capitalize first letter in a new sentence</div>
                        </div>
                        <div class="menu-row-switch" id="capitalizeFirstLetterNewSentence">
                        </div>
                    </div>

                    <div class="menu-row">
                        <div class="menu-row-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                                <path
                                    d="M360-160v-240q-83 0-141.5-58.5T160-600q0-83 58.5-141.5T360-800h360v80h-80v560h-80v-560H440v560h-80Z" />
                            </svg>
                        </div>
                        <div class="menu-row-item">
                            <div class="menu-row-text">Capitalize first letter in a new paragraph</div>
                        </div>
                        <div class="menu-row-switch" id="capitalizeFirstLetterNewParagraph">
                        </div>
                    </div>

                    <div class="menu-row">
                        <div class="menu-row-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                                <path
                                    d="m159-280 150-400h72l150 400h-69l-36-102H264l-36 102h-69Zm126-160h120l-58-166h-4l-58 166Zm369 171q-49 0-77-25.5T549-364q0-42 32.5-68.5T665-459q23 0 42.5 3.5T741-444v-14q0-27-18.5-43T672-517q-21 0-39.5 9T601-482l-43-32q19-27 48-41t67-14q62 0 95 29.5t33 85.5v176h-59v-34h-3q-13 20-35 31.5T654-269Zm10-50q32 0 54.5-22.5T741-396q-14-8-32-12t-33-4q-32 0-49 12.5T610-364q0 20 15 32.5t39 12.5Z" />
                            </svg>
                        </div>
                        <div class="menu-row-item">
                            <div class="menu-row-text">Capitalize every letter</div>
                        </div>
                        <div class="menu-row-switch" id="capitalizeEveryLetter">
                        </div>
                    </div>

                    <div class="menu-row">
                        <div class="menu-row-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                                <path
                                    d="M240-520h60v-80h-60v80Zm100 80h60v-240h-60v240Zm110 80h60v-400h-60v400Zm110-80h60v-240h-60v240Zm100-80h60v-80h-60v80ZM80-80v-720q0-33 23.5-56.5T160-880h640q33 0 56.5 23.5T880-800v480q0 33-23.5 56.5T800-240H240L80-80Zm126-240h594v-480H160v525l46-45Zm-46 0v-480 480Z" />
                            </svg>
                        </div>
                        <div class="menu-row-item">
                            <div class="menu-row-text">Enable voice commands</div>
                        </div>
                        <div class="menu-row-switch" id="isVoiceCommandOn">
                        </div>
                    </div>

                    <div class="menu-row">
                        <div class="menu-row-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                                <path
                                    d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h167q11-35 43-57.5t70-22.5q40 0 71.5 22.5T594-840h166q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560h-80v120H280v-120h-80v560Zm280-560q17 0 28.5-11.5T520-800q0-17-11.5-28.5T480-840q-17 0-28.5 11.5T440-800q0 17 11.5 28.5T480-760Z" />
                            </svg>
                        </div>
                        <div class="menu-row-item">
                            <div class="menu-row-text">Paste as plain text</div>
                            <div class="menu-row-hint">
                                Paste content without formatting
                            </div>
                        </div>
                        <div class="menu-row-switch" id="pastePlainText">
                        </div>
                    </div>

                    <div class="menu-row">
                        <div class="menu-row-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                                <path
                                    d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm100-200h46v-240h-36l-70 50 24 36 36-26v180Zm124 0h156v-40h-94l-2-2q21-20 34.5-34t21.5-22q18-18 27-36t9-38q0-29-22-48.5T458-600q-26 0-47 15t-29 39l40 16q5-13 14.5-20.5T458-558q15 0 24.5 8t9.5 20q0 11-4 20.5T470-486l-32 32-54 54v40Zm296 0q36 0 58-20t22-52q0-18-10-32t-28-22v-2q14-8 22-20.5t8-29.5q0-27-21-44.5T678-600q-25 0-46.5 14.5T604-550l40 16q4-12 13-19t21-7q13 0 21.5 7.5T708-534q0 14-10 22t-26 8h-18v40h20q20 0 31 8t11 22q0 13-11 22.5t-25 9.5q-17 0-26-7.5T638-436l-40 16q7 29 28.5 44.5T680-360ZM160-240h640v-480H160v480Zm0 0v-480 480Z" />
                            </svg>
                        </div>
                        <div class="menu-row-item">
                            <div class="menu-row-text">Word counter</div>
                        </div>
                        <div class="menu-row-switch" id="wordCounter">
                        </div>
                    </div>

                    <div class="menu-row">
                        <div class="menu-row-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                                <path
                                    d="M480-120q-150 0-255-105T120-480q0-150 105-255t255-105q14 0 27.5 1t26.5 3q-41 29-65.5 75.5T444-660q0 90 63 153t153 63q55 0 101-24.5t75-65.5q2 13 3 26.5t1 27.5q0 150-105 255T480-120Zm0-80q88 0 158-48.5T740-375q-20 5-40 8t-40 3q-123 0-209.5-86.5T364-660q0-20 3-40t8-40q-78 32-126.5 102T200-480q0 116 82 198t198 82Zm-10-270Z" />
                            </svg>
                        </div>
                        <div class="menu-row-item">
                            <div class="menu-row-text">Dark theme</div>
                        </div>
                        <div class="menu-row-switch" id="darkTheme">

                        </div>
                    </div>

                    <div class="menu-row">
                        <div class="menu-row-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                                <path
                                    d="M560-160v-520H360v-120h520v120H680v520H560Zm-360 0v-320H80v-120h360v120H320v320H200Z" />
                            </svg>
                        </div>
                        <div class="menu-row-item">
                            <div class="menu-row-text">Default font size</div>
                        </div>
                        <div class="menu-row-buttons" id="fontSize">
                            <div role="button" class="button" id="b-font-size-minus" title="Decrease font size">
                                - </div>
                            <div class="menu-row-value" id="b-font-size">16</div>
                            <div role="button" class="button" id="b-font-size-plus" title="Increase font size">
                                +
                            </div>
                        </div>
                    </div>

                    <div class="menu-row">
                        <div class="menu-row-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                                <path
                                    d="M256-240h84l44-122h192l44 122h84L522-720h-84L256-240Zm152-192 70-198h4l70 198H408ZM160-80q-33 0-56.5-23.5T80-160v-640q0-33 23.5-56.5T160-880h640q33 0 56.5 23.5T880-800v640q0 33-23.5 56.5T800-80H160Zm0-80h640v-640H160v640Zm0-640v640-640Z" />
                            </svg>
                        </div>
                        <div class="menu-row-item">
                            <div class="menu-row-text">Default font type</div>
                        </div>
                        <div class="menu-row-buttons">
                            <div role="button" class="button" id="b-font-type" title="Select font type">
                                Font type</div>
                        </div>

                    </div>

                    <div class="menu-row">
                        <div class="menu-row-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                                <path
                                    d="M360-840v-80h240v80H360Zm80 440h80v-240h-80v240Zm40 320q-74 0-139.5-28.5T226-186q-49-49-77.5-114.5T120-440q0-74 28.5-139.5T226-694q49-49 114.5-77.5T480-800q62 0 119 20t107 58l56-56 56 56-56 56q38 50 58 107t20 119q0 74-28.5 139.5T734-186q-49 49-114.5 77.5T480-80Zm0-80q116 0 198-82t82-198q0-116-82-198t-198-82q-116 0-198 82t-82 198q0 116 82 198t198 82Zm0-280Z" />
                            </svg>
                        </div>
                        <div class="menu-row-item">
                            <div class="menu-row-text">Add the dictated text to the note after a pause not longer than
                                (seconds)</div>
                            <div class="menu-row-hint">
                                Minimum recommended: 1.5 seconds. A lower value might return results with lower
                                accuracy.
                            </div>
                        </div>
                        <div class="menu-row-buttons" id="waitForFinalResultMS">
                            <div role="button" class="button" id="b-waitForFinalResultMS-minus"
                                title="Decrease font size">
                                - </div>
                            <div class="menu-row-value" id="b-waitForFinalResultMS"></div>
                            <div role="button" class="button" id="b-waitForFinalResultMS-plus"
                                title="Increase font size">
                                +
                            </div>
                        </div>
                    </div>

                    <div class="menu-row">
                        <div class="menu-row-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                                <path
                                    d="M480-400q-50 0-85-35t-35-85v-240q0-50 35-85t85-35q50 0 85 35t35 85v240q0 50-35 85t-85 35Zm0-240Zm-40 520v-123q-104-14-172-93t-68-184h80q0 83 58.5 141.5T480-320q83 0 141.5-58.5T680-520h80q0 105-68 184t-172 93v123h-80Zm40-360q17 0 28.5-11.5T520-520v-240q0-17-11.5-28.5T480-800q-17 0-28.5 11.5T440-760v240q0 17 11.5 28.5T480-480Z" />
                            </svg>
                        </div>
                        <div class="menu-row-item">
                            <div class="menu-row-text">Toggle microphone shortcut</div>
                        </div>
                        <div class="menu-row-shortcut" id="shortCutMic">ESC</div>
                    </div>

                    <div class="menu-row">
                        <div class="menu-row-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                                <path
                                    d="M480-80q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-155.5t86-127Q252-817 325-848.5T480-880q83 0 155.5 31.5t127 86q54.5 54.5 86 127T880-480q0 82-31.5 155t-86 127.5q-54.5 54.5-127 86T480-80Zm0-82q26-36 45-75t31-83H404q12 44 31 83t45 75Zm-104-16q-18-33-31.5-68.5T322-320H204q29 50 72.5 87t99.5 55Zm208 0q56-18 99.5-55t72.5-87H638q-9 38-22.5 73.5T584-178ZM170-400h136q-3-20-4.5-39.5T300-480q0-21 1.5-40.5T306-560H170q-5 20-7.5 39.5T160-480q0 21 2.5 40.5T170-400Zm216 0h188q3-20 4.5-39.5T580-480q0-21-1.5-40.5T574-560H386q-3 20-4.5 39.5T380-480q0 21 1.5 40.5T386-400Zm268 0h136q5-20 7.5-39.5T800-480q0-21-2.5-40.5T790-560H654q3 20 4.5 39.5T660-480q0 21-1.5 40.5T654-400Zm-16-240h118q-29-50-72.5-87T584-782q18 33 31.5 68.5T638-640Zm-234 0h152q-12-44-31-83t-45-75q-26 36-45 75t-31 83Zm-200 0h118q9-38 22.5-73.5T376-782q-56 18-99.5 55T204-640Z" />
                            </svg>
                        </div>
                        <div class="menu-row-item">
                            <div class="menu-row-text">Change language shortcut</div>
                        </div>
                        <div class="menu-row-shortcut" id="shortCutLanguageQuickSwitch">CTRL + Q</div>
                    </div>

                    <div class="menu-row">
                        <div class="menu-row-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                                <path
                                    d="M440-280h80v-240h-80v240Zm40-320q17 0 28.5-11.5T520-640q0-17-11.5-28.5T480-680q-17 0-28.5 11.5T440-640q0 17 11.5 28.5T480-600Zm0 520q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                            </svg>
                        </div>
                        <div class="menu-row-item">
                            <div class="menu-row-text" id="app-version">App version _</div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="background-overlay hidden">
            <div id="menu-note-download" class="menu">
                <div class="menu-top">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-download">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" y1="15" x2="12" y2="3"></line>
                        </svg>

                    </div>
                    <div class="menu-title">DOWNLOAD THIS NOTE</div>

                    <div role="button" class="button close" title="close">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"
                            fill="#FFFFFF">
                            <path d="M0 0h34v24H0V0z" fill="none"></path>
                            <path
                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                            </path>
                        </svg>
                        </button>
                    </div>

                </div>
                <div id="menu-content-note-download" class="menu-content">
                    <div class="menu-row">
                        <div class="menu-row-buttons">
                            <div role="button" class="button" id="b-download-doc" title="download a .doc file">
                                <svg height="32px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                    style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <path style="fill:#E2E5E7;"
                                        d="M128,0c-17.6,0-32,14.4-32,32v448c0,17.6,14.4,32,32,32h320c17.6,0,32-14.4,32-32V128L352,0H128z">
                                    </path>
                                    <path style="fill:#B0B7BD;" d="M384,128h96L352,0v96C352,113.6,366.4,128,384,128z">
                                    </path>
                                    <polygon style="fill:#CAD1D8;" points="480,224 384,128 480,128 "></polygon>
                                    <path style="fill:darkblue" d="M416,416c0,8.8-7.2,16-16,16H48c-8.8,0-16-7.2-16-16V256c0-8.8,7.2-16,16-16h352c8.8,0,16,7.2,16,16
	V416z"></path>
                                    <g>
                                        <path style="fill:#FFFFFF;" d="M92.576,384c-4.224,0-8.832-2.32-8.832-7.936v-72.656c0-4.608,4.608-7.936,8.832-7.936h39.296
		c58.464,0,57.168,88.528,1.136,88.528H92.576z M100.64,311.072v57.312h31.232c34.544,0,36.064-57.312,0-57.312H100.64z">
                                        </path>
                                        <path style="fill:#FFFFFF;" d="M228,385.28c-23.664,1.024-48.24-14.72-48.24-46.064c0-31.472,24.56-46.944,48.24-46.944
		c22.384,1.136,45.792,16.624,45.792,46.944C273.792,369.552,250.384,385.28,228,385.28z M226.592,308.912
		c-14.336,0-29.936,10.112-29.936,30.32c0,20.096,15.616,30.336,29.936,30.336c14.72,0,30.448-10.24,30.448-30.336
		C257.04,319.008,241.312,308.912,226.592,308.912z"></path>
                                        <path style="fill:#FFFFFF;" d="M288.848,339.088c0-24.688,15.488-45.92,44.912-45.92c11.136,0,19.968,3.328,29.296,11.392
		c3.456,3.184,3.84,8.816,0.384,12.4c-3.456,3.056-8.704,2.688-11.776-0.384c-5.232-5.504-10.608-7.024-17.904-7.024
		c-19.696,0-29.152,13.952-29.152,29.552c0,15.872,9.328,30.448,29.152,30.448c7.296,0,14.08-2.96,19.968-8.192
		c3.952-3.072,9.456-1.552,11.76,1.536c2.048,2.816,3.056,7.552-1.408,12.016c-8.96,8.336-19.696,10-30.336,10
		C302.8,384.912,288.848,363.776,288.848,339.088z"></path>
                                    </g>
                                    <path style="fill:#CAD1D8;"
                                        d="M400,432H96v16h304c8.8,0,16-7.2,16-16v-16C416,424.8,408.8,432,400,432z">
                                    </path>
                                </svg>
                                <span style="padding-left: 12px;">download a .doc file</span>
                            </div>

                            <div role="button" class="button" id="b-download-txt" title="download a .txt file">
                                <svg height="32px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                    style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <path style="fill:#E2E5E7;"
                                        d="M128,0c-17.6,0-32,14.4-32,32v448c0,17.6,14.4,32,32,32h320c17.6,0,32-14.4,32-32V128L352,0H128z">
                                    </path>
                                    <path style="fill:#B0B7BD;" d="M384,128h96L352,0v96C352,113.6,366.4,128,384,128z">
                                    </path>
                                    <polygon style="fill:#CAD1D8;" points="480,224 384,128 480,128 "></polygon>
                                    <path style="fill:darkorange;" d="M416,416c0,8.8-7.2,16-16,16H48c-8.8,0-16-7.2-16-16V256c0-8.8,7.2-16,16-16h352c8.8,0,16,7.2,16,16
        V416z"></path>
                                    <g>
                                        <path style="fill:#FFFFFF;" d="M132.784,311.472H110.4c-11.136,0-11.136-16.368,0-16.368h60.512c11.392,0,11.392,16.368,0,16.368
            h-21.248v64.592c0,11.12-16.896,11.392-16.896,0v-64.592H132.784z"></path>
                                        <path style="fill:#FFFFFF;" d="M224.416,326.176l22.272-27.888c6.656-8.688,19.568,2.432,12.288,10.752
            c-7.68,9.088-15.728,18.944-23.424,29.024l26.112,32.496c7.024,9.6-7.04,18.816-13.952,9.344l-23.536-30.192l-23.152,30.832
            c-6.528,9.328-20.992-1.152-13.68-9.856l25.696-32.624c-8.048-10.096-15.856-19.936-23.664-29.024
            c-8.064-9.6,6.912-19.44,12.784-10.48L224.416,326.176z"></path>
                                        <path style="fill:#FFFFFF;" d="M298.288,311.472h375.92c-11.136,0-11.136-16.368,0-16.368h60.496c11.392,0,11.392,16.368,0,16.368
            h-21.232v64.592c0,11.12-16.896,11.392-16.896,0V311.472z"></path>
                                    </g>
                                    <path style="fill:#CAD1D8;"
                                        d="M400,432H96v16h304c8.8,0,16-7.2,16-16v-16C416,424.8,408.8,432,400,432z">
                                    </path>

                                </svg>
                                <span style="padding-left: 12px;">download a .txt file</span>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="background-overlay hidden">
            <div id="menu-font-type" class="menu">
                <div class="menu-top">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-type">
                            <polyline points="4 7 4 4 20 4 20 7"></polyline>
                            <line x1="9" y1="20" x2="15" y2="20"></line>
                            <line x1="12" y1="4" x2="12" y2="20"></line>
                        </svg>
                    </div>
                    <div class="menu-title">SELECT FONT TYPE</div>
                    <div role="button" class="button close" title="close">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"
                            fill="#FFFFFF">
                            <path d="M0 0h34v24H0V0z" fill="none"></path>
                            <path
                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z">
                            </path>
                        </svg>
                    </div>
                </div>
                <div id="menu-content-font" class="menu-content">
                </div>
            </div>
        </div>

        <div id="snackbar"></div>
        <div id="overlay-speech">
            <div id="speech-box" class="hidden">
                <!-- <div id="speech-level"></div> -->
                <div id="speech-status" class="hidden"></div>
                <div id="speech-text" class="speech-dots"></div>
            </div>
        </div>
    </div>

												
<!-- end voice --> 
												</div>
											</div>
										</div>	
									</div>
									<!-- end of Tab voice -->
								</div>
							</div>
						</div>	
				</section>
			</div>
		</div>
	</div>
	
	<footer class="main-footer">
		<div class="pull-right hidden-xs">
		<b>Version</b> 3.2.2
		</div>
		<strong>&copy; 2022 || <a href="#"></strong>whaddupsap&trade;.</a> Page rendered in <strong>{elapsed_time}</strong> seconds
	</footer>
	
</div><!-- ./wrapper -->		
		
		
<!-- MODAL APM2 -->
    <div class="modal fade" id="ModalaAPM2" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="row modal-content" style="display:block;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3 class="modal-title" id="myModalLabel">Hasil APM Set-2</h3>
				</div>
				<form class="form-horizontal">
					<div class="modal-body">
						<table width="100%" class="table table-bordered table-hover table-striped">
							<thead>
								<tr>
									<th>Nama</th>
									<th>Nilai</th>
									<th>RS</th>
									<th>SS</th>
									<th>Ket</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($apm->result() as $key) { ?>
								<tr>
									<td><?php echo $key->nama; ?> <br/> NIP. <?php echo $key->nip; ?> </td>
									<td><?php echo $key->nilai; ?></td>
									<td><?php echo $key->rs; ?></td>
									<td><?php echo $key->ss; ?></td>
									<td><?php echo $key->ket; ?></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
						<div class="modal-footer">
							<button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
						</div>
					</div>
				</form>
			</div>
        </div>
    </div>
		
		
		
<!-- MODAL CFIT -->
    <div class="modal fade" id="ModalaCfit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="row modal-content" style="display:block;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3 class="modal-title" id="myModalLabel">Hasil CFIT</h3>
				</div>
				<form class="form-horizontal">
					<div class="modal-body">
						<table width="100%" class="table table-bordered table-hover table-striped">
							<thead>
								<tr>
									<th>Nama</th>
									<th>Sub Tes 1</th>
									<th>Sub Tes 2</th>
									<th>Sub Tes 3</th>
									<th>Sub Tes 4</th>
									<th>Total</th>
									<th>Norma IQ</th>
									<th>Kategori</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($cfit->result() as $key) { ?>
								<tr>
									<td><b><?php echo $key->nama; ?></b><br/>NIP. <?php echo $key->nip; ?></td>
									<td><?php echo $key->nilai_cfit_1; ?></td>
									<td><?php echo $key->nilai_cfit_2; ?></td>
									<td><?php echo $key->nilai_cfit_3; ?></td>
									<td><?php echo $key->nilai_cfit_4; ?></td>
									<td><?php echo $key->total_nilai_cfit; ?></td>
									<td><?php echo $key->norma_iq; ?></td>
									<td><?php echo $key->kategori; ?></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
						<div class="modal-footer">
							<button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
						</div>
					</div>
				</form>
			</div>
        </div>
    </div>
		

	<!-- DataTables JavaScript -->
	<script src="<?php echo base_url() ?>assets/css/datatables/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url() ?>assets/css/datatables-plugins/dataTables.bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>assets/css/datatables-responsive/dataTables.responsive.js"></script>
	<script src="<?php echo base_url() ?>assets/css/datatables/js/dataTables.buttons.min.js"></script>
	<script src="<?php echo base_url() ?>assets/css/datatables/js/buttons.flash.min.js"></script>
	<script src="<?php echo base_url() ?>assets/css/datatables/js/jszip.min.js"></script>
	<script src="<?php echo base_url() ?>assets/css/datatables/js/pdfmake.min.js"></script>
	<script src="<?php echo base_url() ?>assets/css/datatables/js/vfs_fonts.js"></script>
	<script src="<?php echo base_url() ?>assets/css/datatables/js/buttons.html5.min.js"></script>
	<script src="<?php echo base_url() ?>assets/css/datatables/js/buttons.print.min.js"></script>
	
    <!-- morris char-->
    <script src="<?php echo base_url() ?>assets/js/plugins/morris/raphael.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/morris/morris.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/morris/morris.min.js"></script>
	
	<script src="<?php echo base_url() ?>assets/css/stt_vox/script.js"  defer='defer'></script>
	
</body>
</html>


<script type="text/javascript">

    $(document).ready(function () {
        $('#myDataJab').DataTable({
			responsive: true,
            order : true,
			"pageLength": 5
        });
    });

    $(document).ready(function () {
        $('#myDataAss').DataTable({
			responsive: true,
            order : true,
			"pageLength": 5
        });
    });

    function exportHTML(){
       var header = "<html xmlns:o='urn:schemas-microsoft-com:office:office' "+
            "xmlns:w='urn:schemas-microsoft-com:office:word' "+
            "xmlns='http://www.w3.org/TR/REC-html40'>"+
            "<head><meta charset='utf-8'><title>Export HTML to Word Document with JavaScript</title></head><body>";
       var footer = "</body></html>";
       var sourceHTML = header+document.getElementById("source-html").innerHTML+footer;
       
       var source = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(sourceHTML);
       var fileDownload = document.createElement("a");
       document.body.appendChild(fileDownload);
       fileDownload.href = source;
	   <?php foreach ($detail_lap->result() as $key){ ?>
       fileDownload.download = 'hasil_lap_indi<?php echo $key->nama; ?>.doc';
	   <?php } ?>
       fileDownload.click();
       document.body.removeChild(fileDownload);
    }
/*	
	function myCI() {
		<?php foreach ($assessment as $key=>$val){ ?>
		window.open('<?php echo base_url();?>appassesment/peserta/lihat_ci/<?php echo $val['id_reg']; ?>', '_blank');
		//window.location.href = "<?php echo base_url();?>appassesment/peserta/lihat_ci/<?php echo $val['id_reg']; ?>" ;
		<?php } ?>
		}
*/		
</script>

<style>
.user-dantech	{text-align:center;padding-top:5px;border-bottom:1px solid #ccc; color:#fff;}
</style>
