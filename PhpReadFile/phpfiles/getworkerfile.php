<?php
include "ChromePhp.php";
//ChromePhp::log('Hello console!');
//ChromePhp::log($_SERVER);
//ChromePhp::warn('something went wrong!');
include "verbindungdb.php";
if (isset ($_POST['region']) && isset ($_POST['lastname'])) {
	$regionId = $_POST['region'];
	$lastname = $_POST['lastname'];
	ChromePhp::log($lastname);
	
	
	//	$regionId = 2;
	//	$lastname = "Veenhuis";

	$sql = "Select * From employees Where Region = '$regionId' And LastName = '$lastname'";
	
	$array = array ();
	//    $arrayResult = array();
	foreach (verbindungdb($sql) as $value) {
		$array[$value['EmployeeID']] = array (
			"LastName" => $value['LastName'],
			"FirstName" => $value['FirstName'],
			"Region" => $value['Region'],
			"BirthDate" => $value['BirthDate'],
			"Address" => $value['Address'],
			"City" => $value['City'],

			
		);
		//    $array[$value['EmployeeID']]['FirstName'] = $value['FirstName'];	
		//$array[$value['EmployeeID']]['LastName'] = $value['LastName'];
		//    $array[$value['EmployeeID']]['Region'] = $value['Region'];
		//    $array[$value['EmployeeID']]['BirthDate'] = $value['BirthDate'];
		//    $array[$value['EmployeeID']]['Address'] = $value['Address'];

	}
//	ChromePhp::log($array);
  // xdebug_break();
	//	 $jon = json_encode($statement);
	//	 var_dump(json_decode($jon),true);
	//	 echo json_decode($jon);
	//	// echo $surname;
	////}
	//var_dump($array);
	echo json_encode($array);
}
?>
