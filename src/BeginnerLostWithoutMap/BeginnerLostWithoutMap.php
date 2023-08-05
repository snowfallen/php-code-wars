<?php

namespace PhpCodeWars\BeginnerLostWithoutMap;

class BeginnerLostWithoutMap
{
    /**
     * @param int[] $numbers
     * @return array
     */
    final public function maps(array $numbers): array
    {
        return array_map(static fn($number) => $number * 2, $numbers);
    }
}
