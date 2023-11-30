<?php
abstract class Car{
    abstract function applyBreak();
    function Driving(){
        echo "I am Driving\n";
    }
}
class SportsCar extends Car{
    function applyBreak(){
        echo "Applying break\n";
    }
    
}
$car = new SportsCar();
$car->Driving();
$car->applyBreak();
