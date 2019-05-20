<?php




//header('Location: thankyou.php');
//include header template
require('layout/header.php');
?>

<div class="nav" id="nav1" >  
	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="product.php">Product</a></li>
			<li><a href="requirement.php">Requirements</a></li>
			<li><a href="stlView.php">3D View</a></li>
			<li><a href="printCal.php">Cost Calculation</a></li>	
			<li><a href="aboutUs.php">About Us</a></li>
			<li id= "active" ><a href="contactUs.php">Contact Us</a></li>
		</ul>
	</nav>
</div>	
<div id="mainbody">
	<h1>Contact Us</h1>
	<p>For more information on how it can be incorporated with 3D printing, please complete the following form </p>
	<br />
	<div class = "class="contactForm"">

	<form class='cmxform' id='FormRR' method='post' action='thankyou.php' onsubmit="return validateForm()" >
	
			
			<p>First name:<br />
			
			&nbsp;&nbsp; <input type='text' id='first_name'  class="inputbox required" value ='' name='first_name'  minlength='2' maxlength='75' style='border-style: solid; border-color:black' placeholder= "Enter Your First Name .." size ='35'/ required>
			<p> Last name:<br />
			&nbsp;&nbsp;<input type='text' id='last_name' class="inputbox required" value ='' name='last_name' minlength='2' maxlength='75' style='border-style: solid; border-color:black' placeholder= "Enter Your Last Name .." size ='35'/ required>
			<p>Telephone:<br />
			&nbsp;&nbsp;<input type='text' id='telephone_number' class="inputbox required" value ='' name='telephone_number' maxlength='20'style='border-style: solid; border-color:black' placeholder= "Enter Your Contact Number .." size ='35'/ required>	
			<p>E-mail address:<br /> 
			&nbsp;&nbsp;<input type='text' id='email_address' class="inputbox email required" value ='' name='email_address' minlength='4' maxlength='200'  style='border-style: solid; border-color:black' placeholder= "Enter Your E-mail .." size ='35'/ required>
			
			<p>Message:<br />
			&nbsp;&nbsp;<textarea id='message'  class="inputbox" name='message' class='required' minlength='15' placeholder= " Write Message Here .." STYLE='width:350px; height:150px;'></textarea>
			<div style="display:none;">
			<p>
			Details:<br />
			&nbsp;&nbsp;<textarea id='details'  class="inputbox" name='details' STYLE='width:350px; height:150px;'></textarea>
			</div>
			    <div class="row">
			<input  border=0 src='images/submit1.png' type=image Value=submit  >
			</div>
	</form>
	</div>
	<br />
	<h3>Please call</h3>
	<p>
		Our Technical team
	</p>
	<p>
		+44 (0)0000000 or by fax on +44 (0)0000000000.
	</p>
	<p>
		E-mail:-
	</p>
	<a href="mailto:omarsunny72@gmail.com?Subject=3DprintingCalculation%20again" target="_top">
		Technical support
	</a>
	<p>
		Module informations is now available at
	</p>
	<a href=" https://www.lsbu.ac.uk/">WWW.LSBU.AC.UK</a>
	<br />
	<br />
	<div id="googleMap">
		<!-- Google Map -->
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.8303533208136!2d-0.10452138423035623!3d51.49798057963361!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604a03afbd695%3A0xffaf0ef7e5c357e4!2sLondon+South+Bank+University!5e0!3m2!1sen!2suk!4v1552017278386" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
</div>
<!-- End of ContactUs -->
<?php
//include header template
require('layout/footer.php');
?>