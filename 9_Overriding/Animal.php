<?php

class Animal {
    // Method in the superclass
    public function makeSound() {
        echo "Generic Animal Sound\n";
    }
}

class Dog extends Animal {
    // Method overriding in the subclass
    public function makeSound() {
        echo "Bark\n";
    }
}

// Creating instances of the classes
$genericAnimal = new Animal();
$dog = new Dog();

// Calling the overridden methods
$genericAnimal->makeSound(); // Output: Generic Animal Sound
$dog->makeSound(); // Output: Bark

?>
