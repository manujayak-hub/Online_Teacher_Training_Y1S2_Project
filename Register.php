<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>


<?php
    include_once'config.php';
?>

<?php

    //$UserID=$_POST["UserID"];
    $UFName=$_POST["UFName"];
    $ULName=$_POST["ULName"];
    $UEmail=$_POST["UEmail"];
    $Upw=$_POST["Upw"];
	$Udob=$_POST["Udob"];
	$Unic=$_POST["Unic"];
    $Ugender = isset($_POST["Ugender"]) ? $_POST["Ugender"] : "";
	$Qualification=$_POST["Uqualification"];
	$Umobile=$_POST["Umobile"];


    $sql="INSERT INTO usertable( UFName, ULName, UEmail, Upw, Udob, Unic, Ugender, UQualification,Umobile)VALUES('$UFName', '$ULName', '$UEmail ','$Upw',' $Udob ','$Unic ','$Ugender ','$Qualification','$Umobile')";

    if(mysqli_query($conn, $sql)) {
        echo "<script>alert('Record Inserted Successfully!!')</script>";
        echo "<script>window.location.href = 'Login_page.html';</script>";
    } 
    else {
        echo "<script>alert('Error in Insertion!!')</script>";
    }
    

    //close the conection
    mysqli_close($conn);



?>


<?php 
/*
if(isset($_POST["Submitreg"])){
		
    //$UserID=$_POST["UserID"];
    $UFname=$_POST["UFname"];
    $ULName=$_POST["ULName"];
    $UEmail=$_POST["UEmail"];
    $Upw=$_POST["Upw"];
	$Udob=$_POST["Udob"];
	$Unic=$_POST["Unic"];
    $Ugender=$_POST["Ugender"];
	$Qualification=$_POST["Uqualification"];
	$Umobile=$_POST["Umobile"];


    $sql="INSERT INTO usertable(UserID, UFname, ULName, UEmail, Upw, Udob, Unic, Ugender, UQualification,Umobile)VALUES( '','$UFname', '$ULName', '$UEmail ','$Upw',' $Udob ','$Unic ','$Ugender ','$Qualification','$Umobile')";

    if(mysqli_query($conn,$sql)){
        echo"<script>alert('Record Inserted Successfully!!')</script>";
       // header("Location:index.php");
    }else{
        echo"<script>alert('Error in Insertion!!')</script>";
        //header("Location:index.php");
    }

    */


?>





<?php
/*
    include_once 'config.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $UFname = $_POST["UFname"];
        $ULName = $_POST["ULName"];
        $UEmail = $_POST["UEmail"];
        $Upw = $_POST["Upw"];
        $Udob = $_POST["Udob"];
        $Unic = $_POST["Unic"];
        $Ugender = isset($_POST["Ugender"]) ? $_POST["Ugender"] : "";
        $Qualification = $_POST["Uqualification"];
        $Umobile = $_POST["Umobile"];

        $sql = "INSERT INTO usertable (UFname, ULName, UEmail, Upw, Udob, Unic, Ugender, Uqualification, Umobile)
                VALUES ('$UFname', '$ULName', '$UEmail', '$Upw', '$Udob', '$Unic', '$Ugender', '$Qualification', '$Umobile')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Record Inserted Successfully!!')</script>";
            //header("Location:index.php");
        } else {
            echo "<script>alert('Error in Insertion!!')</script>";
        }

        // Close the connection
        mysqli_close($conn);
    }
    */
?>
