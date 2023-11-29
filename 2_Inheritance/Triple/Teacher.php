<?php
class Teacher extends University{
    public $teachName;
    public $teachAge;
    public $subject;

    function __construct($teachName, $teachAge, $subject, University $University){
        $this->teachName = $teachName;
        $this->teachAge = $teachAge;
        $this->subject = $subject;

        $this->UniversityName = $University->UniversityName;
        $this->UniversityAddress = $University->UniversityAddress;
        $this->LicenseNo = $University->LicenseNo;
    }
    function Teacher_Info(){
        echo "Teacher Name: ". $this->teachName. "\n";
        echo "Teacher Age: ". $this->teachAge. "\n";
        echo "Subject: ". $this->subject. "\n";
    }


}



?>