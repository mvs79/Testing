<?php
//include "ChromePhp.php";
/*
 * Created on 17.02.2017
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 xdebug_break();
 include "verbindung.php";
 if($_POST['search'] == "" || empty($_POST))
 {
 	return;
 }
xdebug_break();
 if(!empty($_POST))
  {
 var_dump(json_encode($_POST));
// $_POST = json_decode($_POST);
 xdebug_break();
  $formdata = json_decode($_POST['formdata']);
  $region = $_POST['drop_region'];
  $lastname = $_POST['search'];
xdebug_break();
  $sql = "Select * From employees Where Region=? And LastName=?";
	$dbh = verbindung();
	$sqlcharset = "SET NAMES 'utf8'";
	$querycharset = $dbh->prepare($sqlcharset);
	$querycharset->execute();
	$query = $dbh->prepare($sql);
	$query->execute(array (
		$region,
		$lastname
	));
    if(count($query) > 0)
    {
	foreach ($query as $value) {
		
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
//    xdebug_break(); 
 }
?>
