<?php
//include header template
require('layout/header.php');
?>
<div class="nav" id="nav1" >  
	<nav>  
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="product.php">Product</a></li>
			<li><a href="requirement.php">Requirements</a></li>
			<li id= "active"><a href="stlView.php">3D View</a></li>
			<li><a href="aboutus.html">About Us</a></li>
			<li><a href="contactus.html">Contact Us</a></li>
		</ul>	
	</nav>
</div>	
<body>

<div id="stlBody">
	<br>
	<h1> View your STL file </h1>
	<br>
	<a>Uploaded file wont be saved</a>
	<br>
	<a>Maximum file input is 40MB</a>
	<br>
	<a>File may crash because of poor design</a>
	<br>
	<a>Scroll wont work within the 3D viewer as scrolling migrated into camera control</a>
	<br>
	<br>
	<div style="text-color:red;">
	
	Select <font color="red">STL</font> file: <input type="file" id="file" class="fa fa-cloud-upload" /> or drop stl file
	</div>
	<br>
	<br>
	<div id="view" ></div>
</div>
<div id="thirdBody">
	<br>
	<br>
	<br>
	<p> Please contact us for more information,
	or make a price request. </p>
	<a href=" https://www.lsbu.ac.uk/"><font color="#3596b5">London South Bank University</font>
	</a>
	<p> If you prefer, you can contact us 
	By telephone on +44 0000000000000000, 
	Or by fax on +44 0000000000000000.</p>
	<br>
	<a  href="contactUs.php"><font color="#3596b5">Contact Us</font></a>
	<p> For More Information</p>
	<br>
		
	<p>  For Other Details Please Visit</p>
	<a  href=" https://vle.lsbu.ac.uk/login/index.php"><font color="#3596b5">Login To VLE</font></a>
</div>
<?php
//include header template
require('layout/footer.php');
?>