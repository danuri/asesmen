<div class="row">
	<div class="col-lg-12">
		 <h3 class="page-header">Komentar Pengunjung</h3>
	</div>
	<!-- /.col-lg-12 -->
</div>

          <div class='row'>
            <div class='col-md-12'>
              <div class='panel panel-info'>
                <div class='panel-heading'>
                  <b>FORM EDIT/JAWAB KOMENTAR</b>
				  <div class="btn btn-warning btn-xs pull-right" onclick="batal(); return false;"><i class="fa fa-close fa-fw"></i></div>
                </div><!-- /.box-header -->
                <div class='panel-body'>
    <form id="content-form" method="post" action="<?=base_url();?>cmskonten/comment/edit_aksi" enctype="multipart/form-data">
			<div class="table-responsive">
<table class="table table-striped">
        <tr>
          <td width="150">Komentar</td>
          <td colspan="3">
		  <input type="text" id="isi_komentar" name="isi_komentar" class="form-control" value="<?=@$isi->isi_komentar;?>" onblur="if(this.value=='') this.value='Wajib diisi';" onfocus="if(this.value=='Wajib diisi') this.value='';">
		  </td>
        </tr>
        <tr>
          <td>Jawaban</td>
          <td colspan="3">
		  <input type="text" id="isi_jawaban" name="isi_jawaban" class="form-control" value="<?=@$jawaban->isi_komentar;?>" onblur="if(this.value=='') this.value='Wajib diisi';" onfocus="if(this.value=='Wajib diisi') this.value='';">
		  </td>
        </tr>
       <tr >
			<td>&nbsp;</td>
			<td colspan="3">
				<input type=hidden name=id_komentar value='<?=@$isi->id_komentar;?>'>
					<div class="btn btn-primary btn-xl" onclick="simpan(); return false;" id="btAct"><i class="fa fa-save fa-fw"></i> Simpan</div>
					<div class="btn btn-warning btn-xl" onclick="batal();"><i class="fa fa-close fa-fw"></i> Batal...</div>
			</td>
        </tr>
</table>
		</div>
                  </form>



                </div>
              </div><!-- /.box -->
			</div>
		  </div>
<form id="sb_act" method="post"></form>
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
					var arr_result = data.split("#");
					if(arr_result[0]=='sukses'){
						batal();
					} else {
						alert('Data gagal disimpan! \n Lihat pesan diatas form');
					}
			},
			dataType:"html"});
			return false;
}
////////////////////////////////////////////////////////////////////////////
function batal(){
	$('#sb_act').attr('action','<?=site_url();?>module/cmskonten/comment');
	var tab = '<input type="hidden" name="cari" value="<?=$cari;?>">';
	var tab = tab + '<input type="hidden" name="batas" value="<?=$batas;?>">';
	var tab = tab + '<input type="hidden" name="hal" value="<?=$hal;?>">';	
	$('#sb_act').html(tab).submit();
}
</script>