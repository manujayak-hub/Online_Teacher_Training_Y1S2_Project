<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once 'config.php';

?>

<?php
include'logout.php';
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Profile</title>
	<link rel = "stylesheet" href = "css/profile.css">
    <link rel = "stylesheet" href = "css/headerFooter.css">
    
</head>

<body>

       
  <header class="header">
    <div class="logo">
      <a href="indexlogged.php"><img src="image/logo.png" alt="Logo"></a>
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
 
    <!-- Your code start from here-->
	<div class = "main">
		<h1> Your Profile </h1>
		
    
		<div class = "proDec">
			<img id="proimage" class = "proDec1" src = "Image/jk.jpeg" width = "150px" height = "150px" >
			
      
      <?php
    $query = "SELECT * FROM usertable WHERE UserId='1'" ;

    // Execute the query
    $result = mysqli_query($conn, $query);
    // echo $result[0]['UFName'];
    foreach($result as $user) {
      echo '<h2 id = "username" class = "proDec1" > User Name : '.$user['UFName'] . '</h2>';
    }
    mysqli_close($conn);
?>

		</div>
		
	<!-- plz refer this again -->	
		<div class = "toolBar">
			
				<center><a id = "TB" class = "toolBar1" href = "DvsD.php">Personal Info </a></center></br></br>
				<a id = "TB" class = "toolBar2" href = "editPro website DMX.php">Edit Info </a></br></br>
				<a id = "TB" class = "toolBar3" href = "password.html">Password </a></br></br>
				<a id = "TB" class = "toolBar4" href = "">Course Details </a></br></br>
				<a id = "TB" class = "toolBar5" href = "">Reports & Certificate </a></br></br>
				<a id = "TB" class = "toolBar6" href = "">Payment Info </a></br></br>
				<a id = "TB" class = "toolBar7" href = "">Privacy & Policy </a></br></br>
			
		</div>
	</div>	
	<!-- Your code start from here-->
    
    
    <footer class="footer">
  <div class="footer-container">
    <div class="footer-logo">
      <img src="Image/logo.jpg" alt="Logo">
    </div>
    <div class="footer-links">
      <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Course</a></li>
      <li><a href="#">Contact Us</a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Privacy Policy</a></li>
      </ul>
    </div>
    
  </div>
  <div class="footer-bottom">
    <p>&copy; 2023 EduMentor. All rights reserved.</p>
  </div>
</footer>
</body>
</html>
