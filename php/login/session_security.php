<?php
session_start();
if(!$_SESSION['login']){
    header("location:index.php?msg=wrong attempt, please try login.");
    die;
}