<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>UPT Penilaian Kompetensi</title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	
	<meta http-equiv="Cache-control" content="no-cache">
    <link rel="canonical" href="https://www.speechtexter.com" />
	
	<link rel="shortcut icon" href="<?=base_url('assets/media/upload/bawaan/logo_ktng.gif');?>" type="image/x-icon" />
	
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

	<!-- THIS VOICE TO TEXT-->
    <link rel="stylesheet" href="https://www.speechtexter.com/style220.css"> 
    <link rel="manifest" href="https://www.speechtexter.com/manifest.json">

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
						<h3 class=""><i class="fa fa-book" aria-hidden="true"></i>&nbsp; Riwayat Assessment (Peserta Kerjasama) </h3>
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

    <div id="app">
        <div id="top-navbar">
            <div class="width-limiter">
                <div class="group-row">
                    <div id="brand">STT-EG V.1.0</div>
                    <div id="logo">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1024 1024">
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
                                <linearGradient id="linear-gradient" x1="511.719" y1="811" x2="511.719" y2="213.906" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#c8c8c8" />
                                    <stop offset="1" stop-color="#f0f0f0" />
                                </linearGradient>
                            </defs>
                            <path id="svg-logo-back" class="cls-1" d="M230.658,123.327S93.095,109.371,101.07,266.871s37.879,572.183,37.879,572.183-7.974,103.671,121.614,81.74S519.74,886.9,519.74,886.9l-31.9,129.588L820.784,853.01s107.658-29.9,101.677-173.45-37.879-486.455-37.879-486.455-21.931-109.652-153.513-95.7" />
                            <path id="svg-logo-shadow" class="cls-2" d="M560,681.168V767H662a29,29,0,0,1,0,58H407a29,29,0,0,1,0-58H510V680.284C359.972,661.7,379,504,379,504s-2-17.5,23-18c18-.36,19,22,19,22S398.224,645.011,535,642c139.323-3.067,114-134,114-134s-0.979-21.39,23-22c13.5-.344,21,20,21,20S708.265,667.7,560,681.168ZM530,620c-86-2-88-82-88-82s-2-142,0-230c1.954-85.978,92-80,92-80,92,0,100,86,100,86l-2,234S616,622,530,620Z" />
                            <path id="svg-logo-mic" class="cls-3" d="M536,667.168V753H638a29,29,0,0,1,0,58H383a29,29,0,0,1,0-58H486V666.284C335.972,647.7,355,490,355,490s-2-17.5,23-18c18-.36,19,22,19,22S374.224,631.011,511,628c139.323-3.067,114-134,114-134s-0.979-21.39,23-22c13.5-.344,21,20,21,20S684.265,653.7,536,667.168ZM506,606c-86-2-88-82-88-82s-2-142,0-230c1.954-85.978,92-80,92-80,92,0,100,86,100,86l-2,234S592,608,506,606Z" />
                        </svg>
                    </div>
                </div>
                <div id="b-group">
                    <button class="wave" id="b-lang">
                        <div id="lang-flag-display"></div>
                        <div id="lang-name-display">English (US)</div>
                    </button>
                </div>
            </div>
        </div>
        <div id="main" style="height:100%">
            <div id="note-wrapper-outer">
                <div id="warning" class="hidden"></div>
                <div id="note-title">

                    <div class="group-row">
                        <button class="wave" id="b-delete" title="Clear the page.&#10; Click 'undo' button (CTRL+Z) to recover.">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zM6 20V4h7v5h5v11H6z" />
                            </svg>
                        </button>


                        <button class="wave" id="b-note-download" title="Download">
                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                                <g>
                                    <rect fill="none" height="24" width="24" />
                                </g>
                                <g>
                                    <path d="M18,15v3H6v-3H4v3c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2v-3H18z M17,11l-1.41-1.41L13,12.17V4h-2v8.17L8.41,9.59L7,11l5,5 L17,11z" />
                                </g>
                            </svg>
                        </button>


                        <button class="wave ss-hide-1" id="b-print" title="Print">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path d="M19 8h-1V3H6v5H5c-1.66 0-3 1.34-3 3v6h4v4h12v-4h4v-6c0-1.66-1.34-3-3-3zM8 5h8v3H8V5zm8 12v2H8v-4h8v2zm2-2v-2H6v2H4v-4c0-.55.45-1 1-1h14c.55 0 1 .45 1 1v4h-2z" />
                                <circle cx="18" cy="11.5" r="1" />
                            </svg>
                        </button>


                        <span class=separator>|</span>


                        <button class="wave ss-hide" id="b-bold" title="Bold&#10;CTRL+B">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path d="M15.6 10.79c.97-.67 1.65-1.77 1.65-2.79 0-2.26-1.75-4-4-4H7v14h7.04c2.09 0 3.71-1.7 3.71-3.79 0-1.52-.86-2.82-2.15-3.42zM10 6.5h3c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5h-3v-3zm3.5 9H10v-3h3.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5z" />
                            </svg>

                        </button>
                        <button class="wave ss-hide" id="b-italic" title="Italic&#10;CTRL+I">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path d="M10 4v3h2.21l-3.42 8H6v3h8v-3h-2.21l3.42-8H18V4h-8z" />
                            </svg>
                        </button>
                        <button class="wave ss-hide" id="b-underline" title="Underline&#10;CTRL+U">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path d="M12 17c3.31 0 6-2.69 6-6V3h-2.5v8c0 1.93-1.57 3.5-3.5 3.5S8.5 12.93 8.5 11V3H6v8c0 3.31 2.69 6 6 6zm-7 2v2h14v-2H5z" />
                            </svg>
                        </button>


                    </div>


                    <div class="group-row">

                        <button class="wave" id="b-settings" title="Settings">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path d="M19.43 12.98c.04-.32.07-.64.07-.98 0-.34-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.09-.16-.26-.25-.44-.25-.06 0-.12.01-.17.03l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.06-.02-.12-.03-.18-.03-.17 0-.34.09-.43.25l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98 0 .33.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.09.16.26.25.44.25.06 0 .12-.01.17-.03l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.06.02.12.03.18.03.17 0 .34-.09.43-.25l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zm-1.98-1.71c.04.31.05.52.05.73 0 .21-.02.43-.05.73l-.14 1.13.89.7 1.08.84-.7 1.21-1.27-.51-1.04-.42-.9.68c-.43.32-.84.56-1.25.73l-1.06.43-.16 1.13-.2 1.35h-1.4l-.19-1.35-.16-1.13-1.06-.43c-.43-.18-.83-.41-1.23-.71l-.91-.7-1.06.43-1.27.51-.7-1.21 1.08-.84.89-.7-.14-1.13c-.03-.31-.05-.54-.05-.74s.02-.43.05-.73l.14-1.13-.89-.7-1.08-.84.7-1.21 1.27.51 1.04.42.9-.68c.43-.32.84-.56 1.25-.73l1.06-.43.16-1.13.2-1.35h1.39l.19 1.35.16 1.13 1.06.43c.43.18.83.41 1.23.71l.91.7 1.06-.43 1.27-.51.7 1.21-1.07.85-.89.7.14 1.13zM12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 6c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z" />
                            </svg>
                        </button>
                        <button class="wave" id="b-fullscreen" title="Fullscreen toggle">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path d="M7 14H5v5h5v-2H7v-3zm-2-4h2V7h3V5H5v5zm12 7h-3v2h5v-5h-2v3zM14 5v2h3v3h2V5h-5z" />
                            </svg>
                        </button>
                        <button class="wave" id="b-dictionary" title="Show/hide the dictionary">
                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                                <g>
                                    <rect fill="none" height="24" width="24" />
                                </g>
                                <g>
                                    <g />
                                    <g>
                                        <path d="M21,5c-1.11-0.35-2.33-0.5-3.5-0.5c-1.95,0-4.05,0.4-5.5,1.5c-1.45-1.1-3.55-1.5-5.5-1.5S2.45,4.9,1,6v14.65 c0,0.25,0.25,0.5,0.5,0.5c0.1,0,0.15-0.05,0.25-0.05C3.1,20.45,5.05,20,6.5,20c1.95,0,4.05,0.4,5.5,1.5c1.35-0.85,3.8-1.5,5.5-1.5 c1.65,0,3.35,0.3,4.75,1.05c0.1,0.05,0.15,0.05,0.25,0.05c0.25,0,0.5-0.25,0.5-0.5V6C22.4,5.55,21.75,5.25,21,5z M21,18.5 c-1.1-0.35-2.3-0.5-3.5-0.5c-1.7,0-4.15,0.65-5.5,1.5V8c1.35-0.85,3.8-1.5,5.5-1.5c1.2,0,2.4,0.15,3.5,0.5V18.5z" />
                                        <g>
                                            <path d="M17.5,10.5c0.88,0,1.73,0.09,2.5,0.26V9.24C19.21,9.09,18.36,9,17.5,9c-1.7,0-3.24,0.29-4.5,0.83v1.66 C14.13,10.85,15.7,10.5,17.5,10.5z" />
                                            <path d="M13,12.49v1.66c1.13-0.64,2.7-0.99,4.5-0.99c0.88,0,1.73,0.09,2.5,0.26V11.9c-0.79-0.15-1.64-0.24-2.5-0.24 C15.8,11.66,14.26,11.96,13,12.49z" />
                                            <path d="M17.5,14.33c-1.7,0-3.24,0.29-4.5,0.83v1.66c1.13-0.64,2.7-0.99,4.5-0.99c0.88,0,1.73,0.09,2.5,0.26v-1.52 C19.21,14.41,18.36,14.33,17.5,14.33z" />
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </button>

                    </div>
                </div>
                <div id="note-wrapper-inner">
               <div id="note" contenteditable="true"><p class="p_edit dir_LTR"></p></div>
                </div>
                <div id="note-info">
                    <div class="group-row">
                    </div>
                    <div class="group-row">
                        <div id="word-counter"></div>
                    </div>
                </div>
            </div>
            <div id="panel-right">
                <div id="dictionary">
                    <div id="dictionary-title">
                        <div id="group-b-dict">
                            <button class="wave hidden" id="b-reset-cc" title="Reset commands">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                    <path d="M14 12c0-1.1-.9-2-2-2s-2 .9-2 2 .9 2 2 2 2-.9 2-2zm-2-9c-4.97 0-9 4.03-9 9H0l4 4 4-4H5c0-3.87 3.13-7 7-7s7 3.13 7 7-3.13 7-7 7c-1.51 0-2.91-.49-4.06-1.3l-1.42 1.44C8.04 20.3 9.94 21 12 21c4.97 0 9-4.03 9-9s-4.03-9-9-9z" />
                                </svg>
                            </button>
                            <button class="wave hidden" id="b-import-cc" title="Import commands">
                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                                    <g>
                                        <rect fill="none" height="24" width="24" />
                                    </g>
                                    <g>
                                        <path d="M18,15v3H6v-3H4v3c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2v-3H18z M17,11l-1.41-1.41L13,12.17V4h-2v8.17L8.41,9.59L7,11l5,5 L17,11z" />
                                    </g>
                                </svg>
                            </button>

                            <button class="wave hidden" id="b-export-cc" title="Export commands">
                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                                    <g>
                                        <rect fill="none" height="24" width="24" />
                                    </g>
                                    <g>
                                        <path d="M18,15v3H6v-3H4v3c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2v-3H18z M7,9l1.41,1.41L11,7.83V16h2V7.83l2.59,2.58L17,9l-5-5L7,9z" />
                                    </g>
                                </svg>
                            </button>

                            <button class="wave" id="b-edit-cc" title="Edit commands">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                    <path d="M14.06 9.02l.92.92L5.92 19H5v-.92l9.06-9.06M17.66 3c-.25 0-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.2-.2-.45-.29-.71-.29zm-3.6 3.19L3 17.25V21h3.75L17.81 9.94l-3.75-3.75z" />
                                </svg>
                            </button>

                            <button class="wave" id='b-toggle-commands' title="ON/OFF">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                                    <path d="M0 0h24v24H0z" fill="none" />
                                    <path d="M17 6H7c-3.31 0-6 2.69-6 6s2.69 6 6 6h10c3.31 0 6-2.69 6-6s-2.69-6-6-6zm0 10H7c-2.21 0-4-1.79-4-4s1.79-4 4-4h10c2.21 0 4 1.79 4 4s-1.79 4-4 4zm0-7c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" />
                                </svg>
                            </button>

                            <button class="wave" id="commands-b-close" title="Hide">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                    <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div id="dict-main">
                        <div id="dict-content"></div>

                        <button class="wave hidden" id="dict-add-word" title="Add a new custom command.&#10;Ex:&#10;Voice command on the left column: 'question mark'&#10;Result on the right column: '?'">
                            +
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div id="bottom-navbar">
            <button class="wave" id="b-copy" title="Copy all text"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                    <path d="M0 0h24v24H0z" fill="none" />
                    <path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h11c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 16H8V7h11v14z" />
                </svg></button>
            <button class="wave" id="b-undo" title="Undo&#10;CTRL + Z"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path d="M12.5 8c-2.65 0-5.05.99-6.9 2.6L2 7v9h9l-3.62-3.62c1.39-1.16 3.16-1.88 5.12-1.88 3.54 0 6.55 2.31 7.6 5.5l2.37-.78C21.08 11.03 17.15 8 12.5 8z" />
                </svg></button>
            <div>
                <button class="wave" id="mic" title="Start / stop&#10;'ESC' key"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                        <g>
                            <rect fill="none" height="24" width="24" />
                            <rect fill="none" height="24" width="24" />
                            <rect fill="none" height="24" width="24" />
                        </g>
                        <g>
                            <g />
                            <g>
                                <path d="M12,14c1.66,0,3-1.34,3-3V5c0-1.66-1.34-3-3-3S9,3.34,9,5v6C9,12.66,10.34,14,12,14z" />
                                <path d="M17,11c0,2.76-2.24,5-5,5s-5-2.24-5-5H5c0,3.53,2.61,6.43,6,6.92V21h2v-3.08c3.39-0.49,6-3.39,6-6.92H17z" />
                            </g>
                        </g>
                    </svg></button>
            </div>
            <button class="wave" id="b-redo" title="Redo&#10;CTRL + Y"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path d="M18.4 10.6C16.55 8.99 14.15 8 11.5 8c-4.65 0-8.58 3.03-9.96 7.22L3.9 16c1.05-3.19 4.05-5.5 7.6-5.5 1.95 0 3.73.72 5.12 1.88L13 16h9V7l-3.6 3.6z" />
                </svg></button>

            <button class="wave" id="b-send" title="Send"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                    <path d="M0 0h24v24H0z" fill="none" />
                    <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z" />
                </svg></button>
        </div>

        <div id="m-download" class="popup-overlay noselect">
            <div class="popup-menu">
                <div class="popup-menu-title">
                    <div class="popup-menu-title-text">Download</div>
                    <div class="popup-menu-close">
                        <button class="wave" id="m-download-b-close">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="popup-menu-content">

                    <button id="b-download-doc" class="wave" title="download a .doc file">
                        <svg height="32px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <path style="fill:#E2E5E7;" d="M128,0c-17.6,0-32,14.4-32,32v448c0,17.6,14.4,32,32,32h320c17.6,0,32-14.4,32-32V128L352,0H128z" />
                            <path style="fill:#B0B7BD;" d="M384,128h96L352,0v96C352,113.6,366.4,128,384,128z" />
                            <polygon style="fill:#CAD1D8;" points="480,224 384,128 480,128 " />
                            <path style="fill:darkblue" d="M416,416c0,8.8-7.2,16-16,16H48c-8.8,0-16-7.2-16-16V256c0-8.8,7.2-16,16-16h352c8.8,0,16,7.2,16,16
	V416z" />
                            <g>
                                <path style="fill:#FFFFFF;" d="M92.576,384c-4.224,0-8.832-2.32-8.832-7.936v-72.656c0-4.608,4.608-7.936,8.832-7.936h29.296
		c58.464,0,57.168,88.528,1.136,88.528H92.576z M100.64,311.072v57.312h21.232c34.544,0,36.064-57.312,0-57.312H100.64z" />
                                <path style="fill:#FFFFFF;" d="M228,385.28c-23.664,1.024-48.24-14.72-48.24-46.064c0-31.472,24.56-46.944,48.24-46.944
		c22.384,1.136,45.792,16.624,45.792,46.944C273.792,369.552,250.384,385.28,228,385.28z M226.592,308.912
		c-14.336,0-29.936,10.112-29.936,30.32c0,20.096,15.616,30.336,29.936,30.336c14.72,0,30.448-10.24,30.448-30.336
		C257.04,319.008,241.312,308.912,226.592,308.912z" />
                                <path style="fill:#FFFFFF;" d="M288.848,339.088c0-24.688,15.488-45.92,44.912-45.92c11.136,0,19.968,3.328,29.296,11.392
		c3.456,3.184,3.84,8.816,0.384,12.4c-3.456,3.056-8.704,2.688-11.776-0.384c-5.232-5.504-10.608-7.024-17.904-7.024
		c-19.696,0-29.152,13.952-29.152,29.552c0,15.872,9.328,30.448,29.152,30.448c7.296,0,14.08-2.96,19.968-8.192
		c3.952-3.072,9.456-1.552,11.76,1.536c2.048,2.816,3.056,7.552-1.408,12.016c-8.96,8.336-19.696,10-30.336,10
		C302.8,384.912,288.848,363.776,288.848,339.088z" />
                            </g>
                            <path style="fill:#CAD1D8;" d="M400,432H96v16h304c8.8,0,16-7.2,16-16v-16C416,424.8,408.8,432,400,432z" />
                        </svg>
                        <span>download a .doc file</span>

                    </button>

                    <button id="b-download-txt" class="wave" title="download a .txt file">

                        <svg height="32px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <path style="fill:#E2E5E7;" d="M128,0c-17.6,0-32,14.4-32,32v448c0,17.6,14.4,32,32,32h320c17.6,0,32-14.4,32-32V128L352,0H128z" />
                            <path style="fill:#B0B7BD;" d="M384,128h96L352,0v96C352,113.6,366.4,128,384,128z" />
                            <polygon style="fill:#CAD1D8;" points="480,224 384,128 480,128 " />
                            <path style="fill:darkorange;" d="M416,416c0,8.8-7.2,16-16,16H48c-8.8,0-16-7.2-16-16V256c0-8.8,7.2-16,16-16h352c8.8,0,16,7.2,16,16
	V416z" />
                            <g>
                                <path style="fill:#FFFFFF;" d="M132.784,311.472H110.4c-11.136,0-11.136-16.368,0-16.368h60.512c11.392,0,11.392,16.368,0,16.368
		h-21.248v64.592c0,11.12-16.896,11.392-16.896,0v-64.592H132.784z" />
                                <path style="fill:#FFFFFF;" d="M224.416,326.176l22.272-27.888c6.656-8.688,19.568,2.432,12.288,10.752
		c-7.68,9.088-15.728,18.944-23.424,29.024l26.112,32.496c7.024,9.6-7.04,18.816-13.952,9.344l-23.536-30.192l-23.152,30.832
		c-6.528,9.328-20.992-1.152-13.68-9.856l25.696-32.624c-8.048-10.096-15.856-19.936-23.664-29.024
		c-8.064-9.6,6.912-19.44,12.784-10.48L224.416,326.176z" />
                                <path style="fill:#FFFFFF;" d="M298.288,311.472H275.92c-11.136,0-11.136-16.368,0-16.368h60.496c11.392,0,11.392,16.368,0,16.368
		h-21.232v64.592c0,11.12-16.896,11.392-16.896,0V311.472z" />
                            </g>
                            <path style="fill:#CAD1D8;" d="M400,432H96v16h304c8.8,0,16-7.2,16-16v-16C416,424.8,408.8,432,400,432z" />
                        </svg>
                        <span>download a .txt file</span>
                    </button>
                </div>
            </div>
        </div>

        <div id="m-font-select" class="popup-overlay noselect">
            <div class="popup-menu">
                <div class="popup-menu-title">
                    <div class="popup-menu-title-text">Select font</div>
                    <div class="popup-menu-close">
                        <button class="wave" id="popup-menu-close">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="popup-menu-content">
                    <button id="b-download-doc" class="wave">
                        <span>download a .doc file</span>
                    </button>
                    <button id="b-download-txt" class="wave">
                        <span>download a .txt file</span>
                    </button>
                </div>
            </div>
        </div>

        <div id="m-settings" class="popup-overlay noselect">
            <div class="popup-menu">
                <div class="popup-menu-title">
                    <div class="popup-menu-title-text">Settings</div>
                    <div class="popup-menu-close">
                        <button class="wave" id="settings-b-close">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="popup-menu-content">

                    <div class="popup-menu-row">
                        <span>Autosave (uses your browser's cache)</span>
                        <label class="switch">
                            <input type="checkbox" id="settings-autosave">
                            <span class="slider round"></span>
                        </label>
                    </div>

                    <span class="settings-hint">Recover your text after accidentally closing the app or navigating to another page (won't work if the cache gets cleared). Don't use this option when using public computers, use the "download" button instead.</span>


                    <div class="popup-menu-row">
                        <span>Capitalize first letter in a new sentence</span>
                        <label class="switch">
                            <input type="checkbox" checked id="settings-cap-first-letter">
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="popup-menu-row">
                        <span>Capitalize proper nouns</span>
                        <label class="switch">
                            <input type="checkbox" checked id="settings-cap-auto">
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <span class="settings-hint">E.g. John, Oxford University, Monday, etc. Sometimes auto capitalization might not work correctly (e.g. <b>T</b>arget (the name of a store) / <b>t</b>arget (a result that you try to achieve)</span>
                    <div class="popup-menu-row">
                        <span>Capitalize every letter</span>
                        <label class="switch">
                            <input type="checkbox" checked id="settings-cap-every-letter">
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="popup-menu-row">
                        <span>Word counter</span>
                        <label class="switch">
                            <input type="checkbox" id="settings-word-counter">
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="popup-menu-row">
                        <span>Dark theme</span>
                        <label class="switch">
                            <input type="checkbox" id="settings-dark-theme">
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="popup-menu-row">
                        <span>Default font type</span>
                        <button id="b-font-type" class="wave">Times New Roman</button>
                    </div>
                    <div class="popup-menu-row">
                        <span>Default font size</span>
                        <div class="popup-menu-row">
                            <button id="b-font-size-minus" class="wave">-</button>
                            <span id="b-font-size">100%</span>

                            <button id="b-font-size-plus" class="wave">+</button>
                        </div>
                    </div>
                    <div class="popup-menu-row">
                        <span id="app-info">app v.2.01</span>
                    </div>
                </div>

            </div>

        </div>

        <div id="m-fontlist" class="popup-overlay noselect">
            <div class="popup-menu">
                <div class="popup-menu-title">
                    <div class="popup-menu-title-text">Select font type</div>
                    <div class="popup-menu-close">
                        <button class="wave" id="m-fontlist-b-close">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div id="font-list" class="popup-menu-content">

                </div>

            </div>
        </div>

        <div id="overlay-dialog" class="noselect">

            <div id="dialog">
                <div id="dialog-title">
                    <div id="dialog-title-text">Are you sure?</div>
                    <button class="wave" id="dialog-b-close">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z" />
                        </svg>
                    </button>
                </div>
                <div id="dialog-content">Are you sure?</div>
                <div id="dialog-response">

                    <button class="wave" id="dialog-no">NO</button>
                    <button class="wave" id="dialog-yes">YES</button>
                </div>
            </div>
        </div>


        <div id="overlay-lang" class="noselect">
            <div id="popup-lang">
                <div id="modal-title">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                        </svg>
                    </div>
                    <div id="lang-menu-filter" contenteditable="true"></div>
                    <button class="wave" id="modal-b-close-lang">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z" />
                        </svg>
                    </button>
                </div>
                <div id="lang-menu-content"></div>
            </div>
        </div>

        <div id="overlay-speech" class="hidden">
            <div id="speech-box">
                <div id="mic-level"></div>
                <div id="speech-display">

                    <div class="anim-dots"></div>

                </div>
            </div>
        </div>

        <div id="snackbar">...</div>

    </div>
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
															<button class="btn btn-default btn-xs" type="button" data-toggle="dropdown">
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
			  <b>Version</b> 3.2.2
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
	
	<script src="https://www.speechtexter.com/script222.js?v=2"  defer='defer'></script>
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
	
	let spanYear = document.getElementById('copyright-year');
        spanYear.textContent = new Date().getFullYear();

        var encEmail = "aW5mb0BzcGVlY2h0ZXh0ZXIuY29t"; //info email
        const contactDiv = document.getElementById("contact-link");
        var decEmail = atob(encEmail);
        contactDiv.innerHTML = '<a id="contact" class="link-footer" href="mailto:' + decEmail + '">' + decEmail + '</a></p>';

</script>
<style>
.user-dantech	{text-align:center;padding-top:5px;border-bottom:1px solid #ccc; color:#fff;}
</style>
