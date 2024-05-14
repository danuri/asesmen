<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">Theme Website
		<div class="btn btn-warning btn-xs pull-right content_post" style="margin-top:10px;" onclick="loadForm('formtambah','xx');"><i class="fa fa-plus fa-fw"></i> Tambah Theme Website</div>
		</h3>
	</div><!-- /.col-lg-12 -->
</div><!-- /.row -->


<div class="row gridTheme">
	<div class="col-lg-12">
		<div class="panel panel-warning" id="panel_utama">
			<div class="panel-heading">
						<div class="row">
								<div class="col-lg-12">
									<i class="fa fa-object-group fa-fw"></i> Daftar Theme Website
								</div><!---/.col-lg-12 -->
						</div><!---/.row -->
			</div>
			<div class="panel-body">

			<div class="table-responsive">
<table class="table table-striped table-hover">
<thead>
<tr height=35>
<th width=65>No.</th>
<th width=73><b>AKSI</b></th>
<th width=200><b>NAMA THEME</b></th>
<th><b>KETERANGAN</b></th>
<th width=70><b>STATUS</b></th>
</tr>
</thead>
<tbody id=list>
<?php
foreach($isi AS $key=>$val){
?>
<tr>
	<td><?=($key+1);?></td>
	<td>
						<div class="dropdown"><button class="btn btn-default dropdown-toggle btn-xs" type="button" data-toggle="dropdown"><i class="fa fa-caret-down fa-fw"></i></button>
							<ul class="dropdown-menu" role="menu">
								<li role="presentation"><a role="menuitem" tabindex="-1" style="cursor:pointer;" onClick="loadForm('formedit','<?=$val->id_item;?>');"><i class="fa fa-edit fa-fw"></i> Edit Data</a></li>
								<?php if($val->cek=="kosong"){ ?>
								<li role="presentation"><a role="menuitem" tabindex="-1" style="cursor:pointer;" onclick="loadForm('formhapus','<?=$val->id_item;?>');"><i class="fa fa-trash fa-fw"></i> Hapus data</a></li>
								<?php } ?>
							</ul>
						</div>
	</td>
	<td><?=$val->nama_item;?></td>
	<td><?=$val->keterangan;?></td>
	<td>...</td>
</tr>
<?php
}
?>
</tbody>
</table>
			</div><!-- table-responsive --->


			</div><!---/.panel-body -->
		</div><!-- /.panel -->
	</div><!-- /.col-lg-12 -->
</div><!-- /.row -->

<div id="formTheme" style="display:none">Ini Form</div>
<script type="text/javascript">
function loadForm(tujuan,idd){	
	$("#formTheme").html('');
	$(".gridTheme").hide();
			$.ajax({
				type:"POST",
				url:"<?=site_url();?>cmsadmin/theme/"+tujuan+"/",
				data:{"idd": idd },
				beforeSend:function(){	
					$('.content_post').hide();
				}, 
				success:function(data){
					$("#formTheme").html(data);
				}, 
				dataType:"html"});
	$("#formTheme").show();
	return false;
}	
function batal(){
	$("#formTheme").hide();
	$(".gridTheme").show();
	$('.content_post').show();
	return false;
}
</script>
<style>
table th {	color:#fff; background-color:#ccc; line-height:35px; padding:0px;	}
.pagingframe {	float:right;	}
.pagingframe div {	padding-left:7px;padding-right:7px;	}
</style>
