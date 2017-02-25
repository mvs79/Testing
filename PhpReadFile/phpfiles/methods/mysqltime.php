
<?php
//include "ChromePhp.php";
//include "verbindung.php";
$inputfield = "";
//if (isset ($_POST['region']) && isset ($_POST['lastname'])) {
//	$regionId = $_POST['region'];
//	$lastname = $_POST['lastname'];
//	$sql = "Select EmployeeID,LastName,FirstName From employees";
//	$dbh = verbindung();
//	$sqlcharset = "SET NAMES 'utf8'";
//	$querycharset = $dbh->prepare($sqlcharset);
//	$querycharset->execute();
//	$query = $dbh->prepare($sql);
//	
//	$query->execute();
//
//	$results=$query->fetchAll(PDO::FETCH_COLUMN|PDO::FETCH_GROUP);
//	print_r($results);
	$timestamp = microtime();
	echo $timestamp;
	//Herstellen eines timestamp
	echo mktime(1,4,2,3,4,2017);
	echo '</br>';
	//umwandeln eines timestamp
    echo date('Y-m-d H:i:s',mktime(1,4,2,3,4,2017));
	echo '</br>';
//	echo DateTime::;
//  Datetime.Now in php
	echo date('Y-m-d H:i:s');
//	gibt aktuellen timestamp zurück
	echo time();
?>

 

