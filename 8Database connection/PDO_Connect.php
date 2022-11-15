<?php

$server_name = 'localhost';
$username = 'root';
$password = '';
$database = 'demo_user';


try {
    // 1 PDO database connection 
    $con = new PDO("mysql:host=$server_name;dbname=$database",$username,$password);
    // 2 PDO attribute set must for case of data
    $con->setAttribute(PDO::ATTR_CASE,PDO::CASE_NATURAL);
    echo "connection successful";

    // 3 query making and excute in PDO
    $sql = "SELECT * FROM user";
    $execute = $con->prepare($sql);// prepare for query fire
    $execute->execute();// execute that by execute()

    // // 4 fetch index array with PDO
    echo "<pre>";
    echo "<h4>return index array</h4>";
    $result = $execute->fetch(PDO::FETCH_NUM);
    print_r($result);

    // 5 fetch associative array with PDO
    echo "<h4>return associative array</h4>";
    $result2 = $execute->fetch(PDO::FETCH_ASSOC);
    print_r($result2);

    // 6 fetch both array with PDO
    echo "<h4>return both array</h4>";
    $result3 = $execute->fetch(PDO::FETCH_BOTH);
    print_r($result3);
    
    // 7 fetch object
    echo "<h4>return object</h4>";
    $result4 = $execute->fetch(PDO::FETCH_OBJ);
    print_r($result4);
    


} catch(PDOException $ex){
    echo "connection error" . $ex->getMessage();
}



?>