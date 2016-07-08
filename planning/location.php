<?php
  session_start();

  $_SESSION['cname'] =  $_POST['name'];
  $_SESSION['email'] =  $_POST['email'];
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
<div class="tp-page-head"><!-- page header -->
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
            <p class="pull-right" style="font-size:150%;"><strong>Event Total:  $<span class="total">0</span></strong></p>
          </div>
          <!-- products -->
          <div class="row products">
            <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-1.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Grand Roatan</a></h2>
                    <p class="tomorrow"> Please select the amount of guests you are planning to have at your event</p>
                    <select id="gr" name="guest" class="form-control guestnum">
                      <option value="0">1 to 50</option>
                      <option value="1">50  to 75</option>
                      <option value="2">75 to 100</option>
                      <option value="3">100 - 150</option>
                      <option value="4">150 - 200</option>
                      <option value="5">200 +</option>
                    </select>
                    <input type="hidden"  name="" />
                    <br />
                    <p class="pull-right price">US$ 500</p>
                </div>
                <p> <a href="#">More details...</a></p>
                
                <a id="gr-a" class="btn add-event tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>
            <!-- product box end -->
            
            <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-2.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Paradise Beach Hotel</a></h2>
                <p> Please select the amount of guests you are planning to have at your event</p>
                  <select id="pbh" name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
                  <br />
                  <p class="price pull-right">US$ 500</p>
              </div>
                <p> <a href="#">More details...</a></p>
            
                <a id="pbh-a" class="add-event btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
              
            </div>
            <!-- product box end -->
            
            <div class="col-md-3 product-box"> <!-- product box start --> 
              
              <div class="product-wrap"><img src="../images/product-3.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Mayan Princess</a></h2>
                <p> Please select the amount of guests you are planning to have at your event</p>
                  <select id="myp" name="guest" class="form-control guestnum">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
                  <br />
                  <p class="price pull-right">US$ 500</p>
              </div>
                <p> <a href="#">More details...</a></p>
                
                <a id="myp-a" class="add-event btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
                
            </div>
            <!-- product box end -->
            <div class="col-md-3 product-box"> <!-- product box start --> 
              <a href="#">
              <div class="product-wrap"><img src="../images/product-4.jpg" alt="" class="img-responsive"></div>
              </a>
              <div class="product-info">
                <h2><a href="#" class="title">Pristine Bay Resort</a></h2>
                <p> Please select the amount of guests you are planning to have at your event</p>
                  <select id="pbyr" name="guest" class="form-control guestnum pbh ">
                    <option value="0">1 to 50</option>
                    <option value="1">50  to 75</option>
                    <option value="2">75 to 100</option>
                    <option value="3">100 - 150</option>
                    <option value="4">150 - 200</option>
                    <option value="5">200 +</option>
                  </select>
                  <br />
                  <p class="price pull-right">US$ 500</p>
              </div>
                <p> <a href="#">More details...</a></p>
                
                <a id="pbyr-a" class="add-event btn tp-btn-default"><i class="fa fa-shopping-cart"></i>Add to Event</a>
            </div>
            <!-- product box end -->
            
           
            <!-- product box end -->
            
          <!-- products ends--> 
          
        </div>
        <!-- shop listing end -->
        <div class="col-md-12 price-filter widget">
            <div class="step-overlay col-md-12"></div>
              <div class="well-box pull-right" style="width:100%">
                <div class="price_slider_amount pull-right" style="margin-top:0px;">
                  <form action="decoration.php" method="POST">
                    <input type="hidden" name="resort" />
                    <input type="hidden" name="price" />
                    <input type="hidden" name="subtotal" />
                    <button type="submit" class="btn tp-btn-default"><span>Next Step</span></button>
                  </form>
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
  function grprices(guests){
    var price;
    if(guests==0){
      price = '500';
    }else if(guests==1){
      price = '700';
    }else if(guests==2){
      price = '1000';
    }else if(guests==3){
      price = '1200';
    }else if(guests==4){
      price = '1400';
    }else if(guests==5){
      price = 'Pending Contact.';
    }
     return price;
  }

  function pbhprices(guests){
    var price;
    if(guests==0){
      price = '500';
    }else if(guests==1){
      price = '700';
    }else if(guests==2){
      price = '1000';
    }else if(guests==3){
      price = '1200';
    }else if(guests==4){
      price = '1400';
    }else if(guests==5){
      price = 'Will get contacted.';
    }
     return price;
  }


  function mypprices(guests){
    var price;
    if(guests==0){
      price = '500';
    }else if(guests==1){
      price = '700';
    }else if(guests==2){
      price = '1000';
    }else if(guests==3){
      price = '1200';
    }else if(guests==4){
      price = '1400';
    }else if(guests==5){
      price = 'Will get contacted.';
    }
     return price;
  }

  function pbyrprices(guests){
    var price;
    if(guests==0){
      price = '500';
    }else if(guests==1){
      price = '700';
    }else if(guests==2){
      price = '1000';
    }else if(guests==3){
      price = '1200';
    }else if(guests==4){
      price = '1400';
    }else if(guests==5){
      price = 'Will get contacted.';
    }
     return price;
  }



  $(document).ready(function(){
     $('.guestnum').change(function(){
        var resort = $(this).attr('id');
        var guests = $(this).val();


       if(resort == 'gr'){
         var pricefor =  grprices(guests);
         $("input[name=subtotal]").val(pricefor);
         $(this).parent().find('.price').text('US$ ' + pricefor);
         
       }else if(resort == 'pbh'){
         var pricefor =  pbhprices(guests);
         $(this).parent().find('.price').text('US$ ' + pricefor);
       }else if(resort == 'myp'){
         var pricefor =  mypprices(guests);
         $(this).parent().find('.price').text('US$ ' + pricefor);
       }else if(resort == 'pbyr'){
          var pricefor =  pbyrprices(guests);
         $(this).parent().find('.price').text('US$ ' + pricefor);
       }


     });

     $('.add-event').click(function(){
        var location = $(this).attr('id');
        var price = $(this).parent().find('.price').text();

        $("input[name='resort']").val(location);
        $("input[name='price']").val(price);

        $(this).parent().addClass('active-res').siblings().removeClass("active-res");
        



      //if conditional to check all variables have been stored
        $('.step-overlay').fadeOut();
      //End of conditional

     });
  });
</script>
</body>
</html>