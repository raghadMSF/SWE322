<?php
include('./header.php');
include('./database_connection.php');

echo "
<div class='w-50 py-5'>
<h1>Create Profile action: $currentUserId </h1>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    if(empty($first_name) || empty($last_name) || empty($phone) || empty($email) || empty($country) || empty($city) ){
        echo '<div class="alert alert-warning" role="alert"> one or more fields was empty</div>';
    }elseif (!preg_match("/^\S+@\S+\.\S+$/",$email)) {
        echo '<div class="alert alert-warning" role="alert">email must be in a valid format</div>';
    }elseif (!preg_match("/^[0-9]*$/",$phone)) {
        echo '<div class="alert alert-warning" role="alert">phone must consist of numbers only</div>';
    }else{
        $stmt = $conn->prepare("INSERT INTO profile (first_name,last_name,contact_phone,contact_email,city,country,u_id) VALUE (?,?,?,?,?,?,?)");
        $stmt->bind_param('ssisssi',$first_name,$last_name,$phone,$email,$city,$country,$currentUserId);
        if(false === $stmt->execute()){
            echo "An error has occurred";
            $stmt->close();
            exit();
        }else{
            $stmt->close();
            mysqli_close($connection);
            header('Location: profile.php');
            exit();
        }
    }

}
echo '</div>';
include('./footer.php');