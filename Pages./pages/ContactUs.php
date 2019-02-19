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
  <title>Contact Us</title>
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
              <li class="nav-item">
                <a href="Portfolio.php" class="nav-link">Portfolio</a>
              </li>
              <li class="nav-item">
                <a href="AboutUs.php" class="nav-link">About Us</a>
              </li>
              <li class="nav-item active">
                <a href="ContactUs.php" class="nav-link">Contact Us</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>

  <!-- End Header -->

  <!-- Start Contact Us page bread crumps section/ -->
  <section class="breadcrumb">
    <div class="container ">
      <div class="row">
        <div class="col-12">
          <h3>
            Contact Us
          </h3>

          <ol class="breadcrumb p-0">
            <li class="breadcrumb-item"><a href="default.php">Home</a></li>
            <li class="breadcrumb-item active">Contact Us</li>
          </ol>

        </div>
      </div>
    </div>
  </section>

  <!-- End Contact us bread crumps section/ -->

  <!-- Start Contact Us page 1st section/ -->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-12 px-5">
          <p>
            We are always here to help, If you have requirements/queries about our services. Fill up the form below and
            we'll do our best to reply you within 24 hours. Alternatively simply pickup the phone and give us a call.
          </p>
          <hr>
        </div>
      </div>

    </div>
  </section>

  <!-- End Contact Us page 1st section/ -->

  <!-- Start Contact Us page form section/ -->
  <section class="form-section">
    <div class="container ">
      <div class="row pl-5">
        <div class="col-md-6">
          <form action="">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" class="form-control" placeholder="Full name" required>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" placeholder="Email Address" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" class="form-control" placeholder="Phone Number">
              </div>
              <div class="form-group col-md-6">
                <select id="inputState" class="form-control">
                  <option selected disabled>Country</option>
                  <option value="Afganisthan">Afganisthan</option>
                  <option value="Bhutan">Bhutan</option>
                  <option value="China">China</option>
                  <option value="India">India</option>
                  <option value="Nepal">Nepal</option>

                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <textarea class="form-control" rows="3" placeholder="Description" required></textarea>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12 text-center">
                <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane" aria-hidden="true">
                    Send Message</i></button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-6 address pl-5">
          <h5>
            Call Us / WhatsApp
          </h5>
          <p>
            <a class="p-1" href="callto:999999999"><i class="fa fa-phone" aria-hidden="true"></i> +(91) 9999999990 </a><br />
          </p>
          <h5>
            <!--  class="pt-2"> -->
            Email / Website
          </h5>
          <p>
            <a class="p-1" href="mailto:abc@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i>
              +inequiry@gmail.com </a><br>
            <a class="pt-2 p-1" href="www.abcXyz.tech"><i class="fa fa-globe" aria-hidden="true"></i>
              www.abcXyz.tech </a> <br>
          </p>
          <h5>
            Working hours
          </h5>
          <p>
            Mon-Fri : 9am - 6pm (IST)
          </p>
          <h5>
            Address
          </h5>
          <p>
            Xyz Estate, East-hampire, Pune-489262, Maharashtra
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Us page form section/ -->

  <!-- Start Contact Us page Map section/ -->
  <div class="container-fluid">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d242118.14200074793!2d73.72287676088992!3d18.524564856697058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf2e67461101%3A0x828d43bf9d9ee343!2sPune%2C+Maharashtra!5e0!3m2!1sen!2sin!4v1548575616503"
      width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>

  <!--  End Contact Us page Map section/ -->


  <!-- Start Footer -->

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
            Copyrights &copy; 2018 - All rights reserved
          </p>

        </div>
      </div>
    </div>

  </footer>

  <!-- End Footer -->

</body>

</html>