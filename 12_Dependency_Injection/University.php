<?php
class University{
    public $UniversityName;
    public $dateOfCreating;
    function __construct(string $UniversityName, string $dateOfCreating){
        $this->UniversityName = $UniversityName;
        $this->dateOfCreating = $dateOfCreating;
    }
    function Display(){
        echo "University Name: ". $this->UniversityName. PHP_EOL;
        echo "Date of Creating: ". $this->dateOfCreating. PHP_EOL;
    }
    function Display_Name(){
        echo "University Name: ". $this->UniversityName. PHP_EOL;
    }
}
class Student{

    public $StudentName;
    public $University;

    function __construct(string $StudentName, University $University){
        $this->StudentName = $StudentName;
        $this->University = $University;
    }
    function Display(){
        echo "Student Name: ". $this->StudentName. PHP_EOL;
        $this->University->Display_Name();
    }
}
$University1 = new University("Oxford", "2020-01-01");
$Student1 = new Student("John", $University1);
$Student1->Display();




?>