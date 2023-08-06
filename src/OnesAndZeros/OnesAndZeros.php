<?php

namespace PhpCodeWars\OnesAndZeros;

class OnesAndZeros
{
    /**
     * @param array $numbers
     * @return int
     */
    final public function binaryArrayToNumber(array $numbers): int
    {
        return bindec(implode('', $numbers));
    }
}