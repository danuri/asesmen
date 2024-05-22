<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
	    <title><?=$nama;?> - <?=$slogan;?></title>
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

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="<?=base_url('assets/themes/acemaster/');?>/assets/css/ace-skins.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

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
		<link rel="stylesheet" href="<?=base_url('assets/themes/acemaster/');?>/assets/css/custom.css" />

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->
		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="navbar-header pull-left">
					<img src="<?=base_url().$logo;?>" style='width:45px;padding:0px;float:left;'>
					<span class="navbar-brand"><?=$gr->judul_app;?></span>
				</div>
			</div>
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar responsive ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
...
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
<?php
function recSidebar($nav,$akv) {
    foreach ($nav as $key=>$val) {
		if(isset($val->anak)){
			$cActt = ($akv==$val->id_menu)?"active":"";
			echo '<li class=" '.$cActt.'"><a href="#" class="dropdown-toggle"><i class="fa fa-'.$val->icon_menu.' fa-fw"></i>  <span class="menu-text">'.$val->nama_menu.'</span><b class="arrow fa fa-angle-down"></b></a><b class="arrow"></b><ul class="submenu">';
			recSidebar($val->anak,$akv);
			echo '</ul></li>';
		} else {
		$cActt = ($akv==$val->id_menu)?"class=\"active\"":"";
			echo '<li '.$cActt.'><a href="'.site_url().$val->path_menu.'"><i class="fa fa-'.$val->icon_menu.' fa-fw"></i> '.$val->nama_menu.'</a><b class="arrow"></b></li>';
		} // end anak
    } // end foreach
} // end recKanal
?>
<?php recSidebar($sidebar,$actt); ?><li><a href="<?=site_url();?>login/out"><i class="fa fa-sign-out fa-fw"></i>  Keluar</a></li>
				</ul><!-- /.nav-list -->
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<span><?=$gr->sub_judul;?></span>
							</li>
						</ul>
					</div>
					<div class="page-content">
					<?=$konten;?>
					</div>

				</div><!-- /.main-content-inner -->
			</div><!-- /.main-content -->

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
		</div><!-- /.main-container -->



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
        $('#MyDataTables').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

</script>
