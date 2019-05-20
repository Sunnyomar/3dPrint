
	<?php 
	session_start();
	ob_start();
 	require_once('includes/config.php');

// 	?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="3d pritning calculation by lsbu. London south bank university provides 3d printing cost calculation for student to print 3d object in cheap price. Its easy to get quick price for 3d printing.
										 It follows very easy step to create account and participate on 3d print cost calculation.">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>3D Printing</title>
	
		<link href="css/mainstyle.css" rel="stylesheet" type="text/css" />
<!-- 		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet"> -->
		<script type="text/javascript" src="js/main.js"></script>
		<!-- Added below script plugings just to view STL files -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r68/three.min.js"></script>
		<script src="https://rawgit.com/mrdoob/three.js/master/examples/js/controls/TrackballControls.js"></script>
		<script type="text/javascript" src="js/loader.js"></script>
		<script type="text/javascript" src="js/stl.js"></script>


		
		<link rel="shortcut icon" href="/favicon.ico">
<!--  		<link rel="icon" src="images/3d_logo.png"> -->
		<link rel="icon" href="images/favicon.png" type="image" sizes="16x16">
	
	</head>
	<!-- Start of header -->

	<div id= "userMan">
	<?php if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
		{
	?>
		<a id="welcome">Welcome <?php echo htmlspecialchars($_SESSION['username'], ENT_QUOTES); ?></a>
      	<button id="signupButton"style="width:auto;"><a href="logout.php">Logout</a></button>

	<?php }else{ ?>
		<button id="signupButton"style="width:auto;"><a href="main.php">SignUp</a></button>
		<button id="loginButton" style="width:auto;"><a href="login.php">Login</a></button> 
	<?php } ?>

	

	<!--<button id="signupButton"style="width:auto;"><a href="main.php">SignUp</a></button>
		<button id="loginButton" style="width:auto;"><a href="login.php">Login</a></button> -->
	</div>
	<br>
	<br>
	<div class="header">
		<a href="\">
			<img alt="Company Logo" src="images/logowhite.svg" height="200">
			<span id = "span1">3D.printing</span>
<!-- 			<span id= "span2">.printing</span> -->
		</a>
	</div>

<div class="clear"></div>
<!-- End of header -->
