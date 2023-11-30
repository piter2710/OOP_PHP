<?php

trait Message{
    public function Name($name){
        echo "This is name of object ". $name . PHP_EOL;
    }
    function isValid($is){
        if($is){
         echo "This object is valid". PHP_EOL;
        }else{
            echo "This object is not valid". PHP_EOL;
        }
    }
}

class Student{
    use Message;

    public $name;
    public $isVal;

    function __construct(string $name, bool $isVal){
        $this->name = $name;
        $this->isVal = $isVal;
    }
    function __get($name)
    {
        if ($name == "name"){
            return $this->name;
        }
        if ($name == "isVal"){
            return $this->isVal;
        }
    }
}
$student1 = new Student("John", false);
$student1->Name("John");
$student1->Name($student1->Name);
$student1->isValid($student1->isVal);
