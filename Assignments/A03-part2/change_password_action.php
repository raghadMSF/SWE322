<?php
include('./database_connection.php');
include('./header.php');

echo '
<div class="w-50 py-5">
<h1>change password action</h1>';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $userid =  $_SESSION['userid'];
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $new_password2 = $_POST['new_password2'];
    
    if(empty($old_password) || empty($new_password) || empty($new_password2) ){
        echo '<div class="alert alert-warning" role="alert"> old password or new password is empty</div>';
    }elseif($new_password != $new_password2){
        echo '<div class="alert alert-warning" role="alert"> password AND password confirmation does not match</div>';
    }else{
        $sql = "SELECT * FROM user_accounts WHERE u_id = '$userid'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              if(password_verify($old_password, $row["password"])) {
                $new_password_hash = password_hash($new_password, PASSWORD_DEFAULT);  
                $updatePasswordSql = "UPDATE user_accounts SET password='$new_password_hash' WHERE u_id='$userid'";
                if ($conn->query($updatePasswordSql) === TRUE) {
                    echo '<div class="alert alert-success" role="alert">
                            Password has changed successfully
                          </div>
                          ';
                } else {
                    echo "Error updating record: " . $conn->error;
                }

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