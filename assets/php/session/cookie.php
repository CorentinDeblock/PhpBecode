<?php 
setcookie("username",$_POST["username"],time() + mktime(0,5,0,0,0,0));
setcookie("password",$_POST["password"],time() + mktime(0,5,0,0,0,0));
header('Location: ../../../index.php#cookie-redirect?validate=true');
?>