<?php
//connection to database
$db = new PDO('mysql:host=localhost;dbname=seip;charset=utf8mb4', 'root', '');

//build query
$query_workshops = "SELECT * FROM `workshops` WHERE id = ".$_GET['id'];

//execute the query using php
foreach ($db->query($query_workshops) as $row){
    $workshops = $row;
}

?>
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
<body style="padding-top: 90px;">

<!--Navigation bar start =================================================-->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
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
                <li><a href="../contact/contact_us.php">Contact US</a>
                <li class="active"><a href="#" >Details</a></li>
            </ul>
        </div>
    </div>
</nav>
<!--/ Navigation bar end =================================================-->

<!-- details ========================================================-->
<div class="container">
    <div class="row" style="height: 600px">

        <div class="col-md-8 col-md-offset-2 for_height">
            <div class="pannel panel-success">
                <div class="panel-heading">
                    <h1 class="text-center"><i class="<?php echo $workshops['icons']?>"></i> <?php  echo $workshops['titles'];?></h1>
					
				</div>
                <div class="pannel-body">
					<h4>Start's from: </h4><p><?php echo $workshops['times'];?></p>
                    <h4>Trainer: </h4><p><?php echo $workshops['trainers'];?></p>
                    <h4>Prerequisite: </h4><p><?php echo $workshops['prerequisite'];?></p>
                    <h4>Details about the workshop: </h4><p><?php echo $workshops['descriptions'];?></p>
                </div>
                <hr style="background: #dff0d8;height: 2px">
                <a href="admission.php">Get Admission</a>
            </div>
        </div>

    </div>
</div>

<!--Footer-->
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

