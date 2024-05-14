<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">Data Pegawai SIMASN</h3>
    </div>
<!-- /.col-lg-12 -->
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
				<!--<div class="btn btn-warning btn-xs pull-right " onclick="history.go(-1); return false;"><i class="fa fa-backward fa-fw"></i> Kembali</div>-->
				<!--
				<div class="dropdown">
				<button class="btn btn-default btn-xs pull-left " type="button" data-toggle="dropdown">
				<i class="fa fa-caret-down fa-fw"></i></button>
					<ul class="dropdown-menu" role="menu">
						<li role="presentation"><a role="menuitem" class="btn btn-secondary pull-left" tabindex="-1" style="cursor:pointer;" href="#" data-toggle="modal" data-target="#ModalaAdd"> <i class="glyphicon glyphicon-plus"></i> Tambah Personil UPT Penkom</a></li>
					</ul>
				</div>
				-->
				&nbsp; Daftar Nama Pegawai Kota Tangerang
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
				<div class="table-responsive">
					<table width="100%" class="table table-striped table-bordered table-hover" id="myDataTable">
						<thead>
						<tr>
							<th>No.</th>
							<th>Nama / NIP</th>
							<th>Pangkat / Eselon</th>
							<th>Jabatan / Unker</th>
						</tr>
						</thead>
						<tbody id="show_data">
						</tbody>
					</table>
					<!-- /.table-responsive -->
				</div>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->


<script type="text/javascript">
    $(document).ready(function(){
		tampil_data();   //pemanggilan fungsi tampil data.
        function tampil_data(){
            $.ajax({
				type  : 'ajax',
                url   : '<?php echo site_url('appassesment/simasn/data_simasn');?>',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
					var no=0
                    for(let i=0; i<data.length; i++){
						no++;
                        html += '<tr>'+
                                '<td>'+no+'</td>'+
                                '<td>'+data[i].nama_pegawai+' <br/> NIP. '+data[i].nip_baru+'</td>'+
                                '<td>'+data[i].pangkat+' <br/> '+data[i].nama_ese+'</td>'+
                                '<td>'+data[i].nomenklatur_jabatan+' <br/><b> pada </b> '+data[i].nomenklatur_pada+'</td>'+
								'</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }

	});
</script>
