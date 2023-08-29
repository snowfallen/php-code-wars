<?php

namespace PhpCodeWars\FormTheLargestRetired;

class FormTheLargest
{
    /**
     * @param int $number
     * @return int
     */
    public function maxNumber(int $number): int
    {
        $digits = str_split(strval($number));
        rsort($digits);

        return intval(implode('', $digits));
    }
}