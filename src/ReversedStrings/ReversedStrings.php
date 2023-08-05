<?php

namespace PhpCodeWars\ReversedStrings;

class ReversedStrings
{
    /**
     * @param string $string
     * @return string
     */
    final public function stringReverse(string $string): string
    {
        return strrev($string);
    }
}
