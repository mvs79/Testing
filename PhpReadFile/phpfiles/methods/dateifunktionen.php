<?php
/*
 * Created on 22.02.2017
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
// copy('C:\Users\PC\OneDrive\TextDateien\org.eclipse.jdt-4.6.2.zip','C:\Programme');
  // ziel wird überschrieben
  copy('C:\Users\PC\Documents\Bahhof.txt','C:\Users\PC\Documents\ziel.txt');
  $file="C:\Users\PC\Documents\Bahhof.txt";
  //Vom Server kopieren
  if(is_dir($file))
  {
  	echo 'ja';
  }
 //Meist sind es Server von denen die Dateien geladen werden
 //$zielordner = exec("cp -r /server/path/folder /server/path/folder_copy");
 //Beispiel ein Host im Internet
$sourcefile = 'http://3.bp.blogspot.com/-AGI4aY2SFaE/Tg8yoG3ijTI/AAAAAAAAA5k/nJB-mDhc8Ds/s400/rizal001.jpg';
//Für die Zieldatei brauchen wir das S_SERVER['DOCUMENT_ROOT'];
echo $_SERVER['DOCUMENT_ROOT'];
echo '</br>';
$destination = $_SERVER['DOCUMENT_ROOT']."/PhpReadFile/phpfiles/images/auto.jpg";
echo $destination;
//success wird ausgegeben
if(copy($sourcefile,$destination))
{
	echo 'success';
}
echo '</br>';
//exist wird ausgegeben, sonst nichts
if(file_exists($file))
{
	echo 'exist';
}
echo '</br>';
// Zieldatei wird ausgegeben. Die Datei wird überschrieben
$filewholecontent = file_get_contents($file);
file_put_contents('C:\Users\PC\Documents\ziel.txt','Zieldatei');
echo '</br>';
echo $filewholecontent;
echo '</br>';
//liefert ein array von Zeilen zurück
$arrayrows = file($file);
print_r($arrayrows);
echo '</br>';
//Größe des Arrays in Size
$bytes = filesize($file);
echo $bytes;
echo '</br>';
//true zurück, wenn verzeichnis oder datei
echo is_dir($file);
echo is_file($file);
echo '</br>';
//datei lesbar, schreibbar
if(is_readable($file))
echo 'read';
echo '</br>';
if(is_writable($file))
{
 echo 'write';
 echo '</br>';	
}
//Erstellen eines neuen Verzeichnis
//mkdir("C:/xampp/htdocs/PhpReadFile/phpfiles/newfolder/");
rmdir("C:/xampp/htdocs/PhpReadFile/phpfiles/newfolder/");
//Verschieben einer hochgeladenen Datei
//move_uploaded_file('','');
//löscht den Pfad
unlink($filewholecontent);

?>
