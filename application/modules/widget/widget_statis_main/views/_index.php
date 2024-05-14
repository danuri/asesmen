<div class='row' style="margin-top:<?=$margin_top;?>;margin-bottom:<?=$margin_bottom;?>;">
	<div class="col-lg-12">
<h3><?=strtoupper(@$daftar[0]->judul);?></h3>
<div><?=@$daftar[0]->isi_konten;?></div>
	</div>
</div>

<style>
.syntaxhighlighter table .container:before {
    display: none !important;
}
</style>

	<script type="text/javascript" src="<?=base_url();?>assets/js/syntaxhighlighter/scripts/shCore.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets/js/syntaxhighlighter/scripts/shBrushJScript.js"></script>
	<link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/js/syntaxhighlighter/styles/shCoreDefault.css"/>
	<script type="text/javascript">SyntaxHighlighter.all();</script>
<style>
.syntaxhighlighter div.toolbar span a.toolbar_item{
   display: none !important;
} 

.syntaxhighlighter .toolbar {
  background: none !important;
}
</style>
