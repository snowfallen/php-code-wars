<?php

namespace PhpCodeWars\KeepHydrated;

class KeepHydrated
{
    /**
     * @param float $time
     * @return int
     */
    final public function litres(float $time): int
    {
        return floor($time / 2);
    }
}
