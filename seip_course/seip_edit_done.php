<?php
// connection to db
$db = new PDO('mysql:host=localhost;dbname=seip;charset=utf8mb4', 'root', '');

// build query
$query_seip_course = "UPDATE `seip_course` SET
	`icons` = '".$_POST['icons']."',
	`titles` = '".$_POST['titles']."',
	`times` = '".$_POST['times']."',
    `trainers` = '".$_POST['trainers']."', 
    `descriptions` = '".$_POST['descriptions']."', 
    `prerequisite` = '".$_POST['prerequisite']."' 
    
    WHERE `seip_course`.`id` = ".$_POST['id'];



//echo $query;die();
//execute the query using php
//$result = $db->exec($query);
$result = $db->query($query_seip_course);
header("location:seip_view.php");
?>
