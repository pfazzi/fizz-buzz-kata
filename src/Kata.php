<?php

namespace Pfazzi\FizzBuzzKata;

class Kata
{
    private int $fizzNumber;
    private int $buzzNumber;

    public function __construct(int $fizzNumber, int $buzzNumber)
    {
        $this->fizzNumber = $fizzNumber;
        $this->buzzNumber = $buzzNumber;
    }

    public function print(int $number): string
    {
        if ($number % $this->fizzNumber === 0 && $number % $this->buzzNumber === 0) {
            return 'FizzBuzz';
        } elseif ($number % $this->fizzNumber === 0) {
            return 'Fizz';
        } elseif ($number % $this->buzzNumber === 0) {
            return 'Buzz';
        } else {
            return (string) $number;
        }
    }
}
