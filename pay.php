

<?php
error_reporting(E_ALL);       //display the error 
ini_set('display_errors', 1);
?>

<?php
    include_once 'config.php';   
?>

<?php 
session_start();

$cardholder_name = $_POST["cardholder_name"];
$email = $_POST["email"];
$card_number = $_POST["card_number"];
$exp_date = $_POST["exp_date"];
$cvv = $_POST["cvv"];
$notes = $_POST["notes"];

session_write_close();

$sql = "INSERT INTO payment (cardholder_name, email, card_number, exp_date, cvv, notes) VALUES ('$cardholder_name', '$email', '$card_number', '$exp_date', '$cvv', '$notes')";

if (mysqli_query($conn, $sql))
{
    echo "<script>alert('Record Inserted Successfully!')</script>";
    //header("Location:show.php");

} 
else
{
    echo "<script>alert('Error in Insertion!')</script>";
    //header("Location:index.php");
}

mysqli_close($conn);

?>