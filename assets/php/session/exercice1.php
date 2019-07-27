<?php
$proxy = $_SERVER["HTTP_X_FORWARDED_FOR"];
$userAgent = $_SERVER['HTTP_USER_AGENT'];

echo "User agent : ".$userAgent."<br><br>";
if($proxy)
    echo "proxy : ".$proxy;
echo "ip : ".$_SERVER["REMOTE_ADDR"]."<br><br>";
echo "Nom du serveur : ".$_SERVER["SERVER_NAME"];
?>