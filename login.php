<?php
ob_start(); // Start output buffering
require_once 'config.inc.php';
require_once 'dbh.inc.php';

// Debugging: Check if the form is submitted
if (isset($_POST['login'])) {
    echo "Form submitted<br>";
    
    $email = $_POST['username'];
    $password = $_POST['password'];

    try {
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            echo "Login successful<br>";
            
            $_SESSION['firstName'] = $user['firstName'];
            $_SESSION['email'] = $user['email'];
            
            echo "Session variables set:<br>";
            var_dump($_SESSION);
            
            echo "Attempting redirect...<br>";
            
            // Try different redirect methods
            header("Location: index.php");
            echo "After header redirect<br>";
            
            // If header doesn't work, try JavaScript
            echo "<script>window.location.href = 'index.php';</script>";
            
            // If all else fails, try meta refresh
            echo "<meta http-equiv='refresh' content='0;url=index.php'>";
            
            exit();
        } else {
            echo "Invalid credentials<br>";
            $error = 'Invalid email or password';
        }
    } catch(PDOException $e) {
        echo "Database error: " . $e->getMessage() . "<br>";
        $error = "An error occurred. Please try again later.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
   
   
    <title>Login Page</title>
    <link rel="stylesheet" href="loginn.css">
</head>
<body>

    <div class="container">
        <div class="left-side">
            <img src="LGN2.pn.jpeg" alt="Fingerprint Illustration">
        </div>

        <div class="right-side">
            <div class="login-box">
                <h2>Login</h2>
                <form action="login.php" method="post">
                    <div class="input-box">
                        <label for="username">Username</label>
                        <input type="email" id="username" name="username" placeholder="Enter your e-mail" required>
                    </div>
                    <div class="input-box">
                        <label for="password">Password</label> 
                        <input type="password" id="password" name="password" placeholder="Enter your password" required>
                        
                    </div>
                    <button type="submit" name="login" class="btn" id="loginBtn" onclick="showLoader()">Login</button>


                        <div id="loader" style="display:none;">
                            <svg width="40px" height="40px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="35" stroke="#4040C0" stroke-width="10" fill="none"></circle>
                            </svg>
                        </div>
                        <p class="forgot-password"><a href="forgot_password.php">Forgot your password?</a></p>
                    <p class="register-link">Don't have any account yet <a href="signup.php">Register Here</a></p>
                </form>
            </div>
        </div>
    </div>

    <script>
        function showLoader() {
        const loginBtn = document.getElementById('loginBtn');
        const loader = document.getElementById('loader');

        loginBtn.classList.add('hidden');
        loader.classList.remove('hidden');
        }
    </script>

</body>
</html>