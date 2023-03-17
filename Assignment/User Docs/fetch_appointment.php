<?php
include("../Routing/route.php");
$calendar_post = $_SESSION['user_id'];
$query= "SELECT * FROM `appointment_table` WHERE `cust_id` = $calendar_post";
$result = mysqli_query($connection, $query);

$appointment_array=array();
while($row = mysqli_fetch_assoc($result)){
    $row['start'] = $row['appointment date'].'T'.$row['appointment_time'];
    array_push($appointment_array,$row);  
} 

echo json_encode($appointment_array);
?>
