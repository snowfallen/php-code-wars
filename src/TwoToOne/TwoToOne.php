<?php

namespace PhpCodeWars\TwoToOne;

class TwoToOne
{
    /**
     * @param string $a
     * @param string $b
     * @return string
     */
    public function longest(string $a, string $b): string
    {
        $uniqueDigits = array_unique(str_split($a . $b));
        sort($uniqueDigits);

        return implode('', $uniqueDigits);
    }
}