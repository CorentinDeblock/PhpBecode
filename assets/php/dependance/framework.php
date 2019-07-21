<?php
class Element {
    function __construct($element,$str,$container = false){
        $this->content = $str;
        $this->element = $element;
        $this->attribute = "";
        $this->container = $container;
    }

    public function setContent($content){
        $this->content = $content;
    }

    public function setElement($element){
        $this->element = $element;
    }

    public function getFullContent(){
        return '<'.$this->element.$this->attribute.'>'.($this->container ? $this->content : htmlentities($this->content,ENT_HTML5,"ISO-8859-1",true)).'</'.$this->element.'>';
    }

    public function addAttribute($attribute,$content){
        $this->attribute .= ' '.$attribute.($content != "" ? '='.htmlentities($content,ENT_HTML5,"ISO-8859-1",true) : "");
    }

    public function getContent() {
        return $this->content;
    }

    public function addContent($content) {
        $this->content .= $content;
    }

    public function getElement(){
        return $this->element;
    }

    public function setContainer($value){
        $this->container = $value;
    }

    private $attribute;
    private $content;
    private $element;
    private $container;
}

function createElement($balise,$str){
    $element = new Element($balise,$str);   
    return $element->getFullContent();
}

function isDefined($action,$value){
    if(isset($action[$value]))
        return true;
    return false;
}

function checkCookie($element,$cookie){
    if(isDefined($_COOKIE,$cookie))
        echo createElement($element,"$cookie : $_COOKIE[$cookie]");
    else
        echo createElement($element,"$cookie is not defined");
}
function dateFormater($dayFormat,$monthFormat,$yearFormat,$separator){
    echo date($dayFormat).$separator.date($monthFormat).$separator.date($yearFormat);
}
?>