<?php
@include("assets/php/bonus/controleur/globale.php");

function createAnimal() {
    (isset($_SESSION["animal"]) ? extractAnimal($_SESSION["animal"]) : animalNotFind())->render();
}
?>