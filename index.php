
<?php 
include_once("./conn.php");

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>PEC Conference</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="pec-img/favicon.webp" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900"
    rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">



  <!-- Nivo Slider Theme -->
  <link href="css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="css/responsive.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: eBusiness
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
  <style>
   span.heightset {
  height: 60px;
}
h6.heightlg{
  height: 67px;
}
   @media only screen and (max-width: 576px) 
   {
.mypadding-section
{
padding: 10px 0px;
}
   }
   
  </style>
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                  data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="index.php">
                  <!-- <h1><span>e</span>Business</h1> -->
                  <img src="pec-img/logo.png" alt="" class="logo-pec">
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="img/logo.png" alt="" title=""> -->
                </a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll" href="#home">Home</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#about">About Us</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#schedules">Schedules</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#committee-member">Committee Members  </a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#sponsor">Our Sponsors</a>
                  </li>

                  <!-- <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Drop Down<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href=# >Drop Down 1</a></li>
                      <li><a href=# >Drop Down 2</a></li>
                    </ul> 
                  </li> -->

                  <!-- <li>
                    <a class="page-scroll" href="#blog">Blog</a>
                  </li> -->
                  <li>
                    <a class="page-scroll" href="#contact-us">Contact Us </a>
                  </li>
                  
                  <li style="padding-top: 10px; padding-bottom: 14px;">
                  <button class="btn btn-primary" data-toggle="modal" data-target="#register-now">Register Now</button>
                  </li>
                </ul>
                
              </div>
              <!-- navbar-collapse -->
             
            </nav>
            <!-- END: Navigation -->

            
           
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->

   <!--######## modal box start ############# -->
        <!-- The modal -->
        <div class="modal fade" id="register-now" tabindex="-1" role="dialog" aria-labelledby="modalLabelSmall"
          aria-hidden="true">
          <div class="modal-dialog modal-md">
            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="modalLabelSmall">Registration Form</h4>
              </div>

              <div class="modal-body">     
                <div class="row">
                <form action="registration-submit.php" method="POST">
                  <div class="col-lg-6">
                    <label for="inputHelpBlock">First Name</label>
                    <input type="text" id="inputHelpBlock" name="fname" class="form-control" aria-describedby="helpBlock">
                  </div>
                  <div class="col-lg-6">
                    <label for="inputHelpBlock">Last Name</label>
                    <input type="text" id="inputHelpBlock" name="lname" class="form-control" aria-describedby="helpBlock">
                  </div>
                  <div class="col-lg-6">
                    <label for="inputHelpBlock">Email *</label>
                    <input type="text" id="inputHelpBlock" name="email" class="form-control mt-3" aria-describedby="helpBlock">
                  </div>
                  <div class="col-lg-6">
                    <label for="inputHelpBlock">Phone</label>
                    <input type="text" id="inputHelpBlock" name="phone" class="form-control" aria-describedby="helpBlock">
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="disabledSelect">Types</label>
                      <select id="speaker-conferencee" name="conference-types" class="form-control" onchange="checkupdyess();">
                        <option selected disabled>select Option</option>
                        <option value="Speaker">Speaker</option>
                        <option value="General Audience">General Audience</option>
                        <option value="Committee Members">Committee Members</option>
                      </select>
                    </div>
                  </div>
                  <!-- <div class="col-lg-12" id="description-talk" style="display: none;">
                    <div class="form-group">
                      <label for="comment">Write short description about your intended talk</label>
                      <textarea id="asasdasd" class="form-control" rows="5"></textarea>
                    </div>
                  </div>
                  <div class="col-lg-12" id="intend-delivery" style="display: none;">
                    <div class="form-group">
                      <label for="disabledSelect">Intended mode of delivery</label>
                      <select id="da" class="form-control">
                        <option selected disabled>select Option</option>
                        <option value="Pysical">Pysical</option>
                        <option value="Online">Online</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-12" id="abstract-paper" style="display: none;">
                    <label for="inputHelpBlock">Attach Abstract of your Paper (If Available)</label>
                    <input type="file" id="ddsa" class="form-control" aria-describedby="helpBlock">
                  </div> -->
                  <div class="col-lg-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                  </form>
                </div>
                
              </div>
            
            </div>
          </div>
        </div>
        <!--########### modal box End  ###############-->

  <!-- Start Slider Area -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivosliderr" class="slides">
        <img src="pec-img/banner.webp" alt="" title="#slider-direction-1" />
        <!-- <img src="img/slider/slider2.jpg" alt="" title="#slider-direction-2" />
        <img src="img/slider/slider3.jpg" alt="" title="#slider-direction-3" /> -->
      </div>

      <!-- direction 1 -->
      <!-- <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content"> -->
      <!-- layer 1 -->
      <!-- <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">The Best Business Information </h2>
                </div> -->
      <!-- layer 2 -->
      <!-- <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">We're In The Business Of Helping You Start Your Business</h1>
                </div> -->
      <!-- layer 3 -->
      <!-- <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                  <a class="ready-btn page-scroll" href="#about">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->

      <!-- direction 2 -->
      <!-- <div id="slider-direction-2" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content text-center"> -->
      <!-- layer 1 -->
      <!-- <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">The Best Business Information </h2>
                </div> -->
      <!-- layer 2 -->
      <!-- <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">We're In The Business Of Get Quality Business Service</h1>
                </div> -->
      <!-- layer 3 -->
      <!-- <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                  <a class="ready-btn page-scroll" href="#about">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->

      <!-- direction 3 -->
      <!-- <div id="slider-direction-3" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content"> -->
      <!-- layer 1 -->
      <!-- <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">The Best business Information </h2>
                </div> -->
      <!-- layer 2 -->
      <!-- <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Helping Business Security  & Peace of Mind for Your Family</h1>
                </div> -->
      <!-- layer 3 -->
      <!-- <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                  <a class="ready-btn page-scroll" href="#about">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
    </div>
  </div>
  <!-- End Slider Area -->

  <!--######## counter start  ###########-->
  <!-- fadeInRight" data-wow-duration="1.4s" -->
  <section id="counter-stats" class="wow">
    <div class="container">
      <div class="row">
        <div class="col-lg-6"></div>
        <div class="col-lg-4 border-counter" id="countdown">
          <div class="col-lg- stats">
            <!-- <i class="fa fa-code" aria-hidden="true"></i> -->
            <div class="counting" id="days">0</div>
            <h6 class="counter-h6-heading">Days</h6>
          </div>

          <div class="col-lg- stats">
            <!-- <i class="fa fa-check" aria-hidden="true"></i> -->
            <div class="counting" id="hours">0</div>
            <h6 class="counter-h6-heading">Hours</h6>
          </div>

          <div class="col-lg- stats">
            <!-- <i class="fa fa-user" aria-hidden="true"></i> -->
            <div class="counting" id="minutes">0</div>
            <h6 class="counter-h6-heading">Minutes</h6>
          </div>

          <div class="col-lg- stats">
            <!-- <i class="fa fa-coffee" aria-hidden="true"></i> -->
            <div class="counting" id="seconds">0</div>
            <h6 class="counter-h6-heading">Seconds</h6>
          </div>
        </div>
        <div id="content" class="emoji">
      <span></span>
      <span></span>
      <span></span>
    </div>

      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </section>

  <!--############ counter End  ##############-->

  <!-- Start About area -->
  <div id="about" class="about-area area-padding">
    <div class="container">
      <!-- <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>About eBusiness</h2>
          </div>
        </div>
      </div> -->
      <div class="row">
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
                <img src="pec-img/about.webp" alt="">
              </a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-6 col-sm-6 col-xs-12 mt-5">
          <div class="well-middle">
            <div class="single-well">
              <a href="#">
                <h4 class="sec-head">INTRODUCTION</h4>
              </a>
              <h2 class="about-h2">
                4th INTERNATIONAL ENGINEERING 
                DEANS CONFERENCE
              </h2>
              <p class="about-p">
                Deans Conference aims to invite Engineering Academia Leaders
                from various countries and Pakistan for presenting new reforms in
                Engineering Education in line with Industry 5.0 and Challenges of
                next decade.
              </p>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div>
  <!-- End About area -->


  <section class="bg-color-column">
    <div class="container">
      <div class="row">
        <!-- <div class="position-top-columns"> -->
        <div class="col-lg-2"></div>
        <div class="col-lg-4 position-top-columns">
          <div class="card">
            <div class="card-body d-flex">
              <div class="twoColumns">
                <div class="left">
                  <img src="pec-img/location.webp" class="responsive img-two-secton">
                </div>
                <div class="right">
                  <h6>WHERE IS THE EVENT:</h6>
                  <p><b>Pearl Continental Hotel, Karachi</b></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 position-top-columns">
          <div class="card">
            <div class="card-body d-flex">
              <div class="twoColumns">
                <div class="left">
                  <img src="pec-img/calender.webp" class="responsive img-two-secton">
                </div>
                <div class="right">
                  <h6>WHEN IS THE EVENT:</h6>
                  <p><b>May 8, 2023 May 9, 2023
                    </b></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- </div> -->
      </div>
    </div>
  </section>



  <!-- Start About area -->
  <div id="about" class="about-area area-padding-rotate">
    <div class="container">
      <!-- <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>About eBusiness</h2>
          </div>
        </div>
      </div> -->
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12 mt-5">
          <div class="well-middle-rotate">
            <div class="single-well">
              <a href="#">
                <h4 class="sec-head">CALL FOR PAPERS</h4>
              </a>
              <h2 class="about-h2">
                4th INTERNATIONAL ENGINEERING
                DEANS CONFERENCE
              </h2>
              <p class="about-p">
                Deans Conferenceis intended to provide a forum for research
                scientists, engineers, and practitioners throughout the world to
                present their latest research ndings, ideas, and applications in the
                area of Flexible and Printable Sensors and Systems.
              </p>
              <div class="display-flex-button">
                <button class="btn btn-download">DOWNLOAD CFP</button>
                <button class="btn btn-submit" data-toggle="modal" data-target="#smallShoes">SUBMIT PAPER</button>
              </div>
            </div>
          </div>
        </div>
        <!-- End col-->

        <!--######## modal box start ############# -->
        <!-- The modal -->
        <div class="modal fade" id="smallShoes" tabindex="-1" role="dialog" aria-labelledby="modalLabelSmall"
          aria-hidden="true">
          <div class="modal-dialog modal-md">
            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="modalLabelSmall">PAPER SUBMISSION</h4>
              </div>

              <div class="modal-body">
                <form action="paper-submission-sub.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-lg-6">
                    <label for="inputHelpBlock">First Name</label>
                    <input type="text" id="inputHelpBlock" name="fname" class="form-control" aria-describedby="helpBlock">
                  </div>
                  <div class="col-lg-6">
                    <label for="inputHelpBlock">Last Name</label>
                    <input type="text" id="inputHelpBlock" name="lname" class="form-control" aria-describedby="helpBlock">
                  </div>
                  <div class="col-lg-6">
                    <label for="inputHelpBlock">Email *</label>
                    <input type="text" id="inputHelpBlock" name="email" class="form-control mt-3" aria-describedby="helpBlock">
                  </div>
                  <div class="col-lg-6">
                    <label for="inputHelpBlock">Phone</label>
                    <input type="text" id="inputHelpBlock" name="phone" class="form-control" aria-describedby="helpBlock">
                  </div>
                  <div class="col-lg-6">
                    <label for="inputHelpBlock">Designation</label>
                    <input type="text" id="inputHelpBlock" name="designation" class="form-control" aria-describedby="helpBlock">
                  </div>
                  <div class="col-lg-6">
                    <label for="inputHelpBlock">Affiliation / University</label>
                    <input type="text" id="inputHelpBlock" name="university" class="form-control" aria-describedby="helpBlock">
                  </div>
                  <div class="col-lg-12">
                    <label for="inputHelpBlock">Country</label>
                    <input type="text" id="inputHelpBlock" name="country" class="form-control" aria-describedby="helpBlock">
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="disabledSelect">Do you intend to be a speaker for the Coference</label>
                      <select id="speaker-conference" name="speaker-conference" class="form-control" onchange="checkupdyes();">
                        <option selected disabled>select Option</option>
                        <!-- <option value="Yes">Yes</option>
                        <option value="No">No</option> -->
                        <option value="Speaker">Speaker</option>
                        <option value="General Audience">General Audience</option>
                        <option value="Committee Members">Committee Members</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-12" id="description-talk" style="display: none;">
                    <div class="form-group">
                      <label for="comment">Write short description about your intended talk</label>
                      <textarea id="asasdasd" name="short-desc" class="form-control" rows="5"></textarea>
                    </div>
                  </div>
                  <div class="col-lg-12" id="intend-delivery" style="display: none;">
                    <div class="form-group">
                      <label for="disabledSelect">Intended mode of delivery</label>
                      <select id="da" name="delivery" class="form-control">
                        <option>select Option</option>
                        <option value="Pysical">Pysical</option>
                        <option value="Online">Online</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-12" id="abstract-paper" style="display: none;">
                    <label for="inputHelpBlock">Attach Abstract of your Paper (If Available)</label>
                    <input type="file" id="ddsa" name="paperfile" class="form-control" aria-describedby="helpBlock">
                  </div>

                  <div class="col-lg-12" id="committee-member-name" style="display: none;">
                    <label for="inputHelpBlock">Committee Members Name</label>
                    <input type="text" id="ddsaddd" name="member-name" class="form-control" aria-describedby="helpBlock">
                  </div>

                  <div class="col-lg-12">
                    <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Submit</button>
                  </div>
                </div>
                </form>
              </div>
            
            </div>
          </div>
        </div>
        <!--########### modal box End  ###############-->

        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well1">
              <a href="#">
                <img src="pec-img/call-paper.webp" alt="">
              </a>
            </div>
          </div>
        </div>
        <!-- single-well end-->

      </div>
    </div>
  </div>
  <!-- End About area -->

  <!-- shedule details start  -->
  <div id="schedules" class="schedule-area area-padding">
    <div class="container">
      <div class="row schedule-row">
        <div class="col-md-6 col-sm-6 col-xs-12 mt-5">
          <div class="single-well">
            <a href="#">
              <h4 class="sec-head">INTRODUCTION</h4>
            </a>
            <h2 class="about-h2">
              4th INTERNATIONAL ENGINEERING DEANS CONFERENCE
            </h2>
            <p class="about-p">
              Deans Conference aims to invite Engineering Academia Leaders
              from various countries and Pakistan for presenting new reforms
              in Engineering Education in line with Industry 5.0 and
              Challenges of next decade.
            </p>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 mt-5 schedule-col">
          <div class="link-tabs mypadding-section">
            <div class="row row-mobile">
              <div class="col-md-4 col-sm-6 col-xs-12 mt-5">
                <div class="links">
                  <button class="tab-one active1">8th May<br />2023</button>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12 mt-5">
                <div class="links">
                  <button class="tab-second">9th May<br />2023</button>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12 mt-5">
                <div class="links">
                  <button class="tab-third">Social <br> Event</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php
                                               
                                                  
                                                
      // $select = "SELECT * FROM day_schedule";
      // $result_2 = mysqli_query($conn,$select);
      // while ($row = mysqli_fetch_assoc($result_2)){ 
      // }                                              
      
      ?>


      <div class="row" id="row11" style="height: 450px;overflow-y: auto;">
      <?php
      include_once('conn.php');
      $select = "SELECT * FROM day_schedule where DS_date='2023-05-08'";
      $result_2 = mysqli_query($conn,$select);
      while ($row = mysqli_fetch_assoc($result_2)){    
        if($row['DS_image'] == 'No image'){
           
      ?>
      <div class="col-lg-12">
          <div class="schedule-card-outter">
            <div class="schedule-card-inner">
              <div class="row mobile-card-reverse" style="margin: 0">
                <div class="col-lg-3" style="padding: 0">
                  <div class="first-text">
                    <span class="heightset"><?php echo 'From  '.$row['DS_starttime'].'  to  '.$row['DS_endtime'].''?>
                     </span>
                    <!-- <h6 style="color: white"></h6> -->
                  </div>
                </div>
                <div class="col-lg-9" style="padding: 0">
                  <div class="second-text">
                    <div class="main-text">
                      <!-- <span>Inaugural Session Guests to be seated</span> -->
                      <h6 class="heightlg"><?php echo $row['DS_name']?></h6>
                      <!-- <a href="#" style="color: #5b8e42">LEARN MORE..</a> -->
                    </div>
                    <!-- <div class="img">
                      <img src="img/team/3.jpg" alt="" id="schedule-img" />
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php
      }
      else{
?>
      <div class="col-lg-12">
          <div class="schedule-card-outter">
            <div class="schedule-card-inner">
              <div class="row mobile-card-reverse" style="margin: 0">
                <div class="col-lg-3" style="padding: 0">
                  <div class="first-text">
                    <span class="heightset"><?php echo 'From  '.$row['DS_starttime'].'  to  '.$row['DS_endtime'].''?>
                     </span>
                    <!-- <h6 style="color: white"></h6> -->
                  </div>
                </div>
                <div class="col-lg-9" style="padding: 0">
                  <div class="second-text">
                    <div class="main-text">
                      <!-- <span>Inaugural Session Guests to be seated</span> -->
                      <h6 class=""><?php echo $row['DS_name']?></h6>
                      <!-- <a href="#" style="color: #5b8e42">LEARN MORE..</a> -->
                    </div>
                    <div class="img">
                      <img src="Admin/images/<?php echo $row['DS_image']; ?>" alt="" id="schedule-img" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

<?php
      }
    }
      ?>
      </div>
  
     
  
    <div class="row" id="row22" style="height: 450px;overflow-y: auto;">
  
    <?php
      include_once('conn.php');
      $select = "SELECT * FROM day_schedule where DS_date='2023-05-09'";
      $result_2 = mysqli_query($conn,$select);
      while ($row = mysqli_fetch_assoc($result_2)){    
        if($row['DS_image'] == 'No image'){

           
      ?>

      <div class="col-lg-12">
          <div class="schedule-card-outter">
            <div class="schedule-card-inner">
              <div class="row mobile-card-reverse" style="margin: 0">
                <div class="col-lg-3" style="padding: 0">
                  <div class="first-text">
                    <span class="heightset"><?php echo 'From  '.$row['DS_starttime'].'  to  '.$row['DS_endtime'].''?>
                     </span>
                    <!-- <h6 style="color: white"></h6> -->
                  </div>
                </div>
                <div class="col-lg-9" style="padding: 0">
                  <div class="second-text">
                    <div class="main-text">
                      <!-- <span>Inaugural Session Guests to be seated</span> -->
                      <h6 class="heightlg"><?php echo $row['DS_name']?></h6>
                      <!-- <a href="#" style="color: #5b8e42">LEARN MORE..</a> -->
                    </div>
                    <!-- <div class="img">
                      <img src="img/team/3.jpg" alt="" id="schedule-img" />
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php
      }
      else{
?>
      <div class="col-lg-12">
          <div class="schedule-card-outter">
            <div class="schedule-card-inner">
              <div class="row mobile-card-reverse" style="margin: 0">
                <div class="col-lg-3" style="padding: 0">
                  <div class="first-text">
                    <span class="heightset"><?php echo 'From  '.$row['DS_starttime'].'  to  '.$row['DS_endtime'].''?>
                     </span>
                    <!-- <h6 style="color: white"></h6> -->
                  </div>
                </div>
                <div class="col-lg-9" style="padding: 0">
                  <div class="second-text">
                    <div class="main-text">
                      <!-- <span>Inaugural Session Guests to be seated</span> -->
                      <h6 class=""><?php echo $row['DS_name']?></h6>
                      <!-- <a href="#" style="color: #5b8e42">LEARN MORE..</a> -->
                    </div>
                    <div class="img">
                      <img src="img/team/3.jpg" alt="" id="schedule-img" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

<?php
      }
    }
      ?>
    
    
  </div>
  <!-- shedule End  -->

<?php
include_once("previous_events.php");
?>

  <!-- Start team Area -->
  <div id="committee-member" class="our-team-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-md-6 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h1><b>OUR COMMITTEE MEMBERS</b></h1>
            <h4 class="h4-bottom">Deans 4th international Conference Commitee
              Members</h4>
          </div>
        </div>
      </div>
      <div class="row row-commety-member">
        <!-- <div class="team-top"> -->
        <div class="col-md-3 col-sm-3 col-xs-12 mb-4 mb-card">
          <div class="single-team-member">
            <div class="team-img">
              <a href="#">
                <img src="pec-img/najeeb.webp" alt="" style="width: 100%;">
              </a>
              <div class="team-social-icon text-center">
                <ul>
                  <li>
                    <a href="#">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="team-content text-center">
              <h6>Engr. Prof. M.Najeeb Haroon
                Patron
              </h6>
              <!-- <p>Seo</p> -->
            </div>
          </div>
        </div>
        <!-- End column -->
        <div class="col-md-3 col-sm-3 col-xs-12 mb-card">
          <div class="single-team-member">
            <div class="team-img">
              <a href="#">
                <img src="pec-img/Artboard8.webp" alt="" style="width: 100%;">
              </a>
              <div class="team-social-icon text-center">
                <ul>
                  <li>
                    <a href="#">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="team-content text-center">
              <h6>Engr. Prof. Dr. Niaz Ahmad Akhtar
                Chair Technical Commiee</h6>
              <!-- <p>Web Developer</p> -->
            </div>
          </div>
        </div>
        <!-- End column -->
        <div class="col-md-3 col-sm-3 col-xs-12 mb-card">
          <div class="single-team-member">
            <div class="team-img">
              <a href="#">
                <img src="pec-img/Artboard5.webp" alt="" style="width: 100%;">
              </a>
              <div class="team-social-icon text-center">
                <ul>
                  <li>
                    <a href="#">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="team-content text-center">
              <h6>Engr. Mukhtiar Ali Sheikh
                Conference Commiee Convenor</h6>
              <!-- <p>Web Design</p> -->
            </div>
          </div>
        </div>
        <!-- End column -->
        <div class="col-md-3 col-sm-3 col-xs-12 mb-card">
          <div class="single-team-member">
            <div class="team-img">
              <a href="#">
                <img src="pec-img/Artboard10.webp" alt="" style="width: 100%;">
              </a>
              <div class="team-social-icon text-center">
                <ul>
                  <li>
                    <a href="#">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="team-content text-center">
              <h6>Engr. Zahid Arif
                Conference Commiee
                Deputy Convener
              </h6>
              <!-- <p>Seo Expert</p> -->
            </div>
          </div>
        </div>
        <!-- End column -->

        <!-- End column -->
        <div class="col-md-3 col-sm-3 col-xs-12 mb-card">
          <div class="single-team-member">
            <div class="team-img">
              <a href="#">
                <img src="pec-img/Artboard4.webp" alt="" style="width: 100%;">
              </a>
              <div class="team-social-icon text-center">
                <ul>
                  <li>
                    <a href="#">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="team-content text-center">
              <h6>Engr. Mohsin Ali Khan
                Co Chair Administrative and Finance
              </h6>
              <!-- <p>Seo Expert</p> -->
            </div>
          </div>
        </div>
        <!-- End column -->

        <!-- End column -->
        <div class="col-md-3 col-sm-3 col-xs-12 mb-card">
          <div class="single-team-member">
            <div class="team-img">
              <a href="#">
                <img src="pec-img/Artboard3.webp" alt="" style="width: 100%;">
              </a>
              <div class="team-social-icon text-center">
                <ul>
                  <li>
                    <a href="#">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="team-content text-center">
              <h6>Engr. Dr. Ashfaq Ahmed Sheikh
                Additional Registrar PEC,
                Conf Secretary
              </h6>
              <!-- <p>Seo Expert</p> -->
            </div>
          </div>
        </div>
        <!-- End column -->

        <!-- End column -->
        <div class="col-md-3 col-sm-3 col-xs-12 mb-card">
          <div class="single-team-member">
            <div class="team-img">
              <a href="#">
                <img src="pec-img/Artboard9.webp" alt="" style="width: 100%;">
              </a>
              <div class="team-social-icon text-center">
                <ul>
                  <li>
                    <a href="#">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="team-content text-center">
              <h6>Engr. Prof. Dr. Zubair A. Shaikh
                Co Chair Technical Commiee
              </h6>
              <!-- <p>Seo Expert</p> -->
            </div>
          </div>
        </div>
        <!-- End column -->

        <!-- End column -->
        <div class="col-md-3 col-sm-3 col-xs-12 mb-card">
          <div class="single-team-member">
            <div class="team-img">
              <a href="#">
                <img src="pec-img/Artboard1.webp" alt="" style="width: 100%;">
              </a>
              <div class="team-social-icon text-center">
                <ul>
                  <li>
                    <a href="#">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="team-content text-center">
              <h6>Engr. Abdul Rehman Sheikh
                Chair Administrative &
                Finance Comiee
              </h6>
              <!-- <p>Seo Expert</p> -->
            </div>
          </div>
        </div>
        <!-- End column -->
        <!-- </div> -->
      </div>
    </div>
  </div>
  <!-- End Team Area -->



  <div class="container">
    <div class="row">
      <div class="col-md-5 col-sm-6 col-xs-12 mt-5">
        <div class="well-middlee">
          <div class="single-well">
            <a href="#">
              <h4 class="sec-head">EVENT GALLERY</h4>
            </a>
            <h2 class="about-h2">
              COLLECTION OF IMAGES FROM LAST YEAR !!
            </h2>
          </div>
        </div>
      </div>

      <div class="col-lg-1"></div>
      <div class="col-md-6 col-sm-6 col-xs-12 mt-5">
        <div class="well-middle2">
          <div class="single-well">
            <p class="about-p">
              <b>Deans Conference aims to invite Engineering Academia Leaders
                from various countries and Pakistan for presenting new reforms in
                Engineering Education in line with Industry 5.0 and Challenges of
                next decade.</b>
            </p>
          </div>
        </div>
      </div>
    </div>
      <?php
        include_once("galleryslider.php");
      ?>
    <!-- <div class="row" style="margin-top: 50px;
      margin-bottom: 50px;">
      <div class="col-lg-3">
        <img src="pec-img/subdivision-51.webp" alt="" class="gallery-image">
      </div>

      <div class="col-lg-3">
        <img src="pec-img/1224f.webp" alt="" class="gallery-image">
      </div>

      <div class="col-lg-3">
        <img src="pec-img/1224f.webp" alt="" class="gallery-image">
      </div>

      <div class="col-lg-3">
        <img src="pec-img/subdivision-51.webp" alt="" class="gallery-image">
      </div>

      <div class="col-lg-3">
        <img src="pec-img/1672641541.WhatsApp Image 2022-12-31 at 9.40.11 AM.webp" alt="" class="gallery-image">
      </div>

      <div class="col-lg-3">
        <img src="pec-img/1-2.webp" alt="" class="gallery-image">
      </div>

      <div class="col-lg-3">
        <img src="pec-img/1224f.webp" alt="" class="gallery-image">
      </div>

      <div class="col-lg-3">
        <img src="pec-img/subdivision-51.webp" alt="" class="gallery-image">
      </div>

      <div class="col-lg-3">
        <img src="pec-img/1224f.webp" alt="" class="gallery-image">
      </div>

      <div class="col-lg-3">
        <img src="pec-img/subdivision-51.webp" alt="" class="gallery-image">
      </div>

      <div class="col-lg-3">
        <img src="pec-img/1672641541.WhatsApp Image 2022-12-31 at 9.40.11 AM.webp" alt="" class="gallery-image">
      </div>

      <div class="col-lg-3">
        <img src="pec-img/1-2.webp" alt="" class="gallery-image">

      </div>
    </div> -->
  </div>


  <!-- pricing table  -->
  <section id="sponsor">
    <div class="container">
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-md-6 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h1><b>OUR SPONSORS</b></h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typeseing industry. Lorem Ipsum
              has been the industry's standard dummy text ever since the 1500s, has been the industry's
              standard dummy text ever since the 1500s,</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12">
        <div class="single-table text-center">
          <div class="plan-header">
            <h3 class="institute">Institutes</h3>
            <!-- <p>plan for basic user</p> -->
            <h4 class="plan-price"><span>PKR</span>100,000</h4>
            <h6 class="italic-price-text">Offers to the Sponsors</h6>
          </div>


          <ul class="plan-features">
            <li> <i class="fa fa-check"></i> 20×3 Ad in the news supplement (nation-wide)</li>
            <li> <i class="fa fa-check"></i> 20×3 Ad in the news supplement (nation-wide)</li>
            <li> <i class="fa fa-check"></i> 20×3 Ad in the news supplement (nation-wide)</li>
            <li> <i class="fa fa-check"></i> 20×3 Ad in the news supplement (nation-wide)</li>
          </ul>
          <a href="#" class="plan-submit hvr-bounce-to-right" data-toggle="modal" data-target="#sponsor1" >Get Started</a>
        </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12">
        <div class="single-table text-center">
          <div class="plan-header">
            <h3 class="silver">Silver Sponsors</h3>
            <!-- <p>plan for basic user</p> -->
            <h4 class="plan-price"><span>PKR</span>500,000</h4>
            <h6 class="italic-price-text">Offers to the Sponsors</h6>
          </div>


          <ul class="plan-features">
            <li> <i class="fa fa-check"></i> 20×3 Ad in the news supplement (nation-wide)</li>
            <li> <i class="fa fa-check"></i> 20×3 Ad in the news supplement (nation-wide)</li>
            <li> <i class="fa fa-check"></i> 20×3 Ad in the news supplement (nation-wide)</li>
            <li> <i class="fa fa-check"></i> 20×3 Ad in the news supplement (nation-wide)</li>
          </ul>
          <a href="#" class="plan-submit hvr-bounce-to-right" data-toggle="modal" data-target="#sponsor2" >Get Started</a>
        </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12">
        <div class="single-table text-center">
          <div class="plan-header">
            <h3 class="golden">Gold Sponsors</h3>
            <!-- <p>plan for basic user</p> -->
            <h4 class="plan-price"><span>PKR</span>10,00,000</h4>
            <h6 class="italic-price-text">Offers to the Sponsors</h6>
          </div>


          <ul class="plan-features">
            <li> <i class="fa fa-check"></i> 20×3 Ad in the news supplement (nation-wide)</li>
            <li> <i class="fa fa-check"></i> 20×3 Ad in the news supplement (nation-wide)</li>
            <li> <i class="fa fa-check"></i> 20×3 Ad in the news supplement (nation-wide)</li>
            <li> <i class="fa fa-check"></i> 20×3 Ad in the news supplement (nation-wide)</li>
          </ul>
          <a href="#" class="plan-submit hvr-bounce-to-right" data-toggle="modal" data-target="#sponsor3" >Get Started</a>
        </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12">
        <div class="single-table text-center">
          <div class="plan-header">
            <h3 class="platinum">Platinum Sponsors</h3>
            <!-- <p>plan for basic user</p> -->
            <h4 class="plan-price"><span>PKR</span>15,00,000</h4>
            <h6 class="italic-price-text">Offers to the Sponsors</h6>
          </div>


          <ul class="plan-features">
            <li> <i class="fa fa-check"></i> 20×3 Ad in the news supplement (nation-wide)</li>
            <li> <i class="fa fa-check"></i> 20×3 Ad in the news supplement (nation-wide)</li>
            <li> <i class="fa fa-check"></i> 20×3 Ad in the news supplement (nation-wide)</li>
            <li> <i class="fa fa-check"></i> 20×3 Ad in the news supplement (nation-wide)</li>
          </ul>
          <a href="#" class="plan-submit hvr-bounce-to-right" data-toggle="modal" data-target="#sponsor4" >Get Started</a>
        </div>
      </div>
    </div>
  </section>

  <!-- end priceing table -->

<!--######## modal box 1 start ############# -->
        <!-- The modal -->
        <div class="modal fade" id="sponsor1" tabindex="-1" role="dialog" aria-labelledby="modalLabelSmall"
          aria-hidden="true">
          <div class="modal-dialog modal-md">
            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="modalLabelSmall">Sponsors Form</h4>
              </div>

              <div class="modal-body">     
                <div class="row">

                <form action="sponsor-submit.php" method="POST">
                  <div class="col-lg-6">
                    <label for="inputHelpBlock">First Name</label>
                    <input type="text" id="inputHelpBlock" name="first_name" class="form-control" aria-describedby="helpBlock">
                  </div>
                  <div class="col-lg-6">
                    <label for="inputHelpBlock">Last Name</label>
                    <input type="text" id="inputHelpBlock" name="last_name" class="form-control" aria-describedby="helpBlock">
                  </div>
                  <div class="col-lg-6">
                    <label for="inputHelpBlock">Email *</label>
                    <input type="text" id="inputHelpBlock" name="email" class="form-control mt-3" aria-describedby="helpBlock">
                  </div>
                  <div class="col-lg-6">
                    <label for="inputHelpBlock">Phone</label>
                    <input type="text" id="inputHelpBlock" name="phone" class="form-control" aria-describedby="helpBlock">
                  </div>
                  
                  <div class="col-lg-6">
                    <label for="inputHelpBlock">Description</label>
                    <input type="text" id="inputHelpBlock" name="description" class="form-control" aria-describedby="helpBlock">
                  </div>
                  

                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="disabledSelect">Types</label>
                      <select id="speaker-conferencee" name="type" class="form-control" onchange="checkupdyess();">
                        <option selected disabled>select Option</option>
                        <option value="Institutes">Institutes</option>
                        <!-- <option value="Silver Sponsors">Silver Sponsors</option>
                        <option value="Gold Sponsors">Gold Sponsors</option>
                        <option value="Platinum Sponsors">Platinum Sponsors</option> -->
                      </select>
                    </div>
                  </div>
                  
                  <div class="col-lg-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                  </form>
                </div>
                
              </div>
            
            </div>
          </div>
        </div>
        <!--########### modal box 1 End  ###############-->



        
        <!--######## modal box 2 start ############# -->
        <!-- The modal -->
        <div class="modal fade" id="sponsor2" tabindex="-1" role="dialog" aria-labelledby="modalLabelSmall"
          aria-hidden="true">
          <div class="modal-dialog modal-md">
            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="modalLabelSmall">Sponsors Form</h4>
              </div>

              <div class="modal-body">     
                <div class="row">

                <form action="sponsor-submit.php" method="POST">
                  <div class="col-lg-6">
                    <label for="inputHelpBlock">First Name</label>
                    <input type="text" id="inputHelpBlock" name="first_name" class="form-control" aria-describedby="helpBlock">
                  </div>
                  <div class="col-lg-6">
                    <label for="inputHelpBlock">Last Name</label>
                    <input type="text" id="inputHelpBlock" name="last_name" class="form-control" aria-describedby="helpBlock">
                  </div>
                  <div class="col-lg-6">
                    <label for="inputHelpBlock">Email *</label>
                    <input type="text" id="inputHelpBlock" name="email" class="form-control mt-3" aria-describedby="helpBlock">
                  </div>
                  <div class="col-lg-6">
                    <label for="inputHelpBlock">Phone</label>
                    <input type="text" id="inputHelpBlock" name="phone" class="form-control" aria-describedby="helpBlock">
                  </div>
                  
                  <div class="col-lg-6">
                    <label for="inputHelpBlock">Description</label>
                    <input type="text" id="inputHelpBlock" name="description" class="form-control" aria-describedby="helpBlock">
                  </div>
                  

                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="disabledSelect">Types</label>
                      <select id="speaker-conferencee" name="type" class="form-control" onchange="checkupdyess();">
                        <option selected disabled>select Option</option>
                        <!-- <option value="Institutes">Institutes</option> -->
                        <option value="Silver Sponsors">Silver Sponsors</option>
                        <!-- <option value="Gold Sponsors">Gold Sponsors</option>
                        <option value="Platinum Sponsors">Platinum Sponsors</option> -->
                      </select>
                    </div>
                  </div>
                  
                  <div class="col-lg-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                  </form>
                </div>
                
              </div>
            
            </div>
          </div>
        </div>
        <!--########### modal box 2 End  ###############-->


        <!--######## modal box 3 start ############# -->
        <!-- The modal -->
        <div class="modal fade" id="sponsor3" tabindex="-1" role="dialog" aria-labelledby="modalLabelSmall"
          aria-hidden="true">
          <div class="modal-dialog modal-md">
            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="modalLabelSmall">Sponsors Form</h4>
              </div>

              <div class="modal-body">     
                <div class="row">

                <form action="sponsor-submit.php" method="POST">
                  <div class="col-lg-6">
                    <label for="inputHelpBlock">First Name</label>
                    <input type="text" id="inputHelpBlock" name="first_name" class="form-control" aria-describedby="helpBlock">
                  </div>
                  <div class="col-lg-6">
                    <label for="inputHelpBlock">Last Name</label>
                    <input type="text" id="inputHelpBlock" name="last_name" class="form-control" aria-describedby="helpBlock">
                  </div>
                  <div class="col-lg-6">
                    <label for="inputHelpBlock">Email *</label>
                    <input type="text" id="inputHelpBlock" name="email" class="form-control mt-3" aria-describedby="helpBlock">
                  </div>
                  <div class="col-lg-6">
                    <label for="inputHelpBlock">Phone</label>
                    <input type="text" id="inputHelpBlock" name="phone" class="form-control" aria-describedby="helpBlock">
                  </div>
                  
                  <div class="col-lg-6">
                    <label for="inputHelpBlock">Description</label>
                    <input type="text" id="inputHelpBlock" name="description" class="form-control" aria-describedby="helpBlock">
                  </div>
                  

                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="disabledSelect">Types</label>
                      <select id="speaker-conferencee" name="type" class="form-control" onchange="checkupdyess();">
                        <option selected disabled>select Option</option>
                        <!-- <option value="Institutes">Institutes</option> -->
                        <!-- <option value="Silver Sponsors">Silver Sponsors</option> -->
                        <option value="Gold Sponsors">Gold Sponsors</option>
                        <!-- <option value="Platinum Sponsors">Platinum Sponsors</option> -->
                      </select>
                    </div>
                  </div>
                  
                  <div class="col-lg-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                  </form>
                </div>
                
              </div>
            
            </div>
          </div>
        </div>
        <!--########### modal box 3 End  ###############-->

<!--######## modal box 4 start ############# -->
        <!-- The modal -->
        <div class="modal fade" id="sponsor4" tabindex="-1" role="dialog" aria-labelledby="modalLabelSmall"
          aria-hidden="true">
          <div class="modal-dialog modal-md">
            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="modalLabelSmall">Sponsors Form</h4>
              </div>

              <div class="modal-body">     
                <div class="row">

                <form action="sponsor-submit.php" method="POST">
                  <div class="col-lg-6">
                    <label for="inputHelpBlock">First Name</label>
                    <input type="text" id="inputHelpBlock" name="first_name" class="form-control" aria-describedby="helpBlock">
                  </div>
                  <div class="col-lg-6">
                    <label for="inputHelpBlock">Last Name</label>
                    <input type="text" id="inputHelpBlock" name="last_name" class="form-control" aria-describedby="helpBlock">
                  </div>
                  <div class="col-lg-6">
                    <label for="inputHelpBlock">Email *</label>
                    <input type="text" id="inputHelpBlock" name="email" class="form-control mt-3" aria-describedby="helpBlock">
                  </div>
                  <div class="col-lg-6">
                    <label for="inputHelpBlock">Phone</label>
                    <input type="text" id="inputHelpBlock" name="phone" class="form-control" aria-describedby="helpBlock">
                  </div>
                  
                  <div class="col-lg-6">
                    <label for="inputHelpBlock">Description</label>
                    <input type="text" id="inputHelpBlock" name="description" class="form-control" aria-describedby="helpBlock">
                  </div>
                  

                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="disabledSelect">Types</label>
                      <select id="speaker-conferencee" name="type" class="form-control" onchange="checkupdyess();">
                        <option selected disabled>select Option</option>
                        <!-- <option value="Institutes">Institutes</option> -->
                        <!-- <option value="Silver Sponsors">Silver Sponsors</option> -->
                        <!-- <option value="Gold Sponsors">Gold Sponsors</option> -->
                        <option value="Platinum Sponsors">Platinum Sponsors</option>
                      </select>
                    </div>
                  </div>
                  
                  <div class="col-lg-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                  </form>
                </div>
                
              </div>
            
            </div>
          </div>
        </div>
        <!--########### modal box 4 End  ###############-->








  














  <section class="cta-card">
  <div class="cta-card__container">
    <header class="cta-card__header">
      <p class="cta-card__title">Already working together?</p>
      <p class="cta-card__description">
        Log in to your account and connect with your teammates!
      </p>
    </header>
    <div class="cta-card__input-box">
    <center>
    <a href="downloadpdf.php?file=Customer Data" type="button" class="btn-call-action">Invitation</a>
    </center>
    </div>
    
  </div>
</section>



  <!-- Start contact Area -->
  <div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">

          <!-- Start Google Map -->
          <!-- <div class="col-md-6 col-sm-6 col-xs-12"> -->
          <!-- Start Map -->
          <!-- <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452"
              width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe> -->
          <!-- End Map -->
          <!-- </div> -->
          <!-- End Google Map -->

          <!-- Start  contact -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="form contact-form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="contact-submit.php" method="POST">
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                        data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                      <!-- <div class="validation"></div> -->
                    </div>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                        data-rule="email" data-msg="Please enter a valid email" />
                      <!-- <div class="validation"></div> -->
                    </div>
                  </div>

                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <textarea class="form-control" name="message" rows="5" data-rule="required"
                        data-msg="Please write something for us" placeholder="Message"></textarea>
                      <!-- <div class="validation"></div> -->
                    </div>
                    <div class="text-centerr"><button type="submit">Send Message</button></div>
                  </div>
                  </div>
              </form>

            </div>
          </div>
          <!-- End Left contact -->
          <div class="col-md-6 col-sm-6 col-xs-12" id="contact-us">
            <div class="well-middlee">
              <div class="single-well">
                <a href="#">
                  <h4 class="sec-head">GET IN TOUCH</h4>
                </a>
                <h2 class="about-h22">
                  CONTACT US FOR FURTHER INFORMATION
                </h2>

                <div class="contact-icon text-center">
                  <div class="single-icon">
                    <i class="fa fa-calendar left-icon"></i>
                    <p>
                      EVENT VENUE:<br>
                      <span>Pearl Continental Hotel</span>
                    </p>
                  </div>
                </div>

                <div class="contact-icon text-center">
                  <div class="single-icon">
                    <i class="fa fa-map-marker left-icon"></i>
                    <p>
                      LOCATION ADDRESS:<br>
                      <span class="karachi-address">Karachi Sindh</span>
                    </p>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Area -->

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452"
              width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
  </div>

  <!-- Start Footer bottom Area -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <!-- <h2><span>e</span>Business</h2> -->
                  <img src="pec-img/logo-dark.webp" alt="" class="logo-pec">
                </div>

                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                  totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
                <!-- <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pinterest"></i></a>
                    </li>
                  </ul>
                </div> -->
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-2 col-sm-3 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>useful links</h4>
                <div class="footer-contacts">
                  <ul>
                 <li><a href="">Home</a></li>
                 <li><a href="">About Us </a></li>
                 <li><a href="">Schedules</a></li>
                 <li><a href="">Commiee Members</a></li>
                 <li><a href="">Our Sponsors</a></li>
                 <li><a href="">Contact Us</a></li>
                </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-2 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Get in Touch</h4>
                <div class="footer-contacts">
                  <ul>
                 <li><a href="fblive.php">Social link</a></li>
                 <li><a href="">About Us </a></li>
                 <li><a href="">Schedules</a></li>
                 <li><a href="">Commiee Members</a></li>
                 <li><a href="">Our Sponsors</a></li>
                 <li><a href="">Contact Us</a></li>
                </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Contact Us</h4>
                <div class="footer-contacts">
                  <ul>
                 <li><p><i class="fa fa-home me-3"></i> Pearl Continental Hotel</p></li>
                 <li><p><i class="fa fa-envelope me-3"></i> info@example.com</p></li>
                 <li><p><i class="fa fa-phone me-3"></i> + 01 234 567 88</p></li>
                </ul>
                </div>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pinterest"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12 footer-text-bottom">
            <div class="copyright text-center">
              <p>
                &copy; Copyright. All Rights Reserved
              </p>
            </div>
            <div class="credits">
              &nbsp;Designed by <a href="https://bootstrapmade.com/">MATZ Solutions</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <!-- <script src="lib/jquery/jquery.min.js"></script> -->
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->

  <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script> -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script> -->
  <!-- <script src="lib/bootstrap/js/bootstrap.min.js"></script> -->
  <!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script> -->



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/knob/jquery.knob.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="lib/appear/jquery.appear.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <script src="js/main.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script>
    $(document).ready(function () {
      $("#row22").hide();
      $("#row33").hide();

      $(".tab-one").click(function () {
        $("#row11").show("fast");
        $("#row22").hide("fast");
        $("#row33").hide("fast");
        $(this).addClass("active1");
        $(".tab-second").removeClass("active1");
        $(".tab-third").removeClass("active1");
      });
      $(".tab-second").click(function () {
        $("#row22").show("fast");
        $("#row11").hide("fast");
        $("#row33").hide("fast");
        $(this).addClass("active1");
        $(".tab-one").removeClass("active1");
        $(".tab-third").removeClass("active1");
      });
      $(".tab-third").click(function () {
        $("#row33").show("fast");
        $("#row11").hide("fast");
        $("#row22").hide("fast");
        $(this).addClass("active1");
        $(".tab-one").removeClass("active1");
        $(".tab-second").removeClass("active1");
      });
    });
  </script>

      <!-- onchange last of completed Degree input start  -->
      <script>
        function checkupdyes() {
            var dropdown = document.getElementById("speaker-conference");
            var current_value = dropdown.options[dropdown.selectedIndex].value;
        
            if (current_value == "Speaker") {
                document.getElementById("description-talk").style.display = "block";
                document.getElementById("intend-delivery").style.display = "block";
                document.getElementById("abstract-paper").style.display = "block";
                document.getElementById("committee-member-name").style.display = "none";

       
            }
            else if (current_value == "Committee Members") {
                document.getElementById("committee-member-name").style.display = "block";
                document.getElementById("description-talk").style.display = "none";
                document.getElementById("intend-delivery").style.display = "none";
                document.getElementById("abstract-paper").style.display = "none";
            }
            else {
                document.getElementById("description-talk").style.display = "none";
                document.getElementById("intend-delivery").style.display = "none";
                document.getElementById("abstract-paper").style.display = "none";
                document.getElementById("committee-member-name").style.display = "none";

            }

           
        }
            </script>
            <!-- onchange last of completed Degree input End  -->

            <!-- count down days start  -->
            <script>
              (function () {
  const second = 1000,
    minute = second * 60,
    hour = minute * 60,
    day = hour * 24;

  //I'm adding this section so I don't have to keep updating this pen every year :-)
  //remove this if you don't need it
  let today = new Date(),
    dd = String(today.getDate()).padStart(2, "0"),
    mm = String(today.getMonth() + 1).padStart(2, "0"),
    yyyy = today.getFullYear(),
    nextYear = yyyy + 1,
    dayMonth = "05/08/",
    birthday = dayMonth + yyyy;

  today = mm + "/" + dd + "/" + yyyy;
  if (today > birthday) {
    birthday = dayMonth + nextYear;
  }
  //end

  const countDown = new Date(birthday).getTime(),
    x = setInterval(function () {
      const now = new Date().getTime(),
        distance = countDown - now;

      (document.getElementById("days").innerText = Math.floor(distance / day)),
        (document.getElementById("hours").innerText = Math.floor(
          (distance % day) / hour
        )),
        (document.getElementById("minutes").innerText = Math.floor(
          (distance % hour) / minute
        )),
        (document.getElementById("seconds").innerText = Math.floor(
          (distance % minute) / second
        ));

      //do something later when date is reached
      if (distance < 0) {
        document.getElementById("headline").innerText = "It's my birthday!";
        document.getElementById("countdown").style.display = "none";
        document.getElementById("content").style.display = "block";
        clearInterval(x);
      }
      //seconds
    }, 0);
})();

            </script>
                        <!-- count down days End  -->
</body>

</html>
