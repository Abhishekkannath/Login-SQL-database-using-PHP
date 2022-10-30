<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cse";
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn)
  echo "Error in Connection".mysql_error();

$dbcheck=mysql_select_db("cse");
if(!$dbcheck)
	echo "Error selecting Database<br>".mysql_error();
//else echo "Success";

  //mysql_close($conn);
  
  ?>