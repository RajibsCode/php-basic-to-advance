<?php


// show curent time zone
echo "default current timezone is ".date_default_timezone_get();
echo "<hr>";

// set current timezone
date_default_timezone_set('Asia/Dhaka');
echo "now current timezone is ".date_default_timezone_get();
echo "<hr>";

// time stamp in unix format
// mktime(hour,minute,second,month,day,year,is_dst)
echo mktime(25,36,50,26,14,2023);
echo "<br>";

// time stamp in regular format
echo date('Y-m-d',mktime(25,36,50,26,14,2023));
echo "<hr>";

// time parameters
echo "<h1>time parameters</h1>";
echo "current parameter is 'r' : " . date('r');//RFC formatted date
echo "<br> current parameter is 'a' : " . date('a');//lowercase am or pm
echo "<br> current parameter is 'A' : " . date('A');//uppercase AM or PM
echo "<br> current parameter is 'g' : " . date('g');//hour 12h format without 0
echo "<br> current parameter is 'G' : " . date('G');//hour 24h format without 0
echo "<br> current parameter is 'h' : " . date('h');//hour 12h format with 0
echo "<br> current parameter is 'H' : " . date('H');//hour 24h format with 0
echo "<br> current parameter is 'i' : " . date('i');//minute with 0
echo "<br> current parameter is 's' : " . date('s');// second with 0

// day parameters
echo "<h1>day parameters</h1>";
echo "current parameter is 'd' : " . date('d');// day with 0
echo "<br> current parameter is 'j' : " . date('j');//date without 0
echo "<br> current parameter is 'D' : " . date('D');// day name short
echo "<br> current parameter is 'l' : " . date('l');// day name full
echo "<br> current parameter is 'w' : " . date('w');//the day of week
echo "<br> current parameter is 'z' : " . date('z');//the day of year

// month parameters
echo "<h1>month parameters</h1>";
echo "current parameter is 'm' : " . date('m');// month with 0
echo "<br> current parameter is 'n' : " . date('n');//month without 0
echo "<br> current parameter is 'M' : " . date('M');// month short
echo "<br> current parameter is 'F' : " . date('F');// month full
echo "<br> current parameter is 't' : " . date('t');//total day of month

// year parameters
echo "<h1>year parameters</h1>";
echo "current parameter is 'L' : " . date('L');// if leap year or not
echo "<br> current parameter is 'Y' : " . date('Y');// year full
echo "<br> current parameter is 'y' : " . date('y');// year short


echo "<pre>";
// show all timezone together
print_r(DateTimeZone::listidentifiers());





?>