<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RoyalTravel | Catagories</title>
<link href="stylecss.css" rel='stylesheet' type='text/css'/>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->
<!--animated-css-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
</head>

<body>
<?php include('function.php'); ?>
<?php include('top.php'); ?>
<!--/sticky-->
<?php include('slider.php'); ?>
<div style="height:50px"></div>
<div style="width:1000px; margin:auto" >

<div class="cat_main_clist">
	<table>
	<tr><td style="font-size:20px; color:#70b8e8"><b>Category</b></td></tr>
	<?php
	$s="select * from category";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;

	while($data=mysqli_fetch_array($result))
	{
		
			echo "<tr><td style=' padding:5px;'><b><a href='subcat.php?catid=$data[0]'>$data[1]</a></b></td></tr>";

	}
	mysqli_close($cn);
	?>

	</table>
</div>

<div class="cat_main_txt">
	<table>
	<tr><td class="headingText">Welcome to RoyalTravel</td></tr>
	<tr>
		<td class="paraText" width="900px">
			<p>Plan and Book Your Perfect Trip.Create your dream holiday.
	what you like. Do what you love.
	What's New Explore new experiences, attractions, food and wine trends.
	What will you find during your visit to My Tour? Awe-inspiring natural beauty and the dramatic
	red rock landscape of the Colorado National Monument. Exhilarating outdoor adventures including
	hiking, camping or skiing on the Grand Mesa. Hundreds of miles of world-class mountain biking trails
	such as the Kokopelli Trail. Incredible whitewater rafting on the Colorado River. Stunning golf courses
	whose green fairways are juxtaposed against the craggy Redland desert. Peaceful places to reflect and
	unwind amidst the natural splendor of Colorado's Western Slope. A charming downtown full of great
	shops, restaurants, art galleries and so much more. This is RoyalTravel, where you can experience
	beautiful places and Travel experience.</p>
	</td>
		<td style="background-image:url(images/13.jpg); background-repeat:round; color:#FFF; font-family:Lucida Sans Unicode, Lucida Grande, sans-serif; font-size:24px; height: 250px; width: 700px;" >
			<div style="background:linear-gradient(#09F,#096,#09F); vertical-align:text-top; padding-left:5%;  width:100%;">HAVE A GOOD TIME &nbsp;&nbsp;&nbsp; without spending a dime</div>
		</td>
	</tr>
	</table>
</div>

</div>

<div style="clear:both"></div>

<?php include('bottom.php'); ?>
</body>
</html>