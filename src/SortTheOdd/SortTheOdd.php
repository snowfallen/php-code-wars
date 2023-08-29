<?php

namespace PhpCodeWars\SortTheOdd;

class SortTheOdd
{
    public function sortArray(array $numbers): array
    {
        $oddNumbers = array_filter($numbers, static fn($number) => $number % 2 !== 0);
        rsort($oddNumbers);

        for ($i = 0; $i < count($numbers); $i++) {
            if ($numbers[$i] % 2 !== 0) $numbers[$i] = array_pop($oddNumbers);
        }

        return $numbers;
    }
}
