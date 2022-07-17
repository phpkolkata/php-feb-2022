<?php
class Greet{
    public static $collage = "TD Collage";

    // public, private, protected

    public $name = "raj"; 
    protected $age = 20;

    private $private ="private";
    protected $protected = "protected";
    public $public = "public";

    function hi(){
        print "hi ".$this->name. "age is ".$this->age; //within the class
        print "<br>";
    }

     function hello(){
        print "hello ".$this->name. "age is ".$this->age;
        print "<br>";
    }

    // method overloading - same name of function with differnent "count of args" or "type of args"
//    function hello($nm){
//     echo "hello ". $nm;
//    }

  
}