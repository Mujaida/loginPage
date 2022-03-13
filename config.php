<?php
define ('HOST', 'localhost:3306');
define ('USERNAME', 'root');
define ('PASSWORD', '');
define ('DB_NAME', 'ALLEMIRATES');

$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DB_NAME);
 
if(!$conn) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>