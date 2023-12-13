
function validateForm() {
  // Get the values from the input fields
  var name = document.getElementById('feedname').value;
  var email = document.getElementById('feedemail').value;
  var subject = document.getElementById('feedsubject').value;

  // Check if any of the fields are empty
  if (name === '' || email === '' || subject === '') {
    alert('Please fill in all the required fields.');
    return false; // Prevent form submission
  }

  // Validate the email format
  var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailPattern.test(email)) {
    alert('Please enter a valid email address.');
    return false; // Prevent form submission
  }

  return true; // Allow form submission
}
