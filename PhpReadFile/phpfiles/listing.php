<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="css/style.css" rel="stylesheet" type="text/css" />
        <title>Titel</title>
  </head>
  <body>
  <div id="header">
  </div>
  <div id="content">
  <div id="content_sidebarleft">
  </div>

<div id="footer">
</div>


<table>
<tr>
<th>Benutzer-ID</th>
<th>Nachname</th>
<th>Vorname</th>
<th>Strasse</th>
<th>Strassennummer</th>
<th>PLZ</th>
<th>Email</th>
</tr>
<?php
 $q = intval($_GET['q']);
// $q = "Schwemmer";
include "verbindungdb.php";
 foreach (verbindungdb("Select * From user where user_id='$q'") as $row) {
      
      echo "<tr>";
      echo "<td>".$row['user_id']."</td>";
      echo "<td>".$row['surname']."</td>";
      echo "<td>".$row['first_name']."</td>";
      echo "<td>".$row['street']."</td>";
      echo "<td>".$row['street_number']."</td>";
      echo "<td>".$row['zip_code']."</td>";
      echo "<td>".$row['email']."</td>";
      echo "<br/>";
      echo "<hr>";
      echo "</tr>";
 }
?>
</table>
</body>
</html>
