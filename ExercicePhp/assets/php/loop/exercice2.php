<?php
$myVar1 = 0;
$myVar2 = rand(1,100);

while($myVar1 <= 20){
    $myVar1 *= $myVar2;
    echo $myVar1 ."<br>";
    $myVar1++;
}
?>