<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-list-ol" aria-hidden="true"></i>&nbsp; Formula</h3>
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
						<li role="presentation"><a role="menuitem" class="btn btn-secondary pull-left" tabindex="-1" style="cursor:pointer;" href="#" data-toggle="modal" data-target="#ModalaAddPot"> <i class="glyphicon glyphicon-plus"></i> Tambah Referensi Potensi</a></li>
						<li role="presentation"><a role="menuitem" class="btn btn-secondary pull-left" tabindex="-1" style="cursor:pointer;" href="#" data-toggle="modal" data-target="#ModalaAdd"> <i class="glyphicon glyphicon-plus"></i> Tambah Referensi Kompetensi</a></li>
					</ul>
				</div>
				&nbsp; Referensi Rumus Penghitungan
            </div>
            <div class="panel-body">
				<div class="panel-group" id="accordion">
					<div class="panel panel-default">
						<div class="panel-heading">
						<div class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse1" style="text-decoration:none"># &nbsp; Referensi Bobot Potensi</a>
						</div>
						</div>
						<div id="collapse1" class="panel-collapse collapse">
							<div class="panel-body">
								<div class="table-responsive">
									<table width="100%" class="table table-bordered table-hover table-striped" id="myDataTable1">
										<thead>
											<th>No</th>
											<th>Kompetensi</th>
											<th>Kapasitas Berpikir</th>
											<th>Sikap Kerja</th>
											<th>Motivasi</th>
											<th>Karakter</th>
										</thead>
										<tbody id="potensi">
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
						<div class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse2" style="text-decoration:none"># &nbsp; Referensi Bobot Kompetensi Level 4 (Sekda/JPTP/Utama/Madya)</a>
						</div>
						</div>
						<div id="collapse2" class="panel-collapse collapse">
							<div class="panel-body">
								<div class="table-responsive">
									<table width="100%" class="table table-bordered table-hover table-striped" id="myDataTable2">
										<thead>
											<th>No</th>
											<th>Kompetensi</th>
											<th>LGD</th>
											<th>ANKAS</th>
											<th>PW</th>
											<th>BEI</th>
										</thead>
										<tbody id="level4">
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
						<div class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse3" style="text-decoration:none"># &nbsp; Referensi Bobot Kompetensi Level 3 (Administrator/Pengawas/Muda/Pertama)</a>
						</div>
						</div>
						<div id="collapse3" class="panel-collapse collapse">
							<div class="panel-body">
								<div class="table-responsive">
									<table width="100%" class="table table-bordered table-hover table-striped" id="myDataTable3">
										<thead>
											<th>No</th>
											<th>Kompetensi</th>
											<th>LGD</th>
											<th>ANKAS</th>
											<th>PW</th>
											<th>BEI</th>
										</thead>
										<tbody id="level3">
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
						<div class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse4" style="text-decoration:none"># &nbsp; Referensi Bobot Kompetensi Level 2 (Administrator/Pengawas/Muda/Pertama)</a>
						</div>
						</div>
						<div id="collapse4" class="panel-collapse collapse">
							<div class="panel-body">
								<div class="table-responsive">
									<table width="100%" class="table table-bordered table-hover table-striped" id="myDataTable4">
										<thead>
											<th>No</th>
											<th>Kompetensi</th>
											<th>LGD</th>
											<th>ANKAS</th>
											<th>PW</th>
											<th>BEI</th>
										</thead>
										<tbody id="level2">
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
						<div class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse5" style="text-decoration:none"># &nbsp; Referensi Bobot Kompetensi Level 1 (Fungsional Umum)</a>
						</div>
						</div>
						<div id="collapse5" class="panel-collapse collapse">
							<div class="panel-body">
								<div class="table-responsive">
									<table width="100%" class="table table-bordered table-hover table-striped" id="myDataTable5">
										<thead>
											<th>No</th>
											<th>Kompetensi</th>
											<th>LGD</th>
											<th>ANKAS</th>
											<th>PW</th>
											<th>BEI</th>
										</thead>
										<tbody id="level1">
										</tbody>
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


<!-- MODAL ADD POTENSI -->
    <div class="modal fade" id="ModalaAddPot" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="row modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3 class="modal-title" id="myModalLabel">Tambah Referensi</h3>
				</div>
				<form class="form-horizontal" action="<?php echo base_url('appassesment/formula/simpan_reff_kompetensi');?>" method="post">
					<div class="modal-body">
							<div class="panel panel-primary">
								<div class="panel-body">
									<table width="100%" class="table table-bordered table-hover table-striped">
										<tr>
											<td><b>Kode Level</b></td>
											<td><input type="text" style="width:20%;" name="kd_level" /></td>
										</tr>
										<tr>
											<td><b>Nama Level</b></td>
											<td>
												<select type="dropdown" class="form-control" name="nama_level" id="nama_level" style="width:50%;">
												  <option>- pilih -</option>
												  <option value="Kapasitas Berpikir">Kapasitas Berpikir</option>
												  <option value="Sikap Kerja">Sikap Kerja</option>
												  <option value="Motivasi">Motivasi</option>
												  <option value="Karakter">Karakter</option>
												</select>
											</td>
										</tr>
										<tr>
											<td><b>Kompetensi</b></td>
											<td>
												<select type="dropdown" class="form-control" name="kompetensi" id="kompetensi" style="width:50%;">
												  <option>- pilih -</option>
												  <option value="DA">DA</option>
												  <option value="LB">LB</option>
												  <option value="SK">SK</option>
												  <option value="INI">INI</option>
												  <option value="DTK">DTK</option>
												  <option value="KEP">KEP</option>
												  <option value="DB">DB</option>
												  <option value="TJ">TJ</option>
												  <option value="KI">KI</option>
												  <option value="KD">KD</option>
												  <option value="SE">SE</option>
												</select>
											</td>
										</tr>
										<tr>
											<td><b>Nilai Kapasitas Berpikir</b></td>
											<td><input type="text" style="width:20%;" name="bobot_lgd" /></td>
										</tr>
										<tr>
											<td><b>NIlai Sikap Kerja</b></td>
											<td><input type="text" style="width:20%;" name="bobot_ankas" /></td>
										</tr>
										<tr>
											<td><b>Nilai Motivasi</b></td>
											<td><input type="text" style="width:20%;" name="bobot_pw" /></td>
										</tr>
										<tr>
											<td><b>Nilai Karakter</b></td>
											<td><input type="text" style="width:20%;" name="bobot_bei" /></td>
										</tr>
									</table>
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

<!-- MODAL EDIT POTENSI -->
    <div class="modal fade" id="ModalaEditPot" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="row modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3 class="modal-title" id="myModalLabel">Edit Referensi</h3>
				</div>
				<form class="form-horizontal">
					<div class="modal-body">
							<div class="panel panel-primary">
								<div class="panel-body">
									<table width="100%" class="table table-bordered table-hover table-striped">
										<tr>
											<td><b>Kode Level</b></td>
											<input type="hidden" class="form-control" name="id_reff_kompetensi_editPot" id="id_reff_kompetensiPot">
											<td><input type="text" style="width:20%;" name="kd_level_editPot" id="kd_levelPot" /></td>
										</tr>
										<tr>
											<td><b>Nama Level</b></td>
											<td>
												<select type="dropdown" class="form-control" name="nama_level_editPot" id="nama_levelPot" style="width:50%;">
												  <option>- pilih -</option>
												  <option value="Kapasitas Berpikir">Kapasitas Berpikir</option>
												  <option value="Sikap Kerja">Sikap Kerja</option>
												  <option value="Motivasi">Motivasi</option>
												  <option value="Karakter">Karakter</option>
												</select>
											</td>
										</tr>
										<tr>
											<td><b>Kompetensi</b></td>
											<td>
												<select type="dropdown" class="form-control" name="kompetensi_editPot" id="kompetensiPot" style="width:50%;">
												  <option>- pilih -</option>
												  <option value="DA">DA</option>
												  <option value="LB">LB</option>
												  <option value="SK">SK</option>
												  <option value="INI">INI</option>
												  <option value="DTK">DTK</option>
												  <option value="KEP">KEP</option>
												  <option value="DB">DB</option>
												  <option value="TJ">TJ</option>
												  <option value="KI">KI</option>
												  <option value="KD">KD</option>
												  <option value="SE">SE</option>
												</select>
											</td>
										</tr>
										<tr>
											<td><b>Nilai Kapasitas Berpikir</b></td>
											<td><input type="text" style="width:20%;" name="bobot_lgd_editPot" id="bobot_lgdPot" /></td>
										</tr>
										<tr>
											<td><b>Nilai Sikap Kerja</b></td>
											<td><input type="text" style="width:20%;" name="bobot_ankas_editPot" id="bobot_ankasPot" /></td>
										</tr>
										<tr>
											<td><b>Nilai Motivasi</b></td>
											<td><input type="text" style="width:20%;" name="bobot_pw_editPot" id="bobot_pwPot" /></td>
										</tr>
										<tr>
											<td><b>Nilai Karakter</b></td>
											<td><input type="text" style="width:20%;" name="bobot_bei_editPot" id="bobot_beiPot" /></td>
										</tr>
									</table>
								</div>
							</div>
						<div class="modal-footer">
								<button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
								<button class="btn btn-info" id="btn_update2">Update</button>
						</div>
					</div>
				</form>
			</div>
        </div>
    </div>

<!--MODAL HAPUS POTENSI -->
    <div class="modal fade" id="ModalHapus2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="row modal-content">
                <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Referensi</h4>
                </div>
                <form class="form-horizontal">
				<div class="modal-body">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="row">
									<input type="hidden" name="id_reff_kompetensi" id="textkode" value="">
									<div class="alert alert-danger"><p>Apakah Anda yakin mau menghapus Referensi ini ?</p></div>
										<div class="form-group">
											<label class="control-label col-xs-3">Kode Level</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="kd_level_hapusPot" id="kd_levelPot" readonly>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Nama Level</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="nama_level_hapusPot" id="nama_levelPot" readonly>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Kompetensi</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="kompetensi_hapusPot" id="kompetensiPot" readonly>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">bobot_lgd</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="bobot_lgd_hapusPot" id="bobot_lgdPot" readonly>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">bobot_ankas</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="bobot_ankas_hapusPot" id="bobot_ankasPot" readonly>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">bobot_pw</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="bobot_pw_hapusPot" id="bobot_pwPot" readonly>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">bobot_bei</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="bobot_bei_hapusPot" id="bobot_beiPot" readonly>
											</div>
										</div>
								</div>	
							</div>	
						</div>	
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
							<button class="btn_hapus btn btn-danger" id="btn_hapus2">Hapus</button>
						</div>
					</div>		
				</div>		
                </form>
            </div>
        </div>
    </div>

<!-- MODAL ADD KOMPETENSI -->
    <div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="row modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3 class="modal-title" id="myModalLabel">Tambah Referensi</h3>
				</div>
				<form class="form-horizontal" action="<?php echo base_url('appassesment/formula/simpan_reff_kompetensi');?>" method="post">
					<div class="modal-body">
							<div class="panel panel-primary">
								<div class="panel-body">
									<table width="100%" class="table table-bordered table-hover table-striped">
										<tr>
											<td><b>Kode Level</b></td>
											<td><input type="text" style="width:20%;" name="kd_level" /></td>
										</tr>
										<tr>
											<td><b>Nama Level</b></td>
											<td>
												<select type="dropdown" class="form-control" name="nama_level" id="nama_level" style="width:50%;">
												  <option>- pilih -</option>
												  <option value="Level 4">Level 4</option>
												  <option value="Level 3">Level 3</option>
												  <option value="Level 2">Level 2</option>
												  <option value="Level 1">Level 1</option>
												</select>
											</td>
										</tr>
										<tr>
											<td><b>Kompetensi</b></td>
											<td>
												<select type="dropdown" class="form-control" name="kompetensi" id="kompetensi" style="width:50%;">
												  <option>- pilih -</option>
												  <option value="INT">INT</option>
												  <option value="KS">KS</option>
												  <option value="KOM">KOM</option>
												  <option value="OPH">OPH</option>
												  <option value="PP">PP</option>
												  <option value="PDOL">PDOL</option>
												  <option value="MP">MP</option>
												  <option value="PK">PK</option>
												  <option value="PB">PB</option>
												</select>
											</td>
										</tr>
										<tr>
											<td><b>Bobot LGD</b></td>
											<td><input type="text" style="width:20%;" name="bobot_lgd" /></td>
										</tr>
										<tr>
											<td><b>Bobot Ankas</b></td>
											<td><input type="text" style="width:20%;" name="bobot_ankas" /></td>
										</tr>
										<tr>
											<td><b>Bobot PW</b></td>
											<td><input type="text" style="width:20%;" name="bobot_pw" /></td>
										</tr>
										<tr>
											<td><b>Bobot BEI</b></td>
											<td><input type="text" style="width:20%;" name="bobot_bei" /></td>
										</tr>
									</table>
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
					<h3 class="modal-title" id="myModalLabel">Edit Referensi</h3>
				</div>
				<form class="form-horizontal">
					<div class="modal-body">
							<div class="panel panel-primary">
								<div class="panel-body">
									<table width="100%" class="table table-bordered table-hover table-striped">
										<tr>
											<td><b>Kode Level</b></td>
											<input type="hidden" class="form-control" name="id_reff_kompetensi_edit" id="id_reff_kompetensi2">
											<td><input type="text" style="width:20%;" name="kd_level_edit" id="kd_level2" /></td>
										</tr>
										<tr>
											<td><b>Nama Level</b></td>
											<td>
												<select type="dropdown" class="form-control" name="nama_level_edit" id="nama_level2" style="width:50%;">
												  <option>- pilih -</option>
												  <option value="Level 4">Level 4</option>
												  <option value="Level 3">Level 3</option>
												  <option value="Level 2">Level 2</option>
												  <option value="Level 1">Level 1</option>
												</select>
											</td>
										</tr>
										<tr>
											<td><b>Kompetensi</b></td>
											<td>
												<select type="dropdown" class="form-control" name="kompetensi_edit" id="kompetensi2" style="width:50%;">
												  <option>- pilih -</option>
												  <option value="INT">INT</option>
												  <option value="KS">KS</option>
												  <option value="KOM">KOM</option>
												  <option value="OPH">OPH</option>
												  <option value="PP">PP</option>
												  <option value="PDOL">PDOL</option>
												  <option value="MP">MP</option>
												  <option value="PK">PK</option>
												  <option value="PB">PB</option>
												</select>
											</td>
										</tr>
										<tr>
											<td><b>Bobot LGD</b></td>
											<td><input type="text" style="width:20%;" name="bobot_lgd_edit" id="bobot_lgd2" /></td>
										</tr>
										<tr>
											<td><b>Bobot Ankas</b></td>
											<td><input type="text" style="width:20%;" name="bobot_ankas_edit" id="bobot_ankas2" /></td>
										</tr>
										<tr>
											<td><b>Bobot PW</b></td>
											<td><input type="text" style="width:20%;" name="bobot_pw_edit" id="bobot_pw2" /></td>
										</tr>
										<tr>
											<td><b>Bobot BEI</b></td>
											<td><input type="text" style="width:20%;" name="bobot_bei_edit" id="bobot_bei2" /></td>
										</tr>
									</table>
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
                        <h4 class="modal-title" id="myModalLabel">Hapus Referensi</h4>
                </div>
                <form class="form-horizontal">
				<div class="modal-body">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="row">
									<input type="hidden" name="id_reff_kompetensi" id="textkode" value="">
									<div class="alert alert-danger"><p>Apakah Anda yakin mau menghapus Referensi ini ?</p></div>
										<div class="form-group">
											<label class="control-label col-xs-3">Kode Level</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="kd_level_hapus" id="kd_level3" readonly>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Nama Level</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="nama_level_hapus" id="nama_level3" readonly>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Kompetensi</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="kompetensi_hapus" id="kompetensi3" readonly>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">bobot_lgd</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="bobot_lgd_hapus" id="bobot_lgd3" readonly>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">bobot_ankas</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="bobot_ankas_hapus" id="bobot_ankas3" readonly>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">bobot_pw</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="bobot_pw_hapus" id="bobot_pw3" readonly>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">bobot_bei</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="bobot_bei_hapus" id="bobot_bei3" readonly>
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
	
//====================================== potensi
	
		tampil_potensi();   //pemanggilan fungsi tampil data.
        function tampil_potensi(){
            $.ajax({
				type  : 'POST',
                url   : '<?php echo site_url('appassesment/formula/data_potensi');?>',
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
										'<li role="presentation"><a href="javascript:;" class="btn btn-secondary pull-left item_edit2" data="'+data[i].id_reff_kompetensi+'" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="glyphicon glyphicon-edit"></i> Edit</a></li>'+' '+
										'<li role="presentation"><a href="javascript:;" class="btn btn-secondary pull-left item_hapus2" data="'+data[i].id_reff_kompetensi+'" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="glyphicon glyphicon-trash"></i> Hapus</a></li>'+' '+
									'</ul>'+
								'</td></div>'+
                                '<td>'+data[i].kompetensi+'</td>'+
                                '<td>'+data[i].bobot_lgd+'</td>'+
                                '<td>'+data[i].bobot_ankas+'</td>'+
                                '<td>'+data[i].bobot_pw+'</td>'+
                                '<td>'+data[i].bobot_bei+'</td>'+
								'</tr>';
                    }
                    $('#potensi').html(html);
                }
 
            });
        }

		//GET UPDATE POTENSI
		$('#potensi').on('click','.item_edit2',function(){
            var id_reff_kompetensi =$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('appassesment/formula/get_level')?>",
                dataType : "JSON",
                data : {id_reff_kompetensi:id_reff_kompetensi},
                success: function(data){
                	$.each(data,function(kd_level, nama_level, kompetensi, bobot_lgd, bobot_ankas, bobot_pw, bobot_bei){
                    	$('#ModalaEditPot').modal('show');
						$('[name="id_reff_kompetensi_editPot"]').val(data.id_reff_kompetensi);
						$('[name="kd_level_editPot"]').val(data.kd_level);
						$('[name="nama_level_editPot"]').val(data.nama_level);
						$('[name="kompetensi_editPot"]').val(data.kompetensi);
						$('[name="bobot_lgd_editPot"]').val(data.bobot_lgd);
						$('[name="bobot_ankas_editPot"]').val(data.bobot_ankas);
						$('[name="bobot_pw_editPot"]').val(data.bobot_pw);
						$('[name="bobot_bei_editPot"]').val(data.bobot_bei);
            		});
                }
            });
            return false;
        });

        //UPDATE
		$('#btn_update2').on('click',function(){
            var id_reff_kompetensi	=$('#id_reff_kompetensiPot').val();
            var kd_level			=$('#kd_levelPot').val();
            var nama_level			=$('#nama_levelPot').val();
            var kompetensi			=$('#kompetensiPot').val();
            var bobot_lgd			=$('#bobot_lgdPot').val();
            var bobot_ankas			=$('#bobot_ankasPot').val();
            var bobot_pw			=$('#bobot_pwPot').val();
            var bobot_bei			=$('#bobot_beiPot').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('appassesment/formula/update_level')?>",
                dataType : "JSON",
                data : {id_reff_kompetensi:id_reff_kompetensi ,kd_level:kd_level, nama_level:nama_level, kompetensi:kompetensi, bobot_lgd:bobot_lgd, bobot_ankas:bobot_ankas, bobot_pw:bobot_pw, bobot_bei:bobot_bei},
                success: function(data){
                    $('[name="id_reff_kompetensi_editPot"]').val("");
                    $('[name="kd_level_editPot"]').val("");
                    $('[name="nama_level_editPot"]').val("");
                    $('[name="kompetensi_editPot"]').val("");
                    $('[name="bobot_lgd_editPot"]').val("");
                    $('[name="bobot_ankas_editPot"]').val("");
                    $('[name="bobot_pw_editPot"]').val("");
                    $('[name="bobot_bei_editPot"]').val("");
                    $('#ModalaEditPot').modal('hide');
                }
            });
			redirect($_SERVER['HTTP_REFERER']);
			return false;
        });
		
		
		//GET HAPUS POTENSI
		$('#potensi').on('click','.item_hapus2',function(){
            var id_reff_kompetensi =$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('appassesment/formula/get_level')?>",
                dataType : "JSON",
                data : {id_reff_kompetensi:id_reff_kompetensi},
                success: function(data){
                	$.each(data,function(kd_level, nama_level, kompetensi, bobot_lgd, bobot_ankas, bobot_pw, bobot_bei){
                    	$('#ModalHapusPot').modal('show');
						$('[name="id_reff_kompetensi"]').val(data.id_reff_kompetensi);
						$('[name="kd_level_hapusPot"]').val(data.kd_level);
						$('[name="nama_level_hapusPot"]').val(data.nama_level);
						$('[name="kompetensi_hapusPot"]').val(data.kompetensi);
						$('[name="bobot_lgd_hapusPot"]').val(data.bobot_lgd);
						$('[name="bobot_ankas_hapusPot"]').val(data.bobot_ankas);
						$('[name="bobot_pw_hapusPot"]').val(data.bobot_pw);
						$('[name="bobot_bei_hapusPot"]').val(data.bobot_bei);
            		});
                }
            });
            return false;
        });

        //HAPUS
        $('#btn_hapus2').on('click',function(){
            var id_reff_kompetensi =$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('appassesment/formula/hapus_level')?>",
            dataType : "JSON",
                    data : {id_reff_kompetensi: id_reff_kompetensi},
                    success: function(data){
                            $('#ModalHapusPot').modal('hide');
                    }
                });
			redirect($_SERVER['HTTP_REFERER']);
			return false;
        });
			
		

//====================================== kompetensi
		tampil_level4();   
        function tampil_level4(){
            $.ajax({
				type  : 'POST',
                url   : '<?php echo site_url('appassesment/formula/data_level4');?>',
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
										'<li role="presentation"><a href="javascript:;" class="btn btn-secondary pull-left item_edit" data="'+data[i].id_reff_kompetensi+'" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="glyphicon glyphicon-edit"></i> Edit</a></li>'+' '+
										'<li role="presentation"><a href="javascript:;" class="btn btn-secondary pull-left item_hapus" data="'+data[i].id_reff_kompetensi+'" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="glyphicon glyphicon-trash"></i> Hapus</a></li>'+' '+
									'</ul>'+
								'</td></div>'+
                                '<td>'+data[i].kompetensi+'</td>'+
                                '<td>'+data[i].bobot_lgd+'</td>'+
                                '<td>'+data[i].bobot_ankas+'</td>'+
                                '<td>'+data[i].bobot_pw+'</td>'+
                                '<td>'+data[i].bobot_bei+'</td>'+
								'</tr>';
                    }
                    $('#level4').html(html);
                }
 
            });
        }

		tampil_level3();   //pemanggilan fungsi tampil data.
        function tampil_level3(){
            $.ajax({
				type  : 'POST',
                url   : '<?php echo site_url('appassesment/formula/data_level3');?>',
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
										'<li role="presentation"><a href="javascript:;" class="btn btn-secondary pull-left item_edit" data="'+data[i].id_reff_kompetensi+'" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="glyphicon glyphicon-edit"></i> Edit</a></li>'+' '+
										'<li role="presentation"><a href="javascript:;" class="btn btn-secondary pull-left item_hapus" data="'+data[i].id_reff_kompetensi+'" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="glyphicon glyphicon-trash"></i> Hapus</a></li>'+' '+
									'</ul>'+
								'</td></div>'+
                                '<td>'+data[i].kompetensi+'</td>'+
                                '<td>'+data[i].bobot_lgd+'</td>'+
                                '<td>'+data[i].bobot_ankas+'</td>'+
                                '<td>'+data[i].bobot_pw+'</td>'+
                                '<td>'+data[i].bobot_bei+'</td>'+
								'</tr>';
                    }
                    $('#level3').html(html);
                }
 
            });
        }

		tampil_level2();   //pemanggilan fungsi tampil data.
        function tampil_level2(){
            $.ajax({
				type  : 'POST',
                url   : '<?php echo site_url('appassesment/formula/data_level2');?>',
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
										'<li role="presentation"><a href="javascript:;" class="btn btn-secondary pull-left item_edit" data="'+data[i].id_reff_kompetensi+'" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="glyphicon glyphicon-edit"></i> Edit</a></li>'+' '+
										'<li role="presentation"><a href="javascript:;" class="btn btn-secondary pull-left item_hapus" data="'+data[i].id_reff_kompetensi+'" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="glyphicon glyphicon-trash"></i> Hapus</a></li>'+' '+
									'</ul>'+
								'</td></div>'+
                                '<td>'+data[i].kompetensi+'</td>'+
                                '<td>'+data[i].bobot_lgd+'</td>'+
                                '<td>'+data[i].bobot_ankas+'</td>'+
                                '<td>'+data[i].bobot_pw+'</td>'+
                                '<td>'+data[i].bobot_bei+'</td>'+
								'</tr>';
                    }
                    $('#level2').html(html);
                }
 
            });
        }

		tampil_level1();   //pemanggilan fungsi tampil data.
        function tampil_level1(){
            $.ajax({
				type  : 'POST',
                url   : '<?php echo site_url('appassesment/formula/data_level1');?>',
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
										'<li role="presentation"><a href="javascript:;" class="btn btn-secondary pull-left item_edit" data="'+data[i].id_reff_kompetensi+'" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="glyphicon glyphicon-edit"></i> Edit</a></li>'+' '+
										'<li role="presentation"><a href="javascript:;" class="btn btn-secondary pull-left item_hapus" data="'+data[i].id_reff_kompetensi+'" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="glyphicon glyphicon-trash"></i> Hapus</a></li>'+' '+
									'</ul>'+
								'</td></div>'+
                                '<td>'+data[i].kompetensi+'</td>'+
                                '<td>'+data[i].bobot_lgd+'</td>'+
                                '<td>'+data[i].bobot_ankas+'</td>'+
                                '<td>'+data[i].bobot_pw+'</td>'+
                                '<td>'+data[i].bobot_bei+'</td>'+
								'</tr>';
                    }
                    $('#level1').html(html);
                }
 
            });
        }

//====================================== UPDATE

		//GET UPDATE LEVEL 4
		$('#level4').on('click','.item_edit',function(){
            var id_reff_kompetensi =$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('appassesment/formula/get_level')?>",
                dataType : "JSON",
                data : {id_reff_kompetensi:id_reff_kompetensi},
                success: function(data){
                	$.each(data,function(kd_level, nama_level, kompetensi, bobot_lgd, bobot_ankas, bobot_pw, bobot_bei){
                    	$('#ModalaEdit').modal('show');
						$('[name="id_reff_kompetensi_edit"]').val(data.id_reff_kompetensi);
						$('[name="kd_level_edit"]').val(data.kd_level);
						$('[name="nama_level_edit"]').val(data.nama_level);
						$('[name="kompetensi_edit"]').val(data.kompetensi);
						$('[name="bobot_lgd_edit"]').val(data.bobot_lgd);
						$('[name="bobot_ankas_edit"]').val(data.bobot_ankas);
						$('[name="bobot_pw_edit"]').val(data.bobot_pw);
						$('[name="bobot_bei_edit"]').val(data.bobot_bei);
            		});
                }
            });
            return false;
        });

		//GET UPDATE LEVEL 3
		$('#level3').on('click','.item_edit',function(){
            var id_reff_kompetensi =$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('appassesment/formula/get_level')?>",
                dataType : "JSON",
                data : {id_reff_kompetensi:id_reff_kompetensi},
                success: function(data){
                	$.each(data,function(kd_level, nama_level, kompetensi, bobot_lgd, bobot_ankas, bobot_pw, bobot_bei){
                    	$('#ModalaEdit').modal('show');
						$('[name="id_reff_kompetensi_edit"]').val(data.id_reff_kompetensi);
						$('[name="kd_level_edit"]').val(data.kd_level);
						$('[name="nama_level_edit"]').val(data.nama_level);
						$('[name="kompetensi_edit"]').val(data.kompetensi);
						$('[name="bobot_lgd_edit"]').val(data.bobot_lgd);
						$('[name="bobot_ankas_edit"]').val(data.bobot_ankas);
						$('[name="bobot_pw_edit"]').val(data.bobot_pw);
						$('[name="bobot_bei_edit"]').val(data.bobot_bei);
            		});
                }
            });
            return false;
        });

		//GET UPDATE LEVEL 2
		$('#level2').on('click','.item_edit',function(){
            var id_reff_kompetensi =$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('appassesment/formula/get_level')?>",
                dataType : "JSON",
                data : {id_reff_kompetensi:id_reff_kompetensi},
                success: function(data){
                	$.each(data,function(kd_level, nama_level, kompetensi, bobot_lgd, bobot_ankas, bobot_pw, bobot_bei){
                    	$('#ModalaEdit').modal('show');
						$('[name="id_reff_kompetensi_edit"]').val(data.id_reff_kompetensi);
						$('[name="kd_level_edit"]').val(data.kd_level);
						$('[name="nama_level_edit"]').val(data.nama_level);
						$('[name="kompetensi_edit"]').val(data.kompetensi);
						$('[name="bobot_lgd_edit"]').val(data.bobot_lgd);
						$('[name="bobot_ankas_edit"]').val(data.bobot_ankas);
						$('[name="bobot_pw_edit"]').val(data.bobot_pw);
						$('[name="bobot_bei_edit"]').val(data.bobot_bei);
            		});
                }
            });
            return false;
        });

		//GET UPDATE LEVEL 1
		$('#level1').on('click','.item_edit',function(){
            var id_reff_kompetensi =$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('appassesment/formula/get_level')?>",
                dataType : "JSON",
                data : {id_reff_kompetensi:id_reff_kompetensi},
                success: function(data){
                	$.each(data,function(kd_level, nama_level, kompetensi, bobot_lgd, bobot_ankas, bobot_pw, bobot_bei){
                    	$('#ModalaEdit').modal('show');
						$('[name="id_reff_kompetensi_edit"]').val(data.id_reff_kompetensi);
						$('[name="kd_level_edit"]').val(data.kd_level);
						$('[name="nama_level_edit"]').val(data.nama_level);
						$('[name="kompetensi_edit"]').val(data.kompetensi);
						$('[name="bobot_lgd_edit"]').val(data.bobot_lgd);
						$('[name="bobot_ankas_edit"]').val(data.bobot_ankas);
						$('[name="bobot_pw_edit"]').val(data.bobot_pw);
						$('[name="bobot_bei_edit"]').val(data.bobot_bei);
            		});
                }
            });
            return false;
        });

        //UPDATE
		$('#btn_update').on('click',function(){
            var id_reff_kompetensi	=$('#id_reff_kompetensi2').val();
            var kd_level			=$('#kd_level2').val();
            var nama_level			=$('#nama_level2').val();
            var kompetensi			=$('#kompetensi2').val();
            var bobot_lgd			=$('#bobot_lgd2').val();
            var bobot_ankas			=$('#bobot_ankas2').val();
            var bobot_pw			=$('#bobot_pw2').val();
            var bobot_bei			=$('#bobot_bei2').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('appassesment/formula/update_level')?>",
                dataType : "JSON",
                data : {id_reff_kompetensi:id_reff_kompetensi ,kd_level:kd_level, nama_level:nama_level, kompetensi:kompetensi, bobot_lgd:bobot_lgd, bobot_ankas:bobot_ankas, bobot_pw:bobot_pw, bobot_bei:bobot_bei},
                success: function(data){
                    $('[name="id_reff_kompetensi_edit"]').val("");
                    $('[name="kd_level_edit"]').val("");
                    $('[name="nama_level_edit"]').val("");
                    $('[name="kompetensi_edit"]').val("");
                    $('[name="bobot_lgd_edit"]').val("");
                    $('[name="bobot_ankas_edit"]').val("");
                    $('[name="bobot_pw_edit"]').val("");
                    $('[name="bobot_bei_edit"]').val("");
                    $('#ModalaEdit').modal('hide');
                }
            });
			redirect($_SERVER['HTTP_REFERER']);
			return false;
        });
		
//====================================== DELETE
		
		//GET HAPUS LEVEL 4
		$('#level4').on('click','.item_hapus',function(){
            var id_reff_kompetensi =$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('appassesment/formula/get_level')?>",
                dataType : "JSON",
                data : {id_reff_kompetensi:id_reff_kompetensi},
                success: function(data){
                	$.each(data,function(kd_level, nama_level, kompetensi, bobot_lgd, bobot_ankas, bobot_pw, bobot_bei){
                    	$('#ModalHapus').modal('show');
						$('[name="id_reff_kompetensi"]').val(data.id_reff_kompetensi);
						$('[name="kd_level_hapus"]').val(data.kd_level);
						$('[name="nama_level_hapus"]').val(data.nama_level);
						$('[name="kompetensi_hapus"]').val(data.kompetensi);
						$('[name="bobot_lgd_hapus"]').val(data.bobot_lgd);
						$('[name="bobot_ankas_hapus"]').val(data.bobot_ankas);
						$('[name="bobot_pw_hapus"]').val(data.bobot_pw);
						$('[name="bobot_bei_hapus"]').val(data.bobot_bei);
            		});
                }
            });
            return false;
        });

		//GET HAPUS LEVEL 3
		$('#level3').on('click','.item_hapus',function(){
            var id_reff_kompetensi =$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('appassesment/formula/get_level')?>",
                dataType : "JSON",
                data : {id_reff_kompetensi:id_reff_kompetensi},
                success: function(data){
                	$.each(data,function(kd_level, nama_level, kompetensi, bobot_lgd, bobot_ankas, bobot_pw, bobot_bei){
                    	$('#ModalHapus').modal('show');
						$('[name="id_reff_kompetensi"]').val(data.id_reff_kompetensi);
						$('[name="kd_level_hapus"]').val(data.kd_level);
						$('[name="nama_level_hapus"]').val(data.nama_level);
						$('[name="kompetensi_hapus"]').val(data.kompetensi);
						$('[name="bobot_lgd_hapus"]').val(data.bobot_lgd);
						$('[name="bobot_ankas_hapus"]').val(data.bobot_ankas);
						$('[name="bobot_pw_hapus"]').val(data.bobot_pw);
						$('[name="bobot_bei_hapus"]').val(data.bobot_bei);
            		});
                }
            });
            return false;
        });

		//GET HAPUS LEVEL 2
		$('#level2').on('click','.item_hapus',function(){
            var id_reff_kompetensi =$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('appassesment/formula/get_level')?>",
                dataType : "JSON",
                data : {id_reff_kompetensi:id_reff_kompetensi},
                success: function(data){
                	$.each(data,function(kd_level, nama_level, kompetensi, bobot_lgd, bobot_ankas, bobot_pw, bobot_bei){
                    	$('#ModalHapus').modal('show');
						$('[name="id_reff_kompetensi"]').val(data.id_reff_kompetensi);
						$('[name="kd_level_hapus"]').val(data.kd_level);
						$('[name="nama_level_hapus"]').val(data.nama_level);
						$('[name="kompetensi_hapus"]').val(data.kompetensi);
						$('[name="bobot_lgd_hapus"]').val(data.bobot_lgd);
						$('[name="bobot_ankas_hapus"]').val(data.bobot_ankas);
						$('[name="bobot_pw_hapus"]').val(data.bobot_pw);
						$('[name="bobot_bei_hapus"]').val(data.bobot_bei);
            		});
                }
            });
            return false;
        });

		//GET HAPUS LEVEL 1
		$('#level1').on('click','.item_hapus',function(){
            var id_reff_kompetensi =$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('appassesment/formula/get_level')?>",
                dataType : "JSON",
                data : {id_reff_kompetensi:id_reff_kompetensi},
                success: function(data){
                	$.each(data,function(kd_level, nama_level, kompetensi, bobot_lgd, bobot_ankas, bobot_pw, bobot_bei){
                    	$('#ModalHapus').modal('show');
						$('[name="id_reff_kompetensi"]').val(data.id_reff_kompetensi);
						$('[name="kd_level_hapus"]').val(data.kd_level);
						$('[name="nama_level_hapus"]').val(data.nama_level);
						$('[name="kompetensi_hapus"]').val(data.kompetensi);
						$('[name="bobot_lgd_hapus"]').val(data.bobot_lgd);
						$('[name="bobot_ankas_hapus"]').val(data.bobot_ankas);
						$('[name="bobot_pw_hapus"]').val(data.bobot_pw);
						$('[name="bobot_bei_hapus"]').val(data.bobot_bei);
            		});
                }
            });
            return false;
        });
		
        //HAPUS
        $('#btn_hapus').on('click',function(){
            var id_reff_kompetensi =$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('appassesment/formula/hapus_level')?>",
            dataType : "JSON",
                    data : {id_reff_kompetensi: id_reff_kompetensi},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_data();
                    }
                });
			redirect($_SERVER['HTTP_REFERER']);
			return false;
        });
			

//=================================================================== level 4

 });

    $(document).ready(function () {
        $('#myDataTable1').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
	});	

    $(document).ready(function () {
        $('#myDataTable2').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
	});	

    $(document).ready(function () {
        $('#myDataTable3').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
	});	

    $(document).ready(function () {
        $('#myDataTable4').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
	});	

    $(document).ready(function () {
        $('#myDataTable5').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
	});	

</script>
