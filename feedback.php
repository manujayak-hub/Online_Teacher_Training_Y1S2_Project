<?php
include'logout.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Feedback</title>
  <link type="text/css" rel="stylesheet" href="css/Style_feedback.css">
  <script src="js/validation.js"></script>

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





  <div class="container">
    <h2 style="text-align: center;">Get Feedback  </h2>
    <form method ="post"action="feedbackform.php" onsumbit="validateForm()">
      
      <div class="form-group" >
        <input type="text" id="feedname"name="Feedname"  placeholder="Your Name" required>
      </div>
      <div class="form-group">
        <input type="email" id="feedemail"name="Feedemail"  placeholder="Your Email" required>
      </div>
      <div class="form-group">
        <input type="text" id="feedsubject"name="Feedsubject"  placeholder="Your Subject" required>
      </div>
     
     <div class="form-group">
          <textarea class="form-control" name="Feedback" rows="4"  placeholder="Enter Your Feedback Here!" required></textarea>
     </div>

        <center>
          <input type="submit" name="Submitfeed" id="submitBtn" value="Submit" >
        </center>

        
        
     
      </div>
     
    </form>


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
