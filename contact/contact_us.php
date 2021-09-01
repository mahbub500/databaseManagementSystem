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
    <style>
        @media (max-width: 800px) {
            #carousel-example-generic {
                display: none;
            }
        }
    </style>
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
            <a class="navbar-brand" href="../index.php"><img src="../assets/images/bitm.png" alt="logo" height="40" width="100"></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right" style="padding-top: 10px">
                <li><a href="../index.php">Home <span class="sr-only">(current)</span></a></li>
                <li><a href="../students/registration.php">Registration</a></li>
                <li class="active"><a href="contact_us.php">Contact US</a>
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
<!--Contact Banner-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="../assets/images/pexels.jpeg" alt="image">
                        <div class="carousel-caption">
                            <h1 class="text-uppercase">What Are We?</h1>
                            <h3 class="text-uppercase">We are the biggest IT Farm in Bangladesh.</h3>
                        </div>
                    </div>
                    <div class="item">
                        <img src="../assets/images/man.jpeg" alt="image">
                        <div class="carousel-caption">
                            <h1 class="text-uppercase">What WE Have?</h1>
                            <h3 class="text-uppercase">We have the most experienced teachers in Bangladesh.</h3>
                        </div>
                    </div>
                    <div class="item">
                        <img src="../assets/images/people.jpeg" alt="image">
                        <div class="carousel-caption">
                            <h1 class="text-uppercase">What WE Do?</h1>
                            <h3 class="text-uppercase">We help you to make your future better.</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--/Contact  Banner-->
<!--Contact-->
<section id ="contact" class="section-padding">
    <div class="container">
        <div class="raw">
            <div class="header-section text-center">
                <h2>Find us on Google Map</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.902327439856!2d90.39136381498139!3d23.75086218458918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8bd552c2b3b%3A0x4e70f117856f0c22!2sBASIS+Institute+of+Technology+%26+Management!5e0!3m2!1sbn!2sbd!4v1495027388791" width="960" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="row" style="padding: 50px">
            <div class="header-section text-center">
                <h2>Contact Us</h2>
                <p>Send your feed back to us.</p>
                <hr class="bottom-line">
            </div>
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>

            <form name="contactform" method="post" action="send_mail.php" role="form" class="contactForm">
                <div class="col-md-6 col-sm-6 col-xs-12 left">
                    <div class="form-group">
                        <input type="text" name="first_name" class="form-control form"
                               id="first_name" placeholder="Your Frist Name" data-rule="minlen:4"
                               data-msg="Please enter at least 4 chars" required/>
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="last_name" class="form-control form" id="last_name"
                               placeholder="Your Last Name" data-rule="minlen:4"
                               data-msg="Please enter at least 4 chars" required/>
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email"
                               placeholder="Your Email" data-rule="email"
                               data-msg="Please enter a valid email" required/>
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="telephone" class="form-control form" id="telephone"
                               placeholder="Your Phone No" data-rule="minlen:4"
                               data-msg="Please enter at least 4 chars" required/>
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject"
                               placeholder="Subject" data-rule="minlen:4"
                               data-msg="Please enter at least 8 chars of subject" required/>
                        <div class="validation"></div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 right">
                    <div class="form-group">
                        <textarea class="form-control" name="comments" rows="11" data-rule="required" data-msg="Please write something for us" placeholder="Message" required ></textarea>
                        <div class="validation"></div>
                    </div>
                </div>

                <div class="col-xs-12">
                    <!-- Button -->
                    <button type="submit" id="submit" name="submit" class="form contact-form-button light-form-button oswald light">SEND EMAIL</button>
                </div>
            </form>

        </div>
        <div class="row">
            <div class="heaser-section text-center">
                <h2>Address</h2>
                <p>Address: BDBL Bhaban (5th Floor - West)<br>
                    12, Kazi Nazrul Islam Ave<br>
                    Dhaka 1215, Bangladesh</p>
                <h4>Phone: +880 9612-342486</h4>
            </div>
        </div>
    </div>
</section>
<br>
<!--Footer-->
<footer id="footer" class="footer">
    <div class="container text-center">
    
        <ul class="social-links">
         

            <li>
                <a href="https://www.facebook.com/BASIS.BITM/" target="_blank">
                    <i class="fa fa-facebook fa-fw"></i>
                </a>
            </li>

            <li>
                <a href="https://plus.google.com/103842390399681113250" target="_blank">
                    <i class="fa fa-google-plus fa-fw"></i>
                </a>
            </li>

            <li>
                <a href="https://www.linkedin.com/company/basis-institute-of-technology-&-management-bitm-" target="_blank">
                    <i class="fa fa-linkedin fa-fw"></i>
                </a>
            </li>
        </ul>
        ©2017 SEIP_Database Management. All rights reserved
        <div class="credits">
            Designed by <a href="code_finder.php">Code_Finder</a>
        </div>
    </div>
</footer>
<!--/ Footer-->
<!-- Latest compiled and minified JavaScript -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/jquery.easing.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<!--<script src="js/custom.js"></script>-->

</body>
</html>