<?php

namespace PhpCodeWars\RemoveFirstAndLastCharacter;

class RemoveFirstAndLastCharacter
{
    /**
     * @param string $string
     * @return string
     */
    final public function remove_char(string $string): string
    {
        return substr($string, 1, -1);
    }
}
