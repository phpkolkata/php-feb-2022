<?php
include "Display.class.php";

class Display2 extends Display{

    function abc(){
        echo "hi abc";
    }

    //abstract method from class Display
    function bye(){
        echo "bye";
    }
}