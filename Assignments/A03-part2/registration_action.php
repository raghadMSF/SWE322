<?php

include('./header.php');
include('./database_connection.php');
echo '
<div class="w-50 py-5">
<h1>registration action</h1>';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $emailField = test_input($_POST['email']);
  $usernameField = test_input($_POST['username']);
  $passwordField = test_input($_POST['password']);
  if (empty($usernameField) || empty($emailField) || empty($passwordField)) {
    echo '<div class="alert alert-warning" role="alert">Name or Password or Email is empty</div>';
  }elseif (strlen($usernameField) < 3 || strlen($usernameField) > 16) {
      echo '<div class="alert alert-warning" role="alert">username must be more than 3 or less than 15 chatacters</div>';
  }elseif (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/",$passwordField)) {
      echo '<div class="alert alert-warning" role="alert">password must be have one capital and small letter, number and a special character and above 8 in length</div>';
  }elseif (!preg_match("/^\S+@\S+\.\S+$/",$emailField)) {
      echo '<div class="alert alert-warning" role="alert">email must be in a valid format</div>';
  } else {
    // prepare and bind
    $stmt = $conn->prepare("INSERT INTO user_accounts (user_name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username,$email,$password);
    // set parameters and execute
    $username = $usernameField;
    $email = $emailField;
    $password = password_hash($passwordField, PASSWORD_DEFAULT);
    // $stmt->execute();
    if(false === $stmt->execute()){
        echo "An error has occurred";
        $stmt->close();
        exit();
    }else{
        $stmt->close();
        mysqli_close($connection);
        header('Location: login_page.php');
        exit();
    }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo '</div>';
include('./footer.php');
?>

