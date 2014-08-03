<?php

include "connect_db.php";

$sql = "DELETE FROM contact where id_contact = ".$_GET['id'];
$rows = mysql_query($sql);

?>
