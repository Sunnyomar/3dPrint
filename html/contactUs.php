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
			<li><a href="aboutUs.php">About Us</a></li>
			<li id= "active"><a href="contactUs.php">Contact Us</a></li>
		</ul>		
	</nav>
</div>	
<body>
<h1>Contact Us</h1>
<p>For more information on how it can be incorporated with 3D printing, please complete the following form </p>
<br />
<form class="cmxForm" name="contactForm" method="post">
	<label>
		First name:<br /><span id="firstNameError" class="{[firstNameClassError]}">{[firstNameError]}</span>
		<input type="text" name="firstName" placeholder="Your First Name..." size ="35" value="{[firstName]}" />
	</label>
	<label>
		Last name:<br /><span id="lastNameError" class="{[lastNameClassError]}">{[lastNameError]}</span>
		<input type="text" name="lastName" placeholder="Your Last Name..." value="{[lastName]}" />
	</label>
	<label>
		Telephone:<br /><span id="phoneError" class="{[phoneClassError]}">{[phoneError]}</span>
		<input type="text" name="phone" placeholder="Your Contact Number..." value="{[phone]}" />
	</label>
	<label>
		E-mail address:<br /><span id="emailError" class="{[emailClassError]}">{[emailError]}</span>
		<input type="text" name="email" placeholder= "Your E-mail..." value="{[email]}" />
	</label>
	<label>
		Message:<br /><span id="messageError" class="{[messageClassError]}" >{[messageError]}</span>
		<textarea id="message" name="message" placeholder="Write Message Here...">{[message]}</textarea>
	</label>
	<div id="hp">
		<input type="text" name="postcode" value="{[postcode]}" />
	</div>
	All fields are mandatory.<br />
	<input type="image" name="submit" id="submit" src="images/submit1.png" alt="Submit" />
</form>
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
<!-- End of ContactUs -->
<?php
//include header template
require('layout/footer.php');
?>