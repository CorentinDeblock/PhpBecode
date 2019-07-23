<?php
@include("../dependance/framework.php");

for($i = 1; $i <= 12;$i++){
    $acMonth = strftime("%B",mktime(0,0,0,$i + 1,0,1900));
    $option = new Element("option",$acMonth);
    $option->addAttribute("value",$i + 1);
    if($i == date("m",time())){
        $option->addAttribute("selected","");
    }
    echo $option->getFullContent();
}
?>