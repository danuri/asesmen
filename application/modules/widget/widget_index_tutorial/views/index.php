	
          <div class="categories">
            <h4><?=strtoupper($nama_wrapper);?></h4>
				<div class='panel-body'>
								<?php
									foreach($daftar as $key=>$val){
								?>
									<div class="col-lg-12">
									<div class="panel-heading"><b><?=strtoupper($val->nama_kategori);?></b></div>
									<p>
										<?php
											foreach($val->isi as $key2=>$val2){
												echo '<a href="'.base_url().'read/artikel/'.$val2->id_konten.'/'.$val->kat_seo.'/'.$val2->seo.'"><div>'.$val2->judul.'</div></a>';
											}
										?>
									</p>
									<!--//panel-body-->
									</div>
									<!--//col-lg-4-->
								<?php
										}
								?>
				</div>
          </div>
		
