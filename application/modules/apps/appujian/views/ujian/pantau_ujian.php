<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-binoculars" aria-hidden="true"></i>&nbsp; Pantau Ujian</h3>
    </div>
<!-- /.col-lg-12 -->
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
				<i class="fa fa-edit fa-fw"></i>&nbsp; Pemantauan Ujian Penilaian Kompetensi</a>
            </div>
            <div class="panel-body">
			    <ul class="nav nav-pills">
                    <li class="active"><a href="#reg-pills" data-toggle="tab">Registrasi</a></li>
                    <!--<li><a href="#regNon-pills" data-toggle="tab">Registrasi Non ASN</a></li>-->
                    <li><a href="#not_reg-pills" data-toggle="tab">Belum Registrasi</a></li>
                    <li><a href="#absen-pills" data-toggle="tab">Daftar Hadir</a></li>
                    <li><a href="#apm1-pills" data-toggle="tab">APM Set-1</a></li>
                    <li><a href="#apm2-pills" data-toggle="tab">APM Set-2</a></li>
                    <li><a href="#papi-pills" data-toggle="tab">PAPI Kostick</a></li>
                    <li><a href="#sjt-pills" data-toggle="tab">SJT</a></li>
                    <li><a href="#cfit-pills" data-toggle="tab">CFIT</a></li>
                    <li><a href="#ci-pills" data-toggle="tab">C.I</a></li>
                    <li><a href="#qkom-pills" data-toggle="tab">Q-Kom</a></li>
                    <!--<li><a href="#qkomNon-pills" data-toggle="tab">Q-Kom(Non-ASN)</a></li>-->
                    <li><a href="#ankas-pills" data-toggle="tab">Analisa Kasus</a></li>
                </ul>
			<div class="tab-content">
				<!--Registrasi-->
				<div class="tab-pane fade in active" id="reg-pills">
					<div class="panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<i class="fa fa-user fa-fw"></i> Daftar Registrasi Peserta
							</h4>
						</div>
						<div class="panel-body">
							<div class="table-responsive">
								<table width="100%" class="table table-bordered table-hover table-striped" id="MyDataTables1">
									<thead>
										<tr>
											<th>No.</th>
											<th>ID</th>
											<th>Nama</th>
											<th>Jabatan</th>
											<th>Tgl. Registrasi</th>
										</tr>
									</thead>
									<tbody id="regist">
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!--Registrasi Non ASN-->
				<div class="tab-pane fade" id="regNon-pills">
					<div class="panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<i class="fa fa-user fa-fw"></i> Daftar Registrasi Peserta Non ASN
							</h4>
						</div>
						<div class="panel-body">
							<div class="table-responsive">
								<table width="100%" class="table table-bordered table-hover table-striped" id="TablesRegNonASN">
									<thead>
										<tr>
											<th>No.</th>
											<th>ID</th>
											<th>Nama</th>
											<th>Jabatan</th>
											<th>Tgl. Registrasi</th>
										</tr>
									</thead>
									<tbody id="registNon">
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!--Belum Registrasi-->
				<div class="tab-pane fade" id="not_reg-pills">
					<div class="panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<i class="fa fa-user fa-fw"></i> Daftar Peserta Belum Registrasi
							</h4>
						</div>
						<div class="panel-body">
							<div class="table-responsive">
								<table width="100%" class="table table-bordered table-hover table-striped" id="MyDataTables10">
									<thead>
										<tr>
											<th style="width:5%">No.</th>
											<th style="width:30%">Nama</th>
											<th style="width:50%">Jabatan</th>
										</tr>
									</thead>
									<tbody id="not_reg">
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!--Daftar Hadir-->
				<div class="tab-pane fade" id="absen-pills">
					<div class="panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<i class="fa fa-check fa-fw"></i> Daftar Hadir Peserta Ujian
							</h4>	
						</div>
						<div class="panel-body">
							<div class="table-responsive">
								<table width="100%" class="table table-bordered table-hover table-striped" id="MyDataTables2">
									<thead>
										<tr>
											<th>No.</th>
											<th>Nama</th>
											<th>IP Address</th>
											<th>Tgl. Login</th>
										</tr>
									</thead>
									<tbody id="absen">
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!--APM Set-1-->
				<div class="tab-pane fade" id="apm1-pills">
					<div class="panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<i class="fa fa-flag fa-fw"></i> Hasil Advance Progresive Matrices (APM) SET-1
							</h4>
						</div>
						<div class="panel-body">
							<div class="table-responsive">
								<table width="100%" class="table table-bordered table-hover table-striped" id="MyDataTables3">
									<thead>
										<tr>
											<th style="width:10%">No.</th>
											<th style="width:25%">Nama</th>
											<th style="width:20%">Pangkat</th>
											<th style="width:50%">Jabatan</th>
											<th style="width:5%">Status</th>
										</tr>
									</thead>
									<tbody id="apm_set1">
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!--APM Set-2-->
				<div class="tab-pane fade" id="apm2-pills">
					<div class="panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
							<div class="btn btn-default btn-xs pull-right"><a href="<?php echo base_url();?>appassesment/jadwal_peserta/lihat_apm_dua/" data-toggle="modal" data-target="#ModalaAPM2" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-calculator"></i>&nbsp; Lihat APM Set-2</a></div>
								<i class="fa fa-flag fa-fw"></i> Hasil Advance Progresive Matrices (APM) SET-2
							</h4>
						</div>
						<div class="panel-body">
							<div class="table-responsive">
								<table width="100%" class="table table-bordered table-hover table-striped" id="MyDataTables4">
									<thead>
										<tr>
											<th style="width:10%">No.</th>
											<th style="width:25%">Nama</th>
											<th style="width:20%">Pangkat</th>
											<th style="width:50%">Jabatan</th>
											<th style="width:5%">Status</th>
										</tr>
									</thead>
									<tbody id="apm_set2">
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!--PAPI Kostick-->
				<div class="tab-pane fade" id="papi-pills">
					<div class="panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<i class="fa fa-flag fa-fw"></i> Hasil PAPI Kostick
							</h4>
						</div>
						<div class="panel-body">
							<div class="table-responsive">
								<table width="100%" class="table table-bordered table-hover table-striped" id="MyDataTables5">
									<thead>
										<tr>
											<th style="width:10%">No.</th>
											<th style="width:25%">Nama</th>
											<th style="width:20%">Pangkat</th>
											<th style="width:50%">Jabatan</th>
											<th style="width:5%">Kegiatan</th>
										</tr>
									</thead>
									<tbody id="papi">
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!--SJT-->
				<div class="tab-pane fade" id="sjt-pills">
					<div class="panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<div class="btn btn-default btn-xs pull-right " onclick="location.href='<?php echo base_url();?>appujian/Export_sjt/get_hasil_sjt/'"><i class="fa fa-print fa-fw"></i> Cetak Hasil</div>
								<i class="fa fa-flag fa-fw"></i> Hasil SJT
							</h4>
						</div>
						<div class="panel-body">
							<div class="table-responsive">
								<table width="100%" class="table table-bordered table-hover table-striped" id="MyDataTables6">
									<thead>
										<tr>
											<th>No.</th>
											<th>Nama</th>
											<th>Pangkat</th>
											<th>Jabatan</th>
											<th>Kegiatan</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody id="sjt">
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!--CFIT-->
				<div class="tab-pane fade" id="cfit-pills">
					<div class="panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
							<div class="btn btn-default btn-xs pull-right " data-toggle="modal" data-target="#ModalCfit" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-calculator"></i>&nbsp; Lihat Hasil CFIT</div>
								<i class="fa fa-flag fa-fw"></i> Hasil CFIT
							</h4>
						</div>
						<div class="panel-body">
							<div class="table-responsive">
								<table width="100%" class="table table-bordered table-hover table-striped" id="MyDataTables11">
									<thead>
										<tr>
											<th>No.</th>
											<th>Nama</th>
											<th>Gol./Jenjang</th>
											<th>Jabatan</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody id="cfit">
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!--CI-->
				<div class="tab-pane fade" id="ci-pills">
					<div class="panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<i class="fa fa-flag fa-fw"></i> Hasil Critical Incident
							</h4>
						</div>
						<div class="panel-body">
							<div class="table-responsive">
								<table width="100%" class="table table-bordered table-hover table-striped" id="MyDataTables7">
									<thead>
										<tr>
											<th style="width:10%">No.</th>
											<th style="width:10%">ID</th>
											<th style="width:25%">Nama</th>
											<th style="width:20%">Pangkat</th>
											<th style="width:50%">Jabatan</th>
											<th style="width:5%">Status</th>
										</tr>
									</thead>
									<tbody id="ci">
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!--Q-KOM-->
				<div class="tab-pane fade" id="qkom-pills">
					<div class="panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<i class="fa fa-flag fa-fw"></i> Hasil Q-Kompetensi
							</h4>
						</div>
						<div class="panel-body">
							<div class="table-responsive">
								<table width="100%" class="table table-bordered table-hover table-striped" id="MyDataTables8">
									<thead>
										<tr>
											<th style="width:10%">No.</th>
											<th style="width:10%">ID</th>
											<th style="width:25%">Nama</th>
											<th style="width:20%">Pangkat</th>
											<th style="width:50%">Jabatan</th>
											<th style="width:5%">Status</th>
										</tr>
									</thead>
									<tbody id="qkom">
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!--Q-KOM NON ASN
				<div class="tab-pane fade" id="qkomNon-pills">
					<div class="panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<i class="fa fa-flag fa-fw"></i> Hasil Q-Kompetensi Non ASN
							</h4>
						</div>
						<div class="panel-body">
							<div class="table-responsive">
								<table width="100%" class="table table-bordered table-hover table-striped" id="TablesQkomNon">
									<thead>
										<tr>
											<th style="width:10%">No.</th>
											<th style="width:10%">ID</th>
											<th style="width:25%">Nama</th>
											<th style="width:50%">Jabatan</th>
											<th style="width:5%">Status</th>
										</tr>
									</thead>
									<tbody id="qkomNon">
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				-->
				<!--ANKAS-->
				<div class="tab-pane fade" id="ankas-pills">
					<div class="panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<i class="fa fa-flag fa-fw"></i> Hasil Analisa Kasus
							</h4>
						</div>
						<div class="panel-body">
							<div class="table-responsive">
								<table width="100%" class="table table-bordered table-hover table-striped" id="MyDataTables9">
									<thead>
										<tr>
											<th style="width:10%">No.</th>
											<th style="width:25%">Nama</th>
											<th style="width:20%">Pangkat</th>
											<th style="width:50%">Jabatan</th>
											<th style="width:5%">Status</th>
										</tr>
									</thead>
									<tbody id="ankas">
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!--Wawancara-->	
			</div>
				<!--./<br/><center>This page will refresh every 5 seconds.</center>-->
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
    
<!-- MODAL CFIT -->
    <div class="modal fade" id="ModalCfit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="row modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3 class="modal-title" id="myModalLabel">Hasil CFIT</h3>
				</div>
				<form class="form-horizontal">
					<div class="modal-body">
						<table width="100%" class="table table-bordered table-hover table-striped" id="MyDataTablesCfit">
							<thead>
								<tr>
								    <th>No</th>
									<th>Nama</th>
									<th>Sub Tes 1</th>
									<th>Sub Tes 2</th>
									<th>Sub Tes 3</th>
									<th>Sub Tes 4</th>
									<th>Norma IQ</th>
								</tr>
							</thead>
							<tbody id="hasil_cfit">
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


<script type="text/javascript">
    $(document).ready(function(){
		tampil_data();   //pemanggilan fungsi tampil data Registasi.
        function tampil_data(){
            $.ajax({
				type  : 'POST',
                url   : '<?php echo site_url('appujian/pantau_ujian/regist');?>',
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
								'<i class=""></i> '+no+'</button>'+
									'<ul class="dropdown-menu" role="menu">'+
										'<li role="presentation"><a href="<?php echo base_url();?>appujian/pantau_ujian/lihat_drh/'+data[i].id_reg+'");" target="_blank" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-file-pdf-o"></i> Cetak</a></li>'+' '+
									'</ul>'+
								'</td></div>'+
                                '<td>'+data[i].id_reg+'</td>'+
                                '<td>'+data[i].nama+' <br/><b> NIP. '+data[i].nip+'</b></td>'+
                                '<td>'+data[i].jabatan+' <br/><b>pada </b> '+data[i].unker+'</td>'+
                                '<td>'+data[i].last_update+'</td>'+
								'</tr>';
                    }
                    $('#regist').html(html);
                }
            });
        }
        
		tampil_data12();   //pemanggilan fungsi tampil data Registasi.
        function tampil_data12(){
            $.ajax({
				type  : 'POST',
                url   : '<?php echo site_url('appujian/pantau_ujian/regist_nonasn');?>',
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
								'<i class=""></i> '+no+'</button>'+
									'<ul class="dropdown-menu" role="menu">'+
										'<li role="presentation"><a href="<?php echo base_url();?>appujian/pantau_ujian/lihat_drhNonASN/'+data[i].id_reg_non_asn+'");" target="_blank" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-file-pdf-o"></i> Cetak</a></li>'+' '+
									'</ul>'+
								'</td></div>'+
                                '<td>'+data[i].id_reg_non_asn+'</td>'+
                                '<td>'+data[i].nama+' <br/><b> NIP. '+data[i].nip+'</b></td>'+
                                '<td>'+data[i].jabatan+' <br/><b>pada </b> '+data[i].unker+'</td>'+
                                '<td>'+data[i].last_update+'</td>'+
								'</tr>';
                    }
                    $('#registNon').html(html);
                }
            });
        }
        

		tampil_data1();   //pemanggilan fungsi tampil Daftar hadir.
        function tampil_data1(){
            $.ajax({
				type  : 'POST',
                url   : '<?php echo site_url('appujian/pantau_ujian/daftar_hadir');?>',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
					var no=0
                    for(let i=0; i<data.length; i++){
						no++;
                        html += '<tr>'+
                                '<td>'+no+'</td>'+
                                '<td>'+data[i].nama_user+' <br/> NIP. <b>'+data[i].username+'</b></td>'+
                                '<td>'+data[i].ip_address+'</td>'+
                                '<td>'+data[i].last_activity+'</td>'+
								'</tr>';
                    }
                    $('#absen').html(html);
                }
            });
        }

		tampil_data2();   //pemanggilan fungsi tampil Hasil APM Set-1.
        function tampil_data2(){
            $.ajax({
				type  : 'POST',
                url   : '<?php echo site_url('appujian/pantau_ujian/apm_1');?>',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
					var no=0
                    for(let i=0; i<data.length; i++){
						no++;
                        html += '<tr>'+
                                '<td style="width:10%">'+no+'</td>'+
                                '<td style="width:25%">'+data[i].nama+' <br/> NIP. <b>'+data[i].nip+'</b></td>'+
                                '<td style="width:20%">'+data[i].gol+' <br/> <b>'+data[i].jenjang+'</b></td>'+
                                '<td style="width:50%">'+data[i].jabatan+' <br/> <b> pada </b> '+data[i].unker+'</td>'+
                                '<td style="width:5%">'+data[i].ket+'</td>'+
								'</tr>';
                    }
                    $('#apm_set1').html(html);
                }
            });
        }

		tampil_data3();   //pemanggilan fungsi tampil Hasil APM Set-2.
        function tampil_data3(){
            $.ajax({
				type  : 'POST',
                url   : '<?php echo site_url('appujian/pantau_ujian/apm_2');?>',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
					var no=0
                    for(let i=0; i<data.length; i++){
						no++;
                        html += '<tr>'+
                                '<td style="width:10%">'+no+'</td>'+
                                '<td style="width:25%">'+data[i].nama+' <br/> NIP. <b>'+data[i].nip+'</b></td>'+
                                '<td style="width:20%">'+data[i].gol+' <br/> <b>'+data[i].jenjang+'</b></td>'+
                                '<td style="width:50%">'+data[i].jabatan+' <br/> <b> pada </b> '+data[i].unker+'</td>'+
                                '<td style="width:5%">'+data[i].ket+'</td>'+
								'</tr>';
                    }
                    $('#apm_set2').html(html);
                }
            });
        }


		tampil_data4();   //pemanggilan fungsi tampil Hasil PAPI Kostick.
        function tampil_data4(){
            $.ajax({
				type  : 'POST',
                url   : '<?php echo site_url('appujian/pantau_ujian/papi');?>',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
					var no=0
                    for(let i=0; i<data.length; i++){
						no++;
                        html += '<tr>'+
								'<td style="width:10%;text-align:center"><div class="dropdown">'+
								'<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown">'+
								'<i class=""></i> '+no+'</button>'+
									'<ul class="dropdown-menu" role="menu">'+
										'<li role="presentation"><a href="<?php echo base_url();?>appassesment/export_papi/get_hasil_papi/'+data[i].id_reg+'");" target="_blank" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-download"></i> Download PAPI</a></li>'+' '+
									'</ul>'+
								'</td></div>'+
                                '<td style="width:25%">'+data[i].nama+' <br/> NIP. <b>'+data[i].nip+'</b></td>'+
                                '<td style="width:20%">'+data[i].gol+' <br/> <b>'+data[i].jenjang+'</b></td>'+
                                '<td style="width:50%">'+data[i].jabatan+' <br/> <b> pada </b> '+data[i].unker+'</td>'+
                                '<td style="width:5%">'+data[i].ket+'</td>'+
								'</tr>';
                    }
                    $('#papi').html(html);
                }
            });
        }

		tampil_data5();   //pemanggilan fungsi tampil Hasil CI.
        function tampil_data5(){
            $.ajax({
				type  : 'POST',
                url   : '<?php echo site_url('appujian/pantau_ujian/ci');?>',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
					var no=0
                    for(let i=0; i<data.length; i++){
						no++;
                        html += '<tr>'+
								'<td style="width:10%;text-align:center"><div class="dropdown">'+
								'<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown">'+
								'<i class=""></i> '+no+'</button>'+
									'<ul class="dropdown-menu" role="menu">'+
										'<li role="presentation"><a href="<?php echo base_url();?>appujian/pantau_ujian/lihat_ci/'+data[i].id_reg+'");" target="_blank" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-file-pdf-o"></i> Cetak</a></li>'+' '+
									'</ul>'+
								'</td></div>'+
                                '<td>'+data[i].id_reg+'</td>'+
                                '<td>'+data[i].nama+' <br/> NIP. <b>'+data[i].nip+'</b></td>'+
                                '<td>'+data[i].gol+' <br/> <b>'+data[i].jenjang+'</b></td>'+
                                '<td>'+data[i].jabatan+' <br/> <b> pada </b> '+data[i].unker+'</td>'+
                                '<td>'+data[i].ket+'</td>'+

								'</tr>';
                    }
                    $('#ci').html(html);
                }
            });
        }

		tampil_data6();   //pemanggilan fungsi tampil Hasil Q-KOM.
        function tampil_data6(){
            $.ajax({
				type  : 'POST',
                url   : '<?php echo site_url('appujian/pantau_ujian/qkom');?>',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
					var no=0
                    for(let i=0; i<data.length; i++){
						no++;
                        html += '<tr>'+
								'<td style="width:10%;text-align:center"><div class="dropdown">'+
								'<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown">'+
								'<i class=""></i> '+no+'</button>'+
									'<ul class="dropdown-menu" role="menu">'+
										'<li role="presentation"><a href="<?php echo base_url();?>appujian/pantau_ujian/lihat_qkom/'+data[i].id_reg+'");" target="_blank" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-file-pdf-o"></i> Cetak</a></li>'+' '+
									'</ul>'+
								'</td></div>'+
                                '<td>'+data[i].id_reg+'</td>'+
                                '<td>'+data[i].nama+' <br/> NIP. <b>'+data[i].nip+'</b></td>'+
                                '<td>'+data[i].gol+' <br/> <b>'+data[i].jenjang+'</b></td>'+
                                '<td>'+data[i].jabatan+' <br/> <b> pada </b> '+data[i].unker+'</td>'+
                                '<td>'+data[i].ket+'</td>'+
								'</tr>';
                    }
                    $('#qkom').html(html);
                }
            });
        }

		tampil_data11();   //pemanggilan fungsi tampil Hasil Q-KOM  NON ASN.
        function tampil_data11(){
            $.ajax({
				type  : 'POST',
                url   : '<?php echo site_url('appujian/pantau_ujian/qkomNon');?>',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
					var no=0
                    for(let i=0; i<data.length; i++){
						no++;
                        html += '<tr>'+
								'<td style="width:10%;text-align:center"><div class="dropdown">'+
								'<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown">'+
								'<i class=""></i> '+no+'</button>'+
									'<ul class="dropdown-menu" role="menu">'+
										'<li role="presentation"><a href="<?php echo base_url();?>appujian/pantau_ujian/lihat_qkomNon/'+data[i].id_reg_non_asn+'");" target="_blank" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-file-pdf-o"></i> Cetak</a></li>'+' '+
									'</ul>'+
								'</td></div>'+
                                '<td>'+data[i].id_reg_non_asn+'</td>'+
                                '<td>'+data[i].nama+' <br/> NIP. <b>'+data[i].nip+'</b></td>'+
                                '<td>'+data[i].jabatan+' <br/> <b> pada </b> '+data[i].unker+'</td>'+
                                '<td>'+data[i].ket+'</td>'+
								'</tr>';
                    }
                    $('#qkomNon').html(html);
                }
            });
        }

		tampil_data7();   //pemanggilan fungsi tampil Hasil ANKAS.
        function tampil_data7(){
            $.ajax({
				type  : 'POST',
                url   : '<?php echo site_url('appujian/pantau_ujian/ankas');?>',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
					var no=0
                    for(let i=0; i<data.length; i++){
						no++;
                        html += '<tr>'+
								'<td style="width:10%;text-align:center"><div class="dropdown">'+
								'<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown">'+
								'<i class=""></i> '+no+'</button>'+
									'<ul class="dropdown-menu" role="menu">'+
										'<li role="presentation"><a href="<?php echo base_url();?>appujian/pantau_ujian/lihat_ankas/'+data[i].id_reg+'");" target="_blank" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-file-pdf-o"></i> Cetak</a></li>'+' '+
									'</ul>'+
								'</td></div>'+
                                '<td style="width:25%">'+data[i].nama+' <br/> NIP. <b>'+data[i].nip+'</b></td>'+
                                '<td style="width:20%">'+data[i].gol+' <br/> <b>'+data[i].jenjang+'</b></td>'+
                                '<td style="width:50%">'+data[i].jabatan+' <br/> <b> pada </b> '+data[i].unker+'</td>'+
                                '<td style="width:5%">'+data[i].ket+'</td>'+
								'</tr>';
                    }
                    $('#ankas').html(html);
                }
            });
        }

		tampil_data8();   //pemanggilan fungsi tampil Hasil SJT.
        function tampil_data8(){
            $.ajax({
				type  : 'POST',
                url   : '<?php echo site_url('appujian/pantau_ujian/sjt');?>',
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
										'<li role="presentation"><a href="<?php echo base_url();?>appujian/Export_sjt/get_hasil_sjt/'+data[i].id_peserta_sjt+'");" target="_blank" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-file-pdf-o"></i> Cetak</a></li>'+' '+
									'</ul>'+
								'</td></div>'+
                                '<td>'+data[i].nama+' <br/> NIP. <b>'+data[i].nip+'</b></td>'+
                                '<td>'+data[i].pangkat+'</td>'+
                                '<td>'+data[i].jabatan+' <br/> <b> pada </b> '+data[i].unker+'</td>'+
                                '<td>'+data[i].nama_kegiatan+' <br/> '+data[i].tgl_keg+'</td>'+
                                '<td>'+data[i].ket+'</td>'+
								'</tr>';
                    }
                    $('#sjt').html(html);
                }
            });
        }
        
		
		tampil_data9();   //pemanggilan fungsi tampil Hasil cfit.
        function tampil_data9(){
            $.ajax({
				type  : 'POST',
                url   : '<?php echo site_url('appujian/pantau_ujian/lihat_ujian_cfit');?>',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
					var no=0
                    for(let i=0; i<data.length; i++){
						no++;
                        html += '<tr>'+
                                '<td>'+no+'</td>'+
                                '<td>'+data[i].nama+' <br/> NIP. <b>'+data[i].nip+'</b></td>'+
                                '<td>'+data[i].gol+'<br/><b>'+data[i].jenjang+'</b></td>'+
                                '<td>'+data[i].jabatan+'<br/><b>pada</b> '+data[i].unker+'</td>'+
                                '<td>CFIT 1 : <b>'+data[i].cfit_1+'</b> || CFIT 2 : <b>'+data[i].cfit_2+'</b><br/>CFIT 3 : <b>'+data[i].cfit_3+'</b> || CFIT 4 : <b>'+data[i].cfit_4+'</b></td>'+
								'</tr>';
                    }
                    $('#cfit').html(html);
                }
            });
        }

		tampil_data10();   //pemanggilan fungsi tampil Hasil cfit.
        function tampil_data10(){
            $.ajax({
				type  : 'POST',
                url   : '<?php echo site_url('appujian/pantau_ujian/cfit');?>',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
					var no=0
                    for(let i=0; i<data.length; i++){
						no++;
                        html += '<tr>'+
                                '<td>'+no+'</td>'+
                                '<td>'+data[i].nama+' <br/> NIP. <b>'+data[i].nip+'</b></td>'+
                                '<td>Status : <b>'+data[i].cfit_satu+'</b><br/>Nilai : <b>'+data[i].nilai_cfit_1+'</b></td>'+
                                '<td>Status : <b>'+data[i].cfit_dua+'</b><br/>Nilai : <b>'+data[i].nilai_cfit_2+'</b></td>'+
                                '<td>Status : <b>'+data[i].cfit_tiga+'</b><br/>Nilai : <b>'+data[i].nilai_cfit_3+'</b></td>'+
                                '<td>Status : <b>'+data[i].cfit_empat+'</b><br/>Nilai : <b>'+data[i].nilai_cfit_4+'</b></td>'+
                                '<td>Total  : <b>'+data[i].total_nilai_cfit+'</b> || IQ : <b>'+data[i].norma_iq+'</b><br/><b>'+data[i].kategori+'</b></td>'+
								'</tr>';
                    }
                    $('#hasil_cfit').html(html);
                }
            });
        }

		
    $(document).ready(function(){
		tampil_notReg();
        function tampil_notReg(){
            $.ajax({
				type  : 'POST',
                url   : '<?php echo site_url('appujian/pantau_ujian/belum_regist');?>',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
					var no=0
                    for(let i=0; i<data.length; i++){
						no++;
                        html += '<tr>'+
                                '<td style="width:5%">'+no+'</td>'+
                                '<td style="width:30%">'+data[i].nama+' <br/> NIP. <b> '+data[i].nip+' </b></td>'+
                                '<td style="width:50%">'+data[i].jabatan+' <br/> pada <b>'+data[i].unker+'</b></td>'+
								'</tr>';
                    }
                    $('#not_reg').html(html);
                }
 
            });
        }
	 });



//--------AUTO REFRESH----
/*
function timedRefresh(timeoutPeriod) {
	setTimeout("location.reload(true);",timeoutPeriod);
}

window.onload = timedRefresh(30000);
*/
//--------DATA TABLE----

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
        $('#MyDataTables').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
	
    $(document).ready(function () {
        $('#MyDataTables1').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

    $(document).ready(function () {
        $('#MyDataTables2').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

    $(document).ready(function () {
        $('#MyDataTables3').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

    $(document).ready(function () {
        $('#MyDataTables4').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

    $(document).ready(function () {
        $('#MyDataTables5').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

    $(document).ready(function () {
        $('#MyDataTables6').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

    $(document).ready(function () {
        $('#MyDataTables7').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

    $(document).ready(function () {
        $('#MyDataTables8').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

    $(document).ready(function () {
        $('#MyDataTables9').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

    $(document).ready(function () {
        $('#MyDataTables10').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

    $(document).ready(function () {
        $('#MyDataTables11').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

    $(document).ready(function () {
        $('#MyDataTables12').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

    $(document).ready(function () {
        $('#MyDataTables13').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

    $(document).ready(function () {
        $('#MyDataTables14').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

    $(document).ready(function () {
        $('#MyDataTables15').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

    $(document).ready(function () {
        $('#MyDataTables16').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

    $(document).ready(function () {
        $('#MyDataTables17').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

    $(document).ready(function () {
        $('#MyDataTables18').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

    $(document).ready(function () {
        $('#MyDataTables19').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

    $(document).ready(function () {
        $('#MyDataTables20').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

    $(document).ready(function () {
        $('#MyDataTables21').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

    $(document).ready(function () {
        $('#MyDataTables22').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

    $(document).ready(function () {
        $('#MyDataTables23').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

    $(document).ready(function () {
        $('#MyDataTablesCfit').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

    $(document).ready(function () {
        $('#TablesQkomNon').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

    $(document).ready(function () {
        $('#TablesRegNonASN').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });




//----------------------------//
});
	
</script>
