<?php
require('includes/conn.php');

// print_r($_POST);
extract($_POST);

$sql = "UPDATE `category` set `name`='$nm', `is_active`='$isActive' where `id`='$cid'";
$res = mysqli_query($con,$sql) or die("error 1- ".mysqli_error($con));

header("location:category.php?msg=Record updated successfully!");