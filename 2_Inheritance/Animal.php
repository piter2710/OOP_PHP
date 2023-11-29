<?php
class Animal{
    public $isHunter;
    public $name;
    public $hasSound;

    function __construct($isHunter, $name, $sound){
        $this->isHunter = $isHunter;
        $this->name = $name;
        $this->hasSound = $sound;
    }
    function doesHunting(){
        if($this->isHunter){
            echo "The animal is a hunter\n";
        }else{
            echo "The animal is not a hunter\n";}
        }
}
class Dog extends Animal{
    public $breed;
    function __construct($breed, Animal $animal){
        $this->breed = $breed;
        $this->name = $animal->name;
        $this->hasSound = $animal->hasSound;
        $this->isHunter = $animal->isHunter;
    }
    function makeSound(){
        if ($this->hasSound){
            echo "Dog makes sound\n";
        }else{
            echo "Dog does not make sound\n";
        }
}
}
class Tiger extends Animal{
    public $color;

    function __construct($color, Animal $animal){
        $this->color = $color;
        $this->name = $animal->name;
        $this->hasSound = $animal->hasSound;
        $this->isHunter = $animal->isHunter;
        
    }
    function makeSound(){
        if ($this->hasSound){
            echo "Tiger makes sound\n";
        }else{
            echo "Tiger does not make sound\n";
        }
}

}
$animal1 = new Animal(false, "Dog", true);
$animal1->doesHunting();
$animal2 = new Animal(true, "Tiger", false);
$animal2->doesHunting();
$dog1 = new Dog("Golden Retriever", $animal1);
$dog1->makeSound();
$dog1->doesHunting();
$tiger = new Tiger("White", $animal2);
$tiger->makeSound();
$tiger->doesHunting();



?>
