<?php

class Person{

  private $name;
  private $age;

  public function __construct($name) {
    $this->name = $name;
  }

  public function setAge($age){
    if($age < 18){
      throw new Exception("Person is not old enough");
    }
    $this->age = $age;
  }

  public function getAge(){
    return $this->age * 365; // Get age in days.
  }
}

$john = new Person('John Doe');
$john->setAge(30);

var_dump($john->getAge());