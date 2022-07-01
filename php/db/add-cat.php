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
                Add Category
            </h2>
        </div>
        <div class="card w-50 mx-auto p-5 shadow">
        <form action="adding-cat.php" method="post">
            <div class="form-group mb-2">
                <label>Name:</label>
                <input type="text" class="form-control" name="nm" placeholder="Enter Category Name" 
                >
            </div>
            <div class="form-group mb-2">
            <label>isActive:</label>
                <div class="custom-control custom-radio">
                <input type="radio" value="y"  name="isActive" class="custom-control-input">
                <label class="custom-control-label">Yes</label>
                </div>
                <div class="custom-control custom-radio">
                <input type="radio" value="n" checked="checked" name="isActive" class="custom-control-input">
                <label class="custom-control-label">No</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary float-end">Add</button>
        </form>
        </div>
    </div>
</body>
</html>