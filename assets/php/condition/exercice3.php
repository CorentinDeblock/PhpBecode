<?php
$age = 10;
$genre = "Homme";

if($age >= 18 && $genre == "Homme"){
    echo "Vous êtes un homme et vous êtes majeur";
}else if($age < 18 && $genre == "Homme"){
    echo "Vous êtes un homme et vous êtes mineur";
}else if($age >= 18 && $genre == "Femme"){
    echo "Vous êtes une femme et vous êtes majeur";
}else if($age < 18 && $genre == "Femme"){
    echo "Vous êtes une femme et vous êtes mineur";
}

?>