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

    // 7 query making and excute
    $sql = "SELECT * FROM user";
    $execute = $conn -> query($sql);
    echo "<pre>";
    print_r($execute);

    // 8 fetch and return index array
    echo "<h3>return index array</h3>";
    $result = mysqli_fetch_array($execute,MYSQLI_NUM);
    print_r($result);

    
    // 9 fetch and return associative array
    echo "<h3>return associative array</h3>";
    $result2 = mysqli_fetch_array($execute,MYSQLI_ASSOC);
    print_r($result2);

    // 10 fetch and return both
    echo "<h3>return both array</h3>";
    $result3 = mysqli_fetch_array($execute,MYSQLI_BOTH);
    print_r($result3);

    // 11 fetch and return Object
    echo "<h3>return object</h3>";
    $result4 = $execute->fetch_object();
    print_r($result4);





} catch (Exception $ex) {
    echo "Connection Failed: " . $ex->getMessage();
}








?>