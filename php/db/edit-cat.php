<?php
require('includes/conn.php');
$id = $_REQUEST['id'];
$sql = "SELECT * FROM `category` WHERE `id`='$id'";
$res = mysqli_query($con, $sql) or die("error");
$row = mysqli_fetch_assoc($res);
extract($row); // $id,$name,$is_active

// turnary operator
// echo ($y == 10)? 'hi' : 'bye';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    require('includes/head.php');
    ?>
</head>
<body>
    <div class="container">
        
        <div class="card w-50 mx-auto border-0">
            <h2>
                Edit Category
            </h2>
        </div>
        <div class="card w-50 mx-auto p-5 shadow">
        <form action="updating-cat.php" method="post">

        <!-- hidden -->
        <input type="hidden" name="cid" value="<?php echo $id ?>">
        
            <div class="form-group mb-2">
                <label>Name:</label>
                <input type="text" class="form-control" name="nm" placeholder="Enter Category Name" value="<?php echo $name ?>">
            </div>
            <div class="form-group mb-2">
            <label>isActive:</label>
                <div class="custom-control custom-radio">
                <input type="radio" value="y"  name="isActive" class="custom-control-input" 
                <?php echo ($is_active == 'y') ? "checked='checked'" : "" ?>>
                <label class="custom-control-label">Yes</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" value="n" name="isActive" class="custom-control-input" 
                <?php echo ($is_active == 'n') ? "checked='checked'" : "" ?>>
                <label class="custom-control-label">No</label>
                </div>
            </div>
            <button type="submit" class="btn btn-success float-end">Update</button>
        </form>
        </div>
    </div>
</body>
</html>