<?php
//connection to database
$db = new PDO('mysql:host=localhost;dbname=seip;charset=utf8mb4','root','');

//building query
$query = "SELECT * FROM `features` ORDER BY id";
$query_workshop = "SELECT * FROM `workshops` ORDER BY id";
$query_seip_course = "SELECT * FROM `seip_course` ORDER BY id";
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
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <!-- bootstrap  Latest compiled and minified CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/imagehover.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- =======================================================
        Theme Name: Code_Finder
        Author: Code_Finder
    ======================================================= -->
  </head>
  <body style="padding-top: 50px">
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
                    <a class="navbar-brand" href="index.php"><img src="assets/images/bitm.png" alt="logo" height="40" width="100"></a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">              
                    <ul class="nav navbar-nav navbar-right" style="padding-top: 10px">
                        <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
                        <li><a href="students/registration.php">Registration</a></li>
                        <li><a href="contact/contact_us.php">Contact US</a>

                            <?php
                            session_start();
                            error_reporting(E_ALL & ~E_NOTICE);
                            if($_SESSION["user"] = '')
                            {
                                echo "<li><a href='log/log_out.php'>Log Out</a></li>";

                            }
                            else{
                                echo "<li class=\"dropdown\">
                                           <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Log In <span class=\"caret\"></span></a>
                                           <ul class=\"dropdown-menu\">
                                                <li><a href=\"log/log_in_admin.php\">Log in as Admin</a></li>
                                                <li role=\"presentation\" class=\"divider\"></li>
                                                <li><a href=\"log/log_in_student.php\">Log in as Student</a></li>
                                            </ul>
                                     </li>";

                            }

                            ?>
<!--                        <li><a href="dashboards/admin_index.html">Admin Panel</a></li>-->
<!--                        <li><a href="dashboards/student_index.html">Student Panel</a></li>-->
                    </ul>
                </div>
            </div>
        </nav>
    <!--/ Navigation bar end =================================================-->

    <!--Banner start =========================================================-->
    <div class="banner">
      <div class="bg-color">
        <div class="container">
          <div class="row">
            <div class="banner-text text-center">
              <div class="text-border">
                <h2 class="text-dec">Trust & Quality</h2>
              </div>
              <div class="intro-para text-center quote">
                <p class="big-text">Learning Today . . . Leading Tomorrow.</p>
                <p class="small-text"> BITM was established with a vision to be a world-class IT
                    institute in Bangladesh for the purpose of enhancing
                    <br> the competitiveness of the IT Sector in Bangladesh by creating a pool of qualified
                    <br>IT professionals and quality certified IT companies.
                </p>
                <a href="students/registration.php" class="btn"><b>ENROLL TODAY</b></a>
              </div>
              <a href="#" class="mouse-hover"><div class="mouse"></div></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Banner end ==========================================================-->

    <!--Feature start =========================================================-->
    <section id ="feature" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Our Specialty</h2>
            <p>This is not a feel-good implication, but really crucial for the whole
                learning process to work.
            </p>
            <hr class="bottom-line">
          </div>

          <div class="feature-info">
            <div class="fea">
                    <?php
                    foreach ($db->query($query) as $features):
                    ?>
              <div class="col-md-4 col-sm-6">
                <div class="heading pull-right">
                  <h4 class="text-justify"><?php echo $features['titles'];?></h4>
                  <p class="text-justify">
                      <?php
                      $string= $features['descriptions'];
                      if (strlen($string)>50)
                      {
                          echo substr($string,0,222)."...."."<br>";

                          echo "<a class='btn btn-green' style=\"margin-top: 10px\" 
                                href='details/details.php?id=".$features['id']."'>Read more
                                </a>";
                          echo "<hr>";
                      }
                      else{
                          echo $string;
                      }
                      ?>
                  </p>
                </div>
                <div class="fea-img pull-left">
                    <i class="<?php echo $features['icons']?>"></i>
                </div>
              </div>
                    <?php
                    endforeach;
                    ?>
            </div>
          </div>
            <hr>
        </div>
      </div>
    </section>
    <!--/ feature end =========================================================-->

    <!--work-shop start ==========================================================-->
    <section id="work-shop" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Upcoming Workshops</h2>
            <p>This is a welcoming and practical workshops for students who have completed our
                courses or are wanted to writing their own stories.
            </p>
            <hr class="bottom-line">
          </div>
          <div class="fea">
              <?php
              foreach ($db->query($query_workshop) as $workshops):
              ?>
              <div class="col-md-4 col-sm-6">
                  <div class="service-box text-center">
                      <div class="icon-box">
                          <i class="<?php echo $workshops['icons']?>"></i>
                      </div>
                      <div class="icon-text">

                          <h4 class="ser-text"><?php echo $workshops['titles'];?></h4>

                          <p>Start's from: <?php echo $workshops['times'];?></p>

                          <a class='btn btn-green' style="margin-top:10px"
                             href="details/workshop_detail.php?id=<?php echo $workshops['id'];?>">View more
                          </a>
                          <a class='btn btn-green' style="margin-top:10px"
                             href="details/admission.php">Admission
                          </a>
                      </div>
                  </div>
                  <hr>
              </div>
                  <?php
              endforeach;
              ?>
          </div>        
      </div>
    </section>
    <!--/ work-shop end ==========================================================-->

    <!--Seip Courses start =============================================================-->
    <section id ="work-shop" class="section-padding" style=" padding-top: 0px;">
        <div class="container">
            <div class="row">
                <div class="header-section text-center">
                    <h2>Skills for Employment Investment Program (SEIP) | BITM</h2>
                    <p>The objective of developing unskilled and semi-skilled labor force into productive
                        and skilled labor in priority sectors and to support Government institutes,
                        private companies non-government.
                    </p>
                    <hr class="bottom-line">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="fea">

            <?php
            foreach ($db->query($query_seip_course) as $seip_course):
                ?>

                    <div class="col-md-4 col-sm-6">
                        <div class="service-box text-center">
                            <div class="icon-box">
                                <i class="<?php echo $seip_course['icons']?>"></i>
                            </div>
                            <div class="icon-text">

                                <h4 class="ser-text"><?php echo $seip_course['titles'];?></h4>

                                <p>Start's from: <?php echo $seip_course['times'];?></p>

                                <a class='btn btn-green' style="margin-top:10px"
                                   href="details/seip_course_details.php?id=<?php echo $seip_course['id'];?>">View more
                                </a>
                                <a class='btn btn-green' style="margin-top:10px"
                                   href="details/admission.php">Admission
                                </a>
                            </div>
                        </div>
                        <hr>
                    </div>



                <?php
            endforeach;
            ?>
        </div>
        </div>
        <hr>
    </section>
    <!--/ Courses end =============================================================-->

    <!--Testimonial start =========================================================-->
    <section id="testimonial" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="header-section text-center">
                    <h2 class="white">See What Our Students Are Saying?</h2>
                    <p class="white">See the review of our students about our institution.</p>
                    <hr class="bottom-line bg-white">
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="text-comment">
                        <p class="text-par">"BITM is an excellent institution to learn IT knowledge who want to
                            explore their future in this growing sectors and want to meet the challenges of
                            the vartual world."
                        </p>
                        <p class="text-name">Shamim Arnob - Web Developer</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="text-comment">
                        <p class="text-par">"BITM is an excellent institution to learn IT knowledge who
                            want to explore their future in this growing sectors and want to meet the
                            challenges of the vartual world."
                        </p>
                        <p class="text-name">Abdullah Hasib - Web Designer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Testimonial end =========================================================-->

    <!--Faculity member start ====================================================-->
    <section id="faculity-member" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Meet Our Excellent Trainers </h2>
            <p>We provide the best trainers for you. They are passionate, highly trained, and skilled.</p>
            <hr class="bottom-line">
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="pm-staff-profile-container" >
              <div class="pm-staff-profile-image-wrapper text-center">
                <div class="pm-staff-profile-image">
                  <img src="assets/images/sir.jpg" alt="" class="img-thumbnail img-circle"/>
                </div>   
              </div>                                
              <div class="pm-staff-profile-details text-center">  
                <p class="pm-staff-profile-name">Mian Zadid Rusdid</p>
                <p class="pm-staff-profile-title">Head of Department. Lead Trainer, PHP with Laravel
                    Framework.</p>
              </div>     
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="pm-staff-profile-container" >
              <div class="pm-staff-profile-image-wrapper text-center">
                <div class="pm-staff-profile-image">
                  <img src="assets/images/mimsir.jpg" alt="" class="img-thumbnail img-circle" />
                </div>   
              </div>                                
              <div class="pm-staff-profile-details text-center">  
                <p class="pm-staff-profile-name">Neamat Khan Mim</p>
                <p class="pm-staff-profile-title">Assitant Trainer, Responsive Web Design,
                    Cake PHP Framework.</p>
              </div>     
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="pm-staff-profile-container" >
              <div class="pm-staff-profile-image-wrapper text-center">
                <div class="pm-staff-profile-image">
                    <img src="assets/images/fahimsir.jpg" alt="" class="img-thumbnail img-circle" />
                </div>   
              </div>                                
              <div class="pm-staff-profile-details text-center">  
                <p class="pm-staff-profile-name">MD. Fahim Ahmed</p>
                <p class="pm-staff-profile-title">Assistant Trainer, Responsive Web Design Bootstrap</p>
              </div>     
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/ Faculity member end ====================================================-->

    <!--Footer start-->
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
                <a href="https://www.linkedin.com/company/basis-institute-of-technology-&-management-bitm-"
                   target="_blank">
                    <i class="fa fa-linkedin fa-fw"></i>
                </a>
            </li>
        </ul>
        ©2017 SEIP_Database Management. All rights reserved
        <div class="credits">
            Designed by <a href="contact/code_finder.php">Code_Finder</a>
        </div>
    </div>
    </footer>
    <!-- Footer-->

<!-- Latest compiled and minified JavaScript -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!--<script src="js/custom.js"></script>-->

</body>
</html>