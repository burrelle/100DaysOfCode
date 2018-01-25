<?php



class PrimeFactors
{
  /**
   * generate
   *
   * @param mixed $number
   * @return array $primes
   */

  public function generate($number)
  {
    $primes = [];
    
    for($canidate = 2; $number > 1; ++$canidate){
      for(; $number % $canidate == 0; $number /= $canidate){
        $primes[] = $canidate; 
      }
    }
    
    return $primes;
  }
}
