<?php
   $this->view('include/header');
   $this->view('include/navbar');
   //$this->view('include/slide');
?>
<div class="container bghome">	
	<div class="row">
		<div class="col-md-12 ">
			<div class="thumbnail">			
					<img src="<?php echo base_url()?>images/banner.jpg" alt="...">				
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
					<div class="col-md-12">
						<h2>แบบบ้าน</h2>
							(<a class="r-right" href="#">ดูทั้งหมด</a>) 
								<p style="border-bottom:1px dashed #000"></p>
  								<div class="row">
  									<?php $this->view('page/design/content/house');?>
								</div>
								<div class="col-md-12"><hr></div>
					</div>
					<div class="col-md-12">
						<h2>showroom</h2>
							(<a class="r-right" href="#">ดูทั้งหมด</a>) 
								<p style="border-bottom:1px dashed #000"></p>
  							<div class="row">
  								<?php $this->view('page/design/content/house');?>
							</div>
							<div class="col-md-12"><hr></div>
					</div>
					<div class="col-md-12">
						<h2>แบบห้องนอน</h2>
							(<a class="r-right" href="#">ดูทั้งหมด</a>) 
								<p style="border-bottom:1px dashed #000"></p>
  							<div class="row">
  								<?php $this->view('page/design/content/house');?>
							</div>
							<div class="col-md-12"><hr></div>
					</div>
					<div class="col-md-12">
						<h2>แบบห้องนั่งเล่น</h2>
							(<a class="r-right" href="#">ดูทั้งหมด</a>) 
								<p style="border-bottom:1px dashed #000"></p>
  							<div class="row">
  								<?php $this->view('page/design/content/house');?>
							</div>
							<div class="col-md-12"><hr></div>
					</div>
					<div class="col-md-12">
						<h2>แบบห้องอาหาร</h2>
							(<a class="r-right" href="#">ดูทั้งหมด</a>) 
								<p style="border-bottom:1px dashed #000"></p>
  							<div class="row">
  								<?php $this->view('page/design/content/house');?>
							</div>
							<div class="col-md-12"><hr></div>
					</div>
					<div class="col-md-12">
						<h2>แบบห้องครัว</h2>
							(<a class="r-right" href="#">ดูทั้งหมด</a>) 
								<p style="border-bottom:1px dashed #000"></p>
  							<div class="row">
  								<?php $this->view('page/design/content/house');?>
							</div>
							<div class="col-md-12"><hr></div>
					</div>
					<div class="col-md-12">
						<h2>แบบห้องน้ำ</h2>
							(<a class="r-right" href="#">ดูทั้งหมด</a>) 
								<p style="border-bottom:1px dashed #000"></p>
  							<div class="row">
  								<?php $this->view('page/design/content/house');?>
							</div>
							<div class="col-md-12"><hr></div>
					</div>
					<div class="col-md-12">
						<h2>แบบห้องทำงาน</h2>
							(<a class="r-right" href="#">ดูทั้งหมด</a>) 
								<p style="border-bottom:1px dashed #000"></p>
  							<div class="row">
  								<?php $this->view('page/design/content/house');?>
							</div>
							<div class="col-md-12"><hr></div>
					</div>
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



