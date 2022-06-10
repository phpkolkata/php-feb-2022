<?php
if(isset($_REQUEST['msg']))
print"<div style='color:red'>$_REQUEST[msg]</div>";
?>


<form action="login-check.php" method="post">
user:<input type="text" name="user"><br>
pass:<input type="password" name="pass"><br>

<button>Login</button>
</form>