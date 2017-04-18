<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website for Perfect Smile Clinic Faridabad">
    <meta name="author" content="The Project Engine">
    <title>Perfect Smile Clinic</title>
    
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body class="homepage">

<?php 
    $page = "home";
    include "header.php";
?>
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(assets/slider/psf-slider3.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">LET YOUR SMILE BE PERFECT</h1>
                                    <a class="btn-slide animation animated-item-3" href="contact-us.php">Contact Us</a>
                                </div>
                            </div>
                            <!-- Code for overlapping image -->
<!--                             <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/slider/img1.png" class="img-responsive">
                                </div>
                            </div>
 -->
                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(assets/slider/psf-slider2.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Center of dental excellence</h1>
                                    <h2 class="animation animated-item-2">with a relaxed atmoshphere.</h2>
                                    <!--<h1 class="animation animated-item-1">We strive to provide a relaxed atmosphere</h1>
                                    <h2 class="animation animated-item-2">If you would like to improve, enhance or protect your smile, please do not hesitate to contact us today</h2>
                                    -->
									<i class="btn-slide animation animated-item-3 fa fa-phone"> 0129-4026267</i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(assets/slider/psf-slider1.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1" >"Experience team that promises to deliver best dental care!"</h1>
                                    <!--<h2 class="animation animated-item-2" style="color: black;">-Dr. Ashish Verma</h2>
                                    <h2 class="animation animated-item-2" style="color: black;">Head of Perfect Smile Clinic</h2>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->

    <section id="feature" >
        <div class="container">
 <!--           <div class="center wow fadeInDown">
                <h2>Features</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div> -->

            <div class="row">
                
                 <div class="features" style="text-align: center;">
                    <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <img src="images/service/4.png">
                            <h2>COSMETIC DENTISTRY</h2>
                            <h3>Smile is the prettiest thing you can wear.</h3>
                        </div>
                    </div><!--/.col-md-4-->
					
					<div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <img src="images/service/3.png">
                            <h2>IMPLANTOLOGY</h2>
                            <h3>A treatment that will last a life time.</h3>
                        </div>
                    </div><!--/.col-md-4-->
					
                      
                    <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <img src="images/service/2.png">
                            <h2>LASER DENTISTRY</h2>
                            <h3>Making you smile with latest painless technology.</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <img src="images/service/1.png">
                            <h2>KIDS DENTISTRY</h2>
                            <h3>Giving Your Child A Healthy Smile.</h3>
                        </div>
                    </div><!--/.col-md-4-->


                </div><!--/.services-->
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#feature-->

    <section id="recent-works">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Why Choose Us</h2>
                <p class="lead" style="text-align: justify;">Veering from the norm of painful, tedious dental procedures, PERFECT SMILE introduces you to a world of tech-savvy, new-age dentistry. The pioneers of Futuristic Dentistry, PERFECT SMILE gives you a new reason to smile every day! We believe in giving our patients a relaxing, informative and stress-free dental experience. Our Dental Clinic located in the center of Faridabad, being easily approachable from Gurgaon, Noida and Delhi. The clinic is equipped with best dental equipment and latest technology, ensuring that you get high quality dental care in a comfortable and friendly environment. Changing the very face of the dental scene, we at PERFECT SMILE look forward to giving you an enhanced and healthier dental well-being. 
				<br>Initially founded by Dr Ashish Verma and Dr Dimple Verma in 2008, we have grown in leaps and bounds. Backed with cutting-edge technology and a highly experienced team, we’re committed to providing you with a soothing and transformative experience - whether it’s cosmetic, implant, LASER or general dentistry. Our highly accomplished team has been a part of our practice for years and work with you to develop a personalized dental treatment plan that not only yields amazingly beautiful results, but keeps your mouth healthy for a lifetime. With us, discover how easy it is to achieve your dream smile.<br>

                Once our patient, you will be leaving our dental clinic with a satisfied smile!

                </p>
            </div>
            <div class="row">
                <div class="features" style="text-align: center;">
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <!-- <div class="feature-wrap"> -->
                            <i class="fa fa-calendar fa-3x" style="color: #c52d2f;"></i>
                            <h2>Easy Appointment</h2>
                            <h3>The first step towards a beautiful, healthy smile is to schedule an appointment. Please contact our office by phone.</h3>
                        <!-- </div> -->
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <!-- <div class="feature-wrap"> -->
                            <i class="fa fa-money fa-3x" style="color: #c52d2f;"></i>
                            <h2>Best Prices</h2>
                            <h3>Our reasonable prices made thousands of people smile with a new, beautiful smile, as never before!</h3>
                        <!-- </div> -->
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <!-- <div class="feature-wrap"> -->
                            <i class="fa fa-users fa-3x" style="color: #c52d2f;"></i>
                            <h2>Expertise</h2>
                            <h3>Our highly skilled and friendly dentists have over decade of practical experience. They are ready to put it to action for you </h3>
                        <!-- </div> -->
                    </div><!--/.col-md-4-->

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#recent-works-->



    <section id="partner">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Technologies available</h2>
<!--                 <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
 -->            </div>    

            <div class="partners">
                <ul>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="assets/partners/partner1.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="assets/partners/partner2.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="assets/partners/partner3.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="assets/partners/partner4.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="assets/partners/partner5.png"></a></li>
                </ul>
            </div>        
        </div><!--/.container-->
    </section><!--/#partner-->

<?php include "footer.php";
?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>