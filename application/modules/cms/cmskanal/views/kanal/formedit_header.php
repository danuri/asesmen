<div class="row">
	<div class="col-lg-6">
		<div class="panel panel-success">
			<div class="panel-heading">
				FORM EDIT HEADER KANAL
				<div class="btn btn-xs btn-warning pull-right" onclick="batal();"><i class="fa fa-close fa-fw"></i></div>
			</div>
			<div class="panel-body">
    <form id="content-form" method="post" action="<?=site_url('cmskanal/kanal/editheader_aksi');?>" enctype="multipart/form-data">
    <div style="statussave"></div>
			<div class="table-responsive">
<table class="table table-striped">
        <tr>
          <td width="150">Nama kanal</td>
          <td colspan="3"><b><?=$nama_kanal;?></b></td>
        </tr>
        <tr>
          <td width="150">Judul header</td>
          <td colspan="3">
		  <input type="text" id="judul_header" name="judul_header"  class="form-control" value="<?=@$header->judul_header;?>">
		  </td>
        </tr>
        <tr>
          <td>Sub judul</td>
          <td colspan="3">
		  <input type="text" id="sub_judul" name="sub_judul"  class="form-control" value="<?=@$header->sub_judul;?>">
		  </td>
        </tr>
        <tr>
          <td>Tinggi header</td>
          <td colspan="3"><?=$tinggi_header;?></td>
        </tr>
        <tr>
          <td>Margin atas</td>
          <td colspan="3"><?=$margin_top;?></td>
        </tr>
        <tr>
          <td>Margin bawah</td>
          <td colspan="3"><?=$margin_bottom;?></td>
        </tr>
        <tr>
          <td>Padding atas</td>
          <td colspan="3"><?=$padding_top;?></td>
        </tr>
        <tr>
          <td>Padding bawah</td>
          <td colspan="3"><?=$padding_bottom;?></td>
        </tr>
       <tr >
			<td>&nbsp;</td>
			<td colspan="3">
				<input type="hidden" name='idk' value="<?=$id_kanal;?>" />
				<div onclick="simpan();" class='btn btn-primary btn-sm' id="btAct"><i class="fa fa-save fa-fw"></i> Simpan</div>
				<div onclick="batal();" class='btn btn-warning btn-sm'><i class="fa fa-close fa-fw"></i> Batal...</div>
			</td>
        </tr>
</table>
		</div>
	</form>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
function simpan(){
			$.ajax({
			type:"POST",
			url:	$("#content-form").attr('action'),
			data:$("#content-form").serialize(),
			beforeSend:function(){	
				$('#btAct').replaceWith('<span id="btAct"><i class="fa fa-spinner fa-spin fa-2x"></i></span>');
			},
			success:function(data){
					isi(<?=$id_kanal;?>);
					batal();
			},
			dataType:"html"});
			return false;
}
</script>