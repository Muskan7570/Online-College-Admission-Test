<?php
session_start();
error_reporting(0);
include('connect.php');

date_default_timezone_set('Africa/Lagos');
$current_date = date('Y-m-d H:i:s');

if(isset($_POST['btnsubmit']))
{

$pin = $_POST['txtpin'];
$serial = $_POST['txtserial'];

 $sql = "SELECT * FROM scratchcard WHERE pin='" .$pin . "' and serial = '".$serial."' and status = '0'";
     $result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
  // output data of each row
 ($row = mysqli_fetch_assoc($result));
$_SESSION["serial"] = $row['serial'];
	
header("Location: apply/admission.php"); 
    }else { 
?>
<?php 
         }
    
   }

?>
<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Online Student Admission System</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
	<!-- Google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="assets/css/style-starter.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
<!--
.style1 {color: #000000}
-->
    </style>
    </head>
<body class="host_version"> 


    <!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->	
    <!-- header -->
    <header id="site-header" class="fixed-top">
        <div class="college-logo">
            <img src="assets/images/primarylogo.png" img-fluid>
        </div>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.php">
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="courses.html">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="user/login.php">Dashboard</a>
                        </li>
                    </ul>
                    <!-- search-right -->
                    <div class="header-search position-relative">
                        <div class="search-right mx-lg-2">
                            <a href="#search" class="btn search-btn p-0" title="search">
                                <i class="fas fa-search"></i></a>
                            <!-- search popup -->
                            <div id="search" class="pop-overlay">
                                <div class="popup">
                                    <form action="#search" method="GET" class="search-box">
                                        <input type="search" placeholder="Enter Keyword..." name="search"
                                            required="required" autofocus="">
                                        <button type="submit" class="btn"><span class="fas fa-search"
                                                aria-hidden="true"></span></button>
                                    </form>
                                </div>
                                <a class="close" href="#close">×</a>
                            </div>
                            <!-- //search popup -->
                        </div>
                    </div>
                    <!--//search-right-->
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!-- //header -->

    <!-- banner section -->
    <section id="home" class="w3l-banner py-5">
        <div class="banner-content">
            <div class="container py-4">
                <div class="row align-items-center pt-sm-5 pt-4">
                    <div class="col-md-6">
                        <h3 class="mb-lg-4 mb-3">THINK PLACEMENT?<span class="d-block">THINK UNITED.</span>
                        </h3>
                        <h6 class="banner-sub">Go Further...Go Global</h6>
                        <div class="d-flex align-items-center buttons-banner">
                            <a href="apply/admission.php" class="btn btn-style mt-lg-5 mt-4">Admission Now</a>
                        </div>
                    </div>
                    <div class="col-md-6 right-banner-2 text-end position-relative mt-md-0 mt-5">
                        <img src="assets/images/ugidashboardpic.png"class="img-fluid position-relative"alt=" ">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner section -->

    <!-- home 4grids block -->
    <section class="services-w3l-block py-5" id="features">
        <div class="container py-md-5 py-4">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <h3 class="text-style">WELCOME TO UNITED GROUP OF INSTITUTIONS</h3>
                <p class="title-uppercase"><bold>Achieve Your Goals With United</bold></p>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="icon-box icon-box-clr-1">
                        <div class="icon"><a href="facility.html"><i class="fas fa-user-friends"></i></a></div>
                        <h4 class="title"><a href="facility.html">Facility</a></h4>
                        <p>The United institutes house a capacity of over 1200 students. Separate hostels accomodation for girls & boys are available at both Allahabad & Greater Noida Campuses.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mt-md-0 mt-4">
                    <div class="icon-box icon-box-clr-2">
                        <div class="icon"><a href="admission.html"><i class="fas fa-book-reader"></i></a></div>
                        <h4 class="title"><a href="admission.html">Admission</a></h4>
                        <p>United Institutes works on the motto of holistic education of its students. Hence every measure is taken that their progress does not remain constrained to the classrooms.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mt-lg-0 mt-4">
                    <div class="icon-box icon-box-clr-3">
                        <div class="icon"><a href="placement.html"><i class="fas fa-user-graduate"></i></a></div>
                        <h4 class="title"><a href="placement.html">Placements</a></h4>
                        <p>United Group of Institutions has academic collaborations with the International Universities/ Institutions, which has provided an umbrella for internationality, innovation, integration, information, technology and industrial partnership to all the bright souls of the group.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mt-lg-0 mt-4">
                    <div class="icon-box icon-box-clr-4">
                        <div class="icon"><a href="institution.html"><i class="fas fa-university"></i></a></div>
                        <h4 class="title"><a href="institution.html">Our Institutions</a></h4>
                        <p>United Group of Institutions provides different institutions for different courses. This is helpful for the students to be in the similar environment and experience a better infrastruture as well.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home 4grids block -->

    <!-- home image with content block -->
    <section class="w3l-servicesblock pt-lg-5 pt-4 pb-5 mb-lg-5" id="about">
        <div class="container pb-md-5 pb-4">
            <div class="row pb-xl-5 align-items-center">
                <div class="col-lg-6 position-relative home-block-3-left pb-lg-0 pb-5">
                    <div class="position-relative">
                        <img src="assets/images/ugipic.jpg" alt="" class="img-fluid radius-image">
                    </div>
                    <div class="imginfo__box">
                        <h6 class="imginfo__title">Get a Appointment Today!</h6>
                        <p>We aspire to reassert the significance of <br> high quality education by producing competent<br> professionals who can shape the destiny<br> of our nation into a stronger and developed stature. </p>
                        <a href="tel:http://1(800)3131108"><i class="fas fa-phone-alt"></i> 1800-3131-108</a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 offset-xl-1 mt-lg-0 mt-5 pt-lg-0 pt-5">
                    <h3 class="title-style">We Are The Best Choice For Your Future</h3>
                    <p class="mt-4">No one is born knowing all, We're here to teach you how it's done.</p><br>
                      <h5 class ="title-style">COME, LEARN WITH THE BEST</h5>
                    <ul class="mt-4 list-style-lis pt-lg-1">
                        <li><i class="fas fa-check-circle"></i>Expert Faculties</li>
                        <li><i class="fas fa-check-circle"></i>100% Placements</li>
                        <li><i class="fas fa-check-circle"></i>Scholarships</li>
                    </ul>
                    <a href="apply/admission.php" class="btn btn-style mt-5">Apply Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- //home image with content block -->

    <!-- courses section -->
    <div class="w3l-grids-block-5 home-course-bg py-5" id="courses">
        <div class="container py-md-5 py-4">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <p class="text-uppercase">Best Courses</p>
                <h3 class="title-style">Find The Right Course For You</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="coursecard-single">
                        <div class="grids5-info position-relative">
                            <img src="assets/images/btech.jpeg" alt="" class="img-fluid" />
                            <div class="meta-list">
                                <a href="courses.html">Engineering</a>
                            </div>
                        </div>
                        <div class="content-main-top">
                            <div class="content-top mb-4 mt-3">
                                <ul class="list-unstyled d-flex align-items-center justify-content-between">
                                    <li> <i class="fas fa-book-open"></i> </li>
                                    <li> <i class="fas fa-star"></i> 4.5</li>
                                </ul>
                            </div>
                            <h4><a href="courses.html">B.TECH / M.TECH</a></h4>
                            <p>B.Tech. (Bachelor of Technology), an undergraduate academic degree conferred after completion of four year program.
                                <br>
                                For your further studies. United offers M.Tech. Degree in Computer Science, Electronics, CAD & Power Electronics. A specialization will always give a candidate an edge due to his/her sound grip over the subject.</p>
                                <div class="top-content-border d-flex align-items-center justify-content-between mt-4 pt-4">
                                <h6></h6>
                                <a class="btn btn-style-primary" href="courses.html">Know Details<i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                    <div class="coursecard-single">
                        <div class="grids5-info position-relative">
                            <img src="assets/images/Mba.jpg" alt="" class="img-fluid" />
                            <div class="meta-list">
                                <a href="courses.html" class="sec-2">Management</a>
                            </div>
                        </div>
                        <div class="content-main-top">
                            <div class="content-top mb-4 mt-3">
                                <ul class="list-unstyled d-flex align-items-center justify-content-between">
                                    <li> <i class="fas fa-book-open"></i></li>
                                    <li> <i class="fas fa-star"></i> 4.3</li>
                                </ul>
                            </div>
                            <h4><a href="courses.html">BBA / MBA</a></h4>
                            <p>The business programs help our professionals widen their horizons to become more competitive in today's fast-changing world.
                                <br>
                                Corporate Relation Centre at UGI works for the MBA qualified candidates by providing them a launching path to a successful and bright career. In this direction, placements are being offered at College-level itself which opens doors to various sectoral opportunities.</p>
                                <div class="top-content-border d-flex align-items-center justify-content-between mt-4 pt-4">
                                <h6></h6>
                                <a class="btn btn-style-primary" href="courses.html">Know Details<i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                    <div class="coursecard-single">
                        <div class="grids5-info position-relative">
                            <img src="assets/images/uip.jpg" alt="" class="img-fluid" />
                            <div class="meta-list">
                                <a href="courses.html" class="sec-3">Pharmacy</a>
                            </div>
                        </div>
                        <div class="content-main-top">
                            <div class="content-top mb-4 mt-3">
                                <ul class="list-unstyled d-flex align-items-center justify-content-between">
                                    <li> <i class="fas fa-book-open"></i> </li>
                                    <li> <i class="fas fa-star"></i>4.2</li>
                                </ul>
                            </div>
                            <h4><a href="courses.html">B.PHARMA / M.PHARMA</a></h4>
                            <p>The awarding of a Bachelor of Pharmacy is based on the completion of high level of academic performance. The degree is the basic pre-requisite for registration to practice as a pharmacist and as professional health care providers.
                                <br>M. Pharm is a highly research oriented course ideal for candidates who want to go in the field of medicinal research or academics. 
                                </p>
                                <div class="top-content-border d-flex align-items-center justify-content-between mt-4 pt-4">
                                <h6></h6>
                                <a class="btn btn-style-primary" href="courses.html">Know Details<i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-sm-5 mt-4 pt-sm-0 pt-1">
                <a class="btn btn-style btn-style-secondary mt-sm-3" href="courses.html">
                    Browse more courses</a>
            </div>
        </div>
    </div>
    <!-- //courses section -->

    <!-- why choose block -->
    <section class="w3l-service-1 py-5">
        <div class="container py-md-5 py-4">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <p class="text-uppercase">Why Choose Us</p>
                <h3 class="title-style">Tools For Teachers And Learners</h3>
            </div>
            <div class="row content23-col-2 text-center">
                <div class="col-md-6">
                    <div class="content23-grid content23-grid1">
                        <h4><a href="about.html">Expert Faculty</a></h4>
                    </div>
                </div>
                <div class="col-md-6 mt-md-0 mt-4">
                    <div class="content23-grid content23-grid2">
                        <h4><a href="about.html">Safe Environment</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //why choose block -->

    <!-- stats block -->
    <section class="w3-stats pt-4 pb-5" id="stats">
        <div class="container pb-md-5 pb-4">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <p class="text-uppercase">Our Statistics</p>
                <h3 class="title-style">We are Proud to Share with You</h3>
            </div>
            <div class="row text-center pt-4">
                <div class="col-md-3 col-6">
                    <div class="counter">
                        <a href="scholarship.html"><img src="assets/images/icon-1.svg" alt="" class="img-fluid"></a>
                        <div class="timer count-title count-number mt-sm-1" data-to="4000" data-speed="1500"></div>
                        <p class="count-text">Scholarships</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="counter">
                        <a href="placement.html"><img src="assets/images/icon-2.svg" alt="" class="img-fluid"></a>
                        <div class="timer count-title count-number mt-3" data-to="11400" data-speed="1500"></div>
                        <p class="count-text">Placements</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 mt-md-0 mt-5">
                    <div class="counter">
                        <a href="alumni.html"><img src="assets/images/icon-3.svg" alt="" class="img-fluid"></a>
                        <div class="timer count-title count-number mt-3" data-to="14000" data-speed="1500"></div>
                        <p class="count-text">Alumni</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 mt-md-0 mt-5">
                    <div class="counter">
                        <a href="#testimonials"><img src="assets/images/icon-4.svg" alt="" class="img-fluid"></a>
                        <div class="timer count-title count-number mt-3" data-to="11200" data-speed="1500"></div>
                        <p class="count-text">Students</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //stats block -->

    <!-- testimonials block -->
    <section class="w3l-index4 py-5" id="testimonials">
        <div class="container py-md-5 py-4">
            <div class="content-slider text-center">
                <div class="clients-slider">
                    <div class="mask">
                        <ul>
                            <li class="anim1">
                                <img src="assets/images/komalsahu.png" class="img-fluid rounded-circle"
                                    alt="client image" />
                                <blockquote class="quote"><q>I truly believe in myself and my college because of which, today, 
                                    I am standing at the success point of my life.
                                    </q> </blockquote>
                                <div class="source">-Komal Sahu</div>
                                <h5 class="text-style">1st Rank In UPTU</h5>
                            </li>

                            <li class="anim2">
                                <img src="assets/images/shikhar.jpg" class="img-fluid rounded-circle"
                                    alt="client image" />
                                <blockquote class="quote"><q>I would specially like to thank my parents and teachers
                                     who guided me and worked hard with me
                                     because of whom I was able to achieve this feat.
                                    </q> </blockquote>
                                <div class="source">- Shikhar Srivastava</div>
                                <h5 class="text-style">Placed At Infosys And Tcs.</h5>
                            </li>
                            <li class="anim3">
                                <img src="assets/images/sakshigulati.jpg" class="img-fluid rounded-circle "
                                    alt="client image" />
                                <blockquote class="quote"><q>Throughout my two years of MBA, I had countless opportunities to develop analytical skills,
                                     leadership and proactive thinking through various programs and events
                                    </q> </blockquote>
                                <div class="source">- Sakshi Gulati</div>
                                <h5 class="text-style">Decathlon Sports India Pvt. Ltd</h5>
                            </li>
                            <li class="anim4">
                                <img src="assets/images/Mahima.jpg" class="img-fluid rounded-circle"
                                    alt="client image" />
                                <blockquote class="quote"><q>My experience at united has been truely wonderful.
                                     Firstly i want to thank my teacher,
                                     guide and mentor Rohit Vishwakarma sir for his wonderful guidance . I also want to thank my pr...
                                    </q> </blockquote>
                                <div class="source">Mahima Bahl</div>
                                <h5 class="text-style">AKTU Final Top 10 Rank 8 MBA</h5>
                            </li>
                            <li class="anim5">
                                <img src="assets/images/Anagha.jpg" class="img-fluid rounded-circle"
                                    alt="client image" />
                                <blockquote class="quote"><q>I extend my heartfelt gratitude towards esteemed learned and dedicated trainers of UGI and constant support ,
                                    care & concern of Dr.Divya Bartaria ma\'am & whole CRC team towards bet...
                                    </q> </blockquote>
                                <div class="source">Anagha Agarwal</div>
                                <h5 class="text-style">Infosys</h5>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //testimonials block -->

    <!-- Events blog-->
    <div class="w3l-blog-block-5 py-5" id="blog">
        <div class="container py-md-5 py-4">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <p class="text-uppercase">Our Events</p> 
                <h3 class="title-style">Latest <span>UGI</span> Events</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card-single">
                        <div class="grids5-info">
                            <a href="#blog"><img src="assets/images/fresherpartyblog.jpg" alt="" /></a>
                            <div class="blog-info">
                                <h4><a href="#blog">Salvete Advena 2k21...</a></h4>
                                <p>Fresher's party organised by seniors to welcoming their juniors.</p><br>
                                <br>
                                <div class="d-flex align-items-center justify-content-between mt-4">
                                    <a class="d-flex align-items-center" href="#blog" title="Fresher's Party">
                                        <img class="img-fluid" src="assets/images/testi2.jpg" alt=""
                                            style="max-width:40px"> <span class="small ms-2"></span>
                                    </a>
                                    <p class="date-text"><i class="far fa-calendar-alt me-1"></i>Dec 04, 2021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                    <div class="blog-card-single">
                        <div class="grids5-info">
                            <a href="#blog"><img src="assets/images/backstagequizblog.jpeg" alt="" /></a>
                            <div class="blog-info">
                                <h4><a href="#blog">Backstage Quizzing...</a></h4>
                                <p>The oldest and most prestigious society of UCER BACKSTAGE QUIZZING
                                     brings you for the 7th time Campus quiz 6.0
                                </p><br>
                                <div class="d-flex align-items-center justify-content-between mt-4">
                                    <a class="d-flex align-items-center" href="#blog" title="Backstage Quizzing">
                                        <img class="img-fluid" src="assets/images/testi1.jpg" alt=""
                                            style="max-width:40px"> <span class="small ms-2"></span>
                                    </a>
                                    <p class="date-text"><i class="far fa-calendar-alt me-1"></i>Dec 08, 2021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                    <div class="blog-card-single">
                        <div class="grids5-info">
                            <a href="#blog"><img src="assets/images/campusdriveblog.jpeg" alt="" /></a>
                            <div class="blog-info">
                                <h4><a href="#blog">Campus Drive Programs...</a></h4>
                                <p>PYRAMID IT CONSULTANCY PVT. LIMITED  Campus Drive</p><br>
                                <br>

                                <div class="d-flex align-items-center justify-content-between mt-4">
                                    <a class="d-flex align-items-center" href="#blog" title="23k followers">
                                        <img class="img-fluid" src="assets/images/testi3.jpg" alt=""
                                            style="max-width:40px"> <span class="small ms-2"> </span>
                                    </a>
                                    <p class="date-text"><i class="far fa-calendar-alt me-1"></i>Dec 06, 2021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //blog block -->

    <!-- call block -->
    <section class="w3l-call-to-action-6">
        <div class="container py-md-5 py-sm-4 py-5">
            <div class="d-lg-flex align-items-center justify-content-between">
                <div class="left-content-call">
                    <h3 class="title-big">Call To Enroll Yourself</h3>
                    <p class="text-white mt-1">Begin the change today!</p>
                </div>
                <div class="right-content-call mt-lg-0 mt-4">
                    <ul class="buttons">
                        <li class="phone-sec me-lg-4"><i class="fas fa-phone-volume"></i>
                            <a class="call-style-w3" href="tel:+1(23) 456 789 0000">0532-2402951-55</a>
                        </li>
                        <li><a href="contact.html" class="btn btn-style btn-style-2 mt-lg-0 mt-3">Join for free</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- //call block -->

    <!-- footer block -->
    <footer class="w3l-footer-29-main">
        <div class="footer-29 pt-5 pb-4">
            <div class="container pt-md-4">
                <div class="row footer-top-29">
                    <div class="col-lg-4 col-md-6 footer-list-29">
                        <h6 class="footer-title-29">Contact Info </h6>
                        <p class="mb-2 pe-xl-5">Address : United Tower 53, Leader Road,
                            Allahabad, U.P. India.
                        </p>
                        <p class="mb-2">Phone Number : <a href="tel:+(91) 234 4567"> 0532-2402951-55</a></p>
                        <p class="mb-2">Email : <a href="mailto:info@example.com">info@united.ac.in</a></p>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6 footer-list-29 mt-md-0 mt-4">
                        <ul>
                            <h6 class="footer-title-29">Quick Links</h6>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="courses.html">Courses</a></li>
                            <li><a href="alumni.html">Alumni Portal</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="admission.html">Career</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6 ps-lg-5 ps-lg-4 footer-list-29 mt-md-0 mt-4">
                        <ul>
                            <h6 class="footer-title-29">Explore</h6>
                            <li><a href="assets\docs\Brochure-2022.pdf" target="_blank">United Brochure</a></li>
                            <li><a href="assets\docs\Placement-Brochure.pdf" target="_blank"> Placement Brochure</a></li>
                            <li><a href="assets\docs\Glance-2020.pdf" target="_blank">United At A Glance</a></li>
                            <li><a href="scholarship.html">Scholarships</a></li>
                            <li><a href="enigma.html">Enigma</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8 footer-list-29 mt-lg-0 mt-4 ps-lg-5">
                        <h6 class="footer-title-29">Subscribe</h6>
                        <form action="#" class="subscribe d-flex" method="post">
                            <input type="email" name="email" placeholder="Email Address" required="">
                            <button class="button-style"><span class="fa fa-paper-plane"
                                    aria-hidden="true"></span></button>
                        </form>
                        <p class="mt-3">Subscribe to our mailing list and get updates to your email inbox.</p>
                    </div>
                </div>
                <!-- copyright -->
                <p class="copy-footer-29 text-center pt-lg-2 mt-5 pb-2">© 2021 UGI. All rights reserved. 
                 <a href="#" target="_blank"></a></p>
                <!-- //copyright -->
            </div>
        </div>
    </footer>
    <!-- //footer block -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- /counter-->
    <script src="assets/js/counter.js"></script>
    <!-- //counter-->

    <!-- theme switch js (light and dark)-->
    <script src="assets/js/theme-change.js"></script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap -->
    <!-- //Js scripts -->
	<!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
	<script src="js/timeline.min.js"></script>
	<script>
		timeline(document.querySelectorAll('.timeline'), {
			forceVerticalMode: 700,
			mode: 'horizontal',
			verticalStartPosition: 'left',
			visibleItems: 4
		});
	</script>
</body>

</html>