<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">Data Arsip Dokumentasi</h3>
    </div>
<!-- /.col-lg-12 -->
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
				<!--<div class="btn btn-warning btn-xs pull-right " onclick="history.go(-1); return false;"><i class="fa fa-backward fa-fw"></i> Kembali</div>-->
				<div class="dropdown">
				<button class="btn btn-default btn-xs pull-left " type="button" data-toggle="dropdown">
				<i class="fa fa-caret-down fa-fw"></i></button>
					<ul class="dropdown-menu" role="menu">
						<li role="presentation"><a role="menuitem" class="btn btn-secondary pull-left" tabindex="-1" style="cursor:pointer;" href="#" data-toggle="modal" data-target="#ModalaAdd"> <i class="glyphicon glyphicon-plus"></i> Tambah Link Arsip</a></li>
					</ul>
				</div>
				&nbsp; Daftar Arsip
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
			<?php if(!empty($this->session->flashdata('status'))){ ?>
				<div class="alert alert-info" role="alert"><?= $this->session->flashdata('status'); ?></div>
			<?php } ?>														
				<div class="table-responsive">
					<table width="100%" class="table table-striped table-bordered table-hover" id="myDataTable">
						<thead>
						<tr>
							<th>No.</th>
							<th>Arsip</th>
							<th>Tahun</th>
						</tr>
						</thead>
						<tbody>
						<?php 
						$no = 1;
						foreach ($arsip->result() as $key)
						{ ?>
							<tr>
								<td align="center"><div class="dropdown">
									<button class="btn btn-default btn-md pull-center" type="button" data-toggle="dropdown" style="width:100%;">
									<i class=""></i><?php echo $no++; ?></button>
										<ul class="dropdown-menu" role="menu">
											<li role="presentation"><a href="<?php echo base_url();?>appassesment/arsip/hapus_arsip/<?php echo $key->id_link_arsip; ?>" role="menuitem" tabindex="-1" style="cursor:pointer;"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp; Hapus</a></li>
										</ul>
									</div>
								</td>
								<td><a href="<?php echo base_url();?>appassesment/arsip/get_arsip/<?php echo $key->id_link_arsip; ?>" style="text-decoration:none;" target="_blank"><?php echo $key->judul_arsip; ?></a></td>
								<td><?php echo $key->tahun; ?></td>
							</tr>
						<?php 
						} ?>
						</tbody>
					</table>
				</div>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->


<!-- MODAL ADD -->
    <div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="row modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3 class="modal-title" id="myModalLabel">Tambah Link Arsip</h3>
				</div>
				<form class="form-horizontal">
					<div class="modal-body">
							<div class="panel panel-primary">
								<div class="panel-body">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label class="control-label col-xs-3">Id Konten</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="id_konten" id="id_konten" placeholder="Masukan Id Konten" required>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Judul Arsip</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="judul_arsip" id="judul_arsip" placeholder="Masukan Judul arsip" required>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">Folder</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="path_folder" id="path_folder" placeholder="Masukan Path" required>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-xs-3">tahun</label>
											<div class="col-xs-9">
												<input type="text" class="form-control" name="tahun" id="tahun" placeholder="Masukan Tahun" required>
											</div>
										</div>
									</div>		
								</div>	
								</div>
							</div>
						<div class="modal-footer">
							<button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
							<button class="btn btn-info" id="btn_simpan">Simpan</button>
						</div>
					</div>
				</form>
			</div>
        </div>
    </div>
<!--END MODAL ADD-->


<script type="text/javascript">
    $(document).ready(function(){
		//SIMPAN ARSIP
		$('#btn_simpan').on('click',function(){
            var id_link_arsip	=$('#id_link_arsip').val();
            var id_konten		=$('#id_konten').val();
            var judul_arsip		=$('#judul_arsip').val();
            var path_folder		=$('#path_folder').val();
            var tahun			=$('#tahun').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('appassesment/arsip/simpan_arsip')?>",
                dataType : "JSON",
                data : {id_link_arsip:id_link_arsip, id_konten:id_konten, judul_arsip:judul_arsip, path_folder:path_folder, tahun:tahun},
                success: function(data){
                    $('[name="id_link_arsip"]').val("");
                    $('[name="id_konten"]').val("");
                    $('[name="judul_arsip"]').val("");
                    $('[name="path_folder"]').val("");
                    $('[name="tahun"]').val("");
                    $('#ModalaAdd').modal('hide');
                    tampil_data();
                }
            });
			redirect($_SERVER['HTTP_REFERER']);
            return false;
        });
	});
</script>
