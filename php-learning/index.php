<?php
require "functions.php";
/**
* Task class
*/
class Task {
	public $description;
	public $completed = false;
	public function __construct($description)
	{
		$this->description = $description;
	}
	public function complete()
	{
		$this->completed = true;
	}
	protected function isComplete ()
	{
		return $this->completed;
	}
}
$tasks = [
	new Task('Go to the store'),
	new Task('Finish my screen cast'),
	new Task('Clean the house')
]; 
$tasks[0]->complete();
//dd($tasks);
require 'index.view.php';