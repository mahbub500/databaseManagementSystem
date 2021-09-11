<?php
// connection to db
$db = new PDO('mysql:host=localhost;dbname=seip;charset=utf8mb4', 'root', '');

// build query
// build query
echo $query_workshops = "UPDATE `workshops_registration` SET `Is_verify` = '1' WHERE `workshops_registration`.`id`=".$_GET['id'];



//echo $query;die();
//execute the query using php
//$result = $db->exec($query);
$result = $db->query($query_workshops);
header("location:workshop_student_registrad_student.php");
?>
