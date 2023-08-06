<?php

namespace PhpCodeWars\IsHeGonnaSurvive;

class IsHeGonnaSurvive
{
    /**
     * @param int $bullets
     * @param int $dragons
     * @return bool
     */
    final public function isHeGonnaSurvive(int $bullets, int $dragons): bool
    {
        return $bullets / 2 >= $dragons;
    }
}
