<?php
/*
Ghalia Alrajbn
JUL, 2011
*/
	$DB_HostName = "localhost";
	$DB_Name = "test";
	$DB_User = "root";
	$DB_Pass = "root";
	$DB_Table = "user";
	
	if (isset ($_GET["name"]))
		$name = $_GET["name"];
	else
		$name = "Ghalia";
		
	$con = mysql_connect($DB_HostName,$DB_User,$DB_Pass) or die(mysql_error()); 
	mysql_select_db($DB_Name,$con) or die(mysql_error()); 

	$sql = "insert into $DB_Table (name) values('$name');";
	$res = mysql_query($sql,$con) or die(mysql_error());
	
	mysql_close($con);
	if ($res) {
		echo "success";
	}else{
		echo "faild";
	}// end else
	
?>