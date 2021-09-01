<?php
////connection to database
$db = new PDO('mysql:host=localhost;dbname=seip;charset=utf8mb4', 'root', '');
//
////building query
$query = ' INSERT INTO `faq` ( `subjects`, `questions`, `answers`) 
 VALUES ("'.$_POST['subjects'].'","'.$_POST['questions'].'","'.$_POST['answers'].'")';

//execute the query using php
$result = $db->exec($query);


//var_dump($result);

// if($result){
//     echo "Data has been inserted successfully.";
// }else{
//     echo "There is an error. Please try again later.";
// }
header("location:faq_view.php");
?>