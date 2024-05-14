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
		<h3 class="page-header">Dashboard Assesment</h3>
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
							<?php foreach ($peserta->result() as $key){ ?>
								<div class="huge"><?php echo $key->jml_kotang; ?></div>
							<?php } ?>	
								<div  style="color:#31708f;">Peserta Kota Tangerang</div>
							</div>
						</div>
					</div>
					<div class="panel-footer">
					<form action="<?php echo base_url('module/peserta/data_tahun');?>" method="GET">
						<input class="btn btn-default pull-right" type="submit" value="Lihat Data" />
							<span class="pull-left" onclick="" style="cursor:pointer;width:60%;">
								<select type="dropdown" class="form-control" id="tahun" name="tahun">
								<option>- pilih -</option>
								<?php foreach ($tahun->result() as $key){ ?>
								<option><?php echo $key->tahun; ?></option>
								<?php } ?>
								</select>
							</span>
					</form>		
						<div class="clearfix"></div>
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
							<?php foreach ($peserta->result() as $key){ ?>
								<div class="huge"><?php echo $key->jml_masuk; ?></div>
							<?php } ?>	
								<div>Peserta Mutasi Masuk</div>
							</div>
						</div>
					</div>
					<div class="panel-footer">
						<span class="btn btn-default pull-right" onclick="" style="cursor:pointer;"> Lihat Data</a></span>
						<div class="form-group">
							<span class="pull-left" onclick="" style="cursor:pointer;width:60%;">
								<select type="dropdown" class="form-control" name="jenis_kegiatan" id="jenis_kegiatan" required>
								<option>- pilih -</option>
								<option>Belum Ada Data</option>
								</select>
							</span>
						</div>	
						<!--
						<span class="btn btn-default pull-right" onclick="" style="cursor:pointer;"><i class="fa fa-mars fa-fw"></i> </a></span>
						<span class="btn btn-default pull-right" onclick="" style="cursor:pointer;"><i class="fa fa-venus fa-fw"></i> </span>
						-->
						<div class="clearfix"></div>
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
							<?php foreach ($peserta->result() as $key){ ?>
								<div class="huge"><?php echo $key->jml_luar; ?></div>
							<?php } ?>
								<div>Peserta Lainnya</div>
							</div>
						</div>
					</div>
					<div class="panel-footer">
					<form action="<?php echo base_url('module/peserta/search');?>" method="GET">
						<input class="btn btn-default pull-right" type="submit" value="Lihat Data" />
							<span class="pull-left" onclick="" style="cursor:pointer;width:60%;">
								<select type="dropdown" class="form-control" id="cari" name="cari">
								<option>- pilih -</option>
								<?php foreach ($kegiatan->result() as $key){ ?>
								<option><?php echo $key->ket_kegiatan; ?></option>
								<?php } ?>
								</select>
							</span>
					</form>		
						<div class="clearfix"></div>
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
							<?php foreach ($peserta->result() as $key){ ?>
								<div class="huge"><?php echo $key->jml_personil; ?></div>
							<?php } ?>	
								<div>Kelembagaan</div>
							</div>
						</div>
					</div>
					<div class="panel-footer">
						<span class="btn btn-default pull-right" onclick="" style="cursor:pointer;"><i class="fa fa-mars fa-fw"></i> </span>
						<span class="btn btn-default pull-right" onclick="" style="cursor:pointer;"><i class="fa fa-venus fa-fw"></i> </a></span>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>	
		</div>
	</div>
</div>
 
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<i class="fa fa-calculator" aria-hidden="true"></i>&nbsp; Rekap Jenjang Assesment
						<div class="pull-right">
						X
						</div>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table width="100%" class="table table-bordered table-hover table-striped" id="MyDataTable">
								<thead>
									<tr>
										<th style="text-align:center;width:5%;">Tahun</th>
										<th style="text-align:center;width:5%;">JPT Madya</th>
										<th style="text-align:center;width:5%;">JPT Pratama</th>
										<th style="text-align:center;width:5%;">Administrator</th>
										<th style="text-align:center;width:5%;">Pengawas</th>
										<th style="text-align:center;width:5%;">Pelaksana</th>
										<th style="text-align:center;width:5%;">JF Madya</th>
										<th style="text-align:center;width:5%;">JF Muda</th>
										<th style="text-align:center;width:5%;">JF Pertama</th>
										<th style="text-align:center;width:5%;">JF Terampil</th>
										<th style="text-align:center;width:5%;">Jumlah</th>
									</tr>
								</thead>
								<tbody>
								<?php foreach ($rekap_jenjang->result() as $key){ ?>
									<tr>
										<td style="text-align:center;width:5%;"><?php echo $key->tahun; ?></td>
										<td style="text-align:center;width:5%;"><?php echo $key->madya; ?></td>
										<td style="text-align:center;width:5%;"><?php echo $key->pratama; ?></td>
										<td style="text-align:center;width:5%;"><?php echo $key->administrator; ?></td>
										<td style="text-align:center;width:5%;"><?php echo $key->pengawas; ?></td>
										<td style="text-align:center;width:5%;"><?php echo $key->jf_Madya; ?></td>
										<td style="text-align:center;width:5%;"><?php echo $key->jf_Muda; ?></td>
										<td style="text-align:center;width:5%;"><?php echo $key->jf_Pertama; ?></td>
										<td style="text-align:center;width:5%;"><?php echo $key->jf_Terampil; ?></td>
										<td style="text-align:center;width:5%;"><?php echo $key->pelaksana; ?></td>
										<td style="text-align:center;font-weight:bold;width:5%;"><?php echo $key->jml; ?></td>
									</tr>
								<?php } ?>	
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<i class="fa fa-laptop fa-fw"></i> Penyelenggaraan Uji Kompetensi
						<div class="pull-right">
						X
						</div>
					</div>
					<!-- /.panel-heading -->
					<div class="dataTable_wrapper">
						<div class="row">
							<div class="col-lg-12">
								<div class="panel-body">
									<div class="table-responsive">
										<table class="table table-bordered table-hover table-striped" id="MyDataTable">
											<thead>
												<tr>
													<th>No</th>
													<th>Nama Kegiatan</th>
													<th>Jenis Kegiatan</th>
													<th>Jumlah</th>
												</tr>
											</thead>
											<tbody id="show_data">
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<i class="fa fa-bar-chart-o fa-fw"></i> Grafik
						<div class="pull-right">
							X
						</div>
					</div>
					<!-- /.panel-heading -->
					<div class="dataTable_wrapper">
						<div class="row">
							<div class="col-lg-12">
								<div class="panel-body">
									<div id="graph"></div>
									<div class="table-responsive">
										<table class="table table-bordered table-hover table-striped" id="MyDataTable">
											<thead>
												<tr>
													<th>Tahun</th>
													<th>Kegiatan</th>
													<th>Peserta</th>
												</tr>
											</thead>
											<tbody>
											<?php foreach ($penyelenggaraan->result() as $key){ ?>	
												<tr>
													<td><?php echo $key->tahun; ?></td>
													<td><?php echo $key->jml_keg; ?></td>
													<td><?php echo $key->jml_peserta; ?></td>
												</tr>
											 <?php } ?> 	
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
							
			<!--/3.SLIDE-->
		<div class="panel panel-default">
			<div class="panel-heading">
				<i class="fa fa-folder-open fa-fw"></i> Dokumentasi Kegiatan
				<div class="pull-right">
				X
				</div>
			</div>
		<!-- /.panel-heading -->
		<div class="panel-body">
			<div class="dataTable_wrapper">
				<div class="row">
					<div class="col-lg-6">
						<div class="panel-group" id="accordion">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse1" style="text-decoration:none"> < Under 2021</a>
									</h4>
								</div>
								<div id="collapse1" class="panel-collapse collapse">
									<div class="panel-body">
										<div class="table-responsive">
											<table class="table table-bordered table-hover table-striped" id="MyDataTables1">
												<thead>
												</thead>
												<tbody>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse2" style="text-decoration:none">Tahun 2021</a>
									</h4>
								</div>
								<div id="collapse2" class="panel-collapse collapse">
									<div class="panel-body">
										<div class="table-responsive">
											<table class="table table-bordered table-hover table-striped" id="MyDataTables2">
												<thead>
												</thead>
												<tbody>
													<tr>
														<td><a style="text-decoration:none;" href="https://upt-bkpsdm.tangerangkota.go.id/arsip/" target="_blank">Dokumentasi Tahun 2020</a></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse3" style="text-decoration:none">Tahun 2022</a>
									</h4>
								</div>
								<div id="collapse3" class="panel-collapse collapse">
									<div class="panel-body">
										<div class="table-responsive">
											<table class="table table-bordered table-hover table-striped" id="MyDataTables3">
												<thead>
												</thead>
												<tbody>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="panel-group" id="accordion">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse4" style="text-decoration:none">Coming Soon</a>
									</h4>
								</div>
								<div id="collapse4" class="panel-collapse collapse">
									<div class="panel-body">
										<div class="table-responsive">
											<table class="table table-bordered table-hover table-striped" id="MyDataTables4">
												<thead>
												</thead>
												<tbody>
												</tbody>
											</table>
										</div>	
									</div>
								</div>
							</div> 
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse5" style="text-decoration:none">Coming Soon</a>
									</h4>
								</div>
								<div id="collapse5" class="panel-collapse collapse">
									<div class="panel-body">
										<div class="table-responsive">
											<table class="table table-bordered table-hover table-striped" id="MyDataTables5">
												<thead>
													</thead>
													<tbody>
													</tbody>
											</table>
										</div>	
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse6" style="text-decoration:none">Coming Soon</a>
									</h4>
								</div>
								<div id="collapse6" class="panel-collapse collapse">
									<div class="panel-body">
										<div class="table-responsive">
											<table class="table table-bordered table-hover table-striped" id="MyDataTables6">
													<thead>
													</thead>
													<tbody>
													</tbody>
											</table>
										</div>	
									</div>
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
		tampil_data();   //pemanggilan fungsi tampil data.
        function tampil_data(){
            $.ajax({
				type  : 'POST',
                url   : '<?php echo site_url('appassesment/Dashboard/data_kegiatan');?>',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
					var no=0
                    for(let i=0; i<data.length; i++){
						no++;
                        html += '<tr>'+
								'<td align=center><div class="dropdown">'+
								'<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown">'+
								'<i class="fa fa-caret-down fa-fw"> '+no+'</i></button>'+
									'<ul class="dropdown-menu" role="menu">'+
										'<li role="presentation"><a href="'+data[i].link_doc+'" class="btn btn-secondary pull-left item_edit" data="'+data[i].id_kegiatan+'" role="menuitem" tabindex="-1" style="cursor:pointer;" target="_blank"><i class="glyphicon glyphicon-book""></i> Dokumen</a></li>'+' '+
									'</ul>'+
								'</td></div>'+
                                '<td>'+data[i].nama_kegiatan+' <br/> Tgl. '+data[i].tgl_keg+'</td>'+
                                '<td>'+data[i].jenis_kegiatan+' <br/> '+data[i].ket_kegiatan+'</td>'+
                                '<td>'+data[i].jml+'</td>'+
								'</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }
		
 
});

    $(document).ready(function () {
        $('#MyDataTable').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
    $(document).ready(function () {
        $('#MyDataTables1').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
    $(document).ready(function () {
        $('#MyDataTables2').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
    $(document).ready(function () {
        $('#MyDataTables3').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
    $(document).ready(function () {
        $('#MyDataTables4').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
    $(document).ready(function () {
        $('#MyDataTables5').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
    $(document).ready(function () {
        $('#MyDataTables6').DataTable({
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
          xkey: 'tahun',
          ykeys: ['jml_peserta', 'jml_keg'],
          labels: ['Peserta', 'Kegiatan']
        });
		
</script>	
	