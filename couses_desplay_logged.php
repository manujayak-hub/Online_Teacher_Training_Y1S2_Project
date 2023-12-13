<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once 'config.php';

?>

<?php
include'logout.php';
?>

<html>
<head>
	<meta charset="utf-8">
	<title> Course Page </title>
	<link rel="stylesheet" href="css/coursePage2.css">
    <link rel="stylesheet" href="css/headerFooter.css">

    <script>
    function viewRow(id) {
        if (confirm("Are you sure you want to delete this row?")) {
            window.location.href = 'subject.php?id=' + id;
        }
    }
</script>
    
    <style>
        .tile {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            display: inline-block;
            width: 200px;
        }
    </style>

</head>
<body>
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
  </header>  </br></br>
  
   <!-- Your code start from here-->

   <?php

$sql = "SELECT * FROM subjectTable";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {

      $column1 = $row['teacherName'];
      $column2 = $row['bio'];
      $column3 = $row['courseName'];
      $column4 = $row['structure'];
      $column5 = $row['logo'];
      $column6 = $row['duration'];
      $column7 = $row['student_level'];
      $column8 = $row['subjectName'];
      $column9 = $row['investment'];
?>
        <div class="tile">
            <h3><?php echo $column3; ?></h3>
            <p><?php echo $column2; ?></p>
            <!--<button onclick='viewRow(".$row['subjectName'].")'>view</button>-->
  
            <form method="post" action="subject.php">
                <input type="hidden" name="subjectName" value="<?php echo $column8; ?>">
                <button type="submit" name="button" value="<?php echo $column8; ?>"><?php echo $column8; ?></button>
            </form>

        </div>
<?php
    }
} else {
    echo "No data found.";
}

// Close the database connection
$conn->close();
?>

    <!-- Your code start from here-->



    
    
    <footer class="footer">
	
    <div class="footer-container">
    <div class="footer-logo">
      <img src="images/logo.jpg" alt="Logo">
    </div>
    <div class="footer-links">
      <ul>
      <li><a href="Index.html">Home</a></li>
        <li><a href="couses_desplay.php">Course</a></li>
        <li><a href="contactNew.html">Contact Us</a></li>
        <li><a href="frequentlyAskedQuestions.html">FAQ</a></li>
        <li><a href="about.html">About Us</a></li>
        <li><a href="privacypolicy.html">Privacy Policy</a></li>
      </ul>
    </div>
    
  </div>
  <div class="footer-bottom">
    <p>&copy; 2023 EduMentor. All rights reserved.</p>
  </div>
</footer>
</body>
</html>

