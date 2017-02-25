<?php

/*
 * Created on 22.02.2017
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

$googleId=1976288072671326122;
$jsproduct = file_get_contents("jsonfiles/product.json");
$arrProduct = json_decode($jsproduct, true);
echo $arrProduct['kind'];
echo '</br>';
print_r($arrProduct['items'][0]['product']['googleId']);
echo '</br>';
foreach ($arrProduct['items'] as $value) {
	echo ($value['product']['googleId']);
	if ($value['product']['googleId']==$googleId) {

		echo '</br>';
		echo ($value['product']['author']['name']);
		echo '</br>';
		echo ($value['product']['author']['accountId']);
		echo '</br>';
		echo ($value['product']['creationTime']);
		echo '</br>';
		echo ($value['product']['modificationTime']);
		echo '</br>';
		echo ($value['product']['country']);
		echo '</br>';
		echo ($value['product']['brand']);
		echo '</br>';
		//       echo ($value['product']['inventories'][0]['channel']);
		//       echo '</br>';
		//       echo ($value['product']['inventories'][0]['price']);
		//       echo '</br>';
		$inventories = $value['product']['inventories'];
		foreach ($inventories as $item) {
			echo $item['channel'];
			echo $item['price'];
		}
		$images=$value['product']['images'];
		foreach ($images as $item) {
			echo $item['link'];
		}
	}
	//foreach ($arrProduct->items as $item) {
	//       var_dump($item->product->brand);
	//       echo '</br>';
	//}
}
?>
