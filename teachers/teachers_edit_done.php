<?php
$msg = "";
if(isset($_POST['upload'])){
	$target = "images/".basename($_FILES['image']['name']);
}
// connection to db
$db = new PDO('mysql:host=localhost;dbname=seip;charset=utf8mb4', 'root', '');
$image = $_FILES['image']['name'];
// build query

if ($_FILES['image']['name'] ) {
       move_uploaded_file($_FILES['image']['tmp_name'],$target);
       $image =  $_FILES['image']['name'];
       var_dump($image);

    }else{
    $image =$_POST['image']; 
    }


$query = "UPDATE `teachers` SET
	`image` = '".$image."',
    `names` = '".$_POST['names']."', 
    `emails` = '".$_POST['emails']."', 
    `phones` = '".$_POST['phones']."', 
    `educations` = '".$_POST['educations']."',  
    `experiences` = '".$_POST['experiences']."' WHERE `teachers`.`id` = ".$_POST['id'];

if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
$msg = "Image uploaded Successfully";	
}
else{
	$msg = "There is a problem";
}
//echo $query;die();
//execute the query using php
//$result = $db->exec($query);
$result = $db->query($query);

//var_dump($result);

if($result){
    echo "Data has been updated successfully.";
    header("location:teachers_view.php");
}else{
    echo "There is an error. Please try again later.";
}
?>
