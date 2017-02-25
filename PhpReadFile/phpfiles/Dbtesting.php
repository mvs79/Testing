<?php
/*
 * Created on 09.02.2017
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 include "verbindungdb.php";
 
 foreach (verbindungdb("Select * From brett") as $row) {
      echo($row['date']." ");
      echo($row['nachricht']);
      echo "<br/>";
      echo "<hr>";
      
   }
?>
