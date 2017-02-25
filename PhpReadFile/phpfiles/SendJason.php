<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!--<script type="text/javascript" src="JsonFile.js">
</script>-->
<?php
include "OOPhp.php";
//$json = file_get_contents('FromJson.php');
//xdebug_break();
//$person = new Person("Maier",67);
//echo '<h1>'.$person -> name.'</h1>';
if($_GET['jsval']!= "")
{   
  $json = $_GET['jsval'];	
  echo '<h2>'.$_GET['jsval'].'</h2>';
  
  $jsarray = json_decode($json);
  $adress = array();
  foreach($jsarray as $value ) {
     $adress[] = $value;
}

//  $alter = $jsarray->Alter;
  echo '<h2>'.$adress[1].'</h2>';
//  echo '<h2>'.$adress['Name'].'</h2>';
//  echo '<h2>'.$adress['Wohnort'].'</h2>';
  
  
//  xdebug_break();
}
/*
 * Created on 17.02.2017
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
