<html>
  <head>
    <meta charset="UTF-8">
    <link href="<?=base_url('assets/css/plugins/morris.css');?>" rel="stylesheet">
    <script src="<?php echo base_url() ?>assets/js/plugins/morris/raphael.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/morris/morris.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/morris/morris.min.js"></script>
  </head>

<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-tachometer" aria-hidden="true"></i> &nbsp; Dashboard Responden SJT</h3>
    </div>
<!-- /.col-lg-12 -->
</div>
<div class="row">
	<div class="col-md-12">
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="panel panel-info">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa fa-university fa-5x"></i>
							</div>
							<div class="col-xs-9 text-right" onclick="" style="cursor:pointer;">
							<?php foreach ($total_hari_ini->result() as $key){ ?>
								<div class="huge"><?php echo $key->total_hari_ini; ?></div>
							<?php } ?>	
								<div  style="color:#31708f;">Total Peserta Hari Ini</div>
							</div>
						</div>
					</div>
				</div>
			</div>
						
			<div class="col-lg-3 col-md-6">
				<div class="panel panel-success">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa fa-sign-in fa-5x"></i>
							</div>
							<div class="col-xs-9 text-right" onclick="" style="cursor:pointer;">
							<?php foreach ($total_minggu_ini->result() as $key){ ?>
								<div class="huge"><?php echo $key->total_minggu_ini; ?></div>
							<?php } ?>	
								<div>Total Peserta Minggu Ini</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
					
			<div class="col-lg-3 col-md-6">
				<div class="panel panel-warning">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa fa-user-plus fa-5x"></i>
							</div>
							<div class="col-xs-9 text-right" onclick="" style="cursor:pointer;">
							<?php foreach ($total_bulan_ini->result() as $key){ ?>
								<div class="huge"><?php echo $key->total_bulan_ini; ?></div>
							<?php } ?>
								<div>Total Peserta Bulan Ini</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
			<div class="col-lg-3 col-md-6">
				<div class="panel panel-danger">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa fa-sitemap fa-5x"></i>
							</div>
							<div class="col-xs-9 text-right" onclick="" style="cursor:pointer;">
							<?php foreach ($total_semua->result() as $key){ ?>
								<div class="huge"><?php echo $key->total_semua; ?></div>
							<?php } ?>	
								<div>Total Seluruh Peserta</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>
</div>
 
</html>
	
	
<script type="text/javascript">	

    $(document).ready(function () {
        $('#tableRekapJenjang').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
    $(document).ready(function () {
        $('#tablePenyelenggaraan').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
    $(document).ready(function () {
        $('#tableRekapPeserta').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
    $(document).ready(function () {
        $('#tableRekapKeg').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
    $(document).ready(function () {
        $('#tableUnder2021').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
    $(document).ready(function () {
        $('#table2021').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });	

    $(document).ready(function () {
        $('#table2022').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });	

    $(document).ready(function () {
        $('#table2023').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });	

    $(document).ready(function () {
        $('#table2024').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });	

    $(document).ready(function () {
        $('#table2025').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });	

        Morris.Bar({
          element: 'graph',
          data: <?php echo $chart;?>,
          xkey: 'psrt_ktng',
          ykeys: ['psrt_ext', 'tahun'],
          labels: ['Internal', 'Kerjasama']
        });
		
</script>		