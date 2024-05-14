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
		<h3 class="page-header"><i class="fa fa-tachometer" aria-hidden="true"></i> &nbsp; Dashboard Hasil Penilaian</h3>
    </div>
<!-- /.col-lg-12 -->
</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<i class="fa fa-star-o" aria-hidden="true"></i>&nbsp; Rekap Rekomendasi
					</div>
					<div class="panel-body">
    					<div class="row">
    					<div class="col-lg-6">    
    						<div class="panel panel-default">
            					<div class="panel-heading">
            						<i class="fa fa-bar-chart-o fa-fw"></i>&nbsp; Pemetaan
            					</div>
        						<div class="panel-body">
        						    <div id="graph_pemetaan"></div>
            						<div class="table-responsive">    
            							<table width="100%" class="table table-bordered table-hover table-striped" id="tablePemetaan">
            								<thead>
            									<tr>
            										<th style="text-align:center;width:5%;">Optimal</th>
            										<th style="text-align:center;width:5%;">Cukup Optimal</th>
            										<th style="text-align:center;width:5%;">Kurang Optimal</th>
            									</tr>
            								</thead>
            								<tbody>
            								<?php foreach ($hitung_rekom->result() as $key){ ?>
            									<tr>
            										<td style="text-align:center;width:5%;">
            										    <button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
            										        <a href="" style="text-decoration:none;"><?php echo $key->optimal; ?></a>
            										    </button>
            										</td>
            										<td style="text-align:center;width:5%;">
            										    <button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
            										        <a href="" style="text-decoration:none;"><?php echo $key->cukup; ?></a>
            										    </button>
            										</td>
            										<td style="text-align:center;width:5%;">
            										    <button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
            										        <a href="" style="text-decoration:none;"><?php echo $key->kurang; ?></a>
            										    </button>
            										</td>
            									</tr>
            								<?php } ?>	
            								</tbody>
            							</table>
            						</div>
        						</div>
    						</div>
    					</div>
    					<div class="col-lg-6">    
    						<div class="panel panel-default">
            					<div class="panel-heading">
            						<i class="fa fa-folder" aria-hidden="true"></i>&nbsp; Detail
            					</div>
        						<div class="panel-body">
            						<div class="table-responsive">    
            							<table width="100%" class="table table-bordered table-hover table-striped" id="tablePemetaanDetail">
            								<thead>
            									<tr>
            										<th style="text-align:center;width:5%;">Level</th>
            										<th style="text-align:center;width:10%;">Optimal</th>
            										<th style="text-align:center;width:10%;">Cukup Optimal</th>
            										<th style="text-align:center;width:10%;">Kurang Optimal</th>
            									</tr>
            								</thead>
            								<tbody>
            								    <?php foreach ($detail_rekom->result() as $key){ ?>
            								        <tr>
            								            <td>JPT Pertama</td>
            								            <td style="text-align:center;width:5%;">
            								                <button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
            								                    <a href="" style="text-decoration:none;"><?php echo $key->op_jptp; ?></a>
            								                </button>
            								            </td>
            								            <td style="text-align:center;width:5%;">
            								                <button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
            								                    <a href="" style="text-decoration:none;"><?php echo $key->ckp_jptp; ?></a>
            								                </button>
            								            </td>
            								            <td style="text-align:center;width:5%;">
            								                <button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
            								                    <a href="" style="text-decoration:none;"><?php echo $key->krg_jptp; ?></a>
            								                </button>
            								            </td>
            								        </tr>
            								        <tr>
            								            <td>Administrator</td>
            								            <td style="text-align:center;width:5%;">
            								                <button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
            								                    <a href="" style="text-decoration:none;"><?php echo $key->op_tiga; ?></a>
            								                </button>
            								            </td>
            								            <td style="text-align:center;width:5%;">
            								                <button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
            								                    <a href="" style="text-decoration:none;"><?php echo $key->ckp_tiga; ?></a>
            								                </button>
            								            </td>
            								            <td style="text-align:center;width:5%;">
            								                <button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
            								                    <a href="" style="text-decoration:none;"><?php echo $key->krg_tiga; ?></a>
            								                </button>
            								            </td>
            								        </tr>
            								        <tr>
            								            <td>Pengawas/Sub Koord.</td>
            								            <td style="text-align:center;width:5%;">
            								                <button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
            								                    <a href="" style="text-decoration:none;"><?php echo $key->op_dua; ?></a>
            								                </button>  
            								            </td>
            								            <td style="text-align:center;width:5%;">
            								                <button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
            								                    <a href="" style="text-decoration:none;"><?php echo $key->ckp_dua; ?></a>
            								                </button>
            								            </td>
            								            <td style="text-align:center;width:5%;">
            								                <button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
            								                    <a href="" style="text-decoration:none;"><?php echo $key->krg_dua; ?></a>
            								                </button>
            								            </td>
            								        </tr>
            								        <tr>
            								            <td>JF Madya</td>
            								            <td style="text-align:center;width:5%;">
            								                <button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
            								                    <a href="" style="text-decoration:none;"><?php echo $key->op_madya; ?></a>
            								                </button>
            								            </td>
            								            <td style="text-align:center;width:5%;">
            								                <button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
            								                    <a href="" style="text-decoration:none;"><?php echo $key->ckp_madya; ?></a>
            								                </button>
            								            </td>
            								            <td style="text-align:center;width:5%;">
            								                <button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
            								                    <a href="" style="text-decoration:none;"><?php echo $key->krg_madya; ?></a>
            								                </button>
            								            </td>
            								        </tr>
            								        <tr>
            								            <td>JF Muda</td>
            								            <td style="text-align:center;width:5%;">
            								                <button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
            								                    <a href="" style="text-decoration:none;"><?php echo $key->op_muda; ?></a>
            								                </button>
            								            </td>
            								            <td style="text-align:center;width:5%;">
            								                <button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
            								                    <a href="" style="text-decoration:none;"><?php echo $key->ckp_muda; ?></a>
            								                </button>
            								            </td>
            								            <td style="text-align:center;width:5%;">
            								                <button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
            								                    <a href="" style="text-decoration:none;"><?php echo $key->krg_muda; ?></a>
            								                </button>
            								            </td>
            								        </tr>
            								        <tr>
            								            <td>JF Pertama</td>
            								            <td style="text-align:center;width:5%;">
            								                <button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
            								                    <a href="" style="text-decoration:none;"><?php echo $key->op_pertama; ?></a>
            								                </button>
            								            </td>
            								            <td style="text-align:center;width:5%;">
            								                <button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
            								                    <a href="" style="text-decoration:none;"><?php echo $key->ckp_pertama; ?></a>
            								                </button>
            								            </td>
            								            <td style="text-align:center;width:5%;">
            								                <button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
            								                    <a href="" style="text-decoration:none;"><?php echo $key->krg_pertama; ?></a>
            								                </button>
            								            </td>
            								        </tr>
            								        <tr>
            								            <td>JF Terampil</td>
            								            <td style="text-align:center;width:5%;">
            								                <button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
            								                    <a href="" style="text-decoration:none;"><?php echo $key->op_terampil; ?></a>
            								                </button>
            								            </td>
            								            <td style="text-align:center;width:5%;">
            								                <button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
            								                    <a href="" style="text-decoration:none;"><?php echo $key->ckp_terampil; ?></a>
            								                </button>
            								            </td>
            								            <td style="text-align:center;width:5%;">
            								                <button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
            								                    <a href="" style="text-decoration:none;"><?php echo $key->krg_terampil; ?></a>
            								                </button>
            								            </td>
            								        </tr>
            								        <tr>
            								            <td>JF Pelaksana</td>
            								            <td style="text-align:center;width:5%;">
            								                <button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
            								                    <a href="" style="text-decoration:none;"><?php echo $key->op_satu; ?></a>
            								                </button>
            								            </td>
            								            <td style="text-align:center;width:5%;">
            								                <button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
            								                    <a href="" style="text-decoration:none;"><?php echo $key->ckp_satu; ?></a>
            								                </button>
            								            </td>
            								            <td style="text-align:center;width:5%;">
            								                <button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
            								                    <a href="" style="text-decoration:none;"><?php echo $key->krg_satu; ?></a>
            								                </button>
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
											<table width="100%" class="table table-bordered table-hover table-striped" id="tableUnder2021">
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
											<table width="100%" class="table table-bordered table-hover table-striped" id="table2021">
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
											<table width="100%" class="table table-bordered table-hover table-striped" id="table2022">
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
											<table width="100%" class="table table-bordered table-hover table-striped" id="table2023">
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
											<table width="100%" class="table table-bordered table-hover table-striped" id="table2024">
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
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse6" style="text-decoration:none">Tempalate Excel & Word</a>
									</h4>
								</div>
								<div id="collapse6" class="panel-collapse collapse">
									<div class="panel-body">
										<div class="table-responsive">
											<table width="100%" class="table table-bordered table-hover table-striped" id="table2025">
													<thead>
													    <tr>
													        <th>Nama File</th>
													   </tr>
													</thead>
													<tbody>
													   <tr>
													       <td><a href="https://assessment.tangerang-web.id/assets/media/upload/dokumentasi2022/templatehasil/report_NON_bobot.xlsx">Rekap Non Bobot</a></td>
													   </tr>
													   <tr>
													       <td><a href="https://assessment.tangerang-web.id/assets/media/upload/dokumentasi2022/templatehasil/rekap_WITH_bobot.xlsx">Rekap With Bobot</a></td>
													   </tr>
													   <tr>
													       <td><a href="https://assessment.tangerang-web.id/assets/media/upload/dokumentasi2022/templatehasil/template_peserta.xlsx">Export Peserta</a></td>
													   </tr>
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
                                '<td>'+data[i].nama_kegiatan+' <br/> Tgl. <b>'+data[i].tgl_keg+'</b></td>'+
                                '<td>'+data[i].jenis_kegiatan+' <br/><b>'+data[i].instansi+'</b></td>'+
                                '<td style="text-align:center;font-weight:bold;">'+data[i].jml+'</td>'+
								'</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }
		
 
});

//================================================================================================================================================

    $(document).ready(function () {
        $('#tablePemetaan').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
    
    $(document).ready(function () {
        $('#tablePemetaanDetail').DataTable({
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
          element: 'graph_pemetaan',
          data: <?php echo $chart_pemetaan;?>,
          xkey: '', 
          ykeys: ['optimal', 'cukup', 'kurang'],
          labels: ['Optimal', 'Cukup Optimal', 'Kurang optimal'],
          hideHover: 'auto'
        });
/*
        Morris.Bar({
          element: 'graph_seleksi',
          data: <?php echo $chart_seleksi;?>,
          xkey: '',
          ykeys: ['ms', 'mms', 'tms'],
          labels: ['MS', 'MMS', 'TMS']
        });
*/		

		
</script>	
	