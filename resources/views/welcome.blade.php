<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>cafe de jnr</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="{{ route('welcome') }}"><h2>Cafe <em>de Jnr</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('welcome') }}">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 
                <li class="nav-item"><a class="nav-link" href="{{ route('dishes') }}">Place an Order</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
                    
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#about-us">About Us</a>
                      <a class="dropdown-item" href="#blog">Blog</a>
                      <a class="dropdown-item" href="#testimonials">Testimonials</a>
                    </div>
                </li>
                
                <li class="nav-item"><a class="nav-link" href="#contact-us">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Get your best meal today!</h4>
            <h2>Choose from our menu of gourmet dishes</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Any meal, any time!</h4>
            <h2>Get your breakfast, lunch, and supper from us</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Healthy nutritious delicacies!</h4>
            <h2>Allow us to entice your taste buds with a balanced diet</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Food Variety</h2>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="book-table.html"><img src="assets/images/other-1-370x270.jpg" alt=""></a>
              <div class="down-content">
                <a href="book-table.html"><h4>Breakfast</h4></a>

                <p>One should not attend even the end of the world without a good breakfast.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="book-table.html"><img src="assets/images/other-2-370x270.jpg" alt=""></a>
              <div class="down-content">
                <a href="book-table.html"><h4>Lunch</h4></a>

                <p>Deliciousness jumping into the mouth.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="book-table.html"><img src="assets/images/other-3-370x270.jpg" alt=""></a>
              <div class="down-content">
                <a href="book-table.html"><h4>Supper</h4></a>

                <p>Good time, Great taste.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="about-us" class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Us</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <p>
                Cafe de Jnr was created in 2021 out of a passion for amazing food and service. 
                The then one-man operation saw rapid growth after booking its very first event—catering the anniversary party for the JKUAT and its environs. 
                Through word of mouth, a lot of hard work and a commitment to producing
                one-of-a-kind events, Cafe de Jnr has become one of the most beloved catering companies in Nairobi.
                We believe that using the freshest ingredients produces the best results. 
                We are tireless in staying abreast of the latest food trends. And we are obsessed with creating customized menus and culinary masterpieces for our clients. 
                Simply put: we exist to make your vision a reality.
              </p>
              <ul class="featured-list">
                <li><a href="#">Great taste</a></li>
                <li><a href="#">Awesome experience</a></li>
                <li><a href="#">Wonderful ambience</a></li>
              </ul>
              <a href="about-us.html" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/about-1-570x350.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="blog" class="services" style="background-image: url(assets/images/other-image-fullscren-1-1920x900.jpg);" >
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest blog posts</h2>

              <a href="blog.html">read more <i class="fa fa-angle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="blog-details.html" class="services-item-image"><img src="assets/images/blog-1-370x270.jpg" class="img-fluid" alt=""></a>

              <div class="down-content">
                <h4><a href="blog-details.html">How to prepare flavoured chapatis.</a></h4>

                <p style="margin: 0;"> Kim Wangui &nbsp;&nbsp;|&nbsp;&nbsp; 12/03/2021 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="blog-details.html" class="services-item-image"><img src="assets/images/blog-2-370x270.jpg" class="img-fluid" alt=""></a>

              <div class="down-content">
                <h4><a href="blog-details.html">Make exquisite pilau biryani using this recipe.</a></h4>

                <p style="margin: 0;"> Martin Namu &nbsp;&nbsp;|&nbsp;&nbsp; 01/04/2021 09:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="blog-details.html" class="services-item-image"><img src="assets/images/blog-3-370x270.jpg" class="img-fluid" alt=""></a>

              <div class="down-content">
                <h4><a href="blog-details.html">Create wonderful spaghetti bolognaise.</a></h4>

                <p style="margin: 0;"> Rosemary Achieng' &nbsp;&nbsp;|&nbsp;&nbsp; 16/01/2021 12:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="testimonials" class="happy-clients">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Happy Clients</h2>

              <a href="testimonials.html">read more <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-clients owl-carousel text-center">
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Anne Waru</h4>
                  <p class="n-m"><em>"Quite professional staff and very friendly."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Foi Wamboi</h4>
                  <p class="n-m"><em>"Best biryani in Nairobi."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Antony Wanjala</h4>
                  <p class="n-m"><em>"I enjoyed their service.."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Maureen Naisiaye</h4>
                  <p class="n-m"><em>"Really down to earth staff."</em></p>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>


    <div id="contact-us" class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Order from us?</h4>
                  <p>Please reach out to us by pressing the 'Contact Us' button.</p>
                </div>
                <div class="col-lg-4 col-md-6 text-right">
                  <a href="{{ route('dishes') }}" class="filled-button">Contact Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright © 2021 Cafe de Jnr</p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>
</html>