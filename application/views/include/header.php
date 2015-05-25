<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="stats-in-th" content="6cee" />
    <link rel="icon" href="<?php echo base_url()?>images/icon/home.ico">
	<title>Design2House.com | แบบบ้าน แต่งบ้าน เฟอร์นิเจอร์ ตกแต่งบ้าน คอนโดมิเนียมแบบบ้านชั้นเดียว บ้านสวย บ้านไม้ ห้องนอน ห้องนั่งเล่น ห้องครัว ห้องน้ำ บ้านและสวน ตกแต่งภายใน บ้านสองชั้น แบบบ้านฟรี</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()?>assets/css/navbar-fixed-top.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-awesome.min.css" type="text/css" media="screen">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css" type="text/css" media="screen">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    
    
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.appear.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/count-to.js"></script>	
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.nicescroll.min.js"></script>	 
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/script.js"></script>
	
	

<script type="text/javascript">

/******************************************
* DHTML Ad Box (By Matt Gabbert at http://www.nolag.com)
* Visit http://www.dynamicdrive.com/ for full script
* This notice must stay intact for use
******************************************/

adTime=10; // seconds ad reminder is shown
chanceAd=1; // ad will be shown 1 in X times (put 1 for everytime)

var ns=(document.layers);
var ie=(document.all);
var w3=(document.getElementById && !ie);
var calunit=ns? "" : "px"
	adCount=0;
		function initAd()
		{
			if(!ns && !ie && !w3) 
				return;
			if(ie) adDiv=eval('document.all.sponsorAdDiv.style');
				else if(ns) adDiv=eval('document.layers["sponsorAdDiv"]');
					else if(w3) adDiv=eval('document.getElementById("sponsorAdDiv").style');
						randAd=Math.ceil(Math.random()*chanceAd);
			if (ie||w3)
				adDiv.visibility="visible";
			else
				adDiv.visibility ="show";
			if(randAd==1) showAd();
		}
		function showAd()
		{
			if(adCount<adTime*10)
			{
				adCount+=1;
			if (ie)
			{
				documentWidth =truebody().offsetWidth/2+truebody().scrollLeft-20;
				documentHeight =truebody().offsetHeight/2+truebody().scrollTop-20;}
			else if (ns)
			{
				documentWidth=window.innerWidth/2+window.pageXOffset-20;
				documentHeight=window.innerHeight/2+window.pageYOffset-20;} 
			else if (w3)
			{	
				documentWidth=self.innerWidth/2+window.pageXOffset-20;
				documentHeight=self.innerHeight/2+window.pageYOffset-20;} 
				adDiv.left=documentWidth-200+calunit;adDiv.top =documentHeight-200+calunit;
				setTimeout("showAd()",100);
			}
			else closeAd();
		}
		function closeAd()
		{
			if (ie||w3)
				adDiv.display="none";
			else
				adDiv.visibility ="hide";
		}

		function truebody()
		{
			return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
		}

		onload=initAd;
//End-->
</script>
</head>
<body>

<!-- <div id="sponsorAdDiv" style="visibility:hidden">
	<table width="1000px" height="800px" bgcolor="#000"> -->
<!-- 		<tr> -->
<!-- 			<td> -->
<!-- 				<table width="50%" height="50%" bgcolor="#F0FFF0"> -->
<!-- 					<tr> -->
<!-- 						<td align="center" valign="middle"> 
								<img class=" img-responsive img-thumbnail" src="<?php //echo base_url()?>images/img-design/dh1.jpg" alt="...">-->
<!-- 						</td> -->
<!-- 					</tr> -->
<!-- 				</table> -->
<!-- 			</td> -->
<!-- 		</tr> -->
<!-- 	</table> -->
<!-- </div> -->
