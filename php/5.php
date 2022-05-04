<?php
// condition
// less than 2 -> infant
// 3-4 -> todler
// 5-12 -> kid
// 13-19 -> teenager
// 20 above -> mature

$age = 13;

// if($age >= 20){
//     echo "you are an adult";
// }

// 1. single condition
// if($age >= 20){
//     echo "adult";
// }

// //  2. double condtion
// if($age >= 20){
//     echo "adult";
// }
// else{
//     echo "kid";
// }

// 3. multiple condition
if($age <= 2){
    echo "infant";
}
elseif($age <= 4){
    echo "todler";
}
elseif($age <= 12){
    echo "kid";
}
elseif($age <= 19){
    echo "teen ager";
}
else{
    echo "mature enough";
}