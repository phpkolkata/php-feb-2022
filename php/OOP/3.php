<?php 
require ('DB.class.php');
$db = new DB();
// $conn = $db->connect();
// $db->connect();

 $res = $db->sql("select * from category");
 
 print "<table border='1' class='table table-striped'>";
print "
    <tr>
        <th>SL.</th>
        <th>ID</th>
        <th>Name</th>
        <th>isActive</th>
        <th>Options</th>
    </tr>
    ";
    $i =0;
foreach($res as $row){
    $i++;
    print "
    <tr>
        <td>$i</td>
        <td>$row[id]</td>
        <td>$row[name]</td>
        <td>$row[is_active]</td>
        <td>
            <a href='#' onclick=\"confirmDelete('del-cat.php?id=$row[id]')\" style='text-decoration:none'> <i class='bi bi-trash-fill text-danger'> </i> </a> 
            <a href='edit-cat.php?id=$row[id]' style='text-decoration:none'> <i class='bi bi-pencil-square text-warning'> </i></a>
        </td>
    </tr>
    ";
}
print "</table>";