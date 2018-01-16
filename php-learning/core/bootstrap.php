<?php

App::bind('config', $config = require 'config.php');

App::bind('database', new QueryBuilder(
  Connection::make($config['database'])
));

function view($name, $data = []){
  extract($data);
  return require "views/{$name}.view.php";
}

function redirect($path){
  header("Location: /{$path}");
}