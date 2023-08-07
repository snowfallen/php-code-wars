<?php

namespace PhpCodeWars\HighestLowest;

class HighestAndLowest
{
    /**
     * @param string $numbers
     * @return string
     */
    final public function highAndLow(string $numbers): string
    {
        return max(explode(' ', $numbers)) . ' ' . min(explode(' ', $numbers));
    }
}
