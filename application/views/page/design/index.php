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
			<div class="panel panel-danger">
  				<div class="panel-heading"><h4>แบบบ้าน</h4><label><a href="#" style="text-decoration:none">ดูทั้งหมด</a></label></div>
  					<div class="panel-body">
  						<div class="row">
  							<?php $this->view('page/design/content/house');?>
						</div>
  					</div>
  			</div>
		</div>
		<div class="col-md-3">
			<?php echo "hello";?>
		</div>
	</div>
</div>	