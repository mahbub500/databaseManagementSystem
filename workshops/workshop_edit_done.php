<?php
// connection to db
$db = new PDO('mysql:host=localhost;dbname=seip;charset=utf8mb4', 'root', '');

// build query
$query_workshops = "UPDATE `workshops` SET
	`icons` = '".$_POST['icons']."',
	`titles` = '".$_POST['titles']."',
	`times` = '".$_POST['times']."',
    `trainers` = '".$_POST['trainers']."', 
    `descriptions` = '".$_POST['descriptions']."', 
    `prerequisite` = '".$_POST['prerequisite']."' WHERE `workshops`.`id` = ".$_POST['id'];



//echo $query;die();
//execute the query using php
//$result = $db->exec($query);
$result = $db->query($query_workshops);
header("location:workshop_view.php");
?>
