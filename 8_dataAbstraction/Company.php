<?php
abstract class Company{

    abstract function setName($name);
    abstract function getName();
    abstract function setExpert($subject);
}

class Empoyee extends Company{
    public $name;
    public $expert;
    function __construct($name, $expert)
    {
        $this->name = $name;
        $this->expert = $expert;
    }

    function setName($name){
        $this->name = $name;
    }
    function getName(){
        return $this->name;
    }
    function setExpert($subject){
        $this->expert = $subject;
    }
    function Display(){
    echo "Name: ". $this->name. PHP_EOL;
    echo "Expert: ". $this->expert. PHP_EOL;
    }
}


$emp = new Empoyee("John", "PHP");
$emp->Display();
$emp->setName("Jane");
$emp->setExpert("JavaScript");
echo "\n--------------------------------\n";
$emp->Display();

?>