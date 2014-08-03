<?php

include "connect_db.php";


$sql = "SELECT * FROM contact";
$rows = mysql_query($sql);
$data = array();
while($row=mysql_fetch_array($rows)){
    $data[] = $row;
}

echo json_encode($data);

?>
