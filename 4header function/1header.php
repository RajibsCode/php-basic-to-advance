<?php

// header function for page redirect
// header("Location: index2.php");


// redirect after 5 second
header("Refresh:30, url = index2.php");

// cache control by header();
header("Expire: Fri, 28 July 2023 02:50:00 GMT");
header("cache-control: no-cache");// for upper http version
header("pragma: no-cache");// for lower http version

echo "<pre>";
print_r(headers_list());

/*
// fource for download any file
header("content-type: application/txt");
header("content-Disposition: attachment; filename = rajib.txt");// set filename
readfile("hi.txt");// downloadable file name
*/

echo "<h1>this is homepage</h1>";

?>