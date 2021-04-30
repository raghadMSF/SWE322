<?php

include('./elements/header.php');
include($_SERVER['DOCUMENT_ROOT'].'/gym-project/src/php/sanitizeinput.php');
echo '
<div class="w-100 py-5">
<h1 class="text-center">login</h1>
';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST['username']);
    $password = test_input($_POST['password']);
    if(empty($password) || empty($username)){
        echo '<div class="alert alert-warning" role="alert"> password or username is empty</div>';
    }else{
        $sql = "SELECT * FROM user_account WHERE username = '$username'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              if(password_verify($password, $row["password"])) {
                $_SESSION['userid'] = $row["id"];
                header('Location: index.php');
              }else{
                echo '<div class="alert alert-danger" role="alert">
                wrong password or username
              </div>';
              } 
            }
          } else {
            echo '<div class="alert alert-warning" role="alert">
            Username or password was incorrect
          </div>';
          }
          $conn->close();
    }
}
echo '</div>';
include('./elements/footer.php');
