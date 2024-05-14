<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>UPT Penilaian Kompetensi</title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	
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

</head>
  
	<body class="skin-blue">
		<div class="wrapper">
			<header class="main-header">
				<a href="index2.html" class="logo">
				<div style="float:left;padding:0px;"><img src="<?=base_url('assets/media/upload/bawaan/logo_ktng.gif');?>" style='width:40px;padding-bottom:4px;'> 
					UPT PENKOM
				</div></a>
				<nav class="navbar navbar-static-top" role="navigation">
				  <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
				  </a>
				  <div class="navbar-custom-menu">
					<ul class="nav navbar-nav">notif</ul>
				  </div>
				</nav>
			</header>
		  <aside class="main-sidebar">
			<section class="sidebar">
				<ul class="sidebar-menu">
				<li ><a href="<?php echo base_url('module/appassesment/peserta/peserta_kerjasama');?>"><i class="fa fa-backward" aria-hidden="true"></i> Kembali menu Utama</a></li>
				<li><a href="<?=site_url();?>login/out"><i class="fa fa-sign-out fa-fw"></i>  Keluar</a></li>
				</ul>
			</section>
		  </aside>

		  <div class="content-wrapper">
			<section class="content">
				<div class="row">
					<div class="col-lg-12">
						<h3 class="page-header"><i class="fa fa-book" aria-hidden="true"></i>&nbsp; Riwayat Assessment (Peserta Kerjasama) </h3>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<i class="fa fa-user" aria-hidden="true"></i>&nbsp; Data Peserta
							</div>
							<div class="panel-body">
								<ul class="nav nav-tabs">
									<li class="active"><a data-toggle="tab" href="#prof">Profile</a></li>
									<li><a data-toggle="tab" href="#riwayat">Riwayat Assessment</a></li>
								</ul>
								<div class="tab-content">
									<div id="prof" class="tab-pane fade in active">
										<div class="panel-body">
											<div class="row">
												<div class="col-lg-8">
													<div class="row">
														<div class="col-lg-12">
															<div class="panel-default">
																<div class="panel-heading">
																	<i class="fa fa-pencil-square" aria-hidden="true"></i>&nbsp; Identitas
																</div>
																<div class="table-responsive">
																	<table width="100%" class="table table-bordered table-hover table-striped">
																	<tbody>
																	<?php foreach ($profile->result() as $key) { ?>
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
														</div>
														<div class="col-lg-12">
															<div class="panel-default">
																<div class="panel-heading">
																	<i class="fa fa-briefcase" aria-hidden="true"></i>&nbsp; Riwayat Jabatan
																</div>
																<div class="table-responsive">
																	<table width="100%" class="table table-bordered table-hover table-striped">
																	<thead>
																		<tr>
																			<th style="width:10%;text-align:center;">Aksi</th>
																			<th style="width:20%;text-align:center;">Pangkat / Gol.</th>
																			<th style="width:40%;text-align:center;">Jabatan</th>
																			<th style="width:40%;text-align:center;">Uit Kerja</th>
																		</tr>
																	</thead>
																	<tbody>
																	<?php foreach ($profile->result() as $key)
																	$no = 0 ;
																	$no++;
																	{ ?>
																		<tr>
																			<td style="width:10%;text-align:center;">
																				<div class="dropdown">
																					<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $no; ?></button>
																					<ul class="dropdown-menu">
																					  <li><a href="<?php echo base_url();?>appassesment/peserta/lihat_drh/<?php echo $key->nip; ?>" target="_blank" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-file-pdf-o"></i>&nbsp; Cetak DRH</a></li>
																					</ul>
																				</div>								
																			</td>
																			<td><?php echo $key->gol; ?></td>
																			<td><?php echo $key->jabatan; ?></td>
																			<td><?php echo $key->unker; ?></td>
																		</tr>
																	<?php } ?>	
																	</tbody>
																	</table>
																</div>
															</div>
														</div>
														<div class="col-lg-12">
															<div class="panel-default">
																<div class="panel-heading">
																	<i class="fa fa-desktop" aria-hidden="true"></i>&nbsp; Status Assessment
																</div>
																<div class="table-responsive">
																	<table width="100%" class="table table-bordered table-hover table-striped">
																	<thead>
																		<tr>
																			<th style="width:10%;text-align:center;">Aksi</th>
																			<th style="width:20%;text-align:center;">Tahun</th>
																			<th style="width:30%;text-align:center;">Kegiatan</th>
																			<th style="width:100%;text-align:center;">Jadwal</th>
																		</tr>
																	</thead>
																	<tbody>
																	<?php foreach ($assessment->result() as $key)
																	$no = 0 ;
																	$no++;
																	{ ?>
																		<tr>
																			<td style="width:10%;text-align:center;">
																			<div class="dropdown">
																				<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $no; ?></button>
																				<ul class="dropdown-menu">
																				  <li><a href="<?php echo base_url();?>appassesment/peserta/lihat_ci/<?php echo $key->nip; ?>" target="_blank" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-file-pdf-o"></i>&nbsp; Cetak CI</a></li>
																				  <li><a href="<?php echo base_url();?>appassesment/peserta/lihat_qkom/<?php echo $key->nip; ?>" target="_blank" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-file-pdf-o"></i>&nbsp; Cetak Q-Kom</a></li>
																				  <li><a href="<?php echo base_url();?>appassesment/peserta/lihat_ankas/<?php echo $key->nip; ?>" target="_blank" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-file-pdf-o"></i>&nbsp; Cetak Ankas</a></li>
																				  <li><a href="" role="menuitem" data-toggle="modal" data-target="#ModalaAPM2"><i class="fa fa-calculator"></i>&nbsp; Lihat APM Set-2</a></li>
																				  <li><a href="" role="menuitem" data-toggle="modal" data-target="#ModalaCfit"><i class="fa fa-calculator"></i>&nbsp; Lihat CFIT</a></li>
																				  <li><a href="<?php echo base_url();?>appassesment/export_papi/get_hasil_papi/<?php echo $key->nip; ?>" target="_blank" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-download"></i>&nbsp; Download PAPi</a></li>
																				</ul>
																			</div>								
																			</td>
																			<td><?php echo $key->tahun; ?> || <b><?php echo $key->status_ass; ?></b></td>
																			<td><?php echo $key->nama_kegiatan; ?> <br/> <?php echo $key->jenis_kegiatan; ?> || <?php echo $key->ket; ?></td>
																			<td>Tgl. Psikometri	: <?//php echo $key->tgl_psikometri; ?> <br/> Tgl. Wawancara 	: <?//php echo $key->tgl_wwcr; ?>  <br/> Assessor : <b><?//php echo $key->nama_personil; ?></b></td>
																		</tr>
																	</tbody>
																	<?php } ?>
																	</table>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-4">
													<div class="panel-default">
														<div class="panel-heading">
															<i class="fa fa-camera" aria-hidden="true"></i>&nbsp; Foto
														</div>
														<img src="<?php echo base_url('assets/media/upload/bawaan/noimage.jpg');?>" style="width:100%;" />
													</div>
												</div>
											</div>
											</div>
										</div>
									<div id="riwayat" class="tab-pane fade">
										<div class="panel-body">
											<?php foreach ($kegiatan->result() as $key){ ?>
											<div class="panel-group" id="accordion">
												<div class="panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
														<div class="dropdown">
															<button class="btn btn-default btn-xs pull-left" type="button" data-toggle="dropdown">
																<i class="fa fa-caret-down fa-fw"></i></button>
																<ul class="dropdown-menu" role="menu">
																	<li role="presentation"><a role="menuitem" class="btn btn-secondary pull-left" tabindex="-1" style="cursor:pointer;" href="#" data-toggle="modal" data-target="#ModalaAddPot"> <i class="glyphicon glyphicon-plus"></i> Buat Baru Penilaian Potensi</a></li>
																	<li role="presentation"><a role="menuitem" class="btn btn-secondary pull-left" tabindex="-1" style="cursor:pointer;" href="#" data-toggle="modal" data-target="#ModalaAddKom"> <i class="glyphicon glyphicon-plus"></i> Buat Baru Penilaian Kompetensi</a></li>
																</ul>
														</div>
															<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $key->id_peserta; ?>" style="text-decoration:none">&nbsp; Tahun <?php echo $key->tahun; ?> </a>
														</h4>
													</div>	
													<div id="collapse<?php echo $key->id_peserta; ?>" class="panel-collapse collapse">
														<div class="panel-body">
															<ul class="nav nav-tabs">
																<li class="active"><a data-toggle="tab" href="#pot">Potensi</a></li>
																<li><a data-toggle="tab" href="#kom">Kompetensi</a></li>
																<li><a data-toggle="tab" href="#int">Integrasi</a></li>
																<li><a data-toggle="tab" href="#hasil">Hasil Assessment</a></li>
															</ul>
																<div class="tab-content">
																	<div id="pot" class="tab-pane fade in active">
																		<div class="panel-body">
																			<?php foreach ($potensi->result() as $key){ ?>
																				<div class="row">
																					<div class="col-lg-4">
																						<div class="table-responsive">
																							<table width="100%" class="table table-bordered table-hover table-striped">
																							<thead style="background-color:#0c4a52;">
																								<tr>
																									<th style="width:30%;color:#fff;text-align:center;">Potensi</th>
																									<th style="width:10%;color:#fff;text-align:center;">Nilai</th>
																								</tr>
																							</thead>
																							<tbody>
																								<tr>
																									<td>Daya Analisa</td>
																									<td style="text-align:center;font-weight:bold;"><?php echo $key->nilai_da_pot; ?></td>
																								</tr>
																								<tr>
																									<td>Logika Berpikir</td>
																									<td style="text-align:center;font-weight:bold;"><?php echo $key->nilai_lb_pot; ?></td>
																								</tr>
																								<tr>
																									<td>Sistematika Kerja</td>
																									<td style="text-align:center;font-weight:bold;"><?php echo $key->nilai_sk_pot; ?></td>
																								</tr>
																								<tr>
																									<td>Inisiatif</td>
																									<td style="text-align:center;font-weight:bold;"><?php echo $key->nilai_ini_pot; ?></td>
																								</tr>
																								<tr>
																									<td>Daya Tahan Kerja</td>
																									<td style="text-align:center;font-weight:bold;"><?php echo $key->nilai_dtk_pot; ?></td>
																								</tr>
																								<tr>
																									<td>Kepemimpinan</td>
																									<td style="text-align:center;font-weight:bold;"><?php echo $key->nilai_kep_pot; ?></td>
																								</tr>
																							</tbody>
																							</table>
																						</div>	
																					</div>	
																					<div class="col-lg-4">
																						<div class="table-responsive">
																							<table width="100%" class="table table-bordered table-hover table-striped">
																							<thead style="background-color:#0c4a52;">
																								<tr>
																									<th style="width:30%;color:#fff;text-align:center;">Potensi</th>
																									<th style="width:10%;color:#fff;text-align:center;">Nilai</th>
																								</tr>
																							</thead>
																							<tbody>
																								<tr>
																									<td>Dorongan Berprestasi</td>
																									<td style="text-align:center;font-weight:bold;"><?php echo $key->nilai_db_pot; ?></td>
																								</tr>
																								<tr>
																									<td>Tanggung Jawab</td>
																									<td style="text-align:center;font-weight:bold;"><?php echo $key->nilai_tj_pot; ?></td>
																								</tr>
																								<tr>
																									<td>: Keterampilan Interpersonal</td>
																									<td style="text-align:center;font-weight:bold;"><?php echo $key->nilai_ki_pot; ?></td>
																								</tr>
																								<tr>
																									<td>Kepercayaan Diri</td>
																									<td style="text-align:center;font-weight:bold;"><?php echo $key->nilai_kd_pot; ?></td>
																								</tr>
																								<tr>
																									<td>Stabilitas Emosi</td>
																									<td style="text-align:center;font-weight:bold;"><?php echo $key->nilai_se_pot; ?></td>
																								</tr>
																							</tbody>
																							</table>
																						</div>	
																					</div>	
																					<div class="col-lg-4">
																						<div class="table-responsive">
																							<table width="100%" class="table table-bordered table-hover table-striped">
																							<thead style="background-color:#0c4a52;">
																								<tr>
																									<th colspan="2" style="width:30%;color:#fff;text-align:center;">Hasil</th>
																								</tr>
																							</thead>
																							<tbody>
																								<tr>
																									<td style="width:10%;"><b>NILAI</b></td>
																									<td style="width:30%;"><b><?php echo $key->nilai_pot; ?></b></td>
																								</tr>
																								<tr>
																									<td style="width:10%;"><b>PERCENT</b></td>
																									<td style="width:30%;"><b><?php echo $key->percent_pot; ?> %</b></td>
																								</tr>
																							</tbody>
																							</table>
																						</div>	
																					</div>	
																				</div>	
																			<?php } ?>
																		</div>
																	</div>	
																	<div id="kom" class="tab-pane fade">
																		<div class="panel-body">
																		<ul class="nav nav-tabs">
																			<li class="active"><a data-toggle="tab" href="#lgd">LGD</a></li>
																			<li><a data-toggle="tab" href="#bei">BEI</a></li>
																			<li><a data-toggle="tab" href="#ankas">ANKAS</a></li>
																			<li><a data-toggle="tab" href="#bei_sekda">BEI (SEKDA)</a></li>
																			<li><a data-toggle="tab" href="#pw">PW</a></li>
																		</ul>
																		<!-- LGD -->
																			<div class="tab-content">
																			<?php foreach ($kompetensi->result() as $key) { ?>
																				<div id="lgd" class="tab-pane fade in active">
																					<div class="panel-body">
																						<div class="table-responsive">
																						<table width="100%" class="table table-bordered table-hover table-striped">
																							<thead style="background-color:#0c4a52;">
																								<tr>
																									<th style="width:10%;color:#fff;text-align:center;">Kompetensi</th>
																									<th style="width:10%;color:#fff;text-align:center;">Nilai</th>
																									<th style="width:100%;color:#fff;text-align:center;">
																									Evidence
																									<a role="menuitem" class="btn btn-default btn-xs pull-right" tabindex="-1" style="cursor:pointer;" href="#" data-toggle="modal" data-target="#ModalaEditKom_LGD">
																									<i class="fa fa-edit fa-fw"></i> Edit </a>
																									</th>
																								</tr>
																							</thead>
																							<tbody>
																								<tr>
																									<td style="text-align:center;font-weight:bold;">KJS</td>
																									<td style="width:10%;text-align:center;"><?php echo $key->bobot_lgd_kjs; ?></td>
																									<td><p style="width:100%;text-align: justify;"><?php echo $key->ev_lgd_kjs; ?></td>
																								</tr>
																								<tr>
																									<td style="text-align:center;font-weight:bold;">KOM</td>
																									<td style="width:10%;text-align:center;"><?php echo $key->bobot_lgd_kom; ?></td>
																									<td><p style="width:100%;text-align: justify;"><?php echo $key->ev_lgd_kom; ?></td>
																								</tr>
																								<tr>
																									<td style="text-align:center;font-weight:bold;">OPH</td>
																									<td style="width:10%;text-align:center;"><?php echo $key->bobot_lgd_oph; ?></td>
																									<td><p style="width:100%;text-align: justify;"><?php echo $key->ev_lgd_oph; ?></td>
																								</tr>
																								<tr>
																									<td style="text-align:center;font-weight:bold;">MP</td>
																									<td style="width:10%;text-align:center;"><?php echo $key->bobot_lgd_mp; ?></td>
																									<td><p style="width:100%;text-align: justify;"><?php echo $key->ev_lgd_mp; ?></td>
																								</tr>
																								<tr>
																									<td style="text-align:center;font-weight:bold;">PK</td>
																									<td style="width:10%;text-align:center;"><?php echo $key->bobot_lgd_pk; ?></td>
																									<td><p style="width:100%;text-align: justify;"><?php echo $key->ev_lgd_pk; ?></td>
																								</tr>
																							</tbody>
																						</table>
																						</div>
																					</div>
																				</div>
																		<!-- BEI -->
																				<div id="bei" class="tab-pane fade">
																					<div class="panel-body">
																						<div class="table-responsive">
																						<table width="100%" class="table table-bordered table-hover table-striped">
																							<thead style="background-color:#0c4a52;">
																								<tr>
																									<th style="width:10%;color:#fff;text-align:center;">Kompetensi</th>
																									<th style="width:10%;color:#fff;text-align:center;">Nilai</th>
																									<th style="width:100%;color:#fff;text-align:center;">
																									Evidence
																									<a role="menuitem" class="btn btn-default btn-xs pull-right" tabindex="-1" style="cursor:pointer;" href="#" data-toggle="modal" data-target="#ModalaEditKom_BEI">
																									<i class="fa fa-edit fa-fw"></i> Edit </a>
																									</th>
																								</tr>
																							</thead>
																							<tbody>
																								<tr>
																									<td style="text-align:center;font-weight:bold;">INT</td>
																									<td style="width:10%;text-align:center;"><?php echo $key->bobot_bei_int; ?></td>
																									<td><p style="width:100%;text-align: justify;"><?php echo $key->ev_bei_int; ?></td>
																								</tr>
																								<tr>
																									<td style="text-align:center;font-weight:bold;">KJS</td>
																									<td style="width:10%;text-align:center;"><?php echo $key->bobot_bei_kjs; ?></td>
																									<td><p style="width:100%;text-align: justify;"><?php echo $key->ev_bei_kjs; ?></td>
																								</tr>
																								<tr>
																									<td style="text-align:center;font-weight:bold;">KOM</td>
																									<td style="width:10%;text-align:center;"><?php echo $key->bobot_bei_kom; ?></td>
																									<td><p style="width:100%;text-align: justify;"><?php echo $key->ev_bei_kom; ?></td>
																								</tr>
																								<tr>
																									<td style="text-align:center;font-weight:bold;">OPH</td>
																									<td style="width:10%;text-align:center;"><?php echo $key->bobot_bei_oph; ?></td>
																									<td><p style="width:100%;text-align: justify;"><?php echo $key->ev_bei_oph; ?></td>
																								</tr>
																								<tr>
																									<td style="text-align:center;font-weight:bold;">PP</td>
																									<td style="width:10%;text-align:center;"><?php echo $key->bobot_bei_pp; ?></td>
																									<td><p style="width:100%;text-align: justify;"><?php echo $key->ev_bei_pp; ?></td>
																								</tr>
																								<tr>
																									<td style="text-align:center;font-weight:bold;">PDOL</td>
																									<td style="width:10%;text-align:center;"><?php echo $key->bobot_bei_pdol; ?></td>
																									<td><p style="width:100%;text-align: justify;"><?php echo $key->ev_bei_pdol; ?></td>
																								</tr>
																								<tr>
																									<td style="text-align:center;font-weight:bold;">MP</td>
																									<td style="width:10%;text-align:center;"><?php echo $key->bobot_bei_mp; ?></td>
																									<td><p style="width:100%;text-align: justify;"><?php echo $key->ev_bei_mp; ?></td>
																								</tr>
																								<tr>
																									<td style="text-align:center;font-weight:bold;">PK</td>
																									<td style="width:10%;text-align:center;"><?php echo $key->bobot_bei_pk; ?></td>
																									<td><p style="width:100%;text-align: justify;"><?php echo $key->ev_bei_pk; ?></td>
																								</tr>
																								<tr>
																									<td style="text-align:center;font-weight:bold;">PB</td>
																									<td style="width:10%;text-align:center;"><?php echo $key->bobot_bei_pb; ?></td>
																									<td><p style="width:100%;text-align: justify;"><?php echo $key->ev_bei_pb; ?></td>
																								</tr>
																							</tbody>
																						</table>
																						</div>
																					</div>
																				</div>
																		<!-- ANKAS -->			
																				<div id="ankas" class="tab-pane fade">
																					<div class="panel-body">
																						<div class="table-responsive">
																						<table width="100%" class="table table-bordered table-hover table-striped">
																							<thead style="background-color:#0c4a52;">
																								<tr>
																									<th style="width:10%;color:#fff;text-align:center;">Kompetensi</th>
																									<th style="width:10%;color:#fff;text-align:center;">Nilai</th>
																									<th style="width:100%;color:#fff;text-align:center;">
																									Evidence
																									<a role="menuitem" class="btn btn-default btn-xs pull-right" tabindex="-1" style="cursor:pointer;" href="#" data-toggle="modal" data-target="#ModalaEditKom_ANKAS">
																									<i class="fa fa-edit fa-fw"></i> Edit </a>
																									</th>
																								</tr>
																							</thead>
																							<tbody>
																								<tr>
																									<td style="text-align:center;font-weight:bold;">KOM</td>
																									<td style="width:10%;text-align:center;"><?php echo $key->bobot_ankas_kom; ?></td>
																									<td><p style="width:100%;text-align: justify;"><?php echo $key->ev_ankas_kom; ?></td>
																								</tr>
																								<tr>
																									<td style="text-align:center;font-weight:bold;">OPH</td>
																									<td style="width:10%;text-align:center;"><?php echo $key->bobot_ankas_oph; ?></td>
																									<td><p style="width:100%;text-align: justify;"><?php echo $key->ev_ankas_oph; ?></td>
																								</tr>
																								<tr>
																									<td style="text-align:center;font-weight:bold;">PP</td>
																									<td style="width:10%;text-align:center;"><?php echo $key->bobot_ankas_pp; ?></td>
																									<td><p style="width:100%;text-align: justify;"><?php echo $key->ev_ankas_pp; ?></td>
																								</tr>
																								<tr>
																									<td style="text-align:center;font-weight:bold;">MP</td>
																									<td style="width:10%;text-align:center;"><?php echo $key->bobot_ankas_mp; ?></td>
																									<td><p style="width:100%;text-align: justify;"><?php echo $key->ev_ankas_mp; ?></td>
																								</tr>
																								<tr>
																									<td style="text-align:center;font-weight:bold;">PK</td>
																									<td style="width:10%;text-align:center;"><?php echo $key->bobot_ankas_pk; ?></td>
																									<td><p style="width:100%;text-align: justify;"><?php echo $key->ev_ankas_pk; ?></td>
																								</tr>
																							</tbody>
																						</table>
																						</div>
																					</div>
																				</div>
																		<!-- BEI SEKDA -->			
																				<div id="bei_sekda" class="tab-pane fade">
																					<div class="panel-body">
																						<div class="table-responsive">
																						<table width="100%" class="table table-bordered table-hover table-striped">
																							<thead style="background-color:#0c4a52;">
																								<tr>
																									<th style="width:10%;color:#fff;text-align:center;">Kompetensi</th>
																									<th style="width:10%;color:#fff;text-align:center;">Nilai</th>
																									<th style="width:100%;color:#fff;text-align:center;">
																									Evidence
																									<a role="menuitem" class="btn btn-default btn-xs pull-right" tabindex="-1" style="cursor:pointer;" href="#" data-toggle="modal" data-target="#ModalaEditKom_BEISETDA">
																									<i class="fa fa-edit fa-fw"></i> Edit </a>
																									</th>
																								</tr>
																							</thead>
																							<tbody>
																								<tr>
																									<td style="text-align:center;font-weight:bold;">INT</td>
																									<td style="width:10%;text-align:center;"><?php echo $key->bobot_bei_sekda_int; ?></td>
																									<td><p style="width:100%;text-align: justify;"><?php echo $key->ev_bei_sekda_int; ?></td>
																								</tr>
																								<tr>
																									<td style="text-align:center;font-weight:bold;">KJS</td>
																									<td style="width:10%;text-align:center;"><?php echo $key->bobot_bei_sekda_kjs; ?></td>
																									<td><p style="width:100%;text-align: justify;"><?php echo $key->ev_bei_sekda_kjs; ?></td>
																								</tr>
																								<tr>
																									<td style="text-align:center;font-weight:bold;">KOM</td>
																									<td style="width:10%;text-align:center;"><?php echo $key->bobot_bei_sekda_kom; ?></td>
																									<td><p style="width:100%;text-align: justify;"><?php echo $key->ev_bei_sekda_kom; ?></td>
																								</tr>
																								<tr>
																									<td style="text-align:center;font-weight:bold;">OPH</td>
																									<td style="width:10%;text-align:center;"><?php echo $key->bobot_bei_sekda_oph; ?></td>
																									<td><p style="width:100%;text-align: justify;"><?php echo $key->ev_bei_sekda_oph; ?></td>
																								</tr>
																								<tr>
																									<td style="text-align:center;font-weight:bold;">PP</td>
																									<td style="width:10%;text-align:center;"><?php echo $key->bobot_bei_sekda_pp; ?></td>
																									<td><p style="width:100%;text-align: justify;"><?php echo $key->ev_bei_sekda_pp; ?></td>
																								</tr>
																								<tr>
																									<td style="text-align:center;font-weight:bold;">PDOL</td>
																									<td style="width:10%;text-align:center;"><?php echo $key->bobot_bei_sekda_pdol; ?></td>
																									<td><p style="width:100%;text-align: justify;"><?php echo $key->ev_bei_sekda_pdol; ?></td>
																								</tr>
																								<tr>
																									<td style="text-align:center;font-weight:bold;">MP</td>
																									<td style="width:10%;text-align:center;"><?php echo $key->bobot_bei_sekda_mp; ?></td>
																									<td><p style="width:100%;text-align: justify;"><?php echo $key->ev_bei_sekda_oph; ?></td>
																								</tr>
																								<tr>
																									<td style="text-align:center;font-weight:bold;">PK</td>
																									<td style="width:10%;text-align:center;"><?php echo $key->bobot_bei_sekda_mp; ?></td>
																									<td><p style="width:100%;text-align: justify;"><?php echo $key->ev_bei_sekda_mp; ?></td>
																								</tr>
																								<tr>
																									<td style="text-align:center;font-weight:bold;">PB</td>
																									<td style="width:10%;text-align:center;"><?php echo $key->bobot_bei_sekda_pb; ?></td>
																									<td><p style="width:100%;text-align: justify;"><?php echo $key->ev_bei_sekda_pb; ?></td>
																								</tr>
																							</tbody>
																						</table>
																						
																						</div>
																					</div>
																				</div>
																		<!-- PW -->
																				<div id="pw" class="tab-pane fade">
																					<div class="panel-body">
																						<div class="table-responsive">
																						<table width="100%" class="table table-bordered table-hover table-striped">
																							<thead style="background-color:#0c4a52;">
																								<tr>
																									<th style="width:10%;color:#fff;text-align:center;">Kompetensi</th>
																									<th style="width:10%;color:#fff;text-align:center;">Nilai</th>
																									<th style="width:100%;color:#fff;text-align:center;">
																									Evidence
																									<a role="menuitem" class="btn btn-default btn-xs pull-right" tabindex="-1" style="cursor:pointer;" href="#" data-toggle="modal" data-target="#ModalaEditKom_PW">
																									<i class="fa fa-edit fa-fw"></i> Edit </a>
																									</th>
																								</tr>
																							</thead>
																							<tbody>
																								<tr>
																									<td style="text-align:center;font-weight:bold;">INT</td>
																									<td style="width:10%;text-align:center;"><?php echo $key->bobot_pw_int; ?></td>
																									<td><p style="width:100%;text-align: justify;"><?php echo $key->ev_pw_int; ?></td>
																								</tr>
																								<tr>
																									<td style="text-align:center;font-weight:bold;">PDOL</td>
																									<td style="width:10%;text-align:center;"><?php echo $key->bobot_pw_pdol; ?></td>
																									<td><p style="width:100%;text-align: justify;"><?php echo $key->ev_pw_pdol; ?></td>
																								</tr>
																								<tr>
																									<td style="text-align:center;font-weight:bold;">PB</td>
																									<td style="width:10%;text-align:center;"><?php echo $key->bobot_pw_pb; ?></td>
																									<td><p style="width:100%;text-align: justify;"><?php echo $key->ev_pw_pb; ?></td>
																								</tr>
																							</tbody>
																						</table>
																						</div>
																					</div>
																				</div>
																			<?php } ?> 	
																			</div>						
																		</div>
																	</div>	
																	<div id="int" class="tab-pane fade">
																		<div class="panel-body">
																			<div class="table-responsive">
																			<table width="100%" class="table table-bordered table-hover table-striped">
																				<thead style="background-color:#0c4a52;color:#fff;">
																					<tr>
																						<th colspan="13" style="text-align:center;">POTENSI</th>
																						<th colspan="12" style="text-align:center;">KOMPETENSI</th>																				
																					</tr>
																					<tr>
																						<th colspan="2" style="text-align:center;">Kapasitas Berpikir</th>
																						<th colspan="4" style="text-align:center;">Sikap Kerja</th>
																						<th colspan="2" style="text-align:center;">Motivasi</th>
																						<th colspan="3" style="text-align:center;">Karakter</th>
																						<th rowspan="2" style="text-align:center;width:10%;">Nilai Pot</th>
																						<th rowspan="2" style="text-align:center;width:10%;">% Pot</th>
																						
																						<th rowspan="2" style="text-align:center;width:5%;">INT</th>
																						<th rowspan="2" style="text-align:center;width:5%;">KS</th>
																						<th rowspan="2" style="text-align:center;width:5%;">KOM</th>
																						<th rowspan="2" style="text-align:center;width:5%;">OPH</th>
																						<th rowspan="2" style="text-align:center;width:5%;">PP</th>
																						<th rowspan="2" style="text-align:center;width:5%;">PDOL</th>
																						<th rowspan="2" style="text-align:center;width:5%;">MP</th>
																						<th rowspan="2" style="text-align:center;width:5%;">PK</th>
																						<th rowspan="2" style="text-align:center;width:5%;">PB</th>
																						<th rowspan="2" style="text-align:center;width:10%;">Nilai Kom</th>
																						<th rowspan="2" style="text-align:center;width:10%;">% Kom</th>
																						<th rowspan="2" style="text-align:center;width:10%;">Total %</th>
																					</tr>
																					<tr>
																						<th style="text-align:center;width:5%;">DA</th>
																						<th style="text-align:center;width:5%;">LB</th>
																						<th style="text-align:center;width:5%;">SK</th>
																						<th style="text-align:center;width:5%;">INI</th>
																						<th style="text-align:center;width:5%;">DTK</th>
																						<th style="text-align:center;width:5%;">KEP</th>
																						<th style="text-align:center;width:5%;">DB</th>
																						<th style="text-align:center;width:5%;">TJ</th>
																						<th style="text-align:center;width:5%;">KI</th>
																						<th style="text-align:center;width:5%;">KD</th>
																						<th style="text-align:center;width:5%;">SE</th>
																					</tr>
																				</thead>
																				<tbody>
																					<tr>
																					<?php foreach ($potensi->result() as $key){ ?>
																						<td style="text-align:center;width:5%;"><?php echo $key->nilai_da_pot; ?></td>
																						<td style="text-align:center;width:5%;"><?php echo $key->nilai_lb_pot; ?></td>
																						<td style="text-align:center;width:5%;"><?php echo $key->nilai_sk_pot; ?></td>
																						<td style="text-align:center;width:5%;"><?php echo $key->nilai_ini_pot; ?></td>
																						<td style="text-align:center;width:5%;"><?php echo $key->nilai_dtk_pot; ?></td>
																						<td style="text-align:center;width:5%;"><?php echo $key->nilai_kep_pot; ?></td>
																						<td style="text-align:center;width:5%;"><?php echo $key->nilai_db_pot; ?></td>
																						<td style="text-align:center;width:5%;"><?php echo $key->nilai_tj_pot; ?></td>
																						<td style="text-align:center;width:5%;"><?php echo $key->nilai_ki_pot; ?></td>
																						<td style="text-align:center;width:5%;"><?php echo $key->nilai_kd_pot; ?></td>
																						<td style="text-align:center;width:5%;"><?php echo $key->nilai_se_pot; ?></td>
																						<td style="text-align:center;width:5%;"><?php echo $key->nilai_pot; ?></td>
																						<td style="text-align:center;width:5%;"><?php echo $key->percent_pot; ?></td>
																					<?php } ?>
																					
																					<?php foreach ($potensi->result() as $key){ ?>
																						<td style="text-align:center;width:5%;">kom3</td>
																						<td style="text-align:center;width:5%;">kom4</td>
																						<td style="text-align:center;width:5%;">kom5</td>
																						<td style="text-align:center;width:5%;">kom6</td>
																						<td style="text-align:center;width:5%;">kom7</td>
																						<td style="text-align:center;width:5%;">kom8</td>
																						<td style="text-align:center;width:5%;">kom9</td>
																						<td style="text-align:center;width:5%;">kom10</td>
																						<td style="text-align:center;width:5%;">kom11</td>
																						<td style="text-align:center;width:5%;">1</td>
																						<td style="text-align:center;width:5%;">1</td>
																						<td style="text-align:center;width:5%;">1</td>
																					<?php } ?>	
																					</tr>
																				</tbody>
																			</table>
																			</div>
																		</div>
																	</div>	
																	<div id="hasil" class="tab-pane fade">
																		<div class="panel-body">
																		<ul class="nav nav-tabs">
																			<li class="active"><a data-toggle="tab" href="#rek">Rekomendasi</a></li>
																			<li><a data-toggle="tab" href="#gp">Gambaran Potensi</a></li>
																			<li><a data-toggle="tab" href="#kek">Kekuatan</a></li>
																			<li><a data-toggle="tab" href="#ap">Area Pengembangan</a></li>
																			<li><a data-toggle="tab" href="#speng">Saran Pengembangan</a></li>
																			<li><a data-toggle="tab" href="#sp">Saran Penempatan</a></li>
																		</ul>
																			<div class="tab-content">
																			<?php foreach ($hasil->result() as $key){ ?>
																				<div id="rek" class="tab-pane fade in active">
																					<div class="panel-body">
																						<div class="table-responsive">
																							<table width="100%" class="table table-bordered table-hover table-striped">
																								<tr>
																									<td><p style="text-align:justify;"><b><?php echo $key->rekom; ?></b></p></td>
																								</tr>
																							</table>
																						</div>
																					</div>
																				</div>
																				<div id="gp" class="tab-pane">
																					<div class="panel-body">
																						<div class="table-responsive">
																							<table width="100%" class="table table-bordered table-hover table-striped">
																							<thead style="background-color:#0c4a52;">
																								<tr>
																									<th style="width:100%;color:#fff;text-align:center;">
																									Evidence
																									<a role="menuitem" class="btn btn-default btn-xs pull-right" tabindex="-1" style="cursor:pointer;" href="#" data-toggle="modal" data-target="#ModalaEditGP">
																									<i class="fa fa-edit fa-fw"></i> Edit </a>
																									</th>
																								</tr>
																							</thead>
																							<tbody>
																								<tr>
																									<td><p style="text-align:justify;"><?php echo $key->gp_1; ?></p></td>
																								</tr>
																								<tr>
																									<td><p style="text-align:justify;"><?php echo $key->gp_2; ?></p></td>
																								</tr>
																								<tr>
																									<td><p style="text-align:justify;"><?php echo $key->gp_3; ?></p></td>
																								</tr>
																								<tr>
																									<td><p style="text-align:justify;"><?php echo $key->gp_4; ?></p></td>
																								</tr>
																								<tr>
																									<td><p style="text-align:justify;"><?php echo $key->gp_5; ?></p></td>
																								</tr>
																								<tr>
																									<td><p style="text-align:justify;"><?php echo $key->gp_6; ?></p></td>
																								</tr>
																								<tr>
																									<td><p style="text-align:justify;"><?php echo $key->gp_7; ?></p></td>
																								</tr>
																								<tr>
																									<td><p style="text-align:justify;"><?php echo $key->gp_8; ?></p></td>
																								</tr>
																							</tbody>	
																							</table>
																						</div>
																					</div>
																				</div>
																				<div id="kek" class="tab-pane">
																					<div class="panel-body">
																						<div class="table-responsive">
																							<table width="100%" class="table table-bordered table-hover table-striped">
																							<thead style="background-color:#0c4a52;">
																								<tr>
																									<th style="width:100%;color:#fff;text-align:center;">
																									Evidence
																									<a role="menuitem" class="btn btn-default btn-xs pull-right" tabindex="-1" style="cursor:pointer;" href="#" data-toggle="modal" data-target="#ModalaEditGP">
																									<i class="fa fa-edit fa-fw"></i> Edit </a>
																									</th>
																								</tr>
																							</thead>
																							<tbody>
																								<tr>
																									<td><p style="text-align:justify;"><?php echo $key->kek_1; ?></p></td>
																								</tr>
																								<tr>
																									<td><p style="text-align:justify;"><?php echo $key->kek_2; ?></p></td>
																								</tr>
																								<tr>
																									<td><p style="text-align:justify;"><?php echo $key->kek_3; ?></p></td>
																								</tr>
																								<tr>
																									<td><p style="text-align:justify;"><?php echo $key->kek_4; ?></p></td>
																								</tr>
																								<tr>
																									<td><p style="text-align:justify;"><?php echo $key->kek_5; ?></p></td>
																								</tr>
																								<tr>
																									<td><p style="text-align:justify;"><?php echo $key->kek_6; ?></p></td>
																								</tr>
																								<tr>
																									<td><p style="text-align:justify;"><?php echo $key->kek_7; ?></p></td>
																								</tr>
																							</tbody>	
																							</table>
																						</div>
																					</div>
																				</div>
																				<div id="ap" class="tab-pane">
																					<div class="panel-body">
																						<div class="table-responsive">
																							<table width="100%" class="table table-bordered table-hover table-striped">
																							<thead style="background-color:#0c4a52;">
																								<tr>
																									<th style="width:100%;color:#fff;text-align:center;">
																									Evidence
																									<a role="menuitem" class="btn btn-default btn-xs pull-right" tabindex="-1" style="cursor:pointer;" href="#" data-toggle="modal" data-target="#ModalaEditGP">
																									<i class="fa fa-edit fa-fw"></i> Edit </a>
																									</th>
																								</tr>
																							</thead>
																							<tbody>
																								<tr>
																									<td><p style="text-align:justify;"><?php echo $key->ap_1; ?></p></td>
																								</tr>
																								<tr>
																									<td><p style="text-align:justify;"><?php echo $key->ap_2; ?></p></td>
																								</tr>
																								<tr>
																									<td><p style="text-align:justify;"><?php echo $key->ap_3; ?></p></td>
																								</tr>
																								<tr>
																									<td><p style="text-align:justify;"><?php echo $key->ap_4; ?></p></td>
																								</tr>
																								<tr>
																									<td><p style="text-align:justify;"><?php echo $key->ap_5; ?></p></td>
																								</tr>
																								<tr>
																									<td><p style="text-align:justify;"><?php echo $key->ap_6; ?></p></td>
																								</tr>
																								<tr>
																									<td><p style="text-align:justify;"><?php echo $key->ap_7; ?></p></td>
																								</tr>
																							</tbody>	
																							</table>
																						</div>
																					</div>
																				</div>
																				<div id="speng" class="tab-pane">
																					<div class="panel-body">
																						<div class="table-responsive">
																							<table width="100%" class="table table-bordered table-hover table-striped">
																							<thead style="background-color:#0c4a52;">
																								<tr>
																									<th style="width:100%;color:#fff;text-align:center;">
																									Evidence
																									<a role="menuitem" class="btn btn-default btn-xs pull-right" tabindex="-1" style="cursor:pointer;" href="#" data-toggle="modal" data-target="#ModalaEditGP">
																									<i class="fa fa-edit fa-fw"></i> Edit </a>
																									</th>
																								</tr>
																							</thead>
																							<tbody>
																								<tr>
																									<td><p style="text-align:justify;"><?php echo $key->speng_1; ?></p></td>
																								</tr>
																								<tr>
																									<td><p style="text-align:justify;"><?php echo $key->speng_2; ?></p></td>
																								</tr>
																								<tr>
																									<td><p style="text-align:justify;"><?php echo $key->speng_3; ?></p></td>
																								</tr>
																								<tr>
																									<td><p style="text-align:justify;"><?php echo $key->speng_4; ?></p></td>
																								</tr>
																								<tr>
																									<td><p style="text-align:justify;"><?php echo $key->speng_5; ?></p></td>
																								</tr>
																								<tr>
																									<td><p style="text-align:justify;"><?php echo $key->speng_6; ?></p></td>
																								</tr>
																								<tr>
																									<td><p style="text-align:justify;"><?php echo $key->speng_7; ?></p></td>
																								</tr>
																								<tr>
																									<td><p style="text-align:justify;"><?php echo $key->speng_8; ?></p></td>
																								</tr>
																								<tr>
																									<td><p style="text-align:justify;"><?php echo $key->speng_9; ?></p></td>
																								</tr>
																								<tr>
																									<td><p style="text-align:justify;"><?php echo $key->speng_10; ?></p></td>
																								</tr>
																							</tbody>	
																							</table>
																						</div>
																					</div>
																				</div>
																				<div id="sp" class="tab-pane">
																					<div class="panel-body">
																						<div class="table-responsive">
																							<table width="100%" class="table table-bordered table-hover table-striped">
																							<thead style="background-color:#0c4a52;">
																								<tr>
																									<th style="width:100%;color:#fff;text-align:center;">
																									Evidence
																									<a role="menuitem" class="btn btn-default btn-xs pull-right" tabindex="-1" style="cursor:pointer;" href="#" data-toggle="modal" data-target="#ModalaEditGP">
																									<i class="fa fa-edit fa-fw"></i> Edit </a>
																									</th>
																								</tr>
																							</thead>
																							<tbody>
																								<tr>
																									<td><p style="text-align:justify;"><?php echo $key->sp_1; ?></p></td>
																								</tr>
																								<tr>
																									<td><p style="text-align:justify;"><?php echo $key->sp_2; ?></p></td>
																								</tr>
																								<tr>
																									<td><p style="text-align:justify;"><?php echo $key->sp_3; ?></p></td>
																								</tr>
																							</tbody>	
																							</table>
																						</div>
																					</div>
																				</div>
																			<?php } ?>	
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
									</div>	
								</div>	
							</div>	
						</div>
					</div>
				</div>
			</section>
		  </div><!-- /.content-wrapper -->
		  
		  <footer class="main-footer">
			<div class="pull-right hidden-xs">
			  <b>Version</b> 2.1.7
			</div>
			<strong>&copy; 2022 || <a href="#"></strong>EnGTecH &#8482;.</a> Page rendered in <strong>{elapsed_time}</strong> seconds
		  </footer>
		</div>
		
		
<!--------------------------------------------------------------------------- MODAL ------------------------------------------------------------------------>

<!-- MODAL APM2 -->
    <div class="modal fade" id="ModalaAPM2" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="row modal-content">
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
            <div class="row modal-content">
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
	
<!-- MODAL ADD POTENSI -->
    <div class="modal fade" id="ModalaAddPot" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="row modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 class="modal-title" id="myModalLabel">Form Penilaian Potensi</h3>
				</div>
				<form class="form-horizontal" action="<?php echo base_url('appassesment/peserta/simpan_potensi');?>" method="post">
					<div class="modal-body">
						<div class="panel-body">
							<div class="col-lg-6">
							<?php foreach ($assessment->result() as $key) { ?>
								<table width="100%" class="table table-bordered table-hover table-striped">
									<tr>
										<td  style="width:30%;">Nama</td>
										<td>
											<input type="hidden" name="id_peserta" value="<?php echo $key->id_peserta; ?>" />
											<b><?php echo $key->nama; ?></b>
										</td>
									</tr>
									<tr>
										<td  style="width:30%;">NIP</td>
										<td>
											<input type="hidden" name="nip" value="<?php echo $key->nip; ?>" />
											<b><?php echo $key->nip; ?></b>
										</td>
									</tr>
								</table>
							</div>
							<div class="col-lg-6">
								<table width="100%" class="table table-bordered table-hover table-striped">
									<tr>
										<td style="width:30%;">Jenjang</td>
										<td><b><?php echo $key->jenjang; ?></b></td>
									</tr>
							<?php } ?>
									<tr>
							<?php foreach ($pic->result() as $key) { ?>
										<td  style="width:30%;">Assessor</td>
										<td>
											<input type="hidden" name="kd_personil_wwcr" value="<?php echo $key->kd_personil; ?>" />
											<b><?php echo $key->nama_personil; ?></b>
										</td>
							<?php } ?>
									</tr>
								</table>
							</div>
							</div>
							<div class="panel-body">
							<div class="col-lg-6">
							<div class="table-responsive">
								<table width="100%" class="table table-bordered table-hover table-striped">
									<thead style="background-color:#0c4a52;">
										<tr>
											<th style="width:10%;color:#fff;text-align:center;">Potensi</th>
											<th style="width:10%;color:#fff;text-align:center;">Nilai</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td style="text-align:center;font-weight:bold;">Daya Analisa</td>
											<td>
												<input type="text" class="form-control" name="nilai_da_pot" id="da_pot" onkeyup="hitungPOT()" placeholder="Max. 5" style="width:100%;text-align:center;" />
											</td>
										</tr>
										<tr>
											<td style="text-align:center;font-weight:bold;">Logika Berpikir</td>
											<td>
												<input type="text" class="form-control" name="nilai_lb_pot" id="lb_pot" onkeyup="hitungPOT()" placeholder="Max. 5" style="width:100%;text-align:center;" />
											</td>
										</tr>
										<tr>
											<td style="text-align:center;font-weight:bold;">Sistematika Kerja</td>
											<td>
												<input type="text" class="form-control" name="nilai_sk_pot" id="sk_pot" onkeyup="hitungPOT()" placeholder="Max. 5" style="width:100%;text-align:center;" />
											</td>
										</tr>
										<tr>
											<td style="text-align:center;font-weight:bold;">Inisiatif</td>
											<td>
												<input type="text" class="form-control" name="nilai_ini_pot" id="ini_pot" onkeyup="hitungPOT()" placeholder="Max. 5" style="width:100%;text-align:center;" />
											</td>
										</tr>
										<tr>
											<td style="text-align:center;font-weight:bold;">Daya Tahan Kerja</td>
											<td>
												<input type="text" class="form-control" name="nilai_dtk_pot" id="dtk_pot" onkeyup="hitungPOT()" placeholder="Max. 5" style="width:100%;text-align:center;" />
											</td>
										</tr>
										<tr>
											<td style="text-align:center;font-weight:bold;">Kepemimpinan</td>
											<td>
												<input type="text" class="form-control" name="nilai_kep_pot" id="kep_pot" onkeyup="hitungPOT()" placeholder="Max. 5" style="width:100%;text-align:center;" />
											</td>
										</tr>
										<tr>
											<td style="text-align:center;font-weight:bold;">Dorongan Berprestasi</td>
											<td>
												<input type="text" class="form-control" name="nilai_db_pot" id="db_pot" onkeyup="hitungPOT()" placeholder="Max. 5" style="width:100%;text-align:center;" />
											</td>
										</tr>
										<tr>
											<td style="text-align:center;font-weight:bold;">Tanggung Jawab</td>
											<td>
												<input type="text" class="form-control" name="nilai_tj_pot" id="tj_pot" onkeyup="hitungPOT()" placeholder="Max. 5" style="width:100%;text-align:center;" />
											</td>
										</tr>
										<tr>
											<td style="text-align:center;font-weight:bold;">Keterampilan Interpersonal</td>
											<td>
												<input type="text" class="form-control" name="nilai_ki_pot" id="ki_pot" onkeyup="hitungPOT()" placeholder="Max. 5" style="width:100%;text-align:center;" />
											</td>
										</tr>
										<tr>
											<td style="text-align:center;font-weight:bold;">Kepercayaan Diri</td>
											<td>
												<input type="text" class="form-control" name="nilai_kd_pot" id="kd_pot" onkeyup="hitungPOT()" placeholder="Max. 5" style="width:100%;text-align:center;" />
											</td>
										</tr>
										<tr>
											<td style="text-align:center;font-weight:bold;">Stabilitas Emosi</td>
											<td>
												<input type="text" class="form-control" name="nilai_se_pot" id="se_pot" onkeyup="hitungPOT()" placeholder="Max. 5" style="width:100%;text-align:center;" />
											</td>
										</tr>
									</tbody>
								</table>
							</div>	
							</div>	
							<div class="col-lg-6">
							<div class="table-responsive">
								<table width="100%" class="table table-bordered table-hover table-striped">
									<thead style="background-color:#0c4a52;">
										<tr>
											<th style="width:10%;color:#fff;text-align:center;">Nilai Potensi</th>
											<th style="width:10%;color:#fff;text-align:center;">Persentase</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td style="text-align:center;font-weight:bold;">
												<input type="text" name="nilai_pot" id="hasil_nilai_pot" placeholder="0" style="width:100%;text-align:center;" readonly />
											</td>
											<td style="text-align:center;font-weight:bold;">
												<input type="text"  name="percent_pot" id="hasil_percent_pot" placeholder="0" style="width:100%;text-align:center;" readonly />
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							</div>
						</div>
							<div class="modal-footer">
								<button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
								<button class="btn btn-info" id="btn_simpan">Simpan</button>
							</div>
					</div>
				</form>
			</div>
		</div>
	</div>

<!-- MODAL ADD KOMPETENSI -->
    <div class="modal fade" id="ModalaAddKom" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="row modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 class="modal-title" id="myModalLabel">Form Penilaian Kompetensi</h3>
				</div>
				<form class="form-horizontal" action="<?php echo base_url('appassesment/peserta/simpan_kompetensi');?>" method="post">
					<div class="modal-body">
						<div class="panel-body">
							<div class="col-lg-6">
							<?php foreach ($assessment->result() as $key) { ?>
								<table width="100%" class="table table-bordered table-hover table-striped">
									<tr>
										<td  style="width:30%;">Nama</td>
										<td>
											<input type="hidden" name="id_peserta" value="<?php echo $key->id_peserta; ?>" />
											<b><?php echo $key->nama; ?></b>
										</td>
									</tr>
									<tr>
										<td  style="width:30%;">NIP</td>
										<td>
											<input type="hidden" name="nip" value="<?php echo $key->nip; ?>" />
											<b><?php echo $key->nip; ?></b>
										</td>
									</tr>
								</table>
							</div>
							<div class="col-lg-6">
								<table width="100%" class="table table-bordered table-hover table-striped">
									<tr>
										<td style="width:30%;">Jenjang</td>
										<td><b><?php echo $key->jenjang; ?></b></td>
									</tr>
									
							<?php } ?>		
									<tr>
									<?php foreach ($pic->result() as $key) { ?>
										<td  style="width:30%;">Assessor</td>
										<td>
											<input type="hidden" name="kd_personil_wwcr" value="<?php echo $key->kd_personil; ?>" />
											<b><?php echo $key->nama_personil; ?></b>
										</td>
									<?php } ?>
									</tr>
								</table>
							
							</div>
						</div>
						<ul class="nav nav-tabs">
							<li class="active"><a data-toggle="tab" href="#lgd">LGD</a></li>
							<li><a data-toggle="tab" href="#bei">BEI</a></li>
							<li><a data-toggle="tab" href="#ankas">ANKAS</a></li>
							<li><a data-toggle="tab" href="#bei_sekda">BEI (SEKDA)</a></li>
							<li><a data-toggle="tab" href="#pw">PW</a></li>
						</ul>
						<!-- LGD -->
							<div class="tab-content">
								<div id="lgd" class="tab-pane fade in active">
									<div class="panel-body">
										<div class="table-responsive">
										<table width="100%" class="table table-bordered table-hover table-striped">
											<thead style="background-color:#0c4a52;">
												<tr>
													<th style="width:10%;color:#fff;text-align:center;">Kompetensi</th>
													<th style="width:10%;color:#fff;text-align:center;">Nilai</th>
													<th style="width:100%;color:#fff;text-align:center;">Evidence</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td style="text-align:center;font-weight:bold;">KJS</td>
													<td>
														<input type="text" class="form-control" name="nilai_lgd_kjs" id="kjs_lgd" onkeyup="hitungLGD()" placeholder="Max. 5" style="width:100%;text-align:center;" />
														<input type="text"  name="bobot_lgd_kjs" id="hasil_kjs_lgd" placeholder="0" style="width:100%;text-align:center;" readonly />
													</td>
													<td>
														<textarea style="width:100%;" name="ev_lgd_kjs" class="form-control"></textarea>
													</td>
												</tr>
												<tr>
													<td style="text-align:center;font-weight:bold;">KOM</td>
													<td>
														<input type="text" class="form-control" name="nilai_lgd_kom" id="kom_lgd" onkeyup="hitungLGD()" placeholder="Max. 5" style="width:100%;text-align:center;" />
														<input type="text"  name="bobot_lgd_kom" id="hasil_kom_lgd" placeholder="0" style="width:100%;text-align:center;" readonly />
													</td>
													<td>
														<textarea style="width:100%;" name="ev_lgd_kom" class="form-control"></textarea>
													</td>
												</tr>
												<tr>
													<td style="text-align:center;font-weight:bold;">OPH</td>
													<td>
														<input type="text" class="form-control" name="nilai_lgd_oph" id="oph_lgd" onkeyup="hitungLGD()" placeholder="Max. 5" style="width:100%;text-align:center;" />
														<input type="text"  name="bobot_lgd_oph" id="hasil_oph_lgd" placeholder="0" style="width:100%;text-align:center;" readonly />
													</td>
													<td>
														<textarea style="width:100%;" name="ev_lgd_oph" class="form-control"></textarea>
													</td>
												</tr>
												<tr>
													<td style="text-align:center;font-weight:bold;">MP</td>
													<td>
														<input type="text" class="form-control" name="nilai_lgd_mp" id="mp_lgd" onkeyup="hitungLGD()" placeholder="Max. 5" style="width:100%;text-align:center;" />
														<input type="text"  name="bobot_lgd_mp" id="hasil_mp_lgd" placeholder="0" style="width:100%;text-align:center;" readonly />
													</td>
													<td>
														<textarea style="width:100%;" name="ev_lgd_mp" class="form-control"></textarea>
													</td>
												</tr>
												<tr>
													<td style="text-align:center;font-weight:bold;">PK</td>
													<td>
														<input type="text" class="form-control" name="nilai_lgd_pk" id="pk_lgd" onkeyup="hitungLGD()" placeholder="Max. 5" style="width:100%;text-align:center;" />
														<input type="text"  name="bobot_lgd_pk" id="hasil_pk_lgd" placeholder="0" style="width:100%;text-align:center;" readonly />
													</td>
													<td>
														<textarea style="width:100%;" name="ev_lgd_pk" class="form-control"></textarea>
													</td>
												</tr>
											</tbody>
										</table>
										</div>
									</div>
								</div>
						<!-- BEI -->
								<div id="bei" class="tab-pane fade">
									<div class="panel-body">
										<div class="table-responsive">
										<table width="100%" class="table table-bordered table-hover table-striped">
											<thead style="background-color:#0c4a52;">
												<tr>
													<th style="width:10%;color:#fff;text-align:center;">Kompetensi</th>
													<th style="width:10%;color:#fff;text-align:center;">Nilai</th>
													<th style="width:100%;color:#fff;text-align:center;">Evidence</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td style="text-align:center;font-weight:bold;">INT</td>
													<td>
														<input type="text" class="form-control" name="nilai_bei_int" id="int_bei" onkeyup="hitungBEI()" placeholder="Max. 5" style="width:100%;text-align:center;" />
														<input type="text"  name="bobot_bei_int" id="hasil_int_bei" placeholder="0" style="width:100%;text-align:center;" readonly />
													</td>
													<td>
														<textarea style="width:100%;" name="ev_bei_int" class="form-control"></textarea>
													</td>
												</tr>
												<tr>
													<td style="text-align:center;font-weight:bold;">KJS</td>
													<td>
														<input type="text" class="form-control" name="nilai_bei_kjs" id="kjs_bei" onkeyup="hitungBEI()" placeholder="Max. 5" style="width:100%;text-align:center;" />
														<input type="text"  name="bobot_bei_kjs" id="hasil_kjs_bei" placeholder="0" style="width:100%;text-align:center;" readonly />
													</td>
													<td>
														<textarea style="width:100%;" name="ev_bei_kjs" class="form-control"></textarea>
													</td>
												</tr>
												<tr>
													<td style="text-align:center;font-weight:bold;">KOM</td>
													<td>
														<input type="text" class="form-control" name="nilai_bei_kom" id="kom_bei" onkeyup="hitungBEI()" placeholder="Max. 5" style="width:100%;text-align:center;" />
														<input type="text"  name="bobot_bei_kom" id="hasil_kom_bei" placeholder="0" style="width:100%;text-align:center;" readonly />
													</td>
													<td>
														<textarea style="width:100%;" name="ev_bei_kom" class="form-control"></textarea>
													</td>
												</tr>
												<tr>
													<td style="text-align:center;font-weight:bold;">OPH</td>
													<td>
														<input type="text" class="form-control" name="nilai_bei_oph" id="oph_bei" onkeyup="hitungBEI()" placeholder="Max. 5" style="width:100%;text-align:center;" />
														<input type="text"  name="bobot_bei_oph" id="hasil_oph_bei" placeholder="0" style="width:100%;text-align:center;" readonly />
													</td>
													<td>
														<textarea style="width:100%;" name="ev_bei_oph" class="form-control"></textarea>
													</td>
												</tr>
												<tr>
													<td style="text-align:center;font-weight:bold;">PP</td>
													<td>
														<input type="text" class="form-control" name="nilai_bei_pp" id="pp_bei" onkeyup="hitungBEI()" placeholder="Max. 5" style="width:100%;text-align:center;" />
														<input type="text"  name="bobot_bei_pp" id="hasil_pp_bei" placeholder="0" style="width:100%;text-align:center;" readonly />
													</td>
													<td>
														<textarea style="width:100%;" name="ev_bei_pp" class="form-control"></textarea>
													</td>
												</tr>
												<tr>
													<td style="text-align:center;font-weight:bold;">PDOL</td>
													<td>
														<input type="text" class="form-control" name="nilai_bei_pdol" id="pdol_bei" onkeyup="hitungBEI()" placeholder="Max. 5" style="width:100%;text-align:center;" />
														<input type="text" name="bobot_bei_pdol" id="hasil_pdol_bei" placeholder="0" style="width:100%;text-align:center;" readonly />
													</td>
													<td>
														<textarea style="width:100%;" name="ev_bei_pdol" class="form-control"></textarea>
													</td>
												</tr>
												<tr>
													<td style="text-align:center;font-weight:bold;">MP</td>
													<td>
														<input type="text" class="form-control" name="nilai_bei_mp" id="mp_bei" onkeyup="hitungBEI()" placeholder="Max. 5" style="width:100%;text-align:center;" />
														<input type="text" name="bobot_bei_mp" id="hasil_mp_bei" placeholder="0" style="width:100%;text-align:center;" readonly />
													</td>
													<td>
														<textarea style="width:100%;" name="ev_bei_mp" class="form-control"></textarea>
													</td>
												</tr>
												<tr>
													<td style="text-align:center;font-weight:bold;">PK</td>
													<td>
														<input type="text" class="form-control" name="nilai_bei_pk" id="pk_bei" onkeyup="hitungBEI()" placeholder="Max. 5" style="width:100%;text-align:center;" />
														<input type="text" name="bobot_bei_pk" id="hasil_pk_bei" placeholder="0" style="width:100%;text-align:center;" readonly />
													</td>
													<td>
														<textarea style="width:100%;" name="ev_bei_pk" class="form-control"></textarea>
													</td>
												</tr>
												<tr>
													<td style="text-align:center;font-weight:bold;">PB</td>
													<td>
														<input type="text" class="form-control" name="nilai_bei_pb" id="pb_bei" onkeyup="hitungBEI()" placeholder="Max. 5" style="width:100%;text-align:center;" />
														<input type="text" name="bobot_bei_pb" id="hasil_pb_bei" placeholder="0" style="width:100%;text-align:center;" readonly />
													</td>
													<td>
														<textarea style="width:100%;" name="ev_bei_pb" class="form-control"></textarea>
													</td>
												</tr>
											</tbody>
										</table>
										</div>
									</div>
								</div>
						<!-- ANKAS -->			
								<div id="ankas" class="tab-pane fade">
									<div class="panel-body">
										<div class="table-responsive">
										<table width="100%" class="table table-bordered table-hover table-striped">
											<thead style="background-color:#0c4a52;">
												<tr>
													<th style="width:10%;color:#fff;text-align:center;">Kompetensi</th>
													<th style="width:10%;color:#fff;text-align:center;">Nilai</th>
													<th style="width:100%;color:#fff;text-align:center;">Evidence</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td style="text-align:center;font-weight:bold;">KOM</td>
													<td>
														<input type="text" class="form-control" name="nilai_ankas_kom" id="kom_ankas" onkeyup="hitungANKAS()" placeholder="Max. 5" style="width:100%;text-align:center;" />
														<input type="text" name="bobot_ankas_kom" id="hasil_kom_ankas" placeholder="0" style="width:100%;text-align:center;" readonly />
													</td>
													<td>
														<textarea style="width:100%;" name="ev_ankas_kom" class="form-control"></textarea>
													</td>
												</tr>
												<tr>
													<td style="text-align:center;font-weight:bold;">OPH</td>
													<td>
														<input type="text" class="form-control" name="nilai_ankas_oph" id="oph_ankas" onkeyup="hitungANKAS()" placeholder="Max. 5" style="width:100%;text-align:center;" />
														<input type="text" name="bobot_ankas_oph" id="hasil_oph_ankas" placeholder="0" style="width:100%;text-align:center;" readonly />
													</td>
													<td>
														<textarea style="width:100%;" name="ev_ankas_oph" class="form-control"></textarea>
													</td>
												</tr>
												<tr>
													<td style="text-align:center;font-weight:bold;">PP</td>
													<td>
														<input type="text" class="form-control" name="nilai_ankas_pp" id="pp_ankas" onkeyup="hitungANKAS()" placeholder="Max. 5" style="width:100%;text-align:center;" />
														<input type="text" name="bobot_ankas_pp" id="hasil_pp_ankas" placeholder="0" style="width:100%;text-align:center;" readonly />
													</td>
													<td>
														<textarea style="width:100%;" name="ev_ankas_pp" class="form-control"></textarea>
													</td>
												</tr>
												<tr>
													<td style="text-align:center;font-weight:bold;">MP</td>
													<td>
														<input type="text" class="form-control" name="nilai_ankas_mp" id="mp_ankas" onkeyup="hitungANKAS()" placeholder="Max. 5" style="width:100%;text-align:center;" />
														<input type="text" name="bobot_ankas_mp" id="hasil_mp_ankas" placeholder="0" style="width:100%;text-align:center;" readonly />
													</td>
													<td>
														<textarea style="width:100%;" name="ev_ankas_mp" class="form-control"></textarea>
													</td>
												</tr>
												<tr>
													<td style="text-align:center;font-weight:bold;">PK</td>
													<td>
														<input type="text" class="form-control" name="nilai_ankas_pk" id="pk_ankas" onkeyup="hitungANKAS()" placeholder="Max. 5" style="width:100%;text-align:center;" />
														<input type="text" name="bobot_ankas_pk" id="hasil_pk_ankas" placeholder="0" style="width:100%;text-align:center;" readonly />
													</td>
													<td>
														<textarea style="width:100%;" name="ev_ankas_pk" class="form-control"></textarea>
													</td>
												</tr>
											</tbody>
										</table>
										</div>
									</div>
								</div>
						<!-- BEI SEKDA -->			
								<div id="bei_sekda" class="tab-pane fade">
									<div class="panel-body">
										<div class="table-responsive">
										<table width="100%" class="table table-bordered table-hover table-striped">
											<thead style="background-color:#0c4a52;">
												<tr>
													<th style="width:10%;color:#fff;text-align:center;">Kompetensi</th>
													<th style="width:10%;color:#fff;text-align:center;">Nilai</th>
													<th style="width:100%;color:#fff;text-align:center;">Evidence</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td style="text-align:center;font-weight:bold;">INT</td>
													<td>
														<input type="text" class="form-control" name="nilai_bei_sekda_int" id="int_bei_sekda" onkeyup="hitungBEIsekda()" placeholder="Max. 5" style="width:100%;text-align:center;" />
														<input type="text" name="bobot_bei_sekda_int" id="hasil_int_bei_sekda" placeholder="0" style="width:100%;text-align:center;" readonly />
													</td>
													<td>
														<textarea style="width:100%;" name="ev_bei_sekda_int" class="form-control"></textarea>
													</td>
												</tr>
												<tr>
													<td style="text-align:center;font-weight:bold;">KJS</td>
													<td>
														<input type="text" class="form-control" name="nilai_bei_sekda_kjs" id="kjs_bei_sekda" onkeyup="hitungBEIsekda()" placeholder="Max. 5" style="width:100%;text-align:center;" />
														<input type="text" name="bobot_bei_sekda_kjs" id="hasil_kjs_bei_sekda" placeholder="0" style="width:100%;text-align:center;" readonly />
													</td>
													<td>
														<textarea style="width:100%;" name="ev_bei_sekda_kjs" class="form-control"></textarea>
													</td>
												</tr>
												<tr>
													<td style="text-align:center;font-weight:bold;">KOM</td>
													<td>
														<input type="text" class="form-control" name="nilai_bei_sekda_kom" id="kom_bei_sekda" onkeyup="hitungBEIsekda()" placeholder="Max. 5" style="width:100%;text-align:center;" />
														<input type="text" name="bobot_bei_sekda_kom" id="hasil_kom_bei_sekda" placeholder="0" style="width:100%;text-align:center;" readonly />
													</td>
													<td>
														<textarea style="width:100%;" name="ev_bei_sekda_kom" class="form-control"></textarea>
													</td>
												</tr>
												<tr>
													<td style="text-align:center;font-weight:bold;">OPH</td>
													<td>
														<input type="text" class="form-control" name="nilai_bei_sekda_oph" id="oph_bei_sekda" onkeyup="hitungBEIsekda()" placeholder="Max. 5" style="width:100%;text-align:center;" />
														<input type="text" name="bobot_bei_sekda_oph" id="hasil_oph_bei_sekda" placeholder="0" style="width:100%;text-align:center;" readonly />
													</td>
													<td>
														<textarea style="width:100%;" name="ev_bei_sekda_oph" class="form-control"></textarea>
													</td>
												</tr>
												<tr>
													<td style="text-align:center;font-weight:bold;">PP</td>
													<td>
														<input type="text" class="form-control" name="nilai_bei_sekda_pp" id="pp_bei_sekda" onkeyup="hitungBEIsekda()" placeholder="Max. 5" style="width:100%;text-align:center;" />
														<input type="text" name="bobot_bei_sekda_pp" id="hasil_pp_bei_sekda" placeholder="0" style="width:100%;text-align:center;" readonly />
													</td>
													<td>
														<textarea style="width:100%;" name="ev_bei_sekda_pp" class="form-control"></textarea>
													</td>
												</tr>
												<tr>
													<td style="text-align:center;font-weight:bold;">PDOL</td>
													<td>
														<input type="text" class="form-control" name="nilai_bei_sekda_pdol" id="pdol_bei_sekda" onkeyup="hitungBEIsekda()" placeholder="Max. 5" style="width:100%;text-align:center;" />
														<input type="text" name="bobot_bei_sekda_pdol" id="hasil_pdol_bei_sekda" placeholder="0" style="width:100%;text-align:center;" readonly />
													</td>
													<td>
														<textarea style="width:100%;" name="ev_bei_sekda_pdol" class="form-control"></textarea>
													</td>
												</tr>
												<tr>
													<td style="text-align:center;font-weight:bold;">MP</td>
													<td>
														<input type="text" class="form-control" name="nilai_bei_sekda_mp" id="mp_bei_sekda" onkeyup="hitungBEIsekda()" placeholder="Max. 5" style="width:100%;text-align:center;" />
														<input type="text" name="bobot_bei_sekda_mp" id="hasil_mp_bei_sekda" placeholder="0" style="width:100%;text-align:center;" readonly />
													</td>
													<td>
														<textarea style="width:100%;" name="ev_bei_sekda_mp" class="form-control"></textarea>
													</td>
												</tr>
												<tr>
													<td style="text-align:center;font-weight:bold;">PK</td>
													<td>
														<input type="text" class="form-control" name="nilai_bei_sekda_pk" id="pk_bei_sekda" onkeyup="hitungBEIsekda()" placeholder="Max. 5" style="width:100%;text-align:center;" />
														<input type="text" name="bobot_bei_sekda_pk" id="hasil_pk_bei_sekda" placeholder="0" style="width:100%;text-align:center;" readonly />
													</td>
													<td>
														<textarea style="width:100%;" name="ev_bei_sekda_pk" class="form-control"></textarea>
													</td>
												</tr>
												<tr>
													<td style="text-align:center;font-weight:bold;">PB</td>
													<td>
														<input type="text" class="form-control" name="nilai_bei_sekda_pb" id="pb_bei_sekda" onkeyup="hitungBEIsekda()" placeholder="Max. 5" style="width:100%;text-align:center;" />
														<input type="text" name="bobot_bei_sekda_pb" id="hasil_pb_bei_sekda" placeholder="0" style="width:100%;text-align:center;" readonly />
													</td>
													<td>
														<textarea style="width:100%;" name="ev_bei_sekda_pb" class="form-control"></textarea>
													</td>
												</tr>
											</tbody>
										</table>
										
										</div>
									</div>
								</div>
						<!-- PW -->
								<div id="pw" class="tab-pane fade">
									<div class="panel-body">
										<div class="table-responsive">
										<table width="100%" class="table table-bordered table-hover table-striped">
											<thead style="background-color:#0c4a52;">
												<tr>
													<th style="width:10%;color:#fff;text-align:center;">Kompetensi</th>
													<th style="width:10%;color:#fff;text-align:center;">Nilai</th>
													<th style="width:100%;color:#fff;text-align:center;">Evidence</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td style="text-align:center;font-weight:bold;">INT</td>
													<td>
														<input type="text" class="form-control" name="nilai_pw_int" id="int_pw" onkeyup="hitungPW()" placeholder="Max. 5" style="width:100%;text-align:center;" />
														<input type="text" name="bobot_pw_int" id="hasil_int_pw" placeholder="0" style="width:100%;text-align:center;" readonly />
													</td>
													<td>
														<textarea style="width:100%;" name="ev_pw_int" class="form-control"></textarea>
													</td>
												</tr>
												<tr>
													<td style="text-align:center;font-weight:bold;">PDOL</td>
													<td>
														<input type="text" class="form-control" name="nilai_pw_pdol" id="pdol_pw" onkeyup="hitungPW()" placeholder="Max. 5" style="width:100%;text-align:center;" />
														<input type="text" name="bobot_pw_pdol" id="hasil_pdol_pw" placeholder="0" style="width:100%;text-align:center;" readonly />
													</td>
													<td>
														<textarea style="width:100%;" name="ev_pw_pdol" class="form-control"></textarea>
													</td>
												</tr>
												<tr>
													<td style="text-align:center;font-weight:bold;">PB</td>
													<td>
														<input type="text" class="form-control" name="nilai_pw_pb" id="pb_pw" onkeyup="hitungPW()" placeholder="Max. 5" style="width:100%;text-align:center;" />
														<input type="text" name="bobot_pw_pb" id="hasil_pb_pw" placeholder="0" style="width:100%;text-align:center;" readonly />
													</td>
													<td>
														<textarea style="width:100%;" name="ev_pw_pb" class="form-control"></textarea>
													</td>
												</tr>
											</tbody>
										</table>

										</div>
									</div>
								</div>
							</div>						
						<div class="modal-footer">
							<button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
							<button class="btn btn-info" id="btn_simpan">Simpan</button>
						</div>
					</div>
				</form>
			</div>
        </div>
    </div>
<!--END MODAL ADD-->

<!-- MODAL EDIT KOMPETENSI LGD -->
    <div class="modal fade" id="ModalaEditKom_LGD" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="row modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 class="modal-title" id="myModalLabel">Edit Kompetensi LGD</h3>
				</div>
				<form class="form-horizontal" action="<?php echo base_url('appassesment/peserta/update_kom_lgd');?>" method="post">
					<div class="modal-body">
						<div class="panel-body">
							<div class="col-lg-6">
							<?php foreach ($assessment->result() as $key) { ?>
								<table width="100%" class="table table-bordered table-hover table-striped">
									<tr>
										<td  style="width:30%;">Nama</td>
										<td>
											<input type="hidden" name="id_peserta" value="<?php echo $key->id_peserta; ?>" />
											<b><?php echo $key->nama; ?></b>
										</td>
									</tr>
									<tr>
										<td  style="width:30%;">NIP</td>
										<td>
											<input type="hidden" name="nip" value="<?php echo $key->nip; ?>" />
											<b><?php echo $key->nip; ?></b>
										</td>
									</tr>
								</table>
							</div>
							<div class="col-lg-6">
								<table width="100%" class="table table-bordered table-hover table-striped">
									<tr>
										<td style="width:30%;">Jenjang</td>
										<td><b><?php echo $key->jenjang; ?></b></td>
									</tr>
									
							<?php } ?>		
									<tr>
									<?php foreach ($pic->result() as $key) { ?>
										<td  style="width:30%;">Assessor</td>
										<td>
											<input type="hidden" name="kd_personil_wwcr" value="<?php echo $key->kd_personil; ?>" />
											<b><?php echo $key->nama_personil; ?></b>
										</td>
									<?php } ?>
									</tr>
								</table>
							
							</div>
						</div>
						<div class="panel-body">
							<div class="table-responsive">
							<table width="100%" class="table table-bordered table-hover table-striped">
								<thead style="background-color:#0c4a52;">
									<tr>
										<th style="width:10%;color:#fff;text-align:center;">Kompetensi</th>
										<th style="width:10%;color:#fff;text-align:center;">Nilai</th>
										<th style="width:100%;color:#fff;text-align:center;">Evidence</th>
									</tr>
								</thead>
								<tbody>
								<?php foreach ($kompetensi->result() as $key) { ?>
									<tr>
										<td style="text-align:center;font-weight:bold;">KJS</td>
										<td>
											<input type="text" class="form-control" name="nilai_lgd_kjs" id="kjs_lgd_edit" value="<?php echo $key->nilai_lgd_kjs; ?>" onkeyup="hitungLGDEdit()" placeholder="Max. 5" style="width:100%;text-align:center;" />
											<input type="text"  name="bobot_lgd_kjs" id="hasil_kjs_lgd_edit" value="<?php echo $key->bobot_lgd_kjs; ?>" placeholder="0" style="width:100%;text-align:center;" readonly />
										</td>
										<td>
											<textarea style="width:100%;" name="ev_lgd_kjs" class="form-control"><?php echo $key->ev_lgd_kjs; ?></textarea>
										</td>
									</tr>
									<tr>
										<td style="text-align:center;font-weight:bold;">KOM</td>
										<td>
											<input type="text" class="form-control" name="nilai_lgd_kom" id="kom_lgd_edit" value="<?php echo $key->nilai_lgd_kom; ?>" onkeyup="hitungLGDEdit()" placeholder="Max. 5" style="width:100%;text-align:center;" />
											<input type="text"  name="bobot_lgd_kom" id="hasil_kom_lgd_edit" value="<?php echo $key->bobot_lgd_kom; ?>" placeholder="0" style="width:100%;text-align:center;" readonly />
										</td>
										<td>
											<textarea style="width:100%;" name="ev_lgd_kom" class="form-control"><?php echo $key->ev_lgd_kom; ?></textarea>
										</td>
									</tr>
									<tr>
										<td style="text-align:center;font-weight:bold;">OPH</td>
										<td>
											<input type="text" class="form-control" name="nilai_lgd_oph" id="oph_lgd_edit" value="<?php echo $key->nilai_lgd_oph; ?>" onkeyup="hitungLGDEdit()" placeholder="Max. 5" style="width:100%;text-align:center;" />
											<input type="text"  name="bobot_lgd_oph" id="hasil_oph_lgd_edit" value="<?php echo $key->bobot_lgd_oph; ?>" placeholder="0" style="width:100%;text-align:center;" readonly />
										</td>
										<td>
											<textarea style="width:100%;" name="ev_lgd_oph" class="form-control"><?php echo $key->ev_lgd_oph; ?></textarea>
										</td>
									</tr>
									<tr>
										<td style="text-align:center;font-weight:bold;">MP</td>
										<td>
											<input type="text" class="form-control" name="nilai_lgd_mp" id="mp_lgd_edit" value="<?php echo $key->nilai_lgd_mp; ?>" onkeyup="hitungLGDEdit()" placeholder="Max. 5" style="width:100%;text-align:center;" />
											<input type="text"  name="bobot_lgd_mp" id="hasil_mp_lgd_edit" value="<?php echo $key->bobot_lgd_mp; ?>" placeholder="0" style="width:100%;text-align:center;" readonly />
										</td>
										<td>
											<textarea style="width:100%;" name="ev_lgd_mp" class="form-control"><?php echo $key->ev_lgd_mp; ?></textarea>
										</td>
									</tr>
									<tr>
										<td style="text-align:center;font-weight:bold;">PK</td>
										<td>
											<input type="text" class="form-control" name="nilai_lgd_pk" id="pk_lgd_edit" value="<?php echo $key->nilai_lgd_pk; ?>" onkeyup="hitungLGDEdit()" placeholder="Max. 5" style="width:100%;text-align:center;" />
											<input type="text"  name="bobot_lgd_pk" id="hasil_pk_lgd_edit" value="<?php echo $key->bobot_lgd_pk; ?>" placeholder="0" style="width:100%;text-align:center;" readonly />
										</td>
										<td>
											<textarea style="width:100%;" name="ev_lgd_pk" class="form-control"><?php echo $key->ev_lgd_pk; ?></textarea>
										</td>
									</tr>
								<?php } ?>	
								</tbody>
							</table>
							</div>
						</div>
						<div class="modal-footer">
							<button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
							<button class="btn btn-info" id="btn_simpan">Simpan</button>
						</div>
					</div>
				</form>
			</div>
        </div>
    </div>
<!--END MODAL EDIT LGD-->

<!-- MODAL EDIT KOMPETENSI BEI -->
    <div class="modal fade" id="ModalaEditKom_BEI" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="row modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 class="modal-title" id="myModalLabel">Edit Kompetensi BEI</h3>
				</div>
				<form class="form-horizontal" action="<?php echo base_url('appassesment/peserta/update_kom_bei');?>" method="post">
					<div class="modal-body">
						<div class="panel-body">
							<div class="col-lg-6">
							<?php foreach ($assessment->result() as $key) { ?>
								<table width="100%" class="table table-bordered table-hover table-striped">
									<tr>
										<td  style="width:30%;">Nama</td>
										<td>
											<input type="hidden" name="id_peserta" value="<?php echo $key->id_peserta; ?>" />
											<b><?php echo $key->nama; ?></b>
										</td>
									</tr>
									<tr>
										<td  style="width:30%;">NIP</td>
										<td>
											<input type="hidden" name="nip" value="<?php echo $key->nip; ?>" />
											<b><?php echo $key->nip; ?></b>
										</td>
									</tr>
								</table>
							</div>
							<div class="col-lg-6">
								<table width="100%" class="table table-bordered table-hover table-striped">
									<tr>
										<td style="width:30%;">Jenjang</td>
										<td><b><?php echo $key->jenjang; ?></b></td>
									</tr>
									
							<?php } ?>		
									<tr>
									<?php foreach ($pic->result() as $key) { ?>
										<td  style="width:30%;">Assessor</td>
										<td>
											<input type="hidden" name="kd_personil_wwcr" value="<?php echo $key->kd_personil; ?>" />
											<b><?php echo $key->nama_personil; ?></b>
										</td>
									<?php } ?>
									</tr>
								</table>
							
							</div>
						</div>
						<div class="panel-body">
							<div class="table-responsive">
							<table width="100%" class="table table-bordered table-hover table-striped">
								<thead style="background-color:#0c4a52;">
									<tr>
										<th style="width:10%;color:#fff;text-align:center;">Kompetensi</th>
										<th style="width:10%;color:#fff;text-align:center;">Nilai</th>
										<th style="width:100%;color:#fff;text-align:center;">Evidence</th>
									</tr>
								</thead>
								<tbody>
								<?php foreach ($kompetensi->result() as $key) { ?>
									<tr>
										<td style="text-align:center;font-weight:bold;">INT</td>
										<td>
											<input type="text" class="form-control" name="nilai_bei_int" id="int_bei_edit" value="<?php echo $key->nilai_bei_int; ?>" onkeyup="hitungBEIEdit()" placeholder="Max. 5" style="width:100%;text-align:center;" />
											<input type="text"  name="bobot_bei_int" id="hasil_int_bei_edit" value="<?php echo $key->bobot_bei_int; ?>" placeholder="0" style="width:100%;text-align:center;" readonly />
										</td>
										<td>
											<textarea style="width:100%;" name="ev_bei_int" class="form-control"><?php echo $key->ev_bei_int; ?></textarea>
										</td>
									</tr>
									<tr>
										<td style="text-align:center;font-weight:bold;">KJS</td>
										<td>
											<input type="text" class="form-control" name="nilai_bei_kjs" id="kjs_bei_edit" value="<?php echo $key->nilai_bei_kjs; ?>" onkeyup="hitungBEIEdit()" placeholder="Max. 5" style="width:100%;text-align:center;" />
											<input type="text"  name="bobot_bei_kjs" id="hasil_kjs_bei_edit" value="<?php echo $key->bobot_bei_kjs; ?>" placeholder="0" style="width:100%;text-align:center;" readonly />
										</td>
										<td>
											<textarea style="width:100%;" name="ev_bei_kjs" class="form-control"><?php echo $key->ev_bei_kjs; ?></textarea>
										</td>
									</tr>
									<tr>
										<td style="text-align:center;font-weight:bold;">KOM</td>
										<td>
											<input type="text" class="form-control" name="nilai_bei_kom" id="kom_bei_edit" value="<?php echo $key->nilai_bei_kom; ?>" onkeyup="hitungBEIEdit()" placeholder="Max. 5" style="width:100%;text-align:center;" />
											<input type="text"  name="bobot_bei_kom" id="hasil_kom_bei_edit" value="<?php echo $key->bobot_bei_kom; ?>" placeholder="0" style="width:100%;text-align:center;" readonly />
										</td>
										<td>
											<textarea style="width:100%;" name="ev_bei_kom" class="form-control"><?php echo $key->ev_bei_kom; ?></textarea>
										</td>
									</tr>
									<tr>
										<td style="text-align:center;font-weight:bold;">OPH</td>
										<td>
											<input type="text" class="form-control" name="nilai_bei_oph" id="oph_bei_edit" value="<?php echo $key->nilai_bei_oph; ?>" onkeyup="hitungBEIEdit()" placeholder="Max. 5" style="width:100%;text-align:center;" />
											<input type="text"  name="bobot_bei_oph" id="hasil_oph_bei_edit" value="<?php echo $key->bobot_bei_oph; ?>" placeholder="0" style="width:100%;text-align:center;" readonly />
										</td>
										<td>
											<textarea style="width:100%;" name="ev_bei_oph" class="form-control"><?php echo $key->ev_bei_oph; ?></textarea>
										</td>
									</tr>
									<tr>
										<td style="text-align:center;font-weight:bold;">PP</td>
										<td>
											<input type="text" class="form-control" name="nilai_bei_pp" id="pp_bei_edit" value="<?php echo $key->nilai_bei_pp; ?>" onkeyup="hitungBEIEdit()" placeholder="Max. 5" style="width:100%;text-align:center;" />
											<input type="text"  name="bobot_bei_pp" id="hasil_pp_bei_edit" value="<?php echo $key->bobot_bei_pp; ?>" placeholder="0" style="width:100%;text-align:center;" readonly />
										</td>
										<td>
											<textarea style="width:100%;" name="ev_bei_pp" class="form-control"><?php echo $key->ev_bei_pp; ?></textarea>
										</td>
									</tr>
									<tr>
										<td style="text-align:center;font-weight:bold;">PDOL</td>
										<td>
											<input type="text" class="form-control" name="nilai_bei_pdol" id="pdol_bei_edit" value="<?php echo $key->nilai_bei_pdol; ?>" onkeyup="hitungBEIEdit()" placeholder="Max. 5" style="width:100%;text-align:center;" />
											<input type="text" name="bobot_bei_pdol" id="hasil_pdol_bei_edit" value="<?php echo $key->bobot_bei_pdol; ?>" placeholder="0" style="width:100%;text-align:center;" readonly />
										</td>
										<td>
											<textarea style="width:100%;" name="ev_bei_pdol" class="form-control"><?php echo $key->ev_bei_pdol; ?></textarea>
										</td>
									</tr>
									<tr>
										<td style="text-align:center;font-weight:bold;">MP</td>
										<td>
											<input type="text" class="form-control" name="nilai_bei_mp" id="mp_bei_edit" value="<?php echo $key->nilai_bei_mp; ?>" onkeyup="hitungBEIEdit()" placeholder="Max. 5" style="width:100%;text-align:center;" />
											<input type="text" name="bobot_bei_mp" id="hasil_mp_bei_edit" value="<?php echo $key->bobot_bei_mp; ?>" placeholder="0" style="width:100%;text-align:center;" readonly />
										</td>
										<td>
											<textarea style="width:100%;" name="ev_bei_mp" class="form-control"><?php echo $key->ev_bei_mp; ?></textarea>
										</td>
									</tr>
									<tr>
										<td style="text-align:center;font-weight:bold;">PK</td>
										<td>
											<input type="text" class="form-control" name="nilai_bei_pk" id="pk_bei_edit" value="<?php echo $key->nilai_bei_pk; ?>" onkeyup="hitungBEIEdit()" placeholder="Max. 5" style="width:100%;text-align:center;" />
											<input type="text" name="bobot_bei_pk" id="hasil_pk_bei_edit" value="<?php echo $key->bobot_bei_pk; ?>" placeholder="0" style="width:100%;text-align:center;" readonly />
										</td>
										<td>
											<textarea style="width:100%;" name="ev_bei_pk" class="form-control"><?php echo $key->ev_bei_pk; ?></textarea>
										</td>
									</tr>
									<tr>
										<td style="text-align:center;font-weight:bold;">PB</td>
										<td>
											<input type="text" class="form-control" name="nilai_bei_pb" id="pb_bei_edit" value="<?php echo $key->nilai_bei_pb; ?>" onkeyup="hitungBEIEdit()" placeholder="Max. 5" style="width:100%;text-align:center;" />
											<input type="text" name="bobot_bei_pb" id="hasil_pb_bei_edit" value="<?php echo $key->bobot_bei_pb; ?>" placeholder="0" style="width:100%;text-align:center;" readonly />
										</td>
										<td>
											<textarea style="width:100%;" name="ev_bei_pb" class="form-control"><?php echo $key->ev_bei_pb; ?></textarea>
										</td>
									</tr>
								<?php } ?>	
								</tbody>
							</table>
							</div>
						</div>
						<div class="modal-footer">
							<button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
							<button class="btn btn-info" id="btn_simpan">Simpan</button>
						</div>
					</div>
				</form>
			</div>
        </div>
    </div>
<!--END MODAL EDIT BEI-->

<!-- MODAL EDIT KOMPETENSI ANKAS -->
    <div class="modal fade" id="ModalaEditKom_ANKAS" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="row modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 class="modal-title" id="myModalLabel">Edit Kompetensi ANKAS</h3>
				</div>
				<form class="form-horizontal" action="<?php echo base_url('appassesment/peserta/update_kom_ankas');?>" method="post">
					<div class="modal-body">
						<div class="panel-body">
							<div class="col-lg-6">
							<?php foreach ($assessment->result() as $key) { ?>
								<table width="100%" class="table table-bordered table-hover table-striped">
									<tr>
										<td  style="width:30%;">Nama</td>
										<td>
											<input type="hidden" name="id_peserta" value="<?php echo $key->id_peserta; ?>" />
											<b><?php echo $key->nama; ?></b>
										</td>
									</tr>
									<tr>
										<td  style="width:30%;">NIP</td>
										<td>
											<input type="hidden" name="nip" value="<?php echo $key->nip; ?>" />
											<b><?php echo $key->nip; ?></b>
										</td>
									</tr>
								</table>
							</div>
							<div class="col-lg-6">
								<table width="100%" class="table table-bordered table-hover table-striped">
									<tr>
										<td style="width:30%;">Jenjang</td>
										<td><b><?php echo $key->jenjang; ?></b></td>
									</tr>
									
							<?php } ?>		
									<tr>
									<?php foreach ($pic->result() as $key) { ?>
										<td  style="width:30%;">Assessor</td>
										<td>
											<input type="hidden" name="kd_personil_wwcr" value="<?php echo $key->kd_personil; ?>" />
											<b><?php echo $key->nama_personil; ?></b>
										</td>
									<?php } ?>
									</tr>
								</table>
							
							</div>
						</div>
						<div class="panel-body">
							<div class="table-responsive">
							<table width="100%" class="table table-bordered table-hover table-striped">
								<thead style="background-color:#0c4a52;">
									<tr>
										<th style="width:10%;color:#fff;text-align:center;">Kompetensi</th>
										<th style="width:10%;color:#fff;text-align:center;">Nilai</th>
										<th style="width:100%;color:#fff;text-align:center;">Evidence</th>
									</tr>
								</thead>
								<tbody>
								<?php foreach ($kompetensi->result() as $key) { ?>
									<tr>
										<td style="text-align:center;font-weight:bold;">KOM</td>
										<td>
											<input type="text" class="form-control" name="nilai_ankas_kom" id="kom_ankas_edit" value="<?php echo $key->nilai_ankas_kom; ?>" onkeyup="hitungANKASEdit()" placeholder="Max. 5" style="width:100%;text-align:center;" />
											<input type="text" name="bobot_ankas_kom" id="hasil_kom_ankas_edit" value="<?php echo $key->bobot_ankas_kom; ?>" placeholder="0" style="width:100%;text-align:center;" readonly />
										</td>
										<td>
											<textarea style="width:100%;" name="ev_ankas_kom" class="form-control"><?php echo $key->ev_ankas_kom; ?></textarea>
										</td>
									</tr>
									<tr>
										<td style="text-align:center;font-weight:bold;">OPH</td>
										<td>
											<input type="text" class="form-control" name="nilai_ankas_oph" id="oph_ankas_edit" value="<?php echo $key->nilai_ankas_oph; ?>" onkeyup="hitungANKASEdit()" placeholder="Max. 5" style="width:100%;text-align:center;" />
											<input type="text" name="bobot_ankas_oph" id="hasil_oph_ankas_edit" value="<?php echo $key->bobot_ankas_oph; ?>" placeholder="0" style="width:100%;text-align:center;" readonly />
										</td>
										<td>
											<textarea style="width:100%;" name="ev_ankas_oph" class="form-control"><?php echo $key->ev_ankas_oph; ?></textarea>
										</td>
									</tr>
									<tr>
										<td style="text-align:center;font-weight:bold;">PP</td>
										<td>
											<input type="text" class="form-control" name="nilai_ankas_pp" id="pp_ankas_edit" value="<?php echo $key->nilai_ankas_pp; ?>" onkeyup="hitungANKASEdit()" placeholder="Max. 5" style="width:100%;text-align:center;" />
											<input type="text" name="bobot_ankas_pp" id="hasil_pp_ankas_edit" value="<?php echo $key->bobot_ankas_pp; ?>" placeholder="0" style="width:100%;text-align:center;" readonly />
										</td>
										<td>
											<textarea style="width:100%;" name="ev_ankas_pp" class="form-control"><?php echo $key->ev_ankas_pp; ?></textarea>
										</td>
									</tr>
									<tr>
										<td style="text-align:center;font-weight:bold;">MP</td>
										<td>
											<input type="text" class="form-control" name="nilai_ankas_mp" id="mp_ankas_edit" value="<?php echo $key->nilai_ankas_mp; ?>" onkeyup="hitungANKASEdit()" placeholder="Max. 5" style="width:100%;text-align:center;" />
											<input type="text" name="bobot_ankas_mp" id="hasil_mp_ankas_edit" value="<?php echo $key->bobot_ankas_mp; ?>" placeholder="0" style="width:100%;text-align:center;" readonly />
										</td>
										<td>
											<textarea style="width:100%;" name="ev_ankas_mp" class="form-control"><?php echo $key->ev_ankas_mp; ?></textarea>
										</td>
									</tr>
									<tr>
										<td style="text-align:center;font-weight:bold;">PK</td>
										<td>
											<input type="text" class="form-control" name="nilai_ankas_pk" id="pk_ankas_edit" value="<?php echo $key->nilai_ankas_pk; ?>" onkeyup="hitungANKASEdit()" placeholder="Max. 5" style="width:100%;text-align:center;" />
											<input type="text" name="bobot_ankas_pk" id="hasil_pk_ankas_edit" value="<?php echo $key->bobot_ankas_pk; ?>" placeholder="0" style="width:100%;text-align:center;" readonly />
										</td>
										<td>
											<textarea style="width:100%;" name="ev_ankas_pk" class="form-control"><?php echo $key->ev_ankas_pk; ?></textarea>
										</td>
									</tr>
								<?php } ?>
								</tbody>
							</table>
							</div>
						</div>
						<div class="modal-footer">
							<button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
							<button class="btn btn-info" id="btn_simpan">Simpan</button>
						</div>
					</div>
				</form>
			</div>
        </div>
    </div>
<!--END MODAL EDIT ANKAS-->

<!-- MODAL EDIT KOMPETENSI BEI(SETDA) -->
    <div class="modal fade" id="ModalaEditKom_BEISETDA" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="row modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 class="modal-title" id="myModalLabel">EDIT Kompetensi BEI(SETDA)</h3>
				</div>
				<form class="form-horizontal" action="<?php echo base_url('appassesment/peserta/update_kom_bei_setda');?>" method="post">
					<div class="modal-body">
						<div class="panel-body">
							<div class="col-lg-6">
							<?php foreach ($assessment->result() as $key) { ?>
								<table width="100%" class="table table-bordered table-hover table-striped">
									<tr>
										<td  style="width:30%;">Nama</td>
										<td>
											<input type="hidden" name="id_peserta" value="<?php echo $key->id_peserta; ?>" />
											<b><?php echo $key->nama; ?></b>
										</td>
									</tr>
									<tr>
										<td  style="width:30%;">NIP</td>
										<td>
											<input type="hidden" name="nip" value="<?php echo $key->nip; ?>" />
											<b><?php echo $key->nip; ?></b>
										</td>
									</tr>
								</table>
							</div>
							<div class="col-lg-6">
								<table width="100%" class="table table-bordered table-hover table-striped">
									<tr>
										<td style="width:30%;">Jenjang</td>
										<td><b><?php echo $key->jenjang; ?></b></td>
									</tr>
									
							<?php } ?>		
									<tr>
									<?php foreach ($pic->result() as $key) { ?>
										<td  style="width:30%;">Assessor</td>
										<td>
											<input type="hidden" name="kd_personil_wwcr" value="<?php echo $key->kd_personil; ?>" />
											<b><?php echo $key->nama_personil; ?></b>
										</td>
									<?php } ?>
									</tr>
								</table>
							
							</div>
						</div>
						<div class="panel-body">
							<div class="table-responsive">
							<table width="100%" class="table table-bordered table-hover table-striped">
								<thead style="background-color:#0c4a52;">
									<tr>
										<th style="width:10%;color:#fff;text-align:center;">Kompetensi</th>
										<th style="width:10%;color:#fff;text-align:center;">Nilai</th>
										<th style="width:100%;color:#fff;text-align:center;">Evidence</th>
									</tr>
								</thead>
								<tbody>
								<?php foreach ($kompetensi->result() as $key) { ?>
									<tr>
										<td style="text-align:center;font-weight:bold;">INT</td>
										<td>
											<input type="text" class="form-control" name="nilai_bei_sekda_int" id="int_bei_sekda_edit" value="<?php echo $key->nilai_bei_sekda_int; ?>" onkeyup="hitungBEIsekdaEdit()" placeholder="Max. 5" style="width:100%;text-align:center;" />
											<input type="text" name="bobot_bei_sekda_int" id="hasil_int_bei_sekda_edit" value="<?php echo $key->bobot_bei_sekda_int; ?>" placeholder="0" style="width:100%;text-align:center;" readonly />
										</td>
										<td>
											<textarea style="width:100%;" name="ev_bei_sekda_int" class="form-control"><?php echo $key->ev_bei_sekda_int; ?></textarea>
										</td>
									</tr>
									<tr>
										<td style="text-align:center;font-weight:bold;">KJS</td>
										<td>
											<input type="text" class="form-control" name="nilai_bei_sekda_kjs" id="kjs_bei_sekda_edit" value="<?php echo $key->nilai_bei_sekda_kjs; ?>" onkeyup="hitungBEIsekdaEdit()" placeholder="Max. 5" style="width:100%;text-align:center;" />
											<input type="text" name="bobot_bei_sekda_kjs" id="hasil_kjs_bei_sekda_edit" value="<?php echo $key->bobot_bei_sekda_kjs; ?>" placeholder="0" style="width:100%;text-align:center;" readonly />
										</td>
										<td>
											<textarea style="width:100%;" name="ev_bei_sekda_kjs" class="form-control"><?php echo $key->ev_bei_sekda_kjs; ?></textarea>
										</td>
									</tr>
									<tr>
										<td style="text-align:center;font-weight:bold;">KOM</td>
										<td>
											<input type="text" class="form-control" name="nilai_bei_sekda_kom" id="kom_bei_sekda_edit" value="<?php echo $key->nilai_bei_sekda_kom; ?>" onkeyup="hitungBEIsekdaEdit()" placeholder="Max. 5" style="width:100%;text-align:center;" />
											<input type="text" name="bobot_bei_sekda_kom" id="hasil_kom_bei_sekda_edit" value="<?php echo $key->bobot_bei_sekda_kom; ?>" placeholder="0" style="width:100%;text-align:center;" readonly />
										</td>
										<td>
											<textarea style="width:100%;" name="ev_bei_sekda_kom" class="form-control"><?php echo $key->ev_bei_sekda_kom; ?></textarea>
										</td>
									</tr>
									<tr>
										<td style="text-align:center;font-weight:bold;">OPH</td>
										<td>
											<input type="text" class="form-control" name="nilai_bei_sekda_oph" id="oph_bei_sekda_edit" value="<?php echo $key->nilai_bei_sekda_oph; ?>" onkeyup="hitungBEIsekdaEdit()" placeholder="Max. 5" style="width:100%;text-align:center;" />
											<input type="text" name="bobot_bei_sekda_oph" id="hasil_oph_bei_sekda_edit" value="<?php echo $key->bobot_bei_sekda_oph; ?>" placeholder="0" style="width:100%;text-align:center;" readonly />
										</td>
										<td>
											<textarea style="width:100%;" name="ev_bei_sekda_oph" class="form-control"><?php echo $key->ev_bei_sekda_oph; ?></textarea>
										</td>
									</tr>
									<tr>
										<td style="text-align:center;font-weight:bold;">PP</td>
										<td>
											<input type="text" class="form-control" name="nilai_bei_sekda_pp" id="pp_bei_sekda_edit" value="<?php echo $key->nilai_bei_sekda_pp; ?>" onkeyup="hitungBEIsekdaEdit()" placeholder="Max. 5" style="width:100%;text-align:center;" />
											<input type="text" name="bobot_bei_sekda_pp" id="hasil_pp_bei_sekda_edit" value="<?php echo $key->bobot_bei_sekda_pp; ?>" placeholder="0" style="width:100%;text-align:center;" readonly />
										</td>
										<td>
											<textarea style="width:100%;" name="ev_bei_sekda_pp" class="form-control"><?php echo $key->ev_bei_sekda_pp; ?></textarea>
										</td>
									</tr>
									<tr>
										<td style="text-align:center;font-weight:bold;">PDOL</td>
										<td>
											<input type="text" class="form-control" name="nilai_bei_sekda_pdol" id="pdol_bei_sekda_edit" value="<?php echo $key->nilai_bei_sekda_pdol; ?>" onkeyup="hitungBEIsekdaEdit()" placeholder="Max. 5" style="width:100%;text-align:center;" />
											<input type="text" name="bobot_bei_sekda_pdol" id="hasil_pdol_bei_sekda_edit" value="<?php echo $key->bobot_bei_sekda_pdol; ?>" placeholder="0" style="width:100%;text-align:center;" readonly />
										</td>
										<td>
											<textarea style="width:100%;" name="ev_bei_sekda_pdol" class="form-control"><?php echo $key->ev_bei_sekda_pdol; ?></textarea>
										</td>
									</tr>
									<tr>
										<td style="text-align:center;font-weight:bold;">MP</td>
										<td>
											<input type="text" class="form-control" name="nilai_bei_sekda_mp" id="mp_bei_sekda_edit" value="<?php echo $key->nilai_bei_sekda_mp; ?>"  onkeyup="hitungBEIsekdaEdit()" placeholder="Max. 5" style="width:100%;text-align:center;" />
											<input type="text" name="bobot_bei_sekda_mp" id="hasil_mp_bei_sekda_edit" value="<?php echo $key->bobot_bei_sekda_mp; ?>" placeholder="0" style="width:100%;text-align:center;" readonly />
										</td>
										<td>
											<textarea style="width:100%;" name="ev_bei_sekda_mp" class="form-control"><?php echo $key->ev_bei_sekda_mp; ?></textarea>
										</td>
									</tr>
									<tr>
										<td style="text-align:center;font-weight:bold;">PK</td>
										<td>
											<input type="text" class="form-control" name="nilai_bei_sekda_pk" id="pk_bei_sekda_edit" value="<?php echo $key->nilai_bei_sekda_pk; ?>" onkeyup="hitungBEIsekdaEdit()" placeholder="Max. 5" style="width:100%;text-align:center;" />
											<input type="text" name="bobot_bei_sekda_pk" id="hasil_pk_bei_sekda_edit" value="<?php echo $key->bobot_bei_sekda_pk; ?>" placeholder="0" style="width:100%;text-align:center;" readonly />
										</td>
										<td>
											<textarea style="width:100%;" name="ev_bei_sekda_pk" class="form-control"><?php echo $key->ev_bei_sekda_pk; ?></textarea>
										</td>
									</tr>
									<tr>
										<td style="text-align:center;font-weight:bold;">PB</td>
										<td>
											<input type="text" class="form-control" name="nilai_bei_sekda_pb" id="pb_bei_sekda_edit" value="<?php echo $key->nilai_bei_sekda_pb; ?>" onkeyup="hitungBEIsekdaEdit()" placeholder="Max. 5" style="width:100%;text-align:center;" />
											<input type="text" name="bobot_bei_sekda_pb" id="hasil_pb_bei_sekda_edit" value="<?php echo $key->bobot_bei_sekda_pb; ?>" placeholder="0" style="width:100%;text-align:center;" readonly />
										</td>
										<td>
											<textarea style="width:100%;" name="ev_bei_sekda_pb" class="form-control"><?php echo $key->ev_bei_sekda_pb; ?></textarea>
										</td>
									</tr>
								<?php } ?>	
								</tbody>
							</table>
							
							</div>
						</div>
						<div class="modal-footer">
							<button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
							<button class="btn btn-info" id="btn_simpan">Simpan</button>
						</div>
					</div>
				</form>
			</div>
        </div>
    </div>
<!--END MODAL EDIT BEI(SETDA)-->

<!-- MODAL EDIT KOMPETENSI PW -->
    <div class="modal fade" id="ModalaEditKom_PW" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="row modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h3 class="modal-title" id="myModalLabel">EDIT KOMPETENSI PW</h3>
				</div>
				<form class="form-horizontal" action="<?php echo base_url('appassesment/peserta/update_kom_pw');?>" method="post">
					<div class="modal-body">
						<div class="panel-body">
							<div class="col-lg-6">
							<?php foreach ($assessment->result() as $key) { ?>
								<table width="100%" class="table table-bordered table-hover table-striped">
									<tr>
										<td  style="width:30%;">Nama</td>
										<td>
											<input type="hidden" name="id_peserta" value="<?php echo $key->id_peserta; ?>" />
											<b><?php echo $key->nama; ?></b>
										</td>
									</tr>
									<tr>
										<td  style="width:30%;">NIP</td>
										<td>
											<input type="hidden" name="nip" value="<?php echo $key->nip; ?>" />
											<b><?php echo $key->nip; ?></b>
										</td>
									</tr>
								</table>
							</div>
							<div class="col-lg-6">
								<table width="100%" class="table table-bordered table-hover table-striped">
									<tr>
										<td style="width:30%;">Jenjang</td>
										<td><b><?php echo $key->jenjang; ?></b></td>
									</tr>
									
							<?php } ?>		
									<tr>
									<?php foreach ($pic->result() as $key) { ?>
										<td  style="width:30%;">Assessor</td>
										<td>
											<input type="hidden" name="kd_personil_wwcr" value="<?php echo $key->kd_personil; ?>" />
											<b><?php echo $key->nama_personil; ?></b>
										</td>
									<?php } ?>
									</tr>
								</table>
							
							</div>
						</div>
						<div class="panel-body">
							<div class="table-responsive">
							<table width="100%" class="table table-bordered table-hover table-striped">
								<thead style="background-color:#0c4a52;">
									<tr>
										<th style="width:10%;color:#fff;text-align:center;">Kompetensi</th>
										<th style="width:10%;color:#fff;text-align:center;">Nilai</th>
										<th style="width:100%;color:#fff;text-align:center;">Evidence</th>
									</tr>
								</thead>
								<tbody>
								<?php foreach ($kompetensi->result() as $key) { ?>
									<tr>
										<td style="text-align:center;font-weight:bold;">INT</td>
										<td>
											<input type="text" class="form-control" name="nilai_pw_int" id="int_pw_edit" value="<?php echo $key->nilai_pw_int; ?>" onkeyup="hitungPWEdit()" placeholder="Max. 5" style="width:100%;text-align:center;" />
											<input type="text" name="bobot_pw_int" id="hasil_int_pw_edit" value="<?php echo $key->bobot_pw_int; ?>" placeholder="0" style="width:100%;text-align:center;" readonly />
										</td>
										<td>
											<textarea style="width:100%;" name="ev_pw_int" class="form-control"><?php echo $key->ev_pw_int; ?></textarea>
										</td>
									</tr>
									<tr>
										<td style="text-align:center;font-weight:bold;">PDOL</td>
										<td>
											<input type="text" class="form-control" name="nilai_pw_pdol" id="pdol_pw_edit" value="<?php echo $key->nilai_pw_pdol; ?>" onkeyup="hitungPWEdit()" placeholder="Max. 5" style="width:100%;text-align:center;" />
											<input type="text" name="bobot_pw_pdol" id="hasil_pdol_pw_edit" value="<?php echo $key->bobot_pw_pdol; ?>" placeholder="0" style="width:100%;text-align:center;" readonly />
										</td>
										<td>
											<textarea style="width:100%;" name="ev_pw_pdol" class="form-control"> <?php echo $key->ev_pw_pdol; ?></textarea>
										</td>
									</tr>
									<tr>
										<td style="text-align:center;font-weight:bold;">PB</td>
										<td>
											<input type="text" class="form-control" name="nilai_pw_pb" id="pb_pw_edit" value="<?php echo $key->nilai_pw_pb; ?>" onkeyup="hitungPWEdit()" placeholder="Max. 5" style="width:100%;text-align:center;" />
											<input type="text" name="bobot_pw_pb" id="hasil_pb_pw_edit" value="<?php echo $key->bobot_pw_pb; ?>" placeholder="0" style="width:100%;text-align:center;" readonly />
										</td>
										<td>
											<textarea style="width:100%;" name="ev_pw_pb" class="form-control"><?php echo $key->ev_pw_pb; ?></textarea>
										</td>
									</tr>
								<?php } ?>	
								</tbody>
							</table>

							</div>
						</div>
						<div class="modal-footer">
							<button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
							<button class="btn btn-info" id="btn_simpan">Simpan</button>
						</div>
					</div>
				</form>
			</div>
        </div>
    </div>
<!--END MODAL EDIT PW-->




	
<!--------------------------------------------------------------------------- MODAL ------------------------------------------------------------------------>		
		

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
	
	</body>
</html>

<script type="text/javascript">

// POTENSI
		function hitungPOT()
		{
			var nilai_da_pot 	= document.getElementById('da_pot').value;
			var nilai_lb_pot 	= document.getElementById('lb_pot').value;
			var nilai_sk_pot 	= document.getElementById('sk_pot').value;
			var nilai_ini_pot 	= document.getElementById('ini_pot').value;
			var nilai_dtk_pot 	= document.getElementById('dtk_pot').value;
			var nilai_kep_pot 	= document.getElementById('kep_pot').value;
			var nilai_db_pot 	= document.getElementById('db_pot').value;
			var nilai_tj_pot 	= document.getElementById('tj_pot').value;
			var nilai_ki_pot 	= document.getElementById('ki_pot').value;
			var nilai_kd_pot 	= document.getElementById('kd_pot').value;
			var nilai_se_pot 	= document.getElementById('se_pot').value;
			
			if (nilai_da_pot == "")
			{
				document.getElementById('hasil_nilai_pot').value ="0";
				document.getElementById('hasil_percent_pot').value ="0";
			}
			else
			{
				var hasil_nilai_pot	= parseInt(nilai_da_pot) + parseInt(nilai_lb_pot) + parseInt(nilai_sk_pot) + parseInt(nilai_ini_pot) + parseInt(nilai_dtk_pot) + parseInt(nilai_kep_pot) + parseInt(nilai_db_pot) + parseInt(nilai_tj_pot) + parseInt(nilai_ki_pot) + parseInt(nilai_kd_pot) + parseInt(nilai_se_pot);
				
				var hasil_percent_pot = (hasil_nilai_pot / 33) * 30;
				
				document.getElementById('hasil_nilai_pot').value 	= hasil_nilai_pot;
				document.getElementById('hasil_percent_pot').value 	= (hasil_percent_pot.toFixed(2));
			}
		}
		
// LGD
		function hitungLGD()
		{
			var nilai_kjs_lgd 	= document.getElementById('kjs_lgd').value;
			var nilai_kom_lgd 	= document.getElementById('kom_lgd').value;
			var nilai_oph_lgd 	= document.getElementById('oph_lgd').value;
			var nilai_mp_lgd 	= document.getElementById('mp_lgd').value;
			var nilai_pk_lgd 	= document.getElementById('pk_lgd').value;
			
			if (nilai_kjs_lgd == "")
			{
				document.getElementById('hasil_kjs_lgd').value ="0";
				document.getElementById('hasil_kom_lgd').value ="0";
				document.getElementById('hasil_oph_lgd').value ="0";
				document.getElementById('hasil_mp_lgd').value ="0";
				document.getElementById('hasil_pk_lgd').value ="0";
			}
			else
			{
				var hasil_kjs_lgd 	= nilai_kjs_lgd * 0.2;
				var hasil_kom_lgd 	= nilai_kom_lgd * 0.2;
				var hasil_oph_lgd 	= nilai_oph_lgd * 0.15;
				var hasil_mp_lgd 	= nilai_mp_lgd 	* 0.15;
				var hasil_pk_lgd 	= nilai_pk_lgd 	* 0.15;
				
				document.getElementById('hasil_kjs_lgd').value 	= (hasil_kjs_lgd.toFixed(2));
				document.getElementById('hasil_kom_lgd').value 	= (hasil_kom_lgd.toFixed(2));
				document.getElementById('hasil_oph_lgd').value 	= (hasil_oph_lgd.toFixed(2));
				document.getElementById('hasil_mp_lgd').value 	= (hasil_mp_lgd.toFixed(2));
				document.getElementById('hasil_pk_lgd').value 	= (hasil_pk_lgd.toFixed(2));
			}
		}
		
// LGD EDIT
		function hitungLGDEdit()
		{
			var nilai_kjs_lgd 	= document.getElementById('kjs_lgd_edit').value;
			var nilai_kom_lgd 	= document.getElementById('kom_lgd_edit').value;
			var nilai_oph_lgd 	= document.getElementById('oph_lgd_edit').value;
			var nilai_mp_lgd 	= document.getElementById('mp_lgd_edit').value;
			var nilai_pk_lgd 	= document.getElementById('pk_lgd_edit').value;
			
			if (nilai_kjs_lgd == "")
			{
				document.getElementById('hasil_kjs_lgd_edit').value ="0";
				document.getElementById('hasil_kom_lgd_edit').value ="0";
				document.getElementById('hasil_oph_lgd_edit').value ="0";
				document.getElementById('hasil_mp_lgd_edit').value ="0";
				document.getElementById('hasil_pk_lgd_edit').value ="0";
			}
			else
			{
				var hasil_kjs_lgd 	= nilai_kjs_lgd * 0.2;
				var hasil_kom_lgd 	= nilai_kom_lgd * 0.2;
				var hasil_oph_lgd 	= nilai_oph_lgd * 0.15;
				var hasil_mp_lgd 	= nilai_mp_lgd 	* 0.15;
				var hasil_pk_lgd 	= nilai_pk_lgd 	* 0.15;
				
				document.getElementById('hasil_kjs_lgd_edit').value = (hasil_kjs_lgd.toFixed(2));
				document.getElementById('hasil_kom_lgd_edit').value = (hasil_kom_lgd.toFixed(2));
				document.getElementById('hasil_oph_lgd_edit').value = (hasil_oph_lgd.toFixed(2));
				document.getElementById('hasil_mp_lgd_edit').value 	= (hasil_mp_lgd.toFixed(2));
				document.getElementById('hasil_pk_lgd_edit').value 	= (hasil_pk_lgd.toFixed(2));
			}
		}
		
		
//BEI
		function hitungBEI()
		{
			var nilai_int_bei 	= document.getElementById('int_bei').value;
			var nilai_kjs_bei 	= document.getElementById('kjs_bei').value;
			var nilai_kom_bei 	= document.getElementById('kom_bei').value;
			var nilai_oph_bei 	= document.getElementById('oph_bei').value;
			var nilai_pp_bei 	= document.getElementById('pp_bei').value;
			var nilai_pdol_bei 	= document.getElementById('pdol_bei').value;
			var nilai_mp_bei 	= document.getElementById('mp_bei').value;
			var nilai_pk_bei 	= document.getElementById('pk_bei').value;
			var nilai_pb_bei 	= document.getElementById('pb_bei').value;
			
			if (nilai_int_bei == "")
			{
				document.getElementById('hasil_int_bei').value ="0";
				document.getElementById('hasil_kjs_bei').value ="0";
				document.getElementById('hasil_kom_bei').value ="0";
				document.getElementById('hasil_oph_bei').value ="0";
				document.getElementById('hasil_pp_bei').value ="0";
				document.getElementById('hasil_pdol_bei').value ="0";
				document.getElementById('hasil_mp_bei').value ="0";
				document.getElementById('hasil_pk_bei').value ="0";
				document.getElementById('hasil_pb_bei').value ="0";
			}
			else
			{
				var hasil_int_bei 	= nilai_int_bei 	* 1;
				var hasil_kjs_bei 	= nilai_kjs_bei 	* 0.8;
				var hasil_kom_bei 	= nilai_kom_bei 	* 0.7;
				var hasil_oph_bei 	= nilai_oph_bei 	* 0.65;
				var hasil_pp_bei 	= nilai_pp_bei 		* 0.85;
				var hasil_pdol_bei 	= nilai_pdol_bei 	* 1;
				var hasil_mp_bei 	= nilai_mp_bei 		* 0.75;
				var hasil_pk_bei 	= nilai_pk_bei 		* 0.65;
				var hasil_pb_bei 	= nilai_pb_bei 		* 1;
				
				document.getElementById('hasil_int_bei').value 	= (hasil_int_bei.toFixed(2));
				document.getElementById('hasil_kjs_bei').value 	= (hasil_kjs_bei.toFixed(2));
				document.getElementById('hasil_kom_bei').value 	= (hasil_kom_bei.toFixed(2));
				document.getElementById('hasil_oph_bei').value 	= (hasil_oph_bei.toFixed(2));
				document.getElementById('hasil_pp_bei').value 	= (hasil_pp_bei.toFixed(2));
				document.getElementById('hasil_pdol_bei').value = (hasil_pdol_bei.toFixed(2));
				document.getElementById('hasil_mp_bei').value 	= (hasil_mp_bei.toFixed(2));
				document.getElementById('hasil_pk_bei').value	= (hasil_pk_bei.toFixed(2));
				document.getElementById('hasil_pb_bei').value	= (hasil_pb_bei.toFixed(2));
			}
		}
		
//BEIEDIT
		function hitungBEIEdit()
		{
			var nilai_int_bei 	= document.getElementById('int_bei_edit').value;
			var nilai_kjs_bei 	= document.getElementById('kjs_bei_edit').value;
			var nilai_kom_bei 	= document.getElementById('kom_bei_edit').value;
			var nilai_oph_bei 	= document.getElementById('oph_bei_edit').value;
			var nilai_pp_bei 	= document.getElementById('pp_bei_edit').value;
			var nilai_pdol_bei 	= document.getElementById('pdol_bei_edit').value;
			var nilai_mp_bei 	= document.getElementById('mp_bei_edit').value;
			var nilai_pk_bei 	= document.getElementById('pk_bei_edit').value;
			var nilai_pb_bei 	= document.getElementById('pb_bei_edit').value;
			
			if (nilai_int_bei == "")
			{
				document.getElementById('hasil_int_bei_edit').value ="0";
				document.getElementById('hasil_kjs_bei_edit').value ="0";
				document.getElementById('hasil_kom_bei_edit').value ="0";
				document.getElementById('hasil_oph_bei_edit').value ="0";
				document.getElementById('hasil_pp_bei_edit').value ="0";
				document.getElementById('hasil_pdol_bei_edit').value ="0";
				document.getElementById('hasil_mp_bei_edit').value ="0";
				document.getElementById('hasil_pk_bei_edit').value ="0";
				document.getElementById('hasil_pb_bei_edit').value ="0";
			}
			else
			{
				var hasil_int_bei 	= nilai_int_bei 	* 1;
				var hasil_kjs_bei 	= nilai_kjs_bei 	* 0.8;
				var hasil_kom_bei 	= nilai_kom_bei 	* 0.7;
				var hasil_oph_bei 	= nilai_oph_bei 	* 0.65;
				var hasil_pp_bei 	= nilai_pp_bei 		* 0.85;
				var hasil_pdol_bei 	= nilai_pdol_bei 	* 1;
				var hasil_mp_bei 	= nilai_mp_bei 		* 0.75;
				var hasil_pk_bei 	= nilai_pk_bei 		* 0.65;
				var hasil_pb_bei 	= nilai_pb_bei 		* 1;
				
				document.getElementById('hasil_int_bei_edit').value 	= (hasil_int_bei.toFixed(2));
				document.getElementById('hasil_kjs_bei_edit').value 	= (hasil_kjs_bei.toFixed(2));
				document.getElementById('hasil_kom_bei_edit').value 	= (hasil_kom_bei.toFixed(2));
				document.getElementById('hasil_oph_bei_edit').value 	= (hasil_oph_bei.toFixed(2));
				document.getElementById('hasil_pp_bei_edit').value 	= (hasil_pp_bei.toFixed(2));
				document.getElementById('hasil_pdol_bei_edit').value = (hasil_pdol_bei.toFixed(2));
				document.getElementById('hasil_mp_bei_edit').value 	= (hasil_mp_bei.toFixed(2));
				document.getElementById('hasil_pk_bei_edit').value	= (hasil_pk_bei.toFixed(2));
				document.getElementById('hasil_pb_bei_edit').value	= (hasil_pb_bei.toFixed(2));
			}
		}
		
//BEI SEKDA
		function hitungBEIsekda()
		{
			var nilai_int_bei_sekda 	= document.getElementById('int_bei_sekda').value;
			var nilai_kjs_bei_sekda 	= document.getElementById('kjs_bei_sekda').value;
			var nilai_kom_bei_sekda 	= document.getElementById('kom_bei_sekda').value;
			var nilai_oph_bei_sekda 	= document.getElementById('oph_bei_sekda').value;
			var nilai_pp_bei_sekda 		= document.getElementById('pp_bei_sekda').value;
			var nilai_pdol_bei_sekda 	= document.getElementById('pdol_bei_sekda').value;
			var nilai_mp_bei_sekda 		= document.getElementById('mp_bei_sekda').value;
			var nilai_pk_bei_sekda 		= document.getElementById('pk_bei_sekda').value;
			var nilai_pb_bei_sekda 		= document.getElementById('pb_bei_sekda').value;
			
			if (nilai_int_bei_sekda == "")
			{
				document.getElementById('hasil_int_bei_sekda').value ="0";
				document.getElementById('hasil_kjs_bei_sekda').value ="0";
				document.getElementById('hasil_kom_bei_sekda').value ="0";
				document.getElementById('hasil_oph_bei_sekda').value ="0";
				document.getElementById('hasil_pp_bei_sekda').value ="0";
				document.getElementById('hasil_pdol_bei_sekda').value ="0";
				document.getElementById('hasil_mp_bei_sekda').value ="0";
				document.getElementById('hasil_pk_bei_sekda').value ="0";
				document.getElementById('hasil_pb_bei_sekda').value ="0";
			}
			else
			{
				var hasil_int_bei_sekda 	= nilai_int_bei_sekda 	* 0.9;
				var hasil_kjs_bei_sekda 	= nilai_kjs_bei_sekda 	* 0.8;
				var hasil_kom_bei_sekda 	= nilai_kom_bei_sekda 	* 0.7;
				var hasil_oph_bei_sekda 	= nilai_oph_bei_sekda 	* 0.65;
				var hasil_pp_bei_sekda 		= nilai_pp_bei_sekda 	* 0.85;
				var hasil_pdol_bei_sekda 	= nilai_pdol_bei_sekda 	* 0.9;
				var hasil_mp_bei_sekda 		= nilai_mp_bei_sekda 	* 0.75;
				var hasil_pk_bei_sekda 		= nilai_pk_bei_sekda 	* 0.65;
				var hasil_pb_bei_sekda 		= nilai_pb_bei_sekda	* 0.9;
				
				document.getElementById('hasil_int_bei_sekda').value 	= (hasil_int_bei_sekda.toFixed(2));
				document.getElementById('hasil_kjs_bei_sekda').value 	= (hasil_kjs_bei_sekda.toFixed(2));
				document.getElementById('hasil_kom_bei_sekda').value 	= (hasil_kom_bei_sekda.toFixed(2));
				document.getElementById('hasil_oph_bei_sekda').value 	= (hasil_oph_bei_sekda.toFixed(2));
				document.getElementById('hasil_pp_bei_sekda').value 	= (hasil_pp_bei_sekda.toFixed(2));
				document.getElementById('hasil_pdol_bei_sekda').value 	= (hasil_pdol_bei_sekda.toFixed(2));
				document.getElementById('hasil_mp_bei_sekda').value 	= (hasil_mp_bei_sekda.toFixed(2));
				document.getElementById('hasil_pk_bei_sekda').value		= (hasil_pk_bei_sekda.toFixed(2));
				document.getElementById('hasil_pb_bei_sekda').value		= (hasil_pb_bei_sekda.toFixed(2));
			}
		}
		
//BEI SEKDA EDIT
		function hitungBEIsekdaEdit()
		{
			var nilai_int_bei_sekda 	= document.getElementById('int_bei_sekda_edit').value;
			var nilai_kjs_bei_sekda 	= document.getElementById('kjs_bei_sekda_edit').value;
			var nilai_kom_bei_sekda 	= document.getElementById('kom_bei_sekda_edit').value;
			var nilai_oph_bei_sekda 	= document.getElementById('oph_bei_sekda_edit').value;
			var nilai_pp_bei_sekda 		= document.getElementById('pp_bei_sekda_edit').value;
			var nilai_pdol_bei_sekda 	= document.getElementById('pdol_bei_sekda_edit').value;
			var nilai_mp_bei_sekda 		= document.getElementById('mp_bei_sekda_edit').value;
			var nilai_pk_bei_sekda 		= document.getElementById('pk_bei_sekda_edit').value;
			var nilai_pb_bei_sekda 		= document.getElementById('pb_bei_sekda_edit').value;
			
			if (nilai_int_bei_sekda == "")
			{
				document.getElementById('hasil_int_bei_sekda_edit').value ="0";
				document.getElementById('hasil_kjs_bei_sekda_edit').value ="0";
				document.getElementById('hasil_kom_bei_sekda_edit').value ="0";
				document.getElementById('hasil_oph_bei_sekda_edit').value ="0";
				document.getElementById('hasil_pp_bei_sekda_edit').value ="0";
				document.getElementById('hasil_pdol_bei_sekda_edit').value ="0";
				document.getElementById('hasil_mp_bei_sekda_edit').value ="0";
				document.getElementById('hasil_pk_bei_sekda_edit').value ="0";
				document.getElementById('hasil_pb_bei_sekda_edit').value ="0";
			}
			else
			{
				var hasil_int_bei_sekda 	= nilai_int_bei_sekda 	* 0.9;
				var hasil_kjs_bei_sekda 	= nilai_kjs_bei_sekda 	* 0.8;
				var hasil_kom_bei_sekda 	= nilai_kom_bei_sekda 	* 0.7;
				var hasil_oph_bei_sekda 	= nilai_oph_bei_sekda 	* 0.65;
				var hasil_pp_bei_sekda 		= nilai_pp_bei_sekda 	* 0.85;
				var hasil_pdol_bei_sekda 	= nilai_pdol_bei_sekda 	* 0.9;
				var hasil_mp_bei_sekda 		= nilai_mp_bei_sekda 	* 0.75;
				var hasil_pk_bei_sekda 		= nilai_pk_bei_sekda 	* 0.65;
				var hasil_pb_bei_sekda 		= nilai_pb_bei_sekda	* 0.9;
				
				document.getElementById('hasil_int_bei_sekda_edit').value 	= (hasil_int_bei_sekda.toFixed(2));
				document.getElementById('hasil_kjs_bei_sekda_edit').value 	= (hasil_kjs_bei_sekda.toFixed(2));
				document.getElementById('hasil_kom_bei_sekda_edit').value 	= (hasil_kom_bei_sekda.toFixed(2));
				document.getElementById('hasil_oph_bei_sekda_edit').value 	= (hasil_oph_bei_sekda.toFixed(2));
				document.getElementById('hasil_pp_bei_sekda_edit').value 	= (hasil_pp_bei_sekda.toFixed(2));
				document.getElementById('hasil_pdol_bei_sekda_edit').value 	= (hasil_pdol_bei_sekda.toFixed(2));
				document.getElementById('hasil_mp_bei_sekda_edit').value 	= (hasil_mp_bei_sekda.toFixed(2));
				document.getElementById('hasil_pk_bei_sekda_edit').value	= (hasil_pk_bei_sekda.toFixed(2));
				document.getElementById('hasil_pb_bei_sekda_edit').value	= (hasil_pb_bei_sekda.toFixed(2));
			}
		}
		
//ANKAS
		function hitungANKAS()
		{
			var nilai_kom_ankas 	= document.getElementById('kom_ankas').value;
			var nilai_oph_ankas 	= document.getElementById('oph_ankas').value;
			var nilai_pp_ankas 		= document.getElementById('pp_ankas').value;
			var nilai_mp_ankas 		= document.getElementById('mp_ankas').value;
			var nilai_pk_ankas 		= document.getElementById('pk_ankas').value;
			
			if (nilai_kom_ankas == "")
			{
				document.getElementById('hasil_kom_ankas').value ="0";
				document.getElementById('hasil_oph_ankas').value ="0";
				document.getElementById('hasil_pp_ankas').value ="0";
				document.getElementById('hasil_mp_ankas').value ="0";
				document.getElementById('hasil_pk_ankas').value ="0";
			}
			else
			{
				var hasil_kom_ankas	= nilai_kom_ankas 	* 0.1;
				var hasil_oph_ankas	= nilai_oph_ankas 	* 0.2;
				var hasil_pp_ankas 	= nilai_pp_ankas	* 0.15;
				var hasil_mp_ankas 	= nilai_mp_ankas 	* 0.1;
				var hasil_pk_ankas 	= nilai_pk_ankas 	* 0.2;
				
				document.getElementById('hasil_kom_ankas').value 	= (hasil_kom_ankas.toFixed(2));
				document.getElementById('hasil_oph_ankas').value 	= (hasil_oph_ankas.toFixed(2));
				document.getElementById('hasil_pp_ankas').value 	= (hasil_pp_ankas.toFixed(2));
				document.getElementById('hasil_mp_ankas').value 	= (hasil_mp_ankas.toFixed(2));
				document.getElementById('hasil_pk_ankas').value		= (hasil_pk_ankas.toFixed(2));
			}
		}
		
//ANKAS Edit
		function hitungANKASEdit()
		{
			var nilai_kom_ankas 	= document.getElementById('kom_ankas_edit').value;
			var nilai_oph_ankas 	= document.getElementById('oph_ankas_edit').value;
			var nilai_pp_ankas 		= document.getElementById('pp_ankas_edit').value;
			var nilai_mp_ankas 		= document.getElementById('mp_ankas_edit').value;
			var nilai_pk_ankas 		= document.getElementById('pk_ankas_edit').value;
			
			if (nilai_kom_ankas == "")
			{
				document.getElementById('hasil_kom_ankas_edit').value ="0";
				document.getElementById('hasil_oph_ankas_edit').value ="0";
				document.getElementById('hasil_pp_ankas_edit').value ="0";
				document.getElementById('hasil_mp_ankas_edit').value ="0";
				document.getElementById('hasil_pk_ankas_edit').value ="0";
			}
			else
			{
				var hasil_kom_ankas	= nilai_kom_ankas 	* 0.1;
				var hasil_oph_ankas	= nilai_oph_ankas 	* 0.2;
				var hasil_pp_ankas 	= nilai_pp_ankas	* 0.15;
				var hasil_mp_ankas 	= nilai_mp_ankas 	* 0.1;
				var hasil_pk_ankas 	= nilai_pk_ankas 	* 0.2;
				
				document.getElementById('hasil_kom_ankas_edit').value 	= (hasil_kom_ankas.toFixed(2));
				document.getElementById('hasil_oph_ankas_edit').value 	= (hasil_oph_ankas.toFixed(2));
				document.getElementById('hasil_pp_ankas_edit').value 	= (hasil_pp_ankas.toFixed(2));
				document.getElementById('hasil_mp_ankas_edit').value 	= (hasil_mp_ankas.toFixed(2));
				document.getElementById('hasil_pk_ankas_edit').value		= (hasil_pk_ankas.toFixed(2));
			}
		}
		
//PW
		function hitungPW()
		{
			var nilai_int_pw 	= document.getElementById('int_pw').value;
			var nilai_pdol_pw 	= document.getElementById('pdol_pw').value;
			var nilai_pb_pw 	= document.getElementById('pb_pw').value;
			
			if (nilai_int_pw == "")
			{
				document.getElementById('hasil_int_pw').value ="0";
				document.getElementById('hasil_pdol_pw').value ="0";
				document.getElementById('hasil_pb_pw').value ="0";
			}
			else
			{
				var hasil_int_pw 	= nilai_int_pw 	* 0.1;
				var hasil_pdol_pw 	= nilai_pdol_pw * 0.1;
				var hasil_pb_pw 	= nilai_pb_pw 	* 0.1;
				
				document.getElementById('hasil_int_pw').value 	= (hasil_int_pw.toFixed(2));
				document.getElementById('hasil_pdol_pw').value = (hasil_pdol_pw.toFixed(2));
				document.getElementById('hasil_pb_pw').value	= (hasil_pb_pw.toFixed(2));
			}
		}
		
//PW EDIT
		function hitungPWEdit()
		{
			var nilai_int_pw 	= document.getElementById('int_pw_edit').value;
			var nilai_pdol_pw 	= document.getElementById('pdol_pw_edit').value;
			var nilai_pb_pw 	= document.getElementById('pb_pw_edit').value;
			
			if (nilai_int_pw == "")
			{
				document.getElementById('hasil_int_pw_edit').value ="0";
				document.getElementById('hasil_pdol_pw_edit').value ="0";
				document.getElementById('hasil_pb_pw_edit').value ="0";
			}
			else
			{
				var hasil_int_pw 	= nilai_int_pw 	* 0.1;
				var hasil_pdol_pw 	= nilai_pdol_pw * 0.1;
				var hasil_pb_pw 	= nilai_pb_pw 	* 0.1;
				
				document.getElementById('hasil_int_pw_edit').value 	= (hasil_int_pw.toFixed(2));
				document.getElementById('hasil_pdol_pw_edit').value = (hasil_pdol_pw.toFixed(2));
				document.getElementById('hasil_pb_pw_edit').value	= (hasil_pb_pw.toFixed(2));
			}
		}
		

    $(document).ready(function () {
        $('#myDataTable').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
	});	

</script>
<style>
.user-dantech	{text-align:center;padding-top:5px;border-bottom:1px solid #ccc; color:#fff;}
</style>
