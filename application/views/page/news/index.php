<?php
   $this->view('include/header');
   $this->view('include/navbar');
   //$this->view('include/slide');
?>
<div class="container bghome">	
	<div class="row">
		<div class="col-md-12 ">
			<div class="">			
					<img class="img-thumbnail"src="<?php echo base_url()?>images/banner.jpg" alt="...">				
			</div>
		</div>
	</div>
</div>
<div class="container bghome">	
	<div class="col-md-12 ">				
		<?php $this->view('include/marquee');	?>		
	</div>
</div>
<div class="container bghome">
	<div class="col-md-12">
		<div class="col-md-9">
			<!-- <div class="panel panel-info">		
  				<div class="panel-body"> -->
  			<div class="page-header"><h1>ข่าวสาร เรื่องน่ารู้<small>( All news)</small></h1></div>
  				<!-- <h2>ข่าวสาร เรื่องน่ารู้</h2>
					(<a class="r-right" href="#">All news</a>)  
						<p style="border-bottom:1px dotted  #000"></p>-->
					<div class="row">
  							<?php $this->view('page/news/content/all_news');?>
					</div>
					<div class="text-center"><?php $this->view('page/condo/content/pagination');?></div>
					
				<!-- </div>
			</div> -->
		</div>
<!-- -------------------------------------------------------------------------------------------------------------------- -->
		<div class="col-md-3 hidden-xs">
			<?php $this->view('page/home/navbar-right');?>
		</div>
	</div>
</div>

<?php  $this->view('include/footer');	



