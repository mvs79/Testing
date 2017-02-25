<?php
include "verbindungdb.php";
if(isset ($_POST['region']) && isset($_POST['lastname'])) {
	$regionId = $_POST['region'];
	$lastname = $_POST['lastname'];
//	$regionId = 2;
//	$lastname = "Veenhuis";
	trim($lastname);
//echo "<h1>" . $surname . "<h1>";
  
	//$surname = "Schwemmer";
	//var_dump($surname);
	$sql = "Select * From employees Where Region = '$regionId' And LastName = '$lastname'";
	foreach (verbindungdb($sql) as $value) {
		echo $value['LastName'];
//		echo $value['Region'];
//		echo $lastname;
//		echo $regionId;
	}
//	 $jon = json_encode($value);
	// echo $surname;
}
?>
