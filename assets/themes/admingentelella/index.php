<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=$nama;?> - <?=$slogan;?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url('assets/admingentelella/vendors/bootstrap/dist/css/bootstrap.min.css');?>" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="<?=base_url('assets/admingentelella/vendors/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?=base_url('assets/admingentelella/build/css/custom.min.css');?>" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?=base_url('assets/css/font-awesome/font-awesome-4.4.0/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">
    <!-- Morris Charts CSS -->
    <link href="<?=base_url('assets/css/plugins/morris.css');?>" rel="stylesheet">
	
    <!-- DataTables Responsive CSS -->
    <link href="<?=base_url('assets/css/datatables-responsive/dataTables.responsive.css');?>" rel="stylesheet">
    <!-- DataTable Button CSS -->
    <link href="<?=base_url('assets/css/datatables/css/buttons.dataTables.min.css');?>" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="<?=base_url('assets/css/datatables-plugins/dataTables.bootstrap.css');?>" rel="stylesheet">	

	
    <!-- NProgress -->
    <link href="<?=base_url('assets/admingentelella/vendors/nprogress/nprogress.css');?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?=base_url('assets/admingentelella/vendors/iCheck/skins/flat/green.css');?>" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="<?=base_url('assets/admingentelella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css');?>" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?=base_url('assets/admingentelella/vendors/jqvmap/dist/jqvmap.min.css');?>" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?=base_url('assets/admingentelella/vendors/bootstrap-daterangepicker/daterangepicker.css');?>" rel="stylesheet">
	
	
	</head>

<body class="nav-md">
    <div class="container body">
        <!-- Navigation -->
        <nav class="nav navbar-nav" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
				<div style="float:left;padding:2px 0px 0px 15px;"><img src="<?=base_url().$logo;?>" style='width:40px; vertical-align:middle;'></div>
				<div style="float:left;display:table;padding-top:3px; padding-left:15px;">
					<div><h4 style="margin:0px;padding:0px;"><?=$gr->judul_app;?></h4></div>
					<div><?=$gr->sub_judul;?></div>
				</div>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div><!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
			<?=$notif;?>
            </ul><!-- navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse"><?=$pengenal;?><ul class="nav" id="side-menu"><?php recSidebar($sidebar,$actt); ?><li><a href="<?=site_url();?>login/out"><i class="fa fa-sign-out fa-fw"></i>  Keluar</a></li></ul></div><!-- /.sidebar-collapse -->
            </div><!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper"><?=$konten;?></div>
<form id="pindah" method="post"></form>


    <!-- jQuery -->
    <script src="<?php echo base_url() ?>assets/admingentelella/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url() ?>assets/admingentelella/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url() ?>assets/admingentelella/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url() ?>assets/admingentelella/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url() ?>assets/admingentelella/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url() ?>assets/admingentelella/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url() ?>assets/admingentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url() ?>assets/admingentelella/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url() ?>assets/admingentelella/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo base_url() ?>assets/admingentelella/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo base_url() ?>assets/admingentelella/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url() ?>assets/admingentelella/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url() ?>assets/admingentelella/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url() ?>assets/admingentelella/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url() ?>assets/admingentelella/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url() ?>assets/admingentelella/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admingentelella/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url() ?>assets/admingentelella/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url() ?>assets/admingentelella/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?php echo base_url() ?>assets/admingentelella/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo base_url() ?>assets/admingentelella/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url() ?>assets/admingentelella/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url() ?>assets/admingentelella/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url() ?>assets/admingentelella/build/js/custom.min.js"></script>

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

</body>
</html>
<?php
function recSidebar($nav,$akv) {
    foreach ($nav as $key=>$val) {
		if(isset($val->anak)){
			$cActt = ($akv==$val->id_menu)?"class=\"active\"":"";
			echo '<li><a href="#" '.$cActt.'><i class="fa fa-'.$val->icon_menu.' fa-fw"></i> '.$val->nama_menu.' <span class="fa arrow"></span></a><ul class="nav nav-second-level collapse">';
			recSidebar($val->anak,$akv);
			echo '</ul></li>';
		} else {
			$cActt = ($akv==$val->id_menu)?"class=\"active masuk\"":"";
			echo '<li><a href="'.site_url().$val->path_menu.'" '.$cActt.' class="masuk"><i class="fa fa-'.$val->icon_menu.' fa-fw"></i> '.$val->nama_menu.'</a></li>';
		} // end anak
    } // end foreach
} // end recKanal
?>
<script type="text/javascript">
function pindah_ke(app){
	$.ajax({
		type:"POST",
		url:"<?=site_url();?>admin/pindah",
		success:function(data){	
			$('#pindah').attr('action','<?=site_url();?>sso');
			var tab = '<input type="hidden" name="idd" value="'+data+'">';
			tab = tab+'<input type="hidden" name="app" value="'+app+'">';
			$('#pindah').html(tab).submit();
		}, // end success
	    dataType:"html"});
}
function loadSegment(segmen,page){
			$.ajax({
				type:"POST",
				url:"<?=site_url();?>"+page,
				beforeSend:function(){	$('#'+segmen).html('').html('<p class="text-center"><i class="fa fa-spinner fa-spin fa-5x"></i><p>');	},
				success:function(data){	$('#'+segmen).html(data);	}, // end success
	        dataType:"html"});
}
    $.sessionTimeout({
        keepAliveUrl: '<?=base_url();?>assets/js/bootstrap-timeout/examples/lanjutkan.html',
        logoutUrl: '<?=site_url();?>login/out',
        redirUrl: '<?=site_url();?>login/out',
        warnAfter: <?=(!isset($gr->alertafter))?40000:$gr->alertafter;?>,
        redirAfter: <?=(!isset($gr->logoutafter))?60000:($gr->alertafter+$gr->logoutafter);?>
		
	});
	
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
.user-dantech	{text-align:center;padding-top:5px;border-bottom:1px solid #eee; color:#6699FF;	}
</style>

