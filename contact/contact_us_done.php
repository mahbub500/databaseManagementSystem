<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SARON Database Management</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
    <!-- bootstrap  Latest compiled and minified CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/imagehover.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <!-- =======================================================
        Theme Name: Code_Finder
        Author: Code_Finder
    ======================================================= -->
</head>
<body style="padding-top: 90px">
<!--Navigation bar start =================================================-->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!--         Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../index.php"><img src="../assets/images/bitm.png" alt="logo" height="40" width="100"></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right" style="padding-top: 10px">
                <li><a href="../index.php">Home <span class="sr-only">(current)</span></a></li>
                <li><a href="../students/registration.php">Registration</a></li>
                <li><a href="contact_us.php">Contact US</a>
                    <?php
                    session_start();
                    error_reporting(E_ALL & ~E_NOTICE);
                    if($_SESSION["user"] != '')
                    {
                        echo "<li><a href='../log/log_out.php'>Log Out</a></li>";

                    }
                    else{
                        echo "<li class=\"dropdown\">
                                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Log In <span class=\"caret\"></span></a>
                                  <ul class=\"dropdown-menu\">
                                      <li><a href=\"../log/log_in_admin.php\">Log in as Admin</a></li>
                                      <li role=\"presentation\" class=\"divider\"></li>
                                      <li><a href=\"../log/log_in_student.php\">Log in as Student</a></li>
                                  </ul>
                              </li>";

                    }

                    ?>
            </ul>
        </div>
    </div>
</nav>


<?php

if(isset($_POST['email'])) {

    extract($_POST);
    $db = new PDO('mysql:host=localhost;dbname=seip;charset=utf8mb4','root','');

    var_dump($_POST);
         $sql = "INSERT INTO `contact` (`ID`, `firstname`, `lastname`, `mail`, `mobile`, `subject`, `messege`) VALUES (NULL, '$first_name', '$last_name', '$email', '$telephone', '$subject', '$comments')";
        echo $sql; 

     //execute the query sql php
$result = $db->exec($sql);
var_dump($result);

if($result){
   // echo "Data has been inserted successfully.";
header("location:../index.php");
}else{
   echo "There is an error. Please try again later.";
}
}
?>

    <!-- include your own success html here -->
    <div class="container">
        <div class="row" style="height: 500px">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-success"style="padding: 100px">
                    Thank you for contacting us. We will be in touch with you very soon.
                </div>
            </div>
        </div>
    </div>
    
<footer id="footer" class="footer">
    <div class="container text-center">
    
        <ul class="social-links">
           
            <li>
                <a href="#" target="_blank">
                    <i class="fa fa-facebook fa-fw"></i>
                </a>
            </li>

            <li>
                <a href="#" target="_blank">
                    <i class="fa fa-google-plus fa-fw"></i>
                </a>
            </li>

        
            <li>
                <a href="#" target="_blank">
                    <i class="fa fa-linkedin fa-fw"></i>
                </a>
            </li>
        </ul>
        ©2021 Web Application Development with PHP and Frameworks (WDPF) . All rights reserved
        <div class="credits">
            Designed by <a href="#">SARON TEAM</a>
        </div>
    </div>
</footer>
<!--/ Footer-->

<!-- Latest compiled and minified JavaScript -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/jquery.easing.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<!--<script src="js/custom.js"></script>-->

</body>
</html>
