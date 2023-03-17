<?php
session_start();

$connection = mysqli_connect("localhost", "root", "", "web dev");
if($connection -> connect_error) {
    die("failed to connect!" . $connection -> connect_error);
}

$query= "SELECT * FROM `appointment_table` WHERE `status`= 'pending'";
$result = mysqli_query($connection, $query);

function signIn() {
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM `customer personal information` WHERE `Email` = '$username' AND `Password` = '$password'";
    $result = mysqli_query($connection, $query);
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $row['Cust_ID'];
        $first_name = $row['First_Name'];
        $last_name = $row['Last_Name'];
        $_SESSION['name'] = $first_name . $last_name;
        $_SESSION["log_in"]  = "logged_in";
        header('Location: ../User Docs/index.php');
    } else{
        echo("<script>if(confirm('Wrong user or password!!')){index.php; }</script>");
}}


function signOut() {
    session_destroy();
    header('Location: ../User Docs/index.php');
}


function appointmentBooking() {
    global $connection;
    $cust_id = $_SESSION['user_id'] ?? null;
    $appointment_date = $_POST["booking-date"];
    $appointment_date = date("Y-m-d", strtotime($appointment_date));
    $appointment_time = $_POST["booking-time"] . ":00";
    $service_type = $_POST["service-type"];
    $additional_info = $_POST["additional-info"];
    if($cust_id && $appointment_date && $appointment_time && $service_type) {
        $query = "INSERT INTO `appointment_table`(`appointment_id`, `cust_id`, `appointment date`, `appointment_time`, `title`, `additional_information`, `status`) VALUES ('','$cust_id','$appointment_date','$appointment_time','$service_type','$additional_info','pending')";
        $result = mysqli_query($connection, $query);
        if($result) {
            $message = "Your appointment has been submitted successfully! Please wait till approval is done by the admin!";
            echo "<script>if(confirm('$message')){ window.location.href='../User Docs/index.php'; }</script>";
        } else {
            echo "fail to send query to database" . mysqli_error($connection);
        } 
    } else {
        echo"<script>if(confirm('Please log in to book an appointment')){ window.location.href='../User Docs/index.php'; }</script>";
    }
}


function signUp() {
    global $connection;
    $firstname = $_POST['firstname'];
    $lastname = $_POST["lastname"];
    $address = $_POST["address"];
    $address2 = $_POST["address2"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $postal_code = $_POST["postal_code"];
    $date_of_birth = $_POST["date_of_birth"];
    $email= $_POST["email"];
    $password = $_POST["password"];
    $phone_number = $_POST["phone_number"];

    $query = "INSERT INTO `customer personal information` (`First_Name`, `Last_Name`, `Address`, `Address 2`,
     `City`, `State`, `Postal_Code`, `Date_of_Birth`, `Email`, `Password`, `Phone_Number`)VALUES ('$firstname','$lastname','$address','$address2','$city','$state',
     '$postal_code','$date_of_birth','$email','$password','$phone_number')";

    if(mysqli_query($connection, $query)){
        header("Location: login.php");
    }
}


function update_user() {
    global $connection;
    $firstname = $_POST['firstname'];
    $lastname = $_POST["lastname"];
    $address = $_POST["address"];
    $address2 = $_POST["address2"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $postal_code = $_POST["postal_code"];
    $date_of_birth = $_POST["date_of_birth"];
    $email= $_POST["email"];
    $phone_number = $_POST["phone_number"];

    $query_update = "UPDATE `customer personal information` SET `First_Name`='$firstname',
    `Last_Name`='$lastname',`Address`='$address',`Address 2`='$address2',
    `City`='$city',`State`='$state',`Postal_Code`='$postal_code',
    `Date_of_Birth`='$date_of_birth',`Email`='$email', `Phone_Number`='$phone_number' 
    WHERE `Cust_ID`='$_SESSION[user_id]'";

    $update = mysqli_query($connection, $query_update);

    $_SESSION["name"] = $firstname." ".$lastname;
}


function admin_sign_in() {
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `admin` WHERE `email` = '$username' AND `password` ='$password'";
    $result = mysqli_query($connection, $query);
    if(mysqli_num_rows($result)== 1){
        $row = mysqli_fetch_assoc($result);
        $_SESSION["admin_id"] = $row["admin_id"];
        header('location: admin_appointment.php');
    }else{
        echo "<script>if(confirm('Wrong user or password!!')){ admin_login.php; }</script>";
    }
}


function reject_booking() {
    global $connection;
    $appointment_id = $_POST['reject'];
    $query_reject = "UPDATE `appointment_table` SET `status`='rejected' WHERE `appointment_id`= '$appointment_id'";
    mysqli_query($connection, $query_reject);
}


function approve_booking() {
    global $connection;
    $appointment_id = $_POST['approve'];
    $query_approve = "UPDATE `appointment_table` SET `status`='approved' WHERE `appointment_id`= '$appointment_id'";
    mysqli_query($connection, $query_approve);
}

function update_patients() {
    global $connection;
    $firstname = $_POST['firstname'];
    $lastname = $_POST["lastname"];
    $address = $_POST["address"];
    $address2 = $_POST["address2"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $postal_code = $_POST["postal_code"];
    $date_of_birth = $_POST["date_of_birth"];
    $email= $_POST["email"];
    $phone_number = $_POST["phone_number"];

    $data = $_POST['update2'];

    $query_update = "UPDATE `customer personal information` SET `First_Name`='$firstname',
    `Last_Name`='$lastname',`Address`='$address',`Address 2`='$address2',
    `City`='$city',`State`='$state',`Postal_Code`='$postal_code',
    `Date_of_Birth`='$date_of_birth',`Email`='$email', `Phone_Number`='$phone_number' 
    WHERE `Cust_ID`= $data";

    $update = mysqli_query($connection, $query_update);
    $_SESSION['update2'] = $update;
}

function delete_patients(){
    global $connection;
    $cust_id = $_POST['delete'];
    $query_delete = "DELETE FROM `customer personal information` WHERE `Cust_ID` = '$cust_id'";
    mysqli_query($connection, $query_delete);
}

function edit_admin(){
    global $connection;
    $_SESSION["admin_id"] = 1;
    $firstname = $_POST['firstname'];
    $lastname = $_POST["lastname"];
    $email= $_POST["email"];
    $password = $_POST["password"];

    $query_update = "UPDATE `admin` SET `first_name`='$firstname',
    `last_name`='$lastname',`email`='$email', `password`='$password' 
    WHERE `admin_id`= $_SESSION[admin_id]";

    $update = mysqli_query($connection, $query_update);
}
