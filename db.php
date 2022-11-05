<?php
$servername="sql12.freesqldatabase.com";
$username="sql12530642";
$password="f4nTtWu2BS";

$conn=mysql_connect($servername,$username,$password);
if(!$conn)
  echo "Error in Connection".mysql_error();

$dbcheck=mysql_select_db("sql12530642");
if(!$dbcheck)
	echo "Error selecting Database<br>".mysql_error();
//else echo "Success";

  //mysql_close($conn);
  
  ?>
