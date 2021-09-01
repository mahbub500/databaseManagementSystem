<?php
// connection to db
$db = new PDO('mysql:host=localhost;dbname=seip;charset=utf8mb4', 'root', '');
// build query
// $query = UPDATE `faq` SET `subjects` = 'Questions about PHP', `questions` = 'What is the easiest way to convert my HTML documents to XHTML?fgdfd', `answers` = 'HTML Tidy gives you the option to transform any HTML document into anfdf XHTML one. Amaya is a browser/editor that will save HTML documents as XHTML.' WHERE `faq`.`id` = 119;

$query = "UPDATE `faq` SET
  
    `questions` = '".$_POST['questions']."', 
    `answers` = '".$_POST['answers']."'
     WHERE `faq`.`id` = ".$_POST['id'];

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
header("location:faq_view.php");
?>