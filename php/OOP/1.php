<?php
require ("Greet2.class.php");

$greet = new Greet2();
$greet2 = new Greet2();

// $greet2->age = 88;
$greet->name = "suman"; // outside of class
$greet->hi();
// $greet->hello();
$greet->greet();
$greet->bye();

// $greet2->name = "Prakash";
$greet2->hi();
// $greet2->hello();
$greet2->bye();
print "<hr>";
$greet2->display();
print "<hr>";

// echo $greet2->private;
// echo $greet2->protected;
// echo $greet2->public;

$greet2->hello();
print "<hr>";

// echo $greet2->collage;
echo Greet::$collage;

