<?php
include_once "config.php";
$id = $username = $email = $passwd = $cnfpwd = $place = "";

if(isset($_POST['register'])) {

    $id = $_POST['Id'];
    $username = $_POST['uname'];
    $email = $_POST['email'];
    $passwd = $_POST['paswd'];
    $cnfpwd = $_POST['cnfpaswd'];
    $place = $_POST['place'];

    if ($passwd != $cnfpwd) {
        $cnfpwd = "Password do not match!";
    }
}

$sql = "INSERT INTO userLogin (Id, Username, EmailID, Password, ConfirmPassword, Place) VALUES ('$Id', '$username', '$email', '$passwd', '$cnfpwd', '$place')";
$res = mysqli_query($conn, $sql);
    header("location:index.php");
?>