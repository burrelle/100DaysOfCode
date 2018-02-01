<?php

class Task {
  public $description;
  public $title;
  public $completed = false;

  public function __construct($title, $description) {
    $this->$title = $title;
    $this->$description = $description;
  }

  public function complete(){
    $this->completed = true;
  }
}

$task = new Task('Learn OOP', 'Learn oop through the laracast bootcamp');
$task->complete();

var_dump($task);