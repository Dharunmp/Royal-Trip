<!DOCTYPE html>
<html>
<head>
<title>Royal Travel</title>
<link href="css/owl.carousel.css" rel='stylesheet' type='text/css'/>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--js--> 
<script src="js/jquery.min.js"></script>
<!--/js-->
<!--animated-css-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!--/animated-css-->
</head>
<body>
<!--header-->
<!--sticky-->
<?php include('function.php'); ?>
<?php include('top.php'); ?>
<!--/sticky-->
<?php include('slider.php'); ?>
<!--About-->
     <div class="about section" id="section-2">
	  <div class="about-head text-center">
	  <h3>About Us</h3>
	  <span></span><img src="images/about-img.png" alt=""><span></span>
	  </div>
	   <div class="container">		  
		 <div class="col-md-4 about-grids">
			 <h4><span class="icon1"></span>Our Vision</h4>
			 <p>Travelling which is ethical, fair and a positive experience for both travellers and the people and places they visit</p>
		 </div>
		 <div class="col-md-4 about-grids grid2">
			 <h4><span class="icon2"></span>Our Mission</h4>
			 <p>To ensure travelling and trips always benefits local people by challenging bad practice and promoting better travelling experience</p>
		 </div>
		 <div class="col-md-4 about-grids">
			 <h4><span class="icon3"></span>Safety Information</h4>
			 <p>Vacation is a time to relax in safe surroundings.For emergency aid of any kind, call 911 from any phone... in your hotel, dial 9-911.</p>
             <div align="right"><a href="aboutus.php"><input type="button" class="rd_btn" value="Read More" name="sbmt" /></a></div> 
		 </div>
	 </div>
</div>
<!--/About-->
<!--top-tours-->	
<div  class="section" id="section-3">
<div id="portfolio" class="portfolio">
   <div class="top-tours-head text-center">
		  <h3>Gallery</h3>
		  <span></span><img src="images/star.png" alt=""><span style="margin-left: 1em;"></span>
		 
		  </div>
	      <ul id="filters" class="clearfix wow bounceIn" data-wow-delay="0.4s">
			<li><span class="filter active" data-filter="app card icon logo fun">All</span></li>
			<li><span class="filter" data-filter="app">Domestic Travel</span></li>
			<li><span class="filter" data-filter="card">Foreign Travel</span></li>
			<li><span class="filter" data-filter="icon">Short Date Trip</span></li>
			<li><span class="filter" data-filter="fun">Long Date Trip</span></li>
	        </ul>
	     <div id="portfoliolist">
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t1.jpg" class="img-responsive" alt=""/></a>
							</div>
					</div>				
					<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t2.jpg" class="img-responsive" alt=""/></a>
                             </div>
					</div>		
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t3.jpg" class="img-responsive" alt=""/></a>
							
					</div>
					</div>				
					<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t4.jpg" class="img-responsive" alt=""/></a>
							 
						</div>
					</div>	
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t5.jpg" class="img-responsive" alt=""/></a>
							 
						</div>
					</div>			
					<div class="portfolio fun mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t6.jpg" class="img-responsive" alt=""/></a>
							
						</div>
			      </div>
				  <div class="portfolio fun mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
							<img src="images/t7.jpg" class="img-responsive" alt=""/></a>
							
						</div>
			      </div>
				  <div class="portfolio icon mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t8.jpg" class="img-responsive" alt=""/></a>
							 
					   </div>
			      </div>
		   <div class="clearfix"></div>	
	  </div>
</div>
</div>  
<!-- Script for gallery Here-->
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
<script type="text/javascript">
	$(function () {
		var filterList = {
		init: function () {
// MixItUp plugin
// http://mixitup.io
				$('#portfoliolist').mixitup({
					targetSelector: '.portfolio',
					filterSelector: '.filter',
					effects: ['fade'],
					easing: 'snap',
				// call the hover effect
				onMixEnd: filterList.hoverEffect()
	});				
},
		hoverEffect: function () {
// Simple parallax effect
		$('#portfoliolist .portfolio').hover(
			function () {
			$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
			$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
			},
					function () {
						$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
						$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
			}		
		);				
	}
};
// Run the show!
		filterList.init();
	});	
</script>
<!--Gallery Script Ends-->	 
<!--/top-tours-->


<div class="tour-guides section" id="section-4" >
	  <div class="tour-guides-head text-center">
		  <h3>Advertisements</h3>
		  <span></span><img src="images/guide.png" alt=""><span style="margin-left: 1em;"></span><br/><br/>
		  <div class="container">
				<p>Royal Travel guides are expensive, so first decide what you want to do, whether it's a general travel of a city, a day of hiking, or visiting remote villages in a third-world country. Have a ball-park time allotment in mind, whether it's a half-day, a full-day, or a multi-day experience. Once you have chosen a guide, you'll probably refine your ideas based upon the guide's knowledge.</p>
		  </div>
	  </div>
	  <div class="container">
		<!-- requried-jsfiles-for owl -->
				<link href="css/owl.carousel.css" rel="stylesheet">
							    <script src="js/owl.carousel.js"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items : 1,
							        lazyLoad : true,
							        autoPlay : true,
							        navigation : false,
							        navigationText :  false,
							        pagination : true,
							      });
							    });
							    </script>
			<!-- //requried-jsfiles-for owl -->
		 <div id="owl-demo" class="owl-carousel">
         
         
         
         <?php
$s="select * from advertisement";
$result=mysqli_query($cn,$s);

$n=0;
while($data=mysqli_fetch_array($result))
{
	if($n%4==0)
	{
	?>
         
			  <div class="item text-center guide-sliders">
<?php }?>


	<div class="col-md-3 image-grid">
					 <img src="Admin/addverimages/<?php echo $data[3]; ?>" width="300px" height="150px" >
					
					 <p><a href="#"><?php echo $data[2]; ?></a></p>
				 </div>
				<?php if($n%4==3)
				{?>
            </div>
   
            <?php
				}
			$n=$n+1;
}
?>
            		  </div>
		</div>
</div>
	


<div id="section-5" class="contact section">
	  <div class="contact-head text-center">
		  <h3>Contact Us</h3>
		  <span></span><img src="images/mail.png" alt=""><span></span><br/><br/>
          <h4 style="color:#000">Plan Your Trip
Our travel experts can help you book now!</h4>

		  <div class="contact-grids">
			  <div class="container">
				  <div class="col-md-4 address">
						<h4 style="color:#70B8E8">RoyalTravel</h4>
						<p style="color:#000">NEED HELP BOOKING PACKAGE<br/>
                        For fantastic suggestions you may also call our travel expert</p>
						<h5 style="color:#000"><span class="img1"></span>+91-8010889622</h5>
						<h5 style="color:#000"><span class="img2"></span><a href="#">info[at]tourismRoyal23@gmail.com&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></h5>
						<h5 style="color:#000"><span class="img3"></span>No-403, Muniyandi complex, near Konar kadai, North veli st., Madurai-625001.</h5>
                        <br/>
                       <img src="images/contac.jpg" />
                      </div>
				  <div class="col-md-8 contact">
                  
                  	<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="insert into contactus(Name,Phno,Email,Message) values('" . $_POST["t1"] ."','" . $_POST["t2"] ."','" . $_POST["t3"] ."','" . $_POST["t4"] ."')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('We'll get back to you soon, Thanks for visiting.);</script>";
}
?>
					  <form method="post">
                      <table border="0" width="700px" height="500px">
                      <tr><td align="left"> <input type="text" class="text" placeholder="Name"  name="t1" required pattern="[a-zA-z1 _]{1,50}" title="Please Enter Only Characters and numbers between 1 to 50 for Name"></td></tr>
                      <tr><td align="left"><input type="text" class="text" placeholder="Contact no" name="t2" required pattern="[0-9]{10,12}" title="Please Enter Only  numbers between 10 to 12 for Contact no"></td></tr>
					 <tr><td align="left"> <input type="text" class="text" placeholder="Email" name="t3" required></td></tr>
					 <tr><td><textarea placeholder="Write your concern/enquiry" required/ ></textarea></td></tr>
					  <tr><td><input type="submit" value="Send message" name="sbmt"></td></tr></table>
					  <div class="clearfix"></div>
					   </form>
				   </div>
				  <div class="clearfix"></div>
			  </div>
		  </div>
		  <div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.103690969248!2d78.11857332637334!3d9.92532183747968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b00c582b1189633%3A0xdc955b7264f63933!2sMadurai%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1674390161009!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		    <span></span>
			</div>
<?php include('bottom.php'); ?>
</body>
</html>

