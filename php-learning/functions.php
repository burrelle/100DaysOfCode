<?php

function dd($input){
  echo '<pre>';
  die(var_dump($input)) ;
  echo '</pre>';
}

function connectToDb(){
	$a = 'mysql:host=127.0.0.1;dbname=mytodo';
	$b = 'root';
	$c = '';

	try{
		return new PDO($a, $b, $c);
	}
	catch(PDOException $e){
		die($e->get_message());
	}
}

function fetchAllTasks($pdo){
	$statement = $pdo->prepare('select * from todos');	
	$statement->execute();
	return $statement->fetchAll(PDO::FETCH_CLASS,'Task');
}