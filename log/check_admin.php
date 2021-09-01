<?php
//connection to database
//$db = new PDO('mysql:host=localhost;dbname=seip;charset=utf8mb4','root','');

session_start();
include 'connection.php';
$Admin_location='../dashboards/admin_index.php';

$Admin_Email= mysqli_real_escape_string($conn,$_POST['email']);
$Admin_Pass= mysqli_real_escape_string($conn,$_POST['password']);


//       echo $Admin_Name;
//       echo $Admin_Pass;


$q = "SELECT * FROM `admin` WHERE `email` = '$Admin_Email' AND `passward`= '$Admin_Pass' ";

// $Adminquery="SELECT * FROM admin WHERE email='$Admin_Email' AND password='$Admin_Pass'";

if($conn->query($q)== TRUE)
{
    $result=$conn->query($q);
    if($result->num_rows==1)
    {
        // echo "successful login";
        $_SESSION["user"] = $Admin_Email;
        header('Location: '.$Admin_location);
    }
    else{
        echo "login failed";
    }

}

?>
