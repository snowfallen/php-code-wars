<?php

declare(strict_types=1);

namespace PhpCodeWars\OppositeNumber;

class OppositeNumber
{
    /**
     * @param int $number
     * @return int
     */
    public function opposite(int $number): int
    {
        return $number * -1;
    }
}