<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">Peserta Pegawai Pemerintah Kab. Karawang</h3>
    </div>
<!-- /.col-lg-12 -->
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Data Peserta Uji Kompetensi Pegawai Pemerintah Kab. Karawang
					<!--<div class="btn btn-warning btn-xs pull-right" onclick="history.go(-1); return false;"><i class="fa fa-backward fa-fw"></i> Kembali</div>-->
				
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>Jabatan</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody id="show_data">
                    </tbody>
                </table>
                <!-- /.table-responsive -->
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
                url   : '<?php echo site_url('appassesment/external/get_peserta_karawang');?>',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
					var no=0
                    for(let i=0; i<data.length; i++){
						no++;
                        html += '<tr>'+
                                '<td>'+no+'</td>'+								
                                '<td>'+data[i].nama+'</td>'+
                                '<td>'+data[i].no_peserta+'</td>'+
                                '<td>'+data[i].jabatan+'</td>'+
		                        '<td style="text-align:right;">'+
                                    '<a href="javascript:;" class="btn btn-info btn-xs item_detail" data="'+data[i].no_peserta+'"><i class="fa fa-binoculars" aria-hidden="true"></i> Detail</a>'+' '+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }
    });

		//GET DETAIL
		$('#show_data').on('click','.item_detail',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('appassesment/external/detail_peserta')?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                	$.each(data,function(nama, no_peserta, jabatan){
                    	$('#ModalaEdit').modal('show');
            			$('[name="nama"]').val(data.nama);
            			$('[name="no_peserta"]').val(data.no_peserta);
            			$('[name="jabatan"]').val(data.jabatan);
            		});
                }
            });
            return false;
        });



</script>

