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
		<MARQUEE>ขออภัยในความไม่สะดวก ขณะนี้ทาง www.design2house.com มีความจำเป็น ต้องปรับปรุงการให้บริการ www.design2house.com ในส่วนนี้ 
				เพื่อการให้บริการwww.design2house.com ให้มีประสิทธิภาพยิ่งขึ้น ซึ่งจะส่งผลให้หน้าเวปไซต์บางเวป ไม่สามารถให้บริการได้
				จึงเรียนมาเพื่อขออภัยในความไม่สะดวกในครั้งนี้ด้วย</MARQUEE>				
	</div>
</div>
<div class="container bghome">
	<div class="col-md-12">
		<div class="col-md-9">
			<!-- <div class="panel panel-info">		
  				<div class="panel-body"> -->
  				<h2>IDEA</h2>
					(<a class="r-right" href="#">All Idea</a>) 
						<p style="border-bottom:1px dotted  #000"></p>
					<div class="row">
  							<?php $this->view('page/idea/content/all_idea');?>
					</div>
					<div class="text-center"><?php $this->view('page/idea/content/pagination');?></div>
					
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



