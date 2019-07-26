<?php
@include("assets/dependance/framework.php");

$file = 'assets/php/bonus/file.txt';

if(file_exists($file)){
    $fileOpen = fopen($file,"r");

    echo createElement("h3","File info");

    echo createElement('p',"path = $file");
    echo createElement('p',"filename = ".basename($file));

    echo createElement('h3',"Content");

    echo fgets($fileOpen);

    echo createElement('h3',"Permission");

    if(is_writable($file)) 
        echo createElement('p',"File is writable");
    if(is_readable($file))
        echo createElement('p',"File is readable");
    if(is_executable($file))
        echo createElement('p',"File is executable");
}
else
    echo "File dosen't exist";
?>