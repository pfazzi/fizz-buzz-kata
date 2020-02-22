<?php

namespace Pfazzi\FizzBuzzKata;

class Kata
{
    public function print(int $number): string
    {
        if ($number % 3 === 0 && $number % 5 === 0) {
            return 'FizzBuzz';
        } elseif ($number % 3 === 0) {
            return 'Fizz';
        } elseif ($number % 5 === 0) {
            return 'Buzz';
        } else {
            return (string) $number;
        }
    }
}
