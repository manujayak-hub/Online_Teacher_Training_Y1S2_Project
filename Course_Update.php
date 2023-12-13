<?php
include'logout.php';
?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once 'config.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $user_Fname = $_POST['Firstname'];
    $user_Lname = $_POST['Lasttname'];
    $user_email = $_POST['emailAdd'];
    $user_dob = $_POST['dob'];
    $user_nic = $_POST['nic'];
    $user_gender = $_POST['gender'];
    $user_quli = $_POST['UQualification'];
    $user_mob = $_POST['Umobile'];

    // Perform the database update
    $sql = "UPDATE usertable SET UFName = '$user_Fname', ULName = '$user_Lname', UEmail = '$user_email', Udob = '$user_dob', Unic = '$user_nic', Ugender = '$user_gender', UQualification = '$user_quli', Umoblie = '$user_mob' WHERE UserId = '$UserId'";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Data has been updated successfully!')</script>";
        echo "<script>window.location.href = 'Course_Update.php';</script>";
    } else {
        echo "<script>alert('Error updating details: " . mysqli_error($conn) . "')</script>";
    }

    // Close the connection
    mysqli_close($conn);
}
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Course Page</title>
    <link rel="stylesheet" href="css/coursePage2.css">
    <link rel="stylesheet" href="css/headerFooter.css">
</head>
<body>
<header class="header">
    <div class="logo">
        <a href="#"><img src="images/logo.jpg" alt="Logo"></a>
        <h1>EduMentor</h1>
    </div>
    <ul class="menu">
        <li><a href="#">Home</a></li>
        <li><a href="#">Course</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Privacy Policy</a></li>
    </ul>

    <ul class="menu">

        <li><a href="Login_page.html">Login</a></li>
        <li><a href="#">Register</a></li>

    </ul>
</header>
</br></br>

<!-- Your code start from here-->
<div class="mainsec">
    <div class="menuBar">
        <ul>
            <li class="menu-bar"><a href="#">Subject</a>
                <ul class="dropdown-list">
                    <li><a href="#">Maths</a></li>
                    <li><a href="#">History</a></li>
                    <li><a href="#">Science</a></li>
                    <li><a href="#">English</a></li>
                    <li><a href="#">IT</a></li>
                </ul>
            </li>

            <li class="menu-bar"><a href="#">Duration</a>
                <ul class="dropdown-list">
                    <li><a href="#">1-4 Years</a></li>
                    <li><a href="#">Less than 2 hours</a></li>
                    <li><a href="#">1-4 Weeks</a></li>
                    <li><a href="#">1-3 Months</a></li>
                    <li><a href="#">3-6 Months</a></li>
                </ul>
            </li>

            <li class="menu-bar"><a href="#">Level</a>
                <ul class="dropdown-list">
                    <li><a href="#">Beginner</a></li>
                    <li><a href="#">Intermediate</a></li>
                    <li><a href="#">Advanced</a></li>
                    <li><a href="#">Mixed</a></li>
                </ul>
            </li>

            <li class="menu-bar"><a href="#">Help</a>
                <ul>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="startingInclude">
        <form method="POST" action="">
            <!-- Add input fields for updating user details -->
            <input type="text" name="Firstname" placeholder="First Name" required>
            <input type="text" name="Lastname" placeholder="Last Name" required>
            <input type="email" name="emailAdd" placeholder="Email" required>
            <input type="text" name="dob" placeholder="Date of Birth" required>
            <input type="text" name="nic" placeholder="NIC" required>
            <input type="text" name="gender" placeholder="Gender" required>
            <input type="text" name="UQualification" placeholder="Qualification" required>
            <input type="text" name="Umobile" placeholder="Mobile" required>
            <input type="submit" value="Save Changes">
        </form>
    </div>
</div>
<!-- Your code start from here-->

<footer class="footer">
    <div class="footer-container">
        <div class="footer-logo">
            <img src="images/logo.jpg" alt="Logo">
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