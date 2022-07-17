<?php
require ("Greet.class.php");

class Greet2 extends Greet{

    public static $friend = "suman";

    function bye(){
        $this->age = 44;
        print "bye ". $this->name. "age is ".$this->age; // in child class
        print "<br>";
    }

    function greet(){
        $this->hi();
    }
    
    function display(){
        echo $this->private."<br>";
        echo $this->protected."<br>";
        echo $this->public."<br>";
    }

    // same function as paraent class with same args, called method overridding
    function hello(){
        echo "hey helloooo ".$this->name;
        echo "collage ".parent::$collage; // accessing static property of the parent class
        // echo "collage ".Greet::$collage; // accessing static property of the parent class
        echo self::$friend;

    }


  
}