<?php
// Topic: Server/Global/pre-defined Variables

// -: all server vars are array
// -: they have specific strucute, starts with _ and all in caps
// -: handled by php (initialization, deinitialization)

// 1. $_GET // $get(x), $_get(x)
// 2. $_POST
// 3. $_REQUEST
// 4. $_FILES
// 5. $_SESSION
// 6. $_COOKIE
// 7. $_SERVER // all the time available or you can say initialized

// SERVER VAR : contains meta info about server, client and current file
print "<pre>";
print_r($_SERVER);