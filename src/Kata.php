<?php

namespace Pfazzi\FizzBuzzKata;

class Kata
{
    private int $fizzNumber;
    private int $buzzNumber;

    private Cache $cache;

    public function __construct(Cache $cache, int $fizzNumber, int $buzzNumber)
    {
        $this->fizzNumber = $fizzNumber;
        $this->buzzNumber = $buzzNumber;
        $this->cache = $cache;
    }

    public function print(int $number): string
    {
        if ($this->cache->has($number)) {
            return $this->cache->get($number);
        }

        $conversionResult = $this->convertNumber($number);

        $this->cache->set($number, $conversionResult);

        return $conversionResult;
    }

    private function convertNumber(int $number): string
    {
        if ($number % $this->fizzNumber === 0 && $number % $this->buzzNumber === 0) {
            $conversionResult = 'FizzBuzz';
        } elseif ($number % $this->fizzNumber === 0) {
            $conversionResult = 'Fizz';
        } elseif ($number % $this->buzzNumber === 0) {
            $conversionResult = 'Buzz';
        } else {
            $conversionResult = (string)$number;
        }

        return $conversionResult;
}
}
