<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">Penyelenggaraan Kegiatan UPT Penkom</h3>
    </div>
<!-- /.col-lg-12 -->
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
				<!--<div class="btn btn-warning btn-xs pull-right " onclick="history.go(-1); return false;"><i class="fa fa-backward fa-fw"></i> Kembali</div>-->
				<div class="dropdown">
				<button class="btn btn-default btn-xs pull-left " type="button" data-toggle="dropdown">
				<i class="fa fa-caret-down fa-fw"></i></button>
					<ul class="dropdown-menu" role="menu">
						<li role="presentation"><a role="menuitem" class="btn btn-secondary pull-left" tabindex="-1" style="cursor:pointer;" href="#" data-toggle="modal" data-target="#ModalaAdd"> <i class="glyphicon glyphicon-plus"></i> Tambah Kegiatan</a></li>
					</ul>
				</div>
				&nbsp; Daftar Kegiatan
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
				<div class="table-responsive">
					<table width="100%" class="table table-striped table-bordered table-hover" id="myDataTable">
						<thead>
						<tr>
							<th>No.</th>
							<th>Kode</th>
							<th>Kegiatan</th>
							<!--<th>Tahun</th>-->
							<th>Jenis</th>
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


<!-- MODAL ADD -->
    <div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="row modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3 class="modal-title" id="myModalLabel">Tambah Kegiatan</h3>
				</div>
				<form class="form-horizontal">
					<div class="modal-body">
							<div class="panel panel-primary">
								<div class="panel-body">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label class="control-label col-xs-3">Kode</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="kd_kegiatan" id="kd_kegiatan" placeholder="Masukan Kode" required>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Nama Kegiatan</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="nama_kegiatan" id="nama_kegiatan" placeholder="Masukan Nama Kegiatan" required>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Tgl. Kegiatan</label>
											<div class="col-xs-9">
												<input type="date" class="form-control" name="tgl_keg" id="tgl_keg" placeholder="Masukan Tgl. Kegiatan" required>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Tahun</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="tahun" id="tahun" placeholder="Masukan Tahun" required>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Jenis</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jenis_kegiatan" id="jenis_kegiatan" required>
												  <option>- pilih -</option>
												  <option value="Internal">Internal</option>
												  <option value="Kerjasama">Kerjasama</option>
												</select>
											</div>
										</div>	
										<div class="form-group">
											<label class="control-label col-xs-3">Instansi</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="instansi" id="instansi" placeholder="Masukan Instansi" required>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Link Dokumen</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="link_doc" id="link_doc" placeholder="Masukan Link Dokumen" required>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Status</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="ket" id="ket" required>
												  <option>- pilih -</option>
												  <option value="Y">Y</option>
												  <option value="N">N</option>
												</select>
											</div>
										</div>	
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

<!-- MODAL EDIT -->
    <div class="modal fade" id="ModalaEdit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="row modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3 class="modal-title" id="myModalLabel">Edit Kegiatan</h3>
				</div>
				<form class="form-horizontal">
					<div class="modal-body">
						<div class="panel panel-primary">
							<div class="panel-body">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label class="control-label col-xs-3">Kode</label>
											<div class="col-xs-9">
												<input type="hidden" class="form-control" name="id_kegiatan_edit" id="id_kegiatan2">
												<input type="text" class="form-control" name="kd_kegiatan_edit" id="kd_kegiatan2" placeholder="Masukan Kode" required>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Nama Kegiatan</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="nama_kegiatan_edit" id="nama_kegiatan2" placeholder="Masukan Nama Kegiatan" required>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Tgl. Kegiatan</label>
											<div class="col-xs-9">
												<input type="date" class="form-control" name="tgl_keg_edit" id="tgl_keg2" placeholder="Masukan Tgl. Kegiatan" required>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Tahun</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="tahun_edit" id="tahun2" placeholder="Masukan Tahun" required>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Jenis</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jenis_kegiatan_edit" id="jenis_kegiatan2" required>
												  <option>- pilih -</option>
												  <option value="Internal">Internal</option>
												  <option value="Kerjasama">Kerjasama</option>
												</select>
											</div>
										</div>	
										<div class="form-group">
											<label class="control-label col-xs-3">Instansi</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="instansi_edit" id="instansi2" placeholder="Masukan Instansi" required>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Link Dokumen</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="link_doc_edit" id="link_doc2" placeholder="Masukan Link Dokumen" required>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Status</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="ket_edit" id="ket2" required>
												  <option>- pilih -</option>
												  <option value="Y">Y</option>
												  <option value="N">N</option>
												</select>
											</div>
										</div>	
									</div>	
								</div>	
							</div>	
						</div>	
							<div class="modal-footer">
								<button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
								<button class="btn btn-info" id="btn_update">Update</button>
							</div>	
					</div>
				</form>
			</div>
		</div>
    </div>
<!--END MODAL EDIT-->

<!--MODAL HAPUS-->
    <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="row modal-content">
                <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Kegiatan</h4>
                </div>
                <form class="form-horizontal">
				<div class="modal-body">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="row">
									<input type="hidden" name="id_kegiatan" id="textkode" value="">
									<div class="alert alert-danger"><p>Apakah Anda yakin mau menghapus Kegiatan ini ?</p></div>
										<div class="form-group">
											<label class="control-label col-xs-3">Nama Kegiatan</label>
											<div class="col-xs-9">
												<input type="hidden" class="form-control" name="id_kegiatan" id="id_kegiatan">
												<input type="text" class="form-control" name="nama_kegiatan_hapus" id="nama_kegiatan3" readonly>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Jenis Kegiatan</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="jenis_kegiatan_hapus" id="jenis_kegiatan3" readonly>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Tgl. Kegiatan</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="tgl_keg_hapus" id="tgl_keg3" readonly>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Tahun</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="tahun_hapus" id="tahun3" readonly>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Instansi</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="instansi_hapus" id="instansi3" readonly>
											</div>
										</div>
								</div>	
							</div>	
						</div>	
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
							<button class="btn_hapus btn btn-danger" id="btn_hapus">Hapus</button>
						</div>
					</div>		
				</div>		
                </form>
            </div>
        </div>
    </div>
<!--END MODAL HAPUS-->


<script type="text/javascript">
    $(document).ready(function(){
		tampil_data();   //pemanggilan fungsi tampil data.
        function tampil_data(){
            $.ajax({
				type  : 'POST',
                url   : '<?php echo site_url('appassesment/kegiatan/data_kegiatan');?>',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
					var no=0
                    for(let i=0; i<data.length; i++){
						no++;
                        html += '<tr>'+
								'<td align=center><div class="dropdown">'+
								'<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">'+
								'<i class=""> '+no+'</i></button>'+
									'<ul class="dropdown-menu" role="menu">'+
										'<li role="presentation"><a href="javascript:;" class="btn btn-secondary pull-left item_edit" data="'+data[i].id_kegiatan+'" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="glyphicon glyphicon-edit"></i> Edit</a></li>'+' '+
										'<li role="presentation"><a href="javascript:;" class="btn btn-secondary pull-left item_hapus" data="'+data[i].id_kegiatan+'" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="glyphicon glyphicon-trash"></i> Hapus</a></li>'+' '+
										'<li role="presentation"><a href="<?php echo site_url('module/appassesment/soal/index');?>" class="btn btn-secondary pull-left " role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="glyphicon glyphicon-envelope"></i> Buat Surat</a></li>'+' '+
									//	'<li role="presentation"><a href="javascript:;" class="btn btn-secondary pull-left item_cetak" data="'+data[i].id_anggota+'" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-file-pdf-o"></i> Cetak CV</a></li>'+' '+
									'</ul>'+
								'</td></div>'+
                                '<td>'+data[i].kd_kegiatan+'</td>'+
                                '<td>'+data[i].nama_kegiatan+' <br/> Tgl. '+data[i].tgl_keg+'</td>'+
                               // '<td><?php date("'y',strtotime('+data[i].tgl_keg+')");?></td>'+
                                '<td>'+data[i].jenis_kegiatan+' <br/> '+data[i].instansi+'	</td>'+
                                '<td>'+data[i].ket+'</td>'+
								'</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }

		//GET UPDATE
		$('#show_data').on('click','.item_edit',function(){
            var id_kegiatan =$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('appassesment/kegiatan/get_kegiatan')?>",
                dataType : "JSON",
                data : {id_kegiatan:id_kegiatan},
                success: function(data){
                	$.each(data,function(kd_kegiatan, nama_kegiatan, jenis_kegiatan, instansi, tgl_keg, ket,tahun,link_doc){
                    	$('#ModalaEdit').modal('show');
						$('[name="id_kegiatan_edit"]').val(data.id_kegiatan);
						$('[name="kd_kegiatan_edit"]').val(data.kd_kegiatan);
						$('[name="nama_kegiatan_edit"]').val(data.nama_kegiatan);
						$('[name="jenis_kegiatan_edit"]').val(data.jenis_kegiatan);
						$('[name="instansi_edit"]').val(data.instansi);
						$('[name="tgl_keg_edit"]').val(data.tgl_keg);
						$('[name="ket_edit"]').val(data.ket);
						$('[name="tahun_edit"]').val(data.tahun);
						$('[name="link_doc_edit"]').val(data.link_doc);
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
                	$.each(data,function(kd_kegiatan, nama_kegiatan, jenis_kegiatan, instansi, tgl_keg, ket, tahun,link_doc){
            $('#ModalHapus').modal('show');
            $('[name="id_kegiatan"]').val(id_kegiatan);
			$('[name="nama_kegiatan_hapus"]').val(data.nama_kegiatan);
			$('[name="jenis_kegiatan_hapus"]').val(data.jenis_kegiatan);
			$('[name="instansi_hapus"]').val(data.instansi);
			$('[name="tgl_keg_hapus"]').val(data.tgl_keg);
			$('[name="ket_hapus"]').val(data.ket);
			$('[name="tahun_hapus"]').val(data.tahun);
			$('[name="link_doc_hapus"]').val(data.link_doc);
        });
                }
            });
            return false;
        });
				
		//SIMPAN KEGIATAN
		$('#btn_simpan').on('click',function(){
            var id_kegiatan		=$('#id_kegiatan').val();
            var kd_kegiatan		=$('#kd_kegiatan').val();
            var nama_kegiatan		=$('#nama_kegiatan').val();
            var jenis_kegiatan		=$('#jenis_kegiatan').val();
            var instansi		=$('#instansi').val();
            var tgl_keg			=$('#tgl_keg').val();
            var ket			=$('#ket').val();
            var tahun			=$('#tahun').val();
            var link_doc		=$('#link_doc').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('appassesment/kegiatan/simpan_kegiatan')?>",
                dataType : "JSON",
                data : {id_kegiatan:id_kegiatan, kd_kegiatan:kd_kegiatan, nama_kegiatan:nama_kegiatan, jenis_kegiatan:jenis_kegiatan, instansi:instansi, tgl_keg:tgl_keg, ket:ket, tahun:tahun, link_doc:link_doc},
                success: function(data){
                    $('[name="id_kegiatan"]').val("");
                    $('[name="kd_kegiatan"]').val("");
                    $('[name="nama_kegiatan"]').val("");
                    $('[name="jenis_kegiatan"]').val("");
                    $('[name="instansi"]').val("");
                    $('[name="tgl_keg"]').val("");
                    $('[name="ket"]').val("");
                    $('[name="tahun"]').val("");
                    $('[name="link_doc"]').val("");
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
            var nama_kegiatan		=$('#nama_kegiatan2').val();
            var jenis_kegiatan		=$('#jenis_kegiatan2').val();
            var instansi		=$('#instansi2').val();
            var tgl_keg			=$('#tgl_keg2').val();
            var ket			=$('#ket2').val();
            var tahun			=$('#tahun2').val();
            var link_doc		=$('#link_doc2').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('appassesment/kegiatan/update_kegiatan')?>",
                dataType : "JSON",
                data : {id_kegiatan:id_kegiatan , kd_kegiatan:kd_kegiatan, nama_kegiatan:nama_kegiatan, jenis_kegiatan:jenis_kegiatan, instansi:instansi, tgl_keg:tgl_keg, ket:ket, tahun:tahun, link_doc:link_doc},
                success: function(data){
                    $('[name="id_kegiatan_edit"]').val("");
                    $('[name="kd_kegiatan_edit"]').val("");
                    $('[name="nama_kegiatan_edit"]').val("");
                    $('[name="jenis_kegiatan_edit"]').val("");
                    $('[name="instansi_edit"]').val("");
                    $('[name="tgl_keg_edit"]').val("");
                    $('[name="ket_edit"]').val("");
                    $('[name="tahun_edit"]').val("");
                    $('[name="link_doc_edit"]').val("");
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
