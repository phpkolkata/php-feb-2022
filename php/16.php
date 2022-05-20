<?php
// Topic: most important topic in PHP - ARRAY

// note: 3 Types of Array in PHP
// -: Numeric array
// -: Associative array
// -: Multi-diamentional array


// Numeric Array:

// method 1: array creating using array function
$arr = array(10,20, 30,"a","b","c");
echo $arr[1];

// debug array - strictly for debugging
print "<br>";
print "<pre>";
print_r($arr);
//--------------------------------------------------------------

// method 2: array creation direct with keys
$x[0] = 10;
$x[1] = "a";
$x[2] = "true";
$x[100] = "b";
$x[3] = "c";

// debug array - strictly for debugging
print "<br>";
print "<pre>";
print_r($x);
//--------------------------------------------------------------

// method 3: array creation direct without keys
$y[] = 10;
$y[] = 20;
$y[] = 30;
$y[100] = 40;
$y[] = 50;
$y[105] = 60;
$y[] = 80;
$y[3] = 70;
$y[] = 90;

// debug array - strictly for debugging
print "<br>";
print "<pre>";
print_r($y);