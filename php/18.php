<?php
// Topic: Multidiamensional Array 

// reusable function
function dd($arr){
    print "<pre>";
    print_r($arr);
    die;
}

// approach 1
// $std = array("name"=>"raj", "age"=>22,"marks"=>array("eng"=>33,"math"=>55, "sci"=>44));


// approach 2
// $std['name'] = "raj";
// $std['age'] = 22;
// $std['marks']['eng'] = 33;
// $std['marks']['sci'] = 44;
// $std['marks']['math'] = 43;


// approach 3
$marks = array("eng"=>33,"math"=>55, "sci"=>44);
$std = array("name"=>"raj", "age"=>22,"marks"=>$marks);


// echo $std['marks']['math'];
// dd($std);

// foreach($std as $k=>$v){
//     if(is_array($v)){
//         echo "3rd";
//     }
//     else{
//         echo $k."-".$v."<br>";
//     }
// }

// $x = array("name"=>"raj");
// if(is_array($x)){
//     echo "array";
// }
// else{
//     echo "not array";
// }
// die;

// foreach($std as $v){
//     if(is_array($v)){
//         print_r($v);
//     }
//     else{
//         echo $v;
//     }
// }

foreach($std as $v){
    if(is_array($v)){
       foreach($v as $v2){
           echo $v2."<br>";
       }
    }
    else{
        echo $v."<br>";
    }
}