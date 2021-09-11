<?php 
//db connect
include "library/connection.php";

$result=null;
if(isset($_POST['s-submit'])){
  $fname= $_POST['fname'];
  $lname= $_POST['lname'];
  $email= $_POST['email'];
  $phone= $_POST['phone'];
  $message= $_POST['message'];
  $insert_sql="INSERT INTO contacttbl( fname, lname, email, phone, smessage) VALUES ('$fname','$lname', '$email','$phone','$message')";
  if($conn -> query($insert_sql)){
    $result="<h1 class='text-success'>Message Send</h1>";
  }
  else{
    die($conn -> error );
  }       
  
  
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Mushruna Yasmin</title>

    <!-- favicon icon -->
    <link rel="shortcut icon" href="images/fav.ico" />

    <!-- inject css start -->

    <!--== bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!--== animate -->
    <link href="css/animate.css" rel="stylesheet" type="text/css" />

    <!--== magnific-popup -->
    <link href="css/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />

    <!--== fontawesome -->
    <link href="css/fontawesome-all.css" rel="stylesheet" type="text/css" />

    <!--== owl-carousel -->
    <link href="css/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />

    <!--== base -->
    <link href="css/base.css" rel="stylesheet" type="text/css" />

    <!--== custom -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />

    <!--== responsive -->
    <link href="css/responsive.css" rel="stylesheet" type="text/css" />

    <!-- inject css end -->

</head>

<body id="home" data-spy="scroll" data-target=".navbar" data-offset="100">

    <!-- page wrapper start -->

    <div class="page-wrapper">

        <!-- preloader start -->

        <div id="ht-preloader">
            <div class="loader clear-loader"><img src="images/loader.gif" alt=""></div>
        </div>

        <!-- preloader end -->


        <!--header start-->

        <header class="site-header header header-2">
            <div id="header-wrap">
                <div class="container">
                    <div class="row">
                        <!--menu start-->
                        <div class="col-md-12">
                            <nav class="navbar navbar-expand-lg">
                                <a class="navbar-brand logo" href="index.php">
                                    <img class="img-center" src="images/mylogo.png" alt="">
                                    <img class="img-center sticky-logo" src="images/mylogo2.png" alt="">
                                </a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#home"> <span>Home</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#services"> <span>Services</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#about"> <span>About</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#portfolio"> <span>portfolio</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#testimonial"> <span>Testimonials</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#blog"> <span>Blog</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#contact-us"> <span>Contact</span>
                                            </a>
                                        </li>
                                        <li class="nav-item signin">
                                            <a class="nav-link" href="login.php"> <span>Sign-in</span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!--menu end-->
                    </div>
                </div>
            </div>
        </header>

        <!--header end-->


        <!--hero section start-->

        <section class="fullscreen-banner o-hidden p-0 dark-bg parallaxie" data-bg-img="images/bg/03.jpg">
            <canvas id="canvas-1" class="d-none d-md-block"></canvas>
            <div class="align-center text-left">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-md-10 mr-auto">
                            <ul class="list-inline bnr-list mb-3">
                                <li class="list-inline-item">Web Design</li>
                                <li class="list-inline-item">Photography</li>
                                <li class="list-inline-item">Blogging</li>
                            </ul>
                            <h1 class="cd-headline letters scale mb-3">
                                <span class="d-block text-theme">Hi I'm</span>
                                <span class="cd-words-wrapper text-white">
                                    <b class="is-visible">Mushruna Yasmin</b>
                                    <b>Web Designer</b>
                                    <b>Web Developer</b>
                                </span>
                            </h1>
                            <p class="text-white lead mb-3">Let's Build Something<br> Great And Creative.</p>
                            </a>
                            <a class="btn btn-white btn-circle page-scroll" href="#services"> <span>learn More</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--hero section end-->

        <!--body content start-->

        <div class="page-content">

            <!--awesome features start-->

            <section id="services" class="text-center pos-r o-hidden">
                <canvas id="confetti"></canvas>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-10 ml-auto mr-auto">
                            <div class="section-title">
                                <h2 class="title">Awesome <span>Service</span></h2>
                                <p class="mb-0">Hey there! Take a look at my services which give you an idea about what
                                    kind of work I do.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="featured-item style-2">
                                <div class="featured-icon">
                                    <i class="flaticon-web-design"></i>
                                </div>
                                <div class="featured-title text-uppercase">
                                    <h4 class="mb-3">Web Designs</h4>
                                </div>
                                <div class="featured-desc">
                                    <p>Conceptulizing & creating websites that are  appealing to the desired target audience.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 sm-mt-5">
                            <div class="featured-item style-2">
                                <div class="featured-icon">
                                    <i class="flaticon-seo"></i>
                                </div>
                                <div class="featured-title text-uppercase">
                                    <h4 class="mb-3">Web development</h4>
                                </div>
                                <div class="featured-desc">
                                    <p>Writing well designed, testable, efficient code by using best software development practices.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 md-mt-5">
                            <div class="featured-item style-2">
                                <div class="featured-icon">
                                    <i class="flaticon-responsive"></i>
                                </div>
                                <div class="featured-title text-uppercase">
                                    <h4 class="mb-3">Responsive Design</h4>
                                </div>
                                <div class="featured-desc">
                                    <p>Determining size and arrangement of the website and illustrative material, as well as font style and size.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-5">
                            <div class="featured-item style-2">
                                <div class="featured-icon">
                                    <i class="flaticon-landscape"></i>
                                </div>
                                <div class="featured-title text-uppercase">
                                    <h4 class="mb-3">Photography</h4>
                                </div>
                                <div class="featured-desc">
                                    <p>Capturing memories and exceptional experiences with an exceptional range of creative, technical and editing content for multiple platforms.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-5">
                            <div class="featured-item style-2">
                                <div class="featured-icon">
                                    <i class="flaticon-psd"></i>
                                </div>
                                <div class="featured-title text-uppercase">
                                    <h4 class="mb-3">Adobe Photoshop</h4>
                                </div>
                                <div class="featured-desc">
                                    <p>Creating images that provoke a range of thoughts and emotions from original images for both printed and digital
                                        products.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-5">
                            <div class="featured-item style-2">
                                <div class="featured-icon">
                                    <i class="flaticon-question"></i>
                                </div>
                                <div class="featured-title text-uppercase">
                                    <h4 class="mb-3">Dedicated support</h4>
                                </div>
                                <div class="featured-desc">
                                    <p>The main goal is to monitor client's trouble and provide excellent customer
                                    satisfaction.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--awesome features end-->


            <!--about start-->

            <section id="about" class="theme-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 mr-auto">
                            <div class="section-title">
                                <h2 class="title z-index-1">About <span>me</span></h2>
                                <p class="text-white">I'm a freelance Website Content Writer and I would love to earn my living as a Frontend developer. </p>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="about-desc text-white">
                                <h4>Mushruna Yasmin</h4>
                                <h5 class="mb-3 font-italic font-weight-bold">Web Designer</h5>
                                <p>Hi! My name is Mushruna Yasmin. I am Web Designer with 5 month experience.</p>
                                <ul class="list-inline mb-4">
                                    <li class="list-inline-item mr-3"> <i class="flaticon-phone-3"></i>
                                        <a href="tel:+912345678900">0145683838</a>
                                    </li>
                                    <li class="list-inline-item"> <i class="flaticon-newsletter"></i>
                                        <a href="mailto:htinfotech7@gmail.com">my@gmail.com</a>
                                    </li>
                                </ul> 
                                <a class="btn btn-white btn-circle" href="#">Download CV</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 md-mt-5">
                            <div class="ht-progress-bar">
                                <h4>HTML</h4>
                                <div class="progress" data-value="70">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated">
                                        <div class="progress-parcent"><span>70</span>%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="ht-progress-bar">
                                <h4>CSS</h4>
                                <div class="progress" data-value="70">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated">
                                        <div class="progress-parcent"><span>70</span>%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="ht-progress-bar">
                                <h4>BOOTSTRAP</h4>
                                <div class="progress" data-value="70">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated">
                                        <div class="progress-parcent"><span>70</span>%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="ht-progress-bar">
                                <h4>JavaScript</h4>
                                <div class="progress" data-value="45">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated">
                                        <div class="progress-parcent"><span>45</span>%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="ht-progress-bar">
                                <h4>PHP</h4>
                                <div class="progress" data-value="40">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated">
                                        <div class="progress-parcent"><span>40</span>%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="ht-progress-bar">
                                <h4>Photoshop</h4>
                                <div class="progress" data-value="55">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated">
                                        <div class="progress-parcent"><span>55</span>%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--about end-->


            <!--portfolio start-->

            <section id="portfolio">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-lg-8 col-md-10 ml-auto mr-auto">
                            <div class="section-title text-center">
                                <h2 class="title">Creative <span>Portfolio</span></h2>
                                <p class="mb-0">Check some of my activities here in this section and for detail info hover on the pic then click on the chain icon. </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="portfolio-filter">
                                <button data-filter="" class="is-checked">All</button>
                                <button data-filter=".cat1">Web</button>
                                <button data-filter=".cat2">Photography</button>
                            </div>
                            <div class="masonry row columns-4 no-gutters popup-gallery">
                                <div class="grid-sizer"></div>
                                <div class="masonry-brick cat1">
                                    <div class="portfolio-item">
                                        <img src="images/portfolio/01.jpg" alt="">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-title">
                                                <span>Web</span>
                                                
                                            </div>
                                            <div class="portfolio-icon">
                                                <a class="popup popup-img" href="images/portfolio/large/01.jpg"> <i
                                                        class="flaticon-add-song"></i>
                                                </a>
                                                <a class="popup portfolio-link" target="_blank"
                                                    href="portfolio1.html"> <i class="flaticon-link-1"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="masonry-brick cat2">
                                    <div class="portfolio-item">
                                        <img src="images/portfolio/03.jpg" alt="">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-title">
                                                <span>Photography</span>
                                                
                                            </div>
                                            <div class="portfolio-icon">
                                                <a class="popup popup-img" href="images/portfolio/large/03.jpg"> <i
                                                        class="flaticon-add-song"></i>
                                                </a>
                                                <a class="popup portfolio-link" target="_blank"
                                                    href="portfolio2.html"> <i class="flaticon-link-1"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--portfolio end-->


            <!--counter start-->

            <section class="dark-bg text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="counter text-white"> <span class="count-number" data-to="5"
                                    data-speed="5000">5</span>
                                <label>complete Project</label>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="counter text-white"> <span class="count-number" data-to="6000"
                                    data-speed="5000">6000</span>
                                <label>Lines of Code</label>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="counter text-white"> <span class="count-number" data-to="200"
                                    data-speed="5000">200</span>
                                <label>Coffee Cup</label>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="counter text-white"> <span class="count-number" data-to="100"
                                    data-speed="5000">100</span>
                                <label>Happy Clients</label>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--counter end-->


            <!--testimonial start-->

            <section id="testimonial" class="text-center dark-bg parallaxie" data-bg-img="images/bg/06.jpg"
                data-overlay="3">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-10 col-md-12 ml-auto mr-auto">
                            <div class="owl-carousel owl-theme" data-items="1">
                                <div class="item">
                                    <div class="testimonial style-2">
                                        <div class="testimonial-content"> <i class="fas fa-quote-left"></i>
                                            <p>“ No review yet!! ”</p>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial style-2">
                                        <div class="testimonial-content"> <i class="fas fa-quote-left"></i>
                                            <p>“ No review yet!! ”</p>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--testimonial end-->


            <!--blog start-->

            <section id="blog">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-lg-8 col-md-10 ml-auto mr-auto">
                            <div class="section-title">
                                <h2 class="title z-index-1">See Latest <span>Blog</span></h2>
                                <p class="mb-0">My work is my pride. Check 'em out, maybe?!</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="owl-carousel owl-theme" data-items="2" data-md-items="2" data-sm-items="1"
                                data-margin="30">
                                <div class="item">
                                    <div class="post style-2">
                                        <div class="post-desc">
                                            <div class="post-date">23 April, 2018</div>
                                            <div class="post-title">
                                                <h4><a href="blog1.html">Apple and Google Hushed Coronavirus!
                                                        </a></h4>
                                            </div>
                                            <p class="mb-0">If you get up in the morning and think the future is going to be better, it is a bright day. Otherwise, it's not.</p>
                                            <a class="btn-simple mt-3" href="blog1.html">Read More <i
                                                    class="fas fa-long-arrow-alt-right ml-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="post style-2">
                                        <div class="post-desc">
                                            <div class="post-date">23 April, 2019</div>
                                            <div class="post-title">
                                                <h4><a href="blog2.html">Halloween is coming!
                                                        </a></h4>
                                            </div>
                                            <p class="mb-0">
“Magic is really very simple, all you’ve got to do is want something and then let yourself have it.”
– Aggie Cromwell</p>
                                            <a class="btn-simple mt-3" href="blog2.html">Read More <i
                                                    class="fas fa-long-arrow-alt-right ml-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--blog end-->

            <!-- contact start -->
            <section id="contact-us" class="dark-bg parallaxie text-white" data-bg-img="images/bg/03.jpg"
                data-overlay="3">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-lg-8 col-md-10 ml-auto mr-auto">
                            <div class="section-title">
                                <h2 class="title">Let's <span>Contact</span></h2>
                                <p class="mb-0 text-white">Send me your message</p>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-12">
                            <div class="contact-box">
                                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                    <div class="mb-3">
                                        <label for="fname" class="form-label">Enter first name</label>
                                        <input type="text" class="form-control fname" id="fname" name="fname" Required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="lname" class="form-label">Enter last name</label>
                                        <input type="text" class="form-control lname" id="lname" name="lname" Required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Enter your email</label>
                                        <input type="email" class="form-control email" id="email" name="email" Required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Enter your phone number</label>
                                        <input type="text" class="form-control phone" id="phone" name="phone" Required>
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Your Message</label>
                                        <textarea class="form-control" id="message" rows="3" name="message"
                                            Required></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-border btn-circle"
                                            name="s-submit">SUBMIT</button>
                                        <button type="reset" class="btn btn-border btn-circle">RESET</button>
                                    </div>
                                    <?php if(isset($_POST['s-submit'])){
                                    if($result!=null){
                                    echo "<div class='alert alert-success alert-dismissible fade show mt-3' role='alert'>
                                    $result
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                      <span aria-hidden='true'>&times;</span>
                                    </button>
                                  </div>";
                                    }
                                  }
                                    ?>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 text-center md-mt-5">
                            <ul class="contact-info list-unstyled">
                                <li><i class="flaticon-innovation"></i><span>Address:</span>
                                    <p>Bangladesh</p>
                                </li>
                                <li><i class="flaticon-phone-1"></i><span>Phone:</span><a href="tel:+912345678900">
                                        </a>912345678900
                                </li>
                                <li><i class="flaticon-email"></i><span>Email</span><a
                                        href="mailto:mushruna90@gmail.com"> mushruna90@gmail.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact end -->

            <!-- map start -->
            <section class="o-hidden p-0">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="map" class="iframe-h mt-0"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- map end -->




            <!--footer start-->

            <footer class="theme-bg py-5">
                <div class="container">
                    <div class="row text-center text-white">
                        <div class="col-md-12">
                            <div class="logo">
                                <img class="img-center" src="images/mylogo.png" alt="">
                            </div>
                            <div class="social-icon my-4">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a href="#"> <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#"> <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#"> <i class="fab fa-github"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#"> <i class="fab fa-linkedin"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#"> <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <span>Copyright 2021 Mushruna Yasmin</span>
                        </div>
                    </div>
                </div>
            </footer>

            <!--footer end-->

            <!--back-to-top start-->

            <div class="scroll-top"><a class="smoothscroll" href="#top"><i class="flaticon-idea"></i></a></div>

            <!--back-to-top end-->

            <!-- inject js start -->

            <!--== jquery -->
            <script src="js/jquery.3.3.1.min.js"></script>

            <!--== popper -->
            <script src="js/popper.min.js"></script>

            <!--== bootstrap -->
            <script src="js/bootstrap.min.js"></script>

            <!--== appear -->
            <script src="js/jquery.appear.js"></script>

            <!--== magnific-popup -->
            <script src="js/magnific-popup/jquery.magnific-popup.min.js"></script>

            <!--== typer -->
            <script src="js/typer/animated-headlines.js"></script>

            <!--== owl-carousel -->
            <script src="js/owl-carousel/owl.carousel.min.js"></script>

            <!--== isotope -->
            <script src="js/isotope/isotope.pkgd.min.js"></script>

            <!--== parallax -->
            <script src="js/parallax/parallaxie.min.js"></script>

            <!--== counter -->
            <script src="js/counter/counter.js"></script>

            <!--== contact-form -->
            <script src="js/contact-form/contact-form.js"></script>
            <!--== validate -->
            <script src="js/contact-form/jquery.validate.min.js"></script>

            <!--== map api -->
            <script src="https://maps.googleapis.com/maps/api/js"></script>
            <script src="js/map.js"></script>

            <!--== canvas -->
            <script src="js/particle/canvas.js"></script>
            <script src="js/particle/confetti.js"></script>

            <!--== theme-script -->
            <script src="js/theme-script.js"></script>

            <!-- inject js end -->

</body>


</html>