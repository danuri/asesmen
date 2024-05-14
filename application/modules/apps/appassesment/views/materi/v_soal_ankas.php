<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">Analisa Kasus</h3>
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
						<li role="presentation"><a role="menuitem" class="btn btn-secondary pull-left" tabindex="-1" style="cursor:pointer;" href="#" data-toggle="modal" data-target="#ModalaAdd"> <i class="glyphicon glyphicon-plus"></i> Tambah Soal</a></li>
					</ul>
				</div>
				&nbsp; Daftar Soal Analisa Kasus
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
				<div class="table-responsive">
					<table width="100%" class="table table-striped table-bordered table-hover" id="myDataTable">
						<thead>
						<tr>
							<th width="20px">No.</th>
							<th width="20px">Id Ankas</th>
							<th width="500px">Wacana</th>
							<th width="200px">Dipergunakan</th>
							<th width="100px">Tgl. Update</th>
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


<!-- MODAL ADD -->
    <div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="row modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3 class="modal-title" id="myModalLabel">Tambah Soal Analisa Kasus</h3>
				</div>
				<form class="form-horizontal">
					<div class="modal-body">
							<div class="panel panel-primary">
								<div class="panel-body">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label class="control-label col-xs-3">Id Materi</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="id_materi" id="id_materi" required>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Wacana</label>
											<div class="col-xs-9">
												<textarea class="form-control" name="wacana" id="wacana" required></textarea>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Pertanyaan 1</label>
											<div class="col-xs-9">
												<textarea class="form-control" name="tanya_ankas1" id="tanya_ankas1" required></textarea>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Pertanyaan 2</label>
											<div class="col-xs-9">
												<textarea class="form-control" name="tanya_ankas2" id="tanya_ankas2" required></textarea>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Pertanyaan 3</label>
											<div class="col-xs-9">
												<textarea class="form-control" name="tanya_ankas3" id="tanya_ankas3" required></textarea>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Pertanyaan 4</label>
											<div class="col-xs-9">
												<textarea class="form-control" name="tanya_ankas4" id="tanya_ankas4" required></textarea>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Peruntukan</label>
											<div class="col-xs-9">
												<textarea class="form-control" name="digunakan" id="digunakan" required></textarea>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Keterangan</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="ket" id="ket" required>
													<option>- pilih -</option>
													<option value="Y">Aktif</option>
													<option value="N">Non Aktif</option>
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
        <div class="modal-dialog modal-lg">
            <div class="row modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3 class="modal-title" id="myModalLabel">Edit Soal Analisa Kasus</h3>
				</div>
				<form class="form-horizontal">
					<div class="modal-body">
						<div class="panel panel-primary">
							<div class="panel-body">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label class="control-label col-xs-3">Id Materi</label>
											<div class="col-xs-9">
												<input type="hidden" class="form-control" name="id_ankas_edit" id="id_ankas2">
												<input type="text" class="form-control" name="id_materi_edit" id="id_materi2" required>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Wacana</label>
											<div class="col-xs-9">
												<textarea autofocus class="form-control" name="wacana_edit" id="wacana2" required></textarea>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Pertanyaan 1</label>
											<div class="col-xs-9">
												<textarea autofocus class="form-control" name="tanya_ankas1_edit" id="tanya_ankas12" required></textarea>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Pertanyaan 2</label>
											<div class="col-xs-9">
												<textarea autofocus class="form-control" name="tanya_ankas2_edit" id="tanya_ankas22" required></textarea>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Pertanyaan 3</label>
											<div class="col-xs-9">
												<textarea autofocus class="form-control" name="tanya_ankas3_edit" id="tanya_ankas32" required></textarea>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Pertanyaan 4</label>
											<div class="col-xs-9">
												<textarea autofocus class="form-control" name="tanya_ankas4_edit" id="tanya_ankas42" required></textarea>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Peruntukan</label>
											<div class="col-xs-9">
												<textarea class="form-control" name="digunakan_edit" id="digunakan2" required></textarea>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Keterangan</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="ket_edit" id="ket2" required>
													<option>- pilih -</option>
													<option value="Y">Aktif</option>
													<option value="N">Non Aktif</option>
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
        <div class="modal-dialog modal-lg" role="document">
            <div class="row modal-content">
                <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Soal Ankas</h4>
                </div>
                <form class="form-horizontal">
				<div class="modal-body">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="row">
									<input type="hidden" name="id_ankas" id="textkode" value="">
									<div class="alert alert-danger"><p>Apakah Anda yakin mau menghapus Soal Ankas ini ?</p></div>
										<div class="form-group">
											<label class="control-label col-xs-3">Wacana</label>
											<div class="col-xs-9">
												<input type="hidden" class="form-control" name="id_ankas" id="id_ankas">
												<textarea autofocus class="form-control" name="wacana_hapus" id="wacana3" readonly></textarea>
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
                url   : '<?php echo site_url('appassesment/soal/soal_ankas');?>',
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
										'<li role="presentation"><a href="<?php echo base_url('appassesment/soal/detail_soal_ankas/')?>'+data[i].id_ankas+'" class="btn btn-secondary pull-left" role="menuitem" tabindex="-1" style="cursor:pointer;" target="_blank"><i class="fa fa-search"></i> Lihat Soal</a></li>'+' '+
										'<li role="presentation"><a href="javascript:;" class="btn btn-secondary pull-left item_edit" data="'+data[i].id_ankas+'" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-pencil"></i> Edit</a></li>'+' '+
										'<li role="presentation"><a href="javascript:;" class="btn btn-secondary pull-left item_hapus" data="'+data[i].id_ankas+'" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-trash"></i> Hapus</a></li>'+' '+
									//	'<li role="presentation"><a href="<?php echo site_url('module/appassesment/materi/get_detail');?>" class="btn btn-secondary pull-left " data="'+data[i].id_materi+'" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-binoculars"></i> Detail</a></li>'+' '+
									//	'<li role="presentation"><a href="javascript:;" class="btn btn-secondary pull-left item_cetak" data="'+data[i].id_anggota+'" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-file-pdf-o"></i> Cetak CV</a></li>'+' '+
									'</ul>'+
								'</td></div>'+
                                '<td>'+data[i].id_materi+'</td>'+
                                '<td>'+data[i].wacana+' ....... <button><a href="<?php echo base_url('appassesment/soal/detail_soal_ankas/')?>'+data[i].id_ankas+'" target="_blank">readmore</a></button></td>'+
								/*
                                '<td>'+data[i].tanya_ankas1+'</td>'+
                                '<td>'+data[i].tanya_ankas2+'</td>'+
                                '<td>'+data[i].tanya_ankas3+'</td>'+
                                '<td>'+data[i].tanya_ankas4+'</td>'+
								*/
                                '<td><b>'+data[i].digunakan+'</b></td>'+
                                '<td><b>'+data[i].ket+'</b> ||'+data[i].last_update+'</td>'+
								'</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }

		//GET UPDATE
		$('#show_data').on('click','.item_edit',function(){
            var id_ankas =$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('appassesment/soal/get_soal_ankas')?>",
                dataType : "JSON",
                data : {id_ankas:id_ankas},
                success: function(data){
                	$.each(data,function(id_materi, wacana, tanya_ankas1, tanya_ankas2, tanya_ankas3, tanya_ankas4, digunakan, ket){
                    	$('#ModalaEdit').modal('show');
						$('[name="id_ankas_edit"]').val(data.id_ankas);
						$('[name="id_materi_edit"]').val(data.id_materi);
						$('[name="wacana_edit"]').val(data.wacana);
						$('[name="tanya_ankas1_edit"]').val(data.tanya_ankas1);
						$('[name="tanya_ankas2_edit"]').val(data.tanya_ankas2);
						$('[name="tanya_ankas3_edit"]').val(data.tanya_ankas3);
						$('[name="tanya_ankas4_edit"]').val(data.tanya_ankas4);
						$('[name="digunakan_edit"]').val(data.digunakan);
						$('[name="ket_edit"]').val(data.ket);
            		});
                }
            });
            return false;
        });

		//GET HAPUS
		$('#show_data').on('click','.item_hapus',function(){
            var id_ankas	=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('appassesment/soal/get_soal_ankas')?>",
                dataType : "JSON",
                data : {id_ankas:id_ankas},
                success: function(data){
                	$.each(data,function(id_materi, wacana, tanya_ankas1, tanya_ankas2, tanya_ankas3, tanya_ankas4, digunakan, ket){
            $('#ModalHapus').modal('show');
            $('[name="id_ankas"]').val(id_ankas);
			$('[name="wacana_hapus"]').val(data.wacana);
        });
                }
            });
            return false;
        });
				
		//SIMPAN SOAL ANKAS
		$('#btn_simpan').on('click',function(){
            var id_materi		=$('#id_materi').val();
            var wacana			=$('#wacana').val();
            var tanya_ankas1	=$('#tanya_ankas1').val();
            var tanya_ankas2	=$('#tanya_ankas2').val();
            var tanya_ankas3	=$('#tanya_ankas3').val();
            var tanya_ankas4	=$('#tanya_ankas4').val();
            var digunakan		=$('#digunakan').val();
            var ket				=$('#ket').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('appassesment/soal/simpan_ankas')?>",
                dataType : "JSON",
                data : {id_materi:id_materi, wacana:wacana, tanya_ankas1:tanya_ankas1, tanya_ankas2:tanya_ankas2, tanya_ankas3:tanya_ankas3, tanya_ankas4:tanya_ankas4, digunakan:digunakan, ket:ket},
                success: function(data){
                    $('[name="id_materi"]').val("");
                    $('[name="wacana"]').val("");
                    $('[name="tanya_ankas1"]').val("");
                    $('[name="tanya_ankas2"]').val("");
                    $('[name="tanya_ankas3"]').val("");
                    $('[name="tanya_ankas4"]').val("");
                    $('[name="digunakan"]').val("");
                    $('[name="ket"]').val("");
                    $('#ModalaAdd').modal('hide');
                    tampil_data();
                }
            });
            return false;
        });
		
        //UPDATE SOAL ANKAS
		$('#btn_update').on('click',function(){
            var id_ankas		=$('#id_ankas2').val();
            var id_materi		=$('#id_materi2').val();
            var wacana			=$('#wacana2').val();
            var tanya_ankas1	=$('#tanya_ankas12').val();
            var tanya_ankas2	=$('#tanya_ankas22').val();
            var tanya_ankas3	=$('#tanya_ankas32').val();
            var tanya_ankas4	=$('#tanya_ankas42').val();
            var digunakan		=$('#digunakan2').val();
            var ket				=$('#ket2').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('appassesment/soal/update_ankas')?>",
                dataType : "JSON",
                data : {id_ankas:id_ankas, id_materi:id_materi, wacana:wacana, tanya_ankas1:tanya_ankas1, tanya_ankas2:tanya_ankas2, tanya_ankas3:tanya_ankas3, tanya_ankas4:tanya_ankas4, digunakan:digunakan, ket:ket},
                success: function(data){
                    $('[name="id_ankas_edit"]').val("");
                    $('[name="id_materi_edit"]').val("");
                    $('[name="wacana_edit"]').val("");
                    $('[name="tanya_ankas1_edit"]').val("");
                    $('[name="tanya_ankas2_edit"]').val("");
                    $('[name="tanya_ankas3_edit"]').val("");
                    $('[name="tanya_ankas4_edit"]').val("");
                    $('[name="digunakan_edit"]').val("");
                    $('[name="ket_edit"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data();
                }
            });
            return false;
        });
			
        //HAPUS SOAL ANKAS
        $('#btn_hapus').on('click',function(){
            var id_ankas =$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('appassesment/soal/hapus_ankas')?>",
            dataType : "JSON",
                    data : {id_ankas: id_ankas},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_data();
                    }
                });
                return false;
            });
			
	});
</script>
