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
<link rel="stylesheet" type="text/css" href="css/contact.css">
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

<!-- CONTACT SECTION START -->

<!-- The Contact Us Page -->
<div class="jumbotron jumbotron-sm">
  <div class="background">
  <div class="container">
    <div class="row">
    </div>
      <div class="col-sm-12 col-lg-12 header"></div>
    </div>
  </div>
</div>
</div>
<div class="container card">
  <div class="row">
    <div class="col-sm-12 col-lg-12">
      <h1 class="h1">Contact Us <span class="fa fa-envelope"></span> <!--<small class="col-xs-12" style="padding-left: 0">We will get back to You</small>--></h1>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12 col-md-12">
      <div class="cardStyle">
        <form name="contact" id="form" data-toggle="validator" action="contact.php" method="post">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="name">
                  Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" name="user_name" />
              </div>
              <div class="form-group">
                <label for="email">
                  Email Address</label>
                <div class="input-group">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                  </span>
                  <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" name="user_email" />
                </div>
              </div>
              <div class="form-group">
                <label for="subject">
                  Subject</label>
                <select id="subject" name="subject" class="form-control" required="required">
                  <option value="none" selected="" disabled>Choose One:</option>
                  <option value="general">General Customer Service</option>
                  <option value="collaborate">Collaborate with Us</option>
                  <option value="bug">Found a Bug/Issue</option>
                  <option value="other">Any other Queries</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="name">
                  Message</label>
                <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required" placeholder="Message"></textarea>
              </div>
            </div>
            <div class="col-md-12">
              <button type="submit" class="btn btn-success pull-right" id="btnContactUs" name="user">
                Send Message</button>
            </div>
          </div>
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
                  $user_cat = $_POST['subject'];
                  $user_add = $_POST['message'];


                // Creating MySQLi query

                  $query = "insert into contact_form(
                            user_name,user_email,subject,message) VALUES('$user_name','$user_email','$user_cat','$user_add')";

                $insert_query = mysqli_query($con,$query);

                if($insert_query){
                  echo "<h2>Thankyou </h2>";
                }
                }
            ?>
      </div>
    </div>
  </div>
</div>

<div class="map">
  <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.9140493115856!2d67.02328631458703!3d24.86678498405091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e6b7668c041%3A0xc12b8e356b18800b!2sIBA+City+Campus!5e0!3m2!1sen!2s!4v1515018302351" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

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


<!--  -->
<!-- Add this script before </body> -->


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

<!--  ================================= END  COUNTER  SECTION================================================-->
<div class="hide">
</body>
</html>