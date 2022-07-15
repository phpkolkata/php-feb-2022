<?php
require ("Greet.class.php");

class Greet2 extends Greet{
    function bye(){
        print "bye ". $this->name; // in child class
        print "<br>";
    }

    function greet(){
        $this->hi();
    }
}