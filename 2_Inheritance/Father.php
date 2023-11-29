<?php
class Father{
    public $fatherName;
    public $fatherSurname;
    public $fatherAge;
    public $fatherJob;

    function __construct($fatherName, $fatherSurname, $fatherAge, $fatherJob){
        $this->fatherName = $fatherName;
        $this->fatherSurname = $fatherSurname;
        $this->fatherAge = $fatherAge;
        $this->fatherJob = $fatherJob;
    }
    function Father_Info(){
        echo "Father Name: ". $this->fatherName. "\n";
        echo "Father Surname: ". $this->fatherSurname. "\n";
        echo "Father Age: ". $this->fatherAge. "\n";
        echo "Father Job: ". $this->fatherJob. "\n";
    }
    function Job_Change($job){
        $this->fatherJob = $job;
    }
    function Work_where(){
        echo "Job Name: ".$this->fatherJob. "\n";
    }
    
}
class Son extends Father{
    public $sonName;
    public $sonSurname;
    public $sonAge;
    public $sonJob;
    function __construct($sonName, $sonSurname, $sonAge, $sonJob, Father $father){
        $this->sonName = $sonName;
        $this->sonSurname = $sonSurname;
        $this->sonAge = $sonAge;
        $this->sonJob = $sonJob;
        $this->fatherName = $father->fatherName;
        $this->fatherSurname = $father->fatherSurname;
        $this->fatherAge = $father->fatherAge;
        $this->fatherJob = $father->fatherJob;
    }

    function Son_Info(){
        echo "Son Name: ".$this->sonName. "\n";
        echo "Son Surname: ".$this->sonSurname. "\n";
        echo "Son Age: ".$this->sonAge. "\n";
        echo "Son Job: ".$this->sonJob. "\n";

    }
    function Family_Info(){
        echo "Father Name: ". $this->fatherName. "\n";
        echo "Father Surname: ". $this->fatherSurname. "\n";
        echo "Father Age: ". $this->fatherAge. "\n";
        echo "Father Job: ". $this->fatherJob. "\n";
        echo "Son Name: ". $this->sonName. "\n";
        echo "Son Surname: ". $this->sonSurname. "\n";
        echo "Son Age: ". $this->sonAge. "\n";
        echo "Son Job: ". $this->sonJob. "\n";
    }
    
}
$father1 = new Father("John", "Doe", 37, "Teacher");
$son1 = new Son("Andrew", "Doe", 11, "None", $father1);


$father1->Father_Info();
$father1->Work_where();
$son1->Family_Info();
$son1->Son_Info();



?>