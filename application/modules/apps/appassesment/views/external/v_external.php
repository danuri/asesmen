<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">Laporan Hasil Kerjasama</h3>
    </div>
<!-- /.col-lg-12 -->
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
				<div class="btn btn-warning btn-xs pull-right"><a href="<?= base_url('appassesment/external/cetak_rekap'); ?>"><i class="fa fa-print fa-fw"></i> Cetak All</a></div>
				<!--<div class="btn btn-warning btn-xs pull-right " onclick="history.go(-1); return false;"><i class="fa fa-backward fa-fw"></i> Kembali</div>-->
				<!--
				<div class="dropdown">
				<button class="btn btn-default btn-xs pull-left " type="button" data-toggle="dropdown">
				<i class="fa fa-caret-down fa-fw"></i></button>
					<ul class="dropdown-menu" role="menu">
						<li role="presentation"><a role="menuitem" class="btn btn-secondary pull-left" tabindex="-1" style="cursor:pointer;" href="#" data-toggle="modal" data-target="#ModalaAdd"> <i class="glyphicon glyphicon-plus"></i> Tambah Kegiatan</a></li>
					</ul>
				</div>
				-->
				&nbsp; Data Laporan Individu
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
				<div class="table-responsive">
					<table width="100%" class="table table-striped table-bordered table-hover" id="myDataTable">
						<thead>
						<tr>
							<th>No.</th>
							<th>Kd PIC</th>
							<th>Kd Kegiatan</th>
							<th>Nama</th>
							<th>Kegiatan</th>
							<th>Keterangan</th>
						</tr>
						</thead>
						<tbody id="show_data">
						</tbody>
					</table>
					<!-- /.table-responsive -->
				</div>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->


<!--MODAL DETAIL-->
    <div class="modal fade" id="ModalDetail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="row modal-content">
                <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                        <h4 class="modal-title" id="myModalLabel">Detail Data Peserta</h4>
                </div>
                <form class="form-horizontal">
				<div class="modal-body">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<div class="dropdown">
								<button class="btn btn-default btn-xs pull-left " type="button" data-toggle="dropdown">
								<i class="fa fa-caret-down fa-fw"></i></button>
									<ul class="dropdown-menu" role="menu">
										<li role="presentation"><a role="menuitem" class="btn btn-secondary pull-left" tabindex="-1" style="cursor:pointer;" href="#" data-toggle="modal" data-target="#ModalaAdd"> <i class="glyphicon glyphicon-plus"></i> Tambah Hasil</a></li>
										<li role="presentation"><a role="menuitem" class="btn btn-secondary pull-left" tabindex="-1" style="cursor:pointer;" href="<?= base_url('appassesment/external/cetak_individu'); ?>"> <i class="glyphicon glyphicon-print"></i> Cetak</a></li>
									</ul>
								</div>
								&nbsp; Data Individu
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-md-12">
										<div class="col-md-6">
											<div class="form-group">
												<div class="col-xs-12">
													<input type="hidden" class="form-control" name="id_hasil" id="id_hasil">
													<input type="text" class="form-control" name="nama_detail" id="nama4" readonly>
												</div>
												<div class="col-xs-12">
													<input type="text" class="form-control" name="nip_detail" id="nip4" readonly>
												</div>
												<div class="col-xs-12">
													<textarea class="form-control" name="jabatan_detail" id="jabatan4" readonly></textarea>
												</div>
											</div>
										</div>	
										<div class="col-md-6">
											<div class="form-group">
												<div class="col-xs-12">
													<input type="text" class="form-control" name="nama_kegiatan_detail" id="nama_kegiatan4" readonly>
												</div>
												<div class="col-xs-12">
													<input type="text" class="form-control" name="tgl_keg_detail" id="tgl_keg4" readonly>
												</div>
												<div class="col-xs-12">
													<input type="text" class="form-control" name="ket_kegiatan_detail" id="ket_kegiatan4" readonly>
												</div>
											</div>
										</div>	
									</div>	
								</div>	
							</div>	
						</div>	
						<div class="panel panel-default">
							<div class="panel-heading">
								Hasil Penilaian
							</div>
							<div class="panel-body">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										Rekomendasi
									</h4>
								</div>
								<div class="panel-body">
									<div class="col-lg-12">
										<div class="row">
											<div class="col-xs-6">
												<input type="text" class="form-control" name="rekom_detail" id="rekom4" readonly>
											</div>
											<div class="col-xs-6">
												<table>
													<tr>
														<td style="align:center;">ID . PIC &nbsp;</td>
														<td><input type="text" class="form-control" name="kd_pic_detail" id="kd_pic4" readonly></td>
													</tr>
												</table>
											</div>
										</div>
									</div>
								</div>							
							</div>							
                            <ul class="nav nav-pills">
                                <li class="active"><a href="#pot_kom-pills" data-toggle="tab">Potensi dan Kompetensi</a></li>
                                <li><a href="#gp-pills" data-toggle="tab">Gambaran Potensi</a></li>
                                <li><a href="#kek-pills" data-toggle="tab">Kekuatan</a></li>
                                <li><a href="#ap-pills" data-toggle="tab">Area dan Saran Pengembangan</a></li>
                                <li><a href="#sp-pills" data-toggle="tab">Saran Penempatan</a></li>
                            </ul>
								<div class="tab-content">
									<div class="tab-pane fade in active" id="pot_kom-pills">
										<div class="form-group">
											<div class="col-xs-12">
											<div class="panel-group" id="accordion">
												<div class="row">
												<div class="col-md-12">
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" href="#collapse1" style="text-decoration:none">Potensi</a>
															</h4>
														</div>
														<div id="collapse1" class="panel-collapse collapse">
															<div class="panel-body">
																<div class="col-lg-12">
																<div class="row">
																<div class="col-lg-4">
																	<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
																		<div class="form-group">
																			<tr>
																				<td>Daya analisa &nbsp;</td>
																				<td><input type="text" class="form-control" name="da_detail" id="da4" readonly></td>
																			</tr>
																			<tr>
																				<td>Logika Berpikir &nbsp;</td>
																				<td><input type="text" class="form-control" name="lb_detail" id="lb4" readonly></td>
																			</tr>	
																			<tr>
																				<td>Sistematika Kerja &nbsp;</td>
																				<td><input type="text" class="form-control" name="sk_detail" id="sk4" readonly></td>
																			</tr>	
																			<tr>
																				<td>Inisiatif &nbsp;</td>
																				<td><input type="text" class="form-control" name="ini_detail" id="ini4" readonly></td>
																			</tr>	
																			<tr>
																				<td>Daya Tahan Kerja &nbsp;</td>
																				<td><input type="text" class="form-control" name="dtk_detail" id="dtk4" readonly></td>
																			</tr>	
																			<tr>
																				<td>Kepemimpinan &nbsp;</td>
																				<td><input type="text" class="form-control" name="kep_detail" id="kep4" readonly></td>
																			</tr>	
																		</div>
																	</table>
																</div>
																<div class="col-lg-4">
																	<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
																		<div class="form-group">
																			<tr>
																				<td>Dorongan Berprestasi &nbsp;</td>
																				<td><input type="text" class="form-control" name="db_detail" id="db4" readonly></td>
																			</tr>
																			<tr>
																				<td>Tanggung Jawab &nbsp;</td>
																				<td><input type="text" class="form-control" name="tj_detail" id="tj4" readonly></td>
																			</tr>	
																			<tr>
																				<td>Keterampilan Interpersonal &nbsp;</td>
																				<td><input type="text" class="form-control" name="ki_detail" id="ki4" readonly></td>
																			</tr>	
																			<tr>
																				<td>Kepercayaan Diri &nbsp;</td>
																				<td><input type="text" class="form-control" name="kd_detail" id="kd4" readonly></td>
																			</tr>	
																			<tr>
																				<td>Stabilitas Emosi &nbsp;</td>
																				<td><input type="text" class="form-control" name="se_detail" id="se4" readonly></td>
																			</tr>	
																		</div>
																	</table>
																</div>
																<div class="col-lg-4">
																	<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
																		<div class="form-group">
																			<tr>
																				<td>Nilai Potensi &nbsp;</td>
																				<td><input type="text" class="form-control" name="nilai_pot_detail" id="nilai_pot4" readonly></td>
																			</tr>
																			<tr>
																				<td>(%) &nbsp;</td>
																				<td><input type="text" class="form-control" name="percent_pot_detail" id="percent_pot4" readonly></td>
																			</tr>	
																		</div>
																	</table>
																</div>	
																</div>
																</div>
															</div>
														</div>
													</div>
												</div>	
												<div class="col-md-12">
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" href="#collapse2" style="text-decoration:none">Kompetensi</a>
															</h4>
														</div>
														<div id="collapse2" class="panel-collapse collapse">
															<div class="panel-body">
																<div class="col-lg-12">
																<div class="row">
																<div class="col-lg-4">
																	<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
																		<div class="form-group">
																			<tr>
																				<td>Integritas &nbsp;</td>
																				<td><input type="text" class="form-control" name="int_detail" id="int4" readonly></td>
																			</tr>
																			<tr>
																				<td>Kerja Sama &nbsp;</td>
																				<td><input type="text" class="form-control" name="ks_detail" id="ks4" readonly></td>
																			</tr>	
																			<tr>
																				<td>Komunikasi &nbsp;</td>
																				<td><input type="text" class="form-control" name="kom_detail" id="kom4" readonly></td>
																			</tr>	
																			<tr>
																				<td>Orientasi pada Hasil &nbsp;</td>
																				<td><input type="text" class="form-control" name="oph_detail" id="oph4" readonly></td>
																			</tr>	
																			<tr>
																				<td>Pelayanan Publik &nbsp;</td>
																				<td><input type="text" class="form-control" name="pp_detail" id="pp4" readonly></td>
																			</tr>	
																		</div>
																	</table>
																</div>
																<div class="col-lg-4">
																	<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
																		<div class="form-group">
																			<tr>
																				<td>Pengembangan Diri dan Orang Lain &nbsp;</td>
																				<td><input type="text" class="form-control" name="pdo_detail" id="pdo4" readonly></td>
																			</tr>
																			<tr>
																				<td>Mengelola Perubahan &nbsp;</td>
																				<td><input type="text" class="form-control" name="mp_detail" id="mp4" readonly></td>
																			</tr>	
																			<tr>
																				<td>Pengambilan Keputusan &nbsp;</td>
																				<td><input type="text" class="form-control" name="pk_detail" id="pk4" readonly></td>
																			</tr>	
																			<tr>
																				<td>Perekat Bangsa &nbsp;</td>
																				<td><input type="text" class="form-control" name="pb_detail" id="pk4" readonly></td>
																			</tr>	
																		</div>
																	</table>
																</div>
																<div class="col-lg-4">
																	<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
																		<div class="form-group">
																			<tr>
																				<td>Nilai Kompetensi &nbsp;</td>
																				<td><input type="text" class="form-control" name="nilai_kom_detail" id="nilai_pot4" readonly></td>
																			</tr>
																			<tr>
																				<td>(%) &nbsp;</td>
																				<td><input type="text" class="form-control" name="percent_kom_detail" id="percent_pot4" readonly></td>
																			</tr>	
																		</div>
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
									<div class="tab-pane fade" id="gp-pills">
										<div class="form-group">
											<div class="col-xs-12">
												<div class="panel-group" id="accordion">
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" href="#collapse3" style="text-decoration:none">Gambaran Potensi</a>
															</h4>
														</div>
														<div id="collapse3" class="panel-collapse collapse">
															<div class="panel-body">
																<div class="form-group">
																	<div class="col-xs-12">
																		<textarea class="form-control" name="gp_1_detail" id="gp_14" readonly></textarea>
																	</div>
																	<div class="col-xs-12">
																		<textarea class="form-control" name="gp_2_detail" id="gp_24" readonly></textarea>
																	</div>
																	<div class="col-xs-12">
																		<textarea class="form-control" name="gp_3_detail" id="gp_34" readonly></textarea>
																	</div>
																	<div class="col-xs-12">
																		<textarea class="form-control" name="gp_4_detail" id="gp_44" readonly></textarea>
																	</div>
																	<div class="col-xs-12">
																		<textarea class="form-control" name="gp_5_detail" id="gp_54" readonly></textarea>
																	</div>
																	<div class="col-xs-12">
																		<textarea class="form-control" name="gp_6_detail" id="gp_64" readonly></textarea>
																	</div>
																	<div class="col-xs-12">
																		<textarea class="form-control" name="gp_7_detail" id="gp_74" readonly></textarea>
																	</div>
																	<div class="col-xs-12">
																		<textarea class="form-control" name="gp_8_detail" id="gp_84" readonly></textarea>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="kek-pills">
										<div class="form-group">
											<div class="col-xs-12">
												<div class="panel-group" id="accordion">
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" href="#collapse4" style="text-decoration:none">Kekuatan</a>
															</h4>
														</div>
														<div id="collapse4" class="panel-collapse collapse">
															<div class="panel-body">
																<div class="form-group">
																	<div class="col-xs-12">
																		<textarea class="form-control" name="kek_1_detail" id="kek_14" readonly></textarea>
																	</div>
																	<div class="col-xs-12">
																		<textarea class="form-control" name="kek_2_detail" id="kek_24" readonly></textarea>
																	</div>
																	<div class="col-xs-12">
																		<textarea class="form-control" name="kek_3_detail" id="kek_34" readonly></textarea>
																	</div>
																	<div class="col-xs-12">
																		<textarea class="form-control" name="kek_4_detail" id="kek_44" readonly></textarea>
																	</div>
																	<div class="col-xs-12">
																		<textarea class="form-control" name="kek_5_detail" id="kek_54" readonly></textarea>
																	</div>
																	<div class="col-xs-12">
																		<textarea class="form-control" name="kek_6_detail" id="kek_64" readonly></textarea>
																	</div>
																	<div class="col-xs-12">
																		<textarea class="form-control" name="kek_7_detail" id="kek_74" readonly></textarea>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="ap-pills">
										<div class="form-group">
											<div class="col-xs-12">
											<div class="panel-group" id="accordion">
												<div class="row">
												<div class="col-md-12">
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" href="#collapse5" style="text-decoration:none">Area</a>
															</h4>
														</div>
														<div id="collapse5" class="panel-collapse collapse">
														<div class="panel-body">
															<div class="form-group">
																<div class="col-xs-12">
																	<textarea class="form-control" name="ap_1_detail" id="ap_14" readonly></textarea>
																</div>
																<div class="col-xs-12">
																	<textarea class="form-control" name="ap_2_detail" id="ap_24" readonly></textarea>
																</div>
																<div class="col-xs-12">
																	<textarea class="form-control" name="ap_3_detail" id="ap_34" readonly></textarea>
																</div>
																<div class="col-xs-12">
																	<textarea class="form-control" name="ap_4_detail" id="ap_44" readonly></textarea>
																</div>
																<div class="col-xs-12">
																	<textarea class="form-control" name="ap_5_detail" id="ap_54" readonly></textarea>
																</div>
																<div class="col-xs-12">
																	<textarea class="form-control" name="ap_6_detail" id="ap_64" readonly></textarea>
																</div>
																<div class="col-xs-12">
																	<textarea class="form-control" name="ap_7_detail" id="ap_74" readonly></textarea>
																</div>
															</div>
														</div>
														</div>
													</div>
												</div>	
												<div class="col-md-12">
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" href="#collapse6" style="text-decoration:none">Saran</a>
															</h4>
														</div>
														<div id="collapse6" class="panel-collapse collapse">
															<div class="panel-body">
																<div class="form-group">
																	<div class="col-xs-12">
																		<input type="text" class="form-control" name="speng_1_detail" id="speng_14" readonly>
																	</div>
																	<div class="col-xs-12">
																		<input type="text" class="form-control" name="speng_2_detail" id="speng_24" readonly>
																	</div>
																	<div class="col-xs-12">
																		<input type="text" class="form-control" name="speng_3_detail" id="speng_34" readonly>
																	</div>
																	<div class="col-xs-12">
																		<input type="text" class="form-control" name="speng_4_detail" id="speng_44" readonly>
																	</div>
																	<div class="col-xs-12">
																		<input type="text" class="form-control" name="speng_5_detail" id="speng_54" readonly>
																	</div>
																	<div class="col-xs-12">
																		<input type="text" class="form-control" name="speng_6_detail" id="speng_64" readonly>
																	</div>
																	<div class="col-xs-12">
																		<input type="text" class="form-control" name="speng_7_detail" id="speng_74" readonly>
																	</div>
																	<div class="col-xs-12">
																		<input type="text" class="form-control" name="speng_8_detail" id="speng_84" readonly>
																	</div>
																	<div class="col-xs-12">
																		<input type="text" class="form-control" name="speng_9_detail" id="speng_94" readonly>
																	</div>
																	<div class="col-xs-12">
																		<input type="text" class="form-control" name="speng_10_detail" id="speng_104" readonly>
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
									<!--
									-->	
									</div>
									<div class="tab-pane fade" id="sp-pills">
										<div class="form-group">
											<div class="col-xs-12">
												<div class="panel-group" id="accordion">
													<div class="panel panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
																<a data-toggle="collapse" data-parent="#accordion" href="#collapse7" style="text-decoration:none">Saran Penempatan</a>
															</h4>
														</div>
														<div id="collapse7" class="panel-collapse collapse">
															<div class="panel-body">
																<div class="form-group">
																	<div class="col-xs-12">
																		<input type="text" class="form-control" name="sp_1_detail" id="sp_14" readonly>
																	</div>
																	<div class="col-xs-12">
																		<input type="text" class="form-control" name="sp_2_detail" id="sp_24" readonly>
																	</div>
																	<div class="col-xs-12">
																		<input type="text" class="form-control" name="sp_3_detail" id="sp_34" readonly>
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
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
						</div>
					</div>		
				</div>		
                </form>
            </div>
        </div>
    </div>
<!--END MODAL DETAIL-->


<script type="text/javascript">
    $(document).ready(function(){
		tampil_data();   //pemanggilan fungsi tampil data.
        function tampil_data(){
            $.ajax({
				type  : 'ajax',
                url   : '<?php echo site_url('appassesment/external/data_external');?>',
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
										'<li role="presentation"><a href="javascript:;" class="btn btn-secondary pull-left item_edit" data="'+data[i].id_hasil+'" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-pencil"></i> Edit</a></li>'+' '+
										'<li role="presentation"><a href="javascript:;" class="btn btn-secondary pull-left item_hapus" data="'+data[i].id_hasil+'" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-trash"></i> Hapus</a></li>'+' '+
										'<li role="presentation"><a href="javascript:;" class="btn btn-secondary pull-left item_detail" data="'+data[i].id_hasil+'" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-eye"></i> Detail</a></li>'+' '+
									//	'<li role="presentation"><a href="javascript:;" class="btn btn-secondary pull-left item_cetak" data="'+data[i].id_anggota+'" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-file-pdf-o"></i> Cetak CV</a></li>'+' '+
									'</ul>'+
								'</td></div>'+
                                '<td>'+data[i].kd_pic+'</td>'+
                                '<td>'+data[i].kd_kegiatan+'</td>'+
                                '<td>'+data[i].nama+' <br/> NIP. '+data[i].nip+'</td>'+
                                '<td>'+data[i].nama_kegiatan+' <br/> Tgl. '+data[i].tgl_keg+'</td>'+
                                '<td>'+data[i].ket_kegiatan+'</td>'+
								'</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }

		//GET DETAIL
		$('#show_data').on('click','.item_detail',function(){
            var id_hasil	=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('appassesment/external/get_detail')?>",
                dataType : "JSON",
                data : {id_hasil:id_hasil},
                success: function(data){
                	$.each(data,function(nama, nip){
            $('#ModalDetail').modal('show');
            $('[name="id_hasil"]').val(id_hasil);
			$('[name="nama_detail"]').val(data.nama);
			$('[name="nip_detail"]').val(data.nip);
			$('[name="jabatan_detail"]').val(data.jabatan);
			$('[name="nama_kegiatan_detail"]').val(data.nama_kegiatan);
			$('[name="tgl_keg_detail"]').val(data.tgl_keg);
			$('[name="ket_kegiatan_detail"]').val(data.ket_kegiatan);
			$('[name="da_detail"]').val(data.da);
			$('[name="lb_detail"]').val(data.lb);
			$('[name="sk_detail"]').val(data.sk);
			$('[name="ini_detail"]').val(data.ini);
			$('[name="dtk_detail"]').val(data.dtk);
			$('[name="kep_detail"]').val(data.kep);
			$('[name="db_detail"]').val(data.db);
			$('[name="tj_detail"]').val(data.tj);
			$('[name="ki_detail"]').val(data.ki);
			$('[name="kd_detail"]').val(data.kd);
			$('[name="se_detail"]').val(data.se);
			$('[name="nilai_pot_detail"]').val(data.nilai_pot);
			$('[name="percent_pot_detail"]').val(data.percent_pot);
			$('[name="int_detail"]').val(data.int);
			$('[name="ks_detail"]').val(data.ks);
			$('[name="kom_detail"]').val(data.kom);
			$('[name="oph_detail"]').val(data.oph);
			$('[name="pp_detail"]').val(data.pp);
			$('[name="pdo_detail"]').val(data.pdo);
			$('[name="mp_detail"]').val(data.mp);
			$('[name="pk_detail"]').val(data.pk);
			$('[name="pb_detail"]').val(data.pb);
			$('[name="nilai_kom_detail"]').val(data.nilai_kom);
			$('[name="percent_kom_detail"]').val(data.percent_kom);
			$('[name="kek_1_detail"]').val(data.kek_1);
			$('[name="kek_2_detail"]').val(data.kek_2);
			$('[name="kek_3_detail"]').val(data.kek_3);
			$('[name="kek_4_detail"]').val(data.kek_4);
			$('[name="kek_5_detail"]').val(data.kek_5);
			$('[name="kek_6_detail"]').val(data.kek_6);
			$('[name="kek_7_detail"]').val(data.kek_7);
			$('[name="gp_1_detail"]').val(data.gp_1);
			$('[name="gp_2_detail"]').val(data.gp_2);
			$('[name="gp_3_detail"]').val(data.gp_3);
			$('[name="gp_4_detail"]').val(data.gp_4);
			$('[name="gp_5_detail"]').val(data.gp_5);
			$('[name="gp_6_detail"]').val(data.gp_6);
			$('[name="gp_7_detail"]').val(data.gp_7);
			$('[name="gp_8_detail"]').val(data.gp_8);
			$('[name="ap_1_detail"]').val(data.ap_1);
			$('[name="ap_2_detail"]').val(data.ap_2);
			$('[name="ap_3_detail"]').val(data.ap_3);
			$('[name="ap_4_detail"]').val(data.ap_4);
			$('[name="ap_5_detail"]').val(data.ap_5);
			$('[name="ap_6_detail"]').val(data.ap_6);
			$('[name="ap_7_detail"]').val(data.ap_7);
			$('[name="speng_1_detail"]').val(data.speng_1);
			$('[name="speng_2_detail"]').val(data.speng_2);
			$('[name="speng_3_detail"]').val(data.speng_3);
			$('[name="speng_4_detail"]').val(data.speng_4);
			$('[name="speng_5_detail"]').val(data.speng_5);
			$('[name="speng_6_detail"]').val(data.speng_6);
			$('[name="speng_7_detail"]').val(data.speng_7);
			$('[name="speng_8_detail"]').val(data.speng_8);
			$('[name="speng_9_detail"]').val(data.speng_9);
			$('[name="speng_10_detail"]').val(data.speng_10);
			$('[name="sp_1_detail"]').val(data.sp_1);
			$('[name="sp_2_detail"]').val(data.sp_2);
			$('[name="sp_3_detail"]').val(data.sp_3);
			$('[name="rekom_detail"]').val(data.rekom);
			$('[name="kd_pic_detail"]').val(data.kd_pic);
			
        });
                }
            });
            return false;
        });

		//GET UPDATE
		$('#show_data').on('click','.item_edit',function(){
            var id_kegiatan =$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('appassesment/kegiatan/get_kegiatan')?>",
                dataType : "JSON",
                data : {id_kegiatan:id_kegiatan},
                success: function(data){
                	$.each(data,function(kd_kegiatan, nama_kegiatan, jenis_kegiatan, ket_kegiatan, tgl_keg){
                    	$('#ModalaEdit').modal('show');
						$('[name="id_kegiatan_edit"]').val(data.id_kegiatan);
						$('[name="kd_kegiatan_edit"]').val(data.kd_kegiatan);
						$('[name="nama_kegiatan_edit"]').val(data.nama_kegiatan);
						$('[name="jenis_kegiatan_edit"]').val(data.jenis_kegiatan);
						$('[name="ket_kegiatan_edit"]').val(data.ket_kegiatan);
						$('[name="tgl_keg_edit"]').val(data.tgl_keg);
            		});
                }
            });
            return false;
        });

		//GET HAPUS
		$('#show_data').on('click','.item_hapus',function(){
            var id_kegiatan	=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('appassesment/kegiatan/get_kegiatan')?>",
                dataType : "JSON",
                data : {id_kegiatan:id_kegiatan},
                success: function(data){
                	$.each(data,function(kd_kegiatan, nama_kegiatan, jenis_kegiatan, ket_kegiatan, tgl_keg){
            $('#ModalHapus').modal('show');
            $('[name="id_kegiatan"]').val(id_kegiatan);
			$('[name="nama_kegiatan_hapus"]').val(data.nama_kegiatan);
			$('[name="jenis_kegiatan_hapus"]').val(data.jenis_kegiatan);
			$('[name="ket_kegiatan_hapus"]').val(data.ket_kegiatan);
			$('[name="tgl_keg_hapus"]').val(data.tgl_keg);
        });
                }
            });
            return false;
        });
				
		//SIMPAN KEGIATAN
		$('#btn_simpan').on('click',function(){
            var id_kegiatan		=$('#id_kegiatan').val();
            var kd_kegiatan		=$('#kd_kegiatan').val();
            var nama_kegiatan	=$('#nama_kegiatan').val();
            var jenis_kegiatan	=$('#jenis_kegiatan').val();
            var ket_kegiatan	=$('#ket_kegiatan').val();
            var tgl_keg			=$('#tgl_keg').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('appassesment/kegiatan/simpan_kegiatan')?>",
                dataType : "JSON",
                data : {id_kegiatan:id_kegiatan , kd_kegiatan:kd_kegiatan, nama_kegiatan:nama_kegiatan, jenis_kegiatan:jenis_kegiatan, ket_kegiatan:ket_kegiatan, tgl_keg:tgl_keg},
                success: function(data){
                    $('[name="id_kegiatan"]').val("");
                    $('[name="kd_kegiatan"]').val("");
                    $('[name="nama_kegiatan"]').val("");
                    $('[name="jenis_kegiatan"]').val("");
                    $('[name="ket_kegiatan"]').val("");
                    $('[name="tgl_keg"]').val("");
                    $('#ModalaAdd').modal('hide');
                    tampil_data();
                }
            });
            return false;
        });
		
        //UPDATE KEGIATAN
		$('#btn_update').on('click',function(){
            var id_kegiatan		=$('#id_kegiatan2').val();
            var kd_kegiatan		=$('#kd_kegiatan2').val();
            var nama_kegiatan	=$('#nama_kegiatan2').val();
            var jenis_kegiatan	=$('#jenis_kegiatan2').val();
            var ket_kegiatan	=$('#ket_kegiatan2').val();
            var tgl_keg			=$('#tgl_keg2').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('appassesment/kegiatan/update_kegiatan')?>",
                dataType : "JSON",
                data : {id_kegiatan:id_kegiatan , kd_kegiatan:kd_kegiatan, nama_kegiatan:nama_kegiatan, jenis_kegiatan:jenis_kegiatan, ket_kegiatan:ket_kegiatan, tgl_keg:tgl_keg},
                success: function(data){
                    $('[name="id_kegiatan_edit"]').val("");
                    $('[name="kd_kegiatan_edit"]').val("");
                    $('[name="nama_kegiatan_edit"]').val("");
                    $('[name="jenis_kegiatan_edit"]').val("");
                    $('[name="ket_kegiatan_edit"]').val("");
                    $('[name="tgl_keg_edit"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data();
                }
            });
            return false;
        });
			
        //HAPUS KEGIATAN
        $('#btn_hapus').on('click',function(){
            var id_kegiatan =$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('appassesment/kegiatan/hapus_kegiatan')?>",
            dataType : "JSON",
                    data : {id_kegiatan: id_kegiatan},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_data();
                    }
                });
                return false;
            });
	});
</script>
