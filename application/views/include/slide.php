<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		<li data-target="#carousel-example-generic" data-slide-to="3"></li>
		<li data-target="#carousel-example-generic" data-slide-to="4"></li>
	</ol>
	
	<!-- Wrapper for slides -->
	<div class="carousel-inner">
    <div class="item active">
	      	<img src="<?php echo base_url()?>images/slide/h2.jpg" alt="...">
	   		<div class="carousel-caption">
	      		<h3>Design To House</h3>
	   		</div>
	</div>
	<div class="item">
	      	<img src="<?php echo base_url()?>images/slide/h3.jpg" alt="...">
	    	<div class="carousel-caption">
	      		<h3>Design To House</h3>
	    	</div>
	</div>
	<div class="item">
	      	<img src="<?php echo base_url()?>images/slide/h4.jpg" alt="...">
	    	<div class="carousel-caption">
	      		<h3>Design To House</h3>
	    	</div>
	</div>
	<div class="item">
	      	<img src="<?php echo base_url()?>images/slide/h5.jpeg" alt="...">
	    	<div class="carousel-caption">
	      		<h3>Design To House</h3>
	    	</div>
	</div>
	<div class="item">
	      	<img src="<?php echo base_url()?>images/slide/h6.png" alt="...">
	    	<div class="carousel-caption">
	      		<h3>Design To House</h3>
	    	</div>
	</div>
	</div>
	
	<!-- Controls -->
	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	<!-- script control -->
	<script>
    $('.carousel').carousel({
        interval: 5000
    })
	</script>
	
	
</div> <!-- Carousel -->


<?php 	
	/* close content */
	