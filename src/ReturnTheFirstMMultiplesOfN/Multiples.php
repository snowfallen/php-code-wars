<?php

namespace PhpCodeWars\ReturnTheFirstMMultiplesOfN;

class Multiples
{
    /**
     * @param int $m
     * @param float $n
     * @return array
     */
    public function multiples(int $m, float $n): array
    {
        return array_map(static fn($i) => $n * $i, range(1, $m));
    }
}