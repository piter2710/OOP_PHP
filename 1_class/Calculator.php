<?php
class Calculator{
    public $a;
    public $b;
    public $result;
    
    function setA($a){
    $this->a = $a;
    }
    function setB($b){
    $this->b = $b;
    }
    function getA(){
        return $this->a;
    }
    function getB(){
        return $this->b;
    }
    function add(){
        $this->result = $this->a + $this->b;
    }
    function getResults(){
        echo "The result is : ". $this->result;
    }
}

$operation1 = new Calculator();
$operation1->setA(10);
$operation1->setB(20);
$operation1->add();
$operation1->getResults();
$liczba1 = $operation1->getA();
$liczba2 = $operation1->getB();
$Odejmowanie = $liczba1 - $liczba2;
echo "Wynik odejmowania to: " . $Odejmowanie;

?>