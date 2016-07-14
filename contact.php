<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Contact us | Love In Roatan</title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Template style.css -->
<link rel="stylesheet" type="text/css" href="css/style.css">

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
<div class="tp-page-head"><!-- page header -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-header">
          <h1>Contact us</h1>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.page header -->
<div class="tp-breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Contact us</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<div class="main-container">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p>We are always looking to satisfy your every need and improve as a company. If there is anything we can do for you please let us know and we will get back to you as soon as possible.</p>
      </div>
      <div class="col-md-6">
        <div class="well-box">
          <form action="/LIR/php/email.php" method="POST">
            
            <!-- Text input-->
            <div class="form-group">
              <label class="control-label" for="first">First Name <span class="required">*</span></label>
              <input id="first" name="first" type="text" placeholder="First Name" class="form-control input-md" required>
            </div>
            
            <!-- Text input-->
            <div class="form-group">
              <label class=" control-label" for="lastname">Last Name <span class="required">*</span></label>
              <div class=" ">
                <input id="lastname" name="lastname" type="text" placeholder="Last name" class="form-control input-md" required>
              </div>
            </div>
            
            <!-- Text input-->
            <div class="form-group">
              <label class=" control-label" for="email">E-Mail <span class="required">*</span></label>
              <input id="email" name="email" type="text" placeholder="E-Mail" class="form-control input-md" required>
            </div>
            
            <!-- Text input-->
            <div class="form-group">
              <label class=" control-label" for="phone">Phone <span class="required">*</span></label>
              <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control input-md" required>
            </div>
            
            <!-- Select Basic -->
            <div class="form-group">
              <label class=" control-label" for="category">Category <span class="required">*</span></label>
              <select id="category" name="category" class="form-control selectpicker">
                <option value="event">Event</option>
                <option value="Couple">Wedding</option>
                <option value="Vendor">Wedding (Cruise Ship)</option>
                <option value="Advertisement">Advertise</option>
                <option value="WIWU">Work with us</option>
                <option value="other">Other...</option>
              </select>
            </div>
            
            <!-- Textarea -->
            <div class="form-group">
              <label class="  control-label" for="message">Message</label>
              <textarea class="form-control" rows="6" id="message" name="message">Write Your Message</textarea>
            </div>
            
            <!-- Button -->
            <div class="form-group">
              <button id="submit" name="submit" class="btn tp-btn-default tp-btn-lg">Submit</button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-6 contact-info">
        <div class="well-box">
          <ul class="listnone">
            
            <li class="email">
              <h2><i class="fa fa-envelope"></i>E-Mail</h2>
              <p>service@loveinroatan.com</p>
            </li>
            <li class="call">
              <h2><i class="fa fa-phone"></i>WhatsApp</h2>
              <p>+504 9786 - 0505</p>
            </li>
          </ul>
        </div>
      </div>
     
    </div>
  </div>
</div>
<div class="map" id="googleMap"></div>
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
            <input type="text" class="form-control" placeholder="Enter E-Mail Address" required>
            <span class="input-group-btn">
            <button class="btn tp-btn-default tp-btn-lg" type="button">Submit</button>
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
<div class="tiny-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12">Copyright © 2014. All Rights Reserved</div>
    </div>
  </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/nav.js"></script> 
<script src="js/jquery.sticky.js"></script>
<script src="js/header-sticky.js"></script>
<script src="http://maps.googleapis.com/maps/api/js"></script> 
<script>
var myCenter=new google.maps.LatLng(16.3858743,-86.4217671);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:9,
  scrollwheel: false,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,

  icon:'images/pinkball.png'
  });

marker.setMap(map);
var infowindow = new google.maps.InfoWindow({
  content:"Hello Address"
  });
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
</body>
</html>