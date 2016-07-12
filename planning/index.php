<?php 
  session_start();
  
  $_SESSION['event'] = 'newEvent';
  $_SESSION['venue'] = $_POST['event-type'];
  $_SESSION['date'] = $_POST['date'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Love in Roatan</title>
<!-- Bootstrap -->
<link href="../css/bootstrap.min.css" rel="stylesheet">
<!-- Template style.css -->
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../css/owl.theme.css">
<link rel="stylesheet" type="text/css" href="../css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap-select.min.css">
<!-- Font used in template -->
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Istok+Web:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--font awesome icon -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- favicon icon -->
<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<?php 
  include '../snippets/menu.html';
?>


<div class="spacer feature-section"><!-- Feature Blog Start -->
  <div class="container">
    <div class="row">
      <div class="col-md-12 tp-title-center">
        <h1>Four easy steps to organize your special day!</h1>
      </div>
    </div>
    <div class="row feature-center"><!-- feature center -->
      <div class="row">
          <div class="col-md-3 vendor-box"><!-- venue box start-->
            <div class="vendor-image"><!-- venue pic --> 
              <a href="locations/index.html"><img src="../images/feature-5.jpg" alt="wedding venue" class="img-responsive"></a>
            </div>
            <!-- /.venue pic -->
            <div class="vendor-detail"><!-- venue details -->
              <div class="caption"><!-- caption -->
                <h2><a href="/locations/" class="title">Location</a></h2>
                <p class="location">Select your favorite place. Choose from the our selection the place and amount of peope that are gonig to be invited.</p>
                
              </div>
              <!-- /.caption -->
              <div class="vendor-price">
                <div class="price">Step 1</div>
              </div>
            </div>
            <!-- venue details --> 
          </div>
          <div class="col-md-3 vendor-box"><!-- venue box start-->
            <div class="vendor-image"><!-- venue pic --> 
              <a href="#"><img src="../images/feature-6.jpg" alt="wedding venue" class="img-responsive"></a>
            </div>
            <!-- /.venue pic -->
            <div class="vendor-detail"><!-- venue details -->
              <div class="caption"><!-- caption -->
                <h2><a href="#" class="title">Decoration</a></h2>
                <p class="location">Select a pre-made theme from our collection or customize your own theme with our online event planner.</p>
              </div>
              <!-- /.caption -->
              <div class="vendor-price">
                <div class="price">Step 2</div>
              </div>
            </div>
            <!-- venue details --> 
          </div>
          <div class="col-md-3 vendor-box"><!-- venue box start-->
            <div class="vendor-image"><!-- venue pic --> 
              <a href="#"><img src="../images/feature-3.jpg" alt="wedding venue" class="img-responsive"></a>
            </div>
            <!-- /.venue pic -->
            <div class="vendor-detail"><!-- venue details -->
              <div class="caption"><!-- caption -->
                <h2><a href="#" class="title">Review</a></h2>
                <p class="location">Make sure your event plan is correct and there are no details missing. You can always go back and change anything you forgot.</p>
                
              </div>
              <!-- /.caption -->
              <div class="vendor-price">
                <div class="price">Step 3</div>
              </div>
            </div>
            <!-- venue details --> 
          </div>
          <div class="col-md-3 vendor-box"><!-- venue box start-->
            <div class="vendor-image"><!-- venue pic --> 
              <a href="#"><img src="../images/feature-7.jpg" alt="wedding venue" class="img-responsive"></a>
            </div>
            <!-- /.venue pic -->
            <div class="vendor-detail"><!-- venue details -->
              <div class="caption"><!-- caption -->
                <h2><a href="#" class="title">Polish the corners </a></h2>
                <p class="location">Our wedding pre-planner will help you clarify any doubts and extra requests you have for your event before saving the date.</p>
              </div>
              <!-- /.caption -->
              <div class="vendor-price">
                <div class="price">Step 4</div>
              </div>


            </div>
            <!-- venue details --> 

          </div>
           <div class="col-md-12">
              <h3>But first, we got to get some basic info.</h3>
              <div class="finderform">
                <form action="location.php" method="POST">
                  <div class="form-group col-md-5 no-padding">
                    <input class="form-control" placeholder="Name" name="name"/>
                  </div>
                  

                  <div class="col-md-5 no-padding">
                    <input type="email" placeholder="E-mail" name="email" class="form-control">
                  </div>
                      <button type="submit" class="btn tp-btn-default tp-btn-lg">Get Started</button>
                </form>
              </div>
    
            </div>
        </div>
  </div>
</div><!-- Feature Blog End -->
<div class="tp-section spacer">
  <div class="container">
    <div class="row">
      <div class="col-md-12 tp-title-center">
        <h1>Event planners online and on-site.</h1>
      </div>
    </div>
    <div class="row">
        <div class="col-md-6 vendor-box"><!-- venue box start-->
            <div class="vendor-image"><!-- venue pic --> 
              <a href="#"><img src="../images/inclusive-1.jpg" alt="wedding venue" class="img-responsive"></a>
            </div>
            <!-- /.venue pic -->
            <div class="vendor-detail"><!-- venue details -->
              <div class="caption"><!-- caption -->
                <h2><a href="#" class="title">Online event pre-planner</a></h2>
                <p class="location">Start receiving personal attention since the moment you make contact with us by filling in our wedding builder, signing up or contact form. The event pre-planner will make sure you understand everything of your request and every detail you might want to know about the customization of your package, either way we will assisting you until the end. </p>
                
              </div>
              
            </div>
            <!-- venue details --> 
          </div>
          <div class="col-md-6 vendor-box"><!-- venue box start-->
            <div class="vendor-image"><!-- venue pic --> 
              <a href="#"><img src="../images/inclusive-2.jpg" alt="love in roatan inclusive" class="img-responsive"></a>
            </div>
            <!-- /.venue pic -->
            <div class="vendor-detail"><!-- venue details -->
              <div class="caption"><!-- caption -->
                <h2><a href="#" class="title">On-site event planner</a></h2>
                <p class="location">Get your own On-site event planner for your wedding or event making sure every little detail is perfect, worry not and enjoy your event while we make sure that everything is alright and on time, we will run the extra mile to make sure that everything runs smoothly for you and your guests, enjoy our special deals and las-minute offers.</p>
                
              </div>
              <!-- /.caption -->
              
            </div>
            <!-- venue details --> 
          </div>
    </div>
  </div>
</div>
<div class="spacer top-location"><!-- top location -->
  
</div>

<div class="footer"><!-- Footer -->
  <div class="container">
    <div class="row">
      <div class="col-md-5 ft-aboutus">
        <h2>Making everything easier</h2>
        <p class="foot-p">Our Objective is for you to find everything you need in Roatan for your wedding or party, if you think we are missing something, don't forget to mention it. </p>
        <a href="#" class="btn tp-btn-default tp-btn-lg">Let us Know!</a> </div>
      <div class="col-md-3 ft-link">
        <h2>Useful information</h2>
        <ul>
          <li><a class="ft-link" href="#">Activities</a></li>
          <li><a class="ft-link" href="#">Honeymooning</a></li>
          <li><a class="ft-link" href="#">Cruise Ports</a></li>
          <li><a class="ft-link" href="#">Terms and Agreements</a></li>
          <li><a class="ft-link" href="#">Privacy terms</a></li>
        </ul>
      </div>
      <div class="col-md-4 newsletter">
        <h2>Newsletter</h2>
        <form>
          <div class="input-group">
            <input type="text" id="sub-text" class="form-control" placeholder="Enter E-Mail Address" required>
            <span class="input-group-btn">
            <button id="sub-button" class="btn tp-btn-default tp-btn-lg" type="button">Submit</button>
            </span> </div>
          <!-- /input-group --> 
          
          <!-- /.col-lg-6 -->
        </form>
        <div class="social-icon">
          <h2>Be Social &amp; Stay Connected</h2>
          <ul>
            <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div><!-- /.Footer -->
<div class="tiny-footer"><!-- Tiny footer -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">Copyright BUilt-in © 2016. All Rights Reserved</div>
    </div>
  </div>
</div><!-- /. Tiny Footer -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="../js/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/nav.js"></script> 
<script type="text/javascript" src="../js/bootstrap-select.js"></script> 
<script src="../js/owl.carousel.min.js"></script> 
<script type="../text/javascript" src="../js/slider.js"></script> 
<script type="../text/javascript" src="../js/testimonial.js"></script> 
<script src="../js/jquery.sticky.js"></script> 
<script src="../js/header-sticky.js"></script>

<script type="text/javascript"> 
  
  $(document).ready(function(){
      $('#sub-button').click(function(){
        $('#sub-text').val('')
        $('#sub-text').attr('placeholder','Thank you for signing up!')
      });

  })
      
</script>
</body>
</html>