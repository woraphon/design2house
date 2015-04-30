<div class="panel panel-info">
 	<!-- Default panel contents -->
  	<div class="panel-heading">Menu</div>
  		<div class="panel-body">
  		
  		<nav class="nav navbar-default ">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar2" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>  
               
        </div>
        <div id="navbar2" class="navbar-collapse collapse">
          
          <div class="nav ">
          	<!--  <button type="button" class="btn btn-info " data-toggle="modal" data-target="#login"> Login </button>
            	<?php // $this->view('page/login/form_login');?>
            <button type="button" class="btn btn-info " data-toggle="modal" data-target="#register"> register </button>
             <?php  //$this->view('page/register/form_register');?> -->
             <ul class="nav nav-pills nav-stacked ">
  				<li><a href="<?php echo base_url();?>index.php/menu/home">หน้าแรก</a></li>
            	<li><a href="<?php echo base_url();?>index.php/menu/about">ลงประกาศขาย-เช่า</a></li>
            	<li><a href="<?php echo site_url('menu/contact');?>">คอนโดมิเนียม</a></li>
            	<li class="dropdown">
              		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">แบบบ้าน<span class="caret"></span></a>
              		<ul class="dropdown-menu" role="menu">
                		<li><a href="<?php echo site_url('menu/php');?>">แบบบ้านตามขนาด</a></li>
                		<li class="divider"></li>               
                		<li><a href="<?php echo site_url('menu/php');?>">แบบบ้านตามราคา</a></li>
                		<li class="divider"></li>                
                		<li><a href="<?php echo site_url('menu/css');?>">แบ่งตามประเภท</a></li>
                		<li class="divider"></li>
                		<li><a href="<?php echo site_url('menu/css');?>">แบ่งตามวัสดุ</a></li>
                		<li class="divider"></li>
                		<li><a href="<?php echo site_url('menu/css');?>">แบ่งตามที่ตั้ง</a></li>
                		<li class="divider"></li>
             		</ul>
            	</li>
            	<li><a href="<?php echo site_url('menu/contact');?>">ตกแต่งภายใน</a></li>
            	<li><a href="<?php echo site_url('menu/contact');?>">แบ่งตามสไตล์</a></li>
            	<li><a href="<?php echo site_url('menu/contact');?>">เรื่องน่ารู้</a></li>
            	<li><a href="<?php echo site_url('menu/contact');?>">ติดต่อลงโฆษณา</a></li>

			</ul>	
          </div>
        </div><!--/.nav-collapse -->

    </nav>
  		
  		<?php 	/*
  			<div id="navbar2" class="navbar-collapse collapse">
  			<ul class="nav nav-pills nav-stacked ">
  				<li><a href="<?php echo base_url();?>index.php/menu/home">หน้าแรก</a></li>
            	<li><a href="<?php echo base_url();?>index.php/menu/about">ลงประกาศขาย-เช่า</a></li>
            	<li><a href="<?php echo site_url('menu/contact');?>">คอนโดมิเนียม</a></li>
            	<li class="dropdown">
              		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">แบบบ้าน<span class="caret"></span></a>
              		<ul class="dropdown-menu" role="menu">
                		<li><a href="<?php echo site_url('menu/php');?>">แบบบ้านตามขนาด</a></li>
                		<li class="divider"></li>               
                		<li><a href="<?php echo site_url('menu/php');?>">แบบบ้านตามราคา</a></li>
                		<li class="divider"></li>                
                		<li><a href="<?php echo site_url('menu/css');?>">แบ่งตามประเภท</a></li>
                		<li class="divider"></li>
                		<li><a href="<?php echo site_url('menu/css');?>">แบ่งตามวัสดุ</a></li>
                		<li class="divider"></li>
                		<li><a href="<?php echo site_url('menu/css');?>">แบ่งตามที่ตั้ง</a></li>
                		<li class="divider"></li>
             		</ul>
            	</li>
            	<li><a href="<?php echo site_url('menu/contact');?>">ตกแต่งภายใน</a></li>
            	<li><a href="<?php echo site_url('menu/contact');?>">แบ่งตามสไตล์</a></li>
            	<li><a href="<?php echo site_url('menu/contact');?>">เรื่องน่ารู้</a></li>
            	<li><a href="<?php echo site_url('menu/contact');?>">ติดต่อลงโฆษณา</a></li>

			</ul>	
			</div>
			 */ ?>
  		</div>
</div>