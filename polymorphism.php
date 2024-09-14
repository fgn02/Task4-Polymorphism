<?php

abstract class Animal {
   
    abstract public function makeSound();
}


class Dog extends Animal {
    public function makeSound() {
        echo "Dog: Woof! Woof!\n";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "Cat: Meow! Meow!\n";
    }
}


class Cow extends Animal {
    public function makeSound() {
        echo "Cow: Moo! Moo!\n";
    }
}


$animals = [
    new Dog(),
    new Cat(),
    new Cow()
];


foreach ($animals as $animal) {
    $animal->makeSound();
}
