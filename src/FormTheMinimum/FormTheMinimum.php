<?php

namespace PhpCodeWars\FormTheMinimum;

class FormTheMinimum
{
    /**
     * @param array $numbers
     * @return int
     */
    public function minValue(array $numbers): int
    {
        sort($numbers);

        return intval(implode('', array_unique($numbers)));
    }
}