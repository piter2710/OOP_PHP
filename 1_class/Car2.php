<?php
class Car{
    private $name;
    private $speed;
    private $color;

    function setName($name){
        $this->name = $name;
    }
    function setSpeed($speed){
        $this->speed = $speed;
    }
    function setColor($color){
        $this->color = $color;
    }
    function getName(){
        return $this->name;
    }
    function getSpeed(){
        return $this->speed;
    }
    function getColor(){
        return $this->color;
    }
    function display(){
        echo "Name : ". $this->name. " Speed : ". $this->speed. " Color : ". $this->color;
    }
    function IncreaseSpeed($extra){
        $this->speed += $extra;
    }
    function DecreaseSpeed($extra){
        $this->speed -= $extra;
    }

}
$Volvo = new Car();
$Volvo->setName("Volvo");
$Volvo->setSpeed(100);
$Volvo->setColor("Blue");
$Volvo->display();

?>