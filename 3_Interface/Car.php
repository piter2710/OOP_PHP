<?php
interface Car{
    public function applyBreak();
    public function increaseSpeed($value);
    public function decreaseSpeed($value);
}
class SportsCar implements Car{

    public $speed;
    public $break;
    
    function __construct($speed, $break){
        $this->speed = $speed;
        $this->break = $break;
    }
    public function applyBreak(){
        echo "Applying break\n";
        $this->break = true;
    }
    public function increaseSpeed($value)
    {   echo "Increasing speed by ". $value. "\n";
        $this->speed+=$value;
    }
    public function decreaseSpeed($value){
        echo "Decreasing speed\n";
        $this->speed-=$value;
    }
    public function display(){
        echo "SPEED : ". $this->speed. " BREAK : ";
        ECHO $this->break ? "Applied " : "Not applied" ."\n";
    }

}

$car1 = new SportsCar(100, false);
$car1->display();
$car1->applyBreak();
$car1->increaseSpeed(10);
$car1->display();
$car1->decreaseSpeed(25);
$car1->display();

?>