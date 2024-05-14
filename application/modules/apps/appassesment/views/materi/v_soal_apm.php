<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">Alat Tes Psikometri PAPI Kostick</h3>
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
						<li role="presentation"><a role="menuitem" class="btn btn-secondary pull-left" tabindex="-1" style="cursor:pointer;" href="#" data-toggle="modal" data-target="#ModalaAdd"> <i class="glyphicon glyphicon-plus"></i> Tambah Soal</a></li>
					</ul>
				</div>
				&nbsp; Daftar Soal PAPI Kostick
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
			<form enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>module/appassesment/soal/simpan">
			File:
			<input type="file" name="file" accept="image/*">
			<button type="submit">Upload</button>
			</form>

			<img src="<?php echo base_url(); ?>module/soal/tampil_gambar/29">        
			</div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->


