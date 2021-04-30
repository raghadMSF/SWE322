function validateLoginForm() {
  var username = document.forms["loginform"]["username"].value;
  var password = document.forms["loginform"]["password"].value;
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

function myFunction() {
  confirm("Are you sure you want to confirm this booking ?");
}
