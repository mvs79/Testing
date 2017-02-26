
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

</body>
</html>
<?php
/*
 * Created on 07.02.2017
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 if(isset($_POST['senden']))
{
	if($_POST['vorname'] != "" && $_POST['nachname'] != "")
{
echo "Vorname: ".$_POST['vorname'];
echo "<br/>" ;
echo "Nachname: ".$_POST['nachname'];
echo '<br/>';
}
}
?>
