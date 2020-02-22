<?php

namespace spec\Pfazzi\FizzBuzzKata;

use Pfazzi\FizzBuzzKata\Kata;
use PhpSpec\ObjectBehavior;

class KataSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Kata::class);
    }

    function it_returns_fizz_instead_of_the_number_for_multiples_of_three()
    {
        $this->print(3 * 2)->shouldReturn('Fizz');
    }

    function it_returns_buzz_instead_of_the_number_for_multiples_of_five()
    {
        $this->print(5 * 8)->shouldReturn('Buzz');
    }

    function it_returns_fizz_buzz_instead_of_the_number_which_are_multiples_of_both_three_and_five()
    {
        $this->print(5 * 3 * 4)->shouldReturn('FizzBuzz');
    }

    function it_returns_the_number_otherwise()
    {
        $this->print(8)->shouldReturn('8');
    }
}
