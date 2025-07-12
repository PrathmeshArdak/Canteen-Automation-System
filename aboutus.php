<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php"); 
error_reporting(0);
session_start();

include_once 'product-action.php'; 

?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Dishes</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"> </head>

<body>
    
        <header id="header" class="header-scroll top-header headrom">
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                    <a class="navbar-brand"  href="index.php" style="font-size:30px" ><span><i class="fa fa-cutlery f-s-40 " aria-hidden="true">
                             V.Y.W.S College Canteen</a></i></span>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                       <ul class="nav navbar-nav">
                            <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="restaurants.php">Category <span class="sr-only"></span></a> </li>
							<?php
						if(empty($_SESSION["user_id"]))
							{
								echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link active">Register</a> </li>';
							}
						else
							{
									
									
										echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">My Orders</a> </li>';
									echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">Logout</a> </li>';
							}

						?>
							 
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="page-wrapper">
        <section class="inner-page-hero bg-image" data-image-src="images/img/restrrr.png">
                <div class="profile">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12  col-md-4 col-lg-4 profile-img">
                                <div class="image-wrap">
                                    
                                    <figure><img src="images\canteen.jpeg" ></figure>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 profile-desc">
                                <div class="pull-left right-text white-txt">
                                    <h1><p>V.Y.W.S Canteen</p> </h1>
                                    <h3><p>Best Quality and Tasty Food.!!!</p></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
                        </section>
                        <section class="popular">
            <div class="container">
                <div class="title text-xs-center m-b-30">
                    <h2>Information of college canteen</h2>
                    <p class="lead">Canteen Automation System is the system where customers order their food and receive 
food in the canteen without any delay as they can directly go and collect what they ordered 
without waiting for a turn or waiting time. This system aims to accelerate customer orders and 
customer order system used by student , staff-members to accept customer order.
 The purpose of the system is to develop a simple College Canteen System and 
implement it, which later will be used for a web-based application.
The proposed "V.Y.W.S College Canteen System" is economically feasible because:<br>
 1.The system requires very fewer time factors as compared to manual system <br>
2.The system will provide fast and efficient automated environment instead of slow and error 
prone manual system, thus reducing both time and manpower spent in running the system <br>
3.The system will have GUI interface and very less user training is required to learn it.
</p>
                </div>

                
                        </div>
                        </section>
                        <footer class="footer">
            <div class="container">
                
          
                <div class="bottom-footer">
                    <div class="row">
                        <div class="col-xs-12 col-sm-3 payment-options color-gray">
                            <h5>Payment Options</h5>
                            <ul>
                                <li>
                                    <a href="#"> <img src="images/paypal.png" alt="Paypal"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="images/mastercard.png" alt="Mastercard"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="images/maestro.png" alt="Maestro"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="images/stripe.png" alt="Stripe"> </a>
                                </li>
                                <li>
                                    <a href="#"> <img src="images/bitcoin.png" alt="Bitcoin"> </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-4 address color-gray">
                                    <h5>Address</h5>
                                    <p>V.Y.W.S College,Badnera</p>
                                </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 address color-gray">
                    <div class="media-left ct-icon-font">
                    <a href="" target="_blank"><i class="fa fa fa-clock-o" aria-hidden="true"></i></a>
                    </div>
                    <div class="media-body ct-media-bodys">
                        <h5>OPENING TIME</h5>
                        <p> <i class="fa fa-clock-o" aria-hidden="true"></i> 11:00 - 6:00</p>
                    </div>
                
                <div class="media cs-media">
                    <div class="media-left ct-icon-font">
                    <a href="" target="_blank"><i class="fa fa-phone" aria-hidden="true"></i></a>
                    </div>
                    <div class="media-body ct-media-bodys">
                        <h5>Call us</h5>
                        <p>75696969855</p>
                    </div>
                                        </div>
                <div class="media cs-media">
                    <div class="media-left ct-icon-font">
                         <a href="" target="_blank"> 
                           <i class="fa fa-android" aria-hidden="true"></i>

                         </a>
                    </div>
                    <div class="media-body ct-media-bodys">
                    <h5>For Android</h5>
                        <p>Visit On Google Chrome</p>
                    </div>
                
                <div class="media cs-media">
                    <div class="media-left ct-icon-font">
                         <a href="" target="_blank">
                           <i class="fa fa-apple" aria-hidden="true"></i>

                         </a>
                    </div>
                    <div class="media-body ct-media-bodys">
                    <h5>For IOS</h5>
                        <p>Visit On Google Chrome</p>
                    </div>
                </div>                                </div>
                    </div>
                </div>
                                        </div>
            </div>
        </footer>
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>

</html>
