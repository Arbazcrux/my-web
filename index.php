<?php

  if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])){
    $con = mysqli_connect("localhost","root","","index_php");

          if (mysqli_connect_errno())
                {
                  echo "MySQLi Connection was not established: " . mysqli_connect_error();
                }
                // Inserting Data
                if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])){

                  $user_name = $_POST['username'];
                  $user_email = $_POST['email'];
                  $user_pass = $_POST['password'];


                // Creating MySQLi query

                  $query = "insert into register(
                            username,email,password) VALUES('$user_name','$user_email','$user_pass')";

                $insert_query = mysqli_query($con,$query);

                if($insert_query){

                     header('Location:register.php');
                
                }

                }
  }

?>


<?php
  if(isset($_POST['userid']) && isset($_POST['passwordinput'])){
    $con = mysqli_connect("localhost","root","","index_php");

          if (mysqli_connect_errno())
                {
                  echo "MySQLi Connection was not established: " . mysqli_connect_error();
                }
                // Inserting Data
                if(isset($_POST['userid']) && isset($_POST['passwordinput'])){

                  $user_name = $_POST['userid'];
                  $user_pass = $_POST['passwordinput'];


                // Creating MySQLi query

                  $query = "insert into signin(
                            userid,passwordinput) VALUES('$user_name','$user_pass')";

                $insert_query = mysqli_query($con,$query);

                if($insert_query){

                     header('Location:login.php');
                
                }

                }
  }


if(isset($_POST['userid']) && $_POST['passwordinput']){

   $email = $_POST['userid'];
  $password =$_POST['passwordinput'];

  $con = mysqli_connect("localhost","root","","index_php");

  if ($con->connect_error) {
    die("Connection Failed: " . $con->connect_error);
  }

  $sql = "SELECT `email`, `password` FROM `register` where `email` = '$email' AND `password` = '$password'";
  $result = mysqli_query($con,$sql);
  if($result){
    if ($result->num_rows > 0) {
        header('Location:service.php');
        
      }
    else {

      header('Location:login.php');
    }
  }

}  
?>

<!DOCTYPE html>
<html>
<head>
	<title>ASAANI</title> 

	<link href="https://fonts.googleapis.com/css?family=Montserrat:600" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300i" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.png"> 


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/login.css">

</head>
<body>




<!-- start header section -->
<div class="hader">
  <nav class="navbar navbar-default navbar-fixed-top style_nav" data-spy="affix" data-offset-top="10" data-offset-bottom="200">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand style_brand" href="#"><img class="img-responsive myImage" src="images/asaanii.png"><img class="img-responsive secondImg" src="images/logo.png"></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav pull-right">
          <li class=""><a href="index.php">HOME</a>
            
          </li>
          <li><a href="about.php">ABOUT US</a></li>
          <li><a href="service.php">SERVICES</a>
            
          </li>
          <li><a href="contact.php">CONTACT US</a></li>
          <li><a class="btn btn-primary btn-lg mybtn" href="#signup" data-toggle="modal" data-target=".bs-modal-sm">SIGN IN/REGISTER</a></li>
        </ul>


      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
</div>
<!-- end header section -->
<!--======================================================================================================= -->
<!--  ==================================START SLIDER SECTION================================================-->


<section id="slider">
  <div class="overlay_background">
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
          <div class="slider_item1 slider_bg_1">
            <div class="overlay_background">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="description wow  fadeInUp" data-slide="2" style="top: 206.389px;">
                      <div class="title">
                        <span class="break">We love to maintain your</span>
                        <h1>BEAUTIFUL HOME<span class="break">Home Repair Services From ASAANI now in Karachi</span></h1>
                      </div>
  
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="slider_item1 slider_bg_2">
            <div class="overlay_background">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="description wow fadeInUp" data-slide="2" style="top: 206.389px;">
                      <div class="title">
                        <span class="break">We take pride in sending</span>
                        <h1>VERIFIED SERVICEMEN<span class="break">Home Repair Services From ASAANI now in Karachi</span></h1>
                      </div>
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="slider_item1 slider_bg_3">
            <div class="overlay_background">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="description wow fadeInUp" data-slide="2" style="top: 206.389px;">
                      <div class="title">
                        <span class="break">We understand the value of</span>
                        <h1>PRECISE BILLING<span class="break">Home Repair Services From ASAANI now in Karachi</span></h1>
                      </div>
                      </div>
                   
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>

      <!-- Controls -->

    </div>
  </div>
</section>

<!--======================================================================================================= -->
<!--  =================================END SLIDER SECTION================================================-->


<!--======================================================================================================= -->
<!--  ==================================START  SOLUTION SECTION================================================-->

<section id="solution">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-12">
        <div class="sectionTitle">
          
          <h2 class="title">Why Use ASAANI?</h2>
        </div>
      </div>
      <div class="col-md-8 col-sm-12">
        <div class="row">
          <div class="col-sm-6">
            <div class="iconBox3">
              <div class="icon"><i class="fa fa-check-square-o"></i></div>
              <h5>Trusted and Verified Agents</h5>
              <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus</p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="iconBox3">
              <div class="icon"><i class="fa fa-check-square-o"></i></div>
              <h5>User Friendly and Effective</h5>
              <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus</p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="iconBox3">
              <div class="icon"><i class="fa fa-check-square-o"></i></div>
              <h5>One-Stop Destination</h5>
              <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus</p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="iconBox3">
              <div class="icon"><i class="fa fa-check-square-o"></i></div>
              <h5>Customer Feed Back</h5>
              <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<!--======================================================================================================= -->
<!--  =================================END  SOLUTION SECTION================================================-->


<!--======================================================================================================= -->
<!--  ==================================START   TABBED SLIDER SECTION================================================-->
	<div class="sectionTitle center">   
          <h2 class="title underline">SERVICES</h2>
        </div>
<section id="tabbed_slider">
  <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

      <ul class="    iconTabs nav row  aos-init aos-animate">
        <li data-target="#myCarousel" data-slide-to="0" class="col-md-3 active nav1">
          <a href="" target="#electration" class="active">
            <i class="fa fa-lightbulb-o icon"></i>
            <h6>Electrician</h6>
          </a>
        </li>
     
        <li data-target="#myCarousel" data-slide-to="1" class="col-md-3 nav1">
          <a href="" class="">
            <i class="fa fa-wrench icon"></i>
            <h6>Plumber</h6>
          </a>
        </li>
        <li data-target="#myCarousel" data-slide-to="2" class="col-md-3 nav1">
          <a href="#" class="">
            <i class="fa fa-wrench icon"></i>
            <h6>AC & Refragrator</h6>
          </a>
        </li>
        <li data-target="#myCarousel" data-slide-to="3" class="col-md-3 nav1">
          <a href="#a" class="">
            <i class="fa fa-wrench icon"></i>
            <h6>Motor Repairing</h6>
          </a>
        </li>
    
            
        <li data-target="#myCarousel" data-slide-to="4" class="col-md-3 active nav1">
          <a href="" class="">
            <i class="fa fa-desktop icon"></i>
            <h6>Electronics Repair</h6>
          </a>
        </li>
     
        <li data-target="#myCarousel" data-slide-to="5" class="col-md-3 nav1">
          <a href="" class="">
            <i class="fa fa-paint-brush icon"></i>
            <h6>Painter</h6>
          </a>
        </li>
        <li data-target="#myCarousel" data-slide-to="6" class="col-md-3 nav1">
          <a href="#" class="">
            <i class="fa fa-gavel icon"></i>
            <h6>Carpenter</h6>
          </a>
        </li>
        <li data-target="#myCarousel" data-slide-to="7" class="col-md-3 nav1">
          <a href="#a" class="">
            <i class="fa fa-gavel icon"></i>
            <h6>Mason</h6>
          </a>
        </li>
      </ul>


      <!-- Wrapper for slides -->
      <div class="carousel-inner">

        <div class="item active set_slider_padding">
          <div id="electration" class="row">
            <div class="col-sm-6 mBase25 aos-init aos-animate" data-aos="fade-in">
              <img src="images/electration.jpg" class="responsive" alt="Image title">
            </div>
            <div class="col-sm-6 aos-init aos-animate" data-aos="fade-in">
              <div class="sectionTitle">
                
                <h2 class="title">Electrician</h2>
              </div>
              <p class="check_desc">Book trusted and expert electricians for all electrical installation and repair tasks. All electricians are verified, skilled in wiring and electrical knowledge as well as punctual so that you can have a smooth and secure experience of booking services with ASAANI.</p>
              <ul class="itemList mBase40">
                <li><i class="fa fa-check-square-o"></i><span class="check_desc">Experiance</span></li>
                <li><i class="fa fa-check-square-o"></i><span class="check_desc">Hardworker</span></li>
                <li><i class="fa fa-check-square-o"></i><span class="check_desc">Good Nature</span></li>
                <li><i class="fa fa-check-square-o"></i><span class="check_desc">Work in the time</span></li>
              </ul>
              <a href="electracian.php" class="button primary">BOOK NOW</a>
            </div>
          </div>
        </div>
        <!-- End Item -->

        <div class="item set_slider_padding">
          <div id="plumber" class="row jshide" style="display: block;">
            <div class="col-sm-6 mBase25">
              <img src="images/plumber.jpg" class="responsive" alt="Image title">
            </div>
            <div class="col-sm-6">
              <div class="sectionTitle">
                
                <h2 class="title">PLUMBER</h2>
              </div>
              <p class="check_desc">Book plumbers for all your plumbing/pipeline repair and installation tasks. All our plumbers are background verified, arrive within 6-8 working hours of booking and are skilled to ensure a safe and swift experience for you.</p>
              <ul class="itemList mBase40">
                <li><i class="fa fa-check-square-o"></i><span class="check_desc">Experiance</span></li>
                <li><i class="fa fa-check-square-o"></i><span class="check_desc">Hardworker</span></li>
                <li><i class="fa fa-check-square-o"></i><span class="check_desc">Good Nature</span></li>
                <li><i class="fa fa-check-square-o"></i><span class="check_desc">Work in the time</span></li>
              </ul>
              <a href="plumber.php" class="button primary">BOOK NOW</a>
            </div>
          </div>
        </div>
        <!-- End Item -->

        <div class="item set_slider_padding">
          <div id="ac" class="row jshide" style="display: block;">
            <div class="col-sm-6 mBase25">
              <img src="images/ac2.jpg" class="responsive" alt="Image title">
            </div>
            <div class="col-sm-6">
              <h3 class="core_values">AC & REFRAGRATOR</h3>
              <p class="check_desc">Book verified & skilled A.C technicians to get a new Air conditioner installed or your old one serviced or refilled with gas within a few seconds.</p>
              <ul class="itemList mBase40">
                <li><i class="fa fa-check-square-o"></i><span class="check_desc">Experiance</span></li>
                <li><i class="fa fa-check-square-o"></i><span class="check_desc">Hardworker</span></li>
                <li><i class="fa fa-check-square-o"></i><span class="check_desc">Good Nature</span></li>
                <li><i class="fa fa-check-square-o"></i><span class="check_desc">Work in the time</span></li>
              </ul>
              <a href="ac.php" class="button primary">BOOK NOW</a>
            </div>
          </div>

        </div>
        <!-- End Item -->

        <div class="item set_slider_padding">
          <div id="motor" class="row jshide" style="display: block;">
            <div class="col-sm-6 mBase25">
              <img src="images/motor2.jpg" class="responsive" alt="Image title">
            </div>
            <div class="col-sm-6">
               <div class="sectionTitle">
                
                <h2 class="title">Motor Repairing</h2>
              </div>
              <p class="check_desc">Let us come to you for repairs. Our experienced technicians can perform electric motor repair—including service support for the elevator industry—as well as remanufacturing and preventative maintenance.</p>
              <ul class="itemList mBase40">
                <li><i class="fa fa-check-square-o"></i><span class="check_desc">Experiance</span></li>
                <li><i class="fa fa-check-square-o"></i><span class="check_desc">Hardworker</span></li>
                <li><i class="fa fa-check-square-o"></i><span class="check_desc">Good Nature</span></li>
                <li><i class="fa fa-check-square-o"></i><span class="check_desc">Work in the time</span></li>
              </ul>
              <a href="motor.php" class="button primary">BOOK NOW</a>
            </div>
          </div>
        </div>
        <!-- End Item -->
        <div class="item set_slider_padding">
          <div id="electration" class="row">
            <div class="col-sm-6 mBase25 aos-init aos-animate" data-aos="fade-in">
              <img src="images/electric.jpg" class="responsive" alt="Image title">
            </div>
            <div class="col-sm-6 aos-init aos-animate" data-aos="fade-in">
              <div class="sectionTitle">
                
                <h2 class="title">Electronics Repair</h2>
              </div>
              <p class="check_desc">Book trusted and expert electricians for all electrical installation and repair tasks. All electricians are verified, skilled in wiring and electrical knowledge as well as punctual so that you can have a smooth and secure experience of booking services with ASAANI.</p>
              <ul class="itemList mBase40">
                <li><i class="fa fa-check-square-o"></i><span class="check_desc">Experiance</span></li>
                <li><i class="fa fa-check-square-o"></i><span class="check_desc">Hardworker</span></li>
                <li><i class="fa fa-check-square-o"></i><span class="check_desc">Good Nature</span></li>
                <li><i class="fa fa-check-square-o"></i><span class="check_desc">Work in the time</span></li>
              </ul>
              <a href="electronic.php" class="button primary">BOOK NOW</a>
            </div>
          </div>
        </div>
        <!-- End Item -->

        <div class="item set_slider_padding">
          <div id="plumber" class="row jshide" style="display: block;">
            <div class="col-sm-6 mBase25">
              <img src="images/painter2.jpg" class="responsive" alt="Image title">
            </div>
            <div class="col-sm-6">
              <div class="sectionTitle">
                
                <h2 class="title">Painter</h2>
              </div>
              <p class="check_desc">Book painters for renovation tasks and give your home/office a new look. Our painters are also background verified, at your doorstep within 6-8 hours of booking and have a know-how of latest trends (theme walls, wallpapers, texture painting etc).</p>
              <ul class="itemList mBase40">
                <li><i class="fa fa-check-square-o"></i><span class="check_desc">Experiance</span></li>
                <li><i class="fa fa-check-square-o"></i><span class="check_desc">Hardworker</span></li>
                <li><i class="fa fa-check-square-o"></i><span class="check_desc">Good Nature</span></li>
                <li><i class="fa fa-check-square-o"></i><span class="check_desc">Work in the time</span></li>
              </ul>
              <a href="painter.php" class="button primary">BOOK NOW</a>
            </div>
          </div>
        </div>
        <!-- End Item -->

        <div class="item set_slider_padding">
          <div id="ac" class="row jshide" style="display: block;">
            <div class="col-sm-6 mBase25">
              <img src="images/carpenter2.jpg" class="responsive" alt="Image title">
            </div>
            <div class="col-sm-6">
              <h3 class="core_values">Carpenter</h3>
              <p class="check_desc">Book carpenters for your furniture repair and installation/fixation issues. Our carpenters are also experienced in making new furniture items from the scratch. All carpenters are verified, punctual and adamant to provide you convenience.</p>
              <ul class="itemList mBase40">
                <li><i class="fa fa-check-square-o"></i><span class="check_desc">Experiance</span></li>
                <li><i class="fa fa-check-square-o"></i><span class="check_desc">Hardworker</span></li>
                <li><i class="fa fa-check-square-o"></i><span class="check_desc">Good Nature</span></li>
                <li><i class="fa fa-check-square-o"></i><span class="check_desc">Work in the time</span></li>
              </ul>
              <a href="carpenter.php" class="button primary">BOOK NOW</a>
            </div>
          </div>

        </div>
        <!-- End Item -->

        <div class="item set_slider_padding">
          <div id="motor" class="row jshide" style="display: block;">
            <div class="col-sm-6 mBase25">
              <img src="images/mason2.jpg" class="responsive" alt="Image title">
            </div>
            <div class="col-sm-6">
               <div class="sectionTitle">
                
                <h2 class="title"> Mason</h2>
              </div>
              <p class="check_desc">Book masons for construction and tiling/flooring purposes. Masons at Sukoon are 100% verified and available on same day as of booking to ensure your home improvement tasks are never delayed</p>
              <ul class="itemList mBase40">
                <li><i class="fa fa-check-square-o"></i><span class="check_desc">Experiance</span></li>
                <li><i class="fa fa-check-square-o"></i><span class="check_desc">Hardworker</span></li>
                <li><i class="fa fa-check-square-o"></i><span class="check_desc">Good Nature</span></li>
                <li><i class="fa fa-check-square-o"></i><span class="check_desc">Work in the time</span></li>
              </ul>
              <a href="mason.php" class="button primary">BOOK NOW</a>
            </div>
          </div>
        </div>
        <!-- End Item -->
      </div>
      <!-- End Carousel Inner -->

    </div>
  </div>
</section>

<!--======================================================================================================= -->
<!--  =================================END   TABED SLIDER SECTION================================================-->


<!--======================================================================================================= -->
<!--  =================================START    SERVICES SECTION================================================-->
<section id="services" class="parallax">
  <div class="inner">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 sectionTitle white">
      
          <h2 class="title">HOW WE WORK TO PROVIDE YOU EASY</h2>
        </div>
        
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 elem aos-init aos-animate wow fadeInUp" data-aos="zoom-in">
          <div class="service_item">
            <i class="fa fa-circle" aria-hidden="true"></i>
            <h4>STEP ONE</h4>
            <p>You book a worker convenient on our website or give us a call.</p>
          </div>
        </div>
        <!-- end item 1 -->
        <div class="col-md-4 col-sm-6 elem aos-init aos-animate wow fadeInUp" data-aos="zoom-in">
          <div class="service_item">
            <i class="fa fa-circle" aria-hidden="true"></i>
            <h4>Second Step</h4>
            <p>Sed ut perspiciatis unde omnis iste error sit voluptatem accusantium.</p>
          </div>
        </div>
        <!-- end item 2 -->
        <div class="col-md-4 col-sm-6 elem aos-init aos-animate wow fadeInUp" data-aos="zoom-in">
          <div class="service_item">
           <i class="fa fa-circle" aria-hidden="true"></i>
            <h4>Thrid Step</h4>
            <p>Sed ut perspiciatis unde omnis iste error sit voluptatem accusantium.</p>
          </div>
        </div>
        <!-- end item 3 -->
        <div class="col-md-4 col-sm-6 elem aos-init aos-animate wow fadeInUp" data-aos="fade-up">
          <div class="service_item">
            <i class="fa fa-circle" aria-hidden="true"></i>
            <h4>Fourth Step</h4>
            <p>Sed ut perspiciatis unde omnis iste error sit voluptatem accusantium.</p>
          </div>
        </div>
        <!-- end item 4 -->
        <div class="col-md-4 col-sm-6 elem aos-init aos-animate wow fadeInUp" data-aos="fade-up">
          <div class="service_item">
            <i class="fa fa-circle" aria-hidden="true"></i>
            <h4>Fifth Step</h4>
            <p>Sed ut perspiciatis unde omnis iste error sit voluptatem accusantium.</p>
          </div>
        </div>
        <!-- end item 5 -->
        <div class="col-md-4 col-sm-6 elem aos-init aos-animate wow fadeInUp" data-aos="fade-up">
          <div class="service_item">
            <i class="fa fa-circle" aria-hidden="true"></i>
            <h4>Last Step</h4>
            <p>Sed ut perspiciatis unde omnis iste error sit voluptatem accusantium.</p>
          </div>
        </div>
        <!-- end item 6 -->
      </div>
    </div>
  </div>
</section>

<!--======================================================================================================= -->
<!--  =================================END  SERVICES SECTION================================================-->


<!--======================================================================================================= -->


<div id="tf-portfolio" class="content-area layout-two">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="sectionTitle center">
          
          <h2 class="title underline">Other Services</h2>
        </div>
      </div>
    </div>
    <div class="row nomargin">

      <div class="col-md-3 col-sm-6 col-xs-12 nopadding">
        <a href="#inline-1" data-gal="prettyPhoto[pp_gal]">
          <div class="portfolio-item">
            <div class="hover-bg">
              <div class="border">
                <div class="hover-txt">
                  <i class="ion-ios-plus-empty"></i>
                  <h4>Electrician</h4>
                  <br>
                  <a href="electracian.php" class="button primary">BOOK NOW</a>
                </div>
              </div>
            </div>
            <img src="images/election.jpg" class="img-responsive" alt="...">
          </div>
        </a>


      </div>

      <div class="col-md-3 col-sm-6 col-xs-12 nopadding">
        <a href="#inline-11" data-gal="prettyPhoto[pp_gal]">
          <div class="portfolio-item">
            <div class="hover-bg">
              <div class="border">
                <div class="hover-txt">
                  <i class="ion-ios-plus-empty"></i>
                  <h4>ELECTRONIC REPAIR</h4>
                  <br>
                  <a href="electronic.php" class="button primary">BOOK NOW</a>
                </div>
              </div>
            </div>
            <img src="images/mble.jpg" class="img-responsive" alt="...">
          </div>
        </a>

      </div>

      <div class="col-md-3 col-sm-6 col-xs-12 nopadding">
        <a href="#inline-3" data-gal="prettyPhoto[pp_gal]">
          <div class="portfolio-item">
            <div class="hover-bg">
              <div class="border">
                <div class="hover-txt">
                  <i class="ion-ios-plus-empty"></i>
                  <h4>Painter</h4>
                  <br>
                  <a href="painter.php" class="button primary">BOOK NOW</a>
                </div>
              </div>
            </div>
            <img src="images/work01.jpg" class="img-responsive" alt="...">
          </div>
        </a>

        <a href="#inline-6" data-gal="prettyPhoto[pp_gal]">
          <div class="portfolio-item">
            <div class="hover-bg">
              <div class="border">
                <div class="hover-txt">
                  <i class="ion-ios-plus-empty"></i>
                  <h4>PLUMBER</h4>
                  <br>
                  <a href="plumber.php" class="button primary">BOOK NOW</a>
                </div>
              </div>
            </div>
            <img src="images/worker.jpg" class="img-responsive" alt="...">
          </div>
        </a>

      </div>

      <div class="col-md-3 col-sm-6 col-xs-12  nopadding">
        <a href="#inline-3" data-gal="prettyPhoto[pp_gal]">
          <div class="portfolio-item">
            <div class="hover-bg">
              <div class="border">
                <div class="hover-txt">
                  <i class="ion-ios-plus-empty"></i>
                  <h4>Motor Repairing</h4>
                  <br>
                  <a href="motor.php" class="button primary">BOOK NOW</a>
                </div>
              </div>
            </div>
            <img src="images/work3.jpg" class="img-responsive" alt="...">
          </div>
        </a>

        <a href="#inline-6" data-gal="prettyPhoto[pp_gal]">
          <div class="portfolio-item set">
            <div class="hover-bg">
              <div class="border">
                <div class="hover-txt">
                  <i class="ion-ios-plus-empty"></i>
                  <h4>Carpenter</h4>
                  <br>
                  <a href="carpenter.php" class="button primary">BOOK NOW</a>
                </div>
              </div>
            </div>
            <img src="images/carp.jpg" class="img-responsive" alt="...">
          </div>
        </a>

      </div>

    </div>
  </div>
</div>
<!--  ================================= START GALLERY SECTION  SECTION================================================-->


<!--======================================================================================================= -->
<!--  ================================= END GALLERY  SECTION================================================-->


<!--  =================================  START COUNTER SECTION================================================-->
<!-- Here is the section -->

<section id="counter" class="counter">
  <div class="main_counter_area">
    <div class="overlay p-y-3">
      <div class="container">
        <div class="row">
          <div class="main_counter_content text-center white-text">
            <div class="col-md-3">
              <div class="single_counter p-y-2 m-t-1">
                <div class="counter_overlay"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                  <h2 class="statistic-counter">300</h2>
                  <p class="counter_text">CLIENTS</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="single_counter p-y-2 m-t-1">
                <div class="counter_overlay"> <i class="fa fa-bug" aria-hidden="true"></i>
                  <h2 class="statistic-counter">50</h2>
                  <p class="counter_text">PROJECTS</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="commom_background_img">
                <div class="single_counter p-y-2 m-t-1">
                  <div class="counter_overlay"> <i class="fa fa-home" aria-hidden="true"></i>
                    <h2 class="statistic-counter">15</h2>
                    <p class="counter_text">BRANCHES</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">

              <div class="single_counter p-y-2 m-t-1">
                <div class="counter_overlay"> <i class="fa fa-bicycle" aria-hidden="true"></i>
                  <h2 class="statistic-counter">150</h2>
                  <p class="counter_text">WORKER</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End of counter Section -->


<!-- START TESTIMONIAL SECTION -->

<section id="carousel">
  <div class="testimonial_overlay">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>
          <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
            <!-- Carousel indicators -->
            <ol class="carousel-indicators">
              <li data-target="#fade-quote-carousel" data-slide-to="0"></li>
              <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
              <li data-target="#fade-quote-carousel" data-slide-to="2" class="active"></li>
              <li data-target="#fade-quote-carousel" data-slide-to="3"></li>
              <li data-target="#fade-quote-carousel" data-slide-to="4"></li>
              <li data-target="#fade-quote-carousel" data-slide-to="5"></li>
            </ol>
            <!-- Carousel items -->
            <div class="carousel-inner">
              <div class="item">
                <div class="profile-circle"><img class="img-circle" src="http://commonpixel.com/themes/edgar/images/examples/user_02.jpg" alt="" /></div>
                <blockquote>
                  <div class="author">
                    <h5>Elaine MaryAnne</h5>
                    <p>The WayWire Corp</p>
                  </div>
                  <p class="test_para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                </blockquote>
              </div>
              <div class="item">
                <div class="profile-circle"><img class="img-circle" src="http://commonpixel.com/themes/edgar/images/examples/user_01.jpg" alt="" /></div>
                <blockquote>
                  <div class="author">
                    <h5>Roger Smith</h5>
                    <p>Acme Corporation</p>
                  </div>
                  <p class="test_para">We've hired the Nook team for our last project and we've been extremely satisfied with the services they provided! We'll definitely be going to use their awesome services in the near future and will recommended them to our partners and
                    colleagues for sure!</p>
                </blockquote>
              </div>
              <div class="active item">
                <div class="profile-circle"><img class="img-circle" src="http://commonpixel.com/themes/edgar/images/examples/user_03.jpg" alt="" /></div>
                <blockquote>
                  <div class="author">
                    <h5>Edgar Monk</h5>
                    <p>Weiland Corp</p>
                  </div>
                  <p class="test_para">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia
                    deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                </blockquote>
              </div>
              <div class="item">
                <div class="profile-circle"><img class="img-circle" src="http://commonpixel.com/themes/edgar/images/examples/user_02.jpg" alt="" /></div>
                <blockquote>
                  <div class="author">
                    <h5>Elaine MaryAnne</h5>
                    <p>The WayWire Corp</p>
                  </div>
                  <p class="test_para">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                </blockquote>
              </div>
              <div class="item">
                <div class="profile-circle"><img class="img-circle" src="http://commonpixel.com/themes/edgar/images/examples/user_01.jpg" alt="" /></div>
                <blockquote>
                  <div class="author">
                    <h5>Roger Smith</h5>
                    <p>Acme Corporation</p>
                  </div>
                  <p class="test_para">We've hired the Nook team for our last project and we've been extremely satisfied with the services they provided! We'll definitely be going to use their awesome services in the near future and will recommended them to our partners and
                    colleagues for sure!</p>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- END  TESTIMONILA SECTION -->




<!--  -->

<footer class="mastFooter">
  <div class="inner">
    <!-- START banner -->
    
    <!-- END banner -->

    <div class="container">
      <div class="row">
        <div class="footerTop">
              <div class="container">
      <div class="boxTwo">
        <h2 class="underlineWhite">VISIT US</h2>
            <p>235 E Michigan St,<br>Orlando,Fl 32114</p>
        
      </div>
      <div class="boxTwo">
        <h2 class="underlineWhite">SOCIALIZE WITH US</h2>
            <p class="para">
                            <a href="https://www.facebook.com/bootsnipp"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
              <a href="https://twitter.com/bootsnipp"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
              <a href="https://plus.google.com/+Bootsnipp-page"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
              <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
                </p>
            
        
      </div>
      <div class="boxTwo">
        <h2 class="underlineWhite">CONTACT US</h2>
            <p><i class="fa fa-phone padding" aria-hidden="true"></i>  : 407 302 4444<br><i class="fa fa-envelope padding" aria-hidden="true"></i>  : mir.maqsood36@gmail.com</p>
        
      </div>
    </div>
<div class="copyright">
	<h5>© COPYRIGHT 2017.</h5>
</div>

    
 </div>
      </div>
    </div>
  </div>
</footer>
<!--  -->
<!-- Modal -->
<div class="modal fade bs-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <br>
        <div class="bs-example bs-example-tabs">
            <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#signin" data-toggle="tab">Sign In</a></li>
              <li class=""><a href="#signup" data-toggle="tab">Register</a></li>
            </ul>
        </div>
      <div class="modal-body">
        <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade in" id="why">
        
        </div>
        <div class="tab-pane fade active in" id="signin">
            <form class="form-horizontal" action="index.php" method="post">
            <fieldset>
            <!-- Sign In Form -->
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="userid">Email</label>
              <div class="controls">
                <input required="" id="userid" name="userid" type="text" class="form-control myInput" placeholder="Enter your Email" class="input-medium" required="">
              </div>
            </div>

            <!-- Password input-->
            <div class="control-group">
              <label class="control-label" for="passwordinput">Password:</label>
              <div class="controls">
                <input required="" id="passwordinput" name="passwordinput" class="form-control" type="password" placeholder="********" class="input-medium">
              </div>
            </div>

            <!-- Multiple Checkboxes (inline) -->
            <div class="control-group">
              <label class="control-label" for="rememberme"></label>
              <div class="controls">
              
              </div>
            </div>
            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="signin"></label>
              <div class="controls">

                <button id="signin" name="signin" class="btn btn-success">Sign In</button>
              </div>
            </div>
            </fieldset>
            </form>
        </div>


        <div class="tab-pane fade" id="signup">
            <form class="form-horizontal" action="index.php" method="post">
            <fieldset>
            <!-- Sign Up Form -->
            
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="userid">Name:</label>
              <div class="controls">
                <input id="userid" name="username" class="form-control myInput" type="text" placeholder="Name" class="input-large" required="">
              </div>
            </div>

            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="Email">Email:</label>
              <div class="controls">
                <input id="Email" name="email" class="form-control myInput" type="text" placeholder="abc@xyz.com" class="input-large" required="">
              </div>
            </div>
            
            <!-- Password input-->
            <div class="control-group">
              <label class="control-label" for="password">Password:</label>
              <div class="controls">
                <input id="password" name="password" class="form-control" type="password" placeholder="********" class="input-large" required="">
                <em>1-8 Characters</em>
              </div>
            </div>
            
            <!-- Text input-->
            
            <!-- Multiple Radios (inline) -->
            
            
            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="confirmsignup"></label>
              <div class="controls">
                <button id="confirmsignup" name="login" class="btn btn-success">Sign Up</button>
              </div>
            </div>
            </fieldset>
            </form>

      </div>
    </div>
      </div>

      <div class="modal-footer">
      <center>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </center>
      </div>
    </div>
  </div>
</div>





<!--  -->
<!-- Add this script before </body> -->


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<!--  ================================= END  COUNTER  SECTION================================================-->
<div class="hide">
</body>
</html>