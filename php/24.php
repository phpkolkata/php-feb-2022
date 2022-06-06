<?php

print "<pre>";
print_r($_FILES);

// echo $_FILES['im']['name']; //name of the file

extract($_FILES['im']);
// echo $name, $type, $tmp_name, $size;

// copy(source, destination along with file name)
copy($tmp_name, "uploads/".$name);