<?php
@include("element/header.php");

if(isset($_GET["animal"])){
    @include("animal/".$_GET["animal"].".php");
    createAnimal();
}
else 
    echo "Pas de paramètre animal";
?>