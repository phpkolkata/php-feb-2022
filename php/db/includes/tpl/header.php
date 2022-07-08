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
<table width="100%" height="600px" class="table-bordered">
      <tr>
        <td colspan="2" height="100px" valign="middle">
          <div style="float: left; width: 500px; border: 0px solid #f00">
            <h1><i>Welcome Admin</i></h1>
          </div>
          <div
            style="
              float: right;
              border: 0px solid #f00;
              margin-top: 30px;
              margin-right: 10px;
            "
          >
            <a href="logout.php">logout</a>
          </div>
        </td>
      </tr>