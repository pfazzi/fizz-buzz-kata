<?php

namespace spec\Pfazzi\FizzBuzzKata;

use Pfazzi\FizzBuzzKata\Kata;
use PhpSpec\ObjectBehavior;

class KataSpec extends ObjectBehavior
{
    private const FIZZ_NUMBER = 7;
    private const BUZZ_NUMBER = 11;

    function let()
    {
        $this->beConstructedWith(self::FIZZ_NUMBER, self::BUZZ_NUMBER);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Kata::class);
    }

    function it_returns_fizz_instead_of_the_number_for_multiples_of_three()
    {
        $this->print(self::FIZZ_NUMBER * 2)->shouldReturn('Fizz');
    }

    function it_returns_buzz_instead_of_the_number_for_multiples_of_five()
    {
        $this->print(self::BUZZ_NUMBER * 8)->shouldReturn('Buzz');
    }

    function it_returns_fizz_buzz_instead_of_the_number_which_are_multiples_of_both_three_and_five()
    {
        $this->print(self::BUZZ_NUMBER * self::FIZZ_NUMBER * 4)->shouldReturn('FizzBuzz');
    }

    function it_returns_the_number_otherwise()
    {
        $number = self::BUZZ_NUMBER * self::FIZZ_NUMBER + 1;

        $this->print($number)->shouldReturn((string) $number);
    }
}
