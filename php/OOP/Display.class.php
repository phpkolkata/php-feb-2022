<?php
class Display{

    // public, private, protected

    public $name = "raj"; 
    protected $age = 20;

  
    function hi(){
        print "hi ".$this->name. "age is ".$this->age; //within the class
        print "<br>";
    }

    function hello(){
        print "hello ".$this->name. "age is ".$this->age;;
        print "<br>";
    }

  
}