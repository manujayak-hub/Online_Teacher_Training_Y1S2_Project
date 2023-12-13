
  document.getElementById("submitBtn").addEventListener("click", function(event) {
Event.preventDefault(); // Prevent the form from submitting
    
    // Get form values
    var firstName = document.getElementById("firstname").value;
    var lastName = document.getElementById("lastname").value;
    var mobileNumber = document.getElementById("mobile").value;
    var nic = document.getElementById("nic").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var dob = document.getElementById("birthday").value;
    var gender = document.querySelector('input[name="Ugender"]:checked');
    var qualifications = document.getElementById("qualifications").value;
    
    // Validate form fields
    if (firstName.trim() === "" || lastName.trim() === "" || mobileNumber.trim() === "" || nic.trim() === "" || email.trim() === "" || password.trim() === "" || dob.trim() === "" || !gender || qualifications.trim() === "") {
      alert("Please fill in all fields.");
      return;
    }
    
    // Form is valid, show success message
    alert("Data inserted successfully!");
    
    // Redirect to login_page.html
    window.location.href = "Login_page.html";
  });

