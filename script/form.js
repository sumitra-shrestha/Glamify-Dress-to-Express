// function to validate signup form
function validateSignupForm() {
    var first_name = $("#fname").val().trim();
    var last_name = $("#lname").val().trim();
    var email = $("#email").val().trim();
    var phone = $("#phone").val().trim();
    var pwd = $("#pwd").val().trim();
    var repwd = $("#repwd").val().trim();
    var isFormValid = false;
    if (!first_name) {
      $("#fnameErrorMsg").text("*Please enter your first name");
      isFormValid = false;
    } else {
      $("#fnameErrorMsg").text("");
      isFormValid = true;
    }
    if (!last_name) {
        $("#lnameErrorMsg").text("*Please enter your last name");
        isFormValid = false;
      } else {
        $("#lnameErrorMsg").text("");
        isFormValid = true;
      }
    if (!email) {
      $("#emailErrorMsg").text("*Please enter your email");
      isFormValid = false;
    } else {
      $("#emailErrorMsg").text("");
      isFormValid = true;
    }
  
    if (!phone) {
      $("#phoneErrorMsg").text("*Please enter your phone");
      isFormValid = false;
    } else {
      $("#phoneErrorMsg").text("");
      isFormValid = true;
    }
  
    if (!pwd) {
      $("#pwdErrorMsg").text("*Please enter your password");
      isFormValid = false;
    } else if (!/^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/.test(pwd)) {
      $("#pwdErrorMsg").text(
        "*Password should be minimum 8 letter and have at least a symbol, upper and lower case letters and a number."
      );
      isFormValid = false;
    } else {
      $("#pwdErrorMsg").text("");
      isFormValid = true;
    }
  
    if (!repwd) {
      $("#repwdErrorMsg").text("*Please enter your re-password");
      isFormValid = false;
    } else if (repwd !== pwd) {
      $("#repwdErrorMsg").text(
        "*Your re-password doesn't match the above password"
      );
      isFormValid = false;
    } else {
      $("#repwdErrorMsg").text("");
      isFormValid = true;
    }
  
    return isFormValid;
  }
  
  // function to validate login form
  function validateLoginForm() {
    var email = $("#email").val().trim();
    var pwd = $("#pwd").val().trim();
    var isFormValid = false;
    if (!email || !pwd) {
      $("#loginFormErrorMsg").text("*Please enter your login credentials");
      isFormValid = false;
    } else {
      $("#loginFormErrorMsg").text("");
      isFormValid = true;
    }
    return isFormValid;
  }