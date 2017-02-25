
<?php
include "ChromePhp.php";
//ChromePhp::log('Hello console!');
//ChromePhp::log($_SERVER);
//ChromePhp::warn('something went wrong!');
include "verbindung.php";
$inputfield = "";
if (isset ($_POST['region']) && isset ($_POST['lastname'])) {
	$regionId = $_POST['region'];
	$lastname = $_POST['lastname'];
	$sql = "Select * From employees Where Region=? And LastName=?";
	$dbh = verbindung();
	$sqlcharset = "SET NAMES 'utf8'";
	$querycharset = $dbh->prepare($sqlcharset);
	$querycharset->execute();
	$query = $dbh->prepare($sql);
	try {
		$query->execute(array (
		$regionId,
		$lastname
	));
       
}
catch(Exception $e)
{
	echo $e->getMessage();
}
//	$query->execute(array (
//		$regionId,
//		$lastname
//	));
	     $results=$query->fetch(PDO::FETCH_ASSOC);
	     print_r($results);
	//     $quey->closeCursor();
	//     header("content-type:application/json");
	//     $json=json_encode($results);
	//     echo $json;
//	$array = array ();
//    if(count($query) > 0)
//    {
	foreach ($query as $value) {
		//     	$array[$value['EmployeeID']] = array (
		//			"LastName" => $value['LastName'],
		//			"FirstName" => $value['FirstName'],
		//			"Region" => $value['Region'],
		//			"BirthDate" => $value['BirthDate'],
		//			"Address" => $value['Address'],
		//			"City" => $value['City']);
		echo '<label for="lastname">Nachname</label>';
		echo '</br>';
		echo '<input type="text" value=' . $value['LastName'] . '></input>';
		echo '</br>';
		echo '<label for="lastname">Vorname</label>';
		echo '</br>';
		echo '<input type="text" value=' . $value['FirstName'] . '></input>';
		echo '</br>';
		echo '<label for="lastname">Region</label>';
		echo '</br>';
		echo '<input type="text" value=' . $value['Region'] . '></input>';
		echo '</br>';
		echo '<label for="lastname">Geburtstag</label>';
		echo '</br>';
		echo '<input type="text" value=' . $value['BirthDate'] . '></input>';
		echo '</br>';
		echo '<label for="lastname">Adresse</label>';
		echo '</br>';
		echo '<input type="text" value=' . $value['Address'] . '></input>';
		echo '</br>';
		echo '<label for="lastname">Stadt</label>';
		echo '</br>';
		echo '<input type="text" value=' . $value['City'] . '></input>';
		echo '</br>';

	}
    }
	//    if(count($array) > 0)
	//    {   
	////    	$inputfield = "inputfield.php";
	//    	echo json_encode($array);
	//    }
//	    xdebug_break();
//		echo json_encode($query);
	//	xdebug_break();
	//    include "inputfield.php";


?>

