<?php
session_start(); 
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Freshnest</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXx content is not safe and I can't generate an answer for your request . Please provide more information or clarify the request. SR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&amp;family=Roboto:wght@300&amp;display=swap" rel="stylesheet"/>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="services.css">
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
                  <a class="nav-link me-4" href="index.php">Home</a><ul class="dropdown-menu list-unstyled" aria-labelledby="dropdownPages">
                    
                  </ul>
                </li>

                <li class="nav-item dropdown me-4">
                  <a class="nav-link " href="services.php" >Services</a>
                </li>

                <li class="nav-item dropdown me-4">
                  <a class="nav-link" href="blog.php" >Blog</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link me-4" href="about-us.php">About Us</a>
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
                        echo "<li><a href='cart.php'><span class='glyphicon glyphicon-shopping-cart'></span> Cart</a></li>";
                        echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-in'></span> Logout</a></li>";
                    } else {
                        // User is not logged in
                        echo "<li><a href='signup.php'><span class='glyphicon glyphicon-user'></span> Sign Up</a></li>";
                        echo "<li><a href='login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
                    }
                    ?>
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
                        <a href="Booknow.php" class="Booknow-btn">Book Now</a>
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


   


    <!--  ABOUT US PART -->                  
    <section id="about-us">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-between g-5">
          <div class="col-lg-6">
            <div class="image-holder mb-4 jarallax">
                <img src="hmpng/ABTS1.jpg" alt="single" class="img-fluid jarallax-img">
            </div>

            <div class="row additional-photos">
                <div class="col-md-3">
                  <img alt="Professional cleaner wiping a window" class="img-fluid" height="200" src="https://storage.googleapis.com/a1aa/image/a1Yp0pw0ajakOBS0jqY8OfpetiUfMSCPYTabeCCqXFRf7fq6E.jpg" width="300"/>
                </div>
                <div class="col-md-3">
                  <img alt="Professional cleaner vacuuming a carpet" class="img-fluid" height="200" src="https://storage.googleapis.com/a1aa/image/srA3kKpoQWJsHdiC2IX3XOoLSBUrzStuadSADsenXOxufrqTA.jpg" width="300"/>
                </div>
                <div class="col-md-3">
                  <img alt="Professional cleaner dusting a shelf" class="img-fluid" height="200" src="https://storage.googleapis.com/a1aa/image/x32qXemmkQVzKqep2f16K8i4QdBNpaa4Oh2TwfrOCJMw9vqOB.jpg" width="300"/>
                </div>
                <div class="col-md-3">
                  <img alt="Professional cleaner mopping a floor" class="img-fluid" height="200" src="https://storage.googleapis.com/a1aa/image/GesIBUQ5DLTIXCWMYsqlNRqOfzoueSBCiNfPlKpECyco9vqOB.jpg" width="300"/>
                </div>
            </div>

          </div>

          <div class="col-lg-6">
            <div class="detail p-5">
              <div class="display-header">
                <h2 class="display-2 text-uppercase text-dark pb-2"></h2>
                <h2 class="" > Freshnest Regular Cleaning</h2>
                <p class="pb-3" style="text-align: justify;">At Freshnest Cleaning Service, we're a team of dedicated professionals passionate about providing exceptional cleaning experiences that make a real difference in people's lives. Our story began with a simple yet powerful idea: to create a cleaning service that not only cleans spaces but also cares for the people who inhabit them.</p>
                  <p class="pb-3" style="text-align: justify;">Professional surface care:</p>
                  <ul style="text-align: justify;">
                      <li>Mirror, glass, and interior window cleaning</li>
                      <li>Complete floor care and dusting throughout</li>
                      <li>Thorough sanitization of frequently touched areas</li>
                  </ul>

                  <p style="text-align: justify;">Scheduling Options:</p>
                  <ul style="text-align: justify;">
                      <li>Every two weeks</li>
                      <li>Once weekly</li>
                  </ul>

                  <p style="text-align: justify;">Pricing:</p>
                  <ul style="text-align: justify;">
                      <li>Base rate: ₱2500 (Makati area)</li>
                      <li>Outside Metro Manila: ₱30,000</li>
                      <li>Additional staff: ₱645 per person</li>
                  </ul>

                  <p style="text-align: justify;">Important Notes:</p>
                  <ul style="text-align: justify;">
                      <li>Booking requests after 5:00 PM will be processed the next business day</li>
                      <li>Transportation fees may vary based on location</li>
                      <li>Additional staff available upon request</li>
                  </ul>

                  <p style="text-align: justify;">Contact Information: For personalized quotes and inquiries:</p>
                  <ul style="text-align: justify;">
                      <li>📞 0976 275 7717</li>
                      <li>📞 0917 146 2799</li>
                  </ul>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!--  FORM PART -->                 
    <style>
        /* Additional styling options */
        .calendar-container {
            margin: 20px auto;
            max-width: 320px;
        }

        #calendar-wrapper {
            background: #ffffff;
            padding: 15px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        /* Style the calendar header */
        .flatpickr-header {
            background: #f8f8f8;
            padding: 10px;
            border-radius: 8px 8px 0 0;
        }

        /* Style the month navigation arrows */
        .flatpickr-months .flatpickr-prev-month,
        .flatpickr-months .flatpickr-next-month {
            padding: 5px;
        }

        /* Style the days */
        .flatpickr-day {
            border-radius: 50%;
            margin: 2px;
        }

        .flatpickr-day:hover {
            background: #e8e8ff;
        }

        /* Style today's date */
        .flatpickr-day.today {
            border-color: #4D4DFF;
        }

        /* Style  */
        .time-area-container {
            display: flex;
            justify-content: space-between; /* Space between columns */
            margin-bottom: 20px; /* Add some space below the container */
        }

        .form-grouptime, .area-size-section {
            flex: 1; /* Take equal space */
            margin-right: 10px; /* Space between columns */
        }

        .form-grouptime:last-child, .area-size-section:last-child {
            margin-right: 0; /* Remove margin from the last column */
        }



        /* 5-in-1 Upholstery Cleaning Styles */
        .upholstery-cleaning {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .upholstery-cleaning h3 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
            font-size: 24px;
        }

        .cleaning-options {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .cleaning-option {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .cleaning-option:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .cleaning-option > label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #4a4a4a;
            cursor: pointer;
        }



        .dropdown label {
            display: inline-block;
            margin-left: 5px;
            font-size: 14px;
        }

        .dropdown input[type="number"] {
            width: 50px;
            padding: 3px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            margin-left: 10px;
        }

        input[type="checkbox"] {
            cursor: pointer;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .cleaning-options {
                grid-template-columns: 1fr;
            }
        }


        /* Add these styles to your existing CSS */
        .booking-form-regs {
            width: 40%; /* Adjust width as needed */
            position:relative;
            left:50%; /* Adjust right margin as needed */
            margin: 10px 50px;
            padding: 30px;
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        /* Calendar container styling */
        .calendar-container {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 25px;
        }

        #calendar-wrapper {
            background: #ffffff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }

        /* Time and Area container styling */
        .time-area-container {
            display: flex;
            gap: 20px;
            margin-bottom: 25px;
        }

        .form-grouptime, .area-size-section {
            flex: 1;
        }

        /* Select and input styling */
        select, input[type="number"] {
            width: 100%;
            padding: 8px 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            margin-top: 5px;
        }

        /* Regular Addons section */
        .addon-regular {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 25px;
        }

        /* Upholstery section styling */
        .upholstery-cleaning {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 25px;
        }

        .cleaning-options {
            display: grid;
            gap: 15px;
        }

        .cleaning-option {
            background: #ffffff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.05);
        }


        /* Total price styling */
        .total-price {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            margin: 20px 0;
            font-size: 1.2em;
            font-weight: bold;
            text-align: center;
        }

        /* Submit button styling */
        .btn-primary {
            width: 100%;
            padding: 12px;
            background-color: #4D4DFF; /* Your brand color */
            border: none;
            border-radius: 8px;
            color: white;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #3939cc; /* Darker shade for hover */
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .booking-form-regs {
                width: 90%;
                float: none;
                margin: 20px auto;
            }

            .time-area-container {
                flex-direction: column;
            }
        }

        /* Checkbox and label styling */
        input[type="checkbox"] {
            margin-right: 8px;
        }

        label {
            font-weight: 500;
            color: #333;
        }

        /* Total cost display styling */
        #totalCostDisplay {
            background: #f8f9fa;
            padding: 10px;
            border-radius: 6px;
            margin: 15px 0;
            text-align: right;
            font-weight: bold;
        }
    </style> 
    
    
    <section class="booking-form-regs">
    <!-- SELECT DATE -->
    <form id="bookingForm" method="POST" action="process_booking.php">
        <div class="form-group calendar-container">
            <label>Select Service Date:</label>
            <div id="calendar-wrapper">
                <input type="hidden" id="serviceDate" name="serviceDate" required>
                <div id="calendar"></div>
            </div>
        </div>

        <div class="form-group time-area-container">
         <!-- SELECT TIME -->
            <div class="form-grouptime">
                <label>Select Time:</label>
                <select id="serviceTime" name="serviceTime" required>
                    <option value="">Choose time...</option>
                    <option value="07:00">07:00 AM</option>
                    <option value="08:00">08:00 AM</option>
                    <option value="09:00">09:00 AM</option>
                    <option value="10:00">10:00 AM</option>
                    <option value="11:00">11:00 AM</option>
                    <option value="13:00">01:00 PM</option>
                    <option value="14:00">02:00 PM</option>
                    <option value="15:00">03:00 PM</option>
                </select>
            </div>

             <!-- Area Size Section -->
            <div class="form-group area-size-section">
                <label>Area Size (sqm.):</label>
                <input type="number" id="areaSize" name="areaSize" value="36" required min="36">
                <div class="areact">Area Cost: ₱<span id="areaCost">2520.00</span></div>
                
            </div>
        </div>

        <!-- Regular Addons Section -->
            <div class="form-group addon-regular">
                <h3>Freshnest Regular Addons</h3>
                <input type="checkbox" id="deepCleaning" name="services[]" value="Deep Cleaning: 3500.00" data-price="3500.00" onclick="updateAddonTotal()">
                <label for="deepCleaning">Deep Cleaning </label><br>

                <input type="checkbox" id="duoDisinfection" name="services[]" value="Duo Disinfection: 1500.00" data-price="1500.00" onclick="updateAddonTotal()">
                <label for="duoDisinfection">Duo Disinfection</label>
                <div class="total-section">
                    Regular Addon Cost: ₱<span id="regularAddonCost">0.00</span>
                </div>
            </div>


         <!-- 5-in-1 Upholstery Section -->
        <div class="upholstery-cleaning">
            <h3>5-in-1 Upholstery Cleaning</h3>
            <div class="cleaning-options">
                <div class="cleaning-option">
                    <label>
                        <input type="checkbox" name="services" value="sofa_cleaning" onclick="toggleDropdown('sofaDropdown')">
                        Sofa Cleaning
                    </label>
                    <div id="sofaDropdown" class="dropdown" style="display: none;">
                        <div class="form-group-addon-sofa">
                            <div>
                                <input type="checkbox" id="ottoman" name="services[]" value="Ottoman: 700.00" data-price="700.00" onclick="updateAddonTotal()">
                                <label for="ottoman">Ottoman - ₱700.00</label>
                                <input type="number" id="ottomanQty" value="0" min="0" style="width: 40px;" onchange="updateAddonTotal()">
                            </div>

                            <div>
                                <input type="checkbox" id="oneSeater" name="services[]" value="1 Seater: 700.00" data-price="700.00" onclick="updateAddonTotal()">
                                <label for="oneSeater">1 Seater - ₱700.00</label>
                                <input type="number" id="oneSeaterQty" value="0" min="0" style="width: 40px;" onchange="updateAddonTotal()">
                            </div>

                            <div>
                                <input type="checkbox" id="twoSeater" name="services[]" value="2 Seater: 1400.00" data-price="1400.00" onclick="updateAddonTotal()">
                                <label for="twoSeater">2 Seater - ₱1400.00</label>
                                <input type="number" id="twoSeaterQty" value="0" min="0" style="width: 40px;" onchange="updateAddonTotal()">
                            </div>

                            <div>
                                <input type="checkbox" id="threeFourSeater" name="services[]" value="3-4 Seater: 2100.00" data-price="2100.00" onclick="updateAddonTotal()">
                                <label for="threeFourSeater">3-4 Seater - ₱2100.00</label>
                                <input type="number" id="threeFourSeaterQty" value="0" min="0" style="width: 40px;" onchange="updateAddonTotal()">
                            </div>

                            <div>
                                <input type="checkbox" id="fiveSixSeater" name="services[]" value="5-6 Seater: 2800.00" data-price="2800.00" onclick="updateAddonTotal()">
                                <label for="fiveSixSeater">5-6 Seater - ₱2800.00</label>
                                <input type="number" id="fiveSixSeaterQty" value="0" min="0" style="width: 40px;" onchange="updateAddonTotal()">
                            </div>

                            <div>
                                <input type="checkbox" id="sevenEightSeater" name="services[]" value="7-8 Seater: 3500.00" data-price="3500.00" onclick="updateAddonTotal()">
                                <label for="sevenEightSeater">7-8 Seater - ₱3500.00</label>
                                <input type="number" id="sevenEightSeaterQty" value="0" min="0" style="width: 40px;" onchange="updateAddonTotal()">
                            </div>

                            <div>
                                <input type="checkbox" id="lShape" name="services[]" value="L Shape: 3800.00" data-price="3800.00" onclick="updateAddonTotal()">
                                <label for="lShape">L Shape - ₱3800.00</label>
                                <input type="number" id="lShapeQty" value="0" min="0" style="width: 40px;" onchange="updateAddonTotal()">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="cleaning-option">
                    <label>
                        <input type="checkbox" name="services" value="mattress_cleaning" onclick="toggleDropdown('mattressDropdown')">
                        Bed Mattress Cleaning
                    </label>
                    <div id="mattressDropdown" class="dropdown" style="display: none;">
                        <div class="form-group addon-mattress">
                            <div>
                                <input type="checkbox" id="singleBed" name="services[]" value="Single Bed: 1000.00" data-price="1000.00" onclick="updateAddonTotal()">
                                <label for="singleBed">Single Bed - ₱1,000.00</label>
                                <input type="number" id="singleBedQty" value="0" min="0" style="width: 40px;" onchange="updateAddonTotal()">
                            </div>

                            <div>
                                <input type="checkbox" id="twinBed" name="services[]" value="Twin Bed: 1700.00" data-price="1700.00" onclick="updateAddonTotal()">
                                <label for="twinBed">Twin Bed - ₱1,700.00</label>
                                <input type="number" id="twinBedQty" value="0" min="0" style="width: 40px;" onchange="updateAddonTotal()">
                            </div>

                            <div>
                                <input type="checkbox" id="doubleSize" name="services[]" value="Double Size: 2400.00" data-price="2400.00" onclick="updateAddonTotal()">
                                <label for="doubleSize">Double Size - ₱2,400.00</label>
                                <input type="number" id="doubleSizeQty" value="0" min="0" style="width: 40px;" onchange="updateAddonTotal()">
                            </div>

                            <div>
                                <input type="checkbox" id="fullSize" name="services[]" value="Full Size: 3100.00" data-price="3100.00" onclick="updateAddonTotal()">
                                <label for="fullSize">Full Size - ₱3,100.00</label>
                                <input type="number" id="fullSizeQty" value="0" min="0" style="width: 40px;" onchange="updateAddonTotal()">
                            </div>

                            <div>
                                <input type="checkbox" id="fullSizeXL" name="services[]" value="Full Size XL: 3300.00" data-price="3300.00" onclick="updateAddonTotal()">
                                <label for="fullSizeXL">Full Size XL - ₱3,300.00</label>
                                <input type="number" id="fullSizeXLQty" value="0" min="0" style="width: 40px;" onchange="updateAddonTotal()">
                            </div>

                            <div>
                                <input type="checkbox" id="queenSize" name="services[]" value="Queen Size: 4000.00" data-price="4000.00" onclick="updateAddonTotal()">
                                <label for="queenSize">Queen Size - ₱4,000.00</label>
                                <input type="number" id="queenSizeQty" value="0" min="0" style="width: 40px;" onchange="updateAddonTotal()">
                            </div>

                            <div>
                                <input type="checkbox" id="kingSize" name="services[]" value="King Size: 4700.00" data-price="4700.00" onclick="updateAddonTotal()">
                                <label for="kingSize">King Size - ₱4,700.00</label>
                                <input type="number" id="kingSizeQty" value="0" min="0" style="width: 40px;" onchange="updateAddonTotal()">
                            </div>

                            <div>
                                <input type="checkbox" id="californiaKing" name="services[]" value="California King: 5400.00" data-price="5400.00" onclick="updateAddonTotal()">
                                <label for="californiaKing">California King - ₱5,400.00</label>
                                <input type="number" id="californiaKingQty" value="0" min="0" style="width: 40px;" onchange="updateAddonTotal()">
                            </div>

                            <div>
                                <input type="checkbox" id="sofaBed" name="services[]" value="Sofa Bed: 3500.00" data-price="3500.00" onclick="updateAddonTotal()">
                                <label for="sofaBed">Sofa Bed - ₱3,500.00</label>
                                <input type="number" id="sofaBedQty" value="0" min="0" style="width: 40px;" onchange="updateAddonTotal()">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="cleaning-option">
                    <label>
                        <input type="checkbox" name="services" value="curtains_cleaning" onclick="toggleDropdown('curtainsDropdown')">
                        Curtains Cleaning
                    </label>
                    <div id="curtainsDropdown" class="dropdown" style="display: none;">
                        <div class="form-group addon-curtain">
                            <div>
                                <input type="checkbox" id="curtains" name="services[]" value="Curtains: 1300.00" data-price="1300.00" onclick="updateAddonTotal()">
                                <label for="curtains">Curtains - ₱1,300.00 per Panel</label>
                                <input type="number" id="curtainsQty" value="0" min="0" style="width: 40px;" onchange="updateAddonTotal()">
                            </div>

                            <div>
                                <input type="checkbox" id="blinds" name="services[]" value="Blinds: 1000.00" data-price="1000.00" onclick="updateAddonTotal()">
                                <label for="blinds">Blinds - ₱1,000.00 per Panel</label>
                                <input type="number" id="blindsQty" value="0" min="0" style="width: 40px;" onchange="updateAddonTotal()">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cleaning-option">
                    <label>
                        <input type="checkbox" name="services" value="chair_cleaning" onclick="toggleDropdown('chairDropdown')">
                        Chair Cleaning
                    </label>
                    <div id="chairDropdown" class="dropdown" style="display: none;">
                        <div class="form-group addon-chair">
                            <div>
                                <input type="checkbox" id="diningChairs" name="services[]" value="Dining Chairs: 400.00" data-price="400.00" onclick="updateAddonTotal()">
                                <label for="diningChairs">Dining Chairs - ₱400.00 each</label>
                                <input type="number" id="diningChairsQty" value="0" min="0" style="width: 40px;" onchange="updateAddonTotal()">
                            </div>

                            <div>
                                <input type="checkbox" id="officeChairs" name="services[]" value="Office Chairs: 400.00" data-price="400.00" onclick="updateAddonTotal()">
                                <label for="officeChairs">Office Chairs - ₱400.00 each</label>
                                <input type="number" id="officeChairsQty" value="0" min="0" style="width: 40px;" onchange="updateAddonTotal()">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <!-- Add a display for the total addon cost -->
            <div id="totalCostDisplay">Total Addon Cost: ₱0.00</div>
        
            <div class="total-price">
                Total Price: ₱<span id="totalPrice">2520.00</span>
            </div>

            <button type="submit" class="btn btn-primary" <?php if (!isset($_SESSION['firstName'])) { echo 'disabled title="Please log in to book"';
           }
            ?>>Submit</button>
    </form>
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
                    <a href="index.php">Home</a>
                  </li>
                  <li class="menu-item pb-2">
                    <a href="about-us.php">About</a>
                  </li>
                  <li class="menu-item pb-2">
                    <a href="services.php">Services</a>
                  </li>
                  <li class="menu-item pb-2">
                    <a href="blog.php">Blogs</a>
                  </li>
                  <li class="menu-item pb-2">
                    <a href="booknow.php">Contact</a>
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

    <script>/*MISSION AND VISSION SLIDE EFFECT*/
      window.addEventListener('scroll', function() {
          const mission = document.querySelector('.mission');
          const vision = document.querySelector('.vision');
          
          const missionPosition = mission.getBoundingClientRect().top;
          const visionPosition = vision.getBoundingClientRect().top;
          const screenPosition = window.innerHeight / 1.3; // Adjust for when you want the effect to trigger
          
          // Check if Mission is in view
          if (missionPosition < screenPosition) {
          mission.classList.add('slide-left');
          }
          
          // Check if Vision is in view
          if (visionPosition < screenPosition) {
          vision.classList.add('slide-right');
          }
      });

    </script>

    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('bookingForm');
            const areaSizeInput = document.getElementById('areaSize');
            const areaCostElement = document.getElementById('areaCost');
            const regularAddonCostElement = document.getElementById('regularAddonCost');
            const totalPriceElement = document.getElementById('totalPrice');

            // Calendar initialization (assuming you're using flatpickr)
            flatpickr("#calendar", {
                inline: true,
                dateFormat: "Y-m-d",
                minDate: "today",
                onChange: function(selectedDates, dateStr) {
                    document.getElementById('serviceDate').value = dateStr;
                }
            });

            function calculateAreaCost() {
                const areaSize = parseInt(areaSizeInput.value);
                const baseArea = 36;
                let areaCost = 2520;

                if (areaSize > baseArea) {
                    areaCost += (areaSize - baseArea) * 70;
                }

                areaCostElement.textContent = areaCost.toFixed(2);
                updateTotalPrice();
            }

            function updateAddonTotal(addonType) {
                let addonCost = 0;
                const addonCheckboxes = document.querySelectorAll(`input[type="checkbox"][name="services[]"][data-price]`);
                
                addonCheckboxes.forEach((addon) => {
                    if (addon.checked) {
                        const qtyInputId = addon.id + 'Qty';
                        const qtyInput = document.getElementById(qtyInputId);
                        
                        if (qtyInput) {
                            // For items with quantity
                            const quantity = parseInt(qtyInput.value) || 0;
                            if (quantity > 0) {
                                addonCost += parseFloat(addon.dataset.price) * quantity;
                            }
                        } else {
                            // For regular addons without quantity (like Deep Cleaning and Duo Disinfection)
                            addonCost += parseFloat(addon.dataset.price);
                        }
                    }
                });

                if (addonType === 'regular') {
                    regularAddonCostElement.textContent = addonCost.toFixed(2);
                } else {
                    const totalCostDisplayElement = document.getElementById('totalCostDisplay');
                    totalCostDisplayElement.textContent = `Total Addon Cost: ₱${addonCost.toFixed(2)}`;
                }

                updateTotalPrice();
            }

            function updateTotalPrice() {
                const areaCost = parseFloat(areaCostElement.textContent) || 0;
                const regularAddonCost = parseFloat(regularAddonCostElement.textContent) || 0;
                const upholsteryCost = parseFloat(document.getElementById('totalCostDisplay').textContent.split('₱')[1]) || 0;
                
                const totalPrice = areaCost + regularAddonCost + upholsteryCost;
                totalPriceElement.textContent = totalPrice.toFixed(2);
            }

            // Event listeners for checkboxes
            document.querySelectorAll('input[type="checkbox"][name="services[]"]').forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    if (this.id === 'deepCleaning' || this.id === 'duoDisinfection') {
                        updateAddonTotal('regular');
                    } else {
                        updateAddonTotal('upholstery');
                    }
                });
            });

            // Event listeners for quantity inputs
            document.querySelectorAll('input[type="number"]').forEach(input => {
                input.addEventListener('input', function() {
                    const checkboxId = this.id.replace('Qty', '');
                    const checkbox = document.getElementById(checkboxId);
                    if (checkbox) {
                        checkbox.checked = parseInt(this.value) > 0;
                    }
                    updateAddonTotal('upholstery');
                });
            });

            // Event listener for area size
            areaSizeInput.addEventListener('input', calculateAreaCost);

            // Initial calculations
            calculateAreaCost();
            updateAddonTotal('regular');
            updateAddonTotal('upholstery');
        });


        function toggleDropdown(id) {
            var dropdown = document.getElementById(id);
            dropdown.style.display = dropdown.style.display === "none" ? "block" : "none";
        }


    </script>

    
  </body>
</html>
