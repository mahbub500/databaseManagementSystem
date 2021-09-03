<?php
session_start();
if ($_SESSION["user"]=='')
{
	header ('Location:../index.php');
}
else
{
//	echo $_SESSION['user'];
?>
<?php
    //connection to database
    $db = new PDO('mysql:host=localhost;dbname=seip;charset=utf8mb4', 'root', '');

    //building query
    $query = "SELECT COUNT(id) FROM `notice`";
    $query_teacher = "SELECT COUNT(id) FROM `teachers`";
    $query_video = "SELECT COUNT(id) FROM `videos`";
    $query_content= "SELECT COUNT(id) FROM `faq`";

    $query_male="SELECT COUNT(gender) FROM students WHERE gender='male' AND seip_id !=0";
    $query_female="SELECT COUNT(gender) FROM students WHERE gender='female' AND seip_id !=0";
    $query_assigned_students="SELECT COUNT(seip_id) FROM students WHERE seip_id !=0 ";
    $query_certified= "SELECT COUNT(certified) FROM students WHERE certified='yes' and seip_id !=0";
    $query_applied_students="SELECT COUNT(seip_id) FROM students WHERE seip_id=0";
    $query_not_certified= "SELECT COUNT(certified) FROM students WHERE certified='no' and seip_id !=0";
    $query_contact= "SELECT COUNT(id) FROM contact";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Panel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

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
    <a href="admin_index.php" class="logo">
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
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <p>
                  Hello Admin.
                  <small>Member since Nov. 2016</small>
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
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
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
          <img src="dist/img/flower.PNG" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Welcome Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard text-success"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="admin_index.php"><i class="fa fa-user-secret "></i> Admin Panel</a></li>
            <li><a href="../index.php" target="_blank"><i class="fa fa-circle-o"></i>Website homepage</a></li>
          </ul>
        </li>
        <!--features-->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-star"></i>
            <span>Features</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../features/feature_view.php"><i class="fa fa-circle-o"></i> View Features</a></li>
            <li><a href="../features/feature_add.php"><i class="fa fa-edit"></i> Add New Features</a></li>
          </ul>
        </li>
        <!--workshops-->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-word-o"></i>
            <span>Workshops</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../workshops/workshop_view.php"><i class="fa fa-circle-o"></i> View Workshops</a></li>
            <li><a href="../workshops/workshop_add.php"><i class="fa fa-edit"></i> Add New Workshop</a></li>
          </ul>
        </li>
        <!--SEIP Course-->
       <!--  <li class="treeview">
          <a href="#">
            <i class="fa fa-file-text-o"></i>
            <span>SEIP Course</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../seip_course/seip_view.php"><i class="fa fa-circle-o"></i> View SEIP Course</a></li>
            <li><a href="../seip_course/seip_add.php"><i class="fa fa-edit"></i> Add SEIP Course</a></li>
          </ul>
        </li> -->
        <!--course-->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Courses</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../courses/course_view.php"><i class="fa fa-circle-o"></i> View All Courses</a></li>
            <li><a href="../courses/course_add.php"><i class="fa fa-edit "></i> Add New Course</a></li>
          </ul>
        </li>
        <!--Students-->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Students</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../students/students_view.php"><i class="fa fa-circle-o"></i> View All Students primary info</a></li>
            <li><a href="../students/students_assign_course.php"><i class="fa fa-circle-o"></i> Assign Students here</a></li>
          </ul>
        </li>
        <!--Assign Course-->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-clone"></i> <span>Assign Course</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../courses/course_assign.php"><i class="fa fa-circle-o"></i> Assign Courses To Students</a></li>
            <!--<li><a href="../courses/"><i class="fa fa-edit "></i> Edit Assign Courses</a></li>-->
          </ul>
        </li>
        <!--Teachers-->
        <li class="treeview">
          <a href="#">
            <i class="fa  fa-user-plus"></i> <span>Trainers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../teachers/teachers_view.php"><i class="fa fa-circle-o"></i> View Trainer's Information</a></li>
            <li><a href="../teachers/teachers_add.php"><i class="fa fa-edit "></i> Add New Trainers</a></li>
          </ul>
        </li>
       
        <!--Notice-->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bullhorn"></i> <span>Notice</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../notice/notice_view_admin.php"><i class="fa fa-circle-o"></i> View Previous Notice</a></li>
            <li><a href="../notice/notice_write.php"><i class="fa fa-edit "></i> Write Notice</a></li>
          </ul>
        </li>

        <!--Feedback-->
        <li>
          <a href="#">
            <i class="fa  fa-comments-o"></i> <span>Feedback</span>
            <span class="pull-right-container">
              <!-- <small class="label pull-right bg-yellow">View</small> -->
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../feedback/feedback_view.php"><i class="fa fa-circle-o"></i> View Feedback</a></li>
            <!--<li><a href=""><i class="fa fa-edit "></i> Edit Assign Courses</a></li>-->
          </ul>
        </li>

          <!--sign up form-->
          <li class="treeview">
              <a href="#">
                  <i class="fa fa-sign-in"></i> <span>Sign Up new students</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                  <li><a href="../sign_up_student/sign_up.php"><i class="fa fa-circle-o"></i> Sign Up Form</a></li>
                  <!--<li><a href="../notice/notice_write.php"><i class="fa fa-edit "></i> Write Notice</a></li>-->
              </ul>
          </li>

       

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
        <div class="row">
            <div>
                <?php
                foreach ($db->query($query) as $notice):
                    ?>
                    <div class="col-lg-6 col-xs-6">
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h4>Number Of All Notices:</h4>
                                <h3><?php echo $notice['COUNT(id)'];?></h3>
                            </div>
                            <div class="icon">
                                <i class="fa  fa-clone"></i>
                            </div>
                            <a href="../notice/notice_view_admin.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <?php
                endforeach;
                ?>
            </div>

            


            <!-- contat start -->
              <div>
                <?php
                foreach ($db->query($query_contact) as $contact):
                  ?>


                    <div class="col-lg-6 col-xs-6">
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h4>Number Of All Contact Request:</h4>
                                <h3><?php echo $contact['COUNT(id)'];?></h3>
                            </div>
                            <div class="icon">
                                <i class="fa  fa-clone"></i>
                            </div>
                            <a href="../contact/contact_us_view.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <?php
                endforeach;
                ?>
            </div>
            <!-- contat end -->

            <!-- video start -->
            <!-- <div>
                <?php
              //  foreach ($db->query($query_video) as $video):
                    ?>
                    <div class="col-lg-6 col-xs-6">
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h4>Number Of All Videos:</h4>
                                <h3><?php // echo $video['COUNT(id)'];?></h3>
                            </div>
                            <div class="icon">
                                <i class="icon ion-videocamera"></i>
                            </div>
                            <a href="../video/video_view_admin.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <?php
                //endforeach;
                ?>
            </div> -->

             <!-- video start -->

            <div>
                <?php
                foreach ($db->query($query_teacher) as $trainers):
                    ?>
                    <div class="col-lg-6 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <h4>Number Of All Trainers:</h4>
                                <h3><?php echo $trainers['COUNT(id)'];?></h3>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person"></i>
                            </div>
                            <a href="../teachers/teachers_view.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <?php
                endforeach;
                ?>
            </div>

            <div>
                <?php
                foreach ($db->query($query_content) as $content):
                    ?>
                    <div class="col-lg-6 col-xs-6">
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h4>Number Of All Contents:</h4>
                                <h3><?php echo $content['COUNT(id)'];?></h3>
                            </div>
                            <div class="icon">
                                <i class="icon ion-ios-book-outline"></i>
                            </div>
                            <a href="../faq/faq_view.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <?php
                endforeach;
                ?>
            </div>

            <div>
                <?php
                foreach ($db->query($query_male) as $male):
                    ?>
                    <div class="col-lg-6 col-xs-6">
                        <div class="small-box bg-blue">
                            <div class="inner">
                                <h4>Number Of Male Students:</h4>
                                <h3><?php echo $male['COUNT(gender)'];?></h3>
                            </div>
                            <div class="icon">
                                <i class="icon ion-man"></i>
                            </div>
                            <a href="../students/students_male_view.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <?php
                endforeach;
                ?>
            </div>

            <div>
                <?php
                foreach ($db->query($query_female) as $female):
                    ?>
                    <div class="col-lg-6 col-xs-6">
                        <div class="small-box bg-primary">
                            <div class="inner">
                                <h4>Number Of Female Students:</h4>
                                <h3><?php echo $female['COUNT(gender)'];?></h3>
                            </div>
                            <div class="icon">
                                <i class="icon ion-woman"></i>
                            </div>
                            <a href="../students/students_female_view.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <?php
                endforeach;
                ?>
            </div>

            <div>
                <?php
                foreach ($db->query($query_assigned_students) as $students):
                    ?>
                    <div class="col-lg-6 col-xs-6">
                        <div class="small-box bg-aqua-gradient">
                            <div class="inner">
                                <h4>Number Of Total Students:</h4>
                                <h3><?php echo $students['COUNT(seip_id)'];?></h3>
                            </div>
                            <div class="icon">
                                <i class="icon ion-ios-people"></i>
                            </div>
                            <a href="../students/students_assign_course.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <?php
                endforeach;
                ?>
            </div>

            <div>
                <?php
                foreach ($db->query($query_certified) as $certified):
                    ?>
                    <div class="col-lg-6 col-xs-6">
                        <div class="small-box bg-lime-active">
                            <div class="inner">
                                <h4>Number Of Certified Students:</h4>
                                <h3><?php echo $certified['COUNT(certified)'];?></h3>
                            </div>
                            <div class="icon">
                                <i class="icon ion-android-checkbox-outline"></i>
                            </div>
                            <a href="../students/students_assign_course.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <?php
                endforeach;
                ?>
            </div>

            <div>
                <?php
                foreach ($db->query($query_applied_students) as $applied):
                    ?>
                    <div class="col-lg-6 col-xs-6">
                        <div class="small-box bg-olive-active">
                            <div class="inner">
                                <h4>Number Of Applied Students:</h4>
                                <h3><?php echo $applied['COUNT(seip_id)'];?></h3>
                            </div>
                            <div class="icon">
                                <i class="icon ion-ios-personadd-outline"></i>
                            </div>
                            <a href="../students/students_applied_view.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <?php
                endforeach;
                ?>
            </div>

            <div>
                <?php
                foreach ($db->query($query_not_certified) as $not_certified):
                    ?>
                    <div class="col-lg-6 col-xs-6">
                        <div class="small-box bg-navy">
                            <div class="inner">
                                <h4>Number Of Not Certified Students:</h4>
                                <h3><?php echo $not_certified['COUNT(certified)'];?></h3>
                            </div>
                            <div class="icon">
                                <i class="icon ion-android-sad"></i>
                            </div>
                            <a href="../students/students_assign_course.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <?php
                endforeach;
                ?>
            </div>


        </div>
      
    </section>
    <!-- /.content -->
  </div>
  <!-- footer ===================================================================================== -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      Edited by:<b><a href="../contact/code_finder.php">Code_Finder</a></b>
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <!--<li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>-->
      <!--<li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>-->
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
<?php

}

?>