<?php
setcookie("username",$_POST["username"]);
setcookie("password",$_POST["password"]);
header('Location: ../../../index.php#cookie-redirect');
?>