<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-share-alt" aria-hidden="true"></i>&nbsp; Peserta Kerjasama Kota Tangerang</h3>
    </div>
<!-- /.col-lg-12 -->
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
				<!--<div class="btn btn-warning btn-xs pull-right " onclick="history.go(-1); return false;"><i class="fa fa-backward fa-fw"></i> Kembali</div>-->
				<i class="fa fa-users" aria-hidden="true"></i> &nbsp; Data Peserta Uji Kompetensi Kerjasama
            </div>
            <div class="panel-body">
				<div class="table-responsive">
					<table width="100%" class="table table-bordered table-hover table-striped" id="myDataTable">
						<thead>
							<tr>
								<th style="width:8%;text-align:center;">No.</th>
								<th style="width:20%;text-align:center;">Nama</th>
								<th style="width:15%;text-align:center;">Pangkat / Jenjang</th>
								<th style="width:30%;text-align:center;">Unit Kerja</th>
								<th style="width:20%;text-align:center;">Kegiatan</th>
							</tr>
						</thead>
						<tbody id="show_data" >
						</tbody>
					</table>	
				</div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
		tampil_data();   //pemanggilan fungsi tampil data.
        function tampil_data(){
            $.ajax({
				type  : 'POST',
                url   : '<?php echo site_url('appassesment/peserta/data_peserta_kerjasama');?>',
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
										'<li role="presentation"><a href="<?php echo base_url();?>appassesment/peserta/get_kerjasama/'+data[i].nip+'");" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-binoculars" aria-hidden="true"></i> Detail</a></li>'+' '+
									    '<li role="presentation"><a href="<?php echo base_url();?>appassesment/peserta/get_cetak_hasil/'+data[i].nip+'");" role="menuitem" tabindex="-1" style="cursor:pointer;" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Cetak Hasil</a></li>'+' '+
									'</ul>'+
								'</td></div>'+
                                '<td>'+data[i].nama+' <br/> <b>NIP. '+data[i].nip+'</b> </td>'+
                                '<td>'+data[i].gol+' <br/><b>'+data[i].jenjang+'</b></td>'+
								'<td>'+data[i].jabatan+' <b>pada</b> '+data[i].unker+'</td>'+
                                '<td>'+data[i].nama_kegiatan+' <br/>'+data[i].jenis_kegiatan+' <br/> '+data[i].tgl_keg+'</td>'+
								'</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }
	});

</script>
