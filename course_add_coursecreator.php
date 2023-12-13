<?php
    include_once 'config.php' ;
?>
<?php
include'logout.php';
?>

<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        //retrive the form data
        $teacherName = mysqli_real_escape_string($conn, $_POST['tec_name']);
        $bio = mysqli_real_escape_string($conn, $_POST['tec_bio']);
        $courseName= mysqli_real_escape_string($conn, $_POST['cou_name']);
        $structure = mysqli_real_escape_string($conn, $_POST['Less_structure']);
        $course_Logoim = basename($_FILES['course_logo']['name']);
        $logo = basename($_FILES['course_logo']['name']);
        $timage = basename($_FILES['T_image']['name']);
        $timagepath= basename($_FILES['T_image']['name']);
        $duration = mysqli_real_escape_string($conn, $_POST['course_duration']);
        $student_level = mysqli_real_escape_string($conn, $_POST['level']);
        $subjectName = isset($_POST['subject']) ? mysqli_real_escape_string($conn, $_POST['subject']) : "";
        $invesment = mysqli_real_escape_string($conn, $_POST['inves']);
       
        $target_dir = "Image/";
        $target_file = $target_dir.basename($_FILES["course_logo"]["name"]);
        
        if(isset($_FILES["course_logo"])){
            if(move_uploaded_file($_FILES["course_logo"]["tmp_name"], $target_file)){
                echo "<script>alert('The file' ".basename($_FILES["course_logo"]["name"]). "is uploaded.</script>";
            }
            else{
                echo "<script>alert('File not available')";
            }
        }

        $timage = basename($_FILES['T_image']['name']);
        $target_dir = "image/";
        $target_file = $target_dir.basename($_FILES["T_image"]["name"]);



        if (isset($_FILES["T_image"])) {
            if (move_uploaded_file($_FILES["T_image"]["tmp_name"], $target_file)) {
                echo "<script>alert('The file " . basename($_FILES["T_image"]["name"]) . " is uploaded.')</script>";
            } else {
                echo "<script>alert('File not available')</script>";
            }
        
            $ntimage="image/".$timagepath;

        // $query = "INSERT INTO subjectTable (teacherName, bio, courseName, structure, course_Logoim, duration, student_level, subjectName, investment) VALUES ('$teacherName', '$bio', '$courseName', '$structure', '$course_Logoim', '$duration', '$student_level', '$subjectName', '$invesment')";
        $query = "INSERT INTO subjectTable (subjectId,teacherName, bio, courseName, structure, logo, duration, student_level, subjectName, investment,dasunimagepath) VALUES ('','$teacherName', '$bio', '$courseName', '$structure', '$logo', '$duration', '$student_level', '$subjectName', '$invesment','$ntimage')";

        echo basename($_FILES['course_logo']['name']);
        
        //check if the insertion was successful
        if (mysqli_query($conn, $query)){
            echo "<script>alert( 'Course added successfully ! ')</script>";
        }
        else{
            echo "Error adding course ," . $conn->error;
        }

        //close the statement
        mysqli_close($conn);
    }
} 
?>

    <html>
    <head>
        <meta charset="utf-8">
        <title>Create Coures</title>
        <link rel = "stylesheet" href = "css/course_add_coursecreator.css">
        <link rel = "stylesheet" href = "css/headerFooter.css">
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

         
          <div class = "mainsec" >
            <h1>Create Course</h1 >
            <form 
                action = "course_add_coursecreator.php" 
                method ="post" 
                enctype = "multipart/form-data" 
                name="create_teacher" 
                onsubmit="event.preventDefault(); validateForm();"
            >

                Teacher Name* :
                <input type = "text" name = "tec_name" id="tec_name" /><br><br> 

                Bio* :
                <textarea name ="tec_bio" rows = "3" cols = "20" id="tec_bio"></textarea><br><br> 

                New course Name* :
                <input type = "text" name = "cou_name" id = "cou_name"><br><br>

                Lesson Structure* :
                <input type = "text" name = "Less_structure" id="Less_struct" ><br><br> 

                
                <div class = "courselogo" >
                    Enter new course logo :
                    <input type = "file" name = "course_logo" id= "fileToUpload">
                </div>

                
                <div class = "courselogo" >
                    Enter new course Teacher Image :
                    <input type = "file" name = "T_image" id= "fileToUpload">
                </div>

                Select Course Duration :
                <select class="duration" name = "course_duration">
                <option id = "duration"  value = "1-4 Years" > 1-4 Years </option>
                    <option id = "duration"  value = "Less than 2 hours" > Less than 2 hours </option>
                    <option id = "duration"  value = "1-4 Weeks" > 1-4 Weeks </option>
                    <option id = "duration"  value = "1-3 Months" > 1-3 Months </option>
                    <option id = "duration"  value = "3-6 Months" > 3-6 Months </option>
                </select><br><br>

                Select Level :
                <select class = "level" name = "level" >
                    <option id = "level"  value = "Beginner" > Beginner </option>
                    <option id = "level"  value = "Intermediate" > Intermediate </option>
                    <option id = "level"  value = "Advanced" > Advanced </option>
                    <option id = "level"  value = "Mixed" > Mixed </option>
                </select><br><br>

                Select Subject the new coures covered :<br>

                <div class = "subjectList" style = "text-align : center;" >
                    <input type = "radio" id = "Maths" name = "subject" value = "Maths">
                    <label for = "Maths"> Maths </label>
                    <input type = "radio" id = "Science" name = "subject" value = "Science">
                    <label for = "Science"> Science </label>
                    <input type = "radio" id = "English" name = "subject" value = "English">
                    <label for = "English"> English </label>
                    <input type = "radio" id = "History" name = "subject" value = "History">
                    <label for = "History"> History </label>
                    <input type = "radio" id = "IT" name = "subject" value = "IT">
                    <label for = "IT"> IT </label>
                </div>
                <br><br>

                Hope to investment :
                <input type = "text" name = "inves" ><br><br> 
                <center><button type = "submit" name = "btnSubmit" > Create Course </button></center>

            </form>
          </div>
          
        

          <footer class="footer">
            <div class="footer-container">
              <div class="footer-logo">
                <img src="images/logo.png" alt="Logo">
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
          <p id="manju"></p>
    </body>

            <script>

                function validateForm() {
                    const input_tec_name = document.getElementById('tec_name')?.value;
                    const input_tec_bio = document.getElementById('tec_bio')?.value;
                    const input_cou_name= document.getElementById('cou_name')?.value;
                    const input_Less_structure= document.getElementById('Less_struct')?.value;
                    
                    if (!input_tec_name || !tec_bio) { //
                       return alert("Techer name is required") 
                    }else{
                        document.forms['create_teacher'].submit();
                    }
                }

            </script>
    
</html>