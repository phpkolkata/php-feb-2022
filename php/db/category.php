<?php   
require("includes/tpl/header.php");
require("includes/tpl/nav.php");

// search code
$where ="";
$srch = "";
if(isset($_GET['srch'])){
    $srch = $_GET['srch'];
    $where = "WHERE `name` like '%$srch%'";
    // print $where;
}

// count total records from table
$sql = "SELECT * FROM `category` $where";
$res = mysqli_query($con,$sql) or die("error sql 1 --> ". mysqli_error($con));
$tot = mysqli_num_rows($res);

$limit = 2;
$pages = ceil($tot / $limit);

$start=0;
if(isset($_REQUEST['p']))
{
    $start = ($_REQUEST['p'] - 1) * $limit;
}


// table and column name in sql query will be wrapped using (back tick) ``
// and , value will be wrapped using (single quotation sign) ''
$sql = "SELECT * FROM `category` $where LIMIT $start,$limit";
$res = mysqli_query($con,$sql) or die("error sql 1 --> ". mysqli_error($con));

// alert message
if(isset($_REQUEST['msg'])){
    print"
    <div class='alert alert-success' role='alert'>".
        strtoupper($_REQUEST['msg'])
    ."</div>";
    ?>
    <script>
        hideAlert();
    </script>
    <?php
}


// print"<a href='add-cat'>Add more...</a><br>";
print"<div class='container mt-3'>";
print"<div class='float-end'>
<a href='category.php'>Show All</a>
<form action='' method='get'>
<input type='text'name='srch' placeholder='type something to search'>
<button>Search</button>
</form></div>";
print"<div><a href='add-cat.php'>Add More Category...</a></div>";

print "<table class='table table-striped'>";
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
while($row = mysqli_fetch_assoc($res)){
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

print"<div align='center'>";
for($i=1;$i<=$pages;$i++){
    print"<a href='?p=$i&srch=$srch'>$i</a> | ";
}
print"</div>";



print "</div>";



require("includes/tpl/footer.php");

?>

