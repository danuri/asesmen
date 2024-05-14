<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>UPT Penilaian Kompetensi</title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	
	<meta http-equiv="Cache-control" content="no-cache">
	
	<link rel="shortcut icon" href="<?=base_url('assets/media/upload/bawaan/logo_ktng.gif');?>" type="image/x-icon" />
	
	<link href="<?=base_url('assets/css/klasik.css');?>" rel="stylesheet">
	<!-- Bootstrap 3.3.2 -->
	<link href="<?=base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
	<!-- FontAwesome 4.3.0 -->
	<link href="<?=base_url('assets/css/font-awesome/font-awesome-4.4.0/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">
	<!-- Theme style -->
	<link href="<?=base_url('assets/css/adminlte/AdminLTE.min.css');?>" rel="stylesheet" type="text/css" />
	<!-- AdminLTE Skins. Choose a skin from the css/skins 
		 folder instead of downloading all of them to reduce the load. -->
	<link href="<?=base_url('assets/css/adminlte/skins/_all-skins.min.css');?>" rel="stylesheet" type="text/css" />
	<!-- jQuery Version 1.11.0 -->
	<script type="text/javascript" src="<?=base_url('assets/js/jquery/jquery-1.11.0.min.js');?>"></script>
	<!-- Morris Charts CSS -->
	<link href="<?=base_url('assets/css/plugins/morris.css');?>" rel="stylesheet">
	<!-- Bootstrap Core JavaScript -->
	<script type="text/javascript" src="<?=base_url('assets/js/bootstrap.min.js');?>"></script>
	<!-- AdminLTE App -->
	<script src="<?=base_url('assets/js/adminlte/app.min.js');?>" type="text/javascript"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/jquery/maskmoney/3.0.2/jquery.maskMoney.min.js');?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/bootstrap-timeout/bootstrap-session-timeout.min.js');?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/form.js');?>"></script>
	<!-- DataTables Responsive CSS -->
	<link href="<?=base_url('assets/css/datatables-responsive/dataTables.responsive.css');?>" rel="stylesheet">
	<!-- DataTable Button CSS -->
	<link href="<?=base_url('assets/css/datatables/css/buttons.dataTables.min.css');?>" rel="stylesheet">
	<!-- DataTables CSS -->
	<link href="<?=base_url('assets/css/datatables-plugins/dataTables.bootstrap.css');?>" rel="stylesheet">
</head>

<body class="skin-blue" style="width:100%;padding:50px 100px 0px 100px;">

			<div class="row" id="source-html">
				<div class="col-lg-6">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="page-header"><i class="fa fa-newspaper-o" aria-hidden="true"></i>&nbsp; Wacana</h3>
							<?php foreach ($detail_soal->result() as $key){ ?>
								<?php echo $key->wacana; ?>
							<?php } ?>
						
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="page-header"><i class="fa fa-question-circle" aria-hidden="true"></i>&nbsp; Pertanyaan</h3>
							<?php foreach ($detail_soal->result() as $key){ ?>
								<?php echo $key->tanya_ankas1; ?> <br/>
								<?php echo $key->tanya_ankas2; ?> <br/>
								<?php echo $key->tanya_ankas3; ?> <br/>
								<?php echo $key->tanya_ankas4; ?> <br/><br/>
								Digunakan Untuk : <b><?php echo $key->digunakan; ?></b>
							<?php } ?>
						
						</div>
						
					</div>
					
					<div class"footer" style="float:right;">
						<button type="button" class="btn btn-default" onclick="javascript:window.close()">Tutup</button>
						<button class="btn btn-info" id="btn-export" onclick="exportHTML();">Export to Word</button>
					</div>	
				</div>
			</div>
	
</body>

<script type="text/javascript">

    function exportHTML(){
       var header = "<html xmlns:o='urn:schemas-microsoft-com:office:office' "+
            "xmlns:w='urn:schemas-microsoft-com:office:word' "+
            "xmlns='http://www.w3.org/TR/REC-html40'>"+
            "<head><meta charset='utf-8'><title>Export HTML to Word Document with JavaScript</title></head><body>";
       var footer = "</body></html>";
       var sourceHTML = header+document.getElementById("source-html").innerHTML+footer;
       
       var source = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(sourceHTML);
       var fileDownload = document.createElement("a");
       document.body.appendChild(fileDownload);
       fileDownload.href = source;
		   <?php foreach ($detail_soal->result() as $key){ ?>
			   fileDownload.download = 'soal_ankas_<?php echo $key->id_materi; ?>.doc';
		   <?php } ?>
       fileDownload.click();
       document.body.removeChild(fileDownload);
    }


</script>
