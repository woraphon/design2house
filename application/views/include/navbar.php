<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            	<span class="sr-only">Toggle navigation</span>
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
			</button>
				<a class="navbar-brand" href="<?php echo base_url();?>index.php/menu/home"><img  class="img-thumbnail" alt="Brand" src="<?php echo base_url()?>images/logo/logo-d2h-6.png"></a>
        </div>
	<div id="navbar" class="navbar-collapse collapse">
		<div class="nav navbar-nav ">
			<ul class="nav navbar-nav">
            	<li><a href="<?php echo base_url();?>index.php/menu/home"><i class="fa fa-cog fa-spin "></i> Home</a></li>
            	<li><a href="<?php echo base_url();?>index.php/menu/design"><i class="fa fa-cog fa-spin"></i> Design</a></li>
            	<li><a href="<?php echo site_url('menu/idea');?>"><i class="fa fa-cog fa-spin"></i> Idea</a></li>
            	<li><a href="<?php echo site_url('menu/architecture');?>"><i class="fa fa-cog fa-spin"></i> Architecture</a></li>
            	<li><a href="<?php echo site_url('menu/condo');?>"><i class="fa fa-cog fa-spin"></i> Condominium</a></li>
            	<li><a href="<?php echo site_url('menu/news');?>"><i class="fa fa-cog fa-spin"></i> New</a></li>
            	<li><a href="<?php echo site_url('menu/admin');?>"><i class="fa fa-cog fa-spin"></i> (ทดสอบระบบ admin)</a></li>
			</ul>
		</div>
	</div><!--/.nav-collapse -->
</div>
</nav>