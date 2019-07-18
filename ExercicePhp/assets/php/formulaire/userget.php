<?php
function getParam($param){
    for($i = 0; $i < count($param);$i++){
        if($_GET[$param[$i]]){
            echo $_GET[$param[$i]]."<br>";
        }else{
            echo $_GET[$param]." paramètre non trouvé";
        }
    }
} 

getParam(array("nom","prenom"));
?>