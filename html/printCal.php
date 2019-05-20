<?php
//include header template
require('layout/header.php');

if(!isset($_SESSION['username'])){
	header("Location:login.php");
	
}


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
<body >

<div id="mainbody">
<form method="post" role="form" action="printInsert.php" autocomplete="off">
	<h2>  Prototype Pre-Production Information*</h2>
	  Model Material Req:
	  &nbsp;&nbsp;
	  <span>
	  	<input  id = "modelMatR" title="Please input Model material" onkeyup="channgeModelMatR(this);" type="number" name="modelMatR"/>
	  </span>
	  <br>
	  Support Material Req:
	  <span>
	  	<input id = "supMatR" onkeyup = "changesupMatR(this);" type="number" name="supMatR"/>
	  </span>
	  <br>
	  Estimated Build time:
	
	  <span>
	   <input type="time"id = "estTimeH" min="0:01" max="18:00" onkeyup = "callEstTimeH(this)"type="number" name="estTimeH" placeholder= ""/>
	  </span>
	  <br>
	  Hours:Min
	  <br>
	  Number of Process:
	  &nbsp;
	  <span>
	  	<input id = "numProcess" value="1" onkeyup = "calNumProcess(this);" type="number" name="numProcess"/>
	  </span>
	  <br><br>
	  <h2>Material Costs</h2>
	
	  Model Material:
	    <select class="select-style" id = "listValue" onchange = "selectChanged(this.value)">
		  <option value="0.16">FullCure 835, VeroWhitePlus</option>
		  <option value="0.15">FullCure 840, VeroBlue</option>
		  <option value="0.16">FullCure 850, VeroGray</option>
		  <option value="0.16">RGD875, Vero Black Plus</option>
		  <option value="0.25">FullCure 810, VeroClear </option>
		  <option value="0.15">RGD720 Model Resin</option>
		  <option value="0.22">FullCure 430 DurusWhite</option>
		  <option value="0.21">Endur RGD450</option>
		  <option value="0.25">FullCure 930 TangoPlus</option>
		  <option value="0.25">FullCure 980 TangoBlackPlus*</option>
		  <option value="0.22">FullCure 950 TangoGray</option>
		  <option value="0.22">FullCure 970 TangoBlack</option>
		  <option value="0.27">FullCure RGD535</option>
		  <option value="0.25">FullCure RGD515 </option>
		  <option value="0.27">FullCure RGD531</option>
		  <option value="0.27">RGD525 High Temp</option>
		  <option value="0.26">Objet MED610</option>		  		  
	  </select>
	  <span>
	  	£<input id = "modelMat"  type="number" name="modelMat" />
	  </span>
	   <br>
	  Support Material:
	   &nbsp;
	    &nbsp;
	     &nbsp;
	      &nbsp;
	       &nbsp;
	        &nbsp;
	         &nbsp;
	          &nbsp;
	           &nbsp;
	            &nbsp;
	             &nbsp;
	              &nbsp;
	               &nbsp;
	                &nbsp;
	                 &nbsp;
	                  &nbsp;
	                   &nbsp;
	  <span>
	  	£<input id = "supMat" onkeyup = "supMat(this);" type="number" name="supMat"/>
	  </span>
	  <br>
	  Total Without Vat:
	  	&nbsp;
	    &nbsp;
	     &nbsp;
	      &nbsp;
	       &nbsp;
	        &nbsp;
	         &nbsp;
	          &nbsp;
	           &nbsp;
	            &nbsp;
	             &nbsp;
	              &nbsp;
	               &nbsp;
	                &nbsp;
	                 &nbsp;
	                  &nbsp;
	                   &nbsp;
	  <span>
	  	£<input id = "totalNVat"  type="number" name="totalNVat"/>
	  </span>
	  <br>
	  <span>
	  Vat: 
	  	&nbsp;
	    &nbsp;
	     &nbsp;
	      &nbsp;
	       &nbsp;
	        &nbsp;
	         &nbsp;
	          &nbsp;
	           &nbsp;
	            &nbsp;
	             &nbsp;
	              &nbsp;
	               &nbsp;
	                &nbsp;
	                 &nbsp;
	                  &nbsp;
	                   &nbsp;
	                   	&nbsp;
	                     &nbsp;
	                      &nbsp;
	                      &nbsp;
		                   	&nbsp;
		                     &nbsp;
		                      &nbsp;
		                      &nbsp;
			                   	&nbsp;
			                     &nbsp;
			                      &nbsp;
	  	£<input id = "vat" placeholder="20%" type="number" name="vat"/>
	  </span>
	  <br>
	  Total:
	  	&nbsp;
	    &nbsp;
	     &nbsp;
	      &nbsp;
	       &nbsp;
	        &nbsp;
	         &nbsp;
	          &nbsp;
	           &nbsp;
	            &nbsp;
	             &nbsp;
	              &nbsp;
	               &nbsp;
	                &nbsp;
	                 &nbsp;
	                  &nbsp;
	                   &nbsp;
	                   	&nbsp;
	                     &nbsp;
	                      &nbsp;
	                      &nbsp;
		                   	&nbsp;
		                     &nbsp;
		                      &nbsp;
		                      &nbsp;
			                   	&nbsp;
			                     &nbsp;
			                    
	  <span>
	  £<input id = "totalCostA"   type="number" name="totalCostA"/>
	  <br><br>
	  </span>
	   
	  <br>
	  <div style="position: relative;left: 375px;">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		  <button class="btn btn-success" type ="button" onclick = "totalCostG();" > Calculate </button>
		  <button class="btn btn-danger" id = "lastButton" type ="button" onclick = "resetAmount();" > Clear </button>
	  </div>
	  <div>
	    <button type="submit" name="submit"value="submit" title="Apply for approval" class="btn btn-info">Apply</button>
	   </div>
	</form> 
<br>
<br>
</div>

<?php
//include header template
require('layout/footer.php');
?>
<script>
//////// I have created few function only for debugging my codes.
document.getElementById("modelMatR").focus();
document.getElementById("vat").disabled = true;
function callModelMatR(el)
{
//alert("you are inside fucntion");
console.log("modelMatR value is:"+el.value);
var modelMatR = el.value
//alert (firstValue);

}
function callSupMatR(el) 
{
var supMatR = el.value
console.log("supMatR value is:"+el.value);

}
function callEstTimeH(el) 
{
var estTimeH = el.value
console.log("estTimeH value is:"+ el.value +"H");
} 
function callEstTimeM(el) 
{
var estTimeM = el.value
console.log("estTimeM value is:"+ el.value +"M");
} 
function calNumProcess(el) 
{
var numProcess = el.value
console.log("numProcessvalue is:"+ el.value );
} 


function selectChanged(newvalue) {
  //alert("you chose: " + newvalue);
  channgeModelMatR();
  changesupMatR();
  totalCostG ();
}
//////////// Debugging ends here//////
function channgeModelMatR()
{
	document.getElementById("modelMat").disabled = false;

	var modelMatRVal = Number(document.getElementById("modelMatR").value);

	var listValue = Number(document.getElementById('listValue').value);


	var finalModelV= Number (listValue * modelMatRVal);
	document.getElementById("modelMat").value =finalModelV.toFixed(2); 
	document.getElementById("modelMat").disabled = true;


}
///////supportmatirial value
function changesupMatR(){
	document.getElementById("supMat").disabled = false;
	var supMatRVal = Number(document.getElementById("supMatR").value);
	var supMatPrice = Number(0.10); 
	var finalsupMatRVal= supMatRVal * supMatPrice;
	document.getElementById("supMat").value =finalsupMatRVal.toFixed(2); 
	document.getElementById("supMat").disabled = true;

}
function totalCostG ()
{
	var modelMatRVal = Number(document.getElementById("modelMat").value);
	var supMatRVal = Number(document.getElementById("supMat").value);
	var vatVal = '20';
	var numProcessVal = Number(document.getElementById("numProcess").value);
	var withoutVat = (modelMatRVal+supMatRVal)*numProcessVal // Total price *percentage / 100 will give the percentagevalue
	document.getElementById("totalNVat").value=withoutVat.toFixed(2);
	document.getElementById("totalNVat").disabled = true;
	var withVat = (withoutVat*vatVal)/100;
	var totalCost = withoutVat+withVat;				//Total price + percentageVale will add how much percentage you want to add
	document.getElementById("totalCostA").value =totalCost.toFixed(2); 
	document.getElementById("totalCostA").disabled = true;
}
function resetAmount() 
{
	document.getElementById("modelMat").value = "";
	document.getElementById("modelMat").disabled = false;
	document.getElementById("supMat").value = "";
	document.getElementById("supMat").disabled = false;
	document.getElementById("totalNVat").value = "";
	document.getElementById("totalNVat").disabled = false;
	document.getElementById("totalCostA").value = "";
	document.getElementById("totalCostA").disabled = false;

}


</script>
