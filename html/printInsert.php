<?php
include ('layout/header.php');

if(isset($_POST['submit'])){
	
	//$memberID = $_POST['username'];
	ini_set('display_errors', 1);
	$message = [];
	
/*	$message['supMatR'] = $_POST['supMatR'];
	$message['time'] = $_POST['time'];
	$message['numProcess'] = $_POST['numProcess'];
	$message['modelMatR'] = $_POST['modelMatR'];
	$message['listValue'] = $_POST['listValue'];
	$message['modelMat'] = $_POST['modelMat'];
	$message['supMat'] = $_POST['supMat'];
	$message['totalNVat'] = $_POST['totalNVat'];*/
	
//	$message['totalCostA'] = $_POST['totalCostA'];
	/*	
	$supMatR = $message['supMatR'];
	$time = $message['time'];
	$numProcess = $message['numProcess'];
	$modelMatR = $message['modelMatR'];
	$listValue = $message['listValue'];
	$modelMat = $message['modelMat'];
	$supMat = $message['supMat'];
	$totalNVat = $message['totalNVat'];*/
	
//	$totalCostA = $message['totalCostA'];
//	$username = $_SESSION['username'];
		
	$stmt = $db->prepare ('INSERT INTO printCal (memberID, supMatR, time, numProcess, modelMatR, listValue, modelMat, supMat, totalNVat, totalCostA) VALUES (:memberID, :supMatR, :time, :numProcess, :modelMatR, :listValue, :modelMat, :supMat, :totalNVat, :totalCostA)');
	$stmt->execute(array(
		/*	':memberID' => '32',
			':supMatR' => $supMatR,
			':time' => $time,
			':numProcess' => $numProcess,
			':modelMatR' => $modelMatR,
			':listValue' => $listValue,
			':modelMat' => $modelMat,
			':supMat' => $supMat,
			':totalNVat' => $totalNVat,
			':totalCostA' => $totalCostA*/
			
			':memberID' => '32',
			':supMatR' => '5',
			':time' => '1:10',
			':numProcess' => '5',
			':modelMatR' => '5',
			':listValue' => '5',
			':modelMat' => '5',
			':supMat' => '5',
			':totalNVat' => '5',
			':totalCostA' => '55' 
// 			':memberID' => $memberID,
// 			':supMatR' => $supMatR,
// 			':time' => $time,
// 			':numProcess' => $numProcess,
// 			':modelMatR' => $modelMatR,
// 			':listValue' => $listValue,
// 			':modelMat' => $modelMat,
// 			':supMat' => $supMat,
// 			':totalNVat' => $totalNVat,
// 			':totalCostA' => $totalCostA
			//':active' => $activasion,
	));
	header('Location: index.php?action=joined');
	
}


// if(!isset($error)){
	
// 	try {
		
// 		$stmt = $db->prepare ('INSERT INTO printCal (memberID, supMatR, time, numProcess, modelMatR, listValue, modelMat, supMat, totalNVat, totalCostA) VALUES (:memberID, :supMatR, :time, :numProcess, :modelMatR, :listValue, :modelMat, :supMat, :totalNVat, :totalCostA)');
// 		$stmt->execute(array(
// 				':memberID' => $memberID, 
// 				':supMatR' => $supMatR, 
// 				':time' => $time, 
// 				':numProcess' => $numProcess, 
// 				':modelMatR' => $modelMatR, 
// 				':listValue' => $listValue, 
// 				':modelMat' => $modelMat, 
// 				':supMat' => $supMat, 
// 				':totalNVat' => $totalNVat, 
// 				':totalCostA' => $totalCostA
// 				//':active' => $activasion,
// 		));
	
	
	
// 	}catch(PDOException $e) {
// 		    $error[] = $e->getMessage();
// 		}
	
	
// }

// $query = 'INSERT INTO printCal (memberID, supMatR, time, numProcess, modelMatR, listValue, modelMat, supMat, totalNVat, totalCostA) VALUES (31, 1, 1, 2, 3, 3, 3, 3, 3, 3)';
// mysql_query($query);

?>

<div class="nav" id="nav1" >  
	<nav>  
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="product.php">Product</a></li>
			<li><a href="requirement.php">Requirements</a></li>
			<li><a href="stlView.php">3D View</a></li>
			<li  id= "active" ><a href="printCal.php">Cost Calculation</a></li>	
			<li><a href="aboutUs.php">About Us</a></li>
			<li><a href="contactUs.php">Contact Us</a></li>
		</ul>	
	</nav>
</div>	
<body>
<div id="mainbody">
	<table id= "table1" align="center">
		<tr>
		
		    	<th><font color="black">Matirals</font> </th>
		    	<th><font color="black">Price</font> </th>
		</tr>

	 	 <tr>
	
			<td><font color="black">Model Matirial Cost:</font>
			<td>5
		</tr>
		<tr>
			<td><font color="black">Support Matirial Cost:</font>
			<td>5
		</tr>
		<tr>
			<td><font color="black">Total Price:</font>
			<td>5
		</tr>
		<tr>
			<td><font color="black">Approve status:</font>
			<td>No
		</tr>
	
	</table>




</div>
<?php 
include ('layout/footer.php');

?>