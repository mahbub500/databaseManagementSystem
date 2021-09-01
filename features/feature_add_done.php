<?php
//connection to database
$db = new PDO('mysql:host=localhost;dbname=seip;charset=utf8mb4', 'root', '');
//
////building query
$query = ' INSERT INTO `features` ( `titles`, `descriptions`, `icons`) 
 VALUES ("'.$_POST['titles'].'","'.$_POST['descriptions'].'","'.$_POST['icons'].'")';

//execute the query using php
$result = $db->exec($query);


//var_dump($result);


header("location:feature_view.php");
?>