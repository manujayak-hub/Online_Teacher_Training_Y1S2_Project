<?php
    include_once'config.php';
?>


<?php

session_start();

// Retrieve the login form data
$username = isset($_POST["UFName"]) ? $_POST["UFName"] : '';
$password = isset($_POST["Upw"]) ? $_POST["Upw"] : '';

// SQL query to check if there are matching records
$sql = "SELECT UFName, Upw FROM usertable WHERE UFName='$username'";

// Execute the query
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Fetch the row containing user information
    $row = mysqli_fetch_assoc($result);
    

    // Retrieve the username and password from the row
    $fetchedUsername = $row['UFName'];
    $fetchedPassword = $row['Upw'];

    // Compare the retrieved password with the entered password
    if ($fetchedPassword == $password) {
        // Store user information in session variables
        $_SESSION['username'] = $fetchedUsername;

        if($fetchedUsername=='admin'  )
        {
            setcookie("user_type", "admin", time() + (86400 * 30), "/");
            echo "<script>window.location.href = 'Feedback_edit_admin.php';</script>";
        }
        else if( $fetchedUsername=='itmanager' )
        {
            setcookie("user_type", "itmanager", time() + (86400 * 30), "/");
            echo "<script>window.location.href = 'show.php';</script>";
        }
        
        else if( $fetchedUsername=='coursecreator' )
        {
            setcookie("user_type", "coursecreator", time() + (86400 * 30), "/");
            echo "<script>window.location.href = 'courseCreator.php';</script>";
        }
        else if( $fetchedUsername=='hrmanager' )
        {
            setcookie("user_type", "hrmanager", time() + (86400 * 30), "/");
            echo "<script>window.location.href = 'contact_useradmin.php';</script>";
        }
        else 
        {
            setcookie("user_type", "normaluser", time() + (86400 * 30), "/");
            echo "<script>alert('You Connected Successfully')</script>";
            echo "<script>window.location.href = 'indexlogged.php';</script>";
        }
    } else {
        echo "<script>alert('Incorrect Password')</script>";
        echo "<script>window.location.href = 'Login_page.html';</script>";
    }
} else {
    echo "<script>alert('Invalid Username')</script>";
    echo "<script>window.location.href = 'Login_page.html';</script>";
}

mysqli_close($conn);

?>
