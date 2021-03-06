<?php
  session_start();

   if(!isset($_POST['event-type'])){
    $_SESSION['etype'] = '';
      }else{
        $_SESSION['etype'] = $_POST['event-type'];
      };

    if(!isset($_POST['name'])){
    $_SESSION['cname'] = '';
      }else{
        $_SESSION['cname'] = $_POST['name'];
      };

    if(!isset($_POST['email'])){
    $_SESSION['email'] = '';
      }else{
        $_SESSION['email'] = $_POST['email'];
      };

    if(!isset($_POST['date'])){
        $_SESSION['date'] = '';
      }else{
        $_SESSION['date'] = $_POST['date'];
      };
  
  if(isset($_GET['location'])){
    $_SESSION['location'] = $_GET['location'];
   }elseif(isset($_POST['location'])) {
     $_SESSION['location'] = $_POST['resort'];
   }elseif(!isset($_GET['location']) && !isset($_POST['location'])){
    $_SESSION['location'] = '';
  };
  
  if(!isset($_POST['price'])){
    $_SESSION['price'] = '';
  }else{
    $_SESSION['price'] = $_POST['price'];
  };
  
  if(!isset($_POST['price'])){
    $_SESSION['price'] = '';
  }else{
    $_SESSION['price'] = $_POST['price'];
  };

  if(!isset($_POST['subtotal'])){
    $_SESSION['subtotal'] = '';
  }else{
    $_SESSION['subtotal'] = $_SESSION['subtotal'];
  };

  var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Decoration</title>

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
 if($_SESSION['email'] == '' || $_SESSION['name'] == ''){
  include '../snippets/deco-form.html';
 };
?>





<?php 
  include '../snippets/menu.html';
?>
<div class="tp-page-head">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-header">
          <h1>Select your location</h1>
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
          <li><a href="location.php">Choose your location</a></li>
          <li class="active">Decoration</li>
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
          
          
          <div class="st-tabs"><!-- shortcode -->
            <div class="container">
              <div class="row">
                  <h2 class="tp-title-center">Welcome to our Decoration picker! Check out the ideas and inventory that we have available. once you're done click on the finish button below and proceed to the summary section to get a quote of this event. </h2>
                <div class="col-md-12"> 
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#gazebo" aria-controls="Gazebos" role="tab" data-toggle="tab">Gazebos</a></li>
                    <li role="presentation"><a href="#chairs" aria-controls="Chairs" role="tab" data-toggle="tab">Seats</a></li>
                    <li role="presentation"><a href="#seatDecor" aria-controls="seatDecor" role="tab" data-toggle="tab">Seat Decoration</a></li>
                    <li role="presentation"><a href="#tables" aria-controls="tables" role="tab" data-toggle="tab">Tables</a></li>
                    <li role="presentation"><a href="#props" aria-controls="props" role="tab" data-toggle="tab">Decoration Props</a></li>
                  </ul>
                  
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="gazebo">
                      <div id="ga">
                        <div class="row products">
                        <h1>Gazebos</h1>
                        <h2 class="tp-title-center">Pick One of the Gazebos, if you do not need one, please continue browsing the other sections.</h2>

                        <div class="col-md-3 product-box ga" id="ga1"> <!-- product box start --> 
                          <a href="#">
                          <div class="product-wrap"><img src="../images/product-5.jpg" alt="" class="img-responsive"></div>
                          </a>
                          <div class="product-info">
                          <h2><a href="#" class="title">Bamboo Gazebo</a></h2>
                              <p>A tropical bamboo frame in clear varnish decorated with white linens and a round table for the ceremony.</p>

                              <input type="hidden" name="pricetag" class="pricetag" value="90">
                              <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                              <br />
                              <button class="btn tp-btn-default btn-remove">Remove</button>
                              <p class="price pull-right deco-price">$US <span class="digit-price">90.00</span></p>
                          </div>
                            
                          <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                        </div>
                        <div class="col-md-3 product-box ga" id="ga2"> <!-- product box start --> 
                          <a href="#">
                          <div class="product-wrap"><img src="../images/product-6.jpg" alt="" class="img-responsive"></div>
                          </a>
                          <div class="product-info">
                          <h2><a href="#" class="title">Turquoise &amp; White Gazebo</a></h2>
                              <p>A combination of turquoise and white fabric accented with floral arrangements.</p>

                              <input type="hidden" name="pricetag" class="pricetag" value="95">
                              <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                              <br />
                              <button class="btn tp-btn-default btn-remove">Remove</button>
                              <p class="price pull-right deco-price">$US <span class="digit-price">90.00</span></p>
                          </div>
                            
                          <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>

                        </div>
                        <div class="col-md-3 product-box ga" id="ga3"> <!-- product box start --> 
                          <a href="#">
                          <div class="product-wrap"><img src="../images/product-7.jpg" alt="" class="img-responsive"></div>
                          </a>
                          <div class="product-info">
                          <h2><a href="#" class="title">White metal Gazebo</a></h2>
                              <p> Round-top metal gazebo accentuated with seasonal flowers and a table setup.</p>

                              <input type="hidden" name="pricetag" class="pricetag" value="95">
                              <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                              <br />
                              <button class="btn tp-btn-default btn-remove">Remove</button>
                              <p class="price pull-right deco-price">$US <span class="digit-price">90.00</span></p>
                          </div>
                            
                          <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>

                        </div>
                        

                        <div class="col-md-3 product-box ga" id="ga4"> <!-- product box start --> 
                          <a href="#">
                          <div class="product-wrap"><img src="../images/product-8.jpg" alt="" class="img-responsive"></div>
                          </a>
                          <div class="product-info">
                          <h2><a href="#" class="title">White Floral Bamboo Gazebo</a></h2>
                              <p> Bamboo frame covered with white fabric perfect for a date on the beach or a vow renewal. </p>

                              <input type="hidden" name="pricetag" class="pricetag" value="95">
                              <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                              <br />
                              <button class="btn tp-btn-default btn-remove">Remove</button>
                              <p class="price pull-right deco-price">$US <span class="digit-price">90.00</span></p>
                          </div>
                            
                          <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>

                        </div>

                        <br>




                       
                        <!-- product box end --></div>
                        <div class="row products">
                          <div class="col-md-3 product-box ga" id="ga5"> <!-- product box start --> 
                            <a href="#">
                            <div class="product-wrap"><img src="../images/product-9.jpg" alt="" class="img-responsive"></div>
                            </a>
                            <div class="product-info">
                            <h2><a href="#" class="title">Flower Top &amp; White Gazebo</a></h2>
                                <p>Bamboo frame covered with white fabric and a floral top arrangement with roses or seasonal flowers. </p>

                                <input type="hidden" name="pricetag" class="pricetag" value="90">
                                <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                                <br />
                                <button class="btn tp-btn-default btn-remove">Remove</button>
                                <p class="price pull-right deco-price">$US <span class="digit-price">90.00</span></p>
                            </div>
                              
                            <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                          </div>


                          
                          <div class="col-md-3 product-box ga" id="ga6"> <!-- product box start --> 
                            <a href="#">
                            <div class="product-wrap"><img src="../images/product-10.jpg" alt="" class="img-responsive"></div>
                            </a>
                            <div class="product-info">
                            <h2><a href="#" class="title">Wild Floral Gazebo</a></h2>
                                <p>A big 3x3 Gazebo covered in branches and seasonal flowers to give it a unique look.</p>

                                <input type="hidden" name="pricetag" class="pricetag" value="90">
                                <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                                <br />
                                <button class="btn tp-btn-default btn-remove">Remove</button>
                                <p class="price pull-right deco-price">$US <span class="digit-price">90.00</span></p>
                            </div>
                              
                            <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                          </div>
                          <!-- product box end -->


                          <div class="col-md-3 product-box ga" id="ga6"> <!-- product box start --> 
                            <a href="#">
                            <div class="product-wrap"><img src="../images/product-11.jpg" alt="" class="img-responsive"></div>
                            </a>
                            <div class="product-info">
                            <h2><a href="#" class="title">Blue &amp; White Wood Gazebo</a></h2>
                                <p>Blue and white linen with seasonal blue flowers holded by a wooden frame.</p>

                                <input type="hidden" name="pricetag" class="pricetag" value="90">
                                <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                                <br />
                                <button class="btn tp-btn-default btn-remove">Remove</button>
                                <p class="price pull-right deco-price">$US <span class="digit-price">90.00</span></p>
                            </div>
                              
                            <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                          </div>
                          
                          <!-- product box end --></div>
                      </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="chairs">
                      <div id="se">
                        <h1>Seats</h1>
                          <div class="row products">
                              <h2 class="tp-title-center">What seats will you have your guests sitting on?</h2>
                            <div class="col-md-3 product-box se" id="se1"> <!-- product box start --> 
                              <a href="#">
                              <div class="product-wrap"><img src="../images/product-12.jpg" alt="" class="img-responsive"></div>
                              </a>
                              <div class="product-info">
                              <h2><a href="#" class="title">White Tiffany Chair</a></h2>
                                  <p>Wooden tiffany chair painted in white glossy paint.</p>

                                  <input type="hidden" name="pricetag" class="pricetag" value="3.20">
                                  <input type="text" name="amount" class="form-control " placeholder="Amount"/>
                                  <br />
                                  <button class="btn tp-btn-default btn-remove">Remove</button>
                                  <p class="price pull-right deco-price">$US <span class="digit-price">3.20</span></p>
                              </div>
                                
                              <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                            </div>
                            <div class="col-md-3 product-box se" id="se2"> <!-- product box start --> 
                              <a href="#">
                              <div class="product-wrap"><img src="../images/product-13.jpg" alt="" class="img-responsive"></div>
                              </a>
                              <div class="product-info">
                              <h2><a href="#" class="title">Red &amp; Gold Chair</a></h2>
                                  <p>Elegant red chair with a red sway cover.</p>

                                  <input type="hidden" name="pricetag" class="pricetag" value="5.20">
                                  <input type="hidden" name="category" >
                                  <input type="text" name="se-2" class="form-control " placeholder="Amount"/>
                                  <br />
                                  <button class="btn tp-btn-default btn-remove">Remove</button>
                                  <p class="price pull-right deco-price">$US <span class="digit-price">5.20</span></p>
                              </div>
                                
                              <button id="se-1" class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                            </div>
                            <!-- product box end --></div>
                      </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="seatDecor">
                      <div id="se-d">
                        <h1>Seat Decorations</h1>
                           <h2 class="tp-title-center">Pick the amount of seat covers and or decoration ribbons for your theme. This is optional.</h2>
                          <div class="row products">
                            <div class="col-md-3 product-box se-d" id="se-d-1"> <!-- product box start --> 
                              <a href="#">
                              <div class="product-wrap"><img src="../images/product-14.jpg" alt="" class="img-responsive"></div>
                              </a>
                              <div class="product-info">
                                <h2><a href="#" class="title">Brown Decoration</a></h2>
                                <p>Available for every chair model.</p>

                                    <input type="hidden" name="pricetag" class="pricetag" value="0.80">
                                    <input type="hidden" name="category">
                                    <input type="text" class="form-control sd" placeholder="Amount" name="sd-1"/>
                                    <br />
                                      <button class="btn tp-btn-default btn-remove">Remove</button>
                                    <p class="price pull-right deco-price">$US <span class="digit-price">0.80</span></p>
                                </div>
                                
                                <a id="se-d-1" class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</a></div>
                            <div class="col-md-3 product-box" id="se-d-2"> <!-- product box start --> 
                              <a href="#">
                              <div class="product-wrap"><img src="../images/product-15.jpg" alt="" class="img-responsive"></div>
                              </a>
                              <div class="product-info">
                                <h2><a href="#" class="title">Turquoise Decoration</a></h2>
                                <p>Available for every chair model</p>
                                  <input type="hidden" name="pricetag" class="pricetag" value="0.95">
                                  <input type="text" class="form-control sd" placeholder="Amount" name="sd-2"/>
                                  <br />
                                  <button class="btn tp-btn-default btn-remove">Remove</button>
                                  <p class="price pull-right">$US <span class="digit-price">.95<span></p>
                              </div>
                          
                              <a class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</a></div><!-- product box end -->
                            <div class="col-md-3 product-box se-d" id="es-d-3"> <!-- product box start --> 
                              
                              <div class="product-wrap"><img src="../images/product-16.jpg" alt="" class="img-responsive"></div>
                              </a>
                              <div class="product-info">
                                <h2><a href="#" class="title">Gray Decoration</a></h2>
                                <p>Available for every chair model.</p>
                                  <input type="hidden" name="pricetag" class="pricetag" value="0.40">
                                  <input type="text" class="form-control sd" placeholder="Amount" name="sd-1"/>
                                  <br />
                                  <button class="btn tp-btn-default btn-remove">Remove</button>
                                  <p class="price pull-right">$US <span class="digit-price">0.80</span></p>
                              </div>
                                
                                <a class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</a></div></div>  
                      </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tables">
                        <div id="ta">
                          <h1>Tables</h1>
                          <h2 class="tp-title-center">Would you like to find yourself in a Mess hall kind of event? or have circular tables?</h2>
                          <div class="row products">
                            <div class="col-md-3 product-box ta" id="ta1"> <!-- product box start --> 
                              <a href="#">
                              <div class="product-wrap"><img src="../images/product-17.jpg" alt="" class="img-responsive"></div>
                              </a>
                              <div class="product-info">
                                <h2><a href="#" class="title">Rectangular Table</a></h2>
                                    <p>Rectangular Rugged plastic table, fits 8</p>
                                  
                                  <input type="hidden" name="pricetag" class="pricetag" value="25.00">
                                  <input type="text" name="amount" class="form-control " placeholder="Amount"/>
                                  <br />
                                  <button class="btn tp-btn-default btn-remove">Remove</button>
                                  <p class="price pull-right deco-price">$US <span class="digit-price">25.00</span></p>
                              </div>
                                
                              <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                            </div>

                            <div class="col-md-3 product-box ta" id="ta2"> <!-- product box start --> 
                              <a href="#">
                              <div class="product-wrap"><img src="../images/product-18.jpg" alt="" class="img-responsive"></div>
                              </a>
                              <div class="product-info">
                                <h2><a href="#" class="title">Circular Table</a></h2>
                                    <p>Circular Rugged plastic table, fits 8</p>
                                  
                                  <input type="hidden" name="pricetag" class="pricetag" value="25.00">
                                  <input type="text" name="amount" class="form-control " placeholder="Amount"/>
                                  <br />
                                  <button class="btn tp-btn-default btn-remove">Remove</button>
                                  <p class="price pull-right deco-price">$US <span class="digit-price">25.00</span></p>
                              </div>
                                
                              <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                            </div>

                        </div>   <!-- product box end -->
                    </div>
                  </div>

                    <div role="tabpanel" class="tab-pane" id="props">
                        <div id="tt">
                          <div class="row products">

                              <h1>Table Tops</h1>
                              <h2 class="tp-title-center">Find here any other little detail you might want to add to your decoration list, Our Wedding pre-planner will help you put the scenario together with the pieces you have chosen. </h2>
                              
                              <div class="col-md-3 product-box tt" id="tt1"> <!-- product box start --> 
                                      <a href="#">
                                      <div class="product-wrap"><img src="../images/product-19.jpg" alt="" class="img-responsive"></div>
                                      </a>
                                      <div class="product-info">
                                        <h2><a href="#" class="title">Orange Table Top</a></h2>
                                            
                                      <input type="hidden" name="pricetag" class="pricetag" value="8.00">
                                      <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                                      <br />
                                      <button class="btn tp-btn-default btn-remove">Remove</button>
                                      <p class="price pull-right deco-price">$US <span class="digit-price">8.00</span></p>
                                  </div>
                                    
                                  <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                                </div>

                            <div class="col-md-3 product-box tt" id="tt2"> <!-- product box start --> 
                              <a href="#">
                              <div class="product-wrap"><img src="../images/product-20.jpg" alt="" class="img-responsive"></div>
                              </a>
                              <div class="product-info">
                                <h2><a href="#" class="title">Dark Blue Table Top</a></h2>
                                    
                              <input type="hidden" name="pricetag" class="pricetag" value="8.00">
                              <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                              <br />
                              <button class="btn tp-btn-default btn-remove">Remove</button>
                              <p class="price pull-right deco-price">$US <span class="digit-price">8.00</span></p>
                          </div>
                            
                          <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                        </div>

                            <!-- product box end -->
                            
                            <div class="col-md-3 product-box tt" id="tt3"> <!-- product box start --> 
                              <a href="#">
                              <div class="product-wrap"><img src="../images/product-21.jpg" alt="" class="img-responsive"></div>
                              </a>
                              <div class="product-info">
                                <h2><a href="#" class="title">Brown Table Top</a></h2>
                                    
                              <input type="hidden" name="pricetag" class="pricetag" value="8.00">
                              <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                              <br />
                              <button class="btn tp-btn-default btn-remove">Remove</button>
                              <p class="price pull-right deco-price">$US <span class="digit-price">8.00</span></p>
                          </div>
                            
                          <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                        </div>

                            <!-- product box end -->
                            <div class="col-md-3 product-box tt" id="tt4"> <!-- product box start --> 
                              <a href="#">
                              <div class="product-wrap"><img src="../images/product-22.jpg" alt="" class="img-responsive"></div>
                              </a>
                              <div class="product-info">
                                <h2><a href="#" class="title">Turquoise Table Top</a></h2>
                                    
                              <input type="hidden" name="pricetag" class="pricetag" value="8.00">
                              <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                              <br />
                              <button class="btn tp-btn-default btn-remove">Remove</button>
                              <p class="price pull-right deco-price">$US <span class="digit-price">8.00</span></p>
                          </div>
                            
                          <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                            </div>
                          </div>

                      <div class="row products">
                        <div class="col-md-3 product-box tt" id="tt5"> <!-- product box start --> 
                              <a href="#">
                              <div class="product-wrap"><img src="../images/product-23.jpg" alt="" class="img-responsive"></div>
                              </a>
                              <div class="product-info">
                                <h2><a href="#" class="title">Peach Table Top</a></h2>
                                    
                              <input type="hidden" name="pricetag" class="pricetag" value="8.00">
                              <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                              <br />
                              <button class="btn tp-btn-default btn-remove">Remove</button>
                              <p class="price pull-right deco-price">$US <span class="digit-price">8.00</span></p>
                          </div>
                            
                          <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                        </div>
                          

                          <div class="col-md-3 product-box tt" id="tt6"> <!-- product box start --> 
                              <a href="#">
                              <div class="product-wrap"><img src="../images/product-24.jpg" alt="" class="img-responsive"></div>
                              </a>
                              <div class="product-info">
                                <h2><a href="#" class="title">Olive Green Table Top</a></h2>
                                    
                              <input type="hidden" name="pricetag" class="pricetag" value="8.00">
                              <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                              <br />
                              <button class="btn tp-btn-default btn-remove">Remove</button>
                              <p class="price pull-right deco-price">$US <span class="digit-price">8.00</span></p>
                          </div>
                            
                          <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                            </div>

                            <div class="col-md-3 product-box tt" id="tt7"> <!-- product box start --> 
                              <a href="#">
                              <div class="product-wrap"><img src="../images/product-25.jpg" alt="" class="img-responsive"></div>
                              </a>
                              <div class="product-info">
                                <h2><a href="#" class="title">Metallic Blue Table Top</a></h2>
                                    
                              <input type="hidden" name="pricetag" class="pricetag" value="8.00">
                              <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                              <br />
                              <button class="btn tp-btn-default btn-remove">Remove</button>
                              <p class="price pull-right deco-price">$US <span class="digit-price">8.00</span></p>
                          </div>
                            
                          <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                            </div>

                            <div class="col-md-3 product-box tt" id="tt8"> <!-- product box start --> 
                              <a href="#">
                              <div class="product-wrap"><img src="../images/product-26.jpg" alt="" class="img-responsive"></div>
                              </a>
                              <div class="product-info">
                                <h2><a href="#" class="title">Salmon Table Top</a></h2>
                                    
                              <input type="hidden" name="pricetag" class="pricetag" value="8.00">
                              <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                              <br />
                              <button class="btn tp-btn-default btn-remove">Remove</button>
                              <p class="price pull-right deco-price">$US <span class="digit-price">8.00</span></p>
                          </div>
                            
                          <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                            </div>
                          </div>


                        <div class="row products">
                          <div class="col-md-3 product-box tt" id="tt9"> <!-- product box start --> 
                              <a href="#">
                              <div class="product-wrap"><img src="../images/product-27.jpg" alt="" class="img-responsive"></div>
                              </a>
                              <div class="product-info">
                                <h2><a href="#" class="title">White Embellished Table Top</a></h2>
                                    
                              <input type="hidden" name="pricetag" class="pricetag" value="8.00">
                              <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                              <br />
                              <button class="btn tp-btn-default btn-remove">Remove</button>
                              <p class="price pull-right deco-price">$US <span class="digit-price">8.00</span></p>
                          </div>
                            
                          <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                          </div>

                          <div class="col-md-3 product-box tt" id="tt10"> <!-- product box start --> 
                              <a href="#">
                              <div class="product-wrap"><img src="../images/product-28.jpg" alt="" class="img-responsive"></div>
                              </a>
                              <div class="product-info">
                                <h2><a href="#" class="title">Purple Table Top</a></h2>
                                    
                              <input type="hidden" name="pricetag" class="pricetag" value="8.00">
                              <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                              <br />
                              <button class="btn tp-btn-default btn-remove">Remove</button>
                              <p class="price pull-right deco-price">$US <span class="digit-price">8.00</span></p>
                          </div>
                            
                          <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                            </div>

                            <div class="col-md-3 product-box tt" id="tt11"> <!-- product box start --> 
                              <a href="#">
                              <div class="product-wrap"><img src="../images/product-29.jpg" alt="" class="img-responsive"></div>
                              </a>
                              <div class="product-info">
                                <h2><a href="#" class="title">Orange Table Top</a></h2>
                                    
                              <input type="hidden" name="pricetag" class="pricetag" value="8.00">
                              <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                              <br />
                              <button class="btn tp-btn-default btn-remove">Remove</button>
                              <p class="price pull-right deco-price">$US <span class="digit-price">8.00</span></p>
                          </div>
                            
                          <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                            </div>

                            <div class="col-md-3 product-box tt" id="tt12"> <!-- product box start --> 
                              <a href="#">
                              <div class="product-wrap"><img src="../images/product-30.jpg" alt="" class="img-responsive"></div>
                              </a>
                              <div class="product-info">
                                <h2><a href="#" class="title">Green Table Top</a></h2>
                                    
                              <input type="hidden" name="pricetag" class="pricetag" value="8.00">
                              <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                              <br />
                              <button class="btn tp-btn-default btn-remove">Remove</button>
                              <p class="price pull-right deco-price">$US <span class="digit-price">8.00</span></p>
                          </div>
                            
                          <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                            </div>
                        </div>

                        <div class="row products">
                          <div class="col-md-3 product-box tt" id="tt13"> <!-- product box start --> 
                              <a href="#">
                              <div class="product-wrap"><img src="../images/product-31.jpg" alt="" class="img-responsive"></div>
                              </a>
                              <div class="product-info">
                                <h2><a href="#" class="title">Gray Table Top</a></h2>
                                    
                              <input type="hidden" name="pricetag" class="pricetag" value="8.00">
                              <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                              <br />
                              <button class="btn tp-btn-default btn-remove">Remove</button>
                              <p class="price pull-right deco-price">$US <span class="digit-price">8.00</span></p>
                          </div>
                            
                          <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                            </div>

                            <div class="col-md-3 product-box tt" id="tt14"> <!-- product box start --> 
                              <a href="#">
                              <div class="product-wrap"><img src="../images/product-32.jpg" alt="" class="img-responsive"></div>
                              </a>
                              <div class="product-info">
                                <h2><a href="#" class="title">Peach Table Top</a></h2>
                                    
                              <input type="hidden" name="pricetag" class="pricetag" value="8.00">
                              <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                              <br />
                              <button class="btn tp-btn-default btn-remove">Remove</button>
                              <p class="price pull-right deco-price">$US <span class="digit-price">8.00</span></p>
                          </div>
                            
                          <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                            </div>

                            <div class="col-md-3 product-box tt" id="tt15"> <!-- product box start --> 
                              <a href="#">
                              <div class="product-wrap"><img src="../images/product-33.jpg" alt="" class="img-responsive"></div>
                              </a>
                              <div class="product-info">
                                <h2><a href="#" class="title">Honduran Table Top</a></h2>
                                    
                              <input type="hidden" name="pricetag" class="pricetag" value="8.00">
                              <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                              <br />
                              <button class="btn tp-btn-default btn-remove">Remove</button>
                              <p class="price pull-right deco-price">$US <span class="digit-price">8.00</span></p>
                          </div>
                            
                          <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                            </div>

                            <div class="col-md-3 product-box tt" id="tt16"> <!-- product box start --> 
                              <a href="#">
                              <div class="product-wrap"><img src="../images/product-34.jpg" alt="" class="img-responsive"></div>
                              </a>
                              <div class="product-info">
                                <h2><a href="#" class="title">White Table Top</a></h2>
                                    
                              <input type="hidden" name="pricetag" class="pricetag" value="8.00">
                              <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                              <br />
                              <button class="btn tp-btn-default btn-remove">Remove</button>
                              <p class="price pull-right deco-price">$US <span class="digit-price">8.00</span></p>
                          </div>
                            
                          <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                            </div>
                          </div>

                          <div class="row products">
                              <div class="col-md-3 product-box tt" id="tt17"> <!-- product box start --> 
                              <a href="#">
                              <div class="product-wrap"><img src="../images/product-35.jpg" alt="" class="img-responsive"></div>
                              </a>
                              <div class="product-info">
                                <h2><a href="#" class="title">Pink Table Top</a></h2>
                                    
                              <input type="hidden" name="pricetag" class="pricetag" value="8.00">
                              <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                              <br />
                              <button class="btn tp-btn-default btn-remove">Remove</button>
                              <p class="price pull-right deco-price">$US <span class="digit-price">8.00</span></p>
                          </div>
                            
                          <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                            </div>

                            <div class="col-md-3 product-box tt" id="tt18"> <!-- product box start --> 
                              <a href="#">
                              <div class="product-wrap"><img src="../images/product-36.jpg" alt="" class="img-responsive"></div>
                              </a>
                              <div class="product-info">
                                <h2><a href="#" class="title">Black and White Table Top</a></h2>
                                    
                              <input type="hidden" name="pricetag" class="pricetag" value="8.00">
                              <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                              <br />
                              <button class="btn tp-btn-default btn-remove">Remove</button>
                              <p class="price pull-right deco-price">$US <span class="digit-price">8.00</span></p>
                          </div>
                            
                          <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                            </div>





                          </div>
                          <h1>Table props</h1>
                         <h2 class="tp-title-center">Table props are perfect to use for your snack bar or your gift area, pick a max of three.</h2>
                         <div class="row products">
                              <div class="col-md-3 product-box tprop" id="tprop1"> <!-- product box start --> 
                                <a href="#">
                                <div class="product-wrap"><img src="../images/product-37.jpg" alt="" class="img-responsive"></div>
                                </a>
                                <div class="product-info">
                                <h2><a href="#" class="title">Crystal plate bottom</a></h2>
                                    <p>A crystal base perfect to bring that minimalist look to your setup.</p>

                                    <input type="hidden" name="pricetag" class="pricetag" value="0.8">
                                    <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                                    <br />
                                    <button class="btn tp-btn-default btn-remove">Remove</button>
                                    <p class="price pull-right deco-price">$US <span class="digit-price">0.80</span> p/unit</p>
                                </div>
                                  
                                <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                              </div>
                              <div class="col-md-3 product-box tprop" id="tprop2"> <!-- product box start --> 
                                <a href="#">
                                <div class="product-wrap"><img src="../images/product-38.jpg" alt="" class="img-responsive"></div>
                                </a>
                                <div class="product-info">
                                <h2><a href="#" class="title">Onyx Bowl</a></h2>
                                    <p>A crystal onyx bowl recommended to use it for tablecenter or detail around the area.</p>

                                    <input type="hidden" name="pricetag" class="pricetag" value="2">
                                    <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                                    <br />
                                    <button class="btn tp-btn-default btn-remove">Remove</button>
                                    <p class="price pull-right deco-price">$US <span class="digit-price">2.00</span> p/unit</p>
                                </div>
                                  
                                <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                              </div>
                              <div class="col-md-3 product-box tprop" id="tprop3"> <!-- product box start --> 
                                <a href="#">
                                <div class="product-wrap"><img src="../images/product-39.jpg" alt="" class="img-responsive"></div>
                                </a>
                                <div class="product-info">
                                <h2><a href="#" class="title">Metal Structure for dishes</a></h2>
                                    <p>A salsa holder for your snack bar.</p>

                                    <input type="hidden" name="pricetag" class="pricetag" value="0.8">
                                    <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                                    <br />
                                    <button class="btn tp-btn-default btn-remove">Remove</button>
                                    <p class="price pull-right deco-price">$US <span class="digit-price">0.80</span> p/unit</p>
                                </div>
                                  
                                <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                              </div>

                              <div class="col-md-3 product-box tprop" id="tprop4"> <!-- product box start --> 
                                <a href="#">
                                <div class="product-wrap"><img src="../images/product-40.jpg" alt="" class="img-responsive"></div>
                                </a>
                                <div class="product-info">
                                <h2><a href="#" class="title">Circular three-level shelf</a></h2>
                                    <p>Wooden white wood circular shelves. Perfect for presents or decorations.</p>

                                    <input type="hidden" name="pricetag" class="pricetag" value="6.00">
                                    <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                                    <br />
                                    <button class="btn tp-btn-default btn-remove">Remove</button>
                                    <p class="price pull-right deco-price">$US <span class="digit-price">6.80</span> p/unit</p>
                                </div>
                                  
                                <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                              </div>
                         </div>
                          <div class="row products">
                              <div class="col-md-3 product-box tprop" id="tprop5"> <!-- product box start --> 
                                <a href="#">
                                <div class="product-wrap"><img src="../images/product-41.jpg" alt="" class="img-responsive"></div>
                                </a>
                                <div class="product-info">
                                <h2><a href="#" class="title">Basket Set</a></h2>
                                    <p>Vintage basket setup.</p>

                                    <input type="hidden" name="pricetag" class="pricetag" value="7.00">
                                    <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                                    <br />
                                    <button class="btn tp-btn-default btn-remove">Remove</button>
                                    <p class="price pull-right deco-price">$US <span class="digit-price">7.00</span> p/unit</p>
                                </div>
                                  
                                <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                              </div>
                              <div class="col-md-3 product-box tprop" id="tprop6"> <!-- product box start --> 
                                <a href="#">
                                <div class="product-wrap"><img src="../images/product-42.jpg" alt="" class="img-responsive"></div>
                                </a>
                                <div class="product-info">
                                <h2><a href="#" class="title">Tin Buckets</a></h2>
                                    <p>Tin set of three units with a vintage feel.</p>

                                    <input type="hidden" name="pricetag" class="pricetag" value="2">
                                    <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                                    <br />
                                    <button class="btn tp-btn-default btn-remove">Remove</button>
                                    <p class="price pull-right deco-price">$US <span class="digit-price">2.00</span> p/unit</p>
                                </div>
                                  
                                <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                              </div>
                              <div class="col-md-3 product-box tprop" id="tprop7"> <!-- product box start --> 
                                <a href="#">
                                <div class="product-wrap"><img src="../images/product-43.jpg" alt="" class="img-responsive"></div>
                                </a>
                                <div class="product-info">
                                <h2><a href="#" class="title">Crystal table center decoration</a></h2>
                                    <p></p>

                                    <input type="hidden" name="pricetag" class="pricetag" value="4.5">
                                    <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                                    <br />
                                    <button class="btn tp-btn-default btn-remove">Remove</button>
                                    <p class="price pull-right deco-price">$US <span class="digit-price">4.50</span> p/unit</p>
                                </div>
                                  
                                <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                              </div>

                              <div class="col-md-3 product-box tprop" id="tprop8"> <!-- product box start --> 
                                <a href="#">
                                <div class="product-wrap"><img src="../images/product-44.jpg" alt="" class="img-responsive"></div>
                                </a>
                                <div class="product-info">
                                <h2><a href="#" class="title">Chrome &amp; Crystal table decoration</a></h2>
                                    <input type="hidden" name="pricetag" class="pricetag" value="3.60">
                                    <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                                    <br />
                                    <button class="btn tp-btn-default btn-remove">Remove</button>
                                    <p class="price pull-right deco-price">$US <span class="digit-price">3.60</span> p/unit</p>
                                </div>
                                  
                                <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                              </div>

                              
                         </div>
                         <div class="row products">
                            <div class="col-md-3 product-box tprop" id="tprop9"> <!-- product box start --> 
                                <a href="#">
                                <div class="product-wrap"><img src="../images/product-45.jpg" alt="" class="img-responsive"></div>
                                </a>
                                <div class="product-info">
                                <h2><a href="#" class="title">Circular vase with crystal beads</a></h2>
                                    <input type="hidden" name="pricetag" class="pricetag" value="3.50">
                                    <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                                    <br />
                                    <button class="btn tp-btn-default btn-remove">Remove</button>
                                    <p class="price pull-right deco-price">$US <span class="digit-price">3.50</span> p/unit</p>
                                </div>
                                  
                                <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                              </div>

                              <div class="col-md-3 product-box tprop" id="tprop10"> <!-- product box start --> 
                                <a href="#">
                                <div class="product-wrap"><img src="../images/product-46.jpg" alt="" class="img-responsive"></div>
                                </a>
                                <div class="product-info">
                                <h2><a href="#" class="title">Wavy Base</a></h2>
                                    <input type="hidden" name="pricetag" class="pricetag" value="3.50">
                                    <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                                    <br />
                                    <button class="btn tp-btn-default btn-remove">Remove</button>
                                    <p class="price pull-right deco-price">$US <span class="digit-price">3.50</span> p/unit</p>
                                </div>
                                  
                                <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                              </div>
                         </div>

                         <div class="row products">
                          <h1>Dinning options</h1>
                              <h2 class="tp-title-center">Our selection of Dinning Extras. </h2>
                            <div class="col-md-3 product-box tprop" id="tprop11"> <!-- product box start --> 
                                <a href="#">
                                <div class="product-wrap"><img src="../images/product-47.jpg" alt="" class="img-responsive"></div>
                                </a>
                                <div class="product-info">
                                <h2><a href="#" class="title">Purple Platter base</a></h2>
                                    <input type="hidden" name="pricetag" class="pricetag" value="2.50">
                                    <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                                    <br />
                                    <button class="btn tp-btn-default btn-remove">Remove</button>
                                    <p class="price pull-right deco-price">$US <span class="digit-price">2.50</span> p/unit</p>
                                </div>
                                  
                                <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                              </div>

                              <div class="col-md-3 product-box tprop" id="tprop12"> <!-- product box start --> 
                                <a href="#">
                                <div class="product-wrap"><img src="../images/product-48.jpg" alt="" class="img-responsive"></div>
                                </a>
                                <div class="product-info">
                                <h2><a href="#" class="title">Golden Platter base</a></h2>
                                    <input type="hidden" name="pricetag" class="pricetag" value="2.50">
                                    <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                                    <br />
                                    <button class="btn tp-btn-default btn-remove">Remove</button>
                                    <p class="price pull-right deco-price">$US <span class="digit-price">2.50</span> p/unit</p>
                                </div>
                                  
                                <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                              </div>
                              <div class="col-md-3 product-box tprop" id="tprop13"> <!-- product box start --> 
                                <a href="#">
                                <div class="product-wrap"><img src="../images/product-49.jpg" alt="" class="img-responsive"></div>
                                </a>
                                <div class="product-info">
                                <h2><a href="#" class="title">White Platter Set</a></h2>
                                    <input type="hidden" name="pricetag" class="pricetag" value="1.50">
                                    <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                                    <br />
                                    <button class="btn tp-btn-default btn-remove">Remove</button>
                                    <p class="price pull-right deco-price">$US <span class="digit-price">1.50</span> p/unit</p>
                                </div>
                                  
                                <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                              </div>
                              <div class="col-md-3 product-box tprop" id="tprop14"> <!-- product box start --> 
                                <a href="#">
                                <div class="product-wrap"><img src="../images/product-50.jpg" alt="" class="img-responsive"></div>
                                </a>
                                <div class="product-info">
                                <h2><a href="#" class="title">Wine Cup</a></h2>
                                    <input type="hidden" name="pricetag" class="pricetag" value="2">
                                    <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                                    <br />
                                    <button class="btn tp-btn-default btn-remove">Remove</button>
                                    <p class="price pull-right deco-price">$US <span class="digit-price">2.00</span> p/unit</p>
                                </div>
                                  
                                <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                              </div>

                              <div class="row products">
                                  <div class="col-md-3 product-box tprop" id="tprop15"> <!-- product box start --> 
                                    <a href="#">
                                    <div class="product-wrap"><img src="../images/product-51.jpg" alt="" class="img-responsive"></div>
                                    </a>
                                    <div class="product-info">
                                    <h2><a href="#" class="title">Water cup</a></h2>
                                        <input type="hidden" name="pricetag" class="pricetag" value="1.50">
                                        <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                                        <br />
                                        <button class="btn tp-btn-default btn-remove">Remove</button>
                                        <p class="price pull-right deco-price">$US <span class="digit-price">0.50</span> p/unit</p>
                                    </div>
                                      
                                    <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                                  </div>
                                  <div class="col-md-3 product-box tprop" id="tprop16"> <!-- product box start --> 
                                    <a href="#">
                                    <div class="product-wrap"><img src="../images/product-52.jpg" alt="" class="img-responsive"></div>
                                    </a>
                                    <div class="product-info">
                                    <h2><a href="#" class="title">Golden Napkin ring</a></h2>
                                        <input type="hidden" name="pricetag" class="pricetag" value="1.50">
                                        <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                                        <br />
                                        <button class="btn tp-btn-default btn-remove">Remove</button>
                                        <p class="price pull-right deco-price">$US <span class="digit-price">1.50</span> p/unit</p>
                                    </div>
                                      
                                    <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                                  </div>
                                  <div class="col-md-3 product-box tprop" id="tprop17"> <!-- product box start --> 
                                    <a href="#">
                                    <div class="product-wrap"><img src="../images/product-53.jpg" alt="" class="img-responsive"></div>
                                    </a>
                                    <div class="product-info">
                                    <h2><a href="#" class="title">Beaded Napkin ring</a></h2>
                                        <input type="hidden" name="pricetag" class="pricetag" value="1.50">
                                        <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                                        <br />
                                        <button class="btn tp-btn-default btn-remove">Remove</button>
                                        <p class="price pull-right deco-price">$US <span class="digit-price">1.50</span> p/unit</p>
                                    </div>
                                      
                                    <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                                  </div>
                                  <div class="col-md-3 product-box tprop" id="tprop18"> <!-- product box start --> 
                                    <a href="#">
                                    <div class="product-wrap"><img src="../images/product-54.jpg" alt="" class="img-responsive"></div>
                                    </a>
                                    <div class="product-info">
                                    <h2><a href="#" class="title">Transparent beaded napkin ring</a></h2>
                                        <input type="hidden" name="pricetag" class="pricetag" value="1.50">
                                        <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                                        <br />
                                        <button class="btn tp-btn-default btn-remove">Remove</button>
                                        <p class="price pull-right deco-price">$US <span class="digit-price">1.50</span> p/unit</p>
                                    </div>
                                      
                                    <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                                  </div>

                              </div>
                                <div class="row products">
                                    <div class="col-md-3 product-box tprop" id="tprop19"> <!-- product box start --> 
                                    <a href="#">
                                    <div class="product-wrap"><img src="../images/product-55.jpg" alt="" class="img-responsive"></div>
                                    </a>
                                    <div class="product-info">
                                    <h2><a href="#" class="title">Fork</a></h2>
                                        <input type="hidden" name="pricetag" class="pricetag" value="1.50">
                                        <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                                        <br />
                                        <button class="btn tp-btn-default btn-remove">Remove</button>
                                        <p class="price pull-right deco-price">$US <span class="digit-price">0.40</span> p/unit</p>
                                    </div>
                                      
                                    <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                                  </div>
                                  <div class="col-md-3 product-box tprop" id="tprop20"> <!-- product box start --> 
                                    <a href="#">
                                    <div class="product-wrap"><img src="../images/product-56.jpg" alt="" class="img-responsive"></div>
                                    </a>
                                    <div class="product-info">
                                    <h2><a href="#" class="title">Knife</a></h2>
                                        <input type="hidden" name="pricetag" class="pricetag" value="1.50">
                                        <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                                        <br />
                                        <button class="btn tp-btn-default btn-remove">Remove</button>
                                        <p class="price pull-right deco-price">$US <span class="digit-price">0.40</span> p/unit</p>
                                    </div>
                                      
                                    <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                                  </div>
                                  <div class="col-md-3 product-box tprop" id="tprop22"> <!-- product box start --> 
                                    <a href="#">
                                    <div class="product-wrap"><img src="../images/product-57.jpg" alt="" class="img-responsive"></div>
                                    </a>
                                    <div class="product-info">
                                    <h2><a href="#" class="title">Spoon</a></h2>
                                        <input type="hidden" name="pricetag" class="pricetag" value="1.50">
                                        <input type="text" name="amount" class="form-control " value="1" disabled="true"/>
                                        <br />
                                        <button class="btn tp-btn-default btn-remove">Remove</button>
                                        <p class="price pull-right deco-price">$US <span class="digit-price">0.40</span> p/unit</p>
                                    </div>
                                      
                                    <button class="btn tp-btn-default add"><i class="fa fa-shopping-cart"></i>Add to Event</button>
                                  </div>
                                </div>
                                <div class="row products">
                                    
                                </div>
                              </div>

                         </div>

              </div>
            </div>
          </div>






































                    








          
          
          
        
        
          
        <!-- shop listing end -->
        <div class="col-md-12 price-filter widget">
              <div class="well-box pull-right" style="width:100%">
                <div class="price_slider_amount pull-right" style="margin-top:0px;">
                  <form>
                    <input type="hidden" name="ga-id">
                    <input type="hidden" name="ga-amount">
                    <input type="hidden" name="ga-subtotal">

                    <input type="hidden" name="se-id" value="se-1">
                    <input type="hidden" name="se-amount" value="5">
                    <input type="hidden" name="se-subtotal" value="254.2">

                    <input type="hidden" name="sd-id">
                    <input type="hidden" name="sd-amount">
                    <input type="hidden" name="sd-subtotal">

                    <input type="hidden" name="t-id">
                    <input type="hidden" name="t-amount">
                    <input type="hidden" name="t-subtotal">

                    <button type="submit" class="btn tp-btn-default"><span>Next Step</span></button>
                    
                  </form>
                  <p>Event Total:  US$ <span class="subt"><?php echo $_SESSION['subtotal'] ?></span></p>
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
          <?php if($_SESSION['etype'] == ''){
            echo '<input type="hidden" name="etype">';
          } ?>
          <?php if($_SESSION['date'] == ''){
            echo '<input type="hidden" name="date">';
          } ?>
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

<script type="text/javascript" src="../js/decoration.js"></script>
</body>
</html>