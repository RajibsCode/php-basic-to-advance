<?php

$server_name = 'localhost';
$username = 'root';
$password = '';
$database = 'demo_user';

// 3 error reporting turn off
error_reporting(0);

// 4 error reporting with condition
// if($conn->connect_error){
//     echo "connection error";
//     exit;
// }

// 6 for exception error report for catch()
mysqli_report(MYSQLI_REPORT_STRICT);
// 5 error reporting with try catch()
try {
    // 1 connect database
    $conn = new mysqli($server_name,$username,$password,$database);

    // 2 print data
    // echo "<pre>";
    // print_r($conn);

    echo "connection successful";

    // 7 query making
    $sql = "SELECT * FROM user";
    $execute = $conn -> query($sql);
    echo "<pre>";
    print_r($execute);

} catch (Exception $ex) {
    echo "Connection Failed: " . $ex->getMessage();
}









?>