<html>
  <head>
    <meta charset="UTF-8">
    <link href="<?=base_url('assets/css/plugins/morris.css');?>" rel="stylesheet">
    <script src="<?php echo base_url() ?>assets/js/plugins/morris/raphael.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/morris/morris.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/morris/morris.min.js"></script>
	
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/highcharts-more.js"></script>

	<script src="https://code.highcharts.com/maps/modules/map.js"></script>

	<script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
	<script src="https://code.highcharts.com/modules/series-label.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>
	<script src="https://code.highcharts.com/modules/export-data.js"></script>
	<script src="https://code.highcharts.com/modules/accessibility.js"></script>	
	<script src="http://code.highcharts.com/mapdata/countries/id/id-all.js"></script>
	

<style type="text/css">
    .highcharts-figure,
	.highcharts-data-table table {
    min-width: 310px;
    max-width: 800px;
    margin: 1em auto;
}

#container {
    height: 400px;
}

.highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #ebebeb;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
}

.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}

.highcharts-data-table th {
    font-weight: 600;
    padding: 0.5em;
}

.highcharts-data-table td,
.highcharts-data-table th,
.highcharts-data-table caption {
    padding: 0.5em;
}

.highcharts-data-table thead tr,
.highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}

.highcharts-data-table tr:hover {
    background: #f1f7ff;
}

.loading {
    margin-top: 10em;
    text-align: center;
    color: gray;

</style>
	
</head>

<div class="col-lg-12">
	<div class="row">
		<div class="panel-group" id="accordion">
			<div class="panel panel-info">
				<div class="panel-heading" style="background-color : #1059a2; color: #fff;">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapse1" style="text-decoration: none;  color: #fff;"><i class="fa fa-dashboard fa-fw"></i>&nbsp; Rekap Penyelenggaraan</a>
				</div>
				<div id="collapse1" class="panel-collapse collapse in">
					<div class="panel-body">
					
						<div class="row">
							<div class="col-lg-4 col-md-6">
								<div class="panel-body">
									<div class="panel panel-info">
										<div class="panel-heading" style="background-color:#f4f1b3;">
											<div class="row">
												<div class="col-xs-12 text-center" onclick="" style="cursor:pointer;padding:5px;">
												<?php foreach ($total_semua->result() as $key){ ?>
													<div class="huge"><?php echo $key->total_semua; ?></div>
												<?php } ?>	
													<div  style="color:#31708f;">Jml Peserta Assessment Metode Alat Tes SJT</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
										
							<div class="col-lg-4 col-md-6">
								<div class="panel-body">
									<div class="panel panel-success">
										<div class="panel-heading" style="background-color:#d1efdd;">
											<div class="row">
												<div class="col-xs-12 text-center" onclick="" style="cursor:pointer;padding:5px;">
												<?php foreach ($peserta->result() as $key){ ?>
													<div class="huge"><?php echo $key->jml_kotang; ?></div>
												<?php } ?>	
													<div>Jml Peserta Assessment Metode Alat Tes Lain</div>
												</div>
											</div>
										</div>
									</div>
								</div>	
							</div>	
									
							<div class="col-lg-4 col-md-6">
								<div class="panel-body">
									<div class="panel panel-warning">
										<div class="panel-heading" style="background-color:#efd1d1;">
											<div class="row">
												<div class="col-xs-12 text-center" onclick="" style="cursor:pointer;padding:5px;">
												<?php foreach ($peserta->result() as $key){ ?>
													<div class="huge"><?php echo $key->jml_luar; ?></div>
												<?php } ?>
													<div>Total Keseluruhan Peserta Assessment</div>
												</div>
											</div>
										</div>
									</div>
								</div>	
							</div>	
						</div>
						
						<div class="row">
							<div class="col-lg-12">
								<div class="panel-body">
									<div class="panel panel-default">
										<div class="panel-heading" style="background-color : #1976d2; color: #fff;">
											<i class="fa fa-cubes fa-fw"></i> Berdasarkan Jenjang Jabatan
										</div>
										<!-- /.panel-heading -->
										<div class="dataTable_wrapper">
											<div class="row">
												<div class="col-lg-12">
													<div class="panel-body">
														<div class="table-responsive">
															<table width="100%" class="table table-bordered table-hover table-striped" id="tableRekapJenjang">
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
																		<td style="text-align:center;width:5%;"><b><?php echo $key->tahun; ?></b></td>
																		<td style="text-align:center;width:5%;">
																				<a href="" style="text-decoration:none;"><?php echo $key->madya; ?></a>
																		</td>
																		<td style="text-align:center;width:5%;">
																				<a href="" style="text-decoration:none;"><?php echo $key->pratama; ?></a>
																		</td>
																		<td style="text-align:center;width:5%;">
																				<a href="" style="text-decoration:none;"><?php echo $key->administrator; ?></a>
																		</td>
																		<td style="text-align:center;width:5%;">
																				<a href="" style="text-decoration:none;"><?php echo $key->pengawas; ?></a>
																		</td>
																		<td style="text-align:center;width:5%;">
																				<a href="" style="text-decoration:none;"><?php echo $key->pelaksana; ?></a>
																		</td>
																		<td style="text-align:center;width:5%;">
																				<a href="" style="text-decoration:none;"><?php echo $key->jf_Madya; ?></a>
																		</td>
																		<td style="text-align:center;width:5%;">
																				<a href="" style="text-decoration:none;"><?php echo $key->jf_Muda; ?></a>
																		</td>
																		<td style="text-align:center;width:5%;">
																				<a href="" style="text-decoration:none;"><?php echo $key->jf_Pertama; ?></a>
																		</td>
																		<td style="text-align:center;width:5%;">
																				<a href="" style="text-decoration:none;"><?php echo $key->jf_Terampil; ?></a>
																		</td>
																		<td style="text-align:center;width:5%;">
																				<a href="" style="text-decoration:none;"><?php echo $key->jml; ?></a>
																		</td>
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
						</div>
						
		<div class="row">
			<!--
			<div class="col-lg-6">
				<div class="panel-body">
					<div class="panel panel-default">
						<div class="dataTable_wrapper">
							<div class="row">
								<div class="col-lg-12">
									<div class="panel-body">
										Grafik Rekomendasi
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			-->
			<div class="col-lg-6">
				<div class="panel-body">
					<div class="panel panel-default">
						<div class="panel-heading" style="background-color : #1976d2; color: #fff;">
							<i class="fa fa-laptop fa-fw"></i> Penyelenggaraan Uji Kompetensi
						</div>
						<div class="dataTable_wrapper">
							<div class="row">
								<div class="col-lg-12">
									<div class="panel-body">
										<div class="table-responsive">
											<table width="100%" class="table table-bordered table-hover table-striped" id="tablePenyelenggaraan">
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
			</div>
			<div class="col-lg-6">
				<div class="panel-body">
					<div class="panel panel-default">
						<div class="panel-heading" style="background-color : #1976d2; color: #fff;">
							<i class="fa fa-star" aria-hidden="true"></i> Rekomendasi Hasil
						</div>
						<div class="dataTable_wrapper">
							<div class="row">
								<div class="col-lg-12">
									<div class="panel-body">
										<div class="table-responsive">
											<table width="100%" class="table table-bordered table-hover table-striped" id="tableDetailHasil">
												<thead>
													<tr>
														<th>Jenjang Jabatan</th>
														<th>Kategori</th>
														<th>Jumlah</th>
													</tr>
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
				</div>
			</div>
		</div>
    </div>
</div>










<div class="col-lg-12">
	<div class="row">
		<div class="panel-group" id="accordion">
			<div class="panel panel-info">
				<div class="panel-heading" style="background-color : #1059a2; color: #fff;">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapse2" style="text-decoration: none;  color: #fff;"><i class="fa fa-dashboard fa-fw"></i>&nbsp; Rekap Responden SJT</a>
				</div>
				<div id="collapse2" class="panel-collapse collapse">
					<div class="panel-body">
						<div class="row">
						
							<div class="col-lg-3 col-md-3">
								<div class="panel-body">
									<div class="panel panel-info">
										<div class="panel-heading" style="background-color:#c9f4c2;">
											<div class="row">
												<div class="col-xs-12 text-center" onclick="" style="cursor:pointer;padding:5px;">
												<?php foreach ($total_hari_ini->result() as $key){ ?>
													<div class="huge" style="font-size:30px;"><?php echo $key->total_hari_ini; ?></div>
												<?php } ?>	
													<div style="color:#31708f;">Jml Peserta&nbsp; Hari Ini</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						
							<div class="col-lg-3 col-md-3">
								<div class="panel-body">
									<div class="panel panel-info">
										<div class="panel-heading" style="background-color:#ecdf9a;">
											<div class="row">
												<div class="col-xs-12 text-center" onclick="" style="cursor:pointer;padding:5px;">
												<?php foreach ($total_minggu_ini->result() as $key){ ?>
													<div class="huge" style="font-size:30px;"><?php echo $key->total_minggu_ini; ?></div>
												<?php } ?>	
													<div style="color:#31708f;">Jml Peserta Minggu Ini</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						
							<div class="col-lg-3 col-md-3">
								<div class="panel-body">
									<div class="panel panel-info">
										<div class="panel-heading" style="background-color:#f7caf7;">
											<div class="row">
												<div class="col-xs-12 text-center" onclick="" style="cursor:pointer;padding:5px;">
												<?php foreach ($total_bulan_ini->result() as $key){ ?>
													<div class="huge" style="font-size:30px;"><?php echo $key->total_bulan_ini; ?></div>
												<?php } ?>	
													<div style="color:#31708f;">Jml Peserta Bulan Ini</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						
							<div class="col-lg-3 col-md-3">
								<div class="panel-body">
									<div class="panel panel-info">
										<div class="panel-heading" style="background-color:#f9d3d3;">
											<div class="row">
												<div class="col-xs-12 text-center" onclick="" style="cursor:pointer;padding:5px;">
												<?php foreach ($total_semua->result() as $key){ ?>
													<div class="huge" style="font-size:30px;text-align:center;"><?php echo $key->total_semua; ?></div>
												<?php } ?>	
													<div style="color:#31708f;">Jml Peserta Seluruh</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						
							<div class="col-lg-6 col-md-6">
								<div class="panel-body">
									<div class="panel panel-info">
										<div class="panel-body">
											 <div id="grafik1" class="shadow"></div>
										</div>
									</div>
								</div>
							</div>
 
							<div class="col-lg-6 col-md-6">
								<div class="panel-body">
									<div class="panel panel-info">
										<div class="panel-body">
											<div id="grafik2" class="shadow"></div>
										</div>
									</div>
								</div>	
							</div>
							
							<div class="col-lg-12 col-md-12">
								<div class="panel-body">
									<div class="panel panel-info">
										<div class="panel-heading" style="background-color : #1976d2; color: #fff;">
											<i class="fa fa-map-o" aria-hidden="true"></i>&nbsp; Peta Sebaran
										</div>
										<div class="panel-body">
											<div class="row">
												<div class="col-lg-12">
													<div class="panel panel-default">
														<div class="panel-body">
															<div class="grafik_peta" style="width:100%; height:400px;"></div>
															<?php
															$array_datas = array();
															foreach($chart_peta as $key=>$val){
															array_push($array_datas, array('hc-key'=>$val['js_code'], 'name'=>$val['propinsi'], 'value'=>$val['jml'])); 
															}
															?>
															
															<div class="col-lg-6 col-md-6">
																<div class="panel-body">
																	<div class="table-responsive">
																		<table width="100%" class="table table-striped table-bordered table-hover" id="tablePusat">	
																			<thead>
																				<tr>
																					<th style="text-align:center;">No.</th>
																					<th style="text-align:center;">Unit Kerja BKKBN Pusat</th>
																					<th style="text-align:center;">Jumlah</th>
																				</tr>
																			</thead>
																			<tbody>
																				<?php 
																				$no=1;
																				foreach ($jml_pusat->result() as $key){ ?>
																					<tr>
																						<td style="text-align:center;"><?php echo $no++; ?></td>
																						<td><?php echo $key->unit_kerja_pusat; ?></td>
																						<td style="text-align:center;"><?php echo $key->jml; ?></td>
																					</tr>
																				<?php } ?>
																			</tbody>
																		</table>
																	</div>	
																</div>
															</div>
															
															<div class="col-lg-6 col-md-6">
																<div class="panel-body">
																	<div class="table-responsive">
																		<table width="100%" class="table table-striped table-bordered table-hover" id="tablePerwakilan">	
																			<thead>
																				<tr>
																					<th style="text-align:center;">No.</th>
																					<th style="text-align:center;">Unit Kerja Perwakilan</th>
																					<th style="text-align:center;">Jumlah</th>
																				</tr>
																			</thead>
																			<tbody>
																				<?php 
																				$no=1;
																				foreach ($chart_peta as $key=>$val) { ?>
																				<tr>
																					<td style="text-align:center;"><?php echo $no++; ?></td>
																					<td><?php echo $val['unit_kerja_perwakilan']; ?></td>
																					<td style="text-align:center;"><?php echo $val['jml']; ?></td>
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

<div class="col-lg-12">
	<div class="row">
		<div class="panel-group" id="accordion">
			<div class="panel panel-info">
				<div class="panel-heading" style="background-color : #1059a2; color: #fff;">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapse3" style="text-decoration: none;  color: #fff;"><i class="fa fa-dashboard fa-fw"></i>&nbsp; Rekap Hasil Assessment</a>
				</div>
				<div id="collapse3" class="panel-collapse collapse">
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-6">
								<div class="panel panel-info">
									<div class="panel-heading" style="background-color : #1976d2; color: #fff;">
										<i class="fa fa-cubes" aria-hidden="true"></i>&nbsp; .............................
									</div>
									<div class="panel-body">
									coming soon
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="panel panel-info">
									<div class="panel-heading" style="background-color : #1976d2; color: #fff;">
										<i class="fa fa-cubes" aria-hidden="true"></i>&nbsp; Penyelenggaraan Uji Kompetensi
									</div>
									<div class="panel-body">
										tes
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

<div class="col-lg-12">
	<div class="row">
		<div class="panel-group" id="accordion">
			<div class="panel panel-info">
				<div class="panel-heading" style="background-color : #1059a2; color: #fff;">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapse4" style="text-decoration: none;  color: #fff;"><i class="fa fa-dashboard fa-fw"></i>&nbsp; Rekap Hasil Kuisioner</a>
				</div>
				<div id="collapse4" class="panel-collapse collapse">
					<div class="panel-body">
						<div class="row">
						<div class="col-lg-6">
							<div class="panel panel-info">
								<div class="panel-heading" style="background-color : #1976d2; color: #fff;">
									<i class="fa fa-cubes" aria-hidden="true"></i>&nbsp; Penyelenggaraan Uji Kompetensi
								</div>
								<div class="panel-body">
									tes
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="panel panel-info">
								<div class="panel-heading" style="background-color : #1976d2; color: #fff;">
									<i class="fa fa-cubes" aria-hidden="true"></i>&nbsp; Penyelenggaraan Uji Kompetensi
								</div>
								<div class="panel-body">
									tes
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
										'<li role="presentation"><a href="'+data[i].link_doc+'" data="'+data[i].id_kegiatan+'" role="menuitem" tabindex="-1" style="cursor:pointer;" target="_blank"><i class="glyphicon glyphicon-book""></i> Dokumen</a></li>'+' '+
										
										'<li role="presentation"><a href="<?php echo base_url();?>appassesment/dashboard/get_cetak_lap_hasil/'+data[i].id_kegiatan+'" target="_blank" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="glyphicon glyphicon-print"></i> Hasil Laporan</a></li>'+' '+
										
										'<li role="presentation"><a href="<?php echo base_url();?>appassesment/dashboard/get_hasil_export/'+data[i].id_kegiatan+'" target="_blank" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="glyphicon glyphicon-import"></i> Export Laporan</a></li>'+' '+
										
									'</ul>'+
								'</td></div>'+
                                '<td>'+data[i].nama_kegiatan+' <br/> Tgl. <b>'+data[i].tgl_keg+'</b></td>'+
                                '<td>'+data[i].jenis_kegiatan+' <br/><b>'+data[i].instansi+'</b></td>'+
                                '<td style="text-align:center;">'+
                                '<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">'+
                                '<i class="">'+data[i].jml+'</button>'+
                                '</td>'+
								'</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }
		
 
});

//==============================================================================================================

	$(document).ready(function () {
        $('#tablePenyelenggaraan').DataTable({
			responsive: true,
			dom: 'Bfrtip',
			"pageLength": 5,
            buttons: [
                'excel'
            ]
        });
    });
	
	$(document).ready(function () {
        $('#tableDetailHasil').DataTable({
			responsive: true,
			dom: 'Bfrtip',
			"pageLength": 5,
            buttons: [
                'excel'
            ]
        });
    });
	
	$(document).ready(function () {
        $('#tableRekapJenjang').DataTable({
			responsive: true,
			dom: 'Bfrtip',
			"pageLength": 5,
            buttons: [
                'excel'
            ]
        });
    });
	
	$(document).ready(function () {
        $('#tablePusat').DataTable({
			responsive: true,
			dom: 'Bfrtip',
			"pageLength": 5,
            buttons: [
                'excel'
            ]
        });
    });
	
	$(document).ready(function () {
        $('#tablePerwakilan').DataTable({
			responsive: true,
			dom: 'Bfrtip',
			"pageLength": 5,
            buttons: [
                'excel'
            ]
        });
    });
		
	$(document).ready(function () {
        $('#tablePeta').DataTable({
			responsive: true,
			dom: 'Bfrtip',
			"pageLength": 5,
            buttons: [
                'excel'
            ]
        });
    });
		
	$(document).ready(function () {
        $('#tableSimsdm').DataTable({
			responsive: true,
			dom: 'Bfrtip',
			"pageLength": 5,
            buttons: [
                'excel'
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
        text: '<b>Rekapitulasi Jumlah Area Pengembangan per Aspek Kompetensi</b>'
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
            text: 'Total Responden',
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
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:,.0f}</b> Responden<br/>'
    },

    series: [
        {
            name: "Aspek Kompetensi",
            colorByPoint: true,
            data: [
                {
                    name: "Integritas",
                    y: <?php echo $kompetensi['total_integritas']; ?>
                    // drilldown: "Pelaksana"
                },
                {
                    name: "Kerjasama",
                    y: <?php echo $kompetensi['total_kerjasama']; ?>
                    // drilldown: "Pengawas"
                },
                {
                    name: "Komunikasi",
                    y: <?php echo $kompetensi['total_komunikasi']; ?>
                    // drilldown: "Administrator"
                },
                {
                    name: "Orientasi pada Hasil",
                    y: <?php echo $kompetensi['total_orientasi']; ?>
                    // drilldown: "Terampil"
                },
                {
                    name: "Pelayanan Publik",
                    y: <?php echo $kompetensi['total_pelayanan']; ?>
                    // drilldown: "Ahli Pertama"
                },
                {
                    name: "Pengembangan Diri dan Orang Lain",
                    y: <?php echo $kompetensi['total_pengembangan']; ?>
                    // drilldown: "Mahir"
                },
                {
                    name: "Mengelola Perubahan",
                    y: <?php echo $kompetensi['total_mengelola']; ?>
                    // drilldown: "Ahli Muda"
                },
                {
                    name: "Pengambilan Keputusan",
                    y: <?php echo $kompetensi['total_keputusan']; ?>
                    // drilldown: "Penyelia"
                },
                {
                    name: "Perekat Bangsa",
                    y: <?php echo $kompetensi['total_perekat']; ?>
                    // drilldown: "Penyelia"
                }
            ]
        }
    ]
});

Highcharts.chart('grafik2', {
    chart: {
        type: 'column'
    },
    title: {
        align: 'center',
        text: '<b>Jenjang Jabatan Pegawai yang Telah Melakukan Penilaian Kompetensi</b>'
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
            text: 'Total Responden',
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
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:,.0f}</b> Responden<br/>'
    },

    series: [
        {
            name: "Jenjang Jabatan",
            colorByPoint: true,
            data: [
                {
                    name: "Pelaksana",
                    y: <?php echo $jabatan['total_pelaksana']; ?>
                    // drilldown: "Pelaksana"
                },
                {
                    name: "Pengawas",
                    y: <?php echo $jabatan['total_pengawas']; ?>
                    // drilldown: "Pengawas"
                },
                {
                    name: "Administrator",
                    y: <?php echo $jabatan['total_administrator']; ?>
                    // drilldown: "Administrator"
                },
                {
                    name: "Terampil",
                    y: <?php echo $jabatan['total_terampil']; ?>
                    // drilldown: "Terampil"
                },
                {
                    name: "Ahli Pertama",
                    y: <?php echo $jabatan['total_ahli_pertama']; ?>
                    // drilldown: "Ahli Pertama"
                },
                {
                    name: "Mahir",
                    y: <?php echo $jabatan['total_mahir']; ?>
                    // drilldown: "Mahir"
                },
                {
                    name: "Ahli Muda",
                    y: <?php echo $jabatan['total_ahli_muda']; ?>
                    // drilldown: "Ahli Muda"
                },
                {
                    name: "Penyelia",
                    y: <?php echo $jabatan['total_penyelia']; ?>
                    // drilldown: "Penyelia"
                }
            ]
        }
    ]	
});

//PETA SEBARAN		
	$('.grafik_peta').highcharts('Map', {
	 credits: {
	  enabled: false
	 }, 
	 
	 title: {
	  text: 'Sebaran Peserta SJT Assessment BKKBN'
	 },
 /*
 subtitle: {
  text: 'TAHUN 2015'
 },
 */
 
	 mapNavigation: {
	  enabled: true,
	 },
	 colorAxis: {
	  minColor: '#FFFFFF',
	  maxColor: '#FF0000'
	 },
	 series: [{
	  data: <?php echo json_encode($array_datas); ?>,
	  mapData: Highcharts.maps['countries/id/id-all'],
	  joinBy: 'hc-key',
	  name: 'Value',
	  animation: true,
	  states: {
	   hover: {
		color: '#ebc444'
	   }
  },
	  dataLabels: {
	   enabled: true,
	   format: '{point.name}'
	  }
	}]
});





</script>

