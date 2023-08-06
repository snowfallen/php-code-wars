<?php

namespace PhpCodeWars\TotalAmountOfPoints;

class TotalAmount
{
    /**
     * @param array $games
     * @return int
     */
    final public function points(array $games): int
    {
        $totalPoints = 0;
        foreach ($games as $game) {
            list($x, $y) = explode(':', $game);
            if ($x > $y) {
                $totalPoints += 3;
            } elseif ($x === $y) {
                $totalPoints++;
            }
        }

        return $totalPoints;
    }
}
