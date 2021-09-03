<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SEIP Database Management</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords"
          content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
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
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
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
                <li class="active"><a href="course_add.php">Add New Course</a></li>
                <li><a href="course_assign.php">Assign Course</a></li>
                <li><a href="course_view.php">View All Courses</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">View Students <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li ><a href="../students/students_view.php">View All Students</a></li>
                        <li ><a href="../students/students_assign_course.php">View Assigned Students</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--/ Navigation bar end =================================================-->

<!--  form-->
<div class="container">
    <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div style="height: 600px;padding-top: 70px">
                    <form  action="course_add_done.php" method="post">
                        <label for="">Enter Course Title:</label>
                        <input name="titles" type="text" class="form-control"
                               placeholder="Enter Course Title" >

                        <br>
                        <button type="submit" class="btn btn-green" >Add</button>
                        <br>
                        <hr>
                    </form>
                </div>

            </div>
        <br>
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

<!-- Latest compiled and minified JavaScript -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/jquery.easing.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>

</body>
</html>
