<?php
//connection to database
$db = new PDO('mysql:host=localhost;dbname=seip;charset=utf8mb4', 'root', '');

////building query
$query_workshops = ' INSERT INTO `workshops` ( `titles`, `descriptions`, `icons`,`times`,`trainers`,`prerequisite`) 
 VALUES ("'.$_POST['titles'].'","'.$_POST['descriptions'].'","'.$_POST['icons'].'","'.$_POST['times'].'","'.$_POST['trainers'].'","'.$_POST['prerequisite'].'")';

//execute the query using php
$result = $db->exec($query_workshops);


//var_dump($result);

//if($result){
//    echo "Data has been inserted successfully.";
//}else{
//    echo "There is an error. Please try again later.";
//}
header("location:workshop_view.php");
?>
