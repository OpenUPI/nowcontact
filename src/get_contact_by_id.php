<?php

include "connect_db.php";

$sql = "SELECT * FROM contact where id_contact = ".$_GET['id'];
$rows = mysql_query($sql);
$data = array();
$row=mysql_fetch_object($rows);
echo json_encode($row);

?>
