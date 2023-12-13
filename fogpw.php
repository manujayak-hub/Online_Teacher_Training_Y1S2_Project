<?php
include_once 'config.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the mobile number and new password from the form
    $mobile = $_POST['Umobile'];
    $newPassword = $_POST['Upw'];

    // Query to retrieve user details based on mobile number
    $sql = "SELECT * FROM usertable WHERE Umobile = '$mobile'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Mobile number found, update the password for the user
        $updateSql = "UPDATE usertable SET Upw = '$newPassword' WHERE Umobile = '$mobile'";

        if ($conn->query($updateSql) === TRUE) {
            echo "<script>alert('Password has been reset successfully!')</script>";
            echo "<script>window.location.href = 'Login_page.html';</script>";
        } else {
            echo "<script>alert('Error updating password:')</script>";
            echo "<script>window.location.href = 'forgot_password.html';</script>";
        }
    } else {
        echo "<script>alert('Mobile number not found!')</script>";
        echo "<script>window.location.href = 'forgot_password.html';</script>";
    }

    // Close the database connection
    $conn->close();
}
?>
