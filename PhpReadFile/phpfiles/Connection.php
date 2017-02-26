<?php
          
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
