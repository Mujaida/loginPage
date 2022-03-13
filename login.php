<?php
session_start();
include_once "config.php";
$username = $passwd = "";

if(isset($_POST['login'])) {

    $username = $_POST['uname'];
    $passwd = $_POST['paswd'];

$sql = "SELECT * FROM userLogin WHERE Username = '$username' AND Password = '$passwd'";
$res = mysqli_query($conn, $sql);

if(mysqli_num_rows($res)>0) {
    $result = mysqli_fetch_array($res);

    $Id = $result['Id'];
    $_SESSION['Id']=$Id;
        header("location:welcome.php");      
}
else {
    header("location:index.php");
}
}
mysqli_close($conn);
?>