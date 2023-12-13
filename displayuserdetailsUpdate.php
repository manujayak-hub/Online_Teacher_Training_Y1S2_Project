<?php
if (isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['emailAdd'];
    $dob = $_POST['dob'];
    $nic = $_POST['nic'];
    $gender = $_POST['gender'];
    $qualification = $_POST['UQualification'];
    $mobile = $_POST['Umobile'];

    require 'config.php';

    $sql = "UPDATE usertable SET UFName = '$firstName', ULName = '$lastName', UEmail = '$email', Udob = '$dob', Unic = '$nic', Ugender = '$gender', UQualification = '$qualification', Umobile = '$mobile' WHERE Umobile = '$mobile'";
    $conn = new mysqli ($servername, $username, $password, $db);
    mysqli_query($conn, $sql);

    echo "<script>showSuccessMessage();</script>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>User_Details</title>
</head>

<body>
    <form method="post" action="profile.php">
        <div class="formSet">
            <label for="firstName"> First name </label>
            <input name="firstName" type="text">
        </div>
        <div class="formSet">
            <label for="lastName"> Last name </label>
            <input name="lastName" type="text">
        </div>
        <div class="formSet">
            <label for="emailAdd"> Email Address </label>
            <input name="emailAdd" type="text">
        </div>
        <div class="formSet">
            <label for="dob"> Date of Birth </label>
            <input name="dob" type="text">
        </div>
        <div class="formSet">
            <label for="nic"> NIC </label>
            <input name="nic" type="text">
        </div>
        <div class="formSet">
            <label for="gender"> Gender </label>
            <input name="gender" type="text">
        </div>
        <div class="formSet">
            <label for="UQualification"> Qualification </label>
            <input name="UQualification" type="text">
        </div>
        <div class="formSet">
            <label for="Umobile"> Contact Number(mobile) </label>
            <input name="Umobile" type="text">
        </div>
        <input name="submit" type="submit" value="Save Change" class="buttonSave">
    </form>

    <br>

    <script>
        function showSuccessMessage() {
            alert("Update successful!");
        }
    </script>
</body>

</html>
