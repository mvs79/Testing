<?php
/*
 * Created on 13.02.2017
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 function verbindung() {
$host = "localhost";    //Hostname, standartmae�ig localhost
$user = "root";    //Benutzername
$pass = "";    //Kennwort
$db = "northwind";    //Datenbankname

try {
   $dbh = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
//   $sqlcharset = "SET NAMES 'utf8'";
//   $querycharset = $dbh-> prepare($sqlcharset);   
//   $querycharset-> execute();
//   $query = $dbh-> prepare($sql);   
//   $query-> execute();
//   $results=$query->fetchAll(PDO::FETCH_ASSOC);
//   $json=json_encode($results);
//   return $json;
     return $dbh;
//    return $query;
   
   $dbh = null;
} catch (PDOException $e) {
   print "Error!: " . $e->getMessage() . "<br/>";
  
   die();
       }
    }
 
?>
