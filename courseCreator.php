<?php
include'logout.php';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Course Creator</title>
<link rel="stylesheet" href="css/courseCreator.css">
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
              position: relative;
              bottom:0%;
              width:100%;/*induwara added above 3 css*/
              background-color: #333;
              color: #fff;
              padding: 20px 0;
              margin-bottom: 0px;
              
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
      <script>
    function deleteRow(id) {
        if (confirm("Are you sure you want to delete this row?")) {
            window.location.href = 'deleteDasun.php?id=' + id;
        }
    }
</script>
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
  <center><h2>Course Creator Dashboard</h2></center>
  <?php
    include_once 'config.php';

    // Retrieve data from the database
    $query = "SELECT * FROM subjectTable";
    $result = mysqli_query($conn, $query);

    // Check if there are any records
    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>Subject Name</th>";
        echo "<th>Lecturer's Name</th>";
        echo "<th>Course Structure</th>";
        echo "<th>Duration</th>";
        echo "<th>Investment</th>";
        echo "<th>Description</th>";

        echo "</tr>";

        // Output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["subjectName"] . "</td>";
            echo "<td>" . $row["teacherName"] . "</td>";
            echo "<td>" . $row["structure"] . "</td>";
            echo "<td>" . $row["duration"] . "</td>";
            echo "<td>" . $row["investment"] . "</td>";
            echo "<td>" . $row["bio"] . "</td>";
            echo "<td><a href='updateCourseForm.php'>Update</a></td>";
            echo "<td><button onclick='deleteRow(".$row['subjectId'].")'>Delete</button></td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No records found.";
    }

    // Close the connection
    mysqli_close($conn);
?>
<a href="course_add_coursecreator.php">
 <center>
   <h5>Create Course</h5>
  </center>
</a>






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