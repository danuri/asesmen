<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp; Fungsi Query</h3>
    </div>
<!-- /.col-lg-12 -->
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
				<!--<div class="btn btn-warning btn-xs pull-right " onclick="history.go(-1); return false;"><i class="fa fa-backward fa-fw"></i> Kembali</div>-->
				<i class="fa fa-cubes" aria-hidden="true"></i>&nbsp; Fungsi dan Kegunaan Tombol
            </div>
            <div class="panel-body">
				<div class="row">
					<div class="col-lg-6">
						<div class="panel-group" id="accordion">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse1" style="text-decoration:none"> # Query Extend</a>
									</h4>
								</div>
								<div id="collapse1" class="panel-collapse collapse">
									<div class="panel-body">
								<?php if(!empty($this->session->flashdata('status'))){ ?>
									<div class="alert alert-info" role="alert"><?= $this->session->flashdata('status'); ?></div>
								<?php } ?>														
										<div class="table-responsive">
											<table width="100%" class="table table-bordered table-hover table-striped" id="tableQuery1">
												<thead>
													<tr>
														<th style="width:10%;">No.</th>
														<th style="width:100%;">Fungsi</th>
														<th style="width:50%;">Tombol</th>
													</tr>
												</thead>
												<tbody>
													<tr>
													<tr>
														<td style="width:10%;">1.</td>
														<td style="width:100%;">Update Password SHA1</td>
														<td><button  class="btn btn-default" style="color:#ffffff;width:100%;text-align:left;"><a href="<?php base_url() ;?>sync/update_passwd"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&ensp; Update SHA1 Password</a></button></td>
													</tr>
													<tr>
														<td style="width:10%;">2.</td>
														<td style="width:100%;">Update Hasil Ujian PAPI yang berisi nilai "null"</td>
														<td><button  class="btn btn-default" style="color:#ffffff;width:100%;text-align:left;"><a href="<?php base_url() ;?>sync/update_papi"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&ensp; Update PAPI</a></button></td>
													</tr>
													<tr>
														<td style="width:10%;">3.</td>
														<td style="width:100%;">Update Hasil Ujian SJT yang berisi nilai "null"</td>
														<td><button  class="btn btn-default" style="color:#ffffff;width:100%;text-align:left;"><a href="<?php base_url() ;?>sync/update_sjt"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&ensp; Update SJT</a></button></td>
													</tr>
													<tr>
														<td style="width:10%;">4.</td>
														<td style="width:100%;">Update Status Ket. "N"</td>
														<td><button  class="btn btn-default" style="color:#ffffff;width:100%;text-align:left;"><a href="<?php base_url() ;?>sync/status_y"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&ensp; Update Status Ket. "Y"</a></button></td>
													</tr>
													<tr>
														<td style="width:10%;">5.</td>
														<td style="width:100%;">Update Chart Grafik</td>
														<td><button  class="btn btn-default" style="color:#ffffff;width:100%;text-align:left;"><a href="<?php base_url() ;?>sync/update_chart"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&ensp; Update Grafik</a></button></td>
													</tr>
													<tr>
														<td style="width:10%;">6.</td>
														<td style="width:100%;">Insert Daftar hadir</td>
														<td><button  class="btn btn-default" style="color:#ffffff;width:100%;text-align:left;"><a href="<?php base_url() ;?>sync/kehadiran"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&ensp; Insert Daftar hadir</a></button></td>
													</tr>
													<tr>
														<td style="width:10%;">7.</td>
														<td style="width:100%;">Update Jadwal Wawancara dan LGD</td>
														<td><button  class="btn btn-default" style="color:#ffffff;width:100%;text-align:left;"><a href="<?php base_url() ;?>sync/update_jadwal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&ensp; Update Jadwal</a></button></td>
													</tr>
													<tr>
														<td style="width:10%;">8.</td>
														<td style="width:100%;">Update Table Data Hasil SJT</td>
														<td><button  class="btn btn-default" style="color:#ffffff;width:100%;text-align:left;"><a href="<?php base_url() ;?>sync/update_data_hasil_sjt"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&ensp; Update Data Hasil SJT</a></button></td>
													</tr>
													<tr>
														<td style="width:10%;">9.</td>
														<td style="width:100%;">Update Data SIMSDM</td>
														<td><button  class="btn btn-default" style="color:#ffffff;width:100%;text-align:left;"><a href="<?php base_url() ;?>sync/update_data_simsdm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&ensp; Update Data SIMSDM</a></button></td>
													</tr>
													<tr>
														<td style="width:10%;">9.</td>
														<td style="width:100%;">Update Data SJT</td>
														<td><button  class="btn btn-default" style="color:#ffffff;width:100%;text-align:left;"><a href="<?php base_url() ;?>sync/update_data_sjt"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&ensp; Update Data SJT</a></button></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse2" style="text-decoration:none"> # Query Y TO N</a>
										</h4>
								</div>
								<div id="collapse2" class="panel-collapse collapse">
									<div class="panel-body">
								<?php if(!empty($this->session->flashdata('status'))){ ?>
									<div class="alert alert-info" role="alert"><?= $this->session->flashdata('status'); ?></div>
								<?php } ?>														
										<div class="table-responsive">
											<table width="100%" class="table table-bordered table-hover table-striped" id="tableQuery2">
												<thead>
													<tr>
														<th style="width:10%;">No.</th>
														<th style="width:100%;">Fungsi</th>
														<th style="width:50%;">Tombol</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td style="width:10%;">1.</td>
														<td style="width:100%;">Update Keterangan Status Registrasi Y ke N</td>
														<td><button  class="btn btn-default" style="color:#ffffff;width:100%;text-align:left;"><a href="<?php base_url() ;?>Sync/reg_y"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&ensp; Registrasi Y to N</a></button></td>
													</tr>
													<tr>
														<td style="width:10%;">2.</td>
														<td style="width:100%;">Update Keterangan Status CI Satu Y ke N</td>
														<td><button  class="btn btn-default" style="color:#ffffff;width:100%;text-align:left;"><a href="<?php base_url() ;?>Sync/ci_satu_y"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&ensp; Registrasi Y to N</a></button></td>
													</tr>
													<tr>
														<td style="width:10%;">3.</td>
														<td style="width:100%;">Update Keterangan Status CI Dua Y ke N</td>
														<td><button  class="btn btn-default" style="color:#ffffff;width:100%;text-align:left;"><a href="<?php base_url() ;?>Sync/ci_dua_y"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&ensp; Registrasi Y to N</a></button></td>
													</tr>
													<tr>
														<td style="width:10%;">4.</td>
														<td style="width:100%;">Update Keterangan Status Q-Kom Satu Y ke N</td>
														<td><button  class="btn btn-default" style="color:#ffffff;width:100%;text-align:left;"><a href="<?php base_url() ;?>Sync/qkom_satu_y"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&ensp; Registrasi Y to N</a></button></td>
													</tr>
													<tr>
														<td style="width:10%;">5.</td>
														<td style="width:100%;">Update Keterangan Status Q-Kom Dua Y ke N</td>
														<td><button  class="btn btn-default" style="color:#ffffff;width:100%;text-align:left;"><a href="<?php base_url() ;?>Sync/qkom_dua_y"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&ensp; Registrasi Y to N</a></button></td>
													</tr>
													<tr>
														<td style="width:10%;">6.</td>
														<td style="width:100%;">Update Keterangan Status APM Satu Y ke N</td>
														<td><button  class="btn btn-default" style="color:#ffffff;width:100%;text-align:left;"><a href="<?php base_url() ;?>Sync/apm_satu_y"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&ensp; Registrasi Y to N</a></button></td>
													</tr>
													<tr>
														<td style="width:10%;">7.</td>
														<td style="width:100%;">Update Keterangan Status APM Dua Y ke N</td>
														<td><button  class="btn btn-default" style="color:#ffffff;width:100%;text-align:left;"><a href="<?php base_url() ;?>Sync/apm_dua_y"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&ensp; Registrasi Y to N</a></button></td>
													</tr>
													<tr>
														<td style="width:10%;">8.</td>
														<td style="width:100%;">Update Keterangan Status PAPI Y ke N</td>
														<td><button  class="btn btn-default" style="color:#ffffff;width:100%;text-align:left;"><a href="<?php base_url() ;?>Sync/papi_y"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&ensp; Registrasi Y to N</a></button></td>
													</tr>
													<tr>
														<td style="width:10%;">9.</td>
														<td style="width:100%;">Update Keterangan Status Ankas Y ke N</td>
														<td><button  class="btn btn-default" style="color:#ffffff;width:100%;text-align:left;"><a href="<?php base_url() ;?>Sync/ankas_y"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&ensp; Registrasi Y to N</a></button></td>
													</tr>
													<tr>
														<td style="width:10%;">10.</td>
														<td style="width:100%;">Update Keterangan Status Data Peserta Y ke N</td>
														<td><button  class="btn btn-default" style="color:#ffffff;width:100%;text-align:left;"><a href="<?php base_url() ;?>Sync/data_peserta_y"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&ensp; Registrasi Y to N</a></button></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse3" style="text-decoration:none"> # Query 3</a>
									</h4>
								</div>
								<div id="collapse3" class="panel-collapse collapse">
									<div class="panel-body">
										<div class="table-responsive">
											<table width="100%" class="table table-bordered table-hover table-striped" id="tableQuery3">
												<thead>
													<tr>
														<th>Fungsi</th>
														<th>Tombol</th>
													</tr>
												</thead>
												<tbody>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="panel-group" id="accordion">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse4" style="text-decoration:none"> # Query APM</a>
									</h4>
								</div>
								<div id="collapse4" class="panel-collapse collapse">
									<div class="panel-body">
										<div class="table-responsive">
											<table width="100%" class="table table-bordered table-hover table-striped" id="tableQuery4">
												<thead>
													<tr>
														<th>No.</th>
														<th>Fungsi</th>
														<th>Tombol</th>
													</tr>
												</thead>
												<tbody>
												    <!--
													<tr>
														<td style="width:10%;">1.</td>
														<td style="width:100%;">Update Hasil Ujian APM Set 1 yang berisi nilai "null"</td>
														<td><button  class="btn btn-default" style="color:#ffffff;width:100%;text-align:left;"><a href="<?php base_url() ;?>sync/update_apm1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&ensp; Update APM Set 1</a></button></td>
													</tr>
													<tr>
														<td style="width:10%;">2.</td>
														<td style="width:100%;">Hitung Nilai Hasil Ujian APM Set 1</td>
														<td><button  class="btn btn-default" style="color:#ffffff;width:100%;text-align:left;"><a href="<?php base_url() ;?>sync/hitung_apm1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&ensp; Hitung Nilai APM Set 1</a></button></td>
													</tr>
													<tr>
														<td style="width:10%;">4.</td>
														<td style="width:100%;">Update Hasil Ujian APM Set 2 yang berisi nilai "null"</td>
														<td><button  class="btn btn-default" style="color:#ffffff;width:100%;text-align:left;"><a href="<?php base_url() ;?>sync/update_apm2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&ensp; Update APM Set 2</a></button></td>
													</tr>
													-->
													<tr>
														<td style="width:10%;">5.</td>
														<td style="width:100%;">Hitung Nilai Hasil Ujian APM Set 2</td>
														<td><button  class="btn btn-default" style="color:#ffffff;width:100%;text-align:left;"><a href="<?php base_url() ;?>sync/hitung_apm2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&ensp; Hitung Nilai APM Set 2</a></button></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse5" style="text-decoration:none"> # Query CFIT</a>
										</h4>
								</div>
								<div id="collapse5" class="panel-collapse collapse">
									<div class="panel-body">
								<?php if(!empty($this->session->flashdata('status'))){ ?>
									<div class="alert alert-info" role="alert"><?= $this->session->flashdata('status'); ?></div>
								<?php } ?>														
										<div class="table-responsive">
											<table width="100%" class="table table-bordered table-hover table-striped" id="tableQuery5">
												<thead>
													<tr>
														<th>Fungsi</th>
														<th>Tombol</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td style="width:10%;">1.</td>
														<td style="width:100%;">Hitung Nilai CFIT</td>
														<td><button  class="btn btn-default" style="color:#ffffff;width:100%;text-align:left;"><a href="<?php base_url() ;?>sync/update_nilai_cfit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&ensp; Hitung Nilai CFIT</a></button></td>
													</tr>
													<tr>
														<td style="width:10%;">2.</td>
														<td style="width:100%;">Insert Hasil CFIT</td>
														<td><button  class="btn btn-default" style="color:#ffffff;width:100%;text-align:left;"><a href="<?php base_url() ;?>sync/insert_nilai_cfit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&ensp; Insert Hasil CFIT</a></button></td>
													</tr>
													<tr>
														<td style="width:10%;">3.</td>
														<td style="width:100%;">Update Kategori CFIT</td>
														<td><button  class="btn btn-default" style="color:#ffffff;width:100%;text-align:left;"><a href="<?php base_url() ;?>sync/update_kategori_cfit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&ensp; Update Kategori CFIT</a></button></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse6" style="text-decoration:none"> # Query 6</a>
									</h4>
								</div>
								<div id="collapse6" class="panel-collapse collapse">
									<div class="panel-body">
										<div class="table-responsive">
											<table width="100%" class="table table-bordered table-hover table-striped" id="tableQuery6">
												<thead>
													<tr>
														<th>Fungsi</th>
														<th>Tombol</th>
													</tr>
												</thead>
												<tbody>
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
            <div class="panel-body">
				<div class="row">
					<div class="col-lg-12">
						<div class="panel-group" id="accordion">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse7" style="text-decoration:none"> # Duplicate Data Table</a>
									</h4>
								</div>
								<div id="collapse7" class="panel-collapse collapse">
									<div class="panel-body">
										<ul class="nav nav-pills">
											<li class="active"><a href="#reg-pills" data-toggle="tab">Registrasi</a></li>
											<li><a href="#qkom1-pills" data-toggle="tab">Q-Kom Satu</a></li>
											<li><a href="#qkom2-pills" data-toggle="tab">Q-Kom Dua</a></li>
											<li><a href="#ci1-pills" data-toggle="tab">CI Satu</a></li>
											<li><a href="#ci2-pills" data-toggle="tab">CI Dua</a></li>
											<li><a href="#jadwal-pills" data-toggle="tab">Jadwal</a></li>
											<li><a href="#user-pills" data-toggle="tab">User</a></li>
											<li><a href="#papi-pills" data-toggle="tab">Papi</a></li>
											<li><a href="#apm1-pills" data-toggle="tab">APM-1</a></li>
											<li><a href="#apm2-pills" data-toggle="tab">APM-2</a></li>
											<li><a href="#ankas-pills" data-toggle="tab">Ankas</a></li>
										</ul>
											<div class="tab-content">
												<div class="tab-pane fade in active" id="reg-pills">
													<div class="panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
															<div class="btn btn-default btn-xs pull-right"><a href="<?php echo base_url('module/appassesment/sync/delete_duplicate_reg');?>"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp; Hapus Duplikat</a></div>
															&nbsp;	# Table Registrasi
															</h4>
														</div>
														<div class="panel-body">
													<?php if(!empty($this->session->flashdata('status'))){ ?>
														<div class="alert alert-info" role="alert"><?= $this->session->flashdata('status'); ?></div>
													<?php } ?>														
															<div class="table-responsive">
																<table width="100%" class="table table-bordered table-hover table-striped" id="tableQuery7">
																	<thead>
																		<tr>
																			<th>Aksi</th>
																			<th>ID Peserta</th>
																			<th>NIP</th>
																			<th>Nama</th>
																			<th>Duplikat</th>
																		</tr>
																	</thead>
																	<tbody id="registrasi">
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>		
												<div class="tab-pane fade " id="qkom1-pills">
													<div class="panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
															<div class="btn btn-default btn-xs pull-right"><a href="<?php echo base_url('module/appassesment/sync/delete_duplicate_qkom_satu');?>"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp; Hapus Duplikat Satu</a></div>
															&nbsp;	# Table Q-Kom
															</h4>
														</div>
														<div class="panel-body">
													<?php if(!empty($this->session->flashdata('status'))){ ?>
														<div class="alert alert-info" role="alert"><?= $this->session->flashdata('status'); ?></div>
													<?php } ?>														
															<div class="table-responsive">
																<table width="100%" class="table table-bordered table-hover table-striped" id="tableQuery8">
																	<thead>
																		<tr>
																			<th>Aksi</th>
																			<th>ID Q-Kom</th>
																			<th>NIP</th>
																			<th>Duplikat</th>
																		</tr>
																	</thead>
																	<tbody id="qkom1">
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>	
												<div class="tab-pane fade " id="qkom2-pills">
													<div class="panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
															<div class="btn btn-default btn-xs pull-right"><a href="<?php echo base_url('module/appassesment/sync/delete_duplicate_qkom_dua');?>"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp; Hapus Duplikat Dua</a></div>
															&nbsp;	# Table Q-Kom
															</h4>
														</div>
														<div class="panel-body">
													<?php if(!empty($this->session->flashdata('status'))){ ?>
														<div class="alert alert-info" role="alert"><?= $this->session->flashdata('status'); ?></div>
													<?php } ?>														
															<div class="table-responsive">
																<table width="100%" class="table table-bordered table-hover table-striped" id="tableQuery8">
																	<thead>
																		<tr>
																			<th>Aksi</th>
																			<th>ID Q-Kom</th>
																			<th>NIP</th>
																			<th>Duplikat</th>
																		</tr>
																	</thead>
																	<tbody id="qkom2">
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>		
												
												<div class="tab-pane fade " id="ci1-pills">
													<div class="panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
															<div class="btn btn-default btn-xs pull-right"><a href="<?php echo base_url('module/appassesment/sync/delete_duplicate_ci1');?>"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp; Hapus Duplikat</a></div>
															&nbsp;	# Table CI Satu
															</h4>
														</div>
														<div class="panel-body">
													<?php if(!empty($this->session->flashdata('status'))){ ?>
														<div class="alert alert-info" role="alert"><?= $this->session->flashdata('status'); ?></div>
													<?php } ?>														
															<div class="table-responsive">
																<table width="100%" class="table table-bordered table-hover table-striped" id="tableQuery9">
																	<thead>
																		<tr>
																			<th>Aksi</th>
																			<th>ID CI-1</th>
																			<th>NIP</th>
																			<th>Duplikat</th>
																		</tr>
																	</thead>
																	<tbody id="ci_1">
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>		
												<div class="tab-pane fade " id="ci2-pills">
													<div class="panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
															<div class="btn btn-default btn-xs pull-right"><a href="<?php echo base_url('module/appassesment/sync/delete_duplicate_ci2');?>"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp; Hapus Duplikat</a></div>
															&nbsp;	# Table CI Dua
															</h4>
														</div>
														<div class="panel-body">
													<?php if(!empty($this->session->flashdata('status'))){ ?>
														<div class="alert alert-info" role="alert"><?= $this->session->flashdata('status'); ?></div>
													<?php } ?>														
															<div class="table-responsive">
																<table width="100%" class="table table-bordered table-hover table-striped" id="tableQuery10">
																	<thead>
																		<tr>
																			<th>Aksi</th>
																			<th>ID CI-2</th>
																			<th>NIP</th>
																			<th>Duplikat</th>
																		</tr>
																	</thead>
																	<tbody id="ci_2">
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>		
												<div class="tab-pane fade " id="jadwal-pills">
													<div class="panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
															<div class="btn btn-default btn-xs pull-right"><a href="<?php echo base_url('module/appassesment/sync/delete_duplicate_jadwal');?>"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp; Hapus Duplikat</a></div>
															&nbsp;	# Table Jadwal Peserta
															</h4>
														</div>
														<div class="panel-body">
													<?php if(!empty($this->session->flashdata('status'))){ ?>
														<div class="alert alert-info" role="alert"><?= $this->session->flashdata('status'); ?></div>
													<?php } ?>														
															<div class="table-responsive">
																<table width="100%" class="table table-bordered table-hover table-striped" id="tableQuery11">
																	<thead>
																		<tr>
																			<th>Aksi</th>
																			<th>ID Jadwal</th>
																			<th>NIP</th>
																			<th>Duplikat</th>
																		</tr>
																	</thead>
																	<tbody id="jadwal">
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>		
												<div class="tab-pane fade " id="user-pills">
													<div class="panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
															<div class="btn btn-default btn-xs pull-right"><a href="<?php echo base_url('module/appassesment/sync/delete_duplicate_user');?>"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp; Hapus Duplikat</a></div>
															&nbsp;	# Table User
															</h4>
														</div>
														<div class="panel-body">
													<?php if(!empty($this->session->flashdata('status'))){ ?>
														<div class="alert alert-info" role="alert"><?= $this->session->flashdata('status'); ?></div>
													<?php } ?>														
															<div class="table-responsive">
																<table width="100%" class="table table-bordered table-hover table-striped" id="tableQuery12">
																	<thead>
																		<tr>
																			<th>Aksi</th>
																			<th>ID User</th>
																			<th>NIP</th>
																			<th>Duplikat</th>
																		</tr>
																	</thead>
																	<tbody id="user">
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>		
												<div class="tab-pane fade " id="papi-pills">
													<div class="panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
															<div class="btn btn-default btn-xs pull-right"><a href="<?php echo base_url('module/appassesment/sync/delete_duplicate_papi');?>"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp; Hapus Duplikat</a></div>
															&nbsp;	# Table Papi
															</h4>
														</div>
														<div class="panel-body">
													<?php if(!empty($this->session->flashdata('status'))){ ?>
														<div class="alert alert-info" role="alert"><?= $this->session->flashdata('status'); ?></div>
													<?php } ?>														
															<div class="table-responsive">
																<table width="100%" class="table table-bordered table-hover table-striped" id="tableQuery13">
																	<thead>
																		<tr>
																			<th>Aksi</th>
																			<th>ID PAPI</th>
																			<th>NIP</th>
																			<th>Duplikat</th>
																		</tr>
																	</thead>
																	<tbody id="papi">
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>		
												<div class="tab-pane fade " id="apm1-pills">
													<div class="panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
															<div class="btn btn-default btn-xs pull-right"><a href="<?php echo base_url('module/appassesment/sync/delete_duplicate_apm1');?>"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp; Hapus Duplikat</a></div>
															&nbsp;	# Table APM Set-1
															</h4>
														</div>
														<div class="panel-body">
													<?php if(!empty($this->session->flashdata('status'))){ ?>
														<div class="alert alert-info" role="alert"><?= $this->session->flashdata('status'); ?></div>
													<?php } ?>														
															<div class="table-responsive">
																<table width="100%" class="table table-bordered table-hover table-striped" id="tableQuery14">
																	<thead>
																		<tr>
																			<th>Aksi</th>
																			<th>ID APM Set-1</th>
																			<th>NIP</th>
																			<th>Duplikat</th>
																		</tr>
																	</thead>
																	<tbody id="apm_1">
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>		
												<div class="tab-pane fade " id="apm2-pills">
													<div class="panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
															<div class="btn btn-default btn-xs pull-right"><a href="<?php echo base_url('module/appassesment/sync/delete_duplicate_apm2');?>"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp; Hapus Duplikat</a></div>
															&nbsp;	# Table APM Set-2
															</h4>
														</div>
														<div class="panel-body">
													<?php if(!empty($this->session->flashdata('status'))){ ?>
														<div class="alert alert-info" role="alert"><?= $this->session->flashdata('status'); ?></div>
													<?php } ?>														
															<div class="table-responsive">
																<table width="100%" class="table table-bordered table-hover table-striped" id="tableQuery15">
																	<thead>
																		<tr>
																			<th>Aksi</th>
																			<th>ID APM Set-2</th>
																			<th>NIP</th>
																			<th>Duplikat</th>
																		</tr>
																	</thead>
																	<tbody id="apm_2">
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>		
												<div class="tab-pane fade " id="ankas-pills">
													<div class="panel-default">
														<div class="panel-heading">
															<h4 class="panel-title">
															<div class="btn btn-default btn-xs pull-right"><a href="<?php echo base_url('module/appassesment/sync/delete_duplicate_ankas');?>"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp; Hapus Duplikat</a></div>
															&nbsp;	# Table Ankas
															</h4>
														</div>
														<div class="panel-body">
													<?php if(!empty($this->session->flashdata('status'))){ ?>
														<div class="alert alert-info" role="alert"><?= $this->session->flashdata('status'); ?></div>
													<?php } ?>														
															<div class="table-responsive">
																<table width="100%" class="table table-bordered table-hover table-striped" id="tableQuery16">
																	<thead>
																		<tr>
																			<th>Aksi</th>
																			<th>ID Ankas</th>
																			<th>NIP</th>
																			<th>Duplikat</th>
																		</tr>
																	</thead>
																	<tbody id="ankas">
																	</tbody>
																	<tbody>
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
					</div>
				</div>
            </div>
            <div class="panel-body">
				<div class="row">
					<div class="col-lg-12">
						<div class="panel-group" id="accordion">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse8" style="text-decoration:none"> # Data Hasil CFIT</a>
									</h4>
								</div>
								<div id="collapse8" class="panel-collapse collapse">
									<div class="panel-body">
										<div class="table-responsive">
											<table width="100%" class="table table-bordered table-hover table-striped" id="tableQuery17">
												<thead>
													<tr>
														<th>Aksi</th>
														<th>Nama</th>
														<th>CFIT 1</th>
														<th>CFIT 2</th>
														<th>CFIT 3</th>
														<th>CFIT 4</th>
														<th>Total</th>
														<th>Norma IQ</th>
														<th>Kategori</th>
													</tr>
												</thead>
												<tbody>
												<?php foreach ($hasil_cfit->result() as $key){ 
												$no=0;
												$no++;
												?>
													<tr>
														<td><?php echo $no;?></td>
														<td><b><?php echo $key->nama; ?></b><br/> NIP. <?php echo $key->nip; ?></td>
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
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript">

    $(document).ready(function(){
		tampil_registrasi();
        function tampil_registrasi(){
            $.ajax({
				type  : 'POST',
                url   : '<?php echo site_url('appassesment/sync/duplicate_registrasi');?>',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
					var no=0
                    for(let i=0; i<data.length; i++){
						no++;
                        html += '<tr>'+
                                '<td>'+no+'</td>'+
                                '<td>'+data[i].id_peserta+'</td>'+
                                '<td>'+data[i].nip+'</td>'+
                                '<td>'+data[i].nama+'</td>'+
                                '<td>'+data[i].duplikat+'</td>'+
								'</tr>';
                    }
                    $('#registrasi').html(html);
                }
 
            });
        }
	 });

    $(document).ready(function(){
		tampil_qkom();
        function tampil_qkom(){
            $.ajax({
				type  : 'POST',
                url   : '<?php echo site_url('appassesment/sync/duplicate_qkom_satu');?>',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
					var no=0
                    for(let i=0; i<data.length; i++){
						no++;
                        html += '<tr>'+
                                '<td>'+no+'</td>'+
                                '<td>'+data[i].id_qkom_satu+'</td>'+
                                '<td>'+data[i].nip+'</td>'+
                                '<td>'+data[i].duplikat+'</td>'+
								'</tr>';
                    }
                    $('#qkom1').html(html);
                }
 
            });
        }
	 });
	 
    $(document).ready(function(){
		tampil_qkom();
        function tampil_qkom(){
            $.ajax({
				type  : 'POST',
                url   : '<?php echo site_url('appassesment/sync/duplicate_qkom_dua');?>',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
					var no=0
                    for(let i=0; i<data.length; i++){
						no++;
                        html += '<tr>'+
                                '<td>'+no+'</td>'+
                                '<td>'+data[i].id_qkom_dua+'</td>'+
                                '<td>'+data[i].nip+'</td>'+
                                '<td>'+data[i].duplikat+'</td>'+
								'</tr>';
                    }
                    $('#qkom2').html(html);
                }
 
            });
        }
	 });

	 

    $(document).ready(function(){
		tampil_ci_satu();
        function tampil_ci_satu(){
            $.ajax({
				type  : 'POST',
                url   : '<?php echo site_url('appassesment/sync/duplicate_ci1');?>',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
					var no=0
                    for(let i=0; i<data.length; i++){
						no++;
                        html += '<tr>'+
                                '<td>'+no+'</td>'+
                                '<td>'+data[i].id_ci+'</td>'+
                                '<td>'+data[i].nip+'</td>'+
                                '<td>'+data[i].duplikat+'</td>'+
								'</tr>';
                    }
                    $('#ci_1').html(html);
                }
 
            });
        }
	 });

    $(document).ready(function(){
		tampil_ci_dua();
        function tampil_ci_dua(){
            $.ajax({
				type  : 'POST',
                url   : '<?php echo site_url('appassesment/sync/duplicate_ci2');?>',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
					var no=0
                    for(let i=0; i<data.length; i++){
						no++;
                        html += '<tr>'+
                                '<td>'+no+'</td>'+
                                '<td>'+data[i].id_ci+'</td>'+
                                '<td>'+data[i].nip+'</td>'+
                                '<td>'+data[i].duplikat+'</td>'+
								'</tr>';
                    }
                    $('#ci_2').html(html);
                }
 
            });
        }
	 });

    $(document).ready(function(){
		tampil_jadwal();
        function tampil_jadwal(){
            $.ajax({
				type  : 'POST',
                url   : '<?php echo site_url('appassesment/sync/duplicate_jadwal');?>',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
					var no=0
                    for(let i=0; i<data.length; i++){
						no++;
                        html += '<tr>'+
                                '<td>'+no+'</td>'+
                                '<td>'+data[i].id_jadwal+'</td>'+
                                '<td>'+data[i].nip+'</td>'+
                                '<td>'+data[i].duplikat+'</td>'+
								'</tr>';
                    }
                    $('#jadwal').html(html);
                }
 
            });
        }
	 });

    $(document).ready(function(){
		tampil_user();
        function tampil_user(){
            $.ajax({
				type  : 'POST',
                url   : '<?php echo site_url('appassesment/sync/duplicate_user');?>',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
					var no=0
                    for(let i=0; i<data.length; i++){
						no++;
                        html += '<tr>'+
                                '<td>'+no+'</td>'+
                                '<td>'+data[i].user_id+'</td>'+
                                '<td>'+data[i].username+'</td>'+
                                '<td>'+data[i].duplikat+'</td>'+
								'</tr>';
                    }
                    $('#user').html(html);
                }
 
            });
        }
	 });

    $(document).ready(function(){
		tampil_ankas();
        function tampil_ankas(){
            $.ajax({
				type  : 'POST',
                url   : '<?php echo site_url('appassesment/sync/duplicate_ankas');?>',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
					var no=0
                    for(let i=0; i<data.length; i++){
						no++;
                        html += '<tr>'+
                                '<td>'+no+'</td>'+
                                '<td>'+data[i].id_peserta_ankas+'</td>'+
                                '<td>'+data[i].username+'</td>'+
                                '<td>'+data[i].duplikat+'</td>'+
								'</tr>';
                    }
                    $('#ankas').html(html);
                }
 
            });
        }
	 });

    $(document).ready(function(){
		tampil_papi();
        function tampil_papi(){
            $.ajax({
				type  : 'POST',
                url   : '<?php echo site_url('appassesment/sync/duplicate_papi');?>',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
					var no=0
                    for(let i=0; i<data.length; i++){
						no++;
                        html += '<tr>'+
                                '<td>'+no+'</td>'+
                                '<td>'+data[i].id_peserta_papi+'</td>'+
                                '<td>'+data[i].username+'</td>'+
                                '<td>'+data[i].duplikat+'</td>'+
								'</tr>';
                    }
                    $('#papi').html(html);
                }
 
            });
        }
	 });

    $(document).ready(function(){
		tampil_apm1();
        function tampil_apm1(){
            $.ajax({
				type  : 'POST',
                url   : '<?php echo site_url('appassesment/sync/duplicate_apm1');?>',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
					var no=0
                    for(let i=0; i<data.length; i++){
						no++;
                        html += '<tr>'+
                                '<td>'+no+'</td>'+
                                '<td>'+data[i].id_peserta_apm_satu+'</td>'+
                                '<td>'+data[i].username+'</td>'+
                                '<td>'+data[i].duplikat+'</td>'+
								'</tr>';
                    }
                    $('#apm_1').html(html);
                }
 
            });
        }
	 });

    $(document).ready(function(){
		tampil_apm2();
        function tampil_apm2(){
            $.ajax({
				type  : 'POST',
                url   : '<?php echo site_url('appassesment/sync/duplicate_apm2');?>',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
					var no=0
                    for(let i=0; i<data.length; i++){
						no++;
                        html += '<tr>'+
                                '<td>'+no+'</td>'+
                                '<td>'+data[i].id_peserta_apm_dua+'</td>'+
                                '<td>'+data[i].username+'</td>'+
                                '<td>'+data[i].duplikat+'</td>'+
								'</tr>';
                    }
                    $('#apm_2').html(html);
                }
 
            });
        }
	 });


	
//===================================

    $(document).ready(function () {
        $('#tableQuery1').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
	});	

    $(document).ready(function () {
        $('#tableQuery2').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
	});	

    $(document).ready(function () {
        $('#tableQuery3').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
	});	

    $(document).ready(function () {
        $('#tableQuery4').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
	});	

    $(document).ready(function () {
        $('#tableQuery5').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
	});	

    $(document).ready(function () {
        $('#tableQuery6').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
	});	

    $(document).ready(function () {
        $('#tableQuery7').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
	});	

    $(document).ready(function () {
        $('#tableQuery8').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
	});	

    $(document).ready(function () {
        $('#tableQuery9').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
	});	

    $(document).ready(function () {
        $('#tableQuery10').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
	});	

    $(document).ready(function () {
        $('#tableQuery11').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
	});	

    $(document).ready(function () {
        $('#tableQuery12').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
	});	

    $(document).ready(function () {
        $('#tableQuery13').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
	});	

    $(document).ready(function () {
        $('#tableQuery14').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
	});	

    $(document).ready(function () {
        $('#tableQuery15').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
	});	

    $(document).ready(function () {
        $('#tableQuery16').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
	});	

    $(document).ready(function () {
        $('#tableQuery17').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
	});	

</script>