<?php
//connection to database
$db = new PDO('mysql:host=localhost;dbname=seip;charset=utf8mb4', 'root', '');

//building query
$query = "SELECT * FROM `feedback` ORDER BY id ASC";
//execution
//$stmt = $db->query($query);
//$students = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>SARON Database Management</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes,
    free template, free bootstrap, free website template">

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
<body style="padding-top: 40px">
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
            <a class="navbar-brand" href="#"><img src="../assets/images/bitm.png" alt="logo" height="40" width="100"></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right" style="padding-top: 10px">
                <li><a href="../dashboards/admin_index.php">Admin Panel</a></li>
                <li class="active"><a href="feedback_view.php">View Feedback</a></li>
            </ul>
        </div>
    </div>
</nav>
<!--feedback start =========================================================-->
<section id ="feature" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="header-section text-center">
                <h2>Feedbacks From Students</h2>
                <hr class="bottom-line">
            </div>

            <div class="container">
                <div class="row">
                    <?php
                    foreach ($db->query($query) as $feedback):
                        ?>
                        <div class="col-md-10">
                            <div class="heading pull-right">
                                <h2 class="text-justify">Subject: <?php echo $feedback['subjects'];?></h2>
                                <p class="text-justify">Description: <?php echo $feedback['descriptions'];?></p>
                                <p class="text-justify">Student's SEIP ID: <?php echo $feedback['sender_seip_id'];?></p>

                                <p class="text-justify">
                                    <?php

                                    echo "<a class='btn btn-danger' 
                                        style=\"margin-top: 10px; padding:5px;border-left-width: 10px;border-right-width: 10px;margin-left:1px\"  
                                        href='feedback_delete.php?id=".$feedback['id']."'>Delete</a>";
                                        echo "<hr>";

                                    ?>
                                </p>
                            </div>
                            <div class="fea-img pull-left">
                                <i class="<?php echo $workshops['icons']?>"></i>
                            </div>
                        </div>
                        <?php
                    endforeach;
                    ?>
                </div>
            </div>
            <hr>
        </div>
    </div>
</section>
<!--/  end =========================================================-->
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
        ??2021 Web Application Development with PHP and Frameworks (WDPF) . All rights reserved
        <div class="credits">
            Designed by <a href="#">SARON TEAM</a>
        </div>
    </div>
</footer>
<!-- Latest compiled and minified JavaScript -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/jquery.easing.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<!--<script src="js/custom.js"></script>-->

</body>
</html>
