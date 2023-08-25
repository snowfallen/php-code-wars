<?php

namespace PhpCodeWars\ANeedleHaystack;

class NeedleHaystack
{
    public function findNeedle(array $words): string
    {
        return "found the needle at position " . array_search("needle", $words);
    }
}