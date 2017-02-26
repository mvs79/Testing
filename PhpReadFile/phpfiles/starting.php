<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="en" />
	<meta name="GENERATOR" content="PHPEclipse 1.2.0" />
	<title>title</title>
</head>
<body>
<script type="text/javascript">
 document.write('Matthias');
</script>
<form method="post" action="GetFormular.php">
<input type="text" class="text" name="vorname" size="size" maxlength="size" />	
<input type="text" class="text" name="nachname" size="size" maxlength="size" />
<input type="submit" class="button" name="senden" value="abschicken" />
</form>
</body>
</html>
<?php
/** Zum Erstellen von documentationen
require_once Connection.php;
$connection = new Connection();
*/
$name = "Hans";
if(isset($_POST['senden']))
{
	if($_POST['vorname'] != "" && $_POST['nachname'] != "")
{
echo "Vorname: ".$_POST['vorname'];
echo "<br/>" ;
echo "Nachname: ".$_POST['nachname'];
echo '<br/>';
// Es wird durch das '' der Name der Variable ausgegeben.
echo '$name';
// Verschiedene Variablen können ausgegeben werden int zurück
printf($name);
// Gibt die Variable aus und gibt Informationen an
print_r($name);
echo "<br/>";
}
}

?>
<?php
/**Berechnung mit Variablen*/
$zahl1 = 45;
$zahl2 = 20;

$add = $zahl1 + $zahl2;
if($zahl2 != 0)
{ 
$div = $zahl1 / $zahl2;
}
$mult = $zahl1 * $zahl2;

echo "Summe: $add = $zahl1 + $zahl2";
echo "<br/>";
echo "Multi: $mult = $zahl1 * $zahl2";
echo "<br/>";
echo "Div: $div = $zahl1 / $zahl2";
echo "<br/>";
?>
<?php
/** Arrays-> Arrays sind mit generischen Listen zu
 vergleichen*/
//Hinzufügen
$array = array();
$array[]="Januar";
// Assoziatives Array
$namen = array("Müller"=> "Hans",
 "Veenhuis"=> "Johannnes");
 echo $namen['Veenhuis'];
 echo "<br/>";
 //Verschachtelung weiterer assoziativer Array
 $mitarbeiter = array();
 $mitarbeiter[] = array("vorname"=>"Matthias","nachname"=>"Veenhuis");
 $mitarbeiter[] = array("vorname"=>"Martin","nachname" => "Weber");
 printf($mitarbeiter[1]['vorname']);
 echo "<br/>";
$kundenname = array();
$kundenname[0]="Hans Meier";
$kundenname['vorname'] = "Hans";
echo "$kundenname[0]";
echo "<br/>";
echo "".$kundenname['vorname'];
/** mehrdimensionale Array*/
$kunden = array();
$kunden[0]['vorname'] = "Hans";
$kunden[0]['nachname']= "Meier";
$kunden[1]['vorname'] = "Johannes";
$kunden[1]['nachname']= "Veenhuis";
$kunden[2]['vorname'] = "Matthias";
$kunden[2]['nachname']= "Veenhuis";
echo "<br/>";
echo "".$kunden[0]['vorname']." ".$kunden[0]['nachname'];
echo "<br/>";
/**Arrays durchsuchen*/
$angestellte = array("Matthias","Veenhuis");
if(in_array("Matthias",$angestellte))
{
	echo $angestellte[0];
}
//mit Key
$key = "vorname";
if(array_key_exists($key,$mitarbeiter))
{
	echo $mitarbeiter[$key];
}

echo "<br/>";
//Sortieren eines Arrays sort aufsteigend rsort absteigend
rsort($angestellte);
foreach ( $angestellte as $namen ) {
       echo "$namen";
       echo "<br/>";
}
echo "<br/>";
/**Metainformationen des Array*/
print("<pre>");
print_r($kunden);
print("<pre>");
?>
<?php
/** Superglobals */
$_POST[''];
$_GET[''];
//Webserver wird angezeigt
echo "".$_SERVER['DOCUMENT_ROOT'];
$_REQUEST[''];
$_SESSION[''];
$_FILES[''];
$_COOKIE[''];
$_ENV[''];
$GLOBALS;
/** Man kann alle SuperGlobals in ein Array aus SuperGlobals packen.*/

?>
<?php
/**Schleifen*/
//for

//Variable i auf 0 setzen
   $i = 0;
 
   //Schleifenbedingung
   while($i < 10) {
      // i ausgeben
      echo $i;
      // i um 1 erhöhen
      $i++;
   }
   /*
   //do While
   
   do{
   //Anweisung;
} while(Bedingung); 
*/

//for-Schleifen
   for($i = 0; $i < 10; $i++) {
      echo $i;
   }
   echo "<br/>";
 // foreach  
$colors = array('Red','Green','Blue');
foreach ( $colors as $color ) {
	echo "$color";
	echo "<br/>";
	
       
}
?>
<?php
/** Funktionen Optionale Parameter zuerst*/
 function summe($zahl1, $zahl2) {
      return $zahl1 + $zahl2;
   }
   echo summe(5 , 6);
   echo "<br/>";
   echo summe(7, 89);
   echo "<br/>";
   echo summe(7.656, 785.89);
   echo "<br/>";
   echo summe(summe(4,5),summe(4,6));
   echo "<br/>";
   function anrede($name,$anrede="Herr")
   {
   	 return "$anrede $name";
   }
   echo anrede('Müller');
   ?>
   
   /**->include sind zum Einbinden von Funktionen und Skripte
    ->require bricht das Programm ab, wenn obiges nicht vorhanden
    -> include_once und require_once wird nur einmal eingebunden
    -> Bei Abfrage mit include wird eine if(!@include("script.php")) eine
       1 bei True zurückgegeben.*/
       
  <?php
  /** Um Daten dauerhaft zu speichern, wird eine Session benutzt
   session_start() muss an jeder Seite aufgerufen werden, welche
   die session benutzen soll*/
   //Beispiel eines Zählers mit einer Session
   session_start();
   echo ++$_SESSION['counter'];  
  ?>
   <a href="starting.php">laden</a>
   
   
   
   