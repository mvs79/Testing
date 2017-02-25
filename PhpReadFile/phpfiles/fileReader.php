<?php
/*
 * Created on 08.02.2017
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
include verbindung.php;


foreach ($verbindung->query('SELECT * from user') as $row) {
      echo($row['surname']." ");
      echo($row['first_name']);
      echo "<br/>";
      
   }
   
 //Connection mit PDO
 //class Connection               
//{ 
$host = "localhost";    //Hostname, standartmae�ig localhost
$user = "root";    //Benutzername
$pass = "";    //Kennwort
$db = "fatom";    //Datenbankname

//public function connection() {
	

try {
   $dbh = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
   /*
   foreach ($dbh->query('SELECT * from user') as $row) {
      echo($row['surname']." ");
      echo($row['first_name']);
      echo "<br/>";
      
   }
   */
   $dbh = null;
} catch (PDOException $e) {
   print "Error!: " . $e->getMessage() . "<br/>";
   die();
       }
//    }
// }
 
?>
