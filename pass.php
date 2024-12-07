<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['firstName'])) {
    echo "<li><a href='pass.php'><span class='glyphicon glyphicon-user'></span> " . htmlspecialchars($_SESSION['firstName']) . "</a></li>";
    echo "<li><a href='cart.php'><span class='glyphicon glyphicon-shopping-cart'></span> Cart</a></li>";
    echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-in'></span> Logout</a></li>";
} else {
    echo "<li><a href='signup.php'><span class='glyphicon glyphicon-user'></span> Sign Up</a></li>";
    echo "<li><a href='login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
}
?>