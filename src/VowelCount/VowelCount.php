<?php

namespace PhpCodeWars\VowelCount;

class VowelCount
{
    /**
     * @param string $string
     * @return int
     */
    final public function getCount(string $string): int
    {
        return preg_match_all('/[aeuoi]/i', $string);
    }
}
