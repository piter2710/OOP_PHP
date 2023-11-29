<?php
class University{
    public $UniversityName;
    public $UniversityAddress;
    public $LicenseNo;

    function __construct($UniversityName, $UniversityAddress, $LicenseNo){
        $this->UniversityName = $UniversityName;
        $this->UniversityAddress = $UniversityAddress;
        $this->LicenseNo = $LicenseNo;
    }
function University_Info(){
    echo "University Name: ". $this->UniversityName. "\n";
    echo "University Address: ". $this->UniversityAddress. "\n";
    echo "License No: ". $this->LicenseNo. "\n";
}
}






?>