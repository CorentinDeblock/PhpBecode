<?php
function getParam($param){
    for($i = 0; $i < count($param);$i++){
        if($_POST[$param[$i]]){
            echo $_POST[$param[$i]]."<br>";
        }else{
            echo $_POST[$param]." paramètre non trouvé";
        }
    }
} 

getParam(array("nom","prenom"));
?>