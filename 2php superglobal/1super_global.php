<?php


$fname = "Rajib";
$lname = "Sarder";

function fullName(){
    // declare super global variable 
    $GLOBALS['full_name'] = $GLOBALS['fname'].' '.$GLOBALS['lname'];
}

fullName();
echo $full_name;

?>