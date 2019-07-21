<?php
function getParam($param){
    $str = "";

    for($i = 0; $i < count($param);$i++){
        if($_GET[$param[$i]]){
            $copy = $str;
            $str = $copy.$param[$i].": ".$_GET[$param[$i]]."<br>";
        }else{
            $copy = $str;
            $str = $copy."Le paramètre ".$param[$i]." n'a pas été trouvé.<br>";
        }
    }
    return $str;
} 
echo getParam(array("nom","prenom","age","dateDebut","dateFin","langage","serveur","semaine","batiment","salle"));
?>