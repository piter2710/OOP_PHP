<?php
class Student{
    public $name;
    public $class;
    
    function setName($name){
        $this->name = $name;
    }
    function setClass($class){
        $this->class = $class;
    }
    
    function display(){
        echo "NAME : " . $this->name." CLASS : ".$this->class;
    }


}

$Andrzej = new Student();

$Andrzej->setName("Andrzej");
$Andrzej->setClass("1A");
$Andrzej->display();

?>