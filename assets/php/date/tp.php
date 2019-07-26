<?php 
@include("../dependance/framework.php");
setlocale(LC_ALL,"fr_FR");

$dayWeek = array();
$month = date("m",time())  + 1;

$actualDay = date("d",time());

function getTime($month,$year){
    return strftime("%B %G",mktime(0,0,0,$month,0,$year));
}

if(isDefined($_POST,"month")){
    $month = $_POST["month"];
}
$yearVal = date("Y",time());
if(isDefined($_POST,"year"))
    $yearVal = $_POST["year"];

$year = getTime($month,$yearVal);
$dayInMonth = date("t",mktime(0,0,0,$month - 1,1,intval($year)));

$indexWeek = 0;
$start = false;

$table = new Element("table","",true);
$caption = new Element("caption",$year);
$thead = new Element("thead","",true);
$tbody = new Element("tbody","",true);

$table->addContent($caption->getFullContent());

$lastDay = strftime("%A",mktime(0,0,0,$month - 1,$dayInMonth,$yearVal));
$firstDay = strftime("%A",mktime(0,0,0,$month - 1,1,$yearVal));

for($i = 6; $i < 6 + 7; $i++)
    array_push($dayWeek,strftime("%A",mktime(0,0,0,0,$i,0)));
for($i = 0; $i < count($dayWeek);$i++)
    $thead->addContent(createElement("th",$dayWeek[$i]));

$table->addContent($thead->getFullContent());
$starter = 0;
$tr = new Element("tr","",true);
$counterStart = false;
$counterWeek = 0;
$addLine = 0;


if($dayWeek[count($dayWeek) - 1] == $firstDay){
    $addLine += 1;
}

for($i = 0; $i < 7*(5 + $addLine);$i++){
    if($i % 7 == 0 && $i != 0){
        $tbody->addContent($tr->getFullContent());
        $tr->setContent("");
        $jumper = 0;
    }
    if($i < 7){ 
        if($firstDay == $dayWeek[$i]){
            $start = true;
        }
    }

    if($dayInMonth == $starter)
        $start = false;
    else
        $indexWeek++;
    
    if($start){
        $starter++;
        $td = new Element("td",$starter);
        if($starter == $actualDay)
            $td->addAttribute("class","select");
        $tr->addContent($td->getFullContent());
    }
    else
        $tr->addContent(createElement("td",""));
}

$tbody->addContent($tr->getFullContent());
$tr->setContent("");

$table->addContent($tbody->getFullContent());
$table->addAttribute("id","tp-content");
echo $table->getFullContent();
?>