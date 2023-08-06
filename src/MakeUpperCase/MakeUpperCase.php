<?php

namespace PhpCodeWars\MakeUpperCase;

class MakeUpperCase
{
    /**
     * @param string $string
     * @return string
     */
    final public function makeUpperCase(string $string): string
    {
        return strtoupper($string);
    }
}
