<?php
session_start();

$_SESSION['name'] = "raj";
$_SESSION['age'] = 22;

// echo session_save_path(); // path of session file