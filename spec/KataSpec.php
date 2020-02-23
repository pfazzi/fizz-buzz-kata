<?php

namespace spec\Pfazzi\FizzBuzzKata;

use Pfazzi\FizzBuzzKata\Kata;
use PhpSpec\ObjectBehavior;

class KataSpec extends ObjectBehavior
{
    private const FIZZ_NUMBER = 7;
    private const BUZZ_NUMBER = 11;

    function let(\Pfazzi\FizzBuzzKata\Cache $cache)
    {
        $this->beConstructedWith($cache, self::FIZZ_NUMBER, self::BUZZ_NUMBER);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Kata::class);
    }

    function it_returns_Fizz_instead_of_the_number_for_multiples_of_three()
    {
        $this->print(self::FIZZ_NUMBER * 2)->shouldReturn('Fizz');
    }

    function it_returns_Buzz_instead_of_the_number_for_multiples_of_five()
    {
        $this->print(self::BUZZ_NUMBER * 8)->shouldReturn('Buzz');
    }

    function it_returns_FizzBuzz_instead_of_the_number_which_are_multiples_of_both_three_and_five()
    {
        $this->print(self::BUZZ_NUMBER * self::FIZZ_NUMBER * 4)->shouldReturn('FizzBuzz');
    }

    function it_returns_the_number_otherwise()
    {
        $number = self::BUZZ_NUMBER * self::FIZZ_NUMBER + 1;

        $this->print($number)->shouldReturn((string) $number);
    }

    function it_attempts_to_retrieve_results_from_cache(\Pfazzi\FizzBuzzKata\Cache $cache)
    {
        $cache->has(9)->willReturn(true)->shouldBeCalled();

        $cache->get(9)->willReturn('Buzz')->shouldBeCalled();

        $this->print(9)->shouldReturn('Buzz');
    }

    function it_caches_results(\Pfazzi\FizzBuzzKata\Cache $cache)
    {
        $cache->has(9)->willReturn(false)->shouldBeCalled();

        $cache->set(9, '9')->shouldBeCalled();

        $this->print(9)->shouldReturn('9');
    }
}
