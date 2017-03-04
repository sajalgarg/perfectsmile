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

<?php include "header.php";
?>
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(images/perfectsmile/1.jpeg)">
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

                <div class="item" style="background-image: url(images/perfectsmile/2.jpeg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">We strive to provide a relaxed atmosphere</h1>
                                    <h2 class="animation animated-item-2">If you would like to improve, enhance or protect your smile, please do not hesitate to contact us today</h2>
                                    <i class="btn-slide animation animated-item-3 fa fa-phone"> 9990096267</i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(images/perfectsmile/3.jpeg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1" style="color: black;">"We'll do our best to deliver the best possible healthcare and customer service to you!"</h1>
                                    <h2 class="animation animated-item-2" style="color: black;">-Dr. Ashish Verma</h2>
                                    <h2 class="animation animated-item-2" style="color: black;">Head of Perfect Smile Clinic</h2>
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
                            <img src="images/service/1.png">
                            <h2>PACKAGE SERVICES</h2>
                            <h3>Every man sooner or later, confronts with the problem of damage of teeth and dentition.</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <img src="images/service/2.png">
                            <h2>ORAL SURGERY</h2>
                            <h3>Various internal diseases and the negative impact of external factors strongly affect.</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <img src="images/service/3.png">
                            <h2>IMPLANTOLOGY</h2>
                            <h3>Children's dentist in our clinic creates optimal conditions for young patients, entertains.</h3>
                        </div>
                    </div><!--/.col-md-4-->
                
                    <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <img src="images/service/4.png">
                            <h2>COSMETIC DENTISTRY</h2>
                            <h3>The orthodontist will help you rectify the defects of the bite.</h3>
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
                <p class="lead" style="text-align: left;">We’re glad you hand your dental health concerns to our skilled hands. We’ll make sure to deliver the best possible healthcare to all our patients! Of course, we always complement our main services with a customer service oriented approach.<br>

                We sincerely believe that visiting a dentist shouldn’t be a frightening or stressful experience! We provide an equally comfortable experience of relaxation for all our young and adult customers! Also we implement a lot of pain management and anesthesia options.Everything we do is aimed at making you feel comfortable, while we take care of your oral healthcare!<br>

                It includes both local anesthesia for mouth-numbing as well as a sedative anesthesia. Altogether, this helps relief any pain which might occur in the process of treatment. All in all, we’ve got it all under control at our dental health clinic.<br>

                We invite you to explore the information about our dental office on our website!<br>

                Once our customer, you will be leaving our dental clinic with a bright, wide smile!

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


    <section id="content">
        <div class="container">
            <div class="row wow fadeInDown">

                <!-- <div class="col-xs-12 col-sm-4 wow fadeInDown"> -->
                    <div class="center testimonial">
                        <h2>Testimonials</h2>
                         <div class="media testimonial-inner col-md-4">
<!--                             <div class="pull-left">
                                <img class="img-responsive img-circle" src="images/testimonials1.png">
                            </div>
 -->                            <div class="media-body">
                                <p>A big thank to the clinic. Made a prosthesis of 3 teeth and was very pleased with the result.  Recommend to everyone! Good afternoon! Excellent clinic, attentive staff, like it very much! Our whole family is treating here, everyone is happy! A big thank to clinic for the provided services!</p>
                                <span><strong>-Sachin Bansal/</strong>Businessman</span>
                            </div>
                         </div>

                         <div class="media testimonial-inner col-md-4">
<!--                             <div class="pull-left">
                                <img class="img-responsive img-circle" src="images/testimonials1.png">
                            </div>
 -->                            <div class="media-body">
                                <p>Really love this clinic. Not going to change it to any other, despite the fact that I live now in another city, are treating me and my mom. Can safely recommend to everybody. For me, the best clinic with very high level of service and always welcoming atmosphere. Special thanks to the Director of the clinic!</p>
                                <span><strong>-Sonam Sharma/</strong> Housewife</span>
                            </div>
                         </div>

                         <div class="media testimonial-inner col-md-4">
<!--                             <div class="pull-left">
                                <img class="img-responsive img-circle" src="images/testimonials1.png">
                            </div>
 -->                            <div class="media-body">
                                <p>A wonderful clinic. A great combination of attitudes towards people, professionalism and prices. People just love their job and do it well. Good afternoon! Would like to thank the Director of the clinic for responsiveness and understanding. Thank you very much, I wish prosperity for your clinic!</p>
                                <span><strong>-Harish/</strong> Businessman</span>
                            </div>
                         </div>
                    </div>
                </div>

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#content-->

    <section id="partner">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Our Partners</h2>
<!--                 <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
 -->            </div>    

            <div class="partners">
                <ul>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="images/partners/partner1.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="images/partners/partner2.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="images/partners/partner3.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="images/partners/partner4.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="images/partners/partner5.png"></a></li>
                </ul>
            </div>        
        </div><!--/.container-->
    </section><!--/#partner-->

    <section id="conatcat-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="pull-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h2>Have a question ?</h2>
                            <p>Feel free to contact us at 9990096267</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->    
    </section><!--/#conatcat-info-->


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