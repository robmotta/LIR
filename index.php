<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Love in Roatan</title>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Template style.css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.theme.css">
<link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
<!-- Font used in template -->
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Istok+Web:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--font awesome icon -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- favicon icon -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<?php 
  include 'snippets/menu.html';
?>

<div class="slider-bg"><!-- slider start-->
  <div id="slider" class="owl-carousel owl-theme slider">
    <div class="item"><img src="images/banner-main.jpg" alt="Grand Roatan resort"></div>
    <div class="item"><img src="images/banner-main-2.jpg" alt="events at pristine bay"></div>
    <div class="item"><img src="images/banner-main-3.jpg" alt="party celebrated at pristine bay"></div>
    <div class="item"><img src="images/banner-main-4.jpg" alt="party celebrated at pristine bay"></div>
  </div>
  <div class="find-section"><!-- Find search section-->
    <div class="container">
      <div class="row">
        <div class="col-md-offset-1 col-md-10 finder-block">
          <div class="finder-caption">
            <img src="images/banner-main-txt.png" alt="hello there!">
            <h1 style="padding-top:20px;">Celebrate your special day in paradise</h1>
            <p>Find the right place in paradise to celebrate your event or wedding! Get blown away by the beauty of Roatan while we worry about the details.</p>
          </div>
          <div class="finderform">
            <form action="planning/index.php" method="POST">
              <input type="hidden" name="location" val="homepage"/>
              <div class="form-group col-md-5 no-padding">
                <select name="event-type" class="form-control selectpicker">
                  <option>What kind of event?</option>
                  <option value="wedding">Wedding</option>
                  <option value="party">Party</option>
                  <option value="convention">Convention</option>
                  <option value="BR">Business Retreat</option>
                  <option value="other">Other</option>
                </select>
              </div>

              <div class="col-md-5 no-padding">
                <input type="date" name="date" class="form-control" />
              </div>
              <button type="submit" class="btn tp-btn-default tp-btn-lg" style="    display: block;
    padding: 0;">Start Planning</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div><!-- /.Find search section-->
</div>
<!-- slider end-->
<div class="spacer feature-section"><!-- Feature Blog Start -->
  <div class="container">
    <div class="row">
      <div class="col-md-12 tp-title-center">
        <h1>Your Planning Starts Here</h1>
      </div>
    </div>
    <div class="row feature-center"><!-- feature center -->
      <div class="row">
          <div class="col-md-3 vendor-box"><!-- venue box start-->
            <div class="vendor-image"><!-- venue pic --> 
              <a href="locations/index.php"><img src="images/feature-1.jpg" alt="wedding venue" class="img-responsive"></a>
            </div>
            <!-- /.venue pic -->
            <div class="vendor-detail"><!-- venue details -->
              <div class="caption"><!-- caption -->
                <h2><a href="locations/index.php" class="title">Incredible spots</a></h2>
                <p class="location">The locations that we offer you have been selected due to their outstanding service and locations. Their professional staff and their rooms will make you feel that you are truly in paradise..</p>
                
              </div>
              <!-- /.caption -->
              <div class="vendor-price">
                <div class="price"> <a href="locations/index.php">More Details</a></div>
              </div>
            </div>
            <!-- venue details --> 
          </div>
          <div class="col-md-3 vendor-box"><!-- venue box start-->
            <div class="vendor-image"><!-- venue pic --> 
              <a href="the-extra-mile.php"><img src="images/feature-2.jpg" alt="wedding venue" class="img-responsive"></a>
            </div>
            <!-- /.venue pic -->
            <div class="vendor-detail"><!-- venue details -->
              <div class="caption"><!-- caption -->
                <h2><a href="the-extra-mile.php" class="title">Personal Attention</a></h2>
                <p class="location">We know how special this date is for you! let our  dedicated team to worry about every little detail, receive support online and ofline once you get to the destination. Worry not and enjoy your staying as you should.</p>
                
              </div>
              <!-- /.caption -->
              <div class="vendor-price">
                <div class="price"><a href="the-extra-mile.php">More Details</a></div>
              </div>
            </div>
            <!-- venue details --> 
          </div>
          <div class="col-md-3 vendor-box"><!-- venue box start-->
            <div class="vendor-image"><!-- venue pic --> 
              <a href="planning/index.php"><img src="images/feature-3.jpg" alt="wedding venue" class="img-responsive"></a>
            </div>
            <!-- /.venue pic -->
            <div class="vendor-detail"><!-- venue details -->
              <div class="caption"><!-- caption -->
                <h2><a href="planning/index.php" class="title">Planning &amp; Design</a></h2>
                <p class="location">Design the  perfect celebration or event  with the help of our professional team of decorators coordinated by your on-site event & wedding planner. Read more about who will be taking care of this details</p>
                
              </div>
              <!-- /.caption -->
              <div class="vendor-price">
                <div class="price"><a href="planning/index.php">More Details </a></div>
              </div>
            </div>
            <!-- venue details --> 
          </div>
          <div class="col-md-3 vendor-box"><!-- venue box start-->
            <div class="vendor-image"><!-- venue pic --> 
              <a href="under-construction.php"><img src="images/feature-4.jpg" alt="wedding venue" class="img-responsive"></a>
            </div>
            <!-- /.venue pic -->
            <div class="vendor-detail"><!-- venue details -->
              <div class="caption"><!-- caption -->
                <h2><a href="under-construction.php" class="title">Event Themes</a></h2>
                <p class="location">Worry not about having a long set-up procedures. We have designed beautiful themes alongside our decor team in order to simplify your planning process with only a few clicks and leaving the stress to us.</p>
              </div>
              <!-- /.caption -->
              <div class="vendor-price">
                <div class="price"><a href="under-construction.php">More Details</a></div>
              </div>
            </div>
            <!-- venue details --> 
          </div>
        </div>
  </div>
</div><!-- Feature Blog End -->
<div class="tp-section spacer">
  <div class="container">
    <div class="row">
      <div class="col-md-12 tp-title-center">
        <h1>Get everything done going without a drop of stress.</h1>
      </div>
    </div>
    <div class="row">
        <div class="col-md-6 vendor-box"><!-- venue box start-->
            <div class="vendor-image"><!-- venue pic --> 
              <a href="the-extra-mile.php"><img src="images/inclusive-1.jpg" alt="wedding venue" class="img-responsive"></a>
            </div>
            <!-- /.venue pic -->
            <div class="vendor-detail"><!-- venue details -->
              <div class="caption"><!-- caption -->
                <h2><a href="the-extra-mile.php" class="title">What's included in our services?</a></h2>
                <p class="location">Our services include several efficient tools that will make your planning a lot easier. With our planning system you get to sit back and enjoy the island while we take care of the rest. Book your wedding with us and we promise to make your event a remarkable one. </p>
                
              </div>
              <!-- /.caption -->
              <div class="vendor-price">
                <div class="price"><a href="the-extra-mile.php">More Details</a></div>
              </div>
            </div>
            <!-- venue details --> 
          </div>
          <div class="col-md-6 vendor-box"><!-- venue box start-->
            <div class="vendor-image"><!-- venue pic --> 
              <a href="about-rico.php"><img src="images/inclusive-2.jpg" alt="love in roatan inclusive" class="img-responsive"></a>
            </div>
            <!-- /.venue pic -->
            <div class="vendor-detail"><!-- venue details -->
              <div class="caption"><!-- caption -->
                <h2><a href="about-rico.php" class="title">Meet Rico Raspaldo</a></h2>
                <p class="location">An experienced wedding &amp; events planner, has been manager of several important resorts in the caribbean islands and coordinating events is one of his specialties. Get to know him in the <a href="#">about us </a> page to know who's going to take care of your event.</p>
                
              </div>
              <!-- /.caption -->
              <div class="vendor-price">
                <div class="price"><a href="about-rico.php">More Details</a></div>
              </div>
            </div>
            <!-- venue details --> 
          </div>
    </div>
  </div>
</div>
<div class="spacer top-location"><!-- top location -->
  <div class="container">
    <div class="row">
      <div class="col-md-12 tp-title-center">
        <h1>Top Recommended Locations to celebrate your event</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 location-block"><!-- location block -->
        <div class="vendor-image"><a href="#"><img src="images/location-1.jpg" alt="" class="img-responsive"></a> <a href="locations/grand-roatan.php" class="venue-lable"><span class="label label-default">Grand Roatan</span></a> </div>
      </div>
      <!-- /.location block -->
      <div class="col-md-4 location-block"> <!-- location block -->
        <div class="vendor-image"><a href="#"><img src="images/location-2.jpg" alt="" class="img-responsive"></a> <a href="locations/pristine-bay.php" class="venue-lable"><span class="label label-default">Pristine Bay</span></a> </div>
      </div>
      <!-- /.location block -->
      <div class="col-md-4 location-block"> <!-- location block -->
        <div class="vendor-image"> <a href="#"><img src="images/location-3.jpg" alt="" class="img-responsive"></a> <a href="locations/mayan-princess.php" class="venue-lable"><span class="label label-default">Mayan Princess</span></a> </div>
      </div>
      <!-- /.location block -->
      <div class="col-md-8 location-block"><!-- location block -->
        <div class="vendor-image"> <a href="#"><img src="images/location-4.jpg" alt="" class="img-responsive"></a> <a href="locations/paradise-beach-resort.php" class="venue-lable"><span class="label label-default">Paradise Beach Resort</span></a> </div>
      </div>
      <!-- /.location block -->
      <!-- /.location block --> 
    </div>
  </div>
</div>
<!-- /.top location -->
<div class="spacer tp-section wedding-bg"><!-- Testimonial Section -->
  <div class="container">
   
    <div class="row">
      <div class="col-md-12 tp-testimonial">
          <div class="col-md-6 vendor-box"><!-- venue box start-->
            <div class="vendor-image"><!-- venue pic --> 
              <a href="#"><img src="images/wedding-venue.jpg" alt="love in roatan inclusive" class="img-responsive"></a>
            </div>
            <!-- /.venue pic -->
            <div class="vendor-detail"><!-- venue details -->
              <div class="caption"><!-- caption -->
                <h2><a href="#" class="title"> Photography & Film Services</a></h2>
                <p class="location">A wedding is memory for a lifetime. Capture every detail of your wedding and cherish them forever. Roatan is the perfect place for beach weddings. So, take advantage of the natural light and make some memories.</p>
                
              </div>
              <!-- /.caption -->
              <div class="vendor-price">
                <a href="contact.php"><div class="wed-btn">Book Your Wedding Session</div></a>
              </div>
            </div>
            <!-- venue details --> 
          </div>     
      </div>
    </div>
  </div>
</div><!-- /. Testimonial Section -->
<div class="footer"><!-- Footer -->
  <div class="container">
    <div class="row">
      <div class="col-md-5 ft-aboutus">
        <h2>Making everything easier</h2>
        <p>Our Objective is for you to find everything you need in Roatan for your wedding or party, if you think we are missing something, don't forget to mention it. </p>
        <a href="#" class="btn tp-btn-default tp-btn-lg">Let us Know!</a> </div>
      <div class="col-md-3 ft-link">
        <h2>Useful information</h2>
        <ul>
          <li><a href="#">Activities</a></li>
          <li><a href="#">Honeymooning</a></li>
          <li><a href="#">Cruise Ports</a></li>
          <li><a href="#">Terms and Agreements</a></li>
          <li><a href="#">Privacy terms</a></li>
        </ul>
      </div>
      <div class="col-md-4 newsletter">
        <h2>Newsletter</h2>
        <form  >
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
<script src="js/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/nav.js"></script> 
<script type="text/javascript" src="js/bootstrap-select.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="js/slider.js"></script> 
<script type="text/javascript" src="js/testimonial.js"></script> 
<script src="js/jquery.sticky.js"></script> 
<script src="js/header-sticky.js"></script>

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