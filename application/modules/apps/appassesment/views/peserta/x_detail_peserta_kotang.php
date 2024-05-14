<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Assessment Center BKKBN</title>
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
	
    <link rel="manifest" href="manifest.json">
    <link rel="apple-touch-icon" href="/img/icon_192.png"><!-- 180×180 -->
    <link rel="icon" href="/favicon.ico"><!-- 32×32 -->
    <!-- <link rel="icon" href="/icon.svg" type="image/svg+xml">-->

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
				<div style="float:left;padding:0px;"><img src="<?=base_url('assets/media/upload/bawaan/logo_bkkbn.png');?>" style='width:40px;padding-bottom:4px;'> 
					AC - BKKBN
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
				<li ><a href="<?php echo base_url('module/appassesment/peserta');?>"><i class="fa fa-backward" aria-hidden="true"></i> Kembali menu Utama</a></li>
				<li><a href="<?=site_url();?>login/out"><i class="fa fa-sign-out fa-fw"></i>  Keluar</a></li>
				</ul>
			</section>
		  </aside>

		  <div class="content-wrapper">
			<section class="content">
				<div class="row">
					<div class="col-lg-12">
						<h3 class=""><i class="fa fa-book" aria-hidden="true"></i>&nbsp; Riwayat Assessment Pegawai BKKBN </h3>
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
									<li><a data-toggle="tab" href="#voice">Voice to Text</a></li>
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
																			<th style="width:40%;text-align:center;">Unit Kerja</th>
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
																			<td>Tgl. Psikometri	: <?//php echo $key->tgl_psikometri; ?//> <br/> Tgl. Wawancara 	: <?//php echo $key->tgl_wwcr; ?//>  <br/> Assessor : <b><?//php echo $key->nama_personil; ?></b></td>
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
										
								<!-- voice to text -->	
								
									<div id="voice" class="tab-pane fade">
										<div class="panel-body">
											<div class="row">
												<div class="col-lg-12">
													<div class="panel-default">
														<div class="panel-heading">
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
											</div>
										</div>
									</div>
									
								
								<!-- end voice to text -->
								
										
									<div id="riwayat" class="tab-pane fade">
										<div class="panel-body">
											<?php foreach ($kegiatan->result() as $key){ ?>
											<div class="panel-group" id="accordion">
												<div class="panel-default">
													<div class="panel-heading">
														<h4 class="panel-title">
														<div class="dropdown">
															<button class="btn btn-default btn-xs" type="button" data-toggle="dropdown" style="width:100%;">
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
																									<td>Keterampilan Interpersonal</td>
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
			<strong>&copy; 2022 || <a href="#"></strong>whaddupsap&trade;.</a> Page rendered in <strong>{elapsed_time}</strong> seconds
		  </footer>
		</div>
		
		
<!--------------------------------------------------------------------------- MODAL ------------------------------------------------------------------------>

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
	
<!-- MODAL ADD POTENSI -->
    <div class="modal fade" id="ModalaAddPot" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="row modal-content" style="display:block;">
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
            <div class="row modal-content" style="display:block;">
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
            <div class="row modal-content" style="display:block;">
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
            <div class="row modal-content" style="display:block;">
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
            <div class="row modal-content" style="display:block;">
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
            <div class="row modal-content" style="display:block;">
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
            <div class="row modal-content" style="display:block;">
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
	
	<script src="<?php echo base_url() ?>assets/css/stt_vox/script.js"  defer='defer'></script>
	
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
