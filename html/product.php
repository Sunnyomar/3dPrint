<?php
//include header template
require('layout/header.php');
?>
<div class="nav" id="nav1" >  
	<nav>  
		<ul>
			<li><a href="index.php">Home</a></li>
			<li id= "active" ><a href="product.php">Product</a></li>
			<li><a href="requirement.php">Requirements</a></li>
			<li><a href="stlView.php">3D View</a></li>
			<li><a href="aboutus.html">About Us</a></li>
			<li><a href="contactus.html">Contact Us</a></li>
		</ul>		
	</nav>
</div>	
<body>
<div id="mainbody">
	<p><font size="50" color="#6d7f89"><b>Our Products</b></font></p>
	
	<br>
	
	<p> PLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unkno.</p>
	<p>PLorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
	<p>PLorem Ipsum is simply dummy text of the printing and typesetting industry.PLorem Ipsum is simply dummy text of the printing and typesetting industry..</p>
	<br>
	<br>
	<br>
	
	<div>
	  <input type="checkbox" class="read-more-state" id="post-2"><img src="images/prod1.jpeg" alt="Mountain View" width="600" height="377">
	
	  <ul class="read-more-wrap">
	    <li>Product 1</li>
	 
	    <li class="read-more-target">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
	     and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>
	    
	  </ul>
	  
	  <label for="post-2" class="read-more-trigger"></label>
	</div>
	<br>
	<br>
	<br>
	<div>
	  <input type="checkbox" class="read-more-state" id="post-3"><img src="images/prod2.jpeg" alt="Mountain View" width="600" height="377">
	
	  <ul class="read-more-wrap">
	    <li>Product 2</li>
	   
	    <li class="read-more-target">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
	     and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>
	    
	  </ul>
	  
	  <label for="post-3" class="read-more-trigger"></label>
	</div>
	<br>
	
	<br>
	<div>
	  <input type="checkbox" class="read-more-state" id="post-4"><img src="images/prod3.jpeg" alt="Mountain View" width="600" height="377">
	
	  <ul class="read-more-wrap">
	    <li>Product 3</li>
	   
	    <li class="read-more-target">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
	     and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>
	    
	  </ul>
	  
	  <label for="post-4" class="read-more-trigger"></label>
	</div>
	<br>
	<br>
	<br>
	<br>
	<p> For Further Information</p>
	<a  href=" https://vle.lsbu.ac.uk/login/index.php"><font color="#d00004">Login To VLE</font></a>
</div>
<?php
//include header template
require('layout/footer.php');
?>