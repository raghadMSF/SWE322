function validateLoginForm() {
  var username = document.forms["loginform"]["username"].value;
  var password = document.forms["loginform"]["password"].value;
  // var email = document.forms["myForm"]["email"].value;
  if (username == "" && password == "") {
    alert("username must be filled out");
    return false;
  }
  if (password == "") {
    alert("password must be filled out");
    return false;
  }
}

function validateRegisterForm() {
  var username = document.forms["registerform"]["username"].value;
  var password = document.forms["registerform"]["password"].value;
  var email = document.forms["registerform"]["email"].value;
  if (username.length < 3 || username.length > 16) {
    alert("username must be more than 3 or less than 15 chatacters");
    return false;
  }
  if (
    !/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/.test(
      password
    )
  ) {
    alert(
      "password must be have one capital and small letter, number and a special character and above 8 in length"
    );
    return false;
  }
  if (!/^\S+@\S+\.\S+$/.test(email)) {
    alert("email must be in a valid format");
    return false;
  }
}

function validateChangePasswordForm() {
  var old_password = document.forms["changepasswordform"]["old_password"].value;
  var new_password = document.forms["changepasswordform"]["new_password"].value;
  var new_password2 =
    document.forms["changepasswordform"]["new_password2"].value;
  if (
    !/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/.test(
      old_password
    )
  ) {
    alert(
      "old password must be have one capital and small letter, number and a special character and above 8 in length"
    );
    return false;
  }
  if (
    !/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/.test(
      new_password
    )
  ) {
    alert(
      "new password must be have one capital and small letter, number and a special character and above 8 in length"
    );
    return false;
  }
  if (
    !/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/.test(
      new_password2
    )
  ) {
    alert(
      "new password confirmation must be have one capital and small letter, number and a special character and above 8 in length"
    );
    return false;
  }

  if (new_password !== new_password2) {
    alert("new password and confirmation password does not match");
    return false;
  }
}

function validateProfileForm() {
  var first_name = document.forms["profileform"]["first_name"].value;
  var last_name = document.forms["profileform"]["last_name"].value;
  var phone = document.forms["profileform"]["phone"].value;
  var city = document.forms["profileform"]["city"].value;
  var country = document.forms["profileform"]["country"].value;
  var email = document.forms["profileform"]["email"].value;
  if (
    first_name == "" &&
    last_name == "" &&
    phone == "" &&
    email == "" &&
    city == "" &&
    country == ""
  ) {
    alert("all fields must be filled out");
    return false;
  }
}
