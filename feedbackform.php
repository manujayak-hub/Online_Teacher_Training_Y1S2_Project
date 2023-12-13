<?php
    include_once'config.php';
?>

<?php

$Feedname=$_POST["Feedname"];
$Feedemail=$_POST["Feedemail"];
$Feedsubject=$_POST["Feedsubject"];
$Feedback=$_POST["Feedback"];


$sql="INSERT INTO feedbackt(FID,Feedname,Feedemail,Feedsubject,Feedback)VALUES( '','$Feedname','$Feedemail','$Feedsubject','$Feedback')";

if(mysqli_query($conn, $sql)) {
    echo "<script>alert('Record Inserted Successfully!!')</script>";
    echo "<script>window.location.href = 'feedback.php';</script>";
} 
else {
    echo "<script>alert('Error in Insertion!!')</script>";
}
    
mysqli_close($conn);

?>