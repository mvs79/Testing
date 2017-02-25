
<!DOCTYPE html>
<html lang="de">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="css/styling.css" rel="stylesheet" type="text/css" />
        <title>Titel</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="emp.js">var formval = <?php $_POST['search'] = 'Server';echo $_POST['search'];?>;</script>
<script type="text/javascript">
</script>
<button id="btn1">Attach data to div element</button><br>
<button id="btn2">Get data attached to div element</button>
<div></div>
  </head>
  <body>
<?php


// Deklaration der Variablen
//$_POST['inputfield'] = "";
//$inputfield = "";
?>
<?php


// footer wird inkludiert
//include "footer.php";
?>
  <div id="content">
  <h2> Human-Ressources</h2>
  <div id="content_sidebarleft">
<?php


//includiert die Sidebar

//include "contentsidebar.php";
?>
</div>
<?php


//includiert die Costumerform
//include "formcostumer.php";
?>
<div id ="chk_form">
<form method="post" id="formular" action="<?php $_SERVER['PHP_SELF'] ?>">
<fieldset>
<input type="radio" class="radio" name="radio_mw" value="weiblich">weiblich</input>
<input type="radio" class="radio" name="radio_mw" value="männlich" />männlich</input>
<select name="drop_region" id="drop_region" class="region_content">
<option>Suchen Sie eine Region aus</option>
<?php


//include "ChromePhp.php";
//ChromePhp::log('Hello console!');
//ChromePhp::log($_SERVER);
//ChromePhp::warn('something went wrong!');
include "verbindungdb.php";
$options = "";
foreach (verbindungdb("Select * From region") as $row) {
	if($row['RegionID']!= "" ||$row['RegionDescription'] != "")
	{
	$options.='<option value='.$row['RegionID'].'>'. $row['RegionDescription'].'</option>';
	}
}
echo $options;
echo "<br/>";
?>
</select>
<select name="drop_firstname" id="drop_firstname" size="3">
<option>Wählen Sie ein Land aus.</option>	
<input type="submit" class="button" name="btn_getproduct" id="btn_getproduct" value="laden"/>
<input type="text" class="text" name="search" id="search" value="" size="size" maxlength="size" />
<input type="submit" class="button" id="btn_costumer" name="btn_costumer" value="Stammdaten" />
<br/>
<br/>
<div id="form_input">
</div>
<?php

include 'verbindung.php';
// xdebug_break();
if (isset ($_POST['load_form'])) {
	try {
		xdebug_break();
		$employeeid = $_POST['employeeid'];
		$lastname = $_POST['lastname'];
		$firstname = $_POST['firstname'];
		$dbconn = verbindung();
		$sql = "update employees set LastName=?,FirstName=? where EmployeeID=?";
		$result = $dbconn->prepare($sql);
		$result->execute(array (
			$lastname,
			$firstname,
			$employeeid
		));
		$dbh = null;
	} catch (PDOException $e) {
		print "Error!: " . $e->getMessage() . "<br/>";
		die();
	}
}
//include "inputfield.php";
?>
</fieldset>
</form>
</div>
<div id="txtdata">
<h2>Firmendaten</h2>
</div>
</div>
<?php


include "footer.php";
?>
 </body>
</html>

