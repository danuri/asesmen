<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title><?=$this->config->item("site_name");?></title>
	<link rel="shortcut icon" href="<?=base_url();?>assets/media/upload/bawaan/logo_bkkbn.png" type="image/x-icon" />
	
	<meta name="description" content="overview &amp; stats" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<!-- bootstrap & fontawesome -->
	<link href="<?=base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
	<link href="<?=base_url('assets/css/font-awesome/font-awesome-4.4.0/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">
	<link href="<?=base_url('assets/css/klasik.css');?>" rel="stylesheet">
	<!-- page specific plugin styles -->

	<!-- text fonts -->
	<link rel="stylesheet" href="<?=base_url('assets/themes/acemaster/');?>/assets/css/fonts.googleapis.com.css" />

	<!-- ace styles -->
	<link rel="stylesheet" href="<?=base_url('assets/themes/acemaster/');?>/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

	<link rel="stylesheet" href="<?=base_url('assets/themes/acemaster/');?>/assets/css/ace-skins.min.css" />


	<!-- jQuery Version 1.11.0 -->
	<script type="text/javascript" src="<?=base_url('assets/js/jquery/jquery-3.5.1.min.js');?>"></script>
	<!-- Bootstrap Core JavaScript -->
	<script type="text/javascript" src="<?=base_url('assets/js/bootstrap.min.js');?>"></script>

	<!-- ace settings handler -->
	<script src="<?=base_url('assets/themes/acemaster/');?>/assets/js/ace-extra.min.js"></script>
	<script src="<?=base_url('assets/themes/acemaster/');?>/assets/js/ace-elements.min.js"></script>
	<script src="<?=base_url('assets/themes/acemaster/');?>/assets/js/ace.min.js"></script>

	<!-- moris chart -->
	<link href="<?=base_url('assets/css/plugins/morris.css');?>" rel="stylesheet">
	<script src="<?php echo base_url() ?>assets/js/plugins/morris/raphael.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/plugins/morris/morris.js"></script>
	<script src="<?php echo base_url() ?>assets/js/plugins/morris/morris.min.js"></script>
	
	<!-- DataTables Responsive CSS -->
	<link href="<?=base_url('assets/css/datatables-responsive/dataTables.responsive.css');?>" rel="stylesheet">
	<!-- DataTable Button CSS -->
	<link href="<?=base_url('assets/css/datatables/css/buttons.dataTables.min.css');?>" rel="stylesheet">
	<!-- DataTables CSS -->
	<link href="<?=base_url('assets/css/datatables-plugins/dataTables.bootstrap.css');?>" rel="stylesheet">
		
	
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/highcharts-more.js"></script>

	<script src="https://code.highcharts.com/maps/modules/map.js"></script>

	<script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
	<script src="https://code.highcharts.com/modules/series-label.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>
	<script src="https://code.highcharts.com/modules/export-data.js"></script>
	<script src="https://code.highcharts.com/modules/accessibility.js"></script>	
	<script src="http://code.highcharts.com/mapdata/countries/id/id-all.js"></script>
	
    <link rel="manifest" href="manifest.json">
    <link rel="apple-touch-icon" href="/img/icon_192.png"><!-- 180×180 -->
    <link rel="icon" href="/favicon.ico"><!-- 32×32 -->


</head>
	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="navbar-header pull-left">
					<img src="<?=base_url();?>assets/media/upload/bawaan/logo_bkkbn.png" style='width:45px;padding:0px;float:left;'>
					<span class="navbar-brand"><?=$this->config->item("site_name");?></span>
				</div>
			</div>
		</div>
			
		<div class="main-container ace-save-state" id="main-container">
			<div id="sidebar" class="sidebar responsive ace-save-state">
				<div class="sidebar-shortcuts" id="sidebar-shortcuts" style="text-align:left;">
					<ul class="nav nav-list">
						<li><a href="<?php echo base_url('module/appassesment/peserta');?>"><i class="fa fa-backward" aria-hidden="true"></i>&nbsp; Kembali menu Utama</a></li>
						<li><a href="#"><i class="fa fa-user"></i>&nbsp; Profil Assessment</a></li>
						<li><a href="<?=site_url();?>login/out"><i class="fa fa-sign-out fa-fw"></i>&nbsp;Keluar</a></li>
					</ul>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<span><?=$this->config->item("instansi");?></span>
							</li>
						</ul>
					</div>
					<div class="page-content">
						<div class="row">
							<div class="col-lg-12">
								<div class="panel panel-default">
									<div class="panel-heading" style="background:#124f8b;">
										<i class="fa fa-book" aria-hidden="true"></i>&nbsp; Riwayat Assessment
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
													<div class="col-lg-12">
															<div class="panel-heading" style="background:#1976d2;color:#fff;">
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
															<div class="table-responsive">
																<table width="100%" class="table table-bordered table-hover table-striped" id="MyDataTableProfile">
																	<thead>
																		<tr>
																			<th style="width:8%;text-align:center;">No.</th>
																			<th style="width:40%;text-align:center;">Jabatan</th>
																			<th style="width:30%;text-align:center;">Unit Kerja</th>
																			<th style="width:30%;text-align:center;">Jenjang</th>
																		</tr>
																	</thead>
																<tbody>
																	<?php 
																	$no =1;
																	foreach ($jabatan->result() as $key) { ?>
																	<tr>
																		<td style="width:8%;"><b> <?php echo $no++; ?> </b></td>
																		<td style="width:40%;"><b> <?php echo $key->jabatan; ?> </b></td>
																		<td style="width:30%;"><b> <?php echo $key->unit_kerja; ?> </b></td>
																		<td style="width:30%;"><b> <?php echo $key->jenjang_jabatan; ?> </b></td>
																	</tr>
																<?php } ?>	
																</tbody>
																</table>	
															</div>
													</div>
												</div>	
											</div>
										</div>	
										<div id="riwayat" class="tab-pane fade">
											<div class="panel-body">
												<div class="panel-group" id="accordion">
													<div class="panel panel-default">
														<div class="panel-heading" style="background:#1976d2;">
															<h4 class="panel-title">
																<?php foreach ($assessment->result() as $key) { ?>
																<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $key->id; ?>" style="text-decoration:none"> <?php echo $key->thn; ?></a>
																<?php } ?>
															</h4>
														</div>
														<?php foreach ($assessment->result() as $key) { ?>
														<div id="collapse<?php echo $key->id; ?>" class="panel-collapse collapse">
															<div class="panel-body">
																<div id="grafik1" class="shadow"></div>
															</div>
															<div class="panel-body">
																<table>
																	<tbody style="font-size:1.5em;">
																		<tr>
																			<td>Kategori &nbsp;</td>
																			<td>:&nbsp; <b><?php echo $key->kesimpulan; ?></b></td>
																		</tr>
																		<tr>
																			<td>JPM &nbsp;</td>
																			<td>:&nbsp; <?php echo $key->jpm; ?></td>
																		</tr>
																	</tbody>
																</table>
															</div>
															<div class="panel-body">
																<div class="table-responsive">
																	<table width="100%" class="table table-bordered table-hover table-striped" id="MyDataTablesAs">
																	<thead>
																		<tr>
																			<th style="width:30%;text-align:center;">Kompetensi</th>
																			<th style="width:8%;text-align:center;">Nilai</th>
																			<th style="width:50%;text-align:center;">Deskripsi</th>
																		</tr>
																	</thead>
																		<tbody>
																			<tr>
																				<td style="width:30%;"><b> Integritas </b></td>
																				<td style="width:8%;"><b> <?php echo $key->integritas_hp; ?> </b></td>
																				<td style="width:50%;"><b> <?php echo $key->deskripsi_integritas; ?> </b></td>
																			</tr>
																			<tr>
																				<td style="width:30%;"><b> Kerjasama </b></td>
																				<td style="width:8%;"><b> <?php echo $key->kerjasama_hp; ?> </b></td>
																				<td style="width:50%;"><b> <?php echo $key->deskripsi_kerjasama; ?> </b></td>
																			</tr>
																			<tr>
																				<td style="width:30%;"><b> Komunikasi </b></td>
																				<td style="width:8%;"><b> <?php echo $key->komunikasi_hp; ?> </b></td>
																				<td style="width:50%;"><b> <?php echo $key->deskripsi_komunikasi; ?> </b></td>
																			</tr>
																			<tr>
																				<td style="width:30%;"><b> Orientasi pada Hasil</b></td>
																				<td style="width:8%;"><b> <?php echo $key->orientasi_hp; ?> </b></td>
																				<td style="width:50%;"><b> <?php echo $key->deskripsi_orientasi; ?> </b></td>
																			</tr>
																			<tr>
																				<td style="width:30%;"><b> Pelayanan Publik</b></td>
																				<td style="width:8%;"><b> <?php echo $key->pelayanan_hp; ?> </b></td>
																				<td style="width:50%;"><b> <?php echo $key->deskripsi_pelayanan; ?> </b></td>
																			</tr>
																			<tr>
																				<td style="width:30%;"><b> Pengembangan Diri pada Orang Lain </b></td>
																				<td style="width:8%;"><b> <?php echo $key->pengembangan_hp; ?> </b></td>
																				<td style="width:50%;"><b> <?php echo $key->deskripsi_pengembangan; ?> </b></td>
																			</tr>
																			<tr>
																				<td style="width:30%;"><b> Mengelola Perubahan</b></td>
																				<td style="width:8%;"><b> <?php echo $key->mengelola_hp; ?> </b></td>
																				<td style="width:50%;"><b> <?php echo $key->deskripsi_mengelola; ?> </b></td>
																			</tr>
																			<tr>
																				<td style="width:30%;"><b> Pengambilan Keputusan </b></td>
																				<td style="width:8%;"><b> <?php echo $key->keputusan_hp; ?> </b></td>
																				<td style="width:50%;"><b> <?php echo $key->deskripsi_keputusan; ?> </b></td>
																			</tr>
																			<tr>
																				<td style="width:30%;"><b> Perekat Bangsa </b></td>
																				<td style="width:8%;"><b> <?php echo $key->perekat_hp; ?> </b></td>
																				<td style="width:50%;"><b> <?php echo $key->deskripsi_perekat; ?> </b></td>
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
										<!--- voice text --->
										<div id="voice" class="tab-pane fade">
											<div class="panel-body">
												comingsoon
											</div>
										</div>	
										<!-- end voice text --->
									</div>	
									</div>
								</div>
							</div>	
						</div>	
					</div>
				</div>
			</div>
<!-- ---------------------------- FOOTER ------------------------------------------- -->
			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Whaddupsapp&trade;</span>
							BKKBN &copy; 2023
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
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

	</body>
</html>


<script type="text/javascript">	
	$(document).ready(function () {
        $('#MyDataTableProfile').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'excel'
            ]
        });
    });
	
	$(document).ready(function () {
        $('#MyDataTablesAs').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
	
</script>

<script type="text/javascript">
Highcharts.chart('grafik1', {
    chart: {
        type: 'column'
    },
    title: {
        align: 'center',
        text: '<b>Grafik Area Pengembangan per Aspek Kompetensi</b>'
    },
    accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Ranger Nilai',
            format: '{value:,.0f}'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:,.0f}'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:,.0f}</b> <br/>'
    },

    series: [
        {
            name: "Aspek Kompetensi",
            colorByPoint: true,
            data: [
                {
                    name: "Integritas",
                    y: <?php echo $kompetensi['integritas_hp']; ?>
                    // drilldown: "Pelaksana"
                },
                {
                    name: "Kerjasama",
                    y: <?php echo $kompetensi['kerjasama_hp']; ?>
                    // drilldown: "Pengawas"
                },
                {
                    name: "Komunikasi",
                    y: <?php echo $kompetensi['komunikasi_hp']; ?>
                    // drilldown: "Administrator"
                },
                {
                    name: "Orientasi pada Hasil",
                    y: <?php echo $kompetensi['orientasi_hp']; ?>
                    // drilldown: "Terampil"
                },
                {
                    name: "Pelayanan Publik",
                    y: <?php echo $kompetensi['pelayanan_hp']; ?>
                    // drilldown: "Ahli Pertama"
                },
                {
                    name: "Pengembangan Diri dan Orang Lain",
                    y: <?php echo $kompetensi['pengembangan_hp']; ?>
                    // drilldown: "Mahir"
                },
                {
                    name: "Mengelola Perubahan",
                    y: <?php echo $kompetensi['mengelola_hp']; ?>
                    // drilldown: "Ahli Muda"
                },
                {
                    name: "Pengambilan Keputusan",
                    y: <?php echo $kompetensi['keputusan_hp']; ?>
                    // drilldown: "Penyelia"
                },
                {
                    name: "Perekat Bangsa",
                    y: <?php echo $kompetensi['perekat_hp']; ?>
                    // drilldown: "Penyelia"
                }
            ]
        }
    ]
});

</script>

<style>
.user-dantech	{text-align:center;padding-top:5px;border-bottom:1px solid #ccc; color:#fff;}
</style>
