<?php

namespace PhpCodeWars\ReversedSequence;

class ReversedSequence
{
    /**
     * @param int $number
     * @return array
     */
    final public function reverseSequence(int $number): array
    {
        return range($number, 1);
    }
}