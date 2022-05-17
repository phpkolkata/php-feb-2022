<?php

// function add($v1,$v2){
//    return $v1 + $v2;
// }

// function sub($v1,$v2){
//    return $v1 - $v2;
// }

// function mul($v1,$v2){
//    return $v1 * $v2;
// }

// function div($v1,$v2){
//    return $v1 / $v2;
// }

function calc($v1,$v2,$act="add"){
    if($act == "+" || $act == "add"){
        return $v1 + $v2;
    }
    else if($act == "-" || $act == "sub"){
        return $v1 - $v2;
    }
    else if($act == "*" || $act == "mul"){
        return $v1 * $v2;
    }
    else if($act == "/" || $act == "div"){
        return $v1 / $v2;
    }
    else{
        return "wrong inputs";
    }
}

