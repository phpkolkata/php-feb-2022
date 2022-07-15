<?php
class Greet{

    // public, private, protected

    var $name = "raj"; 

    function hi(){
        print "hi ".$this->name; //within the class
        print "<br>";
    }

    private function hello(){
        print "hello ".$this->name;
        print "<br>";
    }
}