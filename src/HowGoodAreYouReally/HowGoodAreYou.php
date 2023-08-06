<?php

namespace PhpCodeWars\HowGoodAreYouReally;

class HowGoodAreYou
{
    /**
     * @param int[] $classPoints
     * @param int $yourPoints
     * @return bool
     */
    final public function betterThanAverage(array $classPoints, int $yourPoints): bool
    {
        return array_sum($classPoints) / count($classPoints) < $yourPoints;
    }
}
