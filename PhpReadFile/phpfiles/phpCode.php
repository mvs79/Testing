<?php
/**Dateien lesen*/
/*
 * Created on 08.02.2017
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 $zitate = file_get_contents("C:\Dateien\zitate.txt");
// echo "$zitate";
// echo nl2br($zitate);
 echo "<br/>";
 /**Dateien lesen zeilenweise*/
 $zitatArray = file("C:\Dateien\zitate.txt");
 for ( $index = 0; $index < count($zitatArray); $index++ ) {
	echo "$zitatArray[$index]<br/>";
}
/**Dateien schreiben*/
// ganze Datei wird überschrieben*/
$zeile = "Lorem ipsum und so weiter..";
file_put_contents("C:\Dateien\zitate.txt",$zeile);
/**Dateien anhängen*/
// ganze Datei wird überschrieben*/
$zeile = "Lorem ipsum und so weiter..";
file_put_contents("C:\Dateien\zitate.txt",$zeile,FILE_APPEND);
/**implode-> zusammenführen explode-> ein Array nach trennzeichen zerlegen*/
?>
<?php
/**Datumswerte time gibt timestamp zurück */
$timestamp  = time();
$datum = date("d.m.Y H:i D");
echo $datum;
echo "<br/>";
$week = array("Mo"=> "Montag","Tue"=>"Dienstag","Wed"=>"Mittwoch");
echo $week[date("D")];
echo "<br/>";
$weekNumber = array("Sonntag","Montag","Dienstag","Mittwoch");
echo $weekNumber[date("w")];
/**Vom string zum Datum*/
echo strtotime("08.02.2017");
echo "<br/>";
/** um Daten aufzuaddieren können wir den timestamp Zahlen aufaddieren*/
$timestamp = time();
$datum = $timestamp + 3600;
echo date("d.m.Y H:i",$datum);
echo "<br/>";
/**oder mit strotime*/
echo date("d.m.y H:i",strtotime("+1 week"));
echo "<br/>";
/**strpos und substr mit Beispiel 10 Zeichen vor und zurück ab Position*/
$zitate = "Ein sehr kurzer Satz ist das nicht sondern ein schöner toller.";
$zitateLength = strlen($zitate);
echo $strPos = strpos($zitate,"nicht");
     $strlength = strlen("nicht");
echo "<br/>";
echo $vor=substr($zitate,$strPos+$strlength,10);
echo "<br/>";
echo $zurück = substr($zitate,$strPos-10,10);
echo "<br/>";
?>
<?php
/** Ersetzen durch str_replace*/
$text = "Wer war an der Tür? Peter und er hatte Beeren dabei.";
$text = str_replace(" er ", " sie ", $text);
echo $text; //Ausgabe: Wer war an der Tür? Peter und sie hatte Beeren dabei.
$text= "Sie sollten täglich Früchte, Gemüse und Ballaststoffe essen.";
$gesund = array("Früchte", "Gemüse", "Ballaststoffe");
$lecker = array("Pizza", "Bier", "Eiscreme");

$new_text = str_replace($gesund, $lecker, $text); 
echo $new_text; //Sie sollten täglich Pizza, Bier und Eiscreme essen.
echo "<br>";
echo 'Hallo';
/** Zeilenumbrüche von Benutzereingaben am Besten mit nl2br($text)*/
$text = $_POST['text'];
echo "Unformatiert sieht der Text so aus: <br />";
echo $text;
 
echo "<br /><br /> Mit str_replace sieht dies so aus: <br />";
echo str_replace("\n", "<br />", $text);
 
echo "<br /><br /> Mit nl2br sieht dies so aus: <br />";
echo nl2br($text);
?>
