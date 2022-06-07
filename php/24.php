<?php

print "<pre>";
print_r($_FILES);

// echo $_FILES['im']['name']; //name of the file

extract($_FILES['im']);
// echo $name, $type, $error, $tmp_name, $size;

$id = rand(0,99999); // in future we use user id from db
$name = $id."-".$name;

if($error == 0){
    if($type == "image/png" || $type=="image/jpg" || $type=="image/gif" || $type || "image/jpeg"){
        // next if for size check
        // copy(source, destination along with file name)
        copy($tmp_name, "uploads/".$name);
    }
    else{
        die("Wrong Format");
    }
}
else{
    die("error uploading file.");
}





