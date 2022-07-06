<?php
session_start();
if(!$_SESSION['login_id']){
    header("location:index.php?msg=wrong attempt, please try login.");
    die;
}