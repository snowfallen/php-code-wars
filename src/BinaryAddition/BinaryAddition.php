<?php

namespace PhpCodeWars\BinaryAddition;

class BinaryAddition
{
    /**
     * @param int $firstNumber
     * @param int $secondNumber
     * @return string
     */
    final public function binaryAddition(int $firstNumber, int $secondNumber): string
    {
        return decbin($firstNumber + $secondNumber);
    }
}
