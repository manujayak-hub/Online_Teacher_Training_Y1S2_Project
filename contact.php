<?php
	include_once 'config.php';
?>

<?php	
	$fname=$_POST["fname"];
	$sname=$_POST["sname"];
	$email=$_POST["email"];
	$message=$_POST["message"];
	
	$sql="INSERT INTO contact_us(Contact_id,fname,sname,email,message)
	VALUES('','$fname','$sname','$email','$message')";
	
	 if(mysqli_query($conn, $sql))
	 {
		 echo "<script>alert('Record Inserted Successfully!!')</script>";
		 echo "<script>window.location.href = 'contactNew.html';</script>";
	 }
	 else
		 
	 {
		 echo "<script>alert('Error in Insertion!!')</script>"; 
		 echo "<script>window.location.href = 'contactNew.html';</script>";
	 }

	 //close the conection
     mysqli_close($conn);
	 
?>

	
	
	