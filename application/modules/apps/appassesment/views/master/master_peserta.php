<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-database" aria-hidden="true"></i>&nbsp;  Master Data Peserta</h3>
    </div>
<!-- /.col-lg-12 -->
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
				<!--<div class="btn btn-warning btn-xs pull-right " onclick="history.go(-1); return false;"><i class="fa fa-backward fa-fw"></i> Kembali</div> 
				<div class="dropdown">
				<button class="btn btn-default btn-xs pull-left " type="button" data-toggle="dropdown">
				<i class="fa fa-caret-down fa-fw"></i></button>
					<ul class="dropdown-menu" role="menu">
						<li role="presentation"><a role="menuitem" class="btn btn-secondary pull-left" tabindex="-1" style="cursor:pointer;" href="#" data-toggle="modal" data-target="#ModalaAdd"> <i class="glyphicon glyphicon-plus"></i> Tambah Kegiatan</a></li>
					</ul>
				</div>
				-->
				<i class="fa fa-users" aria-hidden="true"></i>&nbsp; Daftar Peserta
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
				<div class="table-responsive">
					<table width="100%" class="table table-striped table-bordered table-hover" id="myDataTable">
						<thead>
						<tr>
							<th>No.</th>
							<th>Nama</th>
							<th>Jabatan</th>
							<th>Jenjang</th>
							<th>Status</th>
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

<!-- =========================================================================================================================================================== -->

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
											<label class="control-label col-xs-3">NIP</label>
											<div class="col-xs-9">
												<input type="hidden" class="form-control" name="id_peserta_edit" id="id_peserta2">
												<input type="hidden" class="form-control" name="id_kegiatan_edit" id="id_kegiatan2">
												<input type="hidden" class="form-control" name="kd_kegiatan_edit" id="kd_kegiatan2">
												<input type="text" class="form-control" name="nip_edit" id="nip2" placeholder="Masukan NIP" readonly />
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Nama</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="nama_edit" id="nama_2" placeholder="Masukan Nama" readonly />
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Pangkat</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="gol_edit" id="gol2" readonly>
												  <option>- pilih -</option>
												  <option value="Pembina Utama Muda, IV/c">Pembina Utama Muda, IV/c</option>
												  <option value="Pembina Tingkat I, IV/b">Pembina Tingkat I, IV/b</option>
												  <option value="Pembina, IV/a">Pembina, IV/a</option>
												  <option value="Penata Tingkat I, III/d">Penata Tingkat I, III/d</option>
												  <option value="Penata, III/c">Penata, III/c</option>
												  <option value="Penata Muda Tingkat I, III/b">Penata Muda Tingkat I, III/b</option>
												  <option value="Penata Muda, III/a">Penata Muda, III/a</option>
												  <option value="Pengatur Tingkat I, II/d">Pengatur Tingkat I, II/d</option>
												  <option value="Pengatur, II/c">Pengatur, II/c</option>
												  <option value="Pengatur Muda Tingkat I, II/b">Pengatur Muda Tingkat I, II/b</option>
												  <option value="Pengatur Muda, II/a">Pengatur Muda, II/a</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Jabatan</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="jabatan_edit" id="jabatan2" placeholder="Masukan Jabatan" readonly />
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Unit Kerja</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="unker_edit" id="unker2" placeholder="Masukan Unit Kerja" readonly />
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Jenjang</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jenjang_edit" id="jenjang2" required>
												  <option>- pilih -</option>
												  <option value="JPT Madya">JPT Madya</option>
												  <option value="JPT Pratama">JPT Pratama</option>
												  <option value="Administrator">Administrator</option>
												  <option value="Pengawas">Pengawas</option>
												  <option value="JF Madya">JF Madya</option>
												  <option value="JF Muda">JF Muda</option>
												  <option value="JF Pertama">JF Pertama</option>
												  <option value="JF Terampil">JF Terampil</option>
												  <option value="Pelaksana">Pelaksana</option>
												</select>
											</div>
										</div>	
										<div class="form-group">
											<label class="control-label col-xs-3">Status</label>
											<div class="col-xs-9">
											    <select type="dropdown" class="form-control" name="ket_edit" id="ket2">
											      <option>- pilih -</option>
												  <option value="Y">Y</option>
												  <option value="N">N</option>  
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Tahun</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="tahun_edit" id="tahun2" placeholder="Masukan Link Dokumen" readonly />
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


<script type="text/javascript">
    $(document).ready(function(){
		tampil_data();   //pemanggilan fungsi tampil data.
        function tampil_data(){
            $.ajax({
				type  : 'POST',
                url   : '<?php echo site_url('appassesment/master_data/data_master_peserta');?>',
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
										'<li role="presentation"><a href="javascript:;" class="btn btn-secondary pull-left item_edit" data="'+data[i].nip+'" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="glyphicon glyphicon-edit"></i> Edit</a></li>'+' '+
									'</ul>'+
								'</td></div>'+
                                '<td>'+data[i].nama+' <br/> NIP. '+data[i].nip+'</td>'+
                                '<td>'+data[i].jabatan+' <br/><b>pada</b> '+data[i].unker+'</td>'+
                                '<td>'+data[i].gol+' <br/><b>'+data[i].jenjang+'</b></td>'+
                                '<td>'+data[i].ket+'</td>'+
								'</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }

		//GET UPDATE
		$('#show_data').on('click','.item_edit',function(){
            var nip =$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('appassesment/master_data/get_peserta')?>",
                dataType : "JSON",
                data : {nip:nip},
                success: function(data){
                	$.each(data,function(id_kegiatan, kd_kegiatan, nip, nama, gol, jabatan, unker, jenjang, ket, tahun){
                    	$('#ModalaEdit').modal('show');
						$('[name="id_peserta_edit"]').val(data.id_peserta);
						$('[name="id_kegiatan_edit"]').val(data.id_kegiatan);
						$('[name="kd_kegiatan_edit"]').val(data.kd_kegiatan);
						$('[name="nip_edit"]').val(data.nip);
						$('[name="nama_edit"]').val(data.nama);
						$('[name="gol_edit"]').val(data.gol);
						$('[name="jabatan_edit"]').val(data.jabatan);
						$('[name="unker_edit"]').val(data.unker);
						$('[name="jenjang_edit"]').val(data.jenjang);
						$('[name="ket_edit"]').val(data.ket);
						$('[name="tahun_edit"]').val(data.tahun);
            		});
                }
            });
            return false;
        });

        //UPDATE KEGIATAN
		$('#btn_update').on('click',function(){
            var nip		    =$('#nip2').val();
            //var jenjang	=$('#jenjang2').val();
            var ket			=$('#ket2').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('appassesment/master_data/update_peserta')?>",
                dataType : "JSON",
                data : {nip:nip, ket:ket}, // jenjang:jenjang,
                success: function(data){
                    $('[name="nip_edit"]').val("");
                //    $('[name="jenjang_edit"]').val("");
                    $('[name="ket_edit"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data();
                }
            });
            redirect($_SERVER['HTTP_REFERER']);
            return false;
        });
			
	});
</script>
