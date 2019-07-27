<?php
@include("../dependance/framework.php");
if($_POST["calcul"]){
    echo eval("return ".$_POST["calcul"].";");
}else{
    $arr = [
        '1','2','3','+'
        ,'4','5','6','-'
        ,'7','8','9','*'
        ,'=','0','.','/'];

    $div = new Element("div","",true);
    $div->addAttribute("class","row px-5 pb-5 pt-2");
    $div->addAttribute("id","calculatrice");
    for($i = 0; $i < (count($arr) / 4)*4;$i++){
        $div->addContent(createElement("button",$arr[$i],"btn btn-light p-3 col-3"));
    }
    $div->render();
}
?>