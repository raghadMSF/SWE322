<?php
include('./elements/header.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo '<div class="middleview"><br/>';
    $class_id = $_POST['classid'];
    //this is coming from sessions;
    $currentUserId;
    if(empty($class_id) ){
        echo '<div class="alert alert-warning" role="alert"> class id not found</div>';
    }else{
        $class_result = $conn->query('SELECT * FROM classes WHERE class_id ='. $class_id .';');
        while ($row = $class_result->fetch_assoc()) {
            $class_date = strtotime($row['class_date']);
            $todays_date = strtotime(date("Y-m-d"));
            //1 check if number of enrollments reach maximum number 
            //2 check if class enrollment date expired
            if ($row['number_of_trainees'] >= $row['max_number_of_trainees']){
                echo '<div class="alert alert-warning" role="alert"> class reached maximum number</div>';
            }elseif ($class_date < $todays_date){
                echo '<div class="alert alert-warning" role="alert"> class has expired</div>';
            }else{
                //check if booked by the logged user
                $duplicated_booking = $conn->query('SELECT * FROM bookings WHERE user_id ='.$currentUserId.' AND class_id ='.$class_id.';');
                if($duplicated_booking->num_rows>0){
                    echo '<div class="alert alert-warning" role="alert"> class already booked by you</div>';
                }else{
                    //add to bookings table
                    $stmt = $conn->prepare("INSERT INTO bookings (class_id,user_id) VALUE (?,?)");
                    $stmt->bind_param('ii',$class_id,$currentUserId);
                    //increase number of bookings by one
                    $conn->query("
                    UPDATE classes 
                    SET number_of_trainees = number_of_trainees + 1
                    WHERE class_id = '".$class_id."'");
                    echo '<div class="alert alert-success" role="alert"> class successuflly booked</div>';
                }
            }
            echo '</div>';
            include('./elements/footer.php');
        }
        if(false === $stmt->execute()){
            echo "An error has occurred";
            $stmt->close();
            exit();
        }else{
            $stmt->close();
            mysqli_close($connection);
            exit();
        }
    }

}
