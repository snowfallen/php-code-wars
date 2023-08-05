<?php

namespace PhpCodeWars\SumOfPositive;

class SumOfPositive
{
    /**
     * @param int[] $numbers
     * @return int
     */
    final public function positiveSum(array $numbers): int
    {
        return array_sum(array_filter($numbers, static fn($number) => $number > 0));
    }
}
