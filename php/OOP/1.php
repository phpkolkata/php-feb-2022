<?php
require ("Greet2.class.php");

$greet = new Greet2();
$greet2 = new Greet2();

$greet->name = "suman"; // outside of class
$greet->hi();
// $greet->hello();
$greet->greet();
$greet->bye();

// $greet2->name = "Prakash";
$greet2->hi();
// $greet2->hello();
$greet2->bye();


