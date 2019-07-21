<?php
@include("../dependance/framework.php");

for($i = 1990;$i < date("Y",time()) + 1;$i++){
    $option = new Element("option",$i);
    $option->addAttribute("value",$i);
    if($i == date("Y",time())){
        $option->addAttribute("selected","");
    }
    echo $option->getFullContent();
}
?>