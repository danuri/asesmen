<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">Alat Tes Psikometri</h3>
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
						<li role="presentation"><a role="menuitem" class="btn btn-secondary pull-left" tabindex="-1" style="cursor:pointer;" href="#" data-toggle="modal" data-target="#ModalaAdd"> <i class="glyphicon glyphicon-plus"></i> Tambah Materi Soal</a></li>
					</ul>
				</div>
				&nbsp; Daftar Nama Alat Tes
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
				<div class="table-responsive">
					<table width="100%" class="table table-striped table-bordered table-hover" id="myDataTable">
						<thead>
						<tr>
							<th>No.</th>
							<th>Alat Tes</th>
							<th>Jumlah Soal</th>
							<th>Status</th>
							<th>Tgl. Update</th>
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
					<h3 class="modal-title" id="myModalLabel">Tambah Data Alat Tes</h3>
				</div>
				<form class="form-horizontal">
					<div class="modal-body">
							<div class="panel panel-primary">
								<div class="panel-body">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label class="control-label col-xs-3">Nama Alat Tes</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="nama_materi" id="nama_materi" placeholder="Masukan Nama Materi" required>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Jumlah Soal</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="jml_soal" id="jml_soal" placeholder="Masukan Nama Materi" required>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Status</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="status_materi" id="status_materi" required>
												  <option>- pilih -</option>
												  <option value="Berlaku">Berlaku</option>
												  <option value="Tidak Berlaku">Tidak Berlaku</option>
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
					<h3 class="modal-title" id="myModalLabel">Edit Data Alat Tes</h3>
				</div>
				<form class="form-horizontal">
					<div class="modal-body">
						<div class="panel panel-primary">
							<div class="panel-body">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label class="control-label col-xs-3">Nama Alat Tes</label>
											<div class="col-xs-9">
												<input type="hidden" class="form-control" name="id_materi_edit" id="id_materi2">
												<input type="text" class="form-control" name="nama_materi_edit" id="nama_materi2" placeholder="Masukan Nama Alat Tes" required>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Jumlah Soal</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="jml_soal_edit" id="jml_soal2" placeholder="Masukan Jumlah Soal" required>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Status</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="status_materi_edit" id="status_materi2" required>
												  <option>- pilih -</option>
												  <option value="Berlaku">Berlaku</option>
												  <option value="Tidak Berlaku">Tidak Berlaku</option>
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
                        <h4 class="modal-title" id="myModalLabel">Hapus Data Alat Tes</h4>
                </div>
                <form class="form-horizontal">
				<div class="modal-body">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="row">
									<input type="hidden" name="id_materi" id="textkode" value="">
									<div class="alert alert-danger"><p>Apakah Anda yakin mau menghapus Data Alat Tes ini ?</p></div>
										<div class="form-group">
											<label class="control-label col-xs-3">Nama Alat Tes</label>
											<div class="col-xs-9">
												<input type="hidden" class="form-control" name="id_materi" id="id_materi">
												<input type="text" class="form-control" name="nama_materi_hapus" id="nama_materi3" readonly>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Jumlah Soal</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="jml_soal_hapus" id="jml_soal3" readonly>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Status</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="status_materi_hapus" id="status_materi3" readonly>
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
                url   : '<?php echo site_url('appassesment/materi/data_materi');?>',
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
										'<li role="presentation"><a href="javascript:;" class="btn btn-secondary pull-left item_edit" data="'+data[i].id_materi+'" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-pencil"></i> Edit</a></li>'+' '+
										'<li role="presentation"><a href="javascript:;" class="btn btn-secondary pull-left item_hapus" data="'+data[i].id_materi+'" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-trash"></i> Hapus</a></li>'+' '+
										'<li role="presentation"><a href="<?=site_url();?>appassesment/materi/data_materi/'+data[i].id_materi+'" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-binoculars"></i> Detail</a></li>'+' '+
									//	'<li role="presentation"><a href="javascript:;" class="btn btn-secondary pull-left item_cetak" data="'+data[i].id_anggota+'" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-file-pdf-o"></i> Cetak CV</a></li>'+' '+
									'</ul>'+
								'</td></div>'+
                                '<td>'+data[i].nama_materi+'</td>'+
                                '<td>'+data[i].jml_soal+'</td>'+
                                '<td style="color:#006400;">'+data[i].status_materi+'</td>'+
                                '<td>'+data[i].last_update+'</td>'+
								'</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }

		//GET UPDATE
		$('#show_data').on('click','.item_edit',function(){
            var id_materi =$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('appassesment/materi/get_materi')?>",
                dataType : "JSON",
                data : {id_materi:id_materi},
                success: function(data){
                	$.each(data,function(nama_materi, status_materi){
                    	$('#ModalaEdit').modal('show');
						$('[name="id_materi_edit"]').val(data.id_materi);
						$('[name="nama_materi_edit"]').val(data.nama_materi);
						$('[name="jml_soal_edit"]').val(data.jml_soal);
						$('[name="status_materi_edit"]').val(data.status_materi);
            		});
                }
            });
            return false;
        });

		//GET HAPUS
		$('#show_data').on('click','.item_hapus',function(){
            var id_materi	=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('appassesment/materi/get_materi')?>",
                dataType : "JSON",
                data : {id_materi:id_materi},
                success: function(data){
                	$.each(data,function(nama_materi, jml_soal, status_materi){
            $('#ModalHapus').modal('show');
            $('[name="id_materi"]').val(id_materi);
			$('[name="nama_materi_hapus"]').val(data.nama_materi);
			$('[name="jml_soal_hapus"]').val(data.jml_soal);
			$('[name="status_materi_hapus"]').val(data.status_materi);
        });
                }
            });
            return false;
        });
				
		//SIMPAN MATERI
		$('#btn_simpan').on('click',function(){
            var id_materi		=$('#id_materi').val();
            var nama_materi		=$('#nama_materi').val();
            var jml_soal		=$('#jml_soal').val();
            var status_materi	=$('#status_materi').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('appassesment/materi/simpan_materi')?>",
                dataType : "JSON",
                data : {id_materi:id_materi , nama_materi:nama_materi, jml_soal:jml_soal, status_materi:status_materi},
                success: function(data){
                    $('[name="id_materi"]').val("");
                    $('[name="nama_materi"]').val("");
                    $('[name="jml_soal"]').val("");
                    $('[name="status_materi"]').val("");
                    $('#ModalaAdd').modal('hide');
                    tampil_data();
                }
            });
            return false;
        });
		
        //UPDATE MATERI
		$('#btn_update').on('click',function(){
            var id_materi		=$('#id_materi2').val();
            var nama_materi		=$('#nama_materi2').val();
            var jml_soal		=$('#jml_soal2').val();
            var status_materi	=$('#status_materi2').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('appassesment/materi/update_materi')?>",
                dataType : "JSON",
                data : {id_materi:id_materi , nama_materi:nama_materi, jml_soal:jml_soal, status_materi:status_materi},
                success: function(data){
                    $('[name="id_materi_edit"]').val("");
                    $('[name="nama_materi_edit"]').val("");
                    $('[name="jml_soal_edit"]').val("");
                    $('[name="status_materi_edit"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data();
                }
            });
            return false;
        });
			
        //HAPUS MATERI
        $('#btn_hapus').on('click',function(){
            var id_materi =$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('appassesment/materi/hapus_materi')?>",
            dataType : "JSON",
                    data : {id_materi: id_materi},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_data();
                    }
                });
                return false;
            });
	});
</script>
