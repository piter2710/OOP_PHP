<?php
abstract class Shape{
    protected $color ='';
    abstract function calculateArea();
    public function getColor(){
        return $this->color;
    }
}
class Circle extends Shape{
public $radius;

    function __construct($color, $radius){
        $this->color = $color;
        $this->radius = $radius;
    }
    function calculateArea(){
        return 3.14 * $this->radius * $this->radius;
}

}
class Rectangle extends Shape{
    public $lenght;
    public $breath;
    function __construct($color, $lenght, $breath)
    {   $this->color = $color;
        $this->lenght = $lenght;
        $this->breath = $breath;
    }

    function calculateArea(){
        return $this->lenght * $this->breath;
}
}


$rec = new Rectangle("red", 10, 5);
echo $rec->getColor() . ' ';
echo $rec->calculateArea();
echo "\n================================ \n";
$crc = new Circle("blue", 10);
echo $crc->getColor() . ' ';
echo $crc->calculateArea();


?>