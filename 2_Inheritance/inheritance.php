<?php
class University{
    public $UniversityName = "Boston State University";
    function Hello_University(){
        echo "Hello ". $this->UniversityName. "\n";
    }


}


class Teacher extends University{

    public $teachName = "Jane";
    function Hello_Teacher(){
        echo "Hello ". $this->teachName. "\n";
    }

}

$teacher1 = new Teacher("Jane",28,"English");
$teacher1->Hello_Teacher();
$teacher1->Hello_University();

?>