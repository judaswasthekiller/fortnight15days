<?php
$con = mysql_connect("127.0.0.1","spidy","Spidy@6668");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("carshop");
?>
