<?php

namespace PhpCodeWars\SquareSum;

class SquareSum
{

    /**
     * @param int[] $numbers
     * @return int
     */
    final public function square_sum(array $numbers): int
    {
        return array_reduce($numbers, static fn($accumulator, $number) => $accumulator + $number ** 2, 0);
    }
}
