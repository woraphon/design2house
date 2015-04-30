<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url();?>index.php/menu/home">Design2House.com</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          
          <div class="nav navbar-nav navbar-right">
          	<!--  <button type="button" class="btn btn-info " data-toggle="modal" data-target="#login"> Login </button>
            	<?php // $this->view('page/login/form_login');?>
            <button type="button" class="btn btn-info " data-toggle="modal" data-target="#register"> register </button>
             <?php  //$this->view('page/register/form_register');?> -->
             <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url();?>index.php/menu/home">Home</a></li>
            <li><a href="<?php echo base_url();?>index.php/menu/about">About</a></li>
            <li><a href="<?php echo site_url('menu/contact');?>">Contact us</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tutorial<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo site_url('menu/html');?>">VDO Tutorial HTML</a></li>
                <li class="divider"></li>               
                <li><a href="<?php echo site_url('menu/php');?>">VDO Tutorial PHP</a></li>
                <li class="divider"></li>                
                <li><a href="<?php echo site_url('menu/css');?>">VDO Tutorial CSS</a></li>
                <li class="divider"></li>
              </ul>
            </li>
          </ul>
          </div>
        </div><!--/.nav-collapse -->
      </div>
    </nav>