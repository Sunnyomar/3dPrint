
<?php
//include header template
require('layout/header.php');
?>
<div class="nav" id="nav1" >  
	<nav>  
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="product.php">Product</a></li>
			<li id= "active"><a href="requirement.php">Requirements</a></li>
			<li><a href="stlView.php">3D View</a></li>
			<li><a href="aboutus.html">About Us</a></li>
			<li><a href="contactus.html">Contact Us</a></li>
		</ul>		
	</nav>
</div>	
<body>

<div id="mainbody">

	<br>
	<br>
	<br>
	<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
								
	<br>
	<div class="msg_text">Thank You For Downloading Our Printing Requirements</div>
	
	<script>
	$(function() {
	$('a[data-auto-download]').each(function(){
	var $this = $(this);
	setTimeout(function() {
	window.location = $this.attr('href');
	}, 4000);
	});
	});
	</script>
	
	<body>
	<div class="wrapper">
	<p>The major requirement should download shortly. If it doesn't, click
	<a data-auto-download href="requirements/requirement.pdf"  download="Requirement"><font color="4cb3e0">here</font></a>.</p>
	
	</div>
	<br>
	<br>
	<br>
	<br><br>
	<br>
	<br>
	</form>
	<a href="requirement.php"idth="70" height="45" class="button" title="Go back To Requirement">Go Back</a>
	
	<br>
	<br>
	<br>
	<br>
	
	<br>
	<br>
	<p> Please contact us for more information,
	or make a price request. </p>
	<a href=" https://www.lsbu.ac.uk/"><font color="4cb3e0">London South Bank University</font>
	</A>
	<p> If you prefer, you can contact us 
	By telephone on +44 0000000000000000, 
	Or by fax on +44 0000000000000000. </p>
	
	<br>



</div>
<?php
//include header template
require('layout/footer.php');
?>