<?php
//connection to database
$db = new PDO('mysql:host=localhost;dbname=seip;charset=utf8mb4', 'root', '');

//building query
$query = "SELECT * FROM `students` ORDER BY seip_id ASC";
//execution
//$stmt = $db->query($query);
//$students = $stmt->fetchAll(PDO::FETCH_ASSOC);
$sl_no =1;
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
            <a class="navbar-brand" href="../dashboards/admin_index.php"><img src="../assets/images/bitm.png" alt="logo" height="40" width="100"></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right" style="padding-top: 10px">
                <li><a href="../dashboards/admin_index.php">Admin Panel</a></li>
                <li><a href="../courses/course_add.php">Add New Course</a></li>
                <li><a href="../courses/course_assign.php">Assign Course</a></li>
                <li><a href="../courses/course_view.php">View All Courses</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">View Students <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="active"><a href="students_view.php">View All Students</a></li>
                        <li ><a href="students_assign_course.php">View Assigned Students</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--table start =========================================================-->
<section id ="feature" class="section-padding">
    <div class="container">
        <div class="row">
            <div class=" col-md-12">

                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <a type="button" target="_blank" class="btn btn-green" href="../pdf_genarator/student_all_detail.php"> Print All Student Detail </a> 
                        <th>Id</th>                        
                        <th>Name</th>
                        <th>Father's Name</th>
                        <th>Mother's Name</th>
                        <th>Gender</th>
                        <th>NID</th>
                        <th>Email</th>
                        <th>Course</th>                        
                        <th>Education</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($db->query($query) as $student):

                        ?>

                        <tr>
                            <td><?php echo $sl_no++; ?></td>
                            
                            <td> <a href="students_details.php?id=<?php echo $student['id'];?>"> <?= $student['name'] ?> </a> </td>
                            <td><?= $student['father_name'] ?></td>
                            <td><?= $student['mother_name'] ?></td>
                            <td><?= $student['gender'] ?></td>
                            <td><?= $student['nid'] ?></td>

                            <td> <?php $Semail = $student['email'] ?>
                                <?php 
                                if (strlen($Semail)>5) {
                                    echo substr($Semail,0,5)."...."."<br>";
                                }else{
                                    echo $Semail;

                                }
                                 ?>

                            </td>
                            <td><?= $student['course'] ?></td>
                            <td><?= $student['education'] ?></td>                          

                            <td>
                               

                                <a style="padding-right: 28px;padding-left: 28px;"
                                   class="btn btn-primary"
                                   href="students_edit.php?id=<?php echo $student['id'];?>">Edit</a>

                                <a class="btn btn-danger"
                                   href="students_delete.php?id=<?php echo $student['id'];?>">Delete</a>

                            </td>
                        </tr>
                        <?php
                    endforeach;
                    ?>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</section>
<!--/  end =========================================================-->

<!-- Latest compiled and minified JavaScript -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/jquery.easing.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<!--<script src="js/custom.js"></script>-->

</body>
</html>
