<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">Alat Tes Psikometri Situational Judgement Test</h3>
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
				&nbsp; Daftar Soal Situational Judgement Test
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
				<div class="table-responsive">
					<table width="100%" class="table table-striped table-bordered table-hover" id="myDataTable">
						<thead>
						<tr>
							<th>No.</th>
							<th>Paket</th>
							<th>Soal</th>
							<th>Opsi A</th>
							<th>Opsi B</th>
							<th>Opsi c</th>
							<th>Opsi D</th>
							<th>Opsi E</th>
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
					<h3 class="modal-title" id="myModalLabel">Tambah Soal PAPI Kostick</h3>
				</div>
				<form class="form-horizontal">
					<div class="modal-body">
							<div class="panel panel-primary">
								<div class="panel-body">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label class="control-label col-xs-3">Soal A</label>
											<div class="col-xs-9">
												<textarea autofocus class="form-control" name="soal_papi_a" id="soal_papi_a" placeholder="Masukan Soal A" required></textarea>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Soal B</label>
											<div class="col-xs-9">
												<textarea autofocus class="form-control" name="soal_papi_b" id="soal_papi_b" placeholder="Masukan Soal B" required></textarea>
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
					<h3 class="modal-title" id="myModalLabel">Edit Soal PAPI Kostick</h3>
				</div>
				<form class="form-horizontal">
					<div class="modal-body">
						<div class="panel panel-primary">
							<div class="panel-body">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label class="control-label col-xs-3">Soal A</label>
											<div class="col-xs-9">
												<input type="hidden" class="form-control" name="id_papi_edit" id="id_papi2">
												<textarea autofocus class="form-control" name="soal_papi_a_edit" id="soal_papi_a2" placeholder="Masukan Soal A" required></textarea>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Soal B</label>
											<div class="col-xs-9">
												<textarea autofocus class="form-control" name="soal_papi_b_edit" id="soal_papi_b2" placeholder="Masukan Soal B" required></textarea>
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
									<input type="hidden" name="id_papi" id="textkode" value="">
									<div class="alert alert-danger"><p>Apakah Anda yakin mau menghapus Data Alat Tes ini ?</p></div>
										<div class="form-group">
											<label class="control-label col-xs-3">Soal A</label>
											<div class="col-xs-9">
												<input type="hidden" class="form-control" name="id_papi" id="id_papi">
												<textarea autofocus class="form-control" name="soal_papi_a_hapus" id="soal_papi_a3" readonly></textarea>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Soal B</label>
											<div class="col-xs-9">
												<textarea autofocus class="form-control" name="soal_papi_b_hapus" id="soal_papi_b3" readonly></textarea>
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
                url   : '<?php echo site_url('appassesment/soal/soal_sjt');?>',
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
										'<li role="presentation"><a href="javascript:;" class="btn btn-secondary pull-left item_edit" data="'+data[i].id_sjt+'" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-pencil"></i> Edit</a></li>'+' '+
										'<li role="presentation"><a href="javascript:;" class="btn btn-secondary pull-left item_hapus" data="'+data[i].id_sjt+'" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-trash"></i> Hapus</a></li>'+' '+
										'<li role="presentation"><a href="<?php echo site_url('module/appassesment/materi/get_detail');?>" class="btn btn-secondary pull-left " data="'+data[i].id_materi+'" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-binoculars"></i> Detail</a></li>'+' '+
									//	'<li role="presentation"><a href="javascript:;" class="btn btn-secondary pull-left item_cetak" data="'+data[i].id_anggota+'" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-file-pdf-o"></i> Cetak CV</a></li>'+' '+
									'</ul>'+
								'</td></div>'+
                                '<td>'+data[i].ket+'</td>'+
                                '<td>'+data[i].soal_sjt+'</td>'+
                                '<td>'+data[i].opsi_a+'</td>'+
                                '<td>'+data[i].opsi_b+'</td>'+
                                '<td>'+data[i].opsi_c+'</td>'+
                                '<td>'+data[i].opsi_d+'</td>'+
                                '<td>'+data[i].opsi_e+'</td>'+
                                '<td>'+data[i].last_update+'</td>'+
								'</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }

		//GET UPDATE
		$('#show_data').on('click','.item_edit',function(){
            var id_papi =$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('appassesment/soal/get_soal_papi')?>",
                dataType : "JSON",
                data : {id_papi:id_papi},
                success: function(data){
                	$.each(data,function(soal_papi_a, soal_papi_b){
                    	$('#ModalaEdit').modal('show');
						$('[name="id_papi_edit"]').val(data.id_papi);
						$('[name="soal_papi_a_edit"]').val(data.soal_papi_a);
						$('[name="soal_papi_b_edit"]').val(data.soal_papi_b);
            		});
                }
            });
            return false;
        });

		//GET HAPUS
		$('#show_data').on('click','.item_hapus',function(){
            var id_papi	=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('appassesment/soal/get_soal_papi')?>",
                dataType : "JSON",
                data : {id_papi:id_papi},
                success: function(data){
                	$.each(data,function(soal_papi_a, soal_papi_b){
            $('#ModalHapus').modal('show');
            $('[name="id_papi"]').val(id_papi);
			$('[name="soal_papi_a_hapus"]').val(data.soal_papi_a);
			$('[name="soal_papi_b_hapus"]').val(data.soal_papi_b);
        });
                }
            });
            return false;
        });
				
		//SIMPAN SOAL PAPI
		$('#btn_simpan').on('click',function(){
            var id_papi		=$('#id_papi').val();
            var soal_papi_a	=$('#soal_papi_a').val();
            var soal_papi_b	=$('#soal_papi_b').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('appassesment/soal/simpan_papi')?>",
                dataType : "JSON",
                data : {id_papi:id_papi , soal_papi_a:soal_papi_a, soal_papi_b:soal_papi_b},
                success: function(data){
                    $('[name="id_papi"]').val("");
                    $('[name="soal_papi_a"]').val("");
                    $('[name="soal_papi_b"]').val("");
                    $('#ModalaAdd').modal('hide');
                    tampil_data();
                }
            });
            return false;
        });
		
        //UPDATE SOAL PAPI
		$('#btn_update').on('click',function(){
            var id_papi		=$('#id_papi2').val();
            var soal_papi_a	=$('#soal_papi_a2').val();
            var soal_papi_b	=$('#soal_papi_b2').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('appassesment/soal/update_papi')?>",
                dataType : "JSON",
                data : {id_papi:id_papi , soal_papi_a:soal_papi_a, soal_papi_b:soal_papi_b},
                success: function(data){
                    $('[name="id_papi_edit"]').val("");
                    $('[name="soal_papi_a_edit"]').val("");
                    $('[name="soal_papi_b_edit"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data();
                }
            });
            return false;
        });
			
        //HAPUS SOAL PAPI
        $('#btn_hapus').on('click',function(){
            var id_papi =$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('appassesment/soal/hapus_papi')?>",
            dataType : "JSON",
                    data : {id_papi: id_papi},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_data();
                    }
                });
                return false;
            });
	});
</script>
