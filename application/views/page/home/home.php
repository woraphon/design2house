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
<div class="row">
<div class="container bghome">			
      <div class="col-md-9">
 <!-- Slide  --------------------------------------------------------------------------> 
      		<div class="panel panel-info">		
  				<div class="panel-body">
        			<?php $this->view('include/slide');?>
				</div>
			</div>
<!----- open Update ---------------------------------------------------->
      		<div class="panel panel-info">
  				<div class="panel-heading"><a href="#" style="text-decoration:none">Update! สิ่งน่าสนใจ </a></div>
  					<div class="panel-body">
        				<div class="row">
  							<?php $this->view('page/home/content/new');?>
						</div>
					</div>
			</div>
<!------ close update  ---------------------------------------------->
<!----- open Design---------------------------------------------------->
      		<div class="panel panel-info">
  				<div class="panel-heading"> <a href="#" style="text-decoration:none">DESIGN</a></div>
  					<div class="panel-body">
        				<div class="row">
  							<?php $this->view('page/home/content/design');?>
						</div>
					</div>
			</div>
<!------ close Design  ---------------------------------------------->

<!------ Tab Update ------------------------------------------------->	
		<div class="panel panel-danger">
  			<div class="panel-heading"><a href="#" style="text-decoration:none">Home Idea</a></div>
  				<div class="panel-body">
  					<div class="row">
  						<?php $this->view('page/home/content/idea');?>
					</div>
  				</div>
  		</div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------- -->     	      	 		
  		<!-- New ข่าวส่าร ราคาน้ำมัน ราคาทอง อัตราแลกเปลียน -->
		<div class="panel panel-info">
  			<div class="panel-heading"><a href="#" style="text-decoration:none">Condo </a></div>
  				<div class="panel-body">
  					<div class="row">
  						<?php $this->view('page/home/content/condo');?>
					</div>
  				</div>
		</div>
  		
<!-- webboard ---------------------------------------------------------->
<!--   		<div class="panel panel-danger"> -->
  		<!-- Default panel contents -->
<!--   		<div class="panel-heading">Webboard</div> -->
<!--   		<div class="panel-body"> -->
<!--     		<p>...</p> -->
<!--   		</div> -->
  		<!-- List group -->
<!--   		<ul class="list-group"> -->
<!--     		<li class="list-group-item">Cras justo odio</li> -->
<!--     		<li class="list-group-item">Dapibus ac facilisis in</li> -->
<!--     		<li class="list-group-item">Morbi leo risus</li> -->
<!--     		<li class="list-group-item">Porta ac consectetur ac</li> -->
<!--     		<li class="list-group-item">Vestibulum at eros</li> -->
<!--   		</ul> -->
<!-- 		</div> -->
  		
     </div>

 <!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------- -->     	      	

      	<!-- right content --> 		
  		<div class="col-md-3 hidden-xs">
			<?php $this->view('page/home/navbar-right');?>
      	</div>
</div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------- -->     	      	      	
     </div>
 
 <?php  $this->view('include/footer');