<!-- Header -->
<?php $this->view('include/header');?>
<!-- desktop -->
<div class="container">
<div class="login-box hidden-xs">
	<div class="col-md-12"><br><br></div>
	<div class="col-md-12 bg-box">
		<div class="text-center">
			<div class="col-md-2"></div>
			<div class="col-md-8 ">
  				<div class="form-group ">					
  						<a href="<?php echo base_url();?>index.php/admin" >				
  							<img alt="" src="<?php echo base_url()?>images/logo/logo-d2h-1.png">
  						</a>
  						<hr>				
  				</div>
  				<?php
  				$attributes = array('class' => 'form-horizontal ', );

				 echo form_open('index/login', $attributes); 	?>
				<div class="form-group  ">
  						<div class="input-group ">
  							<span class="input-group-addon glyphicon glyphicon-user" id="basic-addon1"></span>
  							<input type="text" class="form-control glyphicon glyphicon-user col-xs-3" name="username" placeholder="E-mail" aria-describedby="basic-addon1">
  						</div>
  				</div>
  				<div class="form-group">
  					<!-- <div class="col-md-offset-4 col-sm-3"> -->
  						<div class="input-group">
  							<span class="input-group-addon glyphicon glyphicon-pencil" id="basic-addon1"></span>
  							<input type="password" class="form-control glyphicon glyphicon-pencil col-xs-3" name="password" placeholder="Password" aria-describedby="basic-addon1">
  						</div>
  					<!-- </div> -->
  				</div>
  				<div class="form-group">
  					<!-- <div class="col-md-offset-4 col-sm-3">		 -->
  						<button type="submit" class="btn btn-info btn-lg btn-block">log in</button>
  						<hr/>
  					<!-- </div> -->
  				</div>
			<?php echo form_close()?>
			</div>
			</div>
		</div>
</div>
</div>
<!-- desktop close-->

<!-- devices  -->
<div class="container visible-xs">
	
	<div class="col-md-12 bg-box">
		<div class="text-center">
			
			<div class="col-md-6 ">
  				<div class="form-group ">
  						<a href="<?php echo base_url();?>index.php/admin" >				
  							<img alt="" src="<?php echo base_url()?>images/logo/logo-d2h-1.png">
  						</a>	
  						<hr>				
  				</div>
  				<?php
  				$attributes = array('class' => 'form-horizontal ', );

				 echo form_open('index/login', $attributes); 	?>
				<div class="form-group  ">
					<div class="col-md-offset-4 col-sm-3">
  						<div class="input-group ">
  							<span class="input-group-addon glyphicon glyphicon-user" id="basic-addon1"></span>
  							<input type="text" class="form-control glyphicon glyphicon-user col-xs-3" name="username" placeholder="E-mail" aria-describedby="basic-addon1">
  						</div>
  					</div>
  				</div>
  				<div class="form-group">
  					<div class="col-md-offset-4 col-sm-3">
  						<div class="input-group">
  							<span class="input-group-addon glyphicon glyphicon-pencil" id="basic-addon1"></span>
  							<input type="password" class="form-control glyphicon glyphicon-pencil col-xs-3" name="password" placeholder="Password" aria-describedby="basic-addon1">
  						</div>
  					</div>
  				</div>
  				<div class="form-group">
  					<div class="col-md-offset-4 col-sm-3">		
  						<button type="submit" class="btn btn-info btn-lg btn-block">log in</button>
  						<hr/>
  					</div>
  				</div>
			<?php echo form_close()?>
			</div>
			</div>
		</div>
</div>
<!-- devices close -->
<!-- footer -->
</body>
</html>
<?php //$this->view('include/footer');?>