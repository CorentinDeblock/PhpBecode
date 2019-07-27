<?php 
@include("../dependance/framework.php");

function createConfigDiv() {
    $div = new Element("div","",true);
    $div->addAttribute("class","animal-content col-6 m-auto");
    return $div;
}

function createMainDiv() {
    $div = new Element("div","",true);
    $div->addAttribute("class","animal-content row");
    return $div;
}


function createConfigImage() {
    $img = new Element("img","",false,true);
    $img->addAttribute("class","img-animal rounded pt-2");
    return $img;
}

function extractAnimal($array,$class = "") {
    $div = createMainDiv();
    $img = createConfigImage();

    $div->addAttribute("class","row");

    $divChild = createConfigDiv();

    $divChild2 = createConfigDiv();

    $img->addAttribute("src",$array["profile"]);
    $img->addAttribute("alt","Une image de l'animal sa mer");

    $divChild->addContent(createElement("h4","Image : "));
    $divChild->addContent($img->getFullContent());
    $divChild2->addContent(createElement("h4","Description : ","pt-5"));
    $divChild2->addContent(createElement("p",$array["description"]));

    $div->addContent($divChild->getFullContent());
    $div->addContent($divChild2->getFullContent());

    ($class != "" ? $div->addAttribute("class",$class) : "");
    return $div;
}

function animalNotFind() {
    $div = createConfigDiv();
    $img = createConfigImage();
    $p = new Element("p","Aucun animal a été trouver :(",false);

    $img->addAttribute("src","assets/img/404Animal.png");
    $img->addAttribute("alt","Pas d'animal trouver :(");

    $div->addContent($img->getFullContent());
    $div->addContent($p->getFullContent());

    return $div;
}

?>