<?php
require('includes/session_security.php');
require('includes/conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <?php
    require('includes/head.php');
    ?>

    <script>
        function confirmDelete(url){
            const res = confirm("Are you sure, want to delete this record?");
            if(res){
                window.location.href = url;
                // alert(url);
            }
            
        }

        function hideAlert(){
            setTimeout(() => {
                // $(".alert")
                const alert = document.querySelector(".alert");
                alert.style.display = 'none';
            }, 2000);
        }
    </script>
</head>
<body>
<?php   
// count total records from table
$sql = "SELECT * FROM `category`";
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
$sql = "SELECT * FROM `category` LIMIT $start,$limit";
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
print"<div class='container'>";
print"<div class='float-end'><a href='logout.php'>logout</a></div>";
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
    print"<a href='?p=$i'>$i</a> | ";
}
print"</div>";



print "</div>";
?>
</body>
</html>