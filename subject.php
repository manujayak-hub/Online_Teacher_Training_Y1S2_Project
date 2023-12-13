<?php
    include_once 'config.php';
    include_once 'logout.php';
    ?>

<?php
//$subject = $_POST['subjectName'];
$id = $_POST['button'];
$sql="SELECT * from subjectTable where subjectName='$id' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
    $row=mysqli_fetch_assoc($result);
    $subjectName=$row['subjectName'];
    $teacherName=$row['teacherName'];
    $structure=$row['structure'];
    $duration=$row['duration'];
    $investment=$row['investment'];
    $bio=$row['bio'];
    $image = $row['dasunimagepath'];

}
?>

<!DOCTYPE html>
<html>
<head>
  <title>subject</title>
  <link rel="stylesheet" href="css/subject.css">
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
  <h2 id="courseName">Course Name : <?php echo $subjectName; ?></h2>
  <h2 id="teacherName">Instructor Name : <?php echo $teacherName; ?></h2>

  <div class="detailBar">
  <table id="upTable">
    <tr>
      <th>Course Structure<h5><?php echo $structure; ?></h5></th>
      <th>Duration<h5><?php echo $duration; ?></h5></th>
      <th>Investment<h5><?php echo $investment; ?></h5></th>
      <th><button id="entrollBtn" onclick="redirectToPath()" >Get enrolled</button></th>
    </tr>

<script>
  function redirectToPath() {
    // Specify the desired path where you want to redirect the user
    var desiredPath = "payche.php";

    // Redirect the user to the desired path
    window.location.href = desiredPath;
  }
</script>


    
  </table>
  
  </div>
  <div class="downTable">
<table id="downTable">
  <td>
  <div class="teacherDetails" >
      <fieldset style="width:30%">
      <h3 style="text-align: center;">Meet your Instructor</h3>
      <?php echo "<img src=".$image." id='teacherPhoto' alt='photo'>"; ?>
      
      <p>
      <?php echo $bio;?>
    </p>
      </fieldset>
    </div><!--end of teacher details div-->
  </td>
   
  <td>
    <div class="dropBars">
    <select name="recordings" id="recordings">
      <option value="option1">Recordings</option>
    </select>
    <select name="recordings" id="recordings2">
      <option value="option1">Download PDFs</option>
    </select>
    <select name="recordings" id="recordings3">
      <option value="option1">Join our WhatsApp groups</option>
    </select>
    </div><!--end of dropbars--></td>
    </table><!--end of downTable-->
  </div><!--end of downtable-->





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