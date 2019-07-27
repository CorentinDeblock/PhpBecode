<?php
class Element {
    function __construct($element,$str,$container = false,$single = false){
        $this->content = $str;
        $this->element = $element;
        $this->attribute = "";
        $this->container = $container;
        $this->single = $single;
    }

    public function setContent($content){
        $this->content = $content;
    }

    public function render(){
        echo $this->getFullContent();
    }

    public function setElement($element){
        $this->element = $element;
    }

    public function getFullContent(){
        return '<'.$this->element.$this->attribute.(!$this->single ? '>'.
        ($this->container ? $this->content : $this->encoding($this->content)) 
        .'</'.$this->element.'>' : "/>");
    }

    public function addAttribute($attribute,$content){
        $this->attribute .= ' '.$attribute.($content != "" ? '="'.$content.'"' : "");
    }

    public function getContent() {
        return $this->content;
    }

    public function addContent($content) {
        $this->content .= $content;
    }

    private function encoding($content) {
        return htmlentities($content,ENT_HTML5 | ENT_QUOTES,"UTF-8",true);
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

function createElement($balise,$str,$class = ""){
    $element = new Element($balise,$str);
    ($class != "" ? $element->addAttribute("class",$class) : "");
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