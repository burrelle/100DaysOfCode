<?php

interface Logger {
  public function execute($message);
}

class FileLogger implements Logger {
  public function execute($message){
    var_dump('log the message to a file: ' .$message);
  }
}

class DatabaseLogger implements Logger {
  public function execute($message){
    var_dump('log the message to a database: ' .$message);
  }
}

// ...

class UsersController {
  protected $logger;  

  public function __construct(Logger $logger) {
    $this->logger = $logger;
  }

  public function show(){
    $user = 'JohnDoe';
    $this->logger->execute($user);
  }
}

$controller = new UsersController(new DatabaseLogger);
$controller->show();