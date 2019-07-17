<?php
$myVar = 100;
$myVar2 = rand(1,100);
$accumulator = 0;

while($myVar > 10){
    $accumulator = $myVar * $myVar2;
    echo $accumulator .", ";
    $myVar--;
}
?>