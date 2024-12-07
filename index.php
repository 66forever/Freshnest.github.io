<?php
session_start(); 
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Freshenest</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&family=Poppins:wght@200;300;400;500&display=swap" rel="stylesheet">
    <!-- script  ================================================== -->
    <script src="js/modernizr.js"></script>
  </head>

  <body class="bg-body" data-bs-spy="scroll" data-bs-target="#navbar" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" tabindex="0">
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
        <title>Search</title>
        <path fill="currentColor" d="M19 3C13.488 3 9 7.488 9 13c0 2.395.84 4.59 2.25 6.313L3.281 27.28l1.439 1.44l7.968-7.969A9.922 9.922 0 0 0 19 23c5.512 0 10-4.488 10-10S24.512 3 19 3zm0 2c4.43 0 8 3.57 8 8s-3.57 8-8 8s-8-3.57-8-8s3.57-8 8-8z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="user" viewBox="0 0 16 16">
        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="cart" viewBox="0 0 16 16">
        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="arrow-left" viewBox="0 0 32 32">
        <path fill="currentColor" d="m13.281 6.781l-8.5 8.5l-.687.719l.687.719l8.5 8.5l1.438-1.438L7.938 17H28v-2H7.937l6.782-6.781z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="arrow-right" viewBox="0 0 32 32">
        <path fill="currentColor" d="M18.719 6.781L17.28 8.22L24.063 15H4v2h20.063l-6.782 6.781l1.438 1.438l8.5-8.5l.687-.719l-.687-.719z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="shipping-fast" viewBox="0 0 32 32">
        <path fill="currentColor" d="M0 6v2h19v15h-6.156c-.446-1.719-1.992-3-3.844-3c-1.852 0-3.398 1.281-3.844 3H4v-5H2v7h3.156c.446 1.719 1.992 3 3.844 3c1.852 0 3.398-1.281 3.844-3h8.312c.446 1.719 1.992 3 3.844 3c1.852 0 3.398-1.281 3.844-3H32v-8.156l-.063-.157l-2-6L29.72 10H21V6zm1 4v2h9v-2zm20 2h7.281L30 17.125V23h-1.156c-.446-1.719-1.992-3-3.844-3c-1.852 0-3.398 1.281-3.844 3H21zM2 14v2h6v-2zm7 8c1.117 0 2 .883 2 2s-.883 2-2 2s-2-.883-2-2s.883-2 2-2zm16 0c1.117 0 2 .883 2 2s-.883 2-2 2s-2-.883-2-2s.883-2 2-2z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="shopping-cart" viewBox="0 0 32 32">
        <path fill="currentColor" d="M5 7c-.55 0-1 .45-1 1s.45 1 1 1h2.219l2.625 10.5c.222.89 1.02 1.5 1.937 1.5H23.25c.902 0 1.668-.598 1.906-1.469L27.75 10H11l.5 2h13.656l-1.906 7H11.781L9.156 8.5A1.983 1.983 0 0 0 7.22 7zm17 14c-1.645 0-3 1.355-3 3s1.355 3 3 3s3-1.355 3-3s-1.355-3-3-3zm-9 0c-1.645 0-3 1.355-3 3s1.355 3 3 3s3-1.355 3-3s-1.355-3-3-3zm0 2c.563 0 1 .438 1 1c0 .563-.438 1-1 1c-.563 0-1-.438-1-1c0-.563.438-1 1-1zm9 0c.563 0 1 .438 1 1c0 .563-.438 1-1 1c-.563 0-1-.438-1-1c0-.563.438-1 1-1z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="gift" viewBox="0 0 32 32">
        <path fill="currentColor" d="M12 5c-1.645 0-3 1.355-3 3c0 .352.074.684.188 1H4v6h1v13h22V15h1V9h-5.188A2.95 2.95 0 0 0 23 8c0-1.645-1.355-3-3-3c-1.75 0-2.938 1.328-3.719 2.438c-.105.148-.187.292-.281.437c-.094-.145-.176-.29-.281-.438C14.938 6.329 13.75 5 12 5zm0 2c.625 0 1.438.672 2.063 1.563c.152.218.128.23.25.437H12c-.566 0-1-.434-1-1c0-.566.434-1 1-1zm8 0c.566 0 1 .434 1 1c0 .566-.434 1-1 1h-2.313c.122-.207.098-.219.25-.438C18.563 7.673 19.375 7 20 7zM6 11h20v2h-9v-1h-2v1H6zm1 4h18v11h-8V16h-2v10H7z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="return" viewBox="0 0 32 32">
        <path fill="currentColor" d="M16 3C8.832 3 3 8.832 3 16s5.832 13 13 13s13-5.832 13-13h-2c0 6.086-4.914 11-11 11S5 22.086 5 16S9.914 5 16 5c3.875 0 7.262 1.984 9.219 5H20v2h8V4h-2v3.719C23.617 4.844 20.02 3 16 3z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="quote" viewBox="0 0 24 24">
        <path fill="currentColor" d="m15 17l2-4h-4V6h7v7l-2 4h-3Zm-9 0l2-4H4V6h7v7l-2 4H6Z" />
      </symbol>      
      <symbol xmlns="http://www.w3.org/2000/svg" id="nav-icon" viewBox="0 0 16 16">
        <path d="M14 10.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0 0 1h7a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0 0 1h11a.5.5 0 0 0 .5-.5z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="close" viewBox="0 0 16 16">
        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="navbar-icon" viewBox="0 0 16 16">
        <path d="M14 10.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0 0 1h7a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0 0 1h11a.5.5 0 0 0 .5-.5z" />
      </symbol>
    </svg>

    <div id="preloader">
      <span class="loader">
        <span class="loader-inner"></span>
      </span>
    </div>

    <div class="search-box position-relative overflow-hidden w-100">
      <div class="search-wrap">
        <div class="close-button position-absolute">
          <svg class="close" width="22" height="22">
            <use xlink:href="#close"></use>
          </svg>
        </div>
        <form id="search-form" class="text-center pt-3" action="" method="">
          <input type="text" class="search-input fs-5 p-4 bg-transparent" placeholder="Search...">
          <svg class="search" width="22" height="22">
            <use xlink:href="#search"></use>
          </svg>
        </form>
      </div>
    </div> 

    <header id="header" class="site-header text-black">
      <nav id="header-nav" class="navbar navbar-expand-lg px-3 mb-3">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">
            <img src="images/LOGO-FRESH.png" class="logo" width="220" height="40">
          </a>
          <button class="navbar-toggler d-flex d-lg-none order-3 p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <svg class="navbar-icon" width="50" height="50">
              <use xlink:href="#navbar-icon"></use>
            </svg>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="bdNavbar" aria-labelledby="bdNavbarOffcanvasLabel">
            <div class="offcanvas-header px-4 pb-0">
              <a class="navbar-brand" href="index.php">
                <img src="images/LOGO-FRESH.png" class="logo">
              </a>
              <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas" aria-label="Close" data-bs-target="#bdNavbar"></button>
            </div>
            <div class="offcanvas-body">
              <ul id="navbar" class="navbar-nav text-uppercase justify-content-end align-items-center flex-grow-1 pe-3">
                <li class="nav-item dropdown">
                  <a class="nav-link me-4" href="#billboard">Home</a><ul class="dropdown-menu list-unstyled" aria-labelledby="dropdownPages">
                    
                  </ul>
                </li>

                <li class="nav-item dropdown me-4">
                  <a class="nav-link " href="#collections" >Services</a>
                </li>

                <li class="nav-item dropdown me-4">
                  <a class="nav-link" href="#latest-blog" >Blog</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link me-4" href="#about-us">About Us</a>
                </li>

                <li class=" nav-item dropdown-pe-3">
                  <a class="nav-link dropdown-toggle" href="#" id="dropdownPages" data-bs-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                    <svg class="user" width="18" height="18">
                      <use xlink:href="#user"></use>
                    </svg>
                    <?php 
                  if (isset($_SESSION['firstName'])) {
                      echo '<span class="ms-2">' . htmlspecialchars($_SESSION['firstName']) . '</span>';
                  }
                  ?>
                    </a>
                    <ul class="dropdown-menu list-unstyled" aria-labelledby="dropdownPages">
                    <?php 
                    // Remove session_start() from here since it's already at the top of the file
                    if (isset($_SESSION['firstName'])) {
                        // User is logged in
                        echo "<li><a href='pass.php'><span class='glyphicon glyphicon-user'></span> " . htmlspecialchars($_SESSION['firstName']) . "</a></li>";
                        echo "<li><a href='transaction.php'><span class='glyphicon glyphicon-shopping-cart'></span>Transaction</a></li>";
                        echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-in'></span> Logout</a></li>";
                    } else {
                        // User is not logged in
                        echo "<li><a href='signup.php'><span class='glyphicon glyphicon-user'></span> Sign Up</a></li>";
                        echo "<li><a href='login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
                    }
                    ?>
                </ul>
                    </ul>
                  </li>
                <li class="nav-item">
                  <div class="user-items ps-5">
                    <ul class="d-flex justify-content-end list-unstyled">
                      <li class="search-item pe-3" data-bs-toggle="collapse" data-bs-target="#search-box" aria-controls="search-box" aria-expanded="false" aria-label="Toggle navigation">
                        <svg class="search" width="18" height="18">
                          <use xlink:href="#search"></use>
                        </svg>
                      </li>
                      
                      <li>
                        <a href="services.php" class="Booknow-btn">Book Now</a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>    
    </header>


    <section id="billboard" class="overflow-hidden">
      <section class="home"> 
              <div class="homepage-image1">
                  <img src="hmpng/INDEX2.jpg" class="LV1index" alt="LV1index">
              </div>
              <div class="home-content">
                  <div class="overlay-text">
                      <h1>TRUSTED CLEANING SERVICE IN THE METRO</h1>
                      <p>"Making Every Nest a FreshNest"</p>

                      <!-- Custom Button -->
                      <a href="services.php" class="button">Learn More</a>
                      
                  

                      </div>
                  </div>
        </section>               
    </section>


    
    <section id="collections" class="position-relative padding-large">
      <div class="container-fluid">
          <div class="display-header pb-3 d-flex justify-content-between flex-wrap col-md-12">
            <h2 class="display-2 text-dark text-uppercase">Our Featured Services</h2> 
            <a href="services.php" class="btn btn-medium btn-arrow btn-normal position-relative">
              <span class="text-uppercase">BOOK NOW</span>            
              <svg class="arrow-right position-absolute" width="18" height="20">
                <use xlink:href="#arrow-right"></use>
              </svg>
            </a>
            <p>FreshNest provides personalized cleaning services for homes, commercial spaces, and post-construction sites, delivered by dedicated agents who prioritize eco-friendly practices and meticulous attention to detail. We guarantee exceptional quality, consistently exceeding expectations by combining cleanliness with care.

          </div>

        <div class="row">
          <div class="swiper collection-swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide overflow-hidden">
                <div class="product-card">
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="regular-cleaning.php">Regular Cleaning</a>
                    </h3>
                  </div>
                  <div class="image-overlay position-relative">
                    <div class="product-image">
                      <img src="images/product-item8(1).jpg" alt="product-item" class="product-image img-fluid">
                      <div class="text-box box-slide position-absolute">
                        <div class="text-content p-5 bg-light">
                          <h3>About Regular</h3>
                          <p>Our basic cleaning targets high-impact areas, providing a cost-effective solution for a clean and organized space.</p>
                          <ul>
                            <li>Packages include one (1) cleaner only</li>
                            <li> Includes:sweeping, mopping,...</li>
                          </ul>
                          <a href="regular-cleaning.php" class="btn btn-normal mt-3">Learn More</a>
                        </div>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
              <div class="swiper-slide overflow-hidden">
                <div class="product-card">
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="general-cleaning.php">General Cleaning</a>
                    </h3>
                  </div>
                  <div class="image-overlay position-relative">
                    <div class="product-image">
                      <img src="images/product-item5(2).jpg" alt="product-item" class="product-image img-fluid">

                      <div class="text-box box-slide position-absolute">
                        <div class="text-content p-5 bg-light">
                          <h3>About General</h3>
                          <p>General Cleaning provides a thorough, top-to-bottom clean for homes and commercial properties, ensuring a spotless space.</p>
                          <ul>
                            <li>Dust and spot clean ceiling, crown molding, and light fixtures (no scaffolding) </li>
                            <li>Clean walls, window ledges, and baseboards.... </li>
                          </ul>
                          <a href="general-cleaning.php" class="btn btn-normal mt-3">Learn More</a>
                        </div>
                      </div>
                    </div>
                  <!-- product-image -->
                  </div>                  
                </div>
              </div>
              <div class="swiper-slide overflow-hidden">
                <div class="product-card">
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">Upholstery Cleaning</a>
                    </h3>
                  </div>
                  <div class="image-overlay position-relative">
                    <div class="product-image">
                      <img src="images/product-item6(3).jpg" alt="product-item" class="product-image img-fluid">

                      <div class="text-box box-slide position-absolute">
                        <div class="text-content p-5 bg-light">
                          <h3>About Upholstery</h3>
                          <p>Thoroughly eliminates hidden dust mites, germs, and bacteria from mattresses, sofas, and other upholstered items.</p>
                          <ul>
                            <li>Sofas, Rugs... </li>
                            <li>Office dividers</li>
                            <li>Other home or office upholstery</li>
                          </ul>
                          <a href="#" class="btn btn-normal mt-3">Learn More</a>
                        </div>
                      </div>
                    </div>
                  <!-- product-image -->
                  </div>                  
                </div>
              </div>
              <div class="swiper-slide overflow-hidden">
                <div class="product-card">
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">Duo Disinfection</a>
                    </h3>
                  </div>
                  <div class="image-overlay position-relative">
                    <div class="product-image">
                      <img src="images/product-item7(4).jpg" alt="product-item" class="product-image img-fluid">

                      <div class="text-box box-slide position-absolute">
                        <div class="text-content p-5 bg-light">
                          <h3>About Duo</h3>
                          <p>An economical disinfection package using two hospital-grade methods: fogging or misting, combined with UV light for thorough and effective disinfection.</p>
                          <ul>
                            <li>Fogging</li>
                            <li>Misting</li>
                            <li>UV light..</li>
                          </ul>
                          <a href="#" class="btn btn-normal mt-3">Learn More</a>
                        </div>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination position-absolute text-center"></div>
    </section>

    <!-- TESTIMONIALS -->                  
    <section id="testimonials" class="position-relative">
      <div class="container">
        <div class="row">
          <div class="review-content position-relative">
            <div class="swiper-icon swiper-arrow swiper-arrow-prev position-absolute d-flex align-items-center justify-content-center">
              <svg class="icon-arrow" width="25" height="25">
                <use xlink:href="#arrow-left" />
              </svg>
            </div>
            <div class="swiper testimonial-swiper">
              <div class="quotation text-center">
                <svg class="quote">
                  <use xlink:href="#quote" />
                </svg>
              </div>
              <div class="swiper-wrapper">
                <div class="swiper-slide text-center d-flex justify-content-center">
                  <div class="review-item col-md-10">
                    <i class="icon icon-review"></i>
                    <blockquote class="fs-4">“I am very happy with their service - we tried other cleaning services but Freshnest has exceeded my expectations...”</blockquote>
                    <div class="author-detail">
                        <div class="testimonial-profile">
                                <img src="hmpng/testimony1.jpg" alt="Luigi Castillo" class="testimonial-image">
                        </div>

                      <div class="name text-primary text-uppercase pt-2">Luigi Castillo</div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide text-center d-flex justify-content-center">
                  <div class="review-item col-md-10">
                    <i class="icon icon-review"></i>
                    <blockquote class="fs-4">“Despite having a fully booked week, they were able to squeeze me in their schedule. ...”</blockquote>
                    <div class="author-detail">
                        <div class="testimonial-profile">
                            <img src="hmpng/testimony3.jpg" alt="IShowSpeed" class="testimonial-image">
                        </div>
                      <div class="name text-primary text-uppercase pt-2">IShowSpeed</div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide text-center d-flex justify-content-center">
                  <div class="review-item col-md-10">
                    <i class="icon icon-review"></i>
                    <blockquote class="fs-4">“Highly recommend their service! I availed of their FreshNest General Cleaning which includes their usual deep cleaning...”</blockquote>
                    <div class="author-detail">
                        <div class="testimonial-profile">
                              <img src="hmpng/testimony4.jpg" alt="Diwata Pares" class="testimonial-image">
                          </div>
                      <div class="name text-primary text-uppercase pt-2">Diwata Pares</div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide text-center d-flex justify-content-center">
                  <div class="review-item col-md-10">
                    <i class="icon icon-review"></i>
                    <blockquote class="fs-4">“I'm sooooo happy with your service!! My house feels like a new from inside. Super solid yung service niyo. Well done!”</blockquote>
                    <div class="author-detail">
                        <div class="testimonial-profile">
                                <img src="hmpng/testimony2.jpg" alt="BINI Mikhamot" class="testimonial-image">
                          </div>
                      <div class="name text-primary text-uppercase pt-2">BINI Mikhamot</div>    
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-icon swiper-arrow swiper-arrow-next position-absolute d-flex align-items-center justify-content-center">
              <svg class="icon-arrow" width="25" height="25">
                <use xlink:href="#arrow-right" />
              </svg>
            </div>
          </div>
        </div>
      </div>      
      <div class="swiper-pagination text-center position-absolute"></div>
    </section>


     <!-- WHY CHOOSE US PART -->
     <section id="company" class="padding-large">                
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-md-6 pb-3">
            <div class="icon-box d-flex align-items-center">
              <div class="icon-box-icon pt-3 pe-3 pb-3 ps-3">
                <svg class="shipping-fast">
                  <use xlink:href="#shipping-fast" />
                </svg>
              </div>
              <div class="icon-box-content ps-3">
                <h3 class="card-title text-uppercase text-dark">Quick Service</h3>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 pb-3">
            <div class="icon-box d-flex align-items-center">
              <div class="icon-box-icon pt-3 pe-3 pb-3 ps-3">
                <svg fill=" var(--bs-primary)" height="200px" width="200px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 60 60" xml:space="preserve" stroke=" var(--bs-primary)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M59.206,0.293c-0.391-0.391-1.023-0.391-1.414,0L54.085,4H30.802L1.533,33.511c-1.376,1.376-1.376,3.614,0,4.99 l20.466,20.466C22.664,59.633,23.551,60,24.494,60s1.829-0.367,2.505-1.043l28.501-29.271V5.414l3.707-3.707 C59.597,1.316,59.597,0.684,59.206,0.293z M30.929,12.899c0.38-0.38,1.04-0.38,1.41-0.01c0.19,0.19,0.3,0.45,0.3,0.71 c0,0.271-0.109,0.521-0.29,0.71c-0.189,0.19-0.45,0.29-0.71,0.29s-0.52-0.1-0.71-0.29c-0.18-0.189-0.29-0.45-0.29-0.71 S30.749,13.08,30.929,12.899z M16.79,27.038l10.606-10.606c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L18.204,28.452 c-0.195,0.195-0.451,0.293-0.707,0.293s-0.512-0.098-0.707-0.293C16.4,28.062,16.4,27.429,16.79,27.038z M24.16,31.99 c0,0.26-0.11,0.52-0.301,0.71c-0.18,0.18-0.439,0.29-0.699,0.29c-0.271,0-0.53-0.11-0.71-0.301c-0.19-0.18-0.29-0.43-0.29-0.699 c0-0.271,0.1-0.521,0.29-0.71c0.369-0.37,1.04-0.37,1.409,0C24.049,31.47,24.16,31.729,24.16,31.99z M25.276,49.666 c-0.195,0.195-0.451,0.293-0.707,0.293s-0.512-0.098-0.707-0.293l-0.622-0.622c-0.811,0.538-1.761,0.829-2.757,0.829 c-1.336,0-2.592-0.521-3.535-1.465c-0.391-0.391-0.391-1.024,0-1.414c0.391-0.391,1.023-0.391,1.414,0 c0.886,0.886,2.285,1.069,3.396,0.568l-3.836-3.836l-2.802,0.35c-0.977,0.121-1.975-0.164-2.739-0.783 c-0.746-0.605-1.201-1.459-1.279-2.402c-0.095-1.131,0.199-2.244,0.813-3.172l-0.781-0.781c-0.391-0.391-0.391-1.023,0-1.414 s1.023-0.391,1.414,0l0.779,0.779c1.94-1.283,4.586-1.072,6.293,0.635c0.391,0.391,0.391,1.023,0,1.414s-1.023,0.391-1.414,0 c-0.921-0.921-2.292-1.105-3.406-0.577l3.846,3.846l2.802-0.35c0.97-0.122,1.974,0.162,2.738,0.781 c0.747,0.606,1.202,1.459,1.28,2.403c0.095,1.131-0.199,2.243-0.814,3.172l0.625,0.625C25.666,48.643,25.666,49.275,25.276,49.666z M25.276,29.867c-0.391-0.391-0.391-1.023,0-1.414l10.606-10.607c0.391-0.391,1.023-0.391,1.414,0c0.391,0.391,0.391,1.023,0,1.414 L26.69,29.867c-0.195,0.195-0.451,0.293-0.707,0.293S25.471,30.063,25.276,29.867z M40.832,22.796c0.391-0.391,1.023-0.391,1.414,0 s0.391,1.023,0,1.414l-7.071,7.071c-0.195,0.195-0.451,0.293-0.707,0.293s-0.512-0.098-0.707-0.293 c-0.391-0.391-0.391-1.023,0-1.414L40.832,22.796z M29.518,36.938l-1.414,1.414c-0.195,0.195-0.451,0.293-0.707,0.293 s-0.512-0.098-0.707-0.293c-0.391-0.391-0.391-1.023,0-1.414l1.414-1.414c0.391-0.391,1.023-0.391,1.414,0 S29.909,36.547,29.518,36.938z M30.639,33.399c0-0.26,0.11-0.52,0.29-0.71c0.38-0.37,1.04-0.37,1.42,0 c0.181,0.19,0.29,0.45,0.29,0.71c0,0.271-0.109,0.53-0.29,0.71c-0.189,0.19-0.45,0.29-0.71,0.29s-0.52-0.1-0.71-0.29 C30.749,33.92,30.639,33.67,30.639,33.399z M43.661,32.695L33.054,43.302c-0.195,0.195-0.451,0.293-0.707,0.293 s-0.512-0.098-0.707-0.293c-0.391-0.391-0.391-1.023,0-1.414l10.606-10.606c0.391-0.391,1.023-0.391,1.414,0 S44.051,32.305,43.661,32.695z M47.189,29.16c-0.18,0.189-0.439,0.29-0.699,0.29c-0.261,0-0.521-0.101-0.71-0.29 c-0.181-0.181-0.29-0.44-0.29-0.71c0-0.261,0.109-0.521,0.29-0.71c0.38-0.37,1.039-0.37,1.409,0c0.19,0.189,0.301,0.449,0.301,0.71 C47.49,28.72,47.379,28.979,47.189,29.16z M44.499,20c-2.757,0-5-2.243-5-5s2.243-5,5-5s5,2.243,5,5S47.256,20,44.499,20z"></path> <path d="M13.093,40.725c0.033,0.396,0.228,0.756,0.547,1.016c0.343,0.279,0.793,0.405,1.231,0.352l1.259-0.157l-2.742-2.742 C13.164,39.666,13.049,40.188,13.093,40.725z"></path> <path d="M22.925,43.605c-0.344-0.278-0.797-0.409-1.229-0.351l-1.26,0.157l2.741,2.741c0.225-0.474,0.34-0.996,0.296-1.532 C23.44,44.226,23.245,43.865,22.925,43.605z"></path> </g> </g></svg>
                  <use xlink:href="#pricing" />
                </svg>
              </div>
              <div class="icon-box-content ps-3">
                <h3 class="card-title text-uppercase text-dark">Transparent pricing</h3>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 pb-3">
            <div class="icon-box d-flex align-items-center">
              <div class="icon-box-icon pt-3 pe-3 pb-3 ps-3">
                <svg class="gift">
                  <use xlink:href="#gift" />
                </svg>
              </div>
              <div class="icon-box-content ps-3">
                <h3 class="card-title text-uppercase text-dark">Personalized Care</h3>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 pb-3">
            <div class="icon-box d-flex align-items-center">
              <div class="icon-box-icon pt-3 pe-3 pb-3 ps-3">
              <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M20 17L21 13L22 17L25 18L22 19L21 23L20 19L17 18L20 17Z" fill="var(--bs-primary)"></path> <path d="M30 12.5L32.5 4L35 12.5L40 15L35 17.5L32.5 25L30 17.5L25 15L30 12.5Z" fill="var(--bs-primary)"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M12 26H6V39.5H12V37.1604C12.9708 37.127 13.9816 37.1008 14.4118 37.1178C16.4692 37.1991 18.0055 37.6783 19.5589 38.1628C21.0081 38.6148 22.4722 39.0715 24.3879 39.2139C24.8694 39.2497 25.338 39.2959 25.7923 39.3407C27.4327 39.5025 28.8866 39.6459 30.0886 39.2139C31.6234 38.6623 40.3936 34.4701 41.4899 33.3669C42.5862 32.2637 42.038 29.2851 38.6396 29.8367C36.9626 30.1089 35.0188 30.8914 33.2559 31.6011C31.446 32.3297 29.8268 32.9815 28.8827 32.9256C27.019 32.8153 22.0857 31.9328 22.0857 31.9328L27.75 32C27.75 32 28.5502 32.0417 29.6501 31.2709C30.75 30.5 31.733 28.2922 30.0886 28.2922C28.4442 28.2922 26.6901 27.7406 26.6901 27.7406L19.6739 26.1961C19.6739 26.1961 17.2621 25.7548 16.2755 26.1961C15.6495 26.4761 13.4929 27.2446 12 27.769V26Z" fill="var(--bs-primary)"></path> </g></svg>
                  <use xlink:href="#service" />
                </svg>
              </div>
              <div class="icon-box-content ps-3">
                <h3 class="card-title text-uppercase text-dark">Spotless Finish</h3>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>

    

  
    
    <!--  ABOUT US PART -->                  
    <section id="about-us">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-between g-5">
          <div class="col-lg-6">
            <div class="image-holder mb-4 jarallax">
                <img src="hmpng/ABTS1.jpg" alt="single" class="img-fluid jarallax-img">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="detail p-5">
              <div class="display-header">
                <h2 class="display-2 text-uppercase text-dark pb-2">About Us</h2>
                <p class="pb-3">At Freshnest Cleaning Service, we're a team of dedicated professionals passionate about providing exceptional cleaning experiences that make a real difference in people's lives. Our story began with a simple yet powerful idea: to create a cleaning service that not only cleans spaces but also cares for the people who inhabit them.</p>
                <p>At Freshnest, we are committed to delivering consistently exceptional service. Our team utilizes state-of-the-art cleaning equipment and FDA-approved, eco-friendly products to guarantee top-quality results that are both safe for our clients and environmentally friendly. </p>
                <a href="about-us.php" class="btn btn-medium btn-arrow outline-dark position-relative mt-3">
                  <span class="text-uppercase">About us</span>            
                  <svg class="arrow-right position-absolute" width="18" height="20">
                    <use xlink:href="#arrow-right"></use>
                  </svg>
                </a>  
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- BLOG PART -->
    <section id="latest-blog">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="display-header d-flex flex-wrap justify-content-between pb-3">
              <h2 class="display-2 text-dark text-uppercase">Read Our Articles</h2>
              <a href="blog.php" class="btn btn-medium btn-arrow btn-normal position-relative">
                <span class="text-uppercase">See all articles</span>            
                <svg class="arrow-right position-absolute" width="18" height="20">
                  <use xlink:href="#arrow-right"></use>
                </svg>
              </a>
            </div>
          </div>
        </div>
        <div class="row g-3 post-grid">
          <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
            <div class="card-item">
              <div class="card border-0 bg-transparent">
                <div class="card-image">
                  <img src="images/post-item1.jpg" alt="" class="post-image img-fluid">
                </div>
              </div>
              <div class="card-body p-0 mt-4">
                <h3 class="card-title text-uppercase">
                  <a href="single-post.php">3 Signs It's Time for a Deep Cleaning of Your Home</a>
                </h3>
                <p>A clean and well-organized home not only looks good but also promotes a healthier lifestyle and boosts your mood...</p>
                <a href="single-post.php" class="btn btn-normal text-uppercase p-0"><em>Read More</em></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
            <div class="card-item">
              <div class="card border-0">
                <div class="card-image">
                  <img src="images/post-item2.jpg" alt="" class="post-image img-fluid">
                </div>
              </div>
              <div class="card-body p-0 mt-4">
                <h3 class="card-title text-uppercase">
                  <a href="single-post2.php">10 Essential Cleaning Tips for a Fresh and Organized Home</a>
                </h3>
                <p>A clean and well-organized home not only looks good but also promotes a healthier lifestyle and boosts your mood...</p>
                <a href="single-post2.php" class="btn btn-normal text-uppercase p-0"><em>Read More</em></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
            <div class="card-item">
              <div class="card border-0">
                <div class="card-image">
                  <img src="images/post-item3.jpg" alt="" class="post-image img-fluid">
                </div>
              </div>
              <div class="card-body p-0 mt-4">
                <h3 class="card-title text-uppercase">
                  <a href="single-post3.php">Benefits of Deep Cleaning for your Health</a>
                </h3>
                <p>Enim ut nunc, ultrices mauris felis viverra amet. Ante sed dictum nisi suscipit ac ut faucibus pretium interdum.</p>
                <a href="single-post3.php" class="btn btn-normal text-uppercase p-0"><em>Read More</em></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

     <!-- SUBSCIBE PART -->                   
     <section class="subscribe">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <div class="subscribe-content padding-large">
              <div class="subscribe-header">
                <h2 class="display-4">Get offers & discounts by subscribing us</h2>
              </div>
              <form id="form" action="subscribe.php" method="post">
                <input type="email" name="email" placeholder="Enter Your Email Address" class="w-100 bg-light border-0 ps-5 fst-italic" required>
                <button type="submit" class="btn btn-full btn-black text-uppercase">Subscribe Now</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="brand-collection" class="padding-small border-top border-bottom overflow-hidden margin-large mb-0">
      <div class="container">
        <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
            <a href="#"><img src="images/LOGO-FRESH.png" alt="brand" width="220" height="40"></a>
            <a href="#"><img src="images/LOGO-FRESH.png" alt="brand" width="220" height="40"></a>
            <a href="#"><img src="images/LOGO-FRESH.png" alt="brand" width="220" height="40"></a>
            <a href="#"><img src="images/LOGO-FRESH.png" alt="brand" width="220" height="40"></a>
            <a href="#"><img src="images/LOGO-FRESH.png" alt="brand" width="220" height="40"></a>
        </div>
      </div>
    </section>

    <footer id="footer" class="overflow-hidden padding-large">
      <div class="container-fluid">
        <div class="row">
          <div class="row d-flex flex-wrap justify-content-between">
            <div class="col-lg-3 col-sm-6 pb-3 pe-4">
              <div class="footer-menu">
              <img src="images/LOGO-FRESH.png" class="logo" class="pb-3" width="220" height="40">
                <p>At FreshNest, we offer customized, high-quality cleaning and disinfection solutions, ensuring a spotless and hygienic space whether for regular maintenance or premium services. Trust us for excellence in every cleaning.</p>
              </div>
              
            </div>
            <div class="col-lg-2 col-sm-6 pb-3">
              <div class="footer-menu text-uppercase">
                <h5 class="widget-title pb-2">Quick Links</h5>
                <ul class="menu-list list-unstyled text-uppercase">
                  <li class="menu-item pb-2">
                    <a href="#billboard">Home</a>
                  </li>
                  <li class="menu-item pb-2">
                    <a href="#about-us">About</a>
                  </li>
                  <li class="menu-item pb-2">
                    <a href="#collections">Services</a>
                  </li>
                  <li class="menu-item pb-2">
                    <a href="#latest-blog">Blogs</a>
                  </li>
                  <li class="menu-item pb-2">
                    <a href="#contact">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-2 col-sm-6 pb-3">
              <div class="footer-menu text-uppercase">
                <h5 class="widget-title pb-2">Social</h5>
                <div class="social-links">
                  <ul class="list-unstyled">
                    <li class="pb-2">
                      <a href="#">Facebook</a>
                    </li>
                    <li class="pb-2">
                      <a href="#">Twitter</a>
                    </li>
                    <li class="pb-2">
                      <a href="#">Pinterest</a>
                    </li>
                    <li class="pb-2">
                      <a href="#">Instagram</a>
                    </li>
                    <li>
                      <a href="#">Youtube</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="footer-menu contact-item">
                <h5 class="widget-title text-uppercase pb-2">Contact Us</h5>
                <p><a href=""> +123 456 7890</a></p>
                <p><a href="mailto:">message@Freshnest.ph</a></p>
                <p>123 Street, Metro Manila, Philippines</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
