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
		<!-- main content -->
		<div class="col-md-3">
      	<!-- navbar-left -->
			<?php $this->view('page/home/navbar-left');?>
  		</div>
 <!--End Left content  --------------------------------------------------------------------------> 			
		
      	<div class="col-md-6">
      	<div class="panel panel-info">
 		 <!-- Default panel contents -->		
  		<div class="panel-body">
        		<?php $this->view('include/slide');?>
		</div>
		</div>
      	<!-- open Update -->
      	<div class="panel panel-info">
 		 <!-- Default panel contents -->
  		<div class="panel-heading">Update! ข่าวสาร</div>
  		<div class="panel-body">
        		<div class="row">
  					<div class="col-sm-6 col-md-6">
   	 					<div class="thumbnail">
      						<img src="<?php echo base_url()?>images/nopic.png" alt="...">
      						<div class="caption">
        						<h3>Thumbnail label</h3>
        						<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. </p>
        						<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      						</div>
    					</div>
  					</div>
  					<div class="col-sm-6 col-md-6">
   	 					<div class="thumbnail">
      						<img src="<?php echo base_url()?>images/nopic.png" alt="...">
      						<div class="caption">
        						<h3>Thumbnail label</h3>
        						<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. </p>
        						<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      						</div>
    					</div>
  					</div>
				</div>
			</div>
			</div>
			<!-- close update  -->
		<!-- Tab Update -->	
		<div class="panel panel-danger">
 		<!-- Default panel contents -->
  		<div class="panel-heading">Panel heading</div>
  		<div class="panel-body">
  			<div class="col-md-12">
  				<?php $this->view('include/tab');?>
  			</div>
  			<div class="col-md-12">
  				<div class="jumbotron">
        		<p>This example is a quick exercise to illustrate how the default, It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
       	 		<p>To see the difference between static and fixed top navbars, just scroll.</p>
        		</div>
  			</div>
  		</div>
  		</div>
  		
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
  		
  		<!-- webboard -->
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
  			<div class="">
			<div class="panel panel-danger">
 			<!-- Default panel contents -->
  			<div class="panel-heading">Category</div>
  			<div class="panel-body"> 				
			<div class="list-group">
  				<a href="#" class="list-group-item"><span class="badge">14</span>PHP Framework</a>
  				<a href="#" class="list-group-item"><span class="badge">6</span>JQuery</a>
  				<a href="#" class="list-group-item"><span class="badge">8</span>Codeigniter</a>
  				<a href="#" class="list-group-item"><span class="badge">16</span>HTML</a>
  				<a href="#" class="list-group-item"><span class="badge">11</span>CSS</a>
			</div>
			</div>
			</div>
  				<div class="thumbnail">
        		<!-- 16:9 aspect ratio -->
					<div class="embed-responsive embed-responsive-16by9">
  						<iframe class="embed-responsive-item" width="100%" height="100%" src="https://www.youtube.com/embed/4eWfRjyp2Nc?autoplay=0" frameborder="1" allowfullscreen></iframe>
					</div>
        		</div>
  			</div>
      		<div class="">
      		<div class="panel panel-default">
  				<div class="panel-heading">Panel heading without title</div>
  				<div class="panel-body">
    			<div class="list-group">
  					<a href="#" class="list-group-item list-group-item-success">Dapibus ac facilisis in</a>
  					<a href="#" class="list-group-item list-group-item-info">Cras sit amet nibh libero</a>
  					<a href="#" class="list-group-item list-group-item-warning">Porta ac consectetur ac</a>
  					<a href="#" class="list-group-item list-group-item-danger">Vestibulum at eros</a>
  					<a href="#" class="list-group-item list-group-item-success">Dapibus ac facilisis in</a>
  					<a href="#" class="list-group-item list-group-item-info">Cras sit amet nibh libero</a>
  					<a href="#" class="list-group-item list-group-item-warning">Porta ac consectetur ac</a>
  					<a href="#" class="list-group-item list-group-item-danger">Vestibulum at eros</a>
				</div>
  				</div>
			</div>
  			<div class="panel panel-default">
  				<div class="panel-heading">Panel heading without title</div>
  				<div class="panel-body">
    				<div class="list-group">
  					<a href="#" class="list-group-item active"><h4 class="list-group-item-heading">List group item heading</h4><p class="list-group-item-text">...</p></a>
    				<a href="#" class="list-group-item "><h4 class="list-group-item-heading">List group item heading</h4><p class="list-group-item-text">...</p></a>
    				<a href="#" class="list-group-item "><h4 class="list-group-item-heading">List group item heading</h4><p class="list-group-item-text">...</p></a>
				</div>
  				</div>
			</div>	
				
  			</div>
      	</div>
     </div>
    </div>
	

   
   
 <?php  $this->view('include/footer');