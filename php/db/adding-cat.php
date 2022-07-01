<?php
require('includes/conn.php');

// print_r($_POST);
extract($_POST);

$sql = "INSERT INTO `category` value(NULL,'$nm', '$isActive')";
$res = mysqli_query($con,$sql) or die("error 1- ".mysqli_error($con));

header("location:category.php?msg=Record added successfully!");