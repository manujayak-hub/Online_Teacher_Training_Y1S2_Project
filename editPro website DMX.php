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
	<title>Edit Profile</title>
		<link rel = "stylesheet" href = "css/editProDMX.css">
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
    <?php
      if (isset($_POST['submit'])) {
          $firstName = $_POST['firstName'];
          $lastName = $_POST['lastName'];
          $email = $_POST['emailAdd'];
          $nic = $_POST['nic'];

          $sql = "UPDATE usertable SET UFName = '$firstName', ULName = '$lastName', UEmail = '$email' WHERE  Unic = '$nic'";
          $conn = new mysqli ($servername, $username, $password, $db);
          mysqli_query($conn, $sql);

          echo "<script>showSuccessMessage();</script>";
      }
      ?>
        
		</br></br>
		<center>
			<h1 id = "UserNameEditPro"> Username </h1></br>
		
		<div id = "MainSec">

      <div class = "formSet">
        <label for = "NIC"> If u want to change details enter your NIC : </label>
        <input placeholder = "XXXXXXXXXXXXXXXXX" required>
        </div>

        <form method = "post" action="editProDMX.php">
				<div class = "formSet">
				<label for = "Firstname"> First Name   </label>  
				<input placeholder = "XXXXXXXXXXXXXXXXX" required> 
				</div>
				
       

				<div class = "formSet">
				<label for = "surName"> Surname </label>
				<input placeholder = "XXXXXXXXXXXXXXXXX" required>
				</div>
				
				<div class = "formSet">
				<label for = "emailAdd"> Email Address </label>  
				<input placeholder = "XXXXXXXXXXXXXXXXX">
				</div>
				
				
        					
				<input name = "buttonSave" type = "submit" value = "Save Change" id = "buttonSave">  </input>
        </form>	
	</center>
		</div>
	</body>
</html>

<!-- Your code start from here-->
    
    
    <footer class="footer">
  <div class="footer-container">
    <div class="footer-logo">
      <img src="images/logo.jpg" alt="Logo">
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

