<?php
include'logout.php';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Privacy and policy</title>
    <link rel="stylesheet" href="css/privacypolicy.css">
    <style>

            .header {
              background-color: #0066CC;
              padding: 20px;
              display: flex;
              justify-content: space-between;
              align-items: center;
            }

            .logo {
              display: flex;
              align-items: center;
            }

            .logo img {
              width: 50px;
              margin-right: 10px;
            }

            .website-title {
              color: #fff;
              font-size: 35px;
              margin: 0;
            }

            .menu {
                list-style-type: none;
                margin: 0;
                padding: 0;
                display: flex;
                align-items: center;
            }

            .menu li {
                margin-right: 20px;
            }

            .menu li:first-child {
                margin-left: 0;
            }

            .menu li:last-child {
                margin-right: 0;
            }

            .menu li a {
                text-decoration: none;
                color: #fff;
                padding: 5px;
            }

            .menu li a:hover{
                color:#DADADA;
            }

            .menu2 {
                list-style-type: none;
                margin: 0;
                padding: 0;
            }

            .menu2 li {
                display: inline-block;
                margin-right: 10px;
            }

            .menu2 li:last-child {
                margin-right: 0;
            }

            .menu-container {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            .usernamelogged {
                text-align: right;
                font-size: 20px;
                color: white;
                margin-right: 20px;
                margin-top:2%;
              }

              .logout-btn {
                margin-top: 0px;
                
              }




            .footer {
              background-color: #333;
              color: #fff;
              padding: 20px 0;
              margin-top: 0px;
            }

            .footer-container {
              max-width: 1200px;
              margin: 0 auto;
              display: flex;
              justify-content: center;
              align-items: center;
            }

            .footer-logo img {
              margin-right:20px;
              width: 40px;
              height: 40px;
            }

            .footer-links ul {
              list-style-type: none;
              margin: 0;
              padding: 0;
            }

            .footer-links ul li {
              display: inline-block;
              margin-right: 20px;
            }

            .footer-links ul li a {
              text-decoration: none;
              color: #fff;
            }

            .footer-bottom {
              background-color: #222;
              padding: 10px 0;
              text-align: center;
              margin-top: 10px;
            }

            .footer-bottom p {
              margin: 0;
              font-size: 14px;
            }





    </style>
    
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
    <img src="image/privacy3.jpg" alt="privacy image"id="photo">

      <div class="maintopic">Privacy policy</div>

      <div class="container">
        <h2>Introduction</h2>
        <p>This Privacy Policy describes how Edumentor.it ("we" or "us") collects, uses, and discloses personal information when you use our website and purchase our courses.</p>
    
        <h2>Information We Collect</h2>
        <p>We may collect personal information such as your name, email address, and payment details when you register an account and purchase courses on our website.</p>
    
        <h2>How We Use Your Information</h2>
        <p>We use the collected information to provide and improve our services, process your course purchases, communicate with you, and ensure the security of our website.</p>
    
        <h2>Information Sharing</h2>
        <p>We may share your personal information with trusted third parties, such as payment processors, to facilitate course purchases and other related services.</p>
    
        <h2>Security</h2>
        <p>We take reasonable measures to protect your personal information and maintain the security of our website. However, please note that no method of transmission or storage can guarantee absolute security. Your account details are included in our database.We are responsible for the security of the data.</p>
    
        <h2>Changes to This Privacy Policy</h2>
        <p>We may update this Privacy Policy from time to time. We will notify you of any changes by posting the new policy on our website. You are advised to review this Privacy Policy periodically.</p>
    
        <h2>Contact Us</h2>
        <p>If you have any questions about this Privacy Policy, please contact us at privacy@edumentor.it.</p>
      </div>
</body>
    
    <footer class="footer">
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

</html>
