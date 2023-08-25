<?php

namespace PhpCodeWars\Sheeps;

class Sheeps
{
    /**
     * @param int $number
     * @return string
     */
    public function countsheep(int $number): string
    {
        $sheeps = '';

        for ($i = 1; $i <= $number; $i++) {
            $sheeps .= "$i sheep...";
        }

        return $sheeps;
    }
}