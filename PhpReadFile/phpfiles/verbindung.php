<?php

$host = "localhost";    //Hostname, standartmaeßig localhost
$user = "root";    //Benutzername
$pass = "";    //Kennwort
$db = "products";    //Datenbankname

$link = mysql_connect($host, $user, $pass) or die ("Keine Verbindung zu der Datenbank m&ouml;glich!");
mysql_select_db($db, $link) or die ("Ausw&auml;hlen der Datenbank fehlgeschlagen!");


?>