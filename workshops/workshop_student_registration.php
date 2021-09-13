<?php

// connection to db
$db = new PDO('mysql:host=localhost;dbname=seip;charset=utf8mb4', 'root', '');

//build query
$query_workshops = "SELECT * FROM `workshops` WHERE id = ".$_GET['id'];

//execute the query using php
foreach ($db->query($query_workshops) as $row){
    $workshops = $row;
    // var_dump($row);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SARON Database Management</title>
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
                <li><a href="../index.php">Home <span class="sr-only">(current)</span></a></li>
                <li class="active"><a href="../students/registration.php">Registration</a></li>
                <li><a href="../contact/contact_us.php">Contact US</a>

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
<!--/ Navigation bar end =================================================-->

<!--  form-->
<div class="container">
    <div class="row">

        <form class="form-horizontal" action="workshop_student_registration_done.php" method="post">
            <fieldset style="border: solid rgba(25,128,126,0.73) 2px"><h3>Registration Form For SARON Training:</h3>
                                         
            </fieldset>
            <br>
            <fieldset style="border: solid #19807e 2px"><h3>Student Details</h3>
                  <div class="form-group">
                    <label for="course" class="col-sm-2 control-label">First Preference: </label>
                    <div class="col-sm-3">
                        <select class="form-control" id="course" name="course" type="text">

            <option value="<?php echo $workshops["titles"]; ?>"><?php echo $workshops["titles"] ?></option>
                            
                        </select>
                    </div>
                    <label for="email" class="col-sm-2 control-label">Enter Email Address: </label>
                    <div class="col-sm-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="abc@example.com">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Name: </label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                    </div>
                     <label for="nid" class="col-sm-2 control-label">Mobile Number: </label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="nid" name="mobile"                     placeholder="+88018-000000" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="father_name" class="col-sm-2 control-label">Father Name: </label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="father_name" name="father_name"
                               placeholder="Father's Name" required>
                    </div>
                    <label for="mother_name" class="col-sm-2 control-label">Mother Name: </label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="mother_name" name="mother_name"
                               placeholder="Mother's Name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="gender" class="col-sm-2 control-label">Gender: </label>
                    <div class="col-sm-3">
                        <select class="form-control" id="gender" name="gender">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    <label for="nid" class="col-sm-2 control-label">NID Number: </label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="nid" name="nid"
                               placeholder="1234567890" required>
                    </div>
                </div>
                

            </fieldset>
            <br>

            <br>

            <br>

            <br>

            <br>
            <button type="reset" class="btn btn-primary">Reset</button>
            <button type="submit" value="Submit" class="btn btn-green">Submit</button>
        </form>
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
