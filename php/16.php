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


// loop through an array
$week = array("sun", "mon", "tue", "wed", "thu","fri");

// echo $week[0];
// echo $week[1];
// echo $week[2];
// echo $week[3];

// for($i=0;$i<=3;$i++){
//     // echo $i;
//     echo $week[$i]."<br>";
// }

// die(count($week)."test");

// for($i=0;$i<count($week);$i++){
//     echo $week[$i]."<br>";
// }

// for($i=0;$i<5;$i++){
//     echo $i,"<br>";
// }

// print"
// <select>
// <option>$week[0]</option>
// <option>$week[1]</option>
// <option>$week[2]</option>
// <option>$week[3]</option>
// <option>$week[4]</option>
// <option>$week[5]</option>
// </select>
// ";


print "<select>";
for($i=0;$i<count($week);$i++){
    echo "<option>$week[$i]</option>";
}
print "</select>";

// echo $week[6];

// foreach loop - specially for array looping
// $week - array source
// $v - temp var, user defined
foreach($week as $v){
    echo $v."<br>";
}


// foreach with key=>value
foreach($week as $k=>$v){
    echo $k."=".$v."<br>";
}