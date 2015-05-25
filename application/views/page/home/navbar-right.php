  	<div class="thumbnail"><!-- 16:9 aspect ratio -->
		<div class="embed-responsive embed-responsive-16by9">
  			<iframe class="embed-responsive-item" width="100%" height="100%" src="https://www.youtube.com/embed/aoe9ST8gQhQ?autoplay=0&rel=0&amp;controls=0&amp;showinfo=0" frameborder="1" allowfullscreen></iframe>
			<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/aoe9ST8gQhQ?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe> -->
		</div>
	</div>
	<div class="panel panel-info"><!-- Default panel contents -->
  		<div class="panel-heading">Category List</div>
  			<div class="panel-body"> 				
				<div class="list-group">
					<a href="#" class="list-group-item list-group-item-success">รีวิวบ้าน</a>
  					<a href="#" class="list-group-item list-group-item-info">คอนโด อพาร์ทเม้นท์</a>
  					<a href="#" class="list-group-item list-group-item-warning">รีวิวบ้านตากอากาศ</a>   
  					<a href="#" class="list-group-item list-group-item-danger">สไตล์แต่งบ้าน</a>
  					<a href="#" class="list-group-item list-group-item-success">สินค้า ของแต่งบ้าน</a>
  					<a href="#" class="list-group-item list-group-item-info">จัดสวน</a>
  					<a href="#" class="list-group-item list-group-item-warning">DIY IDEA</a>
  					<a href="#" class="list-group-item list-group-item-danger">ECO & Green</a>
  					<a href="#" class="list-group-item list-group-item-success">ไอเดียล้ำ</a>
  					<a href="#" class="list-group-item list-group-item-info">ความรู้เรื่องบ้าน</a>
  					<a href="#" class="list-group-item list-group-item-warning">News & Event</a>   
  					<a href="#" class="list-group-item list-group-item-danger">Travel & Relax</a>
  					<a href="#" class="list-group-item list-group-item-success">ปรับแต่งแปลงโฉม</a>
				</div>
			</div>
	</div>

    <div class="panel panel-info">
  		<div class="panel-heading">Archive</div>
  			<div class="panel-body">
    			<div class="list-group">
  					<a href="#" class="list-group-item list-group-item-warning"><span class="badge">17</span>2015</a>
  					<a href="#" class="list-group-item list-group-item-info"><span class="badge">48</span>2014</a>
				</div>
  			</div>
	</div>
  			
  	<div class="panel panel-info">
  		<div class="panel-heading">Hilight Idea</div>
  			<div class="panel-body">
  			<?php for ($i=1;$i<=5;$i++)
				{ ?>
    			<div class= "col-md-12 ">
  					<div class="col-md-12 text-center">
  						<a href="#" ><img class="img_opacity img-responsive img-thumbnail" src="<?php echo base_url()?>images/img-design/dh<?php echo $i?>.jpg" alt="..."></a>
  					</div>
  					<div class="col-md-12">
  						<h5 class="text-center"><a style="text-decoration:none;font-size:10;" href="#">Middle aligned media</a></h5>
  						<hr>	
  					</div>
  				</div>
  			<?php }?>
  			</div>
	</div>
