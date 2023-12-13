<?php
include'logout.php';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Update_CourseCreator</title>
<link rel="stylesheet" href="css/updateCourseForm.css">

    <style>
            table {
            border-collapse: collapse;
            width: 100%;
            margin-top:2%;
            }
             th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
            }
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

        <div class="editCourseForm">
          <fieldset>
            <center><h2>Update Course Details</h2></center>
            <center>
            <form action="updateCourse.php" method="post">
                <input type="text" name="subjectName" id="subjectName" placeholder="subject name" required>
                <br>
                <input type="text" name="teacherName" id="teacherName" placeholder="teacher name" required>
                <br>
                <input type="text"name="structure"id="structure"placeholder="course structure" required>
                <br>
                <input type="text"name="duration"id="duration"placeholder="course duration" required>
                <br>
                <input type="text"name="investment"id="investment"placeholder="investment" required>
                <br>
                <input type="text"name="bio"id="bio"placeholder="enter description" required>
                <br>
                <input type="submit" id=submitBtn value="Update">
            </form></center>
          </fieldset>
        </div><!--end of edit course form-->



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
    </body>
    </html>