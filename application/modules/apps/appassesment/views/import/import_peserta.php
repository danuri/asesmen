<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">Import File Excel Data Peserta </h3>
    </div>
<!-- /.col-lg-12 -->
</div>

<div class="row">
	<div class="col-lg-12">
	<div class="panel panel-default">
		<div class="panel-heading" style="color:#fff;">
		<div class="pull-right "><a href="<?php echo base_url('assets/media/upload/template/import_peserta_bkkbn.xlsx');?>" target='_blank' style="text-decoration:none;color:#fff;"><i class="fa fa-download fa-fw"></i> Download Template Import</a></div>
		Import Data Peserta
		</div>
		<div class="panel-body">
			<?php if(!empty($this->session->flashdata('status'))){ ?>
			<div class="alert alert-info" role="alert"><?= $this->session->flashdata('status'); ?></div>
			<?php } ?>
			<form action="<?= base_url('module/appassesment/ImportPeserta/import_peserta'); ?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>Pilih File Excel</label>
					<input type="file" name="fileExcel">
				</div>
				<div>
					<button class='btn btn-success pull-right' type="submit">
						<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
			    		Import		
					</button>
				</div>
			</form>
		</div>
	</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading" style="color:#fff;">
			
			<div class="dropdown">
				<button class="btn btn-default btn-xs dropdown-toggle pull-left" type="button" data-toggle="dropdown">
				<i class="fa fa-caret-down fa-fw"></i></button>
				<ul class="dropdown-menu">
				  <li><a href="#" role="menuitem" tabindex="-1" style="cursor:pointer;" data-toggle="modal" data-target="#ModalaAdd"><i class="fa fa-plus"></i>&nbsp; &nbsp; Tambah Manual</a></li>
				  <li><a href="<?php echo base_url();?>module/appassesment/insert_simsdm" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-link" aria-hidden="true"></i>&nbsp; &nbsp; Tambah dari SIMSDM</a></li>
				</ul>
			</div>								
			&nbsp; Hasil Import Data Peserta
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table width="100%" class="table table-striped table-bordered table-hover" id="myTablePeserta">
						<thead>
							<tr>
								<th style="width:5%">No.</th>
								<th style="width:20%">Nama</th>
								<th style="width:15%">Pangkat</th>
								<th style="width:50%">Jabatan / Unit Kerja</th>
								<th style="width:20%">Kode / Status</th>
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
					<h3 class="modal-title" id="myModalLabel">Tambah Data Peserta</h3>
				</div>
				<form class="form-horizontal">
					<div class="modal-body">
					<div class="col-md-12">
						<div class="panel panel-primary">
							<div class="panel-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label col-xs-3">Nama</label>
										<div class="col-xs-9">
											<input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan Nama" onkeyup="copy();" required>
											<input type="hidden" class="form-control" name="nama_user" id="nama_user" >
											<input type="hidden" class="form-control" name="group_id" id="group_id" value="11000003" >
											<input type="hidden" class="form-control" name="status" id="status" value="off" >
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-xs-3">NIP</label>
										<div class="col-xs-9">
											<input type="text" class="form-control" name="nip" id="nip" placeholder="Masukan NIP" onkeyup="copy();" required>
											<input type="hidden" class="form-control" name="username" id="username" >
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-xs-3">Pangkat</label>
										<div class="col-xs-9">
											<select type="dropdown" class="form-control" name="pangkat" id="pangkat" required>
												<option>- pilih -</option>
												<option value="Pembina Utama, IV/e">Pembina Utama, IV/e</option>
												<option value="Pembina Madya, IV/d">Pembina Madya, IV/d</option>
												<option value="Pembina Muda, IV/c">Pembina Muda, IV/c</option>
												<option value="Pembina TK. I , IV/b">Pembina TK. I , IV/b</option>
												<option value="Pembina, IV/a">Pembina, IV/a</option>
												<option value="Penata TK. I, III/d">Penata TK. I, III/d</option>
												<option value="Penata, III/c">Penata, III/c</option>
												<option value="Penata Muda TK. I, III/b">Penata Muda TK. I, III/b</option>
												<option value="Penata Muda, III/a">Penata Muda, III/a</option>
												<option value="Pengatur TK. I, II/d">Pengatur TK. I, II/d</option>
												<option value="Pengatur, II/c">Pengatur, II/c</option>
												<option value="Pengatur Muda TK. I, II/b">Pengatur Muda TK. I, II/b</option>
												<option value="Pengatur muda, II/a">Pengatur muda, II/a</option>
												<option value="Juru TK. I, I/d">Juru TK. I, I/d</option>
												<option value="Juru, I/c">Juru, I/c</option>
												<option value="Juru Muda TK. I, I/b">Juru Muda TK. I, I/b</option>
												<option value="Juru Muda, I/a">Juru Muda, I/a</option>
											</select>
										</div>
									</div>	
									<div class="form-group">
										<label class="control-label col-xs-3">Jabatan</label>
										<div class="col-xs-9">
											<input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Masukan Jabatan" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-xs-3">Unit Kerja</label>
										<div class="col-xs-9">
											<textarea class="form-control" name="unker" id="unker" placeholder="Masukan Unit Kerja" required></textarea>
										</div>
									</div>
								</div>
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

<!-- =========================================================================================================================================================== -->

<!-- MODAL EDIT -->
    <div class="modal fade" id="ModalaEdit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="row modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3 class="modal-title" id="myModalLabel">Edit Data Peserta</h3>
				</div>
				<form class="form-horizontal">
					<div class="modal-body">
					<div class="col-md-12">
						<div class="panel panel-primary">
							<div class="panel-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label col-xs-3">Nama</label>
										<div class="col-xs-9">
											<input type="text" class="form-control" name="nama_edit" id="nama2" placeholder="Masukan Nama" onkeyup="copy();" required>
											<input type="text" class="form-control" name="id_peserta_edit" id="id_peserta2" readonly>
											<input type="hidden" class="form-control" name="nama_user" id="nama_user" readonly>
											<input type="hidden" class="form-control" name="group_id" id="group_id" value="11000003" readonly>
											<input type="hidden" class="form-control" name="status" id="status" value="off" readonly>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-xs-3">NIP</label>
										<div class="col-xs-9">
											<input type="text" class="form-control" name="nip_edit" id="nip2" placeholder="Masukan NIP" onkeyup="copy();" required>
											<input type="hidden" class="form-control" name="username" id="username" readonly>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-xs-3">Pangkat</label>
										<div class="col-xs-9">
											<select type="dropdown" class="form-control" name="pangkat_edit" id="pangkat2" required>
												<option>- pilih -</option>
												<option value="Pembina Utama, IV/e">Pembina Utama, IV/e</option>
												<option value="Pembina Madya, IV/d">Pembina Madya, IV/d</option>
												<option value="Pembina Muda, IV/c">Pembina Muda, IV/c</option>
												<option value="Pembina TK. I , IV/b">Pembina TK. I , IV/b</option>
												<option value="Pembina, IV/a">Pembina, IV/a</option>
												<option value="Penata TK. I, III/d">Penata TK. I, III/d</option>
												<option value="Penata, III/c">Penata, III/c</option>
												<option value="Penata Muda TK. I, III/b">Penata Muda TK. I, III/b</option>
												<option value="Penata Muda, III/a">Penata Muda, III/a</option>
												<option value="Pengatur TK. I, II/d">Pengatur TK. I, II/d</option>
												<option value="Pengatur, II/c">Pengatur, II/c</option>
												<option value="Pengatur Muda TK. I, II/b">Pengatur Muda TK. I, II/b</option>
												<option value="Pengatur muda, II/a">Pengatur muda, II/a</option>
												<option value="Juru TK. I, I/d">Juru TK. I, I/d</option>
												<option value="Juru, I/c">Juru, I/c</option>
												<option value="Juru Muda TK. I, I/b">Juru Muda TK. I, I/b</option>
												<option value="Juru Muda, I/a">Juru Muda, I/a</option>
											</select>
										</div>
									</div>	
									<div class="form-group">
										<label class="control-label col-xs-3">Jabatan</label>
										<div class="col-xs-9">
											<input type="text" class="form-control" name="jabatan_edit" id="jabatan2" placeholder="Masukan Jabatan" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-xs-3">Unit Kerja</label>
										<div class="col-xs-9">
											<textarea class="form-control" name="unker_edit" id="unker2" placeholder="Masukan Unit Kerja" required></textarea>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label col-xs-3">ID.</label>
										<div class="col-xs-9">
										<?php foreach ($kegiatan->result() as $key){ ?>
											<input type="text" class="form-control" name="id_kegiatan_edit" id="id_kegiatan2" value="<?php echo $key->id_kegiatan; ?>" placeholder="Masukan ID Kegiatan" readonly>
										<?php } ?>	
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-xs-3">KD.</label>
										<div class="col-xs-9">
											<input type="text" class="form-control" name="kd_kegiatan_edit" id="kd_kegiatan2" value="<?php echo $key->kd_kegiatan; ?>" placeholder="Masukan KD kegiatan" readonly>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-xs-3">Tahun</label>
										<div class="col-xs-9">
										<?php foreach ($kegiatan->result() as $key){ ?>
											<input type="text" class="form-control" name="tahun_edit" id="tahun2" value="<?php echo $key->tahun; ?>" placeholder="Masukan KD kegiatan" readonly>
										<?php } ?>
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
											<select type="dropdown" class="form-control" name="ket_edit" id="ket2" readonly>
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
<!--END MODAL EDIT-->


<!--MODAL HAPUS-->
    <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="row modal-content">
                <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Data Peserta</h4>
                </div>
                <form class="form-horizontal">
				<div class="modal-body">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="row">
									<input type="hidden" name="id_peserta" id="textkode" value="">
									<div class="alert alert-danger"><p>Apakah Anda yakin mau menghapus Data Peserta ini ?</p></div>
										<div class="form-group">
											<label class="control-label col-xs-3">Nama</label>
											<div class="col-xs-9">
												<input type="hidden" class="form-control" name="id_peserta" id="id_peserta">
												<input type="text" class="form-control" name="nama_hapus" id="nama3" readonly>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">NIP</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="nip_hapus" id="nip3" readonly>
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

<!--MODAL ADD APM 2-->
    <div class="modal fade" id="ModalaAddApm2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="row modal-content">
                <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                        <h4 class="modal-title" id="myModalLabel">Input APM-2</h4>
                </div>
                <form class="form-horizontal" action="<?php echo base_url('appassesment/ImportPeserta/simpan_apm2')?>" method="post">
				<div class="modal-body">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="control-label col-xs-3">Nama</label>
										<div class="col-xs-9">
											<input type="text" class="form-control" name="nama_edit" id="nama2" style="width:100%;" disabled>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-xs-3">NIP</label>
										<div class="col-xs-9">
											<input type="text" class="form-control" name="nip_edit" id="nip_old" onmousemove="copy_apm()" readonly>
											<input type="text" class="form-control" name="nip" id="nip" placeholder="Copy NIP diatas..." >
											<input type="hidden" class="form-control" name="ket" id="ket" value="Y" >
										</div>
									</div>
								</div>		
								</div>	
							</div>	
						</div>
						
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="row">
									<div class="col-md-3">
										<div class="form-group">
											<label class="control-label col-xs-3">1.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_apm_dua_1" id="jwb_apm_dua_1">
												  <option>- pilih -</option>
												  <option value="A">A</option>
												  <option value="B">B</option>
												  <option value="C">C</option>
												  <option value="D">D</option>
												  <option value="E">E</option>
												  <option value="F">F</option>
												  <option value="G">G</option>
												  <option value="H">H</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">2.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_apm_dua_2" id="jwb_apm_dua_2">
												  <option>- pilih -</option>
												  <option value="A">A</option>
												  <option value="B">B</option>
												  <option value="C">C</option>
												  <option value="D">D</option>
												  <option value="E">E</option>
												  <option value="F">F</option>
												  <option value="G">G</option>
												  <option value="H">H</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">3.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_apm_dua_3" id="jwb_apm_dua_3">
												  <option>- pilih -</option>
												  <option value="A">A</option>
												  <option value="B">B</option>
												  <option value="C">C</option>
												  <option value="D">D</option>
												  <option value="E">E</option>
												  <option value="F">F</option>
												  <option value="G">G</option>
												  <option value="H">H</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">4.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_apm_dua_4" id="jwb_apm_dua_4">
												  <option>- pilih -</option>
												  <option value="A">A</option>
												  <option value="B">B</option>
												  <option value="C">C</option>
												  <option value="D">D</option>
												  <option value="E">E</option>
												  <option value="F">F</option>
												  <option value="G">G</option>
												  <option value="H">H</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">5.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_apm_dua_5" id="jwb_apm_dua_5">
												  <option>- pilih -</option>
												  <option value="A">A</option>
												  <option value="B">B</option>
												  <option value="C">C</option>
												  <option value="D">D</option>
												  <option value="E">E</option>
												  <option value="F">F</option>
												  <option value="G">G</option>
												  <option value="H">H</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">6.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_apm_dua_6" id="jwb_apm_dua_6">
												  <option>- pilih -</option>
												  <option value="A">A</option>
												  <option value="B">B</option>
												  <option value="C">C</option>
												  <option value="D">D</option>
												  <option value="E">E</option>
												  <option value="F">F</option>
												  <option value="G">G</option>
												  <option value="H">H</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">7.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_apm_dua_7" id="jwb_apm_dua_7">
												  <option>- pilih -</option>
												  <option value="A">A</option>
												  <option value="B">B</option>
												  <option value="C">C</option>
												  <option value="D">D</option>
												  <option value="E">E</option>
												  <option value="F">F</option>
												  <option value="G">G</option>
												  <option value="H">H</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">8.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_apm_dua_8" id="jwb_apm_dua_8">
												  <option>- pilih -</option>
												  <option value="A">A</option>
												  <option value="B">B</option>
												  <option value="C">C</option>
												  <option value="D">D</option>
												  <option value="E">E</option>
												  <option value="F">F</option>
												  <option value="G">G</option>
												  <option value="H">H</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">9.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_apm_dua_9" id="jwb_apm_dua_9">
												  <option>- pilih -</option>
												  <option value="A">A</option>
												  <option value="B">B</option>
												  <option value="C">C</option>
												  <option value="D">D</option>
												  <option value="E">E</option>
												  <option value="F">F</option>
												  <option value="G">G</option>
												  <option value="H">H</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">10.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_apm_dua_10" id="jwb_apm_dua_10">
												  <option>- pilih -</option>
												  <option value="A">A</option>
												  <option value="B">B</option>
												  <option value="C">C</option>
												  <option value="D">D</option>
												  <option value="E">E</option>
												  <option value="F">F</option>
												  <option value="G">G</option>
												  <option value="H">H</option>
												</select>
											</div>
										</div>
									</div>		
									<div class="col-md-3">
										<div class="form-group">
											<label class="control-label col-xs-3">11.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_apm_dua_11" id="jwb_apm_dua_11">
												  <option>- pilih -</option>
												  <option value="A">A</option>
												  <option value="B">B</option>
												  <option value="C">C</option>
												  <option value="D">D</option>
												  <option value="E">E</option>
												  <option value="F">F</option>
												  <option value="G">G</option>
												  <option value="H">H</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">12.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_apm_dua_12" id="jwb_apm_dua_12">
												  <option>- pilih -</option>
												  <option value="A">A</option>
												  <option value="B">B</option>
												  <option value="C">C</option>
												  <option value="D">D</option>
												  <option value="E">E</option>
												  <option value="F">F</option>
												  <option value="G">G</option>
												  <option value="H">H</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">13.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_apm_dua_13" id="jwb_apm_dua_13">
												  <option>- pilih -</option>
												  <option value="A">A</option>
												  <option value="B">B</option>
												  <option value="C">C</option>
												  <option value="D">D</option>
												  <option value="E">E</option>
												  <option value="F">F</option>
												  <option value="G">G</option>
												  <option value="H">H</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">14.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_apm_dua_14" id="jwb_apm_dua_14">
												  <option>- pilih -</option>
												  <option value="A">A</option>
												  <option value="B">B</option>
												  <option value="C">C</option>
												  <option value="D">D</option>
												  <option value="E">E</option>
												  <option value="F">F</option>
												  <option value="G">G</option>
												  <option value="H">H</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">15.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_apm_dua_15" id="jwb_apm_dua_15">
												  <option>- pilih -</option>
												  <option value="A">A</option>
												  <option value="B">B</option>
												  <option value="C">C</option>
												  <option value="D">D</option>
												  <option value="E">E</option>
												  <option value="F">F</option>
												  <option value="G">G</option>
												  <option value="H">H</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">16.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_apm_dua_16" id="jwb_apm_dua_16">
												  <option>- pilih -</option>
												  <option value="A">A</option>
												  <option value="B">B</option>
												  <option value="C">C</option>
												  <option value="D">D</option>
												  <option value="E">E</option>
												  <option value="F">F</option>
												  <option value="G">G</option>
												  <option value="H">H</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">17.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_apm_dua_17" id="jwb_apm_dua_17">
												  <option>- pilih -</option>
												  <option value="A">A</option>
												  <option value="B">B</option>
												  <option value="C">C</option>
												  <option value="D">D</option>
												  <option value="E">E</option>
												  <option value="F">F</option>
												  <option value="G">G</option>
												  <option value="H">H</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">18.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_apm_dua_18" id="jwb_apm_dua_18">
												  <option>- pilih -</option>
												  <option value="A">A</option>
												  <option value="B">B</option>
												  <option value="C">C</option>
												  <option value="D">D</option>
												  <option value="E">E</option>
												  <option value="F">F</option>
												  <option value="G">G</option>
												  <option value="H">H</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">19.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_apm_dua_19" id="jwb_apm_dua_19">
												  <option>- pilih -</option>
												  <option value="A">A</option>
												  <option value="B">B</option>
												  <option value="C">C</option>
												  <option value="D">D</option>
												  <option value="E">E</option>
												  <option value="F">F</option>
												  <option value="G">G</option>
												  <option value="H">H</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">20.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_apm_dua_20" id="jwb_apm_dua_20">
												  <option>- pilih -</option>
												  <option value="A">A</option>
												  <option value="B">B</option>
												  <option value="C">C</option>
												  <option value="D">D</option>
												  <option value="E">E</option>
												  <option value="F">F</option>
												  <option value="G">G</option>
												  <option value="H">H</option>
												</select>
											</div>
										</div>
									</div>		
									<div class="col-md-3">
										<div class="form-group">
											<label class="control-label col-xs-3">21.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_apm_dua_21" id="jwb_apm_dua_21">
												  <option>- pilih -</option>
												  <option value="A">A</option>
												  <option value="B">B</option>
												  <option value="C">C</option>
												  <option value="D">D</option>
												  <option value="E">E</option>
												  <option value="F">F</option>
												  <option value="G">G</option>
												  <option value="H">H</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">22.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_apm_dua_22" id="jwb_apm_dua_22">
												  <option>- pilih -</option>
												  <option value="A">A</option>
												  <option value="B">B</option>
												  <option value="C">C</option>
												  <option value="D">D</option>
												  <option value="E">E</option>
												  <option value="F">F</option>
												  <option value="G">G</option>
												  <option value="H">H</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">23.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_apm_dua_23" id="jwb_apm_dua_23">
												  <option>- pilih -</option>
												  <option value="A">A</option>
												  <option value="B">B</option>
												  <option value="C">C</option>
												  <option value="D">D</option>
												  <option value="E">E</option>
												  <option value="F">F</option>
												  <option value="G">G</option>
												  <option value="H">H</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">24.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_apm_dua_24" id="jwb_apm_dua_24">
												  <option>- pilih -</option>
												  <option value="A">A</option>
												  <option value="B">B</option>
												  <option value="C">C</option>
												  <option value="D">D</option>
												  <option value="E">E</option>
												  <option value="F">F</option>
												  <option value="G">G</option>
												  <option value="H">H</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">25.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_apm_dua_25" id="jwb_apm_dua_25">
												  <option>- pilih -</option>
												  <option value="A">A</option>
												  <option value="B">B</option>
												  <option value="C">C</option>
												  <option value="D">D</option>
												  <option value="E">E</option>
												  <option value="F">F</option>
												  <option value="G">G</option>
												  <option value="H">H</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">26.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_apm_dua_26" id="jwb_apm_dua_26">
												  <option>- pilih -</option>
												  <option value="A">A</option>
												  <option value="B">B</option>
												  <option value="C">C</option>
												  <option value="D">D</option>
												  <option value="E">E</option>
												  <option value="F">F</option>
												  <option value="G">G</option>
												  <option value="H">H</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">27.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_apm_dua_27" id="jwb_apm_dua_27">
												  <option>- pilih -</option>
												  <option value="A">A</option>
												  <option value="B">B</option>
												  <option value="C">C</option>
												  <option value="D">D</option>
												  <option value="E">E</option>
												  <option value="F">F</option>
												  <option value="G">G</option>
												  <option value="H">H</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">28.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_apm_dua_28" id="jwb_apm_dua_28">
												  <option>- pilih -</option>
												  <option value="A">A</option>
												  <option value="B">B</option>
												  <option value="C">C</option>
												  <option value="D">D</option>
												  <option value="E">E</option>
												  <option value="F">F</option>
												  <option value="G">G</option>
												  <option value="H">H</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">29.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_apm_dua_29" id="jwb_apm_dua_29">
												  <option>- pilih -</option>
												  <option value="A">A</option>
												  <option value="B">B</option>
												  <option value="C">C</option>
												  <option value="D">D</option>
												  <option value="E">E</option>
												  <option value="F">F</option>
												  <option value="G">G</option>
												  <option value="H">H</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">30.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_apm_dua_30" id="jwb_apm_dua_30">
												  <option>- pilih -</option>
												  <option value="A">A</option>
												  <option value="B">B</option>
												  <option value="C">C</option>
												  <option value="D">D</option>
												  <option value="E">E</option>
												  <option value="F">F</option>
												  <option value="G">G</option>
												  <option value="H">H</option>
												</select>
											</div>
										</div>
									</div>		
									<div class="col-md-3">
										<div class="form-group">
											<label class="control-label col-xs-3">31.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_apm_dua_31" id="jwb_apm_dua_31">
												  <option>- pilih -</option>
												  <option value="A">A</option>
												  <option value="B">B</option>
												  <option value="C">C</option>
												  <option value="D">D</option>
												  <option value="E">E</option>
												  <option value="F">F</option>
												  <option value="G">G</option>
												  <option value="H">H</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">32.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_apm_dua_32" id="jwb_apm_dua_32">
												  <option>- pilih -</option>
												  <option value="A">A</option>
												  <option value="B">B</option>
												  <option value="C">C</option>
												  <option value="D">D</option>
												  <option value="E">E</option>
												  <option value="F">F</option>
												  <option value="G">G</option>
												  <option value="H">H</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">33.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_apm_dua_33" id="jwb_apm_dua_33">
												  <option>- pilih -</option>
												  <option value="A">A</option>
												  <option value="B">B</option>
												  <option value="C">C</option>
												  <option value="D">D</option>
												  <option value="E">E</option>
												  <option value="F">F</option>
												  <option value="G">G</option>
												  <option value="H">H</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">34.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_apm_dua_34" id="jwb_apm_dua_34">
												  <option>- pilih -</option>
												  <option value="A">A</option>
												  <option value="B">B</option>
												  <option value="C">C</option>
												  <option value="D">D</option>
												  <option value="E">E</option>
												  <option value="F">F</option>
												  <option value="G">G</option>
												  <option value="H">H</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">35.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_apm_dua_35" id="jwb_apm_dua_35">
												  <option>- pilih -</option>
												  <option value="A">A</option>
												  <option value="B">B</option>
												  <option value="C">C</option>
												  <option value="D">D</option>
												  <option value="E">E</option>
												  <option value="F">F</option>
												  <option value="G">G</option>
												  <option value="H">H</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">36.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_apm_dua_36" id="jwb_apm_dua_36">
												  <option>- pilih -</option>
												  <option value="A">A</option>
												  <option value="B">B</option>
												  <option value="C">C</option>
												  <option value="D">D</option>
												  <option value="E">E</option>
												  <option value="F">F</option>
												  <option value="G">G</option>
												  <option value="H">H</option>
												</select>
											</div>
										</div>
									</div>		
								</div>	
							</div>	
						</div>
						
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
							<button class="btn_hapus btn btn-success" id="btn_simpan">Simpan</button>
						</div>
					</div>		
				</div>		
                </form>
            </div>
        </div>
    </div>
<!--END MODAL ADD APM 2-->

<!--MODAL ADD PAPI-->
    <div class="modal fade" id="ModalaAddPapi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="row modal-content">
                <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                        <h4 class="modal-title" id="myModalLabel">Input PAPI</h4>
                </div>
                <form class="form-horizontal" action="<?php echo base_url('appassesment/ImportPeserta/simpan_papi')?>" method="post">
				<div class="modal-body">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="control-label col-xs-3">Nama</label>
										<div class="col-xs-9">
											<input type="text" class="form-control" name="nama_edit" id="nama2" style="width:100%;" disabled>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-xs-3">NIP</label>
										<div class="col-xs-9">
											<input type="text" class="form-control" name="nip_edit" id="nip2" readonly>
											<input type="text" class="form-control" name="nip" id="nip" placeholder="Copy NIP diatas..." >
											<input type="hidden" class="form-control" name="ket" id="ket" value="Y" >
										</div>
									</div>
								</div>		
								</div>	
							</div>	
						</div>
						
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="row">
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label col-xs-3">1.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi1" id="jwb_papi1">
												  <option>-pilih-</option>
												  <option value="1:a">A</option>
												  <option value="1:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">2.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi2" id="jwb_papi2">
												  <option>-pilih-</option>
												  <option value="2:a">A</option>
												  <option value="2:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">3.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi3" id="jwb_papi3">
												  <option>-pilih-</option>
												  <option value="3:a">A</option>
												  <option value="3:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">4.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi4" id="jwb_papi4">
												  <option>-pilih-</option>
												  <option value="4:a">A</option>
												  <option value="4:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">5.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi5" id="jwb_papi5">
												  <option>-pilih-</option>
												  <option value="5:a">A</option>
												  <option value="5:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">6.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi6" id="jwb_papi6">
												  <option>-pilih-</option>
												  <option value="6:a">A</option>
												  <option value="6:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">7.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi7" id="jwb_papi7">
												  <option>-pilih-</option>
												  <option value="7:a">A</option>
												  <option value="7:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">8.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi8" id="jwb_papi8">
												  <option>-pilih-</option>
												  <option value="8:a">A</option>
												  <option value="8:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">9.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi9" id="jwb_papi9">
												  <option>-pilih-</option>
												  <option value="9:a">A</option>
												  <option value="9:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">10.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi10" id="jwb_papi10">
												  <option>-pilih-</option>
												  <option value="10:a">A</option>
												  <option value="10:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">11.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi11" id="jwb_papi11">
												  <option>-pilih-</option>
												  <option value="11:a">A</option>
												  <option value="11:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">12.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi12" id="jwb_papi12">
												  <option>-pilih-</option>
												  <option value="12:a">A</option>
												  <option value="12:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">13.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi13" id="jwb_papi13">
												  <option>-pilih-</option>
												  <option value="13:a">A</option>
												  <option value="13:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">14.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi14" id="jwb_papi14">
												  <option>-pilih-</option>
												  <option value="14:a">A</option>
												  <option value="14:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">15.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi15" id="jwb_papi15">
												  <option>-pilih-</option>
												  <option value="15:a">A</option>
												  <option value="15:b">B</option>
												</select>
											</div>
										</div>
									</div>		
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label col-xs-3">16.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi16" id="jwb_papi16">
												  <option>-pilih-</option>
												  <option value="16:a">A</option>
												  <option value="16:a">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">17.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi17" id="jwb_papi17">
												  <option>-pilih-</option>
												  <option value="17:a">A</option>
												  <option value="17:a">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">18.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi18" id="jwb_papi18">
												  <option>-pilih-</option>
												  <option value="18:a">A</option>
												  <option value="18:a">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">19.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi19" id="jwb_papi19">
												  <option>-pilih-</option>
												  <option value="19:a">A</option>
												  <option value="19:a">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">20.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi20" id="jwb_papi20">
												  <option>-pilih-</option>
												  <option value="20:a">A</option>
												  <option value="20:a">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">21.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi21" id="jwb_papi21">
												  <option>-pilih-</option>
												  <option value="21:a">A</option>
												  <option value="21:a">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">22.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi22" id="jwb_papi22">
												  <option>-pilih-</option>
												  <option value="22:a">A</option>
												  <option value="22:a">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">23.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi23" id="jwb_papi23">
												  <option>-pilih-</option>
												  <option value="23:a">A</option>
												  <option value="23:a">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">24.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi24" id="jwb_papi24">
												  <option>-pilih-</option>
												  <option value="24:a">A</option>
												  <option value="24:a">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">25.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi25" id="jwb_papi25">
												  <option>-pilih-</option>
												  <option value="25:a">A</option>
												  <option value="25:a">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">26.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi26" id="jwb_papi26">
												  <option>-pilih-</option>
												  <option value="26:a">A</option>
												  <option value="26:a">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">27.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi27" id="jwb_papi27">
												  <option>-pilih-</option>
												  <option value="27:a">A</option>
												  <option value="27:a">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">28.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi28" id="jwb_papi28">
												  <option>-pilih-</option>
												  <option value="28:a">A</option>
												  <option value="28:a">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">29.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi29" id="jwb_papi29">
												  <option>-pilih-</option>
												  <option value="29:a">A</option>
												  <option value="29:a">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">30.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi30" id="jwb_papi30">
												  <option>-pilih-</option>
												  <option value="30:a">A</option>
												  <option value="30:a">B</option>
												</select>
											</div>
										</div>
									</div>		
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label col-xs-3">31.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi31" id="jwb_papi31">
												  <option>-pilih-</option>
												  <option value="31:a">A</option>
												  <option value="31:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">32.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi32" id="jwb_papi32">
												  <option>-pilih-</option>
												  <option value="32:a">A</option>
												  <option value="32:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">33.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi33" id="jwb_papi33">
												  <option>-pilih-</option>
												  <option value="33:a">A</option>
												  <option value="33:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">34.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi34" id="jwb_papi34">
												  <option>-pilih-</option>
												  <option value="34:a">A</option>
												  <option value="34:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">35.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi35" id="jwb_papi35">
												  <option>-pilih-</option>
												  <option value="35:a">A</option>
												  <option value="35:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">36.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi36" id="jwb_papi36">
												  <option>-pilih-</option>
												  <option value="36:a">A</option>
												  <option value="36:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">37.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi37" id="jwb_papi37">
												  <option>-pilih-</option>
												  <option value="37:a">A</option>
												  <option value="37:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">38.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi38" id="jwb_papi38">
												  <option>-pilih-</option>
												  <option value="38:a">A</option>
												  <option value="38:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">39.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi39" id="jwb_papi39">
												  <option>-pilih-</option>
												  <option value="39:a">A</option>
												  <option value="39:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">40.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi40" id="jwb_papi40">
												  <option>-pilih-</option>
												  <option value="40:a">A</option>
												  <option value="40:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">41.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi41" id="jwb_papi41">
												  <option>-pilih-</option>
												  <option value="41:a">A</option>
												  <option value="41:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">42.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi42" id="jwb_papi42">
												  <option>-pilih-</option>
												  <option value="42:a">A</option>
												  <option value="42:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">43.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi43" id="jwb_papi43">
												  <option>-pilih-</option>
												  <option value="43:a">A</option>
												  <option value="43:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">44.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi44" id="jwb_papi44">
												  <option>-pilih-</option>
												  <option value="44:a">A</option>
												  <option value="44:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">45.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi45" id="jwb_papi45">
												  <option>-pilih-</option>
												  <option value="45:a">A</option>
												  <option value="45:b">B</option>
												</select>
											</div>
										</div>
									</div>		
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label col-xs-3">46.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi46" id="jwb_papi46">
												  <option>-pilih-</option>
												  <option value="46:a">A</option>
												  <option value="46:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">47.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi47" id="jwb_papi47">
												  <option>-pilih-</option>
												  <option value="47:a">A</option>
												  <option value="47:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">48.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi48" id="jwb_papi48">
												  <option>-pilih-</option>
												  <option value="48:a">A</option>
												  <option value="48:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">49.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi49" id="jwb_papi49">
												  <option>-pilih-</option>
												  <option value="49:a">A</option>
												  <option value="49:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">50.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi50" id="jwb_papi50">
												  <option>-pilih-</option>
												  <option value="50:a">A</option>
												  <option value="50:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">51.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi51" id="jwb_papi51">
												  <option>-pilih-</option>
												  <option value="51:a">A</option>
												  <option value="51:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">52.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi52" id="jwb_papi52">
												  <option>-pilih-</option>
												  <option value="52:a">A</option>
												  <option value="52:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">53.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi53" id="jwb_papi53">
												  <option>-pilih-</option>
												  <option value="53:a">A</option>
												  <option value="53:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">54.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi54" id="jwb_papi54">
												  <option>-pilih-</option>
												  <option value="54:a">A</option>
												  <option value="54:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">55.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi55" id="jwb_papi55">
												  <option>-pilih-</option>
												  <option value="55:a">A</option>
												  <option value="55:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">56.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi56" id="jwb_papi56">
												  <option>-pilih-</option>
												  <option value="56:a">A</option>
												  <option value="56:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">57.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi57" id="jwb_papi57">
												  <option>-pilih-</option>
												  <option value="57:a">A</option>
												  <option value="57:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">58.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi58" id="jwb_papi58">
												  <option>-pilih-</option>
												  <option value="58:a">A</option>
												  <option value="58:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">59.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi59" id="jwb_papi59">
												  <option>-pilih-</option>
												  <option value="59:a">A</option>
												  <option value="59:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">60.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi60" id="jwb_papi60">
												  <option>-pilih-</option>
												  <option value="60:a">A</option>
												  <option value="60:b">B</option>
												</select>
											</div>
										</div>
									</div>		
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label col-xs-3">61.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi61" id="jwb_papi61">
												  <option>-pilih-</option>
												  <option value="61:a">A</option>
												  <option value="61:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">62.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi62" id="jwb_papi62">
												  <option>-pilih-</option>
												  <option value="62:a">A</option>
												  <option value="62:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">63.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi63" id="jwb_papi63">
												  <option>-pilih-</option>
												  <option value="63:a">A</option>
												  <option value="63:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">64.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi64" id="jwb_papi64">
												  <option>-pilih-</option>
												  <option value="64:a">A</option>
												  <option value="64:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">65.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi65" id="jwb_papi65">
												  <option>-pilih-</option>
												  <option value="65:a">A</option>
												  <option value="65:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">66.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi66" id="jwb_papi66">
												  <option>-pilih-</option>
												  <option value="66:a">A</option>
												  <option value="66:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">67.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi67" id="jwb_papi67">
												  <option>-pilih-</option>
												  <option value="67:a">A</option>
												  <option value="67:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">68.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi68" id="jwb_papi68">
												  <option>-pilih-</option>
												  <option value="68:a">A</option>
												  <option value="68:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">69.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi69" id="jwb_papi69">
												  <option>-pilih-</option>
												  <option value="69:a">A</option>
												  <option value="69:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">70.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi70" id="jwb_papi70">
												  <option>-pilih-</option>
												  <option value="70:a">A</option>
												  <option value="70:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">71.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi71" id="jwb_papi71">
												  <option>-pilih-</option>
												  <option value="71:a">A</option>
												  <option value="71:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">72.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi72" id="jwb_papi72">
												  <option>-pilih-</option>
												  <option value="72:a">A</option>
												  <option value="72:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">73.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi73" id="jwb_papi73">
												  <option>-pilih-</option>
												  <option value="73:a">A</option>
												  <option value="73:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">74.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi74" id="jwb_papi74">
												  <option>-pilih-</option>
												  <option value="74:a">A</option>
												  <option value="74:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">75.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi75" id="jwb_papi75">
												  <option>-pilih-</option>
												  <option value="75:a">A</option>
												  <option value="75:b">B</option>
												</select>
											</div>
										</div>
									</div>	
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label col-xs-3">76.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi76" id="jwb_papi76">
												  <option>-pilih-</option>
												  <option value="76:a">A</option>
												  <option value="76:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">77.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi77" id="jwb_papi77">
												  <option>-pilih-</option>
												  <option value="77:a">A</option>
												  <option value="77:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">78.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi78" id="jwb_papi78">
												  <option>-pilih-</option>
												  <option value="78:a">A</option>
												  <option value="78:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">79.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi79" id="jwb_papi79">
												  <option>-pilih-</option>
												  <option value="79:a">A</option>
												  <option value="79:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">80.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi80" id="jwb_papi80">
												  <option>-pilih-</option>
												  <option value="80:a">A</option>
												  <option value="80:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">81.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi81" id="jwb_papi81">
												  <option>-pilih-</option>
												  <option value="81:a">A</option>
												  <option value="81:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">82.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi82" id="jwb_papi82">
												  <option>-pilih-</option>
												  <option value="82:a">A</option>
												  <option value="82:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">83.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi83" id="jwb_papi83">
												  <option>-pilih-</option>
												  <option value="83:a">A</option>
												  <option value="83:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">84.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi84" id="jwb_papi84">
												  <option>-pilih-</option>
												  <option value="84:a">A</option>
												  <option value="84:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">85.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi85" id="jwb_papi85">
												  <option>-pilih-</option>
												  <option value="85:a">A</option>
												  <option value="85:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">86.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi86" id="jwb_papi86">
												  <option>-pilih-</option>
												  <option value="86:a">A</option>
												  <option value="86:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">87.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi87" id="jwb_papi87">
												  <option>-pilih-</option>
												  <option value="87:a">A</option>
												  <option value="87:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">88.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi88" id="jwb_papi88">
												  <option>-pilih-</option>
												  <option value="88:a">A</option>
												  <option value="88:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">89.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi89" id="jwb_papi89">
												  <option>-pilih-</option>
												  <option value="89:a">A</option>
												  <option value="89:b">B</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">90.</label>
											<div class="col-xs-9">
												<select type="dropdown" class="form-control" name="jwb_papi90" id="jwb_papi90">
												  <option>-pilih-</option>
												  <option value="90:a">A</option>
												  <option value="90:b">B</option>
												</select>
											</div>
										</div>
									</div>		
									</div>		
								</div>	
							</div>	
						</div>
						
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
							<button class="btn_hapus btn btn-success" id="btn_simpan">Simpan</button>
						</div>
					</div>		
				</div>		
                </form>
            </div>
        </div>
    </div>
<!--END MODAL ADD APM 2-->



<script type="text/javascript">
    $(document).ready(function(){
		tampil_data();   //pemanggilan fungsi tampil data.
        function tampil_data(){
            $.ajax({
				type  : 'POST',
                url   : '<?php echo site_url('appassesment/ImportPeserta/data_hasil');?>',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
					var no=0
                    for(let i=0; i<data.length; i++){
						no++;
                        html += '<tr>'+
								'<td align=center><div class="dropdown">'+
								'<button class="btn btn-default btn-xs pull-center" type="button" data-toggle="dropdown" style="width:100%;">'+
								'<i class=""></i>'+no+'</button>'+
									'<ul class="dropdown-menu" role="menu">'+
										'<li role="presentation"><a href="javascript:;" class="item_edit" data="'+data[i].id_peserta+'" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="glyphicon glyphicon-edit"></i> Edit</a></li>'+' '+
										'<li role="presentation"><a href="javascript:;" class="item_hapus" data="'+data[i].id_peserta+'" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="glyphicon glyphicon-trash"></i> Hapus</a></li>'+' '+
										'<li role="presentation"><a href="javascript:;" class="item_input_apm2" data="'+data[i].id_peserta+'" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="glyphicon glyphicon-floppy-save"></i> Input APM 2</a></li>'+' '+
										'<li role="presentation"><a href="javascript:;" class="item_input_papi" data="'+data[i].id_peserta+'" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="glyphicon glyphicon-floppy-save"></i> Input Papi</a></li>'+' '+
									'</ul>'+
								'</td></div>'+
                                '<td>'+data[i].nama+' <br/> NIP. '+data[i].nip+'</td>'+
                                '<td>'+data[i].pangkat+' <br/> <b>'+data[i].jenjang+'</b> </td>'+
                                '<td>'+data[i].jabatan+' <br/> <b> pada </b> '+data[i].unker+'</td>'+
                                '<td>'+data[i].kd_kegiatan+' / ID. '+data[i].id_kegiatan+' <br/> <b style="color:green;font-weight: bold;"> '+data[i].ket+' </b> || '+data[i].tahun+' </td>'+
								'</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }
	});	
	
			//SIMPAN PESERTA
		$('#btn_simpan').on('click',function(){
            var id_kegiatan	=$('#id_kegiatan').val();
            var kd_kegiatan	=$('#kd_kegiatan').val();
            var nip			=$('#nip').val();
            var nama		=$('#nama').val();
            var pangkat		=$('#pangkat').val();
            var jabatan		=$('#jabatan').val();
            var unker		=$('#unker').val();
            var jenjang		=$('#jenjang').val();
            var tahun		=$('#tahun').val();
            var ket			=$('#ket').val();
            var group_id	=$('#group_id').val();
            var username	=$('#username').val();
            var nama_user	=$('#nama_user').val();
            var status		=$('#status').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('appassesment/ImportPeserta/simpan_peserta')?>",
                dataType : "JSON",
                data : {id_kegiatan:id_kegiatan, kd_kegiatan:kd_kegiatan, nip:nip, nama:nama, pangkat:pangkat, jabatan:jabatan, unker:unker, jenjang:jenjang, tahun:tahun, ket:ket, group_id:group_id, username:username, nama_user:nama_user, status:status},
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
                    $('[name="group_id"]').val("");
                    $('[name="username"]').val("");
                    $('[name="nama_user"]').val("");
                    $('[name="status"]').val("");
                    $('#ModalaAdd').modal('hide');
                    tampil_data();
                }
            });
			redirect($_SERVER['HTTP_REFERER']);
            return false;
        });

		//GET HAPUS
		$('#show_data').on('click','.item_hapus',function(){
            var id_peserta	=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('appassesment/ImportPeserta/get_peserta')?>",
                dataType : "JSON",
                data : {id_peserta:id_peserta},
                success: function(data){
                	$.each(data,function(nama, nip){
            $('#ModalHapus').modal('show');
            $('[name="id_peserta"]').val(id_peserta);
			$('[name="nama_hapus"]').val(data.nama);
			$('[name="nip_hapus"]').val(data.nip);
        });
                }
            });
            return false;
        });

		//HAPUS PESERTA
        $('#btn_hapus').on('click',function(){
            var id_peserta =$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('appassesment/ImportPeserta/hapus_peserta')?>",
            dataType : "JSON",
                    data : {id_peserta: id_peserta},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_data();
                    }
                });
				redirect($_SERVER['HTTP_REFERER']);
                return false;
            });

		//GET UPDATE
		$('#show_data').on('click','.item_edit',function(){
            var id_peserta =$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('appassesment/ImportPeserta/get_peserta')?>",
                dataType : "JSON",
                data : {id_peserta:id_peserta},
                success: function(data){
                	$.each(data,function(id_kegiatan, kd_kegiatan, nip, nama, pangkat, jabatan, unker, jenjang, ket, tahun){
                    	$('#ModalaEdit').modal('show');
						$('[name="id_peserta_edit"]').val(data.id_peserta);
						$('[name="id_kegiatan_edit"]').val(data.id_kegiatan);
						$('[name="kd_kegiatan_edit"]').val(data.kd_kegiatan);
						$('[name="nip_edit"]').val(data.nip);
						$('[name="nama_edit"]').val(data.nama);
						$('[name="pangkat_edit"]').val(data.pangkat);
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

        //UPDATE PESERTA
		$('#btn_update').on('click',function(){
            var id_peserta		=$('#id_peserta2').val();
            var id_kegiatan		=$('#id_kegiatan2').val();
            var kd_kegiatan		=$('#kd_kegiatan2').val();
            var nama			=$('#nama2').val();
            var nip				=$('#nip2').val();
            var pangkat			=$('#pangkat2').val();
            var jabatan			=$('#jabatan2').val();
            var unker			=$('#unker2').val();
            var jenjang			=$('#jenjang2').val();
            var ket				=$('#ket2').val();
            var tahun			=$('#tahun2').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('appassesment/ImportPeserta/update_peserta')?>",
                dataType : "JSON",
                data : {id_peserta:id_peserta, id_kegiatan:id_kegiatan, kd_kegiatan:kd_kegiatan, nama:nama, nip:nip, pangkat:pangkat, jabatan:jabatan, unker:unker, jenjang:jenjang, ket:ket, tahun:tahun},
                success: function(data){
                    $('[name="id_peserta_edit"]').val("");
                    $('[name="id_kegiatan_edit"]').val("");
                    $('[name="kd_kegiatan_edit"]').val("");
                    $('[name="nama_edit"]').val("");
                    $('[name="nip_edit"]').val("");
                    $('[name="pangkat_edit"]').val("");
                    $('[name="jabatan_edit"]').val("");
                    $('[name="unker_edit"]').val("");
                    $('[name="jenjang_edit"]').val("");
                    $('[name="ket_edit"]').val("");
                    $('[name="tahun_edit"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data();
                }
            });
            return false;
        });
		
		
		//GET APM-2
		$('#show_data').on('click','.item_input_apm2',function(){
            var id_peserta	=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('appassesment/ImportPeserta/get_peserta')?>",
                dataType : "JSON",
                data : {id_peserta:id_peserta},
                success: function(data){
                	$.each(data,function(nama, nip){
            $('#ModalaAddApm2').modal('show');
            $('[name="id_peserta"]').val(id_peserta);
			$('[name="nama_edit"]').val(data.nama);
			$('[name="nip_edit"]').val(data.nip);
        });
                }
            });
            return false;
        });

		//GET PAPI
		$('#show_data').on('click','.item_input_papi',function(){
            var id_peserta	=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('appassesment/ImportPeserta/get_peserta')?>",
                dataType : "JSON",
                data : {id_peserta:id_peserta},
                success: function(data){
                	$.each(data,function(nama, nip){
            $('#ModalaAddPapi').modal('show');
            $('[name="id_peserta"]').val(id_peserta);
			$('[name="nama_edit"]').val(data.nama);
			$('[name="nip_edit"]').val(data.nip);
        });
                }
            });
            return false;
        });

	function copy(){
		var nama 		= document.getElementById('nama');
		var nip 		= document.getElementById('nip');
	  
		var user 		= document.getElementById('nama_user');
		var user_name 	= document.getElementById('username');
  
		user.value 		= nama.value;
		user_name.value = nip.value;   			
	}	
	
    $(document).ready(function () {
        $('#myTablePeserta').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
	
</script>
