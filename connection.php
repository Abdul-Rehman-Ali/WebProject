<?php
$server = "localhost";
$username = "root";
$password = "";
$db_name = "smartloop";

$con = mysqli_connect($server, $username, $password, $db_name);

if ($con){
    // echo "Connected";
} else {
    echo "Not Connected";
}
?>