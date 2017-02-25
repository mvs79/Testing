<?php

/*
 * Created on 24.02.2017
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

class Items {

	function Items() {

	}
}

class Product {

	public $author;

	function __construct(Author $author) {
		$this->author = $author;
	}

	public function Product() {

	}
}

class Author {

}

//Schreiben in eine Liste bzw Array
$regionId=2;
$lastname="Veenhuis";
$sql = "Select * From employees Where Region=? And LastName=?";
$query = $dbh->prepare($sql);
try {
	$query->execute(array (
		$regionId,
		$lastname
	));

} catch (Exception $e) {
	echo $e->getMessage();
}

$results = $query->fetch(PDO :: FETCH_ASSOC);
print_r($results);
$itemsobj = array();
foreach ($query as $value) {
    $itemsobj[]=$value;
}

?>
