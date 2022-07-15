<?php
// phpinfo();
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
    <div class="row">
        <div class="col-12">
            <div class="mx-auto w-50 border p-5 mt-5">
                <h1>Login:</h1>
            <form action="login-check.php" method="post">
                <div class="form-group mb-2">
                    <label>Email address</label>
                    <input type="email" class="form-control" name="email"   placeholder="Enter email">
                </div>
                <div class="form-group mb-2">
                    <label >Password</label>
                    <input type="password" class="form-control" name="pass"  placeholder="Password">
                </div>
                
                <button type="submit" class="btn btn-primary">Login</button>
             </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>