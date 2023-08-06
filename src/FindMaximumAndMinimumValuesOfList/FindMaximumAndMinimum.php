<?php

namespace PhpCodeWars\FindMaximumAndMinimumValuesOfList;

class FindMaximumAndMinimum
{
    /**
     * @param int[] $numbers
     * @return int
     */
    final public function findMaximum(array $numbers): int
    {
        return max($numbers);
    }

    /**
     * @param int[] $numbers
     * @return int
     */
    final public function findMinimum(array $numbers): int
    {
        return min($numbers);
    }
}
