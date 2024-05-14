<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">Peserta Pegawai Mutasi Masuk</h3>
    </div>
<!-- /.col-lg-12 -->
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-success">
            <div class="panel-heading">
                Data Peserta Uji Kompetensi Pegawai Mutasi Masuk
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
                        <th>Instansi Asal</th>
                        <th>Tgl. Ujian</th>
                        <th>Status</th>
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
				type  : 'POST',
                url   : '<?php echo site_url('appcetak/cetak_proses/r_bup');?>',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].nama_pegawai+' / <br/>'+data[i].nip+'</td>'+
                                '<td>'+data[i].tanggal_pensiun+'</td>'+
                                '<td>'+data[i].no_sk+'</td>'+
                                '<td>'+data[i].tanggal_sk+'</td>'+
                                '<td>'+data[i].jenis_pensiun+'</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }
    });

</script>

