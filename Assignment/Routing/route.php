<?php
include "../PHP_functions/main.php";
// *****************************
if (isset($_POST["booking-submit"])) {
    appointmentBooking();
}

if (isset($_POST["Signin"])) {
    signIn();
}

if (isset($_POST["signOut"])) {
    signOut();
}

if(isset($_POST["Register"])) {
    signUp();
}

if(isset($_POST["update"])){
    update_user();
}

if(isset($_POST['SigninAdmin'])){
    admin_sign_in();
}

if(isset($_POST['reject'])){
    reject_booking();
}

if(isset($_POST['approve'])){
    approve_booking();
}

if(isset($_POST["update2"])){
    update_patients();
}

if(isset($_POST['delete'])){
    delete_patients();
}

if(isset($_POST["edit2"])){
    edit_admin();
}

