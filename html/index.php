<?php
//include header template
require('layout/header.php');
?>
<div class="nav" id="nav1" >  
	<nav>  
		<ul>
			<li id= "active"><a href="index.php">Home</a></li>
			<li><a href="product.php">Product</a></li>
			<li><a href="requirement.php">Requirements</a></li>
			<li><a href="stlView.php">3D View</a></li>
			<li><a href="printCal.php">Cost Calculation</a></li>	
			<li><a href="aboutUs.php">About Us</a></li>
			<li><a href="contactUs.php">Contact Us</a></li>
		</ul>		
	</nav>
</div>	
<body>

<div id="mainbody">
	<h1 class="noShow">Home</h1>

	<div class="slideshow-container">
	
	<!-- put something here if no javascript enabled? -->
	<div class="mySlides fade">
		<img src="images/01.jpg" alt="Mountain View" width="100%" height="600">
		<div class="text">We can Help you to reduce cost</div>
		<div class="numbertext">1 / 6</div>
	</div>
	
	<div class="mySlides fade">
		<img src="images/02.jpg"alt="Mountain View" width="100%" height="600">
		<div class="text">Excelent printing quality</div>
		<div class="numbertext">2 / 6</div>
	</div>
	<div class="mySlides fade">
		<img src="images/03.jpg"alt="Mountain View" width="100%" height="600">
		<div class="text">Its so easy to use</div>
		<div class="numbertext">3 / 6</div>
	</div>
	
	<div class="mySlides fade">
		<img src="images/04.jpg"alt="Mountain View"width="100%" height="600">
		<div class="text">Its free to get price</div>
		<div class="numbertext">4 / 6</div>
	</div>
	<div class="mySlides fade">
		<img src="images/05.jpg"alt="Mountain View" width="100%" height="600">
		<div class="text">We Can print any complex design</div>
		<div class="numbertext">5 / 6</div>
	</div>
	
	<div class="mySlides fade">
		<img src="images/06.jpg"  alt="Mountain View"width="100%" height="600">
		<div class="text">Invent your own tool</div>
		<div class="numbertext">6 / 6</div>
	</div>
	<br>
	
	</div>
	
	
	<div style="text-align:center">
	<span class="dot" onclick="currentSlide(1)"></span>
	<span class="dot" onclick="currentSlide(2)"></span>
	<span class="dot" onclick="currentSlide(3)"></span>
	</div>
	<br>
	<br>
	<div id="applications">
	<h3><a href="requirement.php" class=" "><font color="white">Check Requirments</font></a></h3>
	</div>
	<p> 3D printing is about making three dimensional solid object from a digital file following a process. </p>
	<p>This web application will help you to achieve using additive processses. 3D pritning enables you to produce complex shapes but using less matirial comapre with traditional methods.</p>
	<p> Create an account now to calculate your cost and invent your own tool.</p>
	<br>
	<br>
	<p> Please</p>
	<a href="contactUs.php"><font color="#d00004"> Contact Us</font></a> <p> For More Information</p>
	<br>
	
	<p>  For Other Details Please Visit</p>
	<a  href=" https://vle.lsbu.ac.uk/login/index.php"><font color="#d00004">Login To VLE</font></a>
</div>
<?php
//include header template
require('layout/footer.php');
?>