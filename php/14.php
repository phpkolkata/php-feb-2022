<?php

// wont stop compiler
// note:php error
// 1. notice (version conflicts) - .5%
// 2. warning (type conversion issue) -.5%

// 3. parse error (syntax error) - 98%
// --{{}
// --spelling mistakes
// --(()
// --""""
// --missing ;
// --variable without $ sign ex x = 10
// 4. fatal error (logical error) - 1%


// include - includes file, if not found, generates warning and continue
// require - includes file, if not found, generates fatal error and stops


// include "13.php"; // function file
require "13.php"; // function file

// echo "hi";

$tot = calc(304,49, "-");

echo $tot;






