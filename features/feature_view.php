<?php
//connection to database
$db = new PDO('mysql:host=localhost;dbname=seip;charset=utf8mb4', 'root', '');

//building query
$query = "SELECT * FROM `features` ORDER BY id";


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
            <a class="navbar-brand" href="../dashboards/admin_index.php"><img src="../assets/images/bitm.png" alt="logo" height="40" width="100"></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right" style="padding-top: 10px">
                <li><a href="../dashboards/admin_index.php">Admin Panel</a></li>
                <li class="active"><a href="feature_view.php">View Features</a></li>
                <li><a href="feature_add.php">Add Features</a></li>
            </ul>
        </div>
    </div>
</nav>

<!--Feature start =========================================================-->
<section id ="feature" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="header-section text-center">
                <h2>Our Specialty</h2>
                <p>This is not a feel-good implication, but really crucial for the whole learning process to work.</p>
                <hr class="bottom-line">
            </div>

            <div class="feature-info">
                <div class="fea">
                    <?php
                    foreach ($db->query($query) as $features):
                        ?>
                        <div class="col-md-10 col-md-offset-1">
                            <div class="heading pull-right">
                                <h4 class="text-justify"><?php echo $features['titles'];?></h4>
                                <p class="text-justify">
                                    <?php
                                    $string= $features['descriptions'];
                                    if (strlen($string)>50)
                                    {
                                        echo substr($string,0,250)."...."."<br>";

                                        echo "<a class='btn btn-green' 
                                        style=\"margin-top: 10px; padding:5px;border-left-width: 2px;border-right-width: 2px\" 
                                        href='feature_details.php?id=".$features['id']."'>Read more</a>";

                                        echo "<a class='btn btn-green' 
                                        style=\"margin-top: 10px; padding:5px;border-left-width: 18px;border-right-width: 18px;margin-left:1px\" 
                                        href='feature_edit.php?id=".$features['id']."'>Edit</a>";


                                        echo "<a class='btn btn-green' 
                                        style=\"margin-top: 10px; padding:5px;border-left-width: 10px;border-right-width: 10px;margin-left:1px\"  
                                        href='feature_delete.php?id=".$features['id']."'>Delete</a>";
                                        echo "<hr>";
                                    }
                                    else{
                                        echo $string."<br>";


                                    }
                                    ?>
                                </p>
                            </div>
                            <div class="fea-img pull-left">
                                <i class="<?php echo $features['icons']?>"></i>
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
<!--/ feature end =========================================================-->
<!--Footer start-->
<footer id="footer" class="footer">
    <div class="container text-center">
        <ul class="social-links">
            <li>
                <a href="https://www.facebook.com/BASIS.BITM/" target="_blank">
                    <i class="fa fa-facebook fa-fw"></i>
                </a>
            </li>

            <li>
                <a href="https://plus.google.com/103842390399681113250" target="_blank">
                    <i class="fa fa-google-plus fa-fw"></i>
                </a>
            </li>

            <li>
                <a href="https://www.linkedin.com/company/basis-institute-of-technology-&-management-bitm-"
                   target="_blank">
                    <i class="fa fa-linkedin fa-fw"></i>
                </a>
            </li>
        </ul>
        ©2017 SEIP_Database Management. All rights reserved
        <div class="credits">
            Designed by <a href="../contact/code_finder.php">Code_Finder</a>
        </div>
    </div>
</footer>
<!-- Footer-->
<!-- Latest compiled and minified JavaScript -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/jquery.easing.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<!--<script src="js/custom.js"></script>-->

</body>
</html>
