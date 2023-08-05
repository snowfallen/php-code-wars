<?php

namespace PhpCodeWars\ReturningStrings;

class ReturningStrings
{
    /**
     * @param string $name
     * @return string
     */
    final public function greet(string $name): string
    {
        return "Hello, $name how are you doing today?";
    }
}
