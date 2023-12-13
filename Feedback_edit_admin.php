<?php
include'logout.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Feedback_Admin</title>
  <link type="text/css" rel="stylesheet" href="CSS/Style_admin_feed.css">


  <script>
    function deleteRow(id) {
        if (confirm("Are you sure you want to delete this row?")) {
            window.location.href = 'delete.php?id=' + id;
        }
    }
</script>



</head>
<body>
  <header class="header">
    <div class="logo">
      <a href="indexlogged.php"><img src="Image/logo.png" alt="Logo"></a>
        <h1>EduMentor</h1>
    </div>
    <ul class="menu">
        <li><a href="Indexlogged.php">Home</a></li>
        <li><a href="couses_desplay_logged.php">Course</a></li>
        <li><a href="contactNewLog.php">Contact Us</a></li>
        <li><a href="feedback.php">Feedback</a></li>
        <li><a href="FAQ_logged.php">FAQ</a></li>
        <li><a href="about_us_logged.php">About Us</a></li>
        <li><a href="Privacy_policy_logged.php">Privacy Policy</a></li>
        
      
    </ul>
      
    <ul >
      <div>
        <h1 class="usernamelogged"> <?php echo $loggedInUsername; ?></h1>
        <form method="post" >
            <input type="submit" name="logout" value="Logout">
        </form>
    </div>
    </ul>
  </header>



  <?php

include_once 'config.php';

// SQL query to retrieve data from the table
$sql = "SELECT * FROM feedbackt";

// Execute the query
$result = $conn->query($sql);

// Check if there are any rows returned
if ($result->num_rows > 0) {
    // Start creating the HTML table
    echo "<table>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Name</th>";
    echo "<th>Email</th>";
    echo "<th>Subject</th>";
    echo "<th>Feedback</th>";
    echo "<th>Delete</th>";
    echo "</tr>";

    // Loop through each row of data
    while ($row = $result->fetch_assoc()) {
        // Display each row as a table row
        echo "<tr>";
        echo "<td>".$row['FID']."</td>";
        echo "<td>".$row['Feedname']."</td>";
        echo "<td>".$row['Feedemail']."</td>";
        echo "<td>".$row['Feedsubject']."</td>";
        echo "<td>".$row['Feedback']."</td>";
        echo "<td>";
        echo "<button onclick='deleteRow(".$row['FID'].")'>Delete</button>";
        echo "</td>";
        echo "</tr>";
    }

    // Close the table
    echo "</table>";
} else {
    // If no rows are returned, display a message
    echo "No data found for the logged-in user.";
}

// Close the database connection
$conn->close();
?>





  <footer class="footer">
  <div class="footer-container">
    <div class="footer-logo">
      <img src="Image/logo.jpg" alt="Logo">
    </div>
    <div class="footer-links">
      <ul>
        <li><a href="Indexlogged.php">Home</a></li>
        <li><a href="couses_desplay_logged.php">Course</a></li>
        <li><a href="contactNewLog.php">Contact Us</a></li>
        <li><a href="feedback.php">Feedback</a></li>
        <li><a href="FAQ_logged.php">FAQ</a></li>
        <li><a href="about_us_logged.php">About Us</a></li>
        <li><a href="Privacy_policy_logged.php">Privacy Policy</a></li>
        
      </ul>
    </div>
    
  </div>
  <div class="footer-bottom">
    <p>&copy; 2023 EduMentor. All rights reserved.</p>
  </div>
</footer>

</body>
</html>
