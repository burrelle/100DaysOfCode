<?php

class BowlingGame
{
  protected $pins = 0;

 /**
  * roll
  *
  * @param int $pins
  * @return void
  */
  function roll($pins)
  {
   
    $this->guardAgainstInvalidRoll($pins);

    $this->rolls[] = $pins;
  }

 /**
  * score
  *
  * @return int
  */
  function score()
  {
    $score = 0;
    $roll = 0;

    for ($frame=1; $frame <= 10  ; $frame++) { 
      if($this->isStrike($roll))
      {
        $score += 10 + $this->strikeBonus($roll);
        $roll += 1;
      }
      elseif($this->isSpare($roll))
      {
        $score += 10 + $this->spareBonus($roll);  
        $roll += 2;
      }
      else
      {
        $score += $this->getDefaultFrameScore($roll);
        $roll += 2;
      } 
      

    }
    return $score;
  }

 /**
  * isStrike
  *
  * @param int $roll
  * @return int
  */
  function isStrike($roll)
  {
    return $this->rolls[$roll] == 10;
  }

 /**
  * isSpare
  *
  * @param int $roll
  * @return int
  */
  function isSpare($roll)
  {
    return $this->rolls[$roll] + $this->rolls[$roll + 1] == 10;
  }

 /**
  * getDefaultFrameScore
  *
  * @param int $roll
  * @return int
  */
  function getDefaultFrameScore($roll)
  {
    return $this->rolls[$roll] + $this->rolls[$roll + 1];
  }

 /**
  * strikeBonus
  *
  * @param int $roll
  * @return int
  */
  function strikeBonus($roll)
  {
    return $this->rolls[$roll + 1] + $this->rolls[$roll + 2];
  }

 /**
  * spareBonus
  *
  * @param int $roll
  * @return int
  */
  function spareBonus($roll)
  {
    return $this->rolls[$roll + 2];
  }

 /**
  * guardAgainstInvalidRoll
  *
  * @param int $pins
  * @return void
  */
  function guardAgainstInvalidRoll($pins)
  {
    if($pins < 0)
    {
      throw new InvalidArgumentException;
    }
  }
}
