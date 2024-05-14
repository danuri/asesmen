<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">Insert Data Peserta dari SIMSDM .. </h3>
    </div>
<!-- /.col-lg-12 -->
</div>

<div class="row">
	<div class="col-lg-8">
		<div class="panel panel-default">
			<div class="panel-heading" style="color:#fff;">
			<i class="fa fa-database" aria-hidden="true"></i>&nbsp; Insert Peserta
			</div>
			<div class="panel-body">
				<?php if(!empty($this->session->flashdata('status'))){ ?>
					<div class="alert alert-info" role="alert"><?= $this->session->flashdata('status'); ?></div>
				<?php } ?>														
				<div class="table-responsive">
					<table width="100%" class="table table-striped table-bordered table-hover" id="myDataSIMSDM">
						<thead>
							<tr>
								<th style="width:5%">No.</th>
								<th style="width:20%">Nama</th>
								<th style="width:15%">Pangkat</th>
								<th style="width:50%">Jabatan / Unit Kerja</th>
								<th style="width:20%">Status</th>
							</tr>
						</thead>
						<tbody>
						<?php 
						$no = 1;
						foreach ($simsdm as $key=>$val)
						{ ?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $val['nama']; ?> <br> <b>NIP.</b> <?php echo $val['nip']; ?> <br> Status Pegawai : <b><?php echo $val['status_pegawai']; ?></b> </td>
							<td><?php echo $val['pangkat']; ?> <br> <?php echo $val['jenis_jabatan']; ?> <br> <b><?php echo $val['jenjang']; ?></b></td>
							<td><?php echo $val['nama_jabatan']; ?> <br><b>pada</b> <?php echo $val['biro']; ?></td>
							<td>
								<?php 
									$array_datas = array();
									//$base = base_url("module/appassesment/insert_simsdm/detail_simsdm");
									//'.base_url("appassesment/insert_simsdm/insert_peserta_simsdm/").''.$val['nip'].'
									$a = $val['ukom'];
									if ($a == 'sudah') {
									  echo '<div class="btn btn-default btn-xs pull-center" type="button"><a href="" onclick="javascript:myFunc()" style="color:#3a8d07;text-align:center;width: 100%;text-decoration:none;">SUDAH UKOM</a></div>';
									} else {
									  echo '<div class="btn btn-default btn-xs pull-center" type="button">
									  <a href="'.base_url("appassesment/insert_simsdm/insert_peserta_simsdm/").''.$val['nip'].'" style="color:#c50909;text-align:center;width: 100%;text-decoration:none;">BELUM UKOM</a></div>';
									}	
								?>
							</td>
						</tr>
						
						<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-4">
		<div class="panel panel-default">
			<div class="panel-heading" style="color:#fff;">
				<div class="pull-right "><a href="<?php echo base_url('appassesment/insert_simsdm/cetak_hasil_insert/');?>" target='_blank' style="text-decoration:none;color:#fff;"><i class="fa fa-download fa-fw"></i> Download hasil</a></div>
				<i class="fa fa-external-link-square" aria-hidden="true"></i>&nbsp; Hasil Insert
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table width="100%" class="table table-striped table-bordered table-hover" id="myDataHasilSIMSDM">
						<thead>
							<tr>
								<th style="width:5%">No.</th>
								<th style="width:50%">Nama</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$no = 1;
							foreach ($hasil_insert->result() as $key){ ?>
							<tr>
								<td style="width:5%"><?php echo $no++; ?></td>
								<td style="width:50%"><?php echo $key->nama; ?> <br><b>NIP. </b> <?php echo $key->nip; ?> <br> <?php echo $key->jabatan; ?><br><b>pada </b> <?php echo $key->unker; ?></td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	
	
</div>

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
                'copy'
            ]
        });
    });
	
	function myFunc() {
		alert('ooops.. masih dalam pengembangan');
	}	
	
</script>
