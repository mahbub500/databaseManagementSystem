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
            <a class="navbar-brand" href="#"><img src="../assets/images/bitm.png" alt="logo" height="40" width="100"></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right" style="padding-top: 10px">
                <li><a href="../dashboards/admin_index.php">Admin Panel</a></li>
                <li><a href="seip_view.php">View SEIP_Courses</a></li>
                <li class="active"><a href="seip_add.php">Add SEIP_Courses</a></li>
            </ul>
        </div>
    </div>
</nav>

<!--form start =========================================================-->
<div class="container">

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="header-section text-center">
                <h2>Add New SEIP_Courses Here.</h2>
                <p>Need to provide Font-awesome icon, Title, and Description and press submit</p>
                <hr class="bottom-line">
            </div>
            <form action="seip_add_done.php" method="post">
                Icon: <input name="icons" type="text" class="form-control" placeholder="Enter Font Awesome Icon. Ex: fa fa-money" >
                <br>
                Titles: <input name="titles" type="text" class="form-control" placeholder=" Enter Title" required >
                <br>
                Time: <input name="times" type="date" class="form-control" placeholder=" Enter Time" required >
                <br>
                Trainers: <input name="trainers" type="text" class="form-control" placeholder=" Enter Trainers Name" required >
                <br>
                Prerequisite: <input name="prerequisite" type="text" class="form-control" placeholder=" Enter Prerequisite Detailes" required >
                <br>
                Descriptions: <textarea name="descriptions" class="form-control" rows="10" placeholder="Enter Description" required >
                </textarea>
                <br>
                <button type="submit" class="btn btn-green" >Submit</button>

            </form>
            <br>
            <div class="panel panel-danger" style="background-color:#eb9a90 ">
                <p class="text-center" style="color: #9c3328">Enter at least 60 or more character for Description.</p>
            </div>
        </div>

    </div>
</div>
<!--/ form end =========================================================-->
<!--Footer start-->
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
<!-- Footer-->
<!-- Latest compiled and minified JavaScript -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/jquery.easing.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<!--<script src="js/custom.js"></script>-->

</body>
</html>
