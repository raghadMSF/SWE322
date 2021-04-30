<?php
include('./elements/header.php');

$todays_date = date("Y-m-d");
$sql = 'SELECT * FROM classes WHERE class_date >="' . $todays_date . '"AND number_of_trainees < max_number_of_trainees';
$result = $conn->query($sql);
echo '
<div class="w-100 py-5">
    <h1 class="text-center">Available Classes</h1>
    <div class="text-center"><small>Todays Date:'.$todays_date.'</small></div>
</div>
<div class="normalview">
    <div class="row">';
    while ($row = $result->fetch_assoc()) {
    echo card($row['class_id'],$row['class_date'],$row['number_of_trainees'],$row['max_number_of_trainees'],$row['trainer_name']);
    }
        echo '
   </div>
</div>
';
function card($id,$date,$number,$max_number,$coach){
    return '
    <div class="card mx-2" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title">Gym Class "'. $id .'"</h5>
        <h6 class="card-subtitle mb-2 text-muted">starts on '. $date.'</h6>
        <h6 class="card-subtitle mb-2">Trainer: '. $coach . '</h6>
        <p class="card-text">This class is available. Only <mark>'. ($max_number - $number) .'</mark> slots left!</p>
        <form action="classes_action.php" method="post" name="bookForm">
            <input type="hidden" name="classid"  id="classid" value="'.$id.'">
            <button onclick="myFunction()" class="btn btn-primary">Book Class</button>
        </form>
        </div>
    </div>
    ';
}
mysqli_close($conn);
include('./elements/footer.php');