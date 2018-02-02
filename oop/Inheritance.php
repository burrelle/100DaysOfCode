<?php

class Mother{
  public function getEyeCount(){
    return 2;
  }
}

class Child extends Mother{

}

(new Child)->getEyeCount();

// class Post extends Eloquent {
//   // Laravel specific example.
// }

abstract class Shape{
  protected $color;
  public function __construct($color = 'red') // Default color
  {
    $this->color = $color;
  }

  public function getColor(){
    return $this->color;
  }

  abstract protected function getArea();
}

class Square extends Shape {
  protected $length = 4;
  public function getArea(){
    return pow($this->length, 2);
  }
}

class Triangle extends Shape {
  protected $base = 4;
  protected $height = 7;
  
  // Overide function.
  public function getArea(){
    return .5 * $this->base * $this->height;
  }
}

class Circle extends Shape {
  protected $radius;
  public function getArea(){
    return pi * pow($this->radius, 2);
  }
}

var_dump(new Square());

abstract class Mailer {
  public function send($to, $from, $body){

  }
}

class UserMail extends Mailer {
  public function sendWelcomeEmail(User $user)
  {
    return $this->send($user->email, ..., ...);
  }
}

class AdminMail extends Mailer {

}