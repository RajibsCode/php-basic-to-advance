<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Injection</title>
</head>
<body>
<?php

$servername = "localhost";
$username = "root";
$pass = "";
$database = "demo_user";

// 2 catch error by exception
mysqli_report(MYSQLI_REPORT_STRICT);

try {
    // 1 database connection
    $con = new mysqli($servername,$username,$pass,$database);
    // echo "connection succesful";
} catch (Exception $ex) {
    // 3 print the error message
    echo "Connection Failed: " . $ex->getMessage();
}


// 4 write query now 
    if (isset($_POST['login'])) {
         
        // 7 prevent SQL Injection with - mysqli_real_escape_string()
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $pass =  mysqli_real_escape_string($con, $_POST['password']);

        $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$pass'";
        $exec = $con->query($sql);
        // 5 test the query
        // echo "<pre>";
        // print_r($exec);

        // 6 set condition if user in table or not
        if($exec->num_rows > 0){
            $name = $exec->fetch_object()->username;
            echo "You are Logged in As " . $name;
        }else{
            echo "your username or password is incorrect";
        }

    }

?>
    
<h3>login here</h3>
<form action="" method="post">
<label for="email">enter your email:</label>
<input type="email" name="email" id="">
<label for="email">enter your password:</label>
<input type="text" name="password" id="">
<input type="submit" name="login" value="Login">
</form>


</body>
</html>