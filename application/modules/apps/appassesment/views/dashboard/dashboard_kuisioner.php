<html>
<head>
	<meta charset="UTF-8">
	<link href="<?=base_url('assets/css/plugins/morris.css');?>" rel="stylesheet">
	<script src="<?php echo base_url() ?>assets/js/plugins/morris/raphael.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/plugins/morris/morris.js"></script>
	<script src="<?php echo base_url() ?>assets/js/plugins/morris/morris.min.js"></script>
</head>

<body>

<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-tachometer" aria-hidden="true"></i> &nbsp; Dashboard Hasil Kuisioner</h3>
    </div>
</div>

<!--DATA KUISIONER -->
<div class="row">
	<div class="col-lg-12">
			<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
						<div class="dropdown">
						<button class="btn btn-default btn-xs pull-left " type="button" data-toggle="dropdown">
						<i class="fa fa-caret-down fa-fw"></i></button>
							<ul class="dropdown-menu" role="menu">
							<li role="presentation"><a role="menuitem" class="btn btn-secondary pull-left" tabindex="-1" style="cursor:pointer;" href="#" data-toggle="modal" data-target="#ModalaKuisi"> <i class="glyphicon glyphicon-print"></i> Download Laporan</a></li>
								<li role="presentation"><a role="menuitem" class="btn btn-secondary pull-left" tabindex="-1" style="cursor:pointer;" href="<?= base_url('appassesment/dashboard/cetak_detail_kuisi'); ?>" target="_blank"> <i class="glyphicon glyphicon-print"></i> Cetak Detail</a></li>
								<li role="presentation"><a role="menuitem" class="btn btn-secondary pull-left" tabindex="-1" style="cursor:pointer;" id="btn-export" href="<?= base_url('appujian/export_kuisi/get_hasil_kuisi'); ?>"> <i class="glyphicon glyphicon-download"></i> Export Excel</a></li>
							</ul>
						</div>
							&nbsp; Data Hasil Kuisioner
						</h4>
					</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table width="100%" class="table table-bordered table-hover table-striped" id="tableKuisi">
							<thead>
								<tr>
									<th style="text-align:center;width:5%;">No.</th>
									<th style="text-align:center;width:10%;">Jabatan</th>
									<th style="text-align:center;width:20%;">Apakah harapan Saudara setelah mengikuti penilaian kompetensi ini ?</th>
									<th style="text-align:center;width:20%;">Apakah saran/kritik Saudara untuk perbaikan penyelenggaraan penilaian kompetensi selanjutnya ?</th>
									<th style="text-align:center;width:5%;">Last Update</th>
									<th style="text-align:center;width:5%;">Ket</th>
								</tr>
							</thead>
							<tbody id="data_kuisi">
							</tbody>
						</table>
					</div>
				</div>
			</div>
	</div>
</div>

<!--REKAP KUISIONER -->
<div class="row">
	<div class="col-lg-12">
		<div class="panel-group" id="accordion">
			<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse2" style="text-decoration:none">
							<i class="fa fa-calculator" aria-hidden="true"></i>&nbsp; Rekap Hasil Kuisioner</a>
						</h4>
					</div>
				<!--	
				<div class="panel-body">
							
				</div>
				-->
			</div>
		</div>
	</div>
</div>

<!--DETAIL KUISIONER -->
<div class="row">
	<div class="col-lg-12">
		<div class="panel-group" id="accordion">
			<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse1" style="text-decoration:none">
							<i class="fa fa-star-o" aria-hidden="true"></i>&nbsp; Hasil Kuisioner Keseluruhan</a>
						</h4>
					</div>
				<div id="collapse1" class="panel-collapse collapse in">
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">    
								<div class="panel panel-default">
									<div class="panel-heading">
										<i class="fa fa-folder" aria-hidden="true"></i>&nbsp; Detail
									</div>
									<div class="panel-body">
										<div class="table-responsive">    
											<table width="100%" class="table table-bordered table-hover table-striped" id="tableSatuLima">
												<thead>
													<tr>
														<th colspan="6"></th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td colspan="6"><b>1.&ensp; Apakah informasi yang Saudara dapatkan mengenai pelaksanaan penilaian kompetensi sudah jelas ?</b>
													<tr>
														<td colspan="6"><div id="graph_kuisi_satu"></div></td>
													</tr>
														<?php foreach ($kuisi_satu_lima->result() as $key){ ?>	
															<tr>
																<td>Tahun <br/> <?php echo $key->tgl; ?></td>
																<td>
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;">Tidak Jelas <br/> <?php echo $key->tj_1; ?></a>
																</button>
																</td>
																<td>
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;">Kurang Jelas <br/> <?php echo $key->kj_1; ?></a>
																</button>
																</td>
																<td>
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;">Jelas <br/> <?php echo $key->j_1; ?></a>
																</button>
																</td>
																<td>
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;">Sangat Jelas <br/> <?php echo $key->sj_1; ?></a>
																</button>
																</td>
																<td>
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;">Jml <br/> <?php echo $key->jml_kuisi_1; ?></a>
																</button>
																</td>
															</tr>
														<?php } ?>
														</td>
													</tr>
													<tr>
														<td colspan="6"><b>2.&ensp; Apakah persyaratan administrasi untuk mengikuti penilaian kompetensi mudah dipenuhi ?</b>
													<tr>
														<td colspan="6"><div id="graph_kuisi_dua"></div></td>
													</tr>
														<?php foreach ($kuisi_satu_lima->result() as $key){ ?>	
															<tr>
																<td>Tahun <br/> <?php echo $key->tgl; ?></td>
																<td>
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;">Sangat Sulit <br/> <?php echo $key->ss_1; ?></a>
																</button>
																</td>
																<td>
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;">Sulit <br/> <?php echo $key->s_1; ?></a>
																</button>
																</td>
																<td>
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;">Mudah <br/> <?php echo $key->m_1; ?></a>
																</button>
																</td>
																<td>
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;">Sangat Mudah <br/> <?php echo $key->sm_1; ?></a>
																</button>
																</td>
																<td>
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;">Jml <br/> <?php echo $key->jml_kuisi_2; ?></a>
																</button>
																</td>
															</tr>
														<?php } ?>
														</td>
													</tr>
													<tr>
														<td colspan="6"><b>3.&ensp; Bagaimana mekanisme pendaftaran ulang pelaksanaan penilaian kompetensi ?</b>
													<tr>
														<td colspan="6"><div id="graph_kuisi_tiga"></div></td>
													</tr>
														<?php foreach ($kuisi_satu_lima->result() as $key){ ?>	
															<tr>
																<td>Tahun <br/> <?php echo $key->tgl; ?></td>
																<td>
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;">Sangat Sulit <br/> <?php echo $key->ss_2; ?></a>
																</button>
																</td>
																<td>
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;">Sulit <br/> <?php echo $key->s_2; ?></a>
																</button>
																</td>
																<td>
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;">Mudah <br/> <?php echo $key->m_2; ?></a>
																</button>
																</td>
																<td>
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;">Sangat Mudah <br/> <?php echo $key->sm_2; ?></a>
																</button>
																</td>
																<td>
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;">Jml <br/> <?php echo $key->jml_kuisi_3; ?></a>
																</button>
																</td>
															</tr>
														<?php } ?>
														</td>
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
</div>



<!-- MODAL ADD -->
    <div class="modal fade" id="ModalaKuisi" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="row modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>
				<form class="form-horizontal">
					<div class="modal-body">
					
						<div class="row">
							<div class="col-lg-12">
								<div class="panel panel-default">
									<div class="panel-body">
										<div id="source-html">
											<h3 style="text-indent: 50px;text-align:center;font-weight: bold;"><center>LAPORAN HASIL EVALUASI PENYELENGGARAAN <br/> PENILAIAN KOMPETENSI APARATUR <br/> DILINGKUNGAN PEMERINTAH KOTA TANGERANG</center></h3> <br/>
											<p style="text-indent: 50px;text-align:justify;">Berikut ini kami laporkan hasil kuisioner bahan evaluasi yang sudah disebar kepada para peserta penilaian kompetensi ( wawancara secara online ) bagi pegawai dilingkungan Pemerintah Kota Tangerang yang diselenggarakan pada <b> bulan Agustus 2022 </b> adalah sebagai berikut : </p>
											<table border="1" width="100%">
												<tr style="background-color:#9ebced">
													<td style="width:50px;">A.</td>
													<td>Jumlah Responden</td>
												</tr>
												<tr>
													<td></td>
													<td style="text-align:justify;">Bahwa jumlah responden yang mengisi form kuisioner evaluasi penyelenggaraan penilaian kompetensi (wawancara online ) adalah sebanyak <b> 88 (delapan puluh delapan) responden ( peserta/pegawai ) </b>, berikut table respondennya :</td>
												</tr>
												<tr>
													<td></td>
													<td><div id="graph_responden"></div></td>
												</tr>
											</table>
											<table border="1" width="100%">
												<tr style="background-color:#9ebced">
													<td style="width:50px;">B.</td>
													<td>Metode Pengambilan Responden</td>
												</tr>
												<tr>
													<td></td>
													<td style="text-align:justify;">Pengambilan data evaluasi dari responden atau pegawai yang telah mengikuti pelaksanaan penilaian kompetensi adalah melalui form pada aplikasi Sistem Penilaian Individu Online (SPION) yang disebar pada saat selesai pelaksanaan akhir penilaian kompetensi ini.</td>
												</tr>
											</table>
											<table border="1" width="100%">
												<tr style="background-color:#9ebced">
													<td style="width:50px;">C.</td>
													<td>Hasil Responden dan Tindak Lanjut</td>
												</tr>
												<tr>
													<td></td>
													<td style="text-align:justify;">Berikut kami tampilkan  hasil responden terhadap kuisioner yang telah dibagikan terhadap beberapa aspek penyelenggaraan penilaian kompetensi ini berikut tindak lanjut yang akan atau telah dilakukan.</td>
												</tr>
											</table>
										</div>	
									</div>	
								</div>	
							</div>	
						</div>	
						<div class="modal-footer">
							<button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
							<button class="btn btn-info" id="btn-export" onclick="exportHTML();">Export to Word</button>
						</div>
					</div>
				</form>
			</div>
        </div>
    </div>
<!--END MODAL ADD-->



	
	
	
	
	
	
</body>		
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

$(document).ready(function () {
		tampil_data2();   //pemanggilan fungsi tampil data.
        function tampil_data2(){
            $.ajax({
				type  : 'POST',
                url   : '<?php echo site_url('appassesment/Dashboard/data_kuisioner');?>',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
					var no=0
                    for(let i=0; i<data.length; i++){
						no++;
                        html += '<tr>'+
                                '<td>'+no+'</td>'+
								'<td><b>'+data[i].jabatan+'</b> <br/>Tgl. Assessment :<br/> <b>'+data[i].tgl_assessment+'</b></td>'+
								'<td>'+data[i].kuisi_20+'</td>'+
								'<td>'+data[i].kuisi_21+'</td>'+
								'<td>'+data[i].last_update+'</td>'+
								'<td>'+data[i].ket+'</td>'+
								'</tr>';
                    }
                    $('#data_kuisi').html(html);
                }
 
            });
        }
		
 
});

//================================================================================================================================================

    $(document).ready(function () {
        $('#tableKuisi').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
    
    $(document).ready(function () {
        $('#tableSatuLima').DataTable({
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
        $('#tableRekSP').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

    $(document).ready(function () {
        $('#tableJenJPTP').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

    $(document).ready(function () {
        $('#tableJenAdm').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

    $(document).ready(function () {
        $('#tableJenPengawas').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

    $(document).ready(function () {
        $('#tableJenPelaksana').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

    $(document).ready(function () {
        $('#tableSpeng').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

/*
        Morris.Donut({
          element: 'graph_kuisi_satu',
          data:  
				[
					{label: "Tidak Jelas", value: 10},
					{label: "Kurang Jelas", value: 10},
					{label: "Jelas", value: 20},
					{label: "Sangat Jelas", value: 20}
				 ]
        });
*/

        Morris.Bar({
          element: 'graph_kuisi_satu',
          data: <?php echo $chart_satu;?>,
          xkey: 'tgl',
          ykeys: ['tj_1', 'kj_1', 'j_1', 'sj_1'],
          labels: ['Tidak Jelas', 'Kurang Jelas', 'Jelas', 'Sangat Jelas']
        });
		

        Morris.Bar({
          element: 'graph_kuisi_dua',
          data: <?php echo $chart_dua;?>,
          xkey: 'tgl',
          ykeys: ['ss_1', 's_1', 'm_1', 'sm_1'],
          labels: ['Sangat Sulit', 'Sulit', 'Mudah', 'Sangat Mudah']
        });
		
        Morris.Bar({
          element: 'graph_kuisi_tiga',
          data: <?php echo $chart_tiga;?>,
          xkey: 'tgl',
          ykeys: ['ss_2', 's_2', 'm_2', 'sm_2'],
          labels: ['Sangat Sulit', 'Sulit', 'Mudah', 'Sangat Mudah']
        });
		
        Morris.Bar({
          element: 'graph_responden',
          data: <?php echo $chart_responden;?>,
          xkey: '',
          ykeys: ['jptp', 'administrator', 'pengawas', 'fungsional', 'pelaksana'],
          labels: ['jptp', 'Administrator', 'Pengawas', 'Fungsional', 'Pelaksana']
        });
		
	function exportHTML(){
		   var header = "<html xmlns:o='urn:schemas-microsoft-com:office:office' "+
				"xmlns:w='urn:schemas-microsoft-com:office:word' "+
				"xmlns='http://www.w3.org/TR/REC-html40'>"+
				"<head><meta charset='utf-8'><title>Export HTML to Word Document with JavaScript</title></head><body>";
		   var footer = "</body></html>";
		   var sourceHTML = header+document.getElementById("source-html").innerHTML+footer;
		   
		   var source = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(sourceHTML);
		   var fileDownload = document.createElement("a");
		   document.body.appendChild(fileDownload);
		   fileDownload.href = source;
		   fileDownload.download = 'kuisi.doc';
		   fileDownload.click();
		   document.body.removeChild(fileDownload);
		}		
		
		
</script>	
	