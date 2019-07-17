<?php
$mois = ["janvier","février","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","décembre"];
echo $mois[2]."<br>";
echo $mois[5]."<br>";

$mois[7][2] = "û";

echo $mois[7];
?>