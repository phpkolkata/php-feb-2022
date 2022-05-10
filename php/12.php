<?php

// case
// small case - hello world - string content
// upper case - HELLO WORLD - string content
// snake case - hello_world  - for variable declearation
// camel case - helloWorld  - for function name
// pascal case - HelloWorld - for class name

// Variable declearation style
// $username
// $user_name
// $userName


// Function declearation style
// username()
// user_name()
// userName()





// function atonomy

// 1. function name
// 2. function arguments / args / parameters / params
// 3. optional parameters
// 4. process / return 
// 5. return type


//  function name
//     1. use camel case
//     2. follow proper naming convension


// process function
    // function add($v1,$v2){
    //     $tot = $v1 + $v2;
    //     echo $tot;
    // }
    // add(20,30);


// return function
function add($v1,$v2){
    $tot = $v1 + $v2;
    return $tot; // return back to calling point
}
// echo add(20,30);
$tot = add(20,30); // $tot = 50
$avg = $tot / 2;
echo $avg;