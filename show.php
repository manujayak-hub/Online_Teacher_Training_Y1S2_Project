<?php
    include_once 'config.php';
?>

<?php
include'logout.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Payment Details</title>
 <style>
    
    table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

    body{
        background-color:lightblue;
        font-family: arial, sans-serif;
      }

    .header {  
    background-color:#0066CC;
    padding:20px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    }
    .logo {
    display:flex;
    align-items:center;
    }
    .logo img {
    width:50px;
    margin-right:10px;
    }
    .website-title {
    color:#fff;
    font-size:35px;
    margin:0;
    }
    .menu {
        list-style-type:none;
        margin:0;
        padding:0;
        display:flex;
        align-items:center;
    }
    .menu li {
        margin-right:20px;
    }
    .menu li:first-child {
        margin-left:0;
    }
    .menu li:last-child {
        margin-right:0;
    }
    .menu li a {
        text-decoration:none;
        color:#fff;
        padding:5px;
    }
    .menu li a:hover{
        color:#DADADA;
    }
    .menu2 {
        list-style-type:none;
        margin:0;
        padding:0;
    }
    .menu2 li {
        display:inline-block;
        margin-right:10px;
    }
    .menu2 li:last-child {
        margin-right:0;
    }
    .menu-container {
        display:flex;
        justify-content:space-between;
        align-items:center;
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
  background-color:#333;
  color:#fff;
  padding:20px 0;
  margin-top:13.8%;
}
.footer-container {
  max-width:1200px;
  margin:0 auto;
  display:flex;
  justify-content:center;
  align-items:center;
}
.footer-logo img {
  margin-right:20px;
  width:40px;
  height:40px;
}
.footer-links ul {
  list-style-type:none;
  margin:0;
  padding:0;
}
.footer-links ul li {
  display:inline-block;
  margin-right:20px;
}
.footer-links ul li a {
  text-decoration:none;
  color:#fff;
}
.footer-bottom {
  background-color:#222;
  padding:10px 0;
  text-align:center;
  margin-top:10px;
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


    <center><h1>Payment Details</h1></center>

<?php

// SQL query to retrieve data from the payment table
$sql = "SELECT * FROM payment";
$result = $conn->query($sql);

// Check if there are any rows returned
if ($result->num_rows > 0) {
    // Start generating the HTML table structure
    echo "<table>";
    echo "<tr><th>Cardholder Name</th>
    <th>Email</th>
    <th>Card Number</th>
    <th>Expiration</th>
    <th>CVV</th>
    <th>Comments</th></tr>";

    // Loop through each row of data
    while ($row = $result->fetch_assoc()) {
        // Output the data as table rows
        echo "<tr>";
        echo "<td>" . $row["cardholder_name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["card_number"] . "</td>";
        echo "<td>" . $row["exp_date"] . "</td>";
        echo "<td>" . $row["cvv"] . "</td>";
        echo "<td>" . $row["notes"] . "</td>";
        echo "</tr>";

    }

    // End of HTML table
    echo "</table>";
} else {
    // No rows found in the payment table
    echo "No payment details available.";
}

// Close the database connection
$conn->close();
?>


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


