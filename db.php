<?php

// Define the variables
$sname = "localhost";
$uname = "root";
$password = ""; // The password is now properly escaped
$db_name = "my_db";

// Connect to the MySQL database
$conn = mysqli_connect($sname, $uname, $password, $db_name);

// Check if the connection was successful
if(!$conn){
    // The connection failed
    echo "connection failed". mysqli_connect_error();
    exit;
// } else {
//     // The connection was successful
//     echo "connection successful";
//     // echo $conn;
}
?>
