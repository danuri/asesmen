<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-book" aria-hidden="true"></i>&nbsp; Jadwal LGD dan Wawancara</h3>
    </div>
<!-- /.col-lg-12 -->
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
			<i class="fa fa-edit" aria-hidden="true"></i>&nbsp; Jadwal Assessi & Assessor
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
				<div class="table-responsive">
					<table width="100%" class="table table-striped table-bordered table-hover" id="myDataTable">
						<thead>
						<tr>
							<th>No.</th>
							<th>Nama/NIP Assessi</th>
							<th>Jadwal LGD</th>
							<th>Jadwal Wawancara</th>
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
				type  : 'POST',
                url   : '<?php echo site_url('appassesment/wawancara/data_wawancara');?>',
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
										'<li role="presentation"><a href="<?php echo base_url();?>appassesment/peserta/lihat_drh/'+data[i].id_peserta+'");" target="_blank" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-file-pdf-o"></i> Cetak DRH</a></li>'+' '+
										'<li role="presentation"><a href="<?php echo base_url();?>appassesment/peserta/lihat_ci/'+data[i].id_peserta+'");" target="_blank" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-file-pdf-o"></i> Cetak CI</a></li>'+' '+
										'<li role="presentation"><a href="<?php echo base_url();?>appassesment/peserta/lihat_qkom/'+data[i].id_peserta+'");" target="_blank" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-file-pdf-o"></i> Cetak Q-Kom</a></li>'+' '+
										'<li role="presentation"><a href="<?php echo base_url();?>appassesment/peserta/lihat_ankas/'+data[i].id_peserta+'");" target="_blank" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-file-pdf-o"></i> Cetak Ankas</a></li>'+' '+
									//	'<li role="presentation"><a href="<?php echo base_url();?>appujian/Export_sjt/get_hasil_sjt/'+data[i].id_peserta+'");" target="_blank" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-file-pdf-o"></i> Cetak SJT</a></li>'+' '+
										'<li role="presentation"><a href="<?php echo base_url();?>appassesment/Export_papi/get_hasil_papi/'+data[i].id_peserta+'");" target="_blank" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-download"></i> Download PAPI</a></li>'+' '+
									'</ul>'+
								'</td></div>'+
                                '<td>'+data[i].nama+' <br/> NIP. <b>'+data[i].nip+'</b></td>'+
                                '<td><b>'+data[i].kelompok_lgd+'</b> (Tgl. '+data[i].tgl_lgd+') <br/> Jam. '+data[i].jam_lgd+' || <b>PIC. '+data[i].kd_personil_lgd+'</b> </td>'+
                                '<td>Tgl. '+data[i].tgl_wwcr+' <br/> Jam '+data[i].jam_wwcr+' || <b>PIC. '+data[i].kd_personil_wwcr+'</b></td>'+
								'</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }
	});

</script>