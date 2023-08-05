<?php

namespace PhpCodeWars\BeginnerReduceButGrow;

class BeginnerReduceButGrow
{
    /**
     * @param int[] $numbers
     * @return int
     */
    final public function grow(array $numbers): int
    {
        return array_product($numbers);
    }
}