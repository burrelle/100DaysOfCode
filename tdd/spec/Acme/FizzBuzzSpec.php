<?php

namespace spec\Acme;

use Acme\FizzBuzz;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FizzBuzzSpec extends ObjectBehavior
{
    function it_returns_fizz_for_3(){
        $this->readout([3])->shouldReturn(["fizz"]);
    }

    function it_returns_buzz_for_5(){
        $this->readout([5])->shouldReturn(["buzz"]);
    }

    function it_returns_fizz_buzz_for_15(){
        $this->readout([15])->shouldReturn(["fizz buzz"]);
    }

    function it_returns_2_for_2(){
        $this->readout([2])->shouldReturn([2]);
    }

    function it_returns_fizz_for_6(){
        $this->readout([6])->shouldReturn(["fizz"]);
    }

    function it_returns_1_fizz_fizz_for_1_3_9(){
        $this->readout([1, 3, 9])->shouldReturn([1, "fizz", "fizz"]);
    }
}
