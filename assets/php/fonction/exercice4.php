<?php
function takeNumber($num1,$num2){
    if($num1 > $num2){
        return "Le premier nombre est plus grand";
    }else if($num < $num2){
        return "Le premier nombre est plus petit";
    }
    return "Les nombres sont egaux";
}

echo takeNumber(1,4);
?>