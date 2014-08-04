<?php

include "connect_db.php";

$data = array();

if (isset($_GET['q'])){
    $sql = "SELECT * FROM contact where name like '%".$_GET['q']."%'";
    $rows = mysql_query($sql);
    while($row=mysql_fetch_array($rows)){
        $data[] = $row;
    }
}

else{
    $sql = "SELECT * FROM contact";
    $rows = mysql_query($sql);
    while($row=mysql_fetch_array($rows)){
        $data[] = $row;
    }

}

echo json_encode($data);

?>
