<?php

// connection to db
$db = new PDO('mysql:host=localhost;dbname=seip;charset=utf8mb4', 'root', '');

// build query
$query = "UPDATE `features` SET 
    `titles` = '".$_POST['titles']."', 
    `descriptions` = '".$_POST['descriptions']."', 
    `icons` = '".$_POST['icons']."' WHERE `features`.`id` = ".$_POST['id'];



//echo $query;die();
//execute the query using php
//$result = $db->exec($query);
$result = $db->query($query);

//var_dump($result);

//if($result){
//    echo "Data has been updated successfully.";
//}else{
//    echo "There is an error. Please try again later.";
//}
header("location:feature_view.php");
?>
