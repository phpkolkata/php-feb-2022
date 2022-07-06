<?php
session_start();
require "includes/conn.php";
extract($_POST);

if(!isset($_POST['email'])){
    header("location:index.php?msg=wrong attempt");
    die();
}


$pass = md5($pass);
$sql = "SELECT * FROM admin WHERE `email`='$email' AND `pass`='$pass'";
$res = mysqli_query($con, $sql);
$tot = mysqli_num_rows($res);


// if user/pass is correct, we will found 1 record
if($tot){
    $row = mysqli_fetch_assoc($res);
    $_SESSION['login_id'] = $row['id'];
    $_SESSION['login_name'] = $row['name'];

    header("location:category.php?msg=welcome");die;
}
else{
    // worng login
    header("location:index.php?msg=wronggg user/password");die;
}
