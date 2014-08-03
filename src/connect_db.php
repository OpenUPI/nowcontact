<?php
	$database="nowcontact"; //nama database
	$connection=mysql_connect("localhost","root","root");
	if($connection){
		$db = mysql_select_db($database);
	}else{
		echo mysql_error();
	}
?>
