<?php

namespace PhpCodeWars\ANeedleHaystack;

class NeedleHaystack
{
    public function findNeedle(array $words): string
    {
        $needleIndex = 0;

        for ($i = 0; $i < count($words); $i++) {
            if ($words[$i] === 'needle') {
                $needleIndex = $i;
            }
        }

        return 'found the needle at position ' . $needleIndex;
    }
}