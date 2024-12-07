<?php
session_start(); 
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Furnics Furniture Store</title>
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
    <link rel="stylesheet" type="text/css" href="single-post.css">
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
                        echo "<li><a href='transaction.php'><span class='glyphicon glyphicon-shopping-cart'></span>Transaction</a></li>";
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


    <style>
      /* Blog Post Styles */
    .blog-post {
      background-color: #ffffff;
      padding: 30px; /* Comfortable padding */
      margin: 20px; /* Vertical margin for spacing */
      border-radius: 8px; /* Rounded corners */
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Enhanced shadow */
      transition: transform 0.3s, box-shadow 0.3s; /* Smooth hover effect */
    }

    .blog-post:hover {
      transform: translateY(-5px); /* Lift effect on hover */
      box-shadow: 0 6px 30px rgba(0, 0, 0, 0.15); /* Deeper shadow on hover */
    }

    .post-header {
      background-color: #eaeaea; /* Light gray for header */
      padding: 20px; /* Ample padding */
      border-radius: 8px 8px 0 0; /* Rounded corners on top */
      border-bottom: 2px solid #3498db; /* Blue accent line */
    }

    .post-title {
      font-size: 26px; /* Larger title */
      margin-bottom: 10px; /* Space below title */
    }

    .post-meta {
      font-size: 14px;
      color: #7f8c8d; /* Softer color for meta */
      margin-bottom: 20px; /* Space below meta */
    }

    .post-content {
      padding: 10px 0; /* Padding for content */
    }

    .post-content p {
      margin-bottom: 15px; /* Space between paragraphs */
    }

    .post-content h3 {
      margin-top: 20px; /* Space above subheadings */
      color: #2980b9; /* Blue color for subheadings */
    }

    .post-image {
      width: 100%;
      border-radius: 8px; /* Rounded corners */
      margin-bottom: 20px; /* Space below image */
    }

    .post-footer {
      background-color: #3498db; /* Blue background color */
      color: #ffffff; /* White text for contrast */
      padding: 15px; /* Comfortable padding */
      border-radius: 0 0 8px 8px; /* Rounded corners on bottom */
      text-align: center; /* Centered text */
    }

    /* Blog Sidebar Styles */
    .blog-sidebar {
      background-color: #ffffff; /* White background for sidebar */
      padding: 20px; /* Comfortable padding */
      margin: 20px; /* Vertical margin for spacing */
      border-radius: 8px; /* Rounded corners */
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
      width: 25%; /* Fixed width for sidebar */
    }

    .blog-sidebar h3 {
      margin-bottom: 15px; /* Space below sidebar title */
      color: #2c3e50; /* Darker color for headers */
    }

    .blog-sidebar ul {
      list-style: none;
      padding: 0; /* Remove default padding */
    }

    .blog-sidebar li {
      margin-bottom: 10px; /* Space between sidebar items */
    }

    .blog-sidebar li a {
      color: #2980b9; /* Blue link color */
      text-decoration: none; /* Remove underline */
      transition: color 0.3s; /* Smooth color transition */
    }

    .blog-sidebar li a:hover {
      color: #3498db; /* Darker blue on hover */
    }

    /* Clearfix for floated elements */
    .clearfix::after {
      content: "";
      clear: both;
      display: table;
    }

      


    </style>

    <section>
            <main class="blog-main">
                <section class="blog-post">
                    <img src="hmpng/BLG1.jpg" alt="Deep Cleaning Post" class="post-image">
                    <header class="post-header">
                        <h2 class="post-title">10 Essential Cleaning Tips for a Fresh and Organized Home</h2>
                        <p class="post-meta">Posted on <time datetime="2023-01-01">January 1, 2023</time> by <a href="#">John Doe</a></p>
                    </header>
                    <div style="height: 100px;"></div>
                    <div class="post-content">
                        <p>A clean and well-organized home not only looks good but also promotes a healthier lifestyle and boosts your mood. But achieving that spotless space doesn't always have to be overwhelming or time-consuming. At FreshNest, we believe in smart cleaning solutions that make maintaining your home easier and more efficient. Here are 10 essential cleaning tips to help you keep your home fresh and organized year-round.</p>
        
                        <h3>1. Declutter Before You Clean</h3>
                        <p>Before you start cleaning, declutter each room. Having fewer items to clean around saves you time and effort. Plus, getting rid of things you no longer need creates a more organized, spacious environment. Try the “one-in, one-out” rule: for every new item, let go of something old.</p>
        
                        <h3>2. Tackle One Room at a Time</h3>
                        <p>Cleaning your entire home in one go can feel daunting. Instead, focus on one room at a time. This approach breaks the task into manageable chunks, allowing you to see progress and maintain motivation as you move from room to room.</p>
        
                        <h3>3. Use Microfiber Cloths for Efficient Cleaning</h3>
                        <p>Microfiber cloths are a cleaning game-changer. They trap dust, dirt, and bacteria better than traditional cloths, making them perfect for wiping down surfaces. They also reduce the need for cleaning solutions, making them eco-friendly and budget-friendly.</p>
        
                        <h3>4. Create a Cleaning Schedule</h3>
                        <p>A regular cleaning routine is key to maintaining a tidy home. Break down tasks by daily, weekly, and monthly chores. For example, vacuum and wipe surfaces daily, deep clean bathrooms weekly, and focus on areas like windows and carpets monthly.</p>
        
                        <h3>5. The Power of Baking Soda and Vinegar</h3>
                        <p>These two household staples can handle a variety of cleaning tasks. Baking soda is great for deodorizing carpets and cleaning grout, while vinegar works wonders on glass, countertops, and even as a fabric softener in laundry. Just avoid using vinegar on natural stone surfaces like marble.</p>
        
                        <h3>6. Vacuum Like a Pro</h3>
                        <p>Vacuuming may seem straightforward, but there are a few tricks to make it more effective. Start from the furthest corner of the room and work your way backward. Move furniture when possible to clean underneath, and don’t forget to use attachments for baseboards and tight spaces.</p>
        
                        <h3>7. Clean from Top to Bottom</h3>
                        <p>When cleaning a room, always start from the highest point—like ceiling fans, shelves, or light fixtures—before working your way down to lower surfaces. This method ensures that any dust or debris that falls is captured as you clean the floor last.</p>
        
                        <h3>8. Disinfect High-Touch Areas Regularly</h3>
                        <p>High-touch areas, like doorknobs, light switches, and remote controls, can harbor bacteria and germs. Make it a habit to disinfect these spots frequently, especially during flu season or when someone in your home is sick.</p>
        
                        <h3>9. Don’t Forget the Air</h3>
                        <p>Indoor air quality is just as important as cleaning surfaces. Keep your home fresh by opening windows regularly to let in fresh air. You can also use air purifiers and add houseplants that help improve air quality, like aloe vera and spider plants.</p>
        
                        <h3>10. Outsource Deep Cleaning</h3>
                        <p>While routine cleaning keeps your home manageable, deep cleaning can still be a time-consuming task. Services like FreshNest can take care of deep-cleaning jobs like upholstery steam cleaning, tile and grout cleaning, or disinfecting hard-to-reach areas, so you can focus on other priorities.</p>
        
                        <p><strong>Conclusion:</strong> Keeping your home fresh and organized doesn’t have to be an exhausting chore. By implementing these cleaning tips into your routine, you’ll maintain a clean and comfortable environment with minimal effort. And when you need a deeper clean or just want to take a break from chores, FreshNest is here to help.</p>
                    </div>
                    <footer class="post-footer">
                        <p>Tags: <a href="#">tag1</a>, <a href="#">tag2</a>, <a href="#">tag3</a></p>
                    </footer>
                </section>
                <aside class="blog-sidebar">
                    <h3>Recent Posts</h3>
                    <ul>
                        <li><a href="POSTblg1.html">Post 1</a></li>
                        <li><a href="#">Post 2</a></li>
                        <li><a href="#">Post 3</a></li>
                    </ul>
                </aside>
            </main>
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
