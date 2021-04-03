<?php

include('./database_connection.php');

include('./header.php');

echo '
<div class="w-50 py-5">
<h1>login action page</h1>';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(empty($password) || empty($username)){
        echo '<div class="alert alert-warning" role="alert"> password or username is empty</div>';
    }else{
        $sql = "SELECT * FROM user_accounts WHERE user_name = '$username'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              if(password_verify($password, $row["password"])) {
                echo '<div class="alert alert-success" role="alert">
                Welcome
              </div>';
              }else{
                echo '<div class="alert alert-danger" role="alert">
                wrong password or username
              </div>';
              echo '
                <p>change your password <a href="change_password_page.php">HERE</a> </p>
              ';
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
include('./footer.php');