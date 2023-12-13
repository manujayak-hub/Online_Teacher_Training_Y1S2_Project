<?php
include_once 'config.php';

// Check if the ID parameter is provided in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // SQL query to delete the row with the specified ID
    $sql = "DELETE FROM subjectTable WHERE subjectId = $id";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Row deleted successfully')</script>";
        echo "<script>window.location.href = 'courseCreator.php';</script>";
    } else {
        echo "<script>alert('Error deleting row')</script>";
        echo "<script>window.location.href = 'courseCreator.php';</script>";
    }
} else {
    echo "<script>alert('ID parameter is missing')</script>";
    echo "<script>window.location.href = 'courseCreator.php';</script>";
}

// Close the database connection
$conn->close();
?>
