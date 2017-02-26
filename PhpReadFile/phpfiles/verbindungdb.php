<?php

     include "verbindung.php";/*Verbindung zur Datenbank */
     
      function verbindungdb($sql){
 
      $verbindung = mysql_connect("localhost","root","") OR die("Fehler");
      mysql_select_db("products",$verbindung) OR die("DB konnte nicht ausgewertet werden");
      $wertemengeins = mysql_query($sql,$verbindung) OR die("Probleme bei der: ".mysql_error());

       return $wertemengeins;
       mysql_close($verbindung);
       
       }
       
      
        
?>