<?php
// start your session
session_start();

// show session id and name
echo session_id();
echo "<br>";
echo session_name();
echo "<br>";

// session save path
echo session_save_path();

// assign values in session
$_SESSION['car'] = "lamborgini";
$_SESSION['country'] = "Bangladesh";
$_SESSION['user_id'] = 98521;

// show session values on web browser
echo "<hr>";
echo "my favourite car is ".$_SESSION['car'];
echo "<br>";
echo "my country name is ".$_SESSION['country'];
echo "<br>";
echo "my user id is ".$_SESSION['user_id'];


echo "<hr>";
// check if sessions value is active or not
echo "<pre>";
print_r($_SESSION);

// destroy session with sesson_destroy() and then set session = null
session_destroy();
$_SESSION = []; // or use this $_SESSION = array();


echo "<hr>";
// check if sessions value is active or not
echo "<pre>";
print_r($_SESSION);

?>