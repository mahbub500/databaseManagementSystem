<?php

// connection to db
$db = new PDO('mysql:host=localhost;dbname=seip;charset=utf8mb4', 'root', '');

//build query
$query = "DELETE FROM `contact` WHERE `id` = ".$_GET['id'];
//execute
$result = $db->exec($query);

if($result){
   echo "Data has been deleted successfully.";
    header("location:../contact/contact_us_view.php");
}else{
   echo "There is an error. Please try again later.";
}

?>

