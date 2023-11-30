<?php
class Student{
    public $id;
    public $name;
    function __set ($name, $value){
        if ($name == 'id'){
            $this->id = $value;
        }
        if ($name == 'name'){
            $this->name = $value;
        }
    }
    function __get ($name){
        if ($name == 'id'){
            return $this->id;
        }
        if ($name == 'name'){
            return $this->name;
        }
    }
    function Display(){
        echo "ID: ". $this->id. PHP_EOL;
        echo "Name: ". $this->name. PHP_EOL;
    }
}

$student1 = new Student();
$student1->id = 1;
$student1->name = "John";
$student1->Display();

?>