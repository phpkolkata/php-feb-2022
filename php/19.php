<?php
// Topic: Array Task 1

// reusable function
function dd($arr, $die=true){
    print "<pre>";
    print_r($arr);
    if($die) die;
}

$p_22 = array("name"=> "raj", "age"=>12);
$a_22 = array("class"=>5, "sec"=>"B");
$roll_22 = array("personal"=>$p_22, "academic"=>$a_22);

$p_35 = array("name"=> "suman", "age"=>13);
$a_35 = array("class"=>5, "sec"=>"A");
$roll_35 = array("personal"=>$p_35, "academic"=>$a_35);

$std = array("22"=>$roll_22, "35"=>$roll_35);

// dd($std);

foreach($std as $k=>$v){
    echo "<h1>Roll:$k</h1>";
    // dd($v, false);
    foreach($v as $k2=>$v2){
        echo "<b>$k2</b>:<br>";
        // dd($v2, false);
        foreach($v2 as $k3=>$v3){
            echo "$k3 - $v3<br>";
        }
    }
}