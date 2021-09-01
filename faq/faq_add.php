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
                <li><a href="faq_view.php">View Content</a></li>
                <li class="active"><a href="faq_add.php">Add Content</a></li>
                
            </ul>
        </div>
    </div>
</nav>


<div class="container">

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="header-section text-center">
                <h2>Add New FAQ</h2>
                <hr class="bottom-line">
            </div>
            <form action="faq_add_done.php" method="post">
					  Select Subject: <select name="subjects" class="form-control">
						  <option>Questions about PHP</option>
						  <option>Questions about HTML</option>
						  <option>Questions about JavaScript</option>
					  </select>
					  <br>
					  
					Questions: <textarea name="questions" class="form-control" rows="5" placeholder="Enter Questions" required ></textarea>
					<br>
					Answers: <textarea name="answers" class="form-control" rows="5" placeholder="Enter Answers" required ></textarea>
					<br>
					<button type="submit" class="btn btn-green" >Submit</button>

             </form>
            <br>
            <div class="panel panel-danger" style="background-color:#ebcccc ">
                <p class="text-center">Enter at least 60 or more character for Description.</p>
            </div>
        </div>

    </div>
</div>

<!-- Latest compiled and minified JavaScript -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/jquery.easing.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<!--<script src="js/custom.js"></script>-->
</body>
</html>