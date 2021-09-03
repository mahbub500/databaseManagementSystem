<?php
/**
 * Created by PhpStorm.
 * User: Hello
 * Date: 03-Jun-17
 * Time: 1:58 AM
 */
//connection to database
$db = new PDO('mysql:host=localhost;dbname=seip;charset=utf8mb4', 'root', '');

//manage posted data
if(strtolower($_SERVER['REQUEST_METHOD']) == 'post') {

    $query = "DELETE FROM `maping_tables` WHERE students_id =".$_POST['student_id'];
    $db->exec($query);

    $student_id = $_POST['student_id'];
    $course_ids = $_POST['course_ids'];
    foreach($course_ids as $course_id){
        $query = "INSERT INTO `maping_tables` ( `students_id`, `courses_id`) 
                  VALUES ( '".$_POST['student_id']."', '".$course_id."');";
        $db->exec($query);
    }

//    header('location:../students/students_assign_course.php');
}

//build query
$query = "SELECT * FROM `students` WHERE id =".$_GET['id'];

//execution
$stmt = $db->query($query);
$student = $stmt->fetch(PDO::FETCH_ASSOC);

//$query = "SELECT * FROM `students` ORDER BY id DESC LIMIT 0,5";
$query = "SELECT * FROM `courses` ORDER BY titles DESC";
//execution
$stmt = $db->query($query);
$courses = $stmt->fetchAll(PDO::FETCH_ASSOC);

$query = "SELECT courses_id FROM `maping_tables` WHERE students_id=".$student['id'];
//execution
$stmt = $db->query($query);
$selected_course_ids = $stmt->fetchAll(PDO::FETCH_ASSOC);
$students_course_ids = [];
foreach($selected_course_ids as $selected_course_id){
    $students_course_ids[] = $selected_course_id['courses_id'];
}

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
<body style="padding-top: 90px">
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
                <li><a href="course_add.php">Add New Course</a></li>
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

<!-- start =========================================================-->
<section id ="feature" class="section-padding">
    <div class="container">
        <div class="row">
            <div class=" col-md-offset-3 col-md-6">
                <form method="post">
                    <div class="form-group">
                        <label for="course_code">Student's Name :</label>
                        <span><?php echo $student['name'];?></span>
                        <br>
                        <label for="student_id">Student's ID:</label>
                        <span><?php echo $student['id'];?></span>
                        <br>
                        <label for="seip_id">Student's SEIP ID:</label>
                        <span><?php echo $student['seip_id'];?></span>
                    </div>
                    <div class="form-group">
                        <label for="course_title">Select Course</label>
                        <select name="course_ids[]" id="course_ids" class="form-control" multiple size="10">

                            <option value="">Choose a Course</option>
                            <?php
                            $selectedTxt = '';
                            foreach($courses as $course):
                                if(in_array( $course['id'], $students_course_ids)){
                                    $selectedTxt = 'selected="selected"';
                                }else{
                                    $selectedTxt = '';
                                }
                                ?>
                                <option value="<?=$course['id']?>" <?php echo $selectedTxt;?>><?=$course['titles']?></option>
                                <?php
                            endforeach;
                            ?>

                        </select>
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
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
