<?php

include "connect_db.php";

$errors = array();
$data = array();
$user_id = 1;

// validation for the form
if (empty($_POST['name']))
    $errors['name'] = 'Name is required';
if (empty($_POST['email']))
    $errors['email'] = 'E-mail is required';
if (empty($_POST['phone']))
    $errors['phone'] = 'Phone is required';

$data['sent'] = $_POST;
if (!empty($errors)){
    $data['success'] = false;
    $data['errors'] = $errors;
    $data['message'] = 'Failed to submit !';
}
else if (!empty($_POST['id_contact'])){
    $sql_update = "UPDATE contact set name='".$_POST['name']."', 
                    phone='".$_POST['phone']."', 
                    email='".$_POST['email']."', 
                    facebook='".$_POST['facebook']."', 
                    twitter='".$_POST['twitter']."', 
                    website='".$_POST['website']."', 
                    about='".$_POST['about']."' 
                    WHERE id_contact=".$_POST['id_contact'];
    
    mysql_query($sql_update);
    
    $data['success'] = true;
    $data['message'] = 'update success!';
}
else{
    
    $sql_insert = "INSERT INTO contact (name, phone, email, facebook, twitter, website, about, user_id) 
                    VALUES (
                    '".$_POST['name']."',
                    '".$_POST['phone']."',
                    '".$_POST['email']."',
                    '".$_POST['facebook']."',
                    '".$_POST['twitter']."',
                    '".$_POST['website']."',
                    '".$_POST['about']."',
                    ".$user_id."
                  )";
    
    mysql_query($sql_insert);
    
    $data['success'] = true;
    $data['message'] = 'Success!';
}

echo json_encode($data);

?>
