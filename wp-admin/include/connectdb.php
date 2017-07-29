<?php

 $localhost="db586443394.db.1and1.com";
$user="dbo586443394";
$pass="Dhirendra$$";
$db="db586443394";

$con=mysql_connect($localhost,$user,$pass);

$sql=mysql_select_db($db,$con);
if(!$sql)
{
	echo "error";
}

$con_pdo = new PDO('mysql:host=db586443394.db.1and1.com;dbname=db586443394',$user,$pass);

  
  ?>