<?php
// ?nm=raj&age=22 - QUERY STRING
// print_r($_GET); 

// print "GET DATA - use when  the data is comming from  get method<BR>";
// print_r($_GET);
//$nm = strtoupper($_GET['nm']);
//$age = $_GET['age'];

// print "<br>POST DATA - use when  the data is comming from  post method<BR>";
// print_r($_POST);
// $nm = strtoupper($_POST['nm']);
// $age = $_POST['age'];

// extract- takes array key and make it $variable and put value in it
extract($_POST); //key=nm, key=age , value=raj, value=12 (final output: $nm = raj, $age =12)

// print "<br>REQUEST DATA - use when  the data is comming from  manuall query string injection<BR>";
// print_r($_REQUEST);
// $nm = strtoupper($_REQUEST['nm']);
// $age = $_REQUEST['age'];
// $x = $_REQUEST['x'];

echo "hello <b>$nm</b> your age is $age";
