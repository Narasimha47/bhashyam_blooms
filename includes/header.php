<?php 
$mDiv = '<h4>Join Our Pre-Registration List</h4>
        <div class="card-body">
            <p class="card-text">And Receive updates,expert educational insights,and early access to our platform.</p>
        </div>
        
        
        <div class="d-flex pt-2">
            <button class="btn btn-light btn-light btn-rounded round_btn">Awards</button>
            &nbsp;&nbsp;&nbsp;
                <a class="btn btn-outline-light btn-social head_social" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-light btn-social head_social" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-light btn-social head_social" href=""><i class="fab fa-youtube"></i></a>
                <a class="btn btn-outline-light btn-social head_social" href=""><i class="fab fa-linkedin-in"></i></a>
            </div>
        <br/>
        <button class="btn btn-light btn-light btn-rounded round_btn">Our Results</button>';
$mImage = '<img src="img/nav_image.png" class="img-fluid" alt="image">';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Bhayasham Blooms</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Cabin' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Header Start -->
        
        <div class="container-fluid bg-dark px-0">
            <div class="row gx-0">
                
                <div class="col-lg-12">
                    
                    <div class="row gx-0 bg-white d-none d-lg-flex">
                        <div class="col-lg-8 px-5 text-start">
                            
                        </div>
                        <div class="col-lg-4 px-5 text-start">
                            <div class="h-100 d-inline-flex align-items-center py-2 me-4 enquiry">
                                <i class="fa fa-bookmark me-2"></i>
                                <p class="mb-0"><a href="enquiry.php" style="color:#FFFFFF">ENQUIRE</a></p>
                            </div>
                            <div class="h-100 d-inline-flex align-items-center py-2 call">
                                <i class="fa fa-phone-alt me-2"></i>
                                <p class="mb-0">88866 68985</p>
                            </div>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0" style="height: 8vh">
                        <a href="index.php" class="rounded-0 py-4 px-md-5 d-lg-block" style="background-color: #ffff;z-index: 9999;position: relative;top: -31px;"><img class="" src="img/Logo-blooms.png" alt="Image"></a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <div class="nav-item dropdown dropdown-mega position-static">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About Blooms</a>
                                    <div class="dropdown-menu shadow">
                                      <div class="mega-content px-4">
                                        <div class="container-fluid">
                                          <div class="row">
                                            <div class="col-12 col-sm-4 col-md-4 py-4">
                                              <?=$mDiv ?>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-4 py-4">
                                              <div class="list-group">
                                                <a href="about.php" class="nav-link megamenu-submenu">About Blooms</a>
                                                <a href="vision_and_mission.php" class="nav-link megamenu-submenu">Vision & Mission</a>
                                                <a href="our_leadership.php" class="nav-link megamenu-submenu">Our Leadership</a>
                                                <a href="awards_recognition.php" class="nav-link megamenu-submenu">Awards & Recognitions</a>
                                                <a href="#" class="nav-link megamenu-submenu">Careers</a>
                                              </div>
                                            </div>
                                            <div class="col-12 col-sm-4 col-md-4 py-4">
                                              <div class="rounded">
                                                  <?=$mImage ?>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="nav-item dropdown dropdown-mega position-static">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Academics</a>
                                    <div class="dropdown-menu shadow">
                                      <div class="mega-content px-4">
                                        <div class="container-fluid">
                                          <div class="row">
                                            <div class="col-12 col-sm-4 col-md-4 py-4">
                                              <?=$mDiv ?>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-4 py-4">
                                              <div class="list-group">
                                                <a href="cbse.php" class="nav-link megamenu-submenu">CBSE</a>
                                                <a href="state.php" class="nav-link megamenu-submenu">State</a>
                                                <a href="olympiad.php" class="nav-link megamenu-submenu">Olympiad</a>
                                                <a href="student_friendly.php" class="nav-link megamenu-submenu">Student Friendly</a>
                                              </div>
                                            </div>
                                            <div class="col-12 col-sm-4 col-md-4 py-4">
                                              <div class="rounded">
                                                 <?=$mImage ?>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="nav-item dropdown dropdown-mega position-static">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Admissions</a>
                                    <div class="dropdown-menu shadow">
                                      <div class="mega-content px-4">
                                        <div class="container-fluid">
                                          <div class="row">
                                            <div class="col-12 col-sm-4 col-md-4 py-4">
                                              <?=$mDiv ?>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-4 py-4">
                                              <div class="list-group">
                                                <a href="enquiry.php" class="nav-link megamenu-submenu">Admission Process</a>
                                                <!-- <a href="enquiry.php" class="nav-link megamenu-submenu">Application Form</a>
                                                <a href="#" class="nav-link megamenu-submenu">Public Disclosure</a>
                                                <a href="#" class="nav-link megamenu-submenu">FAQ's</a> -->
                                              </div>
                                            </div>
                                            <div class="col-12 col-sm-4 col-md-4 py-4">
                                              <div class="rounded">
                                                  <?=$mImage ?>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="nav-item dropdown dropdown-mega position-static">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Campus</a>
                                    <div class="dropdown-menu shadow">
                                      <div class="mega-content px-4">
                                        <div class="container-fluid">
                                          <div class="row">
                                            <div class="col-12 col-sm-4 col-md-4 py-4">
                                              <?=$mDiv ?>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-4 py-4">
                                              <div class="list-group">
                                                <a href="computer_lab.php" class="nav-link megamenu-submenu">Computer & ASL Lab</a>
                                                <a href="science_lab.php" class="nav-link megamenu-submenu">Sceince Lab</a>
                                                <a href="math_lab.php" class="nav-link megamenu-submenu">Math Lab</a>
                                                <a href="smart_class.php" class="nav-link megamenu-submenu">Smart Classes</a>
                                                <a href="library.php" class="nav-link megamenu-submenu">Library</a>
                                                <a href="infrastructure.php" class="nav-link megamenu-submenu">Infrastructure & Facilities</a>
                                                <a href="auditorium.php" class="nav-link megamenu-submenu">Auditorium</a>

                                              </div>
                                            </div>
                                            <div class="col-12 col-sm-4 col-md-4 py-4">
                                              <div class="rounded">
                                                  <?=$mImage ?>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="nav-item dropdown dropdown-mega position-static">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Student Life</a>
                                    <div class="dropdown-menu shadow">
                                      <div class="mega-content px-4">
                                        <div class="container-fluid">
                                          <div class="row">
                                            <div class="col-12 col-sm-4 col-md-4 py-4">
                                              <?=$mDiv ?>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-4 py-4">
                                              <div class="list-group">
                                                <a href="exam_schedule.php" class="nav-link megamenu-submenu">Exam Schedules</a>
                                                <a href="sports.php" class="nav-link megamenu-submenu">Sports</a>
                                                <a href="activities.php" class="nav-link megamenu-submenu">Activities</a>
                                                <a href="#" class="nav-link megamenu-submenu">Competition Records</a>
                                              </div>
                                            </div>
                                            <div class="col-12 col-sm-4 col-md-4 py-4">
                                              <div class="rounded">
                                                  <?=$mImage ?>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <div class="nav-item dropdown dropdown-mega position-static">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Gallery</a>
                                    <div class="dropdown-menu shadow">
                                      <div class="mega-content px-4">
                                        <div class="container-fluid">
                                          <div class="row">
                                            <div class="col-12 col-sm-4 col-md-4 py-4">
                                              <?=$mDiv ?>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-4 py-4">
                                              <div class="list-group">
                                                <a href="#" class="nav-link megamenu-submenu">Photos</a>
                                                <a href="#" class="nav-link megamenu-submenu">Videos</a>
                                              </div>
                                            </div>
                                            <div class="col-12 col-sm-4 col-md-4 py-4">
                                              <div class="rounded">
                                                  <?=$mImage ?>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->