<html>
<head>
	<meta charset="UTF-8">
	<link href="<?=base_url('assets/css/plugins/morris.css');?>" rel="stylesheet">
	<script src="<?php echo base_url() ?>assets/js/plugins/morris/raphael.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/plugins/morris/morris.js"></script>
	<script src="<?php echo base_url() ?>assets/js/plugins/morris/morris.min.js"></script>
</head>

<body>

<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-tachometer" aria-hidden="true"></i> &nbsp; Dashboard Hasil Penilaian</h3>
    </div>
</div>
<!--REKOMENDASI -->
<div class="row">
	<div class="col-lg-12">
		<div class="panel-group" id="accordion">
			<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse1" style="text-decoration:none">
							<i class="fa fa-star-o" aria-hidden="true"></i>&nbsp; Rekomendasi</a>
						</h4>
					</div>
				<div id="collapse1" class="panel-collapse collapse in">
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-6">    
								<div class="panel panel-default">
									<div class="panel-heading">
										<i class="fa fa-bar-chart-o fa-fw"></i>&nbsp; Grafik Pemetaan
									</div>
									<div class="panel-body">
										<div id="graph_pemetaan"></div>
										<div class="table-responsive">    
											<table width="100%" class="table table-bordered table-hover table-striped" id="tablePemetaan">
												<thead>
													<tr>
														<th style="text-align:center;width:5%;">Optimal</th>
														<th style="text-align:center;width:5%;">Cukup Optimal</th>
														<th style="text-align:center;width:5%;">Kurang Optimal</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($hitung_rekom->result() as $key){ ?>
														<tr>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																<a href="" style="text-decoration:none;"><?php echo $key->optimal; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																<a href="" style="text-decoration:none;"><?php echo $key->cukup; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																<a href="" style="text-decoration:none;"><?php echo $key->kurang; ?></a>
																</button>
															</td>
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
										<i class="fa fa-folder" aria-hidden="true"></i>&nbsp; Detail
									</div>
									<div class="panel-body">
										<div class="table-responsive">    
											<table width="100%" class="table table-bordered table-hover table-striped" id="tablePemetaanDetail">
												<thead>
													<tr>
														<th style="text-align:center;width:5%;">Level</th>
														<th style="text-align:center;width:10%;">Optimal</th>
														<th style="text-align:center;width:10%;">Cukup Optimal</th>
														<th style="text-align:center;width:10%;">Kurang Optimal</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($detail_rekom->result() as $key){ ?>
													<tr>
														<td>JPT Pertama</td>
															<td style="text-align:center;width:5%;">
															<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
															<a href="" style="text-decoration:none;"><?php echo $key->op_jptp; ?></a>
															</button>
														</td>
														<td style="text-align:center;width:5%;">
															<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
															<a href="" style="text-decoration:none;"><?php echo $key->ckp_jptp; ?></a>
															</button>
														</td>
															<td style="text-align:center;width:5%;">
															<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
															<a href="" style="text-decoration:none;"><?php echo $key->krg_jptp; ?></a>
															</button>
														</td>
													</tr>
													<tr>
														<td>Administrator</td>
														<td style="text-align:center;width:5%;">
															<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
															<a href="" style="text-decoration:none;"><?php echo $key->op_tiga; ?></a>
															</button>
														</td>
														<td style="text-align:center;width:5%;">
															<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
															<a href="" style="text-decoration:none;"><?php echo $key->ckp_tiga; ?></a>
															</button>
														</td>
														<td style="text-align:center;width:5%;">
															<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
															<a href="" style="text-decoration:none;"><?php echo $key->krg_tiga; ?></a>
															</button>
														</td>
													</tr>
													<tr>
													<td>Pengawas/Sub Koord.</td>
													<td style="text-align:center;width:5%;">
														<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
														<a href="" style="text-decoration:none;"><?php echo $key->op_dua; ?></a>
														</button>  
													</td>
													<td style="text-align:center;width:5%;">
														<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
														<a href="" style="text-decoration:none;"><?php echo $key->ckp_dua; ?></a>
														</button>
													</td>
													<td style="text-align:center;width:5%;">
														<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
														<a href="" style="text-decoration:none;"><?php echo $key->krg_dua; ?></a>
														</button>
													</td>
													</tr>
													<tr>
														<td>JF Madya</td>
														<td style="text-align:center;width:5%;">
															<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
															<a href="" style="text-decoration:none;"><?php echo $key->op_madya; ?></a>
															</button>
														</td>
														<td style="text-align:center;width:5%;">
															<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
															<a href="" style="text-decoration:none;"><?php echo $key->ckp_madya; ?></a>
															</button>
														</td>
														<td style="text-align:center;width:5%;">
															<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
															<a href="" style="text-decoration:none;"><?php echo $key->krg_madya; ?></a>
															</button>
														</td>
													</tr>
													<tr>
														<td>JF Muda</td>
														<td style="text-align:center;width:5%;">
															<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
															<a href="" style="text-decoration:none;"><?php echo $key->op_muda; ?></a>
															</button>
														</td>
														<td style="text-align:center;width:5%;">
															<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
															<a href="" style="text-decoration:none;"><?php echo $key->ckp_muda; ?></a>
															</button>
														</td>
														<td style="text-align:center;width:5%;">
															<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
															<a href="" style="text-decoration:none;"><?php echo $key->krg_muda; ?></a>
															</button>
														</td>
													</tr>
													<tr>
														<td>JF Pertama</td>
														<td style="text-align:center;width:5%;">
															<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
															<a href="" style="text-decoration:none;"><?php echo $key->op_pertama; ?></a>
															</button>
														</td>
														<td style="text-align:center;width:5%;">
															<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
															<a href="" style="text-decoration:none;"><?php echo $key->ckp_pertama; ?></a>
															</button>
														</td>
														<td style="text-align:center;width:5%;">
															<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
															<a href="" style="text-decoration:none;"><?php echo $key->krg_pertama; ?></a>
															</button>
														</td>
													</tr>
													<tr>
														<td>JF Terampil</td>
														<td style="text-align:center;width:5%;">
															<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
															<a href="" style="text-decoration:none;"><?php echo $key->op_terampil; ?></a>
															</button>
														</td>
														<td style="text-align:center;width:5%;">
															<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
															<a href="" style="text-decoration:none;"><?php echo $key->ckp_terampil; ?></a>
															</button>
														</td>
														<td style="text-align:center;width:5%;">
															<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
															<a href="" style="text-decoration:none;"><?php echo $key->krg_terampil; ?></a>
															</button>
														</td>
													</tr>
													<tr>
														<td>JF Pelaksana</td>
														<td style="text-align:center;width:5%;">
															<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
															<a href="" style="text-decoration:none;"><?php echo $key->op_satu; ?></a>
															</button>
														</td>
														<td style="text-align:center;width:5%;">
															<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
															<a href="" style="text-decoration:none;"><?php echo $key->ckp_satu; ?></a>
															</button>
														</td>
														<td style="text-align:center;width:5%;">
															<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
															<a href="" style="text-decoration:none;"><?php echo $key->krg_satu; ?></a>
															</button>
														</td>
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
	
<!--SARAN PENGEMBANGAN -->
<div class="row">
	<div class="col-lg-12">
		<div class="panel-group" id="accordion">
			<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapse2" style="text-decoration:none">
							<i class="fa fa-star-o" aria-hidden="true"></i>&nbsp; Saran Pengembangan</a>
						</h4>
					</div>
				<div class="panel-body">
							<div id="graph_pemetaan"></div>
							<div class="table-responsive">
								<table width="100%" class="table table-bordered table-hover table-striped" id="tableSpeng">
									<thead>
										<tr>
											<th style="text-align:center;width:10%;">Saran Pengembangan</th>
											<th style="text-align:center;width:5%;">INT</th>
											<th style="text-align:center;width:5%;">KS</th>
											<th style="text-align:center;width:5%;">KOM</th>
											<th style="text-align:center;width:5%;">OPH</th>
											<th style="text-align:center;width:5%;">PP</th>
											<th style="text-align:center;width:5%;">PDO</th>
											<th style="text-align:center;width:5%;">MP</th>
											<th style="text-align:center;width:5%;">PK</th>
											<th style="text-align:center;width:5%;">PB</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td style="text-align:left;width:10%;">Level 1, 2, 3 dan 4</td>
											<td style="text-align:center;width:5%;">
												<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
													<a href="" style="text-decoration:none;">0</a>
												</button>
											</td>
											<td style="text-align:center;width:5%;">
												<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
													<a href="" style="text-decoration:none;">0</a>
												</button>
											</td>
											<td style="text-align:center;width:5%;">
												<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
													<a href="" style="text-decoration:none;">0</a>
												</button>
											</td>
											<td style="text-align:center;width:5%;">
												<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
													<a href="" style="text-decoration:none;">0</a>
												</button>
											</td>
											<td style="text-align:center;width:5%;">
												<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
													<a href="" style="text-decoration:none;">0</a>
												</button>
											</td>
											<td style="text-align:center;width:5%;">
												<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
													<a href="" style="text-decoration:none;">0</a>
												</button>
											</td>
											<td style="text-align:center;width:5%;">
												<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
													<a href="" style="text-decoration:none;">0</a>
												</button>
											</td>
											<td style="text-align:center;width:5%;">
												<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
													<a href="" style="text-decoration:none;">0</a>
												</button>
											</td>
											<td style="text-align:center;width:5%;">
												<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
													<a href="" style="text-decoration:none;">0</a>
												</button>
											</td>
										</tr>
										<tr>
											<td style="text-align:left;width:10%;">Level 2, 3 dan 4</td>
											<td style="text-align:center;width:5%;">
												<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
													<a href="" style="text-decoration:none;">0</a>
												</button>
											</td>
											<td style="text-align:center;width:5%;">
												<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
													<a href="" style="text-decoration:none;">0</a>
												</button>
											</td>
											<td style="text-align:center;width:5%;">
												<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
													<a href="" style="text-decoration:none;">0</a>
												</button>
											</td>
											<td style="text-align:center;width:5%;">
												<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
													<a href="" style="text-decoration:none;">0</a>
												</button>
											</td>
											<td style="text-align:center;width:5%;">
												<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
													<a href="" style="text-decoration:none;">0</a>
												</button>
											</td>
											<td style="text-align:center;width:5%;">
												<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
													<a href="" style="text-decoration:none;">0</a>
												</button>
											</td>
											<td style="text-align:center;width:5%;">
												<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
													<a href="" style="text-decoration:none;">0</a>
												</button>
											</td>
											<td style="text-align:center;width:5%;">
												<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
													<a href="" style="text-decoration:none;">0</a>
												</button>
											</td>
											<td style="text-align:center;width:5%;">
												<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
													<a href="" style="text-decoration:none;">0</a>
												</button>
											</td>
										</tr>
										<tr>
											<td style="text-align:left;width:10%;">Level 3 dan 4</td>
											<td style="text-align:center;width:5%;">
												<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
													<a href="" style="text-decoration:none;">0</a>
												</button>
											</td>
											<td style="text-align:center;width:5%;">
												<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
													<a href="" style="text-decoration:none;">0</a>
												</button>
											</td>
											<td style="text-align:center;width:5%;">
												<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
													<a href="" style="text-decoration:none;">0</a>
												</button>
											</td>
											<td style="text-align:center;width:5%;">
												<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
													<a href="" style="text-decoration:none;">0</a>
												</button>
											</td>
											<td style="text-align:center;width:5%;">
												<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
													<a href="" style="text-decoration:none;">0</a>
												</button>
											</td>
											<td style="text-align:center;width:5%;">
												<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
													<a href="" style="text-decoration:none;">0</a>
												</button>
											</td>
											<td style="text-align:center;width:5%;">
												<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
													<a href="" style="text-decoration:none;">0</a>
												</button>
											</td>
											<td style="text-align:center;width:5%;">
												<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
													<a href="" style="text-decoration:none;">0</a>
												</button>
											</td>
											<td style="text-align:center;width:5%;">
												<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
													<a href="" style="text-decoration:none;">0</a>
												</button>
											</td>
										</tr>
										<tr>
											<td style="text-align:left;width:10%;">Level 4</td>
											<td style="text-align:center;width:5%;">
												<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
													<a href="" style="text-decoration:none;">0</a>
												</button>
											</td>
											<td style="text-align:center;width:5%;">
												<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
													<a href="" style="text-decoration:none;">0</a>
												</button>
											</td>
											<td style="text-align:center;width:5%;">
												<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
													<a href="" style="text-decoration:none;">0</a>
												</button>
											</td>
											<td style="text-align:center;width:5%;">
												<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
													<a href="" style="text-decoration:none;">0</a>
												</button>
											</td>
											<td style="text-align:center;width:5%;">
												<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
													<a href="" style="text-decoration:none;">0</a>
												</button>
											</td>
											<td style="text-align:center;width:5%;">
												<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
													<a href="" style="text-decoration:none;">0</a>
												</button>
											</td>
											<td style="text-align:center;width:5%;">
												<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
													<a href="" style="text-decoration:none;">0</a>
												</button>
											</td>
											<td style="text-align:center;width:5%;">
												<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
													<a href="" style="text-decoration:none;">0</a>
												</button>
											</td>
											<td style="text-align:center;width:5%;">
												<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
													<a href="" style="text-decoration:none;">0</a>
												</button>
											</td>
										</tr>
									</tbody>
								</table>
							</div>	
					<div id="collapse2" class="panel-collapse collapse">
						<div class="panel-body">
							<div class="panel-group" id="accordion">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse3" style="text-decoration:none">
											<i class="fa fa-bar-chart-o fa-fw"></i>&nbsp; Jenjang JPTP / JF Madya
										</h4>
									</div>
									<div id="collapse3" class="panel-collapse collapse">
										<div class="panel-body">
											<div id="graph_pemetaan"></div>
											<div class="table-responsive">
												<table width="100%" class="table table-bordered table-hover table-striped" id="tableJenJPTP">
													<thead>
														<tr>
															<th style="text-align:center;width:10%;">Saran Pengembangan</th>
															<th style="text-align:center;width:5%;">INT</th>
															<th style="text-align:center;width:5%;">KS</th>
															<th style="text-align:center;width:5%;">KOM</th>
															<th style="text-align:center;width:5%;">OPH</th>
															<th style="text-align:center;width:5%;">PP</th>
															<th style="text-align:center;width:5%;">PDO</th>
															<th style="text-align:center;width:5%;">MP</th>
															<th style="text-align:center;width:5%;">PK</th>
															<th style="text-align:center;width:5%;">PB</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td style="text-align:left;width:10%;">Level 1, 2, 3 dan 4</td>
															<?php foreach ($hitung_komp_jptp->result() as $key){ ?>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->int_1_2_3_4; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->ks_1_2_3_4; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->kom_1_2_3_4; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->oph_1_2_3_4; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->pp_1_2_3_4; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->pdo_1_2_3_4; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->mp_1_2_3_4; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->pk_1_2_3_4; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->pb_1_2_3_4; ?></a>
																</button>
															</td>
															<?php } ?>
														</tr>
														<tr>
															<td style="text-align:left;width:10%;">Level 2, 3 dan 4</td>
															<?php foreach ($hitung_komp_jptp->result() as $key){ ?>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->int_2_3_4; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->ks_2_3_4; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->kom_2_3_4; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->oph_2_3_4; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->pp_2_3_4; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->pdo_2_3_4; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->mp_2_3_4; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->pk_2_3_4; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->pb_2_3_4; ?></a>
																</button>
															</td>
															<?php } ?>
														</tr>
														<tr>
															<td style="text-align:left;width:10%;">Level 3 dan 4</td>
															<?php foreach ($hitung_komp_jptp->result() as $key){ ?>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->int_3_4; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->ks_3_4; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->kom_3_4; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->oph_3_4; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->pp_3_4; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->pdo_3_4; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->mp_3_4; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->pk_3_4; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->pb_3_4; ?></a>
																</button>
															</td>
															<?php } ?>
														</tr>
														<tr>
															<td style="text-align:left;width:10%;">Level 4</td>
															<?php foreach ($hitung_komp_jptp->result() as $key){ ?>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->int_4; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->ks_4; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->kom_4; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->oph_4; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->pp_4; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->pdo_4; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->mp_4; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->pk_4; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->pb_4; ?></a>
																</button>
															</td>
															<?php } ?>
														</tr>
													</tbody>
												</table>	
											</div>
										</div>
									</div>
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse4" style="text-decoration:none">
											<i class="fa fa-bar-chart-o fa-fw"></i>&nbsp; Jenjang Administrator
										</h4>
									</div>
									<div id="collapse4" class="panel-collapse collapse">
										<div class="panel-body">
											<div id="graph_pemetaan"></div>
											<div class="table-responsive">
												<table width="100%" class="table table-bordered table-hover table-striped" id="tableJenAdm">
													<thead>
														<tr>
															<th style="text-align:center;width:10%;">Saran Pengembangan</th>
															<th style="text-align:center;width:5%;">INT</th>
															<th style="text-align:center;width:5%;">KS</th>
															<th style="text-align:center;width:5%;">KOM</th>
															<th style="text-align:center;width:5%;">OPH</th>
															<th style="text-align:center;width:5%;">PP</th>
															<th style="text-align:center;width:5%;">PDO</th>
															<th style="text-align:center;width:5%;">MP</th>
															<th style="text-align:center;width:5%;">PK</th>
															<th style="text-align:center;width:5%;">PB</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td style="text-align:left;width:10%;">Level 1, 2, dan 3</td>
															<?php foreach ($hitung_komp_adm->result() as $key){ ?>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->int_1_2_3; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->ks_1_2_3; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->kom_1_2_3; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->oph_1_2_3; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->pp_1_2_3; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->pdo_1_2_3; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->mp_1_2_3; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->pk_1_2_3; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->pb_1_2_3; ?></a>
																</button>
															</td>
															<?php } ?>
														</tr>
														<tr>
															<td style="text-align:left;width:10%;">Level 2 dan 3</td>
															<?php foreach ($hitung_komp_adm->result() as $key){ ?>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->int_2_3; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->ks_2_3; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->kom_2_3; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->oph_2_3; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->pp_2_3; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->pdo_2_3; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->mp_2_3; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->pk_2_3; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->pb_2_3; ?></a>
																</button>
															</td>
															<?php } ?>
														</tr>
														<tr>
															<td style="text-align:left;width:10%;">Level 3</td>
															<?php foreach ($hitung_komp_adm->result() as $key){ ?>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->int_3; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->ks_3; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->kom_3; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->oph_3; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->pp_3; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->pdo_3; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->mp_3; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->pk_3; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->pb_3; ?></a>
																</button>
															</td>
															<?php } ?>
														</tr>
													</tbody>
												</table>	
											</div>
										</div>
									</div>
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse5" style="text-decoration:none">
											<i class="fa fa-bar-chart-o fa-fw"></i>&nbsp; Jenjang Pengawas/Sub Koord. / JF Muda / JF Pertama
										</h4>
									</div>
									<div id="collapse5" class="panel-collapse collapse">
										<div class="panel-body">
											<div id="graph_pemetaan"></div>
											<div class="table-responsive">
												<table width="100%" class="table table-bordered table-hover table-striped" id="tableJenPengawas">
													<thead>
														<tr>
															<th style="text-align:center;width:10%;">Saran Pengembangan</th>
															<th style="text-align:center;width:5%;">INT</th>
															<th style="text-align:center;width:5%;">KS</th>
															<th style="text-align:center;width:5%;">KOM</th>
															<th style="text-align:center;width:5%;">OPH</th>
															<th style="text-align:center;width:5%;">PP</th>
															<th style="text-align:center;width:5%;">PDO</th>
															<th style="text-align:center;width:5%;">MP</th>
															<th style="text-align:center;width:5%;">PK</th>
															<th style="text-align:center;width:5%;">PB</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td style="text-align:left;width:10%;">Level 1 dan 2</td>
															<?php foreach ($hitung_komp_pengawas->result() as $key){ ?>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->int_1_2; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->ks_1_2; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->kom_1_2; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->oph_1_2; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->pp_1_2; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->pdo_1_2; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->mp_1_2; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->pk_1_2; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->pb_1_2; ?></a>
																</button>
															</td>
															<?php } ?>
														</tr>
														<tr>
															<td style="text-align:left;width:10%;">Level 2</td>
															<?php foreach ($hitung_komp_pengawas->result() as $key){ ?>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->int_2; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->ks_2; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->kom_2; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->oph_2; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->pp_2; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->pdo_2; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->mp_2; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->pk_2; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->pb_2; ?></a>
																</button>
															</td>
														<?php } ?>	
														</tr>
													</tbody>
												</table>	
											</div>										
										</div>
									</div>
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse6" style="text-decoration:none">
											<i class="fa fa-bar-chart-o fa-fw"></i>&nbsp; Jenjang Pelaksana / JF Terampil
									</div>
									<div id="collapse6" class="panel-collapse collapse">
										<div class="panel-body">
											<div id="graph_pemetaan"></div>
											<div class="table-responsive">
												<table width="100%" class="table table-bordered table-hover table-striped" id="tableJenPelaksana">
													<thead>
														<tr>
															<th style="text-align:center;width:10%;">Saran Pengembangan</th>
															<th style="text-align:center;width:5%;">INT</th>
															<th style="text-align:center;width:5%;">KS</th>
															<th style="text-align:center;width:5%;">KOM</th>
															<th style="text-align:center;width:5%;">OPH</th>
															<th style="text-align:center;width:5%;">PP</th>
															<th style="text-align:center;width:5%;">PDO</th>
															<th style="text-align:center;width:5%;">MP</th>
															<th style="text-align:center;width:5%;">PK</th>
															<th style="text-align:center;width:5%;">PB</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td style="text-align:left;width:10%;">Level 1</td>
															<?php foreach ($hitung_komp_pelaksana->result() as $key){ ?>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->int_1; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->ks_1; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->kom_1; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->oph_1; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->pp_1; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->pdo_1; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->mp_1; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->pk_1; ?></a>
																</button>
															</td>
															<td style="text-align:center;width:5%;">
																<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
																	<a href="" style="text-decoration:none;"><?php echo $key->pb_1; ?></a>
																</button>
															</td>
															<?php } ?>
														</tr>
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

	
</body>		
</html>
	
	
<script type="text/javascript">	
$(document).ready(function () {
		tampil_data();   //pemanggilan fungsi tampil data.
        function tampil_data(){
            $.ajax({
				type  : 'POST',
                url   : '<?php echo site_url('appassesment/Dashboard/data_kegiatan');?>',
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
										'<li role="presentation"><a href="'+data[i].link_doc+'" class="btn btn-secondary pull-left item_edit" data="'+data[i].id_kegiatan+'" role="menuitem" tabindex="-1" style="cursor:pointer;" target="_blank"><i class="glyphicon glyphicon-book""></i> Dokumen</a></li>'+' '+
									'</ul>'+
								'</td></div>'+
                                '<td>'+data[i].nama_kegiatan+' <br/> Tgl. <b>'+data[i].tgl_keg+'</b></td>'+
                                '<td>'+data[i].jenis_kegiatan+' <br/><b>'+data[i].instansi+'</b></td>'+
                                '<td style="text-align:center;font-weight:bold;">'+data[i].jml+'</td>'+
								'</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }
		
 
});

//================================================================================================================================================

    $(document).ready(function () {
        $('#tablePemetaan').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
    
    $(document).ready(function () {
        $('#tablePemetaanDetail').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
    
    
    $(document).ready(function () {
        $('#tablePenyelenggaraan').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
    $(document).ready(function () {
        $('#tableRekapPeserta').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
	
    $(document).ready(function () {
        $('#tableRekSP').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

    $(document).ready(function () {
        $('#tableJenJPTP').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

    $(document).ready(function () {
        $('#tableJenAdm').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

    $(document).ready(function () {
        $('#tableJenPengawas').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

    $(document).ready(function () {
        $('#tableJenPelaksana').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

    $(document).ready(function () {
        $('#tableSpeng').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

        Morris.Bar({
          element: 'graph_pemetaan',
          data: <?php echo $chart_pemetaan;?>,
          xkey: '', 
          ykeys: ['optimal', 'cukup', 'kurang'],
          labels: ['Optimal', 'Cukup Optimal', 'Kurang optimal'],
          hideHover: 'auto'
        });
/*
        Morris.Bar({
          element: 'graph_seleksi',
          data: <?php echo $chart_seleksi;?>,
          xkey: '',
          ykeys: ['ms', 'mms', 'tms'],
          labels: ['MS', 'MMS', 'TMS']
        });
*/		

		
</script>	
	