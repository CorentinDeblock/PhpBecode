<?php
function genderDef($gender,$age){
    if($age >= 18 && $gender == "Homme"){
        return "Vous êtes un homme et vous êtes majeur";
    }else if($age < 18 && $gender == "Homme"){
        return "Vous êtes un homme et vous êtes mineur";
    }else if($age >= 18 && $gender == "Femme"){
        return "Vous êtes une femme et vous êtes majeur";
    }
    return "Vous êtes une femme et vous êtes mineur";
}

echo genderDef("Homme",19);
?>