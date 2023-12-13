<?php
include'logout.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Payment Details </title>
	<link rel="stylesheet" type="text/css" href="css/pay.css">
</head>

<body>                       <!-- menue start from here-->
	
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
							<!-- Form details Start from here-->

	<div class="container">
	<fieldset>
		<h1 id="payment">Enter Payment Details</h1>
		
		<center>
		<form action ="pay.php" method="post" id="form">

			<label for="cardholder_name">Cardholder Name:</label>
			<input type="text" id="cardholder_name" name="cardholder_name" placeholder="Cardholder Name" required>
    
			<label for="email">Email:</label>
			<input type="email" id="email" name="email" placeholder="Enter your email" required>

			<label for="card_number" >Card Number:</label>
			<input type="text" maxlength="16" id="card_number" name="card_number" placeholder="Enter your card number" required>

			<label for="exp_date">Expired Date:</label>
			<input type="text" id="exp_date" name="exp_date" placeholder="(MM/YYYY)"required>

			<label for="cvv">CVV:</label>
			<input type="text" maxlength="3" id="cvv" name="cvv" placeholder="Enter your CVV" required>

			<label for="notes">Additional Comments:</label>
			<textarea id="notes" name="notes" placeholder="Comments"></textarea>
			
			<input type="submit" name="submit" value="Submit">

			</fieldset>
		</form>
    
    <center><a href="updateche.php">click here to Update</a></center>

		</center>
	</div>
	
	<!-- Footer strat from here-->
	
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
      <li><a href="about.html">About Us</a></li>
      <li><a href="Privacy_policy_logged.php">Privacy Policy</a></li>
      </ul>
    </div>
    
  </div>
  <div class="footer-bottom">
    <p>&copy; 2023 EduMentor. All rights reserved.</p>
  </div>
</footer>


<!--java script-->
<script>

  const expDateInput = document.getElementById("exp_date");

  expDateInput.addEventListener("input", (e) =>
  {
    let value = e.target.value;
    value = value.replace(/\D/g, ''); // Remove non-digit characters
    value = value.slice(0, 6);

    if (value.length > 2) {
      const month = value.slice(0, 2);
      const year = value.slice(2, 6);
      const slash = "/";
      value = month + slash + year;
    }

    e.target.value = value;
  });
</script>


</body>
</html>
