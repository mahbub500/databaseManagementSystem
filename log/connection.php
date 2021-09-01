
<?php

$servername="localhost";
$username="root";
$password="";
$database="seip";

// create connection
$conn= new mysqli($servername,$username,$password,$database);

// check connection
if (!$conn) {
    die("connection failed: ". mysqli_connect_error());
}
else{
    // echo "connected";
}

?>