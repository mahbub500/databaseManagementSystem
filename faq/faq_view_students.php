<?php
//connection to database
$db = new PDO('mysql:host=localhost;dbname=seip;charset=utf8mb4', 'root', '');

//building query
$query = "SELECT * FROM `faq` ORDER BY id";
$query1 = "SELECT * FROM `faq` WHERE `subjects`='Questions about PHP'";
$query2 = "SELECT * FROM `faq` WHERE `subjects`='Questions about HTML'";
$query3 = "SELECT * FROM `faq` WHERE `subjects`='Questions about JavaScript'";

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Student Panel</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../dashboards/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dashboards/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dashboards/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../dashboards/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="../dashboards/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="../dashboards/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="../dashboards/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../dashboards/plugins/daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="../dashboards/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">
    <!--header ==========================================================================-->
    <header class="main-header">
        <!-- Logo -->
        <a href="../dashboards/student_index.php" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <!--<span class="logo-mini"><b>A</b>LT</span>-->
            <!-- logo for regular state and mobile devices -->
            <!--<span class="logo-lg"><b>Admin</b>LTE</span>-->
            <img src="../assets/images/bitm.png" alt="logo" height="40" width="100">
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="hidden-xs">Student</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <p>Welcome. <br>
                                    Visit your Panel.
                                    <small>or sign out</small>
                                </p>
                            </li>
                            <li class="user-footer">
                                <div class="pull-left">
                                    <!--<a href="#" class="btn btn-default btn-flat">Profile</a>-->
                                </div>
                                <div class="pull-right">
                                    <a href="../log/log_out.php" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!--aside menu===================================================================== -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="../dashboards/dist/img/flower.PNG" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Welcome.</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <ul class="sidebar-menu">
                <li class="header">MAIN NAVIGATION</li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-dashboard text-success"></i> <span>Dashboard</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="../dashboards/student_index.php"><i class="fa fa-user-secret "></i> Student Panel</a></li>
                        <li><a href="../index.php"><i class="fa fa-circle-o"></i>Website homepage</a></li>
                    </ul>
                </li>

                <!--Profile-->
                <!--                <li>-->
                <!--                    <a href="#">-->
                <!--                        <i class="fa fa-user"></i> <span>Profile</span>-->
                <!--                        <span class="pull-right-container">-->
                <!--                            <i class="fa fa-angle-left pull-right"></i>-->
                <!--                        </span>-->
                <!--                    </a>-->
                <!--                    <ul class="treeview-menu">-->
                <!--                        <li><a href="../workshops/workshop_view.php"><i class="fa fa-circle-o"></i> View Profile</a></li>-->
                <!--                        <li><a href="../workshops/workshop_add.php"><i class="fa fa-edit"></i> Edit Profile</a></li>-->
                <!--                    </ul>-->
                <!--                </li>-->

                <!--Notice-->
                <li class="active">
                    <a href="../notice/notice_view_students.php">
                        <i class="fa fa-bullhorn"></i> <span>Notice</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-yellow">View</small>
                        </span>
                    </a>
                </li>

                <!--mail-->
                <li>
                    <a href="../mail_student/student_mail.html">
                        <i class="fa fa-envelope "></i> <span>Mail</span>
                        <span class="pull-right-container">
                            <small class="label pull-right bg-red">Send</small>
                        </span>
                    </a>
                </li>

                <!--Feedback-->
                <li>
                    <a href="#">
                        <i class="fa  fa-comments-o"></i> <span>Feedback</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="../feedback/feedback_write.php"><i class="fa fa-edit"></i>Write Feedback</a></li>
                    </ul>
                </li>

                <!--teachers-->
                <li>
                    <a href="#">
                        <i class="fa fa-group "></i><span>Trainers</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="../teachers/teachers_view_student.php"><i class="fa fa-edit"></i>View Trainers INFO</a></li>
                    </ul>
                </li>

                <!--multi education-->
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-share"></i> <span>Education</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <!--<li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>-->
                        <li>
                            <a href="#"><i class="fa fa-video-camera"></i>Video Tutorials
                                <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                          </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../video/video_view_students.php"><i class="fa fa-play"></i> View All Video</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-file-text-o"></i>Content
                                <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                  </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../faq/faq_view_students.php"><i class="fa fa-play"></i> View All Content</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
        </section>
    </aside>
<!--============================================================    -->

    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <!--  ===============================================================================-->
            <div class="row">
                <section class="col-lg-8 connectedSortable">
                    <!--mail box ===================================================-->
                    <section id ="feature" class="section-padding">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="page-header" align="center">
                                        <h1>Frequently Asked Questions</h1>
                                    </div>
                                    <!--    ============================================-->
                                    <div class="panel-group" id="accordion">
                                        <?php
                                        $check=1;
                                        foreach ($db->query($query1) as $faq){
                                        $fag=$faq;
                                        ?>
                                        <?php
                                        if ($check==1){
                                        ?>
                                            <div class="faqHeader"><?php echo $fag["subjects"];?></div>
                                            <?php
                                        }
                                        ?>
                                        <div class="question-answer">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <!--<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#">-->
                                                        <?php echo $fag['questions'];?></a>
                                                    </h4>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse in">
                                                    <div class="panel-body">
                                                        <?php echo $fag['answers'];?>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            $check=0;
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <!--    ============================================-->
                                    <div class="panel-group" id="accordion">
                                        <?php
                                        $check=1;
                                        foreach ($db->query($query2) as $faq){
                                        $fag=$faq;
                                        ?>
                                        <?php
                                        if ($check==1){
                                            ?>
                                            <div class="faqHeader"><?php echo $fag["subjects"];?></div>
                                            <?php
                                        }
                                        ?>
                                        <div class="question-answer">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <!--<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#">-->
                                                        <?php echo $fag['questions'];?></a>
                                                    </h4>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse in">
                                                    <div class="panel-body">
                                                        <?php echo $fag['answers'];?>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            $check=0;
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <!--    ============================================-->
                                    <div class="panel-group" id="accordion">
                                        <?php
                                        $check=1;
                                        foreach ($db->query($query3) as $faq){
                                        $fag=$faq;
                                        ?>
                                        <?php
                                        if ($check==1){
                                            ?>
                                            <div class="faqHeader"><?php echo $fag["subjects"];?></div>
                                            <?php
                                        }
                                        ?>
                                        <div class="question-answer">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <!--<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#">-->
                                                        <?php echo $fag['questions'];?></a>
                                                    </h4>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse in">
                                                    <div class="panel-body">
                                                        <?php echo $fag['answers'];?>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            $check=0;
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <!--    ============================================-->
                                </div>
                            </div>
                        </div>
                        <style>
                            .faqHeader {
                                font-size: 27px;
                                margin: 20px;
                            }
                            .panel-heading [data-toggle="collapse"]:after {
                                font-family: 'Glyphicons Halflings';
                                content: "\e072"; /* "play" icon */
                                float: right;
                                color: #F58723;
                                font-size: 18px;
                                line-height: 22px;
                                /* rotate "play" icon from > (right arrow) to down arrow */
                                -webkit-transform: rotate(-90deg);
                                -moz-transform: rotate(-90deg);
                                -ms-transform: rotate(-90deg);
                                -o-transform: rotate(-90deg);
                                transform: rotate(-90deg);
                            }
                            .panel-heading [data-toggle="collapse"].collapsed:after {
                                /* rotate "play" icon from > (right arrow) to ^ (up arrow) */
                                -webkit-transform: rotate(90deg);
                                -moz-transform: rotate(90deg);
                                -ms-transform: rotate(90deg);
                                -o-transform: rotate(90deg);
                                transform: rotate(90deg);
                                color: #454444;
                            }
                        </style>
                        <hr>
                    </section>
                </section>
            </div>
        </section>
    </div>
<!---------------------------------------------------->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            Edited by:<b><a href="../contact/code_finder.php">Code_Finder</a></b>
        </div>
        <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
        reserved.
    </footer>

    <div class="control-sidebar-bg"></div>
</div>

<!-- jQuery 2.2.3 -->
<script src="../dashboards/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../dashboards/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="../dashboards/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="../dashboards/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../dashboards/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../dashboards/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../dashboards/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="../dashboards/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../dashboards/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../dashboards/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../dashboards/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../dashboards/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dashboards/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dashboards/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dashboards/dist/js/demo.js"></script>
</body>
</html>