<?php

namespace PhpCodeWars\CountDivisorsNumber;

class CountDivisorsNumber
{
    /**
     * @param int $number
     * @return int
     */
    public function divisors(int $number): int
    {
        return count(array_filter(range(1, $number), static fn($i) => $number % $i === 0));
    }
}