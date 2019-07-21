<?php
echo "Date souhaiter : ".date("d/m/y",mktime(0,0,0,5,16,2016))."<br>";
echo "Date actuelle : ".date("d/m/y",time()).'</br>';
echo "Jour d'interval : ".intval(((time()) - mktime(0,0,0,5,16,2016)) / 86400);
?>