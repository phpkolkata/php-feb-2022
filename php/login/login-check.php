<?php
session_start();
extract($_POST);

if($user == "test" && $pass== "test"){
    // login true
    $_SESSION['login'] = true;
    header("location:home.php?msg=welcome");
}
else{
    // worng login
    header("location:index.php?msg=wrong user/password");
}
