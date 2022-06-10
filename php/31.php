<?php
session_start();
echo $_SESSION['name'];
echo $_SESSION['age'];
?>

<a href="logout.php">logout</a>