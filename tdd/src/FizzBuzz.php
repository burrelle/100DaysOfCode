<?php

class FizzBuzz
{
  function readout($number){
    $result = [];
    for( $i = 0 ; $i < count($number); ++$i)
    {
      if ($number[$i] >= 0){
          if($number[$i] % 3 == 0 and $number[$i] % 5 == 0){
            $result[] = "fizz buzz";
          }
      
          elseif($number[$i] % 3 == 0){
            $result[] = "fizz";
          }

          elseif($number[$i] % 5 == 0){
            $result[] = "buzz";
          }
          else
            $result[] = $number[$i];
      }  
    }
    return $result;
  }
}