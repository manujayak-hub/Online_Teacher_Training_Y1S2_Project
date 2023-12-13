function validateForm() {
    var firstName = document.getElementById("firstname").value;
    var lastName = document.getElementById("lastname").value;
    var mobileNumber = document.getElementById("mobile").value;
    var nic = document.getElementById("nic").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirm-password").value;
    var dob = document.getElementById("birthday").value;
    var gender = document.querySelector('input[name="Ugender"]:checked');
    var qualifications = document.getElementById("qualifications").value;
  
    // Validate First Name
    if (firstName === "") {
      alert("Please enter your First Name");
      return false;
    }
  
    // Validate Last Name
    if (lastName === "") {
      alert("Please enter your Last Name");
      return false;
    }
  
    // Validate Mobile Number
    if (mobileNumber === "") {
      alert("Please enter your Mobile Number");
      return false;
    } else if (isNaN(mobileNumber) || mobileNumber.length !== 10) {
      alert("Please enter a valid 10-digit Mobile Number");
      return false;
    }
  
    // Validate NIC
    if (nic === "") {
      alert("Please enter your NIC");
      return false;
    }
  
    // Validate Email Address
    if (email === "") {
      alert("Please enter your Email Address");
      return false;
    } else if (!validateEmail(email)) {
      alert("Please enter a valid Email Address");
      return false;
    }
  
    // Validate Password
    if (password === "") {
      alert("Please enter a Password");
      return false;
    }
  
    // Validate Confirm Password
    if (confirmPassword === "") {
      alert("Please confirm your Password");
      return false;
    } else if (password !== confirmPassword) {
      alert("Passwords do not match");
      return false;
    }
  
    // Validate Date of Birth
    if (dob === "") {
      alert("Please enter your Date of Birth");
      return false;
    }
  
    // Validate Gender
    if (gender === null) {
      alert("Please select your Gender");
      return false;
    }
  
    // Validate Qualifications
    if (qualifications === "") {
      alert("Please enter your Qualifications");
      return false;
    }
  
    return true;
  }
  
  // Email validation helper function
  function validateEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
  }
  