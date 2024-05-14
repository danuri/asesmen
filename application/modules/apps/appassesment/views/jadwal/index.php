<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-book" aria-hidden="true"></i>&nbsp; Jadwal LGD dan Wawancara</h3>
    </div>
<!-- /.col-lg-12 -->
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
				<div class="dropdown">
				<button class="btn btn-default btn-xs pull-left " type="button" data-toggle="dropdown">
				<i class="fa fa-caret-down fa-fw"></i></button>
					<ul class="dropdown-menu" role="menu">
						<li role="presentation"><a role="menuitem" class="btn btn-secondary pull-left" tabindex="-1" style="cursor:pointer;" href="#" data-toggle="modal" data-target="#ModalaAdd"> <i class="glyphicon glyphicon-wrench"></i> Buat Jadwal LGD & Wawancara</a></li>
						 <li><a href="<?php echo base_url();?>appassesment/jadwal_peserta/cetak_jadwal_peserta/" target="_blank" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="glyphicon glyphicon-print"></i>&nbsp; Cetak Jadwal Peserta</a></li>
						 <li><a href="<?php echo base_url();?>appassesment/jadwal_peserta/cetak_jadwal_assessor/" target="_blank" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="glyphicon glyphicon-print"></i>&nbsp; Cetak Jadwal Assessor</a></li>
					</ul>
				</div>
				&nbsp; Jadwal Assessi & Assessor
            </div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								<i class="fa fa-weixin" aria-hidden="true"></i>&nbsp; Wawancara
							</div>
							<div class="panel-body">
								<div class="table-responsive">
									<table width="100%" class="table table-bordered table-hover table-striped" id="myDataTableWWCR">
										<thead>
											<th>Assessi</th>
											<th>Jadwal</th>
										</thead>
										<tbody>
							<?php foreach ($pic_wwcr->result() as $key)	{ ?>
											<tr>
												<td style="width:50%;">
                    								<div class="dropdown">
                    									<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" style="width:100%;text-align:left;"> <?php echo $key->nama; ?> <br/>NIP. <?php echo $key->nip; ?></button>
                    									<ul class="dropdown-menu">
                    									  <li><a href="<?php echo base_url();?>appassesment/peserta/lihat_drh/<?php echo $key->id_peserta; ?>" target="_blank" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-file-pdf-o"></i>&nbsp; Cetak DRH</a></li>
                    									  <li><a href="<?php echo base_url();?>appassesment/peserta/lihat_ci/<?php echo $key->id_reg; ?>" target="_blank" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-file-pdf-o"></i>&nbsp; Cetak CI</a></li>
                    									  <li><a href="<?php echo base_url();?>appassesment/peserta/lihat_qkom/<?php echo $key->id_reg; ?>" target="_blank" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-file-pdf-o"></i>&nbsp; Cetak Q-Kom</a></li>
                    									  <li><a href="<?php echo base_url();?>appassesment/peserta/lihat_ankas/<?php echo $key->id_reg; ?>" target="_blank" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-file-pdf-o"></i>&nbsp; Cetak Ankas</a></li>
                    									  <li><a href="<?php echo base_url();?>appassesment/jadwal_peserta/lihat_apm_dua/" data-toggle="modal" data-target="#ModalaAPM2" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-calculator"></i>&nbsp; Lihat APM Set-2</a></li>
														  <li><a href="" role="menuitem" data-toggle="modal" data-target="#ModalaCfit"><i class="fa fa-calculator"></i>&nbsp; Lihat CFIT</a></li>
														 <li><a href="<?php echo base_url();?>appassesment/peserta/lihat_papi/<?php echo $key->id_reg; ?>" target="_blank" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-file-pdf-o"></i>&nbsp; Lihat PAPI</a></li>
                    									</ul>
                    								</div>								
												</td>
												<td style="width:50%;"><b>Tgl. Psiko :</b> <?php echo $key->tgl_psikometri; ?> || <?php echo $key->sesi; ?> <br/>  <b>Tgl. Wwcr :</b> <?php echo $key->tgl_wwcr; ?><br/><b>Assessor :</b> <?php echo $key->nama_personil; ?> </td>
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
								<i class="fa fa-table" aria-hidden="true"></i>&nbsp; LGD
							</div>
							<div class="panel-body">
								<div class="table-responsive">
									<table width="100%" class="table table-bordered table-hover table-striped" id="myDataTableLGD">
										<thead>
											<th>Assessi</th>
											<th>Jadwal</th>
										</thead>
										<tbody>
							<?php foreach ($pic_lgd->result() as $key)	{ ?>
											<tr>
												
												<td style="width:50%;">
                    								<div class="dropdown">
                    									<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" style="width:100%;text-align:left;"> <?php echo $key->nama; ?> <br/>NIP. <?php echo $key->nip; ?></button>
                    									<ul class="dropdown-menu">
                    									  <li><a href="<?php echo base_url();?>appassesment/peserta/lihat_ci/<?php echo $key->id_reg; ?>" target="_blank" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-file-pdf-o"></i>&nbsp; Cetak CI</a></li>
                    									  <li><a href="<?php echo base_url();?>appassesment/peserta/lihat_qkom/<?php echo $key->id_reg; ?>" target="_blank" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-file-pdf-o"></i>&nbsp; Cetak Q-Kom</a></li>
                    									  <li><a href="<?php echo base_url();?>appassesment/peserta/lihat_ankas/<?php echo $key->id_reg; ?>" target="_blank" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-file-pdf-o"></i>&nbsp; Cetak Ankas</a></li>
                    									  <li><a href="<?php echo base_url();?>appassesment/jadwal_peserta/lihat_apm_dua/" data-toggle="modal" data-target="#ModalaAPM2" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-calculator"></i>&nbsp; Lihat APM Set-2</a></li>
                    									  <li><a href="<?php echo base_url();?>appassesment/jadwal_peserta/lihat_cfit/" data-toggle="modal" data-target="#ModalaCfit" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-calculator"></i>&nbsp; Lihat CFIT</a></li>
														  <li><a href="<?php echo base_url();?>appassesment/peserta/lihat_papi/<?php echo $key->id_reg; ?>" target="_blank" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-file-pdf-o"></i>&nbsp; Lihat PAPI</a></li>
                    									</ul>
                    								</div>								
												</td>
												<td style="width:50%;"><?php echo $key->batch; ?> || <?php echo $key->kelompok; ?> <br/>  <b>Tgl. LGD :</b> <?php echo $key->tgl_lgd; ?><br/><b>Assessor :</b> <?php echo $key->nama_personil; ?> </td>
											</tr>
							<?php } ?>	
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

<!-- MODAL APM2 -->
    <div class="modal fade" id="ModalaAPM2" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="row modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3 class="modal-title" id="myModalLabel">Hasil APM Set-2</h3>
				</div>
				<form class="form-horizontal">
					<div class="modal-body">
						<table width="100%" class="table table-bordered table-hover table-striped" id="myDataTableAPM">
							<thead>
								<tr>
									<th>Nama</th>
									<th>Nilai</th>
									<th>RS</th>
									<th>SS</th>
									<th>Ket</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach ($apm_dua->result() as $key)	{ ?>
								<tr>
									<td><?php echo $key->nama; ?> <br/> NIP. <?php echo $key->nip; ?> </td>
									<td><?php echo $key->nilai; ?></td>
									<td><?php echo $key->rs; ?></td>
									<td><?php echo $key->ss; ?></td>
									<td><?php echo $key->ket; ?></td>
								</tr>
							<?php } ?>
							</tbody>
						</table>
						<div class="modal-footer">
							<button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
						</div>
					</div>
				</form>
			</div>
        </div>
    </div>
<!-- CFIT -->
    <div class="modal fade" id="ModalaCfit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="row modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3 class="modal-title" id="myModalLabel">Hasil CFIT</h3>
				</div>
				<form class="form-horizontal">
					<div class="modal-body">
						<table width="100%" class="table table-bordered table-hover table-striped" id="myDataTableCfit">
							<thead>
								<tr>
									<th>Nama</th>
									<th>Sub Tes 1</th>
									<th>Sub Tes 2</th>
									<th>Sub Tes 3</th>
									<th>Sub Tes 4</th>
									<th>Total</th>
									<th>Norma IQ</th>
									<th>Kategori</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($cfit->result() as $key) { ?>
								<tr>
									<td><b><?php echo $key->nama; ?></b><br/>NIP. <?php echo $key->nip; ?></td>
									<td><?php echo $key->nilai_cfit_1; ?></td>
									<td><?php echo $key->nilai_cfit_2; ?></td>
									<td><?php echo $key->nilai_cfit_3; ?></td>
									<td><?php echo $key->nilai_cfit_4; ?></td>
									<td><?php echo $key->total_nilai_cfit; ?></td>
									<td><?php echo $key->norma_iq; ?></td>
									<td><?php echo $key->kategori; ?></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
						<div class="modal-footer">
							<button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
						</div>
					</div>
				</form>
			</div>
        </div>
    </div>
	


<!-- MODAL VIEW -->
    <div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="row modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3 class="modal-title" id="myModalLabel">Buat Jadwal LGD & Wawancara</h3>
				</div>
				<form class="form-horizontal">
					<div class="modal-body">
						<div class="panel-body">
							<div class="table-responsive">
								<table width="100%" class="table table-striped table-bordered table-hover" id="myDataTable">
									<thead>
									<tr>
										<th>Aksi.</th>
										<th>Assessi</th>
										<th>Jabatan</th>
										<th>Assessor</th>
									</tr>
									</thead>
									<tbody id="show_data">
									</tbody>
								</table>
							</div>
						</div>
						<div class="modal-footer">
							<button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
						</div>
					</div>
				</form>
			</div>
        </div>
    </div>
<!--END MODAL VIEW-->

<!-- MODAL EDIT -->
    <div class="modal fade" id="ModalaSett" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="row modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3 class="modal-title" id="myModalLabel">Buat Jadwal</h3>
				</div>
				<form class="form-horizontal" action="<?php echo base_url('appassesment/jadwal_peserta/simpan_jadwal');?>" method="post">
					<div class="modal-body">
						<div class="panel panel-primary">
							<div class="panel-body">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label class="control-label col-xs-3">Nama</label>
											<div class="col-xs-9">
												<input type="hidden" class="form-control" name="id_jadwal" id="id_jadwal" />
												<input type="hidden" class="form-control" name="id_peserta" id="id_peserta" />
												<input type="text" class="form-control" name="nama" id="nama" readonly />
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">NIP</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="nip" id="nip" readonly />
											</div>
										</div>
									</div>	
								</div>	
							</div>	
						</div>
						<div class="panel panel-primary">
							<div class="panel-body">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label class="control-label col-xs-3">Jadwal Psikometri</label>
											<div class="col-xs-9">
												<input type="datetime-local" class="form-control" name="tgl_psikometri" id="tgl_psikometri" />
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Sesi</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="sesi" id="sesi" style="width:100%;">
												  <option>- pilih SESI -</option>
												  <option value="SESI 1">SESI 1</option>
												  <option value="SESI 2">SESI 2</option>
												  <option value="SESI 3">SESI 3</option>
												  <option value="SESI 4">SESI 4</option>
												</select>
											</div>
										</div>
									</div>	
								</div>
							</div>	
						</div>	
						<div class="panel panel-primary">
							<div class="panel-body">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label class="control-label col-xs-3">Jadwal LGD</label>
											<div class="col-xs-9">
												<input type="datetime-local" class="form-control" name="tgl_lgd" id="tgl_lgd" />
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Batch</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="batch" id="batch" style="width:100%;">
												  <option>- pilih Batch -</option>
												  <option value="Batch 1">Batch 1</option>
												  <option value="Batch 2">Batch 2</option>
												  <option value="Batch 3">Batch 3</option>
												  <option value="Batch 4">Batch 4</option>
 												<option value="Batch 5">Batch 5</option>
 												<option value="Batch 6">Batch 6</option>
 												<option value="Batch 7">Batch 7</option>
 												<option value="Batch 8">Batch 8</option>
 												<option value="Batch 9">Batch 9</option>
												<option value="Batch 10">Batch 10</option>

												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Kelompok</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="kelompok" id="kelompok" style="width:100%;">
												  <option>- pilih Kelompok -</option>
												  <option value="Kelompok 1">Kelompok 1</option>
												  <option value="Kelompok 2">Kelompok 2</option>
												  <option value="Kelompok 3">Kelompok 3</option>
												  <option value="Kelompok 4">Kelompok 4</option>
												  <option value="Kelompok 5">Kelompok 5</option>
												  <option value="Kelompok 6">Kelompok 6</option>
												  <option value="Kelompok 7">Kelompok 7</option>
												<option value="Kelompok 8">Kelompok 8</option>
												<option value="Kelompok 9">Kelompok 9</option>
												<option value="Kelompok 10">Kelompok 10</option>

												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Assessor</label>
											<div class="col-xs-9">
													<select type="dropdown" class="form-control" name="kd_personil_lgd" id="kd_personil_lgd"  style="width:100%;">
													  <option>- pilih Assessor -</option>
													<?php foreach ($pic->result() as $key){ ?>
													  <option value="<?php echo $key->kd_personil; ?>"><?php echo $key->nama_personil; ?></option>
													<?php } ?>
													</select>
											</div>
										</div>
									</div>	
								</div>
							</div>	
						</div>	
						<div class="panel panel-primary">
							<div class="panel-body">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label class="control-label col-xs-3">Jadwal Wawancara</label>
											<div class="col-xs-9">
												<input type="datetime-local" class="form-control" name="tgl_wwcr" id="tgl_wwcr" />
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Assessor</label>
											<div class="col-xs-9">
													<select type="dropdown" class="form-control" name="kd_personil_wwcr" id="kd_personil_wwcr"  style="width:100%;">
													  <option>- pilih Assessor -</option>
													<?php foreach ($pic->result() as $key){ ?>
													  <option value="<?php echo $key->kd_personil; ?>"><?php echo $key->nama_personil; ?></option>
													<?php } ?>
													</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Keterangan</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="ket" id="ket" style="width:100%;">
												  <option>- pilih -</option>
												  <option value="Y">Aktif</option>
												  <option value="N">Non-Aktif</option>
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



<script type="text/javascript">

		//GET UPDATE
		$('#apm_dua').on('click','.item_edit',function(){
            var id_peserta =$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('appassesment/jadwal_peserta/lihat_apm_dua')?>",
                dataType : "JSON",
                data : {id_peserta:id_peserta},
                success: function(data){
                	$.each(data,function(nama, nip, nilai, rs, ss, ket){
                    	$('#ModalaAPM2').modal('show');
						$('[name="nama"]').val(data.nama);
            		});
                }
            });
            return false;
        });




    $(document).ready(function () {
        $('#myDataTableAPM').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
	});	

    $(document).ready(function () {
        $('#myDataTableWWCR').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
	});	

    $(document).ready(function () {
        $('#myDataTableLGD').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
	});	
	
    $(document).ready(function () {
        $('#myDataTableCfit').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
	});	

	

    $(document).ready(function(){
		tampil_data();   //pemanggilan fungsi tampil data.
        function tampil_data(){
            $.ajax({
				type  : 'POST',
                url   : '<?php echo site_url('appassesment/jadwal_peserta/data_peserta');?>',
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
										'<li role="presentation"><a href="javascript:;" class="btn btn-secondary pull-left item_edit" data="'+data[i].id_peserta+'" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="glyphicon glyphicon-edit"></i> Setting</a></li>'+' '+
									'</ul>'+
								'</td></div>'+
                                '<td style="width:40%;">'+data[i].nama+' <br/> NIP. <b>'+data[i].nip+'</b> <br/>'+data[i].gol+'  <br/> <b>'+data[i].jenjang+'</b></td>'+
                                '<td style="width:80%;">'+data[i].jabatan+' <br/> <b> pada </b>'+data[i].unker+'</td>'+
                                '<td style="width:80%;">LGD : <b>'+data[i].kd_personil_lgd+'</b> <br/> WWCR : <b>'+data[i].kd_personil_wwcr+'</b></td>'+
								'</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }
	});
	
		//GET UPDATE
		$('#show_data').on('click','.item_edit',function(){
            var id_peserta =$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('appassesment/jadwal_peserta/get_peserta')?>",
                dataType : "JSON",
                data : {id_peserta:id_peserta},
                success: function(data){
                	$.each(data,function(nama, nip, ket){
                    	$('#ModalaSett').modal('show');
						$('[name="id_peserta"]').val(data.id_peserta);
						$('[name="nama"]').val(data.nama);
						$('[name="nip"]').val(data.nip);
            		});
                }
            });
            return false;
        });


		$('#btn_update').on('click',function(){
            var id_jadwal			=$('#id_jadwal').val();
            var id_peserta			=$('#id_peserta').val();
            var nip					=$('#nip').val();
            var nama				=$('#nama').val();
            var tgl_lgd				=$('#tgl_lgd').val();
            var kd_personil_lgd		=$('#kd_personil_lgd').val();
            var batch		        =$('#batch').val();
            var kelompok			=$('#kelompok').val();
            var tgl_wwcr			=$('#tgl_wwcr').val();
            var kd_personil_wwcr	=$('#kd_personil_wwcr').val();
            var ket					=$('#ket').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('appassesment/jadwal_peserta/simpan_jadwal')?>",
                dataType : "JSON",
                data : {id_jadwal:id_jadwal , id_peserta:id_peserta, nip:nip, nama:nama, tgl_lgd:tgl_lgd, kd_personil_lgd:kd_personil_lgd, batch:batch, kelompok:kelompok, tgl_wwcr:tgl_wwcr, kd_personil_wwcr:kd_personil_wwcr, ket:ket},
                success: function(data){
                    $('[name="id_jadwal"]').val("");
                    $('[name="id_peserta"]').val("");
                    $('[name="nip"]').val("");
                    $('[name="nama"]').val("");
                    $('[name="tgl_lgd"]').val("");
                    $('[name="kd_personil_lgd"]').val("");
                    $('[name="batch"]').val("");
                    $('[name="kelompok"]').val("");
                    $('[name="tgl_wwcr"]').val("");
                    $('[name="kd_personil_wwcr"]').val("");
                    $('[name="ket"]').val("");
                    $('#ModalaSett').modal('hide');
                }
            });
			redirect($_SERVER['HTTP_REFERER']);
			return false;
        });
		
		

</script>