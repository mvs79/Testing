<?php
/*
 * Created on 22.02.2017
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 $array = array("Veenhuis","Maier","Hanser");
 $arraykey = array("Vorname"=> "Matthias","Nachname"=>"Veenhuis","Adresse"=>"Amselweg"); 
 print_r($array);
 echo '<br/>';
 //Sortieren nach Werten Amselweg,Matthias,Veenhuis
 sort($array);
 print_r($arraykey);
 echo '<br/>';
 //Sortieren nach Key also Adresse,Nachname,Vorname
 ksort($arraykey);
 print_r($arraykey);
 echo '<br/>';
 //Sortieren nach Key reverse
 krsort($arraykey);
 print_r($arraykey);
 echo '<br/>';
 print_r(count($array));
 echo '<br/>';
 $explarray = array();
 //implodieren des Arrays
 $exploder = implode(",",$arraykey);
 //Matthias,Veenhuis,Amselweg
 print_r($exploder);
 echo '<br/>';
 $explarray=explode(",",$exploder);
 //Array ( [0] => Matthias [1] => Veenhuis [2] => Amselweg )
 print_r($explarray);
 echo '<br/>';
 // 1 bedeutet ja
 print_r(in_array('Veenhuis',$explarray));
 // ja
 if(in_array('Matthias',$explarray))
 {
 	echo 'ja';
 }
 echo '<br/>';
 natsort($array);
 //Hanser,Maier,Veenhuis
 print_r($array);
 echo '<br/>';
 natcasesort($array);
 //ohne Groß-Kleinschreibung
 print_r($array);
 echo '<br/>';
 rsort($array);
 //Veenhuis,Maier,Hanser
 print_r($array);
 echo '<br/>';
 shuffle($array);
 print_r($array);
 
 
 
?>
