<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">Laporan Hasil Wawancara</h3>
    </div>
<!-- /.col-lg-12 -->
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Data Peserta Hasil Wawancara
					<!--<div class="btn btn-warning btn-xs pull-right" onclick="history.go(-1); return false;"><i class="fa fa-backward fa-fw"></i> Kembali</div>-->
				
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr>
                        <th width="5px">No.</th>
                        <th width="10px">Assessor</th>
                        <th width="10px">Nama / NIP</th>
                        <th width="20px">Jabatan</th>
                        <th width="30px">INT</th>
                        <th width="5px">Nilai</th>
                        <th width="30px">KS</th>
                        <th width="5px">Nilai</th>
                        <th width="30px">KOM</th>
                        <th width="5px">Nilai</th>
                        <th width="30px">OPH</th>
                        <th width="5px">Nilai</th>
                        <th width="30px">PP</th>
                        <th width="5px">Nilai</th>
                        <th width="30px">PDO</th>
                        <th width="5px">Nilai</th>
                        <th width="30px">MP</th>
                        <th width="5px">Nilai</th>
                        <th width="30px">PK</th>
                        <th width="5px">Nilai</th>
                        <th width="30px">PB</th>
                        <th width="5px">Nilai</th>
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
                url   : '<?php echo site_url('appassesment/laporan/get_wawancara');?>',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
					var no=0
                    for(let i=0; i<data.length; i++){
						no++;
                        html += '<tr>'+
                                '<td>'+no+'</td>'+
                                '<td>'+data[i].assessor+'</td>'+
                                '<td>'+data[i].nama+' / <br/>'+data[i].nip+'</td>'+
                                '<td>'+data[i].jabatan+'</td>'+
                                '<td>'+data[i].intr+'</td>'+
                                '<td>'+data[i].intr_nilai+'</td>'+
                                '<td>'+data[i].ks+'</td>'+
                                '<td>'+data[i].ks_nilai+'</td>'+
                                '<td>'+data[i].kom+'</td>'+
                                '<td>'+data[i].kom_nilai+'</td>'+
                                '<td>'+data[i].oph+'</td>'+
                                '<td>'+data[i].oph_nilai+'</td>'+
                                '<td>'+data[i].pp+'</td>'+
                                '<td>'+data[i].pp_nilai+'</td>'+
                                '<td>'+data[i].pdo+'</td>'+
                                '<td>'+data[i].pdo_nilai+'</td>'+
                                '<td>'+data[i].mp+'</td>'+
                                '<td>'+data[i].mp_nilai+'</td>'+
                                '<td>'+data[i].pk+'</td>'+
                                '<td>'+data[i].pk_nilai+'</td>'+
                                '<td>'+data[i].pb+'</td>'+
                                '<td>'+data[i].pb_nilai+'</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }
    });

</script>

