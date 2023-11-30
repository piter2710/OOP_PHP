<?php
class Doctor{
public $name;
public $description;
function __construct($name, $description){
    $this->name = $name;
    $this->description = $description;
}
function Who(){
    echo "This a doctor :) ";
}
}
class Specialist extends Doctor{

    function Who(){
        echo "This a specialist :) ";
    }
}
$doctor = new Doctor("John", "He is indeed a Doctor");
$specialist = new Specialist("Jane", "She is indeed a Specialist");
$doctor->Who();
echo PHP_EOL;
$specialist->Who();


?>