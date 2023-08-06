<?php

namespace PhpCodeWars\ReverseWords;

class ReverseWords
{
    /**
     * @param string $string
     * @return string
     */
    final public function reverseWords(string $string): string
    {
        return implode(' ', array_map('strrev', explode(' ', $string)));
    }
}
