<?php
require('conn.php');


// table and column name in sql query will be wrapped using (back tick) ``
// and , value will be wrapped using (single quotation sign) ''
$sql = "SELECT * FROM `category`";
$res = mysqli_query($con,$sql) or die("error sql 1 --> ". mysqli_error($con));

print"<a href='add-cat'>Add more...</a><br>";
print "<table border='1' width='300'>";
print "
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>isActive</th>
        <th>Options</th>
    </tr>
    ";
while($row = mysqli_fetch_assoc($res)){
    print "
    <tr>
        <td>$row[id]</td>
        <td>$row[name]</td>
        <td>$row[is_active]</td>
        <td><a href='del-cat.php?id=$row[id]'>del</a> / <a href='edit-cat'>edit</a></td>
    </tr>
    ";
}
print "</table>";