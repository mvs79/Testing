<?php

/*
 * Created on 11.02.2017
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
include "verbindungdb.php";
if(isset ($_POST['txtval'])) {
	$regionId = $_POST['txtval'];
//	$regionId = 1;
//echo "<h1>" . $surname . "<h1>";
	//$surname = "Schwemmer";
	//var_dump($surname);
	$sql = "Select TerritoryDescription From territories Where RegionID = '$regionId'";
	foreach (verbindungdb($sql) as $value) {
		echo '<option>' . $value['TerritoryDescription'] . '</option>';
	}
	
	// echo $surname;
}
?>
