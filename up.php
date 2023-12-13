<?php
error_reporting(E_ALL);       //display the error 
ini_set('display_errors', 1);
?>

<?php
include_once 'config.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Get the details from the form
    $email = $_POST['email'];
    $cardholder_name = $_POST['cardholder_name'];
    $card_number = $_POST['card_number'];
    $exp_date = $_POST['exp_date'];
    $cvv=$_POST['cvv'];
    $notes = $_POST['notes'];

    // Query to retrieve user details based on subject name
    $sql = "SELECT * FROM payment where email ='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // subject found, update the other details
        $updateSql = "UPDATE payment SET cardholder_name = '$cardholder_name', card_number='$card_number', exp_date='$exp_date' , cvv='$cvv', notes='$notes' WHERE email = '$email'";

        if ($conn->query($updateSql) === TRUE) {
            echo "<script>alert('payment Details has been reset successfully!')</script>";
            //echo "<script>window.location.href = 'courseCreator.php';</script>";
        }
		else {
            echo "<script>alert('Error updating deails:')</script>";
            //echo "<script>window.location.href = 'forgot_password.html';</script>";
        }
    } else {
        echo "<script>alert('Your email not found!')</script>";
        //echo "<script>window.location.href = 'forgot_password.html';</script>";
    }

    // Close the database connection
    $conn->close();
}
?>
