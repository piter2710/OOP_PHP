<?php
class Student{
    private $name;
    private $id;
    private $age;
    private $class;

    function __construct($id, $name, $age, $class)
    {
        $this->name = $name;
        $this->id = $id;
        $this->age = $age;
        $this->class = $class;
    }
     function getId(){
        return $this->id;
    }
     function setId($id){
        $this->id = $id;
    }
     function setAge($age){
        $this->age = $age;
    }
     function getAge(){
        return $this->age;
    }

     function setName($name){
        $this->name = $name;
    }
     function getName(){
        return $this->name;
    }

     function setClass($class){
        $this->class = $class;
    }
     function getClass(){
        return $this->class;
    }

     function display(){
        echo $this->id;
        echo PHP_EOL;
        echo $this->name;
        echo PHP_EOL;
        echo $this->age;
        echo PHP_EOL;
        echo $this->class;
        echo PHP_EOL;
        echo "------------------------------------- \n";
    }
}


$student1 = new Student(101, "John", 25, "10th");
$student1->display();
$student1->setId(102);
$student1->setAge(26);
$student1->setClass("12th");
$student1->setName("Jarek");
$student1->display();

?>