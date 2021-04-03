<?php

include('./database_connection.php');
include('./header.php');
echo '
<div class="w-50 py-5">
<h1>registration action</h1>';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $emailField = $_POST['email'];
  $usernameField = $_POST['username'];
  $passwordField = $_POST['password'];
  if (empty($usernameField) || empty($emailField) || empty($passwordField)) {
    echo "Name or Password or Email is empty";
  } else {
    // prepare and bind
    $stmt = $conn->prepare("INSERT INTO user_accounts (user_name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username,$email,$password);
    // set parameters and execute
    $username = $usernameField;
    $email = $emailField;
    $password = password_hash($passwordField, PASSWORD_DEFAULT);
    $stmt->execute();
    echo " Registration is successful. you can now login ";
  }
}
echo '</div>';
include('./footer.php');
?>

