<?php 
class Car{
    public $color;
    public $weight;
    public function __construct($color, $weight){
        $this->color = $color;
        $this->weight = $weight;
    }
    function Show(){
        echo "Color of this car and weight of this car are: " . PHP_EOL;
        echo $this->color." ".$this->weight;
    }

}
$car = new Car('red', 100);
$car->Show();