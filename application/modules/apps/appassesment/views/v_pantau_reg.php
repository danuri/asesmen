<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-binoculars" aria-hidden="true"></i>&nbsp; Pantau Registrasi</h3>
    </div>
<!-- /.col-lg-12 -->
</div>

<div class="panel-body">
	<div class="dataTable_wrapper">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel-group" id="accordion">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse1" style="text-decoration:none"><i class="fa fa-list fa-fw"></i>&nbsp; Pemantauan Registrasi ASN</a>
							</h4>
						</div>
						<div id="collapse1" class="panel-collapse collapse in">
							<div class="panel-body">
								<div class="row">
									<div class="col-lg-12">
									<div class="col-lg-6">    
										<div class="panel panel-default">
											<div class="panel-heading">
												<i class="fa fa-edit fa-fw"></i>&nbsp; Pemantauan Registrasi Peserta Penilain Kompetensi</a>
											</div>
											<div class="panel-body">
												<div class="table-responsive">
													<table width="100%" class="table table-bordered table-hover table-striped" id="MyTableRegis">
														<thead>
															<tr>
																<th style="width:5%;text-align:center;">No.</th>
																<!--<th style="width:3%;text-align:center;">ID</th>-->
																<th style="width:40%;text-align:center;">Nama</th>
																<th style="width:50%;text-align:center;">Unit Kerja</th>
																<th style="width:10%;text-align:center;">Tgl. Registrasi</th>
															</tr>
														</thead>
													<tbody id="regist">
													</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-6">    
										<div class="panel panel-default">
											<div class="panel-heading">
												<i class="fa fa-edit fa-fw"></i>&nbsp; Peserta yang belum Registrasi</a>
											</div>
											<div class="panel-body">
												<div class="table-responsive">
													<table width="100%" class="table table-bordered table-hover table-striped" id="MyTableNotRegis">
														<thead>
															<tr>
																<th style="width:5%;text-align:center;">No.</th>
																<th style="width:20%;text-align:center;">Nama</th>
																<th style="width:30%;text-align:center;">Unit Kerja</th>
															</tr>
														</thead>
													<tbody id="not_reg">
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
					<!--
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse2" style="text-decoration:none"><i class="fa fa-list fa-fw"></i>&nbsp; Pemantauan Registrasi Non ASN</a>
							</h4>
						</div>
						<div id="collapse2" class="panel-collapse collapse">
							<div class="panel-body">
								<div class="row">
									<div class="col-lg-12">
									<div class="col-lg-6">    
										<div class="panel panel-default">
											<div class="panel-heading">
												<i class="fa fa-edit fa-fw"></i>&nbsp; Pemantauan Registrasi Peserta Penilain Kompetensi</a>
											</div>
											<div class="panel-body">
												<div class="table-responsive">
													<table width="100%" class="table table-bordered table-hover table-striped" id="MyDataTables3">
														<thead>
															<tr>
																<th style="width:5%;text-align:center;">No.</th>
																<th style="width:3%;text-align:center;">ID</th>
																<th style="width:40%;text-align:center;">Nama</th>
																<th style="width:50%;text-align:center;">Unit Kerja</th>
																<th style="width:10%;text-align:center;">Tgl. Registrasi</th>
															</tr>
														</thead>
													<tbody id="regist_nonasn">
													</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-6">    
										<div class="panel panel-default">
											<div class="panel-heading">
												<i class="fa fa-edit fa-fw"></i>&nbsp; Peserta yang belum Registrasi</a>
											</div>
											<div class="panel-body">
												<div class="table-responsive">
													<table width="100%" class="table table-bordered table-hover table-striped" id="MyDataTables4">
														<thead>
															<tr>
																<th style="width:5%;text-align:center;">No.</th>
																<th style="width:20%;text-align:center;">Nama</th>
																<th style="width:30%;text-align:center;">Unit Kerja</th>
															</tr>
														</thead>
													<tbody id="not_reg_nonasn">
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
					-->
				</div>
			</div>
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
								'<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">'+
								'<i class=""> '+no+'</i></button>'+
									'<ul class="dropdown-menu" role="menu">'+
										'<li role="presentation"><a href="<?php echo base_url();?>appujian/pantau_ujian/lihat_drh/'+data[i].id_reg+'");" target="_blank" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-file-pdf-o"></i> Cetak</a></li>'+' '+
									'</ul>'+
								'</td></div>'+
                                //'<td>'+data[i].id_reg+'</td>'+
                                '<td>'+data[i].nama+' <br/><b> NIP. '+data[i].nip+'</b></td>'+
                                '<td>'+data[i].jabatan+' <br/><b>pada</b> '+data[i].unker+'</td>'+
                                '<td>'+data[i].last_update+'</td>'+
								'</tr>';
                    }
                    $('#regist').html(html);
                }
            });
        }

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
                                '<td style="width:5%;text-align:center;">'+no+'</td>'+
                                '<td>'+data[i].nama+' <br/><b> NIP. '+data[i].nip+'</b></td>'+
                                '<td>'+data[i].jabatan+' <br/><b>pada </b>'+data[i].unker+'</td>'+
								'</tr>';
                    }
                    $('#not_reg').html(html);
                }
 
            });
        }

// NON ASN
		tampil_data_nonasn();   //pemanggilan fungsi tampil data Registasi.
        function tampil_data_nonasn(){
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
								'<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">'+
								'<i class=""> '+no+'</i></button>'+
									'<ul class="dropdown-menu" role="menu">'+
										'<li role="presentation"><a href="<?php echo base_url();?>appujian/pantau_ujian/lihat_drh/'+data[i].id_reg+'");" target="_blank" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-file-pdf-o"></i> Cetak</a></li>'+' '+
									'</ul>'+
								'</td></div>'+
                                //'<td>'+data[i].id_reg+'</td>'+
                                '<td>'+data[i].nama+' <br/><b> NIP. '+data[i].nip+'</b></td>'+
                                '<td>'+data[i].jabatan+' <br/><b>pada</b> '+data[i].unker+'</td>'+
                                '<td>'+data[i].last_update+'</td>'+
								'</tr>';
                    }
                    $('#regist_nonasn').html(html);
                }
            });
        }

		tampil_notReg_nonasn();
        function tampil_notReg_nonasn(){
            $.ajax({
				type  : 'POST',
                url   : '<?php echo site_url('appujian/pantau_ujian/belum_regist_nonasn');?>',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
					var no=0
                    for(let i=0; i<data.length; i++){
						no++;
                        html += '<tr>'+
                                '<td style="width:5%;text-align:center;">'+no+'</td>'+
                                '<td>'+data[i].nama+' <br/><b> NIP. '+data[i].nip+'</b></td>'+
                                '<td>'+data[i].jabatan+' <br/><b>pada </b>'+data[i].unker+'</td>'+
								'</tr>';
                    }
                    $('#not_reg_nonasn').html(html);
                }
 
            });
        }




//--------AUTO REFRESH----
/*
function timedRefresh(timeoutPeriod) {
	setTimeout("location.reload(true);",timeoutPeriod);
}

window.onload = timedRefresh(30000);
*/
//--------DATA TABLE----
    $(document).ready(function () {
        $('#MyTableRegis').DataTable({
			responsive: true,
            order : true,
			dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

    $(document).ready(function () {
        $('#MyTableNotRegis').DataTable({
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
	
	
//----------------------------//
});
	
</script>
