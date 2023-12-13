<?php
include'logout.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title> About Us </title>
    <link rel="stylesheet" type="text/css" href="css/about.css">
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
    <h1 class="ab" > About Us </h1>
	
    <div class="content">
	
      <div class="text">
	  
        <h2> Hey! Welcome to Our Website </h2>
		
        <p>
		Welcome to our website, where knowledge meets Success!
			<p> At our platform, we offer a wide range of subject courses designed to empower users in their academic journey.
				With a team of highly skilled and experienced course creators, we ensure that our users receive top-notch, professional education across various subject fields.
				Our courses are carefully crafted to provide users with comprehensive knowledge and a deep understanding of their chosen subjects.
			</p>
		<p>
			Our Main Course streams are <b> 
				<ul><li>Science</li>
					<li>Maths</li>
					<li>IT</li>
					<li>English</li>
					<li>History</li><ul></b>
		</p>
		
		What sets us apart is our dedicated team of course creators, who are experts in their respective fields.
		They bring their real-world expertise and passion for teaching to develop courses that are engaging and up-to-date with the latest advancements.
		With their guidance, students gain valuable insights and learn from the best in the industry.
			<p>
				But don't just take our word for it.
				Our success stories speak for themselves.
			</p>
		We have witnessed numerous students transform their lives and achieve remarkable milestones through our courses.
		Their achievements are a testament to the quality of education we provide and the impact it has on their personal and professional growth.
		Join us on this incredible journey of learning, growth, and achievement.
		Let us be a part of your success story and help you unlock your full potential.
				<p>
				Together, let's embark on an educational adventure where dreams become reality and knowledge paves the way for a bright and prosperous future.
				</p>
		</p>
			
			<h1 class ="animi">+1000 FOLLOWERS <br></h1>
      <h2 class ="us"> Contact Us 0777 466 567 </h2>
		
			
	   </div>
	  
      <div class="image1">
        <img src="image/photo.jpg">
      </div>
	  
    </div>
  </div>

	
	<footer class="footer">   		<!-- Footer is here -->
  <div class="footer-container">
  
    <div class="footer-logo">
      <img src="image/logo.png" alt="Logo">
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
