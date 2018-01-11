<?php

function dd($input){
  echo '<pre>';
  die(var_dump($input)) ;
  echo '</pre>';
}

function ageVerify($age){
  if($age >= 21){
    echo 'Come on in';
  }  
  else{
    echo 'You are not old enough';
  }
}