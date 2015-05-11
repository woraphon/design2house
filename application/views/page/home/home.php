<?php
   $this->view('include/header');
   $this->view('include/navbar');
   //$this->view('include/slide');
?>   
	<div class="container">
<div class="bghome">	
	<div class="row">
		<div class="col-md-12 ">
			<div class="thumbnail">			
					<img src="<?php echo base_url()?>images/banner.jpg" alt="...">				
			</div>
		</div>
	</div>		
	<div class="row">			
      <div class="col-md-9">
 <!-- Slide  --------------------------------------------------------------------------> 
      		<div class="panel panel-info">		
  				<div class="panel-body">
        			<?php $this->view('include/slide');?>
				</div>
			</div>
<!----- open Update ---------------------------------------------------->
      		<div class="panel panel-info">
  				<div class="panel-heading">Update! สิ่งน่าสนใจ</div>
  					<div class="panel-body">
        				<div class="row">
  							<?php $this->view('page/home/content/new');?>
						</div>
					</div>
			</div>
<!------ close update  ---------------------------------------------->
<!----- open Design---------------------------------------------------->
      		<div class="panel panel-info">
  				<div class="panel-heading">DESIGN </div>
  					<div class="panel-body">
        				<div class="row">
  							<?php $this->view('page/home/content/design');?>
						</div>
					</div>
			</div>
<!------ close Design  ---------------------------------------------->

<!------ Tab Update ------------------------------------------------->	
		<div class="panel panel-danger">
 		<!-- Default panel contents -->
  		<div class="panel-heading">Panel heading</div>
  		<div class="panel-body">
  			<div class="col-md-12">
  				<?php $this->view('include/tab');?>
  			</div>
  		</div>
  		</div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------- -->     	      	 		
  		<!-- New ข่าวส่าร ราคาน้ำมัน ราคาทอง อัตราแลกเปลียน -->
		<div class="panel panel-info">
  		<!-- Default panel contents -->
  		<div class="panel-heading">New</div>
  		<div class="panel-body">
  			<!-- อัตราแลกเปลียน -->
    		<div class="row">
  			<div class="col-xs-6 col-md-4">
  				<div class="thumbnail">
  			....
  				</div>
  			</div>			
			<!-- ราคาน้ำมัน -->    		
  			<div class="col-xs-6 col-md-4">
  				<div class="thumbnail">
   	 			...
   	 			</div>
  			</div>			
			<!-- ราคาทองคำ -->    		
  			<div class="col-xs-6 col-md-4">
  				<div class="thumbnail">
   	 			....  				
   	 			</div>
  			</div>
			</div>
  		</div>
		</div>
  		
<!-- webboard ---------------------------------------------------------->
  		<div class="panel panel-danger">
  		<!-- Default panel contents -->
  		<div class="panel-heading">Webboard</div>
  		<div class="panel-body">
    		<p>...</p>
  		</div>
  		<!-- List group -->
  		<ul class="list-group">
    		<li class="list-group-item">Cras justo odio</li>
    		<li class="list-group-item">Dapibus ac facilisis in</li>
    		<li class="list-group-item">Morbi leo risus</li>
    		<li class="list-group-item">Porta ac consectetur ac</li>
    		<li class="list-group-item">Vestibulum at eros</li>
  		</ul>
		</div>
  		
     </div>
 <!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------- -->     	      	
      	<!-- right content --> 		
  		<div class="col-md-3">
			<?php $this->view('page/home/navbar-right');?>
      	</div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------- -->     	      	      	
     </div>
    </div>
 
 <?php  $this->view('include/footer');