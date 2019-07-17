<?php
function displayPerson($lastName,$FirstName,$age){
    return "Bonjour ".$lastName." ".$FirstName.", tu as ".$age." ans";
}

echo displayPerson("Deblock","Corentin",21);
?>