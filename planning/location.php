<?php 
  session_start();
  
  $_SESSION['name'] = $_POST['name'];
  $_SESSION['email'] = $_POST['email'];
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>locations</title>

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
<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="collapse" id="searcharea">
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Search for...">
    <span class="input-group-btn">
    <button class="btn tp-btn-primary" type="button">Search</button>
    </span> </div>
</div>
<div class="top-bar">
  <div class="container">
    <div class="row">
      <div class="col-md-6 top-message">
        <p>Welcome to Wedding Vendor.</p>
      </div>
      <div class="col-md-6 top-links">
        <ul class="listnone">
          <li><a href="faq.html"> Help </a></li>
          <li><a href="pricing-plan.html">Pricing</a></li>
          <li><a href="signup-couple.html" class=" ">I m couple</a></li>
          <li><a href="signup-vendor.html">Are you vendor?</a></li>
          <li><a href="login-page.html">Log in</a></li>
          <li><a role="button" data-toggle="collapse" href="#searcharea" aria-expanded="false" aria-controls="searcharea"> <i class="fa fa-search"></i> </a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="tp-nav" id="headersticky">
  <div class="container">
    <nav class="navbar navbar-default navbar-static-top"> 
      
      <!-- Brand and toggle get grouped for better mobile display -->
      
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="index.html"></a> </div>
      
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="index.html">Home</a></li>
          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Listings <span class="fa fa-angle-down"></span></a>
            <ul class="dropdown-menu">
              <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">All Vendor Listing</a>
                <ul class="dropdown-menu">
                  <li><a href="venue-listing.html">Venue Vendor Listing</a></li>
                  <li><a href="photography-listing.html">Photographer Vendor Listing</a></li>
                  <li><a href="dresses-listing.html">Dresses Vendor Listing</a></li>
                  <li><a href="florist-listing.html">Florist Vendor Listing</a></li>
                  <li><a href="videography-listing.html">Videography Vendor Listing</a></li>
                  <li><a href="cake-listing.html">Cake Vendor Listing</a></li>
                  <li><a href="music-listing.html">Music Vendor Listing</a></li>
                </ul>
              </li>
              <li><a href="vendor-listing-4-col-sidebar.html">Sidebar Filter + Listing </a></li>
              <li><a href="vendor-listing-row-map.html">Row + Map Listing </a></li>
              <li><a href="vendor-listing-4-col.html"> 4 Column</a></li>
              <li><a href="vendor-listing.html"> 3 Column</a></li>
              <li><a href="vendor-list.html">List View</a></li>
              <li><a href="vendor-listing-bubba.html"> Bubba Style Listing</a></li>
              <li><a href="vendor-listing-ocean.html"> Ocean Style Listing</a></li>
            </ul>
          </li>
          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Vendor Single <span class="fa fa-angle-down"></span></a>
            <ul class="dropdown-menu">
              <li><a href="vendor-details.html">Vendor Simple</a></li>
              <li><a href="vendor-details-tabbed.html">Vendor Tabbed</a></li>
              <li><a href="vendor-profile.html">Vendor Profile</a></li>
            </ul>
          </li>
          
          <!-- Mega Dropdown -->
          <li class="dropdown mega-dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Features <span class="fa fa-angle-down"></span></a>
            <ul class="dropdown-menu mega-dropdown-menu row">
              <li class="col-sm-3 mega-menu-link">
                <ul>
                  <li class="dropdown-header"><i class="fa fa-files-o"></i> Pages</li>
                  <li><a href="about-us.html">About us</a></li>
                  <li><a href="contact-us.html">Contact us</a></li>
                  <li><a href="pricing-plan.html">Pricing Table</a></li>
                  <li><a href="faq.html">FAQ's</a></li>
                  <li><a href="404-error.html">404 Error</a></li>
                  <li><a href="wedding-guideline.html">Wedding Guideline</a></li>
                </ul>
              </li>
              <li class="col-sm-3 mega-menu-link">
                <ul>
                  <li class="dropdown-header"><i class="fa fa-flash"></i> Shortcodes</li>
                  <li><a href="shortcode-columns.html">Column</a></li>
                  <li><a href="shortcode-accordion.html">Accordion</a></li>
                  <li><a href="shortcode-tabs.html">Tabs</a></li>
                  <li><a href="shortcode-pagination.html">Paginations</a></li>
                  <li><a href="shortcode-typography.html">Typography</a></li>
                  <li><a href="shortcode-accordion.html">Accordion</a></li>
                  <li><a href="shordcods-alerts.html">Alert</a></li>
                </ul>
              </li>
              <li class="col-sm-3 mega-menu-link">
                <ul>
                  <li class="dropdown-header"><i class="fa fa-user"></i> Create Account</li>
                  <li><a href="signup-vendor.html">Sign Up Vendor</a></li>
                  <li><a href="signup-couple.html">Sign Up Couple</a></li>
                  <li><a href="login-page.html">Login</a></li>
                  <li><a href="forget-password.html">Forgot Passward</a></li>
                </ul>
              </li>
              <li class="col-sm-3 mega-menu-link">
                <ul>
                  <li class="dropdown-header"><i class="fa fa-shopping-cart"></i> Shop</li>
                  <li><a href="shop-homepage.html">Shop - Home Page </a></li>
                  <li><a href="shop-listing.html">Listing</a></li>
                  <li><a href="shop-details.html">Details</a></li>
                  <li><a href="shop-cart.html">Shopping Cart</a></li>
                  <li><a href="shop-checkout.html">Checkout</a></li>
                </ul>
              </li>
            </ul>
          </li>
          
          <!-- /.Mega Dropdown -->
          
          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News <span class="fa fa-angle-down"></span></a>
            <ul class="dropdown-menu">
              <li><a href="blog.html">Blog </a></li>
              <li><a href="blog-single.html">Blog Single</a></li>
            </ul>
          </li>
          <li><a href="contact-us.html">Contact Us</a></li>
        </ul>
      </div>
      
      <!-- /.navbar-collapse --> 
    </nav>
  </div>
  <!-- /.container-fluid --> 
  
</div>
<div class="tp-page-head"><!-- page header -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-header">
          <h1> CHose your own piece of paradise</h1>
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
          <li class="active">Choose your Location</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<div class="main-container">
  <div class="woo-shop" id="woo-shop">
    <div class="container">
      <div class="row">
        <div class="col-md-9 shop-listing"><!-- shop listing start -->
          
          <div class="row">
            <div class="col-md-8"><!-- showing result -->
              <p>Showing 1–9 of 15 results</p>
            </div>
            <!-- showing result end -->
            <div class="col-md-4"><!-- Order sorting -->
              <select id="sorting" name="sorting" class="form-control">
                <option value="menu_order">Default sorting</option>
                <option value="popularity">Sort by popularity</option>
                <option value="rating">Sort by average rating</option>
                <option value="date">Sort by newness</option>
                <option value="price">Sort by price: low to high</option>
                <option value="price-desc">Sort by price: high to low</option>
              </select>
            </div>
            <!-- Order sorting end --> 
          </div>
          <!-- products -->
          <div class="row products">
            <div class="col-md-4 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-1.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Location</a></h2>
                <p class="price">$65.00–$70.00</p>
                <p class="rating"><span><a href="#" class="rating-done"><i class="fa fa-star"></i></a></span> <span> <a href="#" class="rating-done"><i class="fa fa-star"></i></a></span> <span> <a href="#" class="rating-done"><i class="fa fa-star"></i></a></span> <span><a href="#" class="rating-done"><i class="fa fa-star"></i></a></span> <span><a href="#"><i class="fa fa-star-o"></i></a></span> </p>
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                <a href="#" class="btn tp-btn-light"><i class="fa fa-exchange"></i></a> 
                <a href="#" class="btn tp-btn-light"><i class="fa fa-heart"></i></a> </div>
            </div>
            <!-- product box end -->
            
            <div class="col-md-4 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-2.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Location</a></h2>
                <p class="price"><span class="price-del">$114.00</span>$100.00</p>
                <p class="rating"><span><a href="#" class="rating-done"><i class="fa fa-star"></i></a></span> <span><a href="#" class="rating-done"><i class="fa fa-star"></i></a></span> <span><a href="#"><i class="fa fa-star"></i></a></span> <span><a href="#"><i class="fa fa-star-o"></i></a></span> <span><a href="#"><i class="fa fa-star-o"></i></a></span> </p>
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                <a href="#" class="btn tp-btn-light"><i class="fa fa-exchange"></i></a> 
                <a href="#" class="btn tp-btn-light"><i class="fa fa-heart"></i></a> </div>
            </div>
            <!-- product box end -->
            
            <div class="col-md-4 product-box"> <!-- product box start --> 
              <a href="#"><span class="offer">SALE</span>
              <div class="product-wrap"><img src="../images/product-3.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Location</a></h2>
                <p class="price">$100.00</p>
                <p class="rating"><span><a href="#" class="rating-done"><i class="fa fa-star"></i></a></span> <span><a href="#" class="rating-done"><i class="fa fa-star"></i></a></span> <span><a href="#"><i class="fa fa-star"></i></a></span> <span><a href="#"><i class="fa fa-star"></i></a></span> <span><a href="#"><i class="fa fa-star"></i></a></span> </p>
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                <a href="#" class="btn tp-btn-light"><i class="fa fa-exchange"></i></a> 
                <a href="#" class="btn tp-btn-light"><i class="fa fa-heart"></i></a> </div>
            </div>
            <!-- product box end -->
            <div class="col-md-4 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-4.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Location</a></h2>
                <p class="price">$65.00–$70.00</p>
                <p class="rating"><span><a href="#" class="rating-done"><i class="fa fa-star"></i></a></span> <span> <a href="#" class="rating-done"><i class="fa fa-star"></i></a></span> <span> <a href="#" class="rating-done"><i class="fa fa-star"></i></a></span> <span><a href="#" class="rating-done"><i class="fa fa-star"></i></a></span> <span><a href="#"><i class="fa fa-star"></i></a></span> </p>
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                <a href="#" class="btn tp-btn-light"><i class="fa fa-exchange"></i></a> 
                <a href="#" class="btn tp-btn-light"><i class="fa fa-heart"></i></a> </div>
            </div>
            <!-- product box end -->
            
            <div class="col-md-4 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-5.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Location</a></h2>
                <p class="price"><span class="price-del">$114.00</span>$100.00</p>
                <p class="rating"><span><a href="#" class="rating-done"><i class="fa fa-star"></i></a></span> <span><a href="#" class="rating-done"><i class="fa fa-star"></i></a></span> <span><a href="#"><i class="fa fa-star"></i></a></span> <span><a href="#"><i class="fa fa-star"></i></a></span> <span><a href="#"><i class="fa fa-star"></i></a></span> </p>
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                <a href="#" class="btn tp-btn-light"><i class="fa fa-exchange"></i></a> 
                <a href="#" class="btn tp-btn-light"><i class="fa fa-heart"></i></a> </div>
            </div>
            <!-- product box end -->
            
            <div class="col-md-4 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-2.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Location</a></h2>
                <p class="price">$100.00</p>
                <p class="rating"><span><a href="#" class="rating-done"><i class="fa fa-star"></i></a></span> <span><a href="#" class="rating-done"><i class="fa fa-star"></i></a></span><span><a href="#"><i class="fa fa-star"></i></a></span> <span><a href="#"><i class="fa fa-star"></i></a></span> <span><a href="#"><i class="fa fa-star"></i></a></span> </p>
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                <a href="#" class="btn tp-btn-light"><i class="fa fa-exchange"></i></a> 
                <a href="#" class="btn tp-btn-light"><i class="fa fa-heart"></i></a> </div>
            </div>
            <!-- product box end -->
            <div class="col-md-4 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-1.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Product Wedding Dress</a></h2>
                <p class="price">$65.00–$70.00</p>
                <p class="rating"><span><a href="#" class="rating-done"><i class="fa fa-star"></i></a></span> <span> <a href="#" class="rating-done"><i class="fa fa-star"></i></a></span> <span> <a href="#" class="rating-done"><i class="fa fa-star"></i></a></span> <span><a href="#" class="rating-done"><i class="fa fa-star"></i></a></span> <span><a href="#"><i class="fa fa-star"></i></a></span> </p>
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                <a href="#" class="btn tp-btn-light"><i class="fa fa-exchange"></i></a> 
                <a href="#" class="btn tp-btn-light"><i class="fa fa-heart"></i></a> </div>
            </div>
            <!-- product box end -->
            
            <div class="col-md-4 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-2.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Product Wedding Dress</a></h2>
                <p class="price"><span class="price-del">$114.00</span>$100.00</p>
                <p class="rating"><span><a href="#" class="rating-done"><i class="fa fa-star"></i></a></span> <span><a href="#" class="rating-done"><i class="fa fa-star"></i></a></span> <span><a href="#"><i class="fa fa-star"></i></a></span> <span><a href="#"><i class="fa fa-star"></i></a></span> <span><a href="#"><i class="fa fa-star"></i></a></span> </p>
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                <a href="#" class="btn tp-btn-light"><i class="fa fa-exchange"></i></a> 
                <a href="#" class="btn tp-btn-light"><i class="fa fa-heart"></i></a> </div>
            </div>
            <!-- product box end -->
            
            <div class="col-md-4 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-4.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Product Wedding Dress</a></h2>
                <p class="price">$100.00</p>
                <p class="rating"><span><a href="#" class="rating-done"><i class="fa fa-star"></i></a></span> <span><a href="#" class="rating-done"><i class="fa fa-star"></i></a></span> <span><a href="#"><i class="fa fa-star"></i></a></span> <span><a href="#"><i class="fa fa-star"></i></a></span> <span><a href="#"><i class="fa fa-star"></i></a></span> </p>
                <a href="#" class="btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                <a href="#" class="btn tp-btn-light"><i class="fa fa-exchange"></i></a> 
                <a href="#" class="btn tp-btn-light"><i class="fa fa-heart"></i></a> </div>
            </div>
            <!-- product box end -->
            
            <div class="col-md-12 tp-pagination"><!--Pagination start-->
              <ul class="pagination">
                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><span aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
              </ul>
            </div>
          </div>
          <!-- products ends--> 
          
        </div>
        <!-- shop listing end -->
        
        <div class="col-md-3 shop-sidebar">
          <div class="row">
            <div class="col-md-12  search-widget widget"><!-- Search Widget -->
              <div class="well-box">
                <h2>Search</h2>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search ...">
                  <span class="input-group-btn">
                  <button class="btn tp-btn-default" type="button"> <i class="fa fa-search"></i> </button>
                  </span> </div>
              </div>
            </div>
            
            <!-- price filter -->
            <div class="col-md-12 price-filter widget">
              <div class="well-box">
                <h2>Filter by price</h2>
                <div class="price-wrapper">
                  <div class="price-slider-light">
                    <div class="price-slider"> <a href="#" class="slider-handle handle-left"></a> <a href="#" class="slider-handle handle-right"></a> </div>
                  </div>
                </div>
                <div class="price_slider_amount">
                  <p>Price:  $45 - $612</p>
                  <button type="submit" class="btn tp-btn-default"><span>Filter</span></button>
                </div>
              </div>
            </div>
            <!-- price filter end -->
            
            <div class="col-md-12 widget categories-widget">
              <div class="well-box">
                <h2 class="widget-title">Product Categories</h2>
                <ul class="listnone angle-double-right">
                  <li> <a href="#"> Wedding Dress </a></li>
                  <li> <a href="#">Flower Gown</a></li>
                  <li> <a href="#">Evening Dress</a></li>
                  <li> <a href="#">Sample Dress</a></li>
                  <li> <a href="#">Bridal Jewllery</a></li>
                </ul>
              </div>
            </div>
            
            <!-- top rated products -->
            <div class="col-md-12 top-listing widget">
              <div class="well-box">
                <h2>Top Rated Products</h2>
                <div class="product-box">
                  <div class="col-md-4 no-padding"><!-- product photo -->
                    <div class="product-wrap"> <img src="../images/product.jpg" alt="" class="img-responsive"> </div>
                  </div>
                  <div class="col-md-8 no-padding"><!-- product info -->
                    <h3><a href="#" class="title">Wedding Dress</a></h3>
                    <p class="price">$65.00 </p>
                    <p class="rating"><span><a href="#" class="rating-done"><i class="fa fa-star"></i></a></span> <span><a href="#" class="rating-done"><i class="fa fa-star"></i></a></span> <span><a href="#"><i class="fa fa-star"></i></a></span> <span><a href="#"><i class="fa fa-star"></i></a></span> <span><a href="#"><i class="fa fa-star"></i></a></span> </p>
                  </div>
                  <!-- product info --> 
                </div>
                <div class="product-box">
                  <div class="col-md-4 no-padding"><!-- product photo -->
                    <div class="product-wrap"> <img src="../images/product.jpg" alt="" class="img-responsive"> </div>
                  </div>
                  <div class="col-md-8 no-padding"><!-- product info -->
                    <h3><a href="#" class="title">Wedding Dress</a></h3>
                    <p class="price">$65.00 </p>
                    <p class="rating"><span><a href="#" class="rating-done"><i class="fa fa-star"></i></a></span> <span><a href="#" class="rating-done"><i class="fa fa-star"></i></a></span> <span><a href="#"><i class="fa fa-star"></i></a></span> <span><a href="#"><i class="fa fa-star"></i></a></span> <span><a href="#"><i class="fa fa-star"></i></a></span> </p>
                  </div>
                  <!-- product info --> 
                </div>
                <div class="product-box">
                  <div class="col-md-4 no-padding"><!-- product photo -->
                    <div class="product-wrap"> <img src="../images/product.jpg" alt="" class="img-responsive"> </div>
                  </div>
                  <div class="col-md-8 no-padding"><!-- product info -->
                    <h3><a href="#" class="title">Wedding Dress</a></h3>
                    <p class="price"> $70.00</p>
                    <p class="rating"><span><a href="#" class="rating-done"><i class="fa fa-star"></i></a></span> <span><a href="#" class="rating-done"><i class="fa fa-star"></i></a></span> <span><a href="#"><i class="fa fa-star"></i></a></span> <span><a href="#"><i class="fa fa-star"></i></a></span> <span><a href="#"><i class="fa fa-star"></i></a></span> </p>
                  </div>
                  <!-- product info --> 
                </div>
                <div class="product-box">
                  <div class="col-md-4 no-padding"><!-- product photo -->
                    <div class="product-wrap"> <img src="images/product.jpg" alt="" class="img-responsive"> </div>
                  </div>
                  <div class="col-md-8 no-padding"><!-- product info -->
                    <h3><a href="#" class="title">Wedding Dress</a></h3>
                    <p class="price">$65.00 </p>
                    <p class="rating"><span><a href="#" class="rating-done"><i class="fa fa-star"></i></a></span> <span><a href="#" class="rating-done"><i class="fa fa-star"></i></a></span> <span><a href="#"><i class="fa fa-star"></i></a></span> <span><a href="#"><i class="fa fa-star"></i></a></span> <span><a href="#"><i class="fa fa-star"></i></a></span> </p>
                  </div>
                  <!-- product info --> 
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
<div class="footer"><!-- footer start -->
  <div class="container">
    <div class="row">
      <div class="col-md-5 ft-aboutus"><!-- about us-->
        <h2>Wedding.Vendor</h2>
        <p>At Wedding Vendor our purpose is to help people find  great online network connecting wedding suppliers and wedding couples who use those suppliers. <a href="#">Start Find Vendor!</a></p>
        <a href="#" class="btn tp-btn-default tp-btn-lg">Find a Vendor</a> </div>
      <!-- about us-->
      <div class="col-md-3 ft-link"><!-- footer links -->
        <h2>Useful links</h2>
        <ul>
          <li><a href="#">About Us</a></li>
          <li><a href="#">News</a></li>
          <li><a href="#">Career</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms of Use</a></li>
        </ul>
      </div>
      <!-- footer links -->
      <div class="col-md-4 newsletter"><!-- newsletter -->
        <h2>Newsletter</h2>
        <form>
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Enter E-Mail Address" required>
            <span class="input-group-btn">
            <button class="btn tp-btn-default tp-btn-lg" type="button">Submit</button>
            </span> </div>
        </form>
        <div class="social-icon"><!-- social icon -->
          <h2>Be Social &amp; Stay Connected</h2>
          <ul>
            <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-flickr"></i></a></li>
          </ul>
        </div>
        <!-- /.social icon --> 
      </div>
      <!--/. newsletter --> 
    </div>
  </div>
</div>
<!-- /.footer -->
<div class="tiny-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12">Copyright © 2014. All Rights Reserved</div>
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
</body>
</html>