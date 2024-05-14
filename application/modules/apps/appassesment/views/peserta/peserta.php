<style>
.button {
  background-color: #04AA6D; /* Green */
  border: none;
  color: white;
  padding: 10px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  /*margin: 4px 2px;*/
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #04AA6D;
}

.button1:hover {
  background-color: #04AA6D;
  color: white;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}

.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
}

.button3:hover {
  background-color: #f44336;
  color: white;
}

.button4 {
  background-color: white;
  color: black;
  border: 2px solid #e7e7e7;
}

.button4:hover {background-color: #e7e7e7;}

.button5 {
  background-color: white;
  color: black;
  border: 2px solid #555555;
}

.button5:hover {
  background-color: #555555;
  color: white;
}
</style>





<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-university" aria-hidden="true"></i>&nbsp; Peserta Assessment</h3>
    </div>
<!-- /.col-lg-12 -->
</div>

<!--
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading" style="background:#124f8b;">
				<div class="btn btn-info btn-xs pull-right " onclick="history.go(-1); return false;"><i class="fa fa-backward fa-fw"></i> Sync SIMSDM</div>
				<i class="fa fa-users" aria-hidden="true"></i> &nbsp; TEST INTEGRASI DATA SIMSDM
            </div>
		
			<div class="panel-body">
			
				<div class="table-responsive">
					<table width="100%" class="table table-striped table-bordered table-hover" id="tableSimsdm">	
						<thead>
							<tr>
								<th style="text-align:center;">No.</th>
								<th style="text-align:center;">Nama</th>
								<th style="text-align:center;">Pangkat/Gol.</th>
								<th style="text-align:center;">Unit Kerja</th>
								<th style="text-align:center;">Status Asesmen</th>
								<th style="text-align:center;">Rekomendasi Asesmen</th>
							</tr>
						</thead>
						<tbody>
							<?//php 
							$no=1;
							foreach ($//data_simsdm->result() as $key){ ?>
								<tr>
									<td style="text-align:center;"><?//php echo $no++; ?></td>
									<td><?//php echo $key->nama; ?> <br> NIP. <b><?//php echo $key->nip; ?></b> <br> Status Pegawai : <b><?//php echo $key->status_pegawai; ?></b></td>
									<td><b><?//php echo $key->pangkat; ?></b> || ( <?//php echo $key->tmt_pangkat; ?> ) <br> <?//php echo $key->jenis_jabatan; ?></td>
									<td><?//php echo $key->nama_jabatan; ?> || ( <?//php echo $key->tmt_jabatan; ?> ) <br><b>pada</b> <?//php echo $key->biro; ?></td>
									<td style="text-align:center;"><button class="button button1">Green</button></td>
									<td style="text-align:center;"><button class="button button3" onclick="myFunction()">Belum</button></td>
									<td style="text-align:center;"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> <br> Optimal</td>
								</tr>
							<?//php } ?>
						</tbody>
					</table>
				</div>	
			
            </div>
			
        </div>
    </div>
</div>
-->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading" style="background:#124f8b;">
				<!--<div class="btn btn-warning btn-xs pull-right " onclick="history.go(-1); return false;"><i class="fa fa-backward fa-fw"></i> Kembali</div>-->
				<i class="fa fa-users" aria-hidden="true"></i> &nbsp; Data Peserta Assessment
            </div>
		
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading" style="background:#1976d2;">
								<i class="fa fa-flag" aria-hidden="true"></i> &nbsp; Assessment
							</div>
							<div class="panel-body">
								<div class="table-responsive">
									<table width="100%" class="table table-bordered table-hover table-striped" id="MyDataTableUkom">
										<thead>
											<tr>
												<th style="width:8%;text-align:center;">No.</th>
												<th style="width:30%;text-align:center;">Nama</th>
												<th style="width:30%;text-align:center;">Unit Kerja</th>
												<th style="width:20%;text-align:center;">Hasil</th>
												<th style="width:20%;text-align:center;">Tgl. Ukom</th>
											</tr>
										</thead>
										<tbody>
											<?php 
											$no = 1;
											foreach ($data_peserta as $key=>$val)
											{ ?>
												<tr>
													<td style="width:10%;text-align:center;">
														<div class="dropdown">
															<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $no++; ?></button>
															<ul class="dropdown-menu">
															  <li><a href="<?php echo base_url();?>appassesment/peserta/get_internal/<?php echo $val['nip']; ?>" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-search"></i>&nbsp; Detail</a></li>
															</ul>
														</div>								
													</td>
													<td><?php echo $val['nama']; ?> <br> NIP. <b><?php echo $val['nip']; ?></b> </td>
													<td><?php echo $val['jabatan']; ?> <br> <b> pada </b> <?php echo $val['unker']; ?> </td>
													<td style="width: 150.2px;">
														<?php
															$array_datas = array();
															$x = 1;
															while ($x <= $val['star_pot']) {
															echo '<i class="fa fa-star" style="color:#e7bf1e;"></i>';
															$x++;
															}
														?><br>							
														Potensi : <b><?php echo $val['capaian_pot']; ?></b><br>
														Kategori : <b><?php echo $val['rekom_pot']; ?></b>
													</td>
													<td style="width: 95px;"><b><?php echo $val['tgl_keg']; ?></b><br>
														<?php
															$array_datas = array();
															$x = $val['expired'];
															if ($x == 'Berlaku') {
															  echo '<div class="" style="background-color:#3a8d07;color:#fff;text-align:center;">Berlaku</div>';
															} else {
															  echo '<div class="" style="background-color:#f00;color:#fff;text-align:center;">Tidak Berlaku</div>';
															}											
														?>	
															s.d <?php echo $val['nextukom']; ?>
													</td>
												</tr>
											
											
											
											
											<?php } ?>
										</tbody>
									</table>	
								</div>
							</div>
						</div>
					</div>
					<!--
					<div class="col-lg-6">
						<div class="panel panel-default">
							<div class="panel-heading" style="background:#1976d2;">
								<i class="fa fa-flag" aria-hidden="true"></i> &nbsp; Respondent SJT
							</div>
							<div class="panel-body">
								<div class="table-responsive">
									<table width="100%" class="table table-bordered table-hover table-striped" id="MyDataTableSJT">
										<thead>
											<tr>
												<th style="width:8%;text-align:center;">No.</th>
												<th style="width:40%;text-align:center;">Nama</th>
												<th style="width:30%;text-align:center;">Unit Kerja</th>
												<th style="width:30%;text-align:center;">Rekomendasi</th>
												<!--
												<th style="width:20%;text-align:center;">Pangkat / Jenjang</th>
												
											</tr>
										</thead>
										<tbody id="show_data_sjt" >
										</tbody>
									</table>	
								</div>
							</div>
						</div>
					</div>
					-->
				</div>
            </div>
			
        </div>
    </div>
</div>

<script type="text/javascript">
/*
    $(document).ready(function(){
		tampil_data();   //pemanggilan fungsi tampil data.
        function tampil_data(){
            $.ajax({
				type  : 'POST',
                url   : '<?php echo site_url('appassesment/peserta/data_peserta');?>',
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
								'<i class=""></i>'+no+'</button>'+
									'<ul class="dropdown-menu" role="menu">'+
										'<li role="presentation"><a href="<?php echo base_url();?>appassesment/peserta/get_internal/'+data[i].nip+'");" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-binoculars" aria-hidden="true"></i> Detail</a></li>'+' '+
									'</ul>'+
								'</td></div>'+
                                '<td>'+data[i].nama+' <br/> <b>NIP. '+data[i].nip+'</b><br/> '+data[i].pangkat+' - ( <b>'+data[i].jenjang+'</b> ) </td>'+
								'<td>'+data[i].nama_jabatan+' <br><b>pada</b> '+data[i].biro+'</td>'+
                                '<td>'+data[i].expired+'</td>'+
								'</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }
	});
*/	
	
    $(document).ready(function(){
		tampil_data_sjt();   //pemanggilan fungsi tampil data.
        function tampil_data_sjt(){
            $.ajax({
				type  : 'POST',
                url   : '<?php echo site_url('appassesment/peserta/data_peserta_sjt');?>',
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
								'<i class=""></i>'+no+'</button>'+
									'<ul class="dropdown-menu" role="menu">'+
										'<li role="presentation"><a href="<?php echo base_url();?>appassesment/peserta/get_peserta_sjt/'+data[i].nip+'");" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-binoculars" aria-hidden="true"></i> Detail</a></li>'+' '+
									'</ul>'+
								'</td></div>'+
                                '<td>'+data[i].nama+' <br/> <b>NIP. '+data[i].nip+'</b><br/> <b>'+data[i].jenjang_jabatan+'</b> </td>'+
                                '<td>'+data[i].unit_kerja+'</td>'+
                                '<td>'+data[i].kesimpulan+'</td>'+
								'</tr>';
                    }
                    $('#show_data_sjt').html(html);
                }
 
            });
        }
	});
	
	
	$(document).ready(function () {
        $('#MyDataTableUkom').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
			//"pageLength": 5,
            buttons: [
                'copy', 'excel'
            ]
        });
    });
	
	$(document).ready(function () {
        $('#MyDataTableSJT').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
			"pageLength": 5,
            buttons: [
                'copy', 'excel'
            ]
        });
    });
	
	$(document).ready(function () {
        $('#tableSimsdm').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'excel'
            ]
        });
    });
	

function myFunction() {
  alert("ooppss..!! coming soon");
}	
	
	
</script>
