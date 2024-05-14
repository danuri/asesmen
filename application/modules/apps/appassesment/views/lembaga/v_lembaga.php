<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">Data Pegawai AC-BKKBN</h3>
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
						<li role="presentation"><a role="menuitem" class="btn btn-secondary pull-left" tabindex="-1" style="cursor:pointer;" href="#" data-toggle="modal" data-target="#ModalaAdd"> <i class="glyphicon glyphicon-plus"></i> Tambah Personil AC-BKKBN</a></li>
					</ul>
				</div>
				&nbsp; Daftar Nama Pegawai AC-BKKBN
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
				<div class="table-responsive">
					<table width="100%" class="table table-striped table-bordered table-hover" id="myDataTable">
						<thead>
						<tr>
							<th>No.</th>
							<th>Kode</th>
							<th>Nama / NIP</th>
							<th>Pangkat / Jabatan</th>
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
					<h3 class="modal-title" id="myModalLabel">Tambah Data Pegawai AC-BKKBN</h3>
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
												<input type="text" class="form-control" name="kd_personil" id="kd_personil" placeholder="Masukan Kode Personil" required>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Nama</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="nama_personil" id="nama_personil" placeholder="Masukan Nama" required>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">NIP</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="nip_personil" id="nip_personil" placeholder="Masukan NIP" required>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Pangkat</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="pangkat" id="pangkat" required>
												  <option>- pilih -</option>
												  <option value="Pembina Tingkat I, IV/b">Pembina Tingkat I, IV/b</option>
												  <option value="Pembina, IV/a">Pembina, IV/a</option>
												  <option value="Penata Tingkat I, III/d">Penata Tingkat I, III/d</option>
												  <option value="Penata, III/c">Penata, III/c</option>
												  <option value="Penata Muda Tingkat I, III/b">Penata Muda Tingkat I, III/b</option>
												  <option value="Penata Muda, III/a">Penata Muda, III/a</option>
												</select>
											</div>
										</div>	
										<div class="form-group">
											<label class="control-label col-xs-3">Jabatan</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Masukan Jabatan" required>
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
					<h3 class="modal-title" id="myModalLabel">Edit Data Pegawai AC-BKKBN</h3>
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
												<input type="hidden" class="form-control" name="id_personil_edit" id="id_personil2">
												<input type="text" class="form-control" name="kd_personil_edit" id="kd_personil2" placeholder="Masukan Kode Personil" required>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Nama</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="nama_personil_edit" id="nama_personil2" placeholder="Masukan Nama" required>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">NIP</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="nip_personil_edit" id="nip_personil2" placeholder="Masukan NIP" required>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Pangkat</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="pangkat_edit" id="pangkat2" required>
												  <option>- pilih -</option>
												  <option value="Pembina Tingkat I, IV/b">Pembina Tingkat I, IV/b</option>
												  <option value="Pembina, IV/a">Pembina, IV/a</option>
												  <option value="Penata Tingkat I, III/d">Penata Tingkat I, III/d</option>
												  <option value="Penata, III/c">Penata, III/c</option>
												  <option value="Penata Muda Tingkat I, III/b">Penata Muda Tingkat I, III/b</option>
												  <option value="Penata Muda, III/a">Penata Muda, III/a</option>
												</select>
											</div>
										</div>	
										<div class="form-group">
											<label class="control-label col-xs-3">Jabatan</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="jabatan_edit" id="jabatan2" placeholder="Masukan Jabatan" required>
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
                        <h4 class="modal-title" id="myModalLabel">Hapus Data Pegawai AC-BKKBN</h4>
                </div>
                <form class="form-horizontal">
				<div class="modal-body">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="row">
									<input type="hidden" name="id_personil" id="textkode" value="">
									<div class="alert alert-danger"><p>Apakah Anda yakin mau menghapus Data Pegawai UPT Penkom ini ?</p></div>
										<div class="form-group">
											<label class="control-label col-xs-3">Nama</label>
											<div class="col-xs-9">
												<input type="hidden" class="form-control" name="id_personil" id="id_personil">
												<input type="text" class="form-control" name="nama_personil_hapus" id="nama_personil3" readonly>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Jabatan</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="jabatan_hapus" id="jabatan3" readonly>
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
                url   : '<?php echo site_url('appassesment/lembaga/data_lembaga');?>',
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
										'<li role="presentation"><a href="javascript:;" class="btn btn-secondary pull-left item_edit" data="'+data[i].id_personil+'" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-pencil"></i> Edit</a></li>'+' '+
										'<li role="presentation"><a href="javascript:;" class="btn btn-secondary pull-left item_hapus" data="'+data[i].id_personil+'" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-trash"></i> Hapus</a></li>'+' '+
										'<li role="presentation"><a href="<?=site_url();?>appassesment/lembaga/data_lembaga/'+data[i].id_personil+'" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-binoculars"></i> Detail</a></li>'+' '+
									//	'<li role="presentation"><a href="javascript:;" class="btn btn-secondary pull-left item_cetak" data="'+data[i].id_anggota+'" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-file-pdf-o"></i> Cetak CV</a></li>'+' '+
									'</ul>'+
								'</td></div>'+
                                '<td>'+data[i].kd_personil+'</td>'+
                                '<td>'+data[i].nama_personil+' <br/> NIP. '+data[i].nip_personil+'</td>'+
                                '<td>'+data[i].pangkat+' <br/> '+data[i].jabatan+'</td>'+
								'</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }

		//GET UPDATE
		$('#show_data').on('click','.item_edit',function(){
            var id_personil =$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('appassesment/lembaga/get_lembaga')?>",
                dataType : "JSON",
                data : {id_personil:id_personil},
                success: function(data){
                	$.each(data,function(kd_personil, nama_personil, nip_personil, pangkat, jabatan){
                    	$('#ModalaEdit').modal('show');
						$('[name="id_personil_edit"]').val(data.id_personil);
						$('[name="kd_personil_edit"]').val(data.kd_personil);
						$('[name="nama_personil_edit"]').val(data.nama_personil);
						$('[name="nip_personil_edit"]').val(data.nip_personil);
						$('[name="pangkat_edit"]').val(data.pangkat);
						$('[name="jabatan_edit"]').val(data.jabatan);
            		});
                }
            });
            return false;
        });

		//GET HAPUS
		$('#show_data').on('click','.item_hapus',function(){
            var id_personil	=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('appassesment/lembaga/get_lembaga')?>",
                dataType : "JSON",
                data : {id_personil:id_personil},
                success: function(data){
                	$.each(data,function(kd_personil, nama_personil, nip_personil, pangkat, jabatan){
            $('#ModalHapus').modal('show');
            $('[name="id_personil"]').val(id_personil);
			$('[name="nama_personil_hapus"]').val(data.nama_personil);
			$('[name="jabatan_hapus"]').val(data.jabatan);
        });
                }
            });
            return false;
        });
				
		//SIMPAN LEMBAGA
		$('#btn_simpan').on('click',function(){
            var id_personil		=$('#id_personil').val();
            var kd_personil		=$('#kd_personil').val();
            var nama_personil	=$('#nama_personil').val();
            var nip_personil	=$('#nip_personil').val();
            var pangkat			=$('#pangkat').val();
            var jabatan			=$('#jabatan').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('appassesment/lembaga/simpan_lembaga')?>",
                dataType : "JSON",
                data : {id_personil:id_personil , kd_personil:kd_personil, nama_personil:nama_personil, nip_personil:nip_personil, pangkat:pangkat, jabatan:jabatan},
                success: function(data){
                    $('[name="id_personil"]').val("");
                    $('[name="kd_personil"]').val("");
                    $('[name="nama_personil"]').val("");
                    $('[name="nip_personil"]').val("");
                    $('[name="pangkat"]').val("");
                    $('[name="jabatan"]').val("");
                    $('#ModalaAdd').modal('hide');
                    tampil_data();
                }
            });
            return false;
        });
		
        //UPDATE LEMBAGA
		$('#btn_update').on('click',function(){
            var id_personil		=$('#id_personil2').val();
            var kd_personil		=$('#kd_personil2').val();
            var nama_personil		=$('#nama_personil2').val();
            var nip_personil		=$('#nip_personil2').val();
            var pangkat			=$('#pangkat2').val();
            var jabatan			=$('#jabatan2').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('appassesment/lembaga/update_lembaga')?>",
                dataType : "JSON",
                data : {id_personil:id_personil , kd_personil:kd_personil, nama_personil:nama_personil, nip_personil:nip_personil, pangkat:pangkat, jabatan:jabatan},
                success: function(data){
                    $('[name="id_personil_edit"]').val("");
                    $('[name="kd_personil_edit"]').val("");
                    $('[name="nama_personil_edit"]').val("");
                    $('[name="nip_personil_edit"]').val("");
                    $('[name="pangkat_edit"]').val("");
                    $('[name="jabatan_edit"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data();
                }
            });
            return false;
        });
			
        //HAPUS LEMBAGA
        $('#btn_hapus').on('click',function(){
            var id_personil =$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('appassesment/lembaga/hapus_lembaga')?>",
            dataType : "JSON",
                    data : {id_personil: id_personil},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_data();
                    }
                });
                return false;
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
			
			
			
	});
</script>
