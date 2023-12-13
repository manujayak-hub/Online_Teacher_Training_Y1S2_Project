<?php
    include_once'config.php';
?>


<?php

session_start();

// Check if the user is logged in
if(isset($_SESSION['username'])) {
    $loggedInUsername = $_SESSION['username'];
} else {
    // Redirect to the login page if not logged in
    header("Location: Login_page.html");
    exit();
}

// Logout logic
if(isset($_POST['logout'])) {
    // Destroy the session and redirect to the login page
    session_destroy();
    header("Location: Login_page.html");
    exit();
}

?>