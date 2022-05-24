<?php
// Topic: Associative Array

// -: same as numeric array, but the key will user defined 
// -: ["name"=>"raj]  name is the key, which is defined by user


// reusable function
function dd($arr){
    print "<pre>";
    print_r($arr);
    die;
}

// $arr = array("raj", 22); // numeric array

//METHOD 1: standard way of creating associative array
$std = array("name"=>"raj", "age"=> 22); // associative array
// dd($std);

// improvise 1
// echo $std['name'];
// echo $std['age'];

// improvise 2
// $name = strtoupper($std['name']);
// $age = $std['age'];

// improvise 3
extract($std);
$name = strtoupper($name);

// echo "Hello ".strtoupper($std['name']).", your age is $std[age]";
// echo "Hello $std[name], your age is $std[age]";
echo "Hello $name, your age is $age";


// METHOD 2: array creation using key
$std2['name'] = "suman";
$std2['age'] = 33;

dd($std2);

// looping associative array
$arr = array("name"=>"raj", "age"=>22);

foreach($arr as $k=>$v){
    echo $k."-".$v."<br>";
}