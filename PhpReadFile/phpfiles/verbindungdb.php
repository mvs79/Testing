<?php

/*
 * Created on 08.02.2017
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
//DB-Verbindung mit mysqli

//function verbindungdb($sql) {
//	$host = "localhost"; //Hostname, standartmae�ig localhost
//	$user = "root"; //Benutzername
//	$pass = ""; //Kennwort
//	$db = "fatom"; //Datenbankname
//
//	$con = mysqli_connect('localhost', $user, $pass, $db);
//	if (mysqli_connect_errno()) {
//		echo "Fehlerhaft Verbidndung zur DB " . mysqli_connect_error();
//	}
//	$query = mysqli_query($con,$sql);
//	return $query;
//}


//DB-Verbindung mit PDO

function verbindungdb($sql) {
$host = "localhost";    //Hostname, standartmae�ig localhost
$user = "root";    //Benutzername
$pass = "";    //Kennwort
$db = "northwind";    //Datenbankname

try {
   $dbh = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
   $sqlcharset = "SET NAMES 'utf8'";
   $querycharset = $dbh-> prepare($sqlcharset);   
   $querycharset-> execute();
   $query = $dbh-> prepare($sql);   
   $query-> execute();
//   $results=$query->fetchAll(PDO::FETCH_ASSOC);
//   $json=json_encode($results);
//   return $json;
    return $query;
   
   $dbh = null;
} catch (PDOException $e) {
   print "Error!: " . $e->getMessage() . "<br/>";
   die();
       }
    }
 


?>
