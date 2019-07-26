<?php
@include("../dependance/framework.php");

echo createElement("h1",(isset($_POST["nom"]) ? $_POST["nom"] : "name"));
echo createElement("h2",(isset($_POST["prenom"]) ? $_POST["prenom"] : "prenom"));
?>