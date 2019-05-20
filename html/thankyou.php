<?php
require('includes/config.php');
if(isset($_POST['submit'])){
	$message = [];
	$message['email_address'] = $_POST['email_address'];
	$message['first_name'] = $_POST['first_name'];
	$message['last_name'] = $_POST['last_name'];
	$message['telephone_number'] = $_POST['telephone_number'];
	$message['message'] = $_POST['message'];

	$to = $row['email'];
	$subject = "enquiries@3dprinting";
	$body = "<b>Visitor First Name:</b>" .$message['first_name']."<br/>";


	$mail = new Mail();
	$mail->setFrom(SITEEMAIL);
	$mail->addAddress($to);
	$mail->subject($subject);
	$mail->body($body);
	$mail->send();
	header('Location: index.php?action=reset');
	exit;
}
/*$message = [];
$message['email_address'] = $_POST['email_address'];
$message['first_name'] = $_POST['first_name'];
$message['last_name'] = $_POST['last_name'];
$message['telephone_number'] = $_POST['telephone_number'];
$message['message'] = $_POST['message'];
$msg = buildMsg($message);


//var_dump($sent);

function buildMsg($msg)
{
	
	//var_dump($msg);
	$to = $row['email'];
	$subject = "enquiries@3dprinting";
	$body = "<b>Visitor First Name:</b>" .$msg['first_name']."<br/>";
			
	
	$mail = new Mail();
	$mail->setFrom(SITEEMAIL);
	$mail->addAddress($to);
	$mail->subject($subject);
	$mail->body($body);
	$mail->send();
	
		//$actMsg='';
	
	
	/*	$actMsg.='<b>Visitor First Name:</b> '.$msg['first_name']."<br/>";
		$actMsg.='<b>Visitor Last Name:</b> '.$msg['last_name']."<br/>";
		$actMsg.='<b>Telephone:</b> '.$msg['telephone_number']."<br/>";
		$actMsg.="<b>Visitor Email Address:</b> ".$msg['email_address']."<br/>";
		$actMsg.="<b>Message:</b><br/>";
		$actMsg.= str_replace(chr(13),"<br/>",$msg['message']);*/

		/*$actMsg.= str_replace("/r","<br/>",$msg['message']);
		$actMsg.= str_replace("/n","<br/>",$msg['message']);*/
	/*	echo"<br/><br/><br/>";
		echo $actMsg;
		echo "<br/>";*/
		//return $actMsg;
	


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


<div id="main-content">
<br>
<br>
<br>
<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
							
<br>
							
<br>
<div class="msg_text">Thank You.</div>
<div class="msg_text">One of our team will contact you shortly.</div>






<br>
<br>

<br>


<a href="index.php"idth="70" height="45" class="button"title="Go back To Product">Go Back</a>

<br>
<br>
<br>
<br>
<br>
<br>

<br>
<br>
<br>
<a href=" https://www.lsbu.ac.uk/">WWW.LSBU.AC.UK</a>
</a>
<p> If you prefer, you can contact us 
By telephone on +44 (0)00000000000000, 
Or by fax on +44 (0)000000000000. </p>

</div>
</div>


<?php
//include header template
require('layout/footer.php');
?>
