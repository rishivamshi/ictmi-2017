<?php
$con = mysql_connect("localhost", "root", "aaa") or die(mysql_error());
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
else {
mysql_select_db("icamtm", $con);
}
?>
