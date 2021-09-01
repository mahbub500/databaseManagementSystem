<?php
//connection to database
//$db = new PDO('mysql:host=localhost;dbname=seip;charset=utf8mb4','root','');

session_start();
include 'connection.php';
$location='../dashboards/student_index.php';

$Seip_id= mysqli_real_escape_string($conn,$_POST['seip_id']);
$Pass= mysqli_real_escape_string($conn,$_POST['password']);


//       echo $Admin_Name;
//       echo $Admin_Pass;


$q = "SELECT * FROM `user` WHERE `seip_id` = '$Seip_id' AND `passward`= '$Pass' ";

// $Adminquery="SELECT * FROM admin WHERE email='$Admin_Email' AND password='$Admin_Pass'";

if($conn->query($q)== TRUE)
{
    $result=$conn->query($q);
    if($result->num_rows==1)
    {
        // echo "successful login";
        $_SESSION["user"] = $Seip_id;
        header('Location: '.$location);
    }
    else{
        echo "login failed";
    }

}

?>
