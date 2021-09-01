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
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SEIP Database Management</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

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
            <a class="navbar-brand" href="../index.php"><img src="../assets/images/bitm.png" alt="logo" height="40" width="100"></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right" style="padding-top: 10px">
                <li><a href="../dashboards/admin_index.php">Admin Panel</a></li>
                <li class="active"><a href="faq_view.php">View Content</a></li>
                <li ><a href="faq_add.php">Add Content</a></li>
            
            </ul>
        </div>
    </div>
</nav>

<div class="container">

<div class="page-header" align="center">
    <h1>Frequently Asked Questions</h1>
</div>

<!-- Bootstrap FAQ - START -->
<div class="container">


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
<!--						<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#">-->
                            <?php echo $fag['questions'];?></a>
					</h4>
				</div>
				<div id="collapseOne" class="panel-collapse collapse in">
					<div class="panel-body">
						<?php echo $fag['answers'];?> 
					</div>
				</div>
                <div>
                    <?php
                        echo "<a class='btn btn-green' href='faq_edit.php?id=".$fag['id']."'>Edit</a>";
                    echo "<a class='btn btn-danger' href='faq_delete.php?id=".$fag['id']."'>Delete</a>";
                    ?>
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
<!--                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#">-->
                            <?php echo $fag['questions'];?></a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <?php echo $fag['answers'];?> 
                    </div>
                </div>
                <div>
                    <?php
                    echo "<a class='btn btn-green' href='faq_edit.php?id=".$fag['id']."'>Edit</a>";
                    echo "<a class='btn btn-danger' href='faq_delete.php?id=".$fag['id']."'>Delete</a>";
                    ?>
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
<!--                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#">-->
                            <?php echo $fag['questions'];?></a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <?php echo $fag['answers'];?> 
                    </div>
                </div>
                <div>
                    <?php
                    echo "<a class='btn btn-green' href='faq_edit.php?id=".$fag['id']."'>Edit</a>";
                    echo "<a class='btn btn-danger' href='faq_delete.php?id=".$fag['id']."'>Delete</a>";
                    ?>
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

<!-- Bootstrap FAQ - END -->

</div>

<!-- Latest compiled and minified JavaScript -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/jquery.easing.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>