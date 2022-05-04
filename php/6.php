<?php
// condition
// less than 2 -> infant
// 3-4 -> todler
// 5-12 -> kid
// 13-19 -> teenager
// 20 above -> mature

$age = 6;

if($age <= 2){
    echo "infant";
}
// Logical operator
// || - or
// && - and

if($age > 2 && $age <= 4){
 echo "todler";
}

if($age > 4 && $age <= 12 ){
    echo "kid";
}

if($age > 12 && $age <=19){
    echo "teen";
}

if($age > 19){
    echo "mature";
}

