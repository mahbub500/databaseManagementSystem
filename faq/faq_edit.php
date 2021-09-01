<?php

// connection to db
$db = new PDO('mysql:host=localhost;dbname=seip;charset=utf8mb4', 'root', '');

//build query
$query = "SELECT * FROM `faq` WHERE id = ".$_GET['id'];

//execute the query using php
foreach ($db->query($query) as $row){
    $faq = $row;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SEIP Database Management</title>
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
<body style="padding-top: 80px">
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
                <li><a href="../dashboards/admin_index.php">Admin Panel</a></li>
                <li><a href="faq_view.php">View Content</a></li>
                <li><a href="faq_add.php">Add Content</a></li>

            </ul>
        </div>
    </div>
</nav>

<div class="container">

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="header-section text-center">
                <h2>Edit  Content</h2>
                <hr class="bottom-line">
            </div>
            <form action="faq_edit_done.php" method="post">

                <input type="hidden" class="form-control" id="id" name="id" placeholder="ID"
                       value="<?=$faq['id'];?>">
                <br>
                <div class="form-group">
                    <label for="questions">Questions:</label>
                    <input type="text" class="form-control" id="questions" name="questions"
                           placeholder="Enter Question" value="<?=$faq['questions'];?>">
                </div>
                <br>
                <div class="form-group">
                    <label for="answers">Answers:</label>
                    <input type="text" class="form-control" id="answers" name="answers"
                           placeholder="Enter Answers" value="<?=$faq['answers'];?>">
                </div>
                <br>
                <button type="submit" class="btn btn-green" >Submit</button>

             </form>
            <br>
        </div>
    </div>
</div>
<!-- Latest compiled and minified JavaScript -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/jquery.easing.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<!--<script src="js/custom.js"></script>-->
</body>
</html>