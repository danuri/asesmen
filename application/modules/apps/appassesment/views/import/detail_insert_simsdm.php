<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">Detail Data Peserta dari SIMSDM </h3>
    </div>
</div>


<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading" style="color:#fff;">
				<i class="fa fa-database" aria-hidden="true"></i>&nbsp; Insert Peserta
			</div>
			<div class="panel-body">
				
			</div>
		</div>
    </div>
</div>
































<!--
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading" style="color:#fff;">
				<i class="fa fa-database" aria-hidden="true"></i>&nbsp; Insert Peserta
			</div>
			<div class="panel-body">
					<div class="col-lg-6">
						<?php foreach ($detail_insert->result() as $key){ ?>
					
						<div class="form-group">
							<label class="control-label col-xs-6">Nama</label>
							<div class="col-xs-9">
								<input type="text" class="form-control" name="nama" id="nama" value="<?php echo $key->nama; ?>" disabled />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-6">NIP</label>
							<div class="col-xs-9">
								<input type="text" class="form-control" name="nip" id="nip" value="<?php echo $key->nip; ?>" disabled />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-6">Pangkat</label>
							<div class="col-xs-9">
								<input type="text" class="form-control" name="pangkat" id="pangkat" value="<?php echo $key->pangkat; ?>" disabled />
							</div>
						</div>	
						<div class="form-group">
							<label class="control-label col-xs-6">Jabatan</label>
							<div class="col-xs-9">
								<textarea class="form-control" name="unker" id="unker" value="<?php echo $key->nama_jabatan; ?>" disabled /><?php echo $key->nama_jabatan; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-6">Unit Kerja</label>
							<div class="col-xs-9">
								<textarea class="form-control" name="unker" id="unker" value="<?php echo $key->biro; ?>" disabled /><?php echo $key->biro; ?></textarea>
							</div>
						</div>
					<?php } ?>
					</div>
					<!--
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label col-xs-3">ID.</label>
							<div class="col-xs-9">
							<?php foreach ($kegiatan->result() as $key){ ?>
								<input type="text" class="form-control" name="id_kegiatan" id="id_kegiatan" value="<?php echo $key->id_kegiatan; ?>" placeholder="Masukan ID Kegiatan" readonly>
							<?php } ?>	
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-3">KD.</label>
							<div class="col-xs-9">
							<?php foreach ($kegiatan->result() as $key){ ?>
								<input type="text" class="form-control" name="kd_kegiatan" id="kd_kegiatan" value="<?php echo $key->kd_kegiatan; ?>" placeholder="Masukan KD kegiatan" readonly>
							<?php } ?>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-3">Tahun</label>
							<div class="col-xs-9">
							<?php foreach ($kegiatan->result() as $key){ ?>
								<input type="text" class="form-control" name="tahun" id="tahun" value="<?php echo $key->tahun; ?>" placeholder="Masukan KD kegiatan" readonly>
							<?php } ?>
							</div>
						</div>
							<div class="form-group">
								<label class="control-label col-xs-3">Jenjang</label>
								<div class="col-xs-9">
									<select type="dropdown" class="form-control" name="jenjang" id="jenjang" required>
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
								<select type="dropdown" class="form-control" name="ket" id="ket" required>
								  <option>- pilih -</option>
								  <option value="Y">Y</option>
								  <option value="N">N</option>
								</select>
							</div>
						</div>	
						
						<div class="modal-footer">
							<button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
							<button class="btn btn-info" id="btn_simpan">Insert</button>
						</div>
					</div>		
			
			</div>
		</div>
	</div>
</div>
		-->

<script type="text/javascript">


		//SIMPAN INSERT
		$('#btn_simpan').on('click',function(){
            var id_kegiatan		=$('#id_kegiatan').val();
            var kd_kegiatan		=$('#kd_kegiatan').val();
            var nip				=$('#nip').val();
            var nama			=$('#nama').val();
            var pangkat			=$('#pangkat').val();
            var jabatan			=$('#jabatan').val();
            var unker			=$('#unker').val();
            var jenjang			=$('#jenjang').val();
            var tahun			=$('#tahun').val();
            var ket				=$('#ket').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('appassesment/insert_simsdm/simpan_insert_simsdm')?>",
                dataType : "JSON",
                data : {id_kegiatan:id_kegiatan, kd_kegiatan:kd_kegiatan, nip:nip, nama:nama, pangkat:pangkat, jabatan:jabatan, unker:unker, jenjang:jenjang, tahun:tahun, ket:ket},
                success: function(data){
                    $('[name="id_kegiatan"]').val("");
                    $('[name="kd_kegiatan"]').val("");
                    $('[name="nip"]').val("");
                    $('[name="nama"]').val("");
                    $('[name="pangkat"]').val("");
                    $('[name="jabatan"]').val("");
                    $('[name="unker"]').val("");
                    $('[name="jenjang"]').val("");
                    $('[name="tahun"]').val("");
                    $('[name="ket"]').val("");
                    $('#ModalaAdd').modal('hide');
                    tampil_data();
                }
            });
            return false;
        });

    $(document).ready(function () {
        $('#myDataSIMSDM').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
			"pageLength": 5,
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
	
    $(document).ready(function () {
        $('#myDataHasilSIMSDM').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
	
</script>
