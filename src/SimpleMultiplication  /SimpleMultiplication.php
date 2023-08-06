<?php

namespace PhpCodeWars\SimpleMultiplication;

class SimpleMultiplication
{
    /**
     * @param int $number
     * @return int
     */
    final public function simpleMultiplication(int $number): int
    {
        return $number % 2 === 0 ? $number * 8 : $number * 9;
    }
}
