<?php
//connection to database
$db = new PDO('mysql:host=localhost;dbname=seip;charset=utf8mb4', 'root', '');

//building query
$query = "SELECT * FROM `teachers` ORDER BY id";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SEIP Database Management</title>
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
            <a class="navbar-brand" href="../index.php"><img src="../assets/images/bitm.png" alt="logo" height="40" width="100"></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right" style="padding-top: 10px">
                <li><a href="../dashboards/admin_index.php">Admin Panel</a></li>
                <li class="active"><a href="teachers_view.php">View Trainers</a></li>
                <li ><a href="teachers_add.php">Add Trainers</a></li>
            
            </ul>
        </div>
    </div>
</nav>
<!--Feature start =========================================================-->
<section id ="feature" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="header-section text-center">
                <h2>Meet Our Trainers</h2>
                
                <hr class="bottom-line">
            </div>

            <div class="container">
                <div class="row">
                    <?php
                    	foreach ($db->query($query) as $teachers):
                    ?>
                        <div class="col-md-8 col-md-offset-2">
             
                           <div class="heading pull-right">
                              	<img src ="images/<?php echo $teachers['image'];?>"height="100px" width="100px" >
                                <h4 class="text-justify">Name: <?php echo $teachers['names'];?></h4>
                                <p class="text-justify">Phone Number: <?php echo $teachers['phones'];?></p>
                                <p class="text-justify">Email: <?php echo $teachers['emails'];?></p>
                                <p class="text-justify">Educations: <?php echo $teachers['educations'];?></p>

                                <p class="text-justify">
                                    Experiences: <?php
                                    $string= $teachers['experiences'];
                                    if (strlen($string)>50)
                                    {
                                        echo substr($string,0,600)."...."."<br>";
									}
                                    else{
                                        echo $string."<br>";
									}
                                    ?>
                                    <?php
										echo "<a class='btn btn-green' 
                                        style=\"margin-top: 10px; padding:5px;border-left-width: 2px;border-right-width: 2px\" 
                                        href='teachers_details.php?id=".$teachers['id']."'>Read more</a>";

                                        echo "<a class='btn btn-green' 
                                        style=\"margin-top: 10px; padding:5px;border-left-width: 18px;border-right-width: 18px;margin-left:1px\" 
                                        href='teachers_edit.php?id=".$teachers['id']."'>Edit</a>";


                                        echo "<a class='btn btn-green' 
                                        style=\"margin-top: 10px; padding:5px;border-left-width: 10px;border-right-width: 10px;margin-left:1px\"  
                                        href='teachers_delete.php?id=".$teachers['id']."'>Delete</a>";
                                        echo "<hr>";
									?>
                                </p>
                            </div>
                            
                        </div>
                        <?php
                    		endforeach;
                    	?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ feature end =========================================================-->
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
