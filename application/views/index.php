<!--Start Container-->
<div id="main" class="container-fluid">
	<div class="row">
		<div id="sidebar-left" class="col-xs-2 col-sm-2">
			<ul class="nav main-menu">
				<li>
					<a href="<?=base_url()?>" class="ajax-link">
						<i class="fa fa-dashboard"></i>
						<span class="hidden-xs">Main</span>
					</a>
				</li>
			</ul>
		</div>
		
		<div id="content" class="col-xs-12 col-sm-10">
			<!--START CONTENT 1-->
			<div class="row">
				<?php
				  $this->load->view('gejala');
				  $this->load->view('penyakit_gejala');
				?>
			<!--END CONTENT 1-->
			</div>
			
			<!--START CONTENT 2-->
			<div class="row">
				<?php
					if(isset($data))
					{
						$this->load->view('output');
						$this->load->view('output_pakar');
					}
						
				?>
			</div>
			<!--START CONTENT 2-->
		</div>
	</div>
</div>
<!--End Container-->



