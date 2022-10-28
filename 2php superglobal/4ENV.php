

<?php

echo "<pre>";
print_r(getenv());

// 1st way of set and get env
putenv("username=mushfiq");
print_r(getenv('username'));

echo "<br>";
// 2nd way of set and get env
$_ENV['gender'] = 'male';
print_r($_ENV);


?>