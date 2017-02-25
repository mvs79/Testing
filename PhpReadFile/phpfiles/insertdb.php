<?php


/*
 * Created on 18.02.2017
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
include "verbindung.php";
$array = array ();
$dbconn = verbindung();
/*
$maxcount = 28;
$index = 1;
$country = array ();
$country[] = "Germany";
$country[] = "Poland";
$country[] = "USA";
$country[] = "Spain";
$country[] = "Venezuela";
$country[] = "Italy";
$country[] = "Sweden";
*/
$customerid="VVVVT";
$company="Schusterei Müller";
$contact="Müller Schuster";
$title="Schuster M.";
$adress="Amselweg 45 Greetsiel";
$supplierid=27;
//xdebug_break();
//$sql = "update customers set SupplierID=1";
//$sql = "INSERT INTO customers (CustomerID,CompanyName,ContactName,ContactTitle,Address,SupplierID) VALUES('$customerid','$company','$contact','$title','$adress',$supplierid)"; 
$sql = "INSERT INTO customers (CustomerID,CompanyName,ContactName,ContactTitle,Address,SupplierID) VALUES(?,?,?,?,?,?)"; 


?>
