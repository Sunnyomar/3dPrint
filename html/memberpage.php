<?php require('includes/config.php'); 

//if not logged in redirect to login page
//if(!$user->is_logged_in()){ header('Location: login.php'); exit(); }

//define page title
$title = '3d Print:Members Page';

//include header template

//include header template
require('layout/header.php');
?>
<div class="nav" id="nav1" >  
	<nav>  
		<!--<a href="index.html"><h1>Popping Candy</a></h1> -->
		<ul>
			<li><a href="index.php">Home</a></li>
			<li id= "active"><a href="product.php">Product</a></li>
			<li><a href="product.html">Product</a></li>
			<li><a href="aboutus.html">About Us</a></li>
			<li><a href="contactus.html">Contact Us</a></li>
		</ul>	
	</nav>
</div>	
<body>
<div class="container">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet"> 	
	<div class="row">

	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			
				<h2>Member only page - Welcome <?php echo htmlspecialchars($_SESSION['username'], ENT_QUOTES); ?></h2>
				<p><a id="logout" href='logout.php'>Logout</a></p>
				
				<hr>

		</div>
	</div>


</div>

<?php
//include header template
require('layout/footer.php');
?>
