<?php

class StringCalculator
{
  const MAX_NUMBER_ALLOWED = 1000;

 /**
  * add
  *
  * @param string $numbers
  * @return int
  */
  function add($numbers)
  {
    if($numbers == '')
    {
      return 0;
    }

    $numbers = $this->parseNumbers($numbers);
    
    $solution = 0;

    foreach ($numbers as $number) 
    {
      $this->guardAgainstInvalidNumber($number);
      
      if($number >= self::MAX_NUMBER_ALLOWED) continue;
      
      $solution += $number;
    }

    return $solution;
  }

  /**
   * guardAgainstInvalidNumber
   *
   * @param mixed $number
   * @return void
   */
  public function guardAgainstInvalidNumber($number)
  {
    if($number < 0) throw new InvalidArgumentException("Invalid number provided: {$number}");
  }

  /**
   * parseNumbers
   *
   * @param string $numbers
   * @return array
   */
  public function parseNumbers($numbers)
  {
    return array_map('intval', preg_split('/\s*(,|\\\n)\s*/', $numbers));
  }
}
