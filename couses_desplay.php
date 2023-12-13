<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once 'config.php';

?>

<html>
<head>
	<meta charset="utf-8">
	<title> Course Page </title>
	<link rel="stylesheet" href="css/coursePage2.css">
    <link rel="stylesheet" href="css/headerFooter.css">

    <script>
    function viewRow(id) {
        if (confirm("Are you sure you want to delete this row?")) {
            window.location.href = 'subject.php?id=' + id;
        }
    }
</script>
    
    <style>
        .tile {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            display: inline-block;
            width: 200px;
        }
    </style>

</head>
<body>
<header class="header">
    <div class="logo">
      <a href="Index.html"><img src="Image/logo.png" alt="Logo"></a>
        <h1>EduMentor</h1>
    </div>
    <ul class="menu">
        <li><a href="Index.html">Home</a></li>
        <li><a href="couses_desplay.php">Course</a></li>
        <li><a href="contactNew.html">Contact Us</a></li>
        <li><a href="frequentlyAskedQuestions.html">FAQ</a></li>
        <li><a href="about.html">About Us</a></li>
        <li><a href="privacypolicy.html">Privacy Policy</a></li>
        
      
    </ul>
       <ul class="menu">
    
        <li><a href="Login_page.html">Login</a></li>
        <li><a href="signup.html">Register</a></li>
      
    </ul>
  
  </header>  </br></br>
  
   <!-- Your code start from here-->

   <?php

$sql = "SELECT * FROM subjectTable";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {

      $column1 = $row['teacherName'];
      $column2 = $row['bio'];
      $column3 = $row['courseName'];
      $column4 = $row['structure'];
      $column5 = $row['logo'];
      $column6 = $row['duration'];
      $column7 = $row['student_level'];
      $column8 = $row['subjectName'];
      $column9 = $row['investment'];
?>
        <div class="tile">
            <h3><?php echo $column3; ?></h3>
            <p><?php echo $column2; ?></p>
            <!--<button onclick='viewRow(".$row['subjectName'].")'>view</button>-->
  
            <form method="post" action="subject.php">
                <input type="hidden" name="subjectName" value="<?php echo $column8; ?>">
                <button type="submit" name="button" value="<?php echo $column8; ?>"><?php echo $column8; ?></button>
            </form>

        </div>
<?php
    }
} else {
    echo "No data found.";
}

// Close the database connection
$conn->close();
?>




   <!--
   <div class = "mainsec">
	<div class = "menuBar">
		<ul>
			<li class="menu-bar" ><a href = "#" > Subject </a>
				<ul class = "dropdown-list" >
        <li><a href="#">Home</a></li>
        <li><a href="#">Course</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Privacy Policy</a></li>
				</ul></li>
				
			<li class = "menu-bar"><a href = "#" > Duration </a>
				<ul class = "dropdown-list">
					<li> <a href = "#"> 1-4 Years </a></li>
					<li> <a href = "#"> Less than 2 hours </a></li>
					<li> <a href = "#"> 1-4 Weeks </a></li>
					<li> <a href = "#"> 1-3 Months </a></li>
					<li> <a href = "#"> 3-6 Months </a></li>
				</ul></li>
				
			<li class = "menu-bar" ><a href = "#" > Level </a>
				<ul class = "dropdown-list" >
					<li> <a href = "#"> Beginner </a></li>
					<li> <a href = "#"> Intermediate </a></li>
					<li> <a href = "#"> Advanced </a></li>
					<li> <a href = "#"> Mixed </a></li>
				</ul></li>
				
			<li class = "menu-bar" ><a href = "#" > Help </a>
				<ul>
					<li> <a href = "#"> Contact Us </a></li>
				</ul></li>
		</ul>
	</div>
	<div class = "startingInclude">


  <script>
    function viewRow(id) {
        if (confirm("Are you sure you want to delete this row?")) {
            window.location.href = 'subject.php?id=' + id;
        }
    }
</script>

  -->

        <?php/*
    $query = "SELECT * FROM subjectTable" ;
    // $Imagequery = "SELECT imagePath FROM subjectTable WHERE subjectId = 1"; // Replace 'imagesTable' and 'id' with your actual table and column names

    // Execute the query
    $result = mysqli_query($conn, $query);
    // $Imageresult = mysqli_query($conn, $Imagequery);
        
    while ($row = mysqli_fetch_assoc($result)){
        // Access the data fields using the column names
        $column1 = $row['teacherName'];
        $column2 = $row['bio'];
        $column3 = $row['courseName'];
        $column4 = $row['structure'];
        $column5 = $row['logo'];
        $column6 = $row['duration'];
        $column7 = $row['student_level'];
        $column8 = $row['subjectName'];
        $column9 = $row['investment'];
        
        
        // if($Imagerow = mysqli_fetch_assoc($Imageresult)){
        //   $imagePath = $Imagerow['imagePath'];
        // }
        $imagePath = "Image/".$column5;

        //display the data

		    echo '<div class = "imagecard">';
        echo '<img src="' . $imagePath . '" alt="Image">';
        echo '<div class = "intro">';
        echo '<h2>'.$column3.'</h2>';
        echo "<p><span>Skills you'll gain :".$column8."</p>";
        echo '<br><br>';
        echo '<h5></br>' .$column7.' '.$column6. '</h5>';
        echo '<button onclick='viewRow(".$row['subjectName'].")'>View</button>';
        
        //echo '<button name="button" value="$column8">View</button>';
      
        
        //echo '<button name "button" value = "$> Veiw </button>';
        echo '</div>';
        echo '</div>';

    }

    mysqli_close($conn);*/
?>
</div>
			
    <!-- Your code start from here-->



    
    
    <footer class="footer">
	
    <div class="footer-container">
    <div class="footer-logo">
      <img src="images/logo.jpg" alt="Logo">
    </div>
    <div class="footer-links">
      <ul>
      <li><a href="Index.html">Home</a></li>
        <li><a href="couses_desplay.php">Course</a></li>
        <li><a href="contactNew.html">Contact Us</a></li>
        <li><a href="frequentlyAskedQuestions.html">FAQ</a></li>
        <li><a href="about.html">About Us</a></li>
        <li><a href="privacypolicy.html">Privacy Policy</a></li>
      </ul>
    </div>
    
  </div>
  <div class="footer-bottom">
    <p>&copy; 2023 EduMentor. All rights reserved.</p>
  </div>
</footer>
</body>
</html>

