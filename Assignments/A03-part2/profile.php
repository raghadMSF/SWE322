<?php

include('./header.php');
include('./database_connection.php');
echo '
<div class="w-50 py-5">
<h1>Profile Page</h1>';

if($currentUserId>0){
    $sql = "SELECT * FROM profile WHERE u_id = $currentUserId";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $phone = $row['contact_phone'];
        $email = $row['contact_email'];
        $country = $row['country'];
        $city = $row['city'];
        echo "
        <div class='mb-3'>
            <label>first name:</label>
            <span><h6>$first_name</h6></span>
        </div>
        <div class='mb-3'>
            <label>last name</label>
            <span><h6>$last_name</h6></span>
        </div>
        <div class='mb-3'>
            <label>contact phone:</label>
            <span><h6>$phone</h6></span>
        </div>
        <div class='mb-3'>
            <label>contact email:</label>
            <span><h6>$email</h6></span>
        </div>
        <div class='mb-3'>
            <label>country:</label>
            <span><h6>$country</h6></span>
        </div>
        <div class='mb-3'>
            <label>city:</label>
            <span><h6>$city</h6></span>
        </div>
        ";
    } else {
        header('Location: create_profile_page.php');
    }
    $conn->close();  
}else{
    echo 'you must login';
}


echo'</div>';


include('./footer.php');

// if ($result->num_rows > 0) {
//     echo 'sssss';
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//       echo "id: " . $row["u_id"]. " - email: " . $row["email"]. " - username: " . $row["user_name"]. "<br>";
//     }
//   } else {
//     echo "0 results";
//   }
//   $conn->close();
// $getProfile = "SELECT * FROM profile WHERE email = ";
