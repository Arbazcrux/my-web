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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/new.css">
<link rel="stylesheet" type="text/css" href="css/electronic.css">
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
          <li class="dropdown"><a href="index.php">HOME</a>
            
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
<section class="serviceElectronic">
  <div class="innersec">
  <div class="container">
    <div class="backTop">
      <a class="button primary large" href="service.php"><i class="fa fa-backward" aria-hidden="true"></i><b>  BACK TO SERVICES</b></a></div>
    <div class="bgElectronic">
      <div class="side">
      <h1 class="electrician">Electronic Items Repairing</h1>
  <p class="electrician">All repairs are evaluated, repaired and tested 100% prior to leaving our facility. Let us show you how to lower production costs by repairing your electronic equipment.</p>
</div>
<div class="form">
        <h1>Order Now</h1>
        <form action="electronic.php" method="post">
        <input type="text" name="user_name" placeholder="Enter User Name">
        <input type="email" name="user_email" placeholder="Enter your Email Adress">
        <input type="number" name="user_num" placeholder="Alternate Phone (03XXXXXXXXX)">
        <select class="select" name="category"><option>Choose category</option><option>Electronic Repairing</option></select>
        <textarea placeholder="Adress" name="adress"></textarea>
        <input type="submit" name="user" value="Submit" onclick="myFunction()">
      </form>
      <?php
            $con = mysqli_connect("localhost","root","","index_php");

          if (mysqli_connect_errno())
                {
                  echo "MySQLi Connection was not established: " . mysqli_connect_error();
                }
                // Inserting Data
                if(isset($_POST['user'])){

                  $user_name = $_POST['user_name'];
                  $user_email = $_POST['user_email'];
                  $user_pass = $_POST['user_num'];
                  $user_cat = $_POST['category'];
                  $user_add = $_POST['adress'];


                // Creating MySQLi query

                  $query = "insert into order_form(
                            user_name,user_email,user_num,category,adress) VALUES('$user_name','$user_email','$user_pass','$user_cat','$user_add')";

                $insert_query = mysqli_query($con,$query);

                if($insert_query){
                  echo "<h2> User Registered, Thanks </h2>";
                }
                }
            ?>
        <div class="formFooter">
          <p>Contact us our whatsapp Num <a href="">03112702097</a>and mail us<br><a href="">meer.maqsood36@yahoo.com</a></p>
        </div>
      </div>
    </div><!-- bg -->
    <div class="back">
      <a class="button primary large" href="service.php"><i class="fa fa-backward" aria-hidden="true"></i><b>  BACK TO SERVICES</b></a>
   </div>
  </div><!-- container -->
  </div>
</section><!-- service -->     
<!--  ==================================START   TABBED SLIDER SECTION================================================-->
  

<!--======================================================================================================= -->
<!--  =================================END   TABED SLIDER SECTION================================================-->              
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
            <p><i class="fa fa-phone padding" aria-hidden="true"></i>: 407 302 4444<br><i class="fa fa-envelope padding" aria-hidden="true"></i>: mir.maqsood36@gmail.com</p>
        
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
            <form class="form-horizontal">
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
            <form class="form-horizontal" action="about.php" method="post">
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
            <?php
            $con = mysqli_connect("localhost","root","","index_php");

          if (mysqli_connect_errno())
                {
                  echo "MySQLi Connection was not established: " . mysqli_connect_error();
                }
                // Inserting Data
                if(isset($_POST['login'])){

                  $user_name = $_POST['username'];
                  $user_email = $_POST['email'];
                  $user_pass = $_POST['password'];


                // Creating MySQLi query

                  $query = "insert into login(
                            username,email,password) VALUES('$user_name','$user_email','$user_pass')";

                $insert_query = mysqli_query($con,$query);

                if($insert_query){
                  echo "<h2> User Registered, Thanks </h2>";
                }
                }
            ?>
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


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript">

  $(document).ready(function(){
    $(".form").click(function(){
      $(".form").css("opacity","1");
      $(".form").css("cursor","unset");
    });
  });
    </script>
<!--  ================================= END  COUNTER  SECTION================================================-->
<div class="hide">
</body>
</html>