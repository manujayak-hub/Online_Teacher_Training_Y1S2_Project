<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php
include_once 'config.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the details from the form
    $Sname = $_POST['subjectName'];
    $Tname = $_POST['teacherName'];
    $structure = $_POST['structure'];
    $duration = $_POST['duration'];
    $investment=$_POST['investment'];
    $bio = $_POST['bio'];

    // Query to retrieve user details based on subject name
    $sql = "SELECT * FROM subjectTable WHERE subjectName = '$Sname'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // subject found, update the other details
        $updateSql = "UPDATE subjectTable SET teacherName = '$Tname' ,structure='$structure', duration='$duration', investment='$investment' , bio='$bio'WHERE subjectName = '$Sname'";

        if ($conn->query($updateSql) === TRUE) {
            echo "<script>alert('Data has been updated successfully!')</script>";
            echo "<script>window.location.href = 'courseCreator.php';</script>";
        } else {
            echo "<script>alert('Error updating details:')</script>";
            //echo "<script>window.location.href = 'forgot_password.html';</script>";
        }
    } else {
        echo "<script>alert('subject name not found!')</script>";
        //echo "<script>window.location.href = 'forgot_password.html';</script>";
    }

    // Close the database connection
    $conn->close();
}
?>
