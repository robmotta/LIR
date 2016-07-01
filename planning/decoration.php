<?php
  session_start();

  $_SESSION['cname'] =  $_POST['name'];
  $_SESSION['email'] =  $_POST['email'];

  var_dump($_SESSION)
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Choose Location</title>

<!-- Bootstrap -->
<link href="../css/bootstrap.min.css" rel="stylesheet">
<!-- Template style.css -->
<link rel="stylesheet" type="text/css" href="../css/style.css">

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
  include '../snippets/menu.html';
?>
<div class="tp-page-head"><!-page header -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-header">
          <h1>Select your Location</h1>
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
          <li><a href="index.php">Get Started</a></li>
          <li class="active">Choose your location </li>
          <li><a href="#">Decoration</a></li>
          <li><a href="#">Summary</a></li>
          <li><a href="#">Save The Date</a></li>
        </ol>
      </div>
    </div>
  </div>
</div>
<div class="main-container">
  <div class="woo-shop" id="woo-shop">
    <div class="container">
      <div class="row">
        <div class="col-md-9 shop-listing" style="width:100%;"><!-- shop listing start -->
          
          <div class="row">
            <!-- showing result end -->
            <!-- Order sorting end --> 
          </div>
          <!-- products -->
          <div class="row products">
            <h1>Gazebos</h1>
            <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-5.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Bamboo Gazeebo</a></h2>
                    <p>Beautiful bamboo gazebo covered with immaculate white fabric</p>
                </div>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>
                        <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-6.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Turquise & White Gazebo</a></h2>
                <p>A combination of turquoise and white fabric accented with floral arrangements.</p>
              </div>
            
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
              
            </div>
            <!-- product box end -->
            
            <div class="col-md-3 product-box"> <!-- product box start --> 
              
              <div class="product-wrap"><img src="../images/product-7.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">White Metal Gazebo</a></h2>
                <p> Round-top metal gazebo accentuated with flowers.</p>
              </div>
                
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
                
            </div>
            <!-- product box end -->
            <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-8.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">White Floral Bamboo Gazebo</a></h2>
                <p> Bamboo frame covered with white fabric and flower arangements.</p>
              </div>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>
          </div>

          <div class="row products">
            <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-9.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Flower Top & White Gazebo</a></h2>
                    <p> Bamboo frame covered with white fabric and a floral top arrangement.</p>
                </div>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>
                        <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-10.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Wild Floral Gazebo</a></h2>
                <p> Gazebo frame decorated with flowers and branches to give it a unique look.</p>
              </div>
            
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
              
            </div>
            <!-- product box end -->
            
            <div class="col-md-3 product-box"> <!-- product box start --> 
              
              <div class="product-wrap"><img src="../images/product-11.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title"> Blue & White Wood Gazebo</a></h2>
                <p>Wood frame decorated with blue and white fabrics and a centered floral arrangement</p>
              </div>
              
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
                
            </div>
            <!-- product box end -->
          </div>

          <h1>Seats</h1>
          <div class="row products">
            <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-12.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">White Tiffany Chair</a></h2>
                    <p>Classic and elegant.</p>
                    <select name="guest" class="form-control guestnum">
                      <option value="0">1 to 50</option>
                      <option value="1">50  to 75</option>
                      <option value="2">75 to 100</option>
                      <option value="3">100 - 150</option>
                      <option value="4">150 - 200</option>
                      <option value="5">200 +</option>
                    </select>
                    <br />
                    <p class="price pull-right"></p>
                </div>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>
                        <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-13.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Red & Gold Chair</a></h2>
                <p>Perfect for conventions.</p>
                  <select name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
                  <br />
                  <p class="price pull-right"></p>
              </div>
            
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
              
            </div>
            <!-- product box end -->
          </div>

          <h1>Seat Decorations</h1>
          <div class="row products">
            <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-14.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Brown Decoration</a></h2>
                    <p></p>
                    <select name="guest" class="form-control guestnum">
                      <option value="0">1 to 50</option>
                      <option value="1">50  to 75</option>
                      <option value="2">75 to 100</option>
                      <option value="3">100 - 150</option>
                      <option value="4">150 - 200</option>
                      <option value="5">200 +</option>
                    </select>
                    <br />
                    <p class="price pull-right"></p>
                </div>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>
                        <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-15.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Turquoise Decoration</a></h2>
                <p></p>
                  <select name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
                  <br />
                  <p class="price pull-right"></p>
              </div>
            
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
              
            </div>
            <!-- product box end -->
            
            <div class="col-md-3 product-box"> <!-- product box start --> 
              
              <div class="product-wrap"><img src="../images/product-16.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Gray Decoration</a></h2>
                <p></p>
                  <select id="guest" name="guest" class="form-control guestnum">
                    <option value="0">1 - 50</option>
                    <option value="1">50 - 75</option>
                    <option value="2">75 - 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
                  <br />
                  <p class="price pull-right"></p>
              </div>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
                
            </div>
            <!-- product box end -->
            
          </div> 

          <h1>Tables</h1>
          <div class="row products">
            <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-17.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Rectangular Table</a></h2>
                    <p> Fits 8</p>
                    <select name="guest" class="form-control guestnum">
                      <option value="0">1 to 50</option>
                      <option value="1">50  to 75</option>
                      <option value="2">75 to 100</option>
                      <option value="3">100 - 150</option>
                      <option value="4">150 - 200</option>
                      <option value="5">200 +</option>
                    </select>
                    <br />
                    <p class="price pull-right"></p>
                </div>
          
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>
                        <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-18.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Circular Table</a></h2>
                <p> Fits 8 </p>
                  <select name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
                  <br />
                  <p class="price pull-right"></p>
              </div>
            
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
              
            </div>
          </div>
            <!-- product box end -->
          <h1>Table Tops</h1>
          <div class="row products">
            <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-19.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Orange Table Top</a></h2>
                    <p></p>
                    <select name="guest" class="form-control guestnum">
                      <option value="0">1 to 50</option>
                      <option value="1">50  to 75</option>
                      <option value="2">75 to 100</option>
                      <option value="3">100 - 150</option>
                      <option value="4">150 - 200</option>
                      <option value="5">200 +</option>
                    </select>
                    <br />
                    <p class="price pull-right"></p>
                </div>

                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>
                        <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-20.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Dark Blue Table Top</a></h2>
                <p></p>
                  <select name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
                  <br />
                  <p class="price pull-right"></p>
              </div>
            
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
              
            </div>
            <!-- product box end -->
            
            <div class="col-md-3 product-box"> <!-- product box start --> 
              
              <div class="product-wrap"><img src="../images/product-21.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Brown Table Top</a></h2>
                <p></p>
                  <select id="guest" name="guest" class="form-control guestnum">
                    <option value="0">1 - 50</option>
                    <option value="1">50 - 75</option>
                    <option value="2">75 - 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
                  <br />
                  <p class="price pull-right"></p>
              </div>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
                
            </div>
            <!-- product box end -->
            <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-22.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Turquoise Table Top</a></h2>
                <p></p>
                  <select id="guest" name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
              </div>
              <p class="price pull-right"></p>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>
          </div>

          <div class="row products">
            <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-23.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Salmon Table Top</a></h2>
                    <p></p>
                    <select name="guest" class="form-control guestnum">
                      <option value="0">1 to 50</option>
                      <option value="1">50  to 75</option>
                      <option value="2">75 to 100</option>
                      <option value="3">100 - 150</option>
                      <option value="4">150 - 200</option>
                      <option value="5">200 +</option>
                    </select>
                    <br />
                    <p class="price pull-right"></p>
                </div>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>
                        <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-24.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title"></a>Olive Green Table Top</h2>
                <p></p>
                  <select name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
                  <br />
                  <p class="price pull-right"></p>
              </div>
            
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
              
            </div>
            <!-- product box end -->
            
            <div class="col-md-3 product-box"> <!-- product box start --> 
              
              <div class="product-wrap"><img src="../images/product-25.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title"></a>Blue Table Top</h2>
                <p></p>
                  <select id="guest" name="guest" class="form-control guestnum">
                    <option value="0">1 - 50</option>
                    <option value="1">50 - 75</option>
                    <option value="2">75 - 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
                  <br />
                  <p class="price pull-right"></p>
              </div>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
                
            </div>
            <!-- product box end -->
            <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-26.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Pink Table Top</a></h2>
                <p></p>
                  <select id="guest" name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
              </div>
              <p class="price pull-right"></p>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>
          </div>

          <div class="row products">
            <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-27.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">White Translucent Table Top</a></h2>
                    <p></p>
                    <select name="guest" class="form-control guestnum">
                      <option value="0">1 to 50</option>
                      <option value="1">50  to 75</option>
                      <option value="2">75 to 100</option>
                      <option value="3">100 - 150</option>
                      <option value="4">150 - 200</option>
                      <option value="5">200 +</option>
                    </select>
                    <br />
                    <p class="price pull-right"></p>
                </div>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>
                        <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-28.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Purple Table Top</a></h2>
                <p></p>
                  <select name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
                  <br />
                  <p class="price pull-right"></p>
              </div>
            
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
              
            </div>
            <!-- product box end -->
            
            <div class="col-md-3 product-box"> <!-- product box start --> 
              
              <div class="product-wrap"><img src="../images/product-29.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Orange Table Top</a></h2>
                <p></p>
                  <select id="guest" name="guest" class="form-control guestnum">
                    <option value="0">1 - 50</option>
                    <option value="1">50 - 75</option>
                    <option value="2">75 - 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
                  <br />
                  <p class="price pull-right"></p>
              </div>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
                
            </div>
            <!-- product box end -->
            <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-30.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Green Table Top</a></h2>
                <p></p>
                  <select id="guest" name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
              </div>
              <p class="price pull-right"></p>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>
          </div>

          <div class="row products">
            <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-31.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Gray Table Top</a></h2>
                    <p></p>
                    <select name="guest" class="form-control guestnum">
                      <option value="0">1 to 50</option>
                      <option value="1">50  to 75</option>
                      <option value="2">75 to 100</option>
                      <option value="3">100 - 150</option>
                      <option value="4">150 - 200</option>
                      <option value="5">200 +</option>
                    </select>
                    <br />
                    <p class="price pull-right"></p>
                </div>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>
            <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-32.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Peach Table Top</a></h2>
                    <p></p>
                    <select name="guest" class="form-control guestnum">
                      <option value="0">1 to 50</option>
                      <option value="1">50  to 75</option>
                      <option value="2">75 to 100</option>
                      <option value="3">100 - 150</option>
                      <option value="4">150 - 200</option>
                      <option value="5">200 +</option>
                    </select>
                    <br />
                    <p class="price pull-right"></p>
                </div>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>
            
            <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-33.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Honduran Table Top</a></h2>
                <p></p>
                  <select name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
                  <br />
                  <p class="price pull-right"></p>
              </div>
            
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
              
            </div>
            <div class="col-md-3 product-box"> <!-- product box start --> 
              
              <div class="product-wrap"><img src="../images/product-34.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">White Table Top</a></h2>
                <p></p>
                  <select id="guest" name="guest" class="form-control guestnum">
                    <option value="0">1 - 50</option>
                    <option value="1">50 - 75</option>
                    <option value="2">75 - 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
                  <br />
                  <p class="price pull-right"></p>
              </div>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
                
            </div>
          </div>
          
          <div class="row products">
            
            <!-- product box end -->
            <!-- product box end -->
            <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-35.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">White & Pink Table Top</a></h2>
                <p></p>
                  <select id="guest" name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
              </div>
              <p class="price pull-right"></p>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>

             <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-36.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Black & White Table Top</a></h2>
                <p></p>
                  <select id="guest" name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
              </div>
              <p class="price pull-right"></p>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>
          </div>
          <div class="row products">
            
            <!-- product box end -->
            <!-- product box end -->

            <h1>Table Props</h1>
            <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-37.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Squared Mirror Base</a></h2>
                <p></p>
                  <select id="guest" name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
              </div>
              <p class="price pull-right"></p>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>

             <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-38.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Octagonal Mirror Base</a></h2>
                <p></p>
                  <select id="guest" name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
              </div>
              <p class="price pull-right"></p>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>

            <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-39.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Cupcake Makeup Holder </a></h2>
                <p></p>
                  <select id="guest" name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
              </div>
              <p class="price pull-right"></p>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>

            <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-40.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Circular Three-Layered Holder</a></h2>
                <p></p>
                  <select id="guest" name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
              </div>
              <p class="price pull-right"></p>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>
          </div>
            <!-- product box end -->
                    <div class="row products">
            
            <!-- product box end -->
            <!-- product box end -->
            <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-41.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Woven Basket Set</a></h2>
                <p></p>
                  <select id="guest" name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
              </div>
              <p class="price pull-right"></p>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>

             <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-42.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Aluminum Bowls</a></h2>
                <p></p>
                  <select id="guest" name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
              </div>
              <p class="price pull-right"></p>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>

            <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-43.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Medium Base with Flowers</a></h2>
                <p></p>
                  <select id="guest" name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
              </div>
              <p class="price pull-right"></p>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>

            <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-44.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Candle Stick</a></h2>
                <p></p>
                  <select id="guest" name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
              </div>
              <p class="price pull-right"></p>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>

                      <div class="row products">
            
            <!-- product box end -->
            <!-- product box end -->
            <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-45.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Medium Circular Base with Crystals</a></h2>
                <p></p>
                  <select id="guest" name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
              </div>
              <p class="price pull-right"></p>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>

             <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-46.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Wavy Base</a></h2>
                <p></p>
                  <select id="guest" name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
              </div>
              <p class="price pull-right"></p>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>

          
            </div>

                      <div class="row products">
            
            <!-- product box end -->
            <!-- product box end -->

            <h1>Plate Setup</h1>
            <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-47.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Purple Base Plate</a></h2>
                <p></p>
                  <select id="guest" name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
              </div>
              <p class="price pull-right"></p>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>

             <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-48.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Golden Base Plate</a></h2>
                <p></p>
                  <select id="guest" name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
              </div>
              <p class="price pull-right"></p>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>

            <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-49.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">White China</a></h2>
                <p></p>
                  <select id="guest" name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
              </div>
              <p class="price pull-right"></p>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>

            <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-50.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Wine Glass</a></h2>
                <p></p>
                  <select id="guest" name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
              </div>
              <p class="price pull-right"></p>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>

                      <div class="row products">
            
            <!-- product box end -->
            <!-- product box end -->
            <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-51.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Water/Drink Glass</a></h2>
                <p></p>
                  <select id="guest" name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
              </div>
              <p class="price pull-right"></p>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>

             <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-52.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Gloden Nakpkin Brace</a></h2>
                <p></p>
                  <select id="guest" name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
              </div>
              <p class="price pull-right"></p>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>

            <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-53.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Beaded Napkin Brace</a></h2>
                <p></p>
                  <select id="guest" name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
              </div>
              <p class="price pull-right"></p>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>

            <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-54.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Clear Napkin Brace</a></h2>
                <p></p>
                  <select id="guest" name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
              </div>
              <p class="price pull-right"></p>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>

                      <div class="row products">
            
            <!-- product box end -->
            <!-- product box end -->
            <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-55.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Silver Fork</a></h2>
                <p></p>
                  <select id="guest" name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
              </div>
              <p class="price pull-right"></p>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>

             <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-56.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Silver Knife</a></h2>
                <p></p>
                  <select id="guest" name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
              </div>
              <p class="price pull-right"></p>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>

            <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-57.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Silver Spoon</a></h2>
                <p></p>
                  <select id="guest" name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
              </div>
              <p class="price pull-right"></p>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>
            </div>


            <h1>Event Decoration</h1>
           <div class="row products">
            
            <!-- product box end -->
            <!-- product box end -->
            <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-58.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Egg LED Light</a></h2>
                <p></p>
                  <select id="guest" name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
              </div>
              <p class="price pull-right"></p>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>

             <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-59.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Tall LED Light</a></h2>
                <p></p>
                  <select id="guest" name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
              </div>
              <p class="price pull-right"></p>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>

            <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-60.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Black Candle Lantern</a></h2>
                <p></p>
                  <select id="guest" name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
              </div>
              <p class="price pull-right"></p>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>

            <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-61.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Tall Candle Lantern</a></h2>
                <p></p>
                  <select id="guest" name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
              </div>
              <p class="price pull-right"></p>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>

                      <div class="row products">
            
            <!-- product box end -->
            <!-- product box end -->
            <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-62.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Wooden Envelop Chest</a></h2>
                <p></p>
                  <select id="guest" name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
              </div>
              <p class="price pull-right"></p>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>

             <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-63.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">White Metal Cage Decoration</a></h2>
                <p></p>
                  <select id="guest" name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
              </div>
              <p class="price pull-right"></p>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>

            <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-64.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Wood Decoration Blocks</a></h2>
                <p></p>
                  <select id="guest" name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
              </div>
              <p class="price pull-right"></p>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>

            <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-65.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Lantern Holder</a></h2>
                <p></p>
                  <select id="guest" name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
              </div>
              <p class="price pull-right"></p>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>

                      <div class="row products">
            
            <!-- product box end -->
            <!-- product box end -->
            <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-66.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Orange/Pink Curtain</a></h2>
                <p></p>
                  <select id="guest" name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
              </div>
              <p class="price pull-right"></p>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>

             <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-67.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Yellow Curtain</a></h2>
                <p></p>
                  <select id="guest" name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
              </div>
              <p class="price pull-right"></p>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>

            <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-68.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">White Translucent Curtain</a></h2>
                <p></p>
                  <select id="guest" name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
              </div>
              <p class="price pull-right"></p>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>

            <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-69.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Light Blue Curtain</a></h2>
                <p></p>
                  <select id="guest" name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
              </div>
              <p class="price pull-right"></p>
                
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>
        </div>
        <!-- shop listing end -->
        <div class="col-md-12 price-filter widget">
              <div class="well-box pull-right" style="width:100%">
                <div class="price_slider_amount pull-right" style="margin-top:0px;">
                  
                  <button type="submit" class="btn tp-btn-default"><span>Next Step</span></button>
                  <p>Event Total:  $1500</p>
                </div>
              </div>
            </div>
        </div>
        
        
            <!-- top rated products end--> 
            
          </div>
        </div>
    </div>
  </div>
</div>
</div>
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
        <form >
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
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="../js/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/nav.js"></script> 
<script src="../js/jquery.sticky.js"></script> 
<script src="../js/header-sticky.js"></script>

<script type="text/javascript">
  function grprices(){
    if(guests==1){

    }else if(guests==2){
      
    }else if(guests==3){
      
    }
  }

  $(document).ready(function(){
     $('.guestnum').change(function(){
        var guests = $(this).val();
        alert(guests);
        if(guests == 1){
            $(this).parent().find('p.price').text('US$ 500');
        }
        if(guests == 2){
            $(this).parent().find('p.price').text('US$ 700');
        }
     });
  });
</script>
</body>
</html>