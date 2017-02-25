
<?php
/*
 * Created on 10.02.2017
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 include "verbindungdb.php";
 if(isset($_POST['txtval']))
 { 
 $surname = $_POST['txtval'];
// echo "<h1>".$surname."<h1>";
 
// $surname = "Schwemmer";
 //var_dump($surname);
 $sql = "Select first_name From user Where surname = '$surname'";
 foreach (verbindungdb($sql) as $value ) {
       echo "".$value['first_name'];
}
// echo $surname;
 }
?>
