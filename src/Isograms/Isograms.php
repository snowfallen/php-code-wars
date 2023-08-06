<?php

namespace PhpCodeWars\Isograms;

class Isograms
{
    /**
     * @param string $string
     * @return bool
     */
    final public function isIsogram(string $string): bool
    {
        $letters = str_split(strtolower($string));

        return implode('', array_unique($letters)) === implode('', $letters);
    }
}
