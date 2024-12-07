<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['firstName'])) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit();
}

// Database configuration
$servername = "localhost"; // Usually 'localhost', but it might be different for your setup
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "hmcleansql"; // Your specified database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the booking ID from the URL
$bookingId = $_GET['id'];

// Fetch the booking data
$sql = "SELECT * FROM bookings WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $bookingId);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

// Check if booking exists
if (!$row) {
    echo "Booking not found.";
    exit();
}

// Close the statement
$stmt->close();
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
                        echo "<li><a href='transaction.php'><span class='glyphicon glyphicon-shopping-cart'></span> Transaction</a></li>";
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
        /* Add some styles for your table */
        table {
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .btn {
            margin: 5px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h2>Edit Booking</h2>
    <form action="update_booking.php" method="post">
        <input type="hidden" name="id" value="<?= $bookingId ?>">
        <div class="form-group">
            <label for="firstName">First Name:</label>
            <input type="text" class="form-control" id="firstName" name="firstName" value="<?= htmlspecialchars($row['first_name']) ?>" required>
        </div>
        <div class="form-group">
            <label for="lastName">Last Name:</label>
            <input type="text" class="form-control" id="lastName" name="lastName" value="<?= htmlspecialchars($row['last_name']) ?>" required>
        </div>
        <div class="form-group">
            <label for="serviceDate">Service Date:</label>
            <input type="date" class="form-control" id="serviceDate" name="serviceDate" value="<?= htmlspecialchars($row['service_date']) ?>" required>
        </div>
        <div class="form-group">
            <label for="serviceTime">Service Time:</label>
            <input type="time" class="form-control" id="serviceTime" name="serviceTime" value="<?= htmlspecialchars($row['service_time']) ?>" required>
        </div>
        <div class="form-group">
            <label for="areaSize">Area Size:</label>
            <input type="number" class="form-control" id="areaSize" name="areaSize" value="<?= htmlspecialchars($row['area_size']) ?>" required oninput="calculateTotalPrice()">
        </div>
        <div class="form-group">
            <label for="totalPrice">Total Price:</label>
            <input type="text" class="form-control" id="totalPrice" name="totalPrice" value="₱<?= number_format($row['total_price'], 2) ?>" readonly>
        </div>
        <button type="submit" class="btn btn-primary">Update Booking</button>
    </form>
</div>

    
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
                const areaSize = parseInt(areaSizeInput.value) || 0;
                const baseArea = 36;
                let areaCost = 2520;

                if (areaSize > baseArea) {
                    areaCost += (areaSize - baseArea) * 70;
                }

                areaCostElement.textContent = areaCost.toFixed(2);
                updateTotalPrice();
            }

            function updateAddonTotal() {
                let regularAddonCost = 0;

                const addonCheckboxes = document.querySelectorAll(`input[type="checkbox"][name="services[]"][data-price]`);
                
                addonCheckboxes.forEach((addon) => {
                    if ( addon.checked) {
                        const qtyInputId = addon.id + 'Qty';
                        const qtyInput = document.getElementById(qtyInputId);
                        
                        if (qtyInput) {
                            // For items with quantity
                            const quantity = parseInt(qtyInput.value) || 0;
                            if (quantity > 0) {
                                regularAddonCost += parseFloat(addon.dataset.price) * quantity;
                            }
                        } else {
                            // For regular addons without quantity
                            regularAddonCost += parseFloat(addon.dataset.price);
                        }
                    }
                });

                regularAddonCostElement.textContent = regularAddonCost.toFixed(2);
                updateTotalPrice();
            }

            function updateTotalPrice() {
                const areaCost = parseFloat(areaCostElement.textContent) || 0;
                const regularAddonCost = parseFloat(regularAddonCostElement.textContent) || 0;
                const totalPrice = areaCost + regularAddonCost;
                totalPriceElement.value = `₱${totalPrice.toFixed(2)}`;
            }

            // Event listeners for checkboxes
            document.querySelectorAll('input[type="checkbox"][name="services[]"]').forEach(checkbox => {
                checkbox.addEventListener('change', updateAddonTotal);
            });

            // Event listeners for quantity inputs
            document.querySelectorAll('input[type="number"]').forEach(input => {
                input.addEventListener('input', function() {
                    const checkboxId = this.id.replace('Qty', '');
                    const checkbox = document.getElementById(checkboxId);
                    if (checkbox) {
                        checkbox.checked = parseInt(this.value) > 0;
                    }
                    updateAddonTotal();
                });
            });

            // Event listener for area size
            areaSizeInput.addEventListener('input', calculateAreaCost);

            // Initial calculations
            calculateAreaCost();
            updateAddonTotal();
        });

        function toggleDropdown(id) {
            var dropdown = document.getElementById(id);
            dropdown.style.display = dropdown.style.display === "none" ? "block" : "none";
        }
    </script>