<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">Import File Excel Hasil Ukom Kerjasama </h3>
    </div>
<!-- /.col-lg-12 -->
</div>

<div class="row">
	<div class="col-lg-12">
	<div class="panel panel-default">
		<div class="panel-heading" style="color:#fff;">
		Import Data Hasil
		</div>
		<div class="panel-body">
			<?php if(!empty($this->session->flashdata('status'))){ ?>
			<div class="alert alert-info" role="alert"><?= $this->session->flashdata('status'); ?></div>
			<?php } ?>
			<form action="<?= base_url('module/appassesment/ImportHasil/import_hasil'); ?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>Pilih File Excel</label>
					<input type="file" name="fileExcel">
				</div>
				<div>
					<button class='btn btn-success pull-right' type="submit">
						<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
			    		Import		
					</button>
				</div>
			</form>
		</div>
	</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading" style="color:#fff;">
			Hasil Penilaian Potensi dan Kompetensi
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table width="100%" class="table table-striped table-bordered table-hover" id="myDataTable">
						<thead>
							<tr>
								<th>No.</th>
								<th>ID Peserta</th>
								<th>NIP</th>
								<th>Rekomendasi</th>
							</tr>
						</thead>
						<tbody id="show_data">
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
    tampil_data();
    function tampil_data(){
        $.ajax({
            type : 'POST',
            url : '<?php echo site_url('appassesment/ImportHasil/data_hasil');?>',
            async : false,
            dataType : 'json',
            success : function(data){
                var html = '';
                var no=0
                for(let i=0; i<data.length; i++){
                    no++;
                    html += '<tr>'+
                                '<td>'+no+'</td>'+
                                '<td>'+data[i].id_peserta+'</td>'+
                                '<td>'+data[i].nip+'</td>'+
                                '<td>'+data[i].rekom+'</td>'+
                            '</tr>';
                }
                $('#show_data').html(html);
            }
        });
    }
});
</script>
