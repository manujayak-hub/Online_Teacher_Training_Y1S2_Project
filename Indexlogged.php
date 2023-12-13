<?php
include'logout.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link type="text/css" rel="stylesheet" href="css/Style.css">

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
        <a href="profile.php">
        <h1 class="usernamelogged"> <?php echo $loggedInUsername; ?></h1>
        </a>
        <form method="post" >
            <input type="submit" name="logout" value="Logout">
        </form>
    </div>
    </ul>
  </header>

   <section class="hero">
    <div class="hero-content">
      <p>Join our Online Teacher Training Platform to elevate your teaching skills! Register now to access a diverse range of courses designed to empower educators. Unlock your teaching potential, gain valuable resources, and discover innovative strategies. Invest in your professional development today and make a lasting impact on your students' lives!</p>
      <div class="hero-button">
        <a href="couses_desplay_logged.php">Register Now!</a>
      </div>
    </div>
    <div class="hero-image">
      <img src="Image/thisisengineering-raeng-TXxiFuQLBKQ-unsplash.jpg" alt="Hero Image">
    </div>
  </section>
     
    
<section class="stacked-tiles">
  <h2>Our Top trending Courses</h2>
    
  <div class="tile-container">
      
    <div class="tile">
      <h2>Master of Mathematics </h2>
      <img src= "Image/dan-cristian-padure-h3kuhYUCE9A-unsplash.jpg" alt="Science">
      <p>Unlock the world of numbers and problem-solving with our Master of Mathematics course. Explore various mathematical concepts, from basic arithmetic to advanced calculus, and develop critical thinking and analytical skills. Whether you're preparing for exams or pursuing a career in STEM, our course provides the knowledge and techniques needed to excel in the field of mathematics.</p>
      <div class="tile-button">
        <a href="couses_desplay_logged.php">Enroll Now</a>
      </div>
       
    </div>
    <div class="tile">
        <h2>Master of English </h2>
        <img src= "Image/lewis-keegan-oB2aEeE8s4A-unsplash.jpg"  alt="english">
        <p>Improve your English language skills with our comprehensive Master of English course. Whether you're a beginner or an advanced learner, our program offers a structured curriculum designed to enhance your reading, writing, speaking, and listening abilities. Join our course and gain the confidence to communicate fluently and effectively in English.</p>
        <div class="tile-button">
        <a href="couses_desplay_logged.php">Enroll Now</a>
      </div>
    </div>
    <div class="tile">
        <h2>Master of Science </h2>
        <img src= "Image/terry-vlisidis-RflgrtzU3Cw-unsplash.jpg" alt="Tile 3">
        <p>Discover the wonders of science through our engaging Master of Science course. Dive into various scientific disciplines, including physics, chemistry, biology, and more. Gain a deeper understanding of the natural world, conduct hands-on experiments, and develop a scientific mindset. Join our course and embark on a journey of exploration and discovery.</p>
        <div class="tile-button">
        <a href="couses_desplay_logged.php">Enroll Now</a>
      </div>
    </div>
  </div>
</section>
    
<section class="testimonials">
    <h2>Testimonials</h2>
  <div class="testimonial-container">
    <div class="testimonial-image">
      <img src= "Image/rachel-mcdermott-0fN7Fxv1eWA-unsplash.jpg" alt="Client Image">
    </div>
    <div class="testimonial-content">
      <p class="testimonial-text">"The online teacher training program exceeded my expectations. It was comprehensive, engaging, and flexible. The instructors were knowledgeable and supportive. I highly recommend it!"</p>
      <p class="testimonial-name">Sarah Thompson</p>
    </div>
  </div>

  
 
</section>


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
