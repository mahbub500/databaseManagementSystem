<?php
// connection to db
$db = new PDO('mysql:host=localhost;dbname=seip;charset=utf8mb4', 'root', '');


     extract($_POST);

     // var_dump($_POST);
    
      
     $query = "INSERT INTO `workshops_registration` (`id`, `course`, `email`, `name`, `fatherName`, `motherName`, `mobile`, `nid`, `gender`) VALUES (NULL, '$course', '$email', '$name','$father_name','$mother_name','$mobile','$nid','$gender') ";     
    //     $db->query($sql);      
    //     $final = $db->affected_rows;

    //     if ($final == 1) {
    //             // echo " Ok ";
    //     }else{
    //     echo " Good Bye ";
    // }
        
    


//echo $query;die();
//execute the query using php
$result = $db->exec($query);
// $result = $db->query($query_workshops);
header("location:../index.php");
?>
