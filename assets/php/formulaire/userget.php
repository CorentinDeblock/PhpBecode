<?php
@include("../dependance/framework.php");

echo createElement("h1",(isset($_GET["nom"]) ? $_GET["nom"] : "name"));
echo createElement("h2",(isset($_GET["prenom"]) ? $_GET["prenom"] : "prenom"));

?>