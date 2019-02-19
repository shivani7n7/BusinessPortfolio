<?php

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="fontawesome-free-5.6.3-web/css/all.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Portfolio</title>
</head>

<body>
  <script src="bootstrap/JS/jquery-3.3.1.slim.min.js"></script>
  <script src="bootstrap/JS/popper.min.js"></script>
  <script src="bootstrap/JS/bootstrap.min.js"></script>
  
  <!-- Start Header -->
  
  <header>
    <div class="p-1" id="topHeader">
      <div class="container">
        <div class="row">
          <div class="col-12 text-right">
            <a class="p-1" href="callto:999999999"><i class="fa fa-phone" aria-hidden="true"></i> +(91) 9999999990 </a>
            <a class="p-1" href="mailto:abc@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i>
              +inequiry@gmail.com </a>

          </div>
        </div>
      </div>
    </div>
    <div id="bottomHeader">
      <div class="container-fluid">
        <nav class="navbar navbar-dark navbar-expand-lg">
          <a class="navbar-brand" href="#">
            <img src="images/logo_text_white_small.png" alt="" width="250px">
          </a>
          <button data-toggle="collapse" data-target="#navbar-Toggler" type="button" class="navbar-toggler">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbar-Toggler">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="default.php" class="nav-link">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown">Services</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="WebDesigning.php">
                    web designing
                  </a>
                  <a class="dropdown-item" href="Webdevelopment.php">
                    web development
                  </a>
                  <a class="dropdown-item" href="SEOServices.php">
                    SEO services
                  </a>
                  <a class="dropdown-item" href="SoftwareDev.php">
                    Software development
                  </a>
                  <a class="dropdown-item" href="MobileAppDev.php">
                    Mobile App Development
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="GraphicDesign.php">
                    Graphic Designing
                  </a>
                </div>
              </li>
              <li class="nav-item active">
                <a href="Portfolio.php" class="nav-link">Portfolio</a>
              </li>
              <li class="nav-item">
                <a href="AboutUs.php" class="nav-link">About Us</a>
              </li>
              <li class="nav-item">
                <a href="ContactUs.php" class="nav-link">Contact Us</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>

  <!-- End header -->

  <!-- Start Portfolio Page breadcrump section -->
  
  <section class="breadcrumb">
      <div class="container ">
        <div class="row">
          <div class="col-12">
            <h3>
              Portfolio
            </h3>
  
            <ol class="breadcrumb p-0">
              <li class="breadcrumb-item"><a href="default.php">Home</a></li>
              <li class="breadcrumb-item active">Portfolio</li>
            </ol>
  
          </div>
        </div>
      </div>
    </section>
  

  <!-- End Portfolio Page breadcrump section -->

  <!-- Start Portfolio Page 2nd section -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
             Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
        <hr>
      </div>
    </div>
   
  </div>
</section>

  <!-- End Portfolio Page 2nd section -->

  <!-- Start Portfolio Page carousel section -->
<section>
    <div class="container-fluid p-5">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>

            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/portfoliowebsite/hero_bg_1.jpg" class="d-block w-100" alt="..." width=100px>
                <div class="carousel-caption d-none d-md-block">
                        <h5>SUNBURN</h5>
                        <p>The most Fascinating concert</p>
                      </div>
              </div>
              <div class="carousel-item">
                <img src="images/portfoliowebsite/hero_bg_2.jpg" class="d-block w-100" alt="..." width=100px>
                <div class="carousel-caption d-none d-md-block">
                        <h5>LIVEBAND</h5>
                        <p>The most lively concert</p>
                      </div>
              </div>
              <div class="carousel-item">
                <img src="images/portfoliowebsite/hero_bg_3.jpg" class="d-block w-100" alt="..." width=100px>
                <div class="carousel-caption d-none d-md-block">
                        <h5>MUSIC</h5>
                        <p>It's an escape</p>
                      </div>
              </div>
              <div class="carousel-item">
                <img src="images/portfoliowebsite/hero_bg_4.jpg" class="d-block w-100" alt="..." width=100px>
                <div class="carousel-caption d-none d-md-block">
                        <h5>APPLICATION</h5>
                        <p>A Phone's Application</p>
                      </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </div>
</section>
  
  <!-- End Portfolio Page carousel section -->

<!-- Start Home Page Req Section  -->
<section>
    <div class="container-fluid req-section">
      <div class="row align-items-center">
        <div class="col-md-9 text-center pt-3 pb-2">
          <h5>
            Do you have any Requirements ? We can do it for you!
          </h5>
        </div>
        <div class="col-md-3 pt-2 pb-2 text-center ">
          <button class="btn btn-primary "> Get Started </button>
        </div>
      </div>
    </div>
  </section>

  <!-- End Home Page Req Section  -->
  <!-- Start Home Page Trusted client Section  -->
  <section class="clients">
      <div class="container">
        <div class="row">
          <div class="col-12 pt-3 pb-1 text-center">
            <h4>
              Some Of our trusted clients.
            </h4>
            <hr>
          </div>
        </div>
        <div class="row pb-3 align-items-center">
          <div class="col-md-2 col-6 text-center">
            <img src="images/clients/google.png" class="img-fluid p-2">
          </div>
          <div class="col-md-2 col-6 text-center">
            <img src="images/clients/apple-logotype.png"class="img-fluid p-2">
          </div>
          <div class="col-md-2 col-6 text-center">
            <img src="images/clients/amazon.png" class="img-fluid p-2">
          </div>
          <div class="col-md-2 col-6 text-center">
            <img src="images/clients/netflix.png" class="img-fluid p-2">
          </div>
          <div class="col-md-2 col-6 text-center">
            <img src="images/clients/samsung.png" class="img-fluid p-2">
          </div>
          <div class="col-md-2 col-6 text-center">
            <img src="images/clients/linkedin.png" class="img-fluid p-2">
          </div>
        </div>
      </div>
    </section>
  
    <!-- End Home Page Trusted client Section  -->
  
  
<!-- start footer -->

  <footer class="full-footer">
    <div class="container top-footer p-md-3 p-1">
      <div class="row">

        <div class="col-md-3 pl-3 pr-3">
          <img class="img-fluid" src="images/logo_text_white_small.png" alt="">
          <p>
            Simple Snippet is a Tech-Edu Channel/Blog/Platform for anyone and everyone...
            <a href="#">Read More</a>
          </p>
          <a style="color:black;" class="p-1" href="#"><i class="fab fa-2x fa-facebook"></i></a>
          <a style="color:black;" class="p-1" href="#"><i class="fab fa-2x fa-google-plus-square"></i></a>
          <a style="color:black;" class="p-1" href="#"><i class="fab fa-2x fa-twitter-square"></i></a>
          <a style="color:black;" class="p-1" href="#"><i class="fab fa-2x fa-instagram"></i></a>
        </div>
        <div class="col-md-3 pl-3 pr-3">
          <h3>Important links</h3>
          <a href="#">Privacy policy</a><br />
          <a href="#">Youtube Channel Link</a><br />
          <a href="#">Blog Articles</a><br />
          <a href="#">Social Media</a><br />
        </div>
        <div class="col-md-3 pl-3 pr-3">
          <h3>Our Services</h3>
          <a href="WebDesigning.php">Web Designing</a><br />
          <a href="Webdevelopment.php">Web development</a><br />
          <a href="SEOServices.php">SEO Services</a><br />
          <a href="SoftwareDev.php">Software Development</a><br />
          <a href="MobileAppDev.php">Mobile App Development</a><br />
          <a href="GraphicDesign.php">Graphic Designing</a><br />
        </div>
        <div class="col-md-3 pl-3 pr-3">
          <h3>Contact Us</h3>
          <a class="p-1" href="callto:999999999"><i class="fa fa-phone" aria-hidden="true"></i> +(91) 9999999990 </a><br />
          <a class="p-1" href="mailto:abc@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i>
            +inequiry@gmail.com </a>
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d484236.7195838856!2d73.58344171975712!3d18.524411041566637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf2e67461101%3A0x828d43bf9d9ee343!2sPune%2C+Maharashtra!5e0!3m2!1sen!2sin!4v1548352269089"
              frameborder="0">

            </iframe>
          </div>

        </div>
      </div>
    </div>
    <div class="container-fluid bottom-footer pt-1">
      <div class="row text-center">
        <div class="col-12">
          <p>
            Copyrights 	&copy; 2018 - All rights reserved
          </p>

        </div>
      </div>
    </div>
  </footer>

  <!-- End Footer -->

</body>

</html>