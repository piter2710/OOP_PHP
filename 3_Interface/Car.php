<?php
require_once "CarModel.php";
interface Car{
    public function applyBreak();
    public function increaseSpeed($value);
    public function decreaseSpeed($value);
}
class SportsCar implements Car, CarModel{

    public $speed;
    public $break;
    public $model;
    function __construct($speed, $break, $model){
        $this->speed = $speed;
        $this->break = $break;
        $this->model = $model;
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
    public function getModel(){
    return $this->model;
    }
    public function setModel($model){
        $this->model = $model;
    }
}

$car1 = new SportsCar(100, false, "Mercedes");
$car1->display();
$car1->applyBreak();
$car1->increaseSpeed(10);
$car1->display();
$car1->decreaseSpeed(25);
$car1->display();

$car_model = $car1->getModel();
echo "\n\n";
echo " Model : ". $car_model;
$car1->setModel("BMW");
$car_model = $car1->getModel();
echo " Model : ". $car_model;

?>