<?php
require('includes/conn.php');

$sql = "SELECT *, `p`.`name` AS `pname`, `c`.`name` AS `cname` FROM `product` AS `p`,`category` AS `c` WHERE `c`.`id`=`p`.`cat_id`";
$res = mysqli_query($con, $sql);

while($row = mysqli_fetch_assoc($res)){
    print "Category Name ". $row['cname']."<br>";
    print "Product Name ". $row['pname']."<br>";
}